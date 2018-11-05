<!DOCTYPE html>
<html lang="en">
<head>
  <title>Studio Nalin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- MetaTags importantes-->
  <meta name="description" content="Maquiagem, Penteados e cursos de maquiagem" />
  <meta name="keywords" content="maquiagem, penteados, dia da noiva, cursos de automaquiagem, curso maquiagem, studio nalin, nalin, fialho, jessica fialho, ingrid fialho"/>
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="all" />
  <meta charset="UTF-8" >

  <!-- favicon -->
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/estilo.css" rel="stylesheet">

  <!-- Bootstrap JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<style>


* {
  box-sizing: border-box;
}

.row2 > .column2 {
  padding: 0 8px;
}

.row2:after {
  content: "";
  display: table;
  clear: both;
}

.column2 {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal2 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content2 {
  position: relative;
  background-color: black;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close2 {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides2 {
  display: none;
}

.cursor2 {
  cursor: pointer;
}

/* Next & previous buttons */
.prev2,
.next2 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -70px;
  color: rgba(243, 165, 146) !important;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  background-color: rgba(0, 0, 0, 0.8);

}

/* Position the "next button" to the right */
.next2 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev2:hover,
.next2:hover {
  background-color: rgba(243, 165, 146);
  color: black !important;
}

/* Number text (1/3 etc) */
.numbertext2 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container2 {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo2 {
  opacity: 0.6;
}

.active2,
.demo2:hover {
  opacity: 1;
}

img.hover-shadow2 {
  transition: 0.3s;
}

.hover-shadow2:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body id="page-top">

  <!-- Menu -->
  <nav class="navbar navbar-expand-sm texto-branco">
  <a class="navbar-brand" href="#">
    <img src="imagens/logo.png" alt="logo" style="width:80px;">
  </a>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link texto-branco" href="https://studionalin.com/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link texto-branco" href="https://studionalin.com/portifolio">Portifólio</a>
          </li>
          <li class="nav-item">
              <a class="nav-link texto-branco" href="https://studionalin.com/contato">Contato</a>
          </li>

      </ul>
  </nav>
  <!-- FIM Menu -->


  <div class="text-center" style="margin-bottom:0">
    <br>
      <h1>Portifólio</h1>
  </div>
  <br>

<div class="row2">
  <div class="column2">
    <img src="imagens/portifolio5.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio6.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio7.png" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio4.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio10.png" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio15.png" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio16.png" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio11.png" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio17.png" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio9.png" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio3.png" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio13.png" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio19.png" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio1.png" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio2.png" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio18.png" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio14.png" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio20.png" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio21.png" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow2 cursor2">
  </div>
  <div class="column2">
    <img src="imagens/portifolio8.png" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow2 cursor2">
  </div>
</div>

<div id="myModal" class="modal2">
  <span class="close2 cursor2" onclick="closeModal()">&times;</span>
  <div class="modal-content2">

    <div class="mySlides2">
      <div class="numbertext2">1 / 20</div>
      <img src="imagens/portifolio5.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">2 / 20</div>
      <img src="imagens/portifolio6.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">3 / 20</div>
      <img src="imagens/portifolio7.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">4 / 20</div>
      <img src="imagens/portifolio4.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">5 / 20</div>
      <img src="imagens/portifolio10.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">6 / 20</div>
      <img src="imagens/portifolio15.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">7 / 20</div>
      <img src="imagens/portifolio16.png" style="width:100%">
    </div>/

    <div class="mySlides2">
      <div class="numbertext2">8 / 20</div>
      <img src="imagens/portifolio11.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">9 / 20</div>
      <img src="imagens/portifolio17.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">10 / 20</div>
      <img src="imagens/portifolio9.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">11 / 20</div>
      <img src="imagens/portifolio3.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">12 / 20</div>
      <img src="imagens/portifolio13.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">13 / 20</div>
      <img src="imagens/portifolio19.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">14 / 20</div>
      <img src="imagens/portifolio1.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">15 / 20</div>
      <img src="imagens/portifolio2.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">16 / 20</div>
      <img src="imagens/portifolio18.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">17 / 20</div>
      <img src="imagens/portifolio14.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">18 / 20</div>
      <img src="imagens/portifolio20.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">19 / 20</div>
      <img src="imagens/portifolio21.png" style="width:100%">
    </div>

    <div class="mySlides2">
      <div class="numbertext2">20 / 20</div>
      <img src="imagens/portifolio8.png" style="width:100%">
    </div>

    <a class="prev2" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next2" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container2">
      <p id="caption2"></p>
    </div>



<!-- INICIO RODAPÉ -->
<div class="jumbotron text-center" style="margin-bottom:0">
    <small class="texto-centralizado">&copy; 2018-2018</small>
    <p class="texto-centralizado">Todos os direitos reservados</p>
</div>
<!-- FIM RODAPÉ -->

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  var captionText = document.getElementById("caption2");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>
