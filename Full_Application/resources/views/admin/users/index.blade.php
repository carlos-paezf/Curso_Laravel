<html>

    <head>
        <meta http-equiv="content-type" charset="utf-8" />
        <title></title>
    </head>

    <body>
        <h1>Página de Bienvenida, Admin</h1>

        <table width="1200" border="1">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Role ID-Name</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Photo</th>
            </tr>
            @if($users)
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->role_id}} {{$user->role ? $user->role->role_name:'-'}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        @if($user->photo)
                            <td><img src="/images/{{$user->photo ? $user->photo->photo_route:'-'}}" width="100" /></td>
                        @else
                            <td>Sin foto</td>
                        @endif
                    </tr>
                @endforeach
            @endif
        </table>
    </body>

</html>
