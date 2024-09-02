@extends('admin.layouts.backoffice')

@section('title')
Loans List
@endsection

@section('content')
<h1>Qui c'è la lista dei prestiti</h1>
@dump($loans)

<ul>
    @foreach ($loans as $loan)
        <li>{{$loan->notes}}</li>
    @endforeach
</ul>

{{ $loans->links() }}

@endsection
