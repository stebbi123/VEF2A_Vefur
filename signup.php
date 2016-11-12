<?php
//Arryar búnir til 
$errors = [];
$missing = [];
//Tjékkar ef formið hefur verið submittað

if (isset($_POST['send'])) {
$name = trim($_POST['name']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);

//Expected fields in form
$expected = ['name', 'password', 'email'];
$required = ['name', 'password', 'email'];

//Keyrt skriftur
require 'check.php';
require "Users.php";
include "connection.php";

$dbUsers = new Users($connection);
$status = $dbUsers->newUser($name, $email, $password);

if($status) {
  header('upload.php');
}

else
{
  echo "This username is already in use";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<?php 
include 'head.php';


require 'menu.php';
?>
<body>
<section>
<br>
<br>
<?php
if (isset($success)) {
    echo "<p>$success</p>";
} elseif (isset($errors) && !empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo '</ul>';

}?>
<form method="post" action="" class="form-vertical">  
			
			
			<div class="form-group">   
                    <label for="name" class=" control-label">Name
                    <?php if ($missing && in_array('name', $missing)) { ?>
                    <span class="warning">Please enter your email</span>
                    <?php } ?>
                    </label>
                    <div class="col-sm-10">   
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name"<?php if ($missing || $errors) {
                              echo 'value="' . htmlentities($name) . '"';
                            } ?>>
                    </div>
            </div>
            <div class="form-group">   
                    <label for="email" class=" control-label">Email 
                    <?php if ($missing && in_array('email', $missing)) { ?>
                    <span class="warning">Please enter your email</span>
                    <?php } ?>
                    </label>
                    <div class="col-sm-10">   
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"<?php if ($missing || $errors) {
                              echo 'value="' . htmlentities($email) . '"';
                            } ?>>
                    </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password
                <?php if ($missing && in_array('password', $missing)) { ?>
                <span class="warning">Please enter your password</span>
                <?php } ?>
                </label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"<?php if ($missing || $errors) {
                              echo 'value="' . htmlentities($password) . '"';
                            } ?>>
                </div>
            </div>
            <button name="send" type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</section>

</body>

<?php 
include 'footer.php';
include 'scripts.php';
?>
</html>