<main class="tk-scetiondb">
    <section class="@if(!empty($className) ) tk-sectioninvoice @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tb-invoiceslist {{$className}}">
                        <div class="tb-dhb-mainheading">
                            <h2>{{ __('transaction.invoices_bills') }}</h2>
                        </div>
                        @if(!$invoices->isEmpty())
                            <table class="table tb-table">
                                <thead>
                                    <tr>
                                        <th>{{ __('transaction.invoice_no') }}</th>
                                        <th> {{ __('transaction.payment_type') }}</th>
                                        <th>{{ __('transaction.invoice_date') }}</th>
                                        <th>{{ __('transaction.invoice_amount') }}</th>
                                        <th>{{ __('transaction.payment_method') }}</th>
                                        <th>{{ __('transaction.status') }}</th>
                                        <th>{{ __('general.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoices as $single)
                                        <tr>
                                            <td data-label="{{ __('transaction.invoice_no') }}">{{ $single->id }}</td>
                                            <td data-label="{{ __('transaction.payment_type') }}">{{ ucfirst($single->payment_type) }}</td>
                                            <td data-label="{{ __('transaction.invoice_date') }}">{{ date( $date_format, strtotime( $single->created_at ))}}</td>
                                            <td data-label="{{ __('transaction.invoice_amount') }}"><span>{{ getPriceFormat($currency_symbol, ($single->TransactionDetail?->amount+ $single->TransactionDetail?->used_wallet_amt))}}  </span></td>
                                            <td data-label="{{ __('transaction.payment_method') }}">
                                                <div class="tb-tablepaymethod">
                                                    <img src="{{asset('images/payment_methods/'.$single->payment_method. '.png')}}" alt="{{__("settings." .$single->payment_method. "_title")}}">
                                                    <h6>{{__("settings." .$single->payment_method. "_title")}}</h6>
                                                </div>
                                            </td>
                                            <td data-label="{{ __('transaction.status') }}"><span class="tk-project-tag tk-{{ $single->status }}">{{ $single->status }}  </span></td>
                                            <td data-label="{{ __('general.action') }}">
                                                <ul class="tk-action-icon">
                                                    @if($single->status == 'pending')
                                                        <li> <a href="javascript:void(0);" class="tippy tk-repayment"  data-tippy-content="Repay" onClick="rePayment({{ $single->id }})"> <img src="{{ asset('images/icon-repayment.svg') }}" alt="{{ __('general.no_record') }}"></a> </li>
                                                        <li> <a href="javascript:void(0);" data-tippy-content="Delete" onClick="deleteInvoice({{ $single->id }})" class="tb-delete tippy" ><i class="icon-trash-2"></i></a> </li>
                                                    @else    
                                                        <li> <a href="{{route('invoice-detail', ['id' => $single->id]) }}" class="tippy tb-viewdetails"  data-tippy-content="View"><i class="icon-eye"></i></a> </li>
                                                    @endif
                                                </ul>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $invoices->links('pagination.custom') }}
                        @else
                            <div class="tk-submitreview tk-emptyview">
                                <figure>
                                    <img src="{{ asset('images/empty.png') }}" alt="{{ __('general.no_record') }}">
                                </figure>
                                <h4>{{ __('general.no_record') }}</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@push('scripts')
<script src="{{ asset('common/js/popper-core.js') }}"></script>
<script src="{{ asset('common/js/tippy.js') }}"></script>
<script>
    window.onload = (event) => {
        jQuery(document).ready(function() {
            @if(!empty(session('payment_success')))
                showAlert({
                    message     : "{{ session('payment_success') ?? __('general.payment_success_desc') }}",
                    type        : 'success',
                    title       : "{{ __('general.payment_success') }}" ,
                    autoclose   : 3000
                });
            @endif

            @if (!empty(session('payment_cancel')))
                showAlert({
                    message     : "{{ session('payment_cancel') }}",
                    type        : 'error',
                    title       : "{{ __('general.payment_cancelled') }}" ,
                    autoclose   : false
                });
            @endif
        });
    }

    function deleteInvoice( id ){
        let title           = '{{ __("general.confirm") }}';
        let content         = '{{ __("general.confirm_content") }}';
        let action          = 'deleteInvoice';
        let type_color      = 'red';
        let btn_class      = 'danger';
        ConfirmationBox({title, content, action, id,  type_color, btn_class})
    }

    function rePayment( id ){
        let title           = '{{ __("general.confirm") }}';
        let content         = '{{ __("general.confirm_content") }}';
        let action          = 'rePay';
        let type_color      = 'green';
        let btn_class      = 'success';
        ConfirmationBox({title, content, action, id, type_color, btn_class})
    }

</script>
@endpush
