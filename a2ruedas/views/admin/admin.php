<!--<style type="text/css">
#contenedor_perfil{
	padding: 5px;
	top: 0px;
	height: 22%;
	width: 20%;
	background-color: black;
	color: white;
	border-radius: 0px 0px 100px 100px;
}
#jolo{
	width: 52%
}
</style>
<center><div id="contenedor_perfil"><img src="assets/img/user.png" style="border-radius:50px;" width="100px">
<br>
<label >
	<?php 
	foreach ($this->model->consulta() as $resultado) {
		echo  $resultado->nombre;
	}
	 ?>


</label>
</div>
<br>
<div id="jolo">
<nav style="border-radius:0px;" class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li style="border-right: 1px solid #3923D6" class="" data-toggle="modal" data-target="#myModal1"><a><span class="glyphicon glyphicon-signal"></span> Estadistica</a></li>
        <li style="border-right: 1px solid #3923D6"  ><a><span class="glyphicon glyphicon-cog"></span>Configuracion</a></li>
        <li style="border-right: 1px solid #3923D6"><a href="#"><span class="glyphicon glyphicon-search"></span> Buscar</a></li> 
        <li style="border-right: 1px solid #3923D6"><a href="?clase=quienes&metodo=quienes"><span class="glyphicon glyphicon-ban-circle"></span> Dia sin servicio</a></li> 
        <li data-toggle="modal" data-target="#myModal2"><a ><span class="glyphicon glyphicon-eye-open"></span>Usuarios</a></li> 
      </ul>
    </div>
  </div>
</nav>
</div>
</center>
<div class="container">
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <center>
         <select class="form-control">
         	<option value="">Hora</option>
         	<option value="">Dia</option>
         	<option value="">Mes</option>
         	<option value="">Ficha</option>
         </select>
         <br>
         <img src="assets/img/l.jpg">
	   </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
</div>
<div class="container">
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Bloquear usuarios</center></h4>
        </div>
        <div class="modal-body">
        <center>
         	<?php 
				echo "<table border='2' class='table table-striped'>
				 <tr>";
				echo "<th>nombre</th>";
				echo "<th>usuario</th>";
				echo "<th>correo</th>";
				echo "<th>telefono</th>
				</tr>";
			foreach ($this->model->consulta() as $resultado) {
				echo  "<tr>
				<td>".$resultado->nombre."</td>";
				echo  "<td>".$resultado->usuario."</td>";
				echo  "<td>".$resultado->correo."</td>";
				echo  "<td>".$resultado->telefono."</td>";
				echo  "<td><center><span class='glyphicon glyphicon-remove-sign'></span></center></td>";
			}
				echo "</tr></table>";
		 ?>
		 
	   </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
</div>-->