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
            <nav class="nav">
                <div class="logo">
                    <a href="nav.html" id="logo">
                        <h1>Nawnit Studio<i class="fa fa-camera"
                                style="font-size: 24px; padding-left: 11px; color: rgb(193 1 1 / 63%);"></i></h1>
                    </a>
                </div>
                <ul class="nav__list" id="navlinkitems">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link" id="home">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="uploads.php" class="nav__link" id="about">Upload</a>
                    </li>
                    <!-- <li class="nav__item">
                        <a href="#skills-section" class="nav__link" id="service">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#projects-section" class="nav__link" id="work">Contact</a>
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
                <h1>PHoto Download | Nawnit Studio Prints </h1>
                <hr>
                <p>last Updated:: 28/08/2021</p><span>From:: 48,000 to 52,000</span>
                <br><?php if(isset($_SESSION['status'])){echo $_SESSION['status'];unset($_SESSION['status']); }?>
                <form action="./php/fetch.php" method="post" enctype="multipart/form-data">
                    Enter Your Photo Number ::<input class="input_" type="text" id="ph_number" name="ph_number">
                    <div class="search_button"><input class="search_button" type="submit" value="Search Image"
                            name="submit"><i class='fa fa-search'></i></input></div>
                    <img src="<?php if(isset($_SESSION['imgsrc'])){echo $_SESSION['imgsrc']; unset($_SESSION['imgsrc']);}?>"
                        download onerror="this.onerror=null;this.src='./img/gif.gif.gif';" />
                    <?php if(isset($_SESSION['donwloadbutton'])){echo $_SESSION['donwloadbutton'];unset($_SESSION['donwloadbutton']); }?>
                </form>
                <!-- <form action="./php/upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="my_image" id="my_image">
                    <input type="submit" value="upload" name="submit"></input>
                </form> -->
                  <div class="container_child_Probleme"><a href="aadharcard.html" target="_blank">Aadhar Card Correction</a></div>

            </div>
        </div>
        <!-- ===========container end============ -->
        <div class="footer">
            <div class="footer_child">
                <h2>Powered By Nawnit Studio Prints | Design & Dev By Nishant</h2>
                <!-- <p>All Rights Reserved For Nawnit Studio Prints</p> -->
            </div>
        </div>
    </div>
    <script src="./js/nav.js"></script>
</body>

</html>