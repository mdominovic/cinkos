<?php
    session_start();
    require_once "security.php";
        
    /*if($_GET['success'] == 1) {
        echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
    }
    else if($_GET['success'] == -1) {
        echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>";
    }  */



    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mr.Cinkos is a premium pancake service for all ages.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Mr. Činkos</title>
    
    
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logoWhite.png" alt="Mr.Činkos" class="logo">
                    <img src="resources/img/logoBlack.png" alt="Mr.Činkos" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">Pancake delivery</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#plans">Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Sugary paradise.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">I want diabetes</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">View more</a>
                
            </div>
            
        </header>
        <section class="section-features js--section-features" id="features">
            <div class="row">
                
                <h2> Sweetest food just few clicks away.</h2>
                <p class="long-copy"> 
                    Hello, I'm Mr. Cinkos, premium pancake eating establishment. I guarantee you that you'll never find anything sweeter than my crepes.
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite icon-big"></i>
                    <h3>Open 24/7/365</h3>
                    <p>
                        Diabetes guaranteed. Bring your own insulin or get it from us! 
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-alarm-outline icon-big"></i>
                    <h3>Ready in no time!</h3>
                    <p>
                        We relay on our superfast workers which can get your pancakes ready in few minutes.   
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-android-sunny icon-big"></i>
                    <h3>100% natural.</h3>
                    <p>
                        Milk, eggs and everything other needed for making our delicious meals is fresh, local and organic. Ingredients are carefully picked from controled environment.  
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Check the menu.</h3>
                    <p>
                        Our wide range of sweets can suit everyone's needs. Don't stick to safe option, be adventurous with your choice of filling.
                    </p>
                </div>
            </div>
            
        </section>
    
        <section  class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/21.png" alt="Činka1">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/22.png" alt="Činka2">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/23.png" alt="Činka3">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/24.png" alt="Činka4">
                    </figure>
                </li>
            </ul>
            
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/25.png" alt="Činka5">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/6.jpg" alt="Činka6">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/7.jpg" alt="Činka7">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/13.jpg" alt="Činka8">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-steps">
            <div class="row">
                <h2>How it works &mdash; Simple as 1,2,3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                    <img src="resources/img/fonono.png" alt="Cinkos app on iPhone" class="app-screen js--wp-3">
                </div>
                <div class="col span-1-of-2">
                    <div class="works-step">
                        <div>1</div>
                        <p>
                            Choose what suits you the best and sign up today. Choose what suits you the best and sign up today.
                        </p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>
                            Order your pancakes through our app, website or just make a call. 
                        </p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>
                            Enjoy your sweet crepes in no more than 20 minutes.
                        </p>
                    </div>
                    
                    <a href="https://www.apple.com/hr/itunes/" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="https://play.google.com/store" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>Customers loves us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                         Mr. Cinkos is best one around. Waldinger and Petar Pan are nuttin.
                        <cite><img src="resources/img/customer-2.png" alt="customer-1-photo">Luke Jackson</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                         So delicious and energetic. When I eat one of these crepes it is like i drank 3 redbulls.
                        <cite><img src="resources/img/customer-1.png" alt="customer-1-photo">Enna Miletage</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                         I just wanna order thousand of each with every addition and bath in it.
                        <cite><img src="resources/img/customer-3.png" alt="customer-1-photo">Boron Homeouvicz</cite>
                    </blockquote>
                </div>
            </div>
        </section>
        
        
        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2>Get our crepes daily without ordering</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Platinum</h3>
                            <p class="plan-price">$399 <span>/ month</span></p>
                            <p class="plan-price-meal">That's only 13.30$ per crepe</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>New creations before others</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>                                
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Gold</h3>
                            <p class="plan-price">$149 <span>/ month</span></p>
                            <p class="plan-price-meal">That's only 14.90$ per crepe</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every 3 day</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>New creations before others</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>                                
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Silver</h3>
                            <p class="plan-price">$19 <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>New creations before others</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 10 am to 11pm</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>Free delivery</li>                                
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        <section class="section-form" id="form">
            <div class="row">
                <h2>Send us your review!</h2>
            </div>
            <div class="row">
                
                
                
                 
                
                
                
                
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        
                        
                    <!--    
                    < ? php
                        if(isset($_GET['success'])){
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                            }
                            else if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>";
                            }  
                        }
                    ?>

                        -->
                    
                        
                        
                    <?php if(!empty($errors)): ?>
                        <div class="panel">
                            <ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
                        </div>   
                    <?php endif;?>   
                        
                        
                    </div>
                    
                    
                    <div class="row">                     
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" <?php echo isset($fields['name']) ? 'value=" ' . e($fields['name']) . ' "' : '' ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" <?php echo isset($fields['email']) ? 'value=" ' . e($fields['email']) . ' "' : '' ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How you discovered us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Google</option>
                                <option value="ad">Advert</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked>Of course
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Write us something</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                    
                    
                </form>
            
            
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS APP</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copright &copy; 2017 by Mr. ČinkOs. All rights reserved.
                </p>
            </div>
            
        </footer>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
        
    </body>
    
     
    


</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>