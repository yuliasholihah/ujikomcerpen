@extends('layouts.backend')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><center>Data Penulis</center></h5><br>
                <center>
                        <a href="{{ route('penulis.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama penulis</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penulis as $data)
                            <tr>
                                <td>{{$data->nm_penulis}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->no_telp}}</td>

								<td style="text-align: center;">
                                    <form action="{{route('penulis.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('penulis.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Hapus</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
