<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<div class="bp3-callout bp3-intent-primary home-info">
  <p>Olimpiade yang akan/sedang berlangsung: <a href="/OSN2022"><strong>Olimpiade Sains Nasional 2022 Bidang Informatika</strong></a>.</p>
  <p>Medalis akan diseleksi lebih lanjut untuk memilih perwakilan Indonesia pada <a href="https://ioi2023.hu"><strong>International Olympiad in Informatics 2023</strong></a> di Hungaria.</p>
  <hr />
  <p><i><strong>International</strong> students: we are pleased to invite you to participate in the mirror contest, <a href="/OSN2022/open"><strong>Indonesian NOI (National Olympiad in Informatics) Open Contest 2022</strong></a>!</i></p>
</div>

<div class="bp3-card home-info">
  <p><b>OSN</b> (Olimpiade Sains Nasional) merupakan olimpiade tahunan tingkat SMA/sederajat yang diadakan oleh <a href="https://pusatprestasinasional.kemdikbud.go.id/"><strong>Pusat Prestasi Nasional</strong></a>, Kemendikbudristek Republik Indonesia, dan <a href="https://alumni.toki.id"><strong>Ikatan Alumni TOKI</strong></a> (Tim Olimpiade Komputer Indonesia).</p>
  <p>Bidang <b>informatika</b>/komputer merupakan salah satu bidang yang dilombakan, yang menguji penyelesaian masalah (<i>problem solving</i>) melalui soal-soal pemrograman <i>(<strong>competitive programming</strong>)</i>.</p>
  <p>Untuk dapat bertanding di OSN tingkat nasional, siswa harus ditunjuk melalui pihak sekolah untuk mengikuti OSN tingkat kota/kabupaten (<b>OSN-K</b>) terlebih dahulu. Kemudian, para siswa terbaik tingkat kota akan ditandingkan di tingkat provinsi (<b>OSN-P</b>) dan kemudian nasional (<b>OSN</b>).</p> 
  <p>Para medalis OSN Informatika akan diseleksi lebih lanjut untuk memilih 4 siswa yang akan mewakili Indonesia pada ajang <a href="https://ioinformatics.org/"><strong>International Olympiad in Informatics</strong></a> (<strong>IOI</strong>).</p>
</div>
<div class="bp3-card home-info">
  <p>(Sebelum tahun 2020, rangkaian olimpiade ini disebut <b>OSK</b>, <b>OSP</b>, dan <b>OSN</b>. Khusus tahun 2020 - 2021, rangkaian olimpiade ini disebut <b>KSN-K</b>, <b>KSN-P</b>, dan <b>KSN</b>. )</p>
</div>
<hr />
<table>
  <tr>
    <td class="section-cell">
      <div class="bp3-card bp3-interactive home-card" onclick="location.href='/persiapan'">
        <h3 class="bp3-heading"><span class="bp3-icon-large bp3-icon-form"></span>&nbsp;&nbsp;Persiapan</h3>
        <p>Persiapkan diri Anda dalam menghadapi OSN Informatika.</p>
      </div>
    </td>
    <td class="section-cell">
      <div class="bp3-card bp3-interactive home-card" onclick="location.href='/silabus'">
        <h3 class="bp3-heading"><span class="bp3-icon-large bp3-icon-properties"></span>&nbsp;&nbsp;Silabus</h3>
        <p>Ketahui materi apa saja yang akan diujikan pada OSN Informatika.</p>
      </div>
    </td>
  </tr>
  <tr>
    <td class="section-cell">
      <div class="bp3-card bp3-interactive home-card" onclick="location.href='/arsip'">
        <h3 class="bp3-heading"><span class="bp3-icon-large bp3-icon-duplicate"></span>&nbsp;&nbsp;Arsip Soal</h3>
        <p>Berlatih soal-soal dari olimpiade-olimpiade tahun-tahun terdahulu.</p>
      </div>
    </td>
    <td class="section-cell">
      <div class="bp3-card bp3-interactive home-card" onclick="location.href='/statistik'">
        <h3 class="bp3-heading"><span class="bp3-icon-large bp3-icon-series-search"></span>&nbsp;&nbsp;Statistik</h3>
        <p>Lihat statistik peserta, sekolah, provinsi, dan nasional.</p>
      </div>
    </td>
  </tr>
</table>

<?= $this->endSection() ?>
