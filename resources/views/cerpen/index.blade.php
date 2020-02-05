@extends('layouts.backend')


@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><center>Data cerpen</center></h5><br>
                <center>
                        <a href="{{ route('cerpen.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Konten</th>
                                <th>Kategori</th>
                                <th>Penulis</th>

                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cerpen as $data)
                            <tr>
                                <td>{{$data->judul}}</td>

                                <td><img src="{{asset('assets/img/cerpen/' .$data->gambar. '')}}"
                                    style="width:250px; height:250px;" alt="Foto"></td>

                                       <td>{{$data->konten}}</td>
                                       <td>{{$data->kategori->nm_kategori}}</td>
                                       <td>{{$data->penulis->nm_penulis}}</td>

								<td style="text-align: center;">
                                    <form action="{{route('cerpen.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('cerpen.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('cerpen.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
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
