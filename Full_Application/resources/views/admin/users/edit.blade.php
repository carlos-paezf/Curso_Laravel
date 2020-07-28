<html>

    <head>
        <meta http-equiv="content-type" charset="utf-8" />
        <title></title>
    </head>

    <body>
        <h1>Página de Edicion, Admin</h1>

        {!! Form::model($user, ['method' => 'PATCH',
                                'action' => ['AdminUsersController@update',
                                                $user->id],
                                'files' => true]) !!}
            <table width="500">
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
        
    </body>

</html>
