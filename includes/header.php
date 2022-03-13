<header class="clearfix">
        <div class="logo"> 
            <a href="<?php echo BASE_URL . '/index.php' ?>">
                <img src="<?php echo BASE_URL . '/img/logo.png' ?>">
            </a>
        </div>
        
        <div class="menu_btn" onclick="menu_show()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <ul>
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
            <li><a>About</a>
                <ul>
                    <div class="container">
                        <li><a href="<?php echo BASE_URL . '/about/index.php' ?>">Overview</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/services.php' ?>">Our Services</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/plans.php' ?>">Investment Plans</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/guides.php' ?>">Investment Guides</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="<?php echo BASE_URL . '/about/faqs.php' ?>">Faqs</a></li>
            <li><a href="<?php echo BASE_URL . '/about/sustain.php' ?>">Sustainability</a></li>
            <li><a>Account</a>
                <ul>
                    <div class="container">
                        <li><a href="<?php echo BASE_URL . '/register/signin.php' ?>">Login</a></li>
                        <li><a class="disappear"> | </a></li>
                        <li><a href="<?php echo BASE_URL . '/register/signup.php' ?>">Register</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="<?php echo BASE_URL . '/contact.php' ?>">Contact</a></li>
            <li><a class="disappear"> | </a></li>
            
            <li><a class="blog" href="<?php echo BASE_URL . '/about/blog.php' ?>">Blog</a></li>
            
        </ul>
        
        <div class="goog">
            <a id="google_translate_element"></a>

            <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
        
    </header>
    