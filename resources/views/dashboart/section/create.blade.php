@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('section.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('section.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
		<div class="card-body">
			<div class="form-group">
				<label>Menu</label>
				<select name="menu_id"  class="form-control form-control-solid" required >
						<option></option>						
						@foreach ($menus as $menu)
						<option value="{{$menu->id}}" >{{ $menu->name }}</option>						
					@endforeach		
				</select>				 
			</div>			
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control form-control-solid" required placeholder="Title"/>				
			</div>
			@error('title')
				<div class="alert alert-danger">{{$message}}</div>
			@enderror
            <div class="form-group">
				<label>Text</label>
				<input type="text" name="text" class="form-control form-control-solid" placeholder="Text"/>
			</div>			
            <div class="form-group">
				<label>Button_link </label>
				<input type="text" name="button_link" class="form-control form-control-solid" placeholder="Button_link"/>
			</div>
			@error('button_link')
				<div class="alert alert-danger">{{$message}}</div>
			@enderror
            <div class="form-group">
				<label>Image</label>
				<input type="file" name="image" class="form-control form-control-solid" />
			</div>									
			<div class="form-group">
				<label for="exampleTextarea">Textarea</label>
				<textarea name="description" class="form-control form-control-solid" placeholder="Description" rows="3"></textarea>
			</div>			
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div> 
@endsection