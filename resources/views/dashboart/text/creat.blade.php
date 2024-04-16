@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('text.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<!--begin::Form-->
	<form action="{{route('text.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
		<div class="card-body">
            <div class="form-group">
				<label>Menu</label>
				<select name="item_id"  class="form-control form-control-solid">
					@foreach ($items as $item)
						<option value="{{$item->id}}">{{ $item->id }} | {{$item->section->menu->name}}</option>						
					@endforeach		
				</select>
			</div>	
            <div class="form-group">
                <label for="Benefits">For</label>
                <input class="form-control form-control-solid" type="text" name="for[]" placeholder="Benefits">
                <div class="newInput">
                    <div id="inputContainer">
                        <div class="inputGroup mt-2 ">
                            {{-- <input  class="form-control form-control-solid" type="text" name="for[]" placeholder="Benefits">
                            <button  type="button" class="removeInput ">-</button> --}}
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

<script>
    document.getElementById('addInput').addEventListener('click', function() {
      var container = document.getElementById('inputContainer');
      var newInput = document.createElement('div');
      newInput.classList.add('inputGroup');
      newInput.innerHTML = `
          <input class="form-control form-control-solid" type="text" name="for[]" placeholder="Benefits">
          <button type="button" class="removeInput">-</button>
      `;
      container.appendChild(newInput);
  });

  document.addEventListener('click', function(e) {
      if (e.target && e.target.classList.contains('removeInput')) {
          e.target.parentNode.remove();
      }
  });
</script>
@endsection