<!DOCTYPE html>
<html>
<title>Carrossel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="carrossel.css">
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
<div class="carrossel">

<?php foreach ($dadosDoBanco as $slide) { ?>
  <div class="mySlides">
    <img class="imagemCarrossel" src="<?=$slide[0]?>">
    <div class="textoSlide"><?=$slide[1]?></div>
  </div>
<?php } ?>

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

<script type="text/javascript" src="carrossel.js"></script>

</body>
</html>