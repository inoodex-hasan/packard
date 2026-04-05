<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: auto;
            position: relative;
            padding: 16px 0;
        }

        header {
            display: table;
            width: 100%;
            padding: 0 20px;
        }

        .custom-table {
            max-width: 500px
        }

        .logo-left {
            display: table-cell;
            vertical-align: middle;
            padding-left: 40px;
        }

        .logo-right {
            max-width: 200px;
        }

        .circle-border {
            border: 1px solid #000;
            border-radius: 50%;
            padding: 2px;
            display: inline-block;
        }

        .circle-inner {
            background: #1c0770;
            color: white;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
            font-size: 14px;
        }

        .site-title {
            font-size: 18px;
            color: #1c0770;
            font-weight: 500;
            display: inline-block;
            vertical-align: middle;
            margin-left: 8px;
        }

        .logo-img {
            width: 320px;
        }

        .bg-wrapper {
            position: absolute;
            right: -150px;
            top: 160px;
            width: 430px;
            overflow: hidden;
            z-index: 0;
        }

        .bg-main {
            width: 100%;
            opacity: 0.08;
        }

        .bg-dotted {
            position: absolute;
            top: 80px;
            right: 10px;
            width: 320px;
            opacity: 0.08;
        }

        footer {
            position: absolute;
            bottom: 20px;
            left: 40px;
            right: 0;
            width: auto;
        }

        .footer-line {
            display: table;
            width: 100%;
        }

        .line-small {
            display: table-cell;
            width: 20px;
            border-top: 2px solid #1c0770;
            margin-left: 12px;
        }

        .footer-title {
            display: table-cell;
            width: 220px;
            font-weight: 600;
            color: #1c0770;
            font-size: 18px;
            padding-left: 10px;
        }

        .line-full {
            display: table-cell;
            width: 100%;
            border-top: 2px solid #1c0770;
        }

        .contact {
            margin-top: 10px;
        }

        .contact-item {
            display: table;
            width: 100%;
            margin-bottom: 6px;
        }

        .icon-box {
            display: table-cell;
            width: 30px;
            vertical-align: middle;
            text-align: center;
            background: #1c0770;
            border: 2px solid #808080;
            border-radius: 50%;
            height: 30px;
        }

        .icon-box img {
            width: 12px;
            height: 12px;
            margin-top: 7px;
        }

        .text {
            display: table-cell;
            font-size: 14px;
            padding-left: 8px;
            vertical-align: middle;
        }

        /* Table Styles */
        table {
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 11px;
        }

        /* Main quotation table */
        thead th {
            border: 1px solid #000 !important;
            padding: 8px;
            text-align: center;
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tbody td {
            border: 1px solid #000 !important;
            padding: 8px;
            vertical-align: middle;
        }

        .product-description {
            width: 40%;
        }

        .serial {
            width: 5%;
            text-align: center;
        }

        .model {
            width: 12%;
            text-align: center;
        }

        .quantity,
        .unit-price,
        .discount,
        .total-price {
            width: 10%;
            text-align: center;
        }

        .total-row td {
            padding-right: 20px;
            text-align: right;
            font-weight: 600 !important;
        }

        .summary-row td {
            background: #fafafa !important;
        }

        .summary-final td {
            background: #f0f4ff !important;
            font-size: 12px;
            font-weight: bold !important;
        }

        .amount-in-words {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            font-style: italic;
            text-align: center;
            font-weight: bold;
        }

        .terms-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0 10px 0;
        }

        .terms-table {
            margin: 10px 0;
            width: 100%;
        }

        .terms-table td {
            vertical-align: top;
            padding: 5px 8px;
            border: none;
        }

        .terms-table td:first-child {
            width: 30px;
            font-weight: bold;
        }

        .closing {
            margin: 20px 0;
            text-align: justify;
        }

        .signature-section {
            margin-top: 60px;
            position: relative;
        }

        .signature-content {
            text-align: left;
            width: 300px;
        }

        .signature-line {
            border-top: 1px dashed #000;
            width: 200px;
            margin: 40px 0 5px 0;
        }

        .contact-info {
            margin-top: 10px;
            font-size: 11px;
        }

        /* Content Sections */
        .reference {
            margin-bottom: 20px;
            margin: 0 auto
        }

        .to-section {
            margin-bottom: 20px;
        }

        .to-section p {
            margin: 3px 0;
        }

        .subject {
            margin: 15px 0;
            font-weight: bold;
        }

        .letter-body {
            margin: 20px 0;
            text-align: justify;
        }

        .additional-enclosed {
            margin: 15px 0;

        }

        .quotation-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <section class="container">
        <header>
            <div class="logo-left">
                <div class="circle-border">
                    <div class="circle-inner">www</div>
                </div>
                <h1 class="site-title">packardbd.com</h1>
            </div>
            <div class="logo-right">
                @if (!empty($pdf_header_logo) && file_exists($pdf_header_logo))
                    <img class="logo-img" src="{{ $pdf_header_logo }}" alt="logo" />
                @endif
            </div>
        </header>

        <main style="width: 85%; margin: 0 auto; position: relative;">
            @if (!empty($pdf_background_logo) || !empty($pdf_dotted_background))
                <div class="bg-wrapper">
                    @if (!empty($pdf_background_logo) && file_exists($pdf_background_logo))
                        <img class="bg-main" src="{{ $pdf_background_logo }}" alt="" />
                    @endif
                    @if (!empty($pdf_dotted_background) && file_exists($pdf_dotted_background))
                        <img class="bg-dotted" src="{{ $pdf_dotted_background }}" alt="" />
                    @endif
                </div>
            @endif
            <div class="container">
                <!-- Reference and Date -->
                <div class="reference">
                    <div style="text-align: right;">
                        <div>Ref: {{ $quotation->quotation_number }}</div>
                        <div>{{ $quotation->quotation_date->format('F d, Y') }}</div>
                    </div>
                </div>

                <!-- Recipient Details -->
                <div class="to-section">
                    <p>To,</p>
                    @if ($attention_to)
                        <p> {{ $attention_to }}</p>
                    @endif
                    <p>{{ $client_designation ?? 'N/A' }}</p>
                    <p>{{ $client_name ?? 'N/A' }}</p>
                    <p>{{ $client_email ?? 'N/A' }}</p>
                    <p>{{ $client_address ?? 'N/A' }}</p>

                </div>

                <!-- Subject -->
                <div class="subject">
                    Sub: <span
                        style="text-decoration: underline;">{{ $subject ?? 'Quotation for Supplying of Products/Services' }}</span>
                </div>

                <!-- Letter Body -->
                <div class="letter-body">
                    <p>{!! nl2br(e($body_content ?? '')) !!}</p>
                </div>

                <!-- Additional Enclosed -->
                @if ($additional_enclosed)
                    <div class="additional-enclosed">
                        <strong>Additional Enclosed Documents:</strong><br>
                        {!! nl2br(e($additional_enclosed)) !!}
                    </div>
                @endif

                <!-- Quotation Title -->
                <div class="quotation-title">QUOTATION</div>

                <!-- Products Table -->
                <table>
                    <thead>
                        <tr>
                            <th class="serial">S.N.</th>
                            <th class="model">MODEL/PART NO.</th>
                            <th class="product-description">DESCRIPTION OF GOODS</th>
                            {{-- <th class="product-photo">PHOTO</th> --}}
                            <th class="quantity">QTY.</th>
                            <th class="unit">UNIT</th>
                            <th class="unit-price">UNIT PRICE</th>
                            <th class="discount">Dis.(%)</th>
                            <th class="total-price">TOTAL PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotation->items as $index => $item)
                            <tr>
                                <td class="serial">{{ $index + 1 }}</td>
                                <td class="model">{{ $item->product?->product_code ?? 'N/A' }}</td>
                                <td class="product-description">
                                    @if ($item->product)
                                        <strong>{{ $item->product->name }}</strong>
                                        @if ($item->product->details)
                                            <br><small style="color: #666;">{{ $item->product->details }}</small>
                                        @endif
                                    @endif
                                </td>
                                <td class="quantity">{{ number_format($item->quantity) }}</td>
                                <td class="unit">{{ $item->product?->unit ?? 'N/A' }}</td>
                                <td class="unit-price">{{ number_format($item->unit_price, 2) }}</td>
                                <td class="discount">{{ number_format($item->discount_percent ?? 0, 2) }}%</td>
                                <td class="total-price">{{ number_format($item->total, 2) }}</td>
                            </tr>
                        @endforeach

                        @php
                            $subTotal = (float) ($quotation->sub_total ?? 0);
                            $discountPercent = (float) ($quotation->discount_percent ?? 0);
                            $discountAmount = (float) ($quotation->discount_amount ?? 0);
                            $baseAfterDiscount = max(0, $subTotal - $discountAmount);
                            $installationCharge = (float) ($quotation->installation_charge ?? 0);

                            $vatPercent = (float) ($quotation->vat_percent ?? 0);
                            $taxPercent = (float) ($quotation->tax_percent ?? 0);

                            $vatAmount = (float) ($quotation->vat_amount ?? 0);
                            if ($vatAmount <= 0 && $vatPercent > 0) {
                                $vatAmount = $baseAfterDiscount * ($vatPercent / 100);
                            }

                            $taxAmount = (float) ($quotation->tax_amount ?? 0);
                            if ($taxAmount <= 0 && $taxPercent > 0) {
                                $taxAmount = $baseAfterDiscount * ($taxPercent / 100);
                            }

                            $roundOff = (float) ($quotation->round_off ?? 0);
                        @endphp

                        <!-- Total Rows -->
                        <tr class="total-row summary-row">
                            <td colspan="7">GROSS TOTAL (BDT)</td>
                            <td class="total-price">{{ number_format($subTotal, 2) }}</td>
                        </tr>
                        @if ($discountPercent > 0)
                            <tr class="total-row summary-row">
                                <td colspan="7">SPECIAL DISCOUNT
                                    ({{ rtrim(rtrim(number_format($discountPercent, 2), '0'), '.') }}%) (BDT)</td>
                                <td class="total-price">{{ number_format($discountAmount, 2) }}</td>
                            </tr>
                        @endif
                        @if ($roundOff > 0)
                            <tr class="total-row summary-row">
                                <td colspan="7">ROUND OFF - (BDT)</td>
                                <td class="total-price">{{ number_format($roundOff, 2) }}</td>
                            </tr>
                        @endif
                        @if ($installationCharge > 0)
                            <tr class="total-row summary-row">
                                <td colspan="7">INSTALLATION CHARGE (BDT)</td>
                                <td class="total-price">{{ number_format($installationCharge, 2) }}</td>
                            </tr>
                        @endif
                        @if ($vatAmount > 0)
                            <tr class="total-row summary-row">
                                <td colspan="7">VAT ({{ rtrim(rtrim(number_format($vatPercent, 2), '0'), '.') }}%)
                                    (BDT)
                                </td>
                                <td class="total-price">{{ number_format($vatAmount, 2) }}</td>
                            </tr>
                        @endif
                        @if ($taxAmount > 0)
                            <tr class="total-row summary-row">
                                <td colspan="7">AIT ({{ rtrim(rtrim(number_format($taxPercent, 2), '0'), '.') }}%)
                                    (BDT)
                                </td>
                                <td class="total-price">{{ number_format($taxAmount, 2) }}</td>
                            </tr>
                        @endif

                        <tr class="total-row summary-final">
                            <td colspan="7">GRAND TOTAL (BDT)</td>
                            <td class="total-price">{{ number_format($quotation->total_amount, 2) }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Amount in Words -->
                <div class="amount-in-words">
                    In Word: {{ $amount_in_words }}
                </div>

                <!-- Terms and Conditions -->
                @if ($terms_conditions)
                    <div class="terms-title">Terms and Conditions</div>
                    <table class="terms-table">
                        @foreach (explode("\n", $terms_conditions) as $index => $term)
                            @if (trim($term))
                                <tr>
                                    <td>{{ $index + 1 }}.</td>
                                    <td>{{ trim($term) }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                @endif

                <!-- Closing -->
                {{-- <div class="closing">
                    <p> We assure you that we provide our best service at all
                        times.</p>
                    <p>Thank you once again.</p>
                </div> --}}

                <!-- Signature Section -->
                <div class="signature-section">
                    <div class="signature-content">
                        @if (!empty($signatory_photo) && file_exists($signatory_photo))
                            <p style="margin: 0 0 6px 0;">
                                <img src="{{ $signatory_photo }}" alt="Digital Signature"
                                    style="max-height: 70px; max-width: 180px;">
                            </p>
                        @endif
                        <div class="signature-line"></div>
                        <p><strong>{{ $signatory_name ?? 'N/A' }}</strong></p>
                        <p>{{ $signatory_designation ?? 'N/A' }}</p>
                        <p><strong>{{ $company_name ?? 'N/A' }}</strong></p>


                    </div>
                    {{-- <div class="sil">
                <img src="{{ public_path('sil.png') }}" alt="logo">
            </div> --}}
                </div>

            </div>
        </main>
        <footer>
            <div class="footer-line">
                <div class="line-small"></div>
                <h1 class="footer-title">Packard Engineering Ltd.</h1>
                <div class="line-full"></div>
            </div>

            <div class="contact">
                <div class="contact-item">
                    <div class="icon-box">
                        @if (!empty($pdf_phone_icon) && file_exists($pdf_phone_icon))
                            <img src="{{ $pdf_phone_icon }}" alt="" />
                        @endif
                    </div>
                    <p class="text">+880172837468763, +88016398473984</p>
                </div>

                <div class="contact-item">
                    <div class="icon-box">
                        @if (!empty($pdf_email_icon) && file_exists($pdf_email_icon))
                            <img src="{{ $pdf_email_icon }}" alt="" />
                        @endif
                    </div>
                    <p class="text">info@packardbd.com</p>
                </div>

                <div class="contact-item">
                    <div class="icon-box">
                        @if (!empty($pdf_location_icon) && file_exists($pdf_location_icon))
                            <img src="{{ $pdf_location_icon }}" alt="" />
                        @endif
                    </div>
                    <p class="text">Purana Paltan, Dhaka, Bangladesh</p>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>
