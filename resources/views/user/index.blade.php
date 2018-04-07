@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    @if(is_null($users))
        khong co ket qua
    @else
        <div class="container" style="margin-top:60px">
            <div class="row">
                <a href="<?php echo route('user.create') ?>" class="btn  btn-primary btn-flat">create</a>
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>cmnd</th>
                        <th>name</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <p>
                                    {{ $user->id }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <a href="{{ action('UserController@show', $user->id) }}">
                                        {{ $user->name }}
                                    </a>

                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $user->image }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $user->price }}
                                </p>
                            </td>
                            <td>
                                <div class="col-md-2 col-md-offset-5">
                                    <a class="btn  btn-primary btn-flat"
                                       href="update.php?id=">update</a>

                                    <a class="btn  btn-danger btn-flat"
                                       href="delete.php?id="
                                    >delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    @endif
@endsection