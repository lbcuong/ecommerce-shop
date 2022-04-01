<div class="modal fade text-left" id="modal-create-edit-user" tabindex="-1" role="dialog" aria-labelledby="header"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h5 class="modal-title" name="header" id="header"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-create-edit-user">
                <input type="hidden" class="form-control" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                    <span class="text-danger" id="name-input-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        id="email">
                                    <span class="text-danger" id="email-input-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Password" name="password"
                                        id="password">
                                    <span class="text-danger" id="password-input-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Confirm Password"
                                        name="confirm_password" id="confirm-password">
                                    <span class="text-danger" id="confirm-password-input-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-6 col-sm-6">
                        <div class="form-group">
                            <label>Role</label>
                            <div class="controls col-sm-12 data-field-col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="customer"
                                        value="customer" checked>
                                    <label class="form-check-label" for="customer">
                                        Customer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
