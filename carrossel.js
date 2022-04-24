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