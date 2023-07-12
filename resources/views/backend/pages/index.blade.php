@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.pages.management'))


@section('content')
  <div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.pages.management') }}</b></div>
            <div class="col-md-6">
                @include('backend.pages.partials.pages-header-buttons')
            </div>
        </div>

        <div class="table-parent py-4">
            <div class="table-responsive data-table-wrapper">
                <table id="pages-table" class="table table-striped table-bordered nowrap text-center">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.pages.table.title') }}</th>
                            <th>{{ trans('labels.backend.pages.table.status') }}</th>
                            <th>{{ trans('labels.backend.pages.table.createdat') }}</th>
                            <th>{{ trans('labels.backend.pages.table.createdby') }}</th>
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
           $('#pages-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.pages.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'title', name: '{{config('module.pages.table')}}.title'},
                    {data: 'status', name: '{{config('module.pages.table')}}.status'},
                    {data: 'created_at', name: '{{config('module.pages.table')}}.created_at'},
                    {data: 'created_by', name: 'users.name'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
            });
    });
</script>
@endsection
