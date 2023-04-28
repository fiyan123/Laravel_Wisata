@extends('layouts.admin')
@section('content')

<div class="container">
    <h3 class="mb-3">Detail Wisata {{ $wisata->nama }}</h3>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Wisata</label>
                    <input type="text" class="form-control" name="nama" value="{{ $wisata->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $wisata->alamat }}" readonly>

                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Wisata</label>
                    @if (isset($wisata) && $wisata->foto)
                    <p>
                        <img src="{{ asset('images/wisata/' . $wisata->foto) }}" class="img-rounded img-responsive"
                            style="width: 100px; height:100px;" alt="">
                    </p>
                    @endif
                </div>
                <div class="mb-3" align="right">
                    <a href="{{ route('wisata.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection