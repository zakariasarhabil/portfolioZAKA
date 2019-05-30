<?php include ("langue/switch.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="I'm a web developer and designer,">
  <meta name="keywords" content="Portfolio,Web developer,zakaria sarhabil">
  <meta name="author" content="SARHBAIL Zakaria">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--link bootstrap-->
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  <!--google fonts-->
  <link rel="stylesheet" type="text/css" href="zakafolio.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <!--cdn typed-->
  <link rel="shortcut icon" href="./img/logozaka.png"/>


  <title>Zaka Folio</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
        <a class="navbar-brand" href="index.php">
            <img src="img/logozaka.png" width="100" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#header" onclick="$('#header').animatescroll();">
                        <?= _Accueil ?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about" onclick="$('#about').animatescroll();">
                       <?= _Apropos ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pro" onclick="$('#pro').animatescroll();">
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#contact" onclick="$('#contact').animatescroll();">
                        Contact
                    </a>
                </li>
            </ul>
        </div>  
        <form method='get' action='' id='form_lang' >
                        <select id ="botton" class="btn btn-outline-secondary dropdown-toggle"  name='lang' onchange='changeLang();'>
                        <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>  ><?= _English ?></option>
                        <option value='fr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected"; } ?>  ><?= _Frensh ?></option>
                        </select>
                        </form>
    </nav>
  <!--nav bar-->
  <!-- <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <img src="img/zaka.png" >
          <a href="index.html">
        </div>

        <div class="responsive"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="#header" class="smoothScroll">Accueil</a></li>
          <li><a href="#about" class="smoothScroll">Apropos</a></li>
          <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
        </ul>

      </div>
    </div>
  </nav> -->
  <!-- end nav bar-->


  <!--header-->

  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1><?= _Jesuis?> <span class="typo"></span></h1>
        <p><?=_developpeurWeb?></p>
        <ul class="list-unstyled list-social">
          <li><a href="https://www.linkedin.com/in/zakaria-sarhabil-07296b176/" target="_blank"><i
                class="ion-social-linkedin"></i></a></li>
          <li><a href="https://github.com/zakariasarhabil" target="_blank"><i class="ion-social-github"></i></a></li>
          <li><a href="https://www.facebook.com/mc.zizo.9" target="_blank"><i class="ion-social-facebook"></i></a></li>

        </ul>


      </div>
    </div>
  </div>

  <!--end header-->

  <!--str abouts-->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="img/cc22.png" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading"><?=_para?> </p>


          </div>

        </div>
      </div>
    </div>
  </div>

  <!--skills-->
  <div class="container">
    <div class="section-title text-center">
      <h2><?=_compétences?></h2>
    </div>
  </div>
  <div class="row pt-5 w-100">
    <div class="col-md-3 mb-3">
    </div>
    <div class="col-md-8">
      <div class="skill">
        <h3>HTML5</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
            aria-valuemax="100">
            <span>70%</span>
          </div>
        </div>
      </div>

      <div class="skill">
        <h3>CSS3</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="98" aria-valuemin="0"
            aria-valuemax="100">
            <span>60%</span>
          </div>
        </div>
      </div>

      <div class="skill">
        <h3>JAVASCRIPT</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="97" aria-valuemin="0"
            aria-valuemax="100">
            <span>30%</span>
          </div>
        </div>
      </div>

      <div class="skill">
        <h3>MY SQL</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="88" aria-valuemin="0"
            aria-valuemax="100">
            <span>20%</span>
          </div>
        </div>
      </div>

      <div class="skill">
        <h3>PHP</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="92" aria-valuemin="0"
            aria-valuemax="100">
            <span>20%</span>
          </div>
        </div>

        <div class="skill">
          <h3>ADOBE XD</h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="92" aria-valuemin="0"
              aria-valuemax="100">
              <span>60%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- start section portfolio -->
  <!--/ Section Portfolio Star /-->
  <section id="pro" class="portfolio-mf sect-pt4 route">
    <div class="container" style="margin-top: 10%;">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h2>
            <?=_Project?>
            </h2>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/project-cv" target="_blank"><img src="img/cv.png" alt=""
                  class="img-fluid"></a>
            </div>
            <div class="work-content">

              <h2 class="w-title w-100 text-center">Project CV</h2>




            </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/atelier-slack" target="_blank"><img src="img/slack.png" alt=""
                  class="img-fluid"></a>
            </div>
            <div class="work-content">


              <h2 class="w-title w-100 text-center">Project Slack</h2>




            </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/atelier-css" target="_blank"><img src="img/Atelier.png"
                  alt="" class="img-fluid"></a>
            </div>
            <div class="work-content">


              <h2 class="w-title w-100 text-center">Atelier CSS</h2>




            </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/animation" target="_blank"><img src="img/animation2.png" alt=""
                  class="img-fluid"></a>
            </div>
            <div class="work-content">


              <h2 class="w-title w-100 text-center">Animation</h2>




            </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/calcul" target="_blank"><img src="img/calcul1.png" alt=""
                  class="img-fluid"></a>
            </div>
            <div class="work-content">


              <h2 class="w-title w-100 text-center">Calcul JS</h2>

            </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">

            <div class="work-img">
              <a href="https://github.com/zakariasarhabil/gallery" target="_blank"><img src="img/flex1.png"
                  alt="" class="img-fluid"></a>
            </div>
            <div class="work-content">


              <h2 class="w-title w-100 text-center">gallery</h2>




            </div>
            </a>
          </div>
        </div>
     
       <?php include "admin/includes/set.php"; ?> 
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!-- start sectoion contact -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30"><?=_ECONTACT ?></h2>

              <ul class="contact-details">

                <li><span>Youssoufia, Maroc</span></li>
                <li><span>+212 629124269</span></li>
                <li><span>zakariaasarhabil@gmail.com</span></li>
              </ul>

            </div>
            <div id="icon">
            <ul class="list-unstyled list-social">
          <li><a href="https://www.linkedin.com/in/zakaria-sarhabil-07296b176/" target="_blank"><i
                class="ion-social-linkedin"></i></a></li>
          <li><a href="https://github.com/zakariasarhabil" target="_blank"><i class="ion-social-github"></i></a></li>
          <li><a href="https://www.facebook.com/mc.zizo.9" target="_blank"><i class="ion-social-facebook"></i></a></li>

        </ul>
        </div>
            
          </div>
          

          <div class="col-lg-6">
            <form action="contact.php" method="POST">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" placeholder="<?=_Nom?>">
                  </div>
                  <div class="validation"></div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" >
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="sujet" class="form-control" placeholder="<?=_Sujet?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea type="text" name="message" class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <input type="submit" name="submit" class="btn btn-defeault btn-send" value="<?=_msg  ?>">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>



























          <!--link bootstrap-->


          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
          </script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
          </script>


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
          <script src="js/zakafolio.js"></script>
          <script src="js/animatescroll.js"></script>



          <!--link js-->



</html>