@extends("admin.master");

@section("mainContent");
	<h1>Update Product</h1>
	<hr/>

	{!! Form::open(['url' => '/update-product', 'method'=>'POST', 'class'=>'form-horizontal', "enctype"=>"multipart/form-data", "name"=>"editForm"]) !!}
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="productName">Product Name:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" value="{{ $product->productName }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="productCategory">Product Category:</label>
	    <div class="col-sm-10"> 
		    <select class="form-control" id="productCategory" name="productCategory">
		      	<option>Select Product Category</option>
		      	@foreach($categories as $category);
		      	<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
		      	@endforeach
		      </select>
		    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="productPrice">Product Price:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="productPrice" placeholder="Product Name" name="productPrice" value="{{ $product->productPrice }}">
	    </div>
	  </div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="productQuantity">Product Quantity:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="productQuantity" placeholder="Product Description" name="productQuantity" value="{{ $product->productQuantity }}">
		    </div>
		</div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="productDescription">Product Description:</label>
	    <div class="col-sm-10">
	      <textarea type="text" class="form-control" id="productDescription" placeholder="Product Description" name="productDescription">{{ $product->productDescription }}</textarea>
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="productPicture">Product Picture:</label>
	    <div class="col-sm-10">
	      <input type="file" class="form-control" id="productPicture" name="productPicture">
	      <img src ="{{ asset($product->productPicture) }}" width="100">
	    </div>
	  </div>

	  <div class="form-group"> 
	    	<label class="control-label col-sm-2" for="publicationStatus">Publication Status:</label>
		    <div class="col-sm-10"> 
		      <select class="form-control" id="publicationStatus" name="publicationStatus">
		      	<option>Select Publication Status</option>
		      	<option value="1">Published</option>
		      	<option value="0">Unpublished</option>
		      </select>
		    </div>
	  </div>

	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default btn-success">Submit</button>
	    </div>
	  </div>

	  <input type="hidden" name="productId" value="{{ $product->id }}">
	{!! Form::close() !!}

	<script>
		document.forms["editForm"].elements["productCategory"].value={{ $product->categoryId }}
		document.forms["editForm"].elements["publicationStatus"].value={{ $product->productStatus }}
	</script>
@endsection