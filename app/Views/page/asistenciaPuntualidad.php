<?= $header; ?>
<?php
session_start();

?>
<form class="col" method="post" action="<?= site_url('guardar') ?>">
<h3>Asistencia y Puntualidad</h3>

<div class="card">
    <br />
    

        <div class="">
            <label class="form-group" for="">2.1 Ausencias Injustificadas</label>
            <input class="form-group" name="asistenciaPuntualidad" type="text" id="">
        </div>

        <div class="">
            <label class="" for="">2.2 Llegadas Tardes</label>
            <input class="form-group" name="llegadasTardes" type="text" id="">
        </div>

        <div class="">
            <label class="form-group" for="">2.3 Permisos Extraordinarios</label>
            <input class="form-group" name="permisoExtraordinario" type="text" id="">
        </div>

    
    <br />
</div>

<!--href=// base_url('evaluacion'); -->

<a href="<?= base_url('evaluacion');?>" class="btn btn-primary" >Atras</a>
<!--href=//base_url('evaluar'); -->
<input  value="Siguiente" type="submit"  name="Siguiente" class="btn btn-primary">
</form>
<?= $header; ?>