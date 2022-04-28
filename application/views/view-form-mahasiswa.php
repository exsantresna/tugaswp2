<html>
<head> 
    <title> Input Data Mahasiswa</title> 
</head>
<body>
    <center>
         <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post"> 
         <table>
              <tr>
                   <th colspan="3"> 
                      <h1> Input Data Mahasiswa</h1>
                    </th> 
                </tr> 
                <tr>
                     <td colspan="3"> 
                         <hr>
                        </td>
                     </tr> 
                     <tr>
                          <th>Nama Mahasiswa</th> 
                          <th>:</th> 
                          <td> 
                              <input type="text" name="kode" id="kode"> 
                            </td>
                         </tr>
                          <tr> 
                          <th>tanggal lahir</th> 
                          <th>:</th> 
                          <td> 
                              <input type="text" name="tl" id="tl"> 
                            </td>
                         </tr>
                          <tr> 
                              <th>NIM</th>
                               <td>:</td> 
                               <td> 
                                   <input type="text" name="nama" id="nama"> 
                                </td> 
                            </tr> 
                            <tr> 
                            <th>Kelas</th> 
                          <th>:</th> 
                          <td> 
                              <input type="text" name="kl" id="kl"> 
                            </td>
                         </tr>
                          <tr> 
                                <th>Jurusan</th> 
                                <td>:</td> 
                                <td> <select name="jr" id="jr"> 
                                    <option value="">Pilih Jurusan</option> 
                                    <option value="Teknik Informatika">Teknik Tnformatika</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option> 
                                    <option value="4">Manajemen Bisnis</option> 
                                </select> 
                            </td> 
                        </tr> 
                        <tr> 
                            <td colspan="3" align="center"> 
                                <input type="submit" value="Submit"> 
                            </td>
                         </tr> 
                        </table>
                        </form> 
                    </center> 
                </body>
                </html>