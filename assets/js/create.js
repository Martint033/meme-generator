document.getElementById('submit-picture').addEventListener('click', function(e) {   
    if (document.getElementById("fileToUpload").files.length <= 0) {
        e.preventDefault();
        document.getElementById("save-file").innerHTML = "Please select a picture from your computer or one of our site";
    }
});