@extends('admin.home_admin')

@section('title')
    Daftar Barang
@endsection

@section('breadcrumb')
  @parent
    <li class="active"> Daftar Barang </li>
@endsection

@section('content')

  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border mb-2">
              <div class="btn-group">
                  <button onclick="addForm('{{ route('barang.store') }}')" class="btn mr-2 btn-success btn-xs btn-flat"> 
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah  </button>
                  <button onclick="deleteSelected('{{ route('barang.delete_selected') }}')" class="btn mr-2 btn-danger btn-xs btn-flat"> 
                    <i class="fa fa-trash" aria-hidden="true"></i> Hapus </button>
                  <button onclick="cetakBarcode('{{ route('barang.cetak_barcode') }}')" class="btn mr-2 btn-info btn-xs btn-flat"> 
                    <i class="fa fa-print" aria-hidden="true"></i> Cetak barcode </button>
              </div>
            </div>
              <div class="box-body table-responsive">
                  <form action="" method="post" class="form-barang">
                    @csrf
                    <table class="table table-stiped table-bordered">
                      <thead>
                          <th>
                              <input type="checkbox" id="checkAll" name="checkAll">
                          </th>
                          <th width="5%"> No </th>
                          <th> Kode Barang </th>
                          <th> Nama Barang </th>
                          <th> Nama Merk Barang </th>
                          <th> Satuan </th>
                          <th> Jenis Motor </th>
                          <th> Harga Modal </th>
                          <th> Harga Bengkel </th>
                          <th> Harga Eceran </th>
                          <th> Harga Grosir </th>
                          <th width="15%"><i class="fa fa-cogs"></i> Aksi </th>
                      </thead>
                      <tbody>
  
                      </tbody>
                    </table>
                  </form>
                </div>
            </div>
        </div>
      <!-- /.col -->
    </div>

    <div class="row">
    </div>

    <!-- Main row -->
    <div class="row">
    </div>
  </div><!--/. container-fluid -->

  @includeIf('barang.form')
@endsection

@push('scripts')
  <script>
    let table;

    $(function() {
      table = $('.table').DataTable({
        processing:true,
        autoWidth:false,
        ajax:{
          url: '{{ route('barang.data') }}',
        },
        columns:[
          { data  :'checkAll'},
          { data  :'DT_RowIndex',searchable: false, sortable : false},
          { data  :'kode_barang'},
          { data  :'nama_barang'},
          { data  :'nama_merk_barang'},
          { data  :'nama_satuan'},
          { data  :'jenis_motor'},
          { data  :'harga_modal'},
          { data  :'harga_bengkel'},
          { data  :'harga_eceran'},
          { data  :'harga_grosir'},
          { data  :'aksi',searchable: false, sortable : false},
        ]
      });

      $('#modal-form').validator().on('submit',function(e){
        if(!e.preventDefault()) {
            $.ajax({
              url: $('#modal-form form').attr('action'),
              type:'post',
              data: $('#modal-form form').serialize()
            })
            .done((response) => {
                $('#modal-form').modal('hide');
                table.ajax.reload();
            })
            .fail((errors) => {
                alert('Tidak dapat menyimpan data');
                return;
            });
        }
      });

      $('[name=checkAll]').on('click', function () {
          $(':checkbox').prop('checked', this.checked);
      });

    });
    
    function addForm(url){
      $('#modal-form').modal('show');
      $('#modal-form .modal-title').text('Tambah Daftar Barang');

      $('#modal-form form')[0].reset();
      $('#modal-form form').attr('action', url);
      $('#modal-form [name=_method]').val('post');
      $('#modal-form [name=nama_barang]').focus();
    }

    function editForm(url){
      $('#modal-form').modal('show');
      $('#modal-form .modal-title').text('Edit Daftar Barang');

      $('#modal-form form')[0].reset();
      $('#modal-form form').attr('action', url);
      $('#modal-form [name=_method]').val('put');
      $('#modal-form [name=nama_barang]').focus();

      $.get(url)
        .done((response) => {
          $('#modal-form [name=nama_barang]').val(response.nama_barang);
          $('#modal-form [name=id_merk_barang]').val(response.id_merk_barang);
          $('#modal-form [name=nama_satuan]').val(response.nama_satuan);
          $('#modal-form [name=jenis_motor]').val(response.jenis_motor);
          $('#modal-form [name=harga_modal]').val(response.harga_modal);
          $('#modal-form [name=harga_bengkel]').val(response.harga_bengkel);
          $('#modal-form [name=harga_eceran]').val(response.harga_eceran);
          $('#modal-form [name=harga_grosir]').val(response.harga_grosir);
        })
        .fail((errors) => {
          alert('Tidak dapat menampilkan data');
          return;
        })
    }

    function deleteData(url){
      if(confirm('Apakah data ini akan dihapus?'))
      {
        $.post(url,{
          '_token' : $('[name=csrf-token]').attr('content'),
          '_method' : 'delete'
        })
        .done((response) => {
          alert('Data berhasil dihapus');
          table.ajax.reload();
        })
        .fail((errors) =>  {
          alert('Tidak dapat menghapus data');
          return;
        });
      }  
    }

    function deleteSelected(url){
      if($('input:checked').length > 1) {
          if(confirm('Yakin data akan dihapus data yang terpilih?')) {
            $.post(url, $('.form-barang').serialize())
              .done((response)=> {
              table.ajax.reload()
          })
          .fail((errors)=>{
            alert('Tidak dapat menghapus data');
            return;
          });
        }
      }
      else {
        alert('Pilih data yang akan dihapus');
        return;
      }
    }

    function cetakBarcode(url){
      if($('input:checked').length < 1){
          alert('Pilih data yang akan dicetak');
          return;
      }
      else if ($('input:checked').length < 2){
        alert('Pilih minimal 2 data yang akan dicetak');
        return;
      }
      else{
        $('.form-barang')
          .attr('target','_blank')
          .attr('action',url)
          .submit();
      }
    }

  </script>

@endpush