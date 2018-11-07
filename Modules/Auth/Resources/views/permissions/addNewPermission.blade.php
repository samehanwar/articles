@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                create new permission
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">new Permission</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">

                      @if(isset($permission))
                          <h3 class="box-title">Update permission</h3>
                          </div>
                          <form method="POST" action="{{ url('/auth/permission/update', $permission->id) }}">
                          @method('PUT')
                          @csrf
                      @else
                          <h3 class="box-title">Create New permission</h3>
                          </div>
                          <form method="POST" action="{{ url('/auth/permission/store') }}">
                          @csrf
                      @endif
                        <div class="box-body">
                          <div class="form-group clearfix" style="margin:7px 5px 30px;">
                              <label for="name" class="col-sm-2 col-form-label text-md-right">Permission Name</label>

                              <div class="col-sm-10">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                  @if(isset($permission))
                                      value="{{ $permission->name }}"
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
