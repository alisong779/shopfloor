<div class="row">
    <div class=col-12>

        <div class="card-header">
            Add Incident Report
        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="usr_email">Your Email</label>
                        <input type="email" class="form-control" id="usr_email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="usr_name">Your Name</label>
                        <input type="text" class="form-control" id="usr_name" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" id="desc" placeholder="Short Description">
                </div>
                <div class="form-group">
                    <label for="inc_details">Details</label>
                    <input type="textarea" class="form-control" id="inc_details" placeholder="Describe the Incident in detail">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inc_date">Date</label>
                        <input type="date" class="form-control" id="inc_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inc_time">Time</label>
                        <input type="time" class="form-control" id="inc_time">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inc_location">Location of Incident</label>
                        <select id="inc_location" class="form-control">
                            <option selected>Choose...</option>
                            <option>Florida</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Agree to Digital Signature
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Report</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            Incident Reporting
        </div>
    </div>
</div>
</div>