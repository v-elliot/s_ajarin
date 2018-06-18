 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Materi
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/materi') ?>">Materi</a></li>
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
                  $this->db->from('materi');
                  $this->db->like('id_level',1);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Materi Fundamental</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('materi');
                  $this->db->like('id_level',2);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Materi Standart</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('materi');
                  $this->db->like('id_level',3);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Materi Medium</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('materi');
                  $this->db->like('id_level',4);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Materi Advanced</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('materi/create') ?>" class="btn btn-info btn-xs"><i class="fa fa-plus">&nbsp;Tambah</i></a>  
              <table class="table table-bordered table-striped" id="mydata">
                <thead>
                <tr>
                  <th class="text-center">Level</th> 
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">Link Video</th>
                  <th class="text-center">File Lampiran</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php foreach($materi as $m){ ?>
                <tbody>
                  <td class="text-center"><?php echo $m->nama_level ?></td>
                  <td class="text-center"><?php echo $m->nama_kategori ?></td>
                  <td><?php echo $m->judul_materi ?></td>
                  <td class="text-center"><?php if($m->link_video == null){echo "Tidak Ada";}else{echo "Ada";} ?></td>
                  <td class="text-center"><?php if($m->file_lampiran == null){echo "Tidak Ada";}else{echo "Ada";} ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('materi/edit/'.$m->id_materi) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('materi/hapus/'.$m->id_materi) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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