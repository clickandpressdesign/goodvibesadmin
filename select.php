<?php include('header.php');?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

   
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Select</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Select
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
             
                <!-- Select2 Start  -->
                <section class="basic-select2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Select2 Options</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Basic -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-basic">Basic</label>
                                            <select class="select2 form-select" id="select2-basic">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </select>
                                        </div>

                                        <!-- Nested -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-nested">Nested</label>
                                            <select class="select2 form-select" id="select2-nested">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL" selected>Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <!-- Multiple -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-multiple">Multiple</label>
                                            <select class="select2 form-select" id="select2-multiple" multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO" selected>Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL" selected>Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <!-- Icons -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-icons">Icons</label>
                                            <select data-placeholder="Select a state..." class="select2-icons form-select" id="select2-icons">
                                                <optgroup label="Social Media">
                                                    <option value="facebook" data-icon="facebook" selected>Facebook</option>
                                                    <option value="twitter" data-icon="twitter">Twitter</option>
                                                    <option value="linkedin" data-icon="linkedin">LinkedIN</option>
                                                    <option value="github" data-icon="github">GitHub</option>
                                                    <option value="instagram" data-icon="instagram">Instagram</option>
                                                    <option value="dribbble" data-icon="dribbble">Dribbble</option>
                                                    <option value="gitlab" data-icon="gitlab">GitLab</option>
                                                </optgroup>
                                                <optgroup label="File types">
                                                    <option value="pdf" data-icon="file">PDF</option>
                                                    <option value="word" data-icon="file-text">Word</option>
                                                    <option value="image" data-icon="image">Image</option>
                                                </optgroup>
                                                <optgroup label="Other">
                                                    <option value="figma" data-icon="figma">Figma</option>
                                                    <option value="chrome" data-icon="chrome">Chrome</option>
                                                    <option value="safari" data-icon="command">Safari</option>
                                                    <option value="slack" data-icon="slack">Slack</option>
                                                    <option value="youtube" data-icon="youtube">YouTube</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <!-- Disabled -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label">Disabled</label>
                                            <select class="select2 form-select" disabled>
                                                <option value="1">Option</option>
                                                <option value="2" selected>Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>

                                        <!-- Disabled Results -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-disabled-result">Disabled Results</label>
                                            <select class="select2 form-select" id="select2-disabled-result">
                                                <option value="1">Option</option>
                                                <option value="2" disabled>Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4" disabled>Option4</option>
                                            </select>
                                        </div>

                                        <!-- Array Data -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-array">Array Data</label>
                                            <div class="mb-1">
                                                <select class="select2-data-array form-select" id="select2-array"></select>
                                            </div>
                                        </div>

                                        <!-- Remote Data -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-ajax">Remote Data</label>
                                            <div class="mb-1">
                                                <select class="select2-data-ajax form-select" id="select2-ajax"></select>
                                            </div>
                                        </div>

                                        <!-- Limit Selected Options -->
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-limited">Limit Selected Options</label>
                                            <select class="max-length form-select" id="select2-limited" multiple>
                                                <optgroup label="Figures">
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze" selected>Trapeze</option>
                                                    <option value="triangle">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </optgroup>
                                                <optgroup label="Colors">
                                                    <option value="red">Red</option>
                                                    <option value="green">Green</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="purple">Purple</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <!-- Hide Search Box -->
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="select2-hide-search">Hide Search Box</label>
                                            <select class="hide-search form-select" id="select2-hide-search">
                                                <optgroup label="Figures">
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze" selected>Trapeze</option>
                                                    <option value="triangle">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </optgroup>
                                                <optgroup label="Colors">
                                                    <option value="red">Red</option>
                                                    <option value="green">Green</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="purple">Purple</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <!-- Modal Demo -->
                                        <div class="col-md-6">
                                            <!-- Basic trigger modal -->
                                            <div class="basic-modal">
                                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#select2InModal">
                                                    Select2 In Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-start" id="select2InModal" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel1">Select2 In Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>This is Select2 Example in Modal.</p>

                                                                <label class="form-label" for="select2Demo">Select2</label>
                                                                <select class="select2InModal form-select" id="select2Demo">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic trigger modal end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </section>
                <!-- Select2 End -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    
<?php include('footer.php');?>