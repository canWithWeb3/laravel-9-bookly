@extends("layouts.app")

@section("content")
    <div class="container py-5">
        @if(session("alert_message"))
            <div class="alert alert-warning">
                <p class="mb-0">{{ session("alert_message") }}</p>
            </div>
        @endif

        <div class="row g-lg-4 g-3">
            <div class="col-xl-3 col-md-4">
                <img src="{{ asset($book->image) }}" alt="" class="img-fluid rounded">
            </div>

            <div class="col-xl-9 col-md-8">
                <h1>{{ $book->name }}</h1>

                <div class="my-3 price">
                    <span class="fs-3 text-success fw-bold">$16.99</span>
                    <span class="text-decoration-line-through fs-5">$20.99</span>
                </div>

                <p class="lead mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis quasi eaque voluptate odit obcaecati quisquam nemo natus explicabo consectetur doloribus, vel quidem commodi unde sapiente dignissimos animi tempore dicta iste eligendi voluptatem, amet ad!</p>

                <form action="{{ url('/addToCart/' . $book->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-success">ADD TO CART</button>
                </form>
            </div>
        </div>
    </div>
@endsection
