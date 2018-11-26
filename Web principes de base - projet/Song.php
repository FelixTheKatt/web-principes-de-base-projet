<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <title>Song</title>
</head>
<body>
<?php include('includes/navbar.inc.php');?>

<audio class="col-md-12" src="asset/audio/turkish-march-rondo-alla-turca.mp3" controls id="audioPlayer">
</audio>
<?php
$liste = array();
$dir="asset/audio/";
if ($dossier = opendir($dir)) {
    while (($item = readdir($dossier)) !== false) {
//        explode should be stocked in a variable or bug(doesn't work inside if)
        $explodeRef = explode('.', $item);
        if ($item[0] == '.') { continue; }
        if (!in_array(end($explodeRef), array('mp3','wma'))) { continue; }
//        $liste[] = $item;
        array_push($liste,$item);
    }

    closedir($dossier);
    rsort($liste);
    $i = 1 ;
    echo '<div class="row justify-content-center">
            <ul id="playlist" class="list-group col-md-8 ">
            <li class="list-group-item"><h2>Album : inside me</h2></li>';
    foreach ($liste as $val) {
            $valNoDotMp3 =substr("$val",0,-4);
            $sweetTitleName = str_replace('-', ' ', $valNoDotMp3);
        echo '<li class="list-group-item"><a href="'.$dir.'/'.$val.'">'.$sweetTitleName.'</a></li>'."\n";
            $i++;
    }
}
echo '</ul>
</div>';
?>
<?php include('includes/footer.inc.php');?>
<script src="asset/js/jquery.js"></script>
<script src="asset/js/audioPlaylist.js"></script>
<script>
    audioPlayer();
</script>
<script src="asset/js/modalLogin.js"></script>
</body>
</html>
