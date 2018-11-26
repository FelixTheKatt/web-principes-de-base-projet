<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <title>Index</title>
</head>
<body>
<?php include('includes/navbar.inc.php'); ?>
<main>
<section id="carousel">
    <div id="carouselSlide" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSlide" data-slide-to="1"></li>
            <li data-target="#carouselSlide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active imgSlide1">
                <div class="container carouselDiv">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h2carousel">ARE YOU READY CINEY ?</h2>
                        </div>
                        <div class="col-md-12">
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias consequatur id
                                laborum libero numquam, perferendis qui sit. Impedit, vitae!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item imgSlide2">
                <div class="container carouselDiv">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h2carousel">Our Next Jacket</h2>
                        </div>
                        <div class="col-md-12">
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias consequatur id
                                laborum libero numquam, perferendis qui sit. Impedit, vitae!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item imgSlide3">
                <div class="container carouselDiv">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h2carousel">Our last album -Inside ME</h2>
                        </div>
                        <div class="col-md-12">
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias consequatur id
                                laborum libero numquam, perferendis qui sit. Impedit, vitae!</p>
                        </div>
                        <div class="col-md-12">
                            <a href="Song.php" class="btn defaultbutton ">Listen Inside ME for free</a>
                        </div>
                    </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</section>
    <section id="news" class="container marginUnderDiv">
        <div class="row">
            <div class="col-md-12">
                <h2>THE LATEST NEWS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-1  divNews">
                <img src="asset/images/news/audience-concert-crowd-1387174.jpg" alt="Last concert">
                <p>22 Nov,2018</p>
                <h2>Inside me + experience Live,2017 & 2018</h2>
                <p>Double cd & Digital release,special to spinning dolls followers</p>
            </div>
            <div class="col-md-3 offset-1  divNews">
                <img src="asset/images/news/architecture-autumn-avenue-773471.jpg" alt="Interview">
                <p>21 Nov,2018</p>
                <h2>A book is Comming soon</h2>
                <p>Bob is speaking with micheal.D.allan for a biography,stay tuned for more infos</p>
            </div>
            <div class="col-md-3 offset-1  divNews">
                <img src="asset/images/news/album-audio-classic-1616470.jpg" alt="Vinylls">
                <p>19 Nov,2018</p>
                <h2>Our first album Carioca Now in vinyle</h2>
                <p>We like vintage stuff and hope our fans too.We will do more think like this in future</p>
            </div>
        </div>
    </section>
    <section class="marginUnderDiv backgroundsection">
        <div id="stat" class="row">
            <div class="col-md-12">
                <h2>Some figures this year!</h2>
            </div>
            <div class="col-md-3">
                <div class="stick">
                    <p><i class="fa fa-user-secret"></i></p>
                    <h3>11+</h3>
                    <p>Private Concert</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stick">
                    <p><i class="fa fa-music"></i></p>
                    <h3>55+</h3>
                    <p>Concert</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stick">
                    <p><i class="fa fa-smile-o"></i></p>
                    <h3>2000000+</h3>
                    <p>Sold Album</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stick">
                    <p><i class="fa fa-microphone"></i></p>
                    <h3>100+</h3>
                    <p>Interviews</p>
                </div>
            </div>
        </div>
    </section>
    <section id="video"  class=" marginUnderDiv">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>WATCH</h2>
                </div>
                <div class="col-md-12">
                    <h2>Oostende Arena - Insane !</h2>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/GFlAFxLtdyE" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
</main>
<?php include('includes/footer.inc.php'); ?>
<script src="asset/js/jquery.js"></script>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/modalLogin.js"></script>
</body>
</html>