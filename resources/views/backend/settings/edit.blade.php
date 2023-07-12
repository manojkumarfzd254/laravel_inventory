@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.settings.management') . ' | ' . trans('labels.backend.settings.edit'))

@section('content')
<div class="p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
<div class="p-3 bg-slate-200">
{{ Form::model($setting, ['route' => ['admin.settings.update', $setting], 'class' => 'form-horizontal',
    'role' => 'form', 'method' => 'PATCH','files' => true, 'id' => 'edit-setting']) }}
<div class="box box-info">
	<div class="box-header mb-3" style="margin-top: -20px;" >
		<b class="box-title">{{ trans('labels.backend.settings.edit') }}</b>
	</div>
	<!-- /.box-header -->
	<div class="box-body setting-block">
		<!-- Nav tabs -->
		<ul id="myTab" class="nav nav-tabs setting-tab-list nav" role="tablist">
			<li role="presentation" class="nav-item active">
				<a class="nav-link active" href="#tab1" aria-controls="home" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.seo') }}</a>
			</li>
			<li role="presentation nav-item">
				<a class="nav-link" href="#tab2" aria-controls="1" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.companydetails') }}</a>
			</li>
			<li role="presentation nav-item">
				<a class="nav-link" href="#tab3" aria-controls="2" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.mail') }}</a>
			</li>
			<li role="presentation nav-item">
				<a class="nav-link" href="#tab4" aria-controls="3" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.footer') }}</a>
			</li>
			<li role="presentation nav-item">
				<a class="nav-link" href="#tab5" aria-controls="4" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.terms') }}</a>
			</li>
			<li role="presentation nav-item">
				<a class="nav-link" href="#tab6" aria-controls="5" role="tab" data-toggle="tab">{{ trans('labels.backend.settings.google') }}</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div id="myTabContent" class="tab-content setting-tab">
			<div role="tabpanel" class="tab-pane active" id="tab1">
				<div class="row my-3">
					{{ Form::label('logo', trans('validation.attributes.backend.settings.sitelogo'), ['class' => 'col-lg-2 control-label text-right']) }}
					<div class="col-lg-4">
						<div class="form-group lb-file-input">
							{!! Form::file('logo', array('class'=>'form-control inputfile inputfile-1 opacity-0' )) !!}
							<label for="logo" class="lb-file-label" >
								<i class="fa fa-upload"></i>
								<span>Choose a file</span>
							</label>
						</div>
						</div>
                        <div class="col-lg-6">
						<div class="img-remove-logo">
							@if($setting->logo)
							<img height="50" width="50" src="/{{ $setting->logo }}">
							<i id="remove-logo-img" class="fa fa-times remove-logo" data-id="logo" aria-hidden="true"></i>
							@endif
						</div>
					</div>
					<!--col-lg-10-->
				</div>
				<!--form control-->

				<div class="row my-3">
					{{ Form::label('favicon', trans('validation.attributes.backend.settings.favicon'), ['class' => 'col-lg-2 control-label text-right'])}}
					<div class="col-lg-4">
						<div class="form-group lb-file-input">
							{!! Form::file('favicon', array('class'=>'form-control inputfile inputfile-1 opacity-0' )) !!}
							<label for="favicon" class="lb-file-label">
								<i class="fa fa-upload"></i>
								<span>Choose a file</span>
							</label>
						</div>
                    </div>
                    <div class="col-lg-6">
						<div class="img-remove-favicon">
							@if($setting->favicon)
							<img height="50" width="50" src="{{ Storage::disk('public')->url('img/favicon/' . $setting->favicon) }}">
							<i id="remove-favicon-img" class="fa fa-times remove-logo" data-id="favicon" aria-hidden="true"></i>
							@endif
						</div>
					</div>
					<!--col-lg-10-->
				</div>
				<!--form control-->
                <div class="row my-3">
					{{ Form::label('seo_title', trans('validation.attributes.backend.settings.metatitle'), ['class' => 'col-lg-2 control-label text-right'])}}
					<div class="col-lg-10">
						{{ Form::text('seo_title', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.metatitle')])}}
					</div>
					<!--col-lg-10-->
				</div>
				<!--form control-->

				<div class="row my-3">
					{{ Form::label('seo_keyword', trans('validation.attributes.backend.settings.metakeyword'), ['class' => 'col-lg-2 control-label text-right'])}}
					<div class="col-lg-10">
						{{ Form::textarea('seo_keyword', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.metakeyword'),
						'rows' => 2]) }}
					</div>
					<!--col-lg-3-->
				</div>
				<!--form control-->

				<div class="row my-3">
					{{ Form::label('seo_description', trans('validation.attributes.backend.settings.metadescription'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::textarea('seo_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.metadescription'),
						'rows' => 2]) }}
					</div>
					<!--col-lg-3-->
				</div>
				<!--form control-->
			</div>
			<div role="tabpanel" class="tab-pane" id="tab2">
				<div class="row my-3">
					{{ Form::label('mobile', trans('validation.attributes.backend.settings.companydetails.mobile'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('mobile', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.companydetails.mobile'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('email', trans('validation.attributes.backend.settings.companydetails.email'), ['class'
					=> 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('email', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.companydetails.email'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('timing', trans('validation.attributes.backend.settings.companydetails.timing'), ['class'
					=> 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('timing', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.companydetails.timing'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('contact_description', trans('validation.attributes.backend.settings.companydetails.contact_description'), ['class'
					=> 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('contact_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.companydetails.contact_description'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('location', trans('validation.attributes.backend.settings.companydetails.location'), ['class'
					=> 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('location', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.companydetails.location'),
						'rows' => 2]) }}
					</div>
				</div>
				<!--form control-->
			</div>
			<div role="tabpanel" class="tab-pane" id="tab3">
				<div class="row my-3">
					{{ Form::label('from_name', trans('validation.attributes.backend.settings.mail.fromname'), ['class' => 'col-lg-2 control-label text-right'])
					}}

					<div class="col-lg-10">
						{{ Form::text('from_name', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.mail.fromname'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('from_email', trans('validation.attributes.backend.settings.mail.fromemail'), ['class' => 'col-lg-2 control-label text-right'])
					}}

					<div class="col-lg-10">
						{{ Form::text('from_email', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.mail.fromemail'),
						'rows' => 2]) }}
					</div>
				</div>
				<!--form control-->
			</div>
			<div role="tabpanel" class="tab-pane" id="tab4">
				<div class="row my-3">
					{{ Form::label('footer_text', trans('validation.attributes.backend.settings.footer.text'), ['class' => 'col-lg-2 control-label text-right'])
					}}

					<div class="col-lg-10">
						{{ Form::text('footer_text', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.footer.text'),
						'rows' => 2]) }}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('copyright_text', trans('validation.attributes.backend.settings.footer.copyright'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('copyright_text', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.footer.copyright'),
						'rows' => 2]) }}
					</div>
				</div>
				<!--form control-->
			</div>
			<div role="tabpanel" class="tab-pane" id="tab5">
				<div class="row my-3">
					{{ Form::label('name', trans('validation.attributes.backend.settings.termscondition.name'), ['class' => 'col-lg-2 control-label text-right'])}}

					<div class="col-lg-10">
						{{ Form::text('name', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.termscondition.name')])}}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('version', trans('validation.attributes.backend.settings.termscondition.version'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('version', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.termscondition.version')])}}
					</div>
				</div>
				<div class="row my-3">
					{{ Form::label('description', trans('validation.attributes.backend.settings.termscondition.description'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::text('description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.termscondition.description')])}}
					</div>
				</div>

				<!--form control-->
			</div>
			<div role="tabpanel" class="tab-pane" id="tab6">
				<div class="row my-3">
					{{ Form::label('google_analytics', trans('validation.attributes.backend.settings.google.analytic'), ['class' => 'col-lg-2 control-label text-right']) }}

					<div class="col-lg-10">
						{{ Form::textarea('google_analytics', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.settings.google.analytic')])}}
					</div>
				</div>
				<!--form control-->
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-10 footer-btn text-center mt-3">
				{{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!--box-->

<!-- hidden setting id variable -->
<input type="hidden" data-id="{{ $setting->id }}" id="setting">
{{ Form::close() }}
@endsection
@section('bottom-scripts')
<script>

</script>
@endsection
