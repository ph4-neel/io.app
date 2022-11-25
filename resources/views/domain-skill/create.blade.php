
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hard Skills</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hard create / Edit</h2>
  <a class="btn btn-primary" href="{{ action('FrontEnd\master\SoftSkillController@index') }}">List</a>
  @if(isset($SoftSkill))
    {!! Form::model($SoftSkill,['url' => action('FrontEnd\master\SoftSkillController@update',$SoftSkill->id),'method' => 'put',"enctype"=>"multipart/form-data"]) !!}
@else
    {!! Form::open(['url' => action('FrontEnd\master\SoftSkillController@store'),'method' => 'post',"enctype"=>"multipart/form-data"]) !!}
@endif

    <div class="row">
         <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'eg:Hard Skills']) !!}
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('benefits', 'benefits') !!}
                {!! Form::textArea('benefits', null, ['class' => 'form-control','placeholder'=>'Instructions']) !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textArea('description', null, ['class' => 'form-control','placeholder'=>'Instructions']) !!}
            </div>
        </div>
    </div>

    <div class="box-footer" align="center">
        <button type="submit" class="btn btn-info">Save</button>
    </div>

{!! Form::close() !!}
</div>

</body>
</html>



<script src="{{ url('/assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('benefits');
    CKEDITOR.replace('description');
</script>