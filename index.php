<!DOCTYPE html>
<html lang="en">

<?php 
include 'head.php';
?> 
<?php 

$input = array("cabin.png", "cake.png", "circus.png", "game.png", "safe.png", "submarine.png");
shuffle($input);

?>
        <body id="page-top" class="index">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign in</h4>
              </div>
              <div class="modal-body">
                
                <form class="form-horizontal">  
                        <div class="form-group">   
                                <label for="inputEmail3" class="col-sm-2 control-label">Email </label>
                                <div class="col-sm-10">   
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                </form>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </div>
        </div>
    <!-- Navigation -->
   <?php
   include 'menu.php';
    ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <?php echo '<img src="img/portfolio/' . $input[0] . '"';?> class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                       <?php echo '<img src="img/portfolio/' . $input[1] . '"'; ?> class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <?php echo '<img src="img/portfolio/' . $input[2] . '"'; ?> class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">

                        <?php echo '<img src="img/portfolio/' . $input[3] . '"'; ?> class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <?php echo '<img src="img/portfolio/' . $input[4] . '"'; ?> class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <?php echo '<img src="img/portfolio/' . $input[5] . '"'; ?> class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>


    

    <!-- Footer -->
   <?php include'footer.php'; ?>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <?php require'scripts.php' ?>

</body>

</html>
