<div class="row section-header">
    <div class="col-12">
        <div class="row settings-back">
            <div class="col-12 d-flex">
                <a class="d-flex text-grey-400" href="/settings">
                    <span class="bark-svg-icon bsi-primary-grey-400 align-self-center bsi-sm">
                        <!-- SVG icon code -->
                    </span>
                </a>
            </div>
        </div>


        <div class="row" style="font-weight:bold">
            <h2 class="col-12 subsection-title">My Credits</h2>
        </div>
        <div class='modal-footer justify-content-between'>
            <button class='btn btn-success credit-upsell-topup-submit mx-auto'>
                <span>You have {{$credits_balance}} Credits</span>
                <span class='loading-text'><span class='spinner spinner-border d-none'></span></span>
            </button>
        </div>
    </div>
</div>

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
        <!-- Pagination -->
        <nav>
            <ul class="pagination">
           
            </ul>
        </nav>
    </div>
</div>
<input type="hidden" id="user-id" value="{{ auth()->user()->id }}"> <!-- Example User ID -->
