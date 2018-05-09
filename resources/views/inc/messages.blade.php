@if( count( $errors ) )
    @foreach( $errors->all() as $error )
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

{{--If session( 'success' ) has a value when page is redirected from contact form page display the session( 'success' ) value--}}
@if( session( 'success' ) )
    <div class="alert alert-success">
        {{--Will display the value of session( 'success' )--}}
        {{session( 'success' )}}
    </div>
    @endif