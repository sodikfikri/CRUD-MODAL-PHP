<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<!-- <script src="<?= BASEURL; ?>/js/script.js"></script> -->
<script type="text/javascript">
	$(function () {

	$('.tombolTambahData').on('click', function() {

		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		

	})

	$('.tampilModalUbah').on('click', function() {
		
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/belajar_ujikom/public/mahasiswa/ubah');

		const id = $(this).data('id');
		

		$.ajax({

			url: 'http://localhost/belajar_ujikom/public/mahasiswa/getubah/'+id,
			// data: {id : id},
			dataType: 'json',
			type: 'get',
			
			success: function(data) {
				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}

		});

	});

});
</script>
</body>
</html>