@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                create new User
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">new user</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Create New User</h3>
                      </div>
                      <form method="POST" action="{{ url('/auth/users/register') }}">
                          @csrf
                        <div class="box-body">
                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                              <label for="name" class="col-sm-2 col-form-label text-md-right">name</label>

                              <div class="col-sm-10">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                              <label for="name" class="col-sm-2 col-form-label text-md-right">username</label>

                              <div class="col-sm-10">
                                  <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" autofocus>

                                  @if ($errors->has('username'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>

                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                              <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>

                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                            <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>

                            <div class="col-sm-10">
                              <input type="password" id="password-confirm" class="form-control" name="password_confirmation" >

                            </div>
                          </div>

                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                            <label for="password-confirm" class="col-sm-2 control-label">User Roles</label>

                            <div class="col-sm-10">
                              <select name="role_id" class="form-control">
                                  @if(isset($roles))
                                      @foreach($roles as $role)
                                          <option value="{{$role->id}}"> {{ $role->name }} </option>
                                      @endforeach
                                  @endif
                              </select>
                            </div>
                          </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer" style="text-align:center;">
                          <button type="submit" class="btn btn-info pull-right">Register</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
