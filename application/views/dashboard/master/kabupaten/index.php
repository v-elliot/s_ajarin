 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kabupaten
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/kabupaten') ?>">Kabupaten</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('kabupaten/tambah') ?>" method="post">
                <div class="form-group">
                <select name="provinsi" class="form-control select2">
                  <option>-- Pilih Provinsi --</option>
                  <?php foreach($provinsi as $p){ ?>
                  <option value="<?php echo $p->id_provinsi ?>"><?php echo $p->nama_provinsi ?></option>
                  <?php } ?>
                </select>
                </div>
                <div class="form-group">
                <input type="text" name="kabupaten" class="form-control" placeholder="Nama Kabupaten">
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Simpan</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-body"></div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Kabupaten</th>
                  <th>Action</th>
                </tr>
                <?php $no= $this->uri->segment(3) + 1; foreach($kabupaten as $k){ ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k->nama_kabupaten ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('kabupaten/edit/'.$k->id_kabupaten) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('kabupaten/hapus/'.$k->id_kabupaten) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                  </td>
                </tr>
              <?php } ?>
              </table>
              <?php echo $this->pagination->create_links() ?>
            </div>
          </div>
        </div>
      </div>  
    <section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->