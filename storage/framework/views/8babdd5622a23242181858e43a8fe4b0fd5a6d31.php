<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.non-nav','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('non-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.successfullyenrolled','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('successfullyenrolled'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>



    
<style>
            /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
        }

        @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }

        .modal-header {
        padding: 2px 16px;
        height: 50px;
        background-color: #2196f3;
        color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
        padding: 2px 16px;
        height: 40px;
        background-color: #2196f3;
        color: white;
        }
</style>


<header class="max-w-lg mx-auto">

        <div>
            <h1 class="text-2xl font-bold text-black text-center">
                Online Learner's Enrollment Form
            </h1>
        </div>

</header>

    <main class="w-custom_width_850 bg-white shadow-md rounded px-5 pt-6 pb-10 mt-0 mb-4 my-2 mx-auto flex flex-col">
                                          <!--/student-details-->
                <form action="/enrollment-form" method="POST" class="flex flex-col">
                    <?php echo csrf_field(); ?>
                                <section class="mt-1">
                                    <span class="block bg-blue text-white font-bold text-center text-xl p-1">LEARNER INFORMATION</span>
                                </section>
                                        <!--School Year, W/ Lrn, Balik-Aral-->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                            <div class="">
                                                <label class="block my-3 text-sm font-medium -mb-0 text-black">School Year:</label>
                                                <input  type="text" name="school_year" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('school_year')); ?>>

                                                <?php $__errorArgs = ['school_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="">
                                                <label class="block my-3 text-sm font-medium -mb-0 text-black">1. With LRN?:</label>

                                                <select type="text" name="lrn_stat" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" <?php echo e(old('lrn_stat') == "" ? 'selected' : ''); ?>></option>
                                                    <option value="YES" <?php echo e(old('lrn_stat') == "YES" ? 'selected' : ''); ?>>YES</option>
                                                    <option value="NO" <?php echo e(old('lrn_stat') == "NO" ? 'selected' : ''); ?>>NO</option>

                                                </select>

                                                <?php $__errorArgs = ['lrn_stat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"> <?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="">
                                                    <label class="block my-3 text-sm font-medium -mb-0 text-black">2. Returning (Balik-Aral):</label>

                                                    <select type="text" name="balikaral_stat" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                        <option value="" <?php echo e(old('balikaral_stat') == "" ? 'selected' : ''); ?>></option>
                                                        <option value="YES" <?php echo e(old('balikaral_stat') == "YES" ? 'selected' : ''); ?>>YES</option>
                                                        <option value="NO" <?php echo e(old('balikaral_stat') == "NO" ? 'selected' : ''); ?>>NO</option>

                                                    </select>

                                                    <?php $__errorArgs = ['balikaral_stat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"> <?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <!--Grade Level and LRN-->
                                        <div class="grid gap-5 md:grid-cols-3 -mb-5">
                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">Grade Level to Enroll:</label>
                                                <input  type="number" name="grade_level" class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" value=<?php echo e(old('grade_level')); ?>>

                                                <?php $__errorArgs = ['grade_level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"> <?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">PSA Birth Certificate No.:</label>
                                                <input  type="number" name="student_psa" class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" value=<?php echo e(old('student_psa')); ?>>

                                                <?php $__errorArgs = ['student_psa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"> <?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="">
                                                <label class="block my-3 -mb-0.5 text-sm font-medium text-black">Learner Reference No. (LRN):</label>
                                                <input  type="number" name="student_lrn"  class="bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="12" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" value=<?php echo e(old('student_lrn')); ?>>

                                                <?php $__errorArgs = ['student_lrn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1"> <?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>


                                        <div class="block justify-center items-center w-full my-10 mb-1"><hr></div>

                                        <!-- Students Names -->
                                        <div>

                                            <label for="" class="block my-3 -mb-0 text-xl font-bold text-black">Student's Name</label>

                                                <div class="">
                                                    <label for="lname" class="block my-3 -mb-0 text-sm font-medium text-black">Last Name: </label>
                                                    <input type="text" name="lname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('lname')); ?>>

                                                <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The Last Name field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="fname" class="block my-3 -mb-0 text-sm font-medium text-black">First Name:</label>
                                                    <input type="text" name="fname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('fname')); ?>>

                                                <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The First Name field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="mdname" class="block my-3 -mb-0 text-sm font-medium text-black">Middle Name:</label>
                                                    <input type="text" name="mdname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase"
                                                    value=<?php echo e(old('mdname')); ?>>

                                                <?php $__errorArgs = ['mdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The Middle Name field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="extname" class="block my-3 -mb-0 text-sm font-medium text-black">Extension's:  (Jr., Sr., III, and etc.):</label>
                                                    <input type="text" name="extname"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase"
                                                    value=<?php echo e(old('extname')); ?>>
                                                </div>
                                        </div>

                                        <!-- birthday, gender, Age -->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                                <div class="">
                                                    <label for="bdate" class="block my-3 text-sm font-medium -mb-0 text-black">Birthday:</label>
                                                    <input type="date" data-date-format="DD MMMM YYYY" name="bdate" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('bdate')); ?>>

                                                <?php $__errorArgs = ['bdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The Birth Date field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="gender" class="block my-3 text-sm font-medium -mb-0 text-black">Gender:</label>
                                                    <select type="text" name="gender" name="gender" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                        <option value="" <?php echo e(old('gender') == "" ? 'selected' : ''); ?>></option>
                                                        <option value="MALE" <?php echo e(old('gender') == "Male" ? 'selected' : ''); ?>>MALE</option>
                                                        <option value="FEMALE" <?php echo e(old('gender') == "Female" ? 'selected' : ''); ?>>FEMALE</option>

                                                    </select>

                                                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The gender field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="age" class="block my-3 text-sm font-medium -mb-0 text-black">Age:</label>
                                                    <input type="number" name="age" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" value=<?php echo e(old('age')); ?>>

                                                <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The age field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>

                                        <!-- placeofbirth, mothertounge -->
                                        <div class="grid gap-2 md:grid-cols-2">
                                                <div class="">
                                                    <label for="placeofbirth" class="block my-3 text-sm font-medium -mb-0 text-black">Place of Birth (Municipality/City only):</label>
                                                    <input type="text" name="placeofbirth" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('placeofbirth')); ?>>

                                                <?php $__errorArgs = ['placeofbirth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The place of birth field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="">
                                                    <label for="mothertongue" class="block my-3 text-sm font-medium -mb-0 text-black">Mother Tongue:</label>
                                                    <input type="text" name="mothertongue" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('mothertongue')); ?>>

                                                <?php $__errorArgs = ['mothertongue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-red text-sm p-1">The mother tongue field is required</p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                        </div>

                                        <!-- IP -->
                                        <div class="grid gap-2 md:grid-cols-2">

                                            <div>
                                                <label for="ips" class="block my-3 text-sm -mb-0 text-black">Belonging to any Indigenous Peoples (IP) Community/ Indigenous Cultural Community?</label>

                                                <select type="text" name="ips" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option disabled value="" <?php echo e(old('ips') == "" ? 'selected' : ''); ?>></option>
                                                    <option value="YES" <?php echo e(old('ips') == "YES" ? 'selected' : ''); ?>>YES</option>
                                                    <option value="NO" <?php echo e(old('ips') == "NO" ? 'selected' : ''); ?>>NO</option>

                                                </select>
                                            </div>

                                            <div>
                                                    <label for="ifyesips" class="block my-5 text-sm italic font-medium -mb-0 text-black">If Yes, please specify:</label>

                                                     <input type="text" name="ifyesips" class="w-full my-2.5 bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('ifyesips')); ?>>
                                            </div>

                                        </div>

                                        <!-- 4ps -->
                                        <div class="grid gap-2 md:grid-cols-2">

                                            <div>
                                                <label for="fps" class="block text-sm font-medium -mb-0 text-black">Is your Family a beneficiary of 4ps?</label>

                                                <select type="text" name="fps" class="w-full bg-gray-light-2 text-black text- rounded block  p-1.5  focus:outline-blue border border-blue">

                                                <option disabled value="" <?php echo e(old('fps') == "" ? 'selected' : ''); ?>></option>
                                                <option value="YES" <?php echo e(old('fps') == "YES" ? 'selected' : ''); ?>>YES</option>
                                                <option value="NO" <?php echo e(old('fps') == "NO" ? 'selected' : ''); ?>>NO</option>

                                            </select>
                                            </div>

                                            <div>
                                                <label for="ifyesfps" class="block -mb-0 text-sm italic font-medium  text-black">Type your 4Ps Householde ID Number below:</label>
                                                <input type="text" name="ifyesfps" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('ifyesfps')); ?>>
                                            </div>

                                        </div>

                                        <!-- currentaddress, permanentaddress -->
                                        <div>
                                            <div>
                                                <div class="my-3">
                                                    <hr>
                                                        <label for="currentaddress" class="block text-sm font-medium -mb-0 text-black">Current Address:</label>
                                                    <hr>
                                                </div>
                                                <div class="grid gap-1 md:grid-cols-3">
                                                    <div class="">
                                                        <label for="current_house" class="italic text-sm font-medium -mb-0 text-black">House No./Street:</label>
                                                        <input id="current_house" type="text" name="current_house" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_house')); ?>>

                                                        <?php $__errorArgs = ['current_house'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="current_brgy" class="italic text-sm font-medium -mb-0 text-black">Barangay:</label>
                                                        <input id="current_brgy" type="text" name="current_brgy" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_brgy')); ?>>

                                                        <?php $__errorArgs = ['current_brgy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="current_mun" class="italic text-sm font-medium -mb-0 text-black">Municipality/City:</label>
                                                        <input id="current_mun" type="text" name="current_mun" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_mun')); ?>>

                                                        <?php $__errorArgs = ['current_mun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="current_prov" class="italic text-sm font-medium -mb-0 text-black">Province:</label>
                                                        <input id="current_prov" type="text" name="current_prov" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_prov')); ?>>

                                                        <?php $__errorArgs = ['current_prov'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="current_zip" class="italic text-sm font-medium -mb-0 text-black">ZipCode:</label>
                                                        <input id="current_zip" type="number" name="current_zip" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_zip')); ?>>

                                                        <?php $__errorArgs = ['current_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="current_ctry" class="italic text-sm font-medium -mb-0 text-black">Country:</label>
                                                        <input id="current_ctry" type="text" name="current_ctry" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('current_ctry')); ?>>

                                                        <?php $__errorArgs = ['current_ctry'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                        <input id="permanent_house" type="text" name="permanent_house" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_house')); ?>>

                                                        <?php $__errorArgs = ['permanent_house'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_brgy" class="italic text-sm font-medium -mb-0 text-black">Barangay:</label>
                                                        <input id="permanent_brgy" type="text" name="permanent_brgy" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_brgy')); ?>>

                                                        <?php $__errorArgs = ['permanent_brgy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_mun" class="italic text-sm font-medium -mb-0 text-black">Municipality/City:</label>
                                                        <input id="permanent_mun" type="text" name="permanent_mun" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_mun')); ?>>

                                                        <?php $__errorArgs = ['permanent_mun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_prov" class="italic text-sm font-medium -mb-0 text-black">Province:</label>
                                                        <input id="permanent_prov" type="text" name="permanent_prov" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_prov')); ?>>

                                                        <?php $__errorArgs = ['permanent_prov'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_zip" class="italic text-sm font-medium -mb-0 text-black">ZipCode:</label>
                                                        <input id="permanent_zip" type="number" name="permanent_zip" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_zip')); ?>>

                                                        <?php $__errorArgs = ['permanent_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="">
                                                        <label for="permanent_ctry" class="italic text-sm font-medium -mb-0 text-black">Country:</label>
                                                        <input id="permanent_ctry" type="text" name="permanent_ctry" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5 focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('permanent_ctry')); ?>>

                                                        <?php $__errorArgs = ['permanent_ctry'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-red text-sm p-1">This field is required</p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                        <div>
                                                            <label for="flname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                            <input type="text" name="flname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('flname')); ?>>

                                                            <?php $__errorArgs = ['flname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="ffname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                            <input type="text" name="ffname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('ffname')); ?>>

                                                            <?php $__errorArgs = ['ffname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="fmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                            <input type="text" name="fmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('fmdname')); ?>>

                                                            <?php $__errorArgs = ['fmdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="fcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                            <input type="number" name="fcontact" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" value=<?php echo e(old('fcontact')); ?>>

                                                            <?php $__errorArgs = ['fcontact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Mother Name -->
                                                <div>
                                                    <label for="" class="block my-3 text-lg font-bold -mb-0 text-black">Mother's Name</label>

                                                    <div class="py-2">
                                                        <div>
                                                            <label for="mlname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                            <input type="text" name="mlname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('mlname')); ?>>

                                                            <?php $__errorArgs = ['mlname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="mfname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                            <input type="text" name="mfname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('mfname')); ?>>

                                                            <?php $__errorArgs = ['mfname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="mmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                            <input type="text" name="mmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('mmdname')); ?>>

                                                            <?php $__errorArgs = ['mmdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div>
                                                            <label for="mcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                            <input type="number" name="mcontact"  class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('mcontact')); ?>>

                                                            <?php $__errorArgs = ['mcontact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <p class="text-red text-sm p-1">This field is required</p>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>

                                        
                                        <div>
                                            <label for="" class="block my-3 text-lg font-bold -mb-0 text-black">Guardian's Name</label>

                                            <div class="py-2">
                                                <div>
                                                    <label for="glname" class="block my-3 text-sm font-medium -mb-0 text-black">Last Name:</label>
                                                    <input type="text" name="glname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('glname')); ?>>

                                                    <?php $__errorArgs = ['glname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1">This field is required</p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div>
                                                    <label for="gfname" class="block my-3 text-sm font-medium -mb-0 text-black">First Name:</label>
                                                    <input type="text" name="gfname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('gfname')); ?>>

                                                    <?php $__errorArgs = ['gfname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1">This field is required</p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div>
                                                    <label for="gmdname" class="block my-3 text-sm font-medium -mb-0 text-black">Middle Name:</label>
                                                    <input type="text" name="gmdname" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('gmdname')); ?>>

                                                    <?php $__errorArgs = ['gmdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1">This field is required</p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div>
                                                    <label for="gcontact" class="block my-3 text-sm font-medium -mb-0 text-black">Contact Number:</label>
                                                    <input type="number" name="gcontact" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('gcontact')); ?>>

                                                    <?php $__errorArgs = ['gcontact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-red text-sm p-1">This field is required</p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>

                                <section class="my-1">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">For Returning Learner (Balik-Aral) and Those Who will Transfer/Move In</span>
                                </section>

                                        <!-- Last Grade, School Year, School id -->
                                        <div class="grid gap-2 md:grid-cols-3 py-2">
                                                <div>
                                                    <label for="lastgradelevel" class="block my-3 text-sm font-medium -mb-0 text-black">Last Grade Level Completed:</label>
                                                    <input type="number" name="lastgradelevel" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" value=<?php echo e(old('lastgradelevel')); ?>>
                                                </div>

                                                <div>
                                                    <label for="lastschoolyear" class="block my-3 text-sm font-medium -mb-0 text-black">Last School Year Completed:</label>
                                                    <input type="text" name="lastschoolyear" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('lastschoolyear')); ?>>
                                                </div>

                                                <div>
                                                    <label for="schoolid" class="block my-3 text-sm font-medium -mb-0 text-black"> School ID:</label>
                                                    <input type="text" name="schoolid" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('schoolid')); ?>>
                                                </div>

                                        </div>

                                        <!-- Last School Attended -->
                                        <div>
                                            <label for="lastschoolattended" class="block  text-sm font-medium -mb-0 text-black">Last School Attended:</label>
                                            <input type="text" name="lastschoolattended" class="w-full bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue" style="text-transform:uppercase" value=<?php echo e(old('lastschoolattended')); ?>>
                                        </div>

                                <section class="my-5">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">For Learners in Senior High School</span>
                                </section>

                                        <!-- Sem, track, acad -->
                                        <div class="">
                                                <div>
                                                    <label for="sem" class="block text-sm font-medium -mb-0 text-black">Semester:</label>
                                                    <select type="text" name="sem" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" <?php echo e(old('sem') == "" ? 'selected' : ''); ?>></option>
                                                    <option value="1st SEMESTER" <?php echo e(old('sem') == "1st SEMESTER" ? 'selected' : ''); ?>>1st SEMESTER</option>
                                                    <option value="2nd SEMESTER" <?php echo e(old('sem') == "2nd SEMESTER" ? 'selected' : ''); ?>>2nd SEMESTER</option>

                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="track" class="block my-3 text-sm font-medium -mb-0 text-black">Track:</label>
                                                    <select type="text" name="track" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option value="" <?php echo e(old('track') == "" ? 'selected' : ''); ?>></option>
                                                    <option value="ACADEMIC TRACK" <?php echo e(old('track') == "ACADEMIC TRACK" ? 'selected' : ''); ?>>ACADEMIC TRACK</option>
                                                    <option value="TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" <?php echo e(old('track') == "TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" ? 'selected' : ''); ?>>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</option>


                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="strands" class="block my-3 text-sm font-medium -mb-0 text-black">Strand:</label>
                                                    <select type="text" name="strands" class="w-full bg-gray-light-2 text-black text-sm rounded block  p-1.5  focus:outline-blue border border-blue">

                                                    <option disabled value="" <?php echo e(old('strands') == "" ? 'selected' : ''); ?>></option>
                                                    <option disabled class="font-bold" value="ACADEMIC TRACK" <?php echo e(old('strands') == "ACADEMIC TRACK" ? 'selected' : ''); ?>>ACADEMIC TRACK</option>
                                                    <option value="BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" <?php echo e(old('strands') == "BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)" ? 'selected' : ''); ?>>BUSINESS, ACCOUNTANCY, MANAGEMENT (ABM)</option>
                                                    <option value="HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " <?php echo e(old('strands') == "HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) " ? 'selected' : ''); ?>>HUMANITIES, EDUCATION, SOCIAL SCIENCES (HUMSS) </option>
                                                    <option value="SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM) " <?php echo e(old('strands') == "SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM) " ? 'selected' : ''); ?>>SCIENCE, TECHNOLOGY, ENGINEERING, and MATHEMATICS (STEM)</option>
                                                    <option value="GENERAL ACADEMIC STRAND (GAS)" <?php echo e(old('strands') == "GENERAL ACADEMIC STRAND (GAS)" ? 'selected' : ''); ?>>GENERAL ACADEMIC STRAND (GAS)</option>

                                                    <option disabled value="" <?php echo e(old('strands') == "" ? 'selected' : ''); ?>></option>
                                                    <option disabled class="font-bold"value="TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" <?php echo e(old('strands') == "TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK" ? 'selected' : ''); ?>>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</option>
                                                    <option value="COMPUTER SYSTEMS SERVICING (CSS)" <?php echo e(old('strands') == "COMPUTER SYSTEMS SERVICING (CSS)" ? 'selected' : ''); ?>>COMPUTER SYSTEMS SERVICING (CSS)</option>
                                                    <option value="ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" <?php echo e(old('strands') == "ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)" ? 'selected' : ''); ?>>ELECTRICAL INSTALLATION AND MAINTENANCE (EIM)</option>
                                                    <option value="FOOD AND BEVERAGE SERVICES (FBS)" <?php echo e(old('strands') == "FOOD AND BEVERAGE SERVICES (FBS)" ? 'selected' : ''); ?>>FOOD AND BEVERAGE SERVICES (FBS)</option>
                                                    <option value="SHIELDED METAL ARC WELDING (SMAW)" <?php echo e(old('strands') == "SHIELDED METAL ARC WELDING (SMAW)" ? 'selected' : ''); ?>>SHIELDED METAL ARC WELDING (SMAW)</option>

                                                    </select>
                                                </div>
                                        </div>

                                <section class="my-5">
                                    <span class="block bg-blue text-white font-bold text-center text-base p-1">Preferred Distance Learning Modality/ies</span>
                                </section>

                                        <!-- modalities -->
                                        <div class="block">
                                            <select type="text" name="modality/ies" class="w-full bg-gray-light-2 text-black  rounded  p-1.5  focus:outline-blue border border-blue">

                                                <option disabled value="" <?php echo e(old('modality/ies') == "" ? 'selected' : ''); ?>></option>
                                                <option value="Modular (Print)" <?php echo e(old('modality/ies') == "Modular (Print)" ? 'selected' : ''); ?>>Modular (Print)</option>
                                                <option value="Modular (Digital)" <?php echo e(old('modality/ies') == "Modular (Digital)" ? 'selected' : ''); ?>>Modular (Digital)</option>
                                                <option value="Online" <?php echo e(old('modality/ies') == "Online" ? 'selected' : ''); ?>>Online</option>
                                                <option value="Educational Television" <?php echo e(old('modality/ies') == "Educational Television" ? 'selected' : ''); ?>>Educational Television</option>
                                                <option value="Radio-Based Instruction" <?php echo e(old('modality/ies') == "Radio-Based Instruction" ? 'selected' : ''); ?>>Radio-Based Instruction</option>
                                                <option value="Homeschooling" <?php echo e(old('modality/ies') == "Homeschooling" ? 'selected' : ''); ?>>Homeschooling</option>
                                                <option value="Blended" <?php echo e(old('modality/ies') == "Blended" ? 'selected' : ''); ?>>Blended</option>
                                                <option value="Face to Face" <?php echo e(old('modality/ies') == "Face to Face" ? 'selected' : ''); ?>>Face to Face</option>

                                            </select>

                                        </div>

                                        <div class="my-5">
                                            <hr>
                                            <label class="block text-black font-bold text-base mt-5">Data Privacy Statement</label>

                                            <label class="block text-black text-sm mt-0">Please click <a  class="text-blue italic font-bold" id="here" style="cursor: pointer;">Here </a> to read Institutional Data Privacy Statement of Sta. Cruz Senior High School.</label>
                                        </div>


                                        <div class="-my-4 mb-0">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <input type="checkbox" class="w-3 h-3 mx-1 m" required>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="">
                                                                <label class="text-black" style="font-size: 10px; text-align: justify">I confirm that I have read, understood, and hereby agree to the Data Privacy Statement and Policies of Sta. Cruz Senior High School.</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>



                    <div style="align-self: flex-end">
                        <div>
                            <button  type="submit" class="block bg-green-600 hover:bg-green-dark text-white  my-2 rounded shadow-lg hover:shadow-xl transition duration-300 h-10 w-19" >Submit</button>
                        </div>
                    </div>


                    <div style="font-size: 12px;">
                        <p>
                            Note: For inquiries please reach us at the School Registar Office.
                        </p>
                    </div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <div class="modal-header" style="font-size: 20px;">
                            <span class="close">&times;</span>
                            <p class="text-left font-bold my-2">
                                Data Privacy Statement
                            </p>
                          </div>
                          <div class="modal-body">
                            <p class="text-center my-5">
                                Institutional Data Privacy Statement
                            </p>
                            <p class="text-justify mb-8">
                                In accordance with the Data Privacy Act of 2012 (R.A. 10173) and its Implementing Rules and Regulations, the School puts forth its efforts to protect the right to privacy of its stakeholders. The school strictly employs its privacy protocols in the collection, processing, disclosure, storage, and transmission of personal and privileged data as obliged by the National Privacy Commission.
                                <br> <br>
                                This Institutional Data Privacy Statement (IDPS) of the School is designed to state the general data privacy framework in which the school adheres. Due to the numerous subordinating offices of the school, this statement may not contain specific information with regards to the data collection and processing of a particular office or purpose. Thus, every other privacy statement or notice produced and to be produced by the School for a particular office or purpose shall be consistent with this IDPS and with the school's Privacy Manual.
                            </p>
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>

                    </div>

                    
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header" style="font-size: 20px;">
                            <span class="close">&times;</span>
                            <p class="text-left font-bold my-2">
                                Data Privacy Statement
                            </p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center my-5">
                                Institutional Data Privacy Statement
                            </p>
                            <p class="text-justify mb-8">
                                In accordance with the Data Privacy Act of 2012 (R.A. 10173) and its Implementing Rules and Regulations, the School puts forth
                            </p>
                        </div>
                        <div class="modal-footer">
                        </div>
                        </div>

    </div>

                </form>
    </main>



<footer class="p-4 bg-gray-darkest text-white -mb-6" style="margin-right: -8px; margin-left: -8px;">
    <div>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 mb-0">© 2022. All Rights Reserved.
        </span>
    </div>
</footer>



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

        var modal = document.getElementById("myModal");

        var btn = document.getElementById("here");

        var span = document.getElementsByClassName("close")[0];


        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }


        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

    </script>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\sta._cruz_senior_high\resources\views/enrollmentform/enrollment_form.blade.php ENDPATH**/ ?>