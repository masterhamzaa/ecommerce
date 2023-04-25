@if(session('gestion')=='categories')
@livewire('category')
@endif
@if(session('gestion')=='produits')
@livewire('product')

@endif
@if(session('gestion')=='users')
@livewire('user')

@endif

@if(session('gestion')=='import')
@livewire('import')
@endif

@if(session('gestion')=='comm')
@livewire('commande')
@endif

@if(session('gestion')=='dashboard')
@livewire('dashboard')
@endif



@if(session('gestion')=='default')
<div class="mt-3 pt-4">
    <img  src="welcome.svg" style="width: 80%;margin:10px auto;display:block">
</div>

@endif


