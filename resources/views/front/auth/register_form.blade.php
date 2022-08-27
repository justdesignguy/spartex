@extends('front.layout.master')
@section('content')
    <section class="signup-form-page">
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
                            <p class="step">General Information</p>
                            <p class="step">Business Details</p>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <select name="country" oninput="this.className = ''" id="country">
                                        <option value="Country">Country*</option>
                                        @foreach(countryArray() as $country)
                                            <option value="{{ $country }}"
                                                    @if(old('country') == $country) selected @endif>{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="signup-field"><input placeholder="Full name*" oninput="this.className = ''"
                                                                 name="name" autocomplete="off"
                                                                 value="{{ old('name') }}"></div>
                                <div class="signup-field"><input placeholder="Job title*" oninput="this.className = ''"
                                                                 name="job_title" autocomplete="off"
                                                                 value="{{ old('job_title') }}"></div>
                                <div class="signup-field"><input placeholder="Email*" oninput="this.className = ''"
                                                                 name="email" autocomplete="off"
                                                                 value="{{ old('email') }}"></div>
                                <div class="signup-field"><input placeholder="Company name*"
                                                                 oninput="this.className = ''" name="company_name"
                                                                 autocomplete="off" value="{{ old('company_name') }}">
                                </div>
                                <div class="signup-field"><input placeholder="Password*" type="password"
                                                                 oninput="this.className = ''" name="password"
                                                                 autocomplete="off"></div>
                                <div class="signup-field full-col checkbox"><input type="checkbox" id="vehicle1"
                                                                                   oninput="this.className = ''"
                                                                                   name="vehicle1" value="Bike"> <label
                                        for="vehicle1"> Get emails from SwatchOn about product updates, industry news,
                                        and events. <a href="#">Privacy Policy</a></label></div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field"><input placeholder="Mobile Contact*"
                                                                 oninput="this.className = ''" name="mobile_number"
                                                                 autocomplete="off" value="{{ old('mobile_number') }}">
                                </div>
                                <div class="signup-field"><input placeholder="Importer Exporter Code (IEC)*"
                                                                 oninput="this.className = ''" name="iec_code"
                                                                 autocomplete="off" value="{{ old('iec_code') }}"></div>
                                <div class="signup-field"><input placeholder="Business Identification Number (BIN)*"
                                                                 oninput="this.className = ''" name="bin_code"
                                                                 autocomplete="off" value="{{ old('bin_code') }}"></div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <select name="type_of_business" oninput="this.className = ''" id="type_of_business">
                                        <option>What is the type of your business?*</option>
                                        <option value="Fashion Brand">Fashion Brand</option>
                                        <option value="Fabric Sourcing Agency">Fabric Sourcing Agency</option>
                                        <option value="Garment Development/Production">Garment Development/Production
                                        </option>
                                        <option value="Fabric Wholesale/Retail">Fabric Wholesale/Retail</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="signup-field">
                                    <select name="how_long_in_business" oninput="this.className = ''"
                                            id="how_long_in_business">
                                        <option>How long have you been in business?*</option>
                                        <option value="Less Than A Year">Less Than A Year</option>
                                        <option value="1 - 2 Year">1 - 2 Year</option>
                                        <option value="3 - 5 Year">3 - 5 Year</option>
                                        <option value="5 - 10 Year">5 - 10 Year</option>
                                        <option value="Over 10 Years">Over 10 Years</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="budget_for_fabric_annually" oninput="this.className = ''"
                                            id="budget_for_fabric_annually">
                                        <option>How much budget do you allocate for fabric annually?*</option>
                                        <option value="Less tha 10k">Less tha 10k</option>
                                        <option value="10k - 25k">10k - 25k</option>
                                        <option value="25k - 50k">25k - 50k</option>
                                        <option value="50k - 100k">50k - 100k</option>
                                        <option value="100k - 500k">100k - 500k</option>
                                        <option value="Over 500k">Over 500k</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="brand_price_point" oninput="this.className = ''"
                                            id="brand_price_point">
                                        <option>What is the price point of the brand?*</option>
                                        <option value="Budget">Budget</option>
                                        <option value="Moderate">Moderate</option>
                                        <option value="Contemporary">Contemporary</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Couture">Couture</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="which_month_start_sourcing_for_ss" oninput="this.className = ''"
                                            id="which_month_start_sourcing_for_ss">
                                        <option>On which month do you start sourcing for S/S?*</option>
                                        @foreach(monthArray() as $month)
                                            <option value="{{ $month }}"
                                                    @if(old('which_month_start_sourcing_for_ss') == $month) selected @endif>{{ $month }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="which_month_start_sourcing_for_fw" oninput="this.className = ''"
                                            id="which_month_start_sourcing_for_fw">
                                        <option>On which month do you start sourcing for F/W?*</option>
                                        @foreach(monthArray() as $month)
                                            <option value="{{ $month }}"
                                                    @if(old('which_month_start_sourcing_for_fw') == $month) selected @endif>{{ $month }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <textarea
                                        placeholder="Please briefly describe your brand/business in 1 - 2 sentences.*"
                                        name="business_description"
                                        autocomplete="off">{{ old('business_description') }}</textarea>
                                </div>
                                <div class="signup-field"><input placeholder="Company Website*"
                                                                 oninput="this.className = ''" name="company_website"
                                                                 autocomplete="off"
                                                                 value="{{ old('company_website') }}">
                                </div>
                                <div class="signup-field"><input placeholder="Company Instagram*"
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
