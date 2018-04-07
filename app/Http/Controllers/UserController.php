<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    var $users;
    public function index()
    {
        $users = Product::all();

        return view('user.index',compact('users',$users));
    }

    public function create()
    {
        $user = new Product();

        return view('user.edit',compact('user',$user));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        var_dump($input) ;
        die();
    }


    public function show($id)
    {
        $user = Product::find($id);
        return view('user.show',compact('user',$user));
    }

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

    }
}
