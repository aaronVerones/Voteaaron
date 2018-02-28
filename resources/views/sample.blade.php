{{--CONCRETE PLANS--}}
<div class="col-md-8 col-md-offset-2 text-center">
    <h3>Concrete Plans</h3>
    <h5>("that sounds nice, but how will you do it?")</h5>
</div>
<div class="clearfix"></div>
<div class="row" >
    <?php $options = [
        'title' => 'AMS Website Restructure',
        'step1' => 'Step 1',
        'step2' => 'Step 2',
        'step3' => 'Step 3',
        'link' => '#'
    ]; ?>
    @include('include-concrete-card', $options)
    <?php $options = [
        'title' => 'Bookings Review',
        'step1' => 'Step 1',
        'step2' => 'Step 2',
        'step3' => 'Step 3',
        'link' => '#'
    ]; ?>
    @include('include-concrete-card', $options)
    <?php $options = [
        'title' => 'Spending Plan',
        'step1' => 'Step 1',
        'step2' => 'Step 2',
        'step3' => 'Step 3',
        'link' => '#'
    ]; ?>
    @include('include-concrete-card', $options)
</div>
{{--END CONCRETE PLANS--}}
