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
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Category</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach ($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach ($category->children as $child)
                                                    <option value="{{ $child->id }}"> {{ $child->name }} </option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <span class="text-danger" id="category-input-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Price</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Price" name="price"
                                        id="price">
                                    <span class="text-danger" id="price-input-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Quantity</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity"
                                        id="quantity">
                                    <span class="text-danger" id="quantity-input-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Detail</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <textarea type="text" class="form-control" placeholder="Detail" name="detail" id="detail"></textarea>
                                    <span class="text-danger" id="detail-input-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <label class="btn btn-primary cursor-pointer w-100"
                                        for="image">Upload Image</label>
                                    <input type="file" name="image" id="image" hidden>
                                    <span class="text-danger" id="image-input-error"></span>
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
