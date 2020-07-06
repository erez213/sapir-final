	<div class="modal" tabindex="-1" role="dialog" id="newModal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="">
			  <div class="modal-header">
				<h5 class="modal-title">New Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form>
				  <div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Product Name">
				  </div>
				  <div class="form-group">
					<label>Description:</label>
					<textarea name="description" class="form-control" placeholder="Enter Product Description"></textarea>
				  </div>
				  <div class="form-group">
					<label>Price:</label>
					<input type="number" name="price" class="form-control" placeholder="Enter Product Price in USD">
				  </div>
				  <div class="form-group">
					<label>Image:</label>
					<input type="text" name="picture" class="form-control" placeholder="Enter Product Image Full URL">
				  </div>
				</form>
			  </div>
			  <div class="modal-footer">
				<input type="submit" class="btn btn-primary" id="createBtn" value="Create" />
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</form>
		</div>
	  </div>
	</div>
	
	<div class="modal" tabindex="-1" role="dialog" id="editModal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="">
			  <div class="modal-header">
				<h5 class="modal-title">Edit Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form>
				  <div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Product Name">
				  </div>
				  <div class="form-group">
					<label>Description:</label>
					<textarea name="description" class="form-control" placeholder="Enter Product Description"></textarea>
				  </div>
				  <div class="form-group">
					<label>Price:</label>
					<input type="number" name="price" class="form-control" placeholder="Enter Product Price in USD">
				  </div>
				  <div class="form-group">
					<label>Image:</label>
					<input type="text" name="picture" class="form-control" placeholder="Enter Product Image Full URL">
				  </div>
				</form>
			  </div>
			  <div class="modal-footer">
				<input type="submit" class="btn btn-primary" id="editBtn" value="Edit" />
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</form>
		</div>
	  </div>
	</div>