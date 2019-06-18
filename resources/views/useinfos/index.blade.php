@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Useinfo
          <a class="btn btn-success float-xs-right" href="{{ route('useinfos.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($useinfos->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>User_name</th> <th>User_gender</th> <th>User_age</th> <th>Photo</th> <th>Token</th> <th>Password</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($useinfos as $useinfo)
              <tr>
                <td class="text-xs-center"><strong>{{$useinfo->id}}</strong></td>

                <td>{{$useinfo->user_name}}</td> <td>{{$useinfo->user_gender}}</td> <td>{{$useinfo->user_age}}</td> <td>{{$useinfo->photo}}</td> <td>{{$useinfo->token}}</td> <td>{{$useinfo->password}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('useinfos.show', $useinfo->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('useinfos.edit', $useinfo->id) }}">
                    E
                  </a>

                  <form action="{{ route('useinfos.destroy', $useinfo->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $useinfos->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
