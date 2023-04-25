<form>
    <input type="hidden" wire:model="cref">
    <div class="form-group mb-3 ">

        <select class="custom-select col-md-3" name="refcat" wire:model="etatdecommande">
            <option value="" selected>Choisir l'etat de livraison..</option>
            <option  value="inprogress" >Inprogress</option>
            <option  value="done" >Done</option>

          </select><br>

        @error('etatdecommande') <span class="text-danger">{{ $message }}</span>@enderror
    </div>


    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
    </div>
</form>
