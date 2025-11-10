<div>

    <form wire:submit="updateStudent">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model.live="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="price">Email:</label>
            <input type="price" id="price" wire:model.live="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-500 py-2 px-4 rounded cursor-pointer"
                wire:loading.class.remove="bg-blue-500 cursor-pointer" wire:loading.class="cursor-not-allowed">Update Student</button>
    </form>
</div>
