@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">Manage users</div>
                <div class="panel-body">
                    @include('partials.messages')
                    <div class="advance-table">
                        <table id="users-table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Avatar</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    (function($){
        $('#users-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '{{ route('dashboard.users') }}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'mobile'},
                {data: 'photo', orderable: false, searchable: false},
                {data: 'created_at'},
                {data: 'updated_at'}
            ]
        });
    })(jQuery);
</script>
@endsection('scripts')
