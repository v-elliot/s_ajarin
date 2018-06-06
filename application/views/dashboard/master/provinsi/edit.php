<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Data Provinsi
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Provinsi</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($provinsi as $p){ ?>
                        <form action="<?php echo site_url('provinsi/update') ?>" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $p->id_provinsi ?>">
                            <input type="text" class="form-control" name="provinsi" value="<?php echo $p->nama_provinsi ?>">
                            <br>
                            <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i>&nbsp;Update</button>
                            <a href="<?php echo site_url('admin/provinsi') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Batal</a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>