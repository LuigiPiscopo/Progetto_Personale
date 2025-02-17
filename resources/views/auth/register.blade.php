<x-layout>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 text-center ">
                <h1 class="display-4 pt-5 primo mt-5">
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6 bg-primo p-5 shadow border">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control shadow" id="name" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control shadow" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control shadow" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" class="form-control shadow" id="password_confirmation" name="password_confirmation">
                </div>
                
                <button type="submit" class="btn white primo mt-2 bottone">Registrati</button>
            </form>
        </div>
        </div>
    </div>
</x-layout>
