<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menu</title>
</head>
<body>

  <div>
    
    <h1>ristorante</h1>

    @if (count($menufisso) > 0)
      <h2>menu fisso</h2>
      <ul>
        @foreach ($menufisso as $piatti)
          <li>{{ $piatti }}</li>
        @endforeach
      </ul>

    @else
      <h2>menu finito</h2>

    @endif

  </div>

</body>
</html>