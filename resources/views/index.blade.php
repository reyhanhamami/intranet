@extends('templates.main')

@section('title', 'Intranet - Dashboard')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            @section('judul', 'Dashboard')
            @section('sub', 'BWA')


        @section('konten')     
        <!-- Carousel slider berita2 bwa yang sudah terjadi -->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="overflow">
                  <img src="assets/img/2-min.jpg" class="d-block w-100 full-image " alt="Gambar Rusak">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">First slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="assets/img/5-min.jpg" class="d-block w-100 full-image" alt="Gambar Rusak">
                </div>
                  <div class="carousel-caption  font-weight-bold black d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Second slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="overflow">
                  <img src="assets/img/breakingnews.jpg" class="d-block w-100 full-image" alt="Gambar Rusak">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Third slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div> <!-- end carousel -->
     
        <!-- row -->
        <div class="row mt-5">
            <!--My task-->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4 border-left-success">
                    <div class="card-header">
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyTask" aria-expanded="true" aria-controls="MyTask">
                      <span class="text-cyan">My Task</span>
                        <i class="fas fa-fw fa-chevron-circle-right text-cyan"></i>
                    </a>
                    </div>
                    <div class="ml-4 mr-4 ">
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
            <!-- My Request -->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="btn btn-primary btn-block" type="button">Kirim Permintaan <i class="ml-2 fas fa-paper-plane"></i>
                    </div>
                </div>
            </div> <!-- end Request -->
            <!-- formulir2 -->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4 border-left-success">
                    <div class="card-header">
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyFormulir" aria-expanded="true" aria-controls="MyFormulir">
                      <span class="text-cyan">Formulir</span>
                        <i class="fas fa-fw fa-chevron-circle-right text-cyan"></i>
                    </a>
                    </div>
                    <div class="mx-auto">
                      <div id="MyFormulir" class="collapse">
                        <div class="collapse-inner">
                          <h6 class="collapse-header mt-3">form-form:</h6>
                            <div class="text-white tombolform">Form lembur</div>
                            <div class="text-white tombolform">Form cuti</div>
                            <div class="text-white tombolform">Form izin</div>
                            <div class="text-white tombolform">Form pinjaman</div>
                            <div class="text-white tombolform">Form rembest</div>
                            <div class="text-white tombolform">Form perjalanan dinas</div>
                            <div class="text-white tombolform mb-3">Form permintaan barang</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end formulir -->
        </div><!-- end row -->

        <div class="row">
          <!-- upcoming cooporate events -->
          <div class="col-xl-6 col-md-12 mb-4 mt-2">
            <div class="card shadow">
              <div class="card-header">
                <h6>Upcoming Cooporate Events</h6>
              </div>
              <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Acara</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$event->title}}</td>
                      <td>{{date('D d-M-Y', strtotime($event->start_date))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
          </div> <!-- end upcoming event cooporate -->
          <!-- upcoming events personal-->
          <div class="col-xl-6 col-md-12 mb-4 mt-2">
            <div class="card shadow">
              <div class="card-header">
                <h6>Upcoming Personal Events</h6>
              </div>
              <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Acara</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$event->title}}</td>
                    <td>{{$event->start_date}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>
            </div>
          </div> <!-- end upcoming event personal -->

        </div>
       

     @endsection('konten')
        </div>
        <!-- /.container-fluid -->