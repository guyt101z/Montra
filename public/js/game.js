$(function () { 

	$('#game-form-edit').validator();

	$('#game-form-edit').validator().on('submit', function (e) {
		if (e.isDefaultPrevented()) {
			// handle the invalid form...
			//alert(111);
		} else {
			// everything looks good!
			alert(2232);
			return false;
		}
	})






});