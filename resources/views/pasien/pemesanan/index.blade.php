@extends('layouts.app')
@push('css')

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <a href="/konsumen/pemesanan/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Transaksi Pemesanan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Transaksi</th>
                            <th>Tanggal</th>
                            <th>Konsumen</th>
                            <th>Detail Pemesanan</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:12px; font-family:Arial, Helvetica, sans-serif">
                            <td>{{$no++}}</td>
                            <td>T-0{{$item->id}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->konsumen == null ? '': $item->konsumen->nama}}</td>
                            <td>
                                <ul>

                                    @foreach ($item->detail as $item2)
                                    <li>{{$item2->produk->nama}} - Rp. {{number_format($item2->produk->harga)}} -
                                        ({{$item2->jumlah}}) buah</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                {{number_format($item->detail->sum('total'))}}
                            </td>
                            <td>
                                <a href="/konsumen/pemesanan/{{$item->id}}/delete" class="btn btn-xs btn-danger"><i
                                        class="fas fa-trash"></i> delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection

@push('js')

<!-- DataTables  & Plugins -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endpush