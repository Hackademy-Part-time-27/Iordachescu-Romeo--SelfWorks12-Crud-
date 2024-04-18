<x-layout title="Articoli">
    <h1>Articoli</h1>

    @foreach($articles as $article)
        <x-card :title="$article->title" :link="route('public.articles.view', $article)" />
    @endforeach
</x-layout>