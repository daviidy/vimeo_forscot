<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/asset/img/forscot.png">
  <link rel="icon" type="image/png" href="/asset/img/forscot.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/asset/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/asset/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/asset/demo/demo.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style type="text/css">
  	body{
  		font-family: 'Montserrat', sans-serif !important;
  	}
  	.sidebar[data-color="orange"]:after, .off-canvas-sidebar[data-color="orange"]:after {
    background: #478ed9;
	}
	.sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]), .off-canvas-sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) {
    color: #478ed9;
	}

	.sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) i, .off-canvas-sidebar[data-color="orange"] .nav li.active>a:not([data-toggle="collapse"]) i {
    color: #478ed9;
	}
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <!--a href="http://www.creative-tim.com" class="simple-text logo-mini">

        </a-->
        <a href="https://forscot.oschoolelearning.com/" class="simple-text logo-normal" style="text-align: center;">
          <img src="https://forscot.oschoolelearning.com/images/schools/logos/1590163066.png" alt="Logo forscot" width="150">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/home">
              <i class="now-ui-icons design_app"></i>
              <p>Tableau de bord</p>
            </a>
          </li>
          <li>
            <a id="vimeoTrigger">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Ajouter une vidéo</p>
            </a>
          </li>
          <li>
            <a href="/myVideos">
              <i class="now-ui-icons media-1_button-play"></i>
              <p>Mes vidéos</p>
            </a>
          </li>
          <!--li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li-->
          <li>
            <a href="{{route('users.edit', Auth::user()->id)}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Paramètres</p>
            </a>
          </li>
          <!--li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li-->
          <li class="active-pro">
            <a href="https://forscot.oschoolelearning.com/">
              <!--i class="now-ui-icons arrows-1_cloud-download-93"></i-->
              <p>Plateforme de formation</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->

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
            <a class="navbar-brand" href="/myVideos">Mes vidéos</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <!--
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
        -->
            <ul class="navbar-nav">
                <!--
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
          -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">{{Auth::user()->id}}</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('users.edit', Auth::user()->id)}}">Paramètre</a>
                  <a class="dropdown-item" href="/myVideos">Mes vidéos</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                           Déconnexion
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                            </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Mon compte</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


		@yield('content')



		<footer class="footer">
	        <!--div class=" container-fluid ">
	          <nav>
	            <ul>
	              <li>
	                <a href="https://www.creative-tim.com">
	                  Creative Tim
	                </a>
	              </li>
	              <li>
	                <a href="http://presentation.creative-tim.com">
	                  About Us
	                </a>
	              </li>
	              <li>
	                <a href="http://blog.creative-tim.com">
	                  Blog
	                </a>
	              </li>
	            </ul>
	          </nav>
	          <div class="copyright" id="copyright">
	            &copy; <script>
	              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
	            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
	          </div>
	        </div-->
	      </footer>
	    </div>
	  </div>


      <!-- The Modal -->
        <div class="modal fade" id="vimeoModal">
          <div style="width: 100%" class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Choisissez la vidéo à mettre en ligne</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                  <form id="vimeoForm" class="" action="/postVideoToVimeo" method="post" enctype="multipart/form-data">
                      @csrf
                      <label for="">Nom de la vidéo</label>
                      <input type="text" name="name" value="" placeholder="Nom de la vidéo">
                      <input type="file" name="videoVimeo" what="question text" id="videoVimeoInput"
                        class="form-control ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style="">
                        <input hidden type="text" name="videoVimeoSize" value="" id="videoVimeoSize">
                       <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                       <label for="">Choisissez une catégorie</label>
                       <select class="" name="category_id">
                           @foreach($categories as $category)
                           <option value="{{$category->id}}"> {{$category->name}} </option>
                           @endforeach
                       </select>
                      <button style="display: flex;justify-content: center; margin: 2rem auto;" type="submit" class="tch-btn-header-primary disable-animations fastclickable">Valider</button>

                  </form>

              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              </div>

            </div>
          </div>
        </div>





	  <!--   Core JS Files   -->
	  <script src="/asset/js/core/jquery.min.js"></script>
	  <script src="/asset/js/core/popper.min.js"></script>
	  <script src="/asset/js/core/bootstrap.min.js"></script>
	  <script src="/asset/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	  <!--  Google Maps Plugin    -->
	  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	  <!-- Chart JS -->
	  <script src="/asset/js/plugins/chartjs.min.js"></script>
	  <!--  Notifications Plugin    -->
	  <script src="/asset/js/plugins/bootstrap-notify.js"></script>
	  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
	  <script src="/asset/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
	  <script src="/asset/demo/demo.js"></script>
	  <script>
	    $(document).ready(function() {
	      // Javascript method's body can be found in asset/js/demos.js
	      demo.initDashboardPageCharts();

	    });
	  </script>

      <script type="text/javascript">

      $('#vimeoTrigger').click(function() {
          $('#vimeoModal').modal('toggle');
      });

      $('#vimeoTrigger2').click(function() {
          $('#vimeoModal').modal('toggle');
      });


      $('#videoVimeoInput').on('change', function() {
                $('#videoVimeoSize').val(this.files[0].size + "bytes");
            });

        $('#vimeoForm').submit(function(){
          $('#videoVimeoInput').remove();
        });

      </script>
	</body>

	</html>
