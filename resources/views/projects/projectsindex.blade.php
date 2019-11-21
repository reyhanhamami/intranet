@extends('templates.main')
@section('title', 'Intranet - Projects')

<!-- start body -->

<div class="container-fluid">
    @section('judul', 'Projects')
    @section('sub')
    bwa
    <a href="{{route('detailprojects')}}" class="btn btn-dark float-right text-white ml-2"><i class="fas fa-cogs "> Setting Projects</i></a>
    <a href="{{route('addprojects')}}" class="btn btn-success float-right text-white"><i class="fas fa-plus "> Add projects</i></a>
    @endsection('sub')

    @section('konten')
        <div class="row">
            <div class="col-12">
            <!-- Project Card teknologi -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Teknologi Informasi :</h6>
                </div>
                <div class="card-body">
               @foreach($satu as $satus)
                  <h4 class="small font-weight-bold">{{$satus->nama_projects}} <i class="small">@if($satus->status_projects == 'Target'){{$satus->status_projects}} {{$satus->date_projects}} @else {{$satus->status_projects}} @endif</i><span class="float-right">@if($satus->status_projects == 'Completed')Completed! @else{{$satus->persentase_projects}}% @endif</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar @if($satus->status_projects == 'Target') bg-primary @elseif($satus->status_projects == 'Delayed') bg-danger @else bg-success @endif" role="progressbar" style="width: {{$satus->persentase_projects}}%" aria-valuenow="{{$satus->persentase_projects}}" aria-valuemin="0" aria-valuemax="{{$satus->persentase_projects}}"></div>
                  </div>
                @endforeach
                </div>
              </div> 
              <!-- end project teknologi -->
            <!-- Project Card Human Capital -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Human Capital :</h6>
                </div>
                <div class="card-body">
                @foreach($dua as $duas)
                  <h4 class="small font-weight-bold">{{$duas->nama_projects}} <i class="small">@if($duas->status_projects == 'Target'){{$duas->status_projects}} {{$duas->date_projects}} @else {{$duas->status_projects}} @endif</i><span class="float-right">@if($duas->status_projects == 'Completed')Completed! @else{{$duas->persentase_projects}}% @endif</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar @if($duas->status_projects == 'Target') bg-primary @elseif($duas->status_projects == 'Delayed') bg-danger @else bg-success @endif" role="progressbar" style="width: {{$duas->persentase_projects}}%" aria-valuenow="{{$duas->persentase_projects}}" aria-valuemin="0" aria-valuemax="{{$duas->persentase_projects}}"></div>
                  </div>
                @endforeach
                </div>
              </div> <!-- end project Human Capital -->
            <!-- Project Card Program Dev -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Program Dev :</h6>
                </div>
                <div class="card-body">
               @foreach($tiga as $tigas)
                  <h4 class="small font-weight-bold">{{$tigas->nama_projects}} <i class="small">@if($tigas->status_projects == 'Target'){{$tigas->status_projects}} {{$tigas->date_projects}} @else {{$tigas->status_projects}} @endif</i><span class="float-right">@if($tigas->status_projects == 'Completed')Completed! @else{{$tigas->persentase_projects}}% @endif</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar @if($tigas->status_projects == 'Target') bg-primary @elseif($tigas->status_projects == 'Delayed') bg-danger @else bg-success @endif" role="progressbar" style="width: {{$tigas->persentase_projects}}%" aria-valuenow="{{$tigas->persentase_projects}}" aria-valuemin="0" aria-valuemax="{{$tigas->persentase_projects}}"></div>
                  </div>
                @endforeach
                </div>
              </div> <!-- end project Program Dev -->
            <!-- Project Card Fundraising -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Fundraising :</h6>
                </div>
                <div class="card-body">
                @foreach($empat as $empats)
                  <h4 class="small font-weight-bold">{{$empats->nama_projects}} <i class="small">@if($empats->status_projects == 'Target'){{$empats->status_projects}} {{$empats->date_projects}} @else {{$empats->status_projects}} @endif</i><span class="float-right">@if($empats->status_projects == 'Completed')Completed! @else{{$empats->persentase_projects}}% @endif</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar @if($empats->status_projects == 'Target') bg-primary @elseif($empats->status_projects == 'Delayed') bg-danger @else bg-success @endif" role="progressbar" style="width: {{$empats->persentase_projects}}%" aria-valuenow="{{$empats->persentase_projects}}" aria-valuemin="0" aria-valuemax="{{$empats->persentase_projects}}"></div>
                  </div>
                @endforeach
                </div>
              </div> <!-- end project Fundraising -->
                <!-- Project Card Keuangan -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Keuangan :</h6>
                </div>
                <div class="card-body">
               @foreach($lima as $limas)
                  <h4 class="small font-weight-bold">{{$limas->nama_projects}} <i class="small">@if($limas->status_projects == 'Target'){{$limas->status_projects}} {{$limas->date_projects}} @else {{$limas->status_projects}} @endif</i><span class="float-right">@if($limas->status_projects == 'Completed')Completed! @else{{$limas->persentase_projects}}% @endif</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar @if($limas->status_projects == 'Target') bg-primary @elseif($limas->status_projects == 'Delayed') bg-danger @else bg-success @endif" role="progressbar" style="width: {{$limas->persentase_projects}}%" aria-valuenow="{{$limas->persentase_projects}}" aria-valuemin="0" aria-valuemax="{{$limas->persentase_projects}}"></div>
                  </div>
                @endforeach
                </div>
              </div> <!-- end project Keuangan -->
            </div> 
        </div>
    @endsection('konten')
</div> <!-- end body  -->