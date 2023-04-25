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
                @if ($updateCommande)
                    @include('livewire.commandeOps.update')
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
                        <thead>
                            <tr>
                                <th>Cref</th>
                                <th>Client</th>
                                <th>Products</th>
                                <th>Total</th>
                                <th>Etat</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="TPcible">
                            @if (count($commandes) > 0)
                                @foreach ($commandes as $c)
                                    <tr>
                                        <td>
                                            {{ $c->commanderef }}
                                        </td>
                                        <td style="width: 110px">
                                            {{ $c->client_name }}
                                        </td>
                                        <td>
                                            {{ $c->produits }}
                                        </td>
                                        <td  style="width: 120px">
                                            {{ $c->ttc }} DH
                                        </td>
                                        <td>
                                            {{DB::table('commandes')->where('idcommande', $c->commanderef)->get()[0]->etatdecommande }}
                                        </td>
                                        <td style="width: 110px">
                                            {{ $c->datedefacture }}
                                        </td>


                                        <td style="display: flex">
                                            <button wire:click="edit({{ $c->id }})"
                                                class="btn btn-primary btn-sm">Livraison</button>&nbsp;&nbsp;
                                            <button onclick="deleteCommande({{ $c->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" align="center">
                                        No commandes Found.
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
        function deleteCommande(id) {
            if (confirm("Are you sure to delete this commande?"))
                window.livewire.emit('deleteCommande', id);
        }

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
