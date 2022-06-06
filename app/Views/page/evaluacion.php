<?= $header; ?>
<?php
session_start();

?>
<form action="<?= site_url('/asistencia') ?>" method="post">
    <div class="card">

        <h3 style="display:inline;width:70%;position:relative; top:-20px;background-color:#fff">Presentación personal, Porte y Aspecto y Puesto de trabajo</h3>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="flexSwitchCheckDefault">1.1 Pantalon limpio y planchado</label>
            <input class="form-check-input " style="position:relative;left:90%" name="pantalon" type="checkbox" id="flexSwitchCheckDefault">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="ul">1.2 Uñas (Limpias, bien cuidadas y no tan largas)</label>
            <input class="form-check-input"  style="position:relative;left:90%" name="unas" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="cp">1.3 Cabello (Peinado)</label>
            <input class="form-check-input" style="position:relative;left:90%" name="cabello" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="cb">1.4 Cubre Boca</label>
            <input class="form-check-input" style="position:relative;left:90%" name="cubreboca" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label"  style="position:relative;left:20px" for="flexSwitchCheckChecked">1.5 Gorro</label>
            <input class="form-check-input"  style="position:relative;left:90%" name="gorro" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="pl">1.6 Piso Limpio</label>
            <input class="form-check-input" style="position:relative;left:90%" name="pisolimpio" for="pl" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label"  style="position:relative;left:20px" for="mt">1.7 Mesa de trabajo ordenada</label>
            <input class="form-check-input" style="position:relative;left:90%" name="mesa" for="mt" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch" style="margin:10px">
            <label class="form-check-label" style="position:relative;left:20px" for="ud">1.7 Uso del Telefoo unicamente en el lugar de descanso</label>
            <input class="form-check-input" style="position:relative;left:90%" name="telefono" for="ud" type="checkbox" id="flexSwitchCheckChecked">
        </div>

    </div>
    <div style="position:relative; left:80%;margin:20px">
        <!-- href=// base_url('nuevo');  -->
        <a href="<?= base_url('nuevo'); ?>" class="btn btn-primary">
            < Atras </a>

                <!--href=// base_url('asistencia'); -->
                <input type="submit" value="Siguiente >" name="Siguiente" class="btn btn-primary">
    </div>
</form>
<?= $footer; ?>