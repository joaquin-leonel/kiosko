
<?php
include './partials/header.php';
?>



<div class="col-xs-12 col-md-12 col-sm-12 p-4 bgInicioKiosko">
    <h1 class="TituloH1">CONTACTENOS</h1>
            <h2 class="TituloH2">Consulte todas sus dudas sobre arriendo y compra de viviendas.</h2>
            
        </div>

<div class="container-fluid">
  
  
  

  <div class="row">
      <!-- <div class="col-sm-12 d-flex justify-content-center contactoBox ">
        
      <form action="enviaMail.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="TextoContacto">Ingrese su nombre y apellido</label>
              <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="exampleInputEmail1" class="TextoContacto">Ingrese su E-mail</label>
              <input type="email" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="exampleInputEmail1" class="TextoContacto">Ingrese sus comentarios</label>
            
              <textarea id="comment" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
              <button type="submit" value="Enviar" class="btn btn-primary btnEnviar TextoContacto">Enviar</button>
              
            </div>
            
          </form>

      </div> -->


      <div class="col-sm-4 d-flex justify-content-center contactoBox">
          <div>
          <h1 class="tituloQuienes">CONTACTENOS</h1>
          <p class="historiaTexto">En este espacio, puede dejarnos cualquier consulta, inquietud o presupuesto sobre nuestros productos.No compartimos su información con terceros.</p>
        



          <form action="enviaMail.php" method="post">
            <!-- <div class="mb-3"> -->
              <!-- <label for="exampleInputEmail1" class="TextoContacto">Ingrese su nombre y apellido</label>
              <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->

              <label for="exampleInputEmail1" class="TextoContacto">Ingrese su Nombre</label>
              <input id="name" name="name" class="form-control inputDeForm" id="exampleInputEmail1" aria-describedby="emailHelp">

              <label for="exampleInputEmail1" class="TextoContacto">Ingrese su E-mail</label>
              <input type="email" id="email" name="email" class="form-control inputDeForm" id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="exampleInputEmail1" class="TextoContacto">Ingrese sus comentarios</label>
            
              <textarea style="resize: none;" id="comment" name="comment" class="form-control inputDeForm" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
              <button type="submit" value="Enviar" class="btn btn-primary btnEnviar TextoContacto">Enviar</button>
              
            <!-- </div> -->
            
          </form>
          </div>
        </div>
  </div>

    
  <!-- <div class="row m-4 p-1">
    <div class="col-sm-4 d-flex justify-content-center boxServicios">
      <section>  
        <img class="imgServicios" src="./img/compraImg.svg" alt="">
        <h2 class=" mt-4 tituloBeneficio">COMPRAR</h2>  
        <p>Contamos con alternativas para ofrecerte en tu ciudad.</p>
        <button type="button" class="btn btn-primary btn-lg btn-block btnMas">Conocer mas</button>
      </section>
     
    </div>
    
    <div class="col-sm-4 d-flex justify-content-center boxServicios">
      <section>  
        <img class="imgServicios" src="./img/arrendarImg.svg" alt="">
        <h2 class=" mt-4 tituloBeneficio">ARRENDAR</h2> 
        <p>Tenemos varias opciones para que elijas.</p>
        <button type="button" class="btn btn-primary btn-lg btn-block btnMas">Conocer mas</button>
      </section>
    
    </div>
    
    <div class="col-sm-4 d-flex justify-content-center boxServicios">
      <section> 
        <img class="imgServicios" src="./img/repararImg.svg" alt="Reparar propiedad en Kiosko Inmobiliario">
        <h2 class=" mt-4 tituloBeneficio">REPARAR</h2> 
        <p>Contamos con un equipo especializado para solucionar su problema.</p>
        <button type="button" class="btn btn-primary btn-lg btn-block btnMas">Conocer mas</button>
      </section>
   
   
   
    </div>
    
        
    <div class="col-sm-12 d-flex justify-content-center iconBox">
      <img class="imgIconos" src="./img/InmobiliariaIcon.svg" alt="Icono Inmobiliaria de Kiosko Inmobiliario">
    </div>
        
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
        <h2 class=" mt-4 titularClass">INMOBILIARIA</h2>
    </div>
    
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
    <p class="featuresText">Los profesionales de Kiosko inmobiliario están capacitados para brindar toda la asesoría necesaria con respecto a inquilinatos, ventas, permuta y/o mantenimiento de tu inmueble y hacer el seguimiento del mismo.
    Ser de intermediarios en lo que respecta a tu inmueble hará que estés confiado y que a la hora de cualquier transacción nuestro equipo estará ahí para respaldar y administrar las negociaciones.</p>
    </div>



    <div class="col-sm-12 d-flex justify-content-center iconBox">
      <img class="imgIconos" src="./img/serviciosIcon.svg" alt="Icono Servicios de Kiosko Inmobiliario">
    </div>
        
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
        <h2 class=" mt-4 titularClass">SERVICIOS</h2>
    </div>
    
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
    <p class="featuresText">En Kiosko inmobiliario contamos con un equipo de aliados profesionales especializados para resolver las necesidades de nuestros clientes basandonos en rubros como:
    · Construcción y remodelación · Gasodomésticos · Plomería · Electricista · Pintura · Carpintería · Reparaciones · Ventanería.</p>
    </div>



    <div class="col-sm-12 d-flex justify-content-center iconBox">
      <img class="imgIconos" src="./img/pagosIcon.svg" alt="Icono de pago de Kiosko Inmobiliario">
    </div>
        
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
        <h2 class=" mt-4 titularClass">LINK DE PAGO</h2>
    </div>
    
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
      <p class="featuresText">Haz click sobre el siguiente link de pago para abonar su arriendo de Kiosko Inmobiliario.</p>
     
    </div>
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
     
      <button type="button" class="btn btn-primary btn-lg btnMas">Pagar Arriendo</button>  
    </div>
    



    <div class="col-sm-12 d-flex justify-content-center iconBox">
      <img class="imgIconos" src="./img/contactoIcon.svg" alt="Icono Contacto de Kiosko Inmobiliario">
    </div>
        
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
        <h2 class=" mt-4 titularClass">CONTACTO</h2>
    </div>
    
    <div class="col-sm-12 d-flex justify-content-center titulosGeneral">
      <p class="featuresText"> <strong> Dirección: </strong> Carrera 10 # 64 – 45, Bogotá, Colombia </br>
      <strong> Correo: </strong> contacto@kioskoinmobiliario.com</br>
      <strong> Teléfono / Whatsapp: </strong> +57 302 - 423 - 6366</br>
      <strong>Instagram: </strong> @kioskoinmobiliario
      </p>
    </div>


    <div class="col-sm-12 d-flex justify-content-center bannerBox">
      <img class="bannerStyleBig" src="./img/banner2.png" alt="banner de Kiosko Inmobiliario">
    </div>
    
    <div class="col-sm-12 d-flex justify-content-center bannerBox">
      <img class="bannerStyleLittle" src="./img/banner1little.png" alt="banner de Kiosko Inmobiliario">
    </div>

</div> -->





    <?php
include './partials/footer.php';
?>
  
  </div>

  
  


  
