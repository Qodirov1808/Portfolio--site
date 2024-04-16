@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			Menu  
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
		<div class="card-body">		
			<div class="form-group">
				<label>Menu name</label>
				<input type="text" name="name" class="form-control form-control-solid" placeholder="Name"/>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div> 
@endsection