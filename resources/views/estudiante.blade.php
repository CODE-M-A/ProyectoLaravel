<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">estudiante</th>
      <th>hol</th>
    </tr>
  </thead>
  
  <tbody>
        @foreach ($materias as $materia)
            <tr>
                <td>{{ $materia->id_estudiante }}</td>
                <td>{{ $materia->nombre }}</td>
                <td>{{$materia->Estudiante->nombre}}</td>
               

            
            </tr>
        @endforeach
        
  </tbody>
</table>
</body>
</html>