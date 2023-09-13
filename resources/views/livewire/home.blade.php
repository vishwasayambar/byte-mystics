<div class="h-full">
            <div class="flex-none">
                <ul>
                    @foreach ($todos as $todo)
                        <li>{{ $todo }}</li>
                    @endforeach
                </ul>
            </div>
    <div class="flex items-end">
        <div class="flex-grow">
            <input type="text" class="p-3 w-full" wire:model="todo" placeholder="Todo...">
        </div>
        <div>
            <button wire:click="add" class="bg-fuchsia-200 p-3 mx-3">Add Todo</button>
        </div>
    </div>

</div>
