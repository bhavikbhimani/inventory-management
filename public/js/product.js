    var productImageElement = document.getElementById('product_image');
    if(productImageElement){
        productImageElement.addEventListener('change', function(event) {
            var file = event.target.files[0]; 
            var reader = new FileReader(); 

            reader.onload = function(e) {
            // Create a new image element
                var img = document.createElement('img');
                img.src = e.target.result; 

            // Append the image element to the filePreview div
                var filePreview = document.getElementById('filePreview');
                if(filePreview){
                    filePreview.style.display = 'flex'; 
                    filePreview.style.width = '25%'; 
                    filePreview.style.height = '130px'; 
                    filePreview.style.marginTop = '10px';
                    filePreview.innerHTML = ''; 
                    filePreview.appendChild(img);
                }

                var preProductImage = document.getElementById('pre-product-image');
                if(preProductImage){
                    preProductImage.style.display = 'none';
                } 
            };

        // Read the uploaded file as a data URL
            reader.readAsDataURL(file);
        });
    }
    
