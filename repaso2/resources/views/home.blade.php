@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Modal de Éxito -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Libro Creado</h5>

                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca / Library</a>
    </nav>

    <div class="mt-3">
        <h3>Listado de Libros Registrados  -  List of registered books</h3>
        @if($libros->isEmpty())
            <div class="alert alert-info">
                No hay libros registrados.
            </div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Título / Title</th>
                        <th>Autor / Author</th>
                        <th>Páginas / Pages</th>
                        <th>Año / Year</th>
                        <th>Editorial / Editorial</th>
                        <th>Email Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libros as $libro)
                        <tr>
                            <td>{{ $libro->isbn }}</td>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->autor }}</td>
                            <td>{{ $libro->paginas }}</td>
                            <td>{{ $libro->anio }}</td>
                            <td>{{ $libro->editorial }}</td>
                            <td>{{ $libro->email_editorial }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

<!-- JavaScript para abrir el modal si hay un mensaje de éxito en la sesión -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        @if(session('success'))
            $('#successModal').modal('show');
        @endif

        $('.btn-primary').click(function() {
            $('#successModal').modal('hide');
        });
    });
</script>


@endsection
