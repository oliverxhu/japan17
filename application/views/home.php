<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	        </button>
	      	<a class="navbar-brand" href="#">PriceSpy</a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse">
	        <ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Sign In</a></li>
	        </ul>
  			<form class="navbar-form navbar-right">
    			<input type="text" class="form-control" placeholder="Search...">
  			</form>
    	</div>
	</div>
</nav>
<div class="jumbotron">
	<div class="row">
		<h2>Search PriceSpy</h2>
		<?php echo form_open('product/search', 'class="navbar-form"'); ?>
			<input type="text" class="form-control" name="home-search" placeholder="Search...">
			<input type="submit" name="Submit" value="Submit">
		<?php echo form_close(); ?>
	</div>
</div>
	
<div class="container">
	<h1><small>Products</small></h1>
</div>
<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home-popular-products">Most Popular Products</a></li>
		<li><a data-toggle="tab" href="#home-deals">Deals</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" id="home-popular-products" class="tab-pane active">
			Popular Products
		</div>
		<div role="tabpanel" id="home-deals" class="tab-pane">
			Deals
		</div>
	</div>		
</div>
