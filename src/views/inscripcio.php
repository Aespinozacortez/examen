<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/web.css" rel="stylesheet">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="form">
    <h1>INSCRIPCIO</h1>
    <form action="index.php" method="post" class="form">
        <input type="hidden" name="r" value="doinscripcio">

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="Nom" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Cognoms</label>
                <input type="text" name="Cognoms" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Data de naixement</label>
                <input type="text" name="Data" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Carrer</label>
                <input type="text" name="Carrer" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Ciutat</label>
                <input type="text" name="Ciutat" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Codi Postal</label>
                <input type="number" name="Postal" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Resguard de Pagament</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <button class="submit">Continuar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>

</html>
