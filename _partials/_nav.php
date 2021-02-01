    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if($_GET['page']=='accueil') echo 'active' ?>">
          <a class="nav-link" href="?page=accueil">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if(isset($_SESSION['speudo']) && isset($_SESSION['id_user'])) {?>
          <li class="nav-item <?php if($_GET['page']=='modif_mdp') echo 'active' ?>">
          <a class="nav-link" href="?page=modif_mdp">Modif MDP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=deconnextion">Déconnection</a>
        </li>
        <?php } else { ?>
        <li class="nav-item <?php if($_GET['page']=='register') echo 'active' ?>">
          <a class="nav-link" href="?page=register">Inscription</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="?page=login">Connexion</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
    </nav>