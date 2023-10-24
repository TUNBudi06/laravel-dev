@extends('layout.layout')

@section("content")
    <div class="container-fluid pt-lg-5 bg-black">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}<br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table" width="100%">
            <thead>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Komentar</th>
            <th scope="col">CHANGE?DELETE</th>
            </thead>
            <tbody>
                @foreach($posts as $index => $post)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>
                           {{ $post->name }}
                        </td>
                        <td>
                            {{ $post->message }}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-1"><a class="btn btn-warning" href="{{ route("komentar.edit",$post->id) }}" >EDIT</a></div>
                                <div class="col-2 ps-5">
                                    <form action="{{url('komentar',$post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">DELETE</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
