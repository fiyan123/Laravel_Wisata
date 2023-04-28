@extends('layouts.admin')
@section('content')

<h3 class="mb-3">Tambah Data Wisata</h3>
<div class="card">
    <div class="card-header">
        <div class="card-body">
            <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Wisata</label>
                    <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama">
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Wisata</label>
                    <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat">
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto">
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

@endsection