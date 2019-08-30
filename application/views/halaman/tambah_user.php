 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Data Sekolah
                    <small><ol class="breadcrumb breadcrumb-col-pink">
                                <li><a href="<?php echo base_url();?>index.php"><i class="material-icons">home</i> Home</a></li>
                                <li class="active"><i class="material-icons">library_books</i> <?php //echo $judul ?></li>
                            </ol></small>
                </h2>
            </div>
            <!-- Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open_multipart('halaman/tambah');?>
                                <label for="email_address">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <label for="email_address">Nama Lengkap</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_lengkap" class="form-control">
                                    </div>
                                </div>
                                <label for="email_address">Status</label>
                                <!-- <div class="form-group">
                                    <div class="form-line">
                                        <input name="group1" type="radio" class="with-gap" id="radio_1" checked />
                                        <label for="radio_1">Admin</label>
                                        <input name="group1" type="radio" class="with-gap" id="radio_2" />
                                        <label for="radio_2">member</label>
                                        <input name="group1" type="radio" class="with-gap" id="radio_3" />
                                        <label for="radio_3">Pegawai</label>
                                    </div>
                                </div> -->
                                <label for="email_address">Alamat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea type="text" name="alamat" class="form-control"></textarea>
                                    </div>
                                </div>
                                <label for="email_address">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <label for="email_address">Gambar</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <img width="100" alt="" name="gambar">
                                        <input type="file" id="gambar" name="gambar" class="form-control">
                                    </div>
                                </div>

                                
                                <br><br>

                                <button class="btn btn-primary waves-effect" type="submit">Update</button>
                            <?php echo form_close();?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example -->
        </div>
    </section>