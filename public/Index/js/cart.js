$("#cart_add").click(function(e){
    var gid = ($(this).attr('data-gid'))
    $.ajax({
        url: '/cart/addcart?id=' + gid,
        type: 'get',
        dataType: 'json',
        success:function(d){
            console.log(d);
            if(d.errno==0)
            {
                alert("已加入购物车");
            }
        }
    });
});
