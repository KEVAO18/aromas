<?php
  if (isset($_GET['type'])) {
    $type = $_GET['type'];
  }else{
    $type = "Todos";
  }
?>
<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='utf-8'>
    <meta name="author" content="Kevin Orrego">
    <meta name="description" content="Linea de aromas creada con aceites esenciales, en los que unimos la ciencia de la Aromaterapia y la Cromaterapia para crear mágicos elixires.">
    <meta name="keywords" content="Aromas, Angeles, Arcangeles, aromas y angeles"/>
    <meta name="copyright" content="Kevin Orrego" />
    <meta name="robots" content="index,follow" />
    <meta name='viewport' content='width=device-width, user-scalable=no'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta http-equiv="cache-control" content="3600" />
    <link rel='icon' href='assets/media/favicon.ico'>
    <title>Aromas & Ángeles | <?=$type?></title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>
    <!-- AO JS-->
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <!-- AO css-->
    <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/css-1.css">
  </head>
  <body>
    <script>
        AOS.init(); 
    </script>
    <nav class='navbar navbar-expand-lg navbar-dark naranjado2 sticky-top'>
      <div class='container'>
        <a class='navbar-brand' href='index.php' style="font-size: 30px"><strong>Aromas & Ángeles</strong></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
          aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item a-h'>
              <a class='nav-link' href='productos.php?type=Todos'>Productos<span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item a-h'>
              <a class='nav-link' href='nosotros.php'>Nosotros</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class='btn white btn-sm font-weight-bold' href='https://api.whatsapp.com/send?phone=573122490811&text=Hola,%20quiero%20recibir%20m%C3%A1s%20informaci%C3%B3n' title='whatsapp' target='_blank'>
                <i class="fab fa-whatsapp whats"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div class='view intro-2'>
        <div class='full-bg-img'>
          <div class='mask'>
            <div class='container'>
              <div class='white-text text-center' style='margin-top: 18vh;'>
                <center><img src='assets/media/favicon2.png' class='img-header'></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
<?php
  if ($type == "Rituales") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Rituales
              </strong>
            </h1>
          </center>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualChamuel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "Armonizadores") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Armonizadores
              </strong>
            </h1>
          </center>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorChamuel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "AceitesAngelicales") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Aceites Angelicales
              </strong>
            </h1>
            <h3>
              Para más información sobre este producto puedes contactarnos por whatsapp
            </h3>
          </center>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "Esencias") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Esencias
              </strong>
            </h1>
            <h3>
              Para más información sobre este producto puedes contactarnos por whatsapp
            </h3>
          </center>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "DifusoresDeAromas") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Difusores de Aromas
              </strong>
            </h1>
            <h3>
              Para más información sobre este producto puedes contactarnos por whatsapp
            </h3>
          </center>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "Velas") {
    ?>
   <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Velas
              </strong>
            </h1>
            <h4>El poder de las velas</h4>
            <p>Una vela simboliza tu ser: la cera o parafina representa tu cuerpo fisico, el pabilo tu mente y la llama tu espiritu.</p>
          </center>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasMiguel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Miguel</p>
                <p class="py-1 text-center">Yo soy fortaleza. Yo soy Valor. Yo soy proteccion.</p>
                <p class="py-1 text-center">Día: Domingo</p>
                <p class="py-1 text-center">Color: Azul</p>
                <p class="py-1 text-center">Potestad: Protrccion</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasJofiel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Jofiel</p>
                <p class="py-1 text-center">Yo soy sabiduria. Yo soy inspiracion. Yo soy comprension.</p>
                <p class="py-1 text-center">Día: Lunes</p>
                <p class="py-1 text-center">Color: Amarillo</p>
                <p class="py-1 text-center">Potestad: Sabiduria</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasChamuel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Chamuel</p>
                <p class="py-1 text-center">Yo soy amor. Yo soy armonia. Yo soy unidad.</p>
                <p class="py-1 text-center">Día: Martes</p>
                <p class="py-1 text-center">Color: Rosado</p>
                <p class="py-1 text-center">Potestad: Amor incondicional</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasGabriel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Gabriel</p>
                <p class="py-1 text-center">Yo soy esperanza. Yo soy prureza. Yo soy inspiracion.</p>
                <p class="py-1 text-center">Día: Miercoles</p>
                <p class="py-1 text-center">Color: Blanco</p>
                <p class="py-1 text-center">Potestad: inspiracion</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasRafael.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Rafael</p>
                <p class="py-1 text-center">Yo soy claridad mental. Yo soy curacion. Yo soy equilibrio.</p>
                <p class="py-1 text-center">Día: Jueves</p>
                <p class="py-1 text-center">Color: Verde</p>
                <p class="py-1 text-center">Potestad: Salud</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasUriel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Uriel</p>
                <p class="py-1 text-center">Yo soy abundancia. Yo soy prosperidad. Yo soy gratitud</p>
                <p class="py-1 text-center">Día: Viernes</p>
                <p class="py-1 text-center">Color: Naranja</p>
                <p class="py-1 text-center">Potestad: Creatividad</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasZaquiel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Zaquiel</p>
                <p class="py-1 text-center">Yo soy liberacion. Yo soy Transmutacion. Yo soy misericordia.</p>
                <p class="py-1 text-center">Día: Sabado</p>
                <p class="py-1 text-center">Color: Morado</p>
                <p class="py-1 text-center">Potestad: Transmutacion</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "KitEnergetico") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Kits Energéticos
              </strong>
            </h1>
          </center>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Miguel</p>
                <p class="py-1 text-center">Este kit nos ayuda a depurar energias densas y de baja vibracion siendo el arcángel miguel el defensor de la verdad y la justicia.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Uriel</p>
                <p class="py-1 text-center">Este kit nos brinda la opotunidad de enfocarnos hacia el exito, la felicidad y las ideas brillantes. Atrae la prosperidad.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Gabriel</p>
                <p class="py-1 text-center">Este kit es una guia alentadora para realizar nuevos comienzos. Tambien es una gran compañia para los niños y embarazadas.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Rafael</p>
                <p class="py-1 text-center">Este kit nos empodera para la sanacion fisica, mental, emocional y espiritual para reconectarnos de corazon con nuestro ser.</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Jofiel</p>
                <p class="py-1 text-center">Este kit nos despierta para ver el lado positivo de la situacion. Afianza la confianza en ti mismo y en los demas.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitChamuel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Chamuel</p>
                <p class="py-1 text-center">Este kit representa el fortalecimiento del amor propio lo que te permitira ver oportunidades de las que no te habias percatado.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Zaquiel</p>
                <p class="py-1 text-center">Este kit es la clave para desarrollar el perdon desde el amor para asi transformar aspectos del pasado que desees liberar.</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
    </section>
    <?php
  }elseif ($type == "Todos") {
    ?>
    <section>
      <article class=''>
        <div class="container-fluid division">
          <center>
            <h1>
              <strong>
                Todos Los Productos
              </strong>
            </h1>
          </center>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Miguel</p>
                <p class="py-1 text-center">Este kit nos ayuda a depurar energias densas y de baja vibracion siendo el arcángel miguel el defensor de la verdad y la justicia.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Uriel</p>
                <p class="py-1 text-center">Este kit nos brinda la opotunidad de enfocarnos hacia el exito, la felicidad y las ideas brillantes. Atrae la prosperidad.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Gabriel</p>
                <p class="py-1 text-center">Este kit es una guia alentadora para realizar nuevos comienzos. Tambien es una gran compañia para los niños y embarazadas.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Rafael</p>
                <p class="py-1 text-center">Este kit nos empodera para la sanacion fisica, mental, emocional y espiritual para reconectarnos de corazon con nuestro ser.</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Jofiel</p>
                <p class="py-1 text-center">Este kit nos despierta para ver el lado positivo de la situacion. Afianza la confianza en ti mismo y en los demas.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitChamuel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Chamuel</p>
                <p class="py-1 text-center">Este kit representa el fortalecimiento del amor propio lo que te permitira ver oportunidades de las que no te habias percatado.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/kitZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Kit Arcángel Zaquiel</p>
                <p class="py-1 text-center">Este kit es la clave para desarrollar el perdon desde el amor para asi transformar aspectos del pasado que desees liberar.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorChamuel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/armonizadorZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualMiguel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualRafael.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualUriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualGabriel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualZaquiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img style="" src="assets/media/productos/ritualJofiel.png" alt="arcangel" class="img-prod">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px"></p>
                <p class="py-1"></p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasMiguel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Miguel</p>
                <p class="py-1 text-center">Yo soy fortaleza. Yo soy Valor. Yo soy proteccion.</p>
                <p class="py-1 text-center">Día: Domingo</p>
                <p class="py-1 text-center">Color: Azul</p>
                <p class="py-1 text-center">Potestad: Protrccion</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasJofiel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Jofiel</p>
                <p class="py-1 text-center">Yo soy sabiduria. Yo soy inspiracion. Yo soy comprension.</p>
                <p class="py-1 text-center">Día: Lunes</p>
                <p class="py-1 text-center">Color: Amarillo</p>
                <p class="py-1 text-center">Potestad: Sabiduria</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasChamuel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Chamuel</p>
                <p class="py-1 text-center">Yo soy amor. Yo soy armonia. Yo soy unidad.</p>
                <p class="py-1 text-center">Día: Martes</p>
                <p class="py-1 text-center">Color: Rosado</p>
                <p class="py-1 text-center">Potestad: Amor incondicional</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasGabriel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Gabriel</p>
                <p class="py-1 text-center">Yo soy esperanza. Yo soy prureza. Yo soy inspiracion.</p>
                <p class="py-1 text-center">Día: Miercoles</p>
                <p class="py-1 text-center">Color: Blanco</p>
                <p class="py-1 text-center">Potestad: inspiracion</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
      <article class=''>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasRafael.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Rafael</p>
                <p class="py-1 text-center">Yo soy claridad mental. Yo soy curacion. Yo soy equilibrio.</p>
                <p class="py-1 text-center">Día: Jueves</p>
                <p class="py-1 text-center">Color: Verde</p>
                <p class="py-1 text-center">Potestad: Salud</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasUriel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Uriel</p>
                <p class="py-1 text-center">Yo soy abundancia. Yo soy prosperidad. Yo soy gratitud</p>
                <p class="py-1 text-center">Día: Viernes</p>
                <p class="py-1 text-center">Color: Naranja</p>
                <p class="py-1 text-center">Potestad: Creatividad</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-3 mt-5' data-aos="fade-up" data-aos-duration="500">
              <center>
                <img src="assets/media/productos/velasZaquiel.png" alt="arcangel" class="img-prod velas">
              </center>
              <div class='card px-4 py-2' style="border-radius: 0 0 5px 5px;">
                <p style="font-size: 18px; text-align: center;">Vela Arcángel Zaquiel</p>
                <p class="py-1 text-center">Yo soy liberacion. Yo soy Transmutacion. Yo soy misericordia.</p>
                <p class="py-1 text-center">Día: Sabado</p>
                <p class="py-1 text-center">Color: Morado</p>
                <p class="py-1 text-center">Potestad: Transmutacion</p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </article>
    </section>
    <?php
  }
?>
    </section>
    <!-- Footer -->
      <footer class='page-footer white font-small lighten-5'>

        <div class='naranjado2'>
          <div class='container'>

            <!-- Grid row-->
            <div class='row py-4 d-flex align-items-center'>

              <!-- Grid column -->
<!--               <div class='col-md-6 col-lg-7 text-center text-md-left mb-4 mb-md-0'>
                <p class='mb-0'></p>
              </div> -->
              <!-- Grid column -->

              <!-- Grid column -->
              <div class='col-md-12 col-lg-12 text-center text-md-center'>

                <!-- Facebook -->
                <a class='fb-ic btn white btn-sm font-weight-bold' href='https://www.facebook.com/AromasyAngeles1/' title='facebook' target='_blank'>
                  <i class='fab fa-facebook-f face'> </i>
                </a>
                <!-- Twitter -->
                <!-- <a class='tw-ic'>
                  <i class='fab fa-twitter white-text mr-4'> </i>
                </a> -->
                <!--Instagram-->
                <a class='btn white btn-sm font-weight-bold' href='https://www.instagram.com/aromasyangeles/' title='instagram' target='_blank'>
                  <i class='fab fa-instagram insta'> </i>
                </a>

                <a class='btn white btn-sm font-weight-bold' href='https://api.whatsapp.com/send?phone=573122490811&text=Hola,%20quiero%20recibir%20m%C3%A1s%20informaci%C3%B3n' title='whatsapp' target='_blank'>
                  <i class="fab fa-whatsapp whats"></i>
                </a>
                <!-- GitHub -->
                <!-- <a class='git-ic'>
                  <i class='fab fa-github-alt'> </i>
                </a> -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>
        </div>

        <!-- Footer Links -->
        <div class='container text-center white text-md-left mt-5'>

          <!-- Grid row -->
          <div class='row mt-3 dark-grey-text'>

            <!-- Grid column -->
            <div class='col-md-3 col-lg-4 col-xl-3 mb-4'>

              <!-- Content -->
              <center><h6 class='font-weight-bold font-nar tit-foot' >Aromas & Ángeles</h6></center>
              <p class="text-justify font-nar py-3">Linea de aromas creada con aceites esenciales, en los que unimos la ciencia de la Aromaterapia y la Cromaterapia para crear mágicos elixires.</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>

              <!-- Links -->
              <center>
                <h6 class='font-weight-bold font-nar tit-foot'>Prod. principales</h6>
              </center>
              <center class="font-nar py-3">
                <p class=''><a style="color: #ee6810;" href="productos.php?type=Rituales" title="">Rituales</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=Armonizadores" title="">Armonizadores</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=AceitesAngelicales" title="">Aceites Angelicales</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=Esencias" title="">Esencias</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=DifusoresDeAromas" title="">Difusores de Aromas</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=Velas" title="">Velas</a></p>
                <p class=''><a style="color: #ee6810;" href="productos.php?type=KitEnergetico" title="">Kits Energéticos</a></p>              
              </center>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class='col-md-3 col-lg-2 col-xl-2 mx-auto mb-4'>

              <!-- Links -->
              <center>
                <h6 class='font-weight-bold font-nar tit-foot'>Links Utiles</h6>
              </center>
              <center class="font-nar py-3">
                <p>
                  <a class='' style="color: #ee6810;" title="Home" href='index.php' id='prod'>Inicio</a>
                </p>
                <p>
                  <a class='' style="color: #ee6810;" title="Productos" href='productos.php?type=Todos' id='prod'>Productos</a>
                </p>
                <p>
                  <a class='' style="color: #ee6810;" title="Nosotros" href='nosotros.php' id='nos'>Nosotros</a>
                </p>
              </center>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>

              <!-- Links -->
              <center>
                <h6 class='font-weight-bold font-nar tit-foot'>Contáctanos</h6>
              </center>
              <center class="font-nar py-3">
                <p>
                  <i class='fas fa-envelope mr-3'></i>aromasyangeles@gmail.com</p>
                <p>
                  <a class="" href='https://api.whatsapp.com/send?phone=573122490811&text=Hola,%20quiero%20recibir%20m%C3%A1s%20informaci%C3%B3n' style="color: #ee6810" title='whatsapp' target='_blank'>
                    <i class="fab fa-whatsapp mr-3"></i> +57 3122490811
                  </a>
                </p>
                <p>
                  <a class="" href='https://www.facebook.com/AromasyAngeles1/' style="color: #ee6810" title='facebook' target='_blank'>
                    <i class='fab fa-facebook-f mr-3'></i>Aromas & Ángeles
                  </a>
                </p>
                <p>
                  <a class="" href='https://www.instagram.com/aromasyangeles/' style="color: #ee6810" title='instagram' target='_blank'>
                    <i class='fab fa-instagram mr-3'></i>@aromasyangeles
                  </a>
                </p>
              </center>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class='footer-copyright text-center naranjado2 text-black-50 py-3'>© 2020 Copyright:
          <a class='blue-grey-text' target='_blank' href='https://kevaosportafolio.000webhostapp.com'>Kevin Orrego</a>
        </div>
        <!-- Copyright -->

      </footer>
    <!-- Footer -->
      <a class="btn naranjado btn-volver" onclick="volver()"><i class="fas volver fa-angle-double-up"></i></a>
      <script>
        function volver() {
          var y = window.pageYOffset;
          window.scrollTo(pageXOffset, 0);
        }
      </script>
    <!-- ajax -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- JQuery -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap tooltips -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
    <!-- Bootstrap core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <!-- MDB core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js'></script>
    <!-- scripts -->
  </body>
</html>
