<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href={{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{url('bower_components/font-awesome/css/font-awesome.min.css')}}>
  <link rel="stylesheet" href={{url('bower_components/Ionicons/css/ionicons.min.css')}}>
  <link rel="stylesheet" href={{url('dist/css/AdminLTE.min.css')}}>
  <link rel="stylesheet" href={{url('dist/css/skins/skin-blue.min.css')}}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background:#f7f7f7;">

  <div style="margin-top:80px;">

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Admin Login</h3>
                  </div>
                  <form class="form-horizontal" method="POST" action="{{ url('/auth/login') }}">
                    @csrf
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}"  autofocus>
                          @if ($errors->has('username'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('username') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-4">
                          <div class="checkbox">
                            <a href="{{ route('password.request') }}"> Forget Password </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer" style="text-align:center;">
                      <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
            </div>
        </div>
    </section>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src={{url('bower_components/jquery/dist/jquery.min.js')}}></script>
  <script src={{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
  <script src={{url('dist/js/adminlte.min.js')}}></script>
  </body>
  </html>
