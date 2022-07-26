<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h3>Hello</h3>
    <p>I am a Livewire component</p>
    
    <div class="card shadow-sm w-25 mx-auto">
        <div class="card-header">
            Name: {{$name}} <br>
            <input type="text" class="form-control" wire:model="name">

        </div>
        <div class="card-body text-center">
            <h1 style="font-size: 5.3em">
            {{$number}}
            </h1>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" wire:click="randomize">
                Generate Random Number
            </button>
        </div>

    </div>

</div>
