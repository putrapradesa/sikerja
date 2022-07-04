<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
			<div class="col-lg-12 col-md-11 col-sm-11 col-xs-12">
				<div class = "card col-lg-12 col-md-11 col-sm-11 col-xs-12 card-primary card-outline">
					<div class = "card-header">
					<h3 class="card-title">Akun</h3>
					</div>

					<div class ="card-header">
						<button type="button" class="btn bg-blue waves-effect " data-toggle="modal" data-target="#add-account"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;<span>Tambah</span></button>
						<!-- <button type="button" class="btn bg-blue waves-effect " data-toggle="modal" data-target="#UploadModal"><i class="material-icons">file_upload</i> <span>Upload CSV</span></button> -->
					</div>
					<br>
					<div class = "card-body">
						<table id="list-data" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="data-keluhan">
								<?php $no=1; foreach($account as $row) { ?>
								<tr>
								<td style="width:2%"><?php echo $no++;?></td>
								<td style="width:20%"><?php echo $row['Nama'];?>
								</td>
								<td style="width:20%"><?php echo $row['Username'];?></td>
								<td style="width:10%"><button type="button" class="btn btn-primary btn-sm edit-account" data-id="<?php echo $row['Id'];?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;<span>Edit</span></button>
									<button class="btn btn-danger btn-sm delete-account" data-id="<?php echo $row['Id'];?>"><i class="fas fa-times"></i>&nbsp;&nbsp;<span>Hapus</span></button></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

	  <?php echo $modal_input; ?>

	  <div id="tempat-modal"></div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
	$(document).on('submit', '#form-tambah-akun', function(e){
		$('.spinner').show();
		$('.hide-text').hide();
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('accountcontroller/add'); ?>',
            data: data
        })
        .done(function(data) {
			// console.log(data)
            if(data == "success"){
				swal.fire("Berhasil!", "Akun Berhasil Ditambahkan", "success").then((result) => {
					$('#add-account').modal('hide');
					location.reload();
				});

			}else{
				swal.fire("Gagal!", "Akun Gagal Ditambahkan", "error").then((result) => {
					$('#delegation').modal('hide');
					location.reload();
				});
			}
        })
        
        e.preventDefault();
    });

	$(document).on("click", ".edit-account", function() {
		
        var id = $(this).attr("data-id");
        
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('accountcontroller/getById'); ?>",
            data: "id=" +id
        })
        .done(function(data) {
			$('#tempat-modal').html('');
			//console.log(data);
            $('#tempat-modal').html(data);
            $('#edit-account').modal('show');
        })
    })

	$(document).on('submit', '#form-edit-akun', function(e){
		$('.spinner').show();
		$('.hide-text').hide();

        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('accountcontroller/edit'); ?>',
            data: data
        })
        .done(function(data) {
            if(data == "success"){
				swal.fire("Berhasil!", "Akun Berhasil DiUpdate", "success").then((result) => {
					$('#edit-account').modal('hide');
					location.reload();
				});

			}else{
				swal.fire("Gagal!", "Akun Gagal DiUpdate", "error").then((result) => {
					$('#edit-account').modal('hide');
					location.reload();
				});
			}
        })
        
        e.preventDefault();
    });

	$(document).on("click", ".delete-account", function() {
		var id = $(this).attr("data-id");
		swal.fire({
			title : "Anda Yakin Ingin Menghapus Akun? ",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			confirmButtonText: "Ya Hapus Akun",
			cancelButtonText: "Tidak",
			cancelButtonColor: '#d33',
		}).then((result) => {
			if(result.isConfirmed)
			{
				// console.log("disini")
				$.ajax({
					method: "POST",
					url: "<?php echo base_url('accountcontroller/delete'); ?>",
					data: "id=" +id
				})
				.done(function(response) {
					console.log(response)
					// var out = jQuery.parseJSON(data);
					if(response == "success"){
						swal.fire("Berhasil!", "Akun Berhasil Dihapus", "success").then((result) => {
							location.reload();
						});
					}else{
						swal.fire("Gagal!", "Akun Gagal Dihapus", "error").then((result) => {
							location.reload();
						});
					}
				})
			}else if(result.isDenied){
				console.log("disini")
			}
		});
	})

</script>
<?= $this->endSection() ?>