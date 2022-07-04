<form class="form-horizontal" id="form-delegasi" method="POST">
<div class="modal fade" id="delegation" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card card-primary card-outline">
                <div class = "card-header">
                    <h3 class="card-title">Delegasi</h3>
                </div>
                <div class= "card-body">
                    <div class="form-group row">
                        <label for="request" class="col-sm-2 col-form-label">Request</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="requestdelegation" rows="3" disabled><?php echo $bonbyid['Request']?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="request" class="col-sm-2 col-form-label">Delegasi</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="delegasiorang" id="delegasiorang" style="width: 100%;">
                                <option selected="selected" value=""></option>
                                <option value="Yudha">Yudha</option>
                                <option value="Bayu">Bayu</option>
                                <option value="Adi">Adi</option>
                                <option value="Putra">Putra</option>
                        </select>
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

