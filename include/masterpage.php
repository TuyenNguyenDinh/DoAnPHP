<?php
function myheader()
{
    $xau = '
        <!doctype html>
        <html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    <title>Bán hàng online</title>
  </head>
  <body>
    <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="#"><img src="images/logo.png" height="30px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?id=0">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                    role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">
                    Category
                    </a>                  
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

    $arr = getArr();
    for ($i = 0; $i < count($arr); $i++) {
        $xau .= '<a class="dropdown-item" href="index.php?id=' .
            $arr[$i]->id . '">' . $arr[$i]->name . '</a>';
    }
    $xau .= '</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="jumbotron text-center"  >
         <!--chèn quảng cáo -->
         <div class="slideshow-container">

            <div class="mySlides fade">
            <img src="images/banner1.jpg" style="width:100%">
            <div class="text">Cầu trường tiền</div>
            </div>

            <div class="mySlides fade">
            <img src="images/banner2.jpg" style="width:100%">
            <div class="text">Đại nội Huế</div>
            </div>

            <div class="mySlides fade">
            <img src="images/banner3.jpg" style="width:100%">
            <div class="text">Chùa Linh mụ</div>
            </div>

            </div>
            <br>

            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>

            <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active1", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active1";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
        </div>
        </body>
        </html>       ';
    echo $xau;
}
function myfooter()
{
    $xau = '
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li>';
    $arr = getArr();
    for ($i = 0; $i < count($arr); $i++) {
        $xau .= '<a href="index.php?id=' .
            $arr[$i]->id . '">' . $arr[$i]->name . '</a> <br>';
    }
    $xau .= '</li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-dribbble-square"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
        ';
    echo $xau;
}
