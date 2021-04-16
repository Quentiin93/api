<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $user = Validator::make($request->all(),[
            'username' => 'required|unique:Users',
            'email' => 'required|email|unique:Users',
            'password' => 'required|min:6',
        ]);
        try {
            $user = new Users;
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $password = $request->input('password');
            $user->password = app('hash')->make($password);
            $user->save();
            return response()->json($user, 201);
        } catch(\Exception $e) {
            return response()->json(['error' => 'failed registration', 'Message' => $e->getMessage()], 422);
        }
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
    public function single_user($id){
        try{
            $user = Users::findOrFail($id);
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['Message' => $e->getMessage()], 404);
        }
    }

    public function all_users(){
        try {
            $user = Users::all();
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['Message' => $e->getMessage()], 404);
        }
    }
}
