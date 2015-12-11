<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request['email'])->first();

        if ($user) {
            if (\Hash::check($request['password'], $user->password)) {
                return response()->json([
                    'status' => 'ok',
                    'user'   => $user
                ]);
            } else {
                return response()->json([
                    'status' => 'El password es incorrecto'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'No hay un usuario registrado con esa dirección'
            ]);
        }
    }

    public function register(Request $request)
    {
        $input = $request->all();

        $rules = [
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed',
            // 'birthdate' => 'required|date',
            'terms'     => 'accepted'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->passes()) {
            $user = new User();

            $user->firstname = $input['firstname'];
            $user->lastname  = $input['lastname'];
            $user->email     = $input['email'];
            $user->password  = \Hash::make($input['password']);
            // $user->birthdate = $input['birthdate'];

            $user->save();

            return response()->json([
                'status' => 'ok',
                'user'   => $user
            ]);
        } else {
            return response()->json([
                'status' => $validator->errors()->all()
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
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
        $input = $request->all();

        $rules = [
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'password'  => 'confirmed',
            'birthdate' => 'required|date'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->passes()) {
            $user = User::find($id);

            $user->firstname = $input['firstname'];
            $user->lastname  = $input['lastname'];
            $user->email     = $input['email'];
            // $user->password  = \Hash::make($input['password']);
            $user->birthdate = $input['birthdate'];

            $user->save();

            return response()->json([
                'status' => 'ok',
                'user'   => $user
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
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
}
