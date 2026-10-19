
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
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url();?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <?php $this->load->view('layout/preloader'); ?>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php $this->load->view('layout/header'); ?>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <?php $this->load->view('layout/menu'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Basic DataTables</h3>
                 
                </div>
                <div class="col-sm-6">
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Default ordering (sorting) Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Testimonial List</h5>
                    <a href="<?php echo base_url();?>testimonial/add" class="btn btn-primary float-end">Add Testimonial</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display dataTable table table-striped table-bordered" id="basic-3">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Client Name</th>
                            <th>Testimonial</th>
                            <th>Rating</th>
                            <th>Property Type</th>
                            <th>Transaction Type</th>
                            <th>Display Order</th>
                            <th>Display Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 0; ?>
                          <?php foreach($testimonials_list as $testimonial): ?>
                          <?php $i++; ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $testimonial['client_name']; ?></td>
                            <td title="<?php echo htmlspecialchars($testimonial['testimonial']); ?>"><?php echo htmlspecialchars(mb_strimwidth($testimonial['testimonial'], 0, 50, '...')); ?></td>
                            <td><?php echo $testimonial['rating']; ?></td>
                            <td><?php echo $testimonial['property_type']; ?></td>
                            <td><?php echo $testimonial['transaction_type']; ?></td>
                            <td><?php echo $testimonial['display_order']; ?></td>
                            <td>
                                <?php
                                echo $testimonial['display_status'] == 1
                                    ? '<span class="badge badge-success">Active</span>'
                                    : '<span class="badge badge-danger">Inactive</span>';
                                ?>
                            </td>
                            <td><?php echo $testimonial['created_at']; ?></td>
                            <td><?php echo $testimonial['updated_at']; ?></td>
                            <td>
                                <a href="<?php echo base_url();?>testimonial/edit/<?php echo $testimonial['testimonial_id']; ?>" class="fa fa-edit"></a>
                                <a href="<?php echo base_url();?>testimonial/delete/<?php echo $testimonial['testimonial_id']; ?>" class="fa fa-trash"></a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>#</th>
                            <th>Client Name</th>
                            <th>Testimonial</th>
                            <th>Rating</th>
                            <th>Property Type</th>
                            <th>Transaction Type</th>
                            <th>Display Order</th>
                            <th>Display Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
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
    <script src="<?php echo base_url();?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>