@extends('layouts.menu-admin')
@section('title', 'Administration')

@section('content')

<style media="screen">
  .main-panel>.content {
    padding: 0 30px 30px;
    min-height: calc(100vh - 123px);
    margin-top: -30px;
  }
  .card {
    border: 0;
    border-radius: 0.1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 20px;
    box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card-user .image {
    height: 120px;
}
.card .image {
    overflow: hidden;
    height: 200px;
    position: relative;
}

.card-user .avatar {
    width: 124px;
    height: 124px;
    border: 1px solid #FFFFFF;
    position: relative;
}

.title {
    font-weight: 700;
}
.card .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-bottom: 15px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin-bottom: 0;
}

img {
    max-width: 100%;
    border-radius: 0.1875rem;
}
img {
    vertical-align: middle;
    border-style: none;
}
h5, .h5 {
    font-size: 1.57em;
    line-height: 1.4em;
    margin-bottom: 15px;
}

.card-user .card-body {
    min-height: 240px;
}

.card .card-body {
    padding: 15px 15px 10px 15px;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-user .author {
    text-align: center;
    text-transform: none;
    margin-top: -77px;
}
</style>

@if(session('status'))
<div style="margin: 3rem;" class="alert alert-success">
    {{session('status')}}
</div>
@endif

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-3"></div>

          <div class="col-md-6" >
            <div class="card card-user">
              <div class="image">
                <img src="https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="/storage/users/images/{{Auth::user()->image}}" alt="{{Auth::user()->name}}">
                    <h5 class="title">@<span>{{ucfirst(Auth::user()->name)}}</span></h5>
                  </a>
                  <form action="{{url('users', Auth::user())}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('patch')}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
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
                        <input readonly type="text" class="form-control" placeholder="E-mail" value="{{Auth::user()->email}}">
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
