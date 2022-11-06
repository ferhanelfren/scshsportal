@include('partials.header')


    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
    <x-nav />

<header class="max-w-lg mx-auto pt-10">
    <a href="#">
        <h1 class="text-2xl font-bold text-black text-center">
            Sta. Cruz Senior High School <br> Online Enrollment Form
        </h1>
    </a>
</header>

    <main class="w-custom_width_850 bg-white shadow-md rounded px-5 pt-6 pb-10 mb-4 my-2 mx-auto flex flex-col">

                <form action="/authenticate-details/load" class="flex flex-col">
                    @csrf
                                <section class="mt-1">
                                    <span class="block bg-blue text-white font-bold text-center text-xl p-1">LEARNER INFORMATION</span>
                                </section>
                                        <!--School Year, W/ Lrn, Balik-Aral-->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                            <div class="">
                                                <label for="school_year" class="block my-3 text-sm font-medium -mb-0 text-black">School Year:</label>
                                                <input id="school_year" type="text" name="school_year" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                @error('school_year')
                                                    <p class="text-red text-sm p-1">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <label for="lrn_stat" class="block my-3 text-sm font-medium -mb-0 text-black">1. With LRN?:</label>

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
                                                    <label for="balikaral_stat" class="block my-3 text-sm font-medium -mb-0 text-black">2. Returning (Balik-Aral):</label>

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
                                        <div class="grid -space-x-13  md:grid-cols-2 -mb-5">
                                            <div class="">
                                                <label for="grade_level" class="block my-3 -mb-0.5 text-sm font-medium text-black">Grade Level to Enroll:</label>
                                                <input id="grade_level" type="number" name="grade_level" class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)">

                                                @error('grade_level')
                                                    <p class="text-red text-sm p-1"> {{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <label for="student_lrn" class="block my-3 -mb-0.5 text-sm font-medium text-black">Learner Reference No. (LRN):</label>
                                                <input id="student_lrn"type="number" name="student_lrn"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

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
                                                    <label for="lname" class="block my-3 -mb-0 text-sm font-medium text-black">Last Name  (Enter N/A if not applicable): </label>
                                                    <input type="text" name="lname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="fname" class="block my-3 -mb-0 text-sm font-medium text-black">First Name  (Enter N/A if not applicable):</label>
                                                    <input type="text" name="fname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="mdname" class="block my-3 -mb-0 text-sm font-medium text-black">Middle Name  (Enter N/A if not applicable):</label>
                                                    <input type="text" name="mdname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>
                                        </div>

                                        <!-- birthday, gender, Age -->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                                <div class="">
                                                    <label for="bdate" class="block my-3 text-sm font-medium -mb-0 text-black">Birthday:</label>
                                                    <input type="date" name="bdate" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
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
                                        <div>
                                                <div class="">
                                                    <label for="placeofbirth" class="block my-3 text-sm font-medium -mb-0 text-black">Place of Birth:</label>
                                                    <input type="text" name="placeofbirth" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>

                                                <div class="">
                                                    <label for="mothertongue" class="block my-3 text-sm font-medium -mb-0 text-black">Mother Tongue:</label>
                                                    <input type="text" name="mothertongue" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                </div>
                                        </div>

                                        <!-- currentaddress, permanentaddress -->
                                        <div class="py-2">
                                            <div>
                                                <label for="currentaddress" class="block my-3 text-sm font-medium -mb-0 text-black">Current Address:</label>
                                                <input type="text" name="currentaddress" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                                <label for="" class="block italic text-sm font-medium text-black">
                                                    House No./Street
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Street Name
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Barangay
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Municipality/City
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Province
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Zip Code
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Country
                                                </label>
                                            </div>

                                            <div class="py-5">
                                                <label for="permanentaddress" class="block my-3 text-sm font-medium -mb-0 text-black">Permanent Address:</label>

                                                <div>
                                                            <label for="" class="absolute italic text-sm ml-20 -mt-5"> Same with your Current Address?</label>

                                                            <div class="flex items-center mr-4">
                                                                <input id="inline-checkbox" type="checkbox" value="YES" class="w-4 h-4 ml-21 -mt-6">
                                                                <label for="checkbox" class="ml-2 text-sm font-bold -mt-6">YES</label>

                                                                <input id="inline-checkbox" type="checkbox" value="NO" class="w-4 h-4 ml-5 -mt-6">
                                                                <label for="checkbox" class="ml-2 text-sm font-bold -mt-6">NO</label>
                                                            </div>
                                                </div>

                                                <input type="text"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                                <label for="" class="block italic text-sm font-medium text-black">
                                                    House No./Street
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Street Name
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Barangay
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Municipality/City
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Province
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Zip Code
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Country
                                                </label>
                                            </div>
                                        </div>

                                        <!-- IP -->
                                        <div class="">
                                            <label for="ips" class="block my-3 text-sm font-medium -mb-0 text-black">Belonging to any Indigenous Peoples (IP) Community/ Indigenous Cultural Community?</label>

                                            <select type="text" name="ips" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                <option value="" {{old('ips') == "" ? 'selected' : ''}}></option>
                                                <option value="YES" {{old('ips') == "YES" ? 'selected' : ''}}>YES</option>
                                                <option value="NO" {{old('ips') == "NO" ? 'selected' : ''}}>NO</option>

                                            </select>

                                                <label for="ifyesips" class="block my-3 text-sm italic font-medium -mb-0 text-black">If Yes, please specify:</label>

                                                <input type="text" name="ifyesips" class="w-full  bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">

                                        </div>

                                        <!-- 4ps -->
                                        <div class="py-5">
                                            <label for="fps" class="block my-3 text-sm font-medium -mb-0 text-black">Is your Family a beneficiary of 4ps?</label>

                                            <select type="text" name="fps" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                <option value="" {{old('fps') == "" ? 'selected' : ''}}></option>
                                                <option value="YES" {{old('fps') == "YES" ? 'selected' : ''}}>YES</option>
                                                <option value="NO" {{old('fps') == "NO" ? 'selected' : ''}}>NO</option>

                                            </select>

                                            <div class="py-2">
                                                <label for="ifyesfps" class="block my-3 -mb-0 text-sm italic font-medium  text-black">If Yes, please write the 4Ps Householde ID Number below:</label>

                                                <input type="text" name="ifyesfps" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase">
                                            </div>

                                        </div>

                                        <hr>

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
                                        <div class="mt-5">
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
                                        <div class=" py-2">
                                                <div>
                                                    <label for="sem" class="block my-3 text-sm font-medium -mb-0 text-black">Semester</label>
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
                                                    <label for="acad" class="block my-3 text-sm font-medium -mb-0 text-black">Strand</label>
                                                    <select type="text" name="acad" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option disabled value="" {{old('acad') == "" ? 'selected' : ''}}></option>
                                                    <option disabled class="font-bold" value="ACADEMIC TRACK" {{old('acad') == "ACADEMIC TRACK" ? 'selected' : ''}}>ACADEMIC TRACK</option>
                                                    <option value="BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" {{old('acad') == "BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" ? 'selected' : ''}}>BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)</option>
                                                    <option value="HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " {{old('acad') == "HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " ? 'selected' : ''}}>HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) </option>
                                                    <option value="SCIENCE, TECHNOLOGY, ENGINEERING, MATHEMATICS (STEM) " {{old('acad') == "SCIENCE, TECHNOLOGY, ENGINEERING, MATHEMATICS (STEM) " ? 'selected' : ''}}>SCIENCE, TECHNOLOGY, ENGINEERING, MATHEMATICS (STEM)</option>
                                                    <option value="GENERAL ACADEMIC STRAND (GAS)" {{old('acad') == "GENERAL ACADEMIC STRAND (GAS)" ? 'selected' : ''}}>GENERAL ACADEMIC STRAND (GAS)</option>



                                                    <option disabled value="" {{old('acad') == "" ? 'selected' : ''}}></option>
                                                    <option disabled class="font-bold"value="TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" {{old('acad') == "TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" ? 'selected' : ''}}>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</option>
                                                    <option value="COMPUTER SYSTEMS SERVICING (CSS)" {{old('acad') == "COMPUTER SYSTEMS SERVICING (CSS)" ? 'selected' : ''}}>COMPUTER SYSTEMS SERVICING (CSS)</option>
                                                    <option value="ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" {{old('acad') == "ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" ? 'selected' : ''}}>ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)</option>
                                                    <option value="FOOD AND BEVERAGE SERVICES (FBS)" {{old('acad') == "FOOD AND BEVERAGE SERVICES (FBS)" ? 'selected' : ''}}>FOOD AND BEVERAGE SERVICES (FBS)</option>
                                                    <option value="SHIELDED METAL ARC WELDING (SMAW)" {{old('acad') == "SHIELDED METAL ARC WELDING (SMAW)" ? 'selected' : ''}}>SHIELDED METAL ARC WELDING (SMAW)</option>

                                                    </select>
                                                </div>
                                        </div>

                                <section class="my-5">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">Preferred Distance Learning Modality/ies</span>
                                </section>

                                        <!-- modalities -->
                                        <div>
                                                <div>
                                                            <label for="" class="absolute italic text-sm font-bold  -mt-2">Choose all that applies:</label>

                                                        <div class=" grid gap-x-10 gap-y-5  md:grid-cols-4  ml-5">
                                                            <div class="py-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Modular (Print)</label>
                                                            </div>

                                                            <div class="py-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Online</label>
                                                            </div>

                                                            <div class="py-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Radio-Based Instruction</label>
                                                            </div>

                                                            <div class="py-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Blended</label>
                                                            </div>

                                                            <div class="-mt-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Modular (Digital)</label>
                                                            </div>

                                                            <div class="-mt-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Educational Television</label>
                                                            </div>

                                                            <div class="-mt-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Homeschooling</label>
                                                            </div>

                                                            <div class="-mt-7">
                                                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4">
                                                                <label for="checkbox" class="block ml-6 text-sm font-bold -mt-6">Face to Face</label>
                                                            </div>

                                                        </div>

                                                </div>
                                        </div>

                                <section class="my-5">
                                    <hr>
                                    <label class="block text-black font-bold text-base mt-5">Data Privacy Statement</label>

                                    <label class="block text-black text-sm mt-0">Please click <a href="{{ route('pdf.generate') }}" class="text-blue italic font-bold" id="here">Here </a> to read Institutional Data Privacy Statement of Sta. Cruz Senior High School.</label>

                                </section>

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


                                <button id="bts" type="submit" class="block bg-green-600 hover:bg-green-dark text-white  mt-7 rounded shadow-lg hover:shadow-xl
                                transition duration-300 h-10 w-full" onclick="passValues(this);">Next<button>

                </form>
    </main>

    <script>

            //document.getElementById('school_year').innerHTML = localStorage.getItem('schoolyearauth');


            //from here to authenticate
             function passValues(){
                 var school_years = document.getElementById('school_year').value;
                 var lrn_stats = document.getElementById('lrn_stat').value;
                 var balikaral_stats = document.getElementById('balikaral_stat').value;
                 var gradelevel = document.getElementById('grade_level').value;
                 var lrns = document.getElementById('student_lrn').value;



                 localStorage.setItem('schoolyear', school_years);
                 localStorage.setItem('lrnstat', lrn_stats);
                 localStorage.setItem('balikaralstat', balikaral_stats);
                 localStorage.setItem('grade-level', gradelevel);
                 localStorage.setItem('lrnss', lrns);

                 return false;
                 //window.location.href = "/authenticate";
             }



    </script>

@include('partials.footer')
