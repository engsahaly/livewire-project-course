<x-show-modal title="Show Skill">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="10" min="1" max="100" wire:model='progress' />
    </div>
</x-show-modal>
