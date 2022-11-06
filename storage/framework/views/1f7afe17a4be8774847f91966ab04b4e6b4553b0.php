<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
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

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-2xl font-bold text-black text-center">
                Sta. Cruz Senior High School <br>Online Enrollment Form
            </h1>
        </a>
    </header>

    <main>
        <section>
            <form action="/store" method="POST">
                <?php echo csrf_field(); ?>
                    <label for="school_years" class="block my-3 text-sm font-medium -mb-0 text-black">School Year:</label>
                    <input type="text" name="school_years" class="w-20 bg-gray-light-2 text-black text-lg rounded block  p-1.5  focus:outline-blue border border-blue">

                <button type="submit" class="block bg-green-600 hover:bg-green-dark text-white  mt-7 rounded shadow-lg hover:shadow-xl transition duration-300 h-10 w-20">Submit</button>
            </form>
        </section>
    </main>



<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\sta._cruz_senior_high\resources\views/dashboard/index.blade.php ENDPATH**/ ?>