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
        //$datos['idempleado']=
        return view('page/nuevaEvaluacion',$datos);
    }
    
  
    public function editar($id=null){
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        
       

        $evaluacion = new Evaluacion();
        $datos['empleado']=$evaluacion->where('id',$id)->findAll();

        $datos['idempleado']=$id;

        return view('page/editar',$datos);
    }
    public function asistencia(){

        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');

        if(isset($_POST['idempleado'])){
            $datos['idempleado']=$_POST['idempleado'];
        }
        
        if(isset($_POST['nombre'])){
            $datos['nombre']=$_POST['nombre'];
        }
       
       
        if(isset($_POST['desde'])){
            $datos['desde']=$_POST['desde'];
        }
        
        if(isset($_POST['hasta'])){
            $datos['hasta']=$_POST['hasta'];
        }
        
        if(isset($_POST['pantalon'])){
            $datos['pantalon']=1;
        }
        else
        {
            $datos['pantalon']=0;
        }
        if(isset($_POST['unas'])){
            $datos['unas']=1;
        }
        else
        {
            $datos['unas']=0;
        }
        if(isset($_POST['cabello'])){
            $datos['cabello']=1;
        }
        else
        {
            $datos['cabello']=0;
        }//--------------------------------------
        if(isset($_POST['cubreboca'])){
            $datos['cubreboca']=1;
        }
        else
        {
            $datos['cubreboca']=0;
        }
        
        if(isset($_POST['gorro'])){
            $datos['gorro']=1;
        }
        else
        {
            $datos['gorro']=0;
        }//-----------------------------------------
        if(isset($_POST['pisolimpio'])){
            $datos['pisolimpio']=1;
        }
        else
        {
            $datos['pisolimpio']=0;
        }
        if(isset($_POST['mesa'])){
            $datos['mesa']=1;
        }
        else
        {
            $datos['mesa']=0;
        }//------------------------------------------------
        if(isset($_POST['telefono'])){
            $datos['telefono']=1;
        }
        else
        {
            $datos['telefono']=0;
        }
        
        

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
       /* $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
       // $datos['idempleado']=$_POST['idempleado'];
        $select = $_POST['select'];
        $desde =  $_POST['desde'];
        $hasta = $_POST['hasta'];*/
        $evaluacion = new Empleado();
        $idempleado=$evaluacion->where('nombre',$_POST['select'])->first();
        
        $datos=[
            'header'=>view('template/header'),
            'footer'=>view('template/footer'),
            'idempleado'=> $idempleado['id'],
            'nombre'=> $_POST['select'],
            'desde'=> $_POST['desde'],
            'hasta'=>$_POST['hasta']
        ];
        /*$_SESSION['nombre']= $datos['nombre']=
        $_SESSION['desde']=$datos['desde']=
        $_SESSION['hasta']=$datos['nombre']= */

        return view('page/evaluacion',$datos);
    }
    public function guardar(){

        $puntos=[
            'pantalon'=>$_POST['pantalon']==1?1:0,
            'unas'=>$_POST['unas']==1?1:0,
            'cabello'=>$_POST['cabello']==1?1:0,
            'cubreboca'=>$_POST['cubreboca']==1?2:0,
            'gorro'=>$_POST['gorro']==1?1:0,
            'pisolimpio'=>$_POST['pisolimpio']==1?1:0,
            'mesa'=>$_POST['mesa']==1?1:0,
            'telefono'=>$_POST['telefono']==1?5:0,
            'asistenciaPuntualidad'=>$_POST['asistenciaPuntualidad']<1?4:0,
            'llegadasTardes'=>$_POST['llegadasTardes']<=1?4:0,
            'permisoExtraordinario'=>$_POST['permisoExtraordinario']<=1?4:0
    ];
        
      $total=0;
     foreach($puntos as $key=>$punto):
        $total +=$punto;
     endforeach;
        //datos a insertar en la tabla
         $tabla = [
        'idempleado'=>$_POST['idempleado'],
        'nombre'=>$_POST['nombre'],
        'evaluacion_desde'=>$_POST['desde'],
        'evaluacion_hasta'=>$_POST['hasta'],
        'puntaje'=>$total,
        'bono'=>$total==25 ? 10.00 : ($total>20 ? 8.50 : 0)
       ];
      

        //$asistenciaP=$_POST['asistenciaPuntualidad'];
       // $llegadasT=$_POST['llegadasTardes'];
       // $permisosExtr=$_POST['permisoExtraordinario']

        $evaluacion = new Evaluacion();
        $evaluacion->insert($tabla);
      //  $datos['evaluacion']=$tabla;
  
       $datos['header']= view('template/header');
       $datos['footer']= view('template/header');
       $datos['evaluacion']= $evaluacion->orderBy('id','ASC')->findAll();
        
       // return $this->response->redirect(site_url('/listar'));
        return view('page/listar',$datos);
    }
   
    
}
