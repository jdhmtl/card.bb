$(document).ready(function() {
	$('.calendar a').click(function(e) {
		e.preventDefault();
		$.ajax({
			url: '/schedule/' + $(this).data('date'),
			dataType: 'json'
		}).done(function(data) {
			var list = '<ul>';
			$.each(data, function(key, value) {
				list += '<li><a href="#" data-game="' + key + '">' + value + '</a></li>';
			});
			list += '</ul>';
			$('#games').html(list);
		})
	});

	$('#games').on('click', 'a', function(e) {
		e.preventDefault();
		$.ajax({
			url: '/summary/' + $(this).data('game')
		});
	})
});
