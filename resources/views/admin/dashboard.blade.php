@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class='container pb-64'>
		<div class='row justify-content-center'>
			<div class='col-lg-8 col-md-8 col-sm-12 col-12'>
				<h4 class='mb-32'>Latest Voting Results</h4>

				<div class="card" style="border: 2px solid #EAEAEA;">
					<div class="card-header">
						<h5 class="mb-1">New Safety Zone Act</h5>
						<p class="mb-0"><small>August 30th, 2019</small></p>
					</div>

					<div class="card-body">
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col-6">
								<h5 class="mb-0 green text-left">35% Yes</h5>
							</div>

							<div class="col-6">
								<h5 class="mb-0 red text-right">65% No</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="card mt-32" style="border: 2px solid #EAEAEA;">
					<div class="card-header">
						<h5 class="mb-1">New Safety Zone Act</h5>
						<p class="mb-0"><small>August 30th, 2019</small></p>
					</div>

					<div class="card-body">
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col-6">
								<h5 class="mb-0 green text-left">35% Yes</h5>
							</div>

							<div class="col-6">
								<h5 class="mb-0 red text-right">65% No</h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12'>
				<div class='gray-box'>
					<h6 class='text-center'>Quick Actions</h6>
					<ul class='list-group mt-16'>
						<a href='{{ url('/admin/bills') }}'>
							<li class='list-group-item'>
								<p class="text-center mb-0">View Bills</p>
							</li>
						</a>
						<a href='{{ url('/admin/reps') }}'>
							<li class='list-group-item mt-8'>
								<p class="text-center mb-0">View Representatives</p>
							</li>
						</a>
						<a href='{{ url('/admin/voting') }}'>
							<li class='list-group-item mt-8'>
								<p class="text-center mb-0">View Voting Data</p>
							</li>
						</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection