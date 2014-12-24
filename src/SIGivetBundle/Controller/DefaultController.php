<?php

namespace SIGivetBundle\Controller;

use SIGivetBundle\Model\Model;
use SIGivetBundle\Config\Config;
use SIGivetBundle\Entity\Usuario;
use SIGivetBundle\Entity\UnidadTiempo;
use Symfony\Component\HttpFoundation\Response;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }else{
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('SIGivetBundle:Default:administrador.html.twig', 
            array('username' =>$session->get(SecurityContext::LAST_USERNAME) , 'error'=>$error));
    }
    public function graficarAction()
    {
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('HOLA MUNDO');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->render('SIGivetBundle:Default:graficar.html.twig', array(
        'chart' => $ob
        ));
    }
    public function reporteAction()
    {
      $xls_service = $this->get('xls.service_xls5');
      $xls_service->excelObj->getProperties()->setCreator("Juan Pérez")
      ->setLastModifiedBy("Tester")
      ->setTitle("Reporte de Prueba")
      ->setSubject("Este es un reporte de prueba")
      ->setDescription("Reporte en excel generado desde symfony para efectos de prueba")
      ->setKeywords("office 2005 openxml php")
      ->setCategory("Test");
      $xls_service->excelObj->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Hola')
      ->setCellValue('B2', 'mundo!');
      $xls_service->excelObj->getActiveSheet()->setTitle('Prueba Simple');
      // Set active sheet index to the first sheet, so Excel opens this as the first sheet
      $xls_service->excelObj->setActiveSheetIndex(0);
      //crear la respuesta
      $response = $xls_service->getResponse();
      $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
      $response->headers->set('Content-Disposition', 'attachment;filename=reporteDePrueba.xls');
      // Si usa una conexión https debe configurar estos dos header para compatibilidad con IE headers->set('Pragma', 'public');
      $response->headers->set('Cache-Control', 'maxage=1');
      return $response;
    }
    public function indexAction()
    {
        return $this->render('SIGivetBundle:Default:index.html.twig');
    }
    public function administradorAction()
    {
        return $this->render('SIGivetBundle:Default:administrador.html.twig');
    }
    public function proyectoAction()
    {
        return $this->render('SIGivetBundle:Default:proyecto.html.twig');
    }
    public function fincaAction()
    {
        return $this->render('SIGivetBundle:Default:finca.html.twig');
    }
    public function agregarFincaAction()
    {
        return $this->render('SIGivetBundle:Default:agregarFinca.html.twig');
    }
    public function agregarEstudioAction()
    {
        return $this->render('SIGivetBundle:Default:agregarEstudio.html.twig');
    }
    public function usuarioAction(Request $request)
    {
        $parametros = array('nombre' => '', 'correo' => '', 'contrasena' => '', 'rol' => '', );
        $insertar = new Model(Config::$connection_string);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($insertar->insertar_usuario($_POST['nombreUsuario'], $_POST['correoUsuario'], $_POST['contrasenaUsuario'], $_POST['rolUsuario'])){
                $parametros['mensaje'] = 'Usuario ingresado correctamente';
                $parametros['tipo_mensaje'] = 0;
            } else {
                $parametros = array('nombre' => $_POST['nombreUsuario'], 'correo' => $_POST['correoUsuario'], 'contrasena' => $_POST['contrasenaUsuario'], 'rol' => $_POST['rolUsuario'], );
                $parametros['mensaje'] = 'Error! en la entrada de datos';
                $parametros['tipo_mensaje'] = 1;
            }
        }else{
        	$medida = new UnidadTiempo();
            $medida -> setNombreUnidad('Metro');
            $medida -> setEstadoUnidad(True);
            $em = $this->getDoctrine()->getManager();
            $em->persist($medida);
            $em->flush();
        }
        return $this->render('SIGivetBundle:Default:usuarios.html.twig', $parametros);
    }
    public function configuracionFincaAction()
    {
        return $this->render('SIGivetBundle:Default:configuracionFinca.html.twig');
    }
    public function configuracionEstudioAction()
    {
        return $this->render('SIGivetBundle:Default:configuracionEstudio.html.twig');
    }
    public function configuracionIndividuoAction()
    {
        return $this->render('SIGivetBundle:Default:configuracionIndividuo.html.twig');
    }
    public function agregarIndividuoAction()
    {
        return $this->render('SIGivetBundle:Default:agregarIndividuo.html.twig');
    }
    public function agregarResultadoAction()
    {
        return $this->render('SIGivetBundle:Default:agregarResultado.html.twig');
    }
    public function verIndividuosAction()
    {
        return $this->render('SIGivetBundle:Default:verIndividuos.html.twig');
    }
    public function historialAction()
    {
        return $this->render('SIGivetBundle:Default:historial.html.twig');
    }
    public function individuoAction()
    {
        return $this->render('SIGivetBundle:Default:individuo.html.twig');
    }
    public function agregarHumanoAction()
    {
        return $this->render('SIGivetBundle:Default:agregarHumano.html.twig');
    }
    public function analisisAction()
    {
        return $this->render('SIGivetBundle:Default:analisis.html.twig');
    }
    public function verEstudioAction()
    {
        return $this->render('SIGivetBundle:Default:verEstudio.html.twig');
    }

    public function listarAction()
    {
        $conexion = new Model(Config::$connection_string);
        $parametros = array('provincias' =>$conexion->lista_provincias(), );
        return $this-> render('SIGivetBundle:Default:prueba.html.twig', $parametros); 
    }
}

