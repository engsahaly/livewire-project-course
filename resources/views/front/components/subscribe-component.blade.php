<form wire:submit.prevent='submit'>
    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email"
        style="height: 48px;" wire:model='email'>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    @if (session()->has('message'))
        <span class="text-success">
            {{ session('message') }}
        </span>
    @endif

    <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
            class="fa fa-paper-plane text-primary fs-4"></i></button>
</form>
