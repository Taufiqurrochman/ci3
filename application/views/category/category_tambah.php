          <?php echo form_open('Kategori/create', array('class' => 'needs-validation', 'novalidate' => '')) ;?>
                <label>Nama</label>
                <input type="text" class="form-control" value="<?php echo set_value('nama') ?>" name="nama">
             </div>
             <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi"><?php echo set_value('deskripsi') ?></textarea>
             </div>
             <input type="submit" class="btn btn-success" value="Tambah">