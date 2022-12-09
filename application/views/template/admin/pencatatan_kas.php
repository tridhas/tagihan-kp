<div class="container" class="form-row">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" align="center">
            <h4 class="m-0 font-weight-bold text-primary">Pencatatan Kas</h4>
        </div>
        <div class="card-body">
            <div class="box-header">
                <button class="btn btn-primary fa fa-plus" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#modal-default">Input Kas</button>
            </div><br>
            <div>
                <div class="form-group col-md-2">
                    <label>Periode</label>
                    <div type="month" class="form-control" id="st_awal" name="st_awal" required min="0" max="10000" step="1" readonly>
                        <?php echo date('M, y');
                        ?>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="laporan_tunggakan" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">
                                <center>No</center>
                            </th>
                            <th width="5%">
                                <center>Tanggal</center>
                            </th>
                            <th width="8%">
                                <center>Debet</center>
                            </th>
                            <th width="8%">
                                <center>Kredit</center>
                            </th>
                            <th width="8%">
                                <center>Saldo</center>
                            </th>
                            <th width="10%">
                                <center>Keterangan</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Catat Kas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() . 'pelanggan/action_tambah' ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="st_awal" name="st_awal" required min="0" max="10000" step="1" />
                        </div>
                        <div class="form-group">
                            <label>Jenis Transaksi</label>
                            <select class="form-control" id="lunas" name="lunas">
                                <option value='debet'>Debet</option>
                                <option value='kredit'>Kredit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="int" class="form-control" id="pemakaian" name="pemakaian" required min="0" max="10000" step="1" />
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" id="pemakaian" name="pemakaian" required min="0" max="10000" step="1"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
    $('#laporan_tunggakan').ready(function() {
        var c = $('#laporan_tunggakan').DataTable();
        load_data();

        function load_data() {
            $.ajax({

                url: '<?php echo site_url("AdminControl/get_all_tunggakan_personal") ?>',
                dataType: "JSON",
                success: function(data) {
                    c.clear().draw();
                    var HTMLbuilder = "";
                    for (var i = 0; i < data.length; i++) {
                        var btn1 = '<button type="button" name="btn_kirim" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-primary btn_kirim"><i class="fas fa-location-arrow"></i>Kirim Himbauan</button>';
                        //	var btn2 = '<button type="button" name="btn_delete" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-danger btn-circle btn_tolak"><i class="fas fa-trash"></i></button>';

                        c.row.add([
                            "<center>" + [i + 1] + "</center>",
                            "<center>" + data[i]['name'] + "</center>",
                            "<center>" + data[i]['no_kontrol'] + "</center>",
                            "<center>" + data[i]['jumlah'] + " Bulan" + "</center>",
                            "<center>" + "Dari Bulan " + data[i]['awal'] + " Sampai Bulan" + data[i]['akhir'] + "</center>",
                            "<center>" + "Rp " + data[i]['total_tagihan'] + "</center>",
                            //"<center>" + "Rp " + data[i]['total_tagihan'] + "</center>",
                            "<center>" + btn1 + "</center>",

                        ]).draw();
                    }
                }
            });
        }


        $(document).on("click", ".btn_kirim", function() {
            var no_kontrol = $(this).attr('id');
            var status = "yes";

            $.ajax({
                url: "<?php echo site_url('AdminControl/konfirm_himbauan'); ?>",
                method: "POST",
                data: {
                    no_kontrol: no_kontrol,
                    status: status
                },
                success: function(data) {
                    load_data();
                    swal({
                        title: 'Konfirmasi Berhasil',
                        text: '',
                        type: 'success'
                    });
                }
            });

        });

        $(document).on("click", ".btn_tolak", function() {
            var no_kontrol = $(this).attr('id');
            var status = "tolak";
            swal({
                    title: "Tolak Pasang Baru",
                    text: "Apakah anda yakin akan Menolak Pasang Baru ini?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Hapus",
                    closeOnConfirm: true,
                },
                function() {
                    $.ajax({
                        url: "<?php echo site_url('AdminControl/konfirm_pasangbaru'); ?>",
                        method: "POST",
                        data: {
                            no_kontrol: no_kontrol,
                            status: status
                        },
                        success: function(data) {
                            load_data();
                            swal({
                                title: 'Berhasil Ditolak',
                                text: '',
                                type: 'success'
                            });
                        }
                    });
                });
        });
    });
</script>

<script type="text/javascript">
    function select_data($no_pelanggan, $no_rekening, $noktp, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $agama, $alamat, $pekerjaan) {
        $("#nopelanggan").val($no_pelanggan);
        $("#norekening").val($no_rekening);
        $("#noktp").val($noktp);
        $("#nama").val($nama_lengkap);
        $("#tempat").val($tempat_lahir);
        $("#tgl_lahir").val($tanggal_lahir);
        $("#agama").val($agama);
        $("#alamat").val($alamat);
        $("#pekerjaan").val($pekerjaan);
    }
</script>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
    $('#laporan_tunggakan').ready(function() {
        var c = $('#laporan_tunggakan').DataTable();
        load_data();

        function load_data() {
            $.ajax({

                url: '<?php echo site_url("AdminControl/get_all_tunggakan_personal") ?>',
                dataType: "JSON",
                success: function(data) {
                    c.clear().draw();
                    var HTMLbuilder = "";
                    for (var i = 0; i < data.length; i++) {
                        var btn1 = '<button type="button" name="btn_kirim" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-primary btn_kirim"><i class="fas fa-location-arrow"></i>Kirim Himbauan</button>';
                        //	var btn2 = '<button type="button" name="btn_delete" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-danger btn-circle btn_tolak"><i class="fas fa-trash"></i></button>';

                        c.row.add([
                            "<center>" + [i + 1] + "</center>",
                            "<center>" + data[i]['name'] + "</center>",
                            "<center>" + data[i]['no_kontrol'] + "</center>",
                            "<center>" + data[i]['jumlah'] + " Bulan" + "</center>",
                            "<center>" + "Dari Bulan " + data[i]['awal'] + " Sampai Bulan" + data[i]['akhir'] + "</center>",
                            "<center>" + "Rp " + data[i]['total_tagihan'] + "</center>",
                            //"<center>" + "Rp " + data[i]['total_tagihan'] + "</center>",
                            "<center>" + btn1 + "</center>",

                        ]).draw();
                    }
                }
            });
        }


        $(document).on("click", ".btn_kirim", function() {
            var no_kontrol = $(this).attr('id');
            var status = "yes";

            $.ajax({
                url: "<?php echo site_url('AdminControl/konfirm_himbauan'); ?>",
                method: "POST",
                data: {
                    no_kontrol: no_kontrol,
                    status: status
                },
                success: function(data) {
                    load_data();
                    swal({
                        title: 'Konfirmasi Berhasil',
                        text: '',
                        type: 'success'
                    });
                }
            });

        });

        $(document).on("click", ".btn_tolak", function() {
            var no_kontrol = $(this).attr('id');
            var status = "tolak";
            swal({
                    title: "Tolak Pasang Baru",
                    text: "Apakah anda yakin akan Menolak Pasang Baru ini?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Hapus",
                    closeOnConfirm: true,
                },
                function() {
                    $.ajax({
                        url: "<?php echo site_url('AdminControl/konfirm_pasangbaru'); ?>",
                        method: "POST",
                        data: {
                            no_kontrol: no_kontrol,
                            status: status
                        },
                        success: function(data) {
                            load_data();
                            swal({
                                title: 'Berhasil Ditolak',
                                text: '',
                                type: 'success'
                            });
                        }
                    });
                });
        });
    });
</script>