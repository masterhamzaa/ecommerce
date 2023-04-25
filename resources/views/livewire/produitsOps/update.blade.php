<form>
    <input type="hidden" wire:model="product_id">
    <div class="form-group mb-3 ">

        <select class="custom-select col-md-3" name="refcat" wire:model="categorie_id">
            <option value="" selected>Choice a categorie..</option>
                @foreach ($categories as $c)
                    <option  value="{{$c->id}}" >{{$c->name}}</option>
                @endforeach
          </select><br>

        @error('categorie_id') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="ProductName">Name:</label>
        <input type="text" class="form-control col-md-4 @error('name') is-invalid @enderror" id="ProducName" placeholder="Enter Name of Product" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="ProductDescription">Description:</label>
        <textarea class="form-control col-md-6 @error('desc') is-invalid @enderror" id="ProductDescription" wire:model="desc" placeholder="Enter Description"></textarea>
        @error('desc') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="Productprice">Price :</label>

        <input type="number" class="form-control col-md-3 @error('price') is-invalid @enderror" id="ProductPrice" placeholder="Enter Price of Product" wire:model="price" min="1">

        @error('price') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="ProductImage">Produit Image:</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror" id="ProductImage" wire:model="image" placeholder="Enter Image Url">
        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger btn-block">Cancel</button>
    </div>
</form>
