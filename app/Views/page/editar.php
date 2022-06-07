<?= $header; ?>
<?php
session_start();

?>
<h4>Editar Evaluación</h4>
<form action="/guardar" method="post" class="card">
    <?php foreach ($empleado as $emp) { ?>
        <div class="mb-3">
        <input type="hidden" value="<?= $emp['id']; ?>">
            <label for="candidato" class="col-sm-2 col-form-label">Candidato:</label>
            <select class="form-select" aria-label="Default select example">
                <option selected="Seleccionar"><?= $emp['nombre']; ?></option>
                <!--<option value="<?php //echo $emp['nombre']; ?>"></option>-->
                
            </select>
            <input type="hidden" name="editar">
        </div>
           
        <div class="mb-2">
            <label for="desde" class="form-label">Desde</label>
            <input type="date" value="<?=date("Y-m-d",strtotime($emp['evaluacion_desde']))?>" name="desde">
            <label for="desde" class="form-label">Hasta</label>
            <input type="date" value="<?=date("Y-m-d",strtotime($emp['evaluacion_hasta']))?>" name="hasta">
        </div>
        <div class="mb-2">
            <a type="submit" href="<?= base_url('listar'); ?>" class="btn btn-danger" name="cancelar">Cancelar</a>
            <a type="submit" href="<?= base_url('evaluacion'); ?>" class="btn btn-primary" name="iniciar">Iniciar</a>
        </div>
    <?php  }; ?>
</form>

<?= $footer; ?>