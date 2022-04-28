<html>
     <head> 
         <title>Tampil Data Matakuliah</title> 
        </head>

<body> 
    <center> 
        <table> 
        <tr> 
            <th colspan="3"> 
                Tampil Data Mata Kuliah 
            </th> 
        </tr> 
        <tr> 
            <td colspan="3"> 
                <hr> 
            </td> 
        </tr> 
        <tr> 
            <td>Kode MTK</td> 
            <td>:</td>
             <td>
                  <?= $kode; ?> 
                </td> 
            </tr> 
            <tr> 
            <td>Tempat Tanggal Lahir</td> 
            <td>:</td>
             <td>
                  <?= $tl; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Nama MTK</td> 
                <td>:</td>
                 <td> 
                     <?= $nama; ?> 
                    </td> 
                </tr> 
                <tr> 
                <td>Kelas</td> 
                <td>:</td>
                 <td> 
                     <?= $kl; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Jurusan</td>
                     <td>:</td>
                      <td> 
                          <?= $jr; ?> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="3" align="center">
                             <a href="<?= base_url('../mahasiswa'); 
                             ?>">Kembali</a> 
                             </td> 
                            </tr> 
                        </table>
                     </center>
 </body>
 </html>
 
</body> </html>