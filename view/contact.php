<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="ressources/externes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="ressources/styles/style.css">
</head>
<body>
    <?php
        require('nav.php');
        ?>    
        <div class="container contacts">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="container-fluid">
        <h3>Nous contacter</h3>
        <p>
            Remplissez ce formulaire pour nous laisser un message
        </p>
        <form action="">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="nom">Nom</label><br>
                    <input class="mesg" type="text" name="nom" id="nom" placeholder="  Name">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <label for="pays">Pays</label><br>
                    <select name="" id="pays" class="pays">
                        <option value="">choisir un pays</option>
                        <option value="">République Démocratique du congo</option>
                        <option value="">République  du congo</option>
                        <option value="">Sénegal</option>
                        <option value="">Russi</option>
                        <option value="">Allemagne</option>
                        <option value="">France</option>
                        <option value="">République Sud Africaine</option>
                        <option value="">Angola</option>
                        <option value="">République Centrafricaine</option>
                        <option value="">USA</option>
                        <option value="">Brasil</option>
                        <option value="">Argentine</option>
                        <option value="">Benin</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <label for="email">Email</label><br>
                    <input class="mesg" type="email" name="" id="email" placeholder="  Email">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <label for="obj">Objectif</label><br>
                    <input class="mesg" type="text" name="" id="obj" placeholder="  Objectif">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <label for="message">Message</label><br>
                    <textarea class="mesg" name="" id="message" cols="30" rows="5" placeholder=" Message"></textarea >
                </div>
                <div class="col-lg-6 col-md-6 col-sm 12"></div>
                <div class="col-12">
                    <button type$="submit" class="btn  buton btnE">Envoyer le message</button>
                </div>
            </div>
        </form>
    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3"></div>
            </div>
        </div>
   </div>
   <div class="letreContact">
   <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 lettre1">
                    <h2>Abonnez-vous à la boite aux lettres</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam laudantium quasi doloremque minima architecto rem optio odit, illo blanditiis! Dolor laudantium beatae corrupti suscipit est mollitia ipsum provident amet.</p>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <form action="">
                        <input class="input inputs" type="email" name="" id="" placeholder="   Adresse e-mail"><br>
                        <button type="submit" class="btn buton btnE">S'abonner</button>
                    </form>
                </div>
            </div>
        </div>
   </div>
   <div class="footerContact footer">
     <?php
        require('footer.php');
      ?>
   </div>
    
</body>
</html>