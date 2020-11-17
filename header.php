<?php
    if(!isset($_SESSION['username']) AND !isset($_SESSION['Employee']) AND !isset($_SESSION['Header'])){
    ?>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="products.php" class="nav-link dropdown-toggle" aria-haspopup="true"
                  aria-expanded="false">Product</a>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a class="button button-header" href="login.php">Log in</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header> 
    <?php } ?>
  <?php
    if(isset($_SESSION['username'])or isset($_SESSION['Employee']) or isset($_SESSION['Header'])){
    ?>
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                      <a class="navbar-brand logo_h" href="index.php"><img src="img/logo1.png" alt=""></a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item submenu dropdown">
                                    <a href="products.php" class="nav-link dropdown-toggle" aria-haspopup="true"
                                    aria-expanded="false">Product</a>
							        </li>
                                    <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Blog</a>
							        </li>
							        <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Pages</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul class="nav-shop">
                                    <li class="nav-item"><a class="button button-header" href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            <?php
                }
            ?>