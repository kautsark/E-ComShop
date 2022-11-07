@extends('admin.home_admin')

@section('title')
    User group
@endsection

@section('breadcrumb')
  @parent
    <li class="active"> User group </li>
@endsection

@section('content')

  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border mb-2">
                <button onclick="addForm('{{ route('usergroup.store') }}')" class="btn btn-success btn-xs btn-flat"> 
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah </button>
            </div>
              <div class="box-body table-responsive">
                  <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%"> No </th>
                        <th> User Group </th>
                        <th width="15%"><i class="fa fa-cogs"></i> Aksi </th>
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

  @includeIf('usergroup.form')
@endsection

@push('scripts')
  <script>
    let table;

    $(function() {
      table = $('.table').DataTable({
        processing:true,
        autoWidth:false,
        ajax:{
          url: '{{ route('usergroup.data') }}',
        },
        columns:[
          { data : 'DT_RowIndex',searchable: false, sortable : false},
          { data:'user_group_name'},
          { data:'aksi',searchable: false, sortable : false},
        ]
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
      $('#modal-form .modal-title').text('Tambah User Group');

      $('#modal-form form')[0].reset();
      $('#modal-form form').attr('action', url);
      $('#modal-form [name=_method]').val('post');
      $('#modal-form [name=user_group_name]').focus();
    }

  </script>

@endpush