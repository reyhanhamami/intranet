@extends('templates.main')

@section('title', 'Intranet - Dashboard')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            @section('judul', 'Dashboard')
            @section('sub', 'BWA')
     
        @if(Auth::user())
        @section('shortcut')
          <div class="float-right">
                <div class="btn btn-primary">
                      <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyTask" aria-expanded="true" aria-controls="MyTask">
                        <span class="text-white "><i class="fab fa-fw fa-telegram-plane text-white"></i> Send Request</span>
                      </a>
                </div>
          </div> <!-- end Request -->
         <!-- My task-->
            <div class="float-right mr-1">
                <div class="btn btn-primary">
                      <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyTask" aria-expanded="true" aria-controls="MyTask">
                        <span class="text-white "><i class="fas fa-tasks text-white"></i> My Task</span>
                      </a>
                    <div class="">
                      <div id="MyTask" class="collapse">
                        <div class="collapse-inner rounded">
                          <h6 class="collapse-header mt-3">To do :</h6>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="wireframes" checked>
                              <label class="form-check-label" for="wireframes">
                                  make wireframes for intranet
                              </label>
                            </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="bwaid">
                              <label class="form-check-label" for="bwaid">
                                  follow up vendor web eksternal
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="intranet">
                              <label class="form-check-label" for="intranet">
                                  Build web for internal (intranet)
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="domain">
                              <label class="form-check-label" for="domain">
                                  Maintance domain and subdomain
                              </label>
                          </div>
                        <button class="btn btn-primary mt-3 mb-3">Add</button>
                        <button class="btn btn-danger mt-3 mb-3">Delete</button>
                        
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- end My task -->

            <!-- formulir -->
            <div class="float-right mr-1">
                <div class="btn btn-primary">
                    <div>
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#Form" aria-expanded="true" aria-controls="Form">
                      <span class="text-white"><i class='fas fa-clipboard'> </i> Formulir</span>
                    </a>
                    </div>
                    <div>
                      <div id="Form" class="collapse">
                        <div class="collapse-inner">
                          <h6 class="collapse-header ml-4 mt-3">formulir :</h6>
                          <ul class="list-group">
                            <a href="#" class="list-group-item btn tombolform">Form lembur</a>
                            <a href="#" class="list-group-item btn tombolform">Form cuti</a>
                            <a href="#" class="list-group-item btn tombolform">Form izin</a>
                            <a href="#" class="list-group-item btn tombolform">Form pinjaman</a>
                            <a href="#" class="list-group-item btn tombolform">Form rembest</a>
                            <a href="#" class="list-group-item btn tombolform">Form perjalanan dinas</a>
                            <a href="#" class="list-group-item btn tombolform">Form permintaan barang</a>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end formulir -->
            
        @endsection('shortcut')
        @else
        @endif


        @section('konten')  
        <!-- Pengumuman -->
           <div class="bd-example row mb-5 card shadow" style="clear:both !important;">
          <div class="col-md-12 " style="padding-right:0px !important;">
            <div id="carouselpengumuman" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselpengumuman" data-slide-to="0" class="active"></li>
                <li data-target="#carouselpengumuman" data-slide-to="1"></li>
                <li data-target="#carouselpengumuman" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                 <!-- looping pengumuman  -->
                <div class="carousel-item active">
                  <div class="d-none d-md-block py-3">
                    <h4 class="text-center"><i class="fas fa-newspaper"></i> Pengumuman</h4>
                    <p class="text-center mb-4" >wajib Menggunakan attribut lengkap pada saat  <a href="#">lihat selengkapnya...</a></p>
                  </div>
                </div>
                  <!-- end looping  -->
                <!-- looping pengumuman  -->
                <div class="carousel-item">
                  <div class="d-none d-md-block py-3">
                    <h4 class="text-center"><i class="fas fa-newspaper"></i> Pengumuman</h4>
                    <p class="text-center mb-4" >wajib Menggunakan attribut lengkap pada saat  <a href="#">lihat selengkapnya...</a></p>
                   
                  </div>
                </div><!-- end looping  -->
              </div>
              <a class="carousel-control-prev" href="#carouselpengumuman" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselpengumuman" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
          </div> 
        <!-- end pengumuman  -->
    
        <!-- section 2 -->
        <!-- Carousel slider berita2 bwa yang sudah terjadi -->
        <div class="bd-example row">
          <div class="col-xl-5 col-md-12" style="padding-right:0px !important;">
            <div id="carouselcooporate" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselcooporate" data-slide-to="0" class="active"></li>
                <li data-target="#carouselcooporate" data-slide-to="1"></li>
                <li data-target="#carouselcooporate" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="overflow">
                  <img src="{{ url('public/assets/img/badan.jpg')}}" class="d-block w-100 full-image " alt="Gambar Hilang">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">First slide label</h2>
                    <p class="text-left" style="background:white;opacity:0.5;border-radius:5px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="{{url('public/assets/img/3.jpg') }}" class="d-block w-100 full-image" alt="Gambar Hilang">
                </div>
                  <div class="carousel-caption  font-weight-bold black d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Second slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="{{url('public/assets/img/kantor-yayasan-badan-wakaf-tebet.jpg')}}" class="d-block w-100 full-image" alt="Gambar Rusak">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Third slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselcooporate" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselcooporate" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
          <!-- upcoming cooporate events -->
          <div class="col-xl-7 col-md-12" style="padding-left:0px !important;border-radius:none !important;">
            <div class="card" style="background:none !important;border:none !important;">
              <div class="card-header" style="padding-top:0px !important">
                <h5 class="font-weight-bold"><i class="fas fa-sun"></i> Upcoming Cooporate Events </h5>
              </div>
              <div class="card-body" style="padding:0 0 0 20px !important;">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><i class="fas fa-sort-numeric-down"></i></th>
                    <th scope="col"><i class="fas fa-building"></i> Nama Acara</th>
                    <th scope="col"><i class="fas fa-calendar-alt"></i> Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td><i class="fas fa-bullhorn"></i> {{$event->title}} </td>
                      <td>{{date('D d-M-Y', strtotime($event->start_date))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
          </div> <!-- end upcoming event cooporate -->
            </div>
          </div> <!-- end carousel -->
          <!-- section 2 -->
       
        <!-- section 3 -->
             <!-- quran/hadist/qoutes -->
           <div class="bd-example row mb-5 card shadow" style="clear:both !important;">
          <div class="col-md-12 " style="padding-right:0px !important;">
            <div id="carouselhadist" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselhadist" data-slide-to="0" class="active"></li>
                <li data-target="#carouselhadist" data-slide-to="1"></li>
                <li data-target="#carouselhadist" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                 <!-- looping quran/hadist/qoutes  -->
                <div class="carousel-item active">
                  <div class="d-none d-md-block py-3">
                    <h4 class="text-center"><i class="fas fa-quran"></i> Al-Quran</h4>
                    <p class="text-center mx-auto mb-4" style="width:70%"><q>Hai Nabi, cukuplah Allah (menjadi Pelindung) bagimu dan bagi orang-orang mukmin yang mengikutimu.[QS. Al-Anfal: 64]</q></p>
                  </div>
                </div>
                <!-- end looping  -->
                <!-- looping quran/hadist/qoutes  -->
                <div class="carousel-item">
                  <div class="d-none d-md-block py-3">
                    <h4 class="text-center"><i class="fas fa-book-reader"></i> Hadist</h4>
                    <p class="text-center mx-auto mb-4" style="width:70%"><q>Rasulullah shallallahu ‘alaihi wa sallam bersabda, “Apabila Allah menghendaki hamba-Nya mendapatkan kebaikan maka Allah segerakan baginya hukuman di dunia. Dan apabila Allah menghendaki keburukan untuknya maka Allah akan menahan hukumannya sampai akan disempurnakan balasannya kelak di hari kiamat.” (HR. Tirmidzi, hadits hasan gharib, lihat as-Shahihah [1220])</q></p>
                  </div>
                </div>
                <!-- end looping  -->
                <!-- looping quran/hadist/qoute  -->
                <div class="carousel-item">
                  <div class="d-none d-md-block py-3">
                    <h4 class="text-center"><i class="fab fa-battle-net"></i> Quote</h4>
                    <p class="text-center mx-auto mb-4" style="width:70%"><q>If you can dream it, you can do it. - Walt Disney</q></p>
                  </div>
                </div>
                <!-- end looping  -->
              </div>
              <a class="carousel-control-prev" href="#carouselhadist" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselhadist" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
          </div> 
        <!-- end quran/hadist/qoutes  -->
        <!-- end section 3 -->

        <!-- section 4 -->
        <!-- Carousel slider berita2 bwa yang sudah terjadi -->
        <div class="bd-example row">
          <!-- upcoming cooporate events -->
          <div class="col-xl-6 col-md-12" style="padding-left:0px !important;border-radius:none !important;">
            <div class="card" style="background:none !important;border:none !important;">
              <div class="card-header" style="padding-top:0px !important">
                <h5 class="font-weight-bolder"><i class="fas fa-star-and-crescent"></i> Upcoming Personal Events </h5>
              </div>
              <div class="card-body" style="padding:0 0 0 20px !important;">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><i class="fas fa-sort-numeric-down"></i></th>
                    <th scope="col"><i class="fas fa-city"></i> Nama Acara</th>
                    <th scope="col"><i class="fas fa-calendar-alt"></i> Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td><i class="fas fa-bullhorn"></i> {{$event->title}} </td>
                      <td>{{date('D d-M-Y', strtotime($event->start_date))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
          </div> <!-- end upcoming event cooporate -->
            </div>
          <div class="col-xl-5 col-md-12" style="padding-right:0px !important;">
            <div id="carouselpersonal" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselpersonal" data-slide-to="0" class="active"></li>
                <li data-target="#carouselpersonal" data-slide-to="1"></li>
                <li data-target="#carouselpersonal" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="overflow">
                  <img src="{{ url('public/assets/img/badan.jpg')}}" class="d-block w-100 full-image " alt="Gambar Hilang">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">First slide label</h2>
                    <p class="text-left" style="background:white;opacity:0.5;border-radius:5px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="{{url('public/assets/img/3.jpg') }}" class="d-block w-100 full-image" alt="Gambar Hilang">
                </div>
                  <div class="carousel-caption  font-weight-bold black d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Second slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="{{url('public/assets/img/kantor-yayasan-badan-wakaf-tebet.jpg')}}" class="d-block w-100 full-image" alt="Gambar Rusak">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Third slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselpersonal" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselpersonal" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
          </div> <!-- end carousel -->
          <!-- section 4 -->
     
     @endsection('konten')
        </div>
        <!-- /.container-fluid -->