<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('#country').on('change', function() {
		update_cities(); 	
	});
});

function update_cities(){
	//var country=$('#country').attr('value');
	
	var country = $( "#country" ).val();
	
	// Call get_cities.php and when retrieved,
	// call show_cities() with the result.
	$.get('get_cities.php?country='+country, show_cities);
}
function show_cities(res){
	// Replace contents of #cities with retrieved result
	$('#cities').html(res);
}
</script>
</head>
<body>

<form>
<table>
<tr>
<th>Country</th>
<td>
<select name="country" id="country">
<option value=""> -- please choose -- </option>
<option value="ie">Ireland</option>
<option value="uk">Great Britain</option>
</select>
</td>
</tr>
<tr>
<th>cities</th>
<td id="cities">please choose a country first</td>
</tr>
</table>
</form>

</body>
</html>