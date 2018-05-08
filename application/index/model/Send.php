<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/25
 * Time: 17:47
 */
namespace app\index\model;
use think\Model;
use think\Validate;
class Send extends Model
{
    private $accessKeyId;
    private $accessKeySecret;
    private $PhoneNumbers;
    private $SignName;
    private $TemplateCode;
    private $TemplateParam;
    public function sms($data=[])
    {
        $validate = new Validate([
            ['param','require|array','参数必填|参数必须为数组'],
            ['mobile','require|/1[34578]{1}\d{9}$/','手机号错误|手机号错误'],
            ['template','require','模板id错误'],
        ]);
        if (!$validate->check($data)) {
            return $validate->getError();
        }
        define('TOP_SDK_WORK_DIR', CACHE_PATH.'sms_tmp/');
        define('TOP_SDK_DEV_MODE', false);
        vendor('alidayu.TopClient');
        vendor('alidayu.AlibabaAliqinFcSmsNumSendRequest');
        vendor('alidayu.RequestCheckUtil');
        vendor('alidayu.ResultSet');
        vendor('alidayu.TopLogger');
        $config = self::$sms_config;
        $c = new \TopClient;
        $c->appkey = $config['appkey'];
        $c->secretKey = $config['secretKey'];
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend('');
        $req->setSmsType('normal');
        $req->setSmsFreeSignName($config['FreeSignName']);
        $req->setSmsParam(json_encode($data['param']));
        $req->setRecNum($data['mobile']);
        $req->setSmsTemplateCode($data['template']);
        $result = $c->execute($req);
        $result = $this->_simplexml_to_array($result);
        if(isset($result['code'])){
            return $result['sub_code'];
        }
        return true;
    }

    private function _simplexml_to_array($obj)
    {//该函数用于转化阿里大于返回的数据，将simplexml格式转化为数组，方面后续使用
        if(count($obj) >= 1){
            $result = $keys = [];
            foreach($obj as $key=>$value){
                isset($keys[$key]) ? ($keys[$key] += 1) : ($keys[$key] = 1);
                if( $keys[$key] == 1 ){
                    $result[$key] = $this->_simplexml_to_array($value);
                }elseif( $keys[$key] == 2 ){
                    $result[$key] = [$result[$key], $this->_simplexml_to_array($value)];
                }else if( $keys[$key] > 2 ){
                    $result[$key][] = $this->_simplexml_to_array($value);
                }
            }
            return $result;
        }else if(count($obj) == 0){
            return (string)$obj;
        }
    }
}
?>