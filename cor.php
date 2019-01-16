<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href= "bn.ico" type="image/ico">
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/add.css" type="text/css">
  </head>
  <body>
    <header>
      <center>
        <h1>Welcome to the site</h1>
      </center>
    </header>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Brand</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  
    <div class="slide-container">
      <div class = "img-fade">
        <div class="numbertext"> 1/2 </div>
        <img src="/Picture/fashion.jpg" alt="fashion" width= "100%">
        <div class= "text"> Fashion </div>
      </div>
      <div class = "img-fade">
        <div class="numbertext"> 2/2 </div>
        <img src="/Picture/bas.jpg" alt="bas" width="100%">
        <div class= "text"> Fashion </div>
      </div>
      <a class="prev" onclick="plusSlide(-1, 0)">&#10094</a>
      <a class="next" onclick="plusSlide(1, 0)">&#10094</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>