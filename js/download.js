function autoClick() {
    $("#download").click();
}

$(document).ready(function () {

    $("#download").on('click', function () {
        let element = $("#image-to-download");
        html2canvas(element, {
            onrendered: function (canvas) {
                // var imageData = canvas.toDataURL("image/jpg");
                // var newData = imageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
                // $("#download").attr("download", "image.jpg").attr("href", newData);

                var imageData = canvas.toDataURL('image/jpeg');
            
                // send the image data to the server using an AJAX request
                $.ajax({
                  type: 'POST',
                  url: 'upload.php',
                  data: {image: imageData}, 
                  success: function(response) {
                    console.log(response);
                  },
                  error: function(error) {
                    console.error(error);
                  }
                });
              
            }
        });

    });
});

function uploadImage() {
    var canvas = document.getElementById('canvas');
    var imageData = canvas.toDataURL('image/jpeg');

    // create an AJAX request
    var xhr = new XMLHttpRequest();

    // open the request and set the HTTP method to POST
    xhr.open('POST', 'upload.php');

    // set the responseType to "text"
    xhr.responseType = 'text';

    // send the request and upload the image
    xhr.send(imageData);

    // handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.response);
        } else {
            console.error(xhr.response);
        }
    };
}