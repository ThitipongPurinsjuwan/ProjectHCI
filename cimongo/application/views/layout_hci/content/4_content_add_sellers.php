       <!-- Start Content-->
       <div class="container-fluid">
           <!-- start page title -->
           <div class="row">
               <div class="col-12">
                   <div class="page-title-box">
                       <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                               <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                               <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                               <li class="breadcrumb-item active">Stock</li>
                           </ol>
                       </div>
                       <h4 class="page-title">Stock</h4>
                   </div>
               </div>
           </div>
           <!-- end page title -->
           <div class="row">
               <div class="col-12">
                   <div class="row mb-2">
                       <div class="col-md-2"></div>
                       <div class="col-md-8">
                           <div class="card">
                               <div class="row ml-3">
                                   <div class="col-md-12">
                                       <h3>Edit <?php echo "" ?></h3>
                                   </div>
                               </div>

                               <div class="row ml-3">
                                   <div class="card-body">
                                       <form action="<?php echo base_url("main_hci/insert_seller") ?>" method="post">
                                           <div class="row m-2">
                                               <div class="col-md-6">
                                                   <div class="ml-1"><span><strong> firstname : </strong></span></div>
                                                   <input type="text" class="form-control" placeholder="ชื่อ..." name="seller_firstname" id="seller_firstname" value="<?php echo ""?>"/>
                                                   <input style="display:none;" type="text" name="seller_id" id="seller_id" value="<?php echo "" ?>">
                                                   <input style="display:none;" type="text" name="" id="" value="<?php echo "" ?>">
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="ml-1"><span><strong> lasttname : </strong></span></div>
                                                   <input type="text" class="form-control" placeholder="นามสกุล..." name="seller_lastname" id="seller_lastname" value="<?php echo "" ?>"/>
                                               </div>
                                           </div>
                                           <div class="row m-2">
                                               <div class="col-md-6">
                                                   <div class="ml-1"><span><strong> telephone : </strong></span></div>
                                                   <input type="text" class="form-control" placeholder="โทรศัพท์" name="seller_telephone" id="seller_telephone" value="<?php echo "" ?>"/>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="ml-1"><span><strong> seller id : </strong></span></div>
                                                   <input type="text" class="form-control" placeholder="ไอดี..." name="seller_id" id="seller_id" value="<?php echo "" ?>"/>
                                               </div>
                                           </div>
                                           <div class="row m-2">
                                               <div class="col-md-12">
                                                   <div class="ml-1"><span><strong> address : </strong></span></div>
                                                   <input type="text" class="form-control" placeholder="ที่อยู่..." name="seller_address" id="seller_address" value="<?php echo "" ?>"/>
                                               </div>
                                           </div>
                                           <div class="row m-2 text-right">
                                               <div class="col-md-12">
                                                   <button type="submit" id="btn_add" class="btn btn-primary">
                                                       <i href="" id="save_edit" class="nc-icon nc-simple-add">Save</i>
                                                   </button>
                                                   <!-- cancel -->
                                                   <a href="<?php echo base_url("main_hci/sellers") ?>" type="button" id="btn_close" class="btn btn-info">
                                                       <i href="" id="cancel_edit" class="nc-icon nc-simple-remove">Cancel</i>
                                                   </a>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-2"></div>
                   </div>
               </div> <!-- end col -->
           </div>
           <!-- end row -->
       </div> <!-- container -->

       </div> <!-- content -->