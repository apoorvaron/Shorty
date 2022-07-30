<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Preview member</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/baga-logo.gif">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<style>
.table_wrapper{
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}        
</style>
    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <?php include'header.php';?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        
                                        <h4 class="page-title"></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                           
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Preview</h4>
<!--
                                            <p class="text-muted font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p>
-->
            
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Rakesh" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email Id</label>

                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="admin@gmail.com" id="example-text-input" disabled>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Membership Type</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group ">
                                                    
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Family</option>
                                                            <option>Couple</option>
                                                            <option>Single Parent</option>
                                                            <option>Individual</option>
                                                            <option>Student Family</option>
                                                            <option>Student Couple</option>
                                                            <option>Student Single Parent</option>
                                                            <option>Student Individual</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">Membership Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="url" value="04-02-2022" id="example-url-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Membership Fee</label>

                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" value="$285.00" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">BSC interested</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Age Group</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                            <option>Select</option>
                                                           <option>6 - 11</option>
                                                            <option>12 - 14</option>
                                                            <option>15 - 18</option>
                                                            <option>19 - 23</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">BYC interested</label>
                                                 <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Occupation</label>
                                                <div class="col-sm-10">
                                                   <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Business</option>
                                                            <option>Engineer</option>
                                                            <option>Scientist</option>
                                                            <option>Software</option>
                                                            <option>Teaching</option>
                                                            <option>Retired</option>
                                                            <option>Real Estate</option>
                                                            <option>House Wife</option>
                                                            <option>Insurance</option>
                                                            <option>Lawyer</option>
                                                            <option>Others</option>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-week-input" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Salt lake, Kolkata" id="example-week-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="kolkata" id="example-time-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="West Bengal" id="example-time-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Zipcode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="789456" id="example-time-input">
                                                </div>
                                            </div>
                                            
                           <hr>
                               
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Family Member</h4>
                                          
                                            

                                        
                                                <div data-repeater-list="category-group">
                                                    <div data-repeater-item>
                                                <div class="row">
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" required placeholder="First Name"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" required placeholder="Last Name"/>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Id</label>
                                                        <div>
                                                            <input type="email" class="form-control" required placeholder="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Advisory member</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Occupation</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Business</option>
                                                            <option>Engineer</option>
                                                            <option>Scientist</option>
                                                            <option>Software</option>
                                                            <option>Teaching</option>
                                                            <option>Retired</option>
                                                            <option>Real Estate</option>
                                                            <option>House Wife</option>
                                                            <option>Insurance</option>
                                                            <option>Lawyer</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                     
                                               
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BSC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                           
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Age Group</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                           <option>6 - 11</option>
                                                            <option>12 - 14</option>
                                                            <option>15 - 18</option>
                                                            <option>19 - 23</option>
                                                            

                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BYC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                            

                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>City</label>
                                                        <select class="form-control">
                                                            <option>Select City</option>
                                                            <option>City 1</option>
                                                            <option>City 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>State</label>
                                                        <select class="form-control" name="region">
                                                                <option value="">State</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="DC">District Of Columbia</option>
                                                                <option value="FM">Federated States Of Micronesia</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA" selected>Georgia</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VI">Virgin Islands</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WA">Washington</option>
                                                                <option value="WV">West Virginia</option>
                                                                <option value="WI">Wisconsin</option>
                                                                <option value="WY">Wyoming</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Country</label>
                                                        <select class="form-control" name="country" autocomplete="shipping country">
                                                                <option value="" disabled="" selected="" hidden="">Country</option>
                                                                <option value="US" selected="">
                                                                    United States
                                                                </option>
                                                                <option value="CA">
                                                                    Canada
                                                                </option>
                                                                <option value="JP">
                                                                    Japan
                                                                </option>
                                                                <option value="AU">
                                                                    Australia
                                                                </option>
                                                                <option value="GB">
                                                                    United Kingdom
                                                                </option>
                                                                <option value="IE">
                                                                    Ireland
                                                                </option>
                                                                <option value="FR">
                                                                    France
                                                                </option>
                                                                <option value="ES">
                                                                    Spain
                                                                </option>
                                                                <option value="AF">
                                                                    Afghanistan
                                                                </option>
                                                                <option value="AX">
                                                                    Åland Islands
                                                                </option>
                                                                <option value="AL">
                                                                    Albania
                                                                </option>
                                                                <option value="DZ">
                                                                    Algeria
                                                                </option>
                                                                <option value="AS">
                                                                    American Samoa
                                                                </option>
                                                                <option value="AD">
                                                                    Andorra
                                                                </option>
                                                                <option value="AO">
                                                                    Angola
                                                                </option>
                                                                <option value="AI">
                                                                    Anguilla
                                                                </option>
                                                                <option value="AG">
                                                                    Antigua and Barbuda
                                                                </option>
                                                                <option value="AR">
                                                                    Argentina
                                                                </option>
                                                                <option value="AM">
                                                                    Armenia
                                                                </option>
                                                                <option value="AW">
                                                                    Aruba
                                                                </option>
                                                                <option value="AT">
                                                                    Austria
                                                                </option>
                                                                <option value="AZ">
                                                                    Azerbaijan
                                                                </option>
                                                                <option value="BS">
                                                                    Bahamas
                                                                </option>
                                                                <option value="BH">
                                                                    Bahrain
                                                                </option>
                                                                <option value="BD">
                                                                    Bangladesh
                                                                </option>
                                                                <option value="BB">
                                                                    Barbados
                                                                </option>
                                                                <option value="BY">
                                                                    Belarus
                                                                </option>
                                                                <option value="BE">
                                                                    Belgium
                                                                </option>
                                                                <option value="BZ">
                                                                    Belize
                                                                </option>
                                                                <option value="BJ">
                                                                    Benin
                                                                </option>
                                                                <option value="BM">
                                                                    Bermuda
                                                                </option>
                                                                <option value="BT">
                                                                    Bhutan
                                                                </option>
                                                                <option value="BO">
                                                                    Bolivia
                                                                </option>
                                                                <option value="BA">
                                                                    Bosnia and Herzegovina
                                                                </option>
                                                                <option value="BW">
                                                                    Botswana
                                                                </option>
                                                                <option value="BR">
                                                                    Brazil
                                                                </option>
                                                                <option value="IO">
                                                                    British Indian Ocean Territory
                                                                </option>
                                                                <option value="BN">
                                                                    Brunei Darussalam
                                                                </option>
                                                                <option value="BG">
                                                                    Bulgaria
                                                                </option>
                                                                <option value="BF">
                                                                    Burkina Faso
                                                                </option>
                                                                <option value="BI">
                                                                    Burundi
                                                                </option>
                                                                <option value="KH">
                                                                    Cambodia
                                                                </option>
                                                                <option value="CM">
                                                                    Cameroon
                                                                </option>
                                                                <option value="CV">
                                                                    Cape Verde
                                                                </option>
                                                                <option value="KY">
                                                                    Cayman Islands
                                                                </option>
                                                                <option value="CF">
                                                                    Central African Republic
                                                                </option>
                                                                <option value="TD">
                                                                    Chad
                                                                </option>
                                                                <option value="CL">
                                                                    Chile
                                                                </option>
                                                                <option value="CN">
                                                                    China
                                                                </option>
                                                                <option value="CX">
                                                                    Christmas Island
                                                                </option>
                                                                <option value="CC">
                                                                    Cocos (Keeling) Islands
                                                                </option>
                                                                <option value="CO">
                                                                    Colombia
                                                                </option>
                                                                <option value="KM">
                                                                    Comoros
                                                                </option>
                                                                <option value="CG">
                                                                    Republic of the Congo
                                                                </option>
                                                                <option value="CD">
                                                                    Democratic Republic of the Congo
                                                                </option>
                                                                <option value="CK">
                                                                    Cook Islands
                                                                </option>
                                                                <option value="CR">
                                                                    Costa Rica
                                                                </option>
                                                                <option value="CI">
                                                                    Côte d'Ivoire
                                                                </option>
                                                                <option value="HR">
                                                                    Croatia
                                                                </option>
                                                                <option value="CW">
                                                                    Curaçao
                                                                </option>
                                                                <option value="CY">
                                                                    Cyprus
                                                                </option>
                                                                <option value="CZ">
                                                                    Czech Republic
                                                                </option>
                                                                <option value="DK">
                                                                    Denmark
                                                                </option>
                                                                <option value="DJ">
                                                                    Djibouti
                                                                </option>
                                                                <option value="DM">
                                                                    Dominica
                                                                </option>
                                                                <option value="DO">
                                                                    Dominican Republic
                                                                </option>
                                                                <option value="EC">
                                                                    Ecuador
                                                                </option>
                                                                <option value="EG">
                                                                    Egypt
                                                                </option>
                                                                <option value="SV">
                                                                    El Salvador
                                                                </option>
                                                                <option value="GQ">
                                                                    Equatorial Guinea
                                                                </option>
                                                                <option value="ER">
                                                                    Eritrea
                                                                </option>
                                                                <option value="EE">
                                                                    Estonia
                                                                </option>
                                                                <option value="ET">
                                                                    Ethiopia
                                                                </option>
                                                                <option value="FK">
                                                                    Falkland Islands (Malvinas)
                                                                </option>
                                                                <option value="FO">
                                                                    Faroe Islands
                                                                </option>
                                                                <option value="FJ">
                                                                    Fiji
                                                                </option>
                                                                <option value="FI">
                                                                    Finland
                                                                </option>
                                                                <option value="PF">
                                                                    French Polynesia
                                                                </option>
                                                                <option value="TF">
                                                                    French Southern Territories
                                                                </option>
                                                                <option value="GA">
                                                                    Gabon
                                                                </option>
                                                                <option value="GM">
                                                                    Gambia
                                                                </option>
                                                                <option value="GE">
                                                                    Georgia
                                                                </option>
                                                                <option value="DE">
                                                                    Germany
                                                                </option>
                                                                <option value="GH">
                                                                    Ghana
                                                                </option>
                                                                <option value="GI">
                                                                    Gibraltar
                                                                </option>
                                                                <option value="GR">
                                                                    Greece
                                                                </option>
                                                                <option value="GL">
                                                                    Greenland
                                                                </option>
                                                                <option value="GD">
                                                                    Grenada
                                                                </option>
                                                                <option value="GP">
                                                                    Guadeloupe
                                                                </option>
                                                                <option value="GU">
                                                                    Guam
                                                                </option>
                                                                <option value="GT">
                                                                    Guatemala
                                                                </option>
                                                                <option value="GG">
                                                                    Guernsey
                                                                </option>
                                                                <option value="GN">
                                                                    Guinea
                                                                </option>
                                                                <option value="GW">
                                                                    Guinea-Bissau
                                                                </option>
                                                                <option value="GY">
                                                                    Guyana
                                                                </option>
                                                                <option value="HT">
                                                                    Haiti
                                                                </option>
                                                                <option value="VA">
                                                                    Vatican City
                                                                </option>
                                                                <option value="HN">
                                                                    Honduras
                                                                </option>
                                                                <option value="HK">
                                                                    Hong Kong
                                                                </option>
                                                                <option value="HU">
                                                                    Hungary
                                                                </option>
                                                                <option value="IS">
                                                                    Iceland
                                                                </option>
                                                                <option value="IN">
                                                                    India
                                                                </option>
                                                                <option value="ID">
                                                                    Indonesia
                                                                </option>
                                                                <option value="IQ">
                                                                    Iraq
                                                                </option>
                                                                <option value="IM">
                                                                    Isle of Man
                                                                </option>
                                                                <option value="IL">
                                                                    Israel
                                                                </option>
                                                                <option value="IT">
                                                                    Italy
                                                                </option>
                                                                <option value="JM">
                                                                    Jamaica
                                                                </option>
                                                                <option value="JE">
                                                                    Jersey
                                                                </option>
                                                                <option value="JO">
                                                                    Jordan
                                                                </option>
                                                                <option value="KZ">
                                                                    Kazakhstan
                                                                </option>
                                                                <option value="KE">
                                                                    Kenya
                                                                </option>
                                                                <option value="KI">
                                                                    Kiribati
                                                                </option>
                                                                <option value="KW">
                                                                    Kuwait
                                                                </option>
                                                                <option value="KG">
                                                                    Kyrgyzstan
                                                                </option>
                                                                <option value="LA">
                                                                    Laos
                                                                </option>
                                                                <option value="LV">
                                                                    Latvia
                                                                </option>
                                                                <option value="LB">
                                                                    Lebanon
                                                                </option>
                                                                <option value="LS">
                                                                    Lesotho
                                                                </option>
                                                                <option value="LR">
                                                                    Liberia
                                                                </option>
                                                                <option value="LY">
                                                                    Libya
                                                                </option>
                                                                <option value="LI">
                                                                    Liechtenstein
                                                                </option>
                                                                <option value="LT">
                                                                    Lithuania
                                                                </option>
                                                                <option value="LU">
                                                                    Luxembourg
                                                                </option>
                                                                <option value="MO">
                                                                    Macao
                                                                </option>
                                                                <option value="MK">
                                                                    Macedonia
                                                                </option>
                                                                <option value="MG">
                                                                    Madagascar
                                                                </option>
                                                                <option value="MW">
                                                                    Malawi
                                                                </option>
                                                                <option value="MY">
                                                                    Malaysia
                                                                </option>
                                                                <option value="MV">
                                                                    Maldives
                                                                </option>
                                                                <option value="ML">
                                                                    Mali
                                                                </option>
                                                                <option value="MT">
                                                                    Malta
                                                                </option>
                                                                <option value="MH">
                                                                    Marshall Islands
                                                                </option>
                                                                <option value="MQ">
                                                                    Martinique
                                                                </option>
                                                                <option value="MR">
                                                                    Mauritania
                                                                </option>
                                                                <option value="MU">
                                                                    Mauritius
                                                                </option>
                                                                <option value="YT">
                                                                    Mayotte
                                                                </option>
                                                                <option value="MX">
                                                                    Mexico
                                                                </option>
                                                                <option value="FM">
                                                                    Micronesia
                                                                </option>
                                                                <option value="MD">
                                                                    Moldova
                                                                </option>
                                                                <option value="MC">
                                                                    Monaco
                                                                </option>
                                                                <option value="MN">
                                                                    Mongolia
                                                                </option>
                                                                <option value="ME">
                                                                    Montenegro
                                                                </option>
                                                                <option value="MS">
                                                                    Montserrat
                                                                </option>
                                                                <option value="MA">
                                                                    Morocco
                                                                </option>
                                                                <option value="MZ">
                                                                    Mozambique
                                                                </option>
                                                                <option value="MM">
                                                                    Myanmar (Burma)
                                                                </option>
                                                                <option value="NA">
                                                                    Namibia
                                                                </option>
                                                                <option value="NR">
                                                                    Nauru
                                                                </option>
                                                                <option value="NP">
                                                                    Nepal
                                                                </option>
                                                                <option value="NL">
                                                                    Netherlands
                                                                </option>
                                                                <option value="NC">
                                                                    New Caledonia
                                                                </option>
                                                                <option value="NZ">
                                                                    New Zealand
                                                                </option>
                                                                <option value="NI">
                                                                    Nicaragua
                                                                </option>
                                                                <option value="NE">
                                                                    Niger
                                                                </option>
                                                                <option value="NG">
                                                                    Nigeria
                                                                </option>
                                                                <option value="NU">
                                                                    Niue
                                                                </option>
                                                                <option value="NF">
                                                                    Norfolk Island
                                                                </option>
                                                                <option value="MP">
                                                                    Northern Mariana Islands
                                                                </option>
                                                                <option value="NO">
                                                                    Norway
                                                                </option>
                                                                <option value="OM">
                                                                    Oman
                                                                </option>
                                                                <option value="PK">
                                                                    Pakistan
                                                                </option>
                                                                <option value="PW">
                                                                    Palau
                                                                </option>
                                                                <option value="PA">
                                                                    Panama
                                                                </option>
                                                                <option value="PG">
                                                                    Papua New Guinea
                                                                </option>
                                                                <option value="PY">
                                                                    Paraguay
                                                                </option>
                                                                <option value="PE">
                                                                    Peru
                                                                </option>
                                                                <option value="PH">
                                                                    Philippines
                                                                </option>
                                                                <option value="PN">
                                                                    Pitcairn
                                                                </option>
                                                                <option value="PL">
                                                                    Poland
                                                                </option>
                                                                <option value="PT">
                                                                    Portugal
                                                                </option>
                                                                <option value="PR">
                                                                    Puerto Rico
                                                                </option>
                                                                <option value="QA">
                                                                    Qatar
                                                                </option>
                                                                <option value="RE">
                                                                    Réunion
                                                                </option>
                                                                <option value="RO">
                                                                    Romania
                                                                </option>
                                                                <option value="RU">
                                                                    Russian Federation
                                                                </option>
                                                                <option value="RW">
                                                                    Rwanda
                                                                </option>
                                                                <option value="BL">
                                                                    Saint Barthélemy
                                                                </option>
                                                                <option value="SH">
                                                                    Saint Helena
                                                                </option>
                                                                <option value="KN">
                                                                    Saint Kitts and Nevis
                                                                </option>
                                                                <option value="LC">
                                                                    Saint Lucia
                                                                </option>
                                                                <option value="MF">
                                                                    Saint Martin
                                                                </option>
                                                                <option value="PM">
                                                                    Saint Pierre and Miquelon
                                                                </option>
                                                                <option value="VC">
                                                                    Saint Vincent and the Grenadines
                                                                </option>
                                                                <option value="WS">
                                                                    Samoa
                                                                </option>
                                                                <option value="SM">
                                                                    San Marino
                                                                </option>
                                                                <option value="ST">
                                                                    São Tomé and Príncipe
                                                                </option>
                                                                <option value="SA">
                                                                    Saudi Arabia
                                                                </option>
                                                                <option value="SN">
                                                                    Senegal
                                                                </option>
                                                                <option value="RS">
                                                                    Serbia
                                                                </option>
                                                                <option value="SC">
                                                                    Seychelles
                                                                </option>
                                                                <option value="SL">
                                                                    Sierra Leone
                                                                </option>
                                                                <option value="SG">
                                                                    Singapore
                                                                </option>
                                                                <option value="SX">
                                                                    Sint Maarten
                                                                </option>
                                                                <option value="SK">
                                                                    Slovakia
                                                                </option>
                                                                <option value="SI">
                                                                    Slovenia
                                                                </option>
                                                                <option value="SB">
                                                                    Solomon Islands
                                                                </option>
                                                                <option value="SO">
                                                                    Somalia
                                                                </option>
                                                                <option value="ZA">
                                                                    South Africa
                                                                </option>
                                                                <option value="GS">
                                                                    South Georgia
                                                                </option>
                                                                <option value="KR">
                                                                    South Korea
                                                                </option>
                                                                <option value="SS">
                                                                    South Sudan
                                                                </option>
                                                                <option value="LK">
                                                                    Sri Lanka
                                                                </option>
                                                                <option value="SR">
                                                                    Suriname
                                                                </option>
                                                                <option value="SZ">
                                                                    Swaziland
                                                                </option>
                                                                <option value="SE">
                                                                    Sweden
                                                                </option>
                                                                <option value="CH">
                                                                    Switzerland
                                                                </option>
                                                                <option value="TW">
                                                                    Taiwan
                                                                </option>
                                                                <option value="TJ">
                                                                    Tajikistan
                                                                </option>
                                                                <option value="TZ">
                                                                    Tanzania
                                                                </option>
                                                                <option value="TH">
                                                                    Thailand
                                                                </option>
                                                                <option value="TL">
                                                                    Timor-Leste
                                                                </option>
                                                                <option value="TG">
                                                                    Togo
                                                                </option>
                                                                <option value="TK">
                                                                    Tokelau
                                                                </option>
                                                                <option value="TO">
                                                                    Tonga
                                                                </option>
                                                                <option value="TT">
                                                                    Trinidad and Tobago
                                                                </option>
                                                                <option value="TN">
                                                                    Tunisia
                                                                </option>
                                                                <option value="TR">
                                                                    Turkey
                                                                </option>
                                                                <option value="TM">
                                                                    Turkmenistan
                                                                </option>
                                                                <option value="TC">
                                                                    Turks and Caicos Islands
                                                                </option>
                                                                <option value="TV">
                                                                    Tuvalu
                                                                </option>
                                                                <option value="UG">
                                                                    Uganda
                                                                </option>
                                                                <option value="UA">
                                                                    Ukraine
                                                                </option>
                                                                <option value="AE">
                                                                    United Arab Emirates
                                                                </option>
                                                                <option value="UY">
                                                                    Uruguay
                                                                </option>
                                                                <option value="UZ">
                                                                    Uzbekistan
                                                                </option>
                                                                <option value="VU">
                                                                    Vanuatu
                                                                </option>
                                                                <option value="VE">
                                                                    Venezuela
                                                                </option>
                                                                <option value="VN">
                                                                    Viet Nam
                                                                </option>
                                                                <option value="VG">
                                                                    Virgin Islands (British)
                                                                </option>
                                                                <option value="VI">
                                                                    Virgin Islands (U.S.)
                                                                </option>
                                                                <option value="YE">
                                                                    Yemen
                                                                </option>
                                                                <option value="ZM">
                                                                    Zambia
                                                                </option>
                                                                <option value="ZW">
                                                                    Zimbabwe
                                                                </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Zipcode / pincode</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter your pincode / zipcode"/>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div>
                                                            <textarea required class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                       
                                        </div>
                                            </div>
                                        </div>
                                                 
                                               
                                    
                                    </div>
                                </div> <!-- end col -->
            
                     


                      
                                           
                                           <div class="col-md-12 text-center">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                           <a href="#"> <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                Update
                                                               </button></a>
                                                            <a href="../thankyou.php"><button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                                Pay Now
                                                                </button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                          

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include'footer.php';?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
<!--        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>-->
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
  
        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>  

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>