<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = Product::all();
        return view('user.index', compact('users', $users));
    }

    public function create()
    {
        $user = new Product();

        return view('user.edit', compact('user', $user));
    }

    public function store(Request $request)
    {
        $input = (Input::except('_token'));
        try {
            $rs = Product::create($input);
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return back();

    }


    public function show($id)
    {
        $user = Product::find($id);
        return view('user.show', compact('user', $user));
    }

    public function edit($id)
    {
        $user = Product::find($id);
        return view('user.edit', compact('user', $user));
    }


    public function update(Request $request, $id)
    {
        $a = 1;
    }


    public function destroy(Request $request, $id)
    {
        $user = Product::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
