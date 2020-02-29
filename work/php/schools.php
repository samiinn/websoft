<!doctype html>
<html lang="en">

    

<head>
    <meta charset="utf-8">
    <title>Schools</title>
    <link rel="stylesheet" href="css/schools.css">

</head>
<?php require "./view/header.php" ?>

<div class="Container">
    <button id="Button">Show all schools in Lund</button>

    <div class="TextContainer">
        <table id="SchoolTable">
            <tbody id="school_table"></tbody>
        </table>
    </div>
</div>

<!-- image HTML -->
<div class="Container">
    <img id="ninja" onmouseover="countNumberOfHovering()"
        src="https://images.vexels.com/media/users/3/152841/isolated/preview/91e46c14888dfd7cd47c2ede360bf394-school-bus-colored-stroke-icon-by-vexels.png"
        class="ImageContainer">

</div>

<script type="text/javascript" src="js/ninja.js"></script>
<script src="js/schools.js"></script>

</html>