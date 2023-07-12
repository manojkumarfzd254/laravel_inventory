@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.products.management'))


@section('content')
  <div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.products.management') }}</b></div>
            <div class="col-md-6">
                @include('backend.products.partials.products-header-buttons')
            </div>
        </div>

        <div class="table-parent py-4">
            <div class="table-responsive data-table-wrapper">
                <table id="products-table" class="table table-striped table-bordered nowrap text-center">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.products.table.id') }}</th>
                            <th>Name</th>
                            <th>Part Number</th>
                            <th>Part Type</th>
                            <th>Description</th>
                            <th>{{ trans('labels.backend.products.table.createdat') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
  </div><!--content-->
@endsection

@section('bottom-scripts')
<script type="text/javascript">
   $(document).ready(function() {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
           $('#products-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.products.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.products.table')}}.id'},
                    {data: 'name', name: '{{config('module.products.table')}}.name'},
                    {data: 'part_number', name: '{{config('module.products.table')}}.part_number'},
                    {data: 'part_type', name: '{{config('module.products.table')}}.part_type'},
                    {data: 'description', name: '{{config('module.products.table')}}.description'},
                    {data: 'created_at', name: '{{config('module.products.table')}}.created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
            });
    });
</script>
@endsection
