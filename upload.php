<?php 
use File\Upload;


if (isset($_POST['upload'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/0908962619/vef2a/img/";

    require_once 'File/Upload.php';

    try {
    $loader = new Upload($destination);
    $loader->upload();
    $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessages();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
include 'head.php';


//require 'menu.php';
?>
<body>
<section>
<br>
<br>

<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
 <p>
 <label for="image">Upload image:</label>
 <input type="file" name="image" id="image">
 </p>
 <p>
 <input type="submit" name="upload" id="upload" value="Upload">
 </p>
</form>

</section>

</body>

<?php 
include 'footer.php';
include 'scripts.php';
?>
</html>