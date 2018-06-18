 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mentor
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/mentor') ?>">Mentor</a></li>
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
                  $this->db->like('hak_akses','Mentor');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Mentor Fundamental</p>
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
                  $this->db->like('hak_akses','Mentor');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Mentor Standart</p>
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
                  $this->db->like('hak_akses','Mentor');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Mentor Medium</p>
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
                  $this->db->like('hak_akses','Mentor');
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Mentor Advanced</p>
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
                <div class="input-group margin">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i>&nbsp;Cari</button>
                        </span>
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
              <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-info btn-xs"><i class="fa fa-plus"></i>&nbsp;Tambah</a>
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
                    <a href="<?php echo site_url('user/edit_mentor/'.$u->id_user) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('user/hapus_mentor/'.$u->id_user) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                  </td>
                </tbody>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- Modal -->
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Form Tambah Mentor</h4>
                </div>
                <div class="modal-body">
                  <form action="<?php echo site_url('user/tambah_mentor') ?>" method="post">
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Jenis Kelamin :</label>
                      <input type="radio" name="jk" class="flat-red" value="L">&nbsp;<i class="fa fa-male"></i>&nbsp;Laki-Laki
                      <input type="radio" name="jk" class="flat-red" value="P">&nbsp;<i class="fa fa-female"></i>&nbsp;Perempuan
                    </div>
                    <div class="form-group">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="tanggal" id="datepicker">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="nomer" class="form-control" placeholder="No Handphone">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Asal</label><br>
                      <select class="form-control" id="provinsi">
                        <option>-- Pilih Provinsi --</option>
                        <?php foreach($provinsi as $p){ ?>
                        <option value="<?php echo $p->id_provinsi ?>"><?php echo $p->nama_provinsi ?></option>
                        <?php } ?>
                      </select>
                      <hr>
                      <select class="form-control kabupaten" name="kabupaten">
                        <option value="0"></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;Register</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->