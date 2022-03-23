<!DOCTYPE html>
<html lang="hu">
 
<head>
  <title>Dolgozó</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
<body>
<h1>Módosítsd az adatokat</h1>

<form action="update-dolgozo" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $dolgozo->id }}">
    <p>
        <label for=""> Név: </label>
        <input type="text" name="nev" value="{{ $dolgozo->nev }}">
        <br>
    </p>
    <p>
        <label for=""> Város: </label>
        <input type="text" name="varos" value="{{ $dolgozo->varos }}">
        <br>
    </p>
    <p>
        <label for=""> Születés: </label>
        <input type="text" name="szuletes" value="{{ $dolgozo->szuletes }}">
    </p>
    <p>
        <label for=""> Fizetés: </label>
        <input type="text" name="fizetes" value="{{ $dolgozo->fizetes }}">
    </p>
    <p>
        <button type="submit">Modósítás</button>
    </p>
</form>
</body>
</html>