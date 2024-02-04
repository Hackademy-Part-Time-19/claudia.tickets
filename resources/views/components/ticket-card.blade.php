<div class="card">
    <div class="card-header">
        Ticket: {{$id}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Aperto da {{$name}} il {{$date}}</h5>
        <p class="card-text bg-success", style="width: 100px">{{$content}}</p>
        <p class="card-text">{{$description ??''}}</p>
        <a href="{{ route('ticket.show', compact('id')) }}" class="btn btn-primary">Rispondi</a>
    </div>
</div>
