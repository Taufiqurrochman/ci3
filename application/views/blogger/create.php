<?php 
	echo form_open_multipart('blogger/create')
?>
<div class="container-fluid">
 <h4><small>NEW POST</small></h4>
 <hr>
Title : <input type="text" class="form-control" name="title"><br>
Author : <input type="text" class="form-control" name="author"><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"></textarea><br>
File : .jpg .jpeg .png<input type="file" name="userfile" required=""><br>
<input type="submit" class="btn btn-default" value="Tambah"><hr>
</div>
