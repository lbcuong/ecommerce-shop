<div class="modal fade text-left" id="modal-create-edit-item" tabindex="-1" role="dialog" aria-labelledby="header"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h5 class="modal-title" name="header" id="header"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-create-edit-item" enctype="multipart/form-data">
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
                        <div class="col-6 col-sm-12">
                            <div class="form-group">
                                <label>Parent Category</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        {{ $traverseSelect($categories) }}
                                    </select>
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
