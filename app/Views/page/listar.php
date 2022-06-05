<?= $header; ?>
<h3>Evaluación del Personal</h3>

<div class="card">
    <div class="card-header">
        <a class="btn btn-primary " href="<?= base_url('nuevo'); ?>" role="button"><i class="fa-solid fa-plus"></i></a>
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
            <?php foreach ($evaluacion as $evalua) { ?>
                <tr>
                    <th scope="row"><?= $evalua['id']; ?></th>
                    <td><?= $evalua['nombre']; ?></td>
                    <td><?= $evalua['evaluacion_desde']; ?> - <?= $evalua['evaluacion_hasta']; ?></td>
                    <td><?= $evalua['puntaje']; ?></td>
                    <td><?= $evalua['bono']; ?></td>
                    <td>
                        <a class="btn btn-warning " href="#" role="button"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn btn-danger " href="#" role="button"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>

</div>

<?= $footer; ?>