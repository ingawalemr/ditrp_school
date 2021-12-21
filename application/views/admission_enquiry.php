<?php $this->load->view('header'); ?>
<style>
   .img{
   height:500px;
   }
   .panel-body {
   padding: 20px;
  /* border-left: 1px solid #dddddd;
   border-right: 1px solid #dddddd;
   border-bottom: 1px solid #dddddd;*/
   background-color: #fff;
   }
 
   .btn{
   margin:auto;
   }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg';?>">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Admissions</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Admission <i class="ion-ios-arrow-forward"></i></span><span>Admission Enquiry <i class="ion-ios-arrow-forward"></i></span></p>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="panel-body">
         
         <form method="post" action="<?php echo base_url('admission_enquiry_recieve'); ?>">
            <div class=" form-group row">
               <div class="col-md-12  panel0 text-center">
                  <legend>Basic Details </legend>
               </div>
               <div class="col-md-12">
                  <?php
                  if (!empty($this->session->flashdata('success'))) { ?>
                     <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success') ?>
                     </div>
                     <?php
                  }
                  ?>
               </div>  
               <div class="col-md-6 classcssdisable0"><br>
                  <label class="classcssdisable0">Seeking Admission for Class:<font color="red">*</font></label>
                  <select required name="admission_Class" id="admission_Class" class="form-control classcssdisable0" >
                     <option value="" selected disabled>Select class</option>
                     <option value="Nursery">Nursery</option>
                     <option value="Lower Kindergarten">Lower Kindergarten</option>
                     <option value="Upper Kindergarten">Upper Kindergarten</option>
                     <option value="1st">1st</option>
                     <option value="2nd">2nd</option>
                  </select>
               </div>
               <div class="col-md-6 classcssdisable0"><br>
                  <label class="classcssdisable0">For Academic Year: <font color="red">*</font>
                  </label>
                  <select required name="admission_Year" id="admission_Year" class="form-control classcssdisable0" >
                     <option value="" selected disabled>Select Academic Year</option>
                     <option value="2021-22">2021-22</option>
                     <option value="2022-23">2022-23</option>
                     <option value="2023-24">2023-24</option>
                  </select>
               </div>
              <!--  <div class="col-md-12 panel0 text-center">
                  <legend><br>Student Profile </legend>
               </div> -->
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">First Name <font color="red">*</font></label>
                  <input type="text" name="first_name" id="first_name" class="form-control classcssdisable0" required="required" value="">
               </div>
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">Middle Name <font color="red">*</font></label>
                  <input type="text" name="middle_name" id="middle_name" class="form-control classcssdisable0" required="required" value="">
               </div>
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">Last Name<font color="red">*</font></label>
                  <input type="text" name="last_name" id="last_name" class="form-control classcssdisable0" required="required" value="">
               </div>
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">DOB<font color="red">*</font></label>
                  <input type="date" name="dob" id="dob" class="form-control classcssdisable0" required="required" value="">
               </div>
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">Age<font color="red">*</font></label>
                  <input type="text" name="age" id="age" class="form-control classcssdisable0" required="required" value="">
               </div>
               <div class="col-md-4 classcssdisable0"><br>
                  <label class="classcssdisable0">Gender<font color="red">*</font></label>
                  <select name="gender" id="gender" class="form-control classcssdisable0" required>
                     <option selected disabled>Select Gender</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
               </div> 
               <div class="col-md-12"><br>
                  <input type="checkbox" name="accept_TC" id="accept_TC" value="1" required>
                  &nbsp;<font color="red">*</font>&nbsp;I Accept&nbsp;

                  <a data-toggle="modal" href="javascript:void(0)" data-target="#showterms_conditioncontent" align="right" onclick="terms_condition_view('2')" title="View Content">Terms and Conditions / Declaration</a>

                  <div class="modal fade in" id="showterms_conditioncontent" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                     <div class="modal-dialog" style="width: 95%">
                        <div class="modal-content">
                           <div class="modal-header">
                              <b id="modal_heading">Content</b>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           </div>
                           <div class="modal-body">
                              <div id="content_details"></div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">   Close
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <input type="submit" name="submit" class="btn btn-primary" value="Send Inquiry">    
            </div>
         </form>

      </div>
   </div>
   </div>
   </div>
  
</section>
<?php $this->load->view('footer');?>
</body>
</html>
COP