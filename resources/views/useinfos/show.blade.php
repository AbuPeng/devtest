@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Useinfo / Show #{{ $useinfo->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('useinfos.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('useinfos.edit', $useinfo->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>User_name</label>
<p>
	{{ $useinfo->user_name }}
</p> <label>User_gender</label>
<p>
	{{ $useinfo->user_gender }}
</p> <label>User_age</label>
<p>
	{{ $useinfo->user_age }}
</p> <label>Photo</label>
<p>
	{{ $useinfo->photo }}
</p> <label>Token</label>
<p>
	{{ $useinfo->token }}
</p> <label>Password</label>
<p>
	{{ $useinfo->password }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
