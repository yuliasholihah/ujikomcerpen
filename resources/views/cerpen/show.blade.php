@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fadeIn active" id="tab-1">
                    <div class="card">
                        <div class="card-header">
                                <h1 class="font-weight-bold font-italic col-md-6 " >
                                    <i class="la la-book smdi-hc-fw"></i>
                                    {{$cerpen->judul}} <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penulis :
                                    {{$cerpen->penulis->nm_penulis}}
                                </h1>
                        </div>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/cerpen/' .$cerpen->gambar.'') }}"
                                class="float-left rounded m-r-30 m-b-30" style="width:250px; height:250px;">
                                <h1 class="font-weight-bold">{{$cerpen->judul}}</h1><br>
                                <p>{!!$cerpen->konten!!}</p>
                                <br>
                                <p>
                                    Kategori :
                                    <button class="btn btn-sm btn-rounded btn-info">
                                        {{$cerpen->kategori->nm_kategori}}
                                    </button>
                                </p>

                                <p>
                                    Tanggal : {{$cerpen->created_at->format('d M Y H:i:s')}}
                                </p>
                                <p>
                                    <a href="#" class="btn btn-outline btn-block btn-rounded btn-info">
                                        <i class="la la-paper-plane"></i> Lihat cerpen <i
                                        class="zmdi zmdi-airplane zmdi-hc-fw"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
