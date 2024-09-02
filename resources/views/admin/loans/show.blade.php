@extends('admin.layouts.backoffice')

@section('title')
Singolo prestito
@endsection

@section('content')
{{-- <h1>Qui c'è il singolo prestito</h1> --}}
{{-- @dump($loan) --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header"><strong>Loan no. {{$loan->id}}</strong></div>
                <div class="card-body text-dark mb-3">
                    <h5 class="card-title mb-3">made by: {{$loan->user->name}}</h5>
                    <h6>on: {{$loan->start_date}}</h6>
                    <h6>deadline: {{$loan->end_date}}</h6>

                    <h5>Loan notes:</h5>
                    <p class="card-text"><em>{{$loan->notes}}</em></p>
                </div>
                <div class="card-body text-dark">
                    <h4>Books Rented</h4>
                    <ul>
                        @foreach ($loan->books as $book)
                            <li><a href="{{route('admin.books.show', ['book' => $book->id])}}">{{$book->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
