@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.master.daftar_makanan_minuman.create') }}" class="btn btn-success btn-sm mb-2">Tambah
                Daftar
                Makanan Minuman</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no_daftar = 1; ?>
                        @foreach ($daftars as $daftar)
                            <tr>
                                <td>{{ $no_daftar }}</td>
                                <td>{{ $daftar->nama }}</td>
                                <td>{{ $daftar->harga }}</td>
                                <td>
                                    <a href="{{ route('admin.master.daftar_makanan_minuman.edit', $daftar->id_daftar) }}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <form
                                        action="{{ route('admin.master.daftar_makanan_minuman.destroy', $daftar->id_daftar) }}"
                                        method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-link" href="#"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            <i class="fas fa-fw fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <?php $no_daftar++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
