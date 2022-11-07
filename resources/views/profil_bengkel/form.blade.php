<div class="modal fade" tabindex="-1" id="modal-form" aria-labelledby="modal-form">
    <div class="modal-dialog" role="document">

        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')
            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_merk_barang" class="col-md-6"> Merk Barang </label>
                        <div class="col-md-6">
                            <input type="text" name="nama_merk_barang" id="nama_merk_barang" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary">Simpan</button>
                    <button type="button" class="btn-sm btn-flat btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>