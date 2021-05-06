<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('dashboard')}}" class="brand-link">
    <p class="brand-text font-weight-light text-center"><img src="{{asset('assets/images/logo-law.svg')}}" width="25%"></p>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
       
        <!-- <li class="nav-item">
          <a href="{{route('listBooking')}}" class="nav-link">
            <i class="fas fa-luggage-cart"></i>
            <p>Booking</p>
          </a>
        </li> -->
        
        
        
        {{-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-satellite"></i>
            <p>
              Frequently
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createFrequently')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Frequently</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listFrequently')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-dollar-sign"></i>
            <p>
              Price
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createPrice')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Price</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listPrice')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-share-alt"></i>
            <p>
              Social Network
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createSocial')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Social</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listSocial')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li> --}}
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-shopping-bag"></i>
            <p>
              Product
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createProduct')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listProduct')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fab fa-servicestack"></i>
            <p>
              Service
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createService')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Service</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listService')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fab fa-intercom"></i>
            <p>
              Client
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createClient')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Client</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listClient')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createUser')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listUser')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-user-tag"></i>
            <p>
              Role
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createRole')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Role</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listRole')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fab fa-blogger"></i>
            <p>
              Blog
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createBlog')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listBlog')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-chart-pie"></i>
            <p>
              Category
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createCategory')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listCategory')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Teams
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createTeam')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listTeam')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fab fa-slideshare"></i>
            <p>
              Slide Show
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createSlide')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Slide</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listSlide')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-eye"></i>
            <p>
              Testimonial
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createTestimonial')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Testimonial</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listTestimonial')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-sliders-h"></i>
            <p>
              Preference
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('editPreferenceCompany','about')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>About Company</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('editPreferenceCompany','social')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Social Media</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('editPreferenceCompany','contact')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Contact Company</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-question-circle"></i>
            <p>
              Why Choose Us
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createChooseUs')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Choose Us</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listChooseUs')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-project-diagram"></i>
            <p>
              Project Portfolios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('createProject')}}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Add Project Portfolio</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listProject')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>