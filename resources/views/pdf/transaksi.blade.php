<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Transaksi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f0f2f5;
            color: #1a1a1a;
            font-family: 'Segoe UI', Arial, sans-serif;
            line-height: 1.6;
            padding: 2rem;
        }

        /* Main container */
        .receipt {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* Invoice Title */
        .invoice-title {
            text-align: center;
            padding: 1.5rem;
            background: #ffffff;
            border-bottom: 2px solid #ebeef2;
        }

        .invoice-title h2 {
            font-size: 1.5rem;
            color: #1a1a1a;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .invoice-number {
            color: #666;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Header section with gradient */
        .receipt-header {
            background: linear-gradient(135deg, #0396FF, #0D47A1);
            color: black;
            padding: 2rem;
            text-align: center;
            position: relative;
        }

        .receipt-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .receipt-address {
            font-size: 0.875rem;
            opacity: 0.9;
            max-width: 80%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        /* Status banner */
        .status-banner {
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            border-bottom: 1px solid #ebeef2;
        }

        .status-icon {
            font-size: 1.25rem;
        }

        .status-success {
            color: #00c853;
        }

        .status-pending {
            color: #ff9800;
        }

        /* Transaction details container */
        .transaction-container {
            padding: 2rem;
        }

        /* Amount section */
        .amount-section {
            background-color: #f8f9fa;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .amount-label {
            font-size: 0.875rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .amount-value {
            font-size: 2rem;
            font-weight: 700;
            color: #0396FF;
        }

        /* Details grid */
        .details-grid {
            display: grid;
            gap: 1.25rem;
            background-color: #ffffff;
            border-radius: 12px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #ebeef2;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.925rem;
            color: #666;
        }

        .detail-value {
            font-size: 1rem;
            font-weight: 600;
            color: #1a1a1a;
        }

        .detail-icon {
            color: #0396FF;
            width: 20px;
            text-align: center;
        }

        /* Bank account details */
        .bank-details {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border: 1px dashed #dde1e7;
        }

        .bank-account {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 0.75rem;
        }

        .account-number {
            font-family: monospace;
            font-size: 1.25rem;
            color: #0396FF;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Footer section */
        .receipt-footer {
            text-align: center;
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-top: 1px solid #ebeef2;
        }

        .footer-text {
            font-size: 0.875rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .thank-you {
            font-weight: 600;
            color: #0396FF;
            margin-bottom: 0.75rem;
        }

        /* Print optimizations */
        @media print {
            body {
                background: none;
                padding: 0;
            }

            .receipt {
                box-shadow: none;
                max-width: none;
            }

            .receipt-header {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>
    <div class="receipt">
        <!-- Invoice Title -->
        <div class="invoice-title">
            <h2>Struk Pemesanan</h2>
            {{-- <div class="invoice-number">No. Invoice: INV/{{ date('Ymd') }}/{{ rand(1000, 9999) }}</div> --}}
        </div>

        <!-- Header -->
        <div class="receipt-header">
            <h1 class="receipt-title">Gor Bulutangkis Polres Lampung Selatan</h1>
            <p class="receipt-address">
                <i class="fas fa-map-marker-alt"></i>
                Jl. Lintas Sumatra, Way Urang, Kec. Kalianda, Kabupaten Lampung Selatan, Lampung 35551
            </p>
        </div>

        <!-- Status Banner -->
        <div class="status-banner">
            <i
                class="fas fa-circle-check status-icon {{ $pemesanan->status ? 'status-success' : 'status-pending' }}"></i>
            <span class="detail-value {{ $pemesanan->status ? 'status-success' : 'status-pending' }}">
                {{ $pemesanan->status ? 'Pembayaran Berhasil' : 'Menunggu Pembayaran' }}
            </span>
        </div>

        <div class="transaction-container">
            <!-- Amount Section -->
            <div class="amount-section">
                <div class="amount-label">Total Pembayaran</div>
                <div class="amount-value">Rp {{ number_format($pemesanan->pembayaran->harga, 0, '', '.') }}</div>
            </div>

            <!-- Virtual Account Details -->
            <div class="bank-details">
                <div class="detail-label">
                    {{-- <i class="fas fa-university detail-icon"></i> --}}
                    Bank Tujuan :
                    {{ session('metode') === 'BRIVA' ? 'Bank BRI' : (session('metode') === 'BNIVA' ? 'Bank BNI' : 'Bank BCA') }}
                </div>
                <div class="bank-account">
                    Nomor Virtual Account :
                    <span class="account-number">{{ session('pembayaran')['data']['pay_code'] ?? '' }}</span>
                    <i class="fas fa-copy detail-icon" style="cursor: pointer;"></i>
                </div>
            </div>

            <!-- Customer Details -->
            <div class="details-grid">
                <div class="detail-row">
                    <span class="detail-label">
                        <i class="fas fa-user detail-icon"></i>
                        Nama Pelanggan
                    </span>
                    <span class="detail-value">{{ $pemesanan->nama }}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">
                        <i class="fas fa-building detail-icon"></i>
                        Nama PB
                    </span>
                    <span class="detail-value">{{ $pemesanan->nama_pb }}</span>
                </div>

                {{-- <div class="detail-row">
                    <span class="detail-label">
                        <i class="fas fa-building detail-icon"></i>
                        Waktu
                    </span>
                    <span class="detail-value">{{ $pemesanan->waktu }}</span>
                </div> --}}

                <div class="detail-row">
                    <span class="detail-label">
                        <i class="fas fa-calendar detail-icon"></i>
                        Tanggal Transaksi
                    </span>
                    <span class="detail-value">{{ date('d F Y') }}</span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="receipt-footer">
            <p class="thank-you">Terima kasih telah memesan</p>
            <p class="footer-text">Harap simpan struk ini sebagai bukti transaksi Anda.</p>
        </div>
    </div>
</body>

</html>