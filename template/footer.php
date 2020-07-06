	<section class="container mb-3" id="contactUs">
		
		<form class="bg-light p-3" method="post" action="">
			<h2>Having a problem?</h2>
			<p>No problem! Send us an email and we'll help you right away.</p>
			<div class="form-group">
				<label for="formName">Your Name:</label>
				<input type="text" class="form-control" id="formName" required>
			</div>
			<div class="form-group">
				<label for="formEmail">Your Email:</label>
				<input type="email" class="form-control" id="formEmail" required>
			</div>
			<div class="form-group">
				<label for="formPhone">Your Phone:</label>
				<input type="text" class="form-control" id="formPhone">
			</div>
			<div class="form-group">
				<label for="formMsg">Your Message:</label>
				<textarea class="form-control" id="formMsg" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<p>Or you can send us an <a href="mailto:erezaton213@gmail.com?subject=Hello%20there&body=I%20wanted%20to%20get%20in%20touch%20with%20you">email</a>.</p>
		</form>
	</section>
	
	<section class="container bg-secondary text-light" id="footerLinks">
		<div class="row">
			<div class="col-md-4 content-list p-4">
				<h4>About us</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 content-list p-4">
				<h4>Some Links</h4>
				<ul class="list-unstyled">
					<li><a href="#">Home Page</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">The Team</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 content-list p-4">
				<h4>Legal Stuff</h4>
				<ul class="list-unstyled">
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Abuse</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<footer class="text-center p-3 bg-dark text-light">
		Copyright (c) <a href="https://github.com/erez213">Erez Aton</a> & Rephael Khanokayev
	</footer>
	
	<div class="modal" tabindex="-1" role="dialog" id="cartModal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="">
			  <div class="modal-header">
				<h5 class="modal-title">Your Cart</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
			  </div>
			  <div class="modal-footer">
				<input type="submit" class="btn btn-primary" id="orderBtn" disabled value="Place Order" />
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</form>
		</div>
	  </div>
	</div>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f85d415f7f.js" crossorigin="anonymous"></script>
	
	<script src="assets/script.js"></script>
  </body>
</html>