@extends('templates.main')

@section('title', 'Intranet - Detail Employee')

    <!-- start content -->
    <div class="container-fluid">
    @section('judul', 'Detail Employee')
    @section('sub', 'BWA')
        @section('konten')

            <!-- start row  -->
             <div class="row container">
              <!-- looping data karyawan  -->
                  <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image">
                  <img src="{{url('public/assets/listemployee/'.$listemployee->foto)}}" alt="">
                    <a href="#" class="card-post__category badge badge-pill badge-info">Travel</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/0.jpg');">Written by Anna Ken</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">Attention he extremity unwilling on otherwise cars backwards yet</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor jet pan flying over...</p>
                    <span class="text-muted">29 February 2019</span>
                  </div>
                </div>
              </div>
              </div>
              <!-- end data karyawan  -->
      
        
            <!-- end row  -->
              
        @endsection('konten')
    </div>