@extends("../layouts.template")

    @section("head")
        <h1>Insertar Registros</h1>
    @endsection

    @section("content")
        <form method="post" action="/products">
            <table>
                <tr>
                    <td>Nombre:&nbsp;</td>
                    <td>
                        <input type="text" name="article_name">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Seccion:&nbsp;</td>
                    <td>
                        <input type="text" name="section">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Precio:&nbsp;</td>
                    <td>
                        <input type="text" name="price">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Date:&nbsp;</td>
                    <td>
                        <input type="text" name="date">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td>Fabricado en:&nbsp;</td>
                    <td>
                        <input type="text" name="made_in">
                        {{csrf_field()}}
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="send"  value="Enviar"></td>
                    <td><input type="reset" name="delete"  value="Borrar"></td>
                </tr>

            </table>
        </form>
    @endsection

    @section("footer")
    @endsection
