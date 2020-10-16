<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawan Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<?php include "nav-connexion.php"; ?>
<div class="container" >
<div class="row" style="padding-top: 6rem; text-align:center;">
    <div class="col-md-4"> 
    </div>


    
    <div class="col-md-4"> 
    <h3>Liens des cours :</h3>
    </div>

    
    <div class="col-md-4"> 

    </div>





</div>
    <div class="row" style="padding-top: 3rem;">
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block">HTML</button>
    </div>


    
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block">CSS</button>

    </div>

    
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block">JAVASCRIPT</button>

</div>
    </div>
<div class="row" style="padding-top: 6rem;">
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block" onclick="btnclick1(); return true;">JQUERY</button>
    </div>

    
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block" onclick="btnclick2(); return true;">PHP</button>

    </div>

    
    <div class="col-md-4">  
    <button class="btn btn-outline-dark btn-block">GIT</button>

    </div>





</div>


<div class="row" style="padding-top: 6rem;">
    <div class="col-md-4"> 
    </div>
    <div class="col-md-4"> 
    <button class="btn btn-outline-dark btn-block" onclick="btnclick(); return true;">BOOTSTRAP</button>
</div>
    <div class="col-md-4"> 
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
    <embed src="../assets/pdf/PDF_bootstrap.pdf" width="100%"  style="height:62rem; padding-top:2rem; display:none;" id="pop2"/>
    <embed src="../assets/pdf/PDF_jquery.pdf" width="100%" style="height:62rem; padding-top:2rem; display:none;" id="pop1"/>
    <embed src="../assets/pdf/PDF_php1.pdf" width="100%" style="height:62rem; padding-top:2rem; display:none;" id="pop3"/>

    </div>
    </div>
</div>
</div>

<div  class="fixed-bottom">
    <?php include "footer.php"; ?>
</div>

<script>



function btnclick() {
  if (pop2.style.display === "none") {
    pop2.style.display = "block";
    pop1.style.display = "none";
    pop3.style.display = "none";


  } else {
    pop2.style.display = "none";
  }
} 
function btnclick1() {
  
  if (pop1.style.display === "none") {
    pop1.style.display = "block";
    pop2.style.display = "none";
    pop3.style.display = "none";



  } else {
    pop1.style.display = "none";
  }
} 

function btnclick2() {
  if (pop3.style.display === "none") {
    pop3.style.display = "block";
    pop1.style.display = "none";
    pop2.style.display = "none";


  } else {
    pop3.style.display = "none";
    
  }
} 

</script>



    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="module" src="assets/js/app.js"></script>

</body>

</html>