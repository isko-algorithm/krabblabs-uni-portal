@section('leaveForm')
    <form method="post" action="{{url('/attendances/leaves')}}">
        <div class="row">
            <div class="col-md-6">
                <br />
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="leaveType">Leave Type:</label>
                    </div>
                    <div class="col-lg-9">
                        <select id="leaveType" name="leaveType" class="form-control">
                            <option value="0">Sick Leave</option>
                            <option value="1">Vacation Leave</option>
                            <option value="2">Maternity Leave</option>
                            <option value="3">Paternity Leave</option>
                            <option value="4">Bereavement Leave</option>
                            <option value="5">Leave Without Pay</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <br />
                <div class="row">
                    <div class="col-md-3">
                        <label for="leaveApprover">Approver: </label>
                    </div>
                    <div class="col-md-9">
                        <select id="leaveApprover" name="leaveApprover" class="form-control">
                            <option value="1">Jaime Samaniego</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-3">
                        <label for="leaveReason">Reason: </label>
                    </div>
                    <div class="col-md-9">
                        <textarea id="leaveReason" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="leaveRange">Select Dates</label>
                </div>
                <div class="col-md-12">
                    <div id="leaveCalendar"></div>
                </div>
            </div>
        </div>
    </form>
@endsection