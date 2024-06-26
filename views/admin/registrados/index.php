<h2 class="dashboard__heading"><?php echo $titulo ?></h2> 

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ponentes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Poenete
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($registros)) {?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Email</th>
                    <th scope="col" class="table__th">Plan</th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach ($registros as $registro): ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->email ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->paquete->nombre ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">Aún no hay Registros</p>

    <?php } ?>
</div>

<?php echo $paginacion ?>