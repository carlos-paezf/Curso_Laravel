@extends("layouts/template")

    @section("cabecera")

    @endsection

    @section("informacion")
        <!--
        <h2>Cuerpo de la pagina</h2>
            @if(count($alumnos))
                <table whidth="50%" border="1">
                    @foreach($alumnos as $persona)
                        <tr>
                            <td>
                                {{$persona}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                {{"Sin alumnos"}}
            @endif
        -->
    @endsection

    @section("pie")
        <h2>Footeer</h2>
    @endsection
