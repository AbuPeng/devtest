@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Useinfo /
          @if($useinfo->id)
            Edit #{{ $useinfo->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($useinfo->id)
          <form action="{{ route('useinfos.update', $useinfo->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('useinfos.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="user_name-field">User_name</label>
                	<input class="form-control" type="text" name="user_name" id="user_name-field" value="{{ old('user_name', $useinfo->user_name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_gender-field">User_gender</label>
                    <input class="form-control" type="text" name="user_gender" id="user_gender-field" value="{{ old('user_gender', $useinfo->user_gender ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_age-field">User_age</label>
                    <input class="form-control" type="text" name="user_age" id="user_age-field" value="{{ old('user_age', $useinfo->user_age ) }}" />
                </div> 
                <div class="form-group">
                	<label for="photo-field">Photo</label>
                	<textarea name="photo" id="photo-field" class="form-control" rows="3">{{ old('photo', $useinfo->photo ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="token-field">Token</label>
                	<textarea name="token" id="token-field" class="form-control" rows="3">{{ old('token', $useinfo->token ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="password-field">Password</label>
                	<input class="form-control" type="text" name="password" id="password-field" value="{{ old('password', $useinfo->password ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('useinfos.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
