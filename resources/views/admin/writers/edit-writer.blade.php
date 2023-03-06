@extends("layouts.admin-app")
@section("content")
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Yazar Güncelle</h4>
        </div>

        <hr>

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/admin/yazarlar/' . $writer->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                        <label for="image" class="form-label">Resim:</label>
                        <input type="file" name="image" id="image"
                            class="form-control"
                            value="@if(old('image')){{old('image')}}@else{{ $writer->image }}@endif"
                            >
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- <div class="mb-3">
                        <label for="image" class="form-label">Resim:</label>
                        <input type="text" name="image"
                            class="form-control @error('image') is-invalid @enderror"
                            value="@if(old('image')){{old('image')}}@else{{ $writer->image }}@endif"
                            required>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> -->

                    <div class="mb-3">
                        <label for="name" class="form-label">Başlık:</label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="@if(old('name')){{old('name')}}@else{{ $writer->name }}@endif"
                            required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Yazar Güncelle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
