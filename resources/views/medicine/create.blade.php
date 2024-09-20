@extends('layout')


@section('content')
<form action="{{route('medicine.store')}}"method="POST" class="card p-5">
    @csrf

    @if(Session::get('succes'))
        <div class="alert alert-succes"> {{ Session::get('succes')}} </div>
    @endif
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all()as $errors)
                <li>{{ errors }}</li>
                @endforeach
        </ul>
    @endif    
        
    <div class="mb-3 row">      
        <label for="name" class="col sm-2 col-form-label">nama obat : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Jenis Obat :</label>
        <div class="col-sm-10">
            <select class="form-select" name="type" id="type">
                <option selected disabled hidden>Pilih</option>
                <option value="tablet">tablet</option>
                <option value="sirup">sirup</option>
                <option value="kapsul">kapsul</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga Obat</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price">  
        </div>
    </div>
    <div class="mb-3 row">
        <label for="stock" class="col-sm-2 col-form-label">Stok Tersedia</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="stock" name="stock">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection