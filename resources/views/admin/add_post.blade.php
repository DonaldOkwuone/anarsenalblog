@extends('blog.admin')
@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li><?php echo $errors;  ?></li>
				@endforeach
			</ul>
		</div>
	@endif
	
	
	<?php
	 
		echo Form::open(array('url' => '/admin/','files'=>'true'));
	?>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" id="title" placeholder="Title of Post">
	</div>
	<div class="form-group">
		<label for="author">Author</label>
		<input type="text" class="form-control" name="author" id="author" placeholder="author">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea id="body" name="body" placeholder="Body of Post" class="form-control" rows="3"></textarea> 
	</div>

	<div class="form-group">
		<label for="category">Category</label>
		<select  class="form-control" name="category" >
		@foreach($categories as $category)
			<option value="<?php echo $category->id ?>" ><?php echo $category->title ?></option> 
		@endforeach
	</select>
	</div>
 
	  <div class="form-group">
		<label for="image">Featured Image</label>
		<input type="file" id="image" name="image" >
		<p class="help-block">Upload an image associated with post</p>
	  </div>
	  
	  
	  <div class="checkbox">
		<label>
		  <input type="checkbox" name="published" value="1"> Publish Now? 
		</label>
	  </div>
	  
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	<?php 
		echo Form::close();
	?>

@endsection('content')