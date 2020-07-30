@extends('layouts.menu-default')
@section('title', 'Tableau de bord')
@section('content')
<style type="text/css">
	.btn-block {
    display: block;
    width: 100%;
    padding: 18px!important;
    font-size: large!important;
}

.boton{
	margin-bottom: 15px;
}

.card-user .image {
    height: 228px !important;
}
.btn-primary {
    background-color: #478ed9!important;
    color: #FFFFFF;
}
</style>
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Tableau de bord</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Paramètre</a>
                  <a class="dropdown-item" href="#">Mes vidéos</a>
                  <a class="dropdown-item" href="#">Déconexion</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Tableau de bord</h2>
          <!--p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p-->
        </div>
      </div>
      <div class="content">
        <div class="row">
           <div class="col-md-8">
            <div class="card card-user">
              <div class="image">
                <img src="../asset/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../asset/img/mike.jpg" alt="...">
                    <h5 class="title">@username</h5>
                  </a>
                  <p class="description">
                    email block
                  </p>
                </div>
                <!--p class="description text-center">
                  "Lamborghini Mercy <br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"
                </p-->
              </div>
              <!--hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div-->
            </div>
          </div>


          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Action à mener</h4>
              </div>
              <div class="card-body">
                <div class="">
                	<a href="#">
	                  	<button class="btn btn-primary btn-block">
	                  		Ajouter une nouvelle vidéo
	              		</button>
              		</a>        
                </div>                 
               </div> 
               <div class="card-body">
                <div class="">
                	<a href="#">
	                  	<button class="btn btn-primary btn-block">
	                  		Modifier votre profit
	              		</button>   
              		</a>     
                </div>                 
               </div>        
                
              </div>
            </div>
          </div>
        </div>
      </div>

      @endsection