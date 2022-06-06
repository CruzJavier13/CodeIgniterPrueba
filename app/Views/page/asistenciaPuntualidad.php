<?= $header; ?>
<?php
session_start();

?>
<form class="col" method="post" action="<?= site_url('guardar') ?>" style="margin:20px">
    

    <div class="card">
    <h3 style="position:relative;top:-20px;background-color:#fff;width:30%">Asistencia y Puntualidad</h3>
        <br />


        <div class=""style="margin:20px;">
            <label class="form-group" for="">2.1 Ausencias Injustificadas</label>
            <input class="form-group "  style="position:absolute; left:40%" name="asistenciaPuntualidad" type="text" id="">
        </div>

        <div class="" style="margin:20px">
            <label class="" for="">2.2 Llegadas Tardes </label>
            <input class="form-group"  style="position:absolute; left:40%" name="llegadasTardes" type="text" id="">
        </div>

        <div class="" style="margin:20px">
            <label class="form-group" for="">2.3 Permisos Extraordinarios</label>
            <input class="form-group" style="position:absolute; left:40%" name="permisoExtraordinario" type="text" id="">
        </div>


        <br />
    </div>

    <div style="margin:20px;float:right" >

        <a href="<?= base_url('evaluacion'); ?>" class="btn btn-primary"> < Atras</a>

        <input value="Siguiente >" type="submit" name="Siguiente" class="btn btn-primary">

    </div>
</form>
<?= $header; ?>