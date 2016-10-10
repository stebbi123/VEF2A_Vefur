<!DOCTYPE html>
<html lang="en">

<?php 
include 'head.php';
?> 
<?php 

$input = array("cabin.png", "cake.png", "circus.png", "game.png", "safe.png", "submarine.png");
shuffle($input);

?>
        
    <!-- Navigation -->
   <?php
   include 'modal.php';
   include 'menu.php';
   include 'check.php'
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
