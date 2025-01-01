@extends('layouts.app2')

@section('content')
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center"
     style="background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;">
    <div class="row w-100 shadow-lg" style="max-width: 1000px; border-radius: 20px; overflow: hidden; background-color: rgba(255, 255, 255, 0.9);">
        <!-- Full Form -->
        <div class="col-md-12 bg-white d-flex align-items-center justify-content-center p-5">
            <div class="w-100" style="max-width: 400px;">
                <h4 class="text-center mb-4" style="font-size: 1.8rem; font-weight: bold; color: #ffa500;">REGISTER</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form-floating mb-4">
                        <label for="name">Masukkan Nama Anda:</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-floating mb-4">
                        <label for="email">Masukkan Email Anda:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-4">
                        <label for="password">Buat Sandi Anda:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Kata Sandi">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-floating mb-4">
                        <label for="password-confirm">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi">

                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-lg text-white" style="background-color: #ffa500; border: none;">
                            Register
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection