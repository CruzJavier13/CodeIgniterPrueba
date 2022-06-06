<?= $header; ?>
<?php 
session_start();
?>
<form action="<?=site_url('/evaluacion')?>" method="post" class="card">
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
        <input type="date" value="<?php echo date('Y-M-D') ?>" name="desde" >
        <label for="desde" class="form-label">Hasta</label>
        <input type="date" value="<?php echo date('Y-M-D') ?>" name="hasta">
    </div>
    <div class="mb-2">
        <a type="submit" href="<?=base_url('listar');?>" class="btn btn-danger" name="Cancelar" >Cancelar</a>
        <input type="submit"  href="<?=base_url('evaluacion');?>" class="btn btn-primary" name="Iniciar" value="Iniciar" >
    </div>
</form>

<?= $footer; ?>