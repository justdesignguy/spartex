@extends('front.layout.master')
@section('content')
    <section class="signup-form-page ptb-120">
        <div class="wrapper">
            <h2 class="common-title">Sign up</h2>
            <div class="signup-form-wrap">
                <div class="signup-instruction">
                    <h3 class="intro-title">Before you begin, please note :</h3>
                    <ol>
                        <li> You must have an established business entity to activate your account.</li>
                        <li>SwatchOn is an international fabric wholesale service for fashion businesses. Fabric
                            suppliers on SwatchOn expect to do business with fashion companies only, and not
                            individuals.
                        </li>
                        <li>Customs departments require recipient's tax identification on the delivery of the fabric
                            orders.
                        </li>
                    </ol>
                </div>
                <div class="signup-main-form">
                    <form id="regForm" method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="steps-wrap">
                            <p class="step">Basic Information</p>
                            <p class="step">Business Details</p>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <label>Full name<span class="red">*</span></label>
                                    {!! Form::select('country', $countries, old('country'), ['data-validation' => 'required', 'data-validation-error-msg' => 'Please select your country', 'id' => 'country', 'placeholder' => 'Select Country*']) !!}
                                </div>
                                <input type="hidden" name="plan_type" value="{{ in_array(request('plan'), ['business', 'standard']) ? request('plan') : 'business' }}">
                                <div class="signup-field">
                                    <label>Full name<span class="red">*</span></label>
                                    <input placeholder="Full name*" oninput="this.className = ''"
                                                                 name="name" autocomplete="off"
                                                                 value="{{ old('name') }}" data-validation="required"
                                                                 data-validation-error-msg="Please enter your name">
                                </div>
                                <div class="signup-field">
                                    <label>Job title<span class="red">*</span></label>
                                    <input placeholder="Job title*" oninput="this.className = ''"
                                                                 name="job_title" autocomplete="off"
                                                                 value="{{ old('job_title') }}"
                                                                 data-validation="required"
                                                                 data-validation-error-msg="Please enter your job title">
                                </div>
                                <div class="signup-field">
                                    <label>Email<span class="red">*</span></label>
                                    <input placeholder="Email*" oninput="this.className = ''"
                                                                 name="email" autocomplete="off"
                                                                 value="{{ old('email') }}" data-validation="email"
                                                                 data-validation-error-msg="Please enter your correct email">
                                </div>
                                <div class="signup-field">
                                    <label>Company name<span class="red">*</span></label>
                                    <input placeholder="Company name*"
                                                                 oninput="this.className = ''" name="company_name"
                                                                 autocomplete="off" value="{{ old('company_name') }}"
                                                                 data-validation="required"
                                                                 data-validation-error-msg="Please enter your company name">
                                </div>
                                <div class="signup-field">
                                    <label>Password<span class="red">*</span></label>
                                    <input placeholder="Password*" type="password"
                                                                 oninput="this.className = ''" name="password"
                                                                 autocomplete="off" data-validation="required"
                                                                 data-validation-error-msg="Please select your password">
                                </div>
                                <div class="signup-field">
                                    <label>Mobile Contact<span class="red">*</span></label>
                                    <input placeholder="Mobile Contact*" type="text" id="mobile_number"
                                                                 oninput="this.className = ''" name="mobile_number"
                                                                 autocomplete="off" value="{{ old('mobile_number') }}"
                                                                 data-validation="required number length" data-validation-length="10">
                                </div>
                                <div class="signup-field full-col checkbox"><input type="checkbox" id="vehicle1"
                                                                                   oninput="this.className = ''"
                                                                                   name="vehicle1" value="Bike"> <label
                                        for="vehicle1"> Get emails from SwatchOn about product updates, industry news,
                                        and events. <a href="#">Privacy Policy</a></label></div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <label>Whatsapp Number<span class="red">*</span></label>
                                    <input placeholder="Whatsapp Number*" type="text" id="whatsapp_number"
                                                                 oninput="this.className = ''" name="whatsapp_number"
                                                                 autocomplete="off" value="{{ old('whatsapp_number') }}"
                                                                 data-validation="required number length" data-validation-length="10">
                                </div>
                                <div class="signup-field">
                                    <label>Preferred Communication Mode<span class="red">*</span></label>
                                    {!! Form::select('preferred_communication_mode',
                                        ['' => 'Preferred Communication Mode*', 'Whatsapp' => 'Whatsapp', 'Email' => 'Email', 'Call' => 'Call'],
                                        old('preferred_communication_mode'), ['id' => 'preferred_communication_mode', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field">
                                    <label>Importer Exporter Code (IEC)</label>
                                    <input placeholder="Importer Exporter Code (IEC)"
                                                                 oninput="this.className = ''" name="iec_code"
                                                                 autocomplete="off" value="{{ old('iec_code') }}">
                                </div>
                                <div class="signup-field">
                                    <label>Business Identification Number (BIN)</label>
                                    <input placeholder="Business Identification Number (BIN)"
                                                                 oninput="this.className = ''" name="bin_code"
                                                                 autocomplete="off" value="{{ old('bin_code') }}">
                                </div>
                                <div class="signup-field">
                                    <label>What is the type of your business?<span class="red">*</span></label>
                                    {!! Form::select('type_of_business',
                                        ['' => 'What is the type of your business?*', 'Fashion Brand' => 'Fashion Brand', 'Fabric Sourcing Agency' => 'Fabric Sourcing Agency', 'Garment Development/Production' => 'Garment Development/Production', 'Fabric Wholesale/Retail' => 'Fabric Wholesale/Retail', 'Other' => 'Other'],
                                        old('type_of_business'), ['id' => 'type_of_business', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field">
                                    <label>How long have you been in business?<span class="red">*</span></label>
                                    {!! Form::select('how_long_in_business',
                                        ['' => 'How long have you been in business?*', 'Less Than A Year' => 'Less Than A Year', '1 - 2 Year' => '1 - 2 Year', '3 - 5 Year' => '3 - 5 Year', '5 - 10 Year' => '5 - 10 Year', 'Over 10 Years' => 'Over 10 Years'],
                                        old('how_long_in_business'), ['id' => 'how_long_in_business', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field">
                                    <label>Nature of business?<span class="red">*</span></label>
                                    {!! Form::select('nature_of_business',
                                        ['' => 'Nature of business?*', 'Registered Importer' => 'Registered Importer', 'Unregistered Importer' => 'Unregistered Importer', 'Home Business' => 'Home Business', 'Startup' => 'Startup'],
                                        old('nature_of_business'), ['id' => 'nature_of_business', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field">
                                    <label>Category of collection?<span class="red">*</span></label>
                                    {!! Form::select('category_of_collection',
                                        ['' => 'Category of collection?*', "Men's Wear" => "Men's Wear", "Women's Wear" => "Women's Wear", "Designer" => "Designer", "Costume Designer" => "Costume Designer", "Contract Designer" => "Contract Designer", "Kids Wear" => "Kids Wear", "All of the above" => "All of the above", "Others" => "Others"],
                                        old('category_of_collection'), ['id' => 'category_of_collection', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field full-col">
                                    <label>What is the price point of the brand?<span class="red">*</span></label>
                                    {!! Form::select('brand_price_point',
                                        ['' => 'What is the price point of the brand?*', 'Budget' => 'Budget', 'Moderate' => 'Moderate', 'Contemporary' => 'Contemporary', 'Designer' => 'Designer', 'Couture' => 'Couture'],
                                        old('brand_price_point'), ['id' => 'brand_price_point', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field full-col">
                                    <label>On which month do you start sourcing for S/S?<span class="red">*</span></label>
                                    @php
                                        $which_month_start_sourcing_for_ss[''] = "On which month do you start sourcing for S/S?*";
                                        $which_month_start_sourcing_for_fw[''] = "On which month do you start sourcing for F/W?*";
                                        foreach (monthArray() as $month){
                                            $which_month_start_sourcing_for_ss[$month] = $month;
                                            $which_month_start_sourcing_for_fw[$month] = $month;
                                        }
                                    @endphp
                                    {!! Form::select('which_month_start_sourcing_for_ss',
                                        $which_month_start_sourcing_for_ss,
                                        old('which_month_start_sourcing_for_ss'), ['id' => 'which_month_start_sourcing_for_ss', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field full-col">
                                    <label>On which month do you start sourcing for F/W?<span class="red">*</span></label>
                                    {!! Form::select('which_month_start_sourcing_for_fw',
                                        $which_month_start_sourcing_for_fw,
                                        old('which_month_start_sourcing_for_fw'), ['id' => 'which_month_start_sourcing_for_fw', 'data-validation' => 'required']) !!}
                                </div>
                                <div class="signup-field full-col">
                                    <label>Please briefly describe your brand/business in 1 - 2 sentences.</label>
                                    <textarea
                                        placeholder="Please briefly describe your brand/business in 1 - 2 sentences."
                                        name="business_description"
                                        autocomplete="off">{{ old('business_description') }}</textarea>
                                </div>
                                <div class="signup-field">
                                    <label>Company Website</label>
                                    <input placeholder="Company Website"
                                                                 oninput="this.className = ''" name="company_website"
                                                                 autocomplete="off"
                                                                 value="{{ old('company_website') }}">
                                </div>
                                <div class="signup-field">
                                    <label>Company Instagram</label>
                                    <input placeholder="Company Instagram"
                                                                 oninput="this.className = ''"
                                                                 name="company_instagram_url" autocomplete="off"
                                                                 value="{{ old('company_instagram_url') }}">
                                </div>
                            </div>
                        </div>
                        <div style="overflow:auto;">
                            <div class="steps-button">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer_scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script type="text/javascript">
        var $countryISDCodes = JSON.parse('{!!  $countryWiseLength !!}');
        var length = 10;

        $("#country").on('change', function (){
            length = $countryISDCodes[$(this).val()] ?? 10;
            $("#mobile_number").attr('data-validation-length', length);
            $("#whatsapp_number").attr('data-validation-length', length);
        })

        $.validate();

        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            if (x.length == 0) return false;
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (x.length == 0) return false;
            if (n == 1 && !validateForm()) return false;
            // if you have reached the end of the form...
            if (currentTab + n >= x.length) {
                // ... the form gets submitted:
                document.getElementById("nextBtn").disabled = true;
                document.getElementById("regForm").submit();
                return false;
            }
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var isValid = $("#regForm").isValid();
            // If the valid status is true, mark the step as finished and valid:
            if (isValid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return isValid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

    </script>
@endsection
