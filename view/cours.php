<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
    <link rel="stylesheet" href="ressources/externes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="ressources/styles/style.css">
</head>
<body>
    <?php
        require ('nav.php');
        ?>    
    <div class="container cours">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-3"></div>
                <div class="col-sm-12 col-md-col-lg-6">
                <h3>Les cours</h3>
        <div class="row">
            <div class="col-lg-4 col-sm-12 Coursimg">
                <img class="img-fluid coursImg" src="ressources/images/html.png" alt="html">
                <h4>html</h4>
                <span>5h</span>
            </div>
            <div class="col-lg-4 col-sm-12 Coursimg">
                 <img class="img-fluid coursImg" src="ressources/images/css.png" alt="html">
                <h4>Css</h4>
                <span>5h</span>
            </div>
            <div class="col-lg-4 col-sm-12 Coursimg">
                <img class="img-fluid coursImg" src="ressources/images/git.png" alt="html">
                <h4>git</h4>
                <span>5h</span>
            </div>
        </div>
        <div class="row">
            <div class=" col-sm-12 col-lg-4 Coursimg">
                <img class="img-fluid coursImg" src="ressources/images/flex.png" alt="html">
                <h4>flex</h4>
                <span>5h</span>
            </div>
            <div class="col-lg-4 col-sm-12 Coursimg">
                 <img class="img-fluid coursImg" src="ressources/images/responsive.jpeg" alt="html">
                <h4>responsive</h4>
                <span>5h</span>
            </div>
            <div class="col-lg-4 col-sm-12 Coursimg">
                <img class="img-fluid coursImg" src="ressources/images/html.png" alt="html">
                <h4>html</h4>
                <span>5h</span>
            </div>
                </div>
                <div class="col-lg-3 col-sm-12"></div>
            </div>
        </div>
        
        </div>
    </div>
    <div class="messages">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 lettre1">
                    <h2>Abonnez-vous à la boite aux lettres</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam laudantium quasi doloremque minima architecto rem optio odit, illo blanditiis! Dolor laudantium beatae corrupti suscipit est mollitia ipsum provident amet.</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <form action="">
                        <input class="input lettreC inputs" type="email" name="" id="" placeholder="   Adresse e-mail"><br>
                        <button type="submit" class="lettreC btns btn buton">S'abonner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footerCours footer">
      <?php
        require('footer.php');
      ?>
    </div>
    
</body>
</html>