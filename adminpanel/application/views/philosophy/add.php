<!DOCTYPE html>
<html lang="en">
   <head>
      <?php $this->load->view('layout/head'); ?>
      <!-- Font Awesome-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/feather-icon.css">
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url();?>assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dropzone.css">
      <!-- Plugins css Ends-->
   </head>
   <body>
      <!-- Loader starts-->
      <?php $this->load->view('layout/preloader'); ?>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
         <?php $this->load->view('layout/header'); ?>
         <!-- Page Header Ends-->
         <!-- Page Body Start-->
         <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <?php $this->load->view('layout/menu'); ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header pb-0">
                              <h5>Add/Edit Philosophy</h5>
                           </div>
                           <div class="card-body add-post">
                             <form class="row needs-validation" method="post" action="<?php echo base_url();?>philosophy/save" enctype="multipart/form-data">

                            <?php if (!empty($philosophy)) : ?>
                                <input type="hidden" name="id" value="<?php echo $philosophy['id']; ?>">
                            <?php endif; ?>

                            <!-- Client Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_name">Short Name:</label>
                                    <input type="text"
                                        class="form-control"
                                        id="short_name"
                                        name="short_name"
                                        placeholder="Enter Short Name"
                                        value="<?php echo !empty($philosophy) ? htmlspecialchars($philosophy['short_name']) : ''; ?>"
                                        required>
                                </div>
                            </div>
                            <!-- Heading -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="heading">Heading:</label>
                                    <input type="text"
                                        class="form-control"
                                        id="heading"
                                        name="heading"
                                        placeholder="Enter Heading"
                                        value="<?php echo !empty($philosophy) ? htmlspecialchars($philosophy['heading']) : ''; ?>"
                                        required>
                                </div>
                            </div>
                            <!-- Description -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea
                                      class="form-control"
                                      id="description"
                                      name="description"
                                      rows="5"
                                      placeholder="Enter Description"
                                      required><?php echo !empty($philosophy) ? htmlspecialchars($philosophy['description'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                                </div>
                            </div>

                            <!-- Display Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Display Status:</label>
                                    <div class="m-checkbox-inline">

                                        <label class="f-w-500 mr-3">
                                            <input class="radio_animated"
                                                type="radio"
                                                name="display_status"
                                                value="1"
                                                <?php echo (!empty($philosophy))
                                                    ? ($philosophy['display_status']==1 ? 'checked' : '')
                                                    : 'checked'; ?>>
                                            Active
                                        </label>

                                        <label class="f-w-500">
                                            <input class="radio_animated"
                                                type="radio"
                                                name="display_status"
                                                value="0"
                                                <?php echo (!empty($philosophy) && $philosophy['display_status']==0) ? 'checked' : ''; ?>>
                                            Inactive
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <!-- Display Order -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="display_order">Display Order:</label>
                                    <input type="number"
                                        class="form-control"
                                        id="display_order"
                                        name="display_order"
                                        min="0"
                                        value="<?php echo !empty($philosophy) ? $philosophy['display_order'] : 0; ?>">
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">
                                    <?php echo !empty($philosophy) ? 'Update Philosophy' : 'Save Philosophy'; ?>
                                </button>

                                <button class="btn btn-light" type="reset">
                                    Reset
                                </button>
                            </div>
                        </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
         </div>
         <!-- footer start-->
         <?php $this->load->view('layout/footer'); ?>
      </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url();?>assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url();?>assets/js/config.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url();?>assets/js/bootstrap/popper.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
      <!-- Plugins JS start-->
      <script src="<?php echo base_url();?>assets/js/editor/ckeditor/ckeditor.js"></script>
      <script src="<?php echo base_url();?>assets/js/editor/ckeditor/adapters/jquery.js"></script>
      <script src="<?php echo base_url();?>assets/js/dropzone/dropzone.js"></script>
      <script src="<?php echo base_url();?>assets/js/dropzone/dropzone-script.js"></script>
      <script src="<?php echo base_url();?>assets/js/select2/select2.full.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/select2/select2-custom.js"></script>
      <script src="<?php echo base_url();?>assets/js/email-app.js"></script>
      <script src="<?php echo base_url();?>assets/js/form-validation-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url();?>assets/js/script.js"></script>
      <script src="<?php echo base_url();?>assets/js/theme-customizer/customizer.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
   </body>
</html>