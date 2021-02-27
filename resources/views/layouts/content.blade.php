@section('home')

<div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Welcome to New Vision</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <article class="col-lg-6 tm-media">
                        <img src="{{ asset ('asset/img/img-3x2-01.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Best collection</h3></a>
                            <p>Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.</p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="{{ asset ('asset/img/img-3x2-02.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">New Design for your website</h3></a>
                            <p>Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem at nisl malesuada, quis.</p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="{{ asset ('asset/img/img-3x2-03.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Most unique idea ever made</h3></a>
                            <p>Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas. <span class="tm-hover-color">Hover #09F</span></p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="{{ asset ('asset/img/img-3x2-04.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Simple touch</h3></a>
                            <p>Please tell your friends about TemplateMo website. Thank you. Title / Text #666</p>
                        </div>
                    </article>
                </div>
                
                <div class="row tm-welcome-row-2">
                    <div class="col-lg-4 tm-dotted-box-container">
                        <article class="tm-dotted-box">
                            <i class="fas fa-3x fa-binoculars tm-article-icon"></i>
                            <h3 class="tm-article-title">Template Usage</h3>
                            <p class="tm-article-text">You can feel free to edit and use New Vision template for your commercial websites. Title color is #333</p>
                            <a class="tm-btn tm-btn-rounded tm-article-link" href="#">More Details</a>
                        </article>    
                    </div>
                    <div class="col-lg-4 tm-dotted-box-container">
                        <article class="tm-dotted-box">
                            <i class="fas fa-3x fa-microscope tm-article-icon"></i>
                            <h3 class="tm-article-title">New Vision</h3>
                            <p class="tm-article-text"><a rel="nofollow" target="_parent" href="{{asset('https://templatemo.com/tm-542-new-vision')}}">New Vision</a> comes with 4 different HTML pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color is #666</p>
                        </article>    
                    </div>
                    <div class="col-lg-4 tm-dotted-box-container">
                        <article class="tm-dotted-box">
                            <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                            <h3 class="tm-article-title">Download Sites</h3>
                            <p class="tm-article-text">Do not re-distribute our template ZIP file on your website. Or contact us first. Button color is #C99</p>
                            <a class="tm-btn tm-article-link" href="#">Read More...</a>
                        </article>
                    </div>
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small">Featured Carousel Items</h2>        
                    </div>
                </div>
                
                <!-- Carousel -->
                <div class="grid tm-carousel">
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-01.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Best</span> HTML Template</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-02.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Top</span> CSS Theme</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-03.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Best</span> HTML Template</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-04.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Great</span> Web Theme</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-05.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Best</span> HTML Collection</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-06.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Max</span> CSS Layout</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-07.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Best</span> HTML Layout</i></h4>
                        </figcaption>
                    </figure>
                    <figure class="effect-honey">
                        <img src="{{ asset ('asset/img/gallery-item-08.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h4><i><span>Best</span> CSS Template</i></h4>
                        </figcaption>
                    </figure>
                </div>
            </section>
            

@endsection



@section('contact')
<div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-contact-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Contact Information</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-contact-form-wrap">
                        <form id="contact-form" action="" method="post" class="tm-contact-form">
                            <div class="form-group">
                              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                            </div>
                            <div class="form-group">
                              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                            </div>
                    
                            <div class="form-group">
                              <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                            </div>
                    
                            <div class="form-group mb-0">
                              <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                                Send It Now
                              </button>
                            </div>
                          </form>
                      </div>                    
                    </div>
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <p class="mb-4">
                              <a rel="nofollow" target="_parent" href="{{ asset ('https://templatemo.com/tm-542-new-vision')}}">New Vision</a> HTML Template is free to download instantly from TemplateMo website. In dapibus dui vitae urna fringilla volupat.
                            </p>
                            <p class="mb-3">
                              120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil
                            </p>
                            <p class="mb-1">Tel: <a href="tel:0900100910" class="tm-link">090-010-0910</a></p>
                            <p>Email: <a href="{{ asset ('mailto:info@company.com')}}" class="tm-link">info@company.com</a></p>
                        </div>                    
                      </div>                  
                    </div>
                </div>
                
                <div class="row pb-5">
                  <div class="mapouter">
                      <div class="gmap_canvas">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                          <iframe width="100%" height="440" id="gmap_canvas" src="{{ asset ('https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed')}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          
                      </div>
                  </div>
                </div>
                <div class="row pt-5 pb-5 mb-5">
                    <div class="col-md-6 tm-contact-l">
                        <h3 class="tm-article-title tm-color-primary">Fusce consectetur justo urna</h3>
                        <p class="mb-4">Phasellus scelerisque, leo id dictum consectetur, dui felis ultrices ligula, at tristique sem elit ac eros.</p>
                        <ul class="tm-ul-hyphen">
                            <li>Etiam varius faucibus elit, id ultrices</li>
                            <li>Nam condimentum tortor id dui</li>
                            <li>Quis faucibus lacus faucibus</li>
                            <li>Sed urna est, vulputate quis efficitur</li>
                        </ul>
                    </div>
                    <div class="col-md-6 tm-contact-r">
                        <h3 class="tm-article-title tm-color-primary">Nulla euismod nisi in ligula</h3>
                        <p class="mb-4">Etiam iaculis urna finibus ante pharetra eleifend. Nulla
                        euismod nisi in ligula feugiat, in gravida erat tempus.
                        Nullam velit ante, semper in rhoncus non, fringilla vel
                        erat. In gravida dapibus massa non laoreet.</p>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </section>
@endsection


@section('about')

<div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-about-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">About Our Company</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="tm-about">
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fab fa-5x fa-accusoft tm-about-icon"></i>
                            <div>
                                <p><a rel="nofollow" target="_parent" href="{{asset('https://templatemo.com/tm-542-new-vision')}}">New Vision HTML Template</a> is provided by TemplateMo for 100% free of charge. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-air-freshener tm-about-icon"></i>
                            <div>
                                <p>Curabitur et viverra purus, in ornare sem. Donec eu imperdiet felis, sed interdum leo. Mauris nisl mi, bibendum eu venenatis at, condimentum et dui. Proin mi enim, dapibus at metus semper, hendrerit faucibus nisi.</p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-fire-alt tm-about-icon"></i>
                            <div>
                                <p>Duis accumsan dolor feugiat dapibus ultrices. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>    
                    </div>
                </div>
                
                <div class="row tm-welcome-row-2">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-4">Our Background and Environment</h2>        
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="{{asset('asset/img/img-3x1-01.jpg')}}" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Phasellus blandit tortor vel odio hendrerit, eleifend ultricies odio temport. Etiam euismod, lectus convallis efficitur convallis, risus orci auctor orci.</p>
                            <p>Cras imperdiet in ligula sit amet fringilla. Morbi posuere mattis ornare. Nunc iaculis porta ipsum. Aliquam vehicula egestas diam auctor ornare.</p>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="{{asset('asset/img/img-3x1-02.jpg')}}" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Quisque sed tortor sed metus vehicula pulvinar vel dictum tortor. Nivamus eu posuere arcu. Vivamus vel urna id mi congue convallis at sed augue.</p>
                            <p>Praesent venenatis risus aliquet semper porta. Maecenas mollis nisi non hendrerit finibus. Ut eu convallis massa. Sed imperdiet arcu non egestas elementum.</p>
                        </div>    
                    </div>
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3">Our Team Members</h2>        
                    </div>
                </div>
                
                <!-- Carousel -->
                <div class="grid tm-carousel">
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-01.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>John Stone</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-02.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Jane Meldrum</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-03.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Trevor Virtue</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-04.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Emily Moore</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-05.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Claire Li</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-06.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Elisabeth Shu</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-07.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Dania Liu</h2>
                            <p class="icon-links">
								<a href="{{asset('https://fb.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('asset/img/team-img-08.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Miracle Yang</h2>
                            <p class="icon-links">
								<a href="{{asset('https://facebook.com')}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{asset('https://twitter.com')}}"><i class="fab fa-twitter"></i></a>
								<a href="{{asset('https://instagram.com')}}"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                </div>
            </section>

@endsection

@section('program')
<div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-services-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Our Digital Services</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row tm-services">
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{asset('asset/img/services-1.jpg')}}" alt="Image" class="img-fluid">        
                            <figcaption class="tm-service-description">Business Strategy</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{asset('asset/img/services-2.jpg')}}" alt="Image" class="img-fluid">        
                            <figcaption class="tm-service-description">Digital Marketing</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{asset('asset/img/services-3.jpg')}}" alt="Image" class="img-fluid">    
                            <figcaption class="tm-service-description">Social Platforms</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{asset('asset/img/services-4.jpg')}}" alt="Image" class="img-fluid">    
                            <figcaption class="tm-service-description">New Media</figcaption>
                        </figure>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-5">Our unique approaches for you</h2>        
                    </div>
                </div>
                <div class="row tm-approach-row">
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                <i class="fab fa-4x fa-acquisitions-incorporated tm-service-icon"></i>
                                <div>
                                    <p><a rel="nofollow" target="_parent" href="{{asset('https://templatemo.com/tm-542-new-vision')}}">New Vision</a> Template is provided by TemplateMo website for 100% free of charge. You can use this CSS template for any purpose.</p>
                                </div>
                            </div>        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                <i class="fas fa-4x fa-certificate tm-service-icon"></i>
                                <div>
                                    <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                                </div>
                            </div>        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                <i class="fas fa-4x fa-chart-pie tm-service-icon"></i>
                                <div>
                                    <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                                </div>
                            </div>         
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                <i class="fas fa-4x fa-anchor tm-service-icon"></i>
                                <div>
                                    <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3">Our Strategic Partners</h2>        
                    </div>
                </div>
                
                <div class="tm-partners mx-auto">
                    <div>
                        <img src="{{asset('asset/img/partner-01.png')}}" alt="Partner Image" class="img-fluid">
                        <img src="{{asset('asset/img/partner-02.png')}}" alt="Partner Image" class="img-fluid">
                        <img src="{{asset('asset/img/partner-03.png')}}" alt="Partner Image" class="img-fluid">
                        <img src="{{asset('asset/img/partner-04.png')}}" alt="Partner Image" class="img-fluid">
                        <img src="{{asset('asset/img/partner-05.png')}}" alt="Partner Image" class="img-fluid">    
                    </div>
                    
                    <p class="tm-partner-text">Etiam et odio ut nibh suscipit eleifend. Sed facilisis, enim nec auctor vehicula, dolor odio venenatis turpis,
                    eu vehicula ipsum ligula a nisi. Nam vel nulla sed enim imperdiet fermentum. Mauris venenatis imperdiet
                    ex, quis rutrum orci vestibulum tristique. Ut gravida est ac risus dignissim sollicitudin. #999</p>
                    
                </div>
            </section>
@endsection

