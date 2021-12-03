<?php
require('stripe_config.php');
?>
<form action="stripe_submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="10000"
		data-name="CVMOVTECH"
		data-description="CVMOVTECH Product"
		data-image="nv.png"
		data-currency="usd"
		data-email="infofiveksl@gmail.com"
	>
	</script>

</form>