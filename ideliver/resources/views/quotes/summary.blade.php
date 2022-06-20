@extends('layouts.app')

@section('content')
@foreach($response as $res)

    @endforeach
<!--begin::Tab content-->
<div class="tab-content">
    <!--begin::Tab pane-->
    <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
        <!--begin::Orders-->
        <div class="d-flex flex-column gap-7 gap-lg-10">
            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                <!--begin::Payment address-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Background-->
                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                        <img src="{{asset('media/icons/duotune/ecommerce/ecm001.svg')}}" class="w-175px" />
                    </div>
                    <!--end::Background-->
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Origin Area Address</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">{{$res['originAreaType']}}</div>
                    <!--end::Card body-->
                </div>
                <!--end::Payment address-->
                <!--begin::Shipping address-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Background-->
                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                        <img src="{{asset('media/icons/duotune/ecommerce/ecm006.svg')}}" class="w-175px" />
                    </div>
                    <!--end::Background-->
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Destination Area</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">{{$res['destinationAreaType']}}</div>
                    <!--end::Card body-->
                </div>
                <!--end::Shipping address-->
            </div>
            <!--begin::Product List-->
            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Order #{{$res['quoteNo']}}</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="items">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-175px">Mass</th>
                                <th class="min-w-100px text-end">Length</th>
                                <th class="min-w-70px text-end">Breadth</th>
                                <th class="min-w-100px text-end">Height</th>
                                <th class="min-w-100px text-end">Units</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            <!--begin::Products-->

                            <!--end::Products-->
                            </tbody>
                            <tr>
                                <td colspan="4" class="text-end">Shipping</td>
                                <td class="text-end">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                                        <input type="radio" class="btn-check"  name="bedStatus" id="dawnwing" value="dawnwing">
                                        <label class="btn btn-outline-primary" for="dawnwing">Dawnwing</label>
                                        <input type="radio" class="btn-check" name="bedStatus" id="skynet" value="skynet">
                                        <label class="btn btn-outline-primary" for="skynet">Skynet</label>
                                    </div>
                                    <input type="hidden" name="dawnwing_amount" id="dawnwing_amount"  value="{{$res['total']}}">
                                    <input type="hidden" name="skynet_amount" id="skynet_amount"  value="200">

                                </td>
                            </tr>
                            <!--begin::Subtotal-->
                            <tr>
                                <td colspan="4" class="text-end">Subtotal</td>
                                <td class="text-end" id="grandTotal">Select Shipping</td>
                            </tr>
                            <!--end::Subtotal-->
                            <!--begin::VAT-->
                            <tr>
                                <td colspan="4" class="text-end">VAT (15%)</td>
                                <td class="text-end" id="vat">Select Shipping</td>
                            </tr>
                            <!--end::VAT-->
                            <!--begin::Grand total-->
                            <tr>
                                <td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
                                <td class="text-dark fs-3 fw-boldest text-end" id="amountTotal">Select Shipping</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="fs-3 text-dark text-end">Payment</td>
                                <td class="text-dark fs-3 fw-boldest text-end">
                                <form action="https://sandbox.payfast.co.za/eng/process" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="merchant_id" value="10000100">
                                    <input type="hidden" name="merchant_key" value="46f0cd694581a">
                                    <amount id="amount"></amount>
                                    <input type="hidden" name="item_name" value="{{$res['quoteNo']}}">
                                    <input type="hidden" name="m_payment_id" value="{{$res['quoteNo']}}">
                                    <input type="hidden" name="return_url" value="http://127.0.0.1:8000/payments">
                                    <input type="hidden" name="custom_str1" value="Dawnwing">
                                    <input type="submit"class="btn btn-lg btn-primary" id="payNow" value="Pay Now">
                                </form>
                                </td>
                            </tr>
                            <!--end::Grand total-->
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Product List-->
        </div>
        <!--end::Orders-->
    </div>
    <!--end::Tab pane-->
</div>
<!--end::Tab content-->
@endsection
@section('footer')
    <script src="{{ asset('js/summary.js')}}"></script>
@stop
