@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Daftar Pesan</h3>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Pesan</th>
                <th>Aksi</th>
                </tr>    
               </thead> 
               @forelse ($messages as $message)
                   <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $message->nama }}</td>
                    <td>{{  $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->pesan }}</td>
                    <td>
                        <form class="d-inline" action="{{ route('admin.messages.destroy', $message->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus Datanya?')">Delete</button>
                        </form>
                    </td>
                       
                   </tr>
               @empty
               <tr>
                <td colspan="6" class="text-center">Data Kosong</td>
               </tr>
               @endforelse
            </table>
        </div>
    </div>
</div>
@endsection