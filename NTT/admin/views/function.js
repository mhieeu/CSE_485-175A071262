$(document).ready(function(){
    $("#btnRegister").click(function(){
        var userI = $("#txtHoTen").val();
        var emailI = $("#txtEmail").val();
        var passI = $("#txtMatkhau").val();
        // var CpassI = $("#txtCMatkhau").val();
        $.ajax({
            url:"regist.php",
            type:"POST",
            data:{user:userI,email:emailI,matkhau:passI},
            success:function(data){
                if(data){
                    alert("Đăng kí thành công");
                }
            },
            error:function(){
                alert("Fail");
            }
        })
    })
})