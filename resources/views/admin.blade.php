@extends('layouts.basic')

@section('content')

<body class="index-page">
    <div class="col-md-6 pending-endorsements">

        <h2 style="margin-top 30px">Endorsements Pending:</h2>
        @foreach ($endorsements as $endorsement)
        @if ($endorsement->status == 'pending')
        <div id="endorsement_{{$endorsement->id}}" class="col-md-12" style="padding-top:50px">
            <div class="col-md-4">
                {{ $endorsement->individual_name }} {{$endorsement->group_name}} <br>
                <ul>
                    <li>Position: {{$endorsement->position}}</li>
                    <li>Message: {{$endorsement->message}}</li>
                </ul>
            </div>
            <div class="col-md-8">
                <button onclick="updateEndorsement({{$endorsement->id}}, 'approved')" name="button">approve</button>
                <button class="btn-danger"onclick="updateEndorsement({{$endorsement->id}}, 'deleted')" name="button">delete</button>
            </div>
        </div>

        @endif
        @endforeach
    </div>
    <div class="col-md-6 approved-endorsements">
        <h2 style="margin-top 30px">Endorsements Approved:</h2>
        @foreach ($endorsements as $endorsement)
        @if ($endorsement->status == 'approved')
        <div id="endorsement_{{$endorsement->id}}" class="col-md-12" style="padding-top:50px">
            <div class="col-md-4">
                {{ $endorsement->individual_name }} {{$endorsement->group_name}} <br>
                <ul>
                    <li>Position: {{$endorsement->position}}</li>
                    <li>Message: {{$endorsement->message}}</li>
                </ul>
            </div>
            <div class="col-md-8">
                <button onclick="updateEndorsement({{$endorsement->id}}, 'pending')" name="button">pending</button>
            </div>
        </div>

        @endif
        @endforeach
    </div>
</body>


<script type="text/javascript">

var pending_endorsement = ``

function updateEndorsement(e_id, status) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
        type: "POST",
        url: "/admin/update_endorsement",
        data: {
            e_id : e_id,
            status : status,
        }
    }).done(function(data){
        $('#endorsement_'+e_id).remove();
    }).fail(function(data){
        alert('fail');
    });
}
</script>

@endsection
