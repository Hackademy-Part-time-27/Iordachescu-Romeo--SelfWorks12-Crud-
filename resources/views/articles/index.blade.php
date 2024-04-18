<x-layout title="Elenco Articoli">
    <div class="row">
        <div class="col-lg-6">
            <h1>Elenco Articoli</h1>
        </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Crea Articolo</a>
        </div>
    </div>

    <x-success />

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td class="text-end">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-secondary">modifica</a>
                    <form class="d-inline ms-2" action="{{ route('articles.destroy', $article) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>