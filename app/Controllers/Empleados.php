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
    public function evaluacion(){
        $datos['header']= view('template/header');
        $datos['footer']= view('template/header');

        return view('page/evaluacion',$datos);
    }
}
