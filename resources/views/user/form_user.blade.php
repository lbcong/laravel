<table class="table table-bordered">
    <tbody>
    <tr>
        <td>
            <p>ID</p>
        </td>
        <td>
            {{ Form::number('id', isset($user->id) ? $user->id : old('id'),
            ['class' => 'form-control', 'id' => 'id', 'required' => true,'placeholder'=>'1233,314', 'autofocus' => true,
            'style'=>'width:100%'
            ]) }}
        </td>
    </tr>
    <tr>

        <td>
            <p>User</p>
        </td>
        <td>
            {{ Form::text('name', isset($user->name) ? $user->name : old('id'),
            ['class' => 'form-control', 'id' => 'name', 'required' => true,'placeholder'=>'nguyen van a', 'autofocus' => true,
            'style'=>'width:100%'
            ]) }}
        </td>
    </tr>
    <tr>
        <td>
            <p>Image</p>
        </td>
        <td>
            {{ Form::email('image', isset($user->image) ? $user->image : old('id'),
            ['class' => 'form-control', 'id' => 'image','placeholder'=>'email@yahoo.com', 'autofocus' => true,
            'style'=>'width:100%'
            ]) }}
        </td>
    </tr>

    </tbody>
</table>