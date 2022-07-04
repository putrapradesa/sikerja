<form class="form-horizontal" id="form-tambah-bon-user" method="POST">
<div class="modal fade" id="add-bon-user" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card card-primary card-outline">
                <div class = "card-header">
                    <h3 class="card-title">Tambah Bon Masuk</h3>
                </div>
                <div class= "card-body">
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6"></div>
                        <label for="request" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-4">
                        <?php $session = session()?>
                            <input type ="text" class="form-control" id="inputbagian" name="bagian" placeholder="Nama Ruangan / Bagian"></input>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group row">
                        <label for="requester" class="col-sm-2 col-form-label">Pemesan</label>
                        <div class="col-sm-4">
                            <input type ="text" class="form-control" id="inputpemesan" name="pemesan" placeholder="Nama Pemesan"></input>
                        </div>
                        <label for="datebon" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-4">
                            <input type ="date" class="form-control" id="inputpemesan" name="tanggal"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="request" class="col-sm-2 col-form-label">Request</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="requestdelegation" name="request" rows="3" placeholder="Request / Permintaan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="receiver" class="col-sm-2 col-form-label">Penerima Tugas</label>
                        <div class="col-sm-4">
                            <select class="form-control" style="width: 100%;" name="tugas">
                                    <option value=""></option>
                                    <option value="IT">IT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary float-left">
                        <div class="spinner" style="display: none;"><i role="status" class="spinner-border spinner-border-sm"></i> SAVE </div>
                        <div class="hide-text"><i class="fas fa-save"></i>&nbsp;&nbsp;&nbsp;SAVE</div>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger float-right" data-dismiss="modal"><i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp;CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

