@include('partials.header')


    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
    {{-- <x-nav /> --}}

<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-2xl font-bold text-black text-center">
            Sta. Cruz Senior High School <br>Online Enrollment Form
        </h1>
    </a>
</header>

    <main class="w-custom_width_850 bg-white shadow-md rounded px-5 pt-6 pb-10 mb-4 my-2 mx-auto flex flex-col">
                                          <!--/student-details-->
                <form action="/enrollment-form/submit" method="POST" class="flex flex-col">
                    @csrf
                                <section class="mt-1">
                                    <span class="block bg-blue text-white font-bold text-center text-xl p-1">LEARNER INFORMATION</span>
                                </section>
                                        <!--School Year, W/ Lrn, Balik-Aral-->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                            <div class="">
                                                <label class="block my-3 text-sm font-medium -mb-0 text-black">School Year:</label>
                                                <input id="school_year" type="text" name="school_year" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                @error('school_year')
                                                    <p class="text-red text-sm p-1">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <label class="block my-3 text-sm font-medium -mb-0 text-black">1. With LRN?:</label>

                                                <select type="text"
                                                id="lrn_stat"
                                                name="lrn_stat" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" {{old('lrn_stat') == "" ? 'selected' : ''}}></option>
                                                    <option value="YES" {{old('lrn_stat') == "YES" ? 'selected' : ''}}>YES</option>
                                                    <option value="NO" {{old('lrn_stat') == "NO" ? 'selected' : ''}}>NO</option>

                                                </select>

                                                @error('lrn_stat')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                    <label class="block my-3 text-sm font-medium -mb-0 text-black">2. Returning (Balik-Aral):</label>

                                                    <select
                                                    id="balikaral_stat" type="text" name="balikaral_stat" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                        <option value="" {{old('balikaral_stat') == "" ? 'selected' : ''}}></option>
                                                        <option value="YES" {{old('balikaral_stat') == "YES" ? 'selected' : ''}}>YES</option>
                                                        <option value="NO" {{old('balikaral_stat') == "NO" ? 'selected' : ''}}>NO</option>

                                                    </select>

                                                    @error('balikaral_stat')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <!--Grade Level and LRN-->
                                        <div class="grid gap-5 md:grid-cols-3 -mb-5">
                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">Grade Level to Enroll:</label>
                                                <input id="grade_level" type="number" name="grade_level" class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)">

                                                @error('grade_level')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">PSA Birth Certificate No.:</label>
                                                <input id="psa_number" type="number" name="psa_number" class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                @error('psa_number')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">Learner Reference No. (LRN):</label>
                                                <input id="student_lrn"type="number" name="student_lrn"  class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                @error('student_lrn')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="block justify-center items-center w-full my-10 mb-1"><hr></div>

                                        <!-- Students Names -->
                                        <div>

                                            <label for="" class="block my-3 -mb-0 text-xl font-bold text-black">Student's Name</label>

                                                <div class="">
                                                    <label for="lname" class="block my-3 -mb-0 text-sm font-medium text-black">Last Name: </label>
                                                    <input type="text" name="lname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="fname" class="block my-3 -mb-0 text-sm font-medium text-black">First Name:</label>
                                                    <input type="text" name="fname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="mdname" class="block my-3 -mb-0 text-sm font-medium text-black">Middle Name:</label>
                                                    <input type="text" name="mdname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="extname" class="block my-3 -mb-0 text-sm font-medium text-black">Extension's:  (Jr., Sr., III, and etc.):</label>
                                                    <input type="text" name="extname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>
                                        </div>

                                        <!-- birthday, gender, Age -->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                                <div class="">
                                                    <label for="bdate" class="block my-3 text-sm font-medium -mb-0 text-black">Birthday:</label>
                                                    <input type="date" data-date-format="DD MMMM YYYY" name="bdate" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="gender" class="block my-3 text-sm font-medium -mb-0 text-black">Gender:</label>
                                                    <select type="text" name="gender" name="gender" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                        <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                                                        <option value="MALE" {{old('gender') == "Male" ? 'selected' : ''}}>MALE</option>
                                                        <option value="FEMALE" {{old('gender') == "Female" ? 'selected' : ''}}>FEMALE</option>

                                                    </select>
                                                </div>

                                                <div class="">
                                                    <label for="age" class="block my-3 text-sm font-medium -mb-0 text-black">Age:</label>
                                                    <input type="number" name="age" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>
                                        </div>

                                        <!-- placeofbirth, mothertounge -->
                                        <div class="grid gap-2 md:grid-cols-2">
                                                <div class="">
                                                    <label for="placeofbirth" class="block my-3 text-sm font-medium -mb-0 text-black">Place of Birth (Municipality/City only):</label>
                                                    <input type="text" name="placeofbirth" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="mothertongue" class="block my-3 text-sm font-medium -mb-0 text-black">Mother Tongue:</label>
                                                    <input type="text" name="mothertongue" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>
                                        </div>

                                        <!-- IP -->
                                        <div class="grid gap-2 md:grid-cols-2">

                                            <div>
                                                <label for="ips" class="block my-3 text-sm -mb-0 text-black">Belonging to any Indigenous Peoples (IP) Community/ Indigenous Cultural Community?</label>

                                                <select type="text" name="ips" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option disabled value="" {{old('ips') == "" ? 'selected' : ''}}></option>
                                                    <option value="YES" {{old('ips') == "YES" ? 'selected' : ''}}>YES</option>
                                                    <option value="NO" {{old('ips') == "NO" ? 'selected' : ''}}>NO</option>

                                                </select>
                                            </div>

                                            <div>
                                                    <label for="ifyesips" class="block my-5 text-sm italic font-medium -mb-0 text-black">If Yes, please specify:</label>

                                                     <input type="text" name="ifyesips" class="w-full my-2.5 bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                            </div>

                                        </div>

                                        <!-- 4ps -->
                                        <div class="grid gap-2 md:grid-cols-2">

                                            <div>
                                                <label for="fps" class="block text-sm font-medium -mb-0 text-black">Is your Family a beneficiary of 4ps?</label>

                                                <select type="text" name="fps" class="w-full bg-gray-light-2 text-black text- rounded block  p-1.5  focus:outline-blue border border-blue">

                                                <option disabled value="" {{old('fps') == "" ? 'selected' : ''}}></option>
                                                <option value="YES" {{old('fps') == "YES" ? 'selected' : ''}}>YES</option>
                                                <option value="NO" {{old('fps') == "NO" ? 'selected' : ''}}>NO</option>

                                            </select>
                                            </div>

                                            <div>
                                                <label for="ifyesfps" class="block -mb-0 text-sm italic font-medium  text-black">Type your 4Ps Householde ID Number below:</label>
                                                <input type="text" name="ifyesfps" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                            </div>

                                        </div>

                                        <!-- currentaddress, permanentaddress -->
                                        <div class="">
                                            <div>
                                                <div class="my-3">
                                                    <hr>
                                                        <label for="currentaddress" class="block text-sm font-medium -mb-0 text-black">Current Address:</label>
                                                    <hr>
                                                </div>
                                                <div class="grid gap-1 md:grid-cols-3">
                                                    <div class="">
                                                        <label for="current_house" class="italic text-sm font-medium -mb-0 text-black">House No./Street:</label>
                                                        <input id="current_house" type="text" name="current_house" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="current_brgy" class="italic text-sm font-medium -mb-0 text-black">Barangay:</label>
                                                        <input id="current_brgy" type="text" name="current_brgy" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="current_mun" class="italic text-sm font-medium -mb-0 text-black">Municipality/City:</label>
                                                        <input id="current_mun" type="text" name="current_mun" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="current_prov" class="italic text-sm font-medium -mb-0 text-black">Province:</label>
                                                        <input id="current_prov" type="text" name="current_prov" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="current_zip" class="italic text-sm font-medium -mb-0 text-black">ZipCode:</label>
                                                        <input id="current_zip" type="number" name="current_zip" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="current_ctry" class="italic text-sm font-medium -mb-0 text-black">Country:</label>
                                                        <input id="current_ctry" type="text" name="current_ctry" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="my-5">

                                                <div>
                                                    <hr>
                                                    <div class="grid md:grid-cols-3">
                                                        <div>
                                                            <label for="permanentaddress" class="text-sm font-medium text-black">Permanent Address:</label>
                                                        </div>

                                                        <div>
                                                            <label class="italic text-sm"> Same with your Current Address?</label>
                                                        </div>

                                                        <div class="text-lg font-bold text-black">
                                                            <div >
                                                                <input type="checkbox" class="checkoption w-4 h-4" value="YES" onclick="checkedOnClick(this); checkTransfer(this);">
                                                                <label class="mx-1">YES</label>
                                                                <input type="checkbox" class="checkoption w-4 h-4" value="NO" onclick="checkedOnClick(this);">
                                                                <label class="mx-1">NO</label>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <hr>
                                                </div>



                                                <div class="grid gap-1 md:grid-cols-3">
                                                    <div class="">
                                                        <label  for="permanent_house" class="italic text-sm font-medium -mb-0 text-black">House No./Street:</label>
                                                        <input id="permanent_house" type="text" name="permanent_house" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_brgy" class="italic text-sm font-medium -mb-0 text-black">Barangay:</label>
                                                        <input id="permanent_brgy" type="text" name="permanent_brgy" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_mun" class="italic text-sm font-medium -mb-0 text-black">Municipality/City:</label>
                                                        <input id="permanent_mun" type="text" name="permanent_mun" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_prov" class="italic text-sm font-medium -mb-0 text-black">Province:</label>
                                                        <input id="permanent_prov" type="text" name="permanent_prov" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_zip" class="italic text-sm font-medium -mb-0 text-black">ZipCode:</label>
                                                        <input id="permanent_zip" type="number" name="permanent_zip" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_ctry" class="italic text-sm font-medium -mb-0 text-black">Country:</label>
                                                        <input id="permanent_ctry" type="text" name="permanent_ctry" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <hr>
                                         <!-- Father Name  Mother Name -->
                                        <div class="grid gap-3 md:grid-cols-2">

                                                    <!-- Father Name -->
                                                <div>
                                                    <label for="" class="block my-3 text-lg font-bold -mb-0 text-black">Father's Name</label>

                                                    <div class="py-2">
                                                        <label for="flname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                        <input type="text" name="flname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="ffname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                        <input type="text" name="ffname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="fmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                        <input type="text" name="fmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="fcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                        <input type="number" name="fcontact" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                </div>

                                                <!-- Mother Name -->
                                                <div class="">
                                                    <label for="" class="block my-3 text-lg font-bold -mb-0 text-black">Mother's Name</label>

                                                    <div class="py-2">
                                                        <label for="mlname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                        <input type="text" name="mlname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="mfname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                        <input type="text" name="mfname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="mmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                        <input type="text" name="mmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                        <label for="mcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                        <input type="text" name="mcontact"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                    </div>
                                                </div>

                                        </div>

                                        {{-- GUARDIAN NAME --}}
                                        <div>
                                            <label for="" class="block my-3 text-lg font-bold -mb-0 text-black">Guardian's Name</label>

                                            <div class="py-2">
                                                <label for="glname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                <input type="text" name="glname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                <label for="gfname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                <input type="text" name="gfname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                <label for="gmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                <input type="text" name="gmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                <label for="gcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                <input type="number" name="gcontact" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                            </div>
                                        </div>

                                <section class="my-1">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">For Returning Learner (Balik-Aral) and Those Who will Transfer/Move In</span>
                                </section>

                                        <!-- Last Grade, School Year, School id -->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                                <div>
                                                    <label for="lastgradelevel" class="block my-3 text-sm font-medium -mb-0 text-black">Last Grade Level Completed:</label>
                                                    <input type="number" name="lastgradelevel" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div>
                                                    <label for="lastschoolyear" class="block my-3 text-sm font-medium -mb-0 text-black">Last School Year Completed:</label>
                                                    <input type="text" name="lastschoolyear" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div>
                                                    <label for="schoolid" class="block my-3 text-sm font-medium -mb-0 text-black"> School ID:</label>
                                                    <input type="text" name="schoolid" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                        </div>

                                        <!-- Last School Attended -->
                                        <div>
                                            <label for="lastschoolattended" class="block  text-sm font-medium -mb-0 text-black">Last School Attended:</label>
                                            <input type="text" name="lastschoolattended" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                        </div>

                                <section class="my-5">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">For Learners in Senior High School</span>
                                </section>

                                        <!-- Sem, track, acad -->
                                        <div class="">
                                                <div>
                                                    <label for="sem" class="block text-sm font-medium -mb-0 text-black">Semester</label>
                                                    <select type="text" name="sem" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" {{old('sem') == "" ? 'selected' : ''}}></option>
                                                    <option value="1st SEMESTER" {{old('sem') == "1st SEMESTER" ? 'selected' : ''}}>1st SEMESTER</option>
                                                    <option value="2nd SEMESTER" {{old('sem') == "2nd SEMESTER" ? 'selected' : ''}}>2nd SEMESTER</option>

                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="track" class="block my-3 text-sm font-medium -mb-0 text-black">Track</label>
                                                    <select type="text" name="track" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" {{old('track') == "" ? 'selected' : ''}}></option>
                                                    <option value="ACADEMIC TRACK" {{old('track') == "ACADEMIC TRACK" ? 'selected' : ''}}>ACADEMIC TRACK</option>
                                                    <option value="TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" {{old('track') == "TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" ? 'selected' : ''}}>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</option>


                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="strands" class="block my-3 text-sm font-medium -mb-0 text-black">Strand</label>
                                                    <select type="text" name="strands" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option disabled value="" {{old('strands') == "" ? 'selected' : ''}}></option>
                                                    <option disabled class="font-bold" value="ACADEMIC TRACK" {{old('strands') == "ACADEMIC TRACK" ? 'selected' : ''}}>ACADEMIC TRACK</option>
                                                    <option value="BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" {{old('strands') == "BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" ? 'selected' : ''}}>BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)</option>
                                                    <option value="HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " {{old('strands') == "HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " ? 'selected' : ''}}>HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) </option>
                                                    <option value="SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM) " {{old('strands') == "SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM) " ? 'selected' : ''}}>SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM)</option>
                                                    <option value="GENERAL ACADEMIC STRAND (GAS)" {{old('strands') == "GENERAL ACADEMIC STRAND (GAS)" ? 'selected' : ''}}>GENERAL ACADEMIC STRAND (GAS)</option>

                                                    <option disabled value="" {{old('strands') == "" ? 'selected' : ''}}></option>
                                                    <option disabled class="font-bold"value="TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" {{old('strands') == "TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" ? 'selected' : ''}}>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</option>
                                                    <option value="COMPUTER SYSTEMS SERVICING (CSS)" {{old('strands') == "COMPUTER SYSTEMS SERVICING (CSS)" ? 'selected' : ''}}>COMPUTER SYSTEMS SERVICING (CSS)</option>
                                                    <option value="ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" {{old('strands') == "ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" ? 'selected' : ''}}>ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)</option>
                                                    <option value="FOOD AND BEVERAGE SERVICES (FBS)" {{old('strands') == "FOOD AND BEVERAGE SERVICES (FBS)" ? 'selected' : ''}}>FOOD AND BEVERAGE SERVICES (FBS)</option>
                                                    <option value="SHIELDED METAL ARC WELDING (SMAW)" {{old('strands') == "SHIELDED METAL ARC WELDING (SMAW)" ? 'selected' : ''}}>SHIELDED METAL ARC WELDING (SMAW)</option>

                                                    </select>
                                                </div>
                                        </div>

                                <section class="my-5">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">Preferred Distance Learning Modality/ies</span>
                                </section>

                                        <!-- modalities -->
                                        <div class="block">
                                            <select type="text" name="modality/ies" class="w-full bg-gray-light-2 text-black  rounded  p-1.5  focus:outline-blue border border-blue">

                                                <option disabled value="" {{old('modality/ies') == "" ? 'selected' : ''}}></option>
                                                <option value="Modular (Print)" {{old('modality/ies') == "Modular (Print)" ? 'selected' : ''}}>Modular (Print)</option>
                                                <option value="Modular (Digital)" {{old('modality/ies') == "Modular (Digital)" ? 'selected' : ''}}>Modular (Digital)</option>
                                                <option value="Online" {{old('modality/ies') == "Online" ? 'selected' : ''}}>Online</option>
                                                <option value="Educational Television" {{old('modality/ies') == "Educational Television" ? 'selected' : ''}}>Educational Television</option>
                                                <option value="Radio-Based Instruction" {{old('modality/ies') == "Radio-Based Instruction" ? 'selected' : ''}}>Radio-Based Instruction</option>
                                                <option value="Homeschooling" {{old('modality/ies') == "Homeschooling" ? 'selected' : ''}}>Homeschooling</option>
                                                <option value="Blended" {{old('modality/ies') == "Blended" ? 'selected' : ''}}>Blended</option>
                                                <option value="Face to Face" {{old('modality/ies') == "Face to Face" ? 'selected' : ''}}>Face to Face</option>

                                            </select>

                                        </div>

                                        <div class="my-5">
                                            <hr>
                                            <label class="block text-black font-bold text-base mt-5">Data Privacy Statement</label>

                                            <label class="block text-black text-sm mt-0">Please click <a href="#" class="text-blue italic font-bold" id="here">Here </a> to read Institutional Data Privacy Statement of Sta. Cruz Senior High School.</label>

                                        </div>

                                        <!-- i hereby -->
                                        <div>
                                            <div class="py-0">
                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                <label for="checkbox" class="block ml-6 text-sm font-medium italic -mt-6">
                                                    I hereby certify that the above information given are true and correct to the best of my knowledge and to update
                                                    my learner profile in the Learner Information System. The information herein shall be treated as confidential in compliance with the Data Privacy Act of 2012.
                                                </label>
                                            </div>

                                        </div>

                    <button type="submit" class="block bg-green-600 hover:bg-green-dark text-white  mt-7 rounded shadow-lg hover:shadow-xl
                    transition duration-300 h-10 w-full" onclick="showsss(this);">Next</button>
                </form>
    </main>

    <script>
        function checkedOnClick(e){

            // Select all checkboxes by class
            var checkboxesList = document.getElementsByClassName("checkoption");
            for (var i = 0; i < checkboxesList.length; i++) {

            checkboxesList.item(i).checked = false; // Uncheck all checkboxes

            }

            e.checked = true; // Checked clicked checkbox
            }



            function checkgetValue(){


            document.getElementById('bts').onclick = function (){
                var form = document.getElementById('form-lang');
                var test = document.getElementById('test');
                var checkboxess = document.getElementById('modalities');
                var values=[];


                    for(var chec of checkboxess){
                        if(chec.checked){

                            document.body.append(chec.value + '');
                        }
                    }


            }


        }

        function  checkEnable(){
            var permanent_house = document.getElementById("permanent_house");
            var permanent_brgy = document.getElementById("permanent_brgy");
            var permanent_mun = document.getElementById("permanent_mun");
            var permanent_prov = document.getElementById("permanent_prov");
            var permanent_zip = document.getElementById("permanent_zip");
            var permanent_ctry = document.getElementById("permanent_ctry");
            permanent_house.disabled = false;
            permanent_brgy.disabled = false;
            permanent_mun.disabled = false;
            permanent_prov.disabled = false;
            permanent_zip.disabled = false;
            permanent_ctry.disabled = false;
        }

        function checkTransfer(){
            document.getElementById('permanent_house').value = document.getElementById('current_house').value;
            document.getElementById('permanent_brgy').value =document.getElementById('current_brgy').value;
            document.getElementById('permanent_mun').value = document.getElementById('current_mun').value;
            document.getElementById('permanent_prov').value = document.getElementById('current_prov').value;
            document.getElementById('permanent_zip').value = document.getElementById('current_zip').value;
            document.getElementById('permanent_ctry').value = document.getElementById('current_ctry').value;
        }


        function getCheckedValues() {
            return Array.from(document.querySelectorAll('input[type="checkbox"]'))
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.value);
        }

        function showsss(){
                //var array = [];
                //var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
                // for (var i = 0; i < checkboxes.length; i++) {
                //     document.getElementById('resultss').textContent = array.push(checkboxes[i].value);
                // }
                document.getElementById('resultss').innerHTML = getCheckedValues();
        }

        // function FacetoFace(){
        //     var FacetoFace = document.getElementById("Face to Face");
        //     var FacetoFace_text = document.getElementById("Face to Face_text");

        //     if (FacetoFace.checked == true){
        //         FacetoFace_text.style.display = "block";
        //     } else {
        //         FacetoFace_text.style.display = "none";
        //     }
        // }

        // function ModularPrints(){
        //     var ModPrint= document.getElementById("Modular (Print)");
        //     var ModPrint_text = document.getElementById("Modular(Print)_text");
        //     if (ModPrint.checked == true){
        //         ModPrint_text.style.display = "block";
        //     } else {
        //         ModPrint_text.style.display = "none";
        //     }

        // }

        // function ModOnline(){
        //     var Online= document.getElementById("Online");
        //     var Online_text = document.getElementById("Online_text");
        //     if (Online.checked == true){
        //         Online_text.style.display = "block";
        //     } else {
        //         Online_text.style.display = "none";
        //     }

        // }

        // function RadioBased(){
        //     var RadioBasedInstruction= document.getElementById("Radio-Based Instruction");
        //     var RadioBasedInstruction_text = document.getElementById("Radio-BasedInstruction_text");
        //     if (RadioBasedInstruction.checked == true){
        //        RadioBasedInstruction_text.style.display = "block";
        //     } else {
        //        RadioBasedInstruction_text.style.display = "none";
        //     }

        // }

        // function Blendedds(){
        //     var blended= document.getElementById("Blended");
        //     var blended_text = document.getElementById("Blended_text");
        //     if (blended.checked == true){
        //        blended_text.style.display = "block";
        //     } else {
        //        blended_text.style.display = "none";
        //     }

        // }

        // function ModDigitals(){
        //     var Moddigital= document.getElementById("Modular (Digital)");
        //     var Moddigital_text = document.getElementById("Modular (Digital)_text");
        //     if (Moddigital.checked == true){
        //        Moddigital_text.style.display = "block";
        //     } else {
        //        Moddigital_text.style.display = "none";
        //     }

        // }

        // function EducationalTele(){
        //     var EducationalTelevision= document.getElementById("Educational Television");
        //     var EducationalTelevision_text = document.getElementById("Educational Television_text");
        //     if (EducationalTelevision.checked == true){
        //        EducationalTelevision_text.style.display = "block";
        //     } else {
        //        EducationalTelevision_text.style.display = "none";
        //     }

        // }

        // function HomeSchooling(){
        //     var Homeschooling = document.getElementById("Homeschooling");
        //     var Homeschooling_text = document.getElementById("Homeschooling_text");
        //     if (Homeschooling.checked == true){
        //        Homeschooling_text.style.display = "block";
        //     } else {
        //        Homeschooling_text.style.display = "none";
        //     }

        // }
    </script>

@include('partials.footer')
