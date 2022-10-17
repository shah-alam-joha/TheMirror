  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav"> 

      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{ asset('assets/images/user/joha.jpg') }}" style="width:40px; height: 50px;" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Admin</p>
            <p class="designation">Premium user</p>
          </div>
        </a>
      </li>

      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>




      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="slider-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Sliders</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="slider-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.sliders') }}">Manage Sliders </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.slider.create') }}">Add Slider </a>                
           </li>

         </ul>
       </div>
     </li> 


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#gallery-pages" aria-expanded="false" aria-controls="gallery-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Gallery</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="gallery-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.galleries') }}">Manage Gallery </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.gallery.create') }}">Add Gallery </a>         
           </li>
         </ul>
       </div>
     </li> 

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#team-pages" aria-expanded="false" aria-controls="team-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Teams</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="team-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.teams') }}">Manage teams </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.team.create') }}">Add team </a>                
           </li>

         </ul>
       </div>
     </li> 

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#contact-pages" aria-expanded="false" aria-controls="contact-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage contacts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contact-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.contacts') }}">Manage contacts </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.contact.create') }}">Add contact </a>                
           </li>

         </ul>
       </div>
     </li> 

       <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="brand-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage brands</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="brand-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.brands') }}">Manage Brands </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand </a>                
           </li>

         </ul>
       </div>
     </li> 

          <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#service-pages" aria-expanded="false" aria-controls="service-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage services</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="service-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.services') }}">Manage Services </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.service.create') }}">Add Service </a>                
           </li>

         </ul>
       </div>
     </li>  

     <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#beauty_service-pages" aria-expanded="false" aria-controls="beauty_service-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage beauty services</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="beauty_service-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.beautys') }}">Manage Beauty Services </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.beauty.create') }}">Add Beauty Service </a>                
           </li>
         </ul>
       </div>
     </li> 

       <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#review-pages" aria-expanded="false" aria-controls="review-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Reviews</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="review-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.reviews') }}">Manage Reviews </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.review.create') }}">Add Review </a>                
           </li>

         </ul>
       </div>
     </li>

     <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#about-pages" aria-expanded="false" aria-controls="about-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage About</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="about-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.abouts') }}">Manage abouts </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.about.create') }}">Add about </a>                
           </li>

         </ul>
       </div>
     </li>

     <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#faq-pages" aria-expanded="false" aria-controls="faq-pages">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Faq</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="faq-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.faqs') }}">Manage Faqs </a>                
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.faq.create') }}">Add Faq </a>                
           </li>

         </ul>
       </div>
     </li>



     <li class="nav-item">
      <a class="nav-link" href="#logout">
        <form class="form-inline" action="{{ route('logout') }}" method="post">
          @csrf
          <input type="submit" value="Logout Now" class="btn btn-danger">
        </form>
      </a>
    </li>



  </ul>
</nav>

            {{-- partials --}}