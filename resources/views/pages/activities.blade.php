@extends('layouts.app')

@section('title','Activities')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Activities</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Recent Activities</h4>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Login ke sistem
                        <span class="float-right text-muted">Baru saja</span>
                    </li>
                    <li class="list-group-item">
                        Menambahkan produk
                        <span class="float-right text-muted">15 menit lalu</span>
                    </li>
                    <li class="list-group-item">
                        Mengedit data produk
                        <span class="float-right text-muted">1 jam lalu</span>
                    </li>
                    <li class="list-group-item">
                        Logout
                        <span class="float-right text-muted">Kemarin</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
