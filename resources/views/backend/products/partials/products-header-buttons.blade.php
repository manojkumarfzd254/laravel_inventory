 @if(request()->is('admin/products*'))

{{--  header action buttons --}}
<div class="btn-group float-right">
<div class="dropdown">
    <button type="button" class="btn border mx-2 dropdown-toggle" data-toggle="dropdown">
    Action
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route( 'admin.products.index' ) }}"><i class="fa fa-list-ul"></i> {{ trans( 'menus.backend.products.all' ) }}</a>
        <a class="dropdown-item" href="{{ route( 'admin.products.create' ) }}"><i class="fa fa-plus"></i> {{ trans( 'menus.backend.products.create' ) }}</a>
        <a class="dropdown-item" href="@"><i class="fa fa-file"></i> {{ trans( 'menus.backend.products.import' ) }}</a>
    </div>
    </div>
</div>

 {{-- export header buttons --}}
<div class="btn-group float-right">
    <div class="dropdown">
    <button type="button" class="btn border mx-2 dropdown-toggle" data-toggle="dropdown">
        Export
    </button>
    <div class="dropdown-menu">
        <a id="copyButton" href="#" class="dropdown-item"><i class="fa fa-clone"></i> {{ trans( 'partials.backend.export.copy' ) }}</a>
        <a id="csvButton" href="#" class="dropdown-item"><i class="fa fa-file-text-o"></i> {{ trans( 'partials.backend.export.csv' ) }}</a>
        <a id="excelButton" href="#" class="dropdown-item"><i class="fa fa-file-excel-o"></i> {{ trans( 'partials.backend.export.excel' ) }}</a>
        <a id="pdfButton" href="#" class="dropdown-item"><i class="fa fa-file-pdf-o"></i> {{ trans( 'partials.backend.export.pdf' ) }}</a>
        <a id="printButton" href="#" class="dropdown-item"><i class="fa fa-print"></i> {{ trans( 'partials.backend.export.print' ) }}</a> 
    </div>
    </div>
</div>

@endif