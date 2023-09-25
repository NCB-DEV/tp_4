<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="ressources/externes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="ressources/styles/style.css">
</head>
<body>
    <?php
        require('nav.php');
    ?>
    <div class="container presentation00 ">
        <div class="row">
            <div class="col-1 col-lg-2 col-md-2 col-xl-2 col-sm-1 "></div>
            <div class="col-1 col-sm-10 col-lg-8 col-md-8 col-xl-8 p00">
                <h1>Bienvenue sur notre site</h1>
                <p>
                    Nous vous apprenons à changer le monde avec votre créativité<br>
                   <button class="btn buton ">Nous contacter</button>
                </p>
                
            </div>
            <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
    <div class="presentation">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12  col-lg-6 col-md-12">
                <img class="img-fluid logo2" src="ressources\images\logo-trans.png" alt="">
            </div>
            <div class="col-12 col-sm-12 col-lg-6  col-md-12 apprendres  h-80">
                <h2>Vous avez droit d'apprendre</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores consectetur quos repellat ipsa officiis sed, commodi fuga laudantium vero animi aliquam consequuntur praesentium accusantium voluptatibus nesciunt optio voluptate aliquid? Nobis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ut voluptates et vero iste commodi numquam facilis dignissimos, autem ad nihil tempora sed accusantium dolore in aut cumque ea illo?
                </p>
            </div>
          </div>
       </div>
    </div>
    
    <div class="container presentaion2">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-3"></div>
            <div class="col-12 col-lg-6 col-sm-12">
                <h2>A propos de nous</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellat, rem cumque doloribus dignissimos sapiente eaque soluta a blanditiis earum dolorum quia accusamus vel natus at delectus ducimus veniam in?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corrupti numquam facilis reiciendis quis. Eos necessitatibus aliquid atque accusamus fugit. Similique esse nemo aliquid! Voluptatibus velit temporibus nulla cupiditate animi.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ullam neque natus! Possimus facilis qui vel impedit, dignissimos dolor eius delectus aspernatur ducimus maiores reiciendis eos necessitatibus, deserunt obcaecati ipsum!
                </p>
                <h3>les options</h3>
                <ol>
                    <li>Git & Github</li>
                    <li>HTML 5</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ol>
            </div>
            <div class="col-12 col-lg-3 col-sm-12"></div>
        </div>
    </div>
    <div class="footerAcueil footer">
      <?php
        require('footer.php');
      ?>
    </div>
    <script >
         let menu1=document.getElementById('menu1');
        let menu2=document.getElementById('menu2');
        let ul=document.getElementById('ul');
        let navs=document.getElementById('navs');
        let logo=document.getElementById('logo');
        let a= document.querySelectorAll('a');
        menu1.addEventListener('click',function(){
            let menu1.style.display="none";
            let menu2.style.display="block";
            let a.style.color="black";  
        });

         function afficher(){
            }
    </script>
</body>
</html>