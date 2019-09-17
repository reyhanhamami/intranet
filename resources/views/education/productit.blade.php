@extends('templates.main')
@section('title', 'Intranet - Product IT')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Product IT')
    @section('sub', 'BWA')

    @section('konten')
        @section('konten')
        @if(!Auth::user())
        @elseif(Auth::user()->name == 'admin')
          <a href="{{route('education.addproductit')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah Education tentang IT</a>
        @else
        @endif
        @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif
        @if(session('delete'))
          <div class="alert alert-danger">
            {{session('delete')}}
          </div>
        @endif
        @if(session('update'))
          <div class="alert alert-info">
            {{session('update')}}
          </div>
        @endif
        <div class="row">
            <div class="col-12">
        <!-- looping card  -->
          <div class="card shadow mb-5">
            <ul class="list-group list-group-flush">
            @foreach($education as $educations)
              <a href="{{route('education.printpdf')}}" target="_blank">
              <div class="inline-block">1.</div>
              <li class="list-group-item">{{$educations->judul}}</li>
              </a>
            @endforeach
            </ul>
          </div>
        <!-- end looping card -->
        <!--looping card -->
          @foreach($education as $educations)
            <div class="card shadow mb-5">
              <div class="card-header">
                  @if(!Auth::user())
                  @elseif(Auth::user()->name == 'admin')
                  <form action="{{$educations->id_education}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                    <button class="btn btn-danger float-right ml-1"><i class="fas fa-trash-alt text-white"></i></button>
                  </form>
                  <a href="{{$educations->id_education}}/editproductit" class="btn btn-success float-right"><i class="fas fa-edit text-white"></i></a>
                  @else
                  @endif
                <h6><i class="fas fa-mobile-alt"> </i> {{$educations->judul}}</h6>
              </div>
                <div class="card-body text-center pl-2 pr-2">
                 <p>Screenshot aplikasi {{$educations->judul}}</p>
                    @if($educations->foto1 != NULL)
                    <img class="img-thumbnail " src="{{url('public/assets/educationITpic/'.$educations->foto1)}}" alt="" width="300px">
                    @endif
                    @if($educations->foto2 != NULL)
                    <img class="img-thumbnail " src="{{url('public/assets/educationITpic/'.$educations->foto2)}}" alt="" width="300px">
                    @endif
                    @if($educations->foto3 != NULL)
                    <img class="img-thumbnail " src="{{url('public/assets/educationITpic/'.$educations->foto3)}}" alt="" width="300px">
                    @endif
                </div>
                  <p class='text-danger ml-3' style="op">* Download File untuk toturial cara penggunaan aplikasi {{$educations->judul}}</p>
                  <a href="{{url('public/assets/document/'.$educations->file)}}"  class="text-white btn  btn-primary btn-block" download> Download File</a>
              </div> 
          @endforeach
            </div> 
            <!-- end looping   -->
        </div>
    @endsection('konten')
</div> <!-- end body  -->