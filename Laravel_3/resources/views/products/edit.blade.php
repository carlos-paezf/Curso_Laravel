@extends("../layouts.template")

    @section("head")
        <h1>Editar Registros</h1>
    @endsection

    @section("content")
        <form method="post" action="/products/{{$product->id}}">
            <table>
                <tr>
                    <td>Nombre:&nbsp;</td>
                    <td>
                        <input type="text" name="article_name" value="{{$product->article_name}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                    </td>
                </tr>

                <tr>
                    <td>Seccion:&nbsp;</td>
                    <td>
                        <input type="text" name="section" value="{{$product->section}}">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Precio:&nbsp;</td>
                    <td>
                        <input type="text" name="price" value="{{$product->price}}">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Date:&nbsp;</td>
                    <td>
                        <input type="text" name="date" value="{{$product->date}}">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Fabricado en:&nbsp;</td>
                    <td>
                        <input type="text" name="made_in" value="{{$product->made_in}}">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="send"  value="Modificar"></td>
                    <td><input type="reset" name="delete"  value="Limpiar Registros"></td>
                </tr>

            </table>
        </form>

        <form method="post" action="/products/{{$product->id}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Eliminar registro">
        </form>
    @endsection

    @section("footer")
    @endsection
