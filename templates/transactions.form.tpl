{include file="header.tpl"}

<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" action="/transaction/add/" method="POST">
		  <div class="form-group">
		    <label for="first-name" class="col-sm-2 control-label">From User</label>
		    <div class="col-sm-10">
		     <select id="card-number-from" class="form-control" name="CardNumberFrom">
				{foreach from=$aUserList item=user}			
				    <option value="{$user.CardNumber}">{$user.CardHolderName}</option>
				{/foreach}			
			</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="last-name" class="col-sm-2 control-label">To User</label>
		    <div class="col-sm-10">
		    	<select id="card-number-to" class="form-control" name="CardNumberTo">
					{foreach from=$aUserList item=user}			
					    <option value="{$user.CardNumber}">{$user.CardHolderName}</option>
					{/foreach}			
				</select>
		    </div>
		  </div>		  
		  <div class="form-group">
		    <label for="amount" class="col-sm-2 control-label">Amount</label>
		    <div class="col-sm-10">
		      <input name="Amount" type="text" class="form-control" id="card-number" >
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