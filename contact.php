<?php include('navbar.php') ?>

<style>
	.social-icons{
		display: flex;
		gap:15px;
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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="index.html" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>Pretty</h1>
          		</a>
          	</div>
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>



    <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
						<div class="col-md-4 contact-info ftco-animate">
							<div class="row">
								<div class="col-md-12 mb-4">
		              <h2 class="h4">Contact Information</h2>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Address:</span> 	Chairman ghat,prabashi kallyan bank north side of road,Amin garden 4th floor, Chandpur, Bangladesh</p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Phone:</span> <a href="tel://1234567920">+8801630002921</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Email:</span> <a href="mailto:info@yoursite.com">rubaiyanur81@gmail.com</a></p>
		            </div>
					<div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61573616274710&rdid=eu4zmRlHUT7dHxLo&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1AAZtUu2ES%2F#" class="facebook" target="_blank">
            <i class="fab fa-facebook-f fa-lg"></i>
        </a>
        <a href="https://wa.me/+8801630002921" class="whatsapp" target="_blank">
            <i class="fab fa-whatsapp fa-lg"></i>
        </a>
		<a href="https://maps.app.goo.gl/sGeeRDy9G1JHXYyQA?g_st=ac" class="maps" target="_blank">
        <i class="fas fa-map-marker-alt fa-lg"></i> </a>
    </div>
    
							</div>
						</div>
						<div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
              <form action="#" class="contact-form">
              	<div class="row">
              		<div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" placeholder="Your Name">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" placeholder="Your Email">
		                </div>
		                </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- <div id="map"></div> -->

<?php 
    @include('footer.php')
 ?>
    