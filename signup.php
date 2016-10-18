<?php 
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
  

    $expected = ['name', 'password'];
    $required = ['name', 'password'];
    require 'check.php';
    
}
error_reporting(E_ERROR | E_PARSE)
?>

<!DOCTYPE html>
<html lang="en">
<?php 
include 'head.php';

include 'check.php';
require 'menu.php';
?>
<body>
<section>
<br>
<br>
<form method="post" action="about.php" class="form-vertical">  
            <div class="form-group">   
                    <label for="inputEmail3" class=" control-label">Email 
                    <?php if ($missing && in_array('email', $missing)) { ?>
                    <span class="warning">Please enter your email</span>
                    <?php } ?>
                    </label>
                    <div class="col-sm-10">   
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"<?php if ($missing || $errors) {
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
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"<?php if ($missing || $errors) {
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