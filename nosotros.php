<?php
     require_once "header.php";
     require_once  "menu.php";

?>
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="font-family: 'Sansita Swashed', cursive;">Nosotros</h1>
            </div>
        </div>
    </div>
      <!-- /.container -->

      <div class="container">
        <div class="mt-7">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/home.JPG" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/quienessomos.JPG" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/principal2.JPG" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

      <!-- Page Content -->
      <div class="container">
        <h1 class="mt-4" style="font-family: 'Chilanka', cursive;" >Somos una red de mujeres empoderadas con ganas de seguir siempre adelante</h1>
        <p style="font-family: 'Chilanka', cursive;">El amor por la naturaleza nos une, el querer capturar la esencia y la magia de lo que hay en las flores del hogar y en los lugares por los cuales pasamos. La naturaleza siempre le da vida a cualquier lugar y las flores, lo llenan de brillo y magia.</p>
      </div>
<?php
    require_once "footer.php";
?>