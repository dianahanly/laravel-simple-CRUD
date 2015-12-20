@extends('main-page')

@section('content')
<div class="content">
    <div class="panel-body">

    <!-- New Task Form -->
    <form action="update/{{ $member->id }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
        <div class="form-group">
            <label for="member-name" class="col-sm-3 control-label">Member</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="member-name" class="form-control" value="{{ $member->name }}">
            </div>
        </div>

        <!-- Edit Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Edit Member
                </button>
            </div>
        </div>
    </form>
</div>
@endsection