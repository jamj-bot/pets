@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
          	<div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-info">
	              <div class="inner">
	                <h3>{{ $owners }}</h3>

	                <p>Registered owners</p>
	              </div>
	              <div class="icon">
	                <i class="fas fa-user-tie"></i>
	              </div>
	              <a href="{{ route('admin.owners.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
          	</div>
          	<!-- ./col -->
          	<div class="col-lg-3 col-6">
            	<!-- small box -->
            	<div class="small-box bg-success">
              		<div class="inner">
                		<h3>{{ $pets }}<sup style="font-size: 20px">%</sup></h3>

                		<p>Registered pets</p>
              		</div>
              		<div class="icon">
                		<i class="fas fa-cat"></i>
              		</div>
             		<a href="{{ route('admin.pets.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            	</div>
          	</div>
          	<!-- ./col -->
          	<div class="col-lg-3 col-6">
            	<!-- small box -->
            	<div class="small-box bg-warning">
              		<div class="inner">
                		<h3>{{ $species }}</h3>

                		<p>Registered species</p>
              		</div>
              			<div class="icon">
                			<i class="fas fa-paw"></i>
              			</div>
              		<a href="{{ route('admin.species.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            	</div>
          	</div>
          	<!-- ./col -->
          	<div class="col-lg-3 col-6">
            	<!-- small box -->
            	<div class="small-box bg-danger">
              		<div class="inner">
                		<h3>{{ $vets }}</h3>

                		<p>Registered vets</p>
              		</div>
              		<div class="icon">
               			<i class="fas fa-user-md"></i>
              		</div>
              		<a href="{{ route('admin.vets.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            	</div>
          	</div>
         	 <!-- ./col -->
        </div>
	</div>
@stop
