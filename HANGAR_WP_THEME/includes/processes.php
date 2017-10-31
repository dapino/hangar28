
    <div class="car hide dirty dirty_1" id="car"><img class="carNormal" src="<?php echo get_stylesheet_directory_uri();?>/assets/car.png" alt="" id="carNormal"><img class="cleanCar" src="<?php echo get_stylesheet_directory_uri();?>/assets/car_2@2x.png" alt="" id="carNormal"><img class="hidden" src="<?php echo get_stylesheet_directory_uri();?>/assets/interior@2x.png" alt="" id="carInterior"><img class="hidden" src="<?php echo get_stylesheet_directory_uri();?>/assets/motor@2x.png" alt="" id="carMotor"><img class="dirt" src="<?php echo get_stylesheet_directory_uri();?>/assets/dirt@2x.png" alt="" id="carDirty"><img class="dirt_1" src="<?php echo get_stylesheet_directory_uri();?>/assets/dirt@2x.png" alt=""><img class="dirt_1" src="<?php echo get_stylesheet_directory_uri();?>/assets/dirt@2x.png" alt="" id="carDirty"><img class="shine_1 shine" src="<?php echo get_stylesheet_directory_uri();?>/assets/shine@2x.png" alt=""><img class="shine_2 shine" src="<?php echo get_stylesheet_directory_uri();?>/assets/shine@2x.png" alt=""><img class="shine_3 shine" src="<?php echo get_stylesheet_directory_uri();?>/assets/shine@2x.png" alt=""></div>
    <div class="mainLogo" id="mainLogo"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/logo-hangar.jpg" alt=""></div>
    <div class="overlay" id="overlay"></div>
    <div class="contactSection" id="contactSection"><span class="close" id="closeContact"></span>
      <h2><?php echo get_theme_mod( 'titulo_reserva' ); ?></h2>
      <div class="contactContent"><?php echo do_shortcode( '[contact-form-7 id="271" title="Formulario de reserva"]' );?></div>
    </div>
    <main id="fullpage">
      <div class="section section_0 process intro" id="inicio">
        <div class="processScene videoIntroCont">
          <iframe class="videoIntro" width="560" height="315" src="https://www.youtube.com/embed/QfSkSEkKYqA?rel=0&amp;autoplay=0&amp;color=white&amp;loop=1&amp;controls=0" frameborder="0" allowfullscreen="allowfullscreen"> </iframe>
        </div><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
      </div>
      <div class="section section_1 process receipt" id="recibo">
        <div class="processScene"><span class="imgAsset man manReceipt"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-receipt@2x.png" alt=""></span><span class="imgAsset tableReceipt table"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/table-receipt@2x.png" alt=""></span><span class="imgAsset coneReceiptRight element"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/cone@2x.png" alt=""></span><span class="imgAsset coneReceiptLeft element"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/cone@2x.png" alt=""></span></div>
        <div class="processContent"><span class="imgAsset processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-receipt@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_recibo' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_recibo' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_2 process washed" id="lavado">
        <div class="processScene"><span class="imgAsset machineWash machine"><span class="waterLoop"></span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-wash@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-wash@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_lavado' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_lavado' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_3 process shampoo" id="shampoo">
        <div class="processScene"><span class="imgAsset machineShampoo machine"><span class="shampooLoop"></span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/shampoo-machine@2x.png" alt=""></span><span class="imgAsset man manShampoo"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-shampoo@2x.png" alt=""></span>
          <!--span.imgAsset.man.manShampoo_1img(src="<?php echo get_stylesheet_directory_uri();?>/assets/man-shampoo_1@2x.png", alt="")
          -->
        </div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-shampoo@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_shampoo' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_shampoo' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_4 process decontamination" id="descontaminacion">
        <div class="processScene"><span class="imgAsset machinePaint machine"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/paint-machine@2x.png" alt=""></span><span class="imgAsset man manPaint"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-paint@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-paint@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_pintura' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_pintura' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_5 process brightness" id="brillo">
        <div class="processScene"><span class="imgAsset man manShine"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-shine@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-shine@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_brillo' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_brillo' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_6 process protection" id="proteccion">
        <div class="processScene"><span class="imgAsset paint element"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/paint-cont@2x.png" alt=""></span><span class="imgAsset man manProtection"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-protection@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-protection@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_proteccion' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_proteccion' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_7 process inside" id="interior">
        <div class="processScene"><span class="imgAsset steerWheel"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/interior-steer@2x.png" alt=""></span><span class="imgAsset steerPanel"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/interior-panel@2x.png" alt=""></span><span class="imgAsset man manInterior"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-interior@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-interior@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_interior' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_interior' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_8 process motor" id="motor">
        <div class="processScene"><span class="imgAsset motorTable table"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/motor-table@2x.png" alt=""></span><span class="imgAsset man manMotor"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/man-motor@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/icon-motor@2x.png" alt=""></span>
          <h3 class="processTitle"><?php echo get_theme_mod( 'titulo_motor' ); ?></h3>
          <p class="processDescription"><?php echo get_theme_mod( 'texto_motor' ); ?></p><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a>
        </div>
      </div>
      <div class="section section_9 process booking" id="reserva">
        <div class="processScene"><a class="btn bookingButton"><?php echo get_theme_mod( 'texto_boton' ); ?></a></div>
      </div>
    </main>
   