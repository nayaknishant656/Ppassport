<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Download | NAwnit Studio Prints</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/uploadcss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- ==========Background Image============= -->
    <div class="bg-img">
        <!-- ===========navigation=========== -->
     <header id="header">
        <div class="smalllogo">
            <a href="#welcome-section" class="logolink">
                <h2> <i class="fa fa-camera"></i> Nawnit Studio </h2>
            </a>
        </div>
        <button class="nav-toggle">
            <span class="hamburger"></span>
        </button>
        <nav class="nav" >
            <div class="logo">
                <a href="nav.html" id="logo">
                    <h1>Nawnit Studio<i class="fa fa-camera" style="font-size: 24px; padding-left: 11px; color: rgb(193 1 1 / 63%);"></i></h1>
                </a>
            </div>
            <ul class="nav__list" id="navlinkitems">
                <li class="nav__item">
                    <a href="index.php" class="nav__link" id="home">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link" id="about">Upload</a>
                </li>
                <!-- <li class="nav__item">
                    <a href="#skills-section" class="nav__link" id="service">Skills</a>
                </li>
                <li class="nav__item">
                    <a href="#projects-section" class="nav__link" id="work">Work</a>
                </li> -->
                <!-- <li class="nav__item">
                    <a href="#contacts-section" class="nav__link" id="contact">Contact</a>
                </li> -->
            </ul>
        </nav>
     </header>
     <!-- ===========navigation end =========== -->
     <!-- ===========container (box) start============ -->
        <div class="container">
            <div class="container_child">
                <h1>PHoto Uploads | Nawnit Studio Prints </h1>
                <hr>
                <!-- <p>last Updated:: 27/03/2104</p><span>From:: 20,000 to 30,000</span> -->
                <br><?php if(isset($_SESSION['status_upload'])){echo $_SESSION['status_upload'];unset($_SESSION['status_upload']); }?>
                <form action="./php/upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="my_image" id="my_image" multiple>
                    <input type="submit" value="upload" name="submit"></input>
                </form>
            </div>
        </div>
      <!-- ===========container end============ -->
      <div class="footer">
          <div class="footer_child">
              <h2>Powered By Nawnit Studio Prints | Design & Dev By Nishant</h2>
          </div>
      </div>
    </div>
    <script src="./js/nav.js"></script>
</body>

</html>