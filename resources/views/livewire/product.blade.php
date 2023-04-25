<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if ($updateProduct)
                    @include('livewire.produitsOps.update')
                @else
                    @include('livewire.produitsOps.create')
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <input class="form-control" id="search" type="text" placeholder="Search..">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">

                        <colgroup>
                            <col class="col-md-1">
                            <col class="col-md-2">
                            <col class="col-md-5">
                            <col class="col-md-2">
                            <col class="col-md-3">
                            <col class="col-md-3">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>cref</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Produit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="TPcible">
                            @if (count($produits) > 0)
                                @foreach ($produits as $produit)
                                    <tr>
                                        <td>
                                            {{ $produit->categorie_id }}
                                        </td>
                                        <td>
                                            {{ $produit->name }}
                                        </td>
                                        <td>
                                            {{ $produit->desc }}
                                        </td>
                                        <td>
                                            {{ $produit->price }} $
                                        </td>
                                        <td>
                                            <img src="{{ $produit->image }}" alt="{{ $produit->name }} image"
                                                style="width:150px;height:80px">
                                        </td>
                                        <td style="display: flex">
                                            <button wire:click="edit({{ $produit->id }})"
                                                class="btn btn-primary btn-sm">Edit</button>&nbsp;
                                            <button onclick="deleteproduit({{ $produit->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Products Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteproduit(id) {
            if (confirm("Are you sure to delete this record?"))
                window.livewire.emit('deleteProduct', id);
        }
        // Filtrage
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#TPcible tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</div>
