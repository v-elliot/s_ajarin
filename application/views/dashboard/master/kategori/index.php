 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/kategori') ?>">Kategori</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('kategori/tambah') ?>" method="post">
                <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori">
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
                  <th class="text-center">Nama Kategori</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no = 1; foreach($kategori as $k){ ?>
                <tbody>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $k->nama_kategori ?></td>
                  <td class="text-center"><?php echo $k->status_kategori ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('kategori/edit/'.$k->id_kategori) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('kategori/hapus/'.$k->id_kategori) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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