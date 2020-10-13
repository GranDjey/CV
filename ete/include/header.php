<style>
  .navbar {
    position: fixed;
    width: 84%;
    z-index: 20;
    background-color: #ddd !important;
    padding: 0 !important;
    padding: 0 2% 0 2%;
    top: 0;
    margin: 0;
  }

  .navbar-brand {
    display: none;
  }

  .navbar-toggler{
    margin: 15px;
    outline: none !important;
    border-color: #FF5C00!important;
  }

  .home {
    margin: auto 40px;
  }

  .dropbtn {
    background-color: #ddd !important;
    color: #1d1d1d;
    padding: 30px 80px;
    font-size: 20px;
    font-weight: 600;
    border: none;
  }

  .dropbtn:hover {
    color: #ff5c00 !important;
    background-color: #F8F9FA !important;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1 !important;
    z-index: 1;
    transition: 1s;
    width: 100%;
  }

  #drop {
    color: white !important;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  #drop:hover {
    background-color: black !important;
    color: #ff5c00 !important;
  }

  .dropdown:hover .dropdown-content {
    display: block;
    background-color: black !important;
  }

  .dropdown:hover .dropbtn {
    background-color: #F8F9FA !important;
  }

  .tel {
    font-size: 18px;
    font-weight: 500;
    color: #FF5C00 !important;
    text-align: center;
    margin: 0;
    line-height: 1.8em;
  }

  .form {
    display: flex;
  }

  .btn {
    color: black !important;
    border: solid 1px black !important;
  }

  .btn:hover {
    border: solid 1px black !important;
    background-color: #ff5c00;
  }

  .logo_mobile {
    display: none;
  }
  
  .logo_mobile img{
      height:auto;
      width: 50px;
    }

    .mobile-tel{
        display: none;
    }

    .float-right{
      transform: translateX(-25px);
    }

    .navbar-light .navbar-toggler{
      width: 50px;
    }

    .navbar-light .navbar-toggler-icon{
      margin-left: -3px;
    }

  @media only screen and (max-width: 1200px) {

    .navbar {
      width: 100%;
      height: 70px;
    }
  }

  @media only screen and (max-width: 992px) {

    .contact {
      display: none;
    }

    .navbar-nav {
      width: 100%;
      margin: 0 !important;
      text-align: center;
    }

    .form {
      display: none;
    }

    .tel {
      width: 98vw;
      margin: 10px auto;
    }

    .dropdown {
      width: 20rem;
      margin: 10px auto;
    }

    .logo_mobile {
      display: block;
    }

    .mobile-tel{
        display: block;
        justify-content: center;
        text-align: center;
    }

    .float-right{
        display: none;
    }

    .telm {
        font-size: 16px;
        font-weight: 500;
        margin: 0 auto;
        line-height: 1.8em;
        font-weight: 500;
        color: #FF5C00 !important;
        }
  }

  @media only screen and (max-width: 500px) {
        .mobile-tel {
        float:left;
        }

        .telm{
            font-size: 13px;
            margin-left: -12px;
        }

        .home{
          margin-top: 20px;
        }
    
    }
</style>
<?php
    $requete = "SELECT * FROM user";
    $reponse = $conn->query($requete);
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="menu.php"><img src="../img2/logo1.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="mobile-tel">
            <a class="telm" href="<?php echo  $_SESSION['tel'] ?>"><?php echo  $_SESSION['tel'] ?></a><br>
            <a class="telm" href="mailto:bonjour@ete-indien-editions.fr">Mail: bonjour@ete-indien-editions.fr</a>
        </div>
  <a class="logo_mobile" href="menu.php"><img src="../img2/logogris.jpg" alt="logo"></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <a class="home" href="menu.php" style="color: #FF5C00 !important; "> <i class="fas fa-home fa-2x"></i>
      </a>
      <li class="dropdown"">
      <button class=" dropbtn">VIDEOS</button>
        <div class="dropdown-content" id="myBtnContainer">
        <a id="drop" class="filt active" onclick="filterSelection('all')">TOUT VOIR</a>
          <a id="drop" class="filt" onclick="filterSelection('Gym douce')">GYM DOUCE</a>
          <a id="drop" class="filt" onclick="filterSelection('Prévention des chutes')">PRÉVENTION DES CHUTES</a>
          <a id="drop" class="filt" onclick="filterSelection('Maladies cardio-vasculaires')">MALADIES CARDIO-VASCULAIRES</a>
          <a id="drop" class="filt" onclick="filterSelection('Arthrose')">ARTHROSE</a>
          <a id="drop" class="filt" onclick="filterSelection('Qi gong')">BIEN ETRE</a>
          <a id="drop" class="filt" onclick="filterSelection('Gym sur chaise')">GYM SUR CHAISE</a>
          <a id="drop" class="filt" onclick="filterSelection('Gym douce aidants')">GYM DOUCE POUR LES AIDANTS</a>
        </div>
      </li>
    </ul>
    <?php
      $donnees = $reponse ->fetch()                          
    ?>
    <div class="float-right">
      <a class="tel" href="<?php echo  $_SESSION['tel'] ?>"><?php echo  $_SESSION['tel'] ?></a><br>
      <a class="tel" href="mailto:bonjour@ete-indien-editions.fr">Mail: bonjour@ete-indien-editions.fr</a>
    </div>
  </div>
</nav>