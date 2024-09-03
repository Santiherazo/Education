<section class="edu_paysucc_wrapper">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-md-12 col-sm-12 col-12 p-0">
					<?php if(!empty($userDetails)){ ?>
						<div class="edu_paysucc_container">
							<h4 class="edu_cmntitle mb_50">Your Payment has been Successful!</h4>
							<div class="edu_paysucc_inner">
								<div class="row ">
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>user name</h4>
                                            <p><?php echo $userDetails[0]['name'] ; ?></p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>email ID</h4>
                                            <p><?php echo $userDetails[0]['email'] ; ?></p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>enrollment number</h4>
                                            <p><?php echo $userDetails[0]['enrollment_id'] ; ?></p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>password</h4>
                                            <p><?php echo $userDetails[0]['enrollment_id'] ; ?></p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>batch name</h4>
                                            <p><?php echo $this->session->userdata('customerBatchName'); ?></p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="edu_paysucc_box mb_30">
                                            <h4>batch price</h4>
                                            <p> <?php echo $currency_decimal_code.' '.$this->session->userdata('customerprice'); ?></p>
										</div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <p class="edu_paysucc_note">Recomended dimension 180x180 px.</p>    
                                        <button type="button" class="edu_btn">Login</button>
									</div>
								</div>
                            </div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</section>