@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        <div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-success" href="/expense_reports/create">Create new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($expenseReports as $expenseReport) <!--$expenseReports key del controlador metodo index-->
                    <tr><!--Fila-->
                        <td>{{ $expenseReport->title }}</td><!--Columna-->
                        <td><a href="/expense_reports/{{$expenseReport->id}}/edit" class="btn btn-info">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection