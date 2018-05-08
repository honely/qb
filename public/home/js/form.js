// ***************表单显示

$('.show-btn').click(function() {
	$('.form-wrap').addClass('show');
});
$('.closebtn').click(function() {
	$(this).parents('.form-wrap').removeClass('show');
});

// 表单验证

function verification_mode1(id){
    var ch = $(id).find(".nickname").val();
    var dh = $(id).find(".phone").val();
    var address = $(id).find(".user-address").val(); 
    var area = $(id).find(".area").val();     
        if (ch =="" && dh =="" && address =="" && area =="") {
            alert("请输入您的称呼、电话号码、小区地址、房屋面积");
            event.preventDefault();
        }else if(area ==""){
            alert('请输入您的房屋面积！')
            event.preventDefault();
        }else if(address ==""){
            alert('请输入您的小区地址！')
            event.preventDefault();
        } else if(ch ==""){
            alert('请输入您的称呼！');
            event.preventDefault();
        }else if(dh ==""){
            alert('请输入您的手机号码！');
            event.preventDefault();
        }else if(dh.length !=11 || dh.substring(0,1)!=1  ){
            alert("输入的手机号码格式错误！");
            event.preventDefault();
        }
}

$("#form1 .subtn").click(function(){
    verification_mode1("#form1");
})
$(".form .subtn").click(function(){
    verification_mode1(".form");
})
$(".form-view .subtn1").click(function(){
    verification_mode1(".form-view");
})
$(".form-show .subtn").click(function(){
    verification_mode1(".form-show");
})
$(".form-rt .subtn2").click(function(){
    verification_mode1(".form-rt");
})
 
$(".form-quote .quote-btn").click(function(){
    verification_mode1(".form-quote");
})
$(".form-wraps .sub_btn").click(function(){
    verification_mode1(".form-wraps");
})

$(".show-btn").click(function(){
    var $vul=$(this).attr("data-layer");
    if($vul==1){
        $(".position-con").val("首页全房整装")
    }else if($vul==2){
        $(".position-con").val("首页实景配置")
    }else if($vul==3){
        $(".position-con").val("首页实景案例")
    }else if($vul==4){
        $(".position-con").val("定制整装实测面积")
    }else if($vul==5){
        $(".position-con").val("定制整装服务保障")
    }else if($vul==6){
        $(".position-con").val("定制整装空间配置")
    }else if($vul==7){
        $(".position-con").val("定制整装完工案例")
    }else if($vul==8){
        $(".position-con").val("量房设计增值服务");
        $(".form-titles h3").text("预约服务");
        $(".form-titles p").text("预约家装新风尚服务 品质生活触手可得");
    }else if($vul==9){
        $(".position-con").val("实景案例精选案例")
    }else if($vul==10){
        $(".position-con").val("页面侧边栏浮动预约")
    }
})