@extends("../layouts.template")

    @section("head")
        <h1>Leer Registros</h1>
    @endsection

    @section("content")
        <table border="1">
            <tr>
                <td>&nbsp;Nombre Articulo&nbsp;</td>
                <td>&nbsp;Seccion&nbsp;</td>
                <td>&nbsp;Precio&nbsp;</td>
                <td>&nbsp;Date&nbsp;</td>
                <td>&nbsp;Fabricado en&nbsp;</td>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->article_name}}</td>
                    <td>{{$product->section}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->date}}</td>
                    <td>{{$product->made_in}}</td>
                </tr>
            @endforeach
        </table>
    @endsection

    @section("footer")
    @endsection
