@extends('layouts.app')

@section('title','Profile')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
    </div>

    <div class="section-body">
        <div class="row">

            <div class="col-lg-8">
                <div class="card">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       value="{{ auth()->user()->name }}"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                       class="form-control"
                                       value="{{ auth()->user()->email }}"
                                       disabled>
                            </div>

                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Kosongkan jika tidak diganti">
                            </div>

                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&size=128"
                             class="rounded-circle mb-3">
                        <h6>{{ auth()->user()->name }}</h6>
                        <small class="text-muted">{{ auth()->user()->email }}</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
