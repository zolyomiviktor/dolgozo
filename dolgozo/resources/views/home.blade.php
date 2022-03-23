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
<div class="container">
  <h2>Dolgozók</h2>
  <a href="/create"><button>Új dolgozó felvétele</button></a>
  <a href="/select/{id}"><button>Keresés</button></a>
  <input type="text" name="kereses" value='' placeholder="dolgozó keresés">
  @if( session()->has( "success" ))
        <div class="alert alert-success">
            {{ session( "success") }}
        </div>
  @endif
 
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Város</th>
        <th>Születés</th>
        <th>Fizetés</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $dolgozok as $dolgozo )
            <tr>
                <td>{{ $dolgozo->id }}</td>
                <td>{{ $dolgozo->nev }}</td>
                <td>{{ $dolgozo->varos }}</td>
                <td>{{ $dolgozo->szuletes }}</td>
                <td>{{ $dolgozo->fizetes }}</td>
                <td>
                    <a class="btn btn-info" href="/update/{{ $dolgozo->id }}">Frissités</a>
                    <a class="btn btn-danger" href="/delete/{{ $dolgozo->id }}">Törlés</a>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>