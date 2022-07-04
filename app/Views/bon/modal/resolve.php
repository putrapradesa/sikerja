<form class="form-horizontal" id="form-resolve" method="POST">
<div class="modal fade" id="resolve" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card card-primary card-outline">
                <div class = "card-header">
                    <h3 class="card-title">Keterangan Pengerjaan</h3>
                </div>
                <div class= "card-body">
                    <br>
                        <div class="form-group row">
                                <label for="requester" class="col-sm-2 col-form-label">Request</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" id="requestdelegation" rows="3" disabled><?php echo $bonbyid['Request']?></textarea>
                                </div>
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-4">
                                    <select class="form-control" style="width: 100%;" id="status" name="status">
                                        <option value="selesai">Selesai</option>
                                        <option value="reteur">Reteur</option>
                                </select>
                                </div>
                            
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tools" class="col-sm-2 col-form-label">Alat dan Bahan</label>
                            <div class="col-sm-10">
                            <table class="table table-sm table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <td>Komponen</td>
                                        <td>Qty</td>
                                        <td>#</td>
                                    </tr>
                                </thead>

                                <tbody class = "formmanytools">
                                    <td><input type="text" name="nama_komponen[]" class="form-control" placeholder="Enter Component Name"></td>
                                    <td><input type="number" name="Qty[]" class="form-control" placeholder="Enter Qty"></td>
                                    <td style="text-align: center;"><button type="button" class="btn btn-primary btn-sm btnaddtools">
                                        <i class="fas fa-plus-square">
                                    </button></td>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="descriptionresolve" name="descriptionresolve" rows="3"></textarea>
                            </div>
                        </div>

                        <input type="hidden" id="id" name="id" value = "<?php echo $bonbyid['Id']?>">
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
