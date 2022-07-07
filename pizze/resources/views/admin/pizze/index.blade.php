@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Popolarità</th>
                <th scope="col">Vegana</th>
                <th scope="col">Azioni</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($pizze as $pizza)
                    <tr>
                        <th scope="row">{{ $pizza->id }}</th>
                        <td>{{ $pizza->name }}</td>
                        <td>{{ $pizza->price }}</td>
                        <td>{{ $pizza->popularity }}</td>
                        <td>{{ $pizza->is_veggie == true ? 'Sì' : 'No' }}</td>
                        <td>
                            <a href="" class="btn btn-primary">
                                Show
                            </a>
                            <a href="" class="btn btn-secondary">
                                Edit
                            </a>
                            <form action="{{  }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row justify-content-center text-center">
            <div class="col-2">
                {{ $pizze->links() }}
            </div>
        </div>
    </div>
@endsection
