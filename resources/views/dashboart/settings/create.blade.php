@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('setting.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
		<div class="card-body">			
			<div class="form-group">
				<label>Telegram Address</label>
				<input type="text" name="telegram" id="social_media" class="form-control form-control-solid" required placeholder="Telegram"/>				
			</div>
            <div class="form-group">
				<label>Instagram Address</label>
				<input type="text" name="instagram" id="social_media" class="form-control form-control-solid" required placeholder="Instagram "/>				
			</div>
            <div class="form-group">
				<label>Facebook Address</label>
				<input type="text" name="facebook" id="social_media" class="form-control form-control-solid" required placeholder="Facebook"/>				
			</div>          		       	
            <div class="form-group">
				<label>Logo</label>
				<input type="file" name="logo" class="form-control form-control-solid" />
			</div>														
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div> 
@endsection