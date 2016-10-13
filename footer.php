 <footer class="text-center affix-bottom">
        <!--<div class="footer-above">
            <div class="container">
                <div class="row">

                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>asdasdasdasdasdadadad</p>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="footer-below affix-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p> &copy;<?php 
                                $startYear = 2016;
                                $thisYear = date('Y');
                                if ($startYear == $thisYear) {
                                        echo $startYear;
                                }
                                else{
                                    echo "{$startYear}&ndash;{$thisYear}";
                                }
                        ?> Stefán</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
