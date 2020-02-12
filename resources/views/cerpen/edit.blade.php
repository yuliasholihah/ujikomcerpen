@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    {{-- <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script> --}}
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                        <center>
                                <div class="card-header">Edit Konten Cerpen</div>
                            </center>

                            <div class="card-body">

                                <form action="{{route('cerpen.update', $cerpen->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control
                                        @error('judul') is-invalid @enderror" type="text"
                                        name="judul" id="" value="{{$cerpen->judul}}" required>
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        @if (isset($cerpen) && $cerpen->gambar)
                                            <p>
                                                <img src="{{ asset('assets/img/cerpen/'
                                                .$cerpen->gambar.'') }}"
                                                style="margin-top:15px;margin-bottom:15px;
                                                max-height:100px;border:1px;border-color:black;" alt="">
                                            </p>
                                        @endif
                                        <input class="form-control
                                        @error('gambar') is-invalid @enderror" type="file"
                                        name="gambar" id="" value="{{$cerpen->gambar}}">
                                        @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control
                                            @error('konten') is-invalid @enderror"
                                            name="konten" id="editor1" required> {{$cerpen->konten}}
                                            </textarea>
                                            @error('konten')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div> --}}
                                         <div class="form-group">
                                    <label for="">Konten</label>
                                   <textarea class="form-control ckeditor" name="konten" required>{{$cerpen->konten}}

                                   </textarea>
                                   </div>

                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control
                                        @error('kategori') is-invalid @enderror"
                                        name="id_kategori" id="" required>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}"
                                                    @if ($data->id == $cerpen->id_kategori) selected="selected" @endif>
                                                    {{ $data->nm_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penulis</label>
                                        <select class="form-control
                                        @error('penulis') is-invalid @enderror"
                                        name="id_penulis" id="" required>
                                            @foreach ($penulis as $data)
                                                <option value="{{$data->id}}"
                                                    @if ($data->id == $cerpen->id_penulis) selected="selected" @endif>
                                                    {{ $data->nm_penulis }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('penulis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
