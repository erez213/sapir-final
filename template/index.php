	<section class="container">
		<div class="row pb-2">
			<div class="col-12">
				<form>
				  <div class="form-group">
					<label for="searchFilter">Filter Products:</label>
					<input type="text" class="form-control" id="searchFilter" placeholder="">
					<small id="emailHelp" class="form-text text-muted">Enter some text here to filter products by their name.</small>
				  </div>
				</form>
				<hr />
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Image</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody id="tableBody">
						
						</tbody>
					</table>
				</div>
				<button class="btn btn-block btn-success" id="refreshList">Refresh List</button>
				<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#newModal">Add New Product</button>
			</div>
		</div>
	</section>