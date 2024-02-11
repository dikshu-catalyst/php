$(document).ready(function(){
    $("#submit").click(function () {
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var pwd = $("#pwd").val();
        var confirmPassword =$('#confirmPassword').val();

        if (pwd != confirmPassword && email == "") {
            alert("Please enter same password ");
            return; 
        }
        else
        {

        var formData = new FormData();
       formData.append("firstName", firstName);
       formData.append("lastName", lastName);
       formData.append("email",email);
       formData.append("pwd",pwd);

        // Sending data to insert.php
        $.ajax({
            type: 'POST',
            url: 'insert.php',
            data: formData,
            contentType: false,
            processData : false,  
            success: function(response) {
                alert(response);
                alert('success')
            }
        });
         }
});
});