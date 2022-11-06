

<?php if(session()->has('message')): ?>

    <div x-data="{show: true}" x-show="show" style="position: fixed; z-index: 1; padding-top: 100px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); ">

        <div style="position: relative; background-color: #fefefe; margin: auto; top: 100px; padding: 0; width: 50%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop; -webkit-animation-duration: 0.10s; animation-name: animatetop; animation-duration: 0.10s">

            <div class="text-center  bg-blue-100 fixed border-t-4 border-blue-500 rounded-b text-teal-900 px-4 py-0 shadow-md" style="width: 50%;">

                <div style="">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" x-on:click="show=false">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div style="margin-top: 20px;">
                    <strong style="font-size: 25px;">Successfully Enrolled !!!</strong> <br>
                    <span style="font-size: 15px;">Click the button below to download your Generated Enrollment Form</span>
                </div>

                <div style="justify-content: center; align-items: center; margin-top: 20px; margin-bottom: 40px;">
                    <form action="/none">
                        <button type="submit" class="bg-red-600 hover:bg-red text-white my-2 rounded shadow-md hover:shadow-xl transition duration-300" style="width: 150px; height: 50px; font-size: 20px;">Download</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

<?php endif; ?>




<?php /**PATH C:\xampp\htdocs\sta._cruz_senior_high\resources\views/components/successfullyenrolled.blade.php ENDPATH**/ ?>