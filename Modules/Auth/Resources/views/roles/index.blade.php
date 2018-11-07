@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Role Names
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    @include('auth::partials._success')
                    <h3 class="box-title">User's Roles</h3>
                    <a href="{{url('/auth/role/create')}}">
                      <button class="btn btn-info pull-right"><i class="fa fa-plus"></i> </button>
                    </a>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="rolesList" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date created</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>

@endsection
