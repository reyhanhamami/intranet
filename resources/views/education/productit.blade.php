@extends('templates.main')
@section('title', 'Intranet - Product IT')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Product IT')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
        <!-- Mobile agent-->
            <div class="card shadow">
              <div class="card-header">
                <h6><i class="fas fa-mobile-alt"> </i> Mobile Agent</h6>
              </div>
                <div class="card-body text-center pl-2 pr-2">
                 <p>Screenshot aplikasi mobile agent</p>
                    <img class="img-thumbnail " src="../public/assets/img/mobilaggent.png" alt="" width="300px">
                    <img class="img-thumbnail " src="../public/assets/img/mobilaggent2.png" alt="" width="300px">
                    <img class="img-thumbnail " src="../public/assets/img/mobilaggent4.png" alt="" width="300px">
                </div>
                  <p class='text-danger ml-3' style="op">* Download File untuk toturial cara penggunaan aplikasi mobile agent</p>
                  <a href="../public/assets/file/BWA Mobile Apps - Petunjuk Penggunaan Aplikasi.pptx"  class="text-white btn  btn-primary btn-block" download> Download File</a>
              </div> 
            </div> <!-- end mobile agent  -->
        </div>
    @endsection('konten')
</div> <!-- end body  -->