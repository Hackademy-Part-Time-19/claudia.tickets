<x-main-layout>

    <div class="container">
        <div class="collumn">
            <div class="col 12">
                <h1 class="text-center">Dettaglio ticket {{$id}}</h1>
            </div>
            @if (session()->has('success'))
            <div class="col 12 mt-5 alert alert-succes">
                {{session('success')}}

            </div>                
            @endif
            
            <div class="col 12 mt-5">
                <x-ticket-card :id="$id" :name="$ticket['name']" :date="$ticket['created_at']" :content="$ticket['status']">
                    :description="$ticket['description']"
                </x-ticket-card>
               
            </div>
            <form action="{{route('send_email')}}" method="post">
                @csrf
                <input name="id" id="hidden" type="hidden" value="{{$id}}">
                <label for="answer">Risposta</label>
                <textarea name="answer" id="answer" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-primary">Send</button>
            
            </form>
        </div>
    </div>
</x-main-layout>
