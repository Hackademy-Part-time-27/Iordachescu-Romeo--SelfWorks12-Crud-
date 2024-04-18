<x-layout :title="$article->title">
    <h1>{{ $article->title }}</h1>

    <div>
        <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
    </div>

    <div>
        {{ $article->body }}
    </div>
</x-layout>