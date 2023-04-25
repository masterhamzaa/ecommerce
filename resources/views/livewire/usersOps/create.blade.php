<form>
    <div class="form-group mb-3">
        <label for="username">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="useremail">Email:</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" placeholder="Enter Email" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="userpassword">Password:</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" placeholder="Enter Password" wire:model="password">
        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>
