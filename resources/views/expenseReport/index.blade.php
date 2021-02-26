@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
            <table class="table">
                @foreach($expenseReports as $expenseReport)
                    <tr><!--Fila-->
                        <td>{{ $expenseReport->title }}</td><!--Columna-->
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection