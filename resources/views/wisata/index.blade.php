@extends('layouts.admin')
@section('content')

<h3 class="mb-3">Data Wisata</h3>

<div class="card">
    @include('sweetalert::alert')
    <div class="card-header pb-0 mt-3 mb-3">
        <a href="{{ route('wisata.create') }}" class="btn btn-primary" style="float: center">
            Tambah Data
        </a>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="dataTable">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Wisata</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($wisata as $data)
                        <tr align="center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <img src="{{ $data->image() }}" style="width: 150px; height:100px;" alt="">
                            </td>
                            <td>
                                <form action="{{ route('wisata.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('wisata.edit', $data->id) }}" class="btn btn-sm btn-success">
                                        Edit
                                    </a> |

                                    <a href="{{ route('wisata.show', $data->id) }}" class="btn btn-sm btn-warning">
                                        Show
                                    </a> |
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                    </button>
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
@endsection