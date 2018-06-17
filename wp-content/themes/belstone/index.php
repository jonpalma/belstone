<?php $page = 'index';?>
<?php include('header.php');?>
    <div class="wrapper index" id="index">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* BANNER */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="banner" id="banner">
            <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
					<?php
					$arrayItem = CFS()->get('banner_array');
					if($arrayItem)
					{
						foreach($arrayItem as $key => $item)
						{
							if($key == 0)
							{
								echo '<div class="item active">';
							}
							else
							{
								echo '</div>';
								echo '<div class="item">';
							}
							?>
                            <div class="img-container" style="background: url(<?php echo $item['banner_array_img'];?>) no-repeat center center;"></div>
                            <div class="container">
                                <div class="vertical-align">
                                    <div class="content">
                                        <h1>
											<?php echo $item['banner_array_title'];?><br>
                                            <span><?php echo $item['banner_array_subtitle'];?></span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
							<?php
						}
						echo '</div>';
					}
					?>
                </div>
                <!-- Controls -->
                <div class="controls">
                    <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                        <span class="sr-only">Siguiente</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                        <span class="sr-only">Anterior</span>
                    </a>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
					<?php
					$arrayItem = CFS()->get('banner_array');
					if($arrayItem)
					{
						foreach($arrayItem as $key => $item)
						{
							if($key == 0)
							{
								echo '<li data-target="#carousel-banner" data-slide-to="'.$key.'" class="active"></li>';
							}
							else
							{
								echo '<li data-target="#carousel-banner" data-slide-to="'.$key.'"></li>';
							}
						}
					}
					else
					{
						echo '<li data-target="#carousel-banner" data-slide-to="0" class="active"></li>';
					}
					?>
                </ol>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* NOSOTROS */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="nosotros light-spacing" id="nosotros">
            <div class="container no-padd">
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <div class="align-right">
                            <div class="fancy-title">
                                <h1 class="title">
									<?php echo CFS()->get('nosotros_title');?>
                                </h1>
                            </div>
                        </div>
                        <h2>
							<?php echo CFS()->get('nosotros_text_title');?>
                        </h2>
                        <p>
							<?php echo CFS()->get('nosotros_text');?>
                        </p>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="img hidden-xs" style="background: url(<?php echo CFS()->get('nosotros_img');?>) no-repeat center center;"></div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* PRLLX */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="parallax-container" id="prllx">
            <div class="parallax-element">
                <img class="parallax-img" src="<?php echo CFS()->get('parallax_1_img');?>" alt="Parallax">
            </div>
            <div class="container spacing">
                <h1>
					<?php echo CFS()->get('parallax_1_title');?><br>
                    <span><?php echo CFS()->get('parallax_1_subtitle');?></span>
                </h1>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* SERVICIOS */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="servicios" id="servicios">
            <div class="container light-spacing">
                <div class="fancy-title center-block">
                    <h1 class="title">Servicios</h1>
                </div>
                <div class="row no-margin">
                    <div class="col-md-3 col-sm-6 grid-element">
                        <a href="<?php echo bloginfo('template_url'); ?>/img/galeria/cocinas/1.jpg" data-toggle="lightbox" data-gallery="gallery-cocina">
                            <div class="img-grid img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/servicios/cocina.jpg) no-repeat center center;"></div>
                        </a>
                        <span class="hidden" href="<?php echo bloginfo('template_url'); ?>/img/galeria/cocinas/2.jpg" data-gallery="gallery-cocina"></span>
                        <span class="hidden" href="<?php echo bloginfo('template_url'); ?>/img/galeria/cocinas/3.jpg" data-gallery="gallery-cocina"></span>
                        <div class="title">Cocinas</div>
                    </div>
                    <div class="col-md-3 col-sm-6 grid-element">
                        <a href="<?php echo bloginfo('template_url'); ?>/img/galeria/cocinas/1.jpg" data-toggle="lightbox" data-gallery="gallery-baños">
                            <div class="img-grid img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/servicios/baños.jpg) no-repeat center center;"></div>
                        </a>
                        <div class="title">Baños</div>
                    </div>
                    <div class="col-md-3 col-sm-6 grid-element">
                        <a href="<?php echo bloginfo('template_url'); ?>/img/galeria/cocinas/1.jpg" data-toggle="lightbox" data-gallery="gallery-lapidas">
                            <div class="img-grid img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/servicios/lapidas.jpg) no-repeat center center;"></div>
                        </a>
                        <div class="title">Lápidas</div>
                    </div>
                    <div class="col-md-3 col-sm-6 grid-element">
                        <a href="<?php echo bloginfo('template_url'); ?>/img/materiales/1.jpg" data-toggle="lightbox" data-gallery="gallery-materiales">
                            <div class="img-grid img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/servicios/materiales.jpg) no-repeat center center;"></div>
                        </a>
                        <span class="hidden" href="<?php echo bloginfo('template_url'); ?>/img/materiales/2.jpg" data-gallery="gallery-materiales"></span>
                        <span class="hidden" href="<?php echo bloginfo('template_url'); ?>/img/materiales/3.jpg" data-gallery="gallery-materiales"></span>
                        <div class="title">Materiales</div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* COTIZADOR */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="cotizador spacing parallax-container" id="cotizador">
            <div class="parallax-element">
                <img class="parallax-img" src="<?php echo bloginfo('template_url'); ?>/img/index/parallax/parallax2.jpg" alt="Parallax cotizador">
            </div>
            <div class="container">
                <div class="fancy-title center-block">
                    <h1 class="title">Cotizador</h1>
                </div>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="contact-form footer-form cot-form">
                    <input type="hidden" name="form_type" value="cot">
                    <div class="row no-margin">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="form-output"></div>
                        </div>
                        <div class="col-md-offset-3 col-md-3 grid-element">
                            <div class="relative-container">
                                <input name="name" type="text" id="name-cot" required>
                                <label for="name-cot">Nombre</label>
                            </div>
                            <div class="relative-container">
                                <input name="tel" type="tel" id="tel-cot" required>
                                <label for="tel-cot">Teléfono</label>
                            </div>
                            <div class="relative-container">
                                <input name="email" type="email" id="email-cot" required>
                                <label for="email-cot">Correo</label>
                            </div>
                            <div class="relative-container">
                                <input name="city" type="text" id="city-cot" required>
                                <label for="city-cot">Ciudad</label>
                            </div>
                        </div>
                        <div class="col-md-3 grid-element">
                            <div class="relative-container">
                                <select name="type" id="type" required>
                                    <option value="null" disabled selected>-- Servicio --</option>
                                    <option value="Cocina">Cocina</option>
                                    <option value="Baño">Baño</option>
                                    <option value="Lápida">Lápida</option>
                                    <option value="Material">Material</option>
                                </select>
                            </div>
                            <div class="relative-container">
                                <select name="budget" id="budget" required>
                                    <option value="null" disabled selected>-- Presupuesto --</option>
                                    <option value="$3,000 - $10,000">$3,000 - $10,000</option>
                                    <option value="$10,000 - $30,000">$10,000 - $30,000</option>
                                    <option value="$30,000 - $50,000">$30,000 - $50,000</option>
                                    <option value="Más de $50,000">Más de $50,000</option>
                                </select>
                            </div>
                            <div class="relative-container">
                                <textarea name="msg" id="msg-cot" rows="4" required></textarea>
                                <label for="msg-cot">Mensaje</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-6 btn-step">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* SUCURSALES */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="sucursales spacing" id="sucursales">
            <div class="fancy-title center-block">
                <h1 class="title">Sucursales</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="grid-element">
                            <a href="<?php echo bloginfo('template_url'); ?>/img/index/sucursales/1.jpg" data-toggle="lightbox" data-gallery="gallery-suc">
                                <div class="img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/sucursales/1_thumb.jpg) no-repeat center center;"></div>
                            </a>
                        </div>
                        <div class="fancy-title">
                            <h2 class="title">Matríz</h2>
                        </div>
                        <div class="address">
                            <p>
                                Vialidad CH-P #1216<br>
                                Col. Dale<br>
                                <span class="phone">Tel. (614) 420 59 26</span>
                            </p>
                        </div>
                        <div class="map-btn">
                            <div class="googleMap" data-lat="28.618104" data-long="-106.055500" data-title="Matríz"></div>
                        </div>
                        <button class="btn-msg" data-toggle="modal" data-target="#contact-modal" data-sucursal="Matríz">Mensaje</button>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="grid-element">
                            <a href="<?php echo bloginfo('template_url'); ?>/img/index/sucursales/2.jpg" data-toggle="lightbox" data-gallery="gallery-suc">
                                <div class="img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/sucursales/2_thumb.jpg) no-repeat center center;"></div>
                            </a>
                        </div>
                        <div class="fancy-title">
                            <h2 class="title">Américas</h2>
                        </div>
                        <div class="address">
                            <p>
                                Av. Américas #10000<br>
                                Col. Panamericana<br>
                                <span class="phone">Tel. (614) 388 24 00 / (614) 388 24 01</span>
                            </p>
                        </div>
                        <div class="map-btn">
                            <div class="googleMap" data-lat="28.655537" data-long="-106.110865" data-title="Américas"></div>
                        </div>
                        <button class="btn-msg" data-toggle="modal" data-target="#contact-modal" data-sucursal="Américas">Mensaje</button>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="grid-element">
                            <a href="<?php echo bloginfo('template_url'); ?>/img/index/sucursales/3.jpg" data-toggle="lightbox" data-gallery="gallery-suc">
                                <div class="img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/sucursales/3_thumb.jpg) no-repeat center center;"></div>
                            </a>
                        </div>
                        <div class="fancy-title">
                            <h2 class="title">Juventud</h2>
                        </div>
                        <div class="address">
                            <p>
                                Perif. De la Juventud #7134<br>
                                Fracc. Cumbres<br>
                                <span class="phone">Tel. (614) 389 88 87 / (614) 389 88 88</span>
                            </p>
                        </div>
                        <div class="map-btn">
                            <div class="googleMap" data-lat="28.643225" data-long="-106.124336" data-title="Juventud"></div>
                        </div>
                        <button class="btn-msg" data-toggle="modal" data-target="#contact-modal" data-sucursal="Juventud">Mensaje</button>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="grid-element">
                            <a href="<?php echo bloginfo('template_url'); ?>/img/index/sucursales/4.jpg" data-toggle="lightbox" data-gallery="gallery-suc">
                                <div class="img-container" style="background: url(<?php echo bloginfo('template_url'); ?>/img/index/sucursales/4_thumb.jpg) no-repeat center center;"></div>
                            </a>
                        </div>
                        <div class="fancy-title">
                            <h2 class="title">Relíz</h2>
                        </div>
                        <div class="address">
                            <p>
                                Av. Teófilo Borunda #11802<br>
                                Plaza Castilla Reliz #1<br>
                                <span class="phone">Tel. (614) 688 77 54 / (614) 241 7180</span>
                            </p>
                        </div>
                        <div class="map-btn">
                            <div class="googleMap" data-lat="28.598417" data-long="-106.125740" data-title="Relíz"></div>
                        </div>
                        <button class="btn-msg" data-toggle="modal" data-target="#contact-modal" data-sucursal="Relíz">Mensaje</button>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* MODAL CONTACTO */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="contact-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="contact-form modal-form" method="post">
                            <input type="hidden" name="form_type" value="con">
                            <div class="form-output"></div>
                            <div class="relative-container">
                                <input name="name" type="text" id="name" required>
                                <label for="name">Nombre</label>
                            </div>
                            <div class="relative-container">
                                <input name="tel" type="tel" id="tel" required>
                                <label for="tel">Teléfono</label>
                            </div>
                            <div class="relative-container">
                                <input name="email" type="email" id="email" required>
                                <label for="email">Correo</label>
                            </div>
                            <div class="relative-container">
                                <textarea name="msg" id="msg" rows="5" required></textarea>
                                <label for="msg">Mensaje</label>
                            </div>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* MODAL MAPA */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="map-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-google-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/**********************************/-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>
<?php include('footer.php');?>