<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing/styles/styles.css" />
    <!--Boxicons CDN Links-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>"Govi Sewana"</title>
</head>
<body>
    <div class="landing_page">
        <!--sidebar -->
        <div class="left">
            <?php include_once("landing/sidebar.php");?>
        </div>
        <!--end of side bar-->
        <div class="right">
       <!--slideshow images-->
       <div class ="slideshow">
        <div class="slideshow-container">

            <!--<div class="mySlides fade">
                <img class="land_image" src="./images/landing1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <img class="land_image" src="./images/landing2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <img class="land_image" src="./images/landing3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
-->
        </div>
        <br>

        <!--<div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

        <script>
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
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
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
            }
        </script>-->
    </div>
    <!--end of slideshow-->
    <!--stock from best selling farmers text-->
    <div class="topic">
        <span class="main-topic">Stocks From Best Selling Farmers</span>
    </div>

    <!--stock from best selling farmers-->
    <div class="farmer-stock">
        <!--row 1 start-->
        <?php for( $j = 0; $j<2; $j++ ){ ?>
        <div class="row">
            
                <?php for( $i = 0; $i<4; $i++ ){ ?>
                <div class="column">
                <a href="stockManagement/SelectStock.php" style="text-decoration:none">
                <div class="card">
                    <div class="stock-img">
                    <img class="stock-img-1" src="landing/images/carrot.jpg" alt="Jane" style="width:100%">
                    </div>
                    <div class="container">
                        <div class="line-1">
                            <div class="text1">
                                <p>Carrot 20KG</p>
                            </div>
                            <div class="text2">
                                <p>Rs.3000.00</p>
                            </div>
                        </div>
                        <div class="line-2">
                            <div class="text1">
                            <p class="title">Farmer : Nimal</p>
                            </div>
                            <div class="text2">
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
                </a>
                <?php } ?>
                
                <!--end of the card1-->
            </div>
            <?php } ?>
            
        <!--end of a row1-->
       
    <!--For you text-->
    <div class="topic">
        <span class="main-topic">FOR YOU</span>
    </div>
<!--for you stock posts-->
      <!--row 1 start-->
      <?php for( $j = 0; $j<2; $j++ ){ ?>
        <div class="row">
            
                <?php for( $i = 0; $i<4; $i++ ){ ?>
                <div class="column">
                <a href="stockManagement/SelectStock.php" style="text-decoration:none">
                <div class="card">
                    <div class="stock-img">
                    <img class="stock-img-1" src="landing/images/carrot.jpg" alt="Jane" style="width:100%">
                    </div>
                    <div class="container">
                        <div class="line-1">
                            <div class="text1">
                                <p>Carrot 20KG</p>
                            </div>
                            <div class="text2">
                                <p>Rs.3000.00</p>
                            </div>
                        </div>
                        <div class="line-2">
                            <div class="text1">
                            <p class="title">Farmer : Nimal</p>
                            </div>
                            <div class="text2">
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
                </a>
                <?php } ?>
                
                <!--end of the card1-->
            </div>
            <?php } ?>
    <!--end of for you stocks-->
    </div><!--end of right div-->
</div>

</body>

</html>