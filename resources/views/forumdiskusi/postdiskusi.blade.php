@extends('templates.main')
@section('title', 'Intranet - Post Diskusi')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Post Diskusi')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="card container shadow pt-3" style="border-top:2px solid #3fa2aa">
                    <form action="{{ route('storediskusi') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   <input type="hidden" value="{{Auth::user()->name}}" name="author_diskusi">
                   <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" class="form-control @error('topic_diskusi') is-invalid @enderror" value="{{old('topic_diskusi')}}" id="topic" placeholder="Example: How create something?" name="topic_diskusi">
                        @error('topic_diskusi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror('topic_diskusi')
                    </div>
                    
                   <div class="form-group">
                        <label for="Jabatan">Label</label>
                        <div class="form-check">
                            <input name='	label_diskusi[]' class="form-check-input" type="checkbox" value="#Ask" id="ask">
                            <label class="form-check-label" for="ask">
                                #Ask <i class="fas fa-circle text-success"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input name='label_diskusi[]' class="form-check-input" type="checkbox" value="#FastResponsePlease" id="fastresponseplease">
                            <label class="form-check-label" for="fastresponseplease">
                                #FastResponsePlease <i class="fas fa-circle text-danger"></i>  
                            </label>
                        </div>  
                        <div class="form-check">
                            <input name='label_diskusi[]' class="form-check-input" type="checkbox" value="#Rules" id="rules">
                            <label class="form-check-label" for="rules">
                                #Rules  <i class="fas fa-circle text-dark"></i>
                            </label>
                        </div>  
                        <div class="form-check">
                            <input name='label_diskusi[]' class="form-check-input" type="checkbox" value="#Information" id="information">
                            <label class="form-check-label" for="information">
                                #Information <i class="fas fa-circle text-info"></i>
                            </label>
                        </div>  
                    </div>
                   <div class="form-group">
                        <label for="deskripsi_diskusi">Deskripsi Diskusi</label>
                        <textarea type="text" name="deskripsi_diskusi" class="form-control @error('deskripsi_diskusi') is-invalid @enderror" value="{{old('deskripsi_diskusi')}}" id="deskripsi_diskusi"></textarea>
                        @error('deskripsi_diskusi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('forum.index')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
@section('scriptExternal')
<script >

    $('#deskripsi_diskusi').summernote({
        height: 350,
        popover: {}
    });

</script>
@endsection('scriptExternal')