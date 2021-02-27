 @extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
        <h1>Delete Report {{ $report->title }}</h1> <!--$report igual como lo retornamos en el controlador-->
        <div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <form action="/expense_reports/{{ $report->id }}" method="POST"> <!--El method de html solo tiene POST GET-->
                @csrf
                @method('delete') <!--Especificamos para que internamente haga el PUT-->
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection