<?php
namespace SIGivetBundle\Model;

use SIGivetBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Response;

class Model
{
	protected $conexion;

	public function __construct($connection_string)
	{
		$connect=pg_connect($connection_string) or die("Error de conexión".pg_last_error());
    	$this->conexion = $connect;
	}
    public function usuario_admin($correo, $contrasena)
    {
        $correo = htmlspecialchars($correo);
        $contrasena = htmlspecialchars($contrasena);
        $sentenia = "select * from usuario where correo_usuario like ". $correo ." && contrasena_usuario like ". $contrasena;
        $resultado = pg_query($sentencia) or die("Error de sentencia. ".pg_last_error());
        
    }

    public function insertar_usuario($nombre, $correo, $contrasena, $rol)
    {
        $nombre = htmlspecialchars($nombre);
        $correo = htmlspecialchars($correo);
        $contrasena = htmlspecialchars($contrasena);
        $rol = htmlspecialchars($rol);
        $estado = 'true';
        
        $sentencia = "insert into usuario (nombre_usuario, correo_usuario, contrasena_usuario, rol_usuario, estado_usuario) values ('".$nombre ."','".$correo."','" .$contrasena."'," .$rol."," .$estado.")";
        $resultado = pg_query($sentencia) or die ("Error de sentencia. ".pg_last_error());
        pg_close($this->conexion);
        return $resultado;
    }

    public function insertar($nombre, $correo, $contrasena, $rol){
        $nombre = htmlspecialchars($nombre);
        $correo = htmlspecialchars($correo);
        $contrasena = htmlspecialchars($contrasena);
        $rol = htmlspecialchars($rol);
        $estado = 'true';

        $usuario = new Usuario();
        $usuario -> setNombreUsuario($nombre);
        $usuario -> setCorreoUsuario($correo);
        $usuario -> setContrasenaUsuario($contrasena);
        $usuario -> setRolUsuario($rol);
        $usuario -> setEstadoUsuario($estado);
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();
        return 'true';
    }

    public function lista_usuario()
    {
        $sentencia = "select * from usuario order by nombre_usuario asc";
        $resultado = pg_query($sentencia) or die("Error de sentencia.".pg_last_error());
        $usuario = array();
        while ($fila = pg_fetch_array($resultado)) 
        {
            $usuario[] = $fila;
        }
        pg_close($this->conexion);
        return $usuario;
    }

    public function lista_provincias()
    {
    	$sentencia = "select * from provincia order by id_prov asc";
    	$resultado = pg_query($sentencia) or die("Error de sentencia.".pg_last_error());
    	$provincia = array();
    	while ($fila = pg_fetch_array($resultado)) 
    	{
    		$provincia[] = $fila;
    	}
    	pg_close($this->conexion);
    	return $provincia;
    }

    public function lista_fuente_agua()
    {
        
    }
}