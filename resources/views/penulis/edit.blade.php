@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Penulis</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('penulis.update', $penulis->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama penulis</label>
                                <input class="form-control" type="text" name="nm_penulis" id="" value="{{$penulis->nm_penulis}}">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="" value="{{$penulis->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input class="form-control" type="text" name="no_telp" id="" value="{{$penulis->no_telp}}">
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
