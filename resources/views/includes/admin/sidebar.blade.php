<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
          <div class="sidebar-brand-text mx-3">
            <span class="mr-2 d-none d-lg-inline">Library Admin</span>
          </div>
      </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
        Master File
    </div>
  
    <!-- Nav Item -->
    <li class="nav-item {{ Route::is('member*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('member.index') }}">
            <i class="fas fa-users"></i>
            <span>Member</span>
        </a>
    </li>
  
    <!-- Nav Item - Book Collapse Menu -->
    <li class="nav-item {{ Route::is('category*', 'book*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBook"
            aria-expanded="true" aria-controls="collapseBook">
            <i class="fas fa-book"></i>
            <span>Books</span>
        </a>
        <div id="collapseBook" class="collapse" aria-labelledby="headingBook"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Route::is('book*') ? 'active' : '' }}" href="{{ route('book.index') }}">Books</a>
                <a class="collapse-item {{ Route::is('category*') ? 'active' : '' }}" href="{{ route('category.index') }}">Categories</a>
            </div>
        </div>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
        Transactions
    </div>
  
    <!-- Nav Item - Transaction Collapse Menu -->
    <li class="nav-item {{ Route::is('loan*', 'restore*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaction"
            aria-expanded="true" aria-controls="collapseTransaction">
            <i class="fas fa-chart-area"></i>
            <span>Transactions</span>
        </a>
        <div id="collapseTransaction" class="collapse" aria-labelledby="headingTransaction" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Route::is('loan*') ? 'active' : '' }}" href="{{ route('loan.index') }}">Loans</a>
                <a class="collapse-item {{ Route::is('restore*') ? 'active' : '' }}" href="{{ route('restore.index') }}">Returns</a>
            </div>
        </div>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  
  </ul>
  <!-- End of Sidebar -->