<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* PIE */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="pie" id="pie">
    <div class="container light-spacing">
        <div class="row no-margin">
            <div class="col-sm-4 pie-text">
                <p>
                    MATRÍZ <br>
                    Vialidad CHP #1216 Colonia Dale Chihuahua, México.<br>
                    <strong>VENTAS</strong> 614 290 1280<br>
                    <strong>OFICINA</strong> 614 420 5926<br>
                    ventas@belstone.com<br>
                    <a href="https://www.facebook.com/Belstone.mx/" target="_blank"><i class="fa fa-facebook-square"></i><span>&nbsp;/belstone.mx</span></a>
                </p>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/logo.png" alt="logo" class="vertical-align">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 pie-text">
                ¿Dudas? Nostros te ayudamos
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="contact-form footer-form" method="post">
                    <input type="hidden" name="form_type" value="con">
                    <div class="form-output"></div>
                    <div class="relative-container">
                        <input name="name" type="text" id="name-footer" required>
                        <label for="name-footer">Nombre</label>
                    </div>
                    <div class="relative-container">
                        <input name="tel" type="tel" id="tel-footer" required>
                        <label for="tel-footer">Teléfono</label>
                    </div>
                    <div class="relative-container">
                        <input name="email" type="email" id="email-footer" required>
                        <label for="email-footer">Correo</label>
                    </div>
                    <div class="relative-container">
                        <textarea name="msg" id="msg-footer" rows="3" required></textarea>
                        <label for="msg-footer">Mensaje</label>
                    </div>
                    <div class="text-right">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center footer-rights">
            <p>
                Todos los derechos reservados BelStone <?php echo date('Y'); ?>. | Design by: <a target="_blank" href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a>
            </p>
        </div>
    </footer>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* SCRIPTS */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php wp_footer(); ?>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/app.js"></script>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/parallax.js"></script>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/smoothscroll.js"></script>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/ekko-lightbox.min.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            loadingMessage: 'Cargando...'
        });
    });
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByulHryfKDDbhmb8BoxQoeAHXki5SZ6Lw&callback=initMap"></script>
<script src="<?php echo bloginfo('template_url').'/'; ?>js/google-maps.js"></script>
</body>
</html>