@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('item.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<form action="{{route('item.update', $item->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">
			<div class="form-group">
				<label>Menu</label>
             
				<input  value="{{ $item->section->menu->name }}" class="form-control form-control-solid" readonly disabled/>
			</div>
			<div class="form-group">
				<label>Title</label>
				<input value="{{ old('title' , $item->title) }}" type="text" name="title" class="form-control form-control-solid" placeholder="Title"/>
			</div>
			<div class="form-group">
				<label>Text</label>
				<input value="{{ old('title' , $item->text) }}" type="text" name="text" class="form-control form-control-solid" placeholder="Text"/>
			</div>
            <div class="form-group">
				<label>Count</label>
				<input value="{{ old('count', $item->count) }}" type="number" name="count" class="form-control form-control-solid" placeholder="Text"/>
			</div>	
            <div class="form-group">
				<label>Link </label>
				<input type="text" value="{{ old('link', $item->link) }}" name="link" class="form-control form-control-solid" placeholder="Link"/>
			</div>
            <div class="form-group">				
				<img width="200px" src="/storage/images/{{ old('image', $item->image) }}" alt="">
				<input type="file" name="image" class="form-control form-control-solid" />
			</div>					
			<div class="form-group">
				<label  for="exampleTextarea">Textarea</label>
				<textarea  name="description" class="form-control form-control-solid" placeholder="Description" rows="3">{{ old('description', $item->description) }}</textarea>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>		
		</div>
	</form>
	
</div> 
@endsection