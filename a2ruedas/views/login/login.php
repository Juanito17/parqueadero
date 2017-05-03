<title>Login</title>
<br><br><br>
<section>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">Usuario</a></li>
		  <li><a data-toggle="tab" href="#menu1">Administrador</a></li>
		</ul>
		<div class="tab-content">
		   <div id="home" class="tab-pane fade in active">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center><img style="height: 100px;width: 100px;" src="assets/img/registrar.png"><center>
					</div>
					<div class="panel-body">
						<form action="">
							<div class="form-group">
								<center><label for="">Documento:</label></center>
								<input class="tx" type="text" name="documento" id="documento" placeholder="Ingrese su documento" autofocus="">
							</div>
							<div class="form-group">
								<center><label for="">Contraseña:</label></center>
								<input type="password" name="pass" id="pass" placeholder="Ingrese su Contraseña" class="tx">		
								<hr>
							<button class="btn btn-primary btn-block">Iniciar Sesion</button>
							</div>
						</form>
					</div>
		 		</div>
		  </div>
		  <div id="menu1" class="tab-pane fade">
		    <div class="panel panel-default">
					<div class="panel-heading">
						<center><img style="height: 100px;width: 100px;" src="assets/img/admin.png"><center>
					</div>
					<div class="panel-body">
						<form action="">
							<div class="form-group">
								<center><label for="">Documento:</label></center>
								<input class="tx" type="text" name="usuario" id="usuario" placeholder="Ingrese su Documento" autofocus="">
							</div>
							<div class="form-group">
								<center><label for="">Contraseña:</label></center>
								<input type="password" name="pass" id="pass" placeholder="Ingrese su Contraseña" class="tx">		
								<hr>
							<a href="?clase=entrada&metodo=entrada"><button  class="btn btn-primary btn-block">Iniciar Sesion</button></a>
							</div>
						</form>
					</div>
		 		</div>
		  </div>
		</div>
		</div>
	</div>
</section>
<br><br><br><br>
