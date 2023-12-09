@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Name:</strong> {{ $user->name }}
                        </div>
                         <div class="mb-3">
                            <strong>Alamat:</strong> {{ $user->alamat }}
                        </div>
                         <div class="mb-3">
                            <strong>No.Telepon:</strong> {{ $user->no_telepon }}
                        </div>
                         <div class="mb-3">
                            <strong>No.SIM:</strong> {{ $user->no_sim }}
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong> {{ $user->email }}
                        </div>
                        <!-- Add other user profile details here -->

                        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
