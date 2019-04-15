<?php


$target_file = 'uploads/'. basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && isset($_FILES['fileToUpload']) ) {
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        die();
    }

}
// Check if file already exists
if (file_exists("uploads/".$_FILES['fileToUpload']['name'])) {
    echo $_FILES['fileToUpload']['name']."already exists";

}
else{
    $file = 'uploads/'.time().$_FILES['fileToUpload']['name'];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file);
    echo "the file has been uploaded";
}
// Check file size

?>





