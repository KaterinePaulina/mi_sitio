<?php

$conexion=mysqli_connect('localhost','root','','base de datos');
?>
<!DOCTYPE html>
<html>
<head>
<title>Mostrar datos</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="CSS/Medicion.css">
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript" src="JS/busqueda.js"></script>
<link rel="stylesheet" href="CSS/mediciones.css">
</head>
<body>
Buscar <input id="searchTerm" type="text" onkeyup="doSearch()" />
<br>
<br>
<table id="datos" class="table table-striped table-bordered" style="width:70%" align="center">
<thead>
<tr>
<td>id</td>
<td>time</td>
<td>latitude</td>
<td>longitude</td>
<td>altitude</td>
<td>altitudee</td>
<td>speed</td>
<td>direction</td>
<td>distance</td>
<td>horizontal</td>
<td>vertical</td>
<td>satellite</td>
</tr>
</thead>
<?php
$sql="SELECT * from rawdata";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
<tbody> <!--/linea se los encabezados de la tabla/-->
<tr>
<td><?php echo $mostrar['id'] ?></td>
<td><?php echo $mostrar['time'] ?></td>
<td><?php echo $mostrar ['latitude'] ?></td>
<td><?php echo $mostrar['longitude'] ?></td>
<td><?php echo $mostrar['altitude'] ?></td>
<td><?php echo $mostrar['altitudee'] ?></td>
<td><?php echo $mostrar['speed'] ?></td>
<td><?php echo $mostrar['direction'] ?></td>
<td><?php echo $mostrar['distance'] ?></td>
<td><?php echo $mostrar['horizontal'] ?></td>
<td><?php echo $mostrar['vertical'] ?></td>
<td><?php echo $mostrar['satellite'] ?></td>
</tr>
<tbody>
<?php
}
?>
</table>
</body>
</html>