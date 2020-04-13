<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/main.js"></script>
    <title>Document</title>
</head>

<body onload="screenshoots.picture1()">

    <p>Welcome</p>
    <img src="../js/images/one.jpg" alt="slide show" id="banner">

    <script>
        class Screenshoots {
            constructor(photos) {
                this.photos = photos;
            }

            picture1() {
                document.getElementById('banner').src = "../js/images/one.jpg"
                setTimeout(this.picture2(), this.photos)
            }

            picture2() {
                document.getElementById('banner').src = "../js/images/two.jpg"
                setTimeout(this.picture1(), this.photos)
            }

            picture3() {
                document.getElementById('banner').src = "../js/images/three.jpg"
                setTimeout(this.picture1(), this.photos)
            }
        }

        const screenshoots = new Screenshoots(3000)
        screenshoots.picture1()
    </script>


</body>

</html>