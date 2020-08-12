<?php

namespace App\Http\Controllers;

use App\Video;
use App\User;
use App\Category;
use App\Comment;
use Auth;
use Image;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $videos = User::orderby('id', 'asc')->paginate(30);
            return view('admin.videos.index', ['videos' => $videos]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                // code...
            }
            $videos = User::orderby('id', 'asc')->paginate(30);
            return view('admin.videos.index', ['users' => $videos]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }




    //callback vimeo
    public function vimeoCallback(Request $request)
    {

        $state = $request->input('state');
        $code = $request->input('code');

        $user = User::find($state);

        function postData($params, $url)
                    {
                     try {
                     $curl = curl_init();
                     $postfield = '';
                     foreach ($params as $index => $value) {
                     $postfield .= $index . '=' . $value . "&";
                     }
                     $postfield = substr($postfield, 0, -1);
                     curl_setopt_array($curl, array(
                     CURLOPT_URL => $url,
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_ENCODING => "",
                     CURLOPT_MAXREDIRS => 10,
                     CURLOPT_TIMEOUT => 45,
                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                     CURLOPT_CUSTOMREQUEST => "POST",
                     CURLOPT_POSTFIELDS => $postfield,
                     CURLOPT_SSL_VERIFYPEER => false,
                     CURLOPT_HTTPHEADER => array(
                     "Authorization: Basic ". base64_encode("c8badb798a3c34802f424b247ba572ae60378494:5wP3Xc/2loDlqS6c/gsft3vecm3httLeeQzWRR9E3IxiSs6BtxiQQpNHqNhwRnT57C9A1qaDES+js3dJYnsKnKxYMmBstiMs+E5pMOzLDlEG79AtwDG9b6DjSc5xsh8e"),

                     ),
                     ));
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
                     curl_close($curl);
                     if ($err) {
                     throw new Exception("cURL Error #:" . $err);
                     return $err;
                     } else {
                     return $response;
                     }
                     } catch (Exception $e) {
                     throw new Exception($e);
                     }
                    }

                        $params = array('grant_type' => 'authorization_code',
                                        'code' => $code,
                                        'redirect_uri' => "http://localhost:8000/vimeocallback",
                                        );

                  $url = "https://api.vimeo.com/oauth/access_token";
                  //Appel de fonction postData()
                  $resultat = postData($params, $url);
                  $json = json_decode($resultat, true);

                  if (array_key_exists('access_token', $json)) {
                      $user->token = $json['access_token'];
                      $user->save();
                  }
                  else {
                      return redirect('home')->with('status', 'Une erreur s\'est produite');
                  }


                return redirect('home')->with('status', 'Viméo est autorisé pour votre session. Le token est '.$json['access_token']);




    }//fin function vimeoCallback



    public function postVideoToVimeo(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user->token !== null) {
            Session::put('token', $user->token);
        }

        /*
        $validation = Validator::make($request->all(), [
              'videoVimeo.*' => 'required|file|mimes:mp4|max:1000000'
          ],[
              'videoVimeo.*.required' => 'Please upload a file',
                'videoVimeo.*.mimes' => 'Only mp4 files are allowed',
                'videoVimeo.*.max' => 'Sorry! Maximum allowed size for an image is 1000MB',
          ]);

        if ($validation->passes()) {
            dd($request->videoVimeo);
        }
        */

        function postData($params, $url)
                    {
                     try {
                     $curl = curl_init();
                     $postfield = $params;
                     /*
                     $postfield = '';
                     foreach ($params as $index => $value) {
                     $postfield .= $index . '=' . $value . "&";
                     }
                     $postfield = substr($postfield, 0, -1);
                     */
                     curl_setopt_array($curl, array(
                     CURLOPT_URL => $url,
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_ENCODING => "",
                     CURLOPT_MAXREDIRS => 10,
                     CURLOPT_TIMEOUT => 45,
                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                     CURLOPT_CUSTOMREQUEST => "POST",
                     CURLOPT_POSTFIELDS => $postfield,
                     CURLOPT_SSL_VERIFYPEER => false,
                     CURLOPT_HTTPHEADER => array(
                     "Authorization: Bearer ". Session::get('token'),
                     "Content-Type: application/json",
                     "Accept: application/vnd.vimeo.*+json;version=3.4",
                     ),
                     ));
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
                     curl_close($curl);
                     if ($err) {
                     throw new Exception("cURL Error #:" . $err);
                     return $err;
                     } else {
                     return $response;
                     }
                     } catch (Exception $e) {
                     throw new Exception($e);
                     }
                    }
                        $data = array("upload" => array("approach" => "post",
                                                        "size" => str_replace("bytes", "", $request->videoVimeoSize),
                                                        "redirect_url" => "http://localhost:8000/uploadvideocallback",
                                                    )
                                                );
                        $params = json_encode($data);
                        //dd($params);


                  $url = "https://api.vimeo.com/me/videos";
                  //Appel de fonction postData()
                  $resultat = postData($params, $url) ;
                  $json = json_decode($resultat, true);
                  dd($json);
                  $link = $json['upload']['upload_link'];

                  $video = Video::where('name', $request->name)->first();
                  if ($video === null) {
                      $video = Video::create([
                          'name' => $request->name,
                          'link' => $json['link'],
                          'category_id' => $request->category_id,
                          'user_id' => $request->user_id,
                      ]);
                  }


                   //Session::put('error', $json['reason']);
                  return view('uploadVimeo', ['link' => $link]);




    }//fin function postVideoToVimeo

    public function uploadVideoCallback(Request $request)
    {
        return redirect('home')->with('status', 'La vidéo a bien été mise en ligne');



    }//fin function uploadVideoCallback




}
