<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    html {
      height: 100%;
    }

    body {
      height: 100%;
    }

    body {
      background: #8360c3; /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #8360c3, #2ebf91); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #8360c3, #2ebf91); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    #container {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #innerContainer {
      padding: 10px;
      background: white;
      border-radius: 15px;
    }
  </style>
</head>
<body>
  <div id="container">
    <div id="innerContainer">
      <h1>Hola {{ session('name') }}</h1>
      <p>Tu reserva fue mandada con exito, nos comunicaremos contigo a la brevedad.</p>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>