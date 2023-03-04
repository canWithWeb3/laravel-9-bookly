@extends("layouts.admin-app")
@section("content")
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Kategori Güncelle</h4>
        </div>

        <hr>

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/admin/kategoriler/' . $category->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                        <label for="name" class="form-label">Başlık:</label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="@if(old('name')){{old('name')}}@else{{ $category->name }}@endif"
                            required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Kategori Güncelle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
