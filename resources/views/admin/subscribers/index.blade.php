@extends('admin.master')

@section('subscribers-active', 'active')
@section('title', 'Subscribers')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Subscribers</h4>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                {{-- @livewire('admin.skills.skills-data') --}}
            </div>
        </div>

        {{-- @livewire('admin.skills.skills-delete') --}}
    </div>
    <!-- / Content -->
@endsection
