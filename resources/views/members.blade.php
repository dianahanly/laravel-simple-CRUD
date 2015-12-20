@extends('main-page')

@section('content')
    <!-- Create Member Form... -->
    <div class="content">
        <div class="panel-body">

        <!-- New Member Form -->
        <form action="member" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Member Name -->
            <div class="form-group">
                <label for="member-name" class="col-sm-3 control-label">Member</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="member-name" class="form-control">
                </div>
            </div>

            <!-- Add Member Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Member
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if (count($members) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Member List
            </div>

            <div class="panel-body">
                <table class="table table-striped member-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Member Name</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <!-- Member Name -->
                                <td class="table-text">
                                    <div>{{ $member->name }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="member/{{ $member->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-default">Delete Member</button>
                                    </form>

                                <!-- Update Button -->
                                    <form action="edit-member/{{ $member->id }}" method="POST">
                                        {{ csrf_field() }}

                                        <button class="btn btn-default">Update Member</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
@endsection