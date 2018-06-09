<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Data Mentor
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/mentor') ?>">Mentor</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($user as $u){ ?>
                        <form action="<?php echo site_url('user/update_mentor') ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $u->id_user ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $u->nama_user ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Jenis Kelamin : </label>
                                <input type="radio" name="jk" class="flat-red" value="L" <?php if($u->jk=="L"){echo "checked";} ?>>&nbsp;<i class="fa fa-male"></i>&nbsp;Laki-Laki
                                <input type="radio" name="jk" class="flat-red" value="P" <?php if($u->jk=="P"){echo "checked";} ?>>&nbsp;<i class="fa fa-female"></i>&nbsp;Perempuan
                            </div>
                            <div class="form-group">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="tanggal" id="datepicker" value="<?php echo $u->tgl_lahir ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nomer" class="form-control" value="<?php echo $u->no_user ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" value="<?php echo $u->username ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="<?php echo $u->email ?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="level">
                                    <?php foreach($level as $l){ ?>
                                    <option value="<?php echo $l->id_level ?>" <?php if($l->id_level==$u->id_level){echo "selected";} ?>><?php echo $l->nama_level ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="radio" name="status" class="flat-red" <?php if($u->status_user=="Aktif"){echo "checked";} ?>>&nbsp;Aktif
                                <input type="radio" name="status" class="flat-red" <?php if($u->status_user==""){echo "checked";} ?>>&nbsp;Tidak Aktif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i>Update</button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>