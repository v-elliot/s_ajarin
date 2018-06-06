<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Form Edit Data Level
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Level</a></li>
            <li><a href="#">Edit</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <?php foreach($materi as $m){ ?>
                            <div class="callout callout-info">
                                <h4><strong>Perhatian !</strong></h4>
                                <p>
                                  Sebelum membuat materi perhatikan beberapa hal berikut :
                                  <li>Pilih Level dan Kategori sesuai dengan bobot materi yang diberikan</li>
                                  <li>Deskripsi berisikan penjelasan secara singkat mengenai materi yang diberikan</li>
                                  <li>Untuk link video bersifat opsional yang artinya jika dalam materi tersebut ingin diberikan cuplikan video silahkan cantumkan link video jika tida bisa dikosongkan</li>
                                  <li>Untuk isi dari materi silahkan perhatikan beberapa poin berikut :</li>
                                  <ul>
                                    <li>Form <b>Isi</b> bisa dituliskan dengan maksimal berisikan 10.000 karakter termasuk spasi</li>
                                    <li>Jika materi dirasa melebihi dari kapasitas maksimal karakter yang bisa diinputkan silahkn buatkan media lain dan gunakan form lampiran untuk mengupload file materi. Adapun ketentuan dalam mengupload file materi adalah sebagai berikut :</li>
                                    <ul>
                                      <li>Format yang didukung adalah <blockquote>.pdf, .docx, .doc, .pptx dan .ppt</blockquote></li>
                                      <li>Ukuran file materi tidak boleh lebih dari 2MB</li>
                                    </ul>
                                  </ul>
                                </p>
                              </div>
                                <?php echo form_open_multipart('materi/update') ?>
                                  <label>Judul :</label>
                                  <input type="text" name="judul" class="form-control" value="<?php echo $m->judul_materi ?>" required><br>
                                  <label>Level :</label>
                                  <select class="form-control" name="level" required>
                                    <option>-- Pilih Level --</option>
                                    <?php foreach($level as $l){ ?>
                                    <option value="<?php echo $l->id_level ?>" <?php if($l->id_level==$m->id_level){echo "selected";} ?>><?php echo $l->nama_level ?></option>
                                    <?php } ?>
                                  </select><br>
                                  <label>Kategori :</label>
                                  <select class="form-control" name="kategori" required>
                                    <option>-- Pilih Kategori --</option>
                                    <?php foreach($kategori as $k){ ?>
                                    <option value="<?php echo $k->id_kategori ?>" <?php if($k->id_kategori==$m->id_kategori){echo "selected";} ?>><?php echo $k->nama_kategori ?></option>
                                    <?php } ?>
                                  </select><br>
                                  <label>Deskripsi :</label>
                                  <input type="text" name="deskripsi" class="form-control" value="<?php echo $m->deskripsi_materi ?>" required><br>
                                  <label>URL Video (Optional)</label>
                                  <input type="text" name="url" class="form-control" value="<?php echo $m->link_video ?>"><br>
                                  <label>Lampiran :</label>
                                  <input type="file" name="lampiran" class="form-control"><br>
                                  <label>Isi Materi :</label>
                                  <textarea class="textarea" name="isi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Tulis Materi"><?php echo $m->isi_materi ?></textarea><br>
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
                                </form> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>