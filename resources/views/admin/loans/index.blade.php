@extends('admin.layouts.backoffice')

@section('title')
Loans List
@endsection

@section('content')
{{-- <h1>Qui c'è la lista dei prestiti</h1>
@dump($loans)

<ul>
    @foreach ($loans as $loan)
        <li>{{$loan->notes}}</li>
    @endforeach
</ul> --}}

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($loans as $loan)
        <tr>
            <td>{{$loan->id}}</td>
            <td>{{$loan->user->name}}</td>
            <td>{{$loan->start_date}}</td>
            <td>{{$loan->end_date}}</td>
            <td>
                <button class="btn btn-primary"><a href="{{route('admin.loans.show', ['id' => $loan->id])}}" class="text-white">View</a></button>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $loans->links() }}

@endsection
