@extends('layout')

@section('title', 'Budgets')

@section('body')
    <div class="wrapper my-3">
        <h2>Budgets</h2>
        <div class="box mt-3">
            @if (!count($budgets))
                <div class="box__section text-center">There aren't any budgets (yet)</div>
            @endif
            @foreach ($budgets as $budget)
                <div class="box__section">
                    <div>{{ $budget->tag->name }}</div>
                    <progress class="mt-2 mb-1" value="500" min="0" max="{{ $budget->amount }}"></progress>
                    <div style="font-size: 14px; font-weight: 600;">Spent {!! $currency !!} {{ $budget->spent }} of {{ $budget->formatted_amount }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
