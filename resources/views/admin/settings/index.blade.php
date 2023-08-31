@extends('admin.master')

@section('settings-active', 'active')
@section('title', 'Settings')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Settings</h4>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.settings.update-settings')
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
