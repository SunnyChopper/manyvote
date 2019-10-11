@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class='container pb-64'>
		<div class="row">
			<div class="col-12">
				<h2>View Upcoming Bills</h2>
			</div>
		</div>

		<div class='row justify-content-center'>
			<div class='col-lg-4 col-md-4 col-sm-12 col-12 mt-16 mb-16'>
				<div class='image-card'>
					<div class='image' style='background-image: url("https://mediad.publicbroadcasting.net/p/wglt/files/styles/x_large/public/201702/170223universityhighschool.JPG");'></div>
					<div class='body'>
						<h5>University High School Renovations</h5>
						<p class="mb-0">In order to keep up with technological innovation, a proposal for $1.2m to construct new facilities for University High School has been introduced.</p>
					</div>
				</div>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12 mt-16 mb-16'>
				<div class='image-card'>
					<div class='image' style='background-image: url("https://ktar.com/wp-content/uploads/2019/08/recycle.jpg");'></div>
					<div class='body'>
						<h5>Recycling Code for Real Estate Management Companies</h5>
						<p class="mb-0">This bill proposes that all real estate management companies within McLean County must provide recycling services to their tenants.</p>
					</div>
				</div>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12 mt-16 mb-16'>
				<div class='image-card'>
					<div class='image' style='background-image: url("https://static.spokanecity.org/photos/2017/03/30/passport-parking-pay-by-phone/16x10/Full/passport-parking-pay-by-phone.jpg");'></div>
					<div class='body'>
						<h5>Updated Parking Meter Technology</h5>
						<p class="mb-0">This bill proposes a pilot program to upgrade a portion of the city's parking meters to incorporate mobile payment providers such as Apple Pay.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-64">
			<div class="col-12">
				<h2>Bills Recently Voted On</h2>
			</div>
		</div>

		<div class="row mt-32">
			<div class="col-12">
				<ul class="list-group">
					<li class="list-group-item pt-32-mobile pb-32-mobile">
						<div class="row" style="display: flex;">
							<div class="col-lg-11 col-md-6 col-sm-12 col-12" style="margin: auto;">
								<h4 class="mobile-text-center">Raise Legal Limit for Tobacco Related Products</h4>
								<p class="mobile-text-center mb-0">Voted on October 9th, 2019</p>
								<p class="mobile-text-center mb-0"><small>71% voted yes. 29% voted no.</small></p>

							</div>

							<div class="col-lg-1 col-md-6 col-sm-12 col-4" style="margin: auto;">
								<img src="https://assets.bigcartel.com/product_images/229895771/2A3FB84C-A42A-4166-BF59-6B053464D334.png" class="regular-image-100 mt-32-mobile" style='float: right;'>
							</div>
						</div>
					</li>

					<li class="list-group-item pt-32-mobile pb-32-mobile">
						<div class="row" style="display: flex;">
							<div class="col-lg-11 col-md-6 col-sm-12 col-12" style="margin: auto;">
								<h4 class="mobile-text-center">Clean Energy Bus System</h4>
								<p class="mobile-text-center mb-0">Voted on October 9th, 2019</p>
								<p class="mobile-text-center mb-0"><small>57% voted yes. 43% voted no.</small></p>
							</div>

							<div class="col-lg-1 col-md-6 col-sm-12 col-4" style="margin: auto;">
								<img src="https://assets.bigcartel.com/product_images/229895771/2A3FB84C-A42A-4166-BF59-6B053464D334.png" class="regular-image-100 mt-32-mobile" style='float: right;'>
							</div>
						</div>
					</li>

					<li class="list-group-item pt-32-mobile pb-32-mobile">
						<div class="row" style="display: flex;">
							<div class="col-lg-11 col-md-6 col-sm-12 col-12" style="margin: auto;">
								<h4 class="mobile-text-center">Updated Technology for Police Force</h4>
								<p class="mobile-text-center mb-0">Voted on October 8th, 2019</p>
								<p class="mobile-text-center mb-0"><small>44% voted yes. 56% voted no.</small></p>
							</div>

							<div class="col-lg-1 col-md-6 col-sm-12 col-4" style="margin: auto;">
								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Flat_cross_icon.svg/1024px-Flat_cross_icon.svg.png" class="regular-image-100 mt-32-mobile" style='float: right;'>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div style="background: hsl(0, 0%, 95%)">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Voice Your Opinion</h2>
					<p class="text-center">Choose any one of the upcoming proposed bills and voice your opinion. We'll send your response directly to the representative in charge of the bill. Furthermore, your response will not be shared with the public and will not be stored on our servers for your privacy.</p>
				</div>
			</div>

			<div class="row mt-16 justify-content-center">
				<div class="col-lg-7 col-md-8 col-sm-12 col-12" style="background: white; padding: 24px; border-radius: 4px;">
					<div class="form-group row">
						<div class="col-12">
							<label>Select an upcoming proposed bill:</label>
							<select class="form-control">
								<option value="">Recycling Code for Real Estate Management Companies - October 11th, 2019</option>
								<option value="">University High School Renovations - October 11th, 2019</option>
								<option value="">Updated Parking Meter Technology - October 14th, 2019</option>
								<option value="">Increased Fines for Speeding - October 14th, 2019</option>
								<option value="">Road Damage Repair Budget - October 15th, 2019</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-12">
							<label>Voice your opinion:</label>
							<textarea class="form-control" rows="4"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-12">
							<p class="text-center red">This form is disabled for demo purposes.</p>
							<input type="submit" class="btn btn-warning btn-sm centered" value="Submit My Voice">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection