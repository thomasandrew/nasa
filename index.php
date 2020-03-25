<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nasa.css">
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
    </div>
</body>

</html>