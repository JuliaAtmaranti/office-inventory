@extends('master')

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0 text-dark text-center">INVENTARIS KANTOR</h1>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <a href="{{url('/creat')}}"><button type="button" class="btn btn-outline-dark">Tambah Data</button></a>
                        <a href="{{url('/read')}}"><button type="button" class="btn btn-outline-dark">List Barang</button></a>
                        <a href="{{url('#')}}"><button type="button" class="btn btn-outline-dark">Cari</button></a>
                    </div>
                </div>   
            </div>
        </div> 
    </section>
@endsection

@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>

@endsection