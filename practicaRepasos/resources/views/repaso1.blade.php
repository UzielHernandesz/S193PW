<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

</head>
<body>
    <H1 class="text-center"> CONVERTIDORES </H1>
    <div class="container mt-5 col-md-6">


    <form action="/mb_gb" method="POST">
    @csrf
    <div class="mb-3">
        <label for="GB" class="form-label">CONVERTIR DE MB a GB</label>
        <input type="number" class="form-control" name="valor1" id="valor1">
    </div>
    <div class="card-footer text-muted">
        <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">CONVERTIR</button>
        </div>
    </form>


    <form action="/gb_mb" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MB" class="form-label">CONVERTIR DE GB a MB</label>
            <input type="number" class="form-control" name="valor2" ">
        </div>
        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm">CONVERTIR</button>
            </div>
        </form>


        <form action="/gb_tb" method="POST">
            @csrf
            <div class="mb-3">
                <label for="GB" class="form-label">CONVERTIR DE GB a TB</label>
                <input type="number" class="form-control" name="valor3" ">
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">CONVERTIR</button>
                </div>
            </form>


            <form action="/tb_gb" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="GB" class="form-label">CONVERTIR DE TB a GB</label>
                    <input type="number" class="form-control" name="valor4" ">
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">CONVERTIR</button>
                    </div>
                </form>
                <div class="container text-center">

    <a href="/"> <button type="button" class="btn btn-primary btn-lg"> REGRESAR </button> </a>

</div>


</div>



</body>
</html>
