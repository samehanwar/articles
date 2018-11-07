@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Articles List
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard </a></li>
                <li class="active">articles</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header" style="margin-bottom:30px;border-bottom:1px solid #dedede;">
                    @include('auth::partials._success')
                    <h3 class="box-title">Articles Table</h3>
                    @hasrole('Admin')
                    <a href="{{url('/auth/article/create')}}">
                      <button class="btn btn-info pull-right"><i class="fa fa-plus"></i> </button>
                    </a>
                    @endhasrole
                  </div>
                  <!-- /.box-header -->
                  @hasrole('Article Viewer')
                    <div class="box-body">
                      <table id="articlesList" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Article Title</th>
                          <th>Details</th>
                          <th>Date Created</th>
                          <th>actions</th>
                        </tr>
                        </thead>
                      </table>
                     </div>
                  @else
                    <div class="box-body">
                      <table id="articlesList" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Article Title</th>
                          <th>Details</th>
                          <th>Date Created</th>
                          <th>actions</th>
                        </tr>
                        </thead>
                      </table>
                     </div>
                  @endhasrole
                </div>
              </div>
            </div>
        </section>
    </div>

@endsection
