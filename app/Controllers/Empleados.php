<?php

namespace App\Controllers;
use App\Models\Empleado;
use App\Models\Evaluacion;

class Empleados extends BaseController
{
    public function index()
    {   
        $Evaluacion = new Evaluacion();
        $datos['evaluacion']= $Evaluacion->orderBy('id','ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');

        return view('page/listar',$datos);
    }
    public function nuevo(){
        $empleado = new Empleado();
        $datos['empleado']= $empleado->orderBy('id','ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');

        return view('page/nuevaEvaluacion',$datos);
    }
    
  
    public function editar($id=null){
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        
       

        $evaluacion = new Evaluacion();
        $datos['empleado']=$evaluacion->where('id',$id)->findAll();
        session_start();
        $_SESSION['empleado']= $datos['empleado'];
        return view('page/editar',$datos);
    }
    public function asistencia(){

        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');

        return view('page/asistenciaPuntualidad',$datos);
    }
    public function borrar($id=null){

        $evaluacion = new Evaluacion();
        //$datos['empleado']=$evaluacion->delete('id',$id);

        $evaluacion->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
        //return view('page/listar',$datos);
    }
    public function evaluacion(){
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');
        session_start();
        $_SESSION['nombre'] = $this->request->getVar('nombre');
        $_SESSION['desde'] = $this->request->getVar('desde');
        $_SESSION['hasta'] = $this->request->getVar('nombre');
        return view('page/evaluacion',$datos);
    }
    public function guardar(){
        $Evaluacion = new Evaluacion();
        $datos['evaluacion']= $Evaluacion->orderBy('id','ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');


        return view('page/listar',$datos);
    }
    
    public function regresar(){
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');
        return view('page/evaluacion');
    }
    
}
