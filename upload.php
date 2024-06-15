<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Check if file is a PNG
    if ($imageFileType != "png") {
        echo "Sorry, only PNG files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        // Check if the image is a valid image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        } else {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>
