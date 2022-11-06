<div id="pagar_close">
    <i onclick="pagar();" class="fa-solid fa-xmark"></i>
</div>
<div id="p-cont2">
    <div id="prod">

    </div>
    <div class="pago">
        <div id="paypal-button-container"></div>
            <!-- Sample PayPal credentials (client-id) are included -->
            <script src="https://www.paypal.com/sdk/js?client-id=AaM-DjYj7EO6FIiaf6Zg_EeS78kkwSA09t66pDXJrwydXyiJJR8uC9X-W97Ht8YiEaNmLoGC9dLbmqYQ&currency=USD&intent=capture" data-sdk-integration-source="integrationbuilder"></script>

            <script>
            const fundingSources = [
                paypal.FUNDING.PAYPAL,
                paypal.FUNDING.CARD
                ]

            for (const fundingSource of fundingSources) {
                const paypalButtonsComponent = paypal.Buttons({
                fundingSource: fundingSource,

                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                style: {
                    shape: 'rect',
                    height: 40,
                },

                // set up the transaction
                createOrder: (data, actions) => {
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    const createOrderPayload = {
                    purchase_units: [
                        {
                        amount: {
                            value: ""+ total1 +"",
                        },
                        },
                    ],
                    }

                    return actions.order.create(createOrderPayload)
                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                    const payerName = details.payer.name.given_name
                    console.log('Transaction completed!')
                    alert("¡Compra confirmada!")
                    }
                    generar_compra();
                    return actions.order.capture().then(captureOrderHandler)
                    
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error(
                    'An error prevented the buyer from checking out with PayPal',
                    )
                },
                })

                if (paypalButtonsComponent.isEligible()) {
                paypalButtonsComponent
                    .render('#paypal-button-container')
                    .catch((err) => {
                    console.error('PayPal Buttons failed to render')
                    })
                } else {
                console.log('The funding source is ineligible')
                }
            }
            </script>
    </div>
</div>


<style>
.pago{
    overflow-y: auto;
    max-height: 100%;
}
.pago::-webkit-scrollbar {
  width: 0.3em;
}
 
.pago::-webkit-scrollbar-thumb {
  background-color: #f5f5f59c;
}
#p-cont2{
    position: fixed;
    display: grid;
    top:0;
    left:-900vw;
    z-index: 300;
    width: 40vw;
    height: 100vh;
    background-color: #262424;
    box-shadow: 9px 1px 6px -5px rgba(0,0,0,0.75);
    -webkit-box-shadow: 9px 1px 6px -5px rgba(0,0,0,0.75);
    -moz-box-shadow: 9px 1px 6px -5px rgba(0,0,0,0.75);
}
#prod{
    min-height: 250px;
    max-height: 500px;
    width: 100%;
    transition: all ease-in-out .1s;
    overflow-x: hidden;
    overflow-y: auto;
}
#prod p{
    line-height: initial;
    font-size: 1.5rem;
    margin-top: 10px;
    width: 200px;
    height: 60px;
    font-family: 'Prestage';
}
#prod::-webkit-scrollbar {
  width: 0.3em;
}
 
#prod::-webkit-scrollbar-thumb {
  background-color: #f5f5f59c;
}
#pagar_close{
    z-index: 400;
    position: fixed;
    width: 3rem;
    height: 3.3rem;
    background-color: #191b1f;
    left: -900vw;
    transition: all ease-in-out 0.5s;
    cursor: pointer;
  }
#pagar_close i{
    color: red;
    font-size: 2rem;
    line-height: 53px;
    margin-left: 0.7rem;
  }
@media only screen and (max-width: 500px) {

#p-cont2{
    width: 100vw;
}
.infop{
    width: 640px;
}


}
</style>