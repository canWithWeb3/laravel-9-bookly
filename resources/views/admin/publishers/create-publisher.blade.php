@extends("layouts.admin-app")
@section("content")
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Yayımcı Ekle</h4>
        </div>

        <hr>

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/admin/yayimcilar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Başlık:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Yayımcı Ekle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
