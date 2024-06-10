<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Kelompok Baru</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="group_add.php">
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Descripsi</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="description" name="description" pattern="[a-zA-Z 0-9]+" required oninvalid="this.setCustomValidity('Mohon isi bagian ini dengan huruf maupun angka')" oninput="setCustomValidity('')">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Posisi</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="group_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">Deskripsi</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_description" name="description" pattern="[a-zA-Z 0-9]+" required oninvalid="this.setCustomValidity('Mohon isi bagian ini dengan huruf maupun angka')" oninput="setCustomValidity('')">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Perbarui</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="group_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE GROUP</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     