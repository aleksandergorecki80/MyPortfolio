<?php
$placeholder='To jest placeholder';
  $msg = '';
  $msgClass = '';

  //Check for Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    echo 'Submited';
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
    //Passed
    echo 'PASSED';
    // Check Email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      //Passed
      echo "Email crect";
    }


    echo $name."<br>";
    echo $message."<br>";
    echo $email."<br>";
    echo $subject."<br>";


  } else {
    // Failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
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
  <link rel="stylesheet" href="css/style_111.css" type="text/css">

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
      <div class="collapse navbar-collapse" id="myNavbar">
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
        <li class="active"><a href="#menu1" data-toggle="tab">Career</a></li>
        <li><a href="#menu2" data-toggle="tab">Education and courses</a></li>
        <li><a href="#menu3" data-toggle="tab">Hobby</a></li>
      </ul>       
         
    
    <!--    zawartosc tabow   -->
      <!-- My career -->
      <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
          <h3>My career path.</h3>
          <hr>
          <p>I have been interested in web technologies for long, but I have treated it as a hobby.</p>
          <p>I started my career in local radio.I worked there as a graphic
              designer and I also developed some content on a company website using a CMS system. 
              But my duty was mostly related to graphick designing. 
          </p>
          <p>After that I my career path went to the printing industry. I worked for publishing house Jedność.
              My responsibilities it was taking files from customers checking them and
              preparing to print. I was also operating a digital printer, XEROX.</p>
          <p>In 2010 I decided to start my own business and I worked as a freelancer. I was making orders for advertising
              agency and small printing houses mostly.</p>
          <p>Since 2012 to 2013 I was working in the printing house Speedruk as a
              graphic designer. I was also preparing the printing sheets and I was making the printing plates.</p>
          <p> I have strong skills to following software Adobe; InDesign, Illustrator,
              Photoshop. I have knowledge and experience of print productions.
              Recently my passion for web coding came back to me. I decided to take  it seriously and 
              make it my career. That is why I have enroled to a Kodilla course. In the future I am going to work as a Front End Developer. 
          </p>
          
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
              <img alt="Kodilla certyficat" src="images/kodilla-certyficate-small.jpg" class="certyficat">
              <h4><strong>2018 - KODILLA - Programing Shool.</strong></h4>
              <p>Bootcamp Online. Front-End Developer</p>
            
              <img alt="OCR Functional Skills qualification in English at Level 2" src="images/ocr-certyficate-small.jpg" class="certyficat">
              <h4><strong>2016 - Greenlands Business Centre, Redditch.</strong></h4>
              <p>OCR Functional Skills qualification in English at Level 2.</p>

              <img alt="Edexcel Level 1" src="images/edexcel-certyficate-small.jpg" class="certyficat">
              <h4><strong>2014 - 2015 - Heart of Worcester College, Redditch.</strong></h4>
              <p>Edexcel Level 1 in ESOL Skills for Life</p>
            <ul>
              <li><i class="fas fa-arrow-circle-right"></i> <strong>2005-2009 - Stanislaw Stasic University of Arts & Sciences in Kielce, Poland.</strong>
              Majoring in Computer Graphics.</li>
            </ul>
          
        </div>

        <!--  Hobby -->
        <div id="menu3" class="tab-pane fade">
          <h3>Leisure time</h3>
          <hr>
            <p>I rather like to spend my time being active.
              Recently I spent most of my free time coding with Kodilla. </p>
            <p>My second passion is english. I learn with online platform E-tutor. Once of the week I also practice my conversation skils on private sessions</p>
            <p>When I don't learn I am a fan of road trips.</p>
        </div>
      </div>
     </div>
    </div>   <!--    koniec kontenera   -->
  </section>
  
  <section class="my-projects">
    <div class="container">
      <h3>MY PROJECTS</h3>
      <div class="content">
        <div class="sinngle-project">
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
          <input type="text" name="name" placeholder="Name"
            value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
          <input type="email" name="email" placeholder="Email"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
          <input type="text" name="subject" placeholder="Subject"
          value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
          <textarea placeholder="Message" name='message'><?php echo isset($_POST['message']) ? $message : 'Message'?></textarea>
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
<script type="text/javascript" src="js/stickyNavbar.js"></script>


</body>
</html>