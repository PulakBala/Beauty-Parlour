
    <?php
        @include('navbar.php')
    ?>

<?php include('pricing.php')?>


    <style>
        .social-icons {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

        .social-icons .facebook {
            color: #4267B2;
        }

        .social-icons .whatsapp {
            color: #25D366;
        }
		.social-icons .maps {
        color: #EA4335; /* Google Maps red color */
    }
    </style>

<div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61573616274710&rdid=eu4zmRlHUT7dHxLo&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1AAZtUu2ES%2F#" class="facebook" target="_blank">
            <i class="fab fa-facebook-f fa-lg"></i>
        </a>
        <a href="https://wa.me/+8801630002921" class="whatsapp" target="_blank">
            <i class="fab fa-whatsapp fa-lg"></i>
        </a>
		<a href="https://maps.app.goo.gl/sGeeRDy9G1JHXYyQA?g_st=ac" class="maps" target="_blank">
        <i class="fas fa-map-marker-alt fa-lg"></i>
    </a>
    </div>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="index.html" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>RUBAIYA'S</h1>
          		</a>
          	</div>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">MAKEOVER & ARTISTY</h1>
            <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3">View Our Services</a></p> -->
          </div>
        </div>
      </div>
    </div>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
              <div class="media-body">
                <h3 class="heading">Skin &amp; Beauty Care</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
              <div class="media-body">
                <h3 class="heading">Makeup Pro</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
              <div class="media-body">
                <h3 class="heading">Hair Style</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Beauty Experts</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mellisa Smith</a></h3>
      					<span class="position">Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Marie Mush</a></h3>
      					<span class="position">Fashionist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ana Jacobson</a></h3>
      					<span class="position">Makeup Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Nail Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-discount img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-5 discount ftco-animate">
						<h3>Save up to 25% Off</h3>
						<h2 class="mb-4">Student Discount</h2>
						<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Work</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lips Makeover</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Hair Style</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Makeup</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        </div>
    	</div>
    </section>

    <!-- <section class="ftco-partner bg-light">
    	<div class="container">
    		<div class="row partner justify-content-center">
    			<div class="col-md-10">
    				<div class="row">
		        	<div class="col-md-3 ftco-animate">
		        		<a href="#" class="partner-entry">
		        			<img src="images/partner-1.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3 ftco-animate">
		        		<a href="#" class="partner-entry">
		        			<img src="images/partner-2.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3 ftco-animate">
		        		<a href="#" class="partner-entry">
		        			<img src="images/partner-3.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3 ftco-animate">
		        		<a href="#" class="partner-entry">
		        			<img src="images/partner-4.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
	        	</div>
	        </div>
        </div>
    	</div>
    </section> -->
  


		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Makeup Over Done</span>
		                <strong class="number" data-number="3500">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Procedure</span>
		                <strong class="number" data-number="1000">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Happy Client</span>
		                <strong class="number" data-number="3000">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Skin Treatment</span>
		                <strong class="number" data-number="900">0</strong>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section ftco-appointment">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex align-items-center">
    			<div class="col-md-2"></div>
	    		<div class="col-md-4 d-flex align-self-stretch ftco-animate">
	    			<div class="appointment-info text-center p-5">
	    				<div class="mb-4">
	    					<h3 class="mb-3">Address</h3>
		    				<p>	Chairman ghat,prabashi kallyan bank north side of road,Amin garden 4th floor, Chandpur, Bangladesh</p>
	    				</div>
	    				<div class="mb-4">
		    				<h3 class="mb-3">Phone</h3>
		    				<p class="day"><strong>01630002921</strong> </p>
	    				</div>
						<div class="mb-4">
		    				<h3 class="mb-3">Email</h3>
		    				<p class="day"><strong>rubaiyanur81@gmail.com
							</strong> </p>
	    				</div>
	    				<div>
		    				<h3 class="mb-3">Opening Hours</h3>
		    				<p class="day"><strong>Monday - Friday</strong></p>
		    				<span>08:00am - 09:00pm</span>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-md-6 appointment pl-md-5 ftco-animate">
	    			<h3 class="mb-3">Appointments</h3>
	    			<form action="#" class="appointment-form">
	            <div class="row form-group d-flex">
	            	<div class="col-md-6">
	            		<input type="text" class="form-control" placeholder="First Name">
	            	</div>
	            	<div class="col-md-6">
	            		<input type="text" class="form-control" placeholder="Last Name">
	            	</div>
	            </div>
	            <div class="row form-group d-flex">
	            	<div class="col-md-6">
	            		<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" id="appointment_date" class="form-control" placeholder="Date">
	            		</div>
	            	</div>
	            	<div class="col-md-6">
	            		<input type="text" class="form-control" placeholder="Phone">
	            	</div>
	            </div>
	            <div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Order" class="btn btn-white btn-outline-white py-3 px-4">
	            </div>
	          </form>
	    		</div>    			
    		</div>
    	</div>
    </section>

 <?php 
    @include('footer.php')
 ?>
    
  

