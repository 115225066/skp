<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan Jabatan</title>
        <link rel="shortcut icon" href="<?= base_url('assets/backend/img/icon.png') ?>">
        <style>
        #watermark { position: fixed; bottom: 0px; right: 0px; width: 500px; height: 450px; opacity: .1; }
        @page { margin-top: 30px; }
        img{ text-align: right; } table {
        border-collapse: collapse;
        }
        body {
        font-family: "Arial";
        font-size:9;
        }
        .header, .footer {
        width: 100%;
        text-align: right;
        position: fixed;
        }
        .footer2 {
        width: 100%;
        text-align: left;
        position: fixed;
        }
        .header {
        top: 0px;
        }
        .footer {
        bottom: 0px;
        }
        .footer2 {
        bottom: 0px;
        }
        .pagenum:before {
        content: counter(page);
        }
        table, td, th {
        border: 1px solid black;
        padding: 10px;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th {
        height: 50px;
        }
        </style>

    </head>

    <body>
        <?php
        $html ='
        <div id="watermark">
            <img src="'. base_url('assets/frontend/images/logo2.png') . '" height="100%" width="100%">
        </div>
        <div class="footer">
            Hal <span class="pagenum"></span>
        </div>
        <div class="footer2">Laporan Jabatan </div>
        <center>
        <h1>Laporan Jabatan</h1>
        <table border="1" align="center" width="100%">
            <thead>
                <tr>
                    <th width="5%">ID JABATAN</th>
                    <th>NAMA JABATAN</th>
                </tr>
            </thead>
            <tbody>';
                foreach ($data as $r) {
                $html .= '<tr>
                    <td><center>' . $r->id_jabatan . '</center></td>
                    <td>'. $r->nama_jabatan .'</td>
                </tr>';
                }
            $html .= '</tbody>
        </table>
        </center>';
        echo $html;
        ?>
    </body>
    
</html>