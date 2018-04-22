//short form of ajax get request
// $.get('/publisher/count', function (res) {
// 	if (res>0) $('.publisher-number').removeClass('hidden').text(res);
// });
//

//simple ajax
$.ajax({
	method: "GET",
	url: "/publisher/count",
}).done(function( response ) {
	if (response>0)
		$('.publisher-number').removeClass('hidden').text(response);
});


$.get('/author/count', function (res) {
	if (res>0) $('.author-number').removeClass('hidden').text(res);
})

$.get('/book-custom/count', function (res) {
	if (res>0) $('.book-number').removeClass('hidden').text(res);
})



$(document).ready(function () {

})