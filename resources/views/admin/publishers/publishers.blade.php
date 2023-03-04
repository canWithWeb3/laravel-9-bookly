@extends("layouts.admin-app")
@section("content")
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Yayımcılar</h4>
            <a href="/admin/yayimcilar/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Ekle</a>
        </div>

        <hr>

        <div>
            <table class="table table-responsive table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th class="th-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publishers as $publisher)
                        <tr>
                            <td>{{ $publisher->name }}</td>
                            <td class="d-flex gap-2 flex-wrap">
                                <a href="{{ url('/admin/yayimcilar/' . $publisher->id . '/edit') }}" class="btn btn-warning btn-sm">Güncelle</a>
                                <form action="{{ url('/admin/yayimcilar/' . $publisher->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
