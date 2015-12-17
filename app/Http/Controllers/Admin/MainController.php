<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Point;
use App\Benefit;
use DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersCount = User::all()->count();
        $pointsCount = Point::all()->count();
        $benefitsCount = DB::select('select count(1) as value from benefit_user;')[0]->value; // te re cabio =D
        $avatarsCount = DB::select('select count(1) as value from avatar_user;')[0]->value;

        return view('admin.main', compact('usersCount', 'pointsCount', 'benefitsCount', 'avatarsCount'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function users()
    {
      $users = User::all();
      return view('admin.users', compact('users'));
    }

    public function points()
    {
      $points = Point::all();

      return view('admin.points', compact('points'));
    }

    public function benefits()
    {
      $users = User::has('benefits')->get();

      return view('admin.benefits', compact('users'));
    }

    public function avatars()
    {
      $users = User::has('avatars')->get();

      return view('admin.avatars', compact('users'));
    }

}
