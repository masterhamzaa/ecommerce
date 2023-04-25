<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-header">{{ __('IMPORT CSV TO DB') }}</div>
        <div class="panel-body p-3">
            @if ($message = Session::get('successImport'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif
            @if ($error = Session::get('errorImport'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif



            <form action="{{route('putdata') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="data" id="data" class="form-control @error('data') is-invalid @enderror">
                    @error('data')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <br>


                <button class="btn btn-danger">Import Product Data</button>
            </form>


<br >

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
                        <th>Produit_image</th>

                    </tr>
                </thead>
                <tbody >
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
