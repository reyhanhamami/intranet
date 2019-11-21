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
                <div class="btn btn-primary py-1">
                      <a class="nav-link collapsed task" href="#" data-toggle="collapse" aria-expanded="true">
                        <span class="text-white "><i class="fab fa-fw fa-telegram-plane text-white"></i> <span class="hilang">Send Request</span> </span>
                      </a>
                </div>
          </div> <!-- end Request -->
         <!-- My task-->
            <div class="float-right mr-1">
                <div class="btn btn-primary py-1" >
                      <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#MyTask" aria-expanded="true" aria-controls="MyTask">
                        <span class="text-white "><i class="fas fa-tasks text-white"></i> <span class="hilang">My Task</span> </span>
                      </a>
                    <div class="">
                      <div id="MyTask" class="collapse">
                        <div class="collapse-inner rounded">
                          <h6 class="collapse-header mt-3">To do :</h6>
                          @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                          @endif
                            <!-- looping todolist  -->
                           
                            @foreach($tasks as $task)
                            @if(Auth::id() == $task->employee)
                            <div class="form-check mb-3">
                              <label class="form-check-label" for="wireframes">
                                  {{$task->nama_tasks}}
                              </label>
                              <form action="tasks/{{$task->id_tasks}}" class="d-inline" method="post">
                              @method('delete')
                              @csrf
                                <button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
                              </form>
                            </div>
                            @endif
                            @endforeach
                          
                            <!-- end looping  -->
                        <a href="{{route('addtasks')}}" class="btn btn-dark mt-3 mb-3" style="cursor:pointer">New Tasks</a>
                        <!-- <button class="btn btn-danger mt-3 mb-3">Delete</button> -->
                        
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- end My task -->

            <!-- formulir -->
            <div class="float-right mr-1">
                <div class="btn btn-primary py-1">
                    <div>
                    <a class="nav-link collapsed task" href="#" data-toggle="collapse" data-target="#Form" aria-expanded="true" aria-controls="Form">
                      <span class="text-white"><i class='fas fa-clipboard'> </i> <span class="hilang">Formulir</span></span>
                    </a>
                    </div>
                    <div>
                      <div id="Form" class="collapse">
                        <div class="collapse-inner">
                          <h6 class="collapse-header ml-4 mt-3">formulir :</h6>
                          <ul class="list-group">
                            <a href="http://zulfikar.bwa.id:88/ess/overtime/form_Overtime/" class="list-group-item btn tombolform">Form lembur</a>
                            <a href="http://zulfikar.bwa.id:88/ess/leave/form_Leave/" class="list-group-item btn tombolform">Form cuti</a>
                            <a href="#" class="list-group-item btn tombolform">Form izin</a>
                            <a href="#" class="list-group-item btn tombolform">Form pinjaman</a>
                            <a href="#" class="list-group-item btn tombolform">Form reimburse</a>
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
       
      
       
          <div class="bd-example row mb-5 card shadow">
          <div class="col-md-12 " style="padding-right:0px !important;">
            <div id="carouselpengumuman" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($pengumuman as $pengumumans)
                <li data-target="#carouselpengumuman" data-slide-to="0" @if($pengumumans->id_pengumuman == $pengumumanfirst) class="active" @endif></li>
                @endforeach
              </ol>
              <div class="carousel-inner">
                 <!-- looping pengumuman  -->
                 @foreach($pengumuman as $pengumumans)
                <div @if($pengumumans->id_pengumuman == $pengumumanfirst) class="carousel-item active" @else class="carousel-item" @endif>
                  <div class="d-md-block py-3">
                    <h4 class="text-center"><i class="fas fa-newspaper"></i> Pengumuman</h4>
                    <p class="text-center mb-4" >{{ str_limit(strip_tags($pengumumans->deskripsi), 50)}}  <a href="{{ route('pengumuman').'#'.$pengumumans->id_pengumuman}}">lihat selengkapnya</a></p>
                  </div>
                </div>
                @endforeach
                  <!-- end looping  -->
               
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
              @foreach($events as $event)
                <li data-target="#carouselcooporate" data-slide-to="0" @if($event->id_eventcooporate == $eventfirst) class="active" @endif></li>
              @endforeach
              </ol>
              <div class="carousel-inner">
               <!-- looping slider event cooporate -->
               @foreach($events as $event)
                <div @if($event->id_eventcooporate == $eventfirst) class="carousel-item active" @else class="carousel-item" @endif>
                <div class="overflow">
                  <img src="{{ url('public/assets/cooporateevent/'.$event->foto)}}" class="d-block w-100 full-image " alt="Gambar Hilang">
                </div>
                  <div class="carousel-caption font-weight-bold black  d-md-block">
                    <h2 style="background:white;opacity:0.7;border-radius:5px;">{{$event->title}}</h2>
                    <p class="text-left" style="background:white;opacity:0.7;border-radius:5px;">{{str_limit(strip_tags($event->deskripsi),100)}}</p>
                    <a href="{{$event->url}}" class="btn btn-info ">Lihat selengkapnya</a>
                  </div>
                </div>
                @endforeach
                <!-- end looping slider event cooporate  -->
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
                   
          <div id="local-ip"></div>
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
           <div class="bd-example row mb-5 mt-4 card shadow" style="clear:both !important;">
          <div class="col-md-12 " style="padding-right:0px !important;">
            <div id="carouselhadist" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
              @foreach($mastertype as $indicator)
                <li data-target="#carouselhadist" data-slide-to="0" class="active"></li>
              @endforeach
              </ol>
              <div class="carousel-inner">
                 <!-- looping quran/hadist/qoutes  -->
                @foreach($mastertype as $master)
                <div @if($master->id_pencerahan == '11') echo class="carousel-item active" @else class="carousel-item" @endif>
                  <div class="d-md-block py-3">
                    <h4 class="text-center"><i @if($master->type == '1') class="fas fa-quran" @elseif($master->type == '2') class="fas fa-book-reader" @else class="fab fa-battle-net" @endif></i> {{$master->nama}}</h4>
                    <p class="text-center mx-auto mb-4" style="width:70%"><q>{{$master->deskripsi}}</q></p>
                  </div>
                </div>
                @endforeach
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
          <!-- upcoming personal events -->
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
                  @foreach ($personalevent as $personal)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td><i class="fas fa-bullhorn"></i> {{$personal->title}} </td>
                      <td>{{date('D d-M-Y', strtotime($personal->start_date))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
          </div> <!-- end upcoming personal cooporate -->
            </div>
          <div class="col-xl-5 col-md-12" style="padding-right:0px !important;">
            <div id="carouselpersonal" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($personalevent as $personal)
                <li data-target="#carouselpersonal" data-slide-to="0" @if($personal->id_eventpersonal == $personaleventfirst) class="active" @endif></li>
                @endforeach
              </ol>
              <div class="carousel-inner">
              <!-- looping personal event slider  -->
              @foreach($personalevent as $personal)
                <div @if($personal->id_eventpersonal == $personaleventfirst) class="carousel-item active" @else class = "carousel-item" @endif>
                  <div class="overflow">
                    <img src="{{ url('public/assets/personalevent/'.$personal->foto)}}" class="d-block w-100 full-image " alt="Gambar Hilang">
                  </div>
                    <div class="carousel-caption font-weight-bold black  d-md-block">
                      <h2 style="background:white;opacity:0.5;border-radius:5px;">{{$personal->title}}</h2>
                      <p class="text-left" style="background:white;opacity:0.5;border-radius:5px;">{{str_limit(strip_tags($personal->deskripsi), 50)}}</p>
                      <a href="{{$personal->url}}" class="btn btn-info ">Lihat selengkapnya</a>
                    </div>
                </div>
                @endforeach
               <!-- end looping personal event slider -->
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
        @section('scriptExternal')
         
         <script type="e06d6829e1db31ee20f2cfa4-text/javascript">
                 function checkIP(url, cFunction) {
                     var xhttp;
                     xhttp=new XMLHttpRequest();
                     xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                             cFunction(this);
                         }
                         else{
                             document.getElementById("ip-version-check").innerHTML = "Your IPv6 is: Not Detected";
                         }
                     };
                     xhttp.open("GET", url, true);
                     xhttp.timeout = 5000;
                     xhttp.ontimeout = function(e) {
                         document.getElementById("ip-version-check").innerHTML = "Your IPv6 is: Not Detected";
                     };
                     xhttp.send();
                 }
                 function loadResult(xhttp) {
                     document.getElementById("ip-version-check").innerHTML =
                         "Your IPv6 is: " + xhttp.responseText;
                 }
                 function checkLocal() {
                     window.RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;   //compatibility for firefox and chrome
                     var pc = new RTCPeerConnection({iceServers: []}), noop = function () {
                     };
                     pc.createDataChannel("");    //create a bogus data channel
                     pc.createOffer(pc.setLocalDescription.bind(pc), noop);    // create offer and set local description
                     pc.onicecandidate = function (ice) {  //listen for candidate events
                         if (!ice || !ice.candidate || !ice.candidate.candidate) return;
                         var myIP = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/.exec(ice.candidate.candidate)[1];
                         document.cookie = "myIP = " + myIP;
                         jQuery(document).ready(function () {
                             jQuery("#local-ip").append("<li class=\"list-group-item\">Your Local IP is: " + myIP + "</li>");
                             jQuery("#local-ip").show("slow");
                         });
     
                         pc.onicecandidate = noop;
                     };
     
     
                 }
             </script>
            
         @endsection('scriptExternal')