<?= $header; ?>


<h3>Evaluación del Personal</h3>

<div class="card" style="margin:20px;padding:40px">

    <div class="rounded float-start">
  
        <a class="btn btn-primary" style="border-radius:45%; float:right;margin:20px" href="<?= base_url('nuevo'); ?>" role="button"><i class="fa-solid fa-plus"></i></a>
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
<?php
 /*  echo $idempleado."     *";
   echo $nombre."     *";
   echo $evaluacion_desde."     *";
   echo $evaluacion_hasta."    *";
   echo $puntaje."     *";
   echo $bono;
*/
?>
</div>

<?= $footer; ?>