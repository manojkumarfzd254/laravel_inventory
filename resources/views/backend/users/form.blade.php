<div class="box-body">

    <div class="row my-3">
        {{ Form::label('name', trans('Name'), ['class' => 'col-lg-2 text-right control-label required']) }}
        <div class="col-lg-8">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('Name'), 'required' => 'required']) }}
        </div>
        <div class="col-lg-2"></div>
    </div>

 

    <div class="row my-3">
        {{ Form::label('email', trans('Email'), ['class' => 'col-lg-2 text-right required']) }}
        <div class="col-lg-8">
            {{ Form::email('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('Email'), 'required' => 'required']) }}
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row my-3">
        {{ Form::label('profile_photo_path', trans('Image'), ['class' => 'col-lg-2 text-right required']) }}
        @if(isset($user->profile_photo_path))
    
            <div class="col-lg-1">
                <img src="{{ asset($user->profile_photo_path) }}"  width="50">
            </div>
            <div class="col-lg-7">
                    <input type="file" name="profile_photo_path" id="profile_photo_path" class="form-control" />
            </div>
            @else
            <div class="col-lg-8">
                <input type="file" name="profile_photo_path" id="profile_photo_path" class="form-control" required />
            </div>
            @endif
        <div class="col-lg-2"></div>
    </div>

    <div class="row my-3">
        {{ Form::label('status', trans('Status'), ['class' => 'col-lg-2 text-right required']) }}
        <div class="col-lg-8">
            @if(isset($user->status))
              {{ Form::select('status', ['Enable' => 'Enable', 'Disable' => 'Disable'], $user->status, ['class' => 'form-control box-size', 'placeholder' => trans('Select one'), 'required' => 'required']); }}
              @else
             {{ Form::select('status', ['Enable' => 'Enable', 'Disable' => 'Disable'], null, ['class' => 'form-control box-size', 'placeholder' => trans('Select one'), 'required' => 'required']); }}
        
            @endif
            </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row my-3">
        {{ Form::label('password', trans('Password'), ['class' => 'col-lg-2 text-right required']) }}
        <div class="col-lg-8">
            {{ Form::password('password', ['class' => 'form-control box-size']) }}
        </div>
        <div class="col-lg-2"></div>
    </div>

</div>
