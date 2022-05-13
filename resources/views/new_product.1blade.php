@extends('layouts.Adcon')
@section('title','  إضافة منتجات جديدة')
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
		<form method="post" action="{{ url('newproduct/store') }}"  enctype="multipart/form-data">
			@csrf 
  			<!--start page wrapper -->
 <!---------------------English----------------------->
	    	<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New Product   </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-4">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label"><b> Product Price   </b> </label>
								<input type="text" class="form-control" name="Product_Price" placeholder="Enter product price">
							  </div>
							  <pre>                      </pre>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label"><b> Product Images   </b></label>
								<input name="image" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
							  </div>
                            </div>
						   </div>

						   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b> Product Name </b> </label>
									
									<input type="text" class="form-control" name="product_name_en" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>Description</b></label>
								<textarea class="form-control" name="productdescription_en" rows="3"></textarea>
								  </div>
														  
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b> اسم المنتج  </b> </label>
									
									<input type="text" class="form-control" name="product_name_ar" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>وصف المنتج</b></label>
								<textarea class="form-control" name="productdescription_ar" rows="3"></textarea>
								  </div>
														  
								  </div>
							  </div> 
						  </div>
					</div>
				  </div>
			  </div>		
<!---------------------Arabic----------------------->
<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
					  <h5 class="card-title">إضافة منتج جديد   </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
				

						   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b> اسم المنتج  </b> </label>
									
									<input type="text" class="form-control" name="product_name_ar" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>وصف المنتج</b></label>
								<textarea class="form-control" name="productdescription_ar" rows="3"></textarea>
								  </div>
														  
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		
<!---------------------frensh----------------------->
<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
					  <h5 class="card-title">Ajouter un nouveau produit   </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   

						   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b> Nom du produit </b> </label>
									
									<input type="text" class="form-control" name="product_name_fr" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>La description</b></label>
								<textarea class="form-control" name="productdescription_fr" rows="3"></textarea>
								  </div>
														  
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		
<!---------------------Germany----------------------->
<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
					  <h5 class="card-title">Neues Produkt hinzufügen  </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
					

						   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b>Produktname </b> </label>
									
									<input type="text" class="form-control" name="product_name_gr" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>Beschreibung</b></label>
								<textarea class="form-control" name="productdescription_gr" rows="3"></textarea>
								  </div>
														  
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>		
<!---------------------DU----------------------->
<div class="page-content" >
			<div class="card"
			 style="background-image: url('images/logo.png') ;
			  background-repeat: no-repeat;
			  background-position: center;
			  background-color: #F1F9F9;
			  ;">
				  <div class="card-body p-4">
					  <h5 class="card-title">Nieuw product toevoegen   </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
				

						   <div class="col-lg-8">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								  <!--إدخال اسم المنتج  -->
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b> productnaam </b> </label>
									
									<input type="text" class="form-control" name="product_name_du" placeholder="Enter Product Name">
								  </div>
								
								
								  <div class="col-md-12">
								  <label for="inputProductDescription" class="form-label"><b>Beschrijving</b></label>
								<textarea class="form-control" name="productdescription_du" rows="3"></textarea>
								  </div>
														  
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
                	<button type="submit" class="btn btn-primary" ><h3> Save Product    </h3> </button>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection


