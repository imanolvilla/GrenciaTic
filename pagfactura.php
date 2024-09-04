<?php include 'navbar.php'; ?><br>
  
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        
        <div style="max-width: 800px; margin: 0 auto; background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center;">
            <h1 style="font-size: 24px; color: #333; margin-bottom: 20px;text-align: left;">Consultar Saldo</h1>
            <hr>
            <div style="text-align: left; margin-bottom: 20px;">
                <label for="tipo-busqueda" style="font-size: 14px; color: #333;">Buscar por:</label>
                <select id="tipo-busqueda" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-top: 5px;">
                    <option value="cc">C.C.</option>
                    <option value="nit">NIT.</option>
                    <!-- Puedes agregar más opciones aquí -->
                </select>
            </div>

            <div style="text-align: left; margin-bottom: 20px;">
                <label for="numero-documento" style="font-size: 14px; color: #333;">Ingrese su:</label>
                <input type="text" id="numero-documento" placeholder="1090090090" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-top: 5px;">
            </div><br><br>

           <!-- <div style="margin-bottom: 20px;">
                <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; border: 1px solid #ccc; display: inline-block;">
           
                    
                    <div class="g-recaptcha" data-sitekey="6LdBuMUUAAAAAKeMzCs1n7IB8gZhFJylkgHb9Akm"></div>
                </div>
            </div>-->

            <button style="width: 100%; background-color: #00a5e3; color: #fff; padding: 15px; border-radius: 5px; border: none; font-size: 16px; cursor: pointer;">
                <i class="fa fa-search"></i> Consultar
            </button>
            <br><br>
            <div style="max-width: 1200px; margin: 0 auto; padding: 20px;">

        <div style="border: 1px solid #ccc; border-radius: 5px;">
            <div style=" text-align: left;background-color: #f4f4f4; padding: 10px 15px; border-bottom: 1px solid #ddd; font-weight: bold;">
                <i class="fa fa-building"></i> Información de la empresa
            </div>
            <div style="padding: 15px;text-align: left;">
                <p style="margin: 0;"><strong>Teléfono:</strong>  3168512519 </p>
                <p style="margin: 0;"><strong>Dirección:</strong> Carrera 12 N° 5-67</p>
            </div>
        </div>

    </div>
        </div>

    </div>
    
<?php include 'footer.php'; ?>