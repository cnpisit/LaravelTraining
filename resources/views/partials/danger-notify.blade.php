<script>
	@if (count($errors) > 0)
	var message = '<ul>';
		@foreach ($errors->all() as $error)
		 message += '<li>{{ $error }}</li>';
		@endforeach
	message +='</ul>';
	@endif
	$.notify({
// options
		title:'Fail',
		icon:'glyphicon glyphicon-floppy-remove',
		message: message
	},{
// settings
		type: 'danger'
	});
</script>