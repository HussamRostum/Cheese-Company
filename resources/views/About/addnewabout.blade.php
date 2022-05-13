@extends('layouts.Adcon')
@section('title','تغيير  معلومات من نحن ')
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
		<form method="post" action="{{ url('/storeabout') }}"  enctype="multipart/form-data">
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
                     
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-4">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> من نحن </b> </label>
								<input type="text" class="form-control" name="aboutinput_ar" >
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> About Us  </b> </label>
								<input type="text" class="form-control" name="aboutinput_en" >
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b> À propos de nous  </b> </label>
								<input type="text" class="form-control" name="aboutinput_fr" >
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b>  Über uns </b> </label>
								<input type="text" class="form-control" name="aboutinput_gr" >
							  </div>
							  <div class="mb-6">
								<label for="inputProductTitle" class="form-label"><b>  Over ons </b> </label>
								<input type="text" class="form-control" name="aboutinput_du" >
							  </div>
		
							
                            </div>
						   </div>

					
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		

			  <div class="col-12">
			  	<div class="d-grid" style="height: 10%;">
                	<button type="submit" class="btn btn-primary" ><h3> إضافة  </h3> </button>
				</div>
			</div>
		</form>
	</div>
</div>




<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>   من نحن     </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
                <thead>
                            <tr>
                            <th scope="col">  من نحن  </th>
                           
                            </tr>
                </thead>
                <tbody>
                @foreach($about as $row)                     
                                    <tr>
                                    <td>
                                    {{$row->about_AR}}
                                    </td>
							
                                    
                                    <!-- <td>
                                    <a href="/delabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                                            </a>
                                    </td> -->
                                    <td>
                                            <a href="/editabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                                            </a>
                                                
                                    </td>
                                    </tr>
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>
            <!-----------------------------english-------------------------------->
			<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>   About Us    </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
                <thead>
                            <tr>
                            <th scope="col">  About us  </th>
                           
                            </tr>
                </thead>
                <tbody>
                @foreach($about as $row)                     
                                    <tr>
                                    <td>
                                    {{$row->about_EN}}
                                    </td>
							
                                    
                                    <!-- <td>
                                    <a href="/delabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                                            </a>
                                    </td> -->
                                    <td>
                                            <a href="/editabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                                            </a>
                                                
                                    </td>
                                    </tr>
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>

<!------------------------------------------------------------->

            <!--------------------------fr----------------------------------->
			<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>   À propos de nous    </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
                <thead>
                            <tr>
                            <th scope="col">  À propos de nous   </th>
                           
                            </tr>
                </thead>
                <tbody>
                @foreach($about as $row)                     
                                    <tr>
                                    <td>
                                    {{$row->about_FR}}
                                    </td>
							
                                    
                                    <!-- <td>
                                    <a href="/delabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                                            </a>
                                    </td> -->
                                    <td>
                                            <a href="/editabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                                            </a>
                                                
                                    </td>
                                    </tr>
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>

<!------------------------------------------------------------->
            <!---------------------GR---------------------------------------->
			<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>   Über uns      </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
                <thead>
                            <tr>
                            <th scope="col">  Über uns   </th>
                           
                            </tr>
                </thead>
                <tbody>
                @foreach($about as $row)                     
                                    <tr>
                                    <td>
                                    {{$row->about_GR}}
                                    </td>
							
                                    
                                    <!-- <td>
                                    <a href="/delabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                                            </a>
                                    </td> -->
                                    <td>
                                            <a href="/editabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                                            </a>
                                                
                                    </td>
                                    </tr>
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>

<!------------------------------------------------------------->
            <!----------------------DU--------------------------------------->
			<div class="container-fluid" id="myDIV" style="font-family: Arial, Helvetica, sans-serif ; position: relative;padding:2%;">
                    <div class="jumbotron" style="padding: 12px;text-align: center;">
                        <h1 style="opacity: initial;"> <b>    Over ons     </b> </h1> 
                        <center>
                            <hr style="width:65%;text-align:center;background-color: aqua; height:2px;">
                        </center>
                        <div class="container mt-5">
                            <div class="row">
                                


   
                                
            <table class="table">
                <thead>
                            <tr>
                            <th scope="col">  Over ons   </th>
                           
                            </tr>
                </thead>
                <tbody>
                @foreach($about as $row)                     
                                    <tr>
                                    <td>
                                    {{$row->about_DU}}
                                    </td>
							
<!--                                     
                                    <td>
                                    <a href="/delabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> حذف
                                            </a>
                                    </td> -->
                                    <td>
                                            <a href="/editabout/{{ $row-> id }}" class="btn.btn-primary float-right btn-sm"> تعديل
                                            </a>
                                                
                                    </td>
                                    </tr>
                                
                                    @endforeach                    
                </tbody>
            </table>

            
  
</div>

							
                </div>
            </div>

<!------------------------------------------------------------->
@endsection