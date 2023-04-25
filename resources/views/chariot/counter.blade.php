<div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg text-right" role="alert">
    <i style="font-size: 30px" class="fa fa-shopping-cart"></i>
    {{DB::table('chariots')->where('uid',Auth::user()->id)->count()}}
</div>
