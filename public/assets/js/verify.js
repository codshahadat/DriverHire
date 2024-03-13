function readURL(input, imageID) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          // Update the src attribute of the image with the data URL
          document.getElementById(imageID).src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  }
}
