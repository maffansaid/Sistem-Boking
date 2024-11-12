<div>
    <h1>Pembayaran Berhasil</h1>

    <p>Pemesanan lapangan dengan rincian sebagai berikut : </p>
    <table>
        <tr>
            <td>Atas nama</td>
            <td>:</td>
            <td>{{ $data['nama'] }}</td>
        </tr>
        <tr>
            <td>Nama PB</td>
            <td>:</td>
            <td>{{ $data['nama_pb'] }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ $data['tanggal'] }}</td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td>{{ Str::substr($data['waktu_mulai'], 0, 5) }}-{{ Str::substr($data['waktu_selesai'], 0, 5) }}</td>
        </tr>
    </table>

    <p>ID : {{ $data['referensi'] }}</p>
</div>
