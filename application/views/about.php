<?php $this->load->view('header'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url() ?>assets/images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs">
            	<span class="mr-2">
            		<a href="<?php echo base_url('index') ?>">Home <i class="ion-ios-arrow-forward"></i></a>
            	</span> 
            	<span>About us  <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
						<div class="text px-4 ftco-animate">
	          	<h2 class="mb-4">Welcome to DITRP Learning School</h2>
				<p>
					<?php
					if (!empty($about)) {
						foreach ($about as $a) {
							//print_r($a);
							?>
							<p><?php echo $a['about_us'] ; ?></p>
							<?php
						}
					}

					?>

				</p>

							<!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p> -->
							<p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p>
						</div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          					<h2 class="mb-4">What We Offer</h2>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text">
										<h3>Safety First</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text">
										<h3>Regular Classes</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text">
										<h3>Certified Teachers</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text">
										<h3>Sufficient Classrooms</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text">
										<h3>Creative Lessons</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text">
										<h3>Sports Facilities</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Years of</span> Experience</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="351">0</strong>
		                <span>Successful Kids</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Happy Parents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
             
             <?php
             if (!empty($testimonial)) {
              	foreach ($testimonial as $t) {
              		//print_r($t); 
              		//$path =	 base_url('assets/images/'.$t['photo'])
              		$path= 'http://localhost/ditrp_school/assets/images/'.$t['photo']; 
              		// $path = 'http://localhost/ditrp_school/assets/images/teacher-1.jpg';
              	?>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo $path ?>); "> 
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p><?php echo $t['discription'] ; ?></p>
                    <p class="name"><?php echo $t['name'] ; ?></p>
                    <span class="position"><?php echo $t['name_title'] ; ?></span>
                  </div>
                </div>
              </div>
             	 <?php
	              }
	            }
	              ?>

              <!-- <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo base_url() ?>assets/images/teacher-2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo base_url() ?>assets/images/teacher-3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo base_url() ?>assets/images/teacher-4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo base_url() ?>assets/images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div> -->
            
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo base_url() ?>assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
			        <div class="heading-section heading-section-white ftco-animate mb-5">
			        	<?php
			        	if (!empty($this->session->flashdata('update'))) { ?>
			        		<div class="alert alert-success">
			        			<?php echo $this->session->flashdata('update') ?>
			        		</div>
			        		<?php
			        	}
			        	?>
			          	<span class="subheading">Contact Us</span>
			            <h2 class="mb-4">Request A Quote</h2>
			        </div>
	          		<form method="post" action="<?php echo base_url('request_quote'); ?>" class="appointment-form ftco-animate">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
		    				</div>
		    				<div class="form-group">
		    					<input type="email" name="email_id" id="email_id" class="form-control" placeholder="Email" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
		          					<div class="select-wrap">
			                      		<div class="icon">
			                      			<span class="ion-ios-arrow-down"></span>
			                      		</div>
					                    <select name="course" id="course" class="form-control"  required>
					                      	<option selected disabled>Select Your Course</option>
					                        <option class="text-dark" value="Art Lesson">Art Lesson</option>
					                        <option class="text-dark" value="Language Lesson">Language Lesson</option>
					                        <option class="text-dark" value="Music Lesson">Music Lesson</option>
					                        <option class="text-dark" value="Sports">Sports</option>
					                        <option class="text-dark" value="Other Services">Other Services</option>
					                    </select>
		                    		</div>
				                </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
				              <textarea name="message" id="message" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
				            </div>
				            <div class="form-group ml-md-4">
				              <input type="submit" value="Send Enquiry" class="btn btn-secondary py-3 px-4">
				            </div>
	    				</div>
	    			</form>
    			</div>
        	</div>
    	</div>
    </section>


	<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo base_url() ?>assets/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo base_url() ?>assets/images/course-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo base_url() ?>assets/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo base_url() ?>assets/images/image_2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo base_url() ?>assets/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo base_url() ?>assets/images/image_3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo base_url() ?>assets/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo base_url() ?>assets/images/image_4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
    		</div>
		</div>
	</section>

	<?php $this->load->view('footer'); ?>