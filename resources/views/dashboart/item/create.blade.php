@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('item.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('item.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
		<div class="card-body">
			<div class="form-group">
				<label>Menu</label>
				<select name="section_id"  class="form-control form-control-solid" required >
					<option></option>
					@foreach ($sections as $section)

						<option value="{{$section->id}}">{{$section->menu['name']}} </option>						
					@endforeach		
				</select>
			</div>
				 @error('section_id is required')
				<div class="alert alert-danger">{{$message}}</div>
			@enderror 
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
				<label>Count</label>
				<input type="number" name="count" class="form-control form-control-solid" placeholder="Count"/>
			</div>	
			
            <div class="form-group">
				<label>Link </label>
				<input type="text" name="link" class="form-control form-control-solid" placeholder="Link"/>
			</div>
			{{-- @error('link')
				<div class="alert alert-danger">{{$message}}</div>
			@enderror --}}
            <div class="form-group">
				<label>Image</label>
				<input type="file" name="image" class="form-control form-control-solid" />
			</div>							
			<div class="form-group">
				<label for="exampleTextarea">Textarea</label>
				<textarea name="description" class="form-control form-control-solid" placeholder="Description" rows="3"></textarea>
			</div>
			{{-- @error('description')
				<div class="alert alert-danger">{{$message}}</div>
			@enderror --}}
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		</div>
	</form>	
	<!--end::Form-->
</div> 
@endsection