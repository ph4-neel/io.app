@extends('admin.layouts.master')

@section('title','Skills')

@section('content')

    @if(isset($Skill))
        {!! Form::model($Skill,['url' => action('Backend\Master\SkillsController@update',$Skill->id),'method' => 'put',"enctype"=>"multipart/form-data"]) !!}
    @else
        {!! Form::open(['url' => action('Backend\Master\SkillsController@store'),'method' => 'post',"enctype"=>"multipart/form-data"]) !!}
    @endif

    @component('admin.layouts.components.top-save',['title'=>'Soft Skill'])
        <button type="submit" class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span class="fas fa-save me-2"></span>Save Soft Skill</button>
    @endcomponent

    <div class="row g-3 mb-3">
        <div class="col-md-12 col-xxl-12">
            @component('admin.layouts.components.card',['title'=>'Soft Skill'])
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            <div class="input-group has-validation">
                                {!! Form::text('title', null, ['class' => 'form-control'.($errors->has('title')?' is-invalid' : null),'placeholder'=>'eg:Key Skills']) !!}
                                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            {!! Form::label('image', 'Image') !!}
                            <div class="input-group has-validation">
                                {!! Form::file('image', null, ['class' => 'form-control'.($errors->has('image')?' is-invalid' : null)]) !!}
                                @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            {!! Form::label('type', 'Type') !!}
                            <div class="input-group has-validation">
                                <div class="radio">
                                    <label>{!! Form::radio('type','soft',true) !!} Soft</label> 
                                    <label>{!! Form::radio('type','hard',false) !!} Hard</label> 
                                    <label>{!! Form::radio('type','tool',false) !!} Tool</label> 
                                    <label>{!! Form::radio('type','tech',false) !!} Tech</label> 
                                    <label>{!! Form::radio('type','domain',false) !!} Domain</label> 
                                    <label>{!! Form::radio('type','key',false) !!} Key</label> 
                                </div>
                                @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('benefits', 'benefits') !!}
                            {!! Form::textArea('benefits', null, ['class' => 'form-control'.($errors->has('benefits')?' is-invalid' : null),'placeholder'=>'Instructions']) !!}
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textArea('description', null, ['class' => 'form-control'.($errors->has('description')?' is-invalid' : null),'placeholder'=>'Instructions']) !!}
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
{!! Form::close() !!}

@endsection

@section('footer-script')
<script src="{{ asset('/assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('benefits');
    CKEDITOR.replace('description');
</script>
@endsection