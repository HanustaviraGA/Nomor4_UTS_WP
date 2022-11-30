@extends ('master/section')

@section('konten')
{{-- Nama : Hanustavira Guru Acarya
NIM  : 2440046031 --}}
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>Multi Platform</h2>
                      <br>
                      <h3>Multi Scheme</h3>
                      <p>
                        BersiiTechnology applied multi platform and multi scheme principles. More than 5 years of experiences.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/img-1.png" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>Smart and eco-friendly</h2>
                      <br>
                      <h3>Rich of features</h3>
                      <p>
                        Our product are always using green material from green company. Tested and verified by Ministry of Health.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-2.png" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>User Friendly</h2>
                      <br>
                      <h3>Latest technology</h3>
                      <p>
                        We use the latest technology available. And we prepared the technology to create a user friendly environment.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-3.png" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>BersiiRefill Promo!</h2>
                  <p>
                    Get BersiiRefill Station on your supermarket or workplace, and get free coupon of BersiiRefill Promo Program now !
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color" href="#">
							<i class="icon-shopping-cart icon-white"></i> Call us now ! </a>
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>Recent posts</h3>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="post_right_sidebar.html">
					<img src="assets/img/dummies/blog1.png" alt="">
					</a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 <br>
					2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">This is a standard post</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="assets/img/dummies/blog2.png" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Example post image format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="assets/img/dummies/blog3.png" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Amazing video post format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection