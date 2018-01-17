@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
        <thead>
          <tr>
            <th class="col-sm-2">Code</th>
            <th class="col-sm-10">Name</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)  
          <tr>
            <td class="col-sm-2">{{$category->code}}</td>
            <td class="col-sm-10">{{$category->title}}</td>
            <td>
                <a href="{{$preLink ?? ''}}/{{$linkParam}}/{{$category['id']}}">
                    <i class="glyphicon glyphicon-eye-open"></i></i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection