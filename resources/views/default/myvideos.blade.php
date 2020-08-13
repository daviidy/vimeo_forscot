@extends('layouts.menu-default')
@section('title', 'Tableau de bord')
@section('content')

<style type="text/css">
	.all-icons .font-icon-detail {

    padding: 5px!important;
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Toutes mes vidéos</h5>
                <!--p class="category">Handcrafted by our friends from <a href="https://nucleoapp.com/?ref=1712">NucleoApp</a></p-->
              </div>
              <!--Vidéo card-->
              <div class="card-body all-icons">
                <div class="row">
                @foreach($videos as $video)
                @if($video->link && $video->uri)
                  <div class="col-md-4">
                    <div class="card">
                      <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$video->name}}</h5>
                        <!--
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    -->
                        <a href="{{url('videos', $video)}}" class="btn btn-sm btn-primary">Voir la vidéo</a>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <!--END Vidéo card-->
            </div>
          </div>
        </div>
      </div>

@endsection
