<x-layout title="Account">

    @auth
    <h1>Benvenuto {{ auth()->user()->name }}</h1>
    
    <div class="mt-3">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-sm btn-danger">Esci</button>
        </form>
    </div>
    @else
    <h1>Benvenuto Anonimo</h1>
    @endauth

</x-layout>