<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="space">
            <section>
                <div class="overlay">
                    <div class="nasa_menu">
                        <div class="main_title">
                            <p id="title_N">NASA</p>
                        </div>
                        <div class="nav">
                            <ul>
                                <?php $nav_things = ['Home', 'Screenshoots', 'Missions', 'Sign in']; ?>

                                <?php foreach ($nav_things as $things) : ?>

                                    <li><a href="#"><?= $things ?></a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="join">
                        <div class="do_you">
                            <p>Do you want to go to space?</p>
                        </div>
                        <div class="join_btn">
                            <button>Join us</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="go">
            <div class="card1">
                <div class="overlay1">
                    <p>Moon</p>
                </div>
            </div>
            <div class="card2">
                <div class="overlay2">
                    <p>Robots</p>
                </div>
            </div>
            <div class="card3">
                <div class="overlay3">
                    <p>Rockets</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="about">
                <p id="us">About us</p>
                <ul>
                    <?php
                    $about = "Lorem Ipsum";
                    $i;
                    ?>

                    <?php for ($i = 0; $i < 6; $i++) : ?>

                        <li id="one"><a href="#"><?= $about ?></a></li>

                    <?php endfor; ?>
                </ul>
            </div>
            <div class="com">
                <p id="mu">Community</p>
                <ul>
                    <?php
                    $about = "Lorem Ipsum";
                    $i;
                    ?>

                    <?php for ($i = 0; $i < 5; $i++) : ?>

                        <li id="two"><a href="#"><?= $about ?></a></li>

                    <?php endfor; ?>
                </ul>
            </div>
            <div class="news">
                <p id="info">News and info</p>
                <ul>
                    <?php
                    $about = "Lorem Ipsum";
                    $i;
                    ?>

                    <?php for ($i = 0; $i < 7; $i++) : ?>

                        <li id="three"><a href="#"><?= $about ?></a></li>

                    <?php endfor; ?>
                </ul>
            </div>
            <div class="belong">
                <span>@ 2020 Nasa Company</span><span id="contact_us"><a href="#">Contact us</a></span>
            </div>
        </div>
    </div>
</body>

</html>