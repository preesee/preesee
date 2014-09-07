function callComplete(response) {
	alert("Response received is: "+response);
	if(response == 'success') {
		window.location.reload();
	}
	else 
		connect();
};

function connect() {
	// when the call completes, callComplete() will be called along with
	// the response returned
	$.post( Drupal.settings.breesee.base_url + '/isloggedin', {}, callComplete, 'json');

};

$(document).ready( function() {
	//connect();
});