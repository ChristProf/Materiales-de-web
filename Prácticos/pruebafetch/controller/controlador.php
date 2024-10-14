<?php
require_once __DIR__.'/../models/alumno.php';

$accion = $_REQUEST['accion'];
$respuesta = [];

try{
    switch ($accion) {
        case 'agregar':
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $ci = trim($_POST['ci']);

            if (empty($nombre) || empty($apellido) || empty($ci)) {
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "No pueden haber campos vacíos";
                break;
          }
    
            $alumno = new Alumno($ci, $nombre, $apellido);
            $resultado=$alumno->buscar($ci);
            if ($resultado === false){
                if ($alumno->registrar()) {
                    $respuesta['exito']=true;
                    $respuesta['mensaje'] = "Alumno dado de alta correctamente";
                } else {
                    throw new Exception("Error al dar de alta al alumno");
                }
            }else{
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "El alumno ya existe"; 
            }
            break;
        case 'borrar':
            $ci = trim($_POST['ci']);

            if (empty($ci)) {
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "No pueden haber campos vacíos";
                break;
            }

            $alumno = new Alumno();
            $resultado = $alumno->buscar($ci);
        
    
        
            if ($resultado !== false) {
                if ($alumno->borrar($ci)) {
                    $respuesta['exito'] = true;
                    $respuesta['mensaje'] = "Alumno dado de baja correctamente";
                } else {
                    throw new Exception("Error al dar de baja al alumno");
                }
            } else {
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "El alumno no existe";
            }
            break;
        case 'listar':
            $alumnos = new Alumno();
            $resultado = $alumnos->listar();
            $respuesta['alumnos'] = $resultado;
            break;
        case 'buscar':
            $ci = $_POST['ci'];
            if (empty($ci)) {
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "No pueden haber campos vacíos";
                break;
            }
            $alumno = new Alumno();
            $resultado = $alumno->buscar($ci);
                
            if ($resultado !== false) {
                $respuesta['exito'] = true;
                $respuesta['alumno'] = $resultado;
            } else {
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "Alumno no encontrado";
            }
            break;
       
        default:
            throw new Exception("Acción no válida");
    }
}catch(Exception $e){
    $respuesta['exito'] = false;
    $respuesta['mensaje'] = $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($respuesta);

