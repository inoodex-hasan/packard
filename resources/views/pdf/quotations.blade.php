<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packard | Quotation Management</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 140px 0 105px 0;
        }
    </style>
    <style>

        @font-face {
            font-family: 'Century Gothic';
            src: url("{{ public_path('fonts/centurygothic.ttf') }}") format("truetype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Century Gothic';
            src: url("{{ public_path('fonts/centurygothic_bold.ttf') }}") format("truetype");
            font-weight: 700;
            font-style: normal;
        }


        body {
            font-family: 'Century Gothic', sans-serif;
            font-size: 12px;
            line-height: 1.0;
            color: #000;
            margin: 0;
            padding: 0;
        }

        body,
        p,
        span,
        div,
        td,
        th,
        strong,
        b,
        small {
            font-family: 'Century Gothic', sans-serif !important;
        }


        /* Safe spacing constants (approximate equivalents of previous variables) */
        .aligned-content {
            width: 94%;
            margin-left: 24pt;
            margin-right: 3%;
        }

        /* Background Image - handled via fixed div for better dompdf support */
        .bg-wrapper {
            position: fixed;
            top: -140px; /* Offset the @page margin to reach the physical top */
            left: 0;
            width: 100%;
            height: 297mm; /* Full A4 height to cover the whole page */
            z-index: -1;
        }

        .bg-image {
            width: 100%;    
            height: 100%;
            display: block;
        }

        /* Main Content */
        .content-wrapper {
            padding-left: 30pt;
            padding-right: 30pt;
        }

        .reference {
            text-align: right;
            margin-top: 0;
            font-size: 12px;
            font-family: 'Century Gothic', Times, serif !important;
        }

        .reference p {
            margin: 0 0;
            font-weight: bold;
        }

        .header-content {
            display: table;
            width: 94%;
            /* margin-bottom: 10pt; */
            margin-top: 0;
            table-layout: fixed;
            margin-left: 24pt;
            margin-right: 3%;
        }

        .header-content-left {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding-right: 10px;
        }

        .header-content-right {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            text-align: right;
            padding-left: 10px;
        }

        .to-section p {
            margin: 0 0 0 0;
            padding: 0;
            font-weight: bold;
            /* line-height: 1.0; */
        }

        .subject {
            display: block;
            margin: 7px 0 0 0;
            padding: 0;
            font-weight: bold;
            font-family: 'Century Gothic', Times, serif !important;
            width: 94%;
            margin-left: 24pt;
            margin-right: 3%;
        }

        .letter-body {
            display: block;
            margin: 7px 0 0 0;
            padding: 0;
            text-align: justify;
            line-height: 1.0;
            width: 94%;
            margin-left: 24pt;
            margin-right: 3%;
            font-weight: bold;
        }

        .additional-enclosed {
            margin: 5pt 0;
            width: 94%;
            margin-left: 24pt;
            margin-right: 3%;
        }

        /* Quotation Table */
        .quotation-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20pt 0 15pt 0;
            font-size: 14pt;
            font-family: 'Century Gothic', Times, serif !important;
            width: 94%;
            margin-left: 24pt;
            margin-right: 3%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 11px;
            font-family: 'Century Gothic', Times, serif !important;
        }

        .quotation-table {
            margin-bottom: 16px;
            page-break-inside: auto;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .quotation-table tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .page-break {
            page-break-before: always;
        }

        thead th {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: center;
            background-color: #f0f0f0;
            font-weight: bold;
            font-family: 'Century Gothic', Times, serif !important;
        }

        tbody td {
            border: 1px solid #000;
            padding: 3px 6px;
            vertical-align: middle;
            font-family: 'Century Gothic', Times, serif !important;
            line-height: 0.9;
        }

        .serial {
            width: 5%;
            text-align: center;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .model {
            width: 12%;
            text-align: center;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .product-description {
            width: 38%;
            font-family: 'Century Gothic', Times, serif !important;
        }

        .quantity,
        .unit-price,
        .discount,
        .total-price {
            width: 9%;
            text-align: center;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .unit {
            width: 7%;
            text-align: center;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .total-row td {
            padding-right: 16px;
            text-align: right;
            font-weight: bold;
                font-family: 'Century Gothic', Times, serif !important;
        }

        .summary-final td {
            font-size: 12px;
            font-weight: bold;
            font-family: 'Century Gothic', Times, serif !important;
        }

        /* Amount in Words */
        .amount-in-words {
            width: 70%;
            margin: 0 auto;
            padding: 5pt 6pt;
            background: transparent;
            border: 1px solid #ddd;
            display: block;
            font-weight: bold;
            text-align: center;
        }

        .signature-content p {
            margin: 0;
            line-height: 1.1;
            font-weight: bold;

        }

        .signature-line {
            border-top: 1px dashed #000;
            width: 200px;
            margin: 20px 0 8px 0;
            font-family: 'Century Gothic', Times, serif !important;
        }

        .post-table-section {
            margin-top: 18px;
        }

        .post-table-page-break {
            page-break-before: always;
            margin-top: 0;
            /* remove padding-top — same reason */
        }

        .post-table-page-break .amount-in-words {
            margin-top: 0;
        }

        .post-table-page-break .terms-title {
            margin-top: 0;
        }

        /* Terms & Conditions */
        .terms-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20pt 0 10pt 0;
            font-size: 13pt;
            page-break-inside: avoid;
            font-family: 'Century Gothic', Times, serif !important;
        }

        .terms-table {
            width: 94%;
            margin-bottom: 30pt;
            page-break-inside: avoid;
            margin-left: 24pt;
            margin-right: 3%;
        }

        .terms-table td {
            vertical-align: top;
            padding: 5px 8px;
        }

        .terms-table td:first-child {
            width: 30px;
            font-family: 'Century Gothic', Times, serif !important;
        }

        /* Signature Section */
        .signature-section {
            margin-top: 50px;
            margin-left: 24pt;
            margin-right: 3%;
            width: 94%;
            text-align: left;
        }

        .signature-content {
            display: inline-block;
            width: 220px;
            text-align: left;
            margin-right: 30px;
            vertical-align: top;
        }
    </style>
</head>

<body>

    {{-- Background Image --}}
    <div class="bg-wrapper">
        @if (!empty($pdf_background_image) && file_exists($pdf_background_image))
            <img class="bg-image" src="{{ $pdf_background_image }}" alt="Background" />
        @endif
    </div>

    @php
        $productItems =
            $quotation->items instanceof \Illuminate\Support\Collection
                ? $quotation->items->values()
                : collect($quotation->items)->values();

        // $firstPageLimit = 4;
        // $overflowPageLimit = 10;

        $itemPages = [];
        $serial = 1;

        // First-page and overflow product limits are temporarily disabled.
        // Keep all items in one flow and let the PDF renderer paginate naturally.
        $itemPages[] = [
            'items' => $productItems,
            'serial_start' => $serial,
        ];

        if (empty($itemPages)) {
            $itemPages[] = [
                'items' => collect(),
                'serial_start' => 1,
            ];
        }

    @endphp

    @foreach ($itemPages as $pageIndex => $pageData)
        <div class="content-wrapper{{ $pageIndex > 0 ? ' page-break' : '' }}">

            @if ($pageIndex === 0)
                {{-- Reference & Recipient Side by Side --}}
                <div class="header-content">
                    <div class="header-content-left">
                        {{-- Recipient --}}
                        <div class="to-section">
                            <p>To,</p>
                            @if (!empty($attention_to))
                                <p>{{ $attention_to }}</p>
                            @endif
                            <p>{{ $client_designation ?? 'N/A' }}</p>
                            <p>{{ $client_name ?? 'N/A' }}</p>
                            <p>{{ $client_email ?? 'N/A' }}</p>
                            <p>{{ $client_address ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="header-content-right">
                        {{-- Reference & Date --}}
                        <div class="reference">
                            <p>Date:{{ $quotation->quotation_date?->format('F d, Y') ?? 'N/A' }}</p>
                            <p>Ref: {{ strtoupper($quotation->quotation_number ?? 'N/A') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Subject --}}
                <div class="subject">
                    Subject: <span>{{ $subject ?? 'Quotation for Supplying of Products/Services' }}</span>
                </div>

                {{-- Letter Body --}}
                <div class="letter-body">
                    <p style="margin: 0; padding: 0;">{!! nl2br(e($body_content ?? '')) !!}</p>
                </div>

                {{-- Additional Enclosed --}}
                @if (!empty($additional_enclosed))
                    <div class="additional-enclosed">
                        <strong>Additional Enclosed Documents:</strong><br>
                        {!! nl2br(e($additional_enclosed)) !!}
                    </div>
                @endif
            @endif

            {{-- Quotation Title --}}
            <div class="quotation-title">QUOTATION</div>

            {{-- Products Table --}}
            <table class="quotation-table aligned-content">
                <thead>
                    <tr>
                        <th class="serial">S.N.</th>
                        <th class="model">MODEL/PART NO.</th>
                        <th class="product-description">DESCRIPTION OF GOODS</th>
                        <th class="quantity">QTY.</th>
                        <th class="unit">UNIT</th>
                        <th class="unit-price">UNIT PRICE</th>
                        <th class="discount">Dis.(%)</th>
                        <th class="total-price">TOTAL PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pageData['items'] as $rowIndex => $item)
                        <tr>
                            <td class="serial">{{ str_pad($pageData['serial_start'] + $rowIndex, 2, '0', STR_PAD_LEFT) }}</td>
                            <td class="model">{{ $item->product?->product_code ?? 'N/A' }}</td>
                            <td class="product-description">
                                @if ($item->product)
                                    {{ $item->product->name }}
                                    @if ($item->product->details)
                                        <br><small style="color: #666;">{{ $item->product->details }}</small>
                                    @endif
                                @endif
                            </td>
                            <td class="quantity">{{ str_pad(number_format($item->quantity), 2, '0', STR_PAD_LEFT) }}</td>
                            <td class="unit">{{ $item->product?->unit ?? 'N/A' }}</td>
                            <td class="unit-price">{{ number_format($item->unit_price, 2) }}</td>
                            <td class="discount">{{ number_format($item->discount_percent ?? 0) }}%</td>
                            <td class="total-price">{{ number_format($item->total, 2) }}</td>
                        </tr>
                    @endforeach

                    @if ($pageIndex === count($itemPages) - 1)
                        <tr class="total-row">
                            <td colspan="7">GROSS TOTAL (BDT)</td>
                            <td class="total-price">{{ number_format($quotation->sub_total ?? 0, 2) }}</td>
                        </tr>

                        @if (($quotation->discount_amount ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">SPECIAL DISCOUNT
                                    ({{ number_format($quotation->discount_percent ?? 0) }}%) (BDT)</td>
                                <td class="total-price">{{ number_format($quotation->discount_amount ?? 0, 2) }}</td>
                            </tr>
                        @endif

                        @if (($quotation->round_off ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">ROUND OFF (BDT)</td>
                                <td class="total-price">{{ number_format($quotation->round_off ?? 0, 2) }}</td>
                            </tr>
                        @endif

                        @if (($quotation->installation_charge ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">INSTALLATION CHARGE (BDT)</td>
                                <td class="total-price">{{ number_format($quotation->installation_charge ?? 0, 2) }}
                                </td>
                            </tr>
                        @endif

                        @if (($quotation->tax_amount ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">AIT ({{ (float)($quotation->tax_percent ?? 0) }}%) (BDT)
                                </td>
                                <td class="total-price">{{ number_format($quotation->tax_amount ?? 0, 2) }}</td>
                            </tr>
                        @endif

                        <tr class="total-row">
                            <td colspan="7">NET TOTAL (BDT)</td>
                            <td class="total-price">{{ number_format($quotation->total_amount - ($quotation->vat_amount ?? 0), 2) }}</td>
                        </tr>

                        @if (($quotation->vat_amount ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">VAT ({{ (float)($quotation->vat_percent ?? 0) }}%) (BDT)
                                </td>
                                <td class="total-price">{{ number_format($quotation->vat_amount ?? 0, 2) }}</td>
                            </tr>
                        @endif

                        <tr class="total-row summary-final">
                            <td colspan="7">GRAND TOTAL (BDT)</td>
                            <td class="total-price">{{ number_format($quotation->total_amount ?? 0, 2) }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            @if ($pageIndex === count($itemPages) - 1)
                <div class="post-table-section">
                    {{-- Amount in Words --}}
                    @if (!empty($amount_in_words))
                        <div class="amount-in-words aligned-content">
                            In Word: {{ $amount_in_words }}
                        </div>
                    @endif
                </div>

                @if (!empty($terms_conditions))
                    <div class="post-table-page-break">
                        {{-- Terms and Conditions --}}
                        <div>

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
                        </div>

                        {{-- Signature Section --}}
                        <div class="signature-section">
                            <div class="signature-content">
                                @if (!empty($signatory_photo) && file_exists($signatory_photo))
                                    <p style="margin-bottom: 8px;">
                                        <img src="{{ $signatory_photo }}" alt="Signature"
                                            style="max-height: 70px; max-width: 180px;">
                                    </p>
                                @endif
                                <div class="signature-line"></div>
                                <p>{{ $signatory_name ?? 'N/A' }}</p>
                                <p>{{ $signatory_designation ?? 'N/A' }}</p>
                                <p>{{ $company_name ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- Signature Section --}}
                    <div class="signature-section">
                        <div class="signature-content">
                            @if (!empty($signatory_photo) && file_exists($signatory_photo))
                                <p style="margin-bottom: 8px;">
                                    <img src="{{ $signatory_photo }}" alt="Signature"
                                        style="max-height: 70px; max-width: 180px;">
                                </p>
                            @endif
                            <div class="signature-line"></div>
                            <p>{{ $signatory_name ?? 'N/A' }}</p>
                            <p>{{ $signatory_designation ?? 'N/A' }}</p>
                            <p>{{ $company_name ?? 'N/A' }}</p>
                        </div>
                    </div>
                @endif
            @endif

        </div>
    @endforeach

</body>

</html>
