@extends('layouts.app')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container py-5">
    <h1 class="text-center mb-4">Profil Saya</h1>
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h4 class="card-title">{{ $user->name }}</h4>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Tanggal Bergabung:</strong> {{ $user->created_at->format('d-m-Y') }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profil</a>

        </div>
    </div>
</div>
@endsection
