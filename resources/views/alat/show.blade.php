@extends('layouts.app')
@section('judul', 'Detail Alat')

@section('konten')
  <table border="1" cellpadding="6">
    <tr><th>Kode</th><td>{{ $alat->kode }}</td></tr>
    <tr><th>Nama</th><td>{{ $alat->nama }}</td></tr>
    <tr>
      <th>Stok</th>
      @if ($alat->stok == 0)
        <td style="color:red; font-weight:bold">{{ $alat->stok }}</td>
      @else
        <td>{{ $alat->stok }}</td>
      @endif
    </tr>
    <tr><th>Kondisi</th><td>{{ $alat->kondisi }}</td></tr>
    <tr><th>Lokasi</th><td>{{ $alat->lokasi ?? '-' }}</td></tr>
    <tr><th>Dibuat</th><td>{{ $alat->created_at }}</td></tr>
    <tr><th>Diperbarui</th><td>{{ $alat->updated_at }}</td></tr>
  </table>

  <p>
    <a href="{{ route('alat.index') }}">&laquo; Kembali</a> |
    <a href="{{ route('alat.edit', $alat) }}">Ubah</a>
  </p>
@endsection