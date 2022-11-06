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
                                                <input id="school_yearsss" type="text" name="school_year" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value={{$schoolyearauth}}>


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

                                <button id="bts" type="submit" class="block bg-green-600 hover:bg-green-dark text-white  mt-7 rounded shadow-lg hover:shadow-xl
                                transition duration-300 h-10 w-full" onclick="passValues(this);">Next<button>

                </form>
    </main>


<script>

    document.getElementById('school_yearsss').innerHTML = localStorage.getItem('schoolyear');

</script>



@include('partials.footer')
