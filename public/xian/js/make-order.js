function makeOrders(formId){
    $.ajax({
        'type':"post",
        'url':"<?=url('xian/index')?>",
        'data':$(formId).serialize(),
        'success':function (result) {
            if(result.code == '1'){
                layer.msg(result.msg, {icon: 1, time: 3000});
            }else if(result.code == '2'){
                layer.msg(result.msg, {icon: 2, time: 3000});
            }else if(result.code == '3'){
                layer.msg(result.msg, {icon: 3, time: 3000});
            }
        },
        'error':function (error) {
            console.log(error);
        }
    })
}