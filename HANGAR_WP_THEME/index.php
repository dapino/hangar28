<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="main.css">
    <title>Hangar 28 - Car Detailing</title>
  </head>
  <body>
    <div class="car hide dirty dirty_1" id="car"><img class="carNormal" src="./assets/car.png" alt="" id="carNormal"><img class="cleanCar" src="./assets/car_2@2x.png" alt="" id="carNormal"><img class="hidden" src="./assets/interior@2x.png" alt="" id="carInterior"><img class="hidden" src="./assets/motor@2x.png" alt="" id="carMotor"><img class="dirt" src="./assets/dirt@2x.png" alt="" id="carDirty"><img class="dirt_1" src="./assets/dirt@2x.png" alt=""><img class="dirt_1" src="./assets/dirt@2x.png" alt="" id="carDirty"><img class="shine_1 shine" src="./assets/shine@2x.png" alt=""><img class="shine_2 shine" src="./assets/shine@2x.png" alt=""><img class="shine_3 shine" src="./assets/shine@2x.png" alt=""></div>
    <div class="mainLogo" id="mainLogo"><img src="./assets/logo-hangar.jpg" alt=""></div>
    <main id="fullpage">
      <div class="section section_0 process intro" id="inicio">
        <div class="processScene videoIntroCont">
          <iframe class="videoIntro" width="560" height="315" src="https://www.youtube.com/embed/QfSkSEkKYqA?rel=0&amp;autoplay=0&amp;color=white&amp;loop=1&amp;controls=0" frameborder="0" allowfullscreen="allowfullscreen"> </iframe>
        </div><a class="btn" href="#">Reservar Ahora</a>
      </div>
      <div class="section section_1 process receipt" id="recibo">
        <div class="processScene"><span class="imgAsset man manReceipt"><img src="./assets/man-receipt@2x.png" alt=""></span><span class="imgAsset tableReceipt table"><img src="./assets/table-receipt@2x.png" alt=""></span><span class="imgAsset coneReceiptRight element"><img src="./assets/cone@2x.png" alt=""></span><span class="imgAsset coneReceiptLeft element"><img src="./assets/cone@2x.png" alt=""></span></div>
        <div class="processContent"><span class="imgAsset processIcon"><img src="./assets/icon-receipt@2x.png" alt=""></span>
          <h3 class="processTitle">Recibo</h3>
          <p class="processDescription">Establecemos las necesidades y prioridades para su automovil ofreciendo una cotizacion muy aproximada a la definitiva. Agendamos una reunión para hacer una inspección visual de vehículo y determinar qué tipo de trabajo es el más apropiado, tipo de productos y maquinas que debemos utilizar para lograr los mejores resultados, y el tiempo que se tomará llevar acabo dicho trabajo.</p>
          <!--a(href='#').btn Reservar Ahora-->
        </div>
      </div>
      <div class="section section_2 process washed" id="lavado">
        <div class="processScene"><span class="imgAsset machineWash machine"><span class="waterLoop"></span><img src="./assets/man-wash@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-wash@2x.png" alt=""></span>
          <h3 class="processTitle">Lavado</h3>
          <p class="processDescription">El vehiculo que entra para un simple lavado, o a un lavado para posterior aplicarle cualquiera de nuestros procesos de embellecimiento, o restauración de pintura, recibe el mismo tratamiento. Se humedece  con agua pura, aplicando presión sobre las partes bajas donde más se acumulan agentes contaminantes como barro y tierra. </p>
        </div>
        <!--.slide
        h3.processTitle Lavado
        p.processDescription
        
        -->
      </div>
      <div class="section section_3 process shampoo" id="shampoo">
        <div class="processScene"><span class="imgAsset machineShampoo machine"><span class="shampooLoop"></span><img src="./assets/shampoo-machine@2x.png" alt=""></span><span class="imgAsset man manShampoo"><img src="./assets/man-shampoo@2x.png" alt=""></span>
          <!--span.imgAsset.man.manShampoo_1img(src="./assets/man-shampoo_1@2x.png", alt="")
          -->
        </div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-shampoo@2x.png" alt=""></span>
          <h3 class="processTitle">Shampoo</h3>
          <p class="processDescription">Aplicamos shampoo con maquina, de arriba hacia abajo de manera tal que la suciedad de la parte inferior no contamine la superior. Con toallas de microfibra; se distribuye el shampoo en todo el carro, desprendiendo así la totalidad de los contaminantes. Finalmente se enjuaga y se seca utilizando una espátula de silicona que ayuda a que el agua escurra y asi mismo cualquier residuo de mugre aderido que pueda lastimar la pintura al pasar la toalla para secado. Toalla que se utilizará para secar en su totalidad el automovil. Cómo ultimo paso se soplan con aire a presión los puntos donde quede agua acumulada. Si el vehículo entró únicamente para lavado, se aplicará cera líquida para proteger la pintura de los rayos solares y partículas dañinas que se encuentran en el medio ambiente. </p>
        </div>
      </div>
      <div class="section section_4 process decontamination" id="descontaminacion">
        <div class="processScene"><span class="imgAsset machinePaint machine"><img src="./assets/paint-machine@2x.png" alt=""></span><span class="imgAsset man manPaint"><img src="./assets/man-paint@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-paint@2x.png" alt=""></span>
          <h3 class="processTitle">Descontaminación y pulida</h3>
          <p class="processDescription">Una vez lavado el automóvil al que se le vaya a hacer cualquier tipo de proceso a su pintura, esta deberá ser descontaminada; trabajo que se logra pasando sobre esta, una arcilla fabricada especialmente para este tipo de trabajo. Con esta misma vamos a desprender todas las partículas que se han pegado a las superficie y que no salen con la simple lavada, generando pérdida de brillo y hasta la misma pérdida del color original. Con el propósito de conseguir el mejor brillo de un color, las piezas a tratar deben ser pulidas con cremas de diferente nivel abrasivo. Entre más deteriorada esté la pintura y su brillo, más abrasivo debería ser el producto a utilizar. Incluso se podría llegar a matizar el barniz que cubre el color con lija de granulo muy delgado, para así eliminar la capa quemada por el sol y el  paso de los años.</p>
        </div>
      </div>
      <div class="section section_5 process brightness" id="brillo">
        <div class="processScene"><span class="imgAsset man manShine"><img src="./assets/man-shine@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-shine@2x.png" alt=""></span>
          <h3 class="processTitle">Micro-rayones, brillo y encerado</h3>
          <p class="processDescription"></p>
        </div>
      </div>
      <div class="section section_6 process protection" id="proteccion">
        <div class="processScene"><span class="imgAsset paint element"><img src="./assets/paint-cont@2x.png" alt=""></span><span class="imgAsset man manProtection"><img src="./assets/man-protection@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-protection@2x.png" alt=""></span>
          <h3 class="processTitle">Protección de pintura</h3>
          <p class="processDescription"></p>
        </div>
      </div>
      <div class="section section_7 process inside" id="interior">
        <div class="processScene"><span class="imgAsset steerWheel"><img src="./assets/interior-steer@2x.png" alt=""></span><span class="imgAsset steerPanel"><img src="./assets/interior-panel@2x.png" alt=""></span><span class="imgAsset man manInterior"><img src="./assets/man-interior@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-interior@2x.png" alt=""></span>
          <h3 class="processTitle">Limpieza interior</h3>
          <p class="processDescription"></p>
        </div>
      </div>
      <div class="section section_8 process motor" id="motor">
        <div class="processScene"><span class="imgAsset motorTable table"><img src="./assets/motor-table@2x.png" alt=""></span><span class="imgAsset man manMotor"><img src="./assets/man-motor@2x.png" alt=""></span></div>
        <div class="processContent"><span class="processIcon"><img src="./assets/icon-motor@2x.png" alt=""></span>
          <h3 class="processTitle">Embellecimiento de motor</h3>
          <p class="processDescription"></p>
        </div>
      </div>
      <div class="section section_9 process booking" id="booking">
        <div class="processContent">
          <h3 class="processTitle">Reservar</h3>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>