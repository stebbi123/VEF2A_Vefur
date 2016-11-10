<?php 
$errors = [];
$missing = [];
if (isset($_POST['submit'])) {
  	$email = trim($_POST['email']);
	$user = trim($_POST['name']);
	$password = trim($_POST['password']);

    $expected = ['name', 'email', 'password'];
    $required = ['email', 'password', 'name'];
    require_once 'check.php';
    require_once 'connection.php';
    require_once 'Users.php';

    if ($required && !$errors && !$missing) {
    	header('Location: index.php');
        exit();
    }
    $dbUsers = new Users($connection);

	$status = $dbUsers->newUser($user, $email, $password);
    
}
//error_reporting(E_ERROR | E_PARSE)
//require_once 'session_timeout.php';
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
                    <label for="inputEmail3" class=" control-label">Email 
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
                <label for="inputPassword3" class="control-label">Password
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
            <button type="submit" class="btn btn-primary">Login</button>
    </form>
</section>

</body>

<?php 
include 'footer.php';
include 'scripts.php';
?>
</html>