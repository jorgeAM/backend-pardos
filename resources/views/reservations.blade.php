<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
      padding: 0 10%;      
    }
  </style>
</head>
<body>
  <h1>Haz tu reserva aquí!!</h1>
  <form>
    <div class="form-group">
      <label for="name">Nombres</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="lastname">Apellidos</label>
      <input type="text" class="form-control" id="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="district">Distrito</label>
      <input type="text" class="form-control" id="district">
    </div>
    <div class="form-group">
      <label for="phone">Telefono</label>
      <input type="text" class="form-control" id="phone">
    </div>
    <!-- Fecha y hora de la reserva -->
    <div class="form-group">
      <label for="numOfPeople">Cantidad de Personas</label>
      <input type="number" class="form-control" id="numOfPeople" min="1">
    </div>
    <!-- Combo con fechas especiales (precargadas) -->
    <div class="form-group">
      <label for="comments">Comentarios Adicionales</label>
      <textarea class="form-control" id="comments" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>