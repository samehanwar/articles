@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                create new User's Role
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">new Role</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                        @if(isset($role))
                            <h3 class="box-title">Update User's Role</h3>
                            </div>
                            <form method="POST" action="{{ url('/auth/role/update', $role->id) }}">
                            @method('PUT')
                            @csrf
                        @else
                            <h3 class="box-title">Create New User's Role</h3>
                            </div>
                            <form method="POST" action="{{ url('/auth/role/store') }}">
                            @csrf
                        @endif
                      </div>

                        <div class="box-body">
                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                              <label for="name" class="col-sm-2 col-form-label text-md-right">Role Name</label>

                              <div class="col-sm-10">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    @if(isset($role))
                                        value="{{ $role->name }}"
                                    @else
                                        value="{{ old('name') }}"
                                    @endif
                                   autofocus>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                            <hr/>
                            <div class="form-group clearfix" style="margin:7px 5px 30px;">
                              <label for="name" class="col-sm-2 col-form-label text-md-right">permissions</label>
                              <div class="col-sm-10">
                                  <ul class="list-group" style="list-style:none;">
                                      @if(isset($permission) && count($permission) > 0)
                                          @foreach($permission as $item)
                                              <li class="list-group-item"> <input type="checkbox" name="permission[]" value="{{ $item->id }}"
                                                @if(isset($rolePermissions))
                                                  @foreach($rolePermissions as $permited)
                                                    @if($permited->permission_id == $item->id)
                                                        checked
                                                    @endif
                                                  @endforeach
                                                @endif
                                                 />  {{ $item->name }} </li>
                                          @endforeach
                                      @endif
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer" style="text-align:center;">
                          <button type="submit" class="btn btn-info pull-right">save</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
