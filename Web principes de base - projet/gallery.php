<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <title>Galery</title>
</head>
<body>
<?php include('includes/navbar.inc.php'); ?>

<?php
echo '<div class="row justify-content-around topMargin">';
$liste = array();
$dir="asset/images/gallery/";

if ($dossier = opendir($dir)) {
    while (($item = readdir($dossier)) !== false) {
//        explode should be stocked in a variable or bug(doesn't work inside if)
        $explodeRef = explode('.', $item);
        if ($item[0] == '.') { continue; }
        if (!in_array(end($explodeRef), array('jpg','jpeg','png','gif'))) { continue; }
//        $liste[] = $item;
        array_push($liste,$item);
    }

    closedir($dossier);
    rsort($liste);
    $i = 1 ;
    foreach ($liste as $val) {
            echo '<div class="col-md-3 offset-1"><img onclick="openModal();currentSlide('.$i.')" class="hover-shadow img-fluid imgalery" src="'.$dir.'/'.$val.'" alt="'.$dir.'/'.$val.'" /></div>'."\n";
            $i++;
    }
}
echo '</div>';
echo '<div id="myModal" class="modal">';
echo '<span class="close cursor" onclick="closeModal()">&times;</span>';
echo  '<div class="modal-content row">';
$j = 1 ;
foreach ($liste as $val) {
    echo '<div class="mySlides col-md-12"><div class="numbertext">'.$j.'</div><img  class="hover-shadow col-md-8 imgModal img-fluid" src="'.$dir.'/'.$val.'" alt="'.$val.'" /></div>'."\n";
    $j++;
}
echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>';
echo  '<a class="next" onclick="plusSlides(1)">&#10095;</a>';
echo '<div class="caption-container">
      <p id="caption"></p>
    </div>';
echo '<div class="row">';
$k=1;
foreach ($liste as $val) {
    $valNoDotMJpeg=substr("$val",0,-5);
    $sweetTitleName = str_replace('-', ' ', $valNoDotMJpeg);
    echo '<div class="col-md-3"><img  class="gallery img-fluid" onclick="currentSlide('.$k.')" src="'.$dir.'/'.$val.'" alt="'.$sweetTitleName.'" /></div>'."\n";
    $k++;
}
echo '</div>';
echo '</div>';
echo '</div>';
?>
<?php include('includes/footer.inc.php');?>
        <script>
            // Open the Modal
            function openModal() {
                document.getElementById('myModal').style.display = "block";
            }

            // Close the Modal
            function closeModal() {
                document.getElementById('myModal').style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("gallery");
                var captionText = document.getElementById("caption");
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
        <script src="asset/js/jquery.js"></script>
        <script src="asset/js/bootstrap.bundle.min.js"></script>
        <script src="asset/js/modalLogin.js"></script>
</body>
</html>