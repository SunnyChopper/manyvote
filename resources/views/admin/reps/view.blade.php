@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class='container pb-64'>
		<div class='row justify-content-center'>
			<div class='col-lg-8 col-md-8 col-sm-12 col-12'>
				<div style='overflow: auto;'>
					<table class='table table-striped'>
						<thead>
							<tr>
								<th>Name</th>
								<th>County/Zone</th>
								<th>Position</th>
								<th>Connected?</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>

							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>

							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>

							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>

							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>

							<tr>
								<td style='vertical-align: middle;'>John Doe</td>
								<td style='vertical-align: middle;'>McLean</td>
								<td style='vertical-align: middle;'>Mayor</td>
								<td style='vertical-align: middle;'>Yes</td>
								<td style='vertical-align: middle;'>
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class='col-lg-4 col-md-4 col-sm-12 col-12'>
				<h5 class='text-center mb-16'>Quick Actions</h5>
				<button type='button' class='btn btn-sm btn-primary full-width'>Create New Representative</button>
				<button type='button' class='btn btn-sm btn-primary full-width'>Connect Representative Account</button>
				<button type='button' class='btn btn-sm btn-primary full-width'>View Active Representatives</button>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection