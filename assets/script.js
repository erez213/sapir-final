// Erez Aton - 311530539
// Rephael Khanokayev - 312064041

//Globals
var products = []; //Contain list of products
var isLoading = false; //Whether to show loading text or products
var filter = ""; //Text to filter the products
var editID = ""; //ID of the product we are editing

//Render products list from global array
function renderProducts(){
	if(isLoading){ //Show loading text
		var html = `<tr><td colspan="5" class="text-center">
			<div class="spinner-border" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
		</td></tr>`;
	} else{
		var html = ``;
		for(var i=0;i<products.length;i++){
			//If have something to filter
			if(filter != ""){
				if(products[i].name.toLowerCase().includes(filter) || products[i].description.toLowerCase().includes(filter)){}
				else{
					continue;
				}
			}
			
			html += `<tr>
				<td>${products[i].name}</td>
				<td>${products[i].description}</td>
				<td>$${products[i].price}</td>
				<td><img class="img-fluid" src="${products[i].picture}" alt="${products[i].name}" /></td>
				<td>
					<button class="btn btn-primary" data-edit="${products[i].id}">Edit</button>
					<button class="btn btn-danger" data-delete="${products[i].id}">Delete</button>
				</td>
			</tr>`;
		}
	}
	
	$("#tableBody").html(html);
}

//Send AJAX GET request to get products list
function fetchProducts(){
	isLoading = true;
	renderProducts();
	
	$.ajax({
		url: '?product=all',
		type: 'GET',
		success: function(result) {
			isLoading = false;
			if(result.status == "ok"){
				products = result.res.list;
				renderProducts();
			} else{
				alert('Error: '+result.error);
			}
		}, error: function(err) {
			isLoading = false;
			alert('Internet Error: '+err);
		}
	});
}

//Send AJAX DELETE request to delete product
function deleteProduct(id){
	isLoading = true;
	renderProducts();
	
	$.ajax({
		url: '?product='+id,
		type: 'DELETE',
		success: function(result) {
			fetchProducts();
		}, error: function(err) {
			alert('Internet Error: '+err);
		}
	});
}

//Send AJAX PUT request to update product
function updateProduct(id){
	isLoading = true;
	renderProducts();
	
	$.ajax({
		url: '?product='+id,
		type: 'PUT',
		data: $('#editModal form').serialize(),
		success: function(result) {
			isLoading = false;
			renderProducts();
			
			if(result.status == "ok"){
				$("#editModal").modal('hide');
				$('#editModal form').trigger("reset"); //Reset all inputs
				fetchProducts();
			} else{
				alert('Error: '+result.error);
			}
		}, error: function(err) {
			alert('Internet Error: '+err);
		}
	});
}

//Send AJAX POST request to create new product
function createProduct(){
	isLoading = true;
	renderProducts();
	
	$.ajax({
		url: '?product=new',
		type: 'POST',
		data: $('#newModal form').serialize(),
		success: function(result) {
			isLoading = false;
			renderProducts();
			
			if(result.status == "ok"){
				$("#newModal").modal('hide');
				$('#newModal form').trigger("reset"); //Reset all inputs
				fetchProducts();
			} else{
				alert('Error: '+result.error);
			}
		}, error: function(err) {
			alert('Internet Error: '+err);
		}
	});
}

$( document ).ready(function() {
	//Render the cart
    fetchProducts();
	$( "#searchFilter" ).val(""); //Make sure filter starts empty
	
	//Event on input change
	$( "#searchFilter" ).on('change keydown paste input', function(){
		filter = $(this).val().toLowerCase(); //Lower case to match not only case sensitive
		renderProducts();
	});
	
	//Event on deleting product
	$("#tableBody").on("click","[data-delete]",function(){
		var id = $(this).attr("data-delete");
		deleteProduct(id);
	});
	
	//Event on edit product
	$("#tableBody").on("click","[data-edit]",function(){
		var id = $(this).attr("data-edit");
		editID = id;
		
		var product = products.find(element => element.id == id);
		
		$("#editModal form [name='name']").val(product.name);
		$("#editModal form [name='description']").val(product.description);
		$("#editModal form [name='price']").val(product.price);
		$("#editModal form [name='picture']").val(product.picture);
		
		$("#editModal").modal();
	});
	
	//Event on refreshing list
	$("#refreshList").click(function(){
		fetchProducts();
	});
	
	//Event on clicking create new product button
	$("#createBtn").click(function(){
		createProduct();
	});
	
	//Event on clicking create new product button
	$("#editBtn").click(function(){
		updateProduct(editID);
	});
});