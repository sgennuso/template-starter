$( document ).ready(function() {

	var title = $("title").text();
	console.log(title + " is ready!");

	function submitContactForm(token) {
		$("#contactForm").submit();
	}

});
