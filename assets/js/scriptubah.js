$(function () {

	$('.tombolTambahData').on('click', function () {

		$('#newSubmenuModalLabel').html('Add SubMenu')
		$('.modal-footer button[type=submit]').html('Add Data')

	});

	$('.tampilModalUbah').on('click', function () {

		$('#newSubmenuModalLabel').html('Edit SubMenu')
		$('.modal-footer button[type=submit]').html('Edit Data')
		$('.modal-body form').attr('action', "<?= base_url('menu/ubah'); ?>")

		const id = $(this).data('id');

		$.ajax({

			url: "<?= base_url('menu/getubahmenu'); ?>",
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#title').val(data.title);
				$('#id').val(data.id);
			}


		});

	});

});
