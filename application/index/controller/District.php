<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/20
 * Time: 16:40
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class District extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //区域管理
    public function district(){
        $provInfo=Db::table('qbl_province')->order('p_id desc')->select();
        $this->assign('provInfo',$provInfo);
        $cityInfo=Db::table('qbl_city')
            ->join('qbl_province','qbl_city.p_id = qbl_province.p_id')
            ->order('c_id desc')
            ->select();
        foreach($cityInfo as $k =>$v){
            $cityInfo[$k]['c_q_id']=explode(',',$v['c_q_id']);
            foreach ($cityInfo[$k]['c_q_id'] as $item =>$value ){
                $cityInfo[$k]['c_q_id'][$item]=Db::table('qbl_type')->where(['type_id' => $value])->find();
                $cityInfo[$k]['c_q_id'][$item]=$cityInfo[$k]['c_q_id'][$item]['type_name'];
            }
            $cityInfo[$k]['c_q_price']=explode(',',$v['c_q_price']);
        }
        foreach($cityInfo as $key => $val){
            $id_price = "";
            if(is_array($val['c_q_id']) && $val['c_q_id']){
                for($i = 0; $i < count($val['c_q_id']); $i++){
                    $id_price .= $val['c_q_id'][$i].'每平方米'.$val['c_q_price'][$i].'元<br/>';
                    $cityInfo[$key]['id_price_val'] = $id_price;
                }
            }else{
                $cityInfo[$key]['id_price_val'] = '暂时没有定价标准';
            }
        }
        $this->assign('prov',$provInfo);
        $this->assign('city',$cityInfo);
        return $this->fetch();
    }

}