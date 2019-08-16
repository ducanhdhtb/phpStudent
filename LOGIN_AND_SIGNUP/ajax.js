<!-- Add user -->
$(document).on('click','#btn-add',function(e) {
    var data = $("#user_form").serialize();
    // console.log(data);
    $.ajax({
        data: data,
        type: "post",
        url: "signupuser.php",
        success: function(dataResult){
            // var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                alert('Data added successfully !');
                location.reload();
            }
            else if(dataResult.statusCode==201){
                alert(dataResult);
            }
        }
    });
});