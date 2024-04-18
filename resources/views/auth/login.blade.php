<x-layout title="Accedi">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h1>Accedi</h1>

            <form action="/login" method="POST">
                @csrf
                <div class="row g-3">
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
                        <button class="btn btn-primary" type="submit">Accedi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>