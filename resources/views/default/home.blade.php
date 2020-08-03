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
                    <h5 class="title">{{ucfirst(Auth::user()->name)}}</h5>
                  </a>
                  <p class="description">
                    {{Auth::user()->email}}
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
                	<a href="{{route('users.edit', Auth::user()->id)}}">
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
