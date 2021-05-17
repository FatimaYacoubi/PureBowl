// Upload file
function uploadFile() {

    var files = document.getElementById("fileInput").files;
    if(files.length > 0 ){

        var formData = new FormData();

        formData.append("file", files[0]);

        var xhttp = new XMLHttpRequest();

        // Set POST method and ajax file path
        xhttp.open("POST", "ajaxFiles/uploadImage.php", true);

        // call on request changes state
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 var response = this.responseText;
                 if(response == 1){
                     $(".tm-upload-icon").hide();
                     $("#fileName").val(files[0].name)
                     alert("Success upload image.");
                 }else{
                     alert("File not uploaded.");
                 }
             }
         };
         // Send request with data
         xhttp.send(formData);

    }else{
        alert("Please select a file");
    }

}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(".tm-upload-icon").hide();
            $("#preview").show();
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#fileInput").change(function() {
    readURL(this);
});
