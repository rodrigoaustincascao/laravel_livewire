<div>
    Show Tweets
    <p>{{$content}}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
        {{$message}}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>

    @foreach($tweets as $tweet)
    {{$tweet->user->name}} - {{$tweet->content}}
    @endforeach

    <hr>
    <div>
        {{$tweets->links()}}
    </div>
</div>