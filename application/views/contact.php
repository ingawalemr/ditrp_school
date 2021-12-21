<?php $this->load->view('header'); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg';?>">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>Antop Hill, S.M. Road, Mumbai-400037</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">022-24132735</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">info@appzia.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">appzia.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
    <!-- send contact email-->
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
        <?php
                if (!empty($this->session->flashdata('update'))) { ?>
                <div class="col-md-12">
                  <div class="alert alert-success">
                    <?php echo $this->session->flashdata('update') ?>
                  </div>
                </div>
                  <?php
                }
              ?>     
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">

          	<form method="post" action="<?php echo base_url('contact_us'); ?>" class="">
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email"  name="email_id" id="email_id" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
            </form>

					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<!-- <div id="map"></div> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.19339543794!2d72.80726141485717!3d19.447226886875992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a9b5f83568b1%3A0x781c3fb55efa028a!2sDITRP!5e0!3m2!1sen!2sin!4v1637319130986!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 

					</div>
				</div>
			</div>
		</section>

		<br>
        <?php $this->load->view('footer'); ?>

  </body>
</html>