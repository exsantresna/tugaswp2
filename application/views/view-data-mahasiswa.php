<html> 
<head> 
    <title>Data Mahasiswa</title> 
</head>
<body background: rgb(152, 195, 11);> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                  <h1>Data Mahasiswa</h1>
                </th> 
            </tr>
             <tr>
                  <td colspan="3"> 
                      <hr> 
                    </td> 
                </tr>
                 <tr>
                      <td>Nama Mahasiswa</td> 
                      <td>:</td> 
                      <td> 
                          <?= $kode; ?> 
                        </td> 
                    </tr> 
                    <tr> 
                    <td>tempat tanggal lahir</td> 
                      <td>:</td> 
                      <td> 
                          <?= $tl; ?> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td>NIM</td> 
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
                              <a href="<?= base_url('mahasiswa'); 
                            ?>">Kembali</a> 
                            </td>
                         </tr> 
                        </table>
                     </center>
</body> 
</html>