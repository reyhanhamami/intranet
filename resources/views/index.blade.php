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
                  <img src="assets/img/2-min.jpg" class="d-block w-100" alt="Gambar Rusak" height="400px">
                  <div class="carousel-caption font-weight-bold black  d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">First slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/5-min.jpg" class="d-block w-100" alt="Gambar Rusak" height="400px">
                  <div class="carousel-caption  font-weight-bold black d-none d-md-block">
                    <h2 style="background:white;opacity:0.5;border-radius:5px;">Second slide label</h2>
                    <p style="background:white;opacity:0.5;border-radius:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/breakingnews.jpg" class="d-block w-100" alt="Gambar Rusak" height="400px">
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
        <!-- formulir-formulir -->
        <div class="text-center  text-cyan ">Formulir</div>
        <div class="row mb-3 ">
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Lembur</span>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Cuti</span>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Izin</span>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Pinjaman</span>
            </div>
        </div>  
        <div class="row mb-3 ">
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Rembest</span>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan"> Perjalanan dinas</span>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 border-left-cyan mt-4 mb-2">
                <i class="far text-cyan fa-clipboard fa-3x"></i> <span class="ml-2 text-cyan">Permintaan barang</span>
            </div>
        </div>  
        <!-- end formulir -->

        <!-- row -->
        <div class="row mt-5">
            <!-- polling card -->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-cyan">Polling</h6>
                    </div>
                    <div class="card-body">
                        <div>Polling domain bwa</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="bwaid" value="option1" checked>
                            <label class="form-check-label" for="bwaid">
                                bwa.id
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="bwacoid" value="option2">
                            <label class="form-check-label" for="bwacoid">
                                bwa.co.id
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="bwacom" value="option3">
                            <label for="bwacom" class="form-check-label">
                                bwa.com
                            </label>
                        </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
            </div>
            <!-- end polling -->
            <!--My task-->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyTask" aria-expanded="true" aria-controls="MyTask">
                      <span class="text-cyan">My Task</span>
                        <i class="fas fa-fw fa-chevron-circle-right text-cyan"></i>
                    </a>
                    </div>
                    <div class="card-body">
                      <div id="MyTask" class="collapse">
                        <div class="collapse-inner rounded">
                          <h6 class="collapse-header">To do :</h6>
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
                        <button class="btn btn-primary mt-3">Add</button>
                        <button class="btn btn-danger mt-3">Delete</button>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end My task -->
            <!-- formulir2 -->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyFormulir" aria-expanded="true" aria-controls="MyFormulir">
                      <span class="text-cyan">Formulir</span>
                        <i class="fas fa-fw fa-chevron-circle-right text-cyan"></i>
                    </a>
                    </div>
                    <div class="card-body">
                      <div id="MyFormulir" class="collapse">
                        <div class="collapse-inner">
                          <h6 class="collapse-header">form-form:</h6>
                            <div class="text-white tombolform">Form lembur</div>
                            <div class="text-white tombolform">Form cuti</div>
                            <div class="text-white tombolform">Form izin</div>
                            <div class="text-white tombolform">Form pinjaman</div>
                            <div class="text-white tombolform">Form rembest</div>
                            <div class="text-white tombolform">Form perjalanan dinas</div>
                            <div class="text-white tombolform">Form permintaan barang</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end formulir -->
        </div><!-- end row -->
        
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> -->

              <!-- Color System -->
              <!-- <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div> -->

              <!-- Approach -->
              <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div> -->

            </div>
          </div>

     @endsection('konten')
        </div>
        <!-- /.container-fluid -->