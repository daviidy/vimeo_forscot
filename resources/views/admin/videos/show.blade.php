@extends('layouts.menu-admin')
@section('title', 'Liste des utilisateurs')
@section('page_title', 'Liste des utilisateurs')
@section('link_title', 'Liste des utilisateurs')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Liste des utilisateurs</h5>
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
                      <style type="text/css">
                        body{
                            background-color: #e5eaee;
                            font-family: 'Montserrat', sans-serif;

                        }
                        /*.video-detail{
                            background-color: #fff; 
                            padding: 15px 55px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        }
                    */
                        .video-detail h3{
                            padding: 35px 0; 
                            text-transform: uppercase;
                        }

                        .video-container iframe{
                            width: 100%; 
                            height: 500px;
                        }

                        .video-description p{
                            padding: 35px 0;
                        }
                        
                        @media only screen and (max-width: 600px) {
                            .video-container iframe{
                                width: 100%; 
                                height: 100%;
                            }
                            .video-detail {
                                background-color: #fff;
                                padding: 15px 10px;
                            }
                            .video-description p{
                                padding: 25px 15px;
                            }
                        }

                      
                            /*! CSS Used from: https://colorlib.com/preview/theme/libro/css/style.css */
                    *,*::before,*::after{-webkit-box-sizing:border-box;box-sizing:border-box;}
                    h3{margin-top:0;margin-bottom:0.5rem;}
                    p{margin-top:0;margin-bottom:1rem;}
                    ul{margin-top:0;margin-bottom:1rem;}
                    ul ul{margin-bottom:0;}
                    a{color:#79efb4;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
                    a:hover{color:#35e78e;text-decoration:underline;}
                    img{vertical-align:middle;border-style:none;}
                    label{display:inline-block;margin-bottom:0.5rem;}
                    input,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
                    input{overflow:visible;}
                    [type="submit"]{-webkit-appearance:button;}
                    [type="submit"]::-moz-focus-inner{padding:0;border-style:none;}
                    textarea{overflow:auto;resize:vertical;}
                    h3{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
                    h3{font-size:1.75rem;}
                    .form-control{display:block;width:100%;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:0.25rem;-webkit-transition:border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;-o-transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;}
                    @media screen and (prefers-reduced-motion: reduce){
                    .form-control{-webkit-transition:none;-o-transition:none;transition:none;}
                    }
                    .form-control::-ms-expand{background-color:transparent;border:0;}
                    .form-control:focus{color:#495057;background-color:#fff;border-color:#ebfdf4;outline:0;-webkit-box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.25);box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.25);}
                    .form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
                    .form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
                    .form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
                    .form-control::placeholder{color:#6c757d;opacity:1;}
                    .form-control:disabled{background-color:#e9ecef;opacity:1;}
                    .form-group{margin-bottom:1rem;}
                    .btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;-webkit-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;-o-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;}
                    @media screen and (prefers-reduced-motion: reduce){
                    .btn{-webkit-transition:none;-o-transition:none;transition:none;}
                    }
                    .btn:hover,.btn:focus{text-decoration:none;}
                    .btn:focus{outline:0;-webkit-box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.25);box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.25);}
                    .btn:disabled{opacity:0.65;}
                    .btn-primary{color:#212529;background-color:#79efb4;border-color:#79efb4;}
                    .btn-primary:hover{color:#212529;background-color:#57eba1;border-color:#4bea9b;}
                    .btn-primary:focus{-webkit-box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.5);box-shadow:0 0 0 0.2rem rgba(121, 239, 180, 0.5);}
                    .btn-primary:disabled{color:#212529;background-color:#79efb4;border-color:#79efb4;}
                    .bg-light{background-color:#f8f9fa!important;}
                    .mt-5{margin-top:3rem!important;}
                    .mb-5{margin-bottom:3rem!important;}
                    .py-3{padding-top:1rem!important;}
                    .py-3{padding-bottom:1rem!important;}
                    .p-4{padding:1.5rem!important;}
                    .px-4{padding-right:1.5rem!important;}
                    .px-4{padding-left:1.5rem!important;}
                    .pt-5{padding-top:3rem!important;}
                    @media print{
                    *,*::before,*::after{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
                    a:not(.btn){text-decoration:underline;}
                    img{page-break-inside:avoid;}
                    p,h3{orphans:3;widows:3;}
                    h3{page-break-after:avoid;}
                    }
                    a{-webkit-transition:.3s all ease;-o-transition:.3s all ease;transition:.3s all ease;color:#ee76ad;}
                    a:hover{text-decoration:none;color:#ee76ad;}
                    h3{line-height:1.5;color:#000;font-weight:300;font-family:"Playfair Display", Georgia, serif;}
                    .bg-light{background:#fafafa!important;}
                    .btn{cursor:pointer;border-radius:30px;-webkit-box-shadow:none!important;box-shadow:none!important;}
                    .btn:hover,.btn:active,.btn:focus{outline:none;}
                    .btn.btn-primary{background:#478ed9;border:1px solid #478ed9;color:#fff;}
                    .btn.btn-primary:hover{border:1px solid #478ed9;background:transparent;color:#478ed9;}
                    .form-control{height:52px!important;background:#fff!important;color:#000!important;font-size:18px;border-radius:0px;-webkit-box-shadow:none!important;box-shadow:none!important;}
                    .form-control:focus,.form-control:active{border-color:#000;}
                    textarea.form-control{height:inherit!important;}
                    .comment-form-wrap{clear:both;}
                    .comment-list{padding:0;margin:0;}
                    .comment-list .children{padding:50px 0 0 40px;margin:0;float:left;width:100%;}
                    .comment-list li{padding:0;margin:0 0 30px 0;float:left;width:100%;clear:both;list-style:none;}
                    .comment-list li .vcard{width:80px;float:left;}
                    .comment-list li .vcard img{width:50px;border-radius:50%;}
                    .comment-list li .comment-body{float:right;width:calc(100% - 80px);}
                    .comment-list li .comment-body h3{font-size:20px;}
                    .comment-list li .comment-body .meta{text-transform:uppercase;font-size:13px;letter-spacing:.1em;color:#ccc;}
                    .comment-list li .comment-body .reply{padding:5px 10px;background:#e6e6e6;color:#000;text-transform:uppercase;font-size:11px;letter-spacing:.1em;font-weight:400;border-radius:4px;}
                    .comment-list li .comment-body .reply:hover{color:#fff;background:black;}
                    /*! CSS Used fontfaces */
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
                    @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
                    @font-face{font-family:'Playfair Display';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
                         
                      </style>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 video-detail">
                            <div>
                                <h3>Vidéo title</h3>
                            </div>
                            <div class="video-container">
                                <iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/COhvzD7_kbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-description">
                                 <div>
                                <div class="about-author d-flex pt-5">
                                  <div class="bio align-self-md-center mr-4">
                                  <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                                  </div>
                                  <div class="desc align-self-md-center">
                                  <h3 _msthash="2307175" _msttexthash="2148705">À propos de L’Auteur</h3>
                                  <p _msthash="2271464" _msttexthash="29386370">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessiatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similie, inventeur eos fugit cupiditate numquam!</p>
                                  </div>
                                </div>

                              <div class="pt-5 mt-5">
                              <h3 class="mb-5" _msthash="1900028" _msttexthash="228072">6 Commentaires</h3>
                              <ul class="comment-list">
                              <li class="comment">
                              <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                              <h3 _msthash="3046693" _msttexthash="86996">Jean Doe</h3>
                              <div class="meta" _msthash="3209921" _msttexthash="236964">27 juin 2018 à 14h21</div>
                              <p _msthash="3006484" _msttexthash="27210261">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessiatibus, ipsam impedit vitae autem, eum offica, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessiatibus, nihil?</p>
                              <p><a href="#" class="reply" _msthash="3007446" _msttexthash="109967">Réponse</a></p>
                              </div>
                              </li>
                              
                              </ul>

                              <div class="comment-form-wrap pt-5">
                              <h3 class="mb-5" _msthash="2308657" _msttexthash="231257">Laissez un commentaire</h3>
                              <form action="#" class="bg-light p-4">
                              <input type="hidden" name="user_id" value="Auth::user()->id">
                              <input type="hidden" name="video_id">
                              <div class="form-group">
                              <label for="message" _msthash="3718416" _msttexthash="92924">Message</label>
                              <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                              <input type="submit" value="Poster le commentaire" class="btn py-3 px-4 btn-primary" _mstvalue="180726">
                              </div>
                              </form>
                              </div>
                              </div>

                            </div>

                                      
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                      </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>


@endsection
