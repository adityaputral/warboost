
<?php


require_once(dirname(__FILE__) . '/veritrans-php-master/Veritrans.php');

//Set Your server key
Veritrans_Config::$serverKey = "SB-Mid-server-spRRyo40-FMhyRDjQ7EMlXhn";

// Uncomment for production environment
// Veritrans_Config::$isProduction = true;

Veritrans_Config::$isSanitized = true;
Veritrans_Config::$is3ds = true;

// Fill transaction details
$transaction_details = array(
  'order_id' => rand(),
  'gross_amount' => 145000, // no decimal allowed
);

// Mandatory for Mandiri bill payment and BCA KlikPay
// Optional for other payment methods
$item1_details = array(
    'id' => 'a1',
    'price' => 50000,
    'quantity' => (isset($_POST['JmlJeruk'] ) ? $_POST['JmlJeruk'] :1),
    'name' => "Jeruk"
    );

// Optional
$item2_details = array(
    'id' => 'a2',
    'price' => 45000,
    'quantity' => (isset($_POST['JmlPisang'] ) ? $_POST['JmlPisang'] :1),
    'name' => "Pisang"
    );
	
$item3_details = array(
'id' => 'a3',
'price' => 75000,
'quantity' => (isset($_POST['JmlApel'] ) ? $_POST['JmlApel'] :1),
'name' => "Apel"
);

$item_details = array ($item1_details, $item2_details,$item3_details);

// Optional

	$billing_address = array(
    'first_name'    => (isset($_POST['billing_first_name'] ) ? $_POST['billing_first_name'] :1),
    'last_name'     => (isset($_POST['billing_last_name'] ) ? $_POST['billing_last_name'] :1),
    'address'       => (isset($_POST['billing_address'] ) ? $_POST['billing_address'] :1),
    'city'          => (isset($_POST['billing_city'] ) ? $_POST['billing_city'] :1),
    'postal_code'   => (isset($_POST['billing_kodepos'] ) ? $_POST['billing_kodepos'] :1),
    'phone'         => (isset($_POST['billing_phone'] ) ? $_POST['billing_phone'] :1),
    'country_code'  => (isset($_POST['billing_country'] ) ? $_POST['billing_country'] :"IDN")
    );

// Optional

	$shipping_address = array(
    'first_name'    => (isset($_POST['shipping_first_name'] ) ? $_POST['shipping_first_name'] :1),
    'last_name'     => (isset($_POST['shipping_last_name'] ) ? $_POST['shipping_last_name'] :1),
    'address'       => (isset($_POST['shipping_address'] ) ? $_POST['shipping_address'] :1),
    'city'          => (isset($_POST['shipping_city'] ) ? $_POST['shipping_city'] :1),
    'postal_code'   => (isset($_POST['shipping_kodepos'] ) ? $_POST['shipping_kodepos'] :1),
    'phone'         => (isset($_POST['shipping_phone'] ) ? $_POST['shipping_phone'] :1),
    'country_code'  => (isset($_POST['shipping_country'] ) ? $_POST['shipping_country'] :"IDN")
    );


	$customer_details = array(
    'first_name'    => (isset($_POST['cust_first_name'] ) ? $_POST['cust_first_name'] :1), //optional
    'last_name'     => (isset($_POST['cust_last_name'] ) ? $_POST['cust_last_name'] :1), //optional
    'email'         => (isset($_POST['cust_email'] ) ? $_POST['cust_email'] :"a@gmail.com"), //mandatory
    'phone'         => (isset($_POST['cust_phone'] ) ? $_POST['cust_phone'] :1), //mandatory
    'billing_address'  => $billing_address, //optional
    'shipping_address' => $shipping_address //optional
    );

// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
    );

$snapToken = Veritrans_Snap::getSnapToken($transaction);
?>

	
	
<html>
  <head>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-ig-vJeueASmh0pcK"></script> 
			<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
  <div class="span3">
  
   
  
	
    
   <?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		?>
	<script type="text/javascript">  
        snap.pay('<?php echo $snapToken; ?>'); // store your snap token here
    </script>
	<?php } ?>
</div>
    
  </body>
</html>