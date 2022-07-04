<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style type="text/css">
    p{
        margin: 5px 0 0 0;
    }
        p.footer{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
        display: block;
    }
    .bold{
        font-weight: bold;
    }
    #footer {
    clear: both;
    position: relative;
    height: 40px;
    margin-top: -40px;
    }
    </style>
</head>
<body style="font-size: 15px">
    <table width="100%" >
        <tr>
            <!-- <td width="50%"><img src="<?php echo base_url('assets/images/icon.png')?>" style="width: 50px;"></td> -->
            <td align="left" valign="top"> <span style="font-size: 15px">RSUD Dr. R. SOEDJATI</span></td>
            <td align="right" valign="top"> <span style="font-size: 15px">BON TUGAS KERJA</span></td>
        </tr>
        <tr>
            <td align="left" valign="top"> <span style="font-size: 15px">JL. DI. PANJAITAN NO. 36</span></td>
            <td align="right" valign="top"> <span style="font-size: 15px">Tanggal : </span></td>
        </tr>
        <tr>
            <td align="left" valign="top"> <span style="font-size: 15px">PURWODADI</span></td>
        </tr>
    </table>
    <br>
    <table width="100%" >
        <tr>
            <!-- <td width="50%"><img src="<?php echo base_url('assets/images/icon.png')?>" style="width: 50px;"></td> -->
            <td align="left" valign="top"> <span style="font-size: 15px">Pemesan Jasa</span></td>
            <td align="center" valign="top"> <span style="font-size: 15px">Penerima Tugas</span></td>
            <td align="right" valign="top"> <span style="font-size: 15px">Selesai / Reteur</span></td>
        </tr>
        <tr>
            <td align="left" valign="top"> <span style="font-size: 15px">Bagian : </span></td>
            <td align="center" valign="top"> <span style="font-size: 15px">Bagian : </span></td>
            <td align="right" valign="top"> <span style="font-size: 15px">Tanggal : </span></td>
        </tr>
        <tr>
            <td align="left" valign="top"> <span style="font-size: 15px"></span></td>
            <td align="center" valign="top"> <span style="font-size: 15px">Nama : </span></td>
        </tr><br><br>
    </table>
    
    <table  style="border: 1px solid black;border-collapse: collapse;font-size: 15px" width="100%">
        <thead style="border: 1px solid black;">
            <tr>
                <td align="center" style="width: 50px; border: 1px solid black;">No</td>
                <td align="center" style="border: 1px solid black;">Request</td>
                <td align="center" style="border: 1px solid black;">Keterangan</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 50px; border: 1px solid black;">1</td>
                <td style="border: 1px solid black;"><textarea class="form-control" id="requestdelegation" rows="3"></textarea></td>
                <td style="border: 1px solid black;"><textarea class="form-control" id="requestdelegation" rows="3"></textarea></td>
            </tr>
        </tbody>
        <!-- <tr style="margin: 5px">
            <th style="border: 1px solid black;">No</th>
            <th style="border: 1px solid black;">Request</th>
            <th style="border: 1px solid black;">Keterangan</th>
        </tr>     -->
    </table>
    <br><br><br><br>
    <p>
        <table width="100%">
            <tr>
                <td align="center">Pemesan<br><br><br><br>..............</td>
                <td align="center"><br><br><br><br><br><br></td>
                <td align="center">Penerima Tugas<br>IT<br><br><br>..............</td>
            </tr>    
        </table>
    </p>
    <!-- <p align="center"> 
        <span style="font-size: 18px"><b>BERITA ACARA <br> Kalibrasi Alat</b></span> <br>
    </p>
    <hr> -->
    <!-- <p>
        <table>
            <tr>
                <th align="left"> Unit </th>
                <td> : Unit Test</td>
            </tr>
            <tr>
                <th align="left"> Departemen </th>
                <td> : Departemen Test</td>
            </tr>
            <tr>
                <th align="left"> Nomor BA </th>
                <td> : NOMOR/BERITA/ACARA</td>
            </tr>
        </table>
    </p> -->
    <!-- <p>
        Daftar asset yang dikalibrasi :
    </p>
    <p>
        <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
            <tr style="margin: 5px">
                <th rowspan="2" style="border: 1px solid black;">No</th>
                <th colspan="3" style="border: 1px solid black;">Alat</th>
                <th rowspan="2" style="border: 1px solid black;">No Seri</th>
                <th rowspan="2" style="border: 1px solid black;">No Asset</th>
                <th colspan="2" style="border: 1px solid black;">Tanggal</th>
                <th rowspan="2" style="border: 1px solid black;">Lokasi</th>
                <th rowspan="2" style="border: 1px solid black;">Keterangan</th>
            </tr>
            <tr style="margin: 5px">
                <th style="border: 1px solid black;">Jenis</th>
                <th style="border: 1px solid black;">Merek</th>
                <th style="border: 1px solid black;">Tipe</th>
                <th style="border: 1px solid black;">Kalibrasi</th>
                <th style="border: 1px solid black;">Selanjutnya</th>
            </tr>
            <tr style="margin: 5px">
                <td style="border: 1px solid black;">1</td>
                <td style="border: 1px solid black;">Alat 1</td>
                <td style="border: 1px solid black;">Merek 1</td>
                <td style="border: 1px solid black;">Tipe 1</td>
                <td style="border: 1px solid black;">No Seri 1</td>
                <td style="border: 1px solid black;">No Asset 1</td>
                <td style="border: 1px solid black;">05 April 2022</td>
                <td style="border: 1px solid black;">05 April 2023</td>
                <td style="border: 1px solid black;">Lokasi 1</td>
                <td style="border: 1px solid black;">Keterangan 1</td>
            </tr>
            <tr style="margin: 5px">
                <td style="border: 1px solid black;">2</td>
                <td style="border: 1px solid black;">Alat 2</td>
                <td style="border: 1px solid black;">Merek 2</td>
                <td style="border: 1px solid black;">Tipe 2</td>
                <td style="border: 1px solid black;">No Seri 2</td>
                <td style="border: 1px solid black;">No Asset 2</td>
                <td style="border: 1px solid black;">05 April 2022</td>
                <td style="border: 1px solid black;">05 April 2023</td>
                <td style="border: 1px solid black;">Lokasi 2</td>
                <td style="border: 1px solid black;">Keterangan 2</td>
            </tr>
            <tr style="margin: 5px">
                <td style="border: 1px solid black;">3</td>
                <td style="border: 1px solid black;">Alat 3</td>
                <td style="border: 1px solid black;">Merek 3</td>
                <td style="border: 1px solid black;">Tipe 3</td>
                <td style="border: 1px solid black;">No Seri 3</td>
                <td style="border: 1px solid black;">No Asset 3</td>
                <td style="border: 1px solid black;">05 April 2022</td>
                <td style="border: 1px solid black;">05 April 2023</td>
                <td style="border: 1px solid black;">Lokasi 3</td>
                <td style="border: 1px solid black;">Keterangan 3</td>
            </tr>
        </table>
    </p>
    <br>    
    
    <p>
        Demikian Berita Acara inl dibuat dengan sebenar-benarnya, untuk diketahui dan digunakan dengan semestinya.
    </p>
    <p>
        <table width="100%">
            <tr>
                <td align="center">Dilaksanakan oleh<br><br><br><br><br><u>Nama Pelaksana</u><br>Tim Pelaksana</td>
                <td align="center">Diperiksa oleh<br><br><br><br><br><u>Nama Pemeriksa</u><br>Tim Pemeriksa</td>
                <td align="center">Diketahui oleh<br><br><br><br><br><u>Nama Diketahui</u><br>Manajer</td>
            </tr>    
        </table>
    </p>
    <p class="footer">
        <small>Tim Asset</small>
    </p> -->
    
</body>
</html>