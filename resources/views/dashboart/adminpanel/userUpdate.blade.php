@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
			<a href="{{route('home')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
		</h3>
	</div>
	<form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		<div class="card-body">
			<div class="form-group">
				<label>Name</label>
				<input value="{{ old('name' , $user->name) }}" type="text" name="name" class="form-control form-control-solid" placeholder="Name"/>
			</div>
            <div class="form-group">
				<label>Phone</label>
				<input value="{{ old('phone', $user->phone) }}" type="text" name="phone" class="form-control form-control-solid" placeholder="Phone"/>
			</div>	
            <div class="form-group">
				<label>Previous Password</label>
				<input type="password" name="password1" class="form-control form-control-solid" placeholder="Parol" required>
			</div> 
			@if (session('error'))
                 <div class="alert alert-danger">
                 {{ session('error') }}
              </div>
             @endif
            <div class="form-group">
				<label>New Password</label>
				<input type="password" name="password2" class="form-control form-control-solid" placeholder="Parol" required/>
			</div>   	
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>		
		</div>
	</form>	
</div> 
@endsection