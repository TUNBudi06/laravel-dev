{{--@dd($data)--}}
@extends("layout.layout")

@section("content")
        <div class="container mt-5">
            <h1>Komentar</h1>
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <small>{{$data->email}}</small>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <small class="card-text">message:</small>
                        <p class="card-text text-center">{{$data->message}}</p>
                    </li>
                    <li class="list-group-item">created at: {{ $data->created_at->format(" d-M-y H:i:s") }}</li>
                    <li class="list-group-item">Updated at: {{ $data->updated_at->format(" d-M-y H:i:s") }}</li>
                </ul>
                <div class="card-body">
                    <div class="row" style="padding-left: 32rem;" >
                        <div class="col-1"><a href="{{ route("komentar.edit",$data->id) }}"><button class="btn btn-info">EDIT</button></a></div>
                        <div class="col-1 ps-3">
                            <form action="{{url('komentar',$data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        </div>
                        <div class="col-1 ps-5">
                            <a href="{{route("komentar.index")}}" class="btn btn-dark">BACk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
