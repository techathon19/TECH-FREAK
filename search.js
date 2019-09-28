$(document).ready(function(){
    filterSearch();	
    $('.productDetail').click(function(){
        filterSearch();
    });	
});

function filterSearch() {
	$('.searchResult').html('<div id="loading">Loading .....</div>');
	var action = 'fetch_data';
	var type = getFilterData('type');
	var place = getFilterData('place');
	$.ajax({
		url:"action.php",
		method:"POST",
		dataType: "json",		
		data:{action:action, type:	type, place:place},
		success:function(data){
			$('.searchResult').html(data.html);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}