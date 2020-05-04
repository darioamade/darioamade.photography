<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="shortcut icon" type="image/png" href="img/FAVICON.jpg">
        
        <title>DARIO AMADE &mdash; Landscape, Travel &amp; Outdoor Photography </title>
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163903235-1"></script>
          <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
  
          gtag('config', 'UA-163903235-1');
          </script>
    </head>
    <body class="container">
            <div class="nav-bar">
                <div class="logo-box">
                    <img id="test" onclick="location.href='index.html';" style="cursor:pointer;" src="img/logoX.png" alt="dariophotographylogo" class="logo">
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="index.html" class="nav__link"> Home</a></li>
                    <li class="nav-item"><a href="index2.html" class="nav__link"> Gallery</a></li>
                    <li class="nav-item"><a href="workshops.html" class="nav__link"> workshops</a></li>
                    <li class="nav-item"><a href="tutorials.html" class="nav__link"> Tutorials</a></li>
                    <li class="nav-item"><a href="about.html" class="nav__link"> About</a></li>
                </ul>
            </div>
        <section class="section-contact" id="form">
            <div class="row">

                <?php
                    if($_GET['success'] == 1){
                        echo "<div class=\"form-messages success\">✅Thank you! Your message has been sent.</div>";
                    }
                    if($_GET['success'] == -1) {
                        echo "<div class=\"form-messages error\">😯Oops! something went wrong. please try again</div>";
                    }
                ?>

                <div class="contact">
                    <div class="contact__form">
                        <form method="post" action="mailer.php" class="from">
                            <div class="contact-heading">
                                <div class="heading-2">
                                    I am happy to hear from you
                                </div>
                            </div>
                       
                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Full Name" id=name required>
                            <label for="name" class="form">Full Name</label>
                        </div>
                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Email address" id=email required>
                            <label for="email" class="form">Email address</label>
                        </div>

                        <div class="form__group">
                                <label for="find-us">How did you find me?</label>
                        </div>
                        <div class="form__group">
                            <select name="find-us" id= "find-us">
								<option value= "Friends" aria-controls=""selected>Friends</option>
								<option value="Search">Search engine</option>
								<option value= "ad" >Advertisement</option>
								<option other= "ad" >Other</option>
							</select>
                        </div>
                        <div class= "row" >
							<div class= "col span-1-of-3" >
								<label>Newsletter?</label>
							</div>
							<div class="col span-2-of-3">
								<input type="checkbox" name="news" id="news" checked>Yes, please
							</div>
						</div>
								
						<div class="row">
							<div class="col span-1-of-3">
								<label>Drop me a line</label>
							</div>
							<div class="col span-2-of-3">
								<textarea name="message"placeholder="Your message"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col span-1-of-3">
								<label>&nbsp;</label>	
							</div>
							<div class="col span-2-of-3">
								<input type="submit" value="Send it!">
							</div>
                        </div>
                        
                  

                    </form>
                    </div>

                </div>
            </div>            
        </section>

        <footer class="footer">
                <div class="footer-nav">
                        <a href="https://www.youtube.com/channel/UCB-NekLnw1mKfcIRezUJjhw?view_as=subscriber" target="_blank"><i class="ion-social-youtube"></i>
                        <svg class="icon-box">
                            <use xlink:href="img/sprite.svg#icon-youtube-with-circle"></use> 
                        </svg>
                        <a href="https://www.instagram.com/darioamade" target="_blank"><i class="ion-social-instagram"></i>
                        <svg class="icon-box">
                            <use xlink:href="img/sprite.svg#icon-instagram"></use> 
                        </svg>
                    </div>  
                    <div class="nav-footer">
                        <p class="footer__copyright">
                            <a  class="copyright"> &copy;Copyright by Dario Amade</a> 
                        </p>
                    </div>
        </footer>  
    </body>
</html>

