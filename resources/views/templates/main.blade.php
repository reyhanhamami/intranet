<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{ url('public/assets/img/favicon.png')}}">
  <!-- Custom fonts for this template-->
  <link href="{{ url('public/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css') }}"/> -->
  <link rel="stylesheet" href="{{ url('public/assets/css/fullcalendar.css') }}"/>
  <!-- Custom styles for this template-->
  <link href="{{ url('public/assets/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon mx-1">Intranet</div>
        <div class="sidebar-brand-text"><sup>Bwa</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li <?php if ($halaman == 'home') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';}?>>
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

     <!-- Nav Item - Pages formulir -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-scroll"></i>
      <span>Status formulir</span>
    </a>
    <div id="collapseTwo" class="collapse">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Status :</h6>
        <a class="collapse-item" href="">Lembur</a>
        <a class="collapse-item" href="">Cuti</a>
        <a class="collapse-item" href="">Izin</a>
        <a class="collapse-item" href="">Pinjaman</a>
        <a class="collapse-item" href="">Rembest kesehatan</a>
        <a class="collapse-item" href="">Permintaan Barang</a>
        <a class="collapse-item" href="">Perjalanan dinas</a>
        <a class="collapse-item" href="">Events</a>
      </div>
    </div>
  </li>

 <!-- education -->
  <li @if($halaman == 'education') echo class='active nav-item' @else echo class="nav-item" @endif>
    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseedu" aria-expanded="true" aria-controls="collapseedu">
      <i class="fas fa-fw fa-book-open"></i>
      <span>Education</span>
    </a>
    <div id ="collapseedu" class="collapse">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Information :</h6>
        <a href="{{ route('education.productit')}}" class="collapse-item">Product IT</a>
      </div>
    </div>
  </li>

  <!-- nav item - calender -->
  <li @if($halaman == 'events') echo class="nav-item active" @else echo class='nav-item' @endif>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCal" aria-expanded="true" aria-controls="collapseCal">
      <i class="fas fa-fw fa-calendar-check"></i>
      <span>Calendar</span>
    </a>
    <div id="collapseCal" class="collapse">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Calender :</h6>
        <a href="{{ route('events.cooporatecalender') }}" class="collapse-item">Calender Cooporate</a>
        <a href="#" class="collapse-item">Calender Personal</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Help Desk -->
  <li @if($halaman == 'helpdesk') echo class="active nav-item" @else echo class=" nav-item" @endif>
    <a class="nav-link" href="{{ route('helpdesk.index')}}">
      <i class="fas fa-fw fa-people-carry"></i>
      <span>Help desk</span></a>
  </li>

  <!-- employee list -->
  <li @if($halaman == 'listemployee') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{ route('listemployee')}}" class="nav-link collapsed">
      <i class="fas fa-fw fa-user-friends"></i>
      <span>List Employee</span>
    </a>
  </li>

  <!-- pengumuman -->
  <li @if($halaman == 'pengumuman') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{ route('pengumuman')}}" class="nav-link collapsed">
      <i class="fas fa-bullhorn"></i>
      <span>Pengumuman</span>
    </a>
  </li>

 <!-- pencerahan -->
  @if(Auth::user())
  <li @if($halaman == 'pencerahan') echo class='active nav-item' @else echo class="nav-item" @endif>
    <a href="{{ route('pencerahan')}}" class="collapsed nav-link">
      <i class="fas fa-fw fa-lightbulb"></i>
      <span>Pencerahan</span>
    </a>
  </li>
  @else
  @endif

  <!-- artikel -->
  <li <?php if($halaman == 'artikel'){echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?> class="nav-item">
    <a href="{{ route('artikel.index')}}" class="nav-link collapsed">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Artikel</span>
    </a>
  </li>

  <!-- Document management -->
  <li @if($halaman == 'wiki') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{ route('wiki.index')}}" class="nav-link collapsed">
      <i class="fab fa-fw fa-wikipedia-w"></i>
      <span>wiki</span>
    </a>
  </li>

  <!-- Diskusi -->
  <li @if($halaman == 'forumdiskusi') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{ route('forum.index')}}" class="collapsed nav-link">
      <i class="fab fa-fw fa-discourse"></i>
      <span>Forum Diskusi</span>
    </a>
  </li>

  <!-- Tasks -->
  <li @if($halaman == 'tasks') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{route('tasks.index')}}" class="collapsed nav-link">
      <i class="fas fa-fw fa-tasks"></i>
      <span>Tasks</span>
    </a>
  </li>

  <!-- project -->
  <li @if($halaman == 'projects') echo class="active nav-item" @else echo class="nav-item" @endif>
    <a href="{{route('projects.index')}}" class="nav-link collapsed">
      <i class="fas fa-fw fa-project-diagram"></i>
      <span>Projects</span>
    </a>
  </li>

  <!-- polling
  <li @if($halaman == 'polling') echo class='active nav-item' @else echo class="nav-item" @endif>
    <a href="{{route('polling.index')}}" class="collapsed nav-link">
      <i class="fas fa-fw fa-spinner"></i>
      <span>Polling</span>
    </a>
  </li> -->

  <!-- Grafik donatur -->
  @if(Auth::user())
  <li class="nav-item">
    <a href="http://192.168.55.200:88/dashboard/menu/" class="collapsed nav-link" target="_blank">
      <i class="fas fa-fw fa-chart-pie"></i>
      <span>Grafik donatur</span>
    </a>
  </li>
  @else
  @endif

    <hr class="sidebar-divider mb-2">
    
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(Auth::user())
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi {{ Auth::user()->name}}</span>
                @else
                @endif
                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhMVFRUVFRUXFxcXFxoYFRcVFRUXFxcXFxgdHSggHR0lHRUVITEiJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NGg8PGisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAQMAwgMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAABAAIEBwMG/8QAMRABAQEAAQEFBgMIAwAAAAAAAAER8AIDITFB0RRTYXGBklGR8QQSEzKhscHhBxVz/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDxTSyQWnVACSIKVarFASlIA6tCA2jVEC1SjCB1aLQBtWpANOjEB0akBCAFJQCkgSSArFFgELFgLQcQJJAkUAwNCghStAAgEsMQLAvogKBBJICsRgDEVAUSICQ/mlzyBKpZzlBJLAAsKwAliwEhqBAgECAaxYSAhnOalOc0DqSnOaCw4DnPEFixZ8P6KwEliBRYec7gAWNYgFZbxmgEQAxWNAGcTQBfu870M+H9P9oDIcBBJEFGsUi5zuBKc53o4Ak5yd/5KFAOc7znMXOd5/Ln1AaiMBZz/eLFFnP0AKxL8ufUAjQA55LDowBRSAG/Ln0BxASkBkajJ55Ac5i54A4BxDOc9GgENo1c5AOnAcAYc53EAFJz0ViBUQ0AMWEArGWqKDNWHAAR35/0QFQ4gVSMA4sRkBSNSGf25zQADSzncC5yVGdPPBUBzzSqwBnO8WY1Is5oMEyK8/XwBnnmlQBFMgsAM1rqrIJJA0pAZAUJ5zvMgLEd5/nv1m35f3Bqqc8VOc8TzzBNbz9RFgFq/wB+fVjW+igzefqpTec7mYCxX6qDAU5zvLNPTeev4gzUepkDo6rzmBWAMDQs5ygznORNc53EGcMSAtVkwE1isPTQU3nKkQWc56nnmy1gAy88TvzZoNT6qfH/ACOm89PQ/Ln0BWM1q1mgOco3niZzyHUC5yIQ0BYy1rNAaokC3nchqAxRmEGpTKzOkg1Jz9DghlA3nNEMFAnBDgGiRLQVRgoKoWrQXOd6znKorQZqI6gCotFBWhYsBb8kNQFQStAmpWYdBKVQg2GYQLUrK0Gjg0Sgb9FRoAiM61AOqpnQVFQBCjWtAUaaKC35obzuQAgwGpUMIEysw6DVUolQNDVKNBWEfvDQah1nUCSQCqwgClKKABZ0EtWIFzxSQMmVSq0DqEQNIHQMp5zuZIHnPJDVoFDDYBGA6CWrVoLRUKBGg6CC1aCFqoA6mUCOpAjAZQKGnQVqi06CWhaBhZ1AdW85Vq0FKggKwUAYKloCooBoIAJrnn6IAQgKCA6dBBIIGgtGgSEBCWgVo1aB0VACEtBJIEEgXPMJAiEBSiAoVAUEBQWgYtB0FqSBIGAlor6dj2HX1/ydPV1Z4/uy3PngMaHT7B23uu0+zq9F7B23uu0+zq9AcydPsHbe67T7Or0H/X9t7rtPs6vQHOHT7B23uu0+zq9D7B23uu0+zq9AcqdPsHbe67T7OoA+PTDYECw4kC6ukJAc7lIkBvSz1TvxIFhkSAyDEgXTFgQN9XS9D/416Jf2ftf/AG8rZf5OjznekD9f/Cnx+6+o/gz4/nfl+KQjPs/T8fuvl9TP2fpnhv3dXn9UgU/Z+n4+GfzXwvf+K/gdPx/O+Xd+KQraSB//2Q==">
              </a>
            
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                @if(Auth::user())
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
                @else
                <a class="dropdown-item" href="{{route('login')}}" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login
                </a>
                @endif
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            @yield('shortcut')
            <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
            <h1 class="h6 text-gray-800 mb-3">@yield('sub')</h1>
        
         @yield('konten')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; IT - BWA 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mau Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">klik tombol "Logout" ya kalau mau keluar, Have a nice day ^^</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('public/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('public/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('public/assets/js/sb-admin-2.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('public/assets/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('public/assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ url('public/assets/js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js') }}"></script>
  <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js') }}"></script>
  @yield('scriptExternal')
</body>

</html>
