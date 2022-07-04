<div class="modal fade" id="detail-bon-user" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card card-primary card-outline">
                <div class = "card-header">
                    <h3 class="card-title">Detail Bon Masuk</h3>
                </div>
                <div class= "card-body">
                    <br>
                    <div class="form-group row">
                            <div class="col-md-6"></div>
                            <label for="request" class="col-sm-2 col-form-label">Bagian</label>
                            <div class="col-sm-4">
                                <input type ="text" class="form-control" id="inputbagian" value= "<?php echo $bonbyid['NamaBagian']?>" disabled></input>
                            </div>
                    </div>
                    <br><br>
                <div class="form-group row">
                    <label for="requester" class="col-sm-2 col-form-label">Pemesan</label>
                    <div class="col-sm-4">
                        <input type ="text" class="form-control" id="inputpemesan" value= "<?php echo $bonbyid['NamaPemesan']?>" disabled></input>
                    </div>
                    <label for="datebon" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-4">
                        <input type ="date" class="form-control" id="inputpemesan" value= <?php echo date('Y-m-d',strtotime($bonbyid["TanggalPemesan"])) ?> disabled></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="request" class="col-sm-2 col-form-label">Request</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="requestdelegation" rows="3" disabled><?php echo $bonbyid['Request']?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receiver" class="col-sm-2 col-form-label">Penerima Tugas</label>
                    <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" disabled>
                                <option selected="selected" >IT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="request" class="col-sm-2 col-form-label">Delegasi</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="delegasiorang" id="delegasiorang" style="width: 100%;" disabled>
                            <option value="" <?php if($bonbyid['PenerimaTugas'] == "") echo 'selected="selected"'; ?>></option>
                            <option value="Yudha" <?php if($bonbyid['PenerimaTugas'] == "Yudha") echo 'selected="selected"'; ?>>Yudha</option>
                            <option value="Bayu" <?php if($bonbyid['PenerimaTugas'] =="Bayu") echo 'selected="selected"'; ?>>Bayu</option>
                            <option value="Adi" <?php if($bonbyid['PenerimaTugas'] =="Adi") echo 'selected="selected"'; ?>>Adi</option>
                            <option value="Putra" <?php if($bonbyid['PenerimaTugas'] =="Putra") echo 'selected="selected"'; ?>>Putra</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" id="status" name="status" disabled>
                            <option value="selesai" <?php if($bonbyid['Status']== "selesai") echo 'selected="selected"'; ?>>Selesai</option>
                            <option value="gagal" <?php if($bonbyid['Status']== "gagal") echo 'selected="selected"'; ?>>Gagal</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="descriptionresolve" rows="3" disabled><?php echo $bonbyid['Keterangan']?></textarea>
                    </div>
                </div>

                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-danger float-right" data-dismiss="modal"><i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp;CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>



