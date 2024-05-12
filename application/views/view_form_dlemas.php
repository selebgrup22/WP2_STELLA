<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('dlemas/cetak'); ?>"
method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('nama') ?>" />
                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis" class="<?= form_error('nis') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('nis') ?>" />
                        <div class="invalid-feedback"><?= form_error('nis') ?></div>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" class="<?= form_error('kelas') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('kelas') ?>" />
                        <div class="invalid-feedback"><?= form_error('kelas') ?></div>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tanggal" id="tanggal" class="<?= form_error('tanggal') ? 'invalid' : '' ?>"
                            placeholder="yyyy-mm-dd" value="<?= set_value('tanggal') ?>" />
                        <div class="invalid-feedback"><?= form_error('tanggal') ?></div>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tempat" id="tempat" class="<?= form_error('tempat') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('tempat') ?>" />
                        <div class="invalid-feedback"><?= form_error('tempat') ?></div>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat" class="<?= form_error('alamat') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('alamat') ?>" />
                        <div class="invalid-feedback"><?= form_error('alamat') ?></div>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis" id="jenis" value="Pria" >Pria</input>
                    <input type="radio" name="jenis" id="jenis" value="Wanita" >Wanita</input>
                    <div class="invalid-feedback"><?= form_error('jenis') ?></div>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih SKS</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                    <div class="invalid-feedback"><?= form_error('agama') ?></div>
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