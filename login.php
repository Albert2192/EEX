<div class="access_main_container">
        <form id="formulario">
            <div class="login_container">
                <div class="img_container">
                    <img src="images/systema/logo/logo.png" alt="logo_empresa" class="logo_empresa">
                </div>
                <div class="label_container">
                    <label for="user">Usuario</label>
                    <input type="text" id="user" autocomplete="off" autofocus>
                </div>
                <div class="label_container pass">
                    <label for="pass">Contaseña</label>
                    <input type="password" id="pass" autocomplete="off" > 
                    <i id="see_pass" class="fa fa-eye see_pass" aria-hidden="true"></i>
                </div>
                <button type="submit" class="acceder">
                    <p>Acceder</p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
    <footer class="footer">
        <p>Business Suite - Alberto Aquino</p>
        <p>® Copyright - 2023</p>
    </footer>
    <div class="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <p id="alert_message">Error al acceder</p>
    </div>

    <!-- OVERLAY -->
    <div id="overlay" class="overlay">
        <div class="overlay_container">
            <i class="fa fa-spinner" aria-hidden="true"></i>
            <p>Ingresando...</p>
        </div>
    </div>
    <script src="<?php echo url();?>js/custom.js?v=<?php echo $v; ?>"></script>
    <script src="<?php echo url();?>js/auth.js?v=<?php echo $v; ?>"></script>