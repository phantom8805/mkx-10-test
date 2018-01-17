@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
        <thead>
          <tr>
            <th class="col-sm-2">Code</th>
            <th class="col-sm-10">Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($diagnoses as $diagnos)  
          <tr>
            <td class="col-sm-2">{{$diagnos->code}}</td>
            <td class="col-sm-10">{{$diagnos->title}}</td>
          </tr>
          </a>
          @endforeach
        </tbody>
      </table>
  </div>
  <div class="container text-center">
  	{{ $diagnoses->links() }}
  </div>
@endsection