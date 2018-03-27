@extends('layouts.layout')

@section('content')
<section>
	<div class="section-header">
		<ol class="breadcrumb">
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-head">
						<ul class="nav nav-tabs" data-toggle="tabs">
							<li class="active"><a href="#first1">Registered Leads</a></li>
							<li><a href="#second1">Contact Leads</a></li>
						</ul>
					</div>
					<div class="card-body tab-content">
						<div class="tab-pane active" id="first1">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table  id="detail" class="table table-striped table-hover">
										<thead>
											<tr>
												<th class="sort-numeric">Sr.</th>
												<th class="sort-alpha">Name</th>
												<th class="sort-alpha">Email</th>
												<th class="sort-numeric">Mobile</th>
												<th class="sort-alpha">Lead Generation Date</th>
												<th class="sort-alpha">Status</th>
												<th>Mail</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
										<?php $i=1; ?>
										@foreach ($register as $regis)
								            <tr>
								            	<td>{{$i}}</td>
								            	<td>{{$regis->fname}}</td>
								            	<td>{{$regis->email}}</td>
								            	<td>{{$regis->phone}}</td>
								            	<td>{{$regis->created}}</td>
								            	<td>{{$regis->status}}</td>
								            	<td>compose</td>
								            	<td>edit</td>
								            	<td>delete</td>
								            </tr>
								            <?php $i++ ?>
								        @endforeach
										</tbody>
									</table>
								</div>		
							</div>
						</div>
						<div class="tab-pane" id="second1">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table  id="detail" class="table table-striped table-hover">
										<thead>
											<tr>
												<th class="sort-numeric">Sr.</th>
												<th class="sort-alpha">Name</th>
												<th class="sort-alpha">Email</th>
												<th class="sort-numeric">Mobile</th>
												<th class="sort-alpha">Lead Generation Date</th>
												<th class="sort-alpha">Status</th>
												<th>Mail</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
										<?php $i=1; ?>
										@foreach ($register as $regis)
								            <tr>
								            	<td>{{$i}}</td>
								            	<td>{{$regis->fname}}</td>
								            	<td>{{$regis->email}}</td>
								            	<td>{{$regis->phone}}</td>
								            	<td>{{$regis->created}}</td>
								            	<td>{{$regis->status}}</td>
								            	<td>compose</td>
								            	<td>edit</td>
								            	<td>delete</td>
								            </tr>
								            <?php $i++ ?>
								        @endforeach
										</tbody>
									</table>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection