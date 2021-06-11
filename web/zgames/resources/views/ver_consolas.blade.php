@extends("layouts.master")

@section("contenido")
    <div class="row">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-stripped table-responsive ">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
@endsection