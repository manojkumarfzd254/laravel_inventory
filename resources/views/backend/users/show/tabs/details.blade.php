<table class="table table-striped table-hover">
    <tr>
        <th width="100px">{{ trans('labels.backend.users.tabs.details.name') }}</th>
        <td>{!! $user->name !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.users.tabs.details.email') }}</th>
        <td>{!! $user->email !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.users.tabs.details.image') }}</th>
        <td><img src="{{ asset($user->profile_photo_path) }}" width="80px" height="80px" /></td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.users.tabs.details.status') }}</th>
        <td>{!! $user->status !!}</td>
    </tr>
</table>
