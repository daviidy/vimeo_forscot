@extends('layouts.menu-default')
@section('title', 'Tableau de bord')
@section('content')

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-3"></div>

          <div class="col-md-6" >
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">@<span>{{ucfirst(Auth::user()->name)}}</span></h5>
                  </a>
                  <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Télécharger une image</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Nom d'utilisateur" value="{{Auth::user()->name}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" placeholder="E-mail" value="{{Auth::user()->email}}">
                      </div>
                      <div class="col-md-4" style="margin: 0 auto;">
                          <button class="btn btn-primary btn-block tex-center" style="background-color: #478ed9;">Modifier</button>
                        </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-3"></div>
        </div>
      </div>

@endsection
