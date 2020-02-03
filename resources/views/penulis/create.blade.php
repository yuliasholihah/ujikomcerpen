@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Penulis</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('penulis.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama penulis</label>
                                <input class="form-control" type="text" name="nm_penulis" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="">
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
