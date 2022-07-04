<form class="form-horizontal" id="form-tambah-akun" method="POST">
<div class="modal fade" id="add-account" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card card-primary card-outline">
                    <div class = "card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <div class= "card-body">
                            <div class="form-group row">
                                <label for="requester" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type ="text" class="form-control" id="InputNama" name="InputNama" placeholder="Masukkan Nama"></input>
                                </div>                                   
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type ="text" class="form-control" id="InputUsername" name="InputUsername" placeholder="Masukkan Username"></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type ="password" class="form-control" id="inputpassword" name="inputpassword" placeholder="Masukkan Password"></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-sm-4 col-form-label">Role</label>
                                <div class="form-check col-sm-2">
                                    <input class="form-check-input" type="radio" name="role" value="Admin" id="role">
                                    <label class="form-check-label">Admin</label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input class="form-check-input" type="radio" name="role" value="User" id="role">
                                    <label class="form-check-label">User</label>
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

