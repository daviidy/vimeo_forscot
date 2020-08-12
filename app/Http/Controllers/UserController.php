<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Auth;
use Image;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function myVideos()
    {
        if (Auth::check() && !Auth::user()->isAdmin()) {
            $videos = Video::where('user_id', Auth::user()->id)->get();
            return view('default.myvideos', ['videos' => $videos]);
        }
        else {
            return redirect('home');
        }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $users = User::orderby('id', 'asc')->paginate(30);
            return view('admin.users.index', ['users' => $users]);
        }
        else {
            return redirect('home');
        }

    }

    //set user as admin
    public function defineAsAdmin(User $user)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $user->type = 'admin';
            $user->save();
            return redirect()->back()->with('status', 'L\utilisateur '.$user->name.' est maintenant administrateur');
        }
        else {
            return redirect('home');
        }

    }

    //revoke user admin rights
    public function revokeAdmin(User $user)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $user->type = 'default';
            $user->save();
            return redirect()->back()->with('status', 'L\utilisateur '.$user->name.' n\'est maintenant plus administrateur');
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
                return view('admin.users.show', ['user' => $user,]);

        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            return view('default.edit', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Auth::check()) {
            $user->update($request->all());
            if ($request->hasFile('image') ) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/images/'.$filename));
                $user->image = $filename;
                $user->save();
            }
            return redirect('/users/'.$user->id.'/edit')->with('status', 'Votre profil a été modifié avec succès');
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
