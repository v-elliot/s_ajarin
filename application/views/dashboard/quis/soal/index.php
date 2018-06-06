 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Soal
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/soal') ?>">Soal</a></li>
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
                  $this->db->from('soal');
                  $this->db->like('id_level',1);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Soal Fundamental</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('soal');
                  $this->db->like('id_level',2);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Soal Standart</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('soal');
                  $this->db->like('id_level',3);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Soal Medium</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('soal');
                  $this->db->like('id_level',4);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Soal Advanced</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('soal/tambah') ?>" method="post">
                <div class="form-group">
                  <select class="form-control" name="level">
                    <option>-- Pilih Level Soal</option>
                    <?php foreach($level as $l){ ?>
                    <option value="<?php echo $l->id_level ?>"><?php echo $l->nama_level ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="soal" class="form-control" placeholder="Tulis Soal">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="radio" name="kunci" class="flat-red" value="A">
                      <input type="text" name="opsiA" class="form-control" placeholder="Opsi A">
                    </div>
                    <div class="form-group">
                      <input type="radio" name="kunci" class="flat-red" value="B">
                      <input type="text" name="opsiB" class="form-control" placeholder="Opsi B">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="radio" name="kunci" class="flat-red" value="C">
                      <input type="text" name="opsiC" class="form-control" placeholder="Opsi C">
                    </div>
                    <div class="form-group">
                      <input type="radio" name="kunci" class="flat-red" value="D">
                      <input type="text" name="opsiD" class="form-control" placeholder="Opsi D">
                    </div>
                  </div>
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
                  <th class="text-center">Level</th> 
                  <th class="text-center">Soal</th>
                  <th class="text-center">Kunci</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php foreach($soal as $s){ ?>
                <tbody>
                  <td class="text-center"><?php echo $s->nama_level ?></td>
                  <td><?php echo $s->pertanyaan ?></td>
                  <td class="text-center"><?php echo $s->kunci ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('soal/edit/'.$s->id_soal) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('soal/hapus/'.$s->id_soal) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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