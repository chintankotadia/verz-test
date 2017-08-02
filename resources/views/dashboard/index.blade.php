@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">Manage users</div>
                <div class="panel-body">
                    @include('partials.messages')
                    <br /><br />
                    <div class="advance-table">
                        <table class="table table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users) > 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center"> No user present.</td>
                                    </tr>
                                @endif  
                            </tbody>
                        </table>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
