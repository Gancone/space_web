<x-main>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{-- password.email --}}
                <form class="p-5 border rounded" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Recupera Ora</button>

                </form>
            </div>
        </div>
    </div>
</x-main>