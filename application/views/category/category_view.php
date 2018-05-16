<h4><small>Category</small></h4>
<hr class="">
<div class="container">
    <div class="row" style="margin-right: 30px;">
    	<?php foreach ($kategori->result() as $data) {?>
        <div class="col-md-6">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class=""><?php echo $data->nama?></h4>
                     	<hr>
                    	<p class=""><?php echo $data->deskripsi?>
                    	</p> 
                      <!-- Untuk delete kategori -->
                      <a href="<?php echo site_url().'kategori/delete/'.$data->id_kategori ?>" class="btn btn-danger btn-xs pull-right" 
                      onclick="return confirm('ingin hapus kategori ?')" >Delete <i class="glyphicon glyphicon-trash"></i></a>  

                      <!-- Untuk edit Kategori -->
                      <a href="<?php echo site_url().'kategori/edit/'.$data->id_kategori ?>" class="btn btn-primary btn-xs" role="button">Edit <i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <!--/row-->
<?php
  echo $pagination; 
  if(validation_errors()){
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong>".validation_errors()."
        </div>"
        ;
  }
?>
</div>
<!--/container -->
<div class="container">
<!-- Trigger the modal with a button -->
<a href="<?php echo base_url().'kategori/create'?>" class="btn btn-info btn-sm" style="margin-bottom: 200px;margin-left: 15px">Tambah Kategori</a>
</div>