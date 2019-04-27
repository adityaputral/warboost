<html>
<title>Checkout</title>
  <head>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-ig-vJeueASmh0pcK"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>
  
    
 

     

    <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
      <input type="hidden" name="cartprice" id="cart_price" value="<?php echo $this->session->flashdata('cart_price')?>"></div>
      <input type="hidden" name="cartname" id="cart_boost_name" value="<?php echo $this->session->flashdata('cart_boost_name')?>"></div>
      <input type="hidden" name="cartid" id="cart_boost_id" value="<?php echo $this->session->flashdata('cart_boost_id')?>"></div>
      <input type="hidden" name="custname" id="cust_name" value="<?php echo $this->session->userdata('nama');?>"></div>
     

    </form>
    
    <script type="text/javascript">

   // $('#pay-button').click(function (event) {
    $(window).on('load', function(event) {
     
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    var price = $('#cart_price').val();
    var name = $('#cart_boost_name').val();
    var id=$('#cart_boost_id').val();
    var cust_name=$('#cust_name').val();
    $.ajax({
      url: '<?=site_url()?>/snap/token/',
      cache: false,
      method:"POST",
      data:{
        price: price,
        name: name,
        id: id,
        cust_name:cust_name
        
        
      },

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>


</body>
</html>
