<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Test Pricing Project">
	<meta name="author" content="">
	<title>Test Pricing Project</title>

	<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

	<!-- CSS -->
	<link href="css/base.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/shop.css" rel="stylesheet">

	<script>
		var planSelection = [];

		var freqSelection = [];
		freqSelection[0] = 'monthly';
		freqSelection[1] = 'annual';
		freqSelection[2] = 'twoyear';

		var currSelection = [];
		currSelection[0] = 'usd';
		currSelection[1] = 'gbp';
		currSelection[2] = 'eur';
		currSelection[3] = 'aud';
		currSelection[4] = 'cad';

		var planSelection = [];
		planSelection[0] = 'starter';
		planSelection[1] = 'pro';
		planSelection[2] = 'premium';

		var pricingTable = [];

		pricingTable[0] = []; //starter
		pricingTable[0][0] = 9; //usd
		pricingTable[0][1] = 8; //gbp
		pricingTable[0][2] = 8; //eur
		pricingTable[0][3] = 12; //aud
		pricingTable[0][4] = 11; //cad

		pricingTable[1] = []; //pro
		pricingTable[1][0] = 39; //usd
		pricingTable[1][1] = 32; //gbp
		pricingTable[1][2] = 35; //eur
		pricingTable[1][3] = 55; //aud
		pricingTable[1][4] = 50; //cad

		pricingTable[2] = []; //prem
		pricingTable[2][0] = 59; //usd
		pricingTable[2][1] = 49; //gbp
		pricingTable[2][2] = 55; //eur
		pricingTable[2][3] = 79; //aud
		pricingTable[2][4] = 75; //cad

	</script>

</head>

<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	<main>
		<div class="container margin_60">
			<div class="row">
				<div class="col-md-12">
					<div class="shop-section">
						<div class="row" align="center">
							<h1>Choose the plan that is right for you.</h1>
						</div>
						<hr>
						<div class="row plan-starter">
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_freq_1">
									<div class="product_description">
										<h3><a href="#0">MONTHLY</a></h3>
										<div class="price">
										</div>
									</div>
								</div>
							</div>
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_freq_2">
									<div class="product_description">
										<h3><a href="#0">ANNUAL</a></h3>
										<div class="price">
											Buy an Annual Plan and save 2 months
										</div>
									</div>
								</div>
							</div>
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_freq_3">
									<div class="product_description">
										<h3><a href="#0">2 YEAR</a></h3>
										<div class="price">
											Buy a 2 Year Plan and save 5 months
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="shop-section">
						<div class="row" align="center">
							<h1>Choose the Currency</h1>
						</div>
						<hr>
						<div class="row plan-starter">
							<div class="shop-item col-lg-2 col-md-1 hidden-sm hidden-xs"></div>
							<div class="shop-item col-lg-8 col-md-10">
								<div class="col-sm-1 hidden-xs"></div>
								<div class="col-sm-2 no-padding no-margin">
									<div class="inner-box-2" id="box_curr_1">
										<div class="product_description">
											<h3><a href="#0">USD</a></h3>
										</div>
									</div>
								</div>
								<div class="col-sm-2 no-padding no-margin">
									<div class="inner-box-2" id="box_curr_2">
										<div class="product_description">
											<h3><a href="#0">GBP</a></h3>
										</div>
									</div>
								</div>
								<div class="col-sm-2 no-padding no-margin">
									<div class="inner-box-2" id="box_curr_3">
										<div class="product_description">
											<h3><a href="#0">EUR</a></h3>
										</div>
									</div>
								</div>
								<div class="col-sm-2 no-padding no-margin">
									<div class="inner-box-2" id="box_curr_4">
										<div class="product_description">
											<h3><a href="#0">AUD</a></h3>
										</div>
									</div>
								</div>
								<div class="col-sm-2 no-padding no-margin">
									<div class="inner-box-2" id="box_curr_5">
										<div class="product_description">
											<h3><a href="#0">CAD</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-item col-lg-2 col-md-1 hidden-sm hidden-xs"></div>
						</div>
					</div>

					<div class="shop-section">
						<div class="row" align="center">
							<h1>Choose the Plan</h1>
						</div>
						<hr>
						<div class="row plan-starter">
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_plan_1">
									<div class="product_description">
										<h3><a href="#0">Starter</a></h3>
										<div class="price price-plan" id="plan_price_1">

										</div>
									</div>
								</div>
							</div>
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_plan_2">
									<div class="product_description">
										<h3><a href="#0">PRO</a></h3>
										<div class="price price-plan" id="plan_price_2">

										</div>
									</div>
								</div>
							</div>
							<div class="shop-item col-lg-4 col-md-6 col-sm-6">
								<div class="inner-box" id="box_plan_3">
									<div class="product_description">
										<h3><a href="#0">Premium</a></h3>
										<div class="price price-plan" id="plan_price_3">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop-section">
						<div class="row" align="center">
							<div class="col-xs-8 col-sm-9 col-md-10" align="right">
								<h4>Monthly Price</h4>
							</div>
							<div class="col-xs-4 col-sm-3 col-md-2" align="right">
								<input type="text" disabled value="0.00" id="monthly_price" class="form-control num-value-input">
							</div>
						</div>
						<div class="row" align="center">
							<div class="col-xs-8 col-sm-9 col-md-10" align="right">
								<h4>Total Months (x) </h4>
							</div>
							<div class="col-xs-4 col-sm-3 col-md-2" align="right">
								<input type="text" disabled value="0" id="total_months" class="form-control num-value-input">
							</div>
						</div>
						<div class="row" align="center">
							<div class="col-xs-8 col-sm-9 col-md-10" align="right">
								<h4>Discount (% off) </h4>
							</div>
							<div class="col-xs-4 col-sm-3 col-md-2" align="right">
								<input type="text" disabled value="0" id="discount" class="form-control num-value-input">
							</div>
						</div>
						<div class="row" align="center">
							<div class="col-xs-8 col-sm-9 col-md-10" align="right">
								<h4>Total Price</h4>
							</div>
							<div class="col-xs-4 col-sm-3 col-md-2" align="right">
								<input type="text" disabled value="0.00" id="total_value" class="form-control num-value-input">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<input type="hidden" id="total_freq" value="3">
		<input type="hidden" id="total_curr" value="5">
		<input type="hidden" id="total_plan" value="3">

		<input type="hidden" id="selected_freq" value="0">
		<input type="hidden" id="selected_curr" value="0">
		<input type="hidden" id="selected_plan" value="0">
	</main>

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/myJs.js"></script>

</body>

</html>