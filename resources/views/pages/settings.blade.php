@extends('layouts.app')

@section('title','Settings')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Settings</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Application Settings</h4>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Email Notifications</label>
                    <div class="custom-switch mt-2">
                        <input type="checkbox" class="custom-switch-input" id="emailNotif" checked>
                        <label class="custom-switch-indicator" for="emailNotif"></label>
                        <label class="custom-switch-description">Aktif</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Dark Mode</label>
                    <div class="custom-switch mt-2">
                        <input type="checkbox" class="custom-switch-input" id="darkMode">
                        <label class="custom-switch-indicator" for="darkMode"></label>
                        <label class="custom-switch-description">Nonaktif</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Auto Logout</label>
                    <select class="form-control">
                        <option>15 Menit</option>
                        <option>30 Menit</option>
                        <option>1 Jam</option>
                    </select>
                </div>

            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary">Simpan Pengaturan</button>
            </div>
        </div>
    </div>
</section>
@endsection
