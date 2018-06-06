<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Data Kabupaten
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Kabupaten</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($kabupaten as $k){ ?>
                        <form action="<?php echo site_url('kabupaten/update') ?>" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $k->id_kabupaten ?>">
                            <select class="form-control" name="provinsi">
                                <option>-- Pilih Provinsi --</option>
                                <?php foreach($provinsi as $p){ ?>
                                <option value="<?php echo $p->id_provinsi ?>" <?php if($p->id_provinsi==$k->id_provinsi){echo "selected";} ?>><?php echo $p->nama_provinsi ?></option>
                                <?php } ?>
                            </select><br>
                            <input type="text" class="form-control" name="kabupaten" value="<?php echo $k->nama_kabupaten ?>">
                            <br>
                            <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i>&nbsp;Update</button>
                            <a href="<?php echo site_url('admin/kabupaten') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Batal</a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>