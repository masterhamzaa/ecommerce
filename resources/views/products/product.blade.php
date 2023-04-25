@extends('welcome')

@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ $cat_name }} Categorie <input class="form-control" id="search"
                            type="text" placeholder="Search.."></div>
                    <div class="card-body">

                        <table class="table  table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Image</th>

                                </tr>
                            </thead>
                            <tbody id="Tcible">
                                @foreach ($products as $product)
                                    <tr title="Click for the view" data-toggle="modal"
                                        data-target="#visuel{{ $product->id }}">
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }} DH</td>
                                        <td><img src="{{ $product->image }}" alt="{{ $product->name }} image"
                                                style="width:100px;height:80px"></td>

                                    </tr>

                                    <div class="modal fade" id="visuel{{ $product->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        {{ $product->name }}</h5>
                                                    <button style="outline: none;box-shadow: none;" type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="display:flex">
                                                    <img src="{{ $product->image }}" alt="{{ $product->name }} image"
                                                        style="width:80%;height:300px;margin:auto">
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="bold-btn float-start badge rounded-pill bg-success">{{ $product->price }}
                                                        DH</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
