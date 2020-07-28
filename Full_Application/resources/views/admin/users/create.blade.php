<html>

    <head>
        <meta http-equiv="content-type" charset="utf-8" />
        <title></title>
    </head>

    <body>
        <h1>Página de Creación, Admin</h1>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true]) !!}
            <table>
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
                    <td>{!! Form::label('password', 'Password:') !!}</td>
                    <td>{!! Form::text('password') !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('photo_id', 'Photo:') !!}</td>
                    <td>{!! Form::file('photo_id') !!}
                </tr>
                <tr>
                    <td>{!! Form::submit('Crear Usuario') !!}</td>
                    <td>{!! Form::reset('Limpiar') !!}</td>
                </tr>
            </table>
        {!! Form::close() !!}

    </body>

</html>
