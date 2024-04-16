@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('setting.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<form action="{{route('setting.update', $setting->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">
            <div class="form-group">				
				<img width="200px" src="/storage/images/{{ old('logo', $setting->logo) }}" alt="">
				<input type="file" name="logo" class="form-control form-control-solid" />
			</div>
            <div class="form-group">
				<label>Instagram Adress</label>
				<input value="{{ old('instagram' , $setting->social_media['instagram']) }}" type="text" name="instagram" id="social_media" class="form-control form-control-solid" placeholder="Instagram"/>
			</div>
            <div class="form-group">
				<label>Facebook Adress</label>
				<input value="{{ old('facebook' , $setting->social_media['facebook']) }}" type="text" name="facebook" id="social_media" class="form-control form-control-solid" placeholder="Facebook"/>
			</div>
          
            <div class="form-group">
				<label>Telegram Adress</label>
				<input value="{{ old('telegram' , $setting->social_media['telegram']) }}" type="text" name="telegram" id="social_media" class="form-control form-control-solid" placeholder="Facebook"/>
			</div>			
			
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>		
		</div>
	</form>	
</div> 
@endsection