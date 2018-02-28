@extends('layouts.basic')

@section('content')

<style>
.other {
    display: none;
}
.individual {
    display: none;
}
.group  {
    display: none;
}
</style>
<div class="col-md-12">
    <h2 style="margin-top 30px">Submit an Endorsement:</h2>
</div>


<form action="/endorse/submit" method="post">
    {{ csrf_field() }}
    <div class="col-md-12">
        <text class="">Endorsing on behalf of an individual or group?<br></text>
    </div>
    <div class="col-md-12">
        <label>Individual</label>
        <input type="radio" name="type" value="individual">
        <label>Group</label>
        <input type="radio" name="type" value="group">
    </div>
    <br class="other">

    {{--fields for individual--}}
    <div class="col-md-2">
        <text class="individual">Your Name:*</text>
    </div>
    <div class="col-md-10">
        <input class="individual" type="text" name="individual_name">
    </div>
    <br class="individual">

    <div class="col-md-2">
        <text class="individual">Position:</text>
    </div>
    <div class="col-md-10">
        <input class="individual" type="text" name="position">
    </div>
    <br class="individual">

    {{--end--}}

    {{--fields for group--}}
    <div class="col-md-2">
        <text class="group">Group Name:*</text>
    </div>
    <div class="col-md-10">
        <input class="group" type="text" name="group_name">
    </div>
    <br class="group">
    <div class="col-md-2">
        <text class="group">Number of Members:</text>
    </div>
    <div class="col-md-10">
        <input class="group" type="number" name="number_of_members">
    </div>
    <br class="group">

    {{--end--}}

    {{--other fields--}}
    <div class="col-md-2">
        <text class="other">Message:</text>
    </div>
    <div class="col-md-10">
        <textarea class="other" rows="5" name="message"></textarea>
    </div>

    {{--end--}}
    <div class="col-md-2">
        <input class="other" type="submit" value="Submit">
    </div>
</form>



<script>

$('input[type=radio]').on('change', function() {
    var type = $('input[type=radio]:checked').val()
    if (type == 'group') {
        $('.group').show();
        $('.individual').hide();
    } else if (type == 'individual') {
        $('.group').hide();
        $('.individual').show();
    }
    $('.other').show();
})
</script>
@stop
