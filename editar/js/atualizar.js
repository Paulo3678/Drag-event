function autoClick() {
    $("#download").click();
}

$(document).ready(function () {

    $("#download").on('click', function () {
        let element = $("#image-to-download");
        html2canvas(element, {
            onrendered: function (canvas) {
                let info_element;
                element.children().each((id, node_element) => {

                    let element_class = [];

                    (node_element.querySelector("i").classList).forEach(e => {
                        element_class.push(e);
                    })

                    info_element = {
                        right: window.getComputedStyle(node_element, null).getPropertyValue("right"),
                        left: window.getComputedStyle(node_element, null).getPropertyValue("left"),
                        top: window.getComputedStyle(node_element, null).getPropertyValue("top"),
                        bottom: window.getComputedStyle(node_element, null).getPropertyValue("bottom"),
                        classes: element_class
                    };

                })

                var imageData = canvas.toDataURL('image/jpeg');

                // send the image data to the server using an AJAX request
                $.ajax({
                  type: 'POST',
                  url: 'atualizar.php',
                  data: {image: imageData, image_info: info_element}, 
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