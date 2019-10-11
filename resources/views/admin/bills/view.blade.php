@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class='container pb-64'>
		<div class='row justify-content-center'>
			<div class='col-lg-9 col-md-9 col-sm-12 col-12'>
				<div style='overflow: auto;'>
					<table class='table table-striped'>
						<thead>
							<tr>
								<th>Date Created</th>
								<th>Title</th>
								<th>Description</th>
								<th style="min-width: 140px;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;">August 30th, 2019</td>
								<td style="vertical-align: middle;">Bill Title</td>
								<td style="vertical-align: middle;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor...</td>
								<td style="vertical-align: middle;">
									<button type='button' class='btn btn-sm btn-primary'>Edit</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class='col-lg-3 col-md-3 col-sm-12 col-12'>
				<h5 class='text-center'>Quick Actions</h5>
				<a href='' class='btn btn-sm btn-primary centered mt-16'>Create New Bill</a>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection