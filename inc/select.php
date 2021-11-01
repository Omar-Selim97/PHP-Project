<?php
//حتى أعرض المعلومات اللمستخدم
$sql = "SELECT * FROM users ORDER BY RAND() LIMIT 1";  //هنا حددت كل شيء فى جدول اليوزر
$result=mysqli_query($conn,$sql); // هنا بعمل استعمال وبدخل لقاعدة البيانات وبختار كل شيء فى الجدول
$users=mysqli_fetch_all($result,MYSQLI_ASSOC); //هنا بمسك كل البيانات اللى اخترتها وبخليها على شكل اراى
