
  <div class="row my-3">
        {{ Form::label('title', trans('validation.attributes.backend.pages.title'), ['class' => 'col-lg-2 control-label text-center required']) }}

        <div class="col-lg-10">
            {{ Form::text('title', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div>

      <div class="row my-3">
        {{ Form::label('description', trans('validation.attributes.backend.pages.description'), ['class' => 'col-lg-2 control-label text-center required']) }}

        <div class="col-lg-10">
            {{ Form::textarea('description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.pages.description')]) }}
        </div><!--col-lg-3-->
    </div>

      <div class="row my-3">
        {{ Form::label('cannonical_link', trans('validation.attributes.backend.pages.cannonical_link'), ['class' => 'col-lg-2 control-label text-center']) }}

        <div class="col-lg-10">
            {{ Form::text('cannonical_link', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.cannonical_link')]) }}
        </div><!--col-lg-10-->
    </div>

      <div class="row my-3">
        {{ Form::label('seo_title', trans('validation.attributes.backend.pages.seo_title'), ['class' => 'col-lg-2 control-label text-center']) }}

        <div class="col-lg-10">
            {{ Form::text('seo_title', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.seo_title')]) }}
        </div><!--col-lg-10-->
    </div>

      <div class="row my-3">
        {{ Form::label('seo_keyword', trans('validation.attributes.backend.pages.seo_keyword'), ['class' => 'col-lg-2 control-label text-center']) }}

        <div class="col-lg-10">
            {{ Form::text('seo_keyword', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.seo_keyword')]) }}
        </div><!--col-lg-10-->
    </div>

      <div class="row my-3">
        {{ Form::label('seo_description', trans('validation.attributes.backend.pages.seo_description'), ['class' => 'col-lg-2 control-label text-center']) }}

        <div class="col-lg-10">
            {{ Form::textarea('seo_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.pages.seo_description')]) }}
        </div><!--col-lg-3-->
    </div>

      <div class="row my-3">
        {{ Form::label('status', trans('validation.attributes.backend.pages.is_active'), ['class' => 'col-lg-2 control-label text-center']) }}

        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                    @if(isset($page))
                    {{ Form::checkbox('status', 1, ($page->status == 1) ? true : false )  }}
                    @else
                    {{ Form::checkbox('status', 1, true ) }}
                    @endif
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div><!--col-lg-3-->
    </div>

