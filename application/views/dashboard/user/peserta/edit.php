<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Data Level
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Level</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($level as $l){ ?>
                        <form action="<?php echo site_url('level/update') ?>" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $l->id_level ?>">
                            <input type="text" class="form-control" name="level" value="<?php echo $l->nama_level ?>">
                            <br>
                            <input type="radio" name="status" class="flat-red" value="Aktif" <?php if($l->status_level=="Aktif"){echo "checked";} ?>>Aktif
                            <input type="radio" name="status" class="flat-red" value="Tidak Aktif" <?php if($l->status_level=="Tidak Aktif"){echo "checked";} ?>>Tidak Aktif
                            <br><br>
                            <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i>&nbsp;Update</button>
                            <a href="<?php echo site_url('admin/level') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Batal</a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>