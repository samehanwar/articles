@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Users Lists
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Users</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    @include('auth::partials._success')
                    <h3 class="box-title">Users List Table</h3>
                    <a href="{{url('/auth/users/create')}}">
                      <button class="btn btn-info pull-right"><i class="fa fa-plus"></i> </button>
                    </a>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="userSList" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date created</th>
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
