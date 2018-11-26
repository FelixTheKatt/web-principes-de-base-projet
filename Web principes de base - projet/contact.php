<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <title>Contact</title>
</head>
<body>
<?php include('includes/navbar.inc.php');?>
<main class="container">
<section id="contact" class="row marginUnderDiv">
    <div class="col-md-7">
        <h3>contact us</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name"><i class="fa fa-user"></i>your name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="mail"><i class="fa fa-envelope"></i>email</label>
                <input type="text" id="mail" name="mail" class="form-control">
            </div>
            <div>
                <label for="dest"><i class="fa fa-drupal"></i>Receiver</label>
                <select name="dest" id="dest" class="form-control">
                    <option value="0">Spinning Dolls</option>
                    <option value="1">Bob</option>
                    <option value="2">Kurt</option>
                    <option value="3">Eleonor</option>
                    <option value="4">Donald</option>
                    <option value="5">Mike</option>
                </select>
            </div>
            <div class="form-group">
                <label for="demande"><i class="fa fa-pencil"></i>Comment Now</label>
                <textarea  id="demande" name="demande" class="form-control"></textarea>
            </div>
            <label>
                <i class="fa fa-newspaper-o"></i>
                <input type="checkbox" checked="checked" name="subscribe"> Newsletter
            </label>
            <div>
                <button class="form-control defaultbutton">Register</button>
            </div>
        </form>
    </div>
    <div class="col-md-5 map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.173837083848!2d85.31069941483263!3d27.711918482790075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fde5814861%3A0x5a644fbd4d51d2fb!2sHotel+Buddha+Land!5e0!3m2!1sfr!2sbe!4v1542523328670"  ></iframe>
    </div>
</section>
    <section id="comment" class="backgroundsection marginUnderDiv">
        <div class="row">
            <h2 class="col-md-12">Comment</h2>
        </div>
        <div id="divcomment" class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="asset/images/avatar/avatar2.png" alt="Avatar">
                </div>
                <div class="col-md-8">
                    <h3><span>Jon snow</span> Lord of winterfell</h3>
                    <p>This group is awesome</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="asset/images/avatar/avatar5.png" alt="Avatar">
                </div>
                <div class="col-md-8">
                    <h3><span>Aria stark</span> Weird girl</h3>
                    <p>I like the song channel one so much because I m mad XD</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="asset/images/avatar/img_avatar.png" alt="Avatar">
                </div>
                <div class="col-md-8">
                    <h3><span>Vladimir Poutine</span> President of russia</h3>
                    <p>U are welcome in mother russia</p>
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