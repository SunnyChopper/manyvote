@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div class='container pt-64 pb-64'>
		<div class='row justify-content-center'>
			<div class="col-12">
				<h2 class='text-center' style='font-weight: 200;'>How We Help You Connect with Your Local Government</h2>
			</div>
		</div>

		<div class='row mt-64'>
			<div class='col-lg-4 col-md-4 col-sm-12 col-12'>
				<img src='https://image.flaticon.com/icons/svg/1102/1102457.svg' class='regular-image-30 centered'>
				<h4 class='text-center mt-32' style='font-weight: 500;'>Easy-to-Read Summaries</h4>
				<p class='text-center mt-16' style='font-weight: 200;'>In order to engage with your local government, you must first know what's going on. We make learning about the bills and laws your local government easy.</p>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12'>
				<img src='https://image.flaticon.com/icons/svg/1047/1047741.svg' class='regular-image-30 centered'>
				<h4 class='text-center mt-32' style='font-weight: 500;'>Hold Them Accountable</h4>
				<p class='text-center mt-16' style='font-weight: 200;'>View your local representative's voting history and what bills they've supported. This way, you have a better insight on what the politician's motivations are.</p>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12'>
				<img src='https://image.flaticon.com/icons/svg/1651/1651600.svg' class='regular-image-30 centered'>
				<h4 class='text-center mt-32' style='font-weight: 500;'>Voting Polls</h4>
				<p class='text-center mt-16' style='font-weight: 200;'>On ManyVote, your vote counts. Local politicians can view the data to determine what the public wants and strive to achieve it. Be sure to voice your opinion!</p>
			</div>
		</div>
	</div>

	<div style="background: hsl(0, 0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row" style="display: flex;">
				<div class="col-lg-8 col-md-6 col-sm-12 col-12" style="margin: auto;">
					<h2>Take a Look at our Current Demo</h2>
					<p>As we talk to more organizations and individuals regarding their concerns with local politics, we are using your feedback to add, modify or tweak features. If you believe you are someone who would potentially use this app, we would appreciate you to take a look at our current demo and voice any feedback you may have. We welcome both negative and positive feedback.</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-12" style="margin: auto;">
					<a href="{{ url('/demo') }}" class="btn btn-primary" style="float: right;">View Demo</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection