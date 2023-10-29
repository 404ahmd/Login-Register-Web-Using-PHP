<?php

include ("Config.php");

if (isset($_POST['register'])) {
    //filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    //menyiapkan query
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $db->prepare($sql);

    //bind paramater ke query
    $params = array(
        ":username" => $username,
        ":email"=> $email,
        ":password"=>$password
    );

    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    //jika query sudah berhasil disimpan dan user terdaftar,
    //maka arahkan ke halaman login
   // if($saved) header("location: Login.html");
    echo"Data berhasil disimpan";

}

?>