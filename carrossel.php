<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    .carrossel {
        max-width: 980px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
    }

    .botoesCarrossel {
        color: #fff;
        font-size: 150%;
        position: absolute;
        border: none;
        display: inline-block;
        padding: 16px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        white-space: nowrap;
        top: 48%;
        transform: translate(0%,-50%);
        background-color: #1f1f1f;
        border-bottom: 4px solid #0d0d0d;
        border-left: 4px solid #0d0d0d;
        border-top: 4px solid #333333;
        border-right: 4px solid #333333;
        box-shadow: rgb(0 0 0 / 30%) 0px 19px 38px, rgb(0 0 0 / 22%) 0px 15px 12px;
        transition: all .2s cubic-bezier(.22, .61, .36, 1);
    }

    .botoesCarrossel:hover {
      cursor: pointer;
      background-color: #ec0052;
      border-bottom: 4px solid #b80040;
      border-left: 4px solid #b80040;
      border-top: 4px solid #ff3b7f;
      border-right: 4px solid #ff3b7f;
      box-shadow: rgb(0 0 0 / 30%) 0px 19px 38px, rgb(0 0 0 / 22%) 0px 15px 12px;
      transition: all .2s cubic-bezier(.22, .61, .36, 1);
    }

    .botaoDir {
        right: -7%;
    }

    .botaoEsq {
        left: -7%;
    }

    .imagemCarrossel {
      width: 100%;
      border-radius: 3px;
    }

    .textoSlide {
      padding-top: 2%;
      text-align: center;
    }
    
    .botoesInferiores {
      width: 100%;
      margin-bottom: 45px;
      font-size: 15px;
      position: absolute;
      left: 50%;
      bottom: 0;
      transform: translate(-50%,0%);
      text-align: center;
    }

    .botaoInferior {
      color: transparent;
      display: inline-block;
      padding-left: 5px;
      padding-right: 5px;
      text-align: center;
      background-color: #1f1f1f;
      border-bottom: 3px solid #0d0d0d;
      border-left: 3px solid #0d0d0d;
      border-top: 3px solid #333333;
      border-right: 3px solid #333333;
      box-shadow: rgb(0 0 0 / 30%) 0px 19px 38px, rgb(0 0 0 / 22%) 0px 15px 12px;
      user-select:none;
      transform: scaleY(30%);
      transition: all .2s cubic-bezier(.22, .61, .36, 1);
    }

    .botaoInferior:hover {
      cursor: pointer;
      background-color: #018df0;
      border-bottom: 3px solid #006ebd;
      border-left: 3px solid #006ebd;
      border-top: 3px solid #3badff;
      border-right: 3px solid #3badff;
      box-shadow: rgb(0 0 0 / 30%) 0px 19px 38px, rgb(0 0 0 / 22%) 0px 15px 12px;
      transition: all .2s cubic-bezier(.22, .61, .36, 1);
      transform: scaleY(80%);
    }

    .ativo {
      background-color: #ec0052;
      border-bottom: 3px solid #b80040;
      border-left: 3px solid #b80040;
      border-top: 3px solid #ff3b7f;
      border-right: 3px solid #ff3b7f;
    }
</style>
<body>

<?php
  $dadosDoBanco = [
    1 => ['NovidadeTEMP_1.png', "Vermes vomitam na boca do flip"],
    2 => ['NovidadeTEMP_2.png', "Vermes vomitam na boca do nivi"],
    3 => ['NovidadeTEMP_3.png', "Vermes vomitam na boca do gilbs"],
    4 => ['NovidadeTEMP_4.png', "Vermes vomitam na boca do soet"],
    5 => ['NovidadeTEMP_5.png', "Vermes vomitam na boca do bersk"],
  ];
?>
<h2 class="w3-center">Manual Slideshow</h2>

<div class="carrossel">
  <div class="mySlides">
    <img class="imagemCarrossel" src="NovidadeTEMP_1.png" style="width:100%">
    <div class="textoSlide">Texto 1</div>
  </div>
  <div class="mySlides">
    <img class="imagemCarrossel" src="NovidadeTEMP_2.png" style="width:100%">
    <div class="textoSlide">Texto 2</div>
  </div>
  <div class="mySlides">
    <img class="imagemCarrossel" src="NovidadeTEMP_3.png" style="width:100%">
    <div class="textoSlide">Texto 3</div>
  </div>
  <div class="mySlides">
    <img class="imagemCarrossel" src="NovidadeTEMP_4.png" style="width:100%">
    <div class="textoSlide">Texto 4</div>
  </div>
  <div class="mySlides">
    <img class="imagemCarrossel" src="NovidadeTEMP_5.png" style="width:100%">
    <div class="textoSlide">Texto 5</div>
  </div>
  <button class="botoesCarrossel botaoEsq" onclick="proximoSlide(-1)">&#10094;</button>
  <button class="botoesCarrossel botaoDir" onclick="proximoSlide(1)">&#10095;</button>

  <div class="botoesInferiores">
    <span class="botaoInferior ativo" onclick="currentDiv(1)">..</span>
    <span class="botaoInferior" onclick="currentDiv(2)">..</span>
    <span class="botaoInferior" onclick="currentDiv(3)">..</span>
    <span class="botaoInferior" onclick="currentDiv(4)">..</span>
    <span class="botaoInferior" onclick="currentDiv(5)">..</span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function proximoSlide(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var botoesInf = document.getElementsByClassName("botaoInferior");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    botoesInf[i].classList.remove("ativo");
  }
  slides[slideIndex-1].style.display = "block";  
  botoesInf[slideIndex-1].classList.add("ativo");
}
</script>

</body>
</html>