<?= $header; ?>
<h3>Evaluación del Personal</h3>

<div class="card">

    <div class="rounded float-start">
  
        <a class="btn btn-primary" href="<?= base_url('nuevo'); ?>" role="button"><i class="fa-solid fa-plus"></i></a>
        <br />
    </div>

    <table class="table text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha evaluación</th>
                <th>Puntaje</th>
                <th>Bono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($evaluacion):
            foreach ($evaluacion as $evalua) { 
                ?>
                <tr>
                    <th scope="row"><?=$evalua['id']; ?></th>
                    <td><?= $evalua['nombre']; ?></td>
                    <td><?= $evalua['evaluacion_desde']; ?> - <?= $evalua['evaluacion_hasta']; ?></td>
                    <td><?= $evalua['puntaje']; ?></td>
                    <td><?= $evalua['bono']; ?></td>
                    <td>
                        <a class="btn btn-warning " href="<?=base_url('editar/'.$evalua['id']);?>" role="button"><i class="fa-solid fa-pencil"></i></a>

                        <a class="btn btn-danger " href="<?=base_url('borrar/'.$evalua['id'])?>" role="button"><i class="fa-solid fa-trash-can"></i></a>

                    </td>
                </tr>
            <?php }; 
            endif;
            ?>
        </tbody>
    </table>

</div>

<?= $footer; ?>