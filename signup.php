<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/signup.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>

    <section>
        <div class="my">
            <div class="cont">
                <img src="styles/assets/nasa-logo.png">
                <form action="" method="POST">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="pass" id="password" placeholder="Password">
                    <input type="text" name="tel" id="telefone" placeholder="Telefone">
                    <input type="email" name="e_mail" id="e-mail" placeholder="e-mail">
                    <input type="submit" value="Press" id="sub">
                </form>
            </div>
            <?php require 'php/sign_up.php'; ?>
        </div>
    </section>
</body>

</html>

