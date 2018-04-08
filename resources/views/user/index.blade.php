@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    @if (session('test'))
        <p>{{ session('test') }}</p>
    @endif

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
                                    {!! Form::open([
                                    'action' => ['UserController@edit', $user->id],
                                    'method' => 'GET',
                                    ]) !!}
                                    {!! Form::submit(trans('update', ['object' => class_basename(Product::class)]), [
                                        'class' => 'btn  btn-primary btn-flat',
                                    ]) !!}
                                    {!! Form::close() !!}


                                    {!! Form::open([
                                    'action' => ['UserController@destroy', $user->id],
                                    'method' => 'DELETE',
                                    ]) !!}
                                    {!! Form::submit(trans('delete', ['object' => class_basename(Product::class)]), [
                                        'class' => 'btn  btn-danger btn-flat',
                                    ]) !!}
                                    {!! Form::close() !!}
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