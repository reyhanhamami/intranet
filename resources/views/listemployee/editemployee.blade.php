@extends('templates.main')
@section('title', 'Intranet - Edit Data Karyawan')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Edit Data Karyawan')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-warning pt-3">
                    <form action="/intranet/listemployee/{{ $listemployee->id_employee }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                   <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$listemployee->nama}}" id="Nama" placeholder="Nama" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror('nama')
                    </div>
                    <div class="form-group">
                        <label >Upload Foto Karyawan ukuran (rasio 2 : 1, Best resolution 318x200px)</label>
                        <!-- <img src="../public/assets/listemployee/{{$listemployee->foto}}" alt=""> -->
                        <input type="file" name="foto" id=""  class="form-control @error('foto') is-invalid @enderror">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="Nama">Divisi</label>
                        <select name="divisi" id="" class="form-control @error('divisi') is-invalid @enderror">
                            
                            @foreach($masterdivisi as $divisi)
                            <option value="{{$divisi->id_divisi}}"
                                @if($divisi->id_divisi == $listemployee->divisi)
                                selected
                                @endif    
                            >{{$divisi->nama_divisi}}</option>
                            @endforeach
                        </select>
                        @error('divisi')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="text" name="jabatan" value="{{$listemployee->jabatan}}" class="form-control @error('jabatan') is-invalid @enderror" id="Jabatan" placeholder="Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$listemployee->email}}" id="Email" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="NoHanphone">No Hanphone</label>
                        <input type="text" name="handphone" class="form-control @error('handphone') is-invalid @enderror" value="{{$listemployee->handphone}}" id="NoHanphone" placeholder="No Hanphone">
                        @error('handphone')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Rubah</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('listemployee')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
