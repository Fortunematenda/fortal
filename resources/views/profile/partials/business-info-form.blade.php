
@section('head')
    <meta charset="UTF-8"> <!-- Character encoding declaration -->
@endsection

@section('content')
<div class='modal-alerts px-2'></div>
<div class='container'>
    <hr>
    <div class="transaction-log-table mt-4">
        <h4 class="mb-3">Credit Transaction Log</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Credits</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->transaction_type }}</td>
                        <td>{{ $transaction->credits }}</td>
                        <td>{{ $transaction->date_entered->format('d M Y H:i') }}</td>
                    </tr>
                @endforeach
                @if($transactions->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No transactions found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!-- Pagination (optional) -->
        <nav>
            <ul class="pagination"></ul>
        </nav>
    </div>
</div>
<input type="hidden" id="user-id" value="{{ auth()->user()->id }}">
@endsection
