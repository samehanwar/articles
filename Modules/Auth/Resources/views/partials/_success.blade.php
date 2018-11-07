

@if(Session::has('successMsg'))
    <div class="alert alert-success">
        <button class="close" data-dismiss="alert"></button>
        <p> {{Session::get('successMsg')}} </p> 
    </div>
@endif

