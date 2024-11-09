<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard')}}">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('dashboard')}}">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{setActive([
          'admin-disewakan.*',
          'admin-disewakan-image-gallery.*',
          'admin-berita.*'
      ])}}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Konten</span></a>
          <ul class="dropdown-menu">
            <li class="{{setActive(['admin-disewakan.*',
                                    'admin-disewakan-image-gallery.*'])}}">
                                <a class="nav-link" href="{{route('admin-disewakan.index')}}">Disewakan</a>
            </li>
            <li class="{{setActive(['admin-berita.*'])}}"><a class="nav-link" href="{{route('admin-berita.index')}}">Berita</a></li>
          </ul>
        </li>
        <li class="{{setActive(['admin-profile'])}}"><a class="nav-link" href="{{route('admin-profile')}}"><i class="fas fa-pencil-ruler"></i> <span>Manage User</span></a></li>
      </ul>
    </aside>
  </div>
