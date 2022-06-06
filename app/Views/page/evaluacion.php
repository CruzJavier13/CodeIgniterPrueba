<?= $header; ?>
<?php
session_start();

print_r($_SESSION['nombre']);
print_r($_SESSION['desde']);
print_r($_SESSION['hasta']);

?>
<form action="<?=site_url('/asistencia')?>" method="post">
<div class="card">
    
        <h3>Presentación personal, Porte y Aspecto y Puesto de trabajo</h3>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">1.1 Pantalon limpio y planchado</label>
            <input class="form-check-input" name ="pantalon" type="checkbox" id="flexSwitchCheckDefault">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="ul">1.2 Uñas (Limpias, bien cuidadas y no tan largas)</label>
            <input class="form-check-input" name="unas" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="cp">1.3 Cabello (Peinado)</label>
            <input class="form-check-input" name="cabello" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="cb">1.4 Cubre Boca</label>
            <input class="form-check-input" name="cubreboca" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckChecked">1.5 Gorro</label>
            <input class="form-check-input" name="gorro" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="pl">1.6 Piso Limpio</label>
            <input class="form-check-input" name="pisolimpio" for="pl" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="mt">1.7 Mesa de trabajo ordenada</label>
            <input class="form-check-input" name="mesa" for="mt" type="checkbox" id="flexSwitchCheckChecked">
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="ud">1.7 Uso del Telefoo unicamente en el lugar de descanso</label>
            <input class="form-check-input" name="telefono" for="ud" type="checkbox" id="flexSwitchCheckChecked">
        </div>
    
</div>
<!-- href=// base_url('nuevo');  -->
<a href="<?= base_url('nuevo');?>" class="btn btn-primary" >Atras</a>

    <!--href=// base_url('asistencia'); -->
    <input  type="submit"value="Siguiente >" name ="Siguiente"class="btn btn-primary">
</form>
        <?= $footer; ?>