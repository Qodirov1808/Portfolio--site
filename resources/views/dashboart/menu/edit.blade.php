@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header border-0 pt-5">
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">Update Menu</span>
		</h3>
		<div class="card-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-dark-75">
				
				<li class="nav-item">
					<a class="btn btn-success" href="{{ route('menu.index') }}">Exit</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!--begin::Form-->
	<form action="{{route('menu.update', $menus->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">		
			<div class="form-group">
				<label>Menu name</label>
				<input value="{{old('name',$menus->name)}}" type="text" name="name" class="form-control form-control-solid" placeholder="Name"/>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div> 
@endsection