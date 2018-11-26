<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <img class="imgLogo img-fluid" src="asset/images/logo/spinningDolls.png" alt="logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="OurServices.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="Song.php">Last Album</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="event.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="Contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
    <button id="loginbutton" class="btn defaultbuttoncircle">Login</button>
    <!-- The Modal -->
    <div id="loginmodal" class="modalLogin">
        <!-- Modal content -->
        <div class="container">
            <div class="row">
                <div class="modalLogin-content ">
                    <div class="modalLogin-header col-md-12">
                        <span class="close">&times;</span>
                        <h2>Login</h2>
                    </div>
                    <div class="modalLogin-body col-md-12">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i>email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa fa-key"></i>Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </form>
                    </div>
                    <div class="modalLogin-footer col-md-12">
                            <a href="#" class="btn defaultbutton col-md-8 offset-2">Log</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>