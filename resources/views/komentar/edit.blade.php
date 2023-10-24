{{--@dd($data)--}}
@extends("layout.layout")

@section("content")
    <div class="container mt-5">
        <h1>Komentar</h1>
        <form action="{{ url("komentar",$data->id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ $data->name }}">
                    </h5>
                    <input type="email" name="email" value="{{$data->email}}" class="form-control @error('email') is-invalid @enderror" required readonly placeholder="Email">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <small class="card-text">message:</small>
                        <p class="card-text text-center">
                        <div class="input-items default">
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" required placeholder="Message">{{$data->message}}</textarea>
                        </div>
                        </p>
                    </li>
                    <li class="list-group-item">created at: {{ $data->created_at->format(" d-M-y H:i:s") }}</li>
                    <li class="list-group-item">Updated at: {{ $data->updated_at->format(" d-M-y H:i:s") }}</li>
                </ul>
                <div class="card-body row">
                        <div class="col-1">
                            <a href="{{route("komentar.index")}}" class="btn btn-dark">Cancel</a>
                        </div>
                        <div class="col-1"><button type="submit" class="btn btn-info">SUBMIT</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
