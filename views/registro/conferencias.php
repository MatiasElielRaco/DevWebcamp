
    <h2 class="pagina__heading"><?php echo $titulo ?></h2>
    <p class="pagina__descripcion">Elegí hasta 5 eventos para asistir de forma presencial.</p>

<div class="eventos-registro">
    <main class="eventos-registro__listao">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registro__fecha">Viernes 5 de Octubre</p>

        <div class="eventos-registro__grid">
                <?php foreach($eventos["conferencias_v"] as $evento): ?>
                    <?php include __DIR__ . "/evento.php" ?>
                <?php endforeach; ?>
        </div>

        <p class="eventos-registro__fecha">Sábado 6 de Octubre</p>
        <div class="eventos-registro__grid">
                <?php foreach($eventos["conferencias_s"] as $evento): ?>
                    <?php include __DIR__ . "/evento.php" ?>
                <?php endforeach; ?>
        </div>


        <h3 class="eventos-registro__heading--workshops">&lt;Workshops /></h3>
        <p class="eventos-registro__fecha">Viernes 5 de Octubre</p>

        <div class="eventos-registro__grid eventos--workshops">
                <?php foreach($eventos["workshops_v"] as $evento): ?>
                    <?php include __DIR__ . "/evento.php" ?>
                <?php endforeach; ?>
        </div>

        <p class="eventos-registro__fecha">Sábado 6 de Octubre</p>
        <div class="eventos-registro__grid eventos--workshops">
                <?php foreach($eventos["workshops_s"] as $evento): ?>
                    <?php include __DIR__ . "/evento.php" ?>
                <?php endforeach; ?>
        </div>
    </main>

    <aside class="registro">
        <h2 class="registro__heading">Tu Registro</h2>

        <div id="registro-resumen" class="registro__resumen"></div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Seleccioná un regalo</label>
            <select class="registro__select" id="regalo">
                <option value="">-- Selecciona tu regalo --</option>
                <?php foreach($regalos as $regalo): ?>
                    <option value="<?php echo $regalo->id ?>"><?php echo $regalo->nombre ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <form action="" id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" class="formulario__submit formulario__submit--full " value="Registrarme">
            </div>
        </form>
    </aside>

</div>