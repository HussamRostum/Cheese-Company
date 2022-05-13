@extends('layouts.Adcon')
@section('title','تعديل من نحن  ')
@section('content')  


<div class="container"> 
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
	@endif
		@if(session()->has('success'))
			<div class="alert alert-success">
				{{ session()->get('success') }}
			</div>
		@endif
		<br />
<br />
<br />
	

	<div class="panel panel-default">
		<form method="post" action="{{ url('/updateabout') }}"  enctype="multipart/form-data">
			@csrf 
  			<!--start page wrapper -->

	    	<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				 <div class="card-body p-4">
					  <h5 class="card-title">تغيير معلومات من نحن   </h5>
					  <hr/>
                      <input type="hidden"  name="id" value=" {{ $about->id }} ">
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-4">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> من نحن </b> </label>
								<input type="text" class="form-control" name="aboutinput_ar"  value=" {{ $about->about_AR }} ">
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> About Us  </b> </label>
								<input type="text" class="form-control" name="aboutinput_en" value=" {{ $about->about_EN }} ">
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> À propos de nous  </b> </label>
								<input type="text" class="form-control" name="aboutinput_fr" value=" {{ $about->about_FR }} ">
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b>  Über uns </b> </label>
								<input type="text" class="form-control" name="aboutinput_gr" value=" {{ $about->about_GR }} ">
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b>  Over ons </b> </label>
								<input type="text" class="form-control" name="aboutinput_du" value=" {{ $about->about_DU }} ">
							  </div>
		
							
                            </div>
						   </div>

					
						  </div>
					   </div><!--end row-->
					
					</div>
				  </div>
			  </div>		
<pre>                         </pre>
			  <div class="col-12">
			  	<div class="d-grid" style="height: 10%;">
                	<button type="submit" class="btn btn-primary" ><h3> تعديل   </h3> </button>
				</div>
			</div>
		</form>
	</div>
</div>




@endsection