
<?php
/**
 * The template for displaying search results pages
	* Template Name: Form-Template
 */

get_header(); ?>

	<div class="container">
			<form name ="user_detail" method = "post" id="form-validate" >
				<div class="form-group">
					<label for = "first_name" ><span style="color:red;">*</span> First Name: </label>
					<input  type="text" class="form-control" id="first_name" name ="first_name"/>
					<?php  if(isset($errors['first_name'])) echo $errors['first_name'] ?>
				</div>
				<div class="form-group">
					<label for = "last_name"> <span style="color:red;">*</span> Last Name: </label>
					<input type="text" class="form-control" id="last_name" name ="last_name"/>
					<?php  if(isset($errors['last_name'])) echo $errors['last_name'] ?>

				</div>
				<div class="form-group">
					<label for = "email"> <span style="color:red;">*</span> Email: </label>
					<input type="email" class="form-control" id="email" name ="email"/>
					<?php  if(isset($errors['email'])) echo $errors['email'] ?>

				</div>
				<div class="form-group">
					<label for = "mobile"> Mobile No.: </label>
					<input type="number" class="form-control"  name ="mobile"/>
				</div>
				<div class="form-group">
					<label for = "pwd"> Comment: </label>
					<textarea type="text" class="form-control"  name ="comment"></textarea>
				</div>
				<div class="wrapper-button">
					<button type = "submit" name="BtnSubmit" class="btn btn-default">Submit </button>
				</div>
			</form>
	</div>

<?php get_footer();

