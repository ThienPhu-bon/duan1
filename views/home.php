<?php
$nguoixem_html = "";
$role_html = '';
foreach ($nguoixem as $key) {
    extract($key);
    if ($role = 0) {
        $role_html = 'Đội trưởng';
    } else {
        $role_html = 'Đội Phó';
    }
    $nguoixem_html .= '<div class="container">
                            <h4 class="name">' . $title . '</h4>
                            <span class="img">Hình ảnh: ' . $img . '</span>
                            <img src="'.$img.'" alt="">
                            <span class="price">Giá:' . $price . '</span>
                            <span class="nguoixem">Người xem :' . $view . '</span>
                        </div>';
}

$sachmoi_html = "";
foreach ($sachmoi as $key) {
    extract($key);
    if ($role = 0) {
        $role_html = 'Đội trưởng';
    } else {
        $role_html = 'Đội Phó';
    }
    $sachmoi_html .= '<div class="container">
        <h4 class="name">' . $title . '</h4>
        <span class="img">Hình ảnh: ' . $img . '</span>
        <span class="price">Giá:' . $price . '</span>
        <span class="nguoixem">Người xem :' . $view . '</span>
        <span class="new">Sách Mới</span>
    </div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> PS29257 - Nguyễn Thiên Phú</title>
</head>

<body>
    <h2>
        Sách Nhiều Người Xem
    </h2>
    <div class="new_tour">
        <?= $nguoixem_html ?>
    </div>
    <h2>
        Sách Mới
    </h2>
    <div class="new_tour">
        <?= $sachmoi_html ?>
    </div>
</body>

</html>