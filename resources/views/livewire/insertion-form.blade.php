<div class="container">
    <h3 style="text-align: center;">Insert Data into Our Database</h1>

        <div class="input-form-main">
            @if (session()->has('success'))
                <p>{{session('success')}}</p>
            @endif

            <div class="input-form">
                <label for="name">Item Name</label>
                <input type="text" wire:model="name" id="name" placeholder="Item Name">
                @error('name')
                    <div style="color: rgb(121, 18, 18);">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-form">
                <label for="price">Price</label>
                <input type="text" wire:model="price" id="price" placeholder="Price">
                @error('price')
                    <div style="color: rgb(121, 18, 18);">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-form">
                <label for="description">Description</label>
                <input type="text" wire:model="description" id="description" placeholder="Description">
                @error('description')
                    <div style="color: rgb(121, 18, 18);">{{ $message }}</div>
                @enderror
            </div>

            <button wire:click="addItem">Submit</button>

        </div>
</div>
