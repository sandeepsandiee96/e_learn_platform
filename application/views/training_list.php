 <div class="container">
 <?php 
 $logged_in=$this->session->userdata('logged_in');
		
		?>  
 
   
 <h3><?php echo $title;?></h3>
    <div class="row">
 
  <div class="col-lg-6">
    <form method="post" action="<?php echo site_url('training/index/');?>">
	<div class="input-group">
    <input type="text" class="form-control" name="search" placeholder="<?php echo $this->lang->line('search');?>...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><?php echo $this->lang->line('search');?></button>
      </span>
	 
	  
    </div><!-- /input-group -->
	 </form>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->


  <div class="row">
 
<div class="col-md-12">
<br> 
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		       $acp=explode(',',$logged_in['training']);
			if(in_array('Add',$acp)){
			 
		?>	
		
 <a href="<?php echo site_url('training/add_new');?>" class="btn btn-success"><?php echo $this->lang->line('add_new');?></a><br><br>
 <?php 
 }
 ?>
<table class="table table-bordered">
<tr>
 <th>#</th>
 <th>Video Title</th>
<th>Video Description </th>
<th><?php echo $this->lang->line('action');?> </th> 
</tr>
<?php 
if(count($result)==0){
	?>
<tr>
 <td colspan="6"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
foreach($result as $val){
?>
<tr>
 <td><?php echo $val->id;?></td>
 <td><?php echo $val->title;?></td>
  <td><?php echo substr($val->description,0,50);?>...</td>
 
<td>
<?php 
$acp=explode(',',$logged_in['training']);
if(in_array('Edit',$acp)){
?>
<a href="<?php echo site_url('training/edit_video/'.$val->id);?>"><?php echo $this->lang->line('edit');?></a>
<?php } ?>
<?php 
$acp=explode(',',$logged_in['training']);
if(in_array('View',$acp)){
?>

<a href="<?php echo site_url('training/view_video/'.$val->id);?>"><?php echo $this->lang->line('view');?></a>
<?php } ?>
<?php 
$acp=explode(',',$logged_in['training']);
if(in_array('Remove',$acp)){
?>

<a href="<?php echo site_url('training/remove_video/'.$val->id);?>"><?php echo $this->lang->line('remove');?></a>
<?php } ?>
</td>
 
</tr>

<?php 
}
?>
</table>
 </div>

</div>


<?php
if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>

<a href="<?php echo site_url('training/index/'.$back);?>"  class="btn btn-primary"><?php echo $this->lang->line('back');?></a>
&nbsp;&nbsp;
<?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

<a href="<?php echo site_url('training/index/'.$next);?>"  class="btn btn-primary"><?php echo $this->lang->line('next');?></a>





</div>

