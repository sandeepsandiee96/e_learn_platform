
<div class="container">

	<div class="row">

		<div class="col-md-4">

			<div class="card border-left-primary shadow  py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								<a href="<?php echo site_url('user');?>">
					  <?php echo $this->lang->line('no_registered_user');?>
						</a>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_users;?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="col-md-4">

			<div class="card border-left-success shadow  py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								<a href="<?php echo site_url('qbank');?>">
					  <?php echo $this->lang->line('no_questions_qbank');?>
						</a>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_qbank;?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-4">

			<div class="card border-left-warning shadow  py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								<a href="<?php echo site_url('quiz');?>">
					  <?php echo $this->lang->line('no_registered_quiz');?>
						</a>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_quiz;?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>

		</div>








	</div>

	<div class="row"></div>






	<div class="row" style="margin-top: 20px;">
		<div class="col-lg-7">


			<div class="row">



				<div class="col-md-6">

					<div class="card border-left-success shadow  py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div
										class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										<a href="<?php echo site_url('user');?>">
					 <?php echo $this->lang->line('active');?> <?php echo $this->lang->line('users');?>
						</a>
									</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $active_users;?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-user fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-6">



					<div class="card border-left-danger shadow  py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div
										class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										<a href="<?php echo site_url('user');?>">
					 <?php echo $this->lang->line('inactive');?> <?php echo $this->lang->line('users');?>
						</a>
									</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $inactive_users;?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-ban fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>

				</div>





			</div>
