<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class= "d-flex flex-column align-items-center vh-100">
<div class="mt-5" >
  <h1 class="display-5">Garbage Collection Api</h1>
</div>
<div class="container mt-3 table-responsive overflow-x:auto;">
<table class="table">
  <tdead>
    <tr >
      <th >Metdod</th>
      <th >URI</th>
      <th >Action</th>
      <th >Name</th>
      <th >Descrtiption</th>
    </tr>
  </tdead>
  <tbody>
    <tr class= "table-info">
      <td>POST</td>
      <td>api/days</td>
      <td>App\Http\Controllers\DayController@store</td>
      <td>days.store</td>
      <td>Create row into Database</td>
    </tr>
    <tr class= "table-success">
      <td scope="row">GET</td>
      <td>api/days</td>
      <td>App\Http\Controllers\DayController@index</td>
      <td>days.index</td>
      <td>Get all row of the Database</td>
    </tr>
    <tr  class= "table-success">
      <td scope="row">GET</td>
      <td>api/days/{day}</td>
      <td>App\Http\Controllers\DayController@show</td>
      <td>days.show</td>
      <td>Get the row with the ID {day}</td>
    </tr>
    <tr class= "table-warning">
      <td scope="row">PUT</td>
      <td>api/days/{day}</td>
      <td>App\Http\Controllers\DayController@update</td>
      <td>days.update</td>
      <td>Update the row with the ID {day}</td>
    </tr>
    <tr class= "table-danger">
      <td scope="row">DELETE</td>
      <td>api/days/{day}</td>
      <td>App\Http\Controllers\DayController@destroy</td>
      <td>days.destroy</td>
      <td>Delete the row with the ID {day}</td>
    </tr>
    <tr  class= "table-success">
      <td scope="row">GET</td>
      <td>api/days/showDaily/{day}</td>
      <td>App\Http\Controllers\DayController@showDaily</td>
      <td>days.showDaily</td>
      <td>Get all the row with the day {day}</td>
    </tr>
    <tr  class= "table-success">
      <td scope="row">GET</td>
      <td>api/days/type/{day}</td>
      <td>App\Http\Controllers\DayController@showType</td>
      <td>days.showType</td>
      <td>Get all the row with the type {day}</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>