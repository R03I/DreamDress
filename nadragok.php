<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript"></script>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DREAM DRESS - Nadrágok</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light ">
        <a class="navbar-brand" href="index.php"><i class="fab fa-deploydog display-4"></i></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="nav-link"><i class="fas fa-arrows-alt-v"></i></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto float-left">
              <a class="nav-item nav-link" href="index.php">Kezdőlap<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="felsok.php">Felsők</a>
              <a class="nav-item nav-link active" href="nadragok.php">Nadrágok</a>
              <a class="nav-item nav-link" href="cipok.php">Cipők</a>
          </div>
          <div class="navbar-nav ml-auto float-right">
          <a href="" id="reg_log_menu" class="nav-item nav-link text-secondary" data-toggle="modal" data-target="#login_modal"><i class="fas fa-user"></i> Belépés/Regisztráció</a>
          <a href="" id="account_menu" class="nav-item nav-link text-secondary d-none" data-toggle="modal" data-target="#user_settings"><i class="fas fa-cog"></i><span id="user_acc_name"></span></a>
          <a href="" class="nav-item nav-link text-secondary" data-toggle="modal" id="kosar" data-target="#kosar_modal"><i class="fas fa-shopping-cart"></i> <span id="total_items"></span> </a>
           <a id="szamolo" class="nav-link dropdown-toggle text-secondary d-none d-lg-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-money-bill-wave text-secondary"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-center" id="jelenleg">Jelenleg <span id="jelenleg_osszeg"> </span> ft</a>
        </div>
        <a id="logout" class="nav-item nav-link text-secondary d-none"><span id="log_out"></span><i class="fas fa-sign-out-alt"></i></a>
      </div>
      </div>
    </nav>
    <div id="goodbye" class="alert alert-success text-center d-none">
    <strong>Sikeresen kiléptél.</strong> Várunk vissza <strong id="bye"></strong>.
    </div>
		<div id="carouselExampleSlidesOnly" data-interval="7000" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="img/nadrag3.jpg">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="img/nadrag.jpg">
    			</div>
    			<div class="carousel-item">
			      <img class="d-block w-100" src="img/nadrag2.jpg">
    			</div>
  			</div>
		</div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-center justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> Keresés szûkítése
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav col-lg-12 justify-content-center">
      <li class="nav-item col-lg-2">
        <a class="nav-link col-lg-12" id="osszes" > <input type="button" class="btn btn-outline-secondary col-lg-12" id="osszes" value="összes"></a>
      </li> 
      <li class="nav-item col-lg-2">
        <a class="nav-link col-lg-12" id=" farmer"> <input type="button" class="btn btn-outline-secondary col-lg-12" id="farmer" value="rövid farmer"> </a>
      </li>
      <li class="nav-item col-lg-2">
        <a class="nav-link col-lg-12"> <input type="button" class="btn btn-outline-secondary col-lg-12" id="rovid_farmer" value="szoknya"></a>
      </li>
      <li class="nav-item col-lg-2">
        <a class="nav-link col-lg-12" id="szoknya"> <input type="button" class="btn btn-outline-secondary col-lg-12" id="szoknya" value="hosszú farmer"></a>
      </li>
    </ul>
  </div>
</nav>
		<div class="container pb-5">
    <?php 
    require('php/dbconn.php');
    require('php/lekeres.php');
    $leker = new ruhak();
    $leker->termek_megjelenit($leker->termek_leker("nadrag"));
    ?>
    </div>
    <!-- FOOTER -->
      <footer id="myFooter" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center pt-5 my-0">
                    <a href="index.php"><i class="display-1 fab fa-deploydog"></i></a>
                </div>
                <div class="col-sm-3 pt-2 text-center">
                    <h5>Oldalak</h5>
                    <ul>
                        <li><a href="index.php">Kezdőlap</a></li>
                        <li><a href="felsok.php">Felsők</a></li>
                        <li><a href="nadragok.php">Nadrágok</a></li>
                        <li><a href="cipok.php">Cipők</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 pt-2 text-center">
                    <h5>Funkciók</h5>
                    <ul>
                        <li><a href="" data-toggle="modal" data-dismiss="modal" data-target="#login_modal">Belépés</a></li>
                        <li><a href="" data-toggle="modal" data-dismiss="modal" data-target="#register_modal">Regisztráció</a></li>
                        <li><a href="" data-toggle="modal" data-dismiss="modal" data-target="#kosar_modal">Kosar</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 pt-5">
                    <div class="social-networks">
                        <a href="http:\\www.twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="http:\\www.facebook.com" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="http:\\www.instagram.com" class="insta"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Készítette : Szakállas Róbert</p>
        </div>
    </footer>
	</div>
<!--MODAL CSAK ITT JÓ HELYEN VAN NEM ZAVAR BE-->
<!--MODAL LOGIN-->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Belépés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="log_form">
      <div class="modal-body">
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
        <input type="text" class="form-control" id="username" placeholder="Felhasználói név">
        <a href='#' id='error' rel='popover' data-placement='right' data-content='Minden mezőt kötelező kitölteni csak akkor léphet be' data-original-title='Adjon meg adatokat'></a>
        <a href='#' id='error13' rel='popover' data-placement='right' data-content='Hibás adatokat adott meg próbálja újra' data-original-title='Hibás adatok'></a>
        <a href='#' id='error2' rel='popover' data-placement='right' data-content='Adjon meg felhasználói nevet is' data-original-title='Üres név'></a>
      </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        <input type="password" id="password" class="form-control" placeholder="Jelszó">
        <a href='#' id='error3' rel='popover' data-placement='right' data-content='A jelszó mezőt üresen hagyta kötelező kitölteni' data-original-title='Üres jelszó'></a>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default mr-auto" data-toggle="modal" data-dismiss="modal" data-target="#register_modal">Regisztráció</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Mégse</button>
        <button type="submit" class="btn btn-success" id="login_now">Belépés</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--REGISZTÁCIÓ-->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Regisztráció</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="reg_form">
      <div class="modal-body">
        <div id="reged_modal" class="row text-center justify-content-center mt-5 mb-5">
          <p class="col-12 display-2 text-success"><i class="fas fa-check-circle"></i></p>
          <p class="col-12 h4" id="siker_reg"></p>
          <p id="felesleges_teszt"></p>
        </div>
    <div id="reg_modal" class="row">        
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
        <input type="text" maxlength="60" minlength="3" class="form-control" id="reg_username" placeholder="Felhasználói név">
        <a id='error4' rel='popover' data-placement='right' data-content='Minden mezőt kötelező kitölteni csak akkor érvényes a regisztráció' data-original-title='Töltse ki a mezőket'></a>
        <a id='error5' rel='popover' data-placement='right' data-content='Adjon meg felhasználói nevet is' data-original-title='Üres név'></a>
        <a id='error10' rel='popover' data-placement='right' data-content='Ez a felhasználói név már foglalt!' data-original-title='Foglalt név'></a>
      </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        <input type="password" id="reg_password" maxlength="70" minlength="3" class="form-control" placeholder="Jelszó">
        <a id='error6' rel='popover' data-placement='right' data-content='A jelszó mezőt üresen hagyta kötelező kitölteni' data-original-title='Üres jelszó'></a>
      </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        <input type="password" id="reg_password2" class="form-control" placeholder="Jelszó ismét">
        <a id='error7' rel='popover' data-placement='right' data-content='A két jelszó nem egyezik vagy hibásan adta meg próbálja újra' data-original-title='Nem egyezik'></a>
      </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
        <input type="email" id="reg_email" class="form-control" placeholder="Email cim">
        <a id='error11' rel='popover' data-placement='right' maxlength="200" minlength="5" data-content='Ezzel az email címmel már regisztálrak!' data-original-title='Foglalt email'></a>
        <a id='error8' rel='popover' data-placement='right' data-content='Csak valós email címet adhat meg' data-original-title='Rossz email cím'></a>
      </div>
    </div>
    </div>   
      <div class="modal-footer">
        <button type="button" class="btn btn-info  mr-auto"  data-toggle="modal" data-dismiss="modal" data-target="#login_modal">Belépés</button>
        <button type="button" class="btn btn-danger" id="cancel" data-dismiss="modal">Mégse</button>
        <button type="submit" class="btn btn-success" id="register">Regisztráció</button>
      </div>
      </form>
    </div>
    </div>
  </div>
</div>
<!--Kosár-->
<div class="modal fade" id="kosar_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLongTitle">Kosár tartalma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="kosar_error" class="alert alert-danger text-center d-none">
          <strong>Üres a kosár</strong> valamit helyezzen a kosárba.
        </div>
        <div id="kosar_error2" class="alert alert-danger text-center d-none">
          <strong>Lépj be</strong> Csak belépés után rendelhetsz
        </div>
        <div class="input-group mb-1" id="kosarba">
        
          <div class="col-sm-6 mt-3 text-left">
            <div class="input-group">
            <input class="form-control" type="text" placeholder="kupon" name="">
            <button type="button" class="input-group-text bg-info text-white" ><i class="fas fa-cut"></i></button>
          </div>
          </div>
          <div class="col-sm-6 text-right text-center h4 mt-3" id="osszertek"> Fizetendő összeg: 0 $</div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="kosar_urit" data-dismiss="modal" class="btn btn-info mr-auto" data-toggle="modal">Kosár ürítése</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Folytatás</button>
        <button type="button" class="btn btn-success" id="pay_model_open">Tovább</button>
      </div>
    </div>
  </div>
</div>
<!--Fizetés-->
<div class="modal fade" id="kosar_fizet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLongTitle">Fizetés áttekintés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-7 mt-1 text-left mb-5">
          <p class="h4">Szálltás típusa</p>
          <div class="form-check mt-3">
            <input class="form-check-input" type="radio" id="hazhoz" name="szallitas" value="hazhoz" checked>
              <label class="form-check-label">
              Sima házhoz szállítás (utánvételes fizetéssel)
            </label>
          </div>
          <div class="form-check mt-3">
            <input class="form-check-input" type="radio" id="hazhoz_gyors" name="szallitas" value="1100" disabled>
              <label class="form-check-label">
              Gyors házhoz szállítás +1100ft (jelenleg nem elérhető)
            </label>
          </div>
          <div class="form-check mt-3">
            <input class="form-check-input" type="radio" id="hazhoz_gyors" name="szallitas" value="hazhoz_gyors" disabled>
              <label class="form-check-label">
              PayPal fizetés (jelenleg nem elérhető)
            </label>
          </div>
          </div>
          <div class="col-sm-5 mt-1 text-left">
            <p class="h4">Összegzés</p>
            <table class="table" id="felsorolas">
              <thead id ="finish_upload">
                <tr>
                  <th scope="col">Név</th>
                  <th scope="col">Méret</th>
                  <th scope="col">Ár</th>
                </tr>
              </thead>
            </table>
            <p class="lead text-center" id="all_pay"></p>
        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" id="kosar_urit" data-dismiss="modal" class="btn btn-info mr-auto" data-toggle="modal">Kosár ürítése</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Folytatás</button>
        <button type="button" class="btn btn-success" id="login">Megrendelés</button>
      </div>
    </div>
  </div>
</div>
<!-- BEÁLLíTÁSOK -->
<div class="modal fade" id="user_settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLongTitle">Személyes adatok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="address_settings">
        <h1 class="text-center">Szállítási adatok</h1>
        <div class="row mt-3">
          <div id="adat_siker" class="alert alert-success col-12 text-center d-none">
        <strong>Sikeres szállítási adat frissítés</strong>
        </div>
          <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
        <input type="text" id="legit_name" class="form-control" placeholder="Név">
        <a id='error14' rel='popover' data-placement='right' maxlength="100" data-content='A név mezőt üresen hagyta kötelező kitölteni' data-original-title='Üres név'></a>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-truck"></i></span>
        <input type="text" id="address" class="form-control" maxlength="200" placeholder="Kiszállítási cím">
        <a id='error15' rel='popover' data-placement='right' data-content='A cím mezőt üresen hagyta kötelező kitölteni' data-original-title='Üres cím'></a>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-comment-alt"></i></span>
        <textarea class="form-control" id="comment" rows="10"></textarea>
        <a id='error16' rel='popover' data-placement='right' maxlength="499" data-content='Maximum 499 karaktert tartalmazhat' data-original-title='Túl hosszú'></a>
      </div>
       <div class="input-group mb-3"> 
        <button type="submit" class="btn btn-success w-100">Mentés</button>
      </div>
      </div>
    </form>
    <form id="newpassword">
      <h1 class="text-center mt-3">Jelszó változtatás</h1>
      <div class="row mt-3">
      <div id="re_password_jo" class="alert alert-success col-12 text-center d-none">
        <strong>Sikeres jelszó újítás</strong>
      </div>
        <div id="re_password_hiba" class="alert alert-danger col-12 text-center d-none">
        <strong>Próbálja újra hibás jelszó</strong>
    </div>
          <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        <input type="password" id="old_password" class="form-control" placeholder="Jelenlegi jelszó">
        <a id='error17' rel='popover' data-placement='right' maxlength="100" data-content='Nem ez a jelenlegi jelszava' data-original-title='Üres név'></a>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        <input type="password" id="new_password" class="form-control" placeholder="Új jelszó">
        <a id='error18' rel='popover' data-placement='right' maxlength="100" data-content='Hibás értéket írt be' data-original-title='Hiba'></a>
      </div>
      <div class="input-group mb-3"> 
        <button type="submit" class="btn btn-success w-100">Mentés</button>
      </div>
    </div>
    </form>
    </div>
    </div>
  </div>
</div>
</div>
<!--Hírlevél-->
<div class="modal fade" id="hirlevel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form id="myForm2">
      <div class="row">
        <div class="col-12 col-lg-6 p-5 text-center">
          <h3 class="text-center">Szeretne 10% kedvezményt?</h3>
          <p class="mt-2 lead">iratkozz fel hírlevelünkre</p>
          <input type="email" class="form-control text-center" name="email2" id="email2" placeholder="Email" aria-describedby="basic-addon1">
          <button type="submit" class="btn btn-info mt-2 w-100" id="feliratkozas">Felíratkozás</button>
        </div>
        <div class="col-6 d-lg-block d-none">
          <img class="w-100 h-100" src="img/hirlevel.jpg">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/rage.js"></script>
  <script type="text/javascript" src="js/register.js"></script>
  <script type="text/javascript" src="js/fun.js"></script>
  <script type="text/javascript" src="js/sendmailajax.js"></script>
  <script type="text/javascript" src="js/kosar.js"></script>
  <script type="text/javascript" src="js/re_password.js"></script>
  <script type="text/javascript" src="js/address_settings.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
</html>