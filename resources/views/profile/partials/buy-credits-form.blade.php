<link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

<div class="container my-5">
    <div class="section-header p-4 rounded shadow-sm bg-light">
        <div class="">
            <a class="text-secondary" href="/settings">
                <span class="bark-svg-icon bsi-primary-grey-400 align-self-center bsi-sm">
                    <!-- SVG icon code -->
                </span>
            </a>
            
            <h2 align="center" class="mt-4 text-center">Purchase Credits</h2>
        </div>
    </div>

    <div class="mt-4 text-center">
        <button class="btn btn-success credit-upsell-topup-submit">
            <span>You have {{$credits_balance}} Credits</span>
            <span class="loading-text"><span class="spinner spinner-border d-none"></span></span>
        </button>
    </div>

    <div class="container mt-5">
        <!-- Package Section -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <!-- Basic Package -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm text-center package-basic">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Basic Package</h5>
                        <p class="badge bg-primary">5% OFF</p>
                        <p class="card-text">About 10 responses</p>
                        <p class="price">R175.00 <small></small></p>
                        <p><i class="bi bi-coin"></i> 50 credits </p>
                        <form method="POST" action="{{ route('purchase') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="1">
                            <button type="submit" class="btn btn-primary w-100">Purchase</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Standard Package -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm text-center package-standard bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Standard Package</h5>
                        <p class="badge bg-primary">15% OFF</p>
                        <p>About 15 responses</p>
                        <p class="price">R300.00 <small></small></p>
                        <p><i class="bi bi-coin"></i> 100 credits </p>
                        <form method="POST" action="{{ route('purchase') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="2">
                            <button type="submit" class="btn btn-primary w-100">Purchase</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm text-center package-premium bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Premium Package</h5>
                        <p class="badge bg-light text-dark">20% OFF</p>
                        <p>About 20 responses</p>
                        <p class="price">R500.00 <small></small></p>
                        <p><i class="bi bi-coin"></i> 200 credits</p>
                        <form method="POST" action="{{ route('purchase') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="3">
                            <button type="submit" class="btn btn-light w-100">Purchase</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Premium Plus Package
            <div class="col">
                <div class="card h-100 border-0 shadow-sm text-center package-premium-plus bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Premium Plus Package</h5>
                        <p class="badge bg-warning">100% OFF</p>
                        <p>Unlimited responses</p>
                        <p class="price">R500.00/Month <small></small></p>
                        <p><i class="bi bi-coin"></i> Unlimited Monthly Credits</p>
                        <form method="POST" action="{{ route('purchase') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="4">
                            <button type="submit" class="btn btn-light w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- Transaction History Button -->
        <div class="mt-5 text-center">
            <button class="btn btn-outline-secondary" id="transaction-history-button">
                Transaction History
                <span class="spinner spinner-border d-none"></span>
            </button>
        </div>
    </div>

    <!-- Transaction Log Section -->
    <div class="transaction-log-section mt-4" style="display: none;">
        <div class="container p-4 bg-light rounded shadow-sm">
            <h4>Credit Transaction Log</h4>
            <hr>
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
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.getElementById('transaction-history-button');
        const transactionLogSection = document.querySelector('.transaction-log-section');

        button.addEventListener('click', function () {
            transactionLogSection.style.display = transactionLogSection.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>
