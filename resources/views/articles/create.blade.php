<x-layout title="Crea Articolo">
    <a href="{{ route('articles.index') }}">indietro</a>
    <h1>Crea Articolo</h1>

    <x-success />

    <form action="{{ route('articles.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="body">Corpo</label>
                <textarea name="body" id="body" class="form-control" rows="15">{{ old('body') }}</textarea>
                @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="image">Immagine</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
        </div>
    </form>
</x-layout>