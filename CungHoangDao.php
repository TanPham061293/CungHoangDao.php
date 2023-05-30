<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta content="text/html ; charset =utf-8" http-equiv="content-Type">
<title>Cung Hoàng Đạo.</title>
<link type="text/css" href="HoangDao.css" rel="stylesheet"
	media="screen">
</head>
<!-- Khoảng ngày sinh: 22/12 đến 19/01 Ma Kết      Capricorn
Khoảng ngày sinh: 20/01 đến 18/02      Bảo Bình    Aquarius
Khoảng ngày sinh: 19/02 đến 20/03      Song Ngư    Pisces
Khoảng ngày sinh: 21/03 đến 20/04      Bạch Dương  Aries
Khoảng ngày sinh: 21/04 đến 20/05      Kim Ngưu    Taurus
Khoảng ngày sinh: 21/05 đến 21/06      Song Tử     Gemini
Khoảng ngày sinh: 22/06 đến 22/07      Cự Giải     Cancer
Khoảng ngày sinh: 23/07 đến 22/08      Sư Tử       Leo
Khoảng ngày sinh: 23/08 đến 22/09      Xử Nữ       Virgo
Khoảng ngày sinh: 23/09 đến 23/10      Thiên Bình  Libra
Khoảng ngày sinh: 24/10 đến 22/11      Bọ Cạp      Escorpio
Khoảng ngày sinh: 23/11 đến 21/12      Nhân Mã     Sagittarius-->
<body>
<?php
$flag = true;
$chekThangNgay = true;
if (! isset($_POST["day"]) && ! isset($_POST["month"])) {
    $ngay = "";
    $thang = "";
} else {
    $flag = false;
    $ngay = $_POST["day"];
    $thang = $_POST["month"];
    $cung = "";
    $thoiGian = "";
    if ($thang >= 1 && $thang <= 12) {
        if ($thang == 1 || $thang == 3 || $thang == 5 || $thang == 7 || $thang == 8 || $thang == 10 || $thang == 12) {
            if ($ngay < 1 || $ngay > 31) {
                $chekThangNgay = false;
            }
        } elseif ($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11) {
            if ($ngay < 1 || $ngay > 30) {
                $chekThangNgay = false;
            }
        } else {
            if ($ngay < 1 || $ngay > 29) {
                $chekThangNgay = false;
            }
        }
    } else {
        $chekThangNgay = false;
    }
    if ($chekThangNgay == true) {
        switch ($thang) {
            case 1:
                if ($ngay <= 19) {
                    $cung = "Capricorn";
                    $thoiGian = "(Ma Kết) 22/12 đến 19/01.";
                } else {
                    $cung = "Aquarius";
                    $thoiGian = "(Bảo Bình) 20/01 đến 18/02.";
                }
                break;
            case 2:
                if ($ngay <= 18) {
                    $cung = "Aquarius";
                    $thoiGian = "(Bảo Bình) 20/01 đến 18/02.";
                } else {
                    $cung = "Pisces";
                    $thoiGian = "(Song Ngư) 19/02 đến 20/03.";
                }
                break;
            case 3:
                if ($ngay <= 20) {
                    $cung = "Pisces";
                    $thoiGian = "(Song Ngư) 19/02 đến 20/03.";
                } else {
                    $cung = "Aries";
                    $thoiGian = "(Bạch Dương) 21/03 đến 20/04.";
                }
                break;
            case 4:
                if ($ngay <= 20) {
                    $cung = "Aries";
                    $thoiGian = "(Bạch Dương) 21/03 đến 20/04.";
                } else {
                    $cung = "Taurus";
                    $thoiGian = "(Kim Ngưu) 21/04 đến 20/05.";
                }
                break;
            case 5:
                if ($ngay <= 20) {
                    $cung = "Taurus";
                    $thoiGian = "(Kim Ngưu) 21/04 đến 20/05.";
                } else {
                    $cung = "Gemini";
                    $thoiGian = "(Song Tử) 21/05 đến 21/06.";
                }
                break;
            case 6:
                if ($ngay <= 21) {
                    $cung = "Gemini";
                    $thoiGian = "(Song Tử) 21/05 đến 21/06.";
                } else {
                    $cung = "Cancer";
                    $thoiGian = "(Cự Giải) 22/06 đến 22/07.";
                }
                break;
            case 7:
                if ($ngay <= 22) {
                    $cung = "Cancer";
                    $thoiGian = "(Cự Giải) 22/06 đến 22/07.";
                } else {
                    $cung = "Leo";
                    $thoiGian = "(Sư Tử) 23/07 đến 22/08";
                }
                break;
            case 8:
                if ($ngay <= 22) {
                    $cung = "Leo";
                    $thoiGian = "(Sư Tử) 23/07 đến 22/08";
                } else {
                    $cung = "Virgo";
                    $thoiGian = "(Xử Nữ) 23/08 đến 22/09.";
                }
                break;
            case 9:
                if ($ngay <= 22) {
                    $cung = "Virgo";
                    $thoiGian = "(Xử Nữ) 23/08 đến 22/09.";
                } else {
                    $cung = "Libra";
                    $thoiGian = "(Thiên Bình) 23/09 đến 23/10.";
                }
                break;
            case 10:
                if ($ngay <= 23) {
                    $cung = "Libra";
                    $thoiGian = "(Thiên Bình) 23/09 đến 23/10.";
                } else {
                    $cung = "Scorpio";
                    $thoiGian = "(Bọ Cạp) 24/10 đến 22/11.";
                }
                break;
            case 11:
                if ($ngay <= 22) {
                    $cung = "Scorpio";
                    $thoiGian = "(Bọ Cạp) 24/10 đến 22/11.";
                } else {
                    $cung = "Sagittarius";
                    $thoiGian = "(Nhân Mã) 23/11 đến 21/12.";
                }
                break;
            default:
                if ($ngay <= 21) {
                    $cung = "Sagittarius";
                    $thoiGian = "(Nhân Mã) 23/11 đến 21/12.";
                } else {
                    $cung = "Capricorn";
                    $thoiGian = "(Ma Kết) 22/12 đến 19/01.";
                }
                break;
        }
    }else {
        $error ="Dữ liệu không hợp lệ.";
    }
}
?>
	<div class="content">
		<form action="#" method="post" name="form-main">
			<h1>Cung Hoàng Đạo.</h1>
			<div class="row">
				<span> Ngày sinh:</span> <input type="text" name="day"
					value="<?php echo $ngay?>">
			</div>
			<div class="row">
				<span> Tháng sinh:</span> <input type="text" name="month"
					value="<?php echo $thang?>">
			</div>
			<div class="row">
				<input type="submit" name="summary">
			</div>
			<div class="row">
			
			<?php
if ($flag == false && $chekThangNgay == true) {?>
  <img src="image/<?php echo lcfirst($cung)?>.jpg">
   <?php 
   echo $ketqua = "<span>Bạn thuộc cung:<br/>$cung" . ' ' . "$thoiGian </span>";
} elseif ($flag == false && $chekThangNgay == false) {
    echo $ketqua = $error;
}?> 

			 </div>

		</form>
	</div>
</body>
</html>
