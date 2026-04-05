<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <title>Quotation {{ $quotation->quotation_number }}</title>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            font-size: 12px;
            line-height: 1.3;
            color: #000;
            margin: 0;
            padding: 20px;

            /* background: rgba(255, 255, 255, 0.2) url("{{ public_path('logo-inoodex.png') }}") no-repeat 310px -10px / 340px auto fixed transparent !important; */

        }


        @page {
            margin: 160px 45px 90px 45px;
            size: A4 portrait;
        }


        .container {
            max-width: 800px;
            margin: 15px auto 15px;

        }

        header {
            position: fixed;
            top: -150px;
            left: 0;
            right: 0;
            display: block;
            height: 100px;
            background: transparent;
            padding: 15px 45px 30px;
            padding-bottom: 30px;
            font-size: 11px;
            z-index: 10;
        }



        footer {
            position: fixed;
            bottom: -70px;
            left: 0;
            right: 0;
            height: 50px;
            padding: 10px 0;
            border-top: 1px solid #999;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
        }

        .logo {
            max-width: 200px;
        }

        .logo img {
            width: 100%;
            text-align: left;
            opacity: 0.5;
            margin-left: -35px;
            margin-bottom: -50px !important;
            margin-top: 55px;
        }

        .reference {
            margin-bottom: 20px;
            font-weight: bold;
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

        .underline {
            text-decoration: underline;
        }

        .letter-body {
            margin: 20px 0;
            text-align: justify;
        }

        .quotation-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 11px;
        }

        table th {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            background-color: #f0f0f0;
            font-weight: bold;
        }

        table td {
            border: 1px solid #000;
            padding: 8px;
            vertical-align: top;
        }

        .product-description {
            width: 47%;
        }

        .serial {
            width: 8%;
            text-align: center;
        }

        .quantity,
        .unit-price,
        .total-price {
            width: 15%;
            text-align: center;
        }

        .total-row {
            font-weight: bold;
        }

        .total-row td {
            text-align: right;
            padding-right: 20px;
        }

        .summary-row td {
            background: #fafafa;
        }

        .summary-final td {
            background: #f0f4ff;
            font-size: 12px;
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
        }

        .terms-table td {
            vertical-align: top;
            padding: 5px 8px;
        }

        .terms-table td:first-child {
            width: 30px;
            font-weight: bold;
        }

        .bank-details {
            margin: 20px 0;
            padding: 15px;
            background-color: #f5f5f5;
            border-left: 4px solid #333;
        }

        .bank-details strong {
            display: inline-block;
            width: 180px;
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
            float: left;
            text-align: left;
            width: 300px;
        }

        .signature-line {
            border-top: 1px dashed #000;
            width: 200px;
            /* margin: 40px auto 5px auto; */
        }

        .contact-info {
            margin-top: 10px;
            font-size: 11px;
        }

        .product-specs {
            margin-left: 10px;
        }

        .sil {
            max-width: 130px;

        }

        .sil img {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            {{-- <img src="{{ public_path('logo-inoodex.png') }}" --}}
            @if (!empty($company_logo))
                <img src="{{ $company_logo }}" alt="logo" style="width: 100px; height: 100px;">
            @endif
        </div>
    </header>

    <!-- Footer -->
    <footer>
        <div>Corporate Office: {{ $company_address ?? 'N/A' }} </div>
        <div>Phone: {{ $company_phone ?? 'N/A' }} | Website: {{ $company_website ?? 'N/A' }}</div>
    </footer>
    {{-- <div class="chiti-watermark" id="chitiImage">
        <img src="{{ public_path('logo-inoodex.png') }}" alt="=">
    </div> --}}


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
                    <td colspan="6">GROSS TOTAL (BDT)</td>
                    <td class="total-price">{{ number_format($subTotal, 2) }}</td>
                </tr>
                @if ($discountPercent > 0)
                    <tr class="total-row summary-row">
                        <td colspan="6">SPECIAL DISCOUNT
                            ({{ rtrim(rtrim(number_format($discountPercent, 2), '0'), '.') }}%) (BDT)</td>
                        <td class="total-price">{{ number_format($discountAmount, 2) }}</td>
                    </tr>
                @endif
                @if ($roundOff > 0)
                    <tr class="total-row summary-row">
                        <td colspan="6">ROUND OFF - (BDT)</td>
                        <td class="total-price">{{ number_format($roundOff, 2) }}</td>
                    </tr>
                @endif
                @if ($installationCharge > 0)
                    <tr class="total-row summary-row">
                        <td colspan="6">INSTALLATION CHARGE (BDT)</td>
                        <td class="total-price">{{ number_format($installationCharge, 2) }}</td>
                    </tr>
                @endif
                @if ($vatAmount > 0)
                    <tr class="total-row summary-row">
                        <td colspan="6">VAT ({{ rtrim(rtrim(number_format($vatPercent, 2), '0'), '.') }}%) (BDT)
                        </td>
                        <td class="total-price">{{ number_format($vatAmount, 2) }}</td>
                    </tr>
                @endif
                @if ($taxAmount > 0)
                    <tr class="total-row summary-row">
                        <td colspan="6">AIT ({{ rtrim(rtrim(number_format($taxPercent, 2), '0'), '.') }}%) (BDT)
                        </td>
                        <td class="total-price">{{ number_format($taxAmount, 2) }}</td>
                    </tr>
                @endif

                <tr class="total-row summary-final">
                    <td colspan="6">GRAND TOTAL (BDT)</td>
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
        <div class="closing">
            <p> We assure you that we provide our best service at all
                times.</p>
            <p>Thank you once again.</p>
        </div>

        <!-- Signature Section -->
        <div class="signature-section">
            <div class="signature-content">
                @if (!empty($signatory_photo))
                    <p style="margin: 0 0 6px 0;">
                        <img src="{{ $signatory_photo }}" alt="Digital Signature"
                            style="max-height: 70px; max-width: 180px;">
                    </p>
                @endif
                <div class="signature-line"></div>
                <p><strong>{{ $signatory_name ?? 'N/A' }}</strong></p>
                <p>{{ $signatory_designation ?? 'N/A' }}</p>
                <p>For, <strong>{{ $company_name ?? 'N/A' }}</strong></p>

                <div class="contact-info">
                    @if (!empty($company_phone ?? null))
                        <p>Cell: {{ $company_phone }}</p>
                    @endif
                    @if (!empty($company_email ?? null))
                        <p>E-mail: {{ $company_email }}</p>
                    @endif
                    @if (!empty($company_website ?? null))
                        <p>Web: {{ $company_website }}</p>
                    @endif
                </div>
            </div>
            {{-- <div class="sil">
                <img src="{{ public_path('sil.png') }}" alt="logo">
            </div> --}}
        </div>

    </div>

</body>

</html>
