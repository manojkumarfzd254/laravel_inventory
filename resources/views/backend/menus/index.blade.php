@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.menus.management'))


@section('content')
  <div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.menus.management') }}</b></div>
            <div class="col-md-6">
                @include('backend.menus.partials.header-buttons')
            </div>
        </div>

        <div class="table-parent py-4">
            <div class="table-responsive data-table-wrapper">
                <table id="menus-table" class="table table-striped table-bordered nowrap text-center">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.menus.table.name') }}</th>
                            <th>{{ trans('labels.backend.menus.table.type') }}</th>
                            <th>{{ trans('labels.backend.menus.table.createdat') }}</th>
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
           $('#menus-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.menus.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'name', name: 'menus.name'},
                    {data: 'type', name: 'menus.type'},
                    {data: 'created_at', name: 'menus.created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
            });
    });
</script>
@endsection
