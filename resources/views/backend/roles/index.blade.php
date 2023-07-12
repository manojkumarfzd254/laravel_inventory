@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.roles.management'))


@section('content')
  <div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.roles.management') }}</b></div>
            <div class="col-md-6">
                @include('backend.roles.partials.roles-header-buttons')
            </div>
        </div>

        <div class="table-parent py-4">
            <div class="table-responsive data-table-wrapper">
                <table id="roles-table" class="table table-striped table-bordered nowrap text-center">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.roles.table.role') }}</th>
                            <th>{{ trans('labels.backend.roles.table.permissions') }}</th>
                            <th>{{ trans('labels.backend.roles.table.number_of_users') }}</th>
                            <th>{{ trans('labels.backend.roles.table.sort') }}</th>
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
           $('#roles-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.roles.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'name', name: 'roles.name'},
                    {data: 'permissions', name: 'permissions.display_name', sortable: false},
                    {data: 'users', name: 'users', searchable: false, sortable: false},
                    {data: 'sort', name: 'roles.sort'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
            });
    });
</script>
@endsection
