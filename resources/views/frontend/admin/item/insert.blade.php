@extends('layout')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="users-edit">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <form novalidate>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Category</label>
                                                        <input type="text" class="form-control" placeholder="Name" value="Angelo Sashington" required data-validation-required-message="This name field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Group</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Price</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Detail</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Image</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                                <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                    <!-- users edit Info form start -->
                                    <form novalidate>
                                        <div class="row mt-1">
                                            <div class="col-12 col-sm-6">
                                                <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Birth date</label>
                                                                <input type="text" class="form-control birthdate-picker" required placeholder="Birth date" data-validation-required-message="This birthdate field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Mobile</label>
                                                        <input type="text" class="form-control" value="&#43;6595895857" placeholder="Mobile number here..." data-validation-required-message="This mobile number is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control" required placeholder="Website here..." value="https://rowboat.com/insititious/Angelo" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Languages</label>
                                                    <select class="form-control" id="users-language-select2" multiple="multiple">
                                                        <option value="English" selected>English</option>
                                                        <option value="Spanish">Spanish</option>
                                                        <option value="French">French</option>
                                                        <option value="Russian">Russian</option>
                                                        <option value="German">German</option>
                                                        <option value="Arabic" selected>Arabic</option>
                                                        <option value="Sanskrit">Sanskrit</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" checked value="false">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    Male
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" value="false">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    Female
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" value="false">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    Other
                                                                </div>
                                                            </fieldset>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Options</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" checked name="customCheck1" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1">Email</label>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" checked name="customCheck2" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">Message</label>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" name="customCheck3" id="customCheck3">
                                                                    <label class="custom-control-label" for="customCheck3">Phone</label>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" value="A-65, Belvedere Streets" required placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control" required placeholder="Address Line 2" data-validation-required-message="This Address field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control" required placeholder="postcode" value="1868" data-validation-required-message="This Postcode field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>State</label>
                                                        <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control" required value="United Kingdom" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit Info form ends -->
                                </div>
                                <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                    <!-- users edit socail form start -->
                                    <form novalidate>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">

                                                <fieldset>
                                                    <label>Twitter</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                                    </div>

                                                    <label>Facebook</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                                    </div>
                                                    <label>Instagram</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Github</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="https://www.github.com/madop818" placeholder="https://www.github.com/" aria-describedby="basic-addon9">
                                                </div>
                                                <label>Codepen</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="https://www.codepen.com/adoptism243" placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                                                </div>
                                                <label>Slack</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.slack.com/" aria-describedby="basic-addon11">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit socail form ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>
</div>
@endsection