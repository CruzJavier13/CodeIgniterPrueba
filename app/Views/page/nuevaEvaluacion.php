<?= $header; ?>
//<?php print_r($empleado); ?>

<form action="guardar" method="post" class="card">
    <div class="mb-3">
        <label for="candidato" class="col-sm-2 col-form-label">Cabdidato:</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Seleccionar</option>
            <?php foreach ($empleado as $emp) { ?>
                <option value="<?= $emp['nombre']; ?>"><?= $emp['nombre']; ?></option>
            <?php  }; ?>
        </select>
    </div>
    <div class="mb-2">
        <label for="desde" class="form-label">Desde</label>
        <input type="date" value="<?= date('Y-M-D') ?>">
        <label for="desde" class="form-label">Hasta</label>
        <input type="date" value="<?= date('Y-M-D') ?>">
    </div>
    <div class="mb-2">
        <a type="submit" href="<?=base_url('listar');?>" class="btn btn-danger" name="cancelar" >Cancelar</a>
        <a type="submit"  href="<?=base_url('evaluacion');?>" class="btn btn-primary" name="iniciar" >Iniciar</a>
    </div>
</form>

<?= $footer; ?>