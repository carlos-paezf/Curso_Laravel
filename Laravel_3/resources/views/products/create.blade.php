@extends("../layouts.template")

    @section("head")
        <h1>Insertar Registros</h1>
    @endsection

    @section("content")
        <!--<form method="post" action="/products">-->
        {!! Form::open(['url' => '/products', 'method' => 'post', 'files' => true]) !!}
            <table>
                <tr>
                    <!--<td>Nombre:&nbsp;</td>-->
                    <td>{!! Form::label('article_name', 'Nombre Articulo:') !!}</td>
                    <td>
                        <!--<input type="text" name="article_name">-->
                        {!! Form::text('article_name') !!}
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <!--<td>Seccion:&nbsp;</td>-->
                    <td>{!! Form::label('section', 'Seccion:') !!}</td>
                    <td>
                        <!--<input type="text" name="section">-->
                        {!! Form::text('section') !!}
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <!--<td>Precio:&nbsp;</td>-->
                    <td>{!! Form::label('price', 'Precio:') !!}</td>
                    <td>
                        <!--<input type="text" name="price">-->
                        {!! Form::text('price') !!}
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <!--<td>Date:&nbsp;</td>-->
                    <td>{!! Form::label('date', 'Date:') !!}</td>
                    <td>
                        <!--<input type="date" name="date">-->
                        {!! Form::date('date') !!}
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <!--<td>Fabricado en:&nbsp;</td>-->
                    <td>{!! Form::label('made_in', 'Fabricado en:') !!}</td>
                    <td>
                        <!--<input type="text" name="made_in">-->
                        {!! Form::text('made_in') !!}
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <!--<td><input type="submit" name="send"  value="Enviar"></td>-->
                    {!! Form::submit('Enviar') !!}
                    <!--<td><input type="reset" name="delete"  value="Borrar"></td>-->
                    {!! Form::reset('Limpiar Registros') !!}
                </tr>

                <tr>
                    <td colspan="2">
                        {!! Form::file('file') !!}
                    </td>
                </tr>

            </table>
        <!--</form>-->
        {!! Form::close() !!}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    @endsection

    @section("footer")
    @endsection
