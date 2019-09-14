@extends('templates.main')
@section('title', 'Intranet - Cooporate Calender')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Cooporate Calender')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class=" mt-4">
            <a href="{{ route('events.addcooporatecalender') }}" class="btn btn-primary mb-2">Tambah Acara</a>
            <a href="{{ route('events.editcooporatecalender') }}" class="btn btn-warning mb-2">Edit / Delete Acara</a>
            @if(session('success'))
                <div class="alert alert-success">
                {{session('success')}}
                </div>
            @endif
            @if(session('update'))
                <div class="alert alert-info">
                {{session('update')}}
                </div>
            @endif

            <!-- <a href="/DeleteCooporateCalender" class="btn btn-danger mb-2">Hapus Acara</a> -->
            <div class="panel panel-default">
                <div class="panel-heading">Full Calendar Example</div>
                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection('konten')
</div>
<!-- end container fluid -->
@section('scriptExternal')
{!! $calendar->script() !!}
@endsection('scriptExternal')