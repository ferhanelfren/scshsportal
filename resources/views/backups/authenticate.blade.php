@include('partials.header')


                <section class="mx-auto w-a4_width mb-11">
                    <a href="{{url('/none')}}">
                        <button type="submit" class="block bg-blue-400 hover:bg-blue-600 text-white rounded shadow-sm
                        hover:shadow-xl transition duration-300 h-10 w-13 mx-29 -my-10">Download</button>
                    </a>
                </section>


            <form action="/none">
                @csrf
                <main class="w-a4_width h-a4_height bg-white shadow-md rounded px-11 p-4  pb-10 mb-4 my-2 mx-auto flex flex-col">

                    <section class="grid gap-0 md:grid-cols-3">
                        <div class="">
                                    <!--your images folder should placed on public directory-->
                                <img src="{{URL('/images/logo.png')}}" alt="Sta. Cruz Senior High School" class="h-logo_h w-logo_w mx-auto mt-5">

                        </div>

                        <div class="my-10 mx-trytext w-trylang">
                                <label class="block text-costomized text-center font-bold text-black">
                                    STA. CRUZ SENIOR HIGH SCHOOL
                                </label>
                                <label class="block -mt-1.5 text-costomized2 text-center font-sm  text-black">
                                    ENHANCE BASIC EDUCATION ENROLLMENT FORM
                                </label>
                                <label class="block -mt-1 text-costomized3 text-center font-sm  text-black">
                                    Rizal St., Poblacion, Zone III, Sta. Cruz, Davao del Sur 8001, Philippines
                                </label>
                        </div>

                        <div class="">
                                    <!--your images folder should placed on public directory-->
                                <img src="{{URL('/images/deped.png')}}" alt="Sta. Cruz Senior High School" class="h-logo_h w-logo_w mx-auto mt-5">
                        </div>

                    </section>


                    <!--START'S HERE-->

                    <!--School Year, lrn stat and balik aral-->
                    <div class="grid gap-0 md:grid-cols-3">
                        <div>
                            <div class="">
                                <label class="my-3 text-standard font-medium -mb-0 text-black">School Year:</label>
                                <label id="school_year_auth" class="my-3 text-standard font-bold -mb-0  text-black">{{$school_year_pass}}</label>
                            </div>

                            <!--Grade Level-->
                            <div class="block">
                                <div class="text-left">
                                    <label class="my-3 text-standard font-medium -mb-0 text-black">Grade Level to Enroll:</label>

                                    <label nid="grade_level_auth" class="my-3 text-standard font-bold -mb-0 text-black">{{$grade_level_pass}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="my-2">
                            <div class="text-center">
                                <label class="my-3 text-standard  font-medium -mb-0 text-black">1. With LRN?:</label>

                                <label id="lrn_stat_auth" class="my-3 text-standard font-bold -mb-0 text-black">{{$lrn_stat_pass}}</label>
                            </div>

                        </div>

                        <div class="my-2">
                            <label class="my-3 text-standard font-medium -mb-0 text-black">2. Returning (Balik-Aral):</label>

                            <label id="balikaral_stat_auth" class="my-3 text-standard font-bold -mb-0 text-black">{{$balikaral_stat_pass}}</label>
                        </div>


                    </div>




                    <div class="border-2 w-borderwide -mx-4 my-1">

                        <div class="mx-4">


                                <div class="my-0">
                                    <label class="block text-standard font-bold text-black text-center mb-0">LEARNER INFORMATION</label>
                                </div>
                            <hr>

                            <!--PSA. LRN-->
                            <div class="grid gap-0 md:grid-cols-2 my-1">
                                <div class="text-left">
                                    <label class="my-3 text-standard  font-medium -mb-0 text-black ">PSA Birth Certificate No.:</label>
                                    <label id="student_lrn_auth" class="my-3 text-standard font-bold text-black border-b-2">{{$student_lrn_pass}}</label>
                                </div>
                                <div class="text-left">
                                    <label class="my-3 text-standard  font-medium -mb-0 text-black ">Learner Reference No. (LRN):</label>
                                    <label id="student_lrn_auth" class="my-3 text-standard font-bold text-black border-b-2 ">{{$student_lrn_pass}}</label>
                                </div>
                            </div>

                            <!--STUDENT'S NAME,  BDATE, AGE, GENDER-->
                            <div class="my-1 grid md:grid-cols-4" >
                                <!--STUDENT'S NAME-->
                                <div class="col-span-2 text-standard font-medium -mb-0 text-black">
                                        <div>
                                            <div>
                                                <label>Last Name:</label>
                                                <label id="lname_auth" name="lname_auth" class="font-bold" style="text-transform:uppercase">{{$lname_pass}}</label>
                                            </div>
                                            <div class="my-1">
                                                <label>First Name:</label>
                                                <label id="fname_auth" name="fname_auth" class="font-bold" style="text-transform:uppercase">{{$fname_pass}}</label>
                                            </div>
                                            <div  class="my-1">
                                                <label>Middle Name:</label>
                                                <label id="mdname_auth" name="mdname_auth" class="font-bold" style="text-transform:uppercase">{{$mdname_pass}}</label>
                                            </div>
                                            <div  class="my-1">
                                                <label>Extension Name:</label>
                                                <label id="extname_auth" name="extname_auth" class="font-bold" style="text-transform:uppercase">{{$extname_pass}}</label>
                                            </div>
                                        </div>
                                </div>

                                <!--IPS AND 4PS BIRTHPLACE-->
                                <div class="col-span-2">
                                    <div>
                                        <div>
                                            <label class=" text-standard font-medium -mb-0 text-black">Place of Birth:</label>
                                            <label id="placeofbirth_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$placeofbirth_pass}}</label>
                                        </div>

                                        <div>
                                            <label class="text-standard font-medium text-black">Mother Tongue: </label>
                                            <label id="mothertongue_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$mothertongue_pass}}</label>
                                        </div>

                                        <div>
                                            <label class="text-standard font-medium text-black">Indgenous Peoples Community: </label>
                                            <label id="ips_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$ips_pass}}</label>
                                        </div>

                                    </div>

                                    <div>
                                        <label class="text-standard font-medium text-black">IP Specification: </label>
                                        <label id="ifyesips_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$ifyesips_pass}}</label>
                                    </div>

                                </div>


                                <!--BDATE, AGE, GENDER-->
                                <div class="col-span-2">
                                    <div>
                                        <label class="text-standard font-medium -mb-0 text-black mx-auto">Birthday:</label>
                                        <label id="bdate_auth" class="-my-5 text-standard font-bold text-black">{{$bdate_pass}}</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <label for="age" class="text-standard font-medium -mb-0 text-black">Age:</label>
                                        <label id="age_auth" class="text-standard font-bold text-black">{{$age_pass}}</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <label for="gender" class="text-standard font-medium -mb-0 text-black">Gender:</label>
                                        <label id="gender_auth" class="text-standard font-bold text-black">{{$gender_pass}}</label>
                                    </div>



                                </div>

                                <!--4Ps-->
                                <div class="col-span-2">
                                    <div>
                                        <label class="text-standard font-medium text-black">Beneficiary of 4P's: </label>
                                        <label id="fps_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$fps_pass}}</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <label class="text-standard font-medium text-black">ID Number: </label>
                                        <label id="ifyesfps_auth" class="text-standard font-bold text-black" style="text-transform:uppercase">{{$ifyesfps_pass}}</label>
                                    </div>

                                </div>

                            </div>

                            <div class="my-2">
                                <hr>
                                <label class="block text-standard font-medium text-black text-left mx-2">Current Address</label>
                                <hr>
                            </div>

                            <!--CURRENT ADD-->
                            <div class="my-1">
                                <div class="mx-auto text-standard text-black font-bold text-center" style="text-transform:uppercase">

                                        <label>{{$current_house_pass}},</label>

                                        <label>{{$current_brgy_pass}}</label>,

                                        <label>{{$current_mun_pass}}</label>,

                                        <label>{{$current_prov_pass}}</label>

                                        <label>{{$current_zip_pass}}</label>

                                        <label>{{$current_ctry_pass}}</label>

                                </div>

                                <hr class="mx-auto w-29 border-dashed">

                                <div class="grid gap-0 md:grid-cols-6 mx-auto italic text-ssm text-black font-medium text-center">
                                    <div class="">
                                        <label class="">House No./Street</label>
                                    </div>
                                    <div class="">
                                        <label class="">Barangay</label>
                                    </div>
                                    <div class="">
                                        <label class="">Municipality/City</label>
                                    </div>
                                    <div class="">
                                        <label class="">Province</label>
                                    </div>
                                    <div class="">
                                        <label class="">Zip Code</label>
                                    </div>
                                    <div class="">
                                        <label class="italic text-ssm text-black font-medium text-center">Country</label>
                                    </div>
                                </div>

                            </div>

                            <div class="my-2">
                                <hr>
                                <label class="block text-standard font-medium text-black text-left mx-2">Permanent Address</label>
                                <hr>
                            </div>

                            <!--PERMANENT ADD-->
                            <div class="my-1">

                                <div class="mx-auto text-standard text-black font-bold text-center" style="text-transform:uppercase">

                                        <label>{{$permanent_house_pass}},</label>

                                        <label>{{$permanent_brgy_pass}}</label>,

                                        <label>{{$permanent_mun_pass}}</label>,

                                        <label>{{$permanent_prov_pass}}</label>

                                        <label>{{$permanent_zip_pass}}</label>

                                        <label>{{$permanent_ctry_pass}}</label>

                                </div>

                                <hr class="mx-auto w-29 border-dashed">

                                <div class="grid gap-0 md:grid-cols-6 mx-auto text-center">
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">House No./Street</label>
                                    </div>
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">Barangay</label>
                                    </div>
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">Municipality/City</label>
                                    </div>
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">Province</label>
                                    </div>
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">Zip Code</label>
                                    </div>
                                    <div class="-my-1">
                                        <label class="italic text-ssm text-black font-medium text-center">Country</label>
                                    </div>
                                </div>

                            </div>

                            <div class="my-4">
                                <hr>
                                <label class="block text-standard font-bold text-black text-center">PARENT'S/GUARDIAN'S INFORMATION</label>
                                <hr>
                            </div>

                            <!--FATHER'S NAME-->
                            <div class="-my-4">
                                <label class="text-standard font-medium -mb-0 text-black mx-auto">Father's Full Name:</label>
                                <div class="text-standard font-bold text-black text-center grid gap-0 md:grid-cols-4" style="text-transform:uppercase">
                                    <div>
                                        <label id="lname_auth" name="lname_auth">
                                            {{$flname_pass}},</label>
                                    </div>
                                    <div>
                                        <label id="fname_auth" name="fname_auth">
                                            {{$ffname_pass}}</label>
                                    </div>
                                    <div>
                                        <label id="mdname_auth" name="mdname_auth">
                                            {{$fmdname_pass}}</label>
                                    </div>
                                    <div>
                                        <label id="extname_auth" name="extname_auth">
                                            {{$fcontact_pass}}</label>
                                    </div>
                                </div>

                                <hr class="mx-auto w-29 border-dashed">

                                <div class="italic text-ssm font-medium text-black text-center grid gap-0 md:grid-cols-4">
                                    <div>
                                        <label>
                                            Last Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            First Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            Middle Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            Contact Number</label>
                                    </div>
                                </div>


                            </div>

                            <!--MOTHER'S NAME-->
                            <div class="my-5">
                                <label class="text-standard font-medium -mb-0 text-black mx-auto">Mother's Full Name:</label>
                                <div class="text-standard font-bold text-black text-center grid gap-0 md:grid-cols-4" style="text-transform:uppercase">
                                    <div>
                                        <label id="lname_auth" name="lname_auth">
                                            {{$mlname_pass}},</label>
                                    </div>
                                    <div>
                                        <label id="fname_auth" name="fname_auth">
                                            {{$mfname_pass}}</label>
                                    </div>
                                    <div>
                                        <label id="mdname_auth" name="mdname_auth">
                                            {{$mmdname_pass}}</label>
                                    </div>
                                    <div>
                                        <label id="extname_auth" name="extname_auth">
                                            {{$mcontact_pass}}</label>
                                    </div>
                                </div>

                                <hr class="mx-auto w-29 border-dashed">

                                <div class="italic text-ssm font-medium text-black text-center grid gap-0 md:grid-cols-4">
                                    <div>
                                        <label>
                                            Last Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            First Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            Middle Name</label>
                                    </div>
                                    <div>
                                        <label>
                                            Contact Number</label>
                                    </div>
                                </div>


                            </div>

                            <div class="-my-3">
                                <hr>
                                <label class="block text-sm font-medium text-black text-center">For Reutrning Learner (Balik-Aral) and Those Who will Transfer/Move In</label>
                                <hr>
                            </div>

                            <!--BALIK-ARAL-->
                            <div class="my-3">
                                <div class="grid gap-0 md:grid-cols-2">
                                    <div>
                                        <label class="text-sm font-medium text-black text-center">Last Grade Level Completed:</label>
                                        <label class="text-sm font-bold text-black text-center" style="text-transform:uppercase">{{$lastgradelevel_pass}}</label>
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-black text-center">Last School Year Completed:</label>
                                        <label class="text-sm font-bold text-black text-center" style="text-transform:uppercase">{{$lastschoolyear_pass}}</label>
                                    </div>
                                </div>
                                <div class="grid gap-0 md:grid-cols-3">
                                    <div class="col-span-2">
                                        <label class="text-sm font-medium text-black text-center">Last School Attended:</label>
                                        <label class="text-sm font-bold text-black text-center" style="text-transform:uppercase">{{$lastschoolattended_pass}}</label>
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-black text-center">Last School ID:</label>
                                        <label class="text-sm font-bold text-black text-center" style="text-transform:uppercase">{{$schoolid_pass}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <hr>
                                <label class="block text-standard font-medium text-black text-center">For Learner's in Senior High School</label>
                                <hr>
                            </div>

                            <!--SHS-->
                            <div class="grid md:grid-cols-3 my-2">
                                <div class="row-span-2 text-center my-2">
                                    <label class="text-standard font-medium -mb-0 text-black mx-auto">Semester:</label>
                                    <label class="text-standard font-bold -mb-0 text-black mx-auto">{{$sem_pass}}</label>
                                </div>
                                <div class="col-span-2">
                                    <label class="text-standard font-medium -mb-0 text-black mx-auto">Track:</label>
                                    <label class="text-standard font-bold -mb-0 text-black mx-auto">{{$track_pass}}</label>
                                </div>
                                <div class="col-span-2">
                                    <label class="text-standard font-medium -mb-0 text-black mx-auto">Strand:</label>
                                    <label class="text-standard font-bold -mb-0 text-black w-full mx-auto">{{$strands_pass}}</label>
                                </div>
                            </div>

                            <div class="">
                                <hr>
                                <label class="block text-standard font-medium text-black text-center">Preferred Distance Learning Modality/ies</label>
                                <hr>
                            </div>

                            <div class="text-center my-4">
                                <label class="text-standard font-bold -mb-0 text-black">{{$modals_pass}}</label>
                            </div>

                            <div>
                                <div>
                                    <p class="text-standard my-7 text-justify font-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hereby certify that the above information given are true and correcty to the best of my knowledge and I allow the Department of Education to use my child's details to create and/or update his/her learner profile in the Learner Information System. The information herein shall be treated as confidential in compliance with the Data Privacy Act of 2012.
                                    </p>
                                </div>
                            </div>

                            <div class="grid gap-8 md:grid-cols-2 my-2 text-center">
                                <div>
                                    <hr>
                                    <label class="text-sm my-10 text-justify font-bold">
                                        Signature Over Printed Name of Parent/Guardian
                                    </label>
                                </div>

                                <div>
                                    <hr>
                                    <label class="text-sm my-10 text-justify font-bold">
                                        Date
                                    </label>
                                </div>
                            </div>




                        </div>

                    </div>

                </main>


            </form>



<script>
        // //from index to here
        // document.getElementById('school_year_edit').innerHTML = localStorage.getItem('schoolyear');
        // document.getElementById('lrn_stat_auth').innerHTML = localStorage.getItem('lrnstat');
        // document.getElementById('balikaral_stat_auth').innerHTML = localStorage.getItem('balikaralstat');
        // document.getElementById('grade_level_auth').innerHTML = localStorage.getItem('grade-level');
        // document.getElementById('lrn_auth').innerHTML = localStorage.getItem('lrnss');

        //from here to authenticate
        function passValues(){
                 var school_yearss = document.getElementById('school_year_auth').value;

                 localStorage.setItem('schoolyearss', school_yearss);


                 return false;
             }

</script>


@include('partials.footer')
