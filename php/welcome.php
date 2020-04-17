<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    #main {
        max-width: 1080px; 
        margin:0 auto;
    }

    img {
        max-width: 100%; 
    }

</style>
<body onload="slide1()">

    <p> Welcome </p>    

    <div id="main">
        <img src="../js/images/one.jpg" alt="slide show" id="banner">
    </div>
    <script>
         var intervalo = 3000;

         function slide1() {
            document.getElementById('banner').src = "../js/images/one.jpg"
            setTimeout("slide2()",intervalo)
         }   
         
         function slide2() {
            document.getElementById('banner').src = "../js/images/two.jpg"
            setTimeout("slide3()",intervalo)
         }

         function slide3() {
            document.getElementById('banner').src = "../js/images/three.jpg"
            setTimeout("slide1()",intervalo)
         }

    </script>
</body>
</html>