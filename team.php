<?php include 'navbar.php'; ?>
<div style="
        background-image: url('images/GrupoTELEMAX-FondoAzul.jpg');
        height: 520px; 
        background-attachment: fixed; 
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover; 
        position: relative;"></div>
<!-- Meet The Team-->
<section class="section section-sm section-fluid bg-default" id="team" style="background-color: WHITE;">
<div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <div class="content">
        <h2 style="text-align: left;">Conoce al equipo</h2>

        <p style="text-align: justify;">
            En Telemax Soluciones SAS, contamos con un equipo de especialistas altamente capacitados y comprometidos con la excelencia. Nuestros expertos no solo dominan las últimas tecnologías y estándares del sector, sino que también aplican una visión innovadora para ofrecer soluciones a medida que se ajusten a las necesidades de nuestros clientes. Desde el diseño e implementación de redes robustas hasta la optimización y mantenimiento continuo de las infraestructuras, nuestro equipo garantiza un servicio de calidad superior y una experiencia de conectividad ininterrumpida. Su enfoque meticuloso y su pasión por la tecnología aseguran que cada proyecto no solo cumpla, sino que supere las expectativas, consolidando nuestro compromiso con la vanguardia en telecomunicaciones.
        </p>
    </div>
</div>

<div style="max-width: 1200px; margin: 0 auto; padding: 20px; background-color: white; border-radius: 5px;">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
        
        <!-- Tarjeta 1 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
           <img src="images/fotos/Andres.jpg" alt="Imagen 1" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
        <!-- Tarjeta 2 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Elkin.jpg" alt="Imagen 2" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
        <!-- Tarjeta 3 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Imanol.jpg" alt="Imagen 3" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
       
        </div>
        </div>
       
        <div style="max-width: 1200px; margin: 0 auto; padding: 20px; background-color: white; border-radius: 5px;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
        <!-- Tarjeta 4 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Madwin.jpg" alt="Imagen 4" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
        <!-- Tarjeta 5 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Melissa.jpg" alt="Imagen 5" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
        <!-- Tarjeta 6 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Zare.jpg" alt="Imagen 6" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
        <!-- Tarjeta 7 -->
        <div style="background-color: White; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 20px; width: calc(25% - 20px); box-sizing: border-box;">
            <img src="images/fotos/Cielo.jpg" alt="Imagen 7" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" onclick="openModal(this)">
        </div>
        
    </div>
</div>

<!-- Modal para mostrar la imagen -->
<div id="imageModal" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.8);">
    <span style="position: absolute; top: 20px; right: 35px; color: #fff; font-size: 40px; font-weight: bold; cursor: pointer;" onclick="closeModal()">&times;</span>
    <img id="modalImage" style="margin: auto; display: block; width: 45%; max-width: 700px;">
</div>

<script>
    function openModal(imgElement) {
        var modal = document.getElementById('imageModal');
        var modalImg = document.getElementById("modalImage");
        modal.style.display = "block";
        modalImg.src = imgElement.src;
    }

    function closeModal() {
        var modal = document.getElementById('imageModal');
        modal.style.display = "none";
    }
</script>

       
<br>

      </section>
<?php include 'footer.php'; ?>