
一、前端页面获取网址入口信息：
（一）PHP方法：
页面调取的方法里面增加：
1.控制器：

//        获取当前页的完整网址；
        $httpUrl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $this->assign('httpUrl',$httpUrl);

2.显示页面增加内容：
        //表单提交的时候用 id= 'httpUrl' 的输入框来获取当前网页的完整网址：
        <input type="hidden" value="{$httpUrl}" id="httpUrl"/>
        
（二）js方法：
1.直接在条件表单的方法里面添加这行js代码：
var url = window.location.href;




//        'QUERY_STRING'
//query string（查询字符串），如果有的话，通过它进行页面访问。


二、前端页面读取后台图片路径；

__PUBLIC__{$ban.ba_img}