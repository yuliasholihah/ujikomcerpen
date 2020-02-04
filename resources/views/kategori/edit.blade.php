@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Kategori</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input class="form-control" type="text" name="nm_kategori" id="" value="{{$kategori->nm_kategori}}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
