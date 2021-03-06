<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Me</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/brands.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid.css" rel="stylesheet">
    <link rel="icon" href="img/iconn.png">
</head>

<body class="me-body">

    <!--
Comments are written as HTML style.
-->

<?php require "./view/header.php" ?>

    <div class="wrapper">
        <div class="image-div">
            <img class="my-image" src="img/myPic.png" alt="my image">
            </img>
        </div>
        <h1>That is me !</h1>
        <div class = "me-paragraph">
            <p> My name is Samin. I am 22 years old and originally from Iran. I have studied Mathematic and Physics
                in
                high school and now I am study the Computer Science program at HKR.
                While studying I worked at a gym in Lund first as a swimming teacher and later on as a group trainer
                for
                adults.At the moment I am working on my degree project align with this course, at a consulting
                company
                in Lund, Tretton37.
            </p>
            <p> One of my current hobbies is following formula 1 racing. I really like how team based this sport is
                and
                that is one of the reasons I found in interesting. People usually think it is only about the driver
                but
                there is whole team behind every result, which makes it really cool in my opinion. </p>
        </div>
    </div>

    <footer>
        <hr>
        <h3 class="footer-text">Find me on social media</h3>
        <div class="container">
            
            <div class="fa fa-facebook" onclick=location.href="https://www.facebook.com/samiindehghaani"></div> 
            <div class="fa fa-instagram" onclick=location.href="https://www.instagram.com/ssamynn/"></div>
            <div class="fa fa-linkedin" onclick=location.href="https://www.linkedin.com/in/samin-dehghani-4a703612b/"></div>
        </div>

    </footer>

    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>