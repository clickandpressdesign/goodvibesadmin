<?php include('header.php');?>

<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">All Tracks</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Tracks</a>
                                    </li>
                                    <li class="breadcrumb-item active">Basic
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
             
                <!-- Basic table -->
                <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                                        <div class="mb-4">
                                            <label class="form-label" for="basic-icon-default-salary">Type</label>
                                             <div class="demo-inline-spacing">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked />
                                                    <label class="form-check-label" for="inlineRadio1">Free</label>
                                                </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Paid</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Prenium</label>
                                            </div>
                                    </div>
                                </div>
                                        <button type="button" class="btn btn-primary data-submit me-1">Save</button>
                                        <button type="button" class="btn btn-outline-secondary">Publish</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                
                
                </section>
            </div>
   
    <!-- END: Content-->
    <div class="md-1">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single File Upload</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        By default, dropzone is a multiple file uploader and does not have specific option allowing us to switch to
                                        single file uploading mode, but this functionality can be achieved by adding more options to the plugin
                                        settings, such as
                                        <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1.
                                        <code>maxFiles: 1</code> is used to tell dropzone that there should be only one file.
                                    </p>
                                    <form action="#" class="dropzone dropzone-area" id="dpz-single-file">
                                        <div class="dz-message">Drop files here or click to upload.</div>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include('footer.php');?>