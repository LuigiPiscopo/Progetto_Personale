<x-layout>
    <div class="container mb-5 ">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center mt-5">
                <h1 class="display-4 pt-5 primo">
                    Accedi
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5 ">
            <div class="col-12 col-md-6 shadow p-5 bg-primo border">
            <form method="POST" action="{{ route('login') }}" class="">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control shadow" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                </div>
                <button type="submit" class="btn white primo mt-2 bottone">Accedi</button>
            </form>
        </div>
        </div>
    </div>
</x-layout>
