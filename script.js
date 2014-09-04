/*
	js script for saving data in json and other filters and check
	@author : Harsh Kothari ( harshkothari410@gmail.com )
*/

$( function(){
	$('.alert').hide();
	$( '#submit' ).click(function(){
		var child = $( '#childlocation' ).val();
		var parent = $( '#parentlocation' ).val();

		var location = new Object();

		location.name = child;
		location.parent = parent;

		var locationstr = JSON.stringify(location);
		console.log(locationstr);

		$.ajax({
			url: 'savejson.php?name=' + child + '&parent=' + parent,
			type: 'get',
			dataType: 'json',
			// data: {data: location},

			success: function(data){
				console.log(data);
				$('#success').text(data).show();
				$('.alert').alert();
			},
			error: function(xhr, desc, err) {
				console.log(xhr + "\n" + err + desc);
			}
		});		
	})
})