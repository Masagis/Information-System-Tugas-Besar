$(function() {

	$('.tombolTambahData').on('click', function(){

		$('#newSubmenuModalLabel').html('Tambah Sub Menu')
		$('.modal-footer button[type=submit]').html('Tambah Data')

	});

	$('.tampilModalUbah').on('click', function(){

		$('#newSubmenuModalLabel').html('Ubah Sub Menu')
		$('.modal-footer button[type=submit]').html('Ubah Data')
		$('.modal-body form').attr('action', 'http://localhost/Tugas-Besar/menu/Ubah')

		const id = $(this).data('id');

		$.ajax({

			url: 'http://localhost/Tugas-Besar/menu/getubahmenu',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#title').val(data.title);
				$('#id').val(data.id);
			}


		});

	});

});