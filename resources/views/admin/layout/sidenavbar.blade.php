  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/dashboard')}}">Saiful Community Center</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>     
    
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-snowflake-o"></i>
            <span class="nav-link-text">Service</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{url('/dashboard/services/create')}}"><i class="fa fa-gg-circle"></i>  Add Services</a>
            </li>
            <li>
              <a href="{{url('/dashboard/services')}}"> <i class="fa fa-gg-circle"></i> Sevice List</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-picture-o"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{url('/dashboard/gallery/create')}}"><i class="fa fa-gg-circle"></i> Add Gallery</a>
            </li>
             <li>
                 <a href="{{url('/dashboard/gallery')}}"> <i class="fa fa-gg-circle"></i> Show Gallery</a>
             </li>

          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExampleslider" data-parent="#exampleAccordion">
            <i class="fa fa-picture-o"></i>
            <span class="nav-link-text">Slider</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExampleslider">
            <li>
              <a href="{{url('/dashboard/slider/create')}}"><i class="fa fa-gg-circle"></i> Add Content</a>
            </li>
             <li>
                 <a href="{{url('/dashboard/slider')}}"> <i class="fa fa-gg-circle"></i> Show Content</a>
             </li>

          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTestimonial" data-parent="#exampleAccordion">
                  <i class="fa fa-comments-o"></i>
                  <span class="nav-link-text">Testimonial</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseTestimonial">
                  <li>
                      <a href="{{url('/dashboard/testimonial/create')}}"><i class="fa fa-gg-circle"></i> Add Review</a>
                  </li>
                  <li>
                      <a href="{{url('/dashboard/testimonial')}}"> <i class="fa fa-gg-circle"></i> Show Review</a>
                  </li>

              </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAbout" data-parent="#exampleAccordion">
                  <i class="fa fa-comments-o"></i>
                  <span class="nav-link-text">About</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseAbout">
                  <li>
                      <a href="{{url('/dashboard/about')}}"><i class="fa fa-gg-circle"></i>About Content</a>
                  </li>

              </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSociallinks" data-parent="#exampleAccordion">
                  <i class="fa fa-share-square-o"></i>
                  <span class="nav-link-text">Social Links</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseSociallinks">
                  <li>
                      <a href="{{url('/dashboard/social')}}"><i class="fa fa-share-square-o"></i> Social Links</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseContactnumber" data-parent="#exampleAccordion">
                  <i class="fa fa-phone"></i>
                  <span class="nav-link-text">Contact Numbers</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseContactnumber">
                  <li>
                      <a href="{{url('/dashboard/mobile')}}"><i class="fa fa-phone"></i> Contact Numbers</a>
                  </li>
              </ul>
          </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">User</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseUsers">
           <li>
              <a href="{{route('profile')}}"> <i class="fa fa-gg-circle"></i> Profile</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInbox" data-parent="#exampleAccordion">
            <i class="fa fa-inbox"></i>
            <span class="nav-link-text">Inbox</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseInbox">
            <li>
              <a href="{{url('/dashboard/contactlist')}}"><i class="fa fa-gg-circle"></i> Message</a>
            </li>
              <li>
                  <a href="{{url('/dashboard/newsletteremail')}}"><i class="fa fa-gg-circle"></i> News Letter</a>
              </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">    
              
              <li class="dropdown">             
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    <i class="fa fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                       <li class="user-header">
                           <div class="profile-2">
                           <img width="80" src="{{asset('public/admin/img/saiful.jpg')}}" class="img-circle" alt="User Image">
                           </div>
                        <p class="log-user-name">{{ Auth::user()->name }}</p>
                      </li>

                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="{{route('profile')}}" class="btn btn-warning">Profile</a>
                          </div>
                          <div class="pull-right">
                           
                             <a class="btn btn-primary" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                          </div>
                        </li>                     
                  </ul>
              </li>
      </ul>     
    </div>
  </nav>