 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Provinsi
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/provinsi') ?>">Provinsi</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('provinsi/tambah') ?>" method="post">
                <input type="text" name="provinsi" class="form-control" placeholder="Nama Provinsi">
                <br>
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-save"></i>&nbsp;Simpan</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Provinsi</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no =  1; foreach($provinsi as $p){ ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td><?php echo $p->nama_provinsi; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('provinsi/edit/'.$p->id_provinsi) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                            <a href="<?php echo site_url('provinsi/hapus/'.$p->id_provinsi) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php $no++; } ?>
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