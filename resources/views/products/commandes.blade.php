@extends('client')

@section('content')
<br><br><br><br><br>
@if (session()->has('success'))
<div class="container" id="alertbox" style="width: 30%;margin:0 auto">
    <div class="container bg-blue-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
        role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
        </svg>
        <p>{{ session()->get('success') }}</p>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
</div>

@endif


<div class="max-w-md mx-auto  md:max-w-2xl">
    <input class="enabled:hover:border-gray-400 disabled:opacity-75 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="display:block;width: 100" id="search" type="text" placeholder="Search..">
</div><br><br>


        <table class="table-auto mx-auto  text-sm text-left text-gray-500 dark:text-gray-400" style="text-align: justify">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th  scope="col" class="px-6 py-3">Cref</th>
                    <th  scope="col" class="px-6 py-3">Products</th>
                    <th  scope="col" class="px-6 py-3">Montant</th>
                    <th  scope="col" class="px-6 py-3">Date</th>
                    <th  scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody id="TCcible">
                @if (count($factures) > 0)
                    @foreach ($factures as $f)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td style="width: 140px" class="px-6 py-4">
                                {{ $f->commanderef }}
                            </td>

                            <td class="px-6 py-4" >
                                {{ $f->produits }}
                            </td>
                            <td class="px-6 py-4"  >
                                {{ $f->ttc }} DH
                            </td>

                            <td class="px-6 py-4" >
                                {{ $f->datedefacture }}
                            </td>


                            <td class="px-6 py-4">
                                <a href='{{route('annulercommande',[$f->commanderef])}}'
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Annuler La commande</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" align="center">
                            No factures Found.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
</div>





    </div>

    <script>


    $(document).ready(function(){
      $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#TCcible tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>


@endsection
