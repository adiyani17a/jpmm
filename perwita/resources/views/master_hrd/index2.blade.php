@extends('main')

@section('title', 'dashboard')

@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12" >
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Daftar Pegawai  
                     <!-- {{Session::get('comp_year')}} -->
                     </h5>
                    <div class="ibox-tools">
                        
                    </div>
                </div>
                <div class="ibox-content">
                        <div class="row">
            <div class="col-xs-12">
              
              <div class="box" id="#">
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-md-2"> <a type="button" class="btn btn-box-tool" style="color: #888; font-size:12pt;" title="tambahkan data item" href="{{url('master_hrd/create2')}}"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Tambah Data</a>
                    <!-- <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian" name="Pencarian">
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                    </div> -->
                    </div>
                    <!-- <div class="col-sm-2">Bulan Februari 2017</div> -->
                </div>
                <div class="box-body">
                    <div class="box-body table-responsive">
                  <table id="exa" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th width="2%">L/P</th>
                        <th>NAMA LENGKAP</th>
                        <th>BAGIAN</th>
                        <th>TGL MASUK KERJA</th>
                        <th>TTL</th>
                        <th>PENDIDIKAN</th>
                        <th>ALAMAT</th>
                        <th>NO.TELP</th>
                        <th>NO.KTP</th>
                        <th>NO REKENING</th>
                        <th>NO.KPK</th>
                        <th>NO.PJ</th>
                        <th>NO.KPJ</th>
                        <th>NAMA ORTU(IBU)</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td align="center">1.</td>
                        <td>COBA</td>
                        <td>p</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td>COBA</td>
                        <td class="text-center">
                          <div class="dropdown">
                          <button class="btn btn-primary btn-flat btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Kelola
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{url('master_hrd/edit2')}}"><i class="fa fa-pencil" aria-hidden="true"></i> Ubah Item</a></li>
                            <li><a  href="#"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus Item</a></li>
                            <li role="separator" class="divider"></li>
                          </ul>
                        </div>
                        </td>
                      </tr>
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    </div>
                  </div><!-- /.box-footer --> 
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row" style="padding-bottom: 50px;"></div>


@endsection



@section('extra_scripts')
<script type="text/javascript">
    $('.date').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
    function tambahdata() {
        window.location.href = baseUrl + '/data-master/master-akun/create'
    }
    function hapusData(id) {

        $.ajax({
            url: baseUrl + '/data-master/master-akun/delete/' + id,
            type: 'get',
            dataType: 'text',
            //headers: {'X-XSRF-TOKEN': $_token},
            success: function (response) {
                if (response == 'sukses') {
                    $('.alertBody').html('<div class="alert alert-success">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            'Data Berhasil Di Hapus' +
                            '</div>');
                    $('.alertBody').show();
                    $('.alertBody').delay(4000).slideUp(300);
                    $("#hapus" + id).remove();
                } else if (response == 'gagal') {
                    $('.alertBody').html('<div class="alert alert-danger">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            'Data Akun Sudah Digunakan' +
                            '</div>');
                    $('.alertBody').show();
                    $('.alertBody').delay(4000).slideUp(300);
                }

            }
        });
    }
    var table = $("#exa").DataTable({

                "paging": true,
                        "language": {
                        "lengthMenu": "Menampilkan _MENU_ hasil ",
                                "zeroRecords": "Maaf - Tidak ada yang di temukan",
                                "info": "Manampilkan Halaman _PAGE_ Dari _PAGES_",
                                "infoEmpty": "Tidak Ada Hasil Yang Sesuai",
                                "infoFiltered": "(Mencari Dari _MAX_ total Hasil)",
                                "search": "Pencarian",
                                "paginate": {
                                "next": "selanjutnya",
                                "previous": "sebelumnya"

                         }

                        }
                });

</script>
@endsection
