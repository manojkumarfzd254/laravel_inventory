	@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.users.management') . ' | ' . trans('labels.backend.users.show'))
@section('page-header')
<div class="w-100 d-flex justify-content-between align-items-center pt-3 px-3" style="border-bottom:2px solid #ccc;">
    <p><b class="lbindectionName text-dark">User Management</b> / View User</p>
    <p></p>
 </div>
@endsection

@section('content')
<div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"></div>
            <div class="col-md-6"> @include('backend.users.partials.actions')</div>
        </div>

    <div class="border-top mt-3">
		<div role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="details" class="nav-item">
					<a href="#details" class="nav-link active" role="tab" data-toggle="tab">{{ trans('labels.backend.users.shows.tabs.titles.details') }}</a>
				</li>
				<li role="other" class="nav-item">
					<a href="#other" aria-controls="other" class="nav-link" role="tab" data-toggle="tab">{{ trans('labels.backend.users.shows.tabs.titles.other') }}</a>
				</li>
			</ul>
            <div class="tab-content pt-4">
				<div role="tabpanel" class="tab-pane active" id="details">
					@include('backend.users.show.tabs.details')
				</div>

				<div role="tabpanel" class="tab-pane fade" id="other">
					@include('backend.users.show.tabs.other')
				</div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
