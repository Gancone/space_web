<div>
    <form>

        <!-- Text input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="title" class="form-control" wire:model.blur="title" @error('title') is-invalid
                @enderror />
            <label class="form-label" for="title">Title</label>
            @error('title')
            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>

        <!-- Text input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" id="price" class="form-control" wire:model.blur="price" @error('price') is-invalid
                @enderror />
            <label class="form-label" for="price">Price</label>
            @error('price')
            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <select id="category" wire:model="category" class="form-control" wire:model.blur="category"
                @error('category') is-invalid @enderror>
                @foreach ($categories as $category)
                <option value="{{ $category->id}}"> {{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>
        <!-- Message input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <textarea class="form-control" id="description" rows="4" wire:model.blur="description" @error('description')
                is-invalid @enderror></textarea>
            <label class="form-label" for="description">Description</label>
            @error('description')
            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>
        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Crea Articolo</button>
</div>