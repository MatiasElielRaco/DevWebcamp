<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia sesión en DevWebcamp</p>

    <?php 
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form method="POST" action="/login" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            />
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Contraseña"
                id="password"
                name="password"
            />
        </div>
            <input 
                type="submit" 
                class="formulario__submit"
                value="Iniciar Sesión"
            />
    </form>
        <div class="acciones">
            <a class="acciones__enlace" href="/registro">¿No tenes cuenta? Creála</a>
            <a class="acciones__enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
</main>