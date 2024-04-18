<x-layout title="Registrati">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h1>Registrati</h1>

            <form action="/register" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password_confirmation">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Registrati</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>