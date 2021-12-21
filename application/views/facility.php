<?php $this->load->view('header'); ?>

    <section class="hero-wrap hero-wrap-2"  style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg';?>">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Facility</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Facility <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<?php
				if (!empty($facility)) 
				{
					foreach ($facility as $f) {	//print_r($f);	
						$path = 'http://localhost/ditrp_school/assets/images/'.$f['photo'];
						?>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(<?php echo $path;?>">
						</div>
						<div class="text bg-light p-4">
							<h3><a href="#"><?php echo $f['facility_name'];?></a></h3>
							<p class="subheading"><span>Class time:</span> 
								<?php echo $f['time'];?>
							</p>
							<p><?php echo $f['discription'];?></p>
						</div>
					</div>
					<?php
					}
				}
				?>
				
			</div>
		</div>
	</section>

		
        <?php $this->load->view('footer'); ?>

  </body>
</html>