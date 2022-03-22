<div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <form class="form-horizontal" action="{{ route('items.store')}}" method="post" enctype="multipart/form-data" novalidate>
            @csrf
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="text" class="form-control" placeholder="Name" name="name" data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                        <optgroup label="{{$category->name}}">
                                            @foreach ($category->children as $child)
                                            <option value="{{$child->id}}"> {{$child->name}} </option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Price" name="price" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <textarea type="text" class="form-control" placeholder="Detail" name="detail" data-validation-required-message="This field is required"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="controls col-sm-12 data-field-col">
                                    <input type="file" class="form-control" placeholder="Image" name="image" data-validation-required-message="This field is required">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary" type="submit">Add Data</button>
                </div>
            </div>
        </form>
    </div>
</div>