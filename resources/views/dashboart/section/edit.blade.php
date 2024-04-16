@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('section.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<form action="{{route('section.update', $section->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">
			<div class="form-group">
				<label>Menu</label>             
				<input  value="{{ $section->menu->name }}" class="form-control form-control-solid" readonly disabled/>
			</div>
			<div class="form-group">
				<label>Title</label>
				<input value="{{ old('title' , $section->title) }}" type="text" name="title" class="form-control form-control-solid" placeholder="Title"/>
			</div>
            <div class="form-group">
				<label>Text</label>
				<input value="{{ old('text', $section->text) }}" type="text" name="text" class="form-control form-control-solid" placeholder="Text"/>
			</div>	
            <div class="form-group">
				<label>Button_link </label>
				<input type="text" value="{{ old('button_link', $section->button_link) }}" name="button_link" class="form-control form-control-solid" placeholder="Button_link"/>
			</div>
            <div class="form-group">				
				<img width="200px" src="/storage/images/{{ old('image', $section->image) }}" alt="">
				<input type="file" name="image" class="form-control form-control-solid" />
			</div>					
			<div class="form-group">
				<label  for="exampleTextarea">Textarea</label>
				<textarea  name="description" class="form-control form-control-solid" placeholder="Description" rows="3">{{ old('description', $section->description) }}</textarea>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>		
		</div>
	</form>	
</div> 
@endsection