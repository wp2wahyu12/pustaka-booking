<html>
    <head>
        <title>Cinema 99</title>
    </head>
    <body>

        <h2><?=$judul;?></h2>

        <form  method="post" action="<?php echo base_url();?>index.php/cinema/proses_tambah">
            <table width="30%" border="0" cellpadding="5">
                <tr>
                    <td width="30%">
                        Nama Pemesan
                    </td>
                    <td  width="70%">
                        <input type="text" name="nama_pemesan" value="<?php echo set_value('nama_pemesan'); ?>">
                    </td>
                    <td><?php echo form_error('nama_pemesan'); ?></td>
                </tr>
                <tr>
                    <td width="30%">
                        Judul Film
                    </td>
                    <td  width="70%">
                        <select name="judul_film" >
                            <option value="The Closet">The Closet</option>
                        </select>
                    </td>
                    <td><?php echo form_error('judul_film'); ?></td>
                </tr>

                <tr>
                    <td width="30%">
                        Pukul
                    </td>
                    <td  width="70%">
                        <input type="radio" name="pukul" value="14.20"> 14.20
                        <input type="radio" name="pukul" value="15.40"> 15.40
                        <input type="radio" name="pukul" value="16.40"> 16.40
                    </td>
                    <td><?php echo form_error('pukul'); ?></td>
                </tr>      
                
                <tr>
                    <td width="30%">
                        Tipe Studio
                    </td>
                    <td  width="70%">
                        <input type="radio" name="tipe_studio" value="Reguler 2D"> Reguler 2D
                        <input type="radio" name="tipe_studio" value="3D"> 3D
                        <input type="radio" name="tipe_studio" value="Velvet"> Velvet
                    </td>
                    <td><?php echo form_error('tipe_studio'); ?></td>
                </tr>                  
                


                <tr>
                    <td width="30%">
                    Jumlah Pemesan
                    </td>
                    <td  width="70%">
                        <input type="number" name="jumlah_pesanan" size="2">
                    </td>
                    <td><?php echo form_error('jumlah_pesanan'); ?></td>
                    
                </tr>  
                
                <tr>
                    <td width="30%">
                    
                    </td>
                    <td  width="70%">
                        <input type="submit" value="Hitung"> <input type="reset" value="Batal">
                    </td>
                    
                </tr>              



            </table>

        </form>
    </body>
</html>