@extends('templates.main')
@section('title', 'Intranet - Projects')

<!-- start body -->

<div class="container-fluid">
    @section('judul', 'Projects')
    @section('sub')
    bwa
    <a href="#" class="btn btn-dark float-right text-white"><i class="fas fa-cogs "> Setting projects</i></a>
    @endsection('sub')

    @section('konten')
        <div class="row">
            <div class="col-12">
            <!-- Project Card teknologi -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Teknologi :</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">EDC Functioning <i class="small">Target September 2019</i><span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Mobile Aps <i class="small">Target Agustus 2019</i><span class="float-right">90%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">BCP <i class="small">Delayed</i><span class="float-right">50%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">HRIS  <i class="small">completed!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Develop BWA.ID <i class="small">Target desember 2019</i><span class="float-right">10%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> <!-- end project teknologi -->
            <!-- Project Card Human Capital -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Human Capital :</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Update People Development <i class="small">Target Desember 2019</i><span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> <!-- end project Human Capital -->
            <!-- Project Card Program Dev -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Program Dev :</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Review SOP & workflow <i class="small">Target Juli 2019 </i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Mini Workshop Project Planning Workshop <i class="small">Target Juli 2019 </i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Project Management Workshop <i class="small">Target Augustus 2019 </i><span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> <!-- end project Program Dev -->
            <!-- Project Card Fundraising -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Fundraising :</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Fundraising Budget <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">FR Freelancer <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Upgrading Branch Managers <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Fundraising Aps <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Branch Opening SOP & Optimization <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Staff Fulfilment System (KPI) <i class="small">Delayed</i><span class="float-right">50%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> <!-- end project Fundraising -->
                <!-- Project Card Keuangan -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects Keuangan :</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Revenue Ramadhan 2019 <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Finance Audit Report <i class="small">September 2019</i><span class="float-right">84%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Finance Audit Report(2017-2018) <i class="small">Completed!!</i><span class="float-right">Completed</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> <!-- end project Keuangan -->
            </div> 
        </div>
    @endsection('konten')
</div> <!-- end body  -->