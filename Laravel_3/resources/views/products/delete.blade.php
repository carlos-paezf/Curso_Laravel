@extends("../layouts.template")

    @section("head")
    @endsection

    @section("content")
        <form method="post">
            <input type="text" name="article_name">
            <input type="submit" name="send"  value="Enviar">
        </form>
    @endsection

    @section("footer")
    @endsection
