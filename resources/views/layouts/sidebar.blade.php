<div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">New Vision</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                            <?php 
                              $home = "";
                              $about = "";
                              $program = "";
                              $contact = "";
                            ?>

                          <!-- Looping for active mark on page  -->
                          <?php
                          if(Request::is('/')){
                            $home = 'active';
                          }else if(Request::is('about')){
                            $about = 'active';
                          }else if(Request::is('program')){
                            $program = 'active';
                          }else if(Request::is('contact')){
                            $contact = 'active';
                          }else{
                            
                          }

                          ?>


                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item {{$home}}">
                                <a class="nav-link tm-nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item {{$about}}">
                                <a class="nav-link tm-nav-link" href="{{url('/about')}}">Our Company</a>
                              </li>
                              <li class="nav-item {{$program}}">
                                <a class="nav-link tm-nav-link" href="{{url('/program')}}">Services</a>
                              </li>
                              <li class="nav-item {{$contact}}">
                                <a class="nav-link tm-nav-link" href="{{url('/contact')}}">Contact</a>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        
        