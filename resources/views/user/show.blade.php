<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./resource/css/css_bootrap.css"/>
    <title>css_bootrap</title>
</head>
<body>
<div class="container" style="margin-top:60px">
    <div class="row">
        <button type="submit" class="btn  btn-primary btn-flat">getlist</button>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 col-sm-12" style="border: 1px">
            <form action="form_input.php" class="form-inline">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>
                            <p>ID</p>
                        </td>
                        <td>
                            <input type="text" style="width:100%" class="form-control" placeholder="1233,314"
                             value="{{ $user->id }}"      readonly="true">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <p>User</p>
                        </td>
                        <td>
                            <input type="text" style="width:100%" class="form-control"
                                   value="{{ $user->name }}" placeholder="nguyen van a">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Image</p>
                        </td>
                        <td>
                            <input type="email" style="width:100%" class="form-control"
                                   value="{{ $user->image }}" placeholder="email@yahoo.com">
                        </td>
                    </tr>

                    </tbody>
                </table>
                <div class="col-md-2 col-md-offset-5">
                    <button type="submit" class="btn  btn-primary btn-flat">submit</button>
                    <button type="reset" class="btn  btn-secondary btn-flat">reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>