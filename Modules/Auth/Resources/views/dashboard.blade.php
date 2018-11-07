@extends('auth::layout.master')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-body" style="padding:40px; font-size:19px;">
                    @if(session('unauthorize'))
                        <div class="alert alert-danger" role="alert">
                            {{session('unauthorize')}}
                        </div>
                    @endif
                </div>

            </div>
        </div>
      </div>
    </div>
</div>
@endsection
