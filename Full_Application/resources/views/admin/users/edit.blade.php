<html>

    <head>
        <meta http-equiv="content-type" charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>
        <h1 style="text-align:center; margin:50px">Página de Edicion, Admin</h1>

        {!! Form::model($user, ['method' => 'PATCH',
                                'action' => ['AdminUsersController@update',
                                                $user->id],
                                'files' => true]) !!}
            <table width="500" class="table">
                <tr>
                    <td>{!! Form::label('role_id', 'Role ID:') !!}</td>
                    <td>{!! Form::text('role_id') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('name', 'Name:') !!}</td>
                    <td>{!! Form::text('name') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('email', 'Email:') !!}</td>
                    <td>{!! Form::text('email') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('email_verified_at', 'Email Verified at:') !!}</td>
                    <td>{!! Form::text('email_verified_at') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('photo_id', 'Photo:') !!}</td>
                    <td><img src="/images/{{$user->photo ? $user->photo->photo_route:'user.png'}}" width="100" /></td>
                </tr>
                <tr>
                    <td></td><td>{!! Form::file('photo_id') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::submit('Actualizar Usuario') !!}</td>
                    <td>{!! Form::reset('Limpiar') !!}</td>
                </tr>
            </table>
        {!! Form::close() !!}

        {!! Form::model($user, ['method' => 'DELETE',
                                'action' => ['AdminUsersController@destroy',
                                                $user->id]]) !!}
            {!! Form::submit('Eliminar Usuario') !!}
        {!! Form::close() !!}

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>

</html>
