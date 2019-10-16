$("input[name='plaka-ic-degis']").on('input', function() {
	$('.plaka-yazi-holder h3').html($("input[name='plaka-ic-degis']").val());
	if ($('.plaka-yazi-holder h3').html() == "") {
		$('.plaka-yazi-holder h3').html("34 PLK 0001");
	}
});

$("input[name='plakalik-degis']").on('input', function() {
	$('.plaka-footer h4').html($("input[name='plakalik-degis']").val());
	if ($('.plaka-footer h4').html() == "") {
		$('.plaka-footer h4').html("Yazı Alanı");
	}
});

$("select[name='plaka-font-degis']").on('change', function() {
	$('.plaka-footer h4').css('font-family',$(this).val());
});

$('select[name="plaka-renk-degis"]').on('change', function() {
	$(this).css('background',$(this).val());
	$('.plaka-footer h4').css('color',$(this).val());

});