<?php 
class Datos_conexion {
	private $host_="localhost";
	private $usuario_="root";
	private $pasword_="";
	private $Db_="mundialqatar2022";
	public function host(){
		return $this->host_;
	}
	public function usuario(){
		return $this->usuario_;
	}
	public function pasword(){
		return $this->pasword_;
	}
	public function DB(){
		return $this->Db_;
	}

}

function conectarBd() {
	$confi=new Datos_conexion();
	$xcon = mysqli_connect($confi->host(),$confi->usuario(),$confi->pasword(),$confi->DB());
	if(!$xcon) $this->Mensaje='<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button> <strong> Error:</strong> Servidor de datos no encontrado, vuelva a intentar mas tarde.</div>';
	return ($xcon);
}

?>