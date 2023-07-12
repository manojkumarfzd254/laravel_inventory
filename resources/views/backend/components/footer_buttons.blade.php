<div class="card-footer">
    <div class="row ">
        <div class="col-12 text-center">
            {{ link_to_route($cancelRoute, trans('buttons.general.cancel'), [], ['class' => 'btn btn-sm over-danger']) }}

            {{ Form::submit((isset($id)) ? trans('buttons.general.crud.update') : trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-sm']) }}
        </div>
    </div>
</div>
