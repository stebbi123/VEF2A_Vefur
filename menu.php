 

 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
                <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
                 ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class=<?php if ($currentPage == 'index.php'){
                        echo '"active"';
                        } ?> id="">
                        <a href="index.php">Portfolio</a>
                    </li>
                    <li class=<?php if ($currentPage == 'about.php'){
                        echo '"active"';
                        } ?> id="">
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    