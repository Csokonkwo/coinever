<footer>
        <div class="top">
            <label><i class="search-btn fa fa-search"></i></label>

            <div class="search-form">
                <form action="<?php echo BASE_URL . '/search.php'?>" method="post">
                    <input type="text" name="search_term"  placeholder="Search..." id="searcher">
                </form>
            </div>
            <div class="search-cancel"><i class="fa fa-close" style="font-size:15px;"></i></div>

        </div>
        
        <div class="middle">
            <div class="wrapper">
                <div class="box">
                    <h3>About us</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/about/faqs.php' ?>">FAQ's</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/index.php' ?>">Overview</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/blog.php' ?>">Our Blog</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/terms.php' ?>">Our Terms</a></li>
                    </ul>
                </div>
                
                <div class="box">
                    <h3>Security</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/security/anti_fraud.php' ?>">Anti-fraud</a></li>
                        <li><a href="<?php echo BASE_URL . '/security/tips.php' ?>">Security Tips</a></li>
                        <li><a href="<?php echo BASE_URL . '/security/code.php' ?>">Secure Code</a></li>
                    </ul>
                </div>
                
                <div class="box">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
                        <li><a href="<?php echo BASE_URL . '/register/signin.php' ?>">Sign In</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/privacy.php' ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/sustain.php' ?>">Sustainability</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        
        
        <div class="bottom">
            <div class="wrapper">
                <p>&copy; <?php echo $companyRealName; ?> 2021 All Rights Reserved.</p>
            </div>
        </div>
    
    </footer>
    

    <!-- jQuery library -->

    <script src="<?php echo BASE_URL . '/js/main.js' ?>"></script>
    <script src="<?php echo BASE_URL . '/js/hero.js' ?>"></script>
    <script src="<?php echo BASE_URL . '/js/validate.js' ?>"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo BASE_URL . '/js/carousel.js' ?>"></script>
    <script src="<?php echo BASE_URL . '/js/sub.js' ?>"></script>