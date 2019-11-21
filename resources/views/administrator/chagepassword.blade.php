@extends('templates.main')
@section('title', 'Intranet - Ganti Password')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Ganti Password')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
            @if (session('error'))
                <div class="alert alert-danger">
                {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif
                <div class="card container shadow border-left-warning pt-3">
                    <form action="{{route('postpassword')}}" method="post">
                    @csrf
                  
                <div class="form-group{{ $errors->has('passwordlama') ? ' has-error' : '' }}">
                 <label for="passwordlama" class="col-md-4 control-label">kata sandi lama</label>
                <div class="col-md-6">
                    <input id="passwordlama" type="password" class="form-control" name="passwordlama" >
                    @if ($errors->has('passwordlama'))
                    <span class="help-block">
                    <strong>{{ $errors->first('passwordlama') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                
                <div class="form-group{{ $errors->has('passwordbaru') ? ' has-error' : '' }}">
                <label for="passwordbaru" class="col-md-4 control-label">kata sandi baru</label>
                
                <div class="col-md-6">
                <input id="passwordbaru" type="password" class="form-control" name="passwordbaru" >
                
                @if ($errors->has('passwordbaru'))
                <span class="help-block">
                <strong>{{ $errors->first('passwordbaru') }}</strong>
                </span>
                @endif
                </div>
                </div>
                
                <div class="form-group">
                <label for="passwordconfirm" class="col-md-4 control-label">Konfirmasi kata sandi baru</label>
                
                <div class="col-md-6">
                <input id="passwordconfirm" type="password" class="form-control" name="passwordconfirm" >
                </div>
                </div>

                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Change Password</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
