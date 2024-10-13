@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container">
        <form action="{{ route('users.update', $user->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required value="{{ $user->name }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" required value="{{ $user->phone }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{ $user->email }}">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Level User</label>
            <select class="form-control" id="size" name="level_user" aria-describedby="size" required value="{{ old('size') }}">
                <option name="level_user" value="{{ $user->level_user }}">{{ $user->level_user }}</option>
                <option name="level_user" value="Karyawan">Karyawan</option>
                <option name="level_user" value="Anggota">Anggota</option>
                <option name="level_user" value="Agregator">Agregator</option>
                <option name="level_user" value="Pendaftar">Pendaftar</option>

            </select>
            <input disabled type="disable" class="form-control" id="email" name="level_user" aria-describedby="emailHelp" required value="{{ $user->level_user }}">

            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $user->address }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Status</label>
            <select class="form-control" id="size" name="status" aria-describedby="size" required value="{{ old('size') }}">
                <option name="size" value="{{ $user->status }}">{{ $user->status }}</option>
                <option name="size" value="Aktif">Aktif</option>
                <option name="size" value="Tidak Aktif">Tidak Aktif</option>
                <option name="size" value="Menunggu Verifikasi">Menunggu Verifikasi</option>
                <option name="size" value="Pengajuan Ditolak">Pengajuan Ditolak</option>
                <option name="size" value="Pending">Pending</option>
                <option name="size" value="Dibatalkan">Dibatalkan</option>
            </select>
            <input disabled type="disable" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $user->status }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="exampleInputPassword1" required value="{{ $user->password }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID user</label>
            <input type="text" class="form-control" name="id_artist" id="exampleInputPassword1" value="{{ $user->id_artist }}">
            </div>

            <div class="mb-3">
                <img src="{{ asset('storage/KTP/'.$user->ktp) }}" class="img-fluid" alt="" height="20%" width="20%">
                <p><h5>Silahkan masukan foto ktp</h5></p>
                <input type="file" class="form-control" name="ktp" placeholder="Silahkan Upload KTP Anda" value="{{ $user->ktp }}">
            </div>

            <div class="mb-3">
                <input type="text" name="npwp" class="form-control" placeholder=" npwp" value="{{  $user->npwp }}" required>
            </div>

            <div class="mb-3">
                <select class="form-control" id="level_user" name="bank" required>
                    <option class="form-control" id="level_user" name="bank" value="{{ $user->bank }}">{{ $user->bank }}</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Indonesia (BI)">Bank Indonesia (BI)</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mandiri">Bank Mandiri</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Negara Indonesia (BNI)">Bank Negara Indonesia (BNI)</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Rakyat Indonesia (BRI)">Bank Rakyat Indonesia (BRI)</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Tabungan Negara (BTN)">Bank Tabungan Negara (BTN)</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Central Asia (BCA)">Bank Central Asia (BCA)</option>
                    <option class="form-control" id="level_user" name="bank" value="Panin Bank">Panin Bank</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Permata">Bank Permata</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Woori Saudara">Bank Woori Saudara</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank ICBC Indonesia">Bank ICBC Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank DKI">Bank DKI</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BJB">Bank BJB</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Jateng">Bank Jateng</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BPD DIY">Bank BPD DIY</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Jatim">Bank Jatim</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kalbar">Bank Kalbar</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kalteng">Bank Kalteng</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kalsel">Bank Kalsel</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kaltim">Bank Kaltim</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sulsel">Bank Sulsel</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sultra">Bank Sultra</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BPD Sulteng">Bank BPD Sulteng</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sulut">Bank Sulut</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BPD Bali">Bank BPD Bali</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank NTB">Bank NTB</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank NTT">Bank NTT</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Maluku">Bank Maluku</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Papua">Bank Papua</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BRI Agroniaga">Bank BRI Agroniaga</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Anda">Bank Anda</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Artha Graha Internasional">Bank Artha Graha Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Bukopin">Bank Bukopin</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Bumi Arta">Bank Bumi Arta</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Capital Indonesia">Bank Capital Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank CIMB Niaga">Bank CIMB Niaga</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Danamon Indonesia">Bank Danamon Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Ekonomi Raharja">Bank Ekonomi Raharja</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Ganesha">Bank Ganesha</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank KEB Hana">Bank KEB Hana</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Index Selindo">Bank Index Selindo</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Maybank Indonesia">Bank Maybank Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Maspion">Bank Maspion</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mayapada">Bank Mayapada</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mega">Bank Mega</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mestika Dharma">Bank Mestika Dharma</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Shinhan Indonesia">Bank Shinhan Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank MNC Internasional">Bank MNC Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank J Trust Indonesia">Bank J Trust Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Nusantara Parahyangan">Bank Nusantara Parahyangan</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank OCBC NISP">Bank OCBC NISP</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank of India Indonesia">Bank of India Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank QNB Indonesia">Bank QNB Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank SBI Indonesia">Bank SBI Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sinarmas">Bank Sinarmas</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank UOB Indonesia">Bank UOB Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Amar Bank Indonesia">Amar Bank Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Andara">Bank Andara</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Artos Indonesia">Bank Artos Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Bisnis Internasional">Bank Bisnis Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Tabungan Pensiunan Nasional">Bank Tabungan Pensiunan Nasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sahabat Sampoerna">Bank Sahabat Sampoerna</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Fama Internasional">Bank Fama Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Harda Internasional">Bank Harda Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Ina Perdana">Bank Ina Perdana</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Jasa Jakarta">Bank Jasa Jakarta</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kesejahteraan Ekonomi">Bank Kesejahteraan Ekonomi</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Dinar Indonesia">Bank Dinar Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mayora">Bank Mayora</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mitraniaga">Bank Mitraniaga</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Multi Arta Sentosa">Bank Multi Arta Sentosa</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Nationalnobu">Bank Nationalnobu</option>
                    <option class="form-control" id="level_user" name="bank" value="Prima Master Bank">Prima Master Bank</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Pundi Indonesia">Bank Pundi Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Royal Indonesia">Bank Royal Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mandiri Taspen Pos">Bank Mandiri Taspen Pos</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Victoria Internasional">Bank Victoria Internasional</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Yudha Bhakti">Bank Yudha Bhakti</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BPD Aceh">Bank BPD Aceh</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sumut">Bank Sumut</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Nagari">Bank Nagari</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Riau Kepri">Bank Riau Kepri</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Jambi">Bank Jambi</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Bengkulu">Bank Bengkulu</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sumsel Babel">Bank Sumsel Babel</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Lampung">Bank Lampung</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank ANZ Indonesia">Bank ANZ Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Commonwealth">Bank Commonwealth</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Agris">Bank Agris</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BNP Paribas Indonesia">Bank BNP Paribas Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Capital Indonesia">Bank Capital Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Chinatrust Indonesia">Bank Chinatrust Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank DBS Indonesia">Bank DBS Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mizuho Indonesia">Bank Mizuho Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Rabobank International Indonesia">Bank Rabobank International Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Resona Perdania">Bank Resona Perdania</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sumitomo Mitsui Indonesia">Bank Sumitomo Mitsui Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Windu Kentjana International">Bank Windu Kentjana International</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank of America">Bank of America</option>
                    <option class="form-control" id="level_user" name="bank" value="Bangkok Bank">Bangkok Bank</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank of China">Bank of China</option>
                    <option class="form-control" id="level_user" name="bank" value="Citibank">Citibank</option>
                    <option class="form-control" id="level_user" name="bank" value="Deutsche Bank">Deutsche Bank</option>
                    <option class="form-control" id="level_user" name="bank" value="HSBC">HSBC</option>
                    <option class="form-control" id="level_user" name="bank" value="JPMorgan Chase">JPMorgan Chase</option>
                    <option class="form-control" id="level_user" name="bank" value="Standard Chartered">Standard Chartered</option>
                    <option class="form-control" id="level_user" name="bank" value="The Bank of Tokyo-Mitsubishi UFJ">The Bank of Tokyo-Mitsubishi UFJ</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BNI Syariah">Bank BNI Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Mega Syariah">Bank Mega Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Muamalat Indonesia">Bank Muamalat Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
                    <option class="form-control" id="level_user" name="bank" value="BCA Syariah">BCA Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BJB Syariah">Bank BJB Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BRI Syariah">Bank BRI Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Panin Bank Syariah">Panin Bank Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Syariah Bukopin">Bank Syariah Bukopin</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Victoria Syariah">Bank Victoria Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="BTPN Syariah">BTPN Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Maybank Syariah Indonesia">Bank Maybank Syariah Indonesia</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BTN Syariah">Bank BTN Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Danamon Syariah">Bank Danamon Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="CIMB Niaga Syariah">CIMB Niaga Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="BII Syariah">BII Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="OCBC NISP Syariah">OCBC NISP Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Permata Syariah">Bank Permata Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Nagari Syariah">Bank Nagari Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank BPD Aceh Syariah">Bank BPD Aceh Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank DKI Syariah">Bank DKI Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kalbar Syariah">Bank Kalbar Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kalsel Syariah">Bank Kalsel Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank NTB Syariah">Bank NTB Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Riau Kepri Syariah">Bank Riau Kepri Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sumsel Babel Syariah">Bank Sumsel Babel Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Sumut Syariah">Bank Sumut Syariah</option>
                    <option class="form-control" id="level_user" name="bank" value="Bank Kaltim Syariah">Bank Kaltim Syariah</option>
                    </select>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening" value="{{ $user->norek }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
