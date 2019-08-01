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
            <a href="/addcooporatecalender" class="btn btn-primary mb-2">Tambah Acara</a>
            <a href="/editCooporateCalender" class="btn btn-secondary mb-2">Edit Acara</a>
            <a href="/DeleteCooporateCalender" class="btn btn-danger mb-2">Hapus Acara</a>
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