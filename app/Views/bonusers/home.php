<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
			<div class="col-lg-12 col-md-11 col-sm-11 col-xs-12">
				<div class = "card col-lg-12 col-md-11 col-sm-11 col-xs-12 card-primary card-outline">
					<div class = "card-header">
					<h3 class="card-title">Bon Tugas Kerja</h3>
					</div>
					<div class ="card-header">
						<button type="button" class="btn bg-blue waves-effect " data-toggle="modal" data-target="#add-bon-user"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;<span>Tambah</span></button>
						<!-- <button type="button" class="btn bg-blue waves-effect " data-toggle="modal" data-target="#UploadModal"><i class="material-icons">file_upload</i> <span>Upload CSV</span></button> -->
					</div>
					<br>
					<div class = "card-body">
						<table id="list-data" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tanggal</th>
									<th>Bagian</th>
									<th>Request</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="data-keluhan">
								<?php $no=1; foreach($bon as $row) { ?>
								<tr>
								<td style="width: 2%;"><?php echo $no++;?></td>
								<td><?php echo $row['NamaPemesan'];?></td>
								<td><?php echo dateFormat($row['TanggalPemesan']);?></td>
								<td><?php echo $row['NamaBagian'];?></td>
								<td><?php echo $row['Request'];?></td>
								<td><?php echo $row['Status'];?></td>
								<td style="width:1px; white-space:nowrap;">
									<button type="button" class="btn btn-secondary btn-sm detail-bon-user" data-id="<?php echo $row['Id']?>" ><i class="fas fa-info-circle"></i></i>&nbsp;&nbsp;<span>Detail</span></button>
								</td>
									</tr>
								<?php
								}
								?>
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
  $(function () {
    //Initialize Select2 Elements
    //zoneJS Demo Code End
	

	$('#list-data').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  })
//#region tolak bon
  $(document).on("click", ".tolak-bon", function() {

		swal.fire({
			title : "Anda Yakin ? ",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			confirmButtonText: "Ya Tolak Bon",
			cancelButtonText: "Tidak",
			cancelButtonColor: '#d33',
		}).then((result) => {
			if(result.isConfirmed)
			{
				// console.log("disini")
				$.ajax({
					method: "POST",
					url: "<?php echo base_url('boncontroller/update/terima'); ?>",
					data: "id=" +id
				})
				.done(function(data) {
					// var out = jQuery.parseJSON(data);
					if(data == "success"){
						swal.fire("Diterima!", "Bon Berhasil Diterima", "success").then((result) => {
							location.reload();
						});

					}else{
						swal.fire("Gagal!", "Bon Gagal Diterima", "error").then((result) => {
							location.reload();
						});;
					}
				})
			}else if(result.isDenied){
				
			}
		});;
	})
//#endregion
//#region add&deletetools
	$(document).on('click','.btnaddtools', function(e){
		$('.formmanytools').append(`
			<tr id="inputmany">
				<td><input type="text" name="nama_komponen[]" class="form-control" placeholder="Enter Component Name" required></td>
				<td><input type="numeric" name="Qty[]" class="form-control" placeholder="Enter Qty" required></td>
				<td style="text-align: center;"><button type="button" class="btn btn-danger btn-sm btndeletetools">
						<i class="fas fa-times">
				</button></td>
			</tr>
			`);
	})

	$(document).on('click','.btndeletetools', function(e){
        e.preventDefault();

        $(this).parents('tr').remove();
    });
//#endregion
//#region delegasi
	$(document).on("click", ".delegasi-bon", function() {
		
        var id = $(this).attr("data-id");
        
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('boncontroller/getbyId'); ?>",
            data: "id=" +id
        })
        .done(function(data) {
			$('#tempat-modal').html('');
			//console.log(data);
            $('#tempat-modal').html(data);
            $('#delegation').modal('show');
            $('.select2').select2();

			$('.select2bs4').select2({
				theme: 'bootstrap4'
			});
        })
    })

	$(document).on('submit', '#form-delegasi', function(e){
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('boncontroller/update/delegasi'); ?>',
            data: data
        })
        .done(function(data) {
            if(data == "success"){
				swal.fire("Delegasi!", "Bon Berhasil Didelegasikan", "success").then((result) => {
					$('#delegation').modal('hide');
					location.reload();
				});

			}else{
				swal.fire("Gagal!", "Bon Gagal Didelegasikan", "error").then((result) => {
					$('#delegation').modal('hide');
					location.reload();
				});
			}
        })
        
        e.preventDefault();
    });
//#endregion
//#region selesaibon
	$(document).on('submit', '#form-resolve', function(e){
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('boncontroller/update/pengerjaan'); ?>',
            data: data
        })
        .done(function(data) {
			// console.log(data)
            if(data == "success"){
				swal.fire("Selesai!", "Bon Selesai Dikerjakan", "success").then((result) => {
					$('#delegation').modal('hide');
					location.reload();
				});

			}else{
				swal.fire("Gagal!", "Bon Gagal Dikerjakan", "error").then((result) => {
					$('#delegation').modal('hide');
					location.reload();
				});
			}
        })
        
        e.preventDefault();
    });

	$(document).on("click", ".selesai-bon", function() {
		
        var id = $(this).attr("data-id");
        
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('boncontroller/getbyIdPerbaikan'); ?>",
            data: "id=" +id
        })
        .done(function(data) {
			$('#tempat-modal').html('');
			//console.log(data);
            $('#tempat-modal').html(data);
            $('#resolve').modal('show');
            
        })
    })
//#endregion
//#region terima
	$(document).on("click", ".terima-bon", function() {
		var id = $(this).attr("data-id");
		swal.fire({
			title : "Anda Yakin Ingin Menerima Bon? ",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			confirmButtonText: "Ya Terima Bon",
			cancelButtonText: "Tidak",
			cancelButtonColor: '#d33',
		}).then((result) => {
			if(result.isConfirmed)
			{
				// console.log("disini")
				$.ajax({
					method: "POST",
					url: "<?php echo base_url('boncontroller/update/terima'); ?>",
					data: "id=" +id
				})
				.done(function(data) {
					// var out = jQuery.parseJSON(data);
					if(data == "success"){
						swal.fire("Diterima!", "Bon Berhasil Diterima", "success").then((result) => {
							location.reload();
						});

					}else{
						swal.fire("Gagal!", "Bon Gagal Diterima", "error").then((result) => {
							location.reload();
						});;
					}
				})
			}else if(result.isDenied){
				
			}
		});
	})
//#endregion
//#region detail bon
$(document).on("click", ".detail-bon-user", function() {
		
        var id = $(this).attr("data-id");
        
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('boncontroller/getdetailuser'); ?>",
            data: "id=" +id
        })
        .done(function(data) {
			$('#tempat-modal').html('');
			//console.log(data);
            $('#tempat-modal').html(data);
            $('#detail-bon-user').modal('show');
        })
    })
//#endregion

//#region tamabah bon
$(document).on('submit', '#form-tambah-bon-user', function(e){
		$('.spinner').show();
		$('.hide-text').hide();
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('boncontroller/add'); ?>',
            data: data
        })
        .done(function(data) {
			// console.log(data)
            if(data == "success"){
				swal.fire("Berhasil!", "Bon Berhasil Ditambahkan", "success").then((result) => {
					$('#add-bon').modal('hide');
					location.reload();
				});

			}else{
				swal.fire("Gagal!", "Bon Gagal Ditambahkan", "error").then((result) => {
					$('#add-bon').modal('hide');
					location.reload();
				});
			}
        })
        
        e.preventDefault();
    });
</script>
<?= $this->endSection() ?>