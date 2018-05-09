@extends( 'layouts.app' )
@section( 'content' )
    @if( count( $messages ) )
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Sr. No.</th>
                <th scope="col">Sender's Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $messages as $message )
                <tr class="table-light">
                    <td>{{$message->id}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection