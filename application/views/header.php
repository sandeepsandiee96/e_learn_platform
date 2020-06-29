<html lang="en">
<head>
<title> <?php echo $title;?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">



<!-- Custom fonts for this template-->
<link
	href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css"
	rel="stylesheet" type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">
<!-- custom css -->
<link href="<?php echo base_url('css/style.css?q='.time());?>"
	rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url();?>css/sb-admin-2.min.css"
	rel="stylesheet">



<style>
  html,body,h1,h2,h3,h4,p,div,span,ul,li,a{
    direction: <?php echo $this->config->item('direction');?>;
}
.btn-default{
	
	border:1px solid #c8c4c4;
	
}
form{
	width: 100%;
}

.sidebar {
    width: 16rem!important;
}
  </style>
<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
<script
	src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script
	src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url();?>vendor/chart.js/Chart.min.js"></script>



<script>
	
	var base_url="<?php echo base_url();?>";

	</script>
	
	 
	<?php
if (($this->uri->segment(1) . '/' . $this->uri->segment(2)) != 'quiz/attempt') {
    ?>
	<!-- custom javascript -->
<script src="<?php echo base_url('js/basic.js?q='.time());?>"></script>
	<?php
}
?>	
	<!-- firebase messaging menifest.json -->
<link rel="manifest" href="<?php echo base_url('js/manifest.json');?>">







</head>






<body id="page-top">



<?php
if ($this->session->userdata('logged_in')) {
    if (($this->uri->segment(1) . '/' . $this->uri->segment(2)) != 'quiz/attempt') {
        $logged_in = $this->session->userdata('logged_in');
        $hquery = $this->db->query(" select * from e_learn_setting where setting_name='App_Name' || setting_name='App_title' order by setting_id asc ");
        $hres = $hquery->result_Array();
        ?>
	  <!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul
			class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
			id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a
				class="sidebar-brand d-flex align-items-center justify-content-center"
				href="https://e_learn.com">

				<div class="sidebar-brand-text mx-3"><?php if($hres[0]['setting_value']==""){ ?>e_learn Platform<?php }else{ echo $hres[0]['setting_value']; }?> </div>


			</a>
			<center>
				<span style="color: #ffffff;"><?php echo $hres[1]['setting_value'];?> </span>
			</center>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
      <?php
        if (in_array('All', explode(',', $logged_in['setting']))) {
            ?>			
      <!-- Nav Item - Dashboard -->
			<li class="nav-item active"><a class="nav-link"
				href="<?php echo site_url('dashboard');?>"> <i
					class="fas fa-fw fa-tachometer-alt"></i> <span><?php echo $this->lang->line('dashboard');?></span></a>
			</li>
<?php } ?>
<?php if($logged_in['su'] == '2')
{
	?>
	<li class="nav-item active"><a class="nav-link"
				href="<?php echo site_url('userdashboard');?>"> <i
					class="fas fa-fw fa-tachometer-alt"></i> <span>User Dashboard</span></a>
			</li>
	
	
<?php } ?>
      <!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading  
      <div class="sidebar-heading">
        Interface
      </div>
-->


 	<?php
        if (in_array('List_all', explode(',', $logged_in['users']))) {
            ?>
      <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseTwo"
				aria-expanded="true" aria-controls="collapseTwo"> <i
					class="fas fa-fw fa-users"></i> <span><?php echo $this->lang->line('users');?></span>
			</a>

				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
<?php
            if (in_array('Add', explode(',', $logged_in['users']))) {
                ?>
<a class="collapse-item" href="<?php echo site_url('user/new_user');?>"><?php echo $this->lang->line('add_new');?></a> 
<?php } ?>
<?php
            if (in_array('List', explode(',', $logged_in['users'])) || in_array('List_all', explode(',', $logged_in['users']))) {
                ?>
<a class="collapse-item" href="<?php echo site_url('user');?>"><?php echo $this->lang->line('users');?> <?php echo $this->lang->line('list');?></a> 
<?php } ?>          
<?php
            if (in_array('List_all', explode(',', $logged_in['appointment']))) {
                ?>
<a class="collapse-item"
							href="<?php echo site_url('appointment/myappointment/');?>"><?php echo $this->lang->line('myappointment');?></a>   
<?php } ?>      
</div>
				</div></li>
<?php
        }
        ?>				
	  
	  
	<?php
        if (in_array('List', explode(',', $logged_in['questions'])) || in_array('List_all', explode(',', $logged_in['questions']))) {
            ?>  
	  
 <!-- Nav Item -  Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseUtilities"
				aria-expanded="true" aria-controls="collapseUtilities"> <i
					class="fas fa-fw fa-university"></i> <span><?php echo $this->lang->line('qbank');?></span>
			</a>
				<div id="collapseUtilities" class="collapse"
					aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
<?php
            if (in_array('Add', explode(',', $logged_in['questions']))) {
                ?> 
            <a class="collapse-item"
							href="<?php echo site_url('qbank/pre_new_question');?>"><?php echo $this->lang->line('add_new');?></a>
<?php
            }

            if (in_array('List', explode(',', $logged_in['questions'])) || in_array('List_all', explode(',', $logged_in['questions']))) {
                ?> 
            <a class="collapse-item"
							href="<?php echo site_url('qbank');?>"><?php echo $this->lang->line('question');?> <?php echo $this->lang->line('list');?></a>
<?php
            }
            ?>
          </div>
				</div></li>

<?php } ?>





 
<?php
        if (in_array('List', explode(',', $logged_in['exam'])) || in_array('List_all', explode(',', $logged_in['exam']))) {
            ?> 
      <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseQuiz"
				aria-expanded="true" aria-controls="collapseQuiz"> <i
					class="fas fa-fw fa-chalkboard-teacher"></i> <span><?php echo $this->lang->line('exam');?> </span>
			</a>
				<div id="collapseQuiz" class="collapse"
					aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
 <?php
            if (in_array('Add', explode(',', $logged_in['exam']))) {
                ?>            
            <a class="collapse-item"
							href="<?php echo site_url('exam/add_new');?>"><?php echo $this->lang->line('add_new');?></a>
		<?php
            }
            if (in_array('List', explode(',', $logged_in['exam'])) || in_array('List_all', explode(',', $logged_in['exam']))) {
                ?>  
            <a class="collapse-item"
							href="<?php echo site_url('exam');?>"><?php echo $this->lang->line('exam');?> <?php echo $this->lang->line('list');?></a>
<?php
            }
            ?>
             
          </div>
				</div></li>
<?php
        }
        ?>
		
	<?php
        if (in_array('List', explode(',', $logged_in['training'])) || in_array('List_all', explode(',', $logged_in['training']))) {
            ?> 
      <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseTraining"
				aria-expanded="true" aria-controls="collapseTraining"> <i
					class="fas fa-fw fa-chalkboard-teacher"></i> <span><?php echo $this->lang->line('training');?> </span>
			</a>
				<div id="collapseTraining" class="collapse"
					aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
 <?php
            if (in_array('Add', explode(',', $logged_in['training']))) {
                ?>            
            <a class="collapse-item"
							href="<?php echo site_url('training/add_new');?>"><?php echo $this->lang->line('add_new');?></a>
		<?php
            }
            if (in_array('List', explode(',', $logged_in['training'])) || in_array('List_all', explode(',', $logged_in['training']))) {
                ?>  
            <a class="collapse-item"
							href="<?php echo site_url('training');?>"><?php echo $this->lang->line('training');?> <?php echo $this->lang->line('list');?></a>
<?php
            }
            ?>
             
          </div>
				</div></li>
<?php
        }
        ?>	
		
		
<?php
        if (in_array('List', explode(',', $logged_in['results'])) || in_array('List_all', explode(',', $logged_in['results']))) {
            ?> 
     <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseResult"
				aria-expanded="true" aria-controls="collapseResult"> <i
					class="fas fa-fw fa-folder"></i> <span><?php echo $this->lang->line('result');?></a></span>
				</a>
				<div id="collapseResult" class="collapse"
					aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">

						<a class="collapse-item" href="<?php echo site_url('result');?>"><?php echo $this->lang->line('result');?> <?php echo $this->lang->line('list');?></a>

					</div>
				</div></li>
<?php
        }
        ?>

<?php
        $acp = explode(',', $logged_in['study_material']);
        if (in_array('List', $acp)) {
            ?>
 
     <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseStudy"
				aria-expanded="true" aria-controls="collapseStudy"> <i
					class="fas fa-fw fa-book"></i> <span><?php echo $this->lang->line('study_material');?></span>
			</a>
				<div id="collapseStudy" class="collapse"
					aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">

						<a class="collapse-item"
							href="<?php echo site_url('study_material');?>"><?php echo $this->lang->line('study_material');?></a>
					</div>
				</div></li>

 <?php
        }
        ?>

<?php
        if (in_array('All', explode(',', $logged_in['setting']))) {
            ?>
     <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item"><a class="nav-link collapsed" href="#"
				data-toggle="collapse" data-target="#collapseSetting"
				aria-expanded="true" aria-controls="collapseSetting"> <i
					class="fas fa-fw fa-cog"></i> <span><?php echo $this->lang->line('setting');?></span>
			</a>
				<div id="collapseSetting" class="collapse"
					aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">

						<a class="collapse-item" href="<?php echo site_url('setting');?>"><?php echo $this->lang->line('setting');?></a>
						<a class="collapse-item"
							href="<?php echo site_url('user/group_list');?>"><?php echo $this->lang->line('group_list');?></a>
						<a class="collapse-item"
							href="<?php echo site_url('qbank/category_list');?>"><?php echo $this->lang->line('category_list');?></a>
						<a class="collapse-item"
							href="<?php echo site_url('qbank/level_list');?>"><?php echo $this->lang->line('level_list');?></a>
						<a class="collapse-item" href="<?php echo site_url('account');?>"><?php echo $this->lang->line('account_type');?></a></a>

					</div>
				</div></li>
<?php
        }
        ?>
 


    </ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav
					class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop"
						class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>



					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

      
	  <?php
        $logged_in = $this->session->userdata('logged_in');
        // check sg invitation
        $uid = $logged_in['uid'];
        $query = $this->db->query("select * from appointment_request 
	join e_learn_users on e_learn_users.uid=appointment_request.request_by 
	 where appointment_request.to_id='$uid' and appointment_request.appointment_status='Pending' ");
        $invitations = $query->result_array();

        $query = $this->db->query("select * from e_learn_notification 
	  where (e_learn_notification.uid='$uid' OR e_learn_notification.uid='0') AND (e_learn_notification.viewed='0')  ");
        $notifications = $query->result_array();

        ?>
	
	  
	             

				
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow"><a
							class="nav-link dropdown-toggle" href="#" id="userDropdown"
							role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"> <span
								class="mr-2 d-none d-lg-inline text-gray-600 small">
				
				
				
				<?php echo $logged_in['first_name'].' '.$logged_in['last_name'];?> </span>
								<!-- <img class="img-profile rounded-circle" src=""> -->
						</a> <!-- Dropdown - User Information -->
							<div
								class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">





								<a class="dropdown-item"
									href="<?php echo site_url('user/edit_user/'.$logged_in['uid']);?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <?php echo $this->lang->line('myaccount');?>
                </a>
				
				 <?php
        if (in_array('List', explode(',', $logged_in['appointment'])) && ! in_array('List_all', explode(',', $logged_in['appointment']))) {
            ?>
 <a class="dropdown-item"
									href="<?php echo site_url('appointment/myappointment/');?>"><i
									class="fas fa-mobile fa-sm fa-fw mr-2 text-gray-400"></i><?php echo $this->lang->line('myappointment');?></a>    
<?php } ?> 


                   <div class="dropdown-divider"></div>
								<a class="dropdown-item"
									href="<?php echo site_url('user/logout');?>"> <i
									class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div></li>

					</ul>

				</nav>
				<!-- End of Topbar -->


				<!-- Begin Page Content -->
				<div class="container-fluid">

					<center><?php
        if ($this->uri->segment(3) != 'ph') {
            if ($this->uri->segment(2) != 'attempt' && $this->uri->segment(1) != 'install') {
                $this->db->where("add_status", "Active");
                $this->db->where("position", "Top");
                $query = $this->db->get('e_learn_add');
                if ($query->num_rows() == 1) {
                    $ad = $query->row_array();
                    if ($ad['advertisement_code'] != "") {
                        echo $ad['advertisement_code'];
                    } else if ($ad['banner'] != '') {
                        ?><a href="<?php echo $ad['banner_link'];?>"
							target="new_add"><img
							src="<?php echo base_url('upload/'.$ad['banner']);?>"
							class="img-responsive"></a> <?php
                    }
                }
            }

            ?></center>
	
	
	
 	<?php
        }
        ?>


	
<?php
    }
}
?>
		
		 
		
  
   
 