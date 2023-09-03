<x-show-modal title="Show Service">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <div class="form-control">{{ $name }}</div>
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Email</label>
        <div class="form-control">{{ $email }}</div>
    </div>
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Subject</label>
        <div class="form-control">{{ $subject }}</div>
    </div>
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Message</label>
        <div class="form-control">{{ $message }}</div>
    </div>
</x-show-modal>
