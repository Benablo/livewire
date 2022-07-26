<div class="p-4 bg-info">
    <h1>List of Users</h1>
    <div class="input-group w-50">
        <input type="text" class="form-control" wire:model="filter" wire:keydown.debounce.700ms="filter">
        <button class="btn btn-outline-secondary" wire:click="filter">Filter</button>
    </div>

    <ul class="list-group w-50">
    @foreach($users as $user)
        <li class="list-group-item">{{$user->name}} of {{$user->home_address}}</li>
    @endforeach
    </ul>
</div>
