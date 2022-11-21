@extends('pages.PemilikUsaha.main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/cart/cart.css') }}">
@endpush

@section('name_page')
    Master Service
@endsection

@section('content')
<table class="table table-dark" style="width:50%; margin-left:20vw">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Quantity</th>
        <th scope="text-center" style="padding-left: 4vw;">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>kontol lukas</td>
        <td>Rp 10.000</td>
        <td>1</td>
        <td class="text-left">
            <button class="btn btn-primary badge-pill" style="width: 80px;">EDIT</button>
            <button class="btn btn-danger badge-pill" style="width: 80px;">DELETE</button>

        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>kontol jo</td>
        <td>Rp 50.000</td>
        <td>2</td>
        <td class="text-left">
            <button class="btn btn-primary badge-pill" style="width: 80px;">EDIT</button>
            <button class="btn btn-danger badge-pill" style="width: 80px;">DELETE</button>

        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>kontol nando</td>
        <td>Rp 100.000</td>
        <td>3</td>
        <td class="text-left">
            <button class="btn btn-primary badge-pill" style="width: 80px;">EDIT</button>
            <button class="btn btn-danger badge-pill" style="width: 80px;">DELETE</button>

        </td>
      </tr>
    </tbody>
  </table>


@endsection

