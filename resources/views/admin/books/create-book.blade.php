@extends("layouts.admin-app")
@section("content")
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Kitap Ekle</h4>
        </div>

        <hr>

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/admin/kitaplar') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Resim:</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" required>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Başlık:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Açıklama:</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- category -->
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Kategori:</label>
                        <select class="form-select @error('categoryId') is-invalid @enderror" name="categoryId" id="category" aria-label="Default select example" required>
                            <option value="" selected>Kategori seçiniz</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('categoryId')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- publisher -->
                    <div class="mb-3">
                        <label for="publisherId" class="form-label">Yayımcı:</label>
                        <select class="form-select @error('publisherId') is-invalid @enderror" name="publisherId" id="publisher" aria-label="Default select example" required>
                            <option value="" selected>Yayımcı seçiniz</option>
                            @foreach($publishers as $publisher)
                                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                            @endforeach
                        </select>
                        @error('publisherId')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- writer -->
                    <div class="mb-3">
                        <label for="writerId" class="form-label">Yazar:</label>
                        <select class="form-select @error('writerId') is-invalid @enderror" name="writerId" id="writer" aria-label="Default select example" required>
                            <option value="" selected>Yazar seçiniz</option>
                            @foreach($writers as $writer)
                                <option value="{{ $writer->id }}">{{ $writer->name }}</option>
                            @endforeach
                        </select>
                        @error('writerId')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Yazar Ekle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
