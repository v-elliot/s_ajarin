 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Level
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/level') ?>">Level</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
             <form action="<?php echo site_url('level/tambah') ?>" method="post">
               <input type="text" name="level" class="form-control" placeholder="Nama Level">
               <br>
               <label>Status :</label><br>
               <input type="radio" name="status" class="flat-red" value="Aktif">&nbsp;Aktif
               <input type="radio" name="status" class="flat-red" value="Tidak Aktif">&nbsp;Tidak Aktif
               <br><br>
               <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-save"></i>&nbsp;Simpan</button>
             </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"> 
              <table class="table table-bordered table-striped" id="mydata">
                <thead>
                <tr>
                  <th class="text-center">No</th> 
                  <th class="text-center">Nama Level</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no = 1; foreach($level as $l){ ?>
                <tbody>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $l->nama_level ?></td>
                  <td class="text-center"><?php echo $l->status_level ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('level/edit/'.$l->id_level) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('level/hapus/'.$l->id_level) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                  </td>
                </tbody>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->