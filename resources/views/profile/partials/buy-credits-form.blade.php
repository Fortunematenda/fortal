<link rel="stylesheet" href="{{asset('build/assets/css/main.css')}}">
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

        
<div class='modal-body'>
    <div class='modal-alerts px-2'></div>
    <div class='container'>
    <div class="package-container d-flex flex-column align-items-center">
    <!-- Basic Package -->
    <span class="text-center font-weight-bold">Basic Package</span>
    <br>
    <form method="POST" action="{{ route('purchase') }}">
        @csrf
        <input type="hidden" name="product_id" value="1">
        <button type="submit" id='credit-pack-row-basic' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container mb-4 p-2 p-md-4 border position-relative package-basic' data-plan-id='1' data-discount='10' data-discountprice='157.75' data-ncredits='50' data-sales-team-quote-id='0' data-price-per-credit='3.50' data-cy='credit-pack-top-up-row'>
            <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left xl-rounded-right px-2 py-1 text-primary pill-light-blue'>Less than 15% OFF</span>
            </div>
            <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
                <div class='row'>
                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-dark-blue'>About 10 responses</p>
                            <p class='m-0'>R175 <small class='js-vat-toggle'>(ex VAT)</small></p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div>
                                <i class='bi bi-coin'></i>
                                <span class='align-middle'>50 credits</span>
                            </div>
                            <p class='text-dark-blue text-sm text-grey-400'><span>R</span>3.50/credit</p>
                        </div>
                    </div>
                </div>
            </div>
        </button>
    </form>
</div>

<div class="package-container d-flex flex-column align-items-center">
    <!-- Standard Package -->
    <span class="text-center font-weight-bold">Standard Package</span>
    <form method="POST" action="{{ route('purchase') }}">
        @csrf
        <input type="hidden" name="product_id" value="2">
        <button type="submit" id='credit-pack-row-standard' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container mb-4 p-2 p-md-4 border position-relative package-standard' data-plan-id='2' data-discount='15' data-discountprice='255.00' data-ncredits='100' data-sales-team-quote-id='0' data-price-per-credit='3.00' data-cy='credit-pack-top-up-row'>
            <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left px-2 py-1 text-primary pill-light-blue'>15% OFF</span>
                <span class='xl-rounded-right px-2 py-1 bg-primary text-white'>BEST VALUE</span>
            </div>
            <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
                <div class='row'>
                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-white'>About 15 responses</p>
                            <p class='m-0 text-white'>R300 <small class='js-vat-toggle'>(ex VAT)</small></p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div>
                                <i class='bi bi-coin text-white'></i>
                                <span class='align-middle text-white'>100 credits</span>
                            </div>
                            <p class='text-white text-sm text-grey-400'><span>R</span>3.00/credit</p>
                        </div>
                    </div>
                </div>
            </div>
        </button>
    </form>
</div>

<div class="package-container d-flex flex-column align-items-center">
    <!-- Premium Package -->
    <h2 class="text-center font-weight-bold">Premium Package</h2>
    <form method="POST" action="{{ route('purchase') }}">
        @csrf
        <input type="hidden" name="product_id" value="3">
        <button type="submit" id='credit-pack-row-premium' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container mb-4 p-2 p-md-4 border position-relative package-premium' data-plan-id='3' data-discount='20' data-discountprice='480.00' data-ncredits='200' data-sales-team-quote-id='0' data-price-per-credit='2.50' data-cy='credit-pack-top-up-row'>
            <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left xl-rounded-right px-2 py-1 text-primary pill-light-blue'>20% OFF</span>
            </div>
            <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
                <div class='row'>
                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-white'>About 20 responses</p>
                            <p class='m-0 text-white'>R500.00 <small class='js-vat-toggle'>(ex VAT)</small></p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div>
                                <i class='bi bi-coin text-white'></i>
                                <span class='align-middle text-white'>200 credits</span>
                            </div>
                            <p class='text-white text-sm text-grey-400'><span>R</span>2.50/credit</p>
                        </div>
                    </div>
                </div>
            </div>
        </button>
    </form>
</div>
<div class="package-container d-flex flex-column align-items-center">
    <!-- Premium Plus Package -->
    <span class="text-center font-weight-bold">Premium Plus Package</span><br>
    <form method="POST" action="{{ route('purchase') }}">
        @csrf
        <input type="hidden" name="product_id" value="4">
        <button type="submit" id='credit-pack-row-premium-plus' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container mb-4 p-2 p-md-4 border position-relative package-premium' data-plan-id='3' data-discount='20' data-discountprice='480.00' data-ncredits='200' data-sales-team-quote-id='0' data-price-per-credit='2.50' data-cy='credit-pack-top-up-row'>
            <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left xl-rounded-right px-2 py-1 text-primary pill-light-blue'>100% OFF</span>
            </div>
            <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
                <div class='row'>
                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-white'>Unlimited responses</p>
                            <p class='m-0 text-white'>R500.00/Month <small class='js-vat-toggle'>(ex VAT)</small></p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div>
                                <i class='bi bi-coin text-white'></i>
                                <span class='align-middle text-white'>Unlimited Monthly Credits</span>
                            </div>
                            <p class='text-white text-sm text-grey-400'>free credits</p>
                        </div>
                    </div>
                </div>
            </div>
        </button>
    </form>
</div>

        <div class="row card-details-row js-card-details-row mt-4">
    <div class="p-4 p-md-3 d-flex rounded justify-content-between align-items-center bg-light w-100">
        <div class="card-brand-image-container flex-grow-0 flex-shrink-0 pr-2 response-modal-card-brand">
            <img src="https://d1w7gvu0kpf6fl.cloudfront.net/img/billing/card-logos/mastercard-logo.png" style="height: 22px; width: 65px;">
        </div>
        <div class="d-flex flex-grow-1 flex-shrink-1 px-0 px-md-2 my-3 my-md-0 align-items-center">
            Pay with Debit or Credit Card <span class="js-card-last-four font-weight-bold"></span>
        </div>
    </div>
</div>

    </div>
    
</div>


<div class='modal-footer justify-content-between'>
    <button class='btn btn-success credit-upsell-topup-submit mx-auto' id="transaction-history-button">
        <span class='submit-text' data-cy='credit-upsell-topup-cta'>Transaction History <span class='response-modal-name'></span></span>
        <span class='loading-text'><span class='spinner spinner-border d-none'></span></span>
    </button>
</div>

<div class="transaction-log-section" style="display: none;"> <!-- Hidden by default -->
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
                <ul class="pagination"></ul>
            </nav>
        </div>
    </div>
    <input type="hidden" id="user-id" value="{{ auth()->user()->id }}"> <!-- Example User ID -->
</div>
<script>document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('transaction-history-button');
    const transactionLogSection = document.querySelector('.transaction-log-section');

    button.addEventListener('click', function () {
        // Toggle visibility of the transaction log section
        if (transactionLogSection.style.display === 'none') {
            transactionLogSection.style.display = 'block';
        } else {
            transactionLogSection.style.display = 'none';
        }
    });
});
</script>
