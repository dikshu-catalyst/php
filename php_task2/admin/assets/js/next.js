$(document).ready(function(){
    $("#submit-button").click(function () {
        var head = $("#head").val();
        var txt = $("#txt").val();
        
        var formData = new FormData();
        formData.append("head",head);
        formData.append("txt",txt);
        
        var fileInput = $("#img")[0].files[0];
        formData.append("upload_file",fileInput);
        
        $.ajax({
            type: 'POST',
            url: 'fields.php',
            data: formData,
            contentType: false,
            processData : false,  
            success: function(response) {
                alert(response);
                alert('Data Added Successfully');
            }
        });
    });
});