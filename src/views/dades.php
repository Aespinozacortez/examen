<!doctype html>
<html lang="en">

<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmacio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <h1 class="d-flex align-items-center justify-content-center mt-4 mb-4">Confirmacio</h1>
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    
        <div class="container" class="w-75">
            <div class="form-group row">
                <label for="newname1" class="col-sm-2 col-form-label">ID-Resguard</label>
            <div class="col-sm-10">
            <p><?=$ID_Usuari;?></p>
        </div>
    </div>       
 <div class="form-group row">
    <label for="newname1" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
    <p><?=$Nom;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="newlastname" class="col-sm-2 col-form-label">Cognoms</label>
    <div class="col-sm-10">
    <p><?=$Cognoms;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="borndate" class="col-sm-2 col-form-label">Data Naixament</label>
    <div class="col-sm-10">
    <p><?=$Data;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="adress" class="col-sm-2 col-form-label">Ciutat</label>
    <div class="col-sm-10">
        <p><?=$Ciutat;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="adress" class="col-sm-2 col-form-label">Postal</label>
    <div class="col-sm-10">
        <p><?=$Postal;?></p>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <a href="index.php?r=" class="btn btn-danger">Salir</a>
    </div>
</div>        

</div>
</div>