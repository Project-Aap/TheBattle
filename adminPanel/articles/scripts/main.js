const inputFile = document.getElementById("input-file");
const imagePreview = document.getElementById("image-preview");
const imagePreviewImage = document.getElementById("image-preview-image");
const imagePreviewText = document.getElementById("image-preview-text");

inputFile.addEventListener("change", function() {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        imagePreviewText.style.display = "none";
        imagePreviewImage.style.display = "block";
    
        reader.addEventListener("load", function() {
            imagePreviewImage.setAttribute("src", this.result);
        })
    
        reader.readAsDataURL(file);
    } else {
        imagePreviewText.style.display = null;
        imagePreviewImage.style.display = null;
    }
})