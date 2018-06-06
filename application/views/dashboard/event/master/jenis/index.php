 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jenis Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/jenis_event') ?>">Jenis Event</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('jenis/tambah') ?>" method="post">
                <div class="form-group">
                  <input type="text" name="jenis" class="form-control" placeholder="Nama Jenis Event">
                </div>
                <div class="form-group">
                  <label>Status :</label><br>
                  <input type="radio" name="status" class="flat-red" value="Aktif">&nbsp;Aktif
                  <input type="radio" name="status" class="flat-red" value="Tidak Aktif">&nbsp;Tidak Aktif
                </div>
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
                  <th class="text-center">Jenis Event</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no = 1; foreach($jenis as $j){ ?>
                <tbody>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $j->nama_jenis ?></td>
                  <td class="text-center"><?php echo $j->status_jenis ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('jenis/edit/'.$j->id_jenis) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('jenis/hapus/'.$j->id_jenis) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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