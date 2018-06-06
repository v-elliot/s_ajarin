<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Soal
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/soal') ?>">Soal</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($soal as $s){ ?>
                        <form action="<?php echo site_url('soal/update') ?>" method="post">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $s->id_soal ?>">
                            <div class="form-group">
                                <select class="form-control" name="level">
                                    <option>-- Pilih level</option>
                                    <?php foreach($level as $l){ ?>
                                    <option value="<?php echo $l->id_level ?>" <?php if($l->id_level==$s->id_level){echo "selected";} ?>><?php echo $l->nama_level ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="soal" class="form-control" value="<?php echo $s->pertanyaan ?>">
                            </div>
                            <?php foreach($jawaban as $j){ ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="radio" name="kunci" class="flat-red" value="A" <?php if($s->kunci=="A"){echo "checked";} ?>>
                                        <input type="text" name="opsiA" class="form-control" value="<?php echo $j->opsiA ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="kunci" class="flat-red" value="B" <?php if($s->kunci=="B"){echo "checked";} ?>>
                                        <input type="text" name="opsiB" class="form-control" value="<?php echo $j->opsiB ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="radio" name="kunci" class="flat-red" value="C" <?php if($s->kunci=="C"){echo "checked";} ?>>
                                        <input type="text" name="opsiC" class="form-control" value="<?php echo $j->opsiC ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="kunci" class="flat-red" value="D" <?php if($s->kunci=="D"){echo "checked";} ?>>
                                        <input type="text" name="opsiD" class="form-control" value="<?php echo $j->opsiD ?>">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i>&nbsp;Update</button>
                            <a href="<?php echo site_url('admin/soal') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Batal</a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>