





@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('text.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('text.update', $text->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">
            <div class="form-group">
				<div class="form-group">
					<label>Menu</label>
				 
					<input  value="{{ $text->item->section->menu->name }}" class="form-control form-control-solid" readonly disabled/>
				</div>
			</div>	
            <div class="form-group">
                <label for="Benefits">For</label>
                <input class="form-control form-control-solid" value="{{ old('for', $text->text) }}" type="text" name="for[]" placeholder="Benefits">
                <div class="newInput">
                    <div id="inputContainer">
                        <div class="inputGroup mt-2 ">
                            <button  type="button" class="removeInput ">-</button>
                        </div>
                    </div>
                    <button type="button" id="addInput" class="btn btn-primary mt-2">+</button>
                </div>
            </div>
           <input class="btn btn-primary" type="submit" name="submit" value="Submit">	
       <div class="form-group">
	</form>
	<!--end::Form-->
</div> 
@endsection
