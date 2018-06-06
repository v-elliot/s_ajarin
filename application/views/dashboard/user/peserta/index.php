 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/peserta') ?>">Peserta</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('user');
                  $this->db->like('id_level',1);
                  $this->db->like('hak_akses','Peserta');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Peserta Fundamental</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('user');
                  $this->db->like('id_level',2);
                  $this->db->like('hak_akses','Peserta');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Peserta Standart</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('user');
                  $this->db->like('id_level',3);
                  $this->db->like('hak_akses','Peserta');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Peserta Medium</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('user');
                  $this->db->like('id_level',4);
                  $this->db->like('hak_akses','Peserta');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Peserta Advanced</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <label class="control-label">Form Pencarian</label>
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Masukkan Username atau Level yang ingin dicari">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-search"></i>&nbsp;Cari</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="" method="post">
                <div class="form-group">
                  <select class="form-control" name="filter">
                    <option>-- Pilih Filter --</option>
                    <option value="nama">Nama</option>
                    <option value="level">Level</option>
                    <option value="asal">Lokasi Asal</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="radio" name="mode" class="flat-red" value="asc">&nbsp;<i class="fa fa-sort-amount-asc"></i>&nbsp;Ascending &nbsp;
                  <input type="radio" name="mode" class="flat-red" value="desc">&nbsp;<i class="fa fa-sort-amount-desc"></i>&nbsp;Descending
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-sort"></i>&nbsp; Sort</button>
                </div>
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
                  <th class="text-center">Username</th> 
                  <th class="text-center">Email</th>
                  <th class="text-center">Jenis Kelamin</th>
                  <th class="text-center">Level</th>
                  <th class="text-center">Asal</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no = 1; foreach($user as $u){ ?>
                <tbody>
                  <td class="text-center"><?php echo $u->username ?></td>
                  <td><?php echo $u->email ?></td>
                  <td class="text-center"><?php echo $u->jk ?></td>
                  <td class="text-center"><?php echo $u->nama_level ?></td>
                  <td><?php echo $u->nama_kabupaten ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('user/edit/'.$u->id_user) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('user/hapus/'.$u->id_user) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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