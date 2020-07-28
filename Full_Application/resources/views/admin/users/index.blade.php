<html>

    <head>
        <meta http-equiv="content-type" charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>

        @if(Session::has('user_destroy'))
            <p class="bg-danger">{{session('user_destroy')}}</p>
        @endif

        <h1 style="text-align:center; margin:50px">Página de Bienvenida, Admin</h1>

        <table width="1200" class="table">
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
                        <td><a href="{{route('users.edit', $user->id)}}">{{$user->id}}</a></td>
                        <td>{{$user->role_id}} {{$user->role ? $user->role->role_name:'-'}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        @if($user->photo)
                            <td><img src="/images/{{$user->photo ? $user->photo->photo_route:'-'}}" width="100" /></td>
                        @else
                            <td><img src="/images/user.png" width="25" /></td>
                        @endif
                    </tr>
                @endforeach
            @endif
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>

</html>
