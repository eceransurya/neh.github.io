<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //cek apakah ada kiriman
    if(isset($_POST['name']))
    {
        //panggil koneksi
        include_once('../kelas/koneksi.php');
                
        $aksi = test_input($_POST['aksi']);
        //bisa utk add, edit, delete
        switch ($aksi)
        {
            case "add":
                //tangkap kiriman
                $a = test_input($_POST['name']);
                $b = test_input($_POST['username']);
                $c = md5($_POST['password']);
                $d = test_input($_POST['tipeuser']);
                //simpan foto do databes
                $ssql = "INSERT INTO tbankr (name,username,password,tipeuser) 
                        VALUES ('$a','$b','$c','$d')";
                $query = mysqli_query($conn, $ssql); 
                //ambil id yg baru
                $last_id = mysqli_insert_id($conn);
                //upload foto
                $size = $_FILES['fotouser']['size'];
                //size harus >0
                if($size > 0) {
                    //temukan format foto
                    $nama = $_FILES['fotouser']['name'];
                    $arr_ekstensi = explode('.', $nama);
                    $ekstensi = end($arr_ekstensi);
                    $allow_ekstensi = array('jpeg', 'jpg', 'png', 'heic');
                    if(in_array($ekstensi, $allow_ekstensi))
                    {
                        //ukuran foto terlalu besar
                        if($size > 5120)
                        {
                            header('Location: ../AdminLTE/starter.php?page=datauser&msg=size');
                        }
                        else
                        {
                            //upload foto ke server
                            $temp_alamat = $_FILES['fotouser']['temp_name'];
                            $namabaru = $last_id . '.' . $ekstensi;
                            move_uploaded_file($temp_alamat, '../img/user/' .$namabaru);

                            //update nama foto
                            $ssql = "UPDATE tbankr SET fotouser='".$namabaru."' WHERE Id=" .$last_id;
                            $query = mysqli_query($conn, $ssql);
                        }
                    }
                    else
                    {
                        header('Location: ../AdminLTE/starter.php?page=datauser&msg=eks');
                    }
                }
                header('Location: ../AdminLTE/starter.php?page=datauser&msg=succesuser');
                break;
            case "edit":
                //tangkap kiriman
                $id= $_POST['Id'];
                $a = test_input($_POST['name']);
                $b = test_input($_POST['username']);
                $d = test_input($_POST['tipeuser']);
                //$e = $_FILES['fotouser'];
                $ssql = "UPDATE tbankr SET name='$a', username='$b', tipeuser='$d' 
                         WHERE Id=$id";
                $query = mysqli_query($conn, $ssql); 
                //upload foto jika foto ikut dikirimkan
                 //upload foto
                 $size = $_FILES['fotouser']['size'];
                 //size harus >0
                 if($size > 0) {
                     //temukan format foto
                     $nama = $_FILES['fotouser']['name'];
                     $arr_ekstensi = explode('.', $nama);
                     $ekstensi = end($arr_ekstensi);
                     $allow_ekstensi = array('jpeg', 'jpg', 'png' );
                     if(in_array($ekstensi, $allow_ekstensi))
                     {
                         //ukuran foto terlalu besar
                         if($size > 5120)
                         {
                             header('Location: ../AdminLTE/starter.php?page=datauser&msg=size');
                         }
                         else
                         {
                             //upload foto ke server
                             $temp_alamat = $_FILES['fotouser']['temp_name'];
                             $namabaru = $id . '.' . $ekstensi;
                             move_uploaded_file($temp_alamat, '../img/user/' .$namabaru);
 
                             //update nama foto
                             $ssql = "UPDATE tbankr SET fotouser='".$namabaru."' WHERE Id=" .$id;
                             $query = mysqli_query($conn, $ssql);
                         }
                     }
                     else
                     {
                         header('Location: ../AdminLTE/starter.php?page=datauser&msg=eks');
                     }
                 }
                 header('Location: ../AdminLTE/starter.php?page=datauser&msg=succesuser');
                break;
            case "delete":
                $id = $_POST['id'];
                $ssql = "DELETE tbuser1.* FROM tbuser1 WHERE Id=".$id;
                $query = mysqli_query($conn, $ssql);
                header('Location: ../AdminLTE/starter.php?page=datauser&msg=successdelete');
                break;

        }

    }
	else
    {
        header('Location: ../AdminLTE/starter.php?page=datauser');
    }
?>