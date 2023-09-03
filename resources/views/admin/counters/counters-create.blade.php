<x-create-modal title="Add New Counter">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.error', ['property' => 'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Count</label>
        <input type="number" class="form-control" placeholder="10" min="1" wire:model='count' />
        @include('admin.error', ['property' => 'count'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="icon" wire:model='icon' />
        @include('admin.error', ['property' => 'icon'])
    </div>
</x-create-modal>
