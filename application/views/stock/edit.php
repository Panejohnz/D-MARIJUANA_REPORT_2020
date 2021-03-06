<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  สินค้าใกล้หมด
    
  </h1>
  <ol class="breadcrumb">
   <li>
    <a href="<?php echo base_url(); ?>">
     <i class="fa fa-dashboard">
     </i>หน้าแรก
    </a>
   </li>
   <li>
    <a href="<?php echo base_url('prd'); ?>">
    สินค้าใกล้หมด
    </a>
   </li>
   <li class="active">
    เพิ่มข้อมูลใหม่
   </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content">
  <!-- Your Page Content Here -->
  <div class="box box-primary">
   <div class="box-header with-border">
    <h3 class="box-title">
     เพิ่มข้อมูล
    </h3>
   </div><!-- /.box-header -->
   <!-- form start -->
   <form role="form" action="<?php echo base_url('stock/update'); ?>" method="post" enctype="multipart/form-data">
   <input type="hidden" value="<?php echo $doc['img_id']; ?>" name="img_id">
   <input type="hidden" value="<?php echo $doc['image']; ?>" name="img2">



    <div class="box-body">
     <div class="form-group">
      <label for="exampleInputEmail1">
       ประเภท
      </label> <?php echo $this->session->flashdata('err_imgtype_id'); ?>
       <select class="form-control" name="imgtype_id">
         
       <option value="">
        เลือกข้อมูล
       </option>
       <?php
       $this->db->select('imgtype.*');
       $this->db->from('imgtype');
       $query = $this->db->get();
       $results = $query->result_array();
       foreach($results as $result){
        ?>
        <option value="<?php echo $result['imgtype_id']; ?>">
									<?php echo $result['imgtype_name']; ?>
								</option>
        <?php
       } ?>
      </select>
     </div>

     <div class="form-group">
      <label for="exampleInputEmail1">
       ชื่อภาพ
      </label> <?php echo $this->session->flashdata('err_img_name'); ?>
      <input type="text" id="img_name" class="form-control" name="img_name" value="<?php echo $doc['img_name']; ?>">
     </div>
     <div class="form-group">
      <label>
       รายละเอียด
      </label>
      <textarea rows="3" class="form-control" id="img_detail" name="img_detail"><?php echo $doc['img_detail']; ?></textarea>
     </div>
     <div class="form-group">
      <label for="exampleInputEmail1">
       ราคา 
      </label> <?php echo $this->session->flashdata('err_img_price'); ?>
      <input type="number" id="topic" class="form-control" name="img_price" value="<?php echo $doc['img_price']; ?>">
     </div>
     <div class="form-group">
						<label for="exampleInputEmail1">
							สต๊อก 
						</label> <?php echo $this->session->flashdata('err_img_stock'); ?>
						<input type="number" id="topic" class="form-control" name="img_stock" value="<?php echo $this->session->flashdata('img_stock'); ?>">
					</div>
     <div class="form-group">
      <label for="exampleInputEmail1">
       อัพโหลดไฟล์ภาพ (<a href="<?php echo base_url('images/' . $doc['image']); ?>" target="_blank"> ไฟล์เก่า </a>)
      </label> <?php echo $this->session->flashdata('err_img'); ?>
      <input type="file" name="img" id="img" >
     </div>
     
    </div><!-- /.box-body -->

   

    <div class="box-footer">
     <button class="btn btn-primary" type="submit">
      <i class="fa fa-fw fa-save">
      </i>บันทึกข้อมูล
     </button>
     <a class="btn btn-danger" href="<?php echo base_url('document'); ?>" role="button">
      <i class="fa fa-fw fa-close">
      </i>ยกเลิก
     </a>
    </div>
   </form>
  </div>
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
 $('#register_date').datepicker().on(picker_event,function(e)
  {
  });
</script>