@extends('auth::layout.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @if(isset($article))
                     View Article
                @else
                    Create New Article
                @endif
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">new article</li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                      @include('auth::partials._errors')
                      <div class="box-header with-border">
                        @if(isset($article))
                            <h3 class="box-title">View Item</h3>
                        @else
                            <h3 class="box-title">New Item</h3>
                        @endif
                      </div>
                      <form class="form-horizontal" method="post" action={{url('/auth/article/store')}}>
                        {{ csrf_field() }}
                        <div class="box-body">

                          @hasrole('Admin')
                          <div class="form-group" style="padding-right:20px;">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Title" @if(isset($article->name)) value={{$article->name}}  @endif>
                            </div>

                          </div>
                          @else

                          @endhasrole
                          <div class="form-group" style="margin-top:40px;padding-right:20px;">
                            <label for="details" class="col-sm-2 control-label">Details</label>
                              <div class="box-body pad col-sm-10">
                                  <textarea class="textarea" name="body" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" @if(isset($article->body))  @endif>@if(isset($article->body)) {{$article->body}} @endif</textarea>
                              </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer" style="text-align:center;">
                          <button type="submit" class="btn btn-info pull-right" @if(isset($article)) disabled @endif>Save</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
