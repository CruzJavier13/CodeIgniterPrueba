<?= $header; ?>
<?php

?>

    <form action="<?= site_url('/evaluacion') ?>" method="post" class="card" style="padding:40px;margin:20px">
        <div class="row" style="margin:20px">
            <label for="candidato" class="col col-form-label">Candidato:</label>
            <select name="select" selec class="col-10 form-group" aria-label="Default select example">
                <option selected>Seleccionar</option>
                <?php foreach ($empleado as $emp) { ?>
                    <option  value="<?= $emp['nombre']; ?>"><?= $emp['nombre']; ?></option>
                    
                <?php  }; ?>
            </select>
            
        </div>

        <div class="row"  style="margin:40px">
            <label for="desde" class="col form-label">Desde</label>
            <input class="col-4" type="date" value="<?php echo date('Y-M-D') ?>" name="desde">
            <label for="desde" class="col form-label" style="position:relative;left:30px">Hasta</label>
            <input class="col-4" type="date" value="<?php echo date('Y-M-D') ?>" name="hasta">
        </div>
        <div class="mb-2" style="margin:20px;position:relative; left:70%; ">
            <a style="margin-right:40px;" type="submit" href="<?= base_url('listar'); ?>" class="btn btn-danger" name="Cancelar">Cancelar</a>
            <input type="submit"  class="btn btn-primary" name="Iniciar" value="Iniciar">
        </div>
    </form>

<?= $footer; ?>