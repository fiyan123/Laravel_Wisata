@extends('layouts.admin')
@section('content')

<div class="container">
    <h3 class="mb-3">Edit Data Wisata {{ $wisata->nama }}</h3>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Nama wisata</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama"
                            value="{{ $wisata->nama }}">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat wisata</label>
                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat"
                            value="{{ $wisata->alamat }}">
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto wisata</label>
                        @if (isset($wisata) && $wisata->foto)
                        <p>
                            <img src="{{ asset('images/wisata/' . $wisata->foto) }}" class="img-rounded img-responsive"
                                style="width: 100px; height:100px;" alt="">
                        </p>
                        @endif
                        <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto"
                            value="{{ $wisata->foto }}">
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3" align="right">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="{{ route('wisata.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection