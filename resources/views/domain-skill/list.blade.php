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
  <h2>soft</h2>
  <a class="btn btn-primary" href="{{ action('FrontEnd\master\SoftSkillController@create') }}">create</a>
 <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($SoftSkills as $SoftSkill)
      <tr>
        <td>{{ $SoftSkill->title }}</td>
        <td> <img src="{{ url($SoftSkill->image) }}" height="30" alt=""></td>
        <td>
            <a href="{{ action('FrontEnd\master\SoftSkillController@edit',$SoftSkill->id) }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>



<script src="{{ url('/assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('benefits');
    CKEDITOR.replace('description');
</script>