<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Onco — Home Page</title>
</head>
<body>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <h1>
                <div class="animationLogo">
                    <span class="first-logo">ON</span>
                    <span class="logo">
                        <span class="second-logo">CO</span>
                    </span>
                </div>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us-smooth-scroll">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <button id="sign-up-button" class="ui black button round-button">SIGN UP</button>
                </li>
                <li class="nav-item active">
                    <button id="sign-in-button" class="ui black button round-button">SIGN IN</button>
                </li>
            </ul>
        </div>
    </nav>
</section>


<section id="banner">
    <div id="left_banner" class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="banner-title">YOUR COLLEGEMATE</p>
                <br>
                <p class="banner-subheading-1">This is your last chance. After this, there is no turning
                    back.This is your last chance. After this, there is no turning
                    back.This is your last chance. After this, there is no turning
                    back.This is your last chance. After this, there is no turning
                    back.</p>
                <p class="banner-subheading-2">You take the blue pill - the story ends, you wake up in your bed
                    and
                    believe whatever you want to believe.You take the blue pill - the story ends, you wake up in your
                    bed
                    and
                    believe whatever you want to believe.</p>
                <p class="banner-subheading-3">You take the red pill - you stay in Wonderland and I show you how
                    deep
                    the rabbit-hole goes.You take the red pill - you stay in Wonderland and I show you how
                    deep
                    the rabbit-hole goes.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="resources/img/banner.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<section class="banner-svg">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,181.3C672,203,768,181,864,154.7C960,128,1056,96,1152,106.7C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>


<section id="services">
    <div class="container">
        <h1 class="heading1 text-center home-subheading">What we do?</h1>
        <br>
        <br>
        <br>
        <div class="ui link cards">
            <div class="ui centered card">
                <div class="image">
                    <img src="resources/img/classroom_teacher.png">
                </div>
                <div class="content">
                    <div class="header">Online Classroom</div>
                    <div class="meta">
                        <a>Friends</a>
                    </div>
                    <div class="description">
                        Matthew is an interior designer living in New York.
                    </div>
                </div>
                <div class="extra content">
                    <button id="classroom-modal-button" class="ui know-more-btn button">Know More</button>
                </div>
            </div>

            <div class="ui centered card">
                <div class="image">
                    <img src="resources/img/unite.png">
                </div>
                <div class="content">
                    <div class="header">Unite Together</div>
                    <div class="meta">
                        <span class="date">Coworker</span>
                    </div>
                    <div class="description">
                        Molly is a personal assistant living in Paris.
                    </div>
                </div>
                <div class="extra content">
                    <button id="unite-modal-button" class="ui know-more-btn button">Know More</button>
                </div>
            </div>

            <div class="ui centered card">
                <div class="image">
                    <img src="resources/img/community.jpg">
                </div>
                <div class="content">
                    <div class="header">Community</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <button id="community-modal-button" class="ui know-more-btn button">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>


<h1 id="about-us-smooth-scroll" class="heading1 text-center home-subheading">About us</h1>
<br>
<br>
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about-us-content">Your collegemate is an interactive online platform created in the pursuit of revolutionizing your approach towards conventional college routine into a more efficient and smart way of tackling things.</h1>
            </div>
            <div class="col-md-6">
                <img class="img-fluid " src="resources/img/multitask.jpg">
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid " src="resources/img/business.jpg">
            </div>
            <div class="col-md-6">
                <h1 class="about-us-content">Here we aim to bring the users all sorts of facilities ranging from lecture notes,assignments,previous year question papers,links to videos regarding popular topics and much more.Here we also provide the first of its kind feature of online attendance and a complete record of the same for each user.</h1>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h1 class="about-us-content">Your collegemate even provides you with an online discussion platform for the college where the students can discuss to resolve any of their queries or inform anything important,whether official or unofficial to all.It also brings to you the facility of a lost and found portal where the can register regarding anything lost or any article found by someone.
                    Their are many more astounding facilities made available to you through the platform and the USP is that all these have been made available to you at a button's click.</h1>
            </div>
            <div class="col-md-6">
                <img class="img-fluid " src="resources/img/multicultural_communities.jpg">
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>

<h1 class="heading1 text-center home-subheading">We have fun!</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="parallax-window" data-parallax="scroll" data-image-src="resources/img/math_class.jpg"
     style="height: 58%;">
    <div class="timeline">
        <div class="timeline-container timeline-left">
            <div class="timeline-content">
                <h2>First Month</h2>
                <p>I started witbh reading for Kafka and server management. I never get a chance to implement it as it was taken care by Rohit when I started. I read it theoretically nad later Mayank, Rohit and I planned the DB schema for the website. By the end of the month I've deployed 9 live servers.</p>
            </div>
        </div>
        <div class="timeline-container timeline-right">
            <div class="timeline-content">
                <h2>Second Month</h2>
                <p>Started with Scraping the data for the future services and saved the downloaded thousands of files on google bucket. The Laravel Project started and a big junk of time was dedicated over it and APIs are developed for the website.</p>
            </div>
        </div></body>
        <div class="timeline-container timeline-left">
            <div class="timeline-content">
                <h2>Third & fourth Month</h2>
                <p>The front end was developed and the website functionality work and it's work flow started. The features were deployed having many AJAX calls to the server and interacting in between for data. The website will soon go live at altinfo.com</p>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<section id="testimonials">
    <div class="container">
        <h1 class="heading1 text-center home-subheading">Testimonials</h1>
        <br>
        <br>
    </div>
</section>
<?php include("modal.php"); ?>
<?php include("footer.php"); ?>
<?php include("script.php"); ?>
</body>
</html>