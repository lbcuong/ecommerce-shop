<div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <form method="post" id="form-item-create" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id">
        <div class="add-new-data">
            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Add New Item</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                    <span class="text-danger" id="name-input-error"></span>
                                </div>
                            </div>
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
                            <div class="form-group">
                                <label>Price</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Price" name="price"
                                        id="price">
                                    <span class="text-danger" id="price-input-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity"
                                        id="quantity">
                                    <span class="text-danger" id="quantity-input-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <textarea type="text" class="form-control" placeholder="Detail" name="detail" id="detail"></textarea>
                                    <span class="text-danger" id="detail-input-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="file" class="form-control" placeholder="Image" name="image"
                                        id="image" value="{{ $item->image }}">
                                    <span class="text-danger" id="image-input-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary" type="submit" id="form-item-submit">Add Data</button>
                </div>
            </div>
        </div>
    </form>
</div>
