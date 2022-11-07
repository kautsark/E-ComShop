<div class="modal fade" tabindex="-1" id="modal-form" aria-labelledby="modal-form">
    <div class="modal-dialog modal-xl" role="document">

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
                        <label for="nama_barang" class="col-md-6"> Nama Barang </label>
                        <div class="col-md-6">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="merk_barang" class="col-md-6"> Nama Merk Barang</label>
                        <div class="col-md-6">
                            <select name="id_merk_barang" id="id_merk_barang" class="form-control" required>
                                <option value=""> Pilih Merk Barang</option>
                                @foreach ($merk_barang as $key=>$item )
                                    <option value="{{ $key }}"> {{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_satuan" class="col-md-6"> Nama Satuan </label>
                        <div class="col-md-6">
                            <input type="text" name="nama_satuan" id="nama_satuan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_motor" class="col-md-6"> Jenis Motor </label>
                        <div class="col-md-6">
                            <input type="text" name="jenis_motor" id="jenis_motor" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga_modal" class="col-md-6"> Harga Modal </label>
                        <div class="col-md-6">
                            <input type="number" name="harga_modal" id="harga_modal" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga_bengkel" class="col-md-6"> Harga Bengkel </label>
                        <div class="col-md-6">
                            <input type="number" name="harga_bengkel" id="harga_bengkel" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga_eceran" class="col-md-6"> Harga Eceran </label>
                        <div class="col-md-6">
                            <input type="number" name="harga_eceran" id="harga_eceran" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga_grosir" class="col-md-6"> Harga Grosir </label>
                        <div class="col-md-6">
                            <input type="number" name="harga_grosir" id="harga_grosir" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-info">Simpan</button>
                    <button type="button" class="btn-sm btn-flat btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>