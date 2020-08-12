@extends('layouts.menu-admin')
@section('title', 'Liste des vidéos')
@section('page_title', 'Liste des vidéos')
@section('link_title', 'Liste des vidéos')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Liste des Vidéos</h5>
                        <span>use class <code>table</code> inside table element</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                <li><i class="feather icon-trash close-card"></i></li>
                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                            </ul>
                        </div>
                    </div>
                     <!--Vidéo card container-->
                          <div class="card-body all-icons">
                            <div class="row">
                                <!--Vidéo card -->
                                @foreach($videos as $video)
                                @if($video->link && $video->uri)
                              <div class="col-md-4">
                                <div class="card">
                                    <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$video->name}}</h5>
                                      <p class="card-text">Formateur: {{$video->user->name}}</p>
                                      <a href="{{url('videos', $video)}}" class="btn btn-sm btn-primary">Voir la vidéo</a>
                                    </div>
                                </div>
                              </div>
                              @endif
                              @endforeach
                              <!--END Vidéo card-->
                            </div>
                          </div>
                          <!--END Vidéo card container-->
                </div>



            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>


@endsection
