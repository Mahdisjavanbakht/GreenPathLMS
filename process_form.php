<?php

// CREATE DATABASE IF NOT EXISTS mydatabase;
// USE mydatabase;

// CREATE TABLE IF NOT EXISTS contact_form (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255),
//     email VARCHAR(255),
//     phone VARCHAR(255),
//     message TEXT
// );

// اتصال به پایگاه داده
$conn = new mysqli("localhost", "نام_کاربری", "رمز_عبور", "mydatabase");

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// دریافت اطلاعات از فرم
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// درج اطلاعات در جدول
$sql = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$name', '$email','$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// بستن اتصال به پایگاه داده
$conn->close();
?>
