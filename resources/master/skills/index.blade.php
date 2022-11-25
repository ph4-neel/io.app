@extends('admin.layouts.master')

@section('title','Skill')

@section('content')

  @component('admin.layouts.components.top-save',['title'=>'Skill'])
    <a href="{{ action('Backend\Master\SkillsController@create') }}" class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span class="fas fa-plus me-2"></span>Add Skill</a>
  @endcomponent

  <div class="row g-3 mb-3">
    <div class="col-md-12 col-xxl-12">
      @component('admin.layouts.components.card',['title'=>'Skills List'])
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Skill Type</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Skills as $Skill)
                <tr>
                    <td>{{ $Skill->type }}</td>
                    <td>{{ $Skill->title }}</td>
                    <td> <img src="{{ url($Skill->image) }}" height="30" alt=""></td>
                    <td>
                      <a href="{{ action('Backend\Master\SkillsController@edit',$Skill->id) }}" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      @endcomponent
    </div>
</div>
@endsection