	function submitFormOnly(){
		document.frmListing.submit();
	}
	function submitOrderOnly(){
		document.frmListing.is_order.value="Y";
		document.frmListing.submit();
	}
	
	function CheckAll(){
		if ($('input[name="AC"]:checked').length == 1){
			$('input[name="EditBox[]"]').prop('checked', true);
		}else{
			$('input[name="EditBox[]"]').prop('checked', false);
		}		
	}
	
	function UnCheckAll(){
		var TotalCheckBoxes = $('input[name="EditBox[]"]').length;
		var CheckedBoxes = $('input[name="EditBox[]"]:checked').length;
		
		if (CheckedBoxes == TotalCheckBoxes){
			$('input[name="AC"]').prop('checked', true);
		}else{
			$('input[name="AC"]').prop('checked', false);
		}
	}
	
	$('#btnpublish, #btnunpublish').click(function(){
		var CheckedBoxes = $('input[name="EditBox[]"]:checked').length;
		if (CheckedBoxes==0){
			alert('Please select atleast one record!');
			return false;
		}
	});
	
	$(document).ready(function(){
		setTimeout(function(){
			$("#MSG").fadeOut('slow');
		}, 4000);
	})
	