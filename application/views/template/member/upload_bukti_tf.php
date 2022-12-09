<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card-body">
        <div class="row">
            <!-- Laporan Konsultasi -->
            <div class="col-lg-1"></div>
            <div class="col-lg-10" align="center">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <div class="card-header">
                        <h1 class="h3 text-primary">Upload Bukti Transfer Pembayaran</h1>
                    </div>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body" align="left">
                            <div class="card-header" align="center">
                                <h2 class="h5 text-primary">CLUSTER ANDALUS</h2>
                                <h2 class="h6 text-primary">GRIYA CEMPAKA ARUM</h2>
                            </div>
                            <br />
                            <form id="mohon_form" class="user" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Nama Lengkap Pelanggan </label>
                                        <input type="text" class="form-control" id="nama_permohon" value="<?php echo $nama ?>" name="nama_permohon" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nomor Rumah </label>
                                        <input type="text" class="form-control" id="nama_permohon" value="<?php echo $alamat ?>" name="alamat_permohon" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Tanggal Bayar </label>
                                        <input type="date" class="form-control" id="tanggal_permohonan" value="<?php echo $date ?>" name="tanggal_permohon" readonly>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Bukti Transfer</label>
                                        <input type="date" class="form-control" id="tanggal_permohonan" value="<?php echo $date ?>" name="tanggal_permohon">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <!-- <button type="submit" value="clear" id="setUlang" class="btn btn-danger">Refresh</button> -->
                                    <button type="submit" class="btn btn-primary" id="submitMohon">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <!-- Page Heading -->
</div>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mohon_form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/MemberControl/submit_pengaduan',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    location.reload();
                    swal({
                        title: 'Keluhan Dikirim',
                        text: '',
                        type: 'success'
                    });
                }
            });
        });
    });
</script>