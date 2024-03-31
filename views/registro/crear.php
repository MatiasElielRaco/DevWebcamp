<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Elegí tu plan</p>

    <div class="paquetes__grid">
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Gratis</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a DevWebcamp</li>
                <p class="paquete__precio">$0</p>
                <form action="/finalizar-registro/gratis" method="POST">
                    <input type="submit" class="paquetes__submit" value="Inscripción Gratis">
                </form>
            </ul>
        </div>
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Presencial</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Presencial a DevWebcamp</li>
                <li class="paquete__elemento">Pase por días</li>
                <li class="paquete__elemento">Acceso a Talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las Grabaciones</li>
                <li class="paquete__elemento">Remera del Evento</li>
                <li class="paquete__elemento">Comida y Bebida</li>
                <p class="paquete__precio">$199</p>

                    <div id="smart-button-container">
                        <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                        </div>
                    </div>
            </ul>
        </div> 
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Virtual</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a DevWebcamp</li>
                <li class="paquete__elemento">Pase por días</li>
                <li class="paquete__elemento">Enlace a Talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las Grabaciones</li>
                <p class="paquete__precio">$49</p>

                <div id="smart-button-container">
                  <div style="text-align: center;">
                    <div id="paypal-button-container-virtual"></div>
                  </div>
                </div>
            </ul>
        </div> 
    </div>
</main>


  <script src="https://www.paypal.com/sdk/js?client-id=AdMKqmac04LVOsNSlARbJfLUqlgQGhS67Flpn2uayFmfYg_ctfvwSDG5g3e9q1naS2-4OD2y9DD4dy20&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":250.79,"breakdown":{"item_total":{"currency_code":"USD","value":199},"shipping":{"currency_code":"USD","value":10},"tax_total":{"currency_code":"USD","value":41.79}}}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

                const datos = new FormData();
                datos.append("paquete_id", orderData.purchase_units[0].description);
                datos.append("pago_id", orderData.purchase_units[0].payments.captures[0].id);

                fetch("/finalizar-registro/pagar", {
                    method: "POST",
                    body: datos
                })
                .then ( respuesta => respuesta.json())
                .then( resultado => { 
                    if(resultado.resultado) {
                        actions.redirect("http://localhost:3000/finalizar-registro/conferencias");
                    }
                });
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }

    // Pase Virtual
    paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":49}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            const datos = new FormData();
                datos.append("paquete_id", orderData.purchase_units[0].description);
                datos.append("pago_id", orderData.purchase_units[0].payments.captures[0].id);

                fetch("/finalizar-registro/pagar", {
                    method: "POST",
                    body: datos
                })
                .then ( respuesta => respuesta.json())
                .then( resultado => { 
                    if(resultado.resultado) {
                        actions.redirect("http://localhost:3000/finalizar-registro/conferencias");
                    }
                });          
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-virtual');

    initPayPalButton();
  </script>
