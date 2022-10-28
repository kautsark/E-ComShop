@extends('admin.home_admin')

@section('title')
    Merk Barang
@endsection

@section('breadcrumb')
  @parent
    <li class="active"> Merk Barang </li>
@endsection

@section('content')

  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border mb-2">
                <button onclick="addForm('{{ route('merkbarang.store') }}')" class="btn btn-success btn-xs btn-flat"> 
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah </button>
            </div>
              <div class="box-body table-responsive">
                  <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%"> No </th>
                        <th> Merk Barang </th>
                        <th width="15%"> <i class="fa fa-cogs"></i></th>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
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

  @includeIf('merkbarang.form');
@endsection

@push('scripts')
  <script>
    let table;

    $(function() {
      table = $('.table').DataTable({
        processing:true,
        autoWidth:false,
        // ajax:{
        //   url:'{{ route('merkbarang.data') }}',
        // }
      });

      $('#modal-form').validator().on('submit',function(e){
        if(! e.preventDefault()) {
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
      })
    });
    
    function addForm(url){
      $('#modal-form').modal('show');
      $('#modal-form .modal-title').text('Tambah Merk Barang');

      $('#modal-form form')[0].reset();
      $('#modal-form form').attr('action', url);
      $('#modal-form [name=_method]').val('post');
      $('#modal-form [name=nama_merk_barang]').focus();
    }

  </script>

@endpush