<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packard - Quotation</title>
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: 'Century Gothic', sans-serif;
            font-size: 12px;
            line-height: 1.35;
            color: #000;
            padding: 5px;
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

        @page {
            margin: 0;
            size: A4 portrait;
        }

        :root {
            --pdf-top-safe-space: 120px;
            --pdf-bottom-safe-space: 90px;
            --pdf-side-safe-space: 30px;
            --pdf-content-width: 94%;
            --pdf-left-offset: 24px;
            --pdf-right-offset: 3%;
        }

        .aligned-content {
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
        }

        /* Background Image */
        body {
            background-image: url('{{ $pdf_background_image }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .bg-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .bg-image {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Main Content */
        .content-wrapper {
            padding-top: var(--pdf-top-safe-space);
            padding-bottom: var(--pdf-bottom-safe-space);
            padding-left: var(--pdf-side-safe-space);
            padding-right: var(--pdf-side-safe-space);
            position: relative;
            z-index: 5;
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
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-bottom: 10px;
            margin-top: 0;
            table-layout: fixed;
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
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
            margin: 0 0;
            font-weight: bold;
            line-height: 1.1;
        }

        .subject {
            margin: 15px 0;
            font-weight: bold;
            font-family: 'Century Gothic', Times, serif !important;
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
        }

        .letter-body {
            margin: 15px 0;
            text-align: justify;
            line-height: 1.1;
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
        }

        .additional-enclosed {
            margin: 15px 0;
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
        }

        /* Quotation Table */
        .quotation-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0 15px 0;
            font-size: 14px;
            font-family: 'Century Gothic', Times, serif !important;
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
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
            padding: 6px 8px;
            vertical-align: middle;
            font-family: 'Century Gothic', Times, serif !important;
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
            margin: 18px 0;
            padding: 10px 12px;
            background: transparent;
            border: 1px solid #ddd;
            font-style: normal;
            text-align: center;
            font-weight: bold;
            page-break-inside: avoid;
            font-family: 'Century Gothic', sans-serif !important;
            width: 90%;
            margin-left: 22px;
            margin-right: 0;
        }

        /* .amount-words-row td {
            padding: 10px 12px;
            text-align: center;
            font-style: italic;
            font-weight: bold;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        } */

        /* Terms & Conditions */
        .terms-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0 10px 0;
            font-size: 13px;
            page-break-inside: avoid;
             font-family: 'Century Gothic', Times, serif !important;
        }

        .terms-table {
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-bottom: 30px;
            page-break-inside: avoid;
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
        }

        .terms-table td {
            vertical-align: top;
            padding: 5px 8px;
        }

        .terms-table td:first-child {
            width: 30px;
            /* font-weight: bold; */
            font-family: 'Century Gothic', Times, serif !important;
        }

        /* Signature */
        .signature-section {
            margin-top: 60px;
            page-break-inside: avoid;
            font-family: 'Century Gothic', Times, serif !important;
            width: calc(100% - var(--pdf-left-offset) - var(--pdf-right-offset));
            margin-left: var(--pdf-left-offset);
            margin-right: var(--pdf-right-offset);
            text-align: left;
            
        }

        .signature-content {
            width: 280px;
            font-family: 'Century Gothic', Times, serif !important;
            font-weight: bold;
            display: block;
            text-align: left;

        }

        .signature-content p {
            margin: 0;
            line-height: 1.1;
        }

        .signature-line {
            border-top: 1px dashed #000;
            width: 200px;
            margin: 35px 0 8px 0;
            font-family: 'Century Gothic', Times, serif !important;

        }

        .post-table-section {
            margin-top: 18px;
        }

        .post-table-page-break {
            page-break-before: always;
            margin-top: 0;
            padding-top: var(--pdf-top-safe-space);
        }

        .post-table-page-break .amount-in-words {
            margin-top: 0;
        }

        .post-table-page-break .terms-title {
            margin-top: 0;
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

        $firstPageLimit = 4;
        $overflowPageLimit = 10;

        $itemPages = [];
        $serial = 1;

        if ($productItems->count() <= $firstPageLimit) {
            $itemPages[] = [
                'items' => $productItems,
                'serial_start' => $serial,
            ];
        } else {
            $firstChunk = $productItems->slice(0, $firstPageLimit)->values();
            $itemPages[] = [
                'items' => $firstChunk,
                'serial_start' => $serial,
            ];

            $serial += $firstChunk->count();
            $remainingItems = $productItems->slice($firstPageLimit)->values();

            foreach ($remainingItems->chunk($overflowPageLimit) as $chunk) {
                $chunk = $chunk->values();

                $itemPages[] = [
                    'items' => $chunk,
                    'serial_start' => $serial,
                ];

                $serial += $chunk->count();
            }
        }

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
                            <p>REF: {{ strtoupper($quotation->quotation_number ?? 'N/A') }}</p>
                            <p>{{ $quotation->quotation_date?->format('F d, Y') ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>

                {{-- Subject --}}
                <div class="subject">
                    Sub: <span
                        style="text-decoration: underline;">{{ $subject ?? 'Quotation for Supplying of Products/Services' }}</span>
                </div>

                {{-- Letter Body --}}
                <div class="letter-body">
                    <p>{!! nl2br(e($body_content ?? '')) !!}</p>
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
                            <td class="serial">{{ $pageData['serial_start'] + $rowIndex }}</td>
                            <td class="model">{{ $item->product?->product_code ?? 'N/A' }}</td>
                            <td class="product-description">
                                @if ($item->product)
                                    {{ $item->product->name }}
                                    @if ($item->product->details)
                                        <br><small style="color: #666;">{{ $item->product->details }}</small>
                                    @endif
                                @endif
                            </td>
                            <td class="quantity">{{ number_format($item->quantity) }}</td>
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
                                    ({{ number_format($quotation->discount_percent ?? 0, 2) }}%) (BDT)</td>
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

                        @if (($quotation->vat_amount ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">VAT ({{ number_format($quotation->vat_percent ?? 0, 2) }}%) (BDT)
                                </td>
                                <td class="total-price">{{ number_format($quotation->vat_amount ?? 0, 2) }}</td>
                            </tr>
                        @endif

                        @if (($quotation->tax_amount ?? 0) > 0)
                            <tr class="total-row">
                                <td colspan="7">AIT ({{ number_format($quotation->tax_percent ?? 0, 2) }}%) (BDT)
                                </td>
                                <td class="total-price">{{ number_format($quotation->tax_amount ?? 0, 2) }}</td>
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
