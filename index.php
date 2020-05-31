<?php
  $msg = '';
  $msgClass = '';

  //Check for Submit
  if(filter_has_var(INPUT_POST, 'submit')){

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);


  if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
    //Passed
    // Check Email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      //Passed
      //Sending email
      $toEmail = 'aleksandergorecki80@gmail.com';
      $subject = 'Contact request from'.$name;
      $body = '<h2>Contact request</h2>
                <h4>Name:</h4><p>'.$name.'</p>
                <h4>Email:</h4><p>'.$email.'</p>
                <h4>Message:</h4><p>'.$message.'</p>
                ';
      //Email headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";

      //Additional Headers
      $headers .= "From: " .$name. "<" .$email. ">" . "\r\n";

      // Mail function
      if(mail($toEmail, $subject, $body, $headers)) {
        // Email sent
        $msg = 'Your email has been sent.';
        $msgClass = 'alert-success';

        // Clearing the form
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
      } else {
        // Failed
        $msg = 'Your email has not been sent.';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    // Failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>AG</title>
  
  <meta name="description" content="Opis w Google" />
  <meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!--    navigation bar    -->
  <nav class="navbar navbar-inverse" id="topNavbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <div class="navbar-brand" id="navbarBrand">
          <a href='#' ><img src='https://svgshare.com/i/5qp.svg' title='Aleksander Gorecki' id="myLogo" class="logo"></a>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>  
      </div>
      <div class="collapse navbar-collapse animation" id="myNavbar">
        <ul class="nav navbar-nav navbar-right ">
          <li class="active"><a id="home" class="main-menu">Home</a></li>
          <li><a id="aboutMe" class="main-menu">About me</a></li>
          <li><a id="myProjects" class="main-menu">Portfolio</a></li>
          <li><a id="contactMe" class="main-menu">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
<!--    HERO    -->

  <section class="hero">
    <div class="container">
      <div class="go-down" id="goDown"><i class="fas fa-angle-double-down"></i></div>
    </div>
  </section>

<!--    Karty (tabs)    -->
  <section class="tab-section">
    <div class="container">



     <div class="content about-me">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#menu1" data-toggle="tab">Summary</a></li>
        <li><a href="#menu2" data-toggle="tab">Education and courses</a></li>
      </ul>       
         
    
    <!--    zawartosc tabow   -->
      <!-- My career -->
      <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
          <h3>About me.</h3>
          <hr>
          <p>I have been interested in web technologies for long, but I have been treated it as a hobby.</p>
          <p>After many occupations I worked in I realised that only programming is worth exploring. 
          The more I learn about coding the more fascinating it becomes for me. 
          Therefore I decided to turn my passion into profession and start a career as a developer.</p>
          <p>Below you will find projects I have completed that demonstrate my skills and background in developing.</p>
        </div>

        <!-- The Modal -->

          <div id="menu2Modal" class="courses-modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          <div id="modalOverlay" class="modal-overlay">
          </div>
        
        <!--  Education -->
        <div id="menu2" class="tab-pane fade education-courses">
          <h3>Education and courses</h3>
            <hr>
              <h4><strong>2005-2009 - Stanislaw Stasic University of Arts & Sciences in Kielce, Poland.</strong></h4>
              <p> Majoring in Computer Graphics.</p>              
              
              <h4><strong>2018 - KODILLA - Programing Shool.</strong></h4>
              <p>Online Bootcamp. Front-End Developer</p>

              <h4><strong>2016 - Greenlands Business Centre, Redditch.</strong></h4>
              <p>OCR Functional Skills qualification in English at Level 2.</p>

              <h4><strong>2014 - 2015 - Heart of Worcester College, Redditch.</strong></h4>
              <p>Edexcel Level 1 in ESOL Skills for Life</p>
        </div>
      </div>
     </div>
    </div>   <!--    koniec kontenera   -->
  </section>
  
  <section class="my-projects">
    <div class="container">
      <h3>MY PROJECTS</h3>
      <div class="content">
      <div class="sinngle-project">   <!-- Blog Justyny -->
          <div class="col-7 col-s-12">
            <img alt="Blog Justyny" src="images/blog-justyny.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>Blog Justyny</h2>
            <h4>Web page with recipes</h4>
            <ul>
              <li><i class="fas fa-check"></i>Laravel</li>
              <li><i class="fas fa-check"></i>VUE.js</li>
              <li><i class="fas fa-check"></i>PHP</li>
              <li><i class="fas fa-check"></i>JavaScript</li>
              <li><i class="fas fa-check"></i>SCSS</li>
            </ul>
            <a href="https://blogjustyny.pl/" target="_blank">
              <button class="btn btn-success">blogjustyny.pl</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/cakes" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>

      <div class="sinngle-project">   <!-- Battleship -->
          <div class="col-7 col-s-12">
            <img alt="Battleship" src="images/batleship.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>Battleship</h2>
            <h4>Javascript Web Game</h4>
            <ul>
              <li><i class="fas fa-check"></i>HTML 5</li>
              <li><i class="fas fa-check"></i>JavaScript ES5/ES6</li>
                <ul>
                  <li>- objects</li>
                  <li>- classes</li>
                  <li>- inheritance</li>
                </ul>
            </ul>
            <a href="https://aleksandergorecki80.github.io/Battleship-2.0/" target="_blank">
              <button class="btn btn-success">View online</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/Battleship-2.0" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>
        <div class="sinngle-project">   <!-- AVAX -->
          <div class="col-7 col-s-12">
            <img alt="AVAX - mock landing page" src="images/avax-img-responsive.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>AWAX</h2>
            <h4>Mock-up landing page</h4>
            <ul>
              <li><i class="fas fa-check"></i>Responsiwe design</li>
              <li><i class="fas fa-check"></i>HTML 5</li>
              <li><i class="fas fa-check"></i>SCSS</li>
              <li><i class="fas fa-check"></i>JavaScript</li>
            </ul>
            <a href="https://aleksandergorecki80.github.io/12_8_AWAX-landing-page-v1/" target="_blank">
              <button class="btn btn-success">View online</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/12_8_AWAX-landing-page-v1" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>
        <div class="sinngle-project">   <!-- Rock, paper, scisors, lizard, Spock -->
          <div class="col-7 col-s-12">
            <img alt="Rock, Paper, Scissors, Lizard, Spock" src="images/rock-paper-scisors.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>Rock, Paper, Scissors, Lizard, Spock</h2>
            <h4>Javascript Web Game</h4>
            <ul>
              <li><i class="fas fa-check"></i>HTML 5</li>
              <li><i class="fas fa-check"></i>Javascript</li>
              <li><i class="fas fa-check"></i>Bootstrap</li>
            </ul>
            <a href="https://aleksandergorecki80.github.io/9_7a__Play_with_Dr-Sheldon-Cooper/" target="_blank">
              <button class="btn btn-success">View online</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/9_7a__Play_with_Dr-Sheldon-Cooper" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>
        <div class="sinngle-project">   <!-- SUDOKU -->
          <div class="col-7 col-s-12">
            <img alt="Sudoku" src="images/sudoku.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>SUDOKU</h2>
            <h4>React game</h4>
            <ul>
              <li><i class="fas fa-check"></i>React</li>
              <li><i class="fas fa-check"></i>Webpack</li>
              <li><i class="fas fa-check"></i>NPM</li>
            </ul>
            <a href="https://aleksandergorecki80.github.io/17_8_Sudoku_game/" target="_blank">
              <button class="btn btn-success">View online</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/17_8_Sudoku_game" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>
        <div class="sinngle-project">   <!-- GOLD -->
          <div class="col-7 col-s-12">
            <img alt="GOLDEN - mock landing page" src="images/gold-img-responsive.jpg">
          </div>
          <div class="col-5 col-s-12">
            <h2>GOLDEN</h2>
            <h4>Mock-up landing page</h4>
            <ul>
              <li><i class="fas fa-check"></i>Responsiwe design</li>
              <li><i class="fas fa-check"></i>HTML 5</li>
              <li><i class="fas fa-check"></i>SCSS</li>
              <li><i class="fas fa-check"></i>JavaScript</li>
            </ul>
            <a href="https://aleksandergorecki80.github.io/7_7__GOLDEN_landing_page/" target="_blank">
              <button class="btn btn-success">View online</button>
            </a>
            <a href="https://github.com/aleksandergorecki80/7_7__GOLDEN_landing_page" target="_blank">
              <button class="btn btn-warning">See on Github</button>
            </a>
          </div>
          <div class="col-12 line"><hr></div>
        </div>
      </div>

    </div>
  </section>
  
  <section class="contact-me">
    <div class="container">
      <div class="col-4 col-s-12 contact-data">
        <h4>CONTACT ME</h4>
        <div class="photo-of-me-container">
          <img src="images/photo-of-me.jpg" class="photo-of-me">
        </div>
        <div class="media-icons">
          <a href="mailto:aleksandergorecki80@gmail.com">
            <i class="fas fa-envelope contact-icon"></i>
          </a>
          <a href="https://github.com/aleksandergorecki80" target="_blank">
             <i class="fab fa-github-square contact-icon"></i>
          </a>
          <a href="https://www.linkedin.com/in/aleksander-gorecki-923417a7/" target="_blank">
            <i class="fab fa-linkedin contact-icon"></i>
          </a>
          <a href="skype:alek_ander?chat">
            <i class="fab fa-skype contact-icon"></i>
          </a>
        </div>
      </div>
      <div class="col-8 col-s-12">
        <?php if($msg != ''): ?>
          <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif?>

        <form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post">
          <input type="text" name="name" placeholder="Name" id="name"
            value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            <span></span>
          <input type="email" name="email" placeholder="Email" id="email"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
          <span></span>
          <input type="text" name="subject" placeholder="Subject" id="subject"
          value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
          <span></span>
          <textarea placeholder="Message" name='message' id="message"><?php echo isset($_POST['message']) ? $message : ''?></textarea>
          <button id="submitButton" name="submit" class="btn btn-success" >Send</button>
        </form>
      </div>
    </div>
  </section>

  <section class="footer">
    <div class="container-fluid">
      <div class="copyright">© copyright 2018, all right reserved</div>
    </div>
  </section>
  
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- responsive bootstrap tabs-->
<!-- <script src="https://cdn.rawgit.com/InventPartners/bootstrap-responsive-tabs/master/jquery.responsivetabs.js"></script> -->

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/menuScroll.js"></script>
<script type="text/javascript" src="js/closeMenu.js"></script>
<script type="text/javascript" src="js/stickyNavbar.js"></script>
<script type="text/javascript" src="js/validation.js"></script>


</body>
</html>