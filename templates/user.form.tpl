{include file="header.tpl"}

<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" action="/user/add/" method="POST">
		  <div class="form-group">
		    <label for="first-name" class="col-sm-2 control-label">First Name</label>
		    <div class="col-sm-10">
		      <input name="FirstName" type="text" class="form-control" id="first-name" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="last-name" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input name="LastName" type="text" class="form-control" id="last-name" >
		    </div>
		  </div>		  
		  <div class="form-group">
		    <label for="card-number" class="col-sm-2 control-label">Card Number</label>
		    <div class="col-sm-10">
		      <input name="CardNumber" type="text" class="form-control" id="card-number" >
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Добавить</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="col-md-6">.col-md-6</div>
</div>

{include file="footer.tpl"}