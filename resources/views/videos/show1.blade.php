@extends('layouts.menu-default')
@section('title', 'Tableau de bord')
@section('content')

<style type="text/css">
        .map{
          height: 100%;
        }
        .card-body .map iframe{
          width: 100%;
          height: 500px;
        }

        @media only screen and (max-width: 600px) {
        .card-body .map iframe{
            width: 100%; 
            height: 100%;
          }
        }
      </style>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                VIDEO TITLE
              </div>
              <div class="card-body ">
                <div id="" class="map">
                  <iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/COhvzD7_kbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  <div class="col-md-8" style="margin: 0 auto; margin-top: 15px; background-color: #eee;padding: 25px;">
                    <div>
                      <h4>Arsene</h4>
                      <p>bonjour je vais bien</p>
                    </div>
                  </div>

                  <div class="col-md-8" style="margin: 0 auto; margin-top: 15px;">
                        <form>
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="City" value="Mike">
                              </div>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Votre message</label>
                                <textarea rows="4" cols="80" class="form-control" placeholder="Ecrire ton message ici" value=""></textarea>
                              </div>
                            </div>
                          </div>
                        </form>
 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      @endsection