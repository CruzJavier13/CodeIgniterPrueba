<?= $header; ?>
<?php


?>
<form class="col" method="post" action="<?= site_url('guardar') ?>" style="margin:20px">
    

    <div class="card">
    <h3 style="position:relative;top:-20px;background-color:#fff;width:30%">Asistencia y Puntualidad</h3>
        <br />


        <div class=""style="margin:20px;">
            <label class="form-group" for="">2.1 Ausencias Injustificadas</label>
            <input class="form-group "require value="0"  style="position:absolute; left:40%" name="asistenciaPuntualidad" type="text">
        </div>

        <div class="" style="margin:20px">
            <label class="" for="">2.2 Llegadas Tardes </label>
            <input class="form-group"require style="position:absolute; left:40%" value="0" name="llegadasTardes" type="text" id="">
        </div>

        <div class="" style="margin:20px">
            <label class="form-group" for="">2.3 Permisos Extraordinarios</label>
            <input class="form-group"require value="0"  style="position:absolute; left:40%" name="permisoExtraordinario" type="text" id="">
        </div>

        <input type="hidden" value="<?=$idempleado?>" name="idempleado">
        <input type="hidden" value="<?=$nombre?>" name="nombre">
        <input type="hidden" value="<?=$desde?>" name="desde">
        <input type="hidden" value="<?=$hasta?>" name="hasta">
        
        <input type="hidden" value="<?=$pantalon?>" name="pantalon">
        <input type="hidden" value="<?=$unas?>" name="unas">
        <input type="hidden" value="<?=$cabello?>" name="cabello">
        <input type="hidden" value="<?=$cubreboca?>" name="cubreboca">
        <input type="hidden" value="<?=$gorro?>" name="gorro">
        <input type="hidden" value="<?=$pisolimpio?>" name="pisolimpio">
        <input type="hidden" value="<?=$mesa?>" name="mesa">
        <input type="hidden" value="<?=$telefono?>" name="telefono">

        <br />
    </div>

    <div style="margin:20px;float:right" >

        <a href="<?=base_url(); ?>/atras" class="btn btn-primary"> < Atras</a>

        <input value="Finalizar >" type="submit" name="Finalizar" class="btn btn-primary">

    </div>
</form>
<?= $header; ?>