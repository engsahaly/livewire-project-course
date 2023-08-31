@extends('admin.master')

@section('settings-active', 'active')
@section('title', 'Settings')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Settings</h4>

        <div class="card mb-4">
            <div class="card-body">
                <form class="row">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" placeholder="Facebook" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" placeholder="Twitter" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Linkedin</label>
                        <input type="text" class="form-control" placeholder="Linkedin" />
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" placeholder="Instagram" />
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
