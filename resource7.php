<?php
//--------------------------------------------------Get connected to Database
require_once "pdo.php";
?>

<!DOCTYPE html>

<html>
<head>
  <link href="M4_tool_style.css" rel="stylesheet" type="text/css">
  <title>M4 Applications</title>

<?php
//----------------------------------Set Resource Name variables from Database
//Resource 1
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=1");
$resource1 = $stmt->fetchColumn();
//Resource 2
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=2");
$resource2 = $stmt->fetchColumn();
//Resource 3
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=3");
$resource3 = $stmt->fetchColumn();
//Resource 4
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=4");
$resource4 = $stmt->fetchColumn();
//Resource 5
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=5");
$resource5 = $stmt->fetchColumn();
//Resource 6
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=6");
$resource6 = $stmt->fetchColumn();
//Resource 7
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=7");
$resource7 = $stmt->fetchColumn();
//Resource 8
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=8");
$resource8 = $stmt->fetchColumn();
//Resource 9
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=9");
$resource9 = $stmt->fetchColumn();
//Resource 10
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=10");
$resource10 = $stmt->fetchColumn();
//Resource 11
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=11");
$resource11 = $stmt->fetchColumn();
//Resource 12
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=12");
$resource12 = $stmt->fetchColumn();
//Resource 13
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=13");
$resource13 = $stmt->fetchColumn();
//Resource 14
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=14");
$resource14 = $stmt->fetchColumn();
//Resource 15
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=15");
$resource15 = $stmt->fetchColumn();
//Resource 16
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=16");
$resource16 = $stmt->fetchColumn();
//Resource 17
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=17");
$resource17 = $stmt->fetchColumn();
//Resource 18
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=18");
$resource18 = $stmt->fetchColumn();
//Resource 19
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=19");
$resource19 = $stmt->fetchColumn();
//Resource 20
$stmt = $pdo->query("SELECT resource from Resources WHERE resource_id=20");
$resource20 = $stmt->fetchColumn();

//-------------------------------------------Set date variables from Database
$current_month = "date(m)";
$current_year = "date(Y)";
$current_date = $current_month.$current_year;

//Set a reference in the database for today's date
if ($current_date = "122020"){
  $startdate_id_current = 2;
}
elseif ($current_date = "012021"){
  $startdate_id_current = 3;
}
elseif ($current_date = "022021"){
  $startdate_id_current = 4;
}
elseif ($current_date = "032021"){
  $startdate_id_current = 5;
}
elseif ($current_date = "042021"){
  $startdate_id_current = 6;
}
elseif ($current_date = "052021"){
  $startdate_id_current = 7;
}
elseif ($current_date = "062021"){
  $startdate_id_current = 8;
}
elseif ($current_date = "072021"){
  $startdate_id_current = 9;
}
elseif ($current_date = "082021"){
  $startdate_id_current = 10;
}
elseif ($current_date = "092021"){
  $startdate_id_current = 11;
}
elseif ($current_date = "102021"){
  $startdate_id_current = 12;
}
elseif ($current_date = "112021"){
  $startdate_id_current = 13;
}
elseif ($current_date = "122021"){
  $startdate_id_current = 14;
}
elseif ($current_date = "012022"){
  $startdate_id_current = 15;
}
elseif ($current_date = "022022"){
  $startdate_id_current = 15;
}
elseif ($current_date = "032022"){
  $startdate_id_current = 16;
}
elseif ($current_date = "042022"){
  $startdate_id_current = 17;
}
elseif ($current_date = "052022"){
  $startdate_id_current = 18;
}
elseif ($current_date = "062022"){
  $startdate_id_current = 19;
}
elseif ($current_date = "072022"){
  $startdate_id_current = 20;
}
elseif ($current_date = "082022"){
  $startdate_id_current = 21;
}
elseif ($current_date = "092022"){
  $startdate_id_current = 22;
}
elseif ($current_date = "102022"){
  $startdate_id_current = 23;
}
elseif ($current_date = "112022"){
  $startdate_id_current = 24;
}
elseif ($current_date = "122022"){
  $startdate_id_current = 25;
}

//Create a variable for the date_id of the Start Date
if ( isset($_GET['startdate'])) {
    $stmt = $pdo->prepare("SELECT * FROM Dates WHERE date=:date");
    $stmt->execute(['date' => $_GET['startdate']]);
    $startdate_id = $stmt->fetchColumn();
}
else {
  $startdate_id = $startdate_id_current;
}

//Start date is now based on Input from user -- Default is date_id = 1
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => $startdate_id]);
$date1 = $stmt->fetchColumn();
//Date 2
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$date2 = $stmt->fetchColumn();
//Date 3
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$date3 = $stmt->fetchColumn();
//Date 4
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$date4 = $stmt->fetchColumn();
//Date 5
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$date5 = $stmt->fetchColumn();
//Date 6
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$date6 = $stmt->fetchColumn();
//Date 7
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$date7 = $stmt->fetchColumn();
//Date 8
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$date8 = $stmt->fetchColumn();
//Date 9
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$date9 = $stmt->fetchColumn();
//Date 10
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$date10 = $stmt->fetchColumn();
//Date 11
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$date11 = $stmt->fetchColumn();
//Date 12
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$date12 = $stmt->fetchColumn();
//Date 13
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$date13 = $stmt->fetchColumn();
//Date 14
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$date14 = $stmt->fetchColumn();
//Date 15
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$date15 = $stmt->fetchColumn();
//Date 16
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$date16 = $stmt->fetchColumn();
//Date 17
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$date17 = $stmt->fetchColumn();
//Date 18
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$date18 = $stmt->fetchColumn();
//Date 19
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$date19 = $stmt->fetchColumn();
//Date 20
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$date20 = $stmt->fetchColumn();
//Date 21
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$date21 = $stmt->fetchColumn();
//Date 22
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$date22 = $stmt->fetchColumn();
//Date 23
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$date23 = $stmt->fetchColumn();
//Date 24
$stmt = $pdo->prepare("SELECT date from Dates WHERE date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$date24 = $stmt->fetchColumn();

//----------------------------------Set product names variables from Database
//Product 1
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=1");
$program1 = $stmt->fetchColumn();
//Product 2
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=2");
$program2 = $stmt->fetchColumn();
//Product 3
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=3");
$program3 = $stmt->fetchColumn();
//Product 4
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=4");
$program4 = $stmt->fetchColumn();
//Product 5
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=5");
$program5 = $stmt->fetchColumn();
//Product 6
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=6");
$program6 = $stmt->fetchColumn();
//Product 7
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=7");
$program7 = $stmt->fetchColumn();
//Product 8
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=8");
$program8 = $stmt->fetchColumn();
//Product 9
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=9");
$program9 = $stmt->fetchColumn();
//Product 10
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=10");
$program10 = $stmt->fetchColumn();
//Product 11
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=11");
$program11 = $stmt->fetchColumn();
//Product 12
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=12");
$program12 = $stmt->fetchColumn();
//Product 13
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=13");
$program13 = $stmt->fetchColumn();
//Product 14
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=14");
$program14 = $stmt->fetchColumn();
//Product 15
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=15");
$program15 = $stmt->fetchColumn();
//Product 16
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=16");
$program16 = $stmt->fetchColumn();
//Product 17
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=17");
$program17 = $stmt->fetchColumn();
//Product 18
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=18");
$program18 = $stmt->fetchColumn();
//Product 19
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=19");
$program19 = $stmt->fetchColumn();
//Product 20
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=20");
$program20 = $stmt->fetchColumn();
//Product 21
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=21");
$program21 = $stmt->fetchColumn();
//Product 22
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=22");
$program22 = $stmt->fetchColumn();
//Product 23
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=23");
$program23 = $stmt->fetchColumn();
//Product 24
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=24");
$program24 = $stmt->fetchColumn();
//Product 25
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=25");
$program25 = $stmt->fetchColumn();
//Product 26
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=26");
$program26 = $stmt->fetchColumn();
//Product 27
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=27");
$program27 = $stmt->fetchColumn();
//Product 28
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=28");
$program28 = $stmt->fetchColumn();
//Product 29
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=29");
$program29 = $stmt->fetchColumn();
//Product 30
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=30");
$program30 = $stmt->fetchColumn();
//Product 31
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=31");
$program31 = $stmt->fetchColumn();
//Product 32
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=32");
$program32 = $stmt->fetchColumn();
//Product 33
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=33");
$program33 = $stmt->fetchColumn();
//Product 34
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=34");
$program34 = $stmt->fetchColumn();
//Product 35
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=35");
$program35 = $stmt->fetchColumn();
//Product 36
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=36");
$program36 = $stmt->fetchColumn();
//Product 37
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=37");
$program37 = $stmt->fetchColumn();
//Product 38
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=38");
$program38 = $stmt->fetchColumn();
//Product 39
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=39");
$program39 = $stmt->fetchColumn();
//Product 40
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=40");
$program40 = $stmt->fetchColumn();
//Product 41
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=41");
$program41 = $stmt->fetchColumn();
//Product 42
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=42");
$program42 = $stmt->fetchColumn();
//Product 43
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=43");
$program43 = $stmt->fetchColumn();
//Product 44
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=44");
$program44 = $stmt->fetchColumn();
//Product 45
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=45");
$program45 = $stmt->fetchColumn();
//Product 46
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=46");
$program46 = $stmt->fetchColumn();
//Product 47
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=47");
$program47 = $stmt->fetchColumn();
//Product 48
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=48");
$program48 = $stmt->fetchColumn();
//Product 49
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=49");
$program49 = $stmt->fetchColumn();
//Product 50
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=50");
$program50 = $stmt->fetchColumn();

//-------------------------------------------Set product valumes from Database
//Product 1, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program1_date1 = $stmt->fetchColumn();
//Product 1, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program1_date2 = $stmt->fetchColumn();
//Product 1, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program1_date3 = $stmt->fetchColumn();
//Product 1, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program1_date4 = $stmt->fetchColumn();
//Product 1, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program1_date5 = $stmt->fetchColumn();
//Product 1, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program1_date6 = $stmt->fetchColumn();
//Product 1, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program1_date7 = $stmt->fetchColumn();
//Product 1, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program1_date8 = $stmt->fetchColumn();
//Product 1, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program1_date9 = $stmt->fetchColumn();
//Product 1, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program1_date10 = $stmt->fetchColumn();
//Product 1, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program1_date11 = $stmt->fetchColumn();
//Product 1, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program1_date12 = $stmt->fetchColumn();
//Product 1, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program1_date13 = $stmt->fetchColumn();
//Product 1, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program1_date14 = $stmt->fetchColumn();
//Product 1, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program1_date15 = $stmt->fetchColumn();
//Product 1, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program1_date16 = $stmt->fetchColumn();
//Product 1, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program1_date17 = $stmt->fetchColumn();
//Product 1, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program1_date18 = $stmt->fetchColumn();
//Product 1, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program1_date19 = $stmt->fetchColumn();
//Product 1, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program1_date20 = $stmt->fetchColumn();
//Product 1, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program1_date21 = $stmt->fetchColumn();
//Product 1, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program1_date22 = $stmt->fetchColumn();
//Product 1, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program1_date23 = $stmt->fetchColumn();
//Product 1, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=1 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program1_date24 = $stmt->fetchColumn();

//Product 2, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program2_date1 = $stmt->fetchColumn();
//Product 2, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program2_date2 = $stmt->fetchColumn();
//Product 2, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program2_date3 = $stmt->fetchColumn();
//Product 2, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program2_date4 = $stmt->fetchColumn();
//Product 2, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program2_date5 = $stmt->fetchColumn();
//Product 2, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program2_date6 = $stmt->fetchColumn();
//Product 2, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program2_date7 = $stmt->fetchColumn();
//Product 2, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program2_date8 = $stmt->fetchColumn();
//Product 2, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program2_date9 = $stmt->fetchColumn();
//Product 2, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program2_date10 = $stmt->fetchColumn();
//Product 2, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program2_date11 = $stmt->fetchColumn();
//Product 2, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program2_date12 = $stmt->fetchColumn();
//Product 2, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program2_date13 = $stmt->fetchColumn();
//Product 2, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program2_date14 = $stmt->fetchColumn();
//Product 2, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program2_date15 = $stmt->fetchColumn();
//Product 2, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program2_date16 = $stmt->fetchColumn();
//Product 2, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program2_date17 = $stmt->fetchColumn();
//Product 2, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program2_date18 = $stmt->fetchColumn();
//Product 2, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program2_date19 = $stmt->fetchColumn();
//Product 2, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program2_date20 = $stmt->fetchColumn();
//Product 2, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program2_date21 = $stmt->fetchColumn();
//Product 2, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program2_date22 = $stmt->fetchColumn();
//Product 2, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program2_date23 = $stmt->fetchColumn();
//Product 2, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=2 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program2_date24 = $stmt->fetchColumn();

//Product 3, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program3_date1 = $stmt->fetchColumn();
//Product 3, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program3_date2 = $stmt->fetchColumn();
//Product 3, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program3_date3 = $stmt->fetchColumn();
//Product 3, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program3_date4 = $stmt->fetchColumn();
//Product 3, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program3_date5 = $stmt->fetchColumn();
//Product 3, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program3_date6 = $stmt->fetchColumn();
//Product 3, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program3_date7 = $stmt->fetchColumn();
//Product 3, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program3_date8 = $stmt->fetchColumn();
//Product 3, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program3_date9 = $stmt->fetchColumn();
//Product 3, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program3_date10 = $stmt->fetchColumn();
//Product 3, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program3_date11 = $stmt->fetchColumn();
//Product 3, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program3_date12 = $stmt->fetchColumn();
//Product 3, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program3_date13 = $stmt->fetchColumn();
//Product 3, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program3_date14 = $stmt->fetchColumn();
//Product 3, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program3_date15 = $stmt->fetchColumn();
//Product 3, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program3_date16 = $stmt->fetchColumn();
//Product 3, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program3_date17 = $stmt->fetchColumn();
//Product 3, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program3_date18 = $stmt->fetchColumn();
//Product 3, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program3_date19 = $stmt->fetchColumn();
//Product 3, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program3_date20 = $stmt->fetchColumn();
//Product 3, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program3_date21 = $stmt->fetchColumn();
//Product 3, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program3_date22 = $stmt->fetchColumn();
//Product 3, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program3_date23 = $stmt->fetchColumn();
//Product 3, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=3 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program3_date24 = $stmt->fetchColumn();

//Product 4, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program4_date1 = $stmt->fetchColumn();
//Product 4, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program4_date2 = $stmt->fetchColumn();
//Product 4, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program4_date3 = $stmt->fetchColumn();
//Product 4, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program4_date4 = $stmt->fetchColumn();
//Product 4, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program4_date5 = $stmt->fetchColumn();
//Product 4, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program4_date6 = $stmt->fetchColumn();
//Product 4, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program4_date7 = $stmt->fetchColumn();
//Product 4, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program4_date8 = $stmt->fetchColumn();
//Product 4, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program4_date9 = $stmt->fetchColumn();
//Product 4, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program4_date10 = $stmt->fetchColumn();
//Product 4, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program4_date11 = $stmt->fetchColumn();
//Product 4, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program4_date12 = $stmt->fetchColumn();
//Product 4, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program4_date13 = $stmt->fetchColumn();
//Product 4, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program4_date14 = $stmt->fetchColumn();
//Product 4, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program4_date15 = $stmt->fetchColumn();
//Product 4, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program4_date16 = $stmt->fetchColumn();
//Product 4, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program4_date17 = $stmt->fetchColumn();
//Product 4, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program4_date18 = $stmt->fetchColumn();
//Product 4, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program4_date19 = $stmt->fetchColumn();
//Product 4, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program4_date20 = $stmt->fetchColumn();
//Product 4, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program4_date21 = $stmt->fetchColumn();
//Product 4, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program4_date22 = $stmt->fetchColumn();
//Product 4, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program4_date23 = $stmt->fetchColumn();
//Product 4, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=4 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program4_date24 = $stmt->fetchColumn();

//Product 5, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program5_date1 = $stmt->fetchColumn();
//Product 5, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program5_date2 = $stmt->fetchColumn();
//Product 5, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program5_date3 = $stmt->fetchColumn();
//Product 5, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program5_date4 = $stmt->fetchColumn();
//Product 5, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program5_date5 = $stmt->fetchColumn();
//Product 5, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program5_date6 = $stmt->fetchColumn();
//Product 5, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program5_date7 = $stmt->fetchColumn();
//Product 5, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program5_date8 = $stmt->fetchColumn();
//Product 5, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program5_date9 = $stmt->fetchColumn();
//Product 5, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program5_date10 = $stmt->fetchColumn();
//Product 5, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program5_date11 = $stmt->fetchColumn();
//Product 5, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program5_date12 = $stmt->fetchColumn();
//Product 5, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program5_date13 = $stmt->fetchColumn();
//Product 5, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program5_date14 = $stmt->fetchColumn();
//Product 5, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program5_date15 = $stmt->fetchColumn();
//Product 5, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program5_date16 = $stmt->fetchColumn();
//Product 5, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program5_date17 = $stmt->fetchColumn();
//Product 5, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program5_date18 = $stmt->fetchColumn();
//Product 5, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program5_date19 = $stmt->fetchColumn();
//Product 5, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program5_date20 = $stmt->fetchColumn();
//Product 5, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program5_date21 = $stmt->fetchColumn();
//Product 5, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program5_date22 = $stmt->fetchColumn();
//Product 5, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program5_date23 = $stmt->fetchColumn();
//Product 5, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=5 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program5_date24 = $stmt->fetchColumn();

//Product 6, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program6_date1 = $stmt->fetchColumn();
//Product 6, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program6_date2 = $stmt->fetchColumn();
//Product 6, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program6_date3 = $stmt->fetchColumn();
//Product 6, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program6_date4 = $stmt->fetchColumn();
//Product 6, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program6_date5 = $stmt->fetchColumn();
//Product 6, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program6_date6 = $stmt->fetchColumn();
//Product 6, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program6_date7 = $stmt->fetchColumn();
//Product 6, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program6_date8 = $stmt->fetchColumn();
//Product 6, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program6_date9 = $stmt->fetchColumn();
//Product 6, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program6_date10 = $stmt->fetchColumn();
//Product 6, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program6_date11 = $stmt->fetchColumn();
//Product 6, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program6_date12 = $stmt->fetchColumn();
//Product 6, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program6_date13 = $stmt->fetchColumn();
//Product 6, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program6_date14 = $stmt->fetchColumn();
//Product 6, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program6_date15 = $stmt->fetchColumn();
//Product 6, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program6_date16 = $stmt->fetchColumn();
//Product 6, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program6_date17 = $stmt->fetchColumn();
//Product 6, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program6_date18 = $stmt->fetchColumn();
//Product 6, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program6_date19 = $stmt->fetchColumn();
//Product 6, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program6_date20 = $stmt->fetchColumn();
//Product 6, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program6_date21 = $stmt->fetchColumn();
//Product 6, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program6_date22 = $stmt->fetchColumn();
//Product 6, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program6_date23 = $stmt->fetchColumn();
//Product 6, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=6 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program6_date24 = $stmt->fetchColumn();

//Product 7, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program7_date1 = $stmt->fetchColumn();
//Product 7, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program7_date2 = $stmt->fetchColumn();
//Product 7, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program7_date3 = $stmt->fetchColumn();
//Product 7, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program7_date4 = $stmt->fetchColumn();
//Product 7, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program7_date5 = $stmt->fetchColumn();
//Product 7, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program7_date6 = $stmt->fetchColumn();
//Product 7, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program7_date7 = $stmt->fetchColumn();
//Product 7, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program7_date8 = $stmt->fetchColumn();
//Product 7, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program7_date9 = $stmt->fetchColumn();
//Product 7, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program7_date10 = $stmt->fetchColumn();
//Product 7, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program7_date11 = $stmt->fetchColumn();
//Product 7, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program7_date12 = $stmt->fetchColumn();
//Product 7, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program7_date13 = $stmt->fetchColumn();
//Product 7, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program7_date14 = $stmt->fetchColumn();
//Product 7, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program7_date15 = $stmt->fetchColumn();
//Product 7, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program7_date16 = $stmt->fetchColumn();
//Product 7, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program7_date17 = $stmt->fetchColumn();
//Product 7, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program7_date18 = $stmt->fetchColumn();
//Product 7, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program7_date19 = $stmt->fetchColumn();
//Product 7, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program7_date20 = $stmt->fetchColumn();
//Product 7, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program7_date21 = $stmt->fetchColumn();
//Product 7, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program7_date22 = $stmt->fetchColumn();
//Product 7, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program7_date23 = $stmt->fetchColumn();
//Product 7, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=7 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program7_date24 = $stmt->fetchColumn();

//Product 8, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program8_date1 = $stmt->fetchColumn();
//Product 8, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program8_date2 = $stmt->fetchColumn();
//Product 8, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program8_date3 = $stmt->fetchColumn();
//Product 8, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program8_date4 = $stmt->fetchColumn();
//Product 8, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program8_date5 = $stmt->fetchColumn();
//Product 8, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program8_date6 = $stmt->fetchColumn();
//Product 8, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program8_date7 = $stmt->fetchColumn();
//Product 8, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program8_date8 = $stmt->fetchColumn();
//Product 8, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program8_date9 = $stmt->fetchColumn();
//Product 8, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program8_date10 = $stmt->fetchColumn();
//Product 8, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program8_date11 = $stmt->fetchColumn();
//Product 8, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program8_date12 = $stmt->fetchColumn();
//Product 8, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program8_date13 = $stmt->fetchColumn();
//Product 8, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program8_date14 = $stmt->fetchColumn();
//Product 8, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program8_date15 = $stmt->fetchColumn();
//Product 8, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program8_date16 = $stmt->fetchColumn();
//Product 8, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program8_date17 = $stmt->fetchColumn();
//Product 8, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program8_date18 = $stmt->fetchColumn();
//Product 8, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program8_date19 = $stmt->fetchColumn();
//Product 8, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program8_date20 = $stmt->fetchColumn();
//Product 8, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program8_date21 = $stmt->fetchColumn();
//Product 8, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program8_date22 = $stmt->fetchColumn();
//Product 8, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program8_date23 = $stmt->fetchColumn();
//Product 8, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=8 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program8_date24 = $stmt->fetchColumn();

//Product 9, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program9_date1 = $stmt->fetchColumn();
//Product 9, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program9_date2 = $stmt->fetchColumn();
//Product 9, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program9_date3 = $stmt->fetchColumn();
//Product 9, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program9_date4 = $stmt->fetchColumn();
//Product 9, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program9_date5 = $stmt->fetchColumn();
//Product 9, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program9_date6 = $stmt->fetchColumn();
//Product 9, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program9_date7 = $stmt->fetchColumn();
//Product 9, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program9_date8 = $stmt->fetchColumn();
//Product 9, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program9_date9 = $stmt->fetchColumn();
//Product 9, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program9_date10 = $stmt->fetchColumn();
//Product 9, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program9_date11 = $stmt->fetchColumn();
//Product 9, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program9_date12 = $stmt->fetchColumn();
//Product 9, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program9_date13 = $stmt->fetchColumn();
//Product 9, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program9_date14 = $stmt->fetchColumn();
//Product 9, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program9_date15 = $stmt->fetchColumn();
//Product 9, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program9_date16 = $stmt->fetchColumn();
//Product 9, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program9_date17 = $stmt->fetchColumn();
//Product 9, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program9_date18 = $stmt->fetchColumn();
//Product 9, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program9_date19 = $stmt->fetchColumn();
//Product 9, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program9_date20 = $stmt->fetchColumn();
//Product 9, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program9_date21 = $stmt->fetchColumn();
//Product 9, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program9_date22 = $stmt->fetchColumn();
//Product 9, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program9_date23 = $stmt->fetchColumn();
//Product 9, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=9 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program9_date24 = $stmt->fetchColumn();

//Product 10, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program10_date1 = $stmt->fetchColumn();
//Product 10, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program10_date2 = $stmt->fetchColumn();
//Product 10, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program10_date3 = $stmt->fetchColumn();
//Product 10, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program10_date4 = $stmt->fetchColumn();
//Product 10, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program10_date5 = $stmt->fetchColumn();
//Product 10, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program10_date6 = $stmt->fetchColumn();
//Product 10, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program10_date7 = $stmt->fetchColumn();
//Product 10, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program10_date8 = $stmt->fetchColumn();
//Product 10, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program10_date9 = $stmt->fetchColumn();
//Product 10, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program10_date10 = $stmt->fetchColumn();
//Product 10, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program10_date11 = $stmt->fetchColumn();
//Product 10, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program10_date12 = $stmt->fetchColumn();
//Product 10, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program10_date13 = $stmt->fetchColumn();
//Product 10, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program10_date14 = $stmt->fetchColumn();
//Product 10, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program10_date15 = $stmt->fetchColumn();
//Product 10, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program10_date16 = $stmt->fetchColumn();
//Product 10, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program10_date17 = $stmt->fetchColumn();
//Product 10, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program10_date18 = $stmt->fetchColumn();
//Product 10, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program10_date19 = $stmt->fetchColumn();
//Product 10, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program10_date20 = $stmt->fetchColumn();
//Product 10, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program10_date21 = $stmt->fetchColumn();
//Product 10, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program10_date22 = $stmt->fetchColumn();
//Product 10, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program10_date23 = $stmt->fetchColumn();
//Product 10, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=10 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program10_date24 = $stmt->fetchColumn();

//Product 11, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program11_date1 = $stmt->fetchColumn();
//Product 11, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program11_date2 = $stmt->fetchColumn();
//Product 11, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program11_date3 = $stmt->fetchColumn();
//Product 11, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program11_date4 = $stmt->fetchColumn();
//Product 11, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program11_date5 = $stmt->fetchColumn();
//Product 11, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program11_date6 = $stmt->fetchColumn();
//Product 11, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program11_date7 = $stmt->fetchColumn();
//Product 11, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program11_date8 = $stmt->fetchColumn();
//Product 11, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program11_date9 = $stmt->fetchColumn();
//Product 11, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program11_date10 = $stmt->fetchColumn();
//Product 11, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program11_date11 = $stmt->fetchColumn();
//Product 11, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program11_date12 = $stmt->fetchColumn();
//Product 11, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program11_date13 = $stmt->fetchColumn();
//Product 11, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program11_date14 = $stmt->fetchColumn();
//Product 11, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program11_date15 = $stmt->fetchColumn();
//Product 11, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program11_date16 = $stmt->fetchColumn();
//Product 11, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program11_date17 = $stmt->fetchColumn();
//Product 11, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program11_date18 = $stmt->fetchColumn();
//Product 11, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program11_date19 = $stmt->fetchColumn();
//Product 11, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program11_date20 = $stmt->fetchColumn();
//Product 11, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program11_date21 = $stmt->fetchColumn();
//Product 11, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program11_date22 = $stmt->fetchColumn();
//Product 11, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program11_date23 = $stmt->fetchColumn();
//Product 11, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=11 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program11_date24 = $stmt->fetchColumn();

//Product 12, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program12_date1 = $stmt->fetchColumn();
//Product 12, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program12_date2 = $stmt->fetchColumn();
//Product 12, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program12_date3 = $stmt->fetchColumn();
//Product 12, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program12_date4 = $stmt->fetchColumn();
//Product 12, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program12_date5 = $stmt->fetchColumn();
//Product 12, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program12_date6 = $stmt->fetchColumn();
//Product 12, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program12_date7 = $stmt->fetchColumn();
//Product 12, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program12_date8 = $stmt->fetchColumn();
//Product 12, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program12_date9 = $stmt->fetchColumn();
//Product 12, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program12_date10 = $stmt->fetchColumn();
//Product 12, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program12_date11 = $stmt->fetchColumn();
//Product 12, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program12_date12 = $stmt->fetchColumn();
//Product 12, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program12_date13 = $stmt->fetchColumn();
//Product 12, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program12_date14 = $stmt->fetchColumn();
//Product 12, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program12_date15 = $stmt->fetchColumn();
//Product 12, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program12_date16 = $stmt->fetchColumn();
//Product 12, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program12_date17 = $stmt->fetchColumn();
//Product 12, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program12_date18 = $stmt->fetchColumn();
//Product 12, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program12_date19 = $stmt->fetchColumn();
//Product 12, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program12_date20 = $stmt->fetchColumn();
//Product 12, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program12_date21 = $stmt->fetchColumn();
//Product 12, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program12_date22 = $stmt->fetchColumn();
//Product 12, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program12_date23 = $stmt->fetchColumn();
//Product 12, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=12 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program12_date24 = $stmt->fetchColumn();

//Product 13, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program13_date1 = $stmt->fetchColumn();
//Product 13, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program13_date2 = $stmt->fetchColumn();
//Product 13, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program13_date3 = $stmt->fetchColumn();
//Product 13, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program13_date4 = $stmt->fetchColumn();
//Product 13, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program13_date5 = $stmt->fetchColumn();
//Product 13, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program13_date6 = $stmt->fetchColumn();
//Product 13, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program13_date7 = $stmt->fetchColumn();
//Product 13, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program13_date8 = $stmt->fetchColumn();
//Product 13, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program13_date9 = $stmt->fetchColumn();
//Product 13, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program13_date10 = $stmt->fetchColumn();
//Product 13, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program13_date11 = $stmt->fetchColumn();
//Product 13, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program13_date12 = $stmt->fetchColumn();
//Product 13, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program13_date13 = $stmt->fetchColumn();
//Product 13, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program13_date14 = $stmt->fetchColumn();
//Product 13, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program13_date15 = $stmt->fetchColumn();
//Product 13, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program13_date16 = $stmt->fetchColumn();
//Product 13, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program13_date17 = $stmt->fetchColumn();
//Product 13, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program13_date18 = $stmt->fetchColumn();
//Product 13, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program13_date19 = $stmt->fetchColumn();
//Product 13, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program13_date20 = $stmt->fetchColumn();
//Product 13, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program13_date21 = $stmt->fetchColumn();
//Product 13, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program13_date22 = $stmt->fetchColumn();
//Product 13, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program13_date23 = $stmt->fetchColumn();
//Product 13, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=13 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program13_date24 = $stmt->fetchColumn();

//Product 14, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program14_date1 = $stmt->fetchColumn();
//Product 14, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program14_date2 = $stmt->fetchColumn();
//Product 14, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program14_date3 = $stmt->fetchColumn();
//Product 14, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program14_date4 = $stmt->fetchColumn();
//Product 14, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program14_date5 = $stmt->fetchColumn();
//Product 14, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program14_date6 = $stmt->fetchColumn();
//Product 14, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program14_date7 = $stmt->fetchColumn();
//Product 14, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program14_date8 = $stmt->fetchColumn();
//Product 14, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program14_date9 = $stmt->fetchColumn();
//Product 14, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program14_date10 = $stmt->fetchColumn();
//Product 14, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program14_date11 = $stmt->fetchColumn();
//Product 14, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program14_date12 = $stmt->fetchColumn();
//Product 14, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program14_date13 = $stmt->fetchColumn();
//Product 14, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program14_date14 = $stmt->fetchColumn();
//Product 14, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program14_date15 = $stmt->fetchColumn();
//Product 14, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program14_date16 = $stmt->fetchColumn();
//Product 14, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program14_date17 = $stmt->fetchColumn();
//Product 14, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program14_date18 = $stmt->fetchColumn();
//Product 14, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program14_date19 = $stmt->fetchColumn();
//Product 14, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program14_date20 = $stmt->fetchColumn();
//Product 14, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program14_date21 = $stmt->fetchColumn();
//Product 14, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program14_date22 = $stmt->fetchColumn();
//Product 14, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program14_date23 = $stmt->fetchColumn();
//Product 14, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=14 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program14_date24 = $stmt->fetchColumn();

//Product 15, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program15_date1 = $stmt->fetchColumn();
//Product 15, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program15_date2 = $stmt->fetchColumn();
//Product 15, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program15_date3 = $stmt->fetchColumn();
//Product 15, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program15_date4 = $stmt->fetchColumn();
//Product 15, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program15_date5 = $stmt->fetchColumn();
//Product 15, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program15_date6 = $stmt->fetchColumn();
//Product 15, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program15_date7 = $stmt->fetchColumn();
//Product 15, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program15_date8 = $stmt->fetchColumn();
//Product 15, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program15_date9 = $stmt->fetchColumn();
//Product 15, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program15_date10 = $stmt->fetchColumn();
//Product 15, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program15_date11 = $stmt->fetchColumn();
//Product 15, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program15_date12 = $stmt->fetchColumn();
//Product 15, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program15_date13 = $stmt->fetchColumn();
//Product 15, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program15_date14 = $stmt->fetchColumn();
//Product 15, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program15_date15 = $stmt->fetchColumn();
//Product 15, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program15_date16 = $stmt->fetchColumn();
//Product 15, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program15_date17 = $stmt->fetchColumn();
//Product 15, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program15_date18 = $stmt->fetchColumn();
//Product 15, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program15_date19 = $stmt->fetchColumn();
//Product 15, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program15_date20 = $stmt->fetchColumn();
//Product 15, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program15_date21 = $stmt->fetchColumn();
//Product 15, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program15_date22 = $stmt->fetchColumn();
//Product 15, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program15_date23 = $stmt->fetchColumn();
//Product 15, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=15 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program15_date24 = $stmt->fetchColumn();

//Product 16, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program16_date1 = $stmt->fetchColumn();
//Product 16, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program16_date2 = $stmt->fetchColumn();
//Product 16, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program16_date3 = $stmt->fetchColumn();
//Product 16, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program16_date4 = $stmt->fetchColumn();
//Product 16, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program16_date5 = $stmt->fetchColumn();
//Product 16, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program16_date6 = $stmt->fetchColumn();
//Product 16, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program16_date7 = $stmt->fetchColumn();
//Product 16, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program16_date8 = $stmt->fetchColumn();
//Product 16, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program16_date9 = $stmt->fetchColumn();
//Product 16, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program16_date10 = $stmt->fetchColumn();
//Product 16, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program16_date11 = $stmt->fetchColumn();
//Product 16, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program16_date12 = $stmt->fetchColumn();
//Product 16, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program16_date13 = $stmt->fetchColumn();
//Product 16, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program16_date14 = $stmt->fetchColumn();
//Product 16, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program16_date15 = $stmt->fetchColumn();
//Product 16, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program16_date16 = $stmt->fetchColumn();
//Product 16, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program16_date17 = $stmt->fetchColumn();
//Product 16, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program16_date18 = $stmt->fetchColumn();
//Product 16, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program16_date19 = $stmt->fetchColumn();
//Product 16, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program16_date20 = $stmt->fetchColumn();
//Product 16, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program16_date21 = $stmt->fetchColumn();
//Product 16, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program16_date22 = $stmt->fetchColumn();
//Product 16, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program16_date23 = $stmt->fetchColumn();
//Product 16, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=16 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program16_date24 = $stmt->fetchColumn();

//Product 17, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program17_date1 = $stmt->fetchColumn();
//Product 17, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program17_date2 = $stmt->fetchColumn();
//Product 17, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program17_date3 = $stmt->fetchColumn();
//Product 17, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program17_date4 = $stmt->fetchColumn();
//Product 17, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program17_date5 = $stmt->fetchColumn();
//Product 17, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program17_date6 = $stmt->fetchColumn();
//Product 17, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program17_date7 = $stmt->fetchColumn();
//Product 17, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program17_date8 = $stmt->fetchColumn();
//Product 17, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program17_date9 = $stmt->fetchColumn();
//Product 17, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program17_date10 = $stmt->fetchColumn();
//Product 17, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program17_date11 = $stmt->fetchColumn();
//Product 17, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program17_date12 = $stmt->fetchColumn();
//Product 17, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program17_date13 = $stmt->fetchColumn();
//Product 17, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program17_date14 = $stmt->fetchColumn();
//Product 17, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program17_date15 = $stmt->fetchColumn();
//Product 17, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program17_date16 = $stmt->fetchColumn();
//Product 17, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program17_date17 = $stmt->fetchColumn();
//Product 17, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program17_date18 = $stmt->fetchColumn();
//Product 17, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program17_date19 = $stmt->fetchColumn();
//Product 17, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program17_date20 = $stmt->fetchColumn();
//Product 17, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program17_date21 = $stmt->fetchColumn();
//Product 17, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program17_date22 = $stmt->fetchColumn();
//Product 17, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program17_date23 = $stmt->fetchColumn();
//Product 17, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=17 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program17_date24 = $stmt->fetchColumn();

//Product 18, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program18_date1 = $stmt->fetchColumn();
//Product 18, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program18_date2 = $stmt->fetchColumn();
//Product 18, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program18_date3 = $stmt->fetchColumn();
//Product 18, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program18_date4 = $stmt->fetchColumn();
//Product 18, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program18_date5 = $stmt->fetchColumn();
//Product 18, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program18_date6 = $stmt->fetchColumn();
//Product 18, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program18_date7 = $stmt->fetchColumn();
//Product 18, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program18_date8 = $stmt->fetchColumn();
//Product 18, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program18_date9 = $stmt->fetchColumn();
//Product 18, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program18_date10 = $stmt->fetchColumn();
//Product 18, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program18_date11 = $stmt->fetchColumn();
//Product 18, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program18_date12 = $stmt->fetchColumn();
//Product 18, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program18_date13 = $stmt->fetchColumn();
//Product 18, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program18_date14 = $stmt->fetchColumn();
//Product 18, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program18_date15 = $stmt->fetchColumn();
//Product 18, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program18_date16 = $stmt->fetchColumn();
//Product 18, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program18_date17 = $stmt->fetchColumn();
//Product 18, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program18_date18 = $stmt->fetchColumn();
//Product 18, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program18_date19 = $stmt->fetchColumn();
//Product 18, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program18_date20 = $stmt->fetchColumn();
//Product 18, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program18_date21 = $stmt->fetchColumn();
//Product 18, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program18_date22 = $stmt->fetchColumn();
//Product 18, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program18_date23 = $stmt->fetchColumn();
//Product 18, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=18 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program18_date24 = $stmt->fetchColumn();

//Product 19, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program19_date1 = $stmt->fetchColumn();
//Product 19, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program19_date2 = $stmt->fetchColumn();
//Product 19, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program19_date3 = $stmt->fetchColumn();
//Product 19, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program19_date4 = $stmt->fetchColumn();
//Product 19, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program19_date5 = $stmt->fetchColumn();
//Product 19, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program19_date6 = $stmt->fetchColumn();
//Product 19, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program19_date7 = $stmt->fetchColumn();
//Product 19, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program19_date8 = $stmt->fetchColumn();
//Product 19, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program19_date9 = $stmt->fetchColumn();
//Product 19, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program19_date10 = $stmt->fetchColumn();
//Product 19, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program19_date11 = $stmt->fetchColumn();
//Product 19, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program19_date12 = $stmt->fetchColumn();
//Product 19, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program19_date13 = $stmt->fetchColumn();
//Product 19, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program19_date14 = $stmt->fetchColumn();
//Product 19, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program19_date15 = $stmt->fetchColumn();
//Product 19, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program19_date16 = $stmt->fetchColumn();
//Product 19, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program19_date17 = $stmt->fetchColumn();
//Product 19, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program19_date18 = $stmt->fetchColumn();
//Product 19, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program19_date19 = $stmt->fetchColumn();
//Product 19, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program19_date20 = $stmt->fetchColumn();
//Product 19, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program19_date21 = $stmt->fetchColumn();
//Product 19, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program19_date22 = $stmt->fetchColumn();
//Product 19, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program19_date23 = $stmt->fetchColumn();
//Product 19, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=19 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program19_date24 = $stmt->fetchColumn();

//Product 20, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program20_date1 = $stmt->fetchColumn();
//Product 20, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program20_date2 = $stmt->fetchColumn();
//Product 20, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program20_date3 = $stmt->fetchColumn();
//Product 20, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program20_date4 = $stmt->fetchColumn();
//Product 20, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program20_date5 = $stmt->fetchColumn();
//Product 20, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program20_date6 = $stmt->fetchColumn();
//Product 20, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program20_date7 = $stmt->fetchColumn();
//Product 20, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program20_date8 = $stmt->fetchColumn();
//Product 20, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program20_date9 = $stmt->fetchColumn();
//Product 20, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program20_date10 = $stmt->fetchColumn();
//Product 20, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program20_date11 = $stmt->fetchColumn();
//Product 20, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program20_date12 = $stmt->fetchColumn();
//Product 20, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program20_date13 = $stmt->fetchColumn();
//Product 20, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program20_date14 = $stmt->fetchColumn();
//Product 20, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program20_date15 = $stmt->fetchColumn();
//Product 20, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program20_date16 = $stmt->fetchColumn();
//Product 20, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program20_date17 = $stmt->fetchColumn();
//Product 20, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program20_date18 = $stmt->fetchColumn();
//Product 20, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program20_date19 = $stmt->fetchColumn();
//Product 20, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program20_date20 = $stmt->fetchColumn();
//Product 20, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program20_date21 = $stmt->fetchColumn();
//Product 20, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program20_date22 = $stmt->fetchColumn();
//Product 20, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program20_date23 = $stmt->fetchColumn();
//Product 20, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=20 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program20_date24 = $stmt->fetchColumn();

//Product 21, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program21_date1 = $stmt->fetchColumn();
//Product 21, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program21_date2 = $stmt->fetchColumn();
//Product 21, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program21_date3 = $stmt->fetchColumn();
//Product 21, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program21_date4 = $stmt->fetchColumn();
//Product 21, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program21_date5 = $stmt->fetchColumn();
//Product 21, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program21_date6 = $stmt->fetchColumn();
//Product 21, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program21_date7 = $stmt->fetchColumn();
//Product 21, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program21_date8 = $stmt->fetchColumn();
//Product 21, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program21_date9 = $stmt->fetchColumn();
//Product 21, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program21_date10 = $stmt->fetchColumn();
//Product 21, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program21_date11 = $stmt->fetchColumn();
//Product 21, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program21_date12 = $stmt->fetchColumn();
//Product 21, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program21_date13 = $stmt->fetchColumn();
//Product 21, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program21_date14 = $stmt->fetchColumn();
//Product 21, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program21_date15 = $stmt->fetchColumn();
//Product 21, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program21_date16 = $stmt->fetchColumn();
//Product 21, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program21_date17 = $stmt->fetchColumn();
//Product 21, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program21_date18 = $stmt->fetchColumn();
//Product 21, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program21_date19 = $stmt->fetchColumn();
//Product 21, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program21_date20 = $stmt->fetchColumn();
//Product 21, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program21_date21 = $stmt->fetchColumn();
//Product 21, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program21_date22 = $stmt->fetchColumn();
//Product 21, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program21_date23 = $stmt->fetchColumn();
//Product 21, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=21 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program21_date24 = $stmt->fetchColumn();

//Product 22, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program22_date1 = $stmt->fetchColumn();
//Product 22, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program22_date2 = $stmt->fetchColumn();
//Product 22, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program22_date3 = $stmt->fetchColumn();
//Product 22, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program22_date4 = $stmt->fetchColumn();
//Product 22, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program22_date5 = $stmt->fetchColumn();
//Product 22, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program22_date6 = $stmt->fetchColumn();
//Product 22, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program22_date7 = $stmt->fetchColumn();
//Product 22, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program22_date8 = $stmt->fetchColumn();
//Product 22, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program22_date9 = $stmt->fetchColumn();
//Product 22, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program22_date10 = $stmt->fetchColumn();
//Product 22, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program22_date11 = $stmt->fetchColumn();
//Product 22, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program22_date12 = $stmt->fetchColumn();
//Product 22, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program22_date13 = $stmt->fetchColumn();
//Product 22, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program22_date14 = $stmt->fetchColumn();
//Product 22, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program22_date15 = $stmt->fetchColumn();
//Product 22, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program22_date16 = $stmt->fetchColumn();
//Product 22, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program22_date17 = $stmt->fetchColumn();
//Product 22, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program22_date18 = $stmt->fetchColumn();
//Product 22, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program22_date19 = $stmt->fetchColumn();
//Product 22, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program22_date20 = $stmt->fetchColumn();
//Product 22, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program22_date21 = $stmt->fetchColumn();
//Product 22, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program22_date22 = $stmt->fetchColumn();
//Product 22, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program22_date23 = $stmt->fetchColumn();
//Product 22, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=22 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program22_date24 = $stmt->fetchColumn();

//Product 23, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program23_date1 = $stmt->fetchColumn();
//Product 23, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program23_date2 = $stmt->fetchColumn();
//Product 23, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program23_date3 = $stmt->fetchColumn();
//Product 23, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program23_date4 = $stmt->fetchColumn();
//Product 23, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program23_date5 = $stmt->fetchColumn();
//Product 23, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program23_date6 = $stmt->fetchColumn();
//Product 23, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program23_date7 = $stmt->fetchColumn();
//Product 23, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program23_date8 = $stmt->fetchColumn();
//Product 23, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program23_date9 = $stmt->fetchColumn();
//Product 23, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program23_date10 = $stmt->fetchColumn();
//Product 23, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program23_date11 = $stmt->fetchColumn();
//Product 23, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program23_date12 = $stmt->fetchColumn();
//Product 23, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program23_date13 = $stmt->fetchColumn();
//Product 23, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program23_date14 = $stmt->fetchColumn();
//Product 23, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program23_date15 = $stmt->fetchColumn();
//Product 23, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program23_date16 = $stmt->fetchColumn();
//Product 23, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program23_date17 = $stmt->fetchColumn();
//Product 23, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program23_date18 = $stmt->fetchColumn();
//Product 23, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program23_date19 = $stmt->fetchColumn();
//Product 23, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program23_date20 = $stmt->fetchColumn();
//Product 23, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program23_date21 = $stmt->fetchColumn();
//Product 23, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program23_date22 = $stmt->fetchColumn();
//Product 23, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program23_date23 = $stmt->fetchColumn();
//Product 23, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=23 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program23_date24 = $stmt->fetchColumn();

//Product 24, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program24_date1 = $stmt->fetchColumn();
//Product 24, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program24_date2 = $stmt->fetchColumn();
//Product 24, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program24_date3 = $stmt->fetchColumn();
//Product 24, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program24_date4 = $stmt->fetchColumn();
//Product 24, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program24_date5 = $stmt->fetchColumn();
//Product 24, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program24_date6 = $stmt->fetchColumn();
//Product 24, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program24_date7 = $stmt->fetchColumn();
//Product 24, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program24_date8 = $stmt->fetchColumn();
//Product 24, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program24_date9 = $stmt->fetchColumn();
//Product 24, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program24_date10 = $stmt->fetchColumn();
//Product 24, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program24_date11 = $stmt->fetchColumn();
//Product 24, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program24_date12 = $stmt->fetchColumn();
//Product 24, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program24_date13 = $stmt->fetchColumn();
//Product 24, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program24_date14 = $stmt->fetchColumn();
//Product 24, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program24_date15 = $stmt->fetchColumn();
//Product 24, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program24_date16 = $stmt->fetchColumn();
//Product 24, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program24_date17 = $stmt->fetchColumn();
//Product 24, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program24_date18 = $stmt->fetchColumn();
//Product 24, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program24_date19 = $stmt->fetchColumn();
//Product 24, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program24_date20 = $stmt->fetchColumn();
//Product 24, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program24_date21 = $stmt->fetchColumn();
//Product 24, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program24_date22 = $stmt->fetchColumn();
//Product 24, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program24_date23 = $stmt->fetchColumn();
//Product 24, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=24 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program24_date24 = $stmt->fetchColumn();

//Product 25, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program25_date1 = $stmt->fetchColumn();
//Product 25, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program25_date2 = $stmt->fetchColumn();
//Product 25, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program25_date3 = $stmt->fetchColumn();
//Product 25, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program25_date4 = $stmt->fetchColumn();
//Product 25, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program25_date5 = $stmt->fetchColumn();
//Product 25, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program25_date6 = $stmt->fetchColumn();
//Product 25, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program25_date7 = $stmt->fetchColumn();
//Product 25, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program25_date8 = $stmt->fetchColumn();
//Product 25, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program25_date9 = $stmt->fetchColumn();
//Product 25, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program25_date10 = $stmt->fetchColumn();
//Product 25, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program25_date11 = $stmt->fetchColumn();
//Product 25, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program25_date12 = $stmt->fetchColumn();
//Product 25, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program25_date13 = $stmt->fetchColumn();
//Product 25, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program25_date14 = $stmt->fetchColumn();
//Product 25, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program25_date15 = $stmt->fetchColumn();
//Product 25, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program25_date16 = $stmt->fetchColumn();
//Product 25, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program25_date17 = $stmt->fetchColumn();
//Product 25, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program25_date18 = $stmt->fetchColumn();
//Product 25, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program25_date19 = $stmt->fetchColumn();
//Product 25, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program25_date20 = $stmt->fetchColumn();
//Product 25, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program25_date21 = $stmt->fetchColumn();
//Product 25, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program25_date22 = $stmt->fetchColumn();
//Product 25, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program25_date23 = $stmt->fetchColumn();
//Product 25, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=25 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program25_date24 = $stmt->fetchColumn();

//Product 26, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program26_date1 = $stmt->fetchColumn();
//Product 26, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program26_date2 = $stmt->fetchColumn();
//Product 26, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program26_date3 = $stmt->fetchColumn();
//Product 26, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program26_date4 = $stmt->fetchColumn();
//Product 26, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program26_date5 = $stmt->fetchColumn();
//Product 26, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program26_date6 = $stmt->fetchColumn();
//Product 26, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program26_date7 = $stmt->fetchColumn();
//Product 26, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program26_date8 = $stmt->fetchColumn();
//Product 26, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program26_date9 = $stmt->fetchColumn();
//Product 26, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program26_date10 = $stmt->fetchColumn();
//Product 26, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program26_date11 = $stmt->fetchColumn();
//Product 26, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program26_date12 = $stmt->fetchColumn();
//Product 26, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program26_date13 = $stmt->fetchColumn();
//Product 26, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program26_date14 = $stmt->fetchColumn();
//Product 26, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program26_date15 = $stmt->fetchColumn();
//Product 26, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program26_date16 = $stmt->fetchColumn();
//Product 26, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program26_date17 = $stmt->fetchColumn();
//Product 26, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program26_date18 = $stmt->fetchColumn();
//Product 26, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program26_date19 = $stmt->fetchColumn();
//Product 26, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program26_date20 = $stmt->fetchColumn();
//Product 26, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program26_date21 = $stmt->fetchColumn();
//Product 26, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program26_date22 = $stmt->fetchColumn();
//Product 26, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program26_date23 = $stmt->fetchColumn();
//Product 26, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=26 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program26_date24 = $stmt->fetchColumn();

//Product 27, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program27_date1 = $stmt->fetchColumn();
//Product 27, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program27_date2 = $stmt->fetchColumn();
//Product 27, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program27_date3 = $stmt->fetchColumn();
//Product 27, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program27_date4 = $stmt->fetchColumn();
//Product 27, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program27_date5 = $stmt->fetchColumn();
//Product 27, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program27_date6 = $stmt->fetchColumn();
//Product 27, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program27_date7 = $stmt->fetchColumn();
//Product 27, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program27_date8 = $stmt->fetchColumn();
//Product 27, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program27_date9 = $stmt->fetchColumn();
//Product 27, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program27_date10 = $stmt->fetchColumn();
//Product 27, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program27_date11 = $stmt->fetchColumn();
//Product 27, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program27_date12 = $stmt->fetchColumn();
//Product 27, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program27_date13 = $stmt->fetchColumn();
//Product 27, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program27_date14 = $stmt->fetchColumn();
//Product 27, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program27_date15 = $stmt->fetchColumn();
//Product 27, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program27_date16 = $stmt->fetchColumn();
//Product 27, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program27_date17 = $stmt->fetchColumn();
//Product 27, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program27_date18 = $stmt->fetchColumn();
//Product 27, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program27_date19 = $stmt->fetchColumn();
//Product 27, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program27_date20 = $stmt->fetchColumn();
//Product 27, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program27_date21 = $stmt->fetchColumn();
//Product 27, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program27_date22 = $stmt->fetchColumn();
//Product 27, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program27_date23 = $stmt->fetchColumn();
//Product 27, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=27 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program27_date24 = $stmt->fetchColumn();

//Product 28, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program28_date1 = $stmt->fetchColumn();
//Product 28, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program28_date2 = $stmt->fetchColumn();
//Product 28, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program28_date3 = $stmt->fetchColumn();
//Product 28, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program28_date4 = $stmt->fetchColumn();
//Product 28, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program28_date5 = $stmt->fetchColumn();
//Product 28, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program28_date6 = $stmt->fetchColumn();
//Product 28, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program28_date7 = $stmt->fetchColumn();
//Product 28, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program28_date8 = $stmt->fetchColumn();
//Product 28, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program28_date9 = $stmt->fetchColumn();
//Product 28, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program28_date10 = $stmt->fetchColumn();
//Product 28, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program28_date11 = $stmt->fetchColumn();
//Product 28, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program28_date12 = $stmt->fetchColumn();
//Product 28, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program28_date13 = $stmt->fetchColumn();
//Product 28, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program28_date14 = $stmt->fetchColumn();
//Product 28, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program28_date15 = $stmt->fetchColumn();
//Product 28, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program28_date16 = $stmt->fetchColumn();
//Product 28, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program28_date17 = $stmt->fetchColumn();
//Product 28, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program28_date18 = $stmt->fetchColumn();
//Product 28, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program28_date19 = $stmt->fetchColumn();
//Product 28, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program28_date20 = $stmt->fetchColumn();
//Product 28, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program28_date21 = $stmt->fetchColumn();
//Product 28, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program28_date22 = $stmt->fetchColumn();
//Product 28, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program28_date23 = $stmt->fetchColumn();
//Product 28, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=28 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program28_date24 = $stmt->fetchColumn();

//Product 29, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program29_date1 = $stmt->fetchColumn();
//Product 29, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program29_date2 = $stmt->fetchColumn();
//Product 29, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program29_date3 = $stmt->fetchColumn();
//Product 29, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program29_date4 = $stmt->fetchColumn();
//Product 29, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program29_date5 = $stmt->fetchColumn();
//Product 29, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program29_date6 = $stmt->fetchColumn();
//Product 29, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program29_date7 = $stmt->fetchColumn();
//Product 29, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program29_date8 = $stmt->fetchColumn();
//Product 29, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program29_date9 = $stmt->fetchColumn();
//Product 29, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program29_date10 = $stmt->fetchColumn();
//Product 29, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program29_date11 = $stmt->fetchColumn();
//Product 29, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program29_date12 = $stmt->fetchColumn();
//Product 29, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program29_date13 = $stmt->fetchColumn();
//Product 29, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program29_date14 = $stmt->fetchColumn();
//Product 29, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program29_date15 = $stmt->fetchColumn();
//Product 29, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program29_date16 = $stmt->fetchColumn();
//Product 29, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program29_date17 = $stmt->fetchColumn();
//Product 29, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program29_date18 = $stmt->fetchColumn();
//Product 29, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program29_date19 = $stmt->fetchColumn();
//Product 29, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program29_date20 = $stmt->fetchColumn();
//Product 29, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program29_date21 = $stmt->fetchColumn();
//Product 29, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program29_date22 = $stmt->fetchColumn();
//Product 29, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program29_date23 = $stmt->fetchColumn();
//Product 29, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=29 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program29_date24 = $stmt->fetchColumn();

//Product 30, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program30_date1 = $stmt->fetchColumn();
//Product 30, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program30_date2 = $stmt->fetchColumn();
//Product 30, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program30_date3 = $stmt->fetchColumn();
//Product 30, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program30_date4 = $stmt->fetchColumn();
//Product 30, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program30_date5 = $stmt->fetchColumn();
//Product 30, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program30_date6 = $stmt->fetchColumn();
//Product 30, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program30_date7 = $stmt->fetchColumn();
//Product 30, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program30_date8 = $stmt->fetchColumn();
//Product 30, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program30_date9 = $stmt->fetchColumn();
//Product 30, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program30_date10 = $stmt->fetchColumn();
//Product 30, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program30_date11 = $stmt->fetchColumn();
//Product 30, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program30_date12 = $stmt->fetchColumn();
//Product 30, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program30_date13 = $stmt->fetchColumn();
//Product 30, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program30_date14 = $stmt->fetchColumn();
//Product 30, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program30_date15 = $stmt->fetchColumn();
//Product 30, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program30_date16 = $stmt->fetchColumn();
//Product 30, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program30_date17 = $stmt->fetchColumn();
//Product 30, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program30_date18 = $stmt->fetchColumn();
//Product 30, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program30_date19 = $stmt->fetchColumn();
//Product 30, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program30_date20 = $stmt->fetchColumn();
//Product 30, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program30_date21 = $stmt->fetchColumn();
//Product 30, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program30_date22 = $stmt->fetchColumn();
//Product 30, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program30_date23 = $stmt->fetchColumn();
//Product 30, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=30 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program30_date24 = $stmt->fetchColumn();

//Product 31, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program31_date1 = $stmt->fetchColumn();
//Product 31, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program31_date2 = $stmt->fetchColumn();
//Product 31, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program31_date3 = $stmt->fetchColumn();
//Product 31, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program31_date4 = $stmt->fetchColumn();
//Product 31, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program31_date5 = $stmt->fetchColumn();
//Product 31, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program31_date6 = $stmt->fetchColumn();
//Product 31, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program31_date7 = $stmt->fetchColumn();
//Product 31, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program31_date8 = $stmt->fetchColumn();
//Product 31, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program31_date9 = $stmt->fetchColumn();
//Product 31, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program31_date10 = $stmt->fetchColumn();
//Product 31, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program31_date11 = $stmt->fetchColumn();
//Product 31, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program31_date12 = $stmt->fetchColumn();
//Product 31, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program31_date13 = $stmt->fetchColumn();
//Product 31, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program31_date14 = $stmt->fetchColumn();
//Product 31, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program31_date15 = $stmt->fetchColumn();
//Product 31, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program31_date16 = $stmt->fetchColumn();
//Product 31, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program31_date17 = $stmt->fetchColumn();
//Product 31, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program31_date18 = $stmt->fetchColumn();
//Product 31, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program31_date19 = $stmt->fetchColumn();
//Product 31, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program31_date20 = $stmt->fetchColumn();
//Product 31, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program31_date21 = $stmt->fetchColumn();
//Product 31, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program31_date22 = $stmt->fetchColumn();
//Product 31, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program31_date23 = $stmt->fetchColumn();
//Product 31, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=31 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program31_date24 = $stmt->fetchColumn();

//Product 32, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program32_date1 = $stmt->fetchColumn();
//Product 32, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program32_date2 = $stmt->fetchColumn();
//Product 32, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program32_date3 = $stmt->fetchColumn();
//Product 32, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program32_date4 = $stmt->fetchColumn();
//Product 32, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program32_date5 = $stmt->fetchColumn();
//Product 32, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program32_date6 = $stmt->fetchColumn();
//Product 32, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program32_date7 = $stmt->fetchColumn();
//Product 32, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program32_date8 = $stmt->fetchColumn();
//Product 32, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program32_date9 = $stmt->fetchColumn();
//Product 32, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program32_date10 = $stmt->fetchColumn();
//Product 32, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program32_date11 = $stmt->fetchColumn();
//Product 32, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program32_date12 = $stmt->fetchColumn();
//Product 32, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program32_date13 = $stmt->fetchColumn();
//Product 32, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program32_date14 = $stmt->fetchColumn();
//Product 32, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program32_date15 = $stmt->fetchColumn();
//Product 32, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program32_date16 = $stmt->fetchColumn();
//Product 32, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program32_date17 = $stmt->fetchColumn();
//Product 32, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program32_date18 = $stmt->fetchColumn();
//Product 32, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program32_date19 = $stmt->fetchColumn();
//Product 32, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program32_date20 = $stmt->fetchColumn();
//Product 32, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program32_date21 = $stmt->fetchColumn();
//Product 32, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program32_date22 = $stmt->fetchColumn();
//Product 32, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program32_date23 = $stmt->fetchColumn();
//Product 32, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=32 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program32_date24 = $stmt->fetchColumn();

//Product 33, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program33_date1 = $stmt->fetchColumn();
//Product 33, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program33_date2 = $stmt->fetchColumn();
//Product 33, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program33_date3 = $stmt->fetchColumn();
//Product 33, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program33_date4 = $stmt->fetchColumn();
//Product 33, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program33_date5 = $stmt->fetchColumn();
//Product 33, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program33_date6 = $stmt->fetchColumn();
//Product 33, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program33_date7 = $stmt->fetchColumn();
//Product 33, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program33_date8 = $stmt->fetchColumn();
//Product 33, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program33_date9 = $stmt->fetchColumn();
//Product 33, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program33_date10 = $stmt->fetchColumn();
//Product 33, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program33_date11 = $stmt->fetchColumn();
//Product 33, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program33_date12 = $stmt->fetchColumn();
//Product 33, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program33_date13 = $stmt->fetchColumn();
//Product 33, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program33_date14 = $stmt->fetchColumn();
//Product 33, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program33_date15 = $stmt->fetchColumn();
//Product 33, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program33_date16 = $stmt->fetchColumn();
//Product 33, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program33_date17 = $stmt->fetchColumn();
//Product 33, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program33_date18 = $stmt->fetchColumn();
//Product 33, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program33_date19 = $stmt->fetchColumn();
//Product 33, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program33_date20 = $stmt->fetchColumn();
//Product 33, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program33_date21 = $stmt->fetchColumn();
//Product 33, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program33_date22 = $stmt->fetchColumn();
//Product 33, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program33_date23 = $stmt->fetchColumn();
//Product 33, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=33 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program33_date24 = $stmt->fetchColumn();

//Product 34, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program34_date1 = $stmt->fetchColumn();
//Product 34, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program34_date2 = $stmt->fetchColumn();
//Product 34, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program34_date3 = $stmt->fetchColumn();
//Product 34, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program34_date4 = $stmt->fetchColumn();
//Product 34, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program34_date5 = $stmt->fetchColumn();
//Product 34, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program34_date6 = $stmt->fetchColumn();
//Product 34, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program34_date7 = $stmt->fetchColumn();
//Product 34, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program34_date8 = $stmt->fetchColumn();
//Product 34, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program34_date9 = $stmt->fetchColumn();
//Product 34, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program34_date10 = $stmt->fetchColumn();
//Product 34, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program34_date11 = $stmt->fetchColumn();
//Product 34, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program34_date12 = $stmt->fetchColumn();
//Product 34, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program34_date13 = $stmt->fetchColumn();
//Product 34, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program34_date14 = $stmt->fetchColumn();
//Product 34, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program34_date15 = $stmt->fetchColumn();
//Product 34, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program34_date16 = $stmt->fetchColumn();
//Product 34, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program34_date17 = $stmt->fetchColumn();
//Product 34, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program34_date18 = $stmt->fetchColumn();
//Product 34, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program34_date19 = $stmt->fetchColumn();
//Product 34, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program34_date20 = $stmt->fetchColumn();
//Product 34, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program34_date21 = $stmt->fetchColumn();
//Product 34, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program34_date22 = $stmt->fetchColumn();
//Product 34, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program34_date23 = $stmt->fetchColumn();
//Product 34, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=34 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program34_date24 = $stmt->fetchColumn();

//Product 35, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program35_date1 = $stmt->fetchColumn();
//Product 35, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program35_date2 = $stmt->fetchColumn();
//Product 35, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program35_date3 = $stmt->fetchColumn();
//Product 35, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program35_date4 = $stmt->fetchColumn();
//Product 35, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program35_date5 = $stmt->fetchColumn();
//Product 35, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program35_date6 = $stmt->fetchColumn();
//Product 35, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program35_date7 = $stmt->fetchColumn();
//Product 35, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program35_date8 = $stmt->fetchColumn();
//Product 35, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program35_date9 = $stmt->fetchColumn();
//Product 35, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program35_date10 = $stmt->fetchColumn();
//Product 35, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program35_date11 = $stmt->fetchColumn();
//Product 35, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program35_date12 = $stmt->fetchColumn();
//Product 35, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program35_date13 = $stmt->fetchColumn();
//Product 35, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program35_date14 = $stmt->fetchColumn();
//Product 35, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program35_date15 = $stmt->fetchColumn();
//Product 35, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program35_date16 = $stmt->fetchColumn();
//Product 35, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program35_date17 = $stmt->fetchColumn();
//Product 35, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program35_date18 = $stmt->fetchColumn();
//Product 35, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program35_date19 = $stmt->fetchColumn();
//Product 35, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program35_date20 = $stmt->fetchColumn();
//Product 35, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program35_date21 = $stmt->fetchColumn();
//Product 35, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program35_date22 = $stmt->fetchColumn();
//Product 35, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program35_date23 = $stmt->fetchColumn();
//Product 35, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=35 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program35_date24 = $stmt->fetchColumn();

//Product 36, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program36_date1 = $stmt->fetchColumn();
//Product 36, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program36_date2 = $stmt->fetchColumn();
//Product 36, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program36_date3 = $stmt->fetchColumn();
//Product 36, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program36_date4 = $stmt->fetchColumn();
//Product 36, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program36_date5 = $stmt->fetchColumn();
//Product 36, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program36_date6 = $stmt->fetchColumn();
//Product 36, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program36_date7 = $stmt->fetchColumn();
//Product 36, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program36_date8 = $stmt->fetchColumn();
//Product 36, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program36_date9 = $stmt->fetchColumn();
//Product 36, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program36_date10 = $stmt->fetchColumn();
//Product 36, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program36_date11 = $stmt->fetchColumn();
//Product 36, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program36_date12 = $stmt->fetchColumn();
//Product 36, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program36_date13 = $stmt->fetchColumn();
//Product 36, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program36_date14 = $stmt->fetchColumn();
//Product 36, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program36_date15 = $stmt->fetchColumn();
//Product 36, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program36_date16 = $stmt->fetchColumn();
//Product 36, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program36_date17 = $stmt->fetchColumn();
//Product 36, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program36_date18 = $stmt->fetchColumn();
//Product 36, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program36_date19 = $stmt->fetchColumn();
//Product 36, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program36_date20 = $stmt->fetchColumn();
//Product 36, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program36_date21 = $stmt->fetchColumn();
//Product 36, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program36_date22 = $stmt->fetchColumn();
//Product 36, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program36_date23 = $stmt->fetchColumn();
//Product 36, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=36 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program36_date24 = $stmt->fetchColumn();

//Product 37, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program37_date1 = $stmt->fetchColumn();
//Product 37, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program37_date2 = $stmt->fetchColumn();
//Product 37, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program37_date3 = $stmt->fetchColumn();
//Product 37, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program37_date4 = $stmt->fetchColumn();
//Product 37, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program37_date5 = $stmt->fetchColumn();
//Product 37, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program37_date6 = $stmt->fetchColumn();
//Product 37, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program37_date7 = $stmt->fetchColumn();
//Product 37, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program37_date8 = $stmt->fetchColumn();
//Product 37, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program37_date9 = $stmt->fetchColumn();
//Product 37, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program37_date10 = $stmt->fetchColumn();
//Product 37, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program37_date11 = $stmt->fetchColumn();
//Product 37, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program37_date12 = $stmt->fetchColumn();
//Product 37, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program37_date13 = $stmt->fetchColumn();
//Product 37, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program37_date14 = $stmt->fetchColumn();
//Product 37, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program37_date15 = $stmt->fetchColumn();
//Product 37, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program37_date16 = $stmt->fetchColumn();
//Product 37, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program37_date17 = $stmt->fetchColumn();
//Product 37, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program37_date18 = $stmt->fetchColumn();
//Product 37, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program37_date19 = $stmt->fetchColumn();
//Product 37, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program37_date20 = $stmt->fetchColumn();
//Product 37, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program37_date21 = $stmt->fetchColumn();
//Product 37, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program37_date22 = $stmt->fetchColumn();
//Product 37, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program37_date23 = $stmt->fetchColumn();
//Product 37, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=37 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program37_date24 = $stmt->fetchColumn();

//Product 38, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program38_date1 = $stmt->fetchColumn();
//Product 38, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program38_date2 = $stmt->fetchColumn();
//Product 38, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program38_date3 = $stmt->fetchColumn();
//Product 38, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program38_date4 = $stmt->fetchColumn();
//Product 38, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program38_date5 = $stmt->fetchColumn();
//Product 38, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program38_date6 = $stmt->fetchColumn();
//Product 38, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program38_date7 = $stmt->fetchColumn();
//Product 38, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program38_date8 = $stmt->fetchColumn();
//Product 38, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program38_date9 = $stmt->fetchColumn();
//Product 38, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program38_date10 = $stmt->fetchColumn();
//Product 38, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program38_date11 = $stmt->fetchColumn();
//Product 38, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program38_date12 = $stmt->fetchColumn();
//Product 38, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program38_date13 = $stmt->fetchColumn();
//Product 38, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program38_date14 = $stmt->fetchColumn();
//Product 38, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program38_date15 = $stmt->fetchColumn();
//Product 38, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program38_date16 = $stmt->fetchColumn();
//Product 38, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program38_date17 = $stmt->fetchColumn();
//Product 38, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program38_date18 = $stmt->fetchColumn();
//Product 38, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program38_date19 = $stmt->fetchColumn();
//Product 38, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program38_date20 = $stmt->fetchColumn();
//Product 38, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program38_date21 = $stmt->fetchColumn();
//Product 38, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program38_date22 = $stmt->fetchColumn();
//Product 38, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program38_date23 = $stmt->fetchColumn();
//Product 38, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=38 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program38_date24 = $stmt->fetchColumn();

//Product 39, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program39_date1 = $stmt->fetchColumn();
//Product 39, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program39_date2 = $stmt->fetchColumn();
//Product 39, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program39_date3 = $stmt->fetchColumn();
//Product 39, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program39_date4 = $stmt->fetchColumn();
//Product 39, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program39_date5 = $stmt->fetchColumn();
//Product 39, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program39_date6 = $stmt->fetchColumn();
//Product 39, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program39_date7 = $stmt->fetchColumn();
//Product 39, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program39_date8 = $stmt->fetchColumn();
//Product 39, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program39_date9 = $stmt->fetchColumn();
//Product 39, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program39_date10 = $stmt->fetchColumn();
//Product 39, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program39_date11 = $stmt->fetchColumn();
//Product 39, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program39_date12 = $stmt->fetchColumn();
//Product 39, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program39_date13 = $stmt->fetchColumn();
//Product 39, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program39_date14 = $stmt->fetchColumn();
//Product 39, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program39_date15 = $stmt->fetchColumn();
//Product 39, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program39_date16 = $stmt->fetchColumn();
//Product 39, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program39_date17 = $stmt->fetchColumn();
//Product 39, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program39_date18 = $stmt->fetchColumn();
//Product 39, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program39_date19 = $stmt->fetchColumn();
//Product 39, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program39_date20 = $stmt->fetchColumn();
//Product 39, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program39_date21 = $stmt->fetchColumn();
//Product 39, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program39_date22 = $stmt->fetchColumn();
//Product 39, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program39_date23 = $stmt->fetchColumn();
//Product 39, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=39 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program39_date24 = $stmt->fetchColumn();

//Product 40, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program40_date1 = $stmt->fetchColumn();
//Product 40, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program40_date2 = $stmt->fetchColumn();
//Product 40, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program40_date3 = $stmt->fetchColumn();
//Product 40, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program40_date4 = $stmt->fetchColumn();
//Product 40, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program40_date5 = $stmt->fetchColumn();
//Product 40, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program40_date6 = $stmt->fetchColumn();
//Product 40, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program40_date7 = $stmt->fetchColumn();
//Product 40, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program40_date8 = $stmt->fetchColumn();
//Product 40, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program40_date9 = $stmt->fetchColumn();
//Product 40, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program40_date10 = $stmt->fetchColumn();
//Product 40, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program40_date11 = $stmt->fetchColumn();
//Product 40, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program40_date12 = $stmt->fetchColumn();
//Product 40, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program40_date13 = $stmt->fetchColumn();
//Product 40, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program40_date14 = $stmt->fetchColumn();
//Product 40, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program40_date15 = $stmt->fetchColumn();
//Product 40, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program40_date16 = $stmt->fetchColumn();
//Product 40, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program40_date17 = $stmt->fetchColumn();
//Product 40, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program40_date18 = $stmt->fetchColumn();
//Product 40, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program40_date19 = $stmt->fetchColumn();
//Product 40, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program40_date20 = $stmt->fetchColumn();
//Product 40, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program40_date21 = $stmt->fetchColumn();
//Product 40, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program40_date22 = $stmt->fetchColumn();
//Product 40, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program40_date23 = $stmt->fetchColumn();
//Product 40, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=40 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program40_date24 = $stmt->fetchColumn();

//Product 41, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program41_date1 = $stmt->fetchColumn();
//Product 41, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program41_date2 = $stmt->fetchColumn();
//Product 41, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program41_date3 = $stmt->fetchColumn();
//Product 41, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program41_date4 = $stmt->fetchColumn();
//Product 41, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program41_date5 = $stmt->fetchColumn();
//Product 41, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program41_date6 = $stmt->fetchColumn();
//Product 41, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program41_date7 = $stmt->fetchColumn();
//Product 41, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program41_date8 = $stmt->fetchColumn();
//Product 41, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program41_date9 = $stmt->fetchColumn();
//Product 41, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program41_date10 = $stmt->fetchColumn();
//Product 41, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program41_date11 = $stmt->fetchColumn();
//Product 41, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program41_date12 = $stmt->fetchColumn();
//Product 41, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program41_date13 = $stmt->fetchColumn();
//Product 41, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program41_date14 = $stmt->fetchColumn();
//Product 41, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program41_date15 = $stmt->fetchColumn();
//Product 41, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program41_date16 = $stmt->fetchColumn();
//Product 41, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program41_date17 = $stmt->fetchColumn();
//Product 41, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program41_date18 = $stmt->fetchColumn();
//Product 41, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program41_date19 = $stmt->fetchColumn();
//Product 41, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program41_date20 = $stmt->fetchColumn();
//Product 41, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program41_date21 = $stmt->fetchColumn();
//Product 41, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program41_date22 = $stmt->fetchColumn();
//Product 41, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program41_date23 = $stmt->fetchColumn();
//Product 41, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=41 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program41_date24 = $stmt->fetchColumn();

//Product 42, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program42_date1 = $stmt->fetchColumn();
//Product 42, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program42_date2 = $stmt->fetchColumn();
//Product 42, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program42_date3 = $stmt->fetchColumn();
//Product 42, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program42_date4 = $stmt->fetchColumn();
//Product 42, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program42_date5 = $stmt->fetchColumn();
//Product 42, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program42_date6 = $stmt->fetchColumn();
//Product 42, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program42_date7 = $stmt->fetchColumn();
//Product 42, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program42_date8 = $stmt->fetchColumn();
//Product 42, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program42_date9 = $stmt->fetchColumn();
//Product 42, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program42_date10 = $stmt->fetchColumn();
//Product 42, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program42_date11 = $stmt->fetchColumn();
//Product 42, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program42_date12 = $stmt->fetchColumn();
//Product 42, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program42_date13 = $stmt->fetchColumn();
//Product 42, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program42_date14 = $stmt->fetchColumn();
//Product 42, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program42_date15 = $stmt->fetchColumn();
//Product 42, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program42_date16 = $stmt->fetchColumn();
//Product 42, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program42_date17 = $stmt->fetchColumn();
//Product 42, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program42_date18 = $stmt->fetchColumn();
//Product 42, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program42_date19 = $stmt->fetchColumn();
//Product 42, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program42_date20 = $stmt->fetchColumn();
//Product 42, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program42_date21 = $stmt->fetchColumn();
//Product 42, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program42_date22 = $stmt->fetchColumn();
//Product 42, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program42_date23 = $stmt->fetchColumn();
//Product 42, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=42 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program42_date24 = $stmt->fetchColumn();

//Product 43, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program43_date1 = $stmt->fetchColumn();
//Product 43, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program43_date2 = $stmt->fetchColumn();
//Product 43, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program43_date3 = $stmt->fetchColumn();
//Product 43, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program43_date4 = $stmt->fetchColumn();
//Product 43, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program43_date5 = $stmt->fetchColumn();
//Product 43, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program43_date6 = $stmt->fetchColumn();
//Product 43, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program43_date7 = $stmt->fetchColumn();
//Product 43, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program43_date8 = $stmt->fetchColumn();
//Product 43, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program43_date9 = $stmt->fetchColumn();
//Product 43, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program43_date10 = $stmt->fetchColumn();
//Product 43, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program43_date11 = $stmt->fetchColumn();
//Product 43, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program43_date12 = $stmt->fetchColumn();
//Product 43, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program43_date13 = $stmt->fetchColumn();
//Product 43, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program43_date14 = $stmt->fetchColumn();
//Product 43, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program43_date15 = $stmt->fetchColumn();
//Product 43, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program43_date16 = $stmt->fetchColumn();
//Product 43, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program43_date17 = $stmt->fetchColumn();
//Product 43, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program43_date18 = $stmt->fetchColumn();
//Product 43, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program43_date19 = $stmt->fetchColumn();
//Product 43, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program43_date20 = $stmt->fetchColumn();
//Product 43, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program43_date21 = $stmt->fetchColumn();
//Product 43, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program43_date22 = $stmt->fetchColumn();
//Product 43, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program43_date23 = $stmt->fetchColumn();
//Product 43, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=43 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program43_date24 = $stmt->fetchColumn();

//Product 44, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program44_date1 = $stmt->fetchColumn();
//Product 44, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program44_date2 = $stmt->fetchColumn();
//Product 44, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program44_date3 = $stmt->fetchColumn();
//Product 44, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program44_date4 = $stmt->fetchColumn();
//Product 44, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program44_date5 = $stmt->fetchColumn();
//Product 44, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program44_date6 = $stmt->fetchColumn();
//Product 44, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program44_date7 = $stmt->fetchColumn();
//Product 44, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program44_date8 = $stmt->fetchColumn();
//Product 44, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program44_date9 = $stmt->fetchColumn();
//Product 44, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program44_date10 = $stmt->fetchColumn();
//Product 44, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program44_date11 = $stmt->fetchColumn();
//Product 44, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program44_date12 = $stmt->fetchColumn();
//Product 44, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program44_date13 = $stmt->fetchColumn();
//Product 44, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program44_date14 = $stmt->fetchColumn();
//Product 44, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program44_date15 = $stmt->fetchColumn();
//Product 44, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program44_date16 = $stmt->fetchColumn();
//Product 44, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program44_date17 = $stmt->fetchColumn();
//Product 44, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program44_date18 = $stmt->fetchColumn();
//Product 44, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program44_date19 = $stmt->fetchColumn();
//Product 44, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program44_date20 = $stmt->fetchColumn();
//Product 44, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program44_date21 = $stmt->fetchColumn();
//Product 44, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program44_date22 = $stmt->fetchColumn();
//Product 44, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program44_date23 = $stmt->fetchColumn();
//Product 44, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=44 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program44_date24 = $stmt->fetchColumn();

//Product 45, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program45_date1 = $stmt->fetchColumn();
//Product 45, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program45_date2 = $stmt->fetchColumn();
//Product 45, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program45_date3 = $stmt->fetchColumn();
//Product 45, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program45_date4 = $stmt->fetchColumn();
//Product 45, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program45_date5 = $stmt->fetchColumn();
//Product 45, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program45_date6 = $stmt->fetchColumn();
//Product 45, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program45_date7 = $stmt->fetchColumn();
//Product 45, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program45_date8 = $stmt->fetchColumn();
//Product 45, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program45_date9 = $stmt->fetchColumn();
//Product 45, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program45_date10 = $stmt->fetchColumn();
//Product 45, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program45_date11 = $stmt->fetchColumn();
//Product 45, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program45_date12 = $stmt->fetchColumn();
//Product 45, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program45_date13 = $stmt->fetchColumn();
//Product 45, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program45_date14 = $stmt->fetchColumn();
//Product 45, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program45_date15 = $stmt->fetchColumn();
//Product 45, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program45_date16 = $stmt->fetchColumn();
//Product 45, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program45_date17 = $stmt->fetchColumn();
//Product 45, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program45_date18 = $stmt->fetchColumn();
//Product 45, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program45_date19 = $stmt->fetchColumn();
//Product 45, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program45_date20 = $stmt->fetchColumn();
//Product 45, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program45_date21 = $stmt->fetchColumn();
//Product 45, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program45_date22 = $stmt->fetchColumn();
//Product 45, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program45_date23 = $stmt->fetchColumn();
//Product 45, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=45 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program45_date24 = $stmt->fetchColumn();

//Product 46, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program46_date1 = $stmt->fetchColumn();
//Product 46, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program46_date2 = $stmt->fetchColumn();
//Product 46, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program46_date3 = $stmt->fetchColumn();
//Product 46, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program46_date4 = $stmt->fetchColumn();
//Product 46, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program46_date5 = $stmt->fetchColumn();
//Product 46, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program46_date6 = $stmt->fetchColumn();
//Product 46, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program46_date7 = $stmt->fetchColumn();
//Product 46, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program46_date8 = $stmt->fetchColumn();
//Product 46, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program46_date9 = $stmt->fetchColumn();
//Product 46, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program46_date10 = $stmt->fetchColumn();
//Product 46, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program46_date11 = $stmt->fetchColumn();
//Product 46, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program46_date12 = $stmt->fetchColumn();
//Product 46, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program46_date13 = $stmt->fetchColumn();
//Product 46, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program46_date14 = $stmt->fetchColumn();
//Product 46, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program46_date15 = $stmt->fetchColumn();
//Product 46, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program46_date16 = $stmt->fetchColumn();
//Product 46, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program46_date17 = $stmt->fetchColumn();
//Product 46, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program46_date18 = $stmt->fetchColumn();
//Product 46, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program46_date19 = $stmt->fetchColumn();
//Product 46, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program46_date20 = $stmt->fetchColumn();
//Product 46, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program46_date21 = $stmt->fetchColumn();
//Product 46, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program46_date22 = $stmt->fetchColumn();
//Product 46, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program46_date23 = $stmt->fetchColumn();
//Product 46, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=46 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program46_date24 = $stmt->fetchColumn();

//Product 47, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program47_date1 = $stmt->fetchColumn();
//Product 47, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program47_date2 = $stmt->fetchColumn();
//Product 47, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program47_date3 = $stmt->fetchColumn();
//Product 47, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program47_date4 = $stmt->fetchColumn();
//Product 47, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program47_date5 = $stmt->fetchColumn();
//Product 47, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program47_date6 = $stmt->fetchColumn();
//Product 47, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program47_date7 = $stmt->fetchColumn();
//Product 47, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program47_date8 = $stmt->fetchColumn();
//Product 47, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program47_date9 = $stmt->fetchColumn();
//Product 47, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program47_date10 = $stmt->fetchColumn();
//Product 47, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program47_date11 = $stmt->fetchColumn();
//Product 47, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program47_date12 = $stmt->fetchColumn();
//Product 47, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program47_date13 = $stmt->fetchColumn();
//Product 47, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program47_date14 = $stmt->fetchColumn();
//Product 47, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program47_date15 = $stmt->fetchColumn();
//Product 47, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program47_date16 = $stmt->fetchColumn();
//Product 47, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program47_date17 = $stmt->fetchColumn();
//Product 47, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program47_date18 = $stmt->fetchColumn();
//Product 47, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program47_date19 = $stmt->fetchColumn();
//Product 47, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program47_date20 = $stmt->fetchColumn();
//Product 47, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program47_date21 = $stmt->fetchColumn();
//Product 47, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program47_date22 = $stmt->fetchColumn();
//Product 47, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program47_date23 = $stmt->fetchColumn();
//Product 47, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=47 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program47_date24 = $stmt->fetchColumn();

//Product 48, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program48_date1 = $stmt->fetchColumn();
//Product 48, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program48_date2 = $stmt->fetchColumn();
//Product 48, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program48_date3 = $stmt->fetchColumn();
//Product 48, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program48_date4 = $stmt->fetchColumn();
//Product 48, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program48_date5 = $stmt->fetchColumn();
//Product 48, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program48_date6 = $stmt->fetchColumn();
//Product 48, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program48_date7 = $stmt->fetchColumn();
//Product 48, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program48_date8 = $stmt->fetchColumn();
//Product 48, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program48_date9 = $stmt->fetchColumn();
//Product 48, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program48_date10 = $stmt->fetchColumn();
//Product 48, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program48_date11 = $stmt->fetchColumn();
//Product 48, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program48_date12 = $stmt->fetchColumn();
//Product 48, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program48_date13 = $stmt->fetchColumn();
//Product 48, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program48_date14 = $stmt->fetchColumn();
//Product 48, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program48_date15 = $stmt->fetchColumn();
//Product 48, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program48_date16 = $stmt->fetchColumn();
//Product 48, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program48_date17 = $stmt->fetchColumn();
//Product 48, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program48_date18 = $stmt->fetchColumn();
//Product 48, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program48_date19 = $stmt->fetchColumn();
//Product 48, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program48_date20 = $stmt->fetchColumn();
//Product 48, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program48_date21 = $stmt->fetchColumn();
//Product 48, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program48_date22 = $stmt->fetchColumn();
//Product 48, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program48_date23 = $stmt->fetchColumn();
//Product 48, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=48 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program48_date24 = $stmt->fetchColumn();

//Product 49, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program49_date1 = $stmt->fetchColumn();
//Product 49, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program49_date2 = $stmt->fetchColumn();
//Product 49, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program49_date3 = $stmt->fetchColumn();
//Product 49, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program49_date4 = $stmt->fetchColumn();
//Product 49, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program49_date5 = $stmt->fetchColumn();
//Product 49, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program49_date6 = $stmt->fetchColumn();
//Product 49, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program49_date7 = $stmt->fetchColumn();
//Product 49, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program49_date8 = $stmt->fetchColumn();
//Product 49, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program49_date9 = $stmt->fetchColumn();
//Product 49, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program49_date10 = $stmt->fetchColumn();
//Product 49, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program49_date11 = $stmt->fetchColumn();
//Product 49, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program49_date12 = $stmt->fetchColumn();
//Product 49, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program49_date13 = $stmt->fetchColumn();
//Product 49, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program49_date14 = $stmt->fetchColumn();
//Product 49, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program49_date15 = $stmt->fetchColumn();
//Product 49, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program49_date16 = $stmt->fetchColumn();
//Product 49, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program49_date17 = $stmt->fetchColumn();
//Product 49, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program49_date18 = $stmt->fetchColumn();
//Product 49, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program49_date19 = $stmt->fetchColumn();
//Product 49, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program49_date20 = $stmt->fetchColumn();
//Product 49, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program49_date21 = $stmt->fetchColumn();
//Product 49, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program49_date22 = $stmt->fetchColumn();
//Product 49, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program49_date23 = $stmt->fetchColumn();
//Product 49, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=49 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program49_date24 = $stmt->fetchColumn();

//Product 50, Date 1
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id)]);
$program50_date1 = $stmt->fetchColumn();
//Product 50, Date 2
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 1)]);
$program50_date2 = $stmt->fetchColumn();
//Product 50, Date 3
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 2)]);
$program50_date3 = $stmt->fetchColumn();
//Product 50, Date 4
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 3)]);
$program50_date4 = $stmt->fetchColumn();
//Product 50, Date 5
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 4)]);
$program50_date5 = $stmt->fetchColumn();
//Product 50, Date 6
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 5)]);
$program50_date6 = $stmt->fetchColumn();
//Product 50, Date 7
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 6)]);
$program50_date7 = $stmt->fetchColumn();
//Product 50, Date 8
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 7)]);
$program50_date8 = $stmt->fetchColumn();
//Product 50, Date 9
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 8)]);
$program50_date9 = $stmt->fetchColumn();
//Product 50, Date 10
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 9)]);
$program50_date10 = $stmt->fetchColumn();
//Product 50, Date 11
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 10)]);
$program50_date11 = $stmt->fetchColumn();
//Product 50, Date 12
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 11)]);
$program50_date12 = $stmt->fetchColumn();
//Product 50, Date 13
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 12)]);
$program50_date13 = $stmt->fetchColumn();
//Product 50, Date 14
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 13)]);
$program50_date14 = $stmt->fetchColumn();
//Product 50, Date 15
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 14)]);
$program50_date15 = $stmt->fetchColumn();
//Product 50, Date 16
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 15)]);
$program50_date16 = $stmt->fetchColumn();
//Product 50, Date 17
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 16)]);
$program50_date17 = $stmt->fetchColumn();
//Product 50, Date 18
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 17)]);
$program50_date18 = $stmt->fetchColumn();
//Product 50, Date 19
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 18)]);
$program50_date19 = $stmt->fetchColumn();
//Product 50, Date 20
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 19)]);
$program50_date20 = $stmt->fetchColumn();
//Product 50, Date 21
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 20)]);
$program50_date21 = $stmt->fetchColumn();
//Product 50, Date 22
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 21)]);
$program50_date22 = $stmt->fetchColumn();
//Product 50, Date 23
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 22)]);
$program50_date23 = $stmt->fetchColumn();
//Product 50, Date 24
$stmt = $pdo->prepare("SELECT rate from Rates WHERE program_id=50 and date_id=:date_id");
$stmt->execute(['date_id' => ($startdate_id + 23)]);
$program50_date24 = $stmt->fetchColumn();

//--------------------------Set Product Names, FLow Times & Batch Sizes from Database
//-------Product 1
//Product 1, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=1");
$program1 = $stmt->fetchColumn();

//Product 1, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=1");
$program1_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=1");
$program1_resource1_batch = $stmt->fetchColumn();

//Product 1, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=2");
$program1_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=2");
$program1_resource2_batch = $stmt->fetchColumn();

//Product 1, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=3");
$program1_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=3");
$program1_resource3_batch = $stmt->fetchColumn();

//Product 1, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=4");
$program1_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=4");
$program1_resource4_batch = $stmt->fetchColumn();

//Product 1, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=5");
$program1_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=5");
$program1_resource5_batch = $stmt->fetchColumn();

//Product 1, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=6");
$program1_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=6");
$program1_resource6_batch = $stmt->fetchColumn();

//Product 1, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=7");
$program1_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=7");
$program1_resource7_batch = $stmt->fetchColumn();

//Product 1, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=8");
$program1_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=8");
$program1_resource8_batch = $stmt->fetchColumn();

//Product 1, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=9");
$program1_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=9");
$program1_resource9_batch = $stmt->fetchColumn();

//Product 1, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=10");
$program1_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=10");
$program1_resource10_batch = $stmt->fetchColumn();

//Product 1, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=11");
$program1_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=11");
$program1_resource11_batch = $stmt->fetchColumn();

//Product 1, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=12");
$program1_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=12");
$program1_resource12_batch = $stmt->fetchColumn();

//Product 1, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=13");
$program1_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=13");
$program1_resource13_batch = $stmt->fetchColumn();

//Product 1, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=14");
$program1_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=14");
$program1_resource14_batch = $stmt->fetchColumn();

//Product 1, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=15");
$program1_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=15");
$program1_resource15_batch = $stmt->fetchColumn();

//Product 1, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=16");
$program1_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=16");
$program1_resource16_batch = $stmt->fetchColumn();

//Product 1, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=17");
$program1_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=17");
$program1_resource17_batch = $stmt->fetchColumn();

//Product 1, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=18");
$program1_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=18");
$program1_resource18_batch = $stmt->fetchColumn();

//Product 1, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=19");
$program1_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=19");
$program1_resource19_batch = $stmt->fetchColumn();

//Product 1, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=1 and resource_id=20");
$program1_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=1 and resource_id=20");
$program1_resource20_batch = $stmt->fetchColumn();

//-------Product 2
//Product 2, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=2");
$program2 = $stmt->fetchColumn();

//Product 2, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=1");
$program2_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=1");
$program2_resource1_batch = $stmt->fetchColumn();

//Product 2, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=2");
$program2_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=2");
$program2_resource2_batch = $stmt->fetchColumn();

//Product 2, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=3");
$program2_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=3");
$program2_resource3_batch = $stmt->fetchColumn();

//Product 2, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=4");
$program2_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=4");
$program2_resource4_batch = $stmt->fetchColumn();

//Product 2, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=5");
$program2_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=5");
$program2_resource5_batch = $stmt->fetchColumn();

//Product 2, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=6");
$program2_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=6");
$program2_resource6_batch = $stmt->fetchColumn();

//Product 2, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=7");
$program2_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=7");
$program2_resource7_batch = $stmt->fetchColumn();

//Product 2, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=8");
$program2_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=8");
$program2_resource8_batch = $stmt->fetchColumn();

//Product 2, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=9");
$program2_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=9");
$program2_resource9_batch = $stmt->fetchColumn();

//Product 2, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=10");
$program2_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=10");
$program2_resource10_batch = $stmt->fetchColumn();

//Product 2, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=11");
$program2_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=11");
$program2_resource11_batch = $stmt->fetchColumn();

//Product 2, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=12");
$program2_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=12");
$program2_resource12_batch = $stmt->fetchColumn();

//Product 2, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=13");
$program2_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=13");
$program2_resource13_batch = $stmt->fetchColumn();

//Product 2, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=14");
$program2_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=14");
$program2_resource14_batch = $stmt->fetchColumn();

//Product 2, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=15");
$program2_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=15");
$program2_resource15_batch = $stmt->fetchColumn();

//Product 2, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=16");
$program2_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=16");
$program2_resource16_batch = $stmt->fetchColumn();

//Product 2, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=17");
$program2_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=17");
$program2_resource17_batch = $stmt->fetchColumn();

//Product 2, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=18");
$program2_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=18");
$program2_resource18_batch = $stmt->fetchColumn();

//Product 2, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=19");
$program2_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=19");
$program2_resource19_batch = $stmt->fetchColumn();

//Product 2, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=2 and resource_id=20");
$program2_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=2 and resource_id=20");
$program2_resource20_batch = $stmt->fetchColumn();

//-------Product 3
//Product 3, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=3");
$program3 = $stmt->fetchColumn();

//Product 3, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=1");
$program3_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=1");
$program3_resource1_batch = $stmt->fetchColumn();

//Product 3, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=2");
$program3_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=2");
$program3_resource2_batch = $stmt->fetchColumn();

//Product 3, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=3");
$program3_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=3");
$program3_resource3_batch = $stmt->fetchColumn();

//Product 3, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=4");
$program3_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=4");
$program3_resource4_batch = $stmt->fetchColumn();

//Product 3, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=5");
$program3_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=5");
$program3_resource5_batch = $stmt->fetchColumn();

//Product 3, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=6");
$program3_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=6");
$program3_resource6_batch = $stmt->fetchColumn();

//Product 3, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=7");
$program3_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=7");
$program3_resource7_batch = $stmt->fetchColumn();

//Product 3, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=8");
$program3_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=8");
$program3_resource8_batch = $stmt->fetchColumn();

//Product 3, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=9");
$program3_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=9");
$program3_resource9_batch = $stmt->fetchColumn();

//Product 3, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=10");
$program3_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=10");
$program3_resource10_batch = $stmt->fetchColumn();

//Product 3, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=11");
$program3_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=11");
$program3_resource11_batch = $stmt->fetchColumn();

//Product 3, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=12");
$program3_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=12");
$program3_resource12_batch = $stmt->fetchColumn();

//Product 3, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=13");
$program3_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=13");
$program3_resource13_batch = $stmt->fetchColumn();

//Product 3, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=14");
$program3_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=14");
$program3_resource14_batch = $stmt->fetchColumn();

//Product 3, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=15");
$program3_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=15");
$program3_resource15_batch = $stmt->fetchColumn();

//Product 3, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=16");
$program3_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=16");
$program3_resource16_batch = $stmt->fetchColumn();

//Product 3, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=17");
$program3_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=17");
$program3_resource17_batch = $stmt->fetchColumn();

//Product 3, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=18");
$program3_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=18");
$program3_resource18_batch = $stmt->fetchColumn();

//Product 3, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=19");
$program3_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=19");
$program3_resource19_batch = $stmt->fetchColumn();

//Product 3, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=3 and resource_id=20");
$program3_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=3 and resource_id=20");
$program3_resource20_batch = $stmt->fetchColumn();

//-------Product 4
//Product 4, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=4");
$program4 = $stmt->fetchColumn();

//Product 4, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=1");
$program4_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=1");
$program4_resource1_batch = $stmt->fetchColumn();

//Product 4, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=2");
$program4_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=2");
$program4_resource2_batch = $stmt->fetchColumn();

//Product 4, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=3");
$program4_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=3");
$program4_resource3_batch = $stmt->fetchColumn();

//Product 4, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=4");
$program4_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=4");
$program4_resource4_batch = $stmt->fetchColumn();

//Product 4, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=5");
$program4_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=5");
$program4_resource5_batch = $stmt->fetchColumn();

//Product 4, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=6");
$program4_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=6");
$program4_resource6_batch = $stmt->fetchColumn();

//Product 4, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=7");
$program4_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=7");
$program4_resource7_batch = $stmt->fetchColumn();

//Product 4, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=8");
$program4_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=8");
$program4_resource8_batch = $stmt->fetchColumn();

//Product 4, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=9");
$program4_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=9");
$program4_resource9_batch = $stmt->fetchColumn();

//Product 4, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=10");
$program4_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=10");
$program4_resource10_batch = $stmt->fetchColumn();

//Product 4, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=11");
$program4_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=11");
$program4_resource11_batch = $stmt->fetchColumn();

//Product 4, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=12");
$program4_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=12");
$program4_resource12_batch = $stmt->fetchColumn();

//Product 4, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=13");
$program4_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=13");
$program4_resource13_batch = $stmt->fetchColumn();

//Product 4, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=14");
$program4_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=14");
$program4_resource14_batch = $stmt->fetchColumn();

//Product 4, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=15");
$program4_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=15");
$program4_resource15_batch = $stmt->fetchColumn();

//Product 4, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=16");
$program4_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=16");
$program4_resource16_batch = $stmt->fetchColumn();

//Product 4, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=17");
$program4_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=17");
$program4_resource17_batch = $stmt->fetchColumn();

//Product 4, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=18");
$program4_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=18");
$program4_resource18_batch = $stmt->fetchColumn();

//Product 4, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=19");
$program4_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=19");
$program4_resource19_batch = $stmt->fetchColumn();

//Product 4, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=4 and resource_id=20");
$program4_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=4 and resource_id=20");
$program4_resource20_batch = $stmt->fetchColumn();

//-------Product 5
//Product 5, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=5");
$program5 = $stmt->fetchColumn();

//Product 5, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=1");
$program5_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=1");
$program5_resource1_batch = $stmt->fetchColumn();

//Product 5, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=2");
$program5_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=2");
$program5_resource2_batch = $stmt->fetchColumn();

//Product 5, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=3");
$program5_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=3");
$program5_resource3_batch = $stmt->fetchColumn();

//Product 5, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=4");
$program5_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=4");
$program5_resource4_batch = $stmt->fetchColumn();

//Product 5, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=5");
$program5_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=5");
$program5_resource5_batch = $stmt->fetchColumn();

//Product 5, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=6");
$program5_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=6");
$program5_resource6_batch = $stmt->fetchColumn();

//Product 5, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=7");
$program5_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=7");
$program5_resource7_batch = $stmt->fetchColumn();

//Product 5, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=8");
$program5_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=8");
$program5_resource8_batch = $stmt->fetchColumn();

//Product 5, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=9");
$program5_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=9");
$program5_resource9_batch = $stmt->fetchColumn();

//Product 5, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=10");
$program5_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=10");
$program5_resource10_batch = $stmt->fetchColumn();

//Product 5, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=11");
$program5_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=11");
$program5_resource11_batch = $stmt->fetchColumn();

//Product 5, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=12");
$program5_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=12");
$program5_resource12_batch = $stmt->fetchColumn();

//Product 5, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=13");
$program5_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=13");
$program5_resource13_batch = $stmt->fetchColumn();

//Product 5, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=14");
$program5_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=14");
$program5_resource14_batch = $stmt->fetchColumn();

//Product 5, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=15");
$program5_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=15");
$program5_resource15_batch = $stmt->fetchColumn();

//Product 5, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=16");
$program5_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=16");
$program5_resource16_batch = $stmt->fetchColumn();

//Product 5, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=17");
$program5_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=17");
$program5_resource17_batch = $stmt->fetchColumn();

//Product 5, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=18");
$program5_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=18");
$program5_resource18_batch = $stmt->fetchColumn();

//Product 5, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=19");
$program5_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=19");
$program5_resource19_batch = $stmt->fetchColumn();

//Product 5, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=5 and resource_id=20");
$program5_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=5 and resource_id=20");
$program5_resource20_batch = $stmt->fetchColumn();

//-------Product 6
//Product 6, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=6");
$program6 = $stmt->fetchColumn();

//Product 6, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=1");
$program6_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=1");
$program6_resource1_batch = $stmt->fetchColumn();

//Product 6, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=2");
$program6_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=2");
$program6_resource2_batch = $stmt->fetchColumn();

//Product 6, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=3");
$program6_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=3");
$program6_resource3_batch = $stmt->fetchColumn();

//Product 6, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=4");
$program6_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=4");
$program6_resource4_batch = $stmt->fetchColumn();

//Product 6, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=5");
$program6_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=5");
$program6_resource5_batch = $stmt->fetchColumn();

//Product 6, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=6");
$program6_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=6");
$program6_resource6_batch = $stmt->fetchColumn();

//Product 6, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=7");
$program6_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=7");
$program6_resource7_batch = $stmt->fetchColumn();

//Product 6, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=8");
$program6_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=8");
$program6_resource8_batch = $stmt->fetchColumn();

//Product 6, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=9");
$program6_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=9");
$program6_resource9_batch = $stmt->fetchColumn();

//Product 6, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=10");
$program6_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=10");
$program6_resource10_batch = $stmt->fetchColumn();

//Product 6, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=11");
$program6_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=11");
$program6_resource11_batch = $stmt->fetchColumn();

//Product 6, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=12");
$program6_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=12");
$program6_resource12_batch = $stmt->fetchColumn();

//Product 6, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=13");
$program6_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=13");
$program6_resource13_batch = $stmt->fetchColumn();

//Product 6, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=14");
$program6_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=14");
$program6_resource14_batch = $stmt->fetchColumn();

//Product 6, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=15");
$program6_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=15");
$program6_resource15_batch = $stmt->fetchColumn();

//Product 6, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=16");
$program6_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=16");
$program6_resource16_batch = $stmt->fetchColumn();

//Product 6, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=17");
$program6_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=17");
$program6_resource17_batch = $stmt->fetchColumn();

//Product 6, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=18");
$program6_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=18");
$program6_resource18_batch = $stmt->fetchColumn();

//Product 6, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=19");
$program6_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=19");
$program6_resource19_batch = $stmt->fetchColumn();

//Product 6, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=6 and resource_id=20");
$program6_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=6 and resource_id=20");
$program6_resource20_batch = $stmt->fetchColumn();

//-------Product 7
//Product 7, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=7");
$program7 = $stmt->fetchColumn();

//Product 7, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=1");
$program7_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=1");
$program7_resource1_batch = $stmt->fetchColumn();

//Product 7, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=2");
$program7_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=2");
$program7_resource2_batch = $stmt->fetchColumn();

//Product 7, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=3");
$program7_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=3");
$program7_resource3_batch = $stmt->fetchColumn();

//Product 7, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=4");
$program7_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=4");
$program7_resource4_batch = $stmt->fetchColumn();

//Product 7, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=5");
$program7_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=5");
$program7_resource5_batch = $stmt->fetchColumn();

//Product 7, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=6");
$program7_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=6");
$program7_resource6_batch = $stmt->fetchColumn();

//Product 7, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=7");
$program7_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=7");
$program7_resource7_batch = $stmt->fetchColumn();

//Product 7, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=8");
$program7_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=8");
$program7_resource8_batch = $stmt->fetchColumn();

//Product 7, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=9");
$program7_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=9");
$program7_resource9_batch = $stmt->fetchColumn();

//Product 7, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=10");
$program7_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=10");
$program7_resource10_batch = $stmt->fetchColumn();

//Product 7, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=11");
$program7_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=11");
$program7_resource11_batch = $stmt->fetchColumn();

//Product 7, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=12");
$program7_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=12");
$program7_resource12_batch = $stmt->fetchColumn();

//Product 7, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=13");
$program7_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=13");
$program7_resource13_batch = $stmt->fetchColumn();

//Product 7, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=14");
$program7_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=14");
$program7_resource14_batch = $stmt->fetchColumn();

//Product 7, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=15");
$program7_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=15");
$program7_resource15_batch = $stmt->fetchColumn();

//Product 7, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=16");
$program7_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=16");
$program7_resource16_batch = $stmt->fetchColumn();

//Product 7, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=17");
$program7_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=17");
$program7_resource17_batch = $stmt->fetchColumn();

//Product 7, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=18");
$program7_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=18");
$program7_resource18_batch = $stmt->fetchColumn();

//Product 7, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=19");
$program7_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=19");
$program7_resource19_batch = $stmt->fetchColumn();

//Product 7, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=7 and resource_id=20");
$program7_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=7 and resource_id=20");
$program7_resource20_batch = $stmt->fetchColumn();

//-------Product 8
//Product 8, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=8");
$program8 = $stmt->fetchColumn();

//Product 8, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=1");
$program8_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=1");
$program8_resource1_batch = $stmt->fetchColumn();

//Product 8, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=2");
$program8_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=2");
$program8_resource2_batch = $stmt->fetchColumn();

//Product 8, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=3");
$program8_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=3");
$program8_resource3_batch = $stmt->fetchColumn();

//Product 8, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=4");
$program8_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=4");
$program8_resource4_batch = $stmt->fetchColumn();

//Product 8, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=5");
$program8_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=5");
$program8_resource5_batch = $stmt->fetchColumn();

//Product 8, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=6");
$program8_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=6");
$program8_resource6_batch = $stmt->fetchColumn();

//Product 8, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=7");
$program8_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=7");
$program8_resource7_batch = $stmt->fetchColumn();

//Product 8, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=8");
$program8_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=8");
$program8_resource8_batch = $stmt->fetchColumn();

//Product 8, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=9");
$program8_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=9");
$program8_resource9_batch = $stmt->fetchColumn();

//Product 8, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=10");
$program8_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=10");
$program8_resource10_batch = $stmt->fetchColumn();

//Product 8, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=11");
$program8_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=11");
$program8_resource11_batch = $stmt->fetchColumn();

//Product 8, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=12");
$program8_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=12");
$program8_resource12_batch = $stmt->fetchColumn();

//Product 8, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=13");
$program8_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=13");
$program8_resource13_batch = $stmt->fetchColumn();

//Product 8, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=14");
$program8_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=14");
$program8_resource14_batch = $stmt->fetchColumn();

//Product 8, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=15");
$program8_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=15");
$program8_resource15_batch = $stmt->fetchColumn();

//Product 8, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=16");
$program8_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=16");
$program8_resource16_batch = $stmt->fetchColumn();

//Product 8, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=17");
$program8_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=17");
$program8_resource17_batch = $stmt->fetchColumn();

//Product 8, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=18");
$program8_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=18");
$program8_resource18_batch = $stmt->fetchColumn();

//Product 8, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=19");
$program8_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=19");
$program8_resource19_batch = $stmt->fetchColumn();

//Product 8, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=8 and resource_id=20");
$program8_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=8 and resource_id=20");
$program8_resource20_batch = $stmt->fetchColumn();

//-------Product 9
//Product 9, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=9");
$program9 = $stmt->fetchColumn();

//Product 9, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=1");
$program9_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=1");
$program9_resource1_batch = $stmt->fetchColumn();

//Product 9, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=2");
$program9_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=2");
$program9_resource2_batch = $stmt->fetchColumn();

//Product 9, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=3");
$program9_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=3");
$program9_resource3_batch = $stmt->fetchColumn();

//Product 9, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=4");
$program9_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=4");
$program9_resource4_batch = $stmt->fetchColumn();

//Product 9, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=5");
$program9_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=5");
$program9_resource5_batch = $stmt->fetchColumn();

//Product 9, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=6");
$program9_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=6");
$program9_resource6_batch = $stmt->fetchColumn();

//Product 9, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=7");
$program9_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=7");
$program9_resource7_batch = $stmt->fetchColumn();

//Product 9, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=8");
$program9_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=8");
$program9_resource8_batch = $stmt->fetchColumn();

//Product 9, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=9");
$program9_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=9");
$program9_resource9_batch = $stmt->fetchColumn();

//Product 9, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=10");
$program9_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=10");
$program9_resource10_batch = $stmt->fetchColumn();

//Product 9, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=11");
$program9_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=11");
$program9_resource11_batch = $stmt->fetchColumn();

//Product 9, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=12");
$program9_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=12");
$program9_resource12_batch = $stmt->fetchColumn();

//Product 9, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=13");
$program9_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=13");
$program9_resource13_batch = $stmt->fetchColumn();

//Product 9, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=14");
$program9_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=14");
$program9_resource14_batch = $stmt->fetchColumn();

//Product 9, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=15");
$program9_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=15");
$program9_resource15_batch = $stmt->fetchColumn();

//Product 9, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=16");
$program9_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=16");
$program9_resource16_batch = $stmt->fetchColumn();

//Product 9, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=17");
$program9_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=17");
$program9_resource17_batch = $stmt->fetchColumn();

//Product 9, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=18");
$program9_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=18");
$program9_resource18_batch = $stmt->fetchColumn();

//Product 9, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=19");
$program9_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=19");
$program9_resource19_batch = $stmt->fetchColumn();

//Product 9, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=9 and resource_id=20");
$program9_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=9 and resource_id=20");
$program9_resource20_batch = $stmt->fetchColumn();

//-------Product 10
//Product 10, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=10");
$program10 = $stmt->fetchColumn();

//Product 10, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=1");
$program10_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=1");
$program10_resource1_batch = $stmt->fetchColumn();

//Product 10, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=2");
$program10_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=2");
$program10_resource2_batch = $stmt->fetchColumn();

//Product 10, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=3");
$program10_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=3");
$program10_resource3_batch = $stmt->fetchColumn();

//Product 10, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=4");
$program10_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=4");
$program10_resource4_batch = $stmt->fetchColumn();

//Product 10, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=5");
$program10_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=5");
$program10_resource5_batch = $stmt->fetchColumn();

//Product 10, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=6");
$program10_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=6");
$program10_resource6_batch = $stmt->fetchColumn();

//Product 10, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=7");
$program10_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=7");
$program10_resource7_batch = $stmt->fetchColumn();

//Product 10, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=8");
$program10_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=8");
$program10_resource8_batch = $stmt->fetchColumn();

//Product 10, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=9");
$program10_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=9");
$program10_resource9_batch = $stmt->fetchColumn();

//Product 10, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=10");
$program10_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=10");
$program10_resource10_batch = $stmt->fetchColumn();

//Product 10, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=11");
$program10_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=11");
$program10_resource11_batch = $stmt->fetchColumn();

//Product 10, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=12");
$program10_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=12");
$program10_resource12_batch = $stmt->fetchColumn();

//Product 10, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=13");
$program10_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=13");
$program10_resource13_batch = $stmt->fetchColumn();

//Product 10, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=14");
$program10_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=14");
$program10_resource14_batch = $stmt->fetchColumn();

//Product 10, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=15");
$program10_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=15");
$program10_resource15_batch = $stmt->fetchColumn();

//Product 10, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=16");
$program10_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=16");
$program10_resource16_batch = $stmt->fetchColumn();

//Product 10, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=17");
$program10_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=17");
$program10_resource17_batch = $stmt->fetchColumn();

//Product 10, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=18");
$program10_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=18");
$program10_resource18_batch = $stmt->fetchColumn();

//Product 10, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=19");
$program10_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=19");
$program10_resource19_batch = $stmt->fetchColumn();

//Product 10, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=10 and resource_id=20");
$program10_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=10 and resource_id=20");
$program10_resource20_batch = $stmt->fetchColumn();

//-------Product 11
//Product 11, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=11");
$program11 = $stmt->fetchColumn();

//Product 11, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=1");
$program11_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=1");
$program11_resource1_batch = $stmt->fetchColumn();

//Product 11, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=2");
$program11_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=2");
$program11_resource2_batch = $stmt->fetchColumn();

//Product 11, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=3");
$program11_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=3");
$program11_resource3_batch = $stmt->fetchColumn();

//Product 11, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=4");
$program11_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=4");
$program11_resource4_batch = $stmt->fetchColumn();

//Product 11, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=5");
$program11_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=5");
$program11_resource5_batch = $stmt->fetchColumn();

//Product 11, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=6");
$program11_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=6");
$program11_resource6_batch = $stmt->fetchColumn();

//Product 11, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=7");
$program11_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=7");
$program11_resource7_batch = $stmt->fetchColumn();

//Product 11, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=8");
$program11_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=8");
$program11_resource8_batch = $stmt->fetchColumn();

//Product 11, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=9");
$program11_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=9");
$program11_resource9_batch = $stmt->fetchColumn();

//Product 11, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=10");
$program11_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=10");
$program11_resource10_batch = $stmt->fetchColumn();

//Product 11, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=11");
$program11_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=11");
$program11_resource11_batch = $stmt->fetchColumn();

//Product 11, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=12");
$program11_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=12");
$program11_resource12_batch = $stmt->fetchColumn();

//Product 11, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=13");
$program11_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=13");
$program11_resource13_batch = $stmt->fetchColumn();

//Product 11, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=14");
$program11_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=14");
$program11_resource14_batch = $stmt->fetchColumn();

//Product 11, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=15");
$program11_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=15");
$program11_resource15_batch = $stmt->fetchColumn();

//Product 11, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=16");
$program11_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=16");
$program11_resource16_batch = $stmt->fetchColumn();

//Product 11, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=17");
$program11_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=17");
$program11_resource17_batch = $stmt->fetchColumn();

//Product 11, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=18");
$program11_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=18");
$program11_resource18_batch = $stmt->fetchColumn();

//Product 11, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=19");
$program11_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=19");
$program11_resource19_batch = $stmt->fetchColumn();

//Product 11, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=11 and resource_id=20");
$program11_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=11 and resource_id=20");
$program11_resource20_batch = $stmt->fetchColumn();

//-------Product 12
//Product 12, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=12");
$program12 = $stmt->fetchColumn();

//Product 12, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=1");
$program12_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=1");
$program12_resource1_batch = $stmt->fetchColumn();

//Product 12, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=2");
$program12_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=2");
$program12_resource2_batch = $stmt->fetchColumn();

//Product 12, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=3");
$program12_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=3");
$program12_resource3_batch = $stmt->fetchColumn();

//Product 12, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=4");
$program12_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=4");
$program12_resource4_batch = $stmt->fetchColumn();

//Product 12, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=5");
$program12_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=5");
$program12_resource5_batch = $stmt->fetchColumn();

//Product 12, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=6");
$program12_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=6");
$program12_resource6_batch = $stmt->fetchColumn();

//Product 12, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=7");
$program12_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=7");
$program12_resource7_batch = $stmt->fetchColumn();

//Product 12, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=8");
$program12_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=8");
$program12_resource8_batch = $stmt->fetchColumn();

//Product 12, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=9");
$program12_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=9");
$program12_resource9_batch = $stmt->fetchColumn();

//Product 12, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=10");
$program12_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=10");
$program12_resource10_batch = $stmt->fetchColumn();

//Product 12, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=11");
$program12_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=11");
$program12_resource11_batch = $stmt->fetchColumn();

//Product 12, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=12");
$program12_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=12");
$program12_resource12_batch = $stmt->fetchColumn();

//Product 12, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=13");
$program12_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=13");
$program12_resource13_batch = $stmt->fetchColumn();

//Product 12, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=14");
$program12_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=14");
$program12_resource14_batch = $stmt->fetchColumn();

//Product 12, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=15");
$program12_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=15");
$program12_resource15_batch = $stmt->fetchColumn();

//Product 12, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=16");
$program12_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=16");
$program12_resource16_batch = $stmt->fetchColumn();

//Product 12, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=17");
$program12_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=17");
$program12_resource17_batch = $stmt->fetchColumn();

//Product 12, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=18");
$program12_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=18");
$program12_resource18_batch = $stmt->fetchColumn();

//Product 12, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=19");
$program12_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=19");
$program12_resource19_batch = $stmt->fetchColumn();

//Product 12, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=12 and resource_id=20");
$program12_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=12 and resource_id=20");
$program12_resource20_batch = $stmt->fetchColumn();

//-------Product 13
//Product 13, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=13");
$program13 = $stmt->fetchColumn();

//Product 13, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=1");
$program13_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=1");
$program13_resource1_batch = $stmt->fetchColumn();

//Product 13, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=2");
$program13_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=2");
$program13_resource2_batch = $stmt->fetchColumn();

//Product 13, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=3");
$program13_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=3");
$program13_resource3_batch = $stmt->fetchColumn();

//Product 13, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=4");
$program13_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=4");
$program13_resource4_batch = $stmt->fetchColumn();

//Product 13, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=5");
$program13_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=5");
$program13_resource5_batch = $stmt->fetchColumn();

//Product 13, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=6");
$program13_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=6");
$program13_resource6_batch = $stmt->fetchColumn();

//Product 13, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=7");
$program13_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=7");
$program13_resource7_batch = $stmt->fetchColumn();

//Product 13, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=8");
$program13_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=8");
$program13_resource8_batch = $stmt->fetchColumn();

//Product 13, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=9");
$program13_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=9");
$program13_resource9_batch = $stmt->fetchColumn();

//Product 13, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=10");
$program13_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=10");
$program13_resource10_batch = $stmt->fetchColumn();

//Product 13, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=11");
$program13_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=11");
$program13_resource11_batch = $stmt->fetchColumn();

//Product 13, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=12");
$program13_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=12");
$program13_resource12_batch = $stmt->fetchColumn();

//Product 13, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=13");
$program13_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=13");
$program13_resource13_batch = $stmt->fetchColumn();

//Product 13, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=14");
$program13_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=14");
$program13_resource14_batch = $stmt->fetchColumn();

//Product 13, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=15");
$program13_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=15");
$program13_resource15_batch = $stmt->fetchColumn();

//Product 13, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=16");
$program13_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=16");
$program13_resource16_batch = $stmt->fetchColumn();

//Product 13, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=17");
$program13_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=17");
$program13_resource17_batch = $stmt->fetchColumn();

//Product 13, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=18");
$program13_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=18");
$program13_resource18_batch = $stmt->fetchColumn();

//Product 13, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=19");
$program13_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=19");
$program13_resource19_batch = $stmt->fetchColumn();

//Product 13, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=13 and resource_id=20");
$program13_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=13 and resource_id=20");
$program13_resource20_batch = $stmt->fetchColumn();

//-------Product 14
//Product 14, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=14");
$program14 = $stmt->fetchColumn();

//Product 14, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=1");
$program14_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=1");
$program14_resource1_batch = $stmt->fetchColumn();

//Product 14, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=2");
$program14_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=2");
$program14_resource2_batch = $stmt->fetchColumn();

//Product 14, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=3");
$program14_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=3");
$program14_resource3_batch = $stmt->fetchColumn();

//Product 14, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=4");
$program14_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=4");
$program14_resource4_batch = $stmt->fetchColumn();

//Product 14, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=5");
$program14_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=5");
$program14_resource5_batch = $stmt->fetchColumn();

//Product 14, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=6");
$program14_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=6");
$program14_resource6_batch = $stmt->fetchColumn();

//Product 14, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=7");
$program14_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=7");
$program14_resource7_batch = $stmt->fetchColumn();

//Product 14, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=8");
$program14_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=8");
$program14_resource8_batch = $stmt->fetchColumn();

//Product 14, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=9");
$program14_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=9");
$program14_resource9_batch = $stmt->fetchColumn();

//Product 14, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=10");
$program14_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=10");
$program14_resource10_batch = $stmt->fetchColumn();

//Product 14, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=11");
$program14_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=11");
$program14_resource11_batch = $stmt->fetchColumn();

//Product 14, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=12");
$program14_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=12");
$program14_resource12_batch = $stmt->fetchColumn();

//Product 14, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=13");
$program14_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=13");
$program14_resource13_batch = $stmt->fetchColumn();

//Product 14, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=14");
$program14_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=14");
$program14_resource14_batch = $stmt->fetchColumn();

//Product 14, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=15");
$program14_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=15");
$program14_resource15_batch = $stmt->fetchColumn();

//Product 14, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=16");
$program14_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=16");
$program14_resource16_batch = $stmt->fetchColumn();

//Product 14, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=17");
$program14_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=17");
$program14_resource17_batch = $stmt->fetchColumn();

//Product 14, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=18");
$program14_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=18");
$program14_resource18_batch = $stmt->fetchColumn();

//Product 14, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=19");
$program14_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=19");
$program14_resource19_batch = $stmt->fetchColumn();

//Product 14, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=14 and resource_id=20");
$program14_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=14 and resource_id=20");
$program14_resource20_batch = $stmt->fetchColumn();

//-------Product 15
//Product 15, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=15");
$program15 = $stmt->fetchColumn();

//Product 15, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=1");
$program15_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=1");
$program15_resource1_batch = $stmt->fetchColumn();

//Product 15, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=2");
$program15_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=2");
$program15_resource2_batch = $stmt->fetchColumn();

//Product 15, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=3");
$program15_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=3");
$program15_resource3_batch = $stmt->fetchColumn();

//Product 15, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=4");
$program15_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=4");
$program15_resource4_batch = $stmt->fetchColumn();

//Product 15, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=5");
$program15_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=5");
$program15_resource5_batch = $stmt->fetchColumn();

//Product 15, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=6");
$program15_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=6");
$program15_resource6_batch = $stmt->fetchColumn();

//Product 15, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=7");
$program15_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=7");
$program15_resource7_batch = $stmt->fetchColumn();

//Product 15, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=8");
$program15_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=8");
$program15_resource8_batch = $stmt->fetchColumn();

//Product 15, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=9");
$program15_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=9");
$program15_resource9_batch = $stmt->fetchColumn();

//Product 15, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=10");
$program15_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=10");
$program15_resource10_batch = $stmt->fetchColumn();

//Product 15, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=11");
$program15_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=11");
$program15_resource11_batch = $stmt->fetchColumn();

//Product 15, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=12");
$program15_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=12");
$program15_resource12_batch = $stmt->fetchColumn();

//Product 15, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=13");
$program15_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=13");
$program15_resource13_batch = $stmt->fetchColumn();

//Product 15, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=14");
$program15_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=14");
$program15_resource14_batch = $stmt->fetchColumn();

//Product 15, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=15");
$program15_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=15");
$program15_resource15_batch = $stmt->fetchColumn();

//Product 15, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=16");
$program15_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=16");
$program15_resource16_batch = $stmt->fetchColumn();

//Product 15, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=17");
$program15_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=17");
$program15_resource17_batch = $stmt->fetchColumn();

//Product 15, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=18");
$program15_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=18");
$program15_resource18_batch = $stmt->fetchColumn();

//Product 15, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=19");
$program15_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=19");
$program15_resource19_batch = $stmt->fetchColumn();

//Product 15, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=15 and resource_id=20");
$program15_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=15 and resource_id=20");
$program15_resource20_batch = $stmt->fetchColumn();

//-------Product 16
//Product 16, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=16");
$program16 = $stmt->fetchColumn();

//Product 16, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=1");
$program16_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=1");
$program16_resource1_batch = $stmt->fetchColumn();

//Product 16, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=2");
$program16_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=2");
$program16_resource2_batch = $stmt->fetchColumn();

//Product 16, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=3");
$program16_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=3");
$program16_resource3_batch = $stmt->fetchColumn();

//Product 16, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=4");
$program16_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=4");
$program16_resource4_batch = $stmt->fetchColumn();

//Product 16, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=5");
$program16_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=5");
$program16_resource5_batch = $stmt->fetchColumn();

//Product 16, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=6");
$program16_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=6");
$program16_resource6_batch = $stmt->fetchColumn();

//Product 16, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=7");
$program16_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=7");
$program16_resource7_batch = $stmt->fetchColumn();

//Product 16, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=8");
$program16_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=8");
$program16_resource8_batch = $stmt->fetchColumn();

//Product 16, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=9");
$program16_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=9");
$program16_resource9_batch = $stmt->fetchColumn();

//Product 16, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=10");
$program16_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=10");
$program16_resource10_batch = $stmt->fetchColumn();

//Product 16, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=11");
$program16_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=11");
$program16_resource11_batch = $stmt->fetchColumn();

//Product 16, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=12");
$program16_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=12");
$program16_resource12_batch = $stmt->fetchColumn();

//Product 16, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=13");
$program16_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=13");
$program16_resource13_batch = $stmt->fetchColumn();

//Product 16, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=14");
$program16_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=14");
$program16_resource14_batch = $stmt->fetchColumn();

//Product 16, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=15");
$program16_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=15");
$program16_resource15_batch = $stmt->fetchColumn();

//Product 16, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=16");
$program16_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=16");
$program16_resource16_batch = $stmt->fetchColumn();

//Product 16, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=17");
$program16_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=17");
$program16_resource17_batch = $stmt->fetchColumn();

//Product 16, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=18");
$program16_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=18");
$program16_resource18_batch = $stmt->fetchColumn();

//Product 16, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=19");
$program16_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=19");
$program16_resource19_batch = $stmt->fetchColumn();

//Product 16, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=16 and resource_id=20");
$program16_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=16 and resource_id=20");
$program16_resource20_batch = $stmt->fetchColumn();

//-------Product 17
//Product 17, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=17");
$program17 = $stmt->fetchColumn();

//Product 17, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=1");
$program17_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=1");
$program17_resource1_batch = $stmt->fetchColumn();

//Product 17, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=2");
$program17_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=2");
$program17_resource2_batch = $stmt->fetchColumn();

//Product 17, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=3");
$program17_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=3");
$program17_resource3_batch = $stmt->fetchColumn();

//Product 17, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=4");
$program17_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=4");
$program17_resource4_batch = $stmt->fetchColumn();

//Product 17, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=5");
$program17_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=5");
$program17_resource5_batch = $stmt->fetchColumn();

//Product 17, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=6");
$program17_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=6");
$program17_resource6_batch = $stmt->fetchColumn();

//Product 17, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=7");
$program17_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=7");
$program17_resource7_batch = $stmt->fetchColumn();

//Product 17, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=8");
$program17_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=8");
$program17_resource8_batch = $stmt->fetchColumn();

//Product 17, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=9");
$program17_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=9");
$program17_resource9_batch = $stmt->fetchColumn();

//Product 17, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=10");
$program17_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=10");
$program17_resource10_batch = $stmt->fetchColumn();

//Product 17, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=11");
$program17_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=11");
$program17_resource11_batch = $stmt->fetchColumn();

//Product 17, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=12");
$program17_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=12");
$program17_resource12_batch = $stmt->fetchColumn();

//Product 17, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=13");
$program17_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=13");
$program17_resource13_batch = $stmt->fetchColumn();

//Product 17, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=14");
$program17_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=14");
$program17_resource14_batch = $stmt->fetchColumn();

//Product 17, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=15");
$program17_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=15");
$program17_resource15_batch = $stmt->fetchColumn();

//Product 17, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=16");
$program17_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=16");
$program17_resource16_batch = $stmt->fetchColumn();

//Product 17, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=17");
$program17_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=17");
$program17_resource17_batch = $stmt->fetchColumn();

//Product 17, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=18");
$program17_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=18");
$program17_resource18_batch = $stmt->fetchColumn();

//Product 17, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=19");
$program17_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=19");
$program17_resource19_batch = $stmt->fetchColumn();

//Product 17, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=17 and resource_id=20");
$program17_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=17 and resource_id=20");
$program17_resource20_batch = $stmt->fetchColumn();

//-------Product 18
//Product 18, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=18");
$program18 = $stmt->fetchColumn();

//Product 18, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=1");
$program18_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=1");
$program18_resource1_batch = $stmt->fetchColumn();

//Product 18, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=2");
$program18_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=2");
$program18_resource2_batch = $stmt->fetchColumn();

//Product 18, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=3");
$program18_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=3");
$program18_resource3_batch = $stmt->fetchColumn();

//Product 18, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=4");
$program18_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=4");
$program18_resource4_batch = $stmt->fetchColumn();

//Product 18, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=5");
$program18_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=5");
$program18_resource5_batch = $stmt->fetchColumn();

//Product 18, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=6");
$program18_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=6");
$program18_resource6_batch = $stmt->fetchColumn();

//Product 18, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=7");
$program18_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=7");
$program18_resource7_batch = $stmt->fetchColumn();

//Product 18, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=8");
$program18_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=8");
$program18_resource8_batch = $stmt->fetchColumn();

//Product 18, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=9");
$program18_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=9");
$program18_resource9_batch = $stmt->fetchColumn();

//Product 18, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=10");
$program18_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=10");
$program18_resource10_batch = $stmt->fetchColumn();

//Product 18, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=11");
$program18_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=11");
$program18_resource11_batch = $stmt->fetchColumn();

//Product 18, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=12");
$program18_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=12");
$program18_resource12_batch = $stmt->fetchColumn();

//Product 18, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=13");
$program18_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=13");
$program18_resource13_batch = $stmt->fetchColumn();

//Product 18, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=14");
$program18_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=14");
$program18_resource14_batch = $stmt->fetchColumn();

//Product 18, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=15");
$program18_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=15");
$program18_resource15_batch = $stmt->fetchColumn();

//Product 18, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=16");
$program18_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=16");
$program18_resource16_batch = $stmt->fetchColumn();

//Product 18, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=17");
$program18_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=17");
$program18_resource17_batch = $stmt->fetchColumn();

//Product 18, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=18");
$program18_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=18");
$program18_resource18_batch = $stmt->fetchColumn();

//Product 18, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=19");
$program18_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=19");
$program18_resource19_batch = $stmt->fetchColumn();

//Product 18, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=18 and resource_id=20");
$program18_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=18 and resource_id=20");
$program18_resource20_batch = $stmt->fetchColumn();

//-------Product 19
//Product 19, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=19");
$program19 = $stmt->fetchColumn();

//Product 19, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=1");
$program19_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=1");
$program19_resource1_batch = $stmt->fetchColumn();

//Product 19, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=2");
$program19_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=2");
$program19_resource2_batch = $stmt->fetchColumn();

//Product 19, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=3");
$program19_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=3");
$program19_resource3_batch = $stmt->fetchColumn();

//Product 19, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=4");
$program19_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=4");
$program19_resource4_batch = $stmt->fetchColumn();

//Product 19, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=5");
$program19_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=5");
$program19_resource5_batch = $stmt->fetchColumn();

//Product 19, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=6");
$program19_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=6");
$program19_resource6_batch = $stmt->fetchColumn();

//Product 19, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=7");
$program19_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=7");
$program19_resource7_batch = $stmt->fetchColumn();

//Product 19, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=8");
$program19_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=8");
$program19_resource8_batch = $stmt->fetchColumn();

//Product 19, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=9");
$program19_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=9");
$program19_resource9_batch = $stmt->fetchColumn();

//Product 19, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=10");
$program19_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=10");
$program19_resource10_batch = $stmt->fetchColumn();

//Product 19, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=11");
$program19_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=11");
$program19_resource11_batch = $stmt->fetchColumn();

//Product 19, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=12");
$program19_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=12");
$program19_resource12_batch = $stmt->fetchColumn();

//Product 19, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=13");
$program19_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=13");
$program19_resource13_batch = $stmt->fetchColumn();

//Product 19, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=14");
$program19_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=14");
$program19_resource14_batch = $stmt->fetchColumn();

//Product 19, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=15");
$program19_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=15");
$program19_resource15_batch = $stmt->fetchColumn();

//Product 19, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=16");
$program19_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=16");
$program19_resource16_batch = $stmt->fetchColumn();

//Product 19, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=17");
$program19_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=17");
$program19_resource17_batch = $stmt->fetchColumn();

//Product 19, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=18");
$program19_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=18");
$program19_resource18_batch = $stmt->fetchColumn();

//Product 19, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=19");
$program19_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=19");
$program19_resource19_batch = $stmt->fetchColumn();

//Product 19, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=19 and resource_id=20");
$program19_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=19 and resource_id=20");
$program19_resource20_batch = $stmt->fetchColumn();

//-------Product 20
//Product 20, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=20");
$program20 = $stmt->fetchColumn();

//Product 20, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=1");
$program20_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=1");
$program20_resource1_batch = $stmt->fetchColumn();

//Product 20, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=2");
$program20_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=2");
$program20_resource2_batch = $stmt->fetchColumn();

//Product 20, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=3");
$program20_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=3");
$program20_resource3_batch = $stmt->fetchColumn();

//Product 20, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=4");
$program20_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=4");
$program20_resource4_batch = $stmt->fetchColumn();

//Product 20, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=5");
$program20_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=5");
$program20_resource5_batch = $stmt->fetchColumn();

//Product 20, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=6");
$program20_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=6");
$program20_resource6_batch = $stmt->fetchColumn();

//Product 20, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=7");
$program20_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=7");
$program20_resource7_batch = $stmt->fetchColumn();

//Product 20, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=8");
$program20_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=8");
$program20_resource8_batch = $stmt->fetchColumn();

//Product 20, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=9");
$program20_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=9");
$program20_resource9_batch = $stmt->fetchColumn();

//Product 20, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=10");
$program20_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=10");
$program20_resource10_batch = $stmt->fetchColumn();

//Product 20, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=11");
$program20_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=11");
$program20_resource11_batch = $stmt->fetchColumn();

//Product 20, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=12");
$program20_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=12");
$program20_resource12_batch = $stmt->fetchColumn();

//Product 20, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=13");
$program20_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=13");
$program20_resource13_batch = $stmt->fetchColumn();

//Product 20, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=14");
$program20_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=14");
$program20_resource14_batch = $stmt->fetchColumn();

//Product 20, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=15");
$program20_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=15");
$program20_resource15_batch = $stmt->fetchColumn();

//Product 20, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=16");
$program20_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=16");
$program20_resource16_batch = $stmt->fetchColumn();

//Product 20, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=17");
$program20_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=17");
$program20_resource17_batch = $stmt->fetchColumn();

//Product 20, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=18");
$program20_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=18");
$program20_resource18_batch = $stmt->fetchColumn();

//Product 20, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=19");
$program20_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=19");
$program20_resource19_batch = $stmt->fetchColumn();

//Product 20, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=20 and resource_id=20");
$program20_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=20 and resource_id=20");
$program20_resource20_batch = $stmt->fetchColumn();

//-------Product 21
//Product 21, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=21");
$program21 = $stmt->fetchColumn();

//Product 21, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=1");
$program21_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=1");
$program21_resource1_batch = $stmt->fetchColumn();

//Product 21, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=2");
$program21_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=2");
$program21_resource2_batch = $stmt->fetchColumn();

//Product 21, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=3");
$program21_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=3");
$program21_resource3_batch = $stmt->fetchColumn();

//Product 21, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=4");
$program21_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=4");
$program21_resource4_batch = $stmt->fetchColumn();

//Product 21, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=5");
$program21_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=5");
$program21_resource5_batch = $stmt->fetchColumn();

//Product 21, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=6");
$program21_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=6");
$program21_resource6_batch = $stmt->fetchColumn();

//Product 21, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=7");
$program21_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=7");
$program21_resource7_batch = $stmt->fetchColumn();

//Product 21, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=8");
$program21_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=8");
$program21_resource8_batch = $stmt->fetchColumn();

//Product 21, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=9");
$program21_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=9");
$program21_resource9_batch = $stmt->fetchColumn();

//Product 21, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=10");
$program21_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=10");
$program21_resource10_batch = $stmt->fetchColumn();

//Product 21, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=11");
$program21_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=11");
$program21_resource11_batch = $stmt->fetchColumn();

//Product 21, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=12");
$program21_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=12");
$program21_resource12_batch = $stmt->fetchColumn();

//Product 21, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=13");
$program21_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=13");
$program21_resource13_batch = $stmt->fetchColumn();

//Product 21, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=14");
$program21_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=14");
$program21_resource14_batch = $stmt->fetchColumn();

//Product 21, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=15");
$program21_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=15");
$program21_resource15_batch = $stmt->fetchColumn();

//Product 21, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=16");
$program21_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=16");
$program21_resource16_batch = $stmt->fetchColumn();

//Product 21, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=17");
$program21_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=17");
$program21_resource17_batch = $stmt->fetchColumn();

//Product 21, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=18");
$program21_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=18");
$program21_resource18_batch = $stmt->fetchColumn();

//Product 21, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=19");
$program21_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=19");
$program21_resource19_batch = $stmt->fetchColumn();

//Product 21, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=21 and resource_id=20");
$program21_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=21 and resource_id=20");
$program21_resource20_batch = $stmt->fetchColumn();

//-------Product 22
//Product 22, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=22");
$program22 = $stmt->fetchColumn();

//Product 22, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=1");
$program22_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=1");
$program22_resource1_batch = $stmt->fetchColumn();

//Product 22, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=2");
$program22_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=2");
$program22_resource2_batch = $stmt->fetchColumn();

//Product 22, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=3");
$program22_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=3");
$program22_resource3_batch = $stmt->fetchColumn();

//Product 22, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=4");
$program22_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=4");
$program22_resource4_batch = $stmt->fetchColumn();

//Product 22, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=5");
$program22_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=5");
$program22_resource5_batch = $stmt->fetchColumn();

//Product 22, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=6");
$program22_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=6");
$program22_resource6_batch = $stmt->fetchColumn();

//Product 22, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=7");
$program22_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=7");
$program22_resource7_batch = $stmt->fetchColumn();

//Product 22, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=8");
$program22_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=8");
$program22_resource8_batch = $stmt->fetchColumn();

//Product 22, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=9");
$program22_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=9");
$program22_resource9_batch = $stmt->fetchColumn();

//Product 22, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=10");
$program22_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=10");
$program22_resource10_batch = $stmt->fetchColumn();

//Product 22, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=11");
$program22_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=11");
$program22_resource11_batch = $stmt->fetchColumn();

//Product 22, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=12");
$program22_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=12");
$program22_resource12_batch = $stmt->fetchColumn();

//Product 22, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=13");
$program22_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=13");
$program22_resource13_batch = $stmt->fetchColumn();

//Product 22, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=14");
$program22_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=14");
$program22_resource14_batch = $stmt->fetchColumn();

//Product 22, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=15");
$program22_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=15");
$program22_resource15_batch = $stmt->fetchColumn();

//Product 22, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=16");
$program22_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=16");
$program22_resource16_batch = $stmt->fetchColumn();

//Product 22, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=17");
$program22_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=17");
$program22_resource17_batch = $stmt->fetchColumn();

//Product 22, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=18");
$program22_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=18");
$program22_resource18_batch = $stmt->fetchColumn();

//Product 22, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=19");
$program22_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=19");
$program22_resource19_batch = $stmt->fetchColumn();

//Product 22, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=22 and resource_id=20");
$program22_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=22 and resource_id=20");
$program22_resource20_batch = $stmt->fetchColumn();

//-------Product 23
//Product 23, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=23");
$program23 = $stmt->fetchColumn();

//Product 23, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=1");
$program23_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=1");
$program23_resource1_batch = $stmt->fetchColumn();

//Product 23, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=2");
$program23_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=2");
$program23_resource2_batch = $stmt->fetchColumn();

//Product 23, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=3");
$program23_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=3");
$program23_resource3_batch = $stmt->fetchColumn();

//Product 23, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=4");
$program23_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=4");
$program23_resource4_batch = $stmt->fetchColumn();

//Product 23, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=5");
$program23_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=5");
$program23_resource5_batch = $stmt->fetchColumn();

//Product 23, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=6");
$program23_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=6");
$program23_resource6_batch = $stmt->fetchColumn();

//Product 23, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=7");
$program23_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=7");
$program23_resource7_batch = $stmt->fetchColumn();

//Product 23, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=8");
$program23_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=8");
$program23_resource8_batch = $stmt->fetchColumn();

//Product 23, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=9");
$program23_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=9");
$program23_resource9_batch = $stmt->fetchColumn();

//Product 23, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=10");
$program23_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=10");
$program23_resource10_batch = $stmt->fetchColumn();

//Product 23, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=11");
$program23_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=11");
$program23_resource11_batch = $stmt->fetchColumn();

//Product 23, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=12");
$program23_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=12");
$program23_resource12_batch = $stmt->fetchColumn();

//Product 23, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=13");
$program23_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=13");
$program23_resource13_batch = $stmt->fetchColumn();

//Product 23, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=14");
$program23_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=14");
$program23_resource14_batch = $stmt->fetchColumn();

//Product 23, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=15");
$program23_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=15");
$program23_resource15_batch = $stmt->fetchColumn();

//Product 23, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=16");
$program23_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=16");
$program23_resource16_batch = $stmt->fetchColumn();

//Product 23, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=17");
$program23_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=17");
$program23_resource17_batch = $stmt->fetchColumn();

//Product 23, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=18");
$program23_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=18");
$program23_resource18_batch = $stmt->fetchColumn();

//Product 23, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=19");
$program23_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=19");
$program23_resource19_batch = $stmt->fetchColumn();

//Product 23, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=23 and resource_id=20");
$program23_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=23 and resource_id=20");
$program23_resource20_batch = $stmt->fetchColumn();

//-------Product 24
//Product 24, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=24");
$program24 = $stmt->fetchColumn();

//Product 24, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=1");
$program24_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=1");
$program24_resource1_batch = $stmt->fetchColumn();

//Product 24, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=2");
$program24_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=2");
$program24_resource2_batch = $stmt->fetchColumn();

//Product 24, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=3");
$program24_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=3");
$program24_resource3_batch = $stmt->fetchColumn();

//Product 24, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=4");
$program24_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=4");
$program24_resource4_batch = $stmt->fetchColumn();

//Product 24, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=5");
$program24_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=5");
$program24_resource5_batch = $stmt->fetchColumn();

//Product 24, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=6");
$program24_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=6");
$program24_resource6_batch = $stmt->fetchColumn();

//Product 24, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=7");
$program24_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=7");
$program24_resource7_batch = $stmt->fetchColumn();

//Product 24, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=8");
$program24_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=8");
$program24_resource8_batch = $stmt->fetchColumn();

//Product 24, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=9");
$program24_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=9");
$program24_resource9_batch = $stmt->fetchColumn();

//Product 24, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=10");
$program24_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=10");
$program24_resource10_batch = $stmt->fetchColumn();

//Product 24, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=11");
$program24_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=11");
$program24_resource11_batch = $stmt->fetchColumn();

//Product 24, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=12");
$program24_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=12");
$program24_resource12_batch = $stmt->fetchColumn();

//Product 24, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=13");
$program24_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=13");
$program24_resource13_batch = $stmt->fetchColumn();

//Product 24, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=14");
$program24_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=14");
$program24_resource14_batch = $stmt->fetchColumn();

//Product 24, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=15");
$program24_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=15");
$program24_resource15_batch = $stmt->fetchColumn();

//Product 24, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=16");
$program24_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=16");
$program24_resource16_batch = $stmt->fetchColumn();

//Product 24, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=17");
$program24_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=17");
$program24_resource17_batch = $stmt->fetchColumn();

//Product 24, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=18");
$program24_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=18");
$program24_resource18_batch = $stmt->fetchColumn();

//Product 24, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=19");
$program24_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=19");
$program24_resource19_batch = $stmt->fetchColumn();

//Product 24, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=24 and resource_id=20");
$program24_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=24 and resource_id=20");
$program24_resource20_batch = $stmt->fetchColumn();

//-------Product 25
//Product 25, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=25");
$program25 = $stmt->fetchColumn();

//Product 25, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=1");
$program25_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=1");
$program25_resource1_batch = $stmt->fetchColumn();

//Product 25, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=2");
$program25_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=2");
$program25_resource2_batch = $stmt->fetchColumn();

//Product 25, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=3");
$program25_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=3");
$program25_resource3_batch = $stmt->fetchColumn();

//Product 25, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=4");
$program25_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=4");
$program25_resource4_batch = $stmt->fetchColumn();

//Product 25, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=5");
$program25_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=5");
$program25_resource5_batch = $stmt->fetchColumn();

//Product 25, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=6");
$program25_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=6");
$program25_resource6_batch = $stmt->fetchColumn();

//Product 25, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=7");
$program25_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=7");
$program25_resource7_batch = $stmt->fetchColumn();

//Product 25, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=8");
$program25_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=8");
$program25_resource8_batch = $stmt->fetchColumn();

//Product 25, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=9");
$program25_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=9");
$program25_resource9_batch = $stmt->fetchColumn();

//Product 25, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=10");
$program25_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=10");
$program25_resource10_batch = $stmt->fetchColumn();

//Product 25, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=11");
$program25_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=11");
$program25_resource11_batch = $stmt->fetchColumn();

//Product 25, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=12");
$program25_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=12");
$program25_resource12_batch = $stmt->fetchColumn();

//Product 25, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=13");
$program25_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=13");
$program25_resource13_batch = $stmt->fetchColumn();

//Product 25, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=14");
$program25_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=14");
$program25_resource14_batch = $stmt->fetchColumn();

//Product 25, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=15");
$program25_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=15");
$program25_resource15_batch = $stmt->fetchColumn();

//Product 25, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=16");
$program25_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=16");
$program25_resource16_batch = $stmt->fetchColumn();

//Product 25, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=17");
$program25_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=17");
$program25_resource17_batch = $stmt->fetchColumn();

//Product 25, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=18");
$program25_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=18");
$program25_resource18_batch = $stmt->fetchColumn();

//Product 25, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=19");
$program25_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=19");
$program25_resource19_batch = $stmt->fetchColumn();

//Product 25, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=25 and resource_id=20");
$program25_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=25 and resource_id=20");
$program25_resource20_batch = $stmt->fetchColumn();

//-------Product 26
//Product 26, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=26");
$program26 = $stmt->fetchColumn();

//Product 26, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=1");
$program26_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=1");
$program26_resource1_batch = $stmt->fetchColumn();

//Product 26, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=2");
$program26_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=2");
$program26_resource2_batch = $stmt->fetchColumn();

//Product 26, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=3");
$program26_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=3");
$program26_resource3_batch = $stmt->fetchColumn();

//Product 26, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=4");
$program26_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=4");
$program26_resource4_batch = $stmt->fetchColumn();

//Product 26, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=5");
$program26_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=5");
$program26_resource5_batch = $stmt->fetchColumn();

//Product 26, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=6");
$program26_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=6");
$program26_resource6_batch = $stmt->fetchColumn();

//Product 26, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=7");
$program26_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=7");
$program26_resource7_batch = $stmt->fetchColumn();

//Product 26, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=8");
$program26_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=8");
$program26_resource8_batch = $stmt->fetchColumn();

//Product 26, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=9");
$program26_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=9");
$program26_resource9_batch = $stmt->fetchColumn();

//Product 26, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=10");
$program26_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=10");
$program26_resource10_batch = $stmt->fetchColumn();

//Product 26, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=11");
$program26_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=11");
$program26_resource11_batch = $stmt->fetchColumn();

//Product 26, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=12");
$program26_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=12");
$program26_resource12_batch = $stmt->fetchColumn();

//Product 26, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=13");
$program26_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=13");
$program26_resource13_batch = $stmt->fetchColumn();

//Product 26, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=14");
$program26_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=14");
$program26_resource14_batch = $stmt->fetchColumn();

//Product 26, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=15");
$program26_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=15");
$program26_resource15_batch = $stmt->fetchColumn();

//Product 26, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=16");
$program26_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=16");
$program26_resource16_batch = $stmt->fetchColumn();

//Product 26, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=17");
$program26_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=17");
$program26_resource17_batch = $stmt->fetchColumn();

//Product 26, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=18");
$program26_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=18");
$program26_resource18_batch = $stmt->fetchColumn();

//Product 26, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=19");
$program26_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=19");
$program26_resource19_batch = $stmt->fetchColumn();

//Product 26, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=26 and resource_id=20");
$program26_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=26 and resource_id=20");
$program26_resource20_batch = $stmt->fetchColumn();

//-------Product 27
//Product 27, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=27");
$program27 = $stmt->fetchColumn();

//Product 27, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=1");
$program27_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=1");
$program27_resource1_batch = $stmt->fetchColumn();

//Product 27, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=2");
$program27_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=2");
$program27_resource2_batch = $stmt->fetchColumn();

//Product 27, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=3");
$program27_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=3");
$program27_resource3_batch = $stmt->fetchColumn();

//Product 27, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=4");
$program27_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=4");
$program27_resource4_batch = $stmt->fetchColumn();

//Product 27, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=5");
$program27_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=5");
$program27_resource5_batch = $stmt->fetchColumn();

//Product 27, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=6");
$program27_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=6");
$program27_resource6_batch = $stmt->fetchColumn();

//Product 27, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=7");
$program27_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=7");
$program27_resource7_batch = $stmt->fetchColumn();

//Product 27, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=8");
$program27_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=8");
$program27_resource8_batch = $stmt->fetchColumn();

//Product 27, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=9");
$program27_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=9");
$program27_resource9_batch = $stmt->fetchColumn();

//Product 27, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=10");
$program27_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=10");
$program27_resource10_batch = $stmt->fetchColumn();

//Product 27, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=11");
$program27_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=11");
$program27_resource11_batch = $stmt->fetchColumn();

//Product 27, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=12");
$program27_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=12");
$program27_resource12_batch = $stmt->fetchColumn();

//Product 27, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=13");
$program27_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=13");
$program27_resource13_batch = $stmt->fetchColumn();

//Product 27, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=14");
$program27_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=14");
$program27_resource14_batch = $stmt->fetchColumn();

//Product 27, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=15");
$program27_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=15");
$program27_resource15_batch = $stmt->fetchColumn();

//Product 27, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=16");
$program27_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=16");
$program27_resource16_batch = $stmt->fetchColumn();

//Product 27, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=17");
$program27_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=17");
$program27_resource17_batch = $stmt->fetchColumn();

//Product 27, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=18");
$program27_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=18");
$program27_resource18_batch = $stmt->fetchColumn();

//Product 27, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=19");
$program27_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=19");
$program27_resource19_batch = $stmt->fetchColumn();

//Product 27, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=27 and resource_id=20");
$program27_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=27 and resource_id=20");
$program27_resource20_batch = $stmt->fetchColumn();

//-------Product 28
//Product 28, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=28");
$program28 = $stmt->fetchColumn();

//Product 28, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=1");
$program28_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=1");
$program28_resource1_batch = $stmt->fetchColumn();

//Product 28, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=2");
$program28_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=2");
$program28_resource2_batch = $stmt->fetchColumn();

//Product 28, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=3");
$program28_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=3");
$program28_resource3_batch = $stmt->fetchColumn();

//Product 28, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=4");
$program28_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=4");
$program28_resource4_batch = $stmt->fetchColumn();

//Product 28, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=5");
$program28_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=5");
$program28_resource5_batch = $stmt->fetchColumn();

//Product 28, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=6");
$program28_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=6");
$program28_resource6_batch = $stmt->fetchColumn();

//Product 28, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=7");
$program28_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=7");
$program28_resource7_batch = $stmt->fetchColumn();

//Product 28, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=8");
$program28_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=8");
$program28_resource8_batch = $stmt->fetchColumn();

//Product 28, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=9");
$program28_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=9");
$program28_resource9_batch = $stmt->fetchColumn();

//Product 28, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=10");
$program28_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=10");
$program28_resource10_batch = $stmt->fetchColumn();

//Product 28, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=11");
$program28_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=11");
$program28_resource11_batch = $stmt->fetchColumn();

//Product 28, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=12");
$program28_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=12");
$program28_resource12_batch = $stmt->fetchColumn();

//Product 28, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=13");
$program28_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=13");
$program28_resource13_batch = $stmt->fetchColumn();

//Product 28, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=14");
$program28_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=14");
$program28_resource14_batch = $stmt->fetchColumn();

//Product 28, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=15");
$program28_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=15");
$program28_resource15_batch = $stmt->fetchColumn();

//Product 28, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=16");
$program28_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=16");
$program28_resource16_batch = $stmt->fetchColumn();

//Product 28, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=17");
$program28_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=17");
$program28_resource17_batch = $stmt->fetchColumn();

//Product 28, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=18");
$program28_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=18");
$program28_resource18_batch = $stmt->fetchColumn();

//Product 28, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=19");
$program28_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=19");
$program28_resource19_batch = $stmt->fetchColumn();

//Product 28, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=28 and resource_id=20");
$program28_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=28 and resource_id=20");
$program28_resource20_batch = $stmt->fetchColumn();

//-------Product 29
//Product 29, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=29");
$program29 = $stmt->fetchColumn();

//Product 29, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=1");
$program29_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=1");
$program29_resource1_batch = $stmt->fetchColumn();

//Product 29, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=2");
$program29_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=2");
$program29_resource2_batch = $stmt->fetchColumn();

//Product 29, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=3");
$program29_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=3");
$program29_resource3_batch = $stmt->fetchColumn();

//Product 29, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=4");
$program29_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=4");
$program29_resource4_batch = $stmt->fetchColumn();

//Product 29, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=5");
$program29_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=5");
$program29_resource5_batch = $stmt->fetchColumn();

//Product 29, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=6");
$program29_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=6");
$program29_resource6_batch = $stmt->fetchColumn();

//Product 29, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=7");
$program29_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=7");
$program29_resource7_batch = $stmt->fetchColumn();

//Product 29, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=8");
$program29_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=8");
$program29_resource8_batch = $stmt->fetchColumn();

//Product 29, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=9");
$program29_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=9");
$program29_resource9_batch = $stmt->fetchColumn();

//Product 29, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=10");
$program29_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=10");
$program29_resource10_batch = $stmt->fetchColumn();

//Product 29, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=11");
$program29_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=11");
$program29_resource11_batch = $stmt->fetchColumn();

//Product 29, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=12");
$program29_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=12");
$program29_resource12_batch = $stmt->fetchColumn();

//Product 29, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=13");
$program29_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=13");
$program29_resource13_batch = $stmt->fetchColumn();

//Product 29, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=14");
$program29_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=14");
$program29_resource14_batch = $stmt->fetchColumn();

//Product 29, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=15");
$program29_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=15");
$program29_resource15_batch = $stmt->fetchColumn();

//Product 29, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=16");
$program29_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=16");
$program29_resource16_batch = $stmt->fetchColumn();

//Product 29, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=17");
$program29_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=17");
$program29_resource17_batch = $stmt->fetchColumn();

//Product 29, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=18");
$program29_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=18");
$program29_resource18_batch = $stmt->fetchColumn();

//Product 29, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=19");
$program29_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=19");
$program29_resource19_batch = $stmt->fetchColumn();

//Product 29, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=29 and resource_id=20");
$program29_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=29 and resource_id=20");
$program29_resource20_batch = $stmt->fetchColumn();

//-------Product 30
//Product 30, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=30");
$program30 = $stmt->fetchColumn();

//Product 30, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=1");
$program30_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=1");
$program30_resource1_batch = $stmt->fetchColumn();

//Product 30, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=2");
$program30_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=2");
$program30_resource2_batch = $stmt->fetchColumn();

//Product 30, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=3");
$program30_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=3");
$program30_resource3_batch = $stmt->fetchColumn();

//Product 30, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=4");
$program30_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=4");
$program30_resource4_batch = $stmt->fetchColumn();

//Product 30, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=5");
$program30_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=5");
$program30_resource5_batch = $stmt->fetchColumn();

//Product 30, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=6");
$program30_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=6");
$program30_resource6_batch = $stmt->fetchColumn();

//Product 30, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=7");
$program30_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=7");
$program30_resource7_batch = $stmt->fetchColumn();

//Product 30, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=8");
$program30_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=8");
$program30_resource8_batch = $stmt->fetchColumn();

//Product 30, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=9");
$program30_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=9");
$program30_resource9_batch = $stmt->fetchColumn();

//Product 30, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=10");
$program30_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=10");
$program30_resource10_batch = $stmt->fetchColumn();

//Product 30, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=11");
$program30_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=11");
$program30_resource11_batch = $stmt->fetchColumn();

//Product 30, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=12");
$program30_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=12");
$program30_resource12_batch = $stmt->fetchColumn();

//Product 30, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=13");
$program30_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=13");
$program30_resource13_batch = $stmt->fetchColumn();

//Product 30, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=14");
$program30_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=14");
$program30_resource14_batch = $stmt->fetchColumn();

//Product 30, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=15");
$program30_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=15");
$program30_resource15_batch = $stmt->fetchColumn();

//Product 30, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=16");
$program30_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=16");
$program30_resource16_batch = $stmt->fetchColumn();

//Product 30, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=17");
$program30_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=17");
$program30_resource17_batch = $stmt->fetchColumn();

//Product 30, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=18");
$program30_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=18");
$program30_resource18_batch = $stmt->fetchColumn();

//Product 30, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=19");
$program30_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=19");
$program30_resource19_batch = $stmt->fetchColumn();

//Product 30, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=30 and resource_id=20");
$program30_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=30 and resource_id=20");
$program30_resource20_batch = $stmt->fetchColumn();

//-------Product 31
//Product 31, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=31");
$program31 = $stmt->fetchColumn();

//Product 31, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=1");
$program31_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=1");
$program31_resource1_batch = $stmt->fetchColumn();

//Product 31, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=2");
$program31_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=2");
$program31_resource2_batch = $stmt->fetchColumn();

//Product 31, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=3");
$program31_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=3");
$program31_resource3_batch = $stmt->fetchColumn();

//Product 31, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=4");
$program31_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=4");
$program31_resource4_batch = $stmt->fetchColumn();

//Product 31, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=5");
$program31_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=5");
$program31_resource5_batch = $stmt->fetchColumn();

//Product 31, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=6");
$program31_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=6");
$program31_resource6_batch = $stmt->fetchColumn();

//Product 31, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=7");
$program31_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=7");
$program31_resource7_batch = $stmt->fetchColumn();

//Product 31, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=8");
$program31_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=8");
$program31_resource8_batch = $stmt->fetchColumn();

//Product 31, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=9");
$program31_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=9");
$program31_resource9_batch = $stmt->fetchColumn();

//Product 31, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=10");
$program31_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=10");
$program31_resource10_batch = $stmt->fetchColumn();

//Product 31, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=11");
$program31_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=11");
$program31_resource11_batch = $stmt->fetchColumn();

//Product 31, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=12");
$program31_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=12");
$program31_resource12_batch = $stmt->fetchColumn();

//Product 31, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=13");
$program31_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=13");
$program31_resource13_batch = $stmt->fetchColumn();

//Product 31, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=14");
$program31_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=14");
$program31_resource14_batch = $stmt->fetchColumn();

//Product 31, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=15");
$program31_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=15");
$program31_resource15_batch = $stmt->fetchColumn();

//Product 31, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=16");
$program31_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=16");
$program31_resource16_batch = $stmt->fetchColumn();

//Product 31, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=17");
$program31_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=17");
$program31_resource17_batch = $stmt->fetchColumn();

//Product 31, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=18");
$program31_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=18");
$program31_resource18_batch = $stmt->fetchColumn();

//Product 31, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=19");
$program31_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=19");
$program31_resource19_batch = $stmt->fetchColumn();

//Product 31, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=31 and resource_id=20");
$program31_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=31 and resource_id=20");
$program31_resource20_batch = $stmt->fetchColumn();

//-------Product 32
//Product 32, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=32");
$program32 = $stmt->fetchColumn();

//Product 32, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=1");
$program32_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=1");
$program32_resource1_batch = $stmt->fetchColumn();

//Product 32, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=2");
$program32_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=2");
$program32_resource2_batch = $stmt->fetchColumn();

//Product 32, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=3");
$program32_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=3");
$program32_resource3_batch = $stmt->fetchColumn();

//Product 32, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=4");
$program32_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=4");
$program32_resource4_batch = $stmt->fetchColumn();

//Product 32, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=5");
$program32_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=5");
$program32_resource5_batch = $stmt->fetchColumn();

//Product 32, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=6");
$program32_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=6");
$program32_resource6_batch = $stmt->fetchColumn();

//Product 32, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=7");
$program32_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=7");
$program32_resource7_batch = $stmt->fetchColumn();

//Product 32, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=8");
$program32_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=8");
$program32_resource8_batch = $stmt->fetchColumn();

//Product 32, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=9");
$program32_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=9");
$program32_resource9_batch = $stmt->fetchColumn();

//Product 32, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=10");
$program32_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=10");
$program32_resource10_batch = $stmt->fetchColumn();

//Product 32, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=11");
$program32_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=11");
$program32_resource11_batch = $stmt->fetchColumn();

//Product 32, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=12");
$program32_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=12");
$program32_resource12_batch = $stmt->fetchColumn();

//Product 32, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=13");
$program32_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=13");
$program32_resource13_batch = $stmt->fetchColumn();

//Product 32, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=14");
$program32_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=14");
$program32_resource14_batch = $stmt->fetchColumn();

//Product 32, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=15");
$program32_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=15");
$program32_resource15_batch = $stmt->fetchColumn();

//Product 32, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=16");
$program32_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=16");
$program32_resource16_batch = $stmt->fetchColumn();

//Product 32, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=17");
$program32_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=17");
$program32_resource17_batch = $stmt->fetchColumn();

//Product 32, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=18");
$program32_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=18");
$program32_resource18_batch = $stmt->fetchColumn();

//Product 32, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=19");
$program32_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=19");
$program32_resource19_batch = $stmt->fetchColumn();

//Product 32, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=32 and resource_id=20");
$program32_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=32 and resource_id=20");
$program32_resource20_batch = $stmt->fetchColumn();

//-------Product 33
//Product 33, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=33");
$program33 = $stmt->fetchColumn();

//Product 33, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=1");
$program33_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=1");
$program33_resource1_batch = $stmt->fetchColumn();

//Product 33, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=2");
$program33_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=2");
$program33_resource2_batch = $stmt->fetchColumn();

//Product 33, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=3");
$program33_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=3");
$program33_resource3_batch = $stmt->fetchColumn();

//Product 33, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=4");
$program33_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=4");
$program33_resource4_batch = $stmt->fetchColumn();

//Product 33, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=5");
$program33_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=5");
$program33_resource5_batch = $stmt->fetchColumn();

//Product 33, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=6");
$program33_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=6");
$program33_resource6_batch = $stmt->fetchColumn();

//Product 33, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=7");
$program33_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=7");
$program33_resource7_batch = $stmt->fetchColumn();

//Product 33, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=8");
$program33_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=8");
$program33_resource8_batch = $stmt->fetchColumn();

//Product 33, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=9");
$program33_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=9");
$program33_resource9_batch = $stmt->fetchColumn();

//Product 33, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=10");
$program33_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=10");
$program33_resource10_batch = $stmt->fetchColumn();

//Product 33, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=11");
$program33_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=11");
$program33_resource11_batch = $stmt->fetchColumn();

//Product 33, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=12");
$program33_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=12");
$program33_resource12_batch = $stmt->fetchColumn();

//Product 33, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=13");
$program33_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=13");
$program33_resource13_batch = $stmt->fetchColumn();

//Product 33, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=14");
$program33_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=14");
$program33_resource14_batch = $stmt->fetchColumn();

//Product 33, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=15");
$program33_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=15");
$program33_resource15_batch = $stmt->fetchColumn();

//Product 33, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=16");
$program33_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=16");
$program33_resource16_batch = $stmt->fetchColumn();

//Product 33, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=17");
$program33_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=17");
$program33_resource17_batch = $stmt->fetchColumn();

//Product 33, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=18");
$program33_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=18");
$program33_resource18_batch = $stmt->fetchColumn();

//Product 33, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=19");
$program33_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=19");
$program33_resource19_batch = $stmt->fetchColumn();

//Product 33, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=33 and resource_id=20");
$program33_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=33 and resource_id=20");
$program33_resource20_batch = $stmt->fetchColumn();

//-------Product 34
//Product 34, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=34");
$program34 = $stmt->fetchColumn();

//Product 34, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=1");
$program34_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=1");
$program34_resource1_batch = $stmt->fetchColumn();

//Product 34, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=2");
$program34_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=2");
$program34_resource2_batch = $stmt->fetchColumn();

//Product 34, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=3");
$program34_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=3");
$program34_resource3_batch = $stmt->fetchColumn();

//Product 34, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=4");
$program34_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=4");
$program34_resource4_batch = $stmt->fetchColumn();

//Product 34, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=5");
$program34_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=5");
$program34_resource5_batch = $stmt->fetchColumn();

//Product 34, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=6");
$program34_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=6");
$program34_resource6_batch = $stmt->fetchColumn();

//Product 34, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=7");
$program34_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=7");
$program34_resource7_batch = $stmt->fetchColumn();

//Product 34, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=8");
$program34_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=8");
$program34_resource8_batch = $stmt->fetchColumn();

//Product 34, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=9");
$program34_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=9");
$program34_resource9_batch = $stmt->fetchColumn();

//Product 34, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=10");
$program34_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=10");
$program34_resource10_batch = $stmt->fetchColumn();

//Product 34, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=11");
$program34_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=11");
$program34_resource11_batch = $stmt->fetchColumn();

//Product 34, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=12");
$program34_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=12");
$program34_resource12_batch = $stmt->fetchColumn();

//Product 34, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=13");
$program34_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=13");
$program34_resource13_batch = $stmt->fetchColumn();

//Product 34, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=14");
$program34_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=14");
$program34_resource14_batch = $stmt->fetchColumn();

//Product 34, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=15");
$program34_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=15");
$program34_resource15_batch = $stmt->fetchColumn();

//Product 34, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=16");
$program34_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=16");
$program34_resource16_batch = $stmt->fetchColumn();

//Product 34, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=17");
$program34_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=17");
$program34_resource17_batch = $stmt->fetchColumn();

//Product 34, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=18");
$program34_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=18");
$program34_resource18_batch = $stmt->fetchColumn();

//Product 34, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=19");
$program34_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=19");
$program34_resource19_batch = $stmt->fetchColumn();

//Product 34, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=34 and resource_id=20");
$program34_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=34 and resource_id=20");
$program34_resource20_batch = $stmt->fetchColumn();

//-------Product 35
//Product 35, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=35");
$program35 = $stmt->fetchColumn();

//Product 35, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=1");
$program35_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=1");
$program35_resource1_batch = $stmt->fetchColumn();

//Product 35, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=2");
$program35_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=2");
$program35_resource2_batch = $stmt->fetchColumn();

//Product 35, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=3");
$program35_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=3");
$program35_resource3_batch = $stmt->fetchColumn();

//Product 35, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=4");
$program35_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=4");
$program35_resource4_batch = $stmt->fetchColumn();

//Product 35, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=5");
$program35_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=5");
$program35_resource5_batch = $stmt->fetchColumn();

//Product 35, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=6");
$program35_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=6");
$program35_resource6_batch = $stmt->fetchColumn();

//Product 35, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=7");
$program35_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=7");
$program35_resource7_batch = $stmt->fetchColumn();

//Product 35, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=8");
$program35_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=8");
$program35_resource8_batch = $stmt->fetchColumn();

//Product 35, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=9");
$program35_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=9");
$program35_resource9_batch = $stmt->fetchColumn();

//Product 35, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=10");
$program35_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=10");
$program35_resource10_batch = $stmt->fetchColumn();

//Product 35, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=11");
$program35_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=11");
$program35_resource11_batch = $stmt->fetchColumn();

//Product 35, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=12");
$program35_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=12");
$program35_resource12_batch = $stmt->fetchColumn();

//Product 35, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=13");
$program35_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=13");
$program35_resource13_batch = $stmt->fetchColumn();

//Product 35, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=14");
$program35_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=14");
$program35_resource14_batch = $stmt->fetchColumn();

//Product 35, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=15");
$program35_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=15");
$program35_resource15_batch = $stmt->fetchColumn();

//Product 35, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=16");
$program35_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=16");
$program35_resource16_batch = $stmt->fetchColumn();

//Product 35, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=17");
$program35_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=17");
$program35_resource17_batch = $stmt->fetchColumn();

//Product 35, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=18");
$program35_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=18");
$program35_resource18_batch = $stmt->fetchColumn();

//Product 35, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=19");
$program35_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=19");
$program35_resource19_batch = $stmt->fetchColumn();

//Product 35, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=35 and resource_id=20");
$program35_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=35 and resource_id=20");
$program35_resource20_batch = $stmt->fetchColumn();

//-------Product 36
//Product 36, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=36");
$program36 = $stmt->fetchColumn();

//Product 36, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=1");
$program36_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=1");
$program36_resource1_batch = $stmt->fetchColumn();

//Product 36, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=2");
$program36_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=2");
$program36_resource2_batch = $stmt->fetchColumn();

//Product 36, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=3");
$program36_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=3");
$program36_resource3_batch = $stmt->fetchColumn();

//Product 36, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=4");
$program36_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=4");
$program36_resource4_batch = $stmt->fetchColumn();

//Product 36, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=5");
$program36_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=5");
$program36_resource5_batch = $stmt->fetchColumn();

//Product 36, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=6");
$program36_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=6");
$program36_resource6_batch = $stmt->fetchColumn();

//Product 36, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=7");
$program36_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=7");
$program36_resource7_batch = $stmt->fetchColumn();

//Product 36, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=8");
$program36_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=8");
$program36_resource8_batch = $stmt->fetchColumn();

//Product 36, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=9");
$program36_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=9");
$program36_resource9_batch = $stmt->fetchColumn();

//Product 36, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=10");
$program36_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=10");
$program36_resource10_batch = $stmt->fetchColumn();

//Product 36, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=11");
$program36_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=11");
$program36_resource11_batch = $stmt->fetchColumn();

//Product 36, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=12");
$program36_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=12");
$program36_resource12_batch = $stmt->fetchColumn();

//Product 36, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=13");
$program36_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=13");
$program36_resource13_batch = $stmt->fetchColumn();

//Product 36, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=14");
$program36_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=14");
$program36_resource14_batch = $stmt->fetchColumn();

//Product 36, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=15");
$program36_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=15");
$program36_resource15_batch = $stmt->fetchColumn();

//Product 36, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=16");
$program36_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=16");
$program36_resource16_batch = $stmt->fetchColumn();

//Product 36, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=17");
$program36_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=17");
$program36_resource17_batch = $stmt->fetchColumn();

//Product 36, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=18");
$program36_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=18");
$program36_resource18_batch = $stmt->fetchColumn();

//Product 36, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=19");
$program36_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=19");
$program36_resource19_batch = $stmt->fetchColumn();

//Product 36, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=36 and resource_id=20");
$program36_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=36 and resource_id=20");
$program36_resource20_batch = $stmt->fetchColumn();

//-------Product 37
//Product 37, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=37");
$program37 = $stmt->fetchColumn();

//Product 37, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=1");
$program37_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=1");
$program37_resource1_batch = $stmt->fetchColumn();

//Product 37, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=2");
$program37_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=2");
$program37_resource2_batch = $stmt->fetchColumn();

//Product 37, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=3");
$program37_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=3");
$program37_resource3_batch = $stmt->fetchColumn();

//Product 37, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=4");
$program37_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=4");
$program37_resource4_batch = $stmt->fetchColumn();

//Product 37, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=5");
$program37_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=5");
$program37_resource5_batch = $stmt->fetchColumn();

//Product 37, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=6");
$program37_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=6");
$program37_resource6_batch = $stmt->fetchColumn();

//Product 37, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=7");
$program37_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=7");
$program37_resource7_batch = $stmt->fetchColumn();

//Product 37, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=8");
$program37_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=8");
$program37_resource8_batch = $stmt->fetchColumn();

//Product 37, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=9");
$program37_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=9");
$program37_resource9_batch = $stmt->fetchColumn();

//Product 37, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=10");
$program37_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=10");
$program37_resource10_batch = $stmt->fetchColumn();

//Product 37, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=11");
$program37_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=11");
$program37_resource11_batch = $stmt->fetchColumn();

//Product 37, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=12");
$program37_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=12");
$program37_resource12_batch = $stmt->fetchColumn();

//Product 37, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=13");
$program37_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=13");
$program37_resource13_batch = $stmt->fetchColumn();

//Product 37, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=14");
$program37_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=14");
$program37_resource14_batch = $stmt->fetchColumn();

//Product 37, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=15");
$program37_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=15");
$program37_resource15_batch = $stmt->fetchColumn();

//Product 37, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=16");
$program37_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=16");
$program37_resource16_batch = $stmt->fetchColumn();

//Product 37, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=17");
$program37_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=17");
$program37_resource17_batch = $stmt->fetchColumn();

//Product 37, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=18");
$program37_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=18");
$program37_resource18_batch = $stmt->fetchColumn();

//Product 37, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=19");
$program37_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=19");
$program37_resource19_batch = $stmt->fetchColumn();

//Product 37, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=37 and resource_id=20");
$program37_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=37 and resource_id=20");
$program37_resource20_batch = $stmt->fetchColumn();

//-------Product 38
//Product 38, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=38");
$program38 = $stmt->fetchColumn();

//Product 38, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=1");
$program38_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=1");
$program38_resource1_batch = $stmt->fetchColumn();

//Product 38, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=2");
$program38_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=2");
$program38_resource2_batch = $stmt->fetchColumn();

//Product 38, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=3");
$program38_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=3");
$program38_resource3_batch = $stmt->fetchColumn();

//Product 38, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=4");
$program38_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=4");
$program38_resource4_batch = $stmt->fetchColumn();

//Product 38, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=5");
$program38_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=5");
$program38_resource5_batch = $stmt->fetchColumn();

//Product 38, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=6");
$program38_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=6");
$program38_resource6_batch = $stmt->fetchColumn();

//Product 38, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=7");
$program38_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=7");
$program38_resource7_batch = $stmt->fetchColumn();

//Product 38, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=8");
$program38_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=8");
$program38_resource8_batch = $stmt->fetchColumn();

//Product 38, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=9");
$program38_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=9");
$program38_resource9_batch = $stmt->fetchColumn();

//Product 38, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=10");
$program38_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=10");
$program38_resource10_batch = $stmt->fetchColumn();

//Product 38, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=11");
$program38_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=11");
$program38_resource11_batch = $stmt->fetchColumn();

//Product 38, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=12");
$program38_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=12");
$program38_resource12_batch = $stmt->fetchColumn();

//Product 38, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=13");
$program38_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=13");
$program38_resource13_batch = $stmt->fetchColumn();

//Product 38, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=14");
$program38_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=14");
$program38_resource14_batch = $stmt->fetchColumn();

//Product 38, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=15");
$program38_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=15");
$program38_resource15_batch = $stmt->fetchColumn();

//Product 38, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=16");
$program38_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=16");
$program38_resource16_batch = $stmt->fetchColumn();

//Product 38, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=17");
$program38_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=17");
$program38_resource17_batch = $stmt->fetchColumn();

//Product 38, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=18");
$program38_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=18");
$program38_resource18_batch = $stmt->fetchColumn();

//Product 38, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=19");
$program38_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=19");
$program38_resource19_batch = $stmt->fetchColumn();

//Product 38, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=38 and resource_id=20");
$program38_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=38 and resource_id=20");
$program38_resource20_batch = $stmt->fetchColumn();

//-------Product 39
//Product 39, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=39");
$program39 = $stmt->fetchColumn();

//Product 39, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=1");
$program39_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=1");
$program39_resource1_batch = $stmt->fetchColumn();

//Product 39, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=2");
$program39_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=2");
$program39_resource2_batch = $stmt->fetchColumn();

//Product 39, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=3");
$program39_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=3");
$program39_resource3_batch = $stmt->fetchColumn();

//Product 39, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=4");
$program39_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=4");
$program39_resource4_batch = $stmt->fetchColumn();

//Product 39, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=5");
$program39_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=5");
$program39_resource5_batch = $stmt->fetchColumn();

//Product 39, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=6");
$program39_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=6");
$program39_resource6_batch = $stmt->fetchColumn();

//Product 39, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=7");
$program39_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=7");
$program39_resource7_batch = $stmt->fetchColumn();

//Product 39, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=8");
$program39_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=8");
$program39_resource8_batch = $stmt->fetchColumn();

//Product 39, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=9");
$program39_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=9");
$program39_resource9_batch = $stmt->fetchColumn();

//Product 39, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=10");
$program39_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=10");
$program39_resource10_batch = $stmt->fetchColumn();

//Product 39, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=11");
$program39_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=11");
$program39_resource11_batch = $stmt->fetchColumn();

//Product 39, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=12");
$program39_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=12");
$program39_resource12_batch = $stmt->fetchColumn();

//Product 39, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=13");
$program39_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=13");
$program39_resource13_batch = $stmt->fetchColumn();

//Product 39, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=14");
$program39_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=14");
$program39_resource14_batch = $stmt->fetchColumn();

//Product 39, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=15");
$program39_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=15");
$program39_resource15_batch = $stmt->fetchColumn();

//Product 39, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=16");
$program39_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=16");
$program39_resource16_batch = $stmt->fetchColumn();

//Product 39, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=17");
$program39_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=17");
$program39_resource17_batch = $stmt->fetchColumn();

//Product 39, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=18");
$program39_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=18");
$program39_resource18_batch = $stmt->fetchColumn();

//Product 39, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=19");
$program39_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=19");
$program39_resource19_batch = $stmt->fetchColumn();

//Product 39, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=39 and resource_id=20");
$program39_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=39 and resource_id=20");
$program39_resource20_batch = $stmt->fetchColumn();

//-------Product 40
//Product 40, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=40");
$program40 = $stmt->fetchColumn();

//Product 40, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=1");
$program40_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=1");
$program40_resource1_batch = $stmt->fetchColumn();

//Product 40, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=2");
$program40_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=2");
$program40_resource2_batch = $stmt->fetchColumn();

//Product 40, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=3");
$program40_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=3");
$program40_resource3_batch = $stmt->fetchColumn();

//Product 40, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=4");
$program40_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=4");
$program40_resource4_batch = $stmt->fetchColumn();

//Product 40, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=5");
$program40_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=5");
$program40_resource5_batch = $stmt->fetchColumn();

//Product 40, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=6");
$program40_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=6");
$program40_resource6_batch = $stmt->fetchColumn();

//Product 40, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=7");
$program40_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=7");
$program40_resource7_batch = $stmt->fetchColumn();

//Product 40, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=8");
$program40_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=8");
$program40_resource8_batch = $stmt->fetchColumn();

//Product 40, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=9");
$program40_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=9");
$program40_resource9_batch = $stmt->fetchColumn();

//Product 40, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=10");
$program40_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=10");
$program40_resource10_batch = $stmt->fetchColumn();

//Product 40, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=11");
$program40_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=11");
$program40_resource11_batch = $stmt->fetchColumn();

//Product 40, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=12");
$program40_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=12");
$program40_resource12_batch = $stmt->fetchColumn();

//Product 40, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=13");
$program40_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=13");
$program40_resource13_batch = $stmt->fetchColumn();

//Product 40, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=14");
$program40_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=14");
$program40_resource14_batch = $stmt->fetchColumn();

//Product 40, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=15");
$program40_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=15");
$program40_resource15_batch = $stmt->fetchColumn();

//Product 40, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=16");
$program40_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=16");
$program40_resource16_batch = $stmt->fetchColumn();

//Product 40, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=17");
$program40_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=17");
$program40_resource17_batch = $stmt->fetchColumn();

//Product 40, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=18");
$program40_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=18");
$program40_resource18_batch = $stmt->fetchColumn();

//Product 40, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=19");
$program40_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=19");
$program40_resource19_batch = $stmt->fetchColumn();

//Product 40, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=40 and resource_id=20");
$program40_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=40 and resource_id=20");
$program40_resource20_batch = $stmt->fetchColumn();

//-------Product 41
//Product 41, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=41");
$program41 = $stmt->fetchColumn();

//Product 41, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=1");
$program41_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=1");
$program41_resource1_batch = $stmt->fetchColumn();

//Product 41, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=2");
$program41_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=2");
$program41_resource2_batch = $stmt->fetchColumn();

//Product 41, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=3");
$program41_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=3");
$program41_resource3_batch = $stmt->fetchColumn();

//Product 41, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=4");
$program41_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=4");
$program41_resource4_batch = $stmt->fetchColumn();

//Product 41, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=5");
$program41_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=5");
$program41_resource5_batch = $stmt->fetchColumn();

//Product 41, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=6");
$program41_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=6");
$program41_resource6_batch = $stmt->fetchColumn();

//Product 41, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=7");
$program41_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=7");
$program41_resource7_batch = $stmt->fetchColumn();

//Product 41, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=8");
$program41_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=8");
$program41_resource8_batch = $stmt->fetchColumn();

//Product 41, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=9");
$program41_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=9");
$program41_resource9_batch = $stmt->fetchColumn();

//Product 41, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=10");
$program41_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=10");
$program41_resource10_batch = $stmt->fetchColumn();

//Product 41, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=11");
$program41_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=11");
$program41_resource11_batch = $stmt->fetchColumn();

//Product 41, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=12");
$program41_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=12");
$program41_resource12_batch = $stmt->fetchColumn();

//Product 41, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=13");
$program41_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=13");
$program41_resource13_batch = $stmt->fetchColumn();

//Product 41, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=14");
$program41_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=14");
$program41_resource14_batch = $stmt->fetchColumn();

//Product 41, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=15");
$program41_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=15");
$program41_resource15_batch = $stmt->fetchColumn();

//Product 41, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=16");
$program41_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=16");
$program41_resource16_batch = $stmt->fetchColumn();

//Product 41, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=17");
$program41_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=17");
$program41_resource17_batch = $stmt->fetchColumn();

//Product 41, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=18");
$program41_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=18");
$program41_resource18_batch = $stmt->fetchColumn();

//Product 41, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=19");
$program41_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=19");
$program41_resource19_batch = $stmt->fetchColumn();

//Product 41, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=41 and resource_id=20");
$program41_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=41 and resource_id=20");
$program41_resource20_batch = $stmt->fetchColumn();

//-------Product 42
//Product 42, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=42");
$program42 = $stmt->fetchColumn();

//Product 42, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=1");
$program42_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=1");
$program42_resource1_batch = $stmt->fetchColumn();

//Product 42, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=2");
$program42_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=2");
$program42_resource2_batch = $stmt->fetchColumn();

//Product 42, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=3");
$program42_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=3");
$program42_resource3_batch = $stmt->fetchColumn();

//Product 42, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=4");
$program42_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=4");
$program42_resource4_batch = $stmt->fetchColumn();

//Product 42, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=5");
$program42_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=5");
$program42_resource5_batch = $stmt->fetchColumn();

//Product 42, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=6");
$program42_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=6");
$program42_resource6_batch = $stmt->fetchColumn();

//Product 42, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=7");
$program42_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=7");
$program42_resource7_batch = $stmt->fetchColumn();

//Product 42, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=8");
$program42_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=8");
$program42_resource8_batch = $stmt->fetchColumn();

//Product 42, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=9");
$program42_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=9");
$program42_resource9_batch = $stmt->fetchColumn();

//Product 42, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=10");
$program42_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=10");
$program42_resource10_batch = $stmt->fetchColumn();

//Product 42, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=11");
$program42_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=11");
$program42_resource11_batch = $stmt->fetchColumn();

//Product 42, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=12");
$program42_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=12");
$program42_resource12_batch = $stmt->fetchColumn();

//Product 42, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=13");
$program42_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=13");
$program42_resource13_batch = $stmt->fetchColumn();

//Product 42, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=14");
$program42_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=14");
$program42_resource14_batch = $stmt->fetchColumn();

//Product 42, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=15");
$program42_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=15");
$program42_resource15_batch = $stmt->fetchColumn();

//Product 42, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=16");
$program42_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=16");
$program42_resource16_batch = $stmt->fetchColumn();

//Product 42, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=17");
$program42_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=17");
$program42_resource17_batch = $stmt->fetchColumn();

//Product 42, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=18");
$program42_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=18");
$program42_resource18_batch = $stmt->fetchColumn();

//Product 42, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=19");
$program42_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=19");
$program42_resource19_batch = $stmt->fetchColumn();

//Product 42, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=42 and resource_id=20");
$program42_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=42 and resource_id=20");
$program42_resource20_batch = $stmt->fetchColumn();

//-------Product 43
//Product 43, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=43");
$program43 = $stmt->fetchColumn();

//Product 43, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=1");
$program43_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=1");
$program43_resource1_batch = $stmt->fetchColumn();

//Product 43, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=2");
$program43_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=2");
$program43_resource2_batch = $stmt->fetchColumn();

//Product 43, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=3");
$program43_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=3");
$program43_resource3_batch = $stmt->fetchColumn();

//Product 43, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=4");
$program43_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=4");
$program43_resource4_batch = $stmt->fetchColumn();

//Product 43, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=5");
$program43_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=5");
$program43_resource5_batch = $stmt->fetchColumn();

//Product 43, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=6");
$program43_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=6");
$program43_resource6_batch = $stmt->fetchColumn();

//Product 43, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=7");
$program43_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=7");
$program43_resource7_batch = $stmt->fetchColumn();

//Product 43, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=8");
$program43_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=8");
$program43_resource8_batch = $stmt->fetchColumn();

//Product 43, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=9");
$program43_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=9");
$program43_resource9_batch = $stmt->fetchColumn();

//Product 43, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=10");
$program43_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=10");
$program43_resource10_batch = $stmt->fetchColumn();

//Product 43, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=11");
$program43_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=11");
$program43_resource11_batch = $stmt->fetchColumn();

//Product 43, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=12");
$program43_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=12");
$program43_resource12_batch = $stmt->fetchColumn();

//Product 43, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=13");
$program43_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=13");
$program43_resource13_batch = $stmt->fetchColumn();

//Product 43, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=14");
$program43_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=14");
$program43_resource14_batch = $stmt->fetchColumn();

//Product 43, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=15");
$program43_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=15");
$program43_resource15_batch = $stmt->fetchColumn();

//Product 43, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=16");
$program43_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=16");
$program43_resource16_batch = $stmt->fetchColumn();

//Product 43, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=17");
$program43_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=17");
$program43_resource17_batch = $stmt->fetchColumn();

//Product 43, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=18");
$program43_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=18");
$program43_resource18_batch = $stmt->fetchColumn();

//Product 43, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=19");
$program43_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=19");
$program43_resource19_batch = $stmt->fetchColumn();

//Product 43, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=43 and resource_id=20");
$program43_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=43 and resource_id=20");
$program43_resource20_batch = $stmt->fetchColumn();

//-------Product 44
//Product 44, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=44");
$program44 = $stmt->fetchColumn();

//Product 44, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=1");
$program44_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=1");
$program44_resource1_batch = $stmt->fetchColumn();

//Product 44, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=2");
$program44_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=2");
$program44_resource2_batch = $stmt->fetchColumn();

//Product 44, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=3");
$program44_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=3");
$program44_resource3_batch = $stmt->fetchColumn();

//Product 44, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=4");
$program44_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=4");
$program44_resource4_batch = $stmt->fetchColumn();

//Product 44, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=5");
$program44_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=5");
$program44_resource5_batch = $stmt->fetchColumn();

//Product 44, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=6");
$program44_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=6");
$program44_resource6_batch = $stmt->fetchColumn();

//Product 44, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=7");
$program44_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=7");
$program44_resource7_batch = $stmt->fetchColumn();

//Product 44, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=8");
$program44_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=8");
$program44_resource8_batch = $stmt->fetchColumn();

//Product 44, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=9");
$program44_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=9");
$program44_resource9_batch = $stmt->fetchColumn();

//Product 44, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=10");
$program44_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=10");
$program44_resource10_batch = $stmt->fetchColumn();

//Product 44, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=11");
$program44_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=11");
$program44_resource11_batch = $stmt->fetchColumn();

//Product 44, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=12");
$program44_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=12");
$program44_resource12_batch = $stmt->fetchColumn();

//Product 44, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=13");
$program44_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=13");
$program44_resource13_batch = $stmt->fetchColumn();

//Product 44, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=14");
$program44_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=14");
$program44_resource14_batch = $stmt->fetchColumn();

//Product 44, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=15");
$program44_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=15");
$program44_resource15_batch = $stmt->fetchColumn();

//Product 44, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=16");
$program44_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=16");
$program44_resource16_batch = $stmt->fetchColumn();

//Product 44, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=17");
$program44_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=17");
$program44_resource17_batch = $stmt->fetchColumn();

//Product 44, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=18");
$program44_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=18");
$program44_resource18_batch = $stmt->fetchColumn();

//Product 44, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=19");
$program44_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=19");
$program44_resource19_batch = $stmt->fetchColumn();

//Product 44, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=44 and resource_id=20");
$program44_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=44 and resource_id=20");
$program44_resource20_batch = $stmt->fetchColumn();

//-------Product 45
//Product 45, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=45");
$program45 = $stmt->fetchColumn();

//Product 45, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=1");
$program45_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=1");
$program45_resource1_batch = $stmt->fetchColumn();

//Product 45, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=2");
$program45_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=2");
$program45_resource2_batch = $stmt->fetchColumn();

//Product 45, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=3");
$program45_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=3");
$program45_resource3_batch = $stmt->fetchColumn();

//Product 45, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=4");
$program45_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=4");
$program45_resource4_batch = $stmt->fetchColumn();

//Product 45, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=5");
$program45_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=5");
$program45_resource5_batch = $stmt->fetchColumn();

//Product 45, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=6");
$program45_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=6");
$program45_resource6_batch = $stmt->fetchColumn();

//Product 45, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=7");
$program45_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=7");
$program45_resource7_batch = $stmt->fetchColumn();

//Product 45, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=8");
$program45_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=8");
$program45_resource8_batch = $stmt->fetchColumn();

//Product 45, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=9");
$program45_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=9");
$program45_resource9_batch = $stmt->fetchColumn();

//Product 45, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=10");
$program45_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=10");
$program45_resource10_batch = $stmt->fetchColumn();

//Product 45, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=11");
$program45_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=11");
$program45_resource11_batch = $stmt->fetchColumn();

//Product 45, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=12");
$program45_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=12");
$program45_resource12_batch = $stmt->fetchColumn();

//Product 45, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=13");
$program45_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=13");
$program45_resource13_batch = $stmt->fetchColumn();

//Product 45, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=14");
$program45_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=14");
$program45_resource14_batch = $stmt->fetchColumn();

//Product 45, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=15");
$program45_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=15");
$program45_resource15_batch = $stmt->fetchColumn();

//Product 45, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=16");
$program45_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=16");
$program45_resource16_batch = $stmt->fetchColumn();

//Product 45, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=17");
$program45_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=17");
$program45_resource17_batch = $stmt->fetchColumn();

//Product 45, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=18");
$program45_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=18");
$program45_resource18_batch = $stmt->fetchColumn();

//Product 45, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=19");
$program45_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=19");
$program45_resource19_batch = $stmt->fetchColumn();

//Product 45, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=45 and resource_id=20");
$program45_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=45 and resource_id=20");
$program45_resource20_batch = $stmt->fetchColumn();

//-------Product 46
//Product 46, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=46");
$program46 = $stmt->fetchColumn();

//Product 46, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=1");
$program46_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=1");
$program46_resource1_batch = $stmt->fetchColumn();

//Product 46, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=2");
$program46_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=2");
$program46_resource2_batch = $stmt->fetchColumn();

//Product 46, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=3");
$program46_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=3");
$program46_resource3_batch = $stmt->fetchColumn();

//Product 46, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=4");
$program46_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=4");
$program46_resource4_batch = $stmt->fetchColumn();

//Product 46, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=5");
$program46_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=5");
$program46_resource5_batch = $stmt->fetchColumn();

//Product 46, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=6");
$program46_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=6");
$program46_resource6_batch = $stmt->fetchColumn();

//Product 46, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=7");
$program46_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=7");
$program46_resource7_batch = $stmt->fetchColumn();

//Product 46, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=8");
$program46_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=8");
$program46_resource8_batch = $stmt->fetchColumn();

//Product 46, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=9");
$program46_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=9");
$program46_resource9_batch = $stmt->fetchColumn();

//Product 46, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=10");
$program46_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=10");
$program46_resource10_batch = $stmt->fetchColumn();

//Product 46, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=11");
$program46_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=11");
$program46_resource11_batch = $stmt->fetchColumn();

//Product 46, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=12");
$program46_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=12");
$program46_resource12_batch = $stmt->fetchColumn();

//Product 46, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=13");
$program46_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=13");
$program46_resource13_batch = $stmt->fetchColumn();

//Product 46, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=14");
$program46_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=14");
$program46_resource14_batch = $stmt->fetchColumn();

//Product 46, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=15");
$program46_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=15");
$program46_resource15_batch = $stmt->fetchColumn();

//Product 46, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=16");
$program46_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=16");
$program46_resource16_batch = $stmt->fetchColumn();

//Product 46, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=17");
$program46_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=17");
$program46_resource17_batch = $stmt->fetchColumn();

//Product 46, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=18");
$program46_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=18");
$program46_resource18_batch = $stmt->fetchColumn();

//Product 46, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=19");
$program46_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=19");
$program46_resource19_batch = $stmt->fetchColumn();

//Product 46, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=46 and resource_id=20");
$program46_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=46 and resource_id=20");
$program46_resource20_batch = $stmt->fetchColumn();

//-------Product 47
//Product 47, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=47");
$program47 = $stmt->fetchColumn();

//Product 47, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=1");
$program47_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=1");
$program47_resource1_batch = $stmt->fetchColumn();

//Product 47, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=2");
$program47_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=2");
$program47_resource2_batch = $stmt->fetchColumn();

//Product 47, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=3");
$program47_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=3");
$program47_resource3_batch = $stmt->fetchColumn();

//Product 47, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=4");
$program47_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=4");
$program47_resource4_batch = $stmt->fetchColumn();

//Product 47, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=5");
$program47_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=5");
$program47_resource5_batch = $stmt->fetchColumn();

//Product 47, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=6");
$program47_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=6");
$program47_resource6_batch = $stmt->fetchColumn();

//Product 47, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=7");
$program47_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=7");
$program47_resource7_batch = $stmt->fetchColumn();

//Product 47, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=8");
$program47_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=8");
$program47_resource8_batch = $stmt->fetchColumn();

//Product 47, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=9");
$program47_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=9");
$program47_resource9_batch = $stmt->fetchColumn();

//Product 47, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=10");
$program47_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=10");
$program47_resource10_batch = $stmt->fetchColumn();

//Product 47, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=11");
$program47_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=11");
$program47_resource11_batch = $stmt->fetchColumn();

//Product 47, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=12");
$program47_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=12");
$program47_resource12_batch = $stmt->fetchColumn();

//Product 47, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=13");
$program47_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=13");
$program47_resource13_batch = $stmt->fetchColumn();

//Product 47, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=14");
$program47_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=14");
$program47_resource14_batch = $stmt->fetchColumn();

//Product 47, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=15");
$program47_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=15");
$program47_resource15_batch = $stmt->fetchColumn();

//Product 47, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=16");
$program47_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=16");
$program47_resource16_batch = $stmt->fetchColumn();

//Product 47, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=17");
$program47_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=17");
$program47_resource17_batch = $stmt->fetchColumn();

//Product 47, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=18");
$program47_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=18");
$program47_resource18_batch = $stmt->fetchColumn();

//Product 47, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=19");
$program47_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=19");
$program47_resource19_batch = $stmt->fetchColumn();

//Product 47, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=47 and resource_id=20");
$program47_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=47 and resource_id=20");
$program47_resource20_batch = $stmt->fetchColumn();

//-------Product 48
//Product 48, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=48");
$program48 = $stmt->fetchColumn();

//Product 48, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=1");
$program48_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=1");
$program48_resource1_batch = $stmt->fetchColumn();

//Product 48, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=2");
$program48_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=2");
$program48_resource2_batch = $stmt->fetchColumn();

//Product 48, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=3");
$program48_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=3");
$program48_resource3_batch = $stmt->fetchColumn();

//Product 48, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=4");
$program48_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=4");
$program48_resource4_batch = $stmt->fetchColumn();

//Product 48, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=5");
$program48_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=5");
$program48_resource5_batch = $stmt->fetchColumn();

//Product 48, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=6");
$program48_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=6");
$program48_resource6_batch = $stmt->fetchColumn();

//Product 48, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=7");
$program48_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=7");
$program48_resource7_batch = $stmt->fetchColumn();

//Product 48, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=8");
$program48_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=8");
$program48_resource8_batch = $stmt->fetchColumn();

//Product 48, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=9");
$program48_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=9");
$program48_resource9_batch = $stmt->fetchColumn();

//Product 48, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=10");
$program48_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=10");
$program48_resource10_batch = $stmt->fetchColumn();

//Product 48, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=11");
$program48_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=11");
$program48_resource11_batch = $stmt->fetchColumn();

//Product 48, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=12");
$program48_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=12");
$program48_resource12_batch = $stmt->fetchColumn();

//Product 48, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=13");
$program48_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=13");
$program48_resource13_batch = $stmt->fetchColumn();

//Product 48, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=14");
$program48_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=14");
$program48_resource14_batch = $stmt->fetchColumn();

//Product 48, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=15");
$program48_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=15");
$program48_resource15_batch = $stmt->fetchColumn();

//Product 48, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=16");
$program48_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=16");
$program48_resource16_batch = $stmt->fetchColumn();

//Product 48, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=17");
$program48_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=17");
$program48_resource17_batch = $stmt->fetchColumn();

//Product 48, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=18");
$program48_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=18");
$program48_resource18_batch = $stmt->fetchColumn();

//Product 48, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=19");
$program48_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=19");
$program48_resource19_batch = $stmt->fetchColumn();

//Product 48, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=48 and resource_id=20");
$program48_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=48 and resource_id=20");
$program48_resource20_batch = $stmt->fetchColumn();

//-------Product 49
//Product 49, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=49");
$program49 = $stmt->fetchColumn();

//Product 49, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=1");
$program49_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=1");
$program49_resource1_batch = $stmt->fetchColumn();

//Product 49, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=2");
$program49_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=2");
$program49_resource2_batch = $stmt->fetchColumn();

//Product 49, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=3");
$program49_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=3");
$program49_resource3_batch = $stmt->fetchColumn();

//Product 49, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=4");
$program49_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=4");
$program49_resource4_batch = $stmt->fetchColumn();

//Product 49, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=5");
$program49_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=5");
$program49_resource5_batch = $stmt->fetchColumn();

//Product 49, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=6");
$program49_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=6");
$program49_resource6_batch = $stmt->fetchColumn();

//Product 49, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=7");
$program49_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=7");
$program49_resource7_batch = $stmt->fetchColumn();

//Product 49, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=8");
$program49_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=8");
$program49_resource8_batch = $stmt->fetchColumn();

//Product 49, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=9");
$program49_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=9");
$program49_resource9_batch = $stmt->fetchColumn();

//Product 49, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=10");
$program49_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=10");
$program49_resource10_batch = $stmt->fetchColumn();

//Product 49, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=11");
$program49_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=11");
$program49_resource11_batch = $stmt->fetchColumn();

//Product 49, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=12");
$program49_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=12");
$program49_resource12_batch = $stmt->fetchColumn();

//Product 49, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=13");
$program49_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=13");
$program49_resource13_batch = $stmt->fetchColumn();

//Product 49, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=14");
$program49_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=14");
$program49_resource14_batch = $stmt->fetchColumn();

//Product 49, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=15");
$program49_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=15");
$program49_resource15_batch = $stmt->fetchColumn();

//Product 49, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=16");
$program49_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=16");
$program49_resource16_batch = $stmt->fetchColumn();

//Product 49, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=17");
$program49_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=17");
$program49_resource17_batch = $stmt->fetchColumn();

//Product 49, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=18");
$program49_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=18");
$program49_resource18_batch = $stmt->fetchColumn();

//Product 49, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=19");
$program49_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=19");
$program49_resource19_batch = $stmt->fetchColumn();

//Product 49, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=49 and resource_id=20");
$program49_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=49 and resource_id=20");
$program49_resource20_batch = $stmt->fetchColumn();

//-------Product 50
//Product 50, Name
$stmt = $pdo->query("SELECT program from Programs WHERE program_id=50");
$program50 = $stmt->fetchColumn();

//Product 50, Resource 1 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=1");
$program50_resource1_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=1");
$program50_resource1_batch = $stmt->fetchColumn();

//Product 50, Resource 2 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=2");
$program50_resource2_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=2");
$program50_resource2_batch = $stmt->fetchColumn();

//Product 50, Resource 3 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=3");
$program50_resource3_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=3");
$program50_resource3_batch = $stmt->fetchColumn();

//Product 50, Resource 4 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=4");
$program50_resource4_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=4");
$program50_resource4_batch = $stmt->fetchColumn();

//Product 50, Resource 5 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=5");
$program50_resource5_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=5");
$program50_resource5_batch = $stmt->fetchColumn();

//Product 50, Resource 6 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=6");
$program50_resource6_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=6");
$program50_resource6_batch = $stmt->fetchColumn();

//Product 50, Resource 7 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=7");
$program50_resource7_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=7");
$program50_resource7_batch = $stmt->fetchColumn();

//Product 50, Resource 8 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=8");
$program50_resource8_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=8");
$program50_resource8_batch = $stmt->fetchColumn();

//Product 50, Resource 9 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=9");
$program50_resource9_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=9");
$program50_resource9_batch = $stmt->fetchColumn();

//Product 50, Resource 10 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=10");
$program50_resource10_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=10");
$program50_resource10_batch = $stmt->fetchColumn();

//Product 50, Resource 11 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=11");
$program50_resource11_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=11");
$program50_resource11_batch = $stmt->fetchColumn();

//Product 50, Resource 12 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=12");
$program50_resource12_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=12");
$program50_resource12_batch = $stmt->fetchColumn();

//Product 50, Resource 13 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=13");
$program50_resource13_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=13");
$program50_resource13_batch = $stmt->fetchColumn();

//Product 50, Resource 14 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=14");
$program50_resource14_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=14");
$program50_resource14_batch = $stmt->fetchColumn();

//Product 50, Resource 15 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=15");
$program50_resource15_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=15");
$program50_resource15_batch = $stmt->fetchColumn();

//Product 50, Resource 16 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=16");
$program50_resource16_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=16");
$program50_resource16_batch = $stmt->fetchColumn();

//Product 50, Resource 17 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=17");
$program50_resource17_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=17");
$program50_resource17_batch = $stmt->fetchColumn();

//Product 50, Resource 18 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=18");
$program50_resource18_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=18");
$program50_resource18_batch = $stmt->fetchColumn();

//Product 50, Resource 19 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=19");
$program50_resource19_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=19");
$program50_resource19_batch = $stmt->fetchColumn();

//Product 50, Resource 20 Flow & Batch Size
$stmt = $pdo->query("SELECT flow from Flows WHERE program_id=50 and resource_id=20");
$program50_resource20_flow = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT batch from Flows WHERE program_id=50 and resource_id=20");
$program50_resource20_batch = $stmt->fetchColumn();


//--------------------------------------------------------------------------------------------Start Unique for Other Resources

//---------------Set variables for Available Hours Calculations from Database
//------------Update Database and Calculations based on User Inputs
//Shifts Worked
$stmt = $pdo->query("SELECT shifts from Resources WHERE resource_id=7");
$resource7_shifts = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_shifts'])) {
    $sql = "UPDATE Resources SET shifts=:shifts WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':shifts' => $_REQUEST['resource7_shifts']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//Hrs per Shift
$stmt = $pdo->query("SELECT shifthrs from Resources WHERE resource_id=7");
$resource7_hrs_shift = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_hrs_shift'])) {
    $sql = "UPDATE Resources SET shifthrs=:shifthrs WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':shifthrs' => $_REQUEST['resource7_hrs_shift']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//Days per Week
$stmt = $pdo->query("SELECT days from Resources WHERE resource_id=7");
$resource7_days = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_days'])) {
    $sql = "UPDATE Resources SET days=:days WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':days' => $_REQUEST['resource7_days']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//DONSA per Year
$stmt = $pdo->query("SELECT donsa from Resources WHERE resource_id=7");
$resource7_donsa = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_donsa'])) {
    $sql = "UPDATE Resources SET donsa=:donsa WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':donsa' => $_REQUEST['resource7_donsa']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//Resource Quantity
$stmt = $pdo->query("SELECT qty from Resources WHERE resource_id=7");
$resource7_qty = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_qty'])) {
    $sql = "UPDATE Resources SET qty=:qty WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':qty' => $_REQUEST['resource7_qty']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//OEE
$stmt = $pdo->query("SELECT oee from Resources WHERE resource_id=7");
$resource7_oee_input = $stmt->fetchColumn();

if ( isset($_REQUEST['resource7_oee'])) {
    $sql = "UPDATE Resources SET oee=:oee WHERE resource_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':oee' => $_REQUEST['resource7_oee']));
    echo "<meta http-equiv='refresh' content='0'>";
}

//-------------------------------------Calculations for Resource Availability
$resource7_donsa_weeks = $resource7_donsa / 5;
$weeks = round(((52 - $resource7_donsa_weeks) / 12),2);
$resource7_oee = $resource7_oee_input / 100;
$resource7_hrs_day = $resource7_shifts * $resource7_hrs_shift;
$resource7_hrs_available = round(((($resource7_hrs_day * $resource7_days) * $weeks) * $resource7_oee),0);
$resource7_hrs_total = round(($resource7_hrs_available * $resource7_qty),0);

//----------------------------------------Calculations for Resource Utilization
//-----------------------------------------------------------Resource 7, Date 1
//Resource 7, Date 1 Batch Factors
$program1_resource7_date1_batchfactor =
  $program1_date1 / $program1_resource7_batch;

$program2_resource7_date1_batchfactor =
  $program2_date1 / $program2_resource7_batch;

$program3_resource7_date1_batchfactor =
  $program3_date1 / $program3_resource7_batch;

$program4_resource7_date1_batchfactor =
  $program4_date1 / $program4_resource7_batch;

$program5_resource7_date1_batchfactor =
  $program5_date1 / $program5_resource7_batch;

$program6_resource7_date1_batchfactor =
  $program6_date1 / $program6_resource7_batch;

$program7_resource7_date1_batchfactor =
  $program7_date1 / $program7_resource7_batch;

$program8_resource7_date1_batchfactor =
  $program8_date1 / $program8_resource7_batch;

$program9_resource7_date1_batchfactor =
  $program9_date1 / $program9_resource7_batch;

$program10_resource7_date1_batchfactor =
  $program10_date1 / $program10_resource7_batch;

$program11_resource7_date1_batchfactor =
  $program11_date1 / $program10_resource7_batch;

$program12_resource7_date1_batchfactor =
  $program12_date1 / $program10_resource7_batch;

$program13_resource7_date1_batchfactor =
  $program13_date1 / $program10_resource7_batch;

$program14_resource7_date1_batchfactor =
  $program14_date1 / $program10_resource7_batch;

$program15_resource7_date1_batchfactor =
  $program15_date1 / $program10_resource7_batch;

$program16_resource7_date1_batchfactor =
  $program16_date1 / $program10_resource7_batch;

$program17_resource7_date1_batchfactor =
  $program17_date1 / $program10_resource7_batch;

$program18_resource7_date1_batchfactor =
  $program18_date1 / $program10_resource7_batch;

$program19_resource7_date1_batchfactor =
  $program19_date1 / $program10_resource7_batch;

$program20_resource7_date1_batchfactor =
  $program20_date1 / $program10_resource7_batch;

$program21_resource7_date1_batchfactor =
  $program21_date1 / $program10_resource7_batch;

$program22_resource7_date1_batchfactor =
  $program22_date1 / $program10_resource7_batch;

$program23_resource7_date1_batchfactor =
  $program23_date1 / $program10_resource7_batch;

$program24_resource7_date1_batchfactor =
  $program24_date1 / $program10_resource7_batch;

$program25_resource7_date1_batchfactor =
  $program25_date1 / $program10_resource7_batch;

$program26_resource7_date1_batchfactor =
  $program26_date1 / $program10_resource7_batch;

$program27_resource7_date1_batchfactor =
  $program27_date1 / $program10_resource7_batch;

$program28_resource7_date1_batchfactor =
  $program28_date1 / $program10_resource7_batch;

$program29_resource7_date1_batchfactor =
  $program29_date1 / $program10_resource7_batch;

$program30_resource7_date1_batchfactor =
  $program30_date1 / $program10_resource7_batch;

$program31_resource7_date1_batchfactor =
  $program31_date1 / $program10_resource7_batch;

$program32_resource7_date1_batchfactor =
  $program32_date1 / $program10_resource7_batch;

$program33_resource7_date1_batchfactor =
  $program33_date1 / $program10_resource7_batch;

$program34_resource7_date1_batchfactor =
  $program34_date1 / $program10_resource7_batch;

$program35_resource7_date1_batchfactor =
  $program35_date1 / $program10_resource7_batch;

$program36_resource7_date1_batchfactor =
  $program36_date1 / $program10_resource7_batch;

$program37_resource7_date1_batchfactor =
  $program37_date1 / $program10_resource7_batch;

$program38_resource7_date1_batchfactor =
  $program38_date1 / $program10_resource7_batch;

$program39_resource7_date1_batchfactor =
  $program39_date1 / $program10_resource7_batch;

$program40_resource7_date1_batchfactor =
  $program40_date1 / $program10_resource7_batch;

$program41_resource7_date1_batchfactor =
  $program41_date1 / $program10_resource7_batch;

$program42_resource7_date1_batchfactor =
  $program42_date1 / $program10_resource7_batch;

$program43_resource7_date1_batchfactor =
  $program43_date1 / $program10_resource7_batch;

$program44_resource7_date1_batchfactor =
  $program44_date1 / $program10_resource7_batch;

$program45_resource7_date1_batchfactor =
  $program45_date1 / $program10_resource7_batch;

$program46_resource7_date1_batchfactor =
  $program46_date1 / $program10_resource7_batch;

$program47_resource7_date1_batchfactor =
  $program47_date1 / $program10_resource7_batch;

$program48_resource7_date1_batchfactor =
  $program48_date1 / $program10_resource7_batch;

$program49_resource7_date1_batchfactor =
  $program49_date1 / $program10_resource7_batch;

$program50_resource7_date1_batchfactor =
  $program50_date1 / $program10_resource7_batch;

//Resource 7, Date 1 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date1_hrsreq =
  $program1_resource7_flow * $program1_resource7_date1_batchfactor;

$program2_resource7_date1_hrsreq =
  $program2_resource7_flow * $program2_resource7_date1_batchfactor;

$program3_resource7_date1_hrsreq =
  $program3_resource7_flow * $program3_resource7_date1_batchfactor;

$program4_resource7_date1_hrsreq =
  $program4_resource7_flow * $program4_resource7_date1_batchfactor;

$program5_resource7_date1_hrsreq =
  $program5_resource7_flow * $program5_resource7_date1_batchfactor;

$program6_resource7_date1_hrsreq =
  $program6_resource7_flow * $program6_resource7_date1_batchfactor;

$program7_resource7_date1_hrsreq =
  $program7_resource7_flow * $program7_resource7_date1_batchfactor;

$program8_resource7_date1_hrsreq =
  $program8_resource7_flow * $program8_resource7_date1_batchfactor;

$program9_resource7_date1_hrsreq =
  $program9_resource7_flow * $program9_resource7_date1_batchfactor;

$program10_resource7_date1_hrsreq =
  $program10_resource7_flow * $program10_resource7_date1_batchfactor;

$program11_resource7_date1_hrsreq =
  $program11_resource7_flow * $program11_resource7_date1_batchfactor;

$program12_resource7_date1_hrsreq =
  $program12_resource7_flow * $program12_resource7_date1_batchfactor;

$program13_resource7_date1_hrsreq =
  $program13_resource7_flow * $program13_resource7_date1_batchfactor;

$program14_resource7_date1_hrsreq =
  $program14_resource7_flow * $program14_resource7_date1_batchfactor;

$program15_resource7_date1_hrsreq =
  $program15_resource7_flow * $program15_resource7_date1_batchfactor;

$program16_resource7_date1_hrsreq =
  $program16_resource7_flow * $program16_resource7_date1_batchfactor;

$program17_resource7_date1_hrsreq =
  $program17_resource7_flow * $program17_resource7_date1_batchfactor;

$program18_resource7_date1_hrsreq =
  $program18_resource7_flow * $program18_resource7_date1_batchfactor;

$program19_resource7_date1_hrsreq =
  $program19_resource7_flow * $program19_resource7_date1_batchfactor;

$program20_resource7_date1_hrsreq =
  $program20_resource7_flow * $program20_resource7_date1_batchfactor;

$program21_resource7_date1_hrsreq =
  $program21_resource7_flow * $program21_resource7_date1_batchfactor;

$program22_resource7_date1_hrsreq =
  $program22_resource7_flow * $program22_resource7_date1_batchfactor;

$program23_resource7_date1_hrsreq =
  $program23_resource7_flow * $program23_resource7_date1_batchfactor;

$program24_resource7_date1_hrsreq =
  $program24_resource7_flow * $program24_resource7_date1_batchfactor;

$program25_resource7_date1_hrsreq =
  $program25_resource7_flow * $program25_resource7_date1_batchfactor;

$program26_resource7_date1_hrsreq =
  $program26_resource7_flow * $program26_resource7_date1_batchfactor;

$program27_resource7_date1_hrsreq =
  $program27_resource7_flow * $program27_resource7_date1_batchfactor;

$program28_resource7_date1_hrsreq =
  $program28_resource7_flow * $program28_resource7_date1_batchfactor;

$program29_resource7_date1_hrsreq =
  $program29_resource7_flow * $program29_resource7_date1_batchfactor;

$program30_resource7_date1_hrsreq =
  $program30_resource7_flow * $program30_resource7_date1_batchfactor;

$program31_resource7_date1_hrsreq =
  $program31_resource7_flow * $program31_resource7_date1_batchfactor;

$program32_resource7_date1_hrsreq =
  $program32_resource7_flow * $program32_resource7_date1_batchfactor;

$program33_resource7_date1_hrsreq =
  $program33_resource7_flow * $program33_resource7_date1_batchfactor;

$program34_resource7_date1_hrsreq =
  $program34_resource7_flow * $program34_resource7_date1_batchfactor;

$program35_resource7_date1_hrsreq =
  $program35_resource7_flow * $program35_resource7_date1_batchfactor;

$program36_resource7_date1_hrsreq =
  $program36_resource7_flow * $program36_resource7_date1_batchfactor;

  $program37_resource7_date1_hrsreq =
    $program37_resource7_flow * $program37_resource7_date1_batchfactor;

$program38_resource7_date1_hrsreq =
  $program38_resource7_flow * $program38_resource7_date1_batchfactor;

$program39_resource7_date1_hrsreq =
  $program39_resource7_flow * $program39_resource7_date1_batchfactor;

$program40_resource7_date1_hrsreq =
  $program40_resource7_flow * $program40_resource7_date1_batchfactor;

$program41_resource7_date1_hrsreq =
  $program41_resource7_flow * $program41_resource7_date1_batchfactor;

$program42_resource7_date1_hrsreq =
  $program42_resource7_flow * $program42_resource7_date1_batchfactor;

$program43_resource7_date1_hrsreq =
  $program43_resource7_flow * $program43_resource7_date1_batchfactor;

$program44_resource7_date1_hrsreq =
  $program44_resource7_flow * $program44_resource7_date1_batchfactor;

$program45_resource7_date1_hrsreq =
  $program45_resource7_flow * $program45_resource7_date1_batchfactor;

$program46_resource7_date1_hrsreq =
  $program46_resource7_flow * $program46_resource7_date1_batchfactor;

$program47_resource7_date1_hrsreq =
  $program47_resource7_flow * $program47_resource7_date1_batchfactor;

$program47_resource7_date1_hrsreq =
  $program47_resource7_flow * $program47_resource7_date1_batchfactor;

$program48_resource7_date1_hrsreq =
  $program48_resource7_flow * $program48_resource7_date1_batchfactor;

$program49_resource7_date1_hrsreq =
  $program49_resource7_flow * $program49_resource7_date1_batchfactor;

$program50_resource7_date1_hrsreq =
  $program50_resource7_flow * $program50_resource7_date1_batchfactor;

//Resource 7, Date 1 Total Hrs
$resource7_date1_totalhrs =
  round((
  $program1_resource7_date1_hrsreq +
  $program2_resource7_date1_hrsreq +
  $program3_resource7_date1_hrsreq +
  $program4_resource7_date1_hrsreq +
  $program5_resource7_date1_hrsreq +
  $program6_resource7_date1_hrsreq +
  $program7_resource7_date1_hrsreq +
  $program8_resource7_date1_hrsreq +
  $program9_resource7_date1_hrsreq +
  $program10_resource7_date1_hrsreq +
  $program11_resource7_date1_hrsreq +
  $program12_resource7_date1_hrsreq +
  $program13_resource7_date1_hrsreq +
  $program14_resource7_date1_hrsreq +
  $program15_resource7_date1_hrsreq +
  $program16_resource7_date1_hrsreq +
  $program17_resource7_date1_hrsreq +
  $program18_resource7_date1_hrsreq +
  $program19_resource7_date1_hrsreq +
  $program20_resource7_date1_hrsreq +
  $program21_resource7_date1_hrsreq +
  $program22_resource7_date1_hrsreq +
  $program23_resource7_date1_hrsreq +
  $program24_resource7_date1_hrsreq +
  $program25_resource7_date1_hrsreq +
  $program26_resource7_date1_hrsreq +
  $program27_resource7_date1_hrsreq +
  $program28_resource7_date1_hrsreq +
  $program29_resource7_date1_hrsreq +
  $program30_resource7_date1_hrsreq +
  $program31_resource7_date1_hrsreq +
  $program32_resource7_date1_hrsreq +
  $program33_resource7_date1_hrsreq +
  $program34_resource7_date1_hrsreq +
  $program35_resource7_date1_hrsreq +
  $program36_resource7_date1_hrsreq +
  $program37_resource7_date1_hrsreq +
  $program38_resource7_date1_hrsreq +
  $program39_resource7_date1_hrsreq +
  $program40_resource7_date1_hrsreq +
  $program41_resource7_date1_hrsreq +
  $program42_resource7_date1_hrsreq +
  $program43_resource7_date1_hrsreq +
  $program44_resource7_date1_hrsreq +
  $program45_resource7_date1_hrsreq +
  $program46_resource7_date1_hrsreq +
  $program47_resource7_date1_hrsreq +
  $program48_resource7_date1_hrsreq +
  $program49_resource7_date1_hrsreq +
  $program50_resource7_date1_hrsreq
  ),0);

//Date 1 Utilization
$resource7_date1_utilization =
  $resource7_date1_totalhrs / $resource7_hrs_total;

//Date 1 Resources Required
$resource7_date1_resourcesreq =
  ceil($resource7_date1_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 2
//Resource 7, Date 2 Batch Factors
$program1_resource7_date2_batchfactor =
  $program1_date2 / $program1_resource7_batch;

$program2_resource7_date2_batchfactor =
  $program2_date2 / $program2_resource7_batch;

$program3_resource7_date2_batchfactor =
  $program3_date2 / $program3_resource7_batch;

$program4_resource7_date2_batchfactor =
  $program4_date2 / $program4_resource7_batch;

$program5_resource7_date2_batchfactor =
  $program5_date2 / $program5_resource7_batch;

$program6_resource7_date2_batchfactor =
  $program6_date2 / $program6_resource7_batch;

$program7_resource7_date2_batchfactor =
  $program7_date2 / $program7_resource7_batch;

$program8_resource7_date2_batchfactor =
  $program8_date2 / $program8_resource7_batch;

$program9_resource7_date2_batchfactor =
  $program9_date2 / $program9_resource7_batch;

$program10_resource7_date2_batchfactor =
  $program10_date2 / $program10_resource7_batch;

$program11_resource7_date2_batchfactor =
  $program11_date2 / $program10_resource7_batch;

$program12_resource7_date2_batchfactor =
  $program12_date2 / $program10_resource7_batch;

$program13_resource7_date2_batchfactor =
  $program13_date2 / $program10_resource7_batch;

$program14_resource7_date2_batchfactor =
  $program14_date2 / $program10_resource7_batch;

$program15_resource7_date2_batchfactor =
  $program15_date2 / $program10_resource7_batch;

$program16_resource7_date2_batchfactor =
  $program16_date2 / $program10_resource7_batch;

$program17_resource7_date2_batchfactor =
  $program17_date2 / $program10_resource7_batch;

$program18_resource7_date2_batchfactor =
  $program18_date2 / $program10_resource7_batch;

$program19_resource7_date2_batchfactor =
  $program19_date2 / $program10_resource7_batch;

$program20_resource7_date2_batchfactor =
  $program20_date2 / $program10_resource7_batch;

$program21_resource7_date2_batchfactor =
  $program21_date2 / $program10_resource7_batch;

$program22_resource7_date2_batchfactor =
  $program22_date2 / $program10_resource7_batch;

$program23_resource7_date2_batchfactor =
  $program23_date2 / $program10_resource7_batch;

$program24_resource7_date2_batchfactor =
  $program24_date2 / $program10_resource7_batch;

$program25_resource7_date2_batchfactor =
  $program25_date2 / $program10_resource7_batch;

$program26_resource7_date2_batchfactor =
  $program26_date2 / $program10_resource7_batch;

$program27_resource7_date2_batchfactor =
  $program27_date2 / $program10_resource7_batch;

$program28_resource7_date2_batchfactor =
  $program28_date2 / $program10_resource7_batch;

$program29_resource7_date2_batchfactor =
  $program29_date2 / $program10_resource7_batch;

$program30_resource7_date2_batchfactor =
  $program30_date2 / $program10_resource7_batch;

$program31_resource7_date2_batchfactor =
  $program31_date2 / $program10_resource7_batch;

$program32_resource7_date2_batchfactor =
  $program32_date2 / $program10_resource7_batch;

$program33_resource7_date2_batchfactor =
  $program33_date2 / $program10_resource7_batch;

$program34_resource7_date2_batchfactor =
  $program34_date2 / $program10_resource7_batch;

$program35_resource7_date2_batchfactor =
  $program35_date2 / $program10_resource7_batch;

$program36_resource7_date2_batchfactor =
  $program36_date2 / $program10_resource7_batch;

$program37_resource7_date2_batchfactor =
  $program37_date2 / $program10_resource7_batch;

$program38_resource7_date2_batchfactor =
  $program38_date2 / $program10_resource7_batch;

$program39_resource7_date2_batchfactor =
  $program39_date2 / $program10_resource7_batch;

$program40_resource7_date2_batchfactor =
  $program40_date2 / $program10_resource7_batch;

$program41_resource7_date2_batchfactor =
  $program41_date2 / $program10_resource7_batch;

$program42_resource7_date2_batchfactor =
  $program42_date2 / $program10_resource7_batch;

$program43_resource7_date2_batchfactor =
  $program43_date2 / $program10_resource7_batch;

$program44_resource7_date2_batchfactor =
  $program44_date2 / $program10_resource7_batch;

$program45_resource7_date2_batchfactor =
  $program45_date2 / $program10_resource7_batch;

$program46_resource7_date2_batchfactor =
  $program46_date2 / $program10_resource7_batch;

$program47_resource7_date2_batchfactor =
  $program47_date2 / $program10_resource7_batch;

$program48_resource7_date2_batchfactor =
  $program48_date2 / $program10_resource7_batch;

$program49_resource7_date2_batchfactor =
  $program49_date2 / $program10_resource7_batch;

$program50_resource7_date2_batchfactor =
  $program50_date2 / $program10_resource7_batch;

//Resource 7, Date 2 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date2_hrsreq =
  $program1_resource7_flow * $program1_resource7_date2_batchfactor;

  $program2_resource7_date2_hrsreq =
    $program2_resource7_flow * $program2_resource7_date2_batchfactor;

  $program3_resource7_date2_hrsreq =
    $program3_resource7_flow * $program3_resource7_date2_batchfactor;

  $program4_resource7_date2_hrsreq =
    $program4_resource7_flow * $program4_resource7_date2_batchfactor;

  $program5_resource7_date2_hrsreq =
    $program5_resource7_flow * $program5_resource7_date2_batchfactor;

  $program6_resource7_date2_hrsreq =
    $program6_resource7_flow * $program6_resource7_date2_batchfactor;

  $program7_resource7_date2_hrsreq =
    $program7_resource7_flow * $program7_resource7_date2_batchfactor;

  $program8_resource7_date2_hrsreq =
    $program8_resource7_flow * $program8_resource7_date2_batchfactor;

  $program9_resource7_date2_hrsreq =
    $program9_resource7_flow * $program9_resource7_date2_batchfactor;

  $program10_resource7_date2_hrsreq =
    $program10_resource7_flow * $program10_resource7_date2_batchfactor;

  $program11_resource7_date2_hrsreq =
    $program11_resource7_flow * $program11_resource7_date2_batchfactor;

  $program12_resource7_date2_hrsreq =
    $program12_resource7_flow * $program12_resource7_date2_batchfactor;

  $program13_resource7_date2_hrsreq =
    $program13_resource7_flow * $program13_resource7_date2_batchfactor;

  $program14_resource7_date2_hrsreq =
    $program14_resource7_flow * $program14_resource7_date2_batchfactor;

  $program15_resource7_date2_hrsreq =
    $program15_resource7_flow * $program15_resource7_date2_batchfactor;

  $program16_resource7_date2_hrsreq =
    $program16_resource7_flow * $program16_resource7_date2_batchfactor;

  $program17_resource7_date2_hrsreq =
    $program17_resource7_flow * $program17_resource7_date2_batchfactor;

  $program18_resource7_date2_hrsreq =
    $program18_resource7_flow * $program18_resource7_date2_batchfactor;

  $program19_resource7_date2_hrsreq =
    $program19_resource7_flow * $program19_resource7_date2_batchfactor;

  $program20_resource7_date2_hrsreq =
    $program20_resource7_flow * $program20_resource7_date2_batchfactor;

  $program21_resource7_date2_hrsreq =
    $program21_resource7_flow * $program21_resource7_date2_batchfactor;

  $program22_resource7_date2_hrsreq =
    $program22_resource7_flow * $program22_resource7_date2_batchfactor;

  $program23_resource7_date2_hrsreq =
    $program23_resource7_flow * $program23_resource7_date2_batchfactor;

  $program24_resource7_date2_hrsreq =
    $program24_resource7_flow * $program24_resource7_date2_batchfactor;

  $program25_resource7_date2_hrsreq =
    $program25_resource7_flow * $program25_resource7_date2_batchfactor;

  $program26_resource7_date2_hrsreq =
    $program26_resource7_flow * $program26_resource7_date2_batchfactor;

  $program27_resource7_date2_hrsreq =
    $program27_resource7_flow * $program27_resource7_date2_batchfactor;

  $program28_resource7_date2_hrsreq =
    $program28_resource7_flow * $program28_resource7_date2_batchfactor;

  $program29_resource7_date2_hrsreq =
    $program29_resource7_flow * $program29_resource7_date2_batchfactor;

  $program30_resource7_date2_hrsreq =
    $program30_resource7_flow * $program30_resource7_date2_batchfactor;

  $program31_resource7_date2_hrsreq =
    $program31_resource7_flow * $program31_resource7_date2_batchfactor;

  $program32_resource7_date2_hrsreq =
    $program32_resource7_flow * $program32_resource7_date2_batchfactor;

  $program33_resource7_date2_hrsreq =
    $program33_resource7_flow * $program33_resource7_date2_batchfactor;

  $program34_resource7_date2_hrsreq =
    $program34_resource7_flow * $program34_resource7_date2_batchfactor;

  $program35_resource7_date2_hrsreq =
    $program35_resource7_flow * $program35_resource7_date2_batchfactor;

  $program36_resource7_date2_hrsreq =
    $program36_resource7_flow * $program36_resource7_date2_batchfactor;

    $program37_resource7_date2_hrsreq =
      $program37_resource7_flow * $program37_resource7_date2_batchfactor;

  $program38_resource7_date2_hrsreq =
    $program38_resource7_flow * $program38_resource7_date2_batchfactor;

  $program39_resource7_date2_hrsreq =
    $program39_resource7_flow * $program39_resource7_date2_batchfactor;

  $program40_resource7_date2_hrsreq =
    $program40_resource7_flow * $program40_resource7_date2_batchfactor;

  $program41_resource7_date2_hrsreq =
    $program41_resource7_flow * $program41_resource7_date2_batchfactor;

  $program42_resource7_date2_hrsreq =
    $program42_resource7_flow * $program42_resource7_date2_batchfactor;

  $program43_resource7_date2_hrsreq =
    $program43_resource7_flow * $program43_resource7_date2_batchfactor;

  $program44_resource7_date2_hrsreq =
    $program44_resource7_flow * $program44_resource7_date2_batchfactor;

  $program45_resource7_date2_hrsreq =
    $program45_resource7_flow * $program45_resource7_date2_batchfactor;

  $program46_resource7_date2_hrsreq =
    $program46_resource7_flow * $program46_resource7_date2_batchfactor;

  $program47_resource7_date2_hrsreq =
    $program47_resource7_flow * $program47_resource7_date2_batchfactor;

  $program47_resource7_date2_hrsreq =
    $program47_resource7_flow * $program47_resource7_date2_batchfactor;

  $program48_resource7_date2_hrsreq =
    $program48_resource7_flow * $program48_resource7_date2_batchfactor;

  $program49_resource7_date2_hrsreq =
    $program49_resource7_flow * $program49_resource7_date2_batchfactor;

  $program50_resource7_date2_hrsreq =
    $program50_resource7_flow * $program50_resource7_date2_batchfactor;

//Resource 7, Date 2 Total Hrs
  $resource7_date2_totalhrs =
    round((
    $program1_resource7_date2_hrsreq +
    $program2_resource7_date2_hrsreq +
    $program3_resource7_date2_hrsreq +
    $program4_resource7_date2_hrsreq +
    $program5_resource7_date2_hrsreq +
    $program6_resource7_date2_hrsreq +
    $program7_resource7_date2_hrsreq +
    $program8_resource7_date2_hrsreq +
    $program9_resource7_date2_hrsreq +
    $program10_resource7_date2_hrsreq +
    $program11_resource7_date2_hrsreq +
    $program12_resource7_date2_hrsreq +
    $program13_resource7_date2_hrsreq +
    $program14_resource7_date2_hrsreq +
    $program15_resource7_date2_hrsreq +
    $program16_resource7_date2_hrsreq +
    $program17_resource7_date2_hrsreq +
    $program18_resource7_date2_hrsreq +
    $program19_resource7_date2_hrsreq +
    $program20_resource7_date2_hrsreq +
    $program21_resource7_date2_hrsreq +
    $program22_resource7_date2_hrsreq +
    $program23_resource7_date2_hrsreq +
    $program24_resource7_date2_hrsreq +
    $program25_resource7_date2_hrsreq +
    $program26_resource7_date2_hrsreq +
    $program27_resource7_date2_hrsreq +
    $program28_resource7_date2_hrsreq +
    $program29_resource7_date2_hrsreq +
    $program30_resource7_date2_hrsreq +
    $program31_resource7_date2_hrsreq +
    $program32_resource7_date2_hrsreq +
    $program33_resource7_date2_hrsreq +
    $program34_resource7_date2_hrsreq +
    $program35_resource7_date2_hrsreq +
    $program36_resource7_date2_hrsreq +
    $program37_resource7_date2_hrsreq +
    $program38_resource7_date2_hrsreq +
    $program39_resource7_date2_hrsreq +
    $program40_resource7_date2_hrsreq +
    $program41_resource7_date2_hrsreq +
    $program42_resource7_date2_hrsreq +
    $program43_resource7_date2_hrsreq +
    $program44_resource7_date2_hrsreq +
    $program45_resource7_date2_hrsreq +
    $program46_resource7_date2_hrsreq +
    $program47_resource7_date2_hrsreq +
    $program48_resource7_date2_hrsreq +
    $program49_resource7_date2_hrsreq +
    $program50_resource7_date2_hrsreq
    ),0);

//Date 2 Utilization
  $resource7_date2_utilization =
    $resource7_date2_totalhrs / $resource7_hrs_total;

//Date 2 Resources Required
  $resource7_date2_resourcesreq =
    ceil($resource7_date2_totalhrs / $resource7_hrs_available);

    //-----------------------------------------------------------Resource 7, Date 3
    //Resource 7, Date 3 Batch Factors
    $program1_resource7_date3_batchfactor =
      $program1_date3 / $program1_resource7_batch;

    $program2_resource7_date3_batchfactor =
      $program2_date3 / $program2_resource7_batch;

    $program3_resource7_date3_batchfactor =
      $program3_date3 / $program3_resource7_batch;

    $program4_resource7_date3_batchfactor =
      $program4_date3 / $program4_resource7_batch;

    $program5_resource7_date3_batchfactor =
      $program5_date3 / $program5_resource7_batch;

    $program6_resource7_date3_batchfactor =
      $program6_date3 / $program6_resource7_batch;

    $program7_resource7_date3_batchfactor =
      $program7_date3 / $program7_resource7_batch;

    $program8_resource7_date3_batchfactor =
      $program8_date3 / $program8_resource7_batch;

    $program9_resource7_date3_batchfactor =
      $program9_date3 / $program9_resource7_batch;

    $program10_resource7_date3_batchfactor =
      $program10_date3 / $program10_resource7_batch;

    $program11_resource7_date3_batchfactor =
      $program11_date3 / $program10_resource7_batch;

    $program12_resource7_date3_batchfactor =
      $program12_date3 / $program10_resource7_batch;

    $program13_resource7_date3_batchfactor =
      $program13_date3 / $program10_resource7_batch;

    $program14_resource7_date3_batchfactor =
      $program14_date3 / $program10_resource7_batch;

    $program15_resource7_date3_batchfactor =
      $program15_date3 / $program10_resource7_batch;

    $program16_resource7_date3_batchfactor =
      $program16_date3 / $program10_resource7_batch;

    $program17_resource7_date3_batchfactor =
      $program17_date3 / $program10_resource7_batch;

    $program18_resource7_date3_batchfactor =
      $program18_date3 / $program10_resource7_batch;

    $program19_resource7_date3_batchfactor =
      $program19_date3 / $program10_resource7_batch;

    $program20_resource7_date3_batchfactor =
      $program20_date3 / $program10_resource7_batch;

    $program21_resource7_date3_batchfactor =
      $program21_date3 / $program10_resource7_batch;

    $program22_resource7_date3_batchfactor =
      $program22_date3 / $program10_resource7_batch;

    $program23_resource7_date3_batchfactor =
      $program23_date3 / $program10_resource7_batch;

    $program24_resource7_date3_batchfactor =
      $program24_date3 / $program10_resource7_batch;

    $program25_resource7_date3_batchfactor =
      $program25_date3 / $program10_resource7_batch;

    $program26_resource7_date3_batchfactor =
      $program26_date3 / $program10_resource7_batch;

    $program27_resource7_date3_batchfactor =
      $program27_date3 / $program10_resource7_batch;

    $program28_resource7_date3_batchfactor =
      $program28_date3 / $program10_resource7_batch;

    $program29_resource7_date3_batchfactor =
      $program29_date3 / $program10_resource7_batch;

    $program30_resource7_date3_batchfactor =
      $program30_date3 / $program10_resource7_batch;

    $program31_resource7_date3_batchfactor =
      $program31_date3 / $program10_resource7_batch;

    $program32_resource7_date3_batchfactor =
      $program32_date3 / $program10_resource7_batch;

    $program33_resource7_date3_batchfactor =
      $program33_date3 / $program10_resource7_batch;

    $program34_resource7_date3_batchfactor =
      $program34_date3 / $program10_resource7_batch;

    $program35_resource7_date3_batchfactor =
      $program35_date3 / $program10_resource7_batch;

    $program36_resource7_date3_batchfactor =
      $program36_date3 / $program10_resource7_batch;

    $program37_resource7_date3_batchfactor =
      $program37_date3 / $program10_resource7_batch;

    $program38_resource7_date3_batchfactor =
      $program38_date3 / $program10_resource7_batch;

    $program39_resource7_date3_batchfactor =
      $program39_date3 / $program10_resource7_batch;

    $program40_resource7_date3_batchfactor =
      $program40_date3 / $program10_resource7_batch;

    $program41_resource7_date3_batchfactor =
      $program41_date3 / $program10_resource7_batch;

    $program42_resource7_date3_batchfactor =
      $program42_date3 / $program10_resource7_batch;

    $program43_resource7_date3_batchfactor =
      $program43_date3 / $program10_resource7_batch;

    $program44_resource7_date3_batchfactor =
      $program44_date3 / $program10_resource7_batch;

    $program45_resource7_date3_batchfactor =
      $program45_date3 / $program10_resource7_batch;

    $program46_resource7_date3_batchfactor =
      $program46_date3 / $program10_resource7_batch;

    $program47_resource7_date3_batchfactor =
      $program47_date3 / $program10_resource7_batch;

    $program48_resource7_date3_batchfactor =
      $program48_date3 / $program10_resource7_batch;

    $program49_resource7_date3_batchfactor =
      $program49_date3 / $program10_resource7_batch;

    $program50_resource7_date3_batchfactor =
      $program50_date3 / $program10_resource7_batch;

    //Resource 7, Date 3 Hrs Required, Utilization, & Resources Required
    //Progam Hrs Required
    $program1_resource7_date3_hrsreq =
      $program1_resource7_flow * $program1_resource7_date3_batchfactor;

    $program2_resource7_date3_hrsreq =
      $program2_resource7_flow * $program2_resource7_date3_batchfactor;

    $program3_resource7_date3_hrsreq =
      $program3_resource7_flow * $program3_resource7_date3_batchfactor;

    $program4_resource7_date3_hrsreq =
      $program4_resource7_flow * $program4_resource7_date3_batchfactor;

    $program5_resource7_date3_hrsreq =
      $program5_resource7_flow * $program5_resource7_date3_batchfactor;

    $program6_resource7_date3_hrsreq =
      $program6_resource7_flow * $program6_resource7_date3_batchfactor;

    $program7_resource7_date3_hrsreq =
      $program7_resource7_flow * $program7_resource7_date3_batchfactor;

    $program8_resource7_date3_hrsreq =
      $program8_resource7_flow * $program8_resource7_date3_batchfactor;

    $program9_resource7_date3_hrsreq =
      $program9_resource7_flow * $program9_resource7_date3_batchfactor;

    $program10_resource7_date3_hrsreq =
      $program10_resource7_flow * $program10_resource7_date3_batchfactor;

    $program11_resource7_date3_hrsreq =
      $program11_resource7_flow * $program11_resource7_date3_batchfactor;

    $program12_resource7_date3_hrsreq =
      $program12_resource7_flow * $program12_resource7_date3_batchfactor;

    $program13_resource7_date3_hrsreq =
      $program13_resource7_flow * $program13_resource7_date3_batchfactor;

    $program14_resource7_date3_hrsreq =
      $program14_resource7_flow * $program14_resource7_date3_batchfactor;

    $program15_resource7_date3_hrsreq =
      $program15_resource7_flow * $program15_resource7_date3_batchfactor;

    $program16_resource7_date3_hrsreq =
      $program16_resource7_flow * $program16_resource7_date3_batchfactor;

    $program17_resource7_date3_hrsreq =
      $program17_resource7_flow * $program17_resource7_date3_batchfactor;

    $program18_resource7_date3_hrsreq =
      $program18_resource7_flow * $program18_resource7_date3_batchfactor;

    $program19_resource7_date3_hrsreq =
      $program19_resource7_flow * $program19_resource7_date3_batchfactor;

    $program20_resource7_date3_hrsreq =
      $program20_resource7_flow * $program20_resource7_date3_batchfactor;

    $program21_resource7_date3_hrsreq =
      $program21_resource7_flow * $program21_resource7_date3_batchfactor;

    $program22_resource7_date3_hrsreq =
      $program22_resource7_flow * $program22_resource7_date3_batchfactor;

    $program23_resource7_date3_hrsreq =
      $program23_resource7_flow * $program23_resource7_date3_batchfactor;

    $program24_resource7_date3_hrsreq =
      $program24_resource7_flow * $program24_resource7_date3_batchfactor;

    $program25_resource7_date3_hrsreq =
      $program25_resource7_flow * $program25_resource7_date3_batchfactor;

    $program26_resource7_date3_hrsreq =
      $program26_resource7_flow * $program26_resource7_date3_batchfactor;

    $program27_resource7_date3_hrsreq =
      $program27_resource7_flow * $program27_resource7_date3_batchfactor;

    $program28_resource7_date3_hrsreq =
      $program28_resource7_flow * $program28_resource7_date3_batchfactor;

    $program29_resource7_date3_hrsreq =
      $program29_resource7_flow * $program29_resource7_date3_batchfactor;

    $program30_resource7_date3_hrsreq =
      $program30_resource7_flow * $program30_resource7_date3_batchfactor;

    $program31_resource7_date3_hrsreq =
      $program31_resource7_flow * $program31_resource7_date3_batchfactor;

    $program32_resource7_date3_hrsreq =
      $program32_resource7_flow * $program32_resource7_date3_batchfactor;

    $program33_resource7_date3_hrsreq =
      $program33_resource7_flow * $program33_resource7_date3_batchfactor;

    $program34_resource7_date3_hrsreq =
      $program34_resource7_flow * $program34_resource7_date3_batchfactor;

    $program35_resource7_date3_hrsreq =
      $program35_resource7_flow * $program35_resource7_date3_batchfactor;

    $program36_resource7_date3_hrsreq =
      $program36_resource7_flow * $program36_resource7_date3_batchfactor;

      $program37_resource7_date3_hrsreq =
        $program37_resource7_flow * $program37_resource7_date3_batchfactor;

    $program38_resource7_date3_hrsreq =
      $program38_resource7_flow * $program38_resource7_date3_batchfactor;

    $program39_resource7_date3_hrsreq =
      $program39_resource7_flow * $program39_resource7_date3_batchfactor;

    $program40_resource7_date3_hrsreq =
      $program40_resource7_flow * $program40_resource7_date3_batchfactor;

    $program41_resource7_date3_hrsreq =
      $program41_resource7_flow * $program41_resource7_date3_batchfactor;

    $program42_resource7_date3_hrsreq =
      $program42_resource7_flow * $program42_resource7_date3_batchfactor;

    $program43_resource7_date3_hrsreq =
      $program43_resource7_flow * $program43_resource7_date3_batchfactor;

    $program44_resource7_date3_hrsreq =
      $program44_resource7_flow * $program44_resource7_date3_batchfactor;

    $program45_resource7_date3_hrsreq =
      $program45_resource7_flow * $program45_resource7_date3_batchfactor;

    $program46_resource7_date3_hrsreq =
      $program46_resource7_flow * $program46_resource7_date3_batchfactor;

    $program47_resource7_date3_hrsreq =
      $program47_resource7_flow * $program47_resource7_date3_batchfactor;

    $program47_resource7_date3_hrsreq =
      $program47_resource7_flow * $program47_resource7_date3_batchfactor;

    $program48_resource7_date3_hrsreq =
      $program48_resource7_flow * $program48_resource7_date3_batchfactor;

    $program49_resource7_date3_hrsreq =
      $program49_resource7_flow * $program49_resource7_date3_batchfactor;

    $program50_resource7_date3_hrsreq =
      $program50_resource7_flow * $program50_resource7_date3_batchfactor;

  //Resource 7, Date 3 Total Hrs
    $resource7_date3_totalhrs =
      round((
      $program1_resource7_date3_hrsreq +
      $program2_resource7_date3_hrsreq +
      $program3_resource7_date3_hrsreq +
      $program4_resource7_date3_hrsreq +
      $program5_resource7_date3_hrsreq +
      $program6_resource7_date3_hrsreq +
      $program7_resource7_date3_hrsreq +
      $program8_resource7_date3_hrsreq +
      $program9_resource7_date3_hrsreq +
      $program10_resource7_date3_hrsreq +
      $program11_resource7_date3_hrsreq +
      $program12_resource7_date3_hrsreq +
      $program13_resource7_date3_hrsreq +
      $program14_resource7_date3_hrsreq +
      $program15_resource7_date3_hrsreq +
      $program16_resource7_date3_hrsreq +
      $program17_resource7_date3_hrsreq +
      $program18_resource7_date3_hrsreq +
      $program19_resource7_date3_hrsreq +
      $program20_resource7_date3_hrsreq +
      $program21_resource7_date3_hrsreq +
      $program22_resource7_date3_hrsreq +
      $program23_resource7_date3_hrsreq +
      $program24_resource7_date3_hrsreq +
      $program25_resource7_date3_hrsreq +
      $program26_resource7_date3_hrsreq +
      $program27_resource7_date3_hrsreq +
      $program28_resource7_date3_hrsreq +
      $program29_resource7_date3_hrsreq +
      $program30_resource7_date3_hrsreq +
      $program31_resource7_date3_hrsreq +
      $program32_resource7_date3_hrsreq +
      $program33_resource7_date3_hrsreq +
      $program34_resource7_date3_hrsreq +
      $program35_resource7_date3_hrsreq +
      $program36_resource7_date3_hrsreq +
      $program37_resource7_date3_hrsreq +
      $program38_resource7_date3_hrsreq +
      $program39_resource7_date3_hrsreq +
      $program40_resource7_date3_hrsreq +
      $program41_resource7_date3_hrsreq +
      $program42_resource7_date3_hrsreq +
      $program43_resource7_date3_hrsreq +
      $program44_resource7_date3_hrsreq +
      $program45_resource7_date3_hrsreq +
      $program46_resource7_date3_hrsreq +
      $program47_resource7_date3_hrsreq +
      $program48_resource7_date3_hrsreq +
      $program49_resource7_date3_hrsreq +
      $program50_resource7_date3_hrsreq
      ),0);

//Date 3 Utilization
$resource7_date3_utilization =
$resource7_date3_totalhrs / $resource7_hrs_total;

//Date 3 Resources Required
$resource7_date3_resourcesreq =
ceil($resource7_date3_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 4
//Resource 7, Date 4 Batch Factors
$program1_resource7_date4_batchfactor =
  $program1_date4 / $program1_resource7_batch;

$program2_resource7_date4_batchfactor =
  $program2_date4 / $program2_resource7_batch;

$program3_resource7_date4_batchfactor =
  $program3_date4 / $program3_resource7_batch;

$program4_resource7_date4_batchfactor =
  $program4_date4 / $program4_resource7_batch;

$program5_resource7_date4_batchfactor =
  $program5_date4 / $program5_resource7_batch;

$program6_resource7_date4_batchfactor =
  $program6_date4 / $program6_resource7_batch;

$program7_resource7_date4_batchfactor =
  $program7_date4 / $program7_resource7_batch;

$program8_resource7_date4_batchfactor =
  $program8_date4 / $program8_resource7_batch;

$program9_resource7_date4_batchfactor =
  $program9_date4 / $program9_resource7_batch;

$program10_resource7_date4_batchfactor =
  $program10_date4 / $program10_resource7_batch;

$program11_resource7_date4_batchfactor =
  $program11_date4 / $program10_resource7_batch;

$program12_resource7_date4_batchfactor =
  $program12_date4 / $program10_resource7_batch;

$program13_resource7_date4_batchfactor =
  $program13_date4 / $program10_resource7_batch;

$program14_resource7_date4_batchfactor =
  $program14_date4 / $program10_resource7_batch;

$program15_resource7_date4_batchfactor =
  $program15_date4 / $program10_resource7_batch;

$program16_resource7_date4_batchfactor =
  $program16_date4 / $program10_resource7_batch;

$program17_resource7_date4_batchfactor =
  $program17_date4 / $program10_resource7_batch;

$program18_resource7_date4_batchfactor =
  $program18_date4 / $program10_resource7_batch;

$program19_resource7_date4_batchfactor =
  $program19_date4 / $program10_resource7_batch;

$program20_resource7_date4_batchfactor =
  $program20_date4 / $program10_resource7_batch;

$program21_resource7_date4_batchfactor =
  $program21_date4 / $program10_resource7_batch;

$program22_resource7_date4_batchfactor =
  $program22_date4 / $program10_resource7_batch;

$program23_resource7_date4_batchfactor =
  $program23_date4 / $program10_resource7_batch;

$program24_resource7_date4_batchfactor =
  $program24_date4 / $program10_resource7_batch;

$program25_resource7_date4_batchfactor =
  $program25_date4 / $program10_resource7_batch;

$program26_resource7_date4_batchfactor =
  $program26_date4 / $program10_resource7_batch;

$program27_resource7_date4_batchfactor =
  $program27_date4 / $program10_resource7_batch;

$program28_resource7_date4_batchfactor =
  $program28_date4 / $program10_resource7_batch;

$program29_resource7_date4_batchfactor =
  $program29_date4 / $program10_resource7_batch;

$program30_resource7_date4_batchfactor =
  $program30_date4 / $program10_resource7_batch;

$program31_resource7_date4_batchfactor =
  $program31_date4 / $program10_resource7_batch;

$program32_resource7_date4_batchfactor =
  $program32_date4 / $program10_resource7_batch;

$program33_resource7_date4_batchfactor =
  $program33_date4 / $program10_resource7_batch;

$program34_resource7_date4_batchfactor =
  $program34_date4 / $program10_resource7_batch;

$program35_resource7_date4_batchfactor =
  $program35_date4 / $program10_resource7_batch;

$program36_resource7_date4_batchfactor =
  $program36_date4 / $program10_resource7_batch;

$program37_resource7_date4_batchfactor =
  $program37_date4 / $program10_resource7_batch;

$program38_resource7_date4_batchfactor =
  $program38_date4 / $program10_resource7_batch;

$program39_resource7_date4_batchfactor =
  $program39_date4 / $program10_resource7_batch;

$program40_resource7_date4_batchfactor =
  $program40_date4 / $program10_resource7_batch;

$program41_resource7_date4_batchfactor =
  $program41_date4 / $program10_resource7_batch;

$program42_resource7_date4_batchfactor =
  $program42_date4 / $program10_resource7_batch;

$program43_resource7_date4_batchfactor =
  $program43_date4 / $program10_resource7_batch;

$program44_resource7_date4_batchfactor =
  $program44_date4 / $program10_resource7_batch;

$program45_resource7_date4_batchfactor =
  $program45_date4 / $program10_resource7_batch;

$program46_resource7_date4_batchfactor =
  $program46_date4 / $program10_resource7_batch;

$program47_resource7_date4_batchfactor =
  $program47_date4 / $program10_resource7_batch;

$program48_resource7_date4_batchfactor =
  $program48_date4 / $program10_resource7_batch;

$program49_resource7_date4_batchfactor =
  $program49_date4 / $program10_resource7_batch;

$program50_resource7_date4_batchfactor =
  $program50_date4 / $program10_resource7_batch;

//Resource 7, Date 4 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date4_hrsreq =
  $program1_resource7_flow * $program1_resource7_date4_batchfactor;

$program2_resource7_date4_hrsreq =
  $program2_resource7_flow * $program2_resource7_date4_batchfactor;

$program3_resource7_date4_hrsreq =
  $program3_resource7_flow * $program3_resource7_date4_batchfactor;

$program4_resource7_date4_hrsreq =
  $program4_resource7_flow * $program4_resource7_date4_batchfactor;

$program5_resource7_date4_hrsreq =
  $program5_resource7_flow * $program5_resource7_date4_batchfactor;

$program6_resource7_date4_hrsreq =
  $program6_resource7_flow * $program6_resource7_date4_batchfactor;

$program7_resource7_date4_hrsreq =
  $program7_resource7_flow * $program7_resource7_date4_batchfactor;

$program8_resource7_date4_hrsreq =
  $program8_resource7_flow * $program8_resource7_date4_batchfactor;

$program9_resource7_date4_hrsreq =
  $program9_resource7_flow * $program9_resource7_date4_batchfactor;

$program10_resource7_date4_hrsreq =
  $program10_resource7_flow * $program10_resource7_date4_batchfactor;

$program11_resource7_date4_hrsreq =
  $program11_resource7_flow * $program11_resource7_date4_batchfactor;

$program12_resource7_date4_hrsreq =
  $program12_resource7_flow * $program12_resource7_date4_batchfactor;

$program13_resource7_date4_hrsreq =
  $program13_resource7_flow * $program13_resource7_date4_batchfactor;

$program14_resource7_date4_hrsreq =
  $program14_resource7_flow * $program14_resource7_date4_batchfactor;

$program15_resource7_date4_hrsreq =
  $program15_resource7_flow * $program15_resource7_date4_batchfactor;

$program16_resource7_date4_hrsreq =
  $program16_resource7_flow * $program16_resource7_date4_batchfactor;

$program17_resource7_date4_hrsreq =
  $program17_resource7_flow * $program17_resource7_date4_batchfactor;

$program18_resource7_date4_hrsreq =
  $program18_resource7_flow * $program18_resource7_date4_batchfactor;

$program19_resource7_date4_hrsreq =
  $program19_resource7_flow * $program19_resource7_date4_batchfactor;

$program20_resource7_date4_hrsreq =
  $program20_resource7_flow * $program20_resource7_date4_batchfactor;

$program21_resource7_date4_hrsreq =
  $program21_resource7_flow * $program21_resource7_date4_batchfactor;

$program22_resource7_date4_hrsreq =
  $program22_resource7_flow * $program22_resource7_date4_batchfactor;

$program23_resource7_date4_hrsreq =
  $program23_resource7_flow * $program23_resource7_date4_batchfactor;

$program24_resource7_date4_hrsreq =
  $program24_resource7_flow * $program24_resource7_date4_batchfactor;

$program25_resource7_date4_hrsreq =
  $program25_resource7_flow * $program25_resource7_date4_batchfactor;

$program26_resource7_date4_hrsreq =
  $program26_resource7_flow * $program26_resource7_date4_batchfactor;

$program27_resource7_date4_hrsreq =
  $program27_resource7_flow * $program27_resource7_date4_batchfactor;

$program28_resource7_date4_hrsreq =
  $program28_resource7_flow * $program28_resource7_date4_batchfactor;

$program29_resource7_date4_hrsreq =
  $program29_resource7_flow * $program29_resource7_date4_batchfactor;

$program30_resource7_date4_hrsreq =
  $program30_resource7_flow * $program30_resource7_date4_batchfactor;

$program31_resource7_date4_hrsreq =
  $program31_resource7_flow * $program31_resource7_date4_batchfactor;

$program32_resource7_date4_hrsreq =
  $program32_resource7_flow * $program32_resource7_date4_batchfactor;

$program33_resource7_date4_hrsreq =
  $program33_resource7_flow * $program33_resource7_date4_batchfactor;

$program34_resource7_date4_hrsreq =
  $program34_resource7_flow * $program34_resource7_date4_batchfactor;

$program35_resource7_date4_hrsreq =
  $program35_resource7_flow * $program35_resource7_date4_batchfactor;

$program36_resource7_date4_hrsreq =
  $program36_resource7_flow * $program36_resource7_date4_batchfactor;

  $program37_resource7_date4_hrsreq =
    $program37_resource7_flow * $program37_resource7_date4_batchfactor;

$program38_resource7_date4_hrsreq =
  $program38_resource7_flow * $program38_resource7_date4_batchfactor;

$program39_resource7_date4_hrsreq =
  $program39_resource7_flow * $program39_resource7_date4_batchfactor;

$program40_resource7_date4_hrsreq =
  $program40_resource7_flow * $program40_resource7_date4_batchfactor;

$program41_resource7_date4_hrsreq =
  $program41_resource7_flow * $program41_resource7_date4_batchfactor;

$program42_resource7_date4_hrsreq =
  $program42_resource7_flow * $program42_resource7_date4_batchfactor;

$program43_resource7_date4_hrsreq =
  $program43_resource7_flow * $program43_resource7_date4_batchfactor;

$program44_resource7_date4_hrsreq =
  $program44_resource7_flow * $program44_resource7_date4_batchfactor;

$program45_resource7_date4_hrsreq =
  $program45_resource7_flow * $program45_resource7_date4_batchfactor;

$program46_resource7_date4_hrsreq =
  $program46_resource7_flow * $program46_resource7_date4_batchfactor;

$program47_resource7_date4_hrsreq =
  $program47_resource7_flow * $program47_resource7_date4_batchfactor;

$program47_resource7_date4_hrsreq =
  $program47_resource7_flow * $program47_resource7_date4_batchfactor;

$program48_resource7_date4_hrsreq =
  $program48_resource7_flow * $program48_resource7_date4_batchfactor;

$program49_resource7_date4_hrsreq =
  $program49_resource7_flow * $program49_resource7_date4_batchfactor;

$program50_resource7_date4_hrsreq =
  $program50_resource7_flow * $program50_resource7_date4_batchfactor;

//Resource 7, Date 4 Total Hrs
$resource7_date4_totalhrs =
  round((
  $program1_resource7_date4_hrsreq +
  $program2_resource7_date4_hrsreq +
  $program3_resource7_date4_hrsreq +
  $program4_resource7_date4_hrsreq +
  $program5_resource7_date4_hrsreq +
  $program6_resource7_date4_hrsreq +
  $program7_resource7_date4_hrsreq +
  $program8_resource7_date4_hrsreq +
  $program9_resource7_date4_hrsreq +
  $program10_resource7_date4_hrsreq +
  $program11_resource7_date4_hrsreq +
  $program12_resource7_date4_hrsreq +
  $program13_resource7_date4_hrsreq +
  $program14_resource7_date4_hrsreq +
  $program15_resource7_date4_hrsreq +
  $program16_resource7_date4_hrsreq +
  $program17_resource7_date4_hrsreq +
  $program18_resource7_date4_hrsreq +
  $program19_resource7_date4_hrsreq +
  $program20_resource7_date4_hrsreq +
  $program21_resource7_date4_hrsreq +
  $program22_resource7_date4_hrsreq +
  $program23_resource7_date4_hrsreq +
  $program24_resource7_date4_hrsreq +
  $program25_resource7_date4_hrsreq +
  $program26_resource7_date4_hrsreq +
  $program27_resource7_date4_hrsreq +
  $program28_resource7_date4_hrsreq +
  $program29_resource7_date4_hrsreq +
  $program30_resource7_date4_hrsreq +
  $program31_resource7_date4_hrsreq +
  $program32_resource7_date4_hrsreq +
  $program33_resource7_date4_hrsreq +
  $program34_resource7_date4_hrsreq +
  $program35_resource7_date4_hrsreq +
  $program36_resource7_date4_hrsreq +
  $program37_resource7_date4_hrsreq +
  $program38_resource7_date4_hrsreq +
  $program39_resource7_date4_hrsreq +
  $program40_resource7_date4_hrsreq +
  $program41_resource7_date4_hrsreq +
  $program42_resource7_date4_hrsreq +
  $program43_resource7_date4_hrsreq +
  $program44_resource7_date4_hrsreq +
  $program45_resource7_date4_hrsreq +
  $program46_resource7_date4_hrsreq +
  $program47_resource7_date4_hrsreq +
  $program48_resource7_date4_hrsreq +
  $program49_resource7_date4_hrsreq +
  $program50_resource7_date4_hrsreq
  ),0);

//Date 4 Utilization
$resource7_date4_utilization =
$resource7_date4_totalhrs / $resource7_hrs_total;

//Date 4 Resources Required
$resource7_date4_resourcesreq =
ceil($resource7_date4_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 5
//Resource 7, Date 5 Batch Factors
$program1_resource7_date5_batchfactor =
  $program1_date5 / $program1_resource7_batch;

$program2_resource7_date5_batchfactor =
  $program2_date5 / $program2_resource7_batch;

$program3_resource7_date5_batchfactor =
  $program3_date5 / $program3_resource7_batch;

$program4_resource7_date5_batchfactor =
  $program4_date5 / $program4_resource7_batch;

$program5_resource7_date5_batchfactor =
  $program5_date5 / $program5_resource7_batch;

$program6_resource7_date5_batchfactor =
  $program6_date5 / $program6_resource7_batch;

$program7_resource7_date5_batchfactor =
  $program7_date5 / $program7_resource7_batch;

$program8_resource7_date5_batchfactor =
  $program8_date5 / $program8_resource7_batch;

$program9_resource7_date5_batchfactor =
  $program9_date5 / $program9_resource7_batch;

$program10_resource7_date5_batchfactor =
  $program10_date5 / $program10_resource7_batch;

$program11_resource7_date5_batchfactor =
  $program11_date5 / $program10_resource7_batch;

$program12_resource7_date5_batchfactor =
  $program12_date5 / $program10_resource7_batch;

$program13_resource7_date5_batchfactor =
  $program13_date5 / $program10_resource7_batch;

$program14_resource7_date5_batchfactor =
  $program14_date5 / $program10_resource7_batch;

$program15_resource7_date5_batchfactor =
  $program15_date5 / $program10_resource7_batch;

$program16_resource7_date5_batchfactor =
  $program16_date5 / $program10_resource7_batch;

$program17_resource7_date5_batchfactor =
  $program17_date5 / $program10_resource7_batch;

$program18_resource7_date5_batchfactor =
  $program18_date5 / $program10_resource7_batch;

$program19_resource7_date5_batchfactor =
  $program19_date5 / $program10_resource7_batch;

$program20_resource7_date5_batchfactor =
  $program20_date5 / $program10_resource7_batch;

$program21_resource7_date5_batchfactor =
  $program21_date5 / $program10_resource7_batch;

$program22_resource7_date5_batchfactor =
  $program22_date5 / $program10_resource7_batch;

$program23_resource7_date5_batchfactor =
  $program23_date5 / $program10_resource7_batch;

$program24_resource7_date5_batchfactor =
  $program24_date5 / $program10_resource7_batch;

$program25_resource7_date5_batchfactor =
  $program25_date5 / $program10_resource7_batch;

$program26_resource7_date5_batchfactor =
  $program26_date5 / $program10_resource7_batch;

$program27_resource7_date5_batchfactor =
  $program27_date5 / $program10_resource7_batch;

$program28_resource7_date5_batchfactor =
  $program28_date5 / $program10_resource7_batch;

$program29_resource7_date5_batchfactor =
  $program29_date5 / $program10_resource7_batch;

$program30_resource7_date5_batchfactor =
  $program30_date5 / $program10_resource7_batch;

$program31_resource7_date5_batchfactor =
  $program31_date5 / $program10_resource7_batch;

$program32_resource7_date5_batchfactor =
  $program32_date5 / $program10_resource7_batch;

$program33_resource7_date5_batchfactor =
  $program33_date5 / $program10_resource7_batch;

$program34_resource7_date5_batchfactor =
  $program34_date5 / $program10_resource7_batch;

$program35_resource7_date5_batchfactor =
  $program35_date5 / $program10_resource7_batch;

$program36_resource7_date5_batchfactor =
  $program36_date5 / $program10_resource7_batch;

$program37_resource7_date5_batchfactor =
  $program37_date5 / $program10_resource7_batch;

$program38_resource7_date5_batchfactor =
  $program38_date5 / $program10_resource7_batch;

$program39_resource7_date5_batchfactor =
  $program39_date5 / $program10_resource7_batch;

$program40_resource7_date5_batchfactor =
  $program40_date5 / $program10_resource7_batch;

$program41_resource7_date5_batchfactor =
  $program41_date5 / $program10_resource7_batch;

$program42_resource7_date5_batchfactor =
  $program42_date5 / $program10_resource7_batch;

$program43_resource7_date5_batchfactor =
  $program43_date5 / $program10_resource7_batch;

$program44_resource7_date5_batchfactor =
  $program44_date5 / $program10_resource7_batch;

$program45_resource7_date5_batchfactor =
  $program45_date5 / $program10_resource7_batch;

$program46_resource7_date5_batchfactor =
  $program46_date5 / $program10_resource7_batch;

$program47_resource7_date5_batchfactor =
  $program47_date5 / $program10_resource7_batch;

$program48_resource7_date5_batchfactor =
  $program48_date5 / $program10_resource7_batch;

$program49_resource7_date5_batchfactor =
  $program49_date5 / $program10_resource7_batch;

$program50_resource7_date5_batchfactor =
  $program50_date5 / $program10_resource7_batch;

//Resource 7, Date 5 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date5_hrsreq =
  $program1_resource7_flow * $program1_resource7_date5_batchfactor;

$program2_resource7_date5_hrsreq =
  $program2_resource7_flow * $program2_resource7_date5_batchfactor;

$program3_resource7_date5_hrsreq =
  $program3_resource7_flow * $program3_resource7_date5_batchfactor;

$program4_resource7_date5_hrsreq =
  $program4_resource7_flow * $program4_resource7_date5_batchfactor;

$program5_resource7_date5_hrsreq =
  $program5_resource7_flow * $program5_resource7_date5_batchfactor;

$program6_resource7_date5_hrsreq =
  $program6_resource7_flow * $program6_resource7_date5_batchfactor;

$program7_resource7_date5_hrsreq =
  $program7_resource7_flow * $program7_resource7_date5_batchfactor;

$program8_resource7_date5_hrsreq =
  $program8_resource7_flow * $program8_resource7_date5_batchfactor;

$program9_resource7_date5_hrsreq =
  $program9_resource7_flow * $program9_resource7_date5_batchfactor;

$program10_resource7_date5_hrsreq =
  $program10_resource7_flow * $program10_resource7_date5_batchfactor;

$program11_resource7_date5_hrsreq =
  $program11_resource7_flow * $program11_resource7_date5_batchfactor;

$program12_resource7_date5_hrsreq =
  $program12_resource7_flow * $program12_resource7_date5_batchfactor;

$program13_resource7_date5_hrsreq =
  $program13_resource7_flow * $program13_resource7_date5_batchfactor;

$program14_resource7_date5_hrsreq =
  $program14_resource7_flow * $program14_resource7_date5_batchfactor;

$program15_resource7_date5_hrsreq =
  $program15_resource7_flow * $program15_resource7_date5_batchfactor;

$program16_resource7_date5_hrsreq =
  $program16_resource7_flow * $program16_resource7_date5_batchfactor;

$program17_resource7_date5_hrsreq =
  $program17_resource7_flow * $program17_resource7_date5_batchfactor;

$program18_resource7_date5_hrsreq =
  $program18_resource7_flow * $program18_resource7_date5_batchfactor;

$program19_resource7_date5_hrsreq =
  $program19_resource7_flow * $program19_resource7_date5_batchfactor;

$program20_resource7_date5_hrsreq =
  $program20_resource7_flow * $program20_resource7_date5_batchfactor;

$program21_resource7_date5_hrsreq =
  $program21_resource7_flow * $program21_resource7_date5_batchfactor;

$program22_resource7_date5_hrsreq =
  $program22_resource7_flow * $program22_resource7_date5_batchfactor;

$program23_resource7_date5_hrsreq =
  $program23_resource7_flow * $program23_resource7_date5_batchfactor;

$program24_resource7_date5_hrsreq =
  $program24_resource7_flow * $program24_resource7_date5_batchfactor;

$program25_resource7_date5_hrsreq =
  $program25_resource7_flow * $program25_resource7_date5_batchfactor;

$program26_resource7_date5_hrsreq =
  $program26_resource7_flow * $program26_resource7_date5_batchfactor;

$program27_resource7_date5_hrsreq =
  $program27_resource7_flow * $program27_resource7_date5_batchfactor;

$program28_resource7_date5_hrsreq =
  $program28_resource7_flow * $program28_resource7_date5_batchfactor;

$program29_resource7_date5_hrsreq =
  $program29_resource7_flow * $program29_resource7_date5_batchfactor;

$program30_resource7_date5_hrsreq =
  $program30_resource7_flow * $program30_resource7_date5_batchfactor;

$program31_resource7_date5_hrsreq =
  $program31_resource7_flow * $program31_resource7_date5_batchfactor;

$program32_resource7_date5_hrsreq =
  $program32_resource7_flow * $program32_resource7_date5_batchfactor;

$program33_resource7_date5_hrsreq =
  $program33_resource7_flow * $program33_resource7_date5_batchfactor;

$program34_resource7_date5_hrsreq =
  $program34_resource7_flow * $program34_resource7_date5_batchfactor;

$program35_resource7_date5_hrsreq =
  $program35_resource7_flow * $program35_resource7_date5_batchfactor;

$program36_resource7_date5_hrsreq =
  $program36_resource7_flow * $program36_resource7_date5_batchfactor;

  $program37_resource7_date5_hrsreq =
    $program37_resource7_flow * $program37_resource7_date5_batchfactor;

$program38_resource7_date5_hrsreq =
  $program38_resource7_flow * $program38_resource7_date5_batchfactor;

$program39_resource7_date5_hrsreq =
  $program39_resource7_flow * $program39_resource7_date5_batchfactor;

$program40_resource7_date5_hrsreq =
  $program40_resource7_flow * $program40_resource7_date5_batchfactor;

$program41_resource7_date5_hrsreq =
  $program41_resource7_flow * $program41_resource7_date5_batchfactor;

$program42_resource7_date5_hrsreq =
  $program42_resource7_flow * $program42_resource7_date5_batchfactor;

$program43_resource7_date5_hrsreq =
  $program43_resource7_flow * $program43_resource7_date5_batchfactor;

$program44_resource7_date5_hrsreq =
  $program44_resource7_flow * $program44_resource7_date5_batchfactor;

$program45_resource7_date5_hrsreq =
  $program45_resource7_flow * $program45_resource7_date5_batchfactor;

$program46_resource7_date5_hrsreq =
  $program46_resource7_flow * $program46_resource7_date5_batchfactor;

$program47_resource7_date5_hrsreq =
  $program47_resource7_flow * $program47_resource7_date5_batchfactor;

$program47_resource7_date5_hrsreq =
  $program47_resource7_flow * $program47_resource7_date5_batchfactor;

$program48_resource7_date5_hrsreq =
  $program48_resource7_flow * $program48_resource7_date5_batchfactor;

$program49_resource7_date5_hrsreq =
  $program49_resource7_flow * $program49_resource7_date5_batchfactor;

$program50_resource7_date5_hrsreq =
  $program50_resource7_flow * $program50_resource7_date5_batchfactor;

//Resource 7, Date 5 Total Hrs
$resource7_date5_totalhrs =
  round((
  $program1_resource7_date5_hrsreq +
  $program2_resource7_date5_hrsreq +
  $program3_resource7_date5_hrsreq +
  $program4_resource7_date5_hrsreq +
  $program5_resource7_date5_hrsreq +
  $program6_resource7_date5_hrsreq +
  $program7_resource7_date5_hrsreq +
  $program8_resource7_date5_hrsreq +
  $program9_resource7_date5_hrsreq +
  $program10_resource7_date5_hrsreq +
  $program11_resource7_date5_hrsreq +
  $program12_resource7_date5_hrsreq +
  $program13_resource7_date5_hrsreq +
  $program14_resource7_date5_hrsreq +
  $program15_resource7_date5_hrsreq +
  $program16_resource7_date5_hrsreq +
  $program17_resource7_date5_hrsreq +
  $program18_resource7_date5_hrsreq +
  $program19_resource7_date5_hrsreq +
  $program20_resource7_date5_hrsreq +
  $program21_resource7_date5_hrsreq +
  $program22_resource7_date5_hrsreq +
  $program23_resource7_date5_hrsreq +
  $program24_resource7_date5_hrsreq +
  $program25_resource7_date5_hrsreq +
  $program26_resource7_date5_hrsreq +
  $program27_resource7_date5_hrsreq +
  $program28_resource7_date5_hrsreq +
  $program29_resource7_date5_hrsreq +
  $program30_resource7_date5_hrsreq +
  $program31_resource7_date5_hrsreq +
  $program32_resource7_date5_hrsreq +
  $program33_resource7_date5_hrsreq +
  $program34_resource7_date5_hrsreq +
  $program35_resource7_date5_hrsreq +
  $program36_resource7_date5_hrsreq +
  $program37_resource7_date5_hrsreq +
  $program38_resource7_date5_hrsreq +
  $program39_resource7_date5_hrsreq +
  $program40_resource7_date5_hrsreq +
  $program41_resource7_date5_hrsreq +
  $program42_resource7_date5_hrsreq +
  $program43_resource7_date5_hrsreq +
  $program44_resource7_date5_hrsreq +
  $program45_resource7_date5_hrsreq +
  $program46_resource7_date5_hrsreq +
  $program47_resource7_date5_hrsreq +
  $program48_resource7_date5_hrsreq +
  $program49_resource7_date5_hrsreq +
  $program50_resource7_date5_hrsreq
  ),0);

//Date 5 Utilization
$resource7_date5_utilization =
$resource7_date5_totalhrs / $resource7_hrs_total;

//Date 5 Resources Required
$resource7_date5_resourcesreq =
ceil($resource7_date5_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 6
//Resource 7, Date 6 Batch Factors
$program1_resource7_date6_batchfactor =
  $program1_date6 / $program1_resource7_batch;

$program2_resource7_date6_batchfactor =
  $program2_date6 / $program2_resource7_batch;

$program3_resource7_date6_batchfactor =
  $program3_date6 / $program3_resource7_batch;

$program4_resource7_date6_batchfactor =
  $program4_date6 / $program4_resource7_batch;

$program5_resource7_date6_batchfactor =
  $program5_date6 / $program5_resource7_batch;

$program6_resource7_date6_batchfactor =
  $program6_date6 / $program6_resource7_batch;

$program7_resource7_date6_batchfactor =
  $program7_date6 / $program7_resource7_batch;

$program8_resource7_date6_batchfactor =
  $program8_date6 / $program8_resource7_batch;

$program9_resource7_date6_batchfactor =
  $program9_date6 / $program9_resource7_batch;

$program10_resource7_date6_batchfactor =
  $program10_date6 / $program10_resource7_batch;

$program11_resource7_date6_batchfactor =
  $program11_date6 / $program10_resource7_batch;

$program12_resource7_date6_batchfactor =
  $program12_date6 / $program10_resource7_batch;

$program13_resource7_date6_batchfactor =
  $program13_date6 / $program10_resource7_batch;

$program14_resource7_date6_batchfactor =
  $program14_date6 / $program10_resource7_batch;

$program15_resource7_date6_batchfactor =
  $program15_date6 / $program10_resource7_batch;

$program16_resource7_date6_batchfactor =
  $program16_date6 / $program10_resource7_batch;

$program17_resource7_date6_batchfactor =
  $program17_date6 / $program10_resource7_batch;

$program18_resource7_date6_batchfactor =
  $program18_date6 / $program10_resource7_batch;

$program19_resource7_date6_batchfactor =
  $program19_date6 / $program10_resource7_batch;

$program20_resource7_date6_batchfactor =
  $program20_date6 / $program10_resource7_batch;

$program21_resource7_date6_batchfactor =
  $program21_date6 / $program10_resource7_batch;

$program22_resource7_date6_batchfactor =
  $program22_date6 / $program10_resource7_batch;

$program23_resource7_date6_batchfactor =
  $program23_date6 / $program10_resource7_batch;

$program24_resource7_date6_batchfactor =
  $program24_date6 / $program10_resource7_batch;

$program25_resource7_date6_batchfactor =
  $program25_date6 / $program10_resource7_batch;

$program26_resource7_date6_batchfactor =
  $program26_date6 / $program10_resource7_batch;

$program27_resource7_date6_batchfactor =
  $program27_date6 / $program10_resource7_batch;

$program28_resource7_date6_batchfactor =
  $program28_date6 / $program10_resource7_batch;

$program29_resource7_date6_batchfactor =
  $program29_date6 / $program10_resource7_batch;

$program30_resource7_date6_batchfactor =
  $program30_date6 / $program10_resource7_batch;

$program31_resource7_date6_batchfactor =
  $program31_date6 / $program10_resource7_batch;

$program32_resource7_date6_batchfactor =
  $program32_date6 / $program10_resource7_batch;

$program33_resource7_date6_batchfactor =
  $program33_date6 / $program10_resource7_batch;

$program34_resource7_date6_batchfactor =
  $program34_date6 / $program10_resource7_batch;

$program35_resource7_date6_batchfactor =
  $program35_date6 / $program10_resource7_batch;

$program36_resource7_date6_batchfactor =
  $program36_date6 / $program10_resource7_batch;

$program37_resource7_date6_batchfactor =
  $program37_date6 / $program10_resource7_batch;

$program38_resource7_date6_batchfactor =
  $program38_date6 / $program10_resource7_batch;

$program39_resource7_date6_batchfactor =
  $program39_date6 / $program10_resource7_batch;

$program40_resource7_date6_batchfactor =
  $program40_date6 / $program10_resource7_batch;

$program41_resource7_date6_batchfactor =
  $program41_date6 / $program10_resource7_batch;

$program42_resource7_date6_batchfactor =
  $program42_date6 / $program10_resource7_batch;

$program43_resource7_date6_batchfactor =
  $program43_date6 / $program10_resource7_batch;

$program44_resource7_date6_batchfactor =
  $program44_date6 / $program10_resource7_batch;

$program45_resource7_date6_batchfactor =
  $program45_date6 / $program10_resource7_batch;

$program46_resource7_date6_batchfactor =
  $program46_date6 / $program10_resource7_batch;

$program47_resource7_date6_batchfactor =
  $program47_date6 / $program10_resource7_batch;

$program48_resource7_date6_batchfactor =
  $program48_date6 / $program10_resource7_batch;

$program49_resource7_date6_batchfactor =
  $program49_date6 / $program10_resource7_batch;

$program50_resource7_date6_batchfactor =
  $program50_date6 / $program10_resource7_batch;

//Resource 7, Date 6 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date6_hrsreq =
  $program1_resource7_flow * $program1_resource7_date6_batchfactor;

$program2_resource7_date6_hrsreq =
  $program2_resource7_flow * $program2_resource7_date6_batchfactor;

$program3_resource7_date6_hrsreq =
  $program3_resource7_flow * $program3_resource7_date6_batchfactor;

$program4_resource7_date6_hrsreq =
  $program4_resource7_flow * $program4_resource7_date6_batchfactor;

$program5_resource7_date6_hrsreq =
  $program5_resource7_flow * $program5_resource7_date6_batchfactor;

$program6_resource7_date6_hrsreq =
  $program6_resource7_flow * $program6_resource7_date6_batchfactor;

$program7_resource7_date6_hrsreq =
  $program7_resource7_flow * $program7_resource7_date6_batchfactor;

$program8_resource7_date6_hrsreq =
  $program8_resource7_flow * $program8_resource7_date6_batchfactor;

$program9_resource7_date6_hrsreq =
  $program9_resource7_flow * $program9_resource7_date6_batchfactor;

$program10_resource7_date6_hrsreq =
  $program10_resource7_flow * $program10_resource7_date6_batchfactor;

$program11_resource7_date6_hrsreq =
  $program11_resource7_flow * $program11_resource7_date6_batchfactor;

$program12_resource7_date6_hrsreq =
  $program12_resource7_flow * $program12_resource7_date6_batchfactor;

$program13_resource7_date6_hrsreq =
  $program13_resource7_flow * $program13_resource7_date6_batchfactor;

$program14_resource7_date6_hrsreq =
  $program14_resource7_flow * $program14_resource7_date6_batchfactor;

$program15_resource7_date6_hrsreq =
  $program15_resource7_flow * $program15_resource7_date6_batchfactor;

$program16_resource7_date6_hrsreq =
  $program16_resource7_flow * $program16_resource7_date6_batchfactor;

$program17_resource7_date6_hrsreq =
  $program17_resource7_flow * $program17_resource7_date6_batchfactor;

$program18_resource7_date6_hrsreq =
  $program18_resource7_flow * $program18_resource7_date6_batchfactor;

$program19_resource7_date6_hrsreq =
  $program19_resource7_flow * $program19_resource7_date6_batchfactor;

$program20_resource7_date6_hrsreq =
  $program20_resource7_flow * $program20_resource7_date6_batchfactor;

$program21_resource7_date6_hrsreq =
  $program21_resource7_flow * $program21_resource7_date6_batchfactor;

$program22_resource7_date6_hrsreq =
  $program22_resource7_flow * $program22_resource7_date6_batchfactor;

$program23_resource7_date6_hrsreq =
  $program23_resource7_flow * $program23_resource7_date6_batchfactor;

$program24_resource7_date6_hrsreq =
  $program24_resource7_flow * $program24_resource7_date6_batchfactor;

$program25_resource7_date6_hrsreq =
  $program25_resource7_flow * $program25_resource7_date6_batchfactor;

$program26_resource7_date6_hrsreq =
  $program26_resource7_flow * $program26_resource7_date6_batchfactor;

$program27_resource7_date6_hrsreq =
  $program27_resource7_flow * $program27_resource7_date6_batchfactor;

$program28_resource7_date6_hrsreq =
  $program28_resource7_flow * $program28_resource7_date6_batchfactor;

$program29_resource7_date6_hrsreq =
  $program29_resource7_flow * $program29_resource7_date6_batchfactor;

$program30_resource7_date6_hrsreq =
  $program30_resource7_flow * $program30_resource7_date6_batchfactor;

$program31_resource7_date6_hrsreq =
  $program31_resource7_flow * $program31_resource7_date6_batchfactor;

$program32_resource7_date6_hrsreq =
  $program32_resource7_flow * $program32_resource7_date6_batchfactor;

$program33_resource7_date6_hrsreq =
  $program33_resource7_flow * $program33_resource7_date6_batchfactor;

$program34_resource7_date6_hrsreq =
  $program34_resource7_flow * $program34_resource7_date6_batchfactor;

$program35_resource7_date6_hrsreq =
  $program35_resource7_flow * $program35_resource7_date6_batchfactor;

$program36_resource7_date6_hrsreq =
  $program36_resource7_flow * $program36_resource7_date6_batchfactor;

  $program37_resource7_date6_hrsreq =
    $program37_resource7_flow * $program37_resource7_date6_batchfactor;

$program38_resource7_date6_hrsreq =
  $program38_resource7_flow * $program38_resource7_date6_batchfactor;

$program39_resource7_date6_hrsreq =
  $program39_resource7_flow * $program39_resource7_date6_batchfactor;

$program40_resource7_date6_hrsreq =
  $program40_resource7_flow * $program40_resource7_date6_batchfactor;

$program41_resource7_date6_hrsreq =
  $program41_resource7_flow * $program41_resource7_date6_batchfactor;

$program42_resource7_date6_hrsreq =
  $program42_resource7_flow * $program42_resource7_date6_batchfactor;

$program43_resource7_date6_hrsreq =
  $program43_resource7_flow * $program43_resource7_date6_batchfactor;

$program44_resource7_date6_hrsreq =
  $program44_resource7_flow * $program44_resource7_date6_batchfactor;

$program45_resource7_date6_hrsreq =
  $program45_resource7_flow * $program45_resource7_date6_batchfactor;

$program46_resource7_date6_hrsreq =
  $program46_resource7_flow * $program46_resource7_date6_batchfactor;

$program47_resource7_date6_hrsreq =
  $program47_resource7_flow * $program47_resource7_date6_batchfactor;

$program47_resource7_date6_hrsreq =
  $program47_resource7_flow * $program47_resource7_date6_batchfactor;

$program48_resource7_date6_hrsreq =
  $program48_resource7_flow * $program48_resource7_date6_batchfactor;

$program49_resource7_date6_hrsreq =
  $program49_resource7_flow * $program49_resource7_date6_batchfactor;

$program50_resource7_date6_hrsreq =
  $program50_resource7_flow * $program50_resource7_date6_batchfactor;

//Resource 7, Date 6 Total Hrs
$resource7_date6_totalhrs =
  round((
  $program1_resource7_date6_hrsreq +
  $program2_resource7_date6_hrsreq +
  $program3_resource7_date6_hrsreq +
  $program4_resource7_date6_hrsreq +
  $program5_resource7_date6_hrsreq +
  $program6_resource7_date6_hrsreq +
  $program7_resource7_date6_hrsreq +
  $program8_resource7_date6_hrsreq +
  $program9_resource7_date6_hrsreq +
  $program10_resource7_date6_hrsreq +
  $program11_resource7_date6_hrsreq +
  $program12_resource7_date6_hrsreq +
  $program13_resource7_date6_hrsreq +
  $program14_resource7_date6_hrsreq +
  $program15_resource7_date6_hrsreq +
  $program16_resource7_date6_hrsreq +
  $program17_resource7_date6_hrsreq +
  $program18_resource7_date6_hrsreq +
  $program19_resource7_date6_hrsreq +
  $program20_resource7_date6_hrsreq +
  $program21_resource7_date6_hrsreq +
  $program22_resource7_date6_hrsreq +
  $program23_resource7_date6_hrsreq +
  $program24_resource7_date6_hrsreq +
  $program25_resource7_date6_hrsreq +
  $program26_resource7_date6_hrsreq +
  $program27_resource7_date6_hrsreq +
  $program28_resource7_date6_hrsreq +
  $program29_resource7_date6_hrsreq +
  $program30_resource7_date6_hrsreq +
  $program31_resource7_date6_hrsreq +
  $program32_resource7_date6_hrsreq +
  $program33_resource7_date6_hrsreq +
  $program34_resource7_date6_hrsreq +
  $program35_resource7_date6_hrsreq +
  $program36_resource7_date6_hrsreq +
  $program37_resource7_date6_hrsreq +
  $program38_resource7_date6_hrsreq +
  $program39_resource7_date6_hrsreq +
  $program40_resource7_date6_hrsreq +
  $program41_resource7_date6_hrsreq +
  $program42_resource7_date6_hrsreq +
  $program43_resource7_date6_hrsreq +
  $program44_resource7_date6_hrsreq +
  $program45_resource7_date6_hrsreq +
  $program46_resource7_date6_hrsreq +
  $program47_resource7_date6_hrsreq +
  $program48_resource7_date6_hrsreq +
  $program49_resource7_date6_hrsreq +
  $program50_resource7_date6_hrsreq
  ),0);

//Date 6 Utilization
$resource7_date6_utilization =
$resource7_date6_totalhrs / $resource7_hrs_total;

//Date 6 Resources Required
$resource7_date6_resourcesreq =
ceil($resource7_date6_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 7
//Resource 7, Date 7 Batch Factors
$program1_resource7_date7_batchfactor =
  $program1_date7 / $program1_resource7_batch;

$program2_resource7_date7_batchfactor =
  $program2_date7 / $program2_resource7_batch;

$program3_resource7_date7_batchfactor =
  $program3_date7 / $program3_resource7_batch;

$program4_resource7_date7_batchfactor =
  $program4_date7 / $program4_resource7_batch;

$program5_resource7_date7_batchfactor =
  $program5_date7 / $program5_resource7_batch;

$program6_resource7_date7_batchfactor =
  $program6_date7 / $program6_resource7_batch;

$program7_resource7_date7_batchfactor =
  $program7_date7 / $program7_resource7_batch;

$program8_resource7_date7_batchfactor =
  $program8_date7 / $program8_resource7_batch;

$program9_resource7_date7_batchfactor =
  $program9_date7 / $program9_resource7_batch;

$program10_resource7_date7_batchfactor =
  $program10_date7 / $program10_resource7_batch;

$program11_resource7_date7_batchfactor =
  $program11_date7 / $program10_resource7_batch;

$program12_resource7_date7_batchfactor =
  $program12_date7 / $program10_resource7_batch;

$program13_resource7_date7_batchfactor =
  $program13_date7 / $program10_resource7_batch;

$program14_resource7_date7_batchfactor =
  $program14_date7 / $program10_resource7_batch;

$program15_resource7_date7_batchfactor =
  $program15_date7 / $program10_resource7_batch;

$program16_resource7_date7_batchfactor =
  $program16_date7 / $program10_resource7_batch;

$program17_resource7_date7_batchfactor =
  $program17_date7 / $program10_resource7_batch;

$program18_resource7_date7_batchfactor =
  $program18_date7 / $program10_resource7_batch;

$program19_resource7_date7_batchfactor =
  $program19_date7 / $program10_resource7_batch;

$program20_resource7_date7_batchfactor =
  $program20_date7 / $program10_resource7_batch;

$program21_resource7_date7_batchfactor =
  $program21_date7 / $program10_resource7_batch;

$program22_resource7_date7_batchfactor =
  $program22_date7 / $program10_resource7_batch;

$program23_resource7_date7_batchfactor =
  $program23_date7 / $program10_resource7_batch;

$program24_resource7_date7_batchfactor =
  $program24_date7 / $program10_resource7_batch;

$program25_resource7_date7_batchfactor =
  $program25_date7 / $program10_resource7_batch;

$program26_resource7_date7_batchfactor =
  $program26_date7 / $program10_resource7_batch;

$program27_resource7_date7_batchfactor =
  $program27_date7 / $program10_resource7_batch;

$program28_resource7_date7_batchfactor =
  $program28_date7 / $program10_resource7_batch;

$program29_resource7_date7_batchfactor =
  $program29_date7 / $program10_resource7_batch;

$program30_resource7_date7_batchfactor =
  $program30_date7 / $program10_resource7_batch;

$program31_resource7_date7_batchfactor =
  $program31_date7 / $program10_resource7_batch;

$program32_resource7_date7_batchfactor =
  $program32_date7 / $program10_resource7_batch;

$program33_resource7_date7_batchfactor =
  $program33_date7 / $program10_resource7_batch;

$program34_resource7_date7_batchfactor =
  $program34_date7 / $program10_resource7_batch;

$program35_resource7_date7_batchfactor =
  $program35_date7 / $program10_resource7_batch;

$program36_resource7_date7_batchfactor =
  $program36_date7 / $program10_resource7_batch;

$program37_resource7_date7_batchfactor =
  $program37_date7 / $program10_resource7_batch;

$program38_resource7_date7_batchfactor =
  $program38_date7 / $program10_resource7_batch;

$program39_resource7_date7_batchfactor =
  $program39_date7 / $program10_resource7_batch;

$program40_resource7_date7_batchfactor =
  $program40_date7 / $program10_resource7_batch;

$program41_resource7_date7_batchfactor =
  $program41_date7 / $program10_resource7_batch;

$program42_resource7_date7_batchfactor =
  $program42_date7 / $program10_resource7_batch;

$program43_resource7_date7_batchfactor =
  $program43_date7 / $program10_resource7_batch;

$program44_resource7_date7_batchfactor =
  $program44_date7 / $program10_resource7_batch;

$program45_resource7_date7_batchfactor =
  $program45_date7 / $program10_resource7_batch;

$program46_resource7_date7_batchfactor =
  $program46_date7 / $program10_resource7_batch;

$program47_resource7_date7_batchfactor =
  $program47_date7 / $program10_resource7_batch;

$program48_resource7_date7_batchfactor =
  $program48_date7 / $program10_resource7_batch;

$program49_resource7_date7_batchfactor =
  $program49_date7 / $program10_resource7_batch;

$program50_resource7_date7_batchfactor =
  $program50_date7 / $program10_resource7_batch;

//Resource 7, Date 7 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date7_hrsreq =
  $program1_resource7_flow * $program1_resource7_date7_batchfactor;

$program2_resource7_date7_hrsreq =
  $program2_resource7_flow * $program2_resource7_date7_batchfactor;

$program3_resource7_date7_hrsreq =
  $program3_resource7_flow * $program3_resource7_date7_batchfactor;

$program4_resource7_date7_hrsreq =
  $program4_resource7_flow * $program4_resource7_date7_batchfactor;

$program5_resource7_date7_hrsreq =
  $program5_resource7_flow * $program5_resource7_date7_batchfactor;

$program6_resource7_date7_hrsreq =
  $program6_resource7_flow * $program6_resource7_date7_batchfactor;

$program7_resource7_date7_hrsreq =
  $program7_resource7_flow * $program7_resource7_date7_batchfactor;

$program8_resource7_date7_hrsreq =
  $program8_resource7_flow * $program8_resource7_date7_batchfactor;

$program9_resource7_date7_hrsreq =
  $program9_resource7_flow * $program9_resource7_date7_batchfactor;

$program10_resource7_date7_hrsreq =
  $program10_resource7_flow * $program10_resource7_date7_batchfactor;

$program11_resource7_date7_hrsreq =
  $program11_resource7_flow * $program11_resource7_date7_batchfactor;

$program12_resource7_date7_hrsreq =
  $program12_resource7_flow * $program12_resource7_date7_batchfactor;

$program13_resource7_date7_hrsreq =
  $program13_resource7_flow * $program13_resource7_date7_batchfactor;

$program14_resource7_date7_hrsreq =
  $program14_resource7_flow * $program14_resource7_date7_batchfactor;

$program15_resource7_date7_hrsreq =
  $program15_resource7_flow * $program15_resource7_date7_batchfactor;

$program16_resource7_date7_hrsreq =
  $program16_resource7_flow * $program16_resource7_date7_batchfactor;

$program17_resource7_date7_hrsreq =
  $program17_resource7_flow * $program17_resource7_date7_batchfactor;

$program18_resource7_date7_hrsreq =
  $program18_resource7_flow * $program18_resource7_date7_batchfactor;

$program19_resource7_date7_hrsreq =
  $program19_resource7_flow * $program19_resource7_date7_batchfactor;

$program20_resource7_date7_hrsreq =
  $program20_resource7_flow * $program20_resource7_date7_batchfactor;

$program21_resource7_date7_hrsreq =
  $program21_resource7_flow * $program21_resource7_date7_batchfactor;

$program22_resource7_date7_hrsreq =
  $program22_resource7_flow * $program22_resource7_date7_batchfactor;

$program23_resource7_date7_hrsreq =
  $program23_resource7_flow * $program23_resource7_date7_batchfactor;

$program24_resource7_date7_hrsreq =
  $program24_resource7_flow * $program24_resource7_date7_batchfactor;

$program25_resource7_date7_hrsreq =
  $program25_resource7_flow * $program25_resource7_date7_batchfactor;

$program26_resource7_date7_hrsreq =
  $program26_resource7_flow * $program26_resource7_date7_batchfactor;

$program27_resource7_date7_hrsreq =
  $program27_resource7_flow * $program27_resource7_date7_batchfactor;

$program28_resource7_date7_hrsreq =
  $program28_resource7_flow * $program28_resource7_date7_batchfactor;

$program29_resource7_date7_hrsreq =
  $program29_resource7_flow * $program29_resource7_date7_batchfactor;

$program30_resource7_date7_hrsreq =
  $program30_resource7_flow * $program30_resource7_date7_batchfactor;

$program31_resource7_date7_hrsreq =
  $program31_resource7_flow * $program31_resource7_date7_batchfactor;

$program32_resource7_date7_hrsreq =
  $program32_resource7_flow * $program32_resource7_date7_batchfactor;

$program33_resource7_date7_hrsreq =
  $program33_resource7_flow * $program33_resource7_date7_batchfactor;

$program34_resource7_date7_hrsreq =
  $program34_resource7_flow * $program34_resource7_date7_batchfactor;

$program35_resource7_date7_hrsreq =
  $program35_resource7_flow * $program35_resource7_date7_batchfactor;

$program36_resource7_date7_hrsreq =
  $program36_resource7_flow * $program36_resource7_date7_batchfactor;

  $program37_resource7_date7_hrsreq =
    $program37_resource7_flow * $program37_resource7_date7_batchfactor;

$program38_resource7_date7_hrsreq =
  $program38_resource7_flow * $program38_resource7_date7_batchfactor;

$program39_resource7_date7_hrsreq =
  $program39_resource7_flow * $program39_resource7_date7_batchfactor;

$program40_resource7_date7_hrsreq =
  $program40_resource7_flow * $program40_resource7_date7_batchfactor;

$program41_resource7_date7_hrsreq =
  $program41_resource7_flow * $program41_resource7_date7_batchfactor;

$program42_resource7_date7_hrsreq =
  $program42_resource7_flow * $program42_resource7_date7_batchfactor;

$program43_resource7_date7_hrsreq =
  $program43_resource7_flow * $program43_resource7_date7_batchfactor;

$program44_resource7_date7_hrsreq =
  $program44_resource7_flow * $program44_resource7_date7_batchfactor;

$program45_resource7_date7_hrsreq =
  $program45_resource7_flow * $program45_resource7_date7_batchfactor;

$program46_resource7_date7_hrsreq =
  $program46_resource7_flow * $program46_resource7_date7_batchfactor;

$program47_resource7_date7_hrsreq =
  $program47_resource7_flow * $program47_resource7_date7_batchfactor;

$program47_resource7_date7_hrsreq =
  $program47_resource7_flow * $program47_resource7_date7_batchfactor;

$program48_resource7_date7_hrsreq =
  $program48_resource7_flow * $program48_resource7_date7_batchfactor;

$program49_resource7_date7_hrsreq =
  $program49_resource7_flow * $program49_resource7_date7_batchfactor;

$program50_resource7_date7_hrsreq =
  $program50_resource7_flow * $program50_resource7_date7_batchfactor;

//Resource 7, Date 7 Total Hrs
$resource7_date7_totalhrs =
  round((
  $program1_resource7_date7_hrsreq +
  $program2_resource7_date7_hrsreq +
  $program3_resource7_date7_hrsreq +
  $program4_resource7_date7_hrsreq +
  $program5_resource7_date7_hrsreq +
  $program6_resource7_date7_hrsreq +
  $program7_resource7_date7_hrsreq +
  $program8_resource7_date7_hrsreq +
  $program9_resource7_date7_hrsreq +
  $program10_resource7_date7_hrsreq +
  $program11_resource7_date7_hrsreq +
  $program12_resource7_date7_hrsreq +
  $program13_resource7_date7_hrsreq +
  $program14_resource7_date7_hrsreq +
  $program15_resource7_date7_hrsreq +
  $program16_resource7_date7_hrsreq +
  $program17_resource7_date7_hrsreq +
  $program18_resource7_date7_hrsreq +
  $program19_resource7_date7_hrsreq +
  $program20_resource7_date7_hrsreq +
  $program21_resource7_date7_hrsreq +
  $program22_resource7_date7_hrsreq +
  $program23_resource7_date7_hrsreq +
  $program24_resource7_date7_hrsreq +
  $program25_resource7_date7_hrsreq +
  $program26_resource7_date7_hrsreq +
  $program27_resource7_date7_hrsreq +
  $program28_resource7_date7_hrsreq +
  $program29_resource7_date7_hrsreq +
  $program30_resource7_date7_hrsreq +
  $program31_resource7_date7_hrsreq +
  $program32_resource7_date7_hrsreq +
  $program33_resource7_date7_hrsreq +
  $program34_resource7_date7_hrsreq +
  $program35_resource7_date7_hrsreq +
  $program36_resource7_date7_hrsreq +
  $program37_resource7_date7_hrsreq +
  $program38_resource7_date7_hrsreq +
  $program39_resource7_date7_hrsreq +
  $program40_resource7_date7_hrsreq +
  $program41_resource7_date7_hrsreq +
  $program42_resource7_date7_hrsreq +
  $program43_resource7_date7_hrsreq +
  $program44_resource7_date7_hrsreq +
  $program45_resource7_date7_hrsreq +
  $program46_resource7_date7_hrsreq +
  $program47_resource7_date7_hrsreq +
  $program48_resource7_date7_hrsreq +
  $program49_resource7_date7_hrsreq +
  $program50_resource7_date7_hrsreq
  ),0);

//Date 7 Utilization
$resource7_date7_utilization =
$resource7_date7_totalhrs / $resource7_hrs_total;

//Date 7 Resources Required
$resource7_date7_resourcesreq =
ceil($resource7_date7_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 8
//Resource 7, Date 8 Batch Factors
$program1_resource7_date8_batchfactor =
  $program1_date8 / $program1_resource7_batch;

$program2_resource7_date8_batchfactor =
  $program2_date8 / $program2_resource7_batch;

$program3_resource7_date8_batchfactor =
  $program3_date8 / $program3_resource7_batch;

$program4_resource7_date8_batchfactor =
  $program4_date8 / $program4_resource7_batch;

$program5_resource7_date8_batchfactor =
  $program5_date8 / $program5_resource7_batch;

$program6_resource7_date8_batchfactor =
  $program6_date8 / $program6_resource7_batch;

$program7_resource7_date8_batchfactor =
  $program7_date8 / $program7_resource7_batch;

$program8_resource7_date8_batchfactor =
  $program8_date8 / $program8_resource7_batch;

$program9_resource7_date8_batchfactor =
  $program9_date8 / $program9_resource7_batch;

$program10_resource7_date8_batchfactor =
  $program10_date8 / $program10_resource7_batch;

$program11_resource7_date8_batchfactor =
  $program11_date8 / $program10_resource7_batch;

$program12_resource7_date8_batchfactor =
  $program12_date8 / $program10_resource7_batch;

$program13_resource7_date8_batchfactor =
  $program13_date8 / $program10_resource7_batch;

$program14_resource7_date8_batchfactor =
  $program14_date8 / $program10_resource7_batch;

$program15_resource7_date8_batchfactor =
  $program15_date8 / $program10_resource7_batch;

$program16_resource7_date8_batchfactor =
  $program16_date8 / $program10_resource7_batch;

$program17_resource7_date8_batchfactor =
  $program17_date8 / $program10_resource7_batch;

$program18_resource7_date8_batchfactor =
  $program18_date8 / $program10_resource7_batch;

$program19_resource7_date8_batchfactor =
  $program19_date8 / $program10_resource7_batch;

$program20_resource7_date8_batchfactor =
  $program20_date8 / $program10_resource7_batch;

$program21_resource7_date8_batchfactor =
  $program21_date8 / $program10_resource7_batch;

$program22_resource7_date8_batchfactor =
  $program22_date8 / $program10_resource7_batch;

$program23_resource7_date8_batchfactor =
  $program23_date8 / $program10_resource7_batch;

$program24_resource7_date8_batchfactor =
  $program24_date8 / $program10_resource7_batch;

$program25_resource7_date8_batchfactor =
  $program25_date8 / $program10_resource7_batch;

$program26_resource7_date8_batchfactor =
  $program26_date8 / $program10_resource7_batch;

$program27_resource7_date8_batchfactor =
  $program27_date8 / $program10_resource7_batch;

$program28_resource7_date8_batchfactor =
  $program28_date8 / $program10_resource7_batch;

$program29_resource7_date8_batchfactor =
  $program29_date8 / $program10_resource7_batch;

$program30_resource7_date8_batchfactor =
  $program30_date8 / $program10_resource7_batch;

$program31_resource7_date8_batchfactor =
  $program31_date8 / $program10_resource7_batch;

$program32_resource7_date8_batchfactor =
  $program32_date8 / $program10_resource7_batch;

$program33_resource7_date8_batchfactor =
  $program33_date8 / $program10_resource7_batch;

$program34_resource7_date8_batchfactor =
  $program34_date8 / $program10_resource7_batch;

$program35_resource7_date8_batchfactor =
  $program35_date8 / $program10_resource7_batch;

$program36_resource7_date8_batchfactor =
  $program36_date8 / $program10_resource7_batch;

$program37_resource7_date8_batchfactor =
  $program37_date8 / $program10_resource7_batch;

$program38_resource7_date8_batchfactor =
  $program38_date8 / $program10_resource7_batch;

$program39_resource7_date8_batchfactor =
  $program39_date8 / $program10_resource7_batch;

$program40_resource7_date8_batchfactor =
  $program40_date8 / $program10_resource7_batch;

$program41_resource7_date8_batchfactor =
  $program41_date8 / $program10_resource7_batch;

$program42_resource7_date8_batchfactor =
  $program42_date8 / $program10_resource7_batch;

$program43_resource7_date8_batchfactor =
  $program43_date8 / $program10_resource7_batch;

$program44_resource7_date8_batchfactor =
  $program44_date8 / $program10_resource7_batch;

$program45_resource7_date8_batchfactor =
  $program45_date8 / $program10_resource7_batch;

$program46_resource7_date8_batchfactor =
  $program46_date8 / $program10_resource7_batch;

$program47_resource7_date8_batchfactor =
  $program47_date8 / $program10_resource7_batch;

$program48_resource7_date8_batchfactor =
  $program48_date8 / $program10_resource7_batch;

$program49_resource7_date8_batchfactor =
  $program49_date8 / $program10_resource7_batch;

$program50_resource7_date8_batchfactor =
  $program50_date8 / $program10_resource7_batch;

//Resource 7, Date 8 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date8_hrsreq =
  $program1_resource7_flow * $program1_resource7_date8_batchfactor;

$program2_resource7_date8_hrsreq =
  $program2_resource7_flow * $program2_resource7_date8_batchfactor;

$program3_resource7_date8_hrsreq =
  $program3_resource7_flow * $program3_resource7_date8_batchfactor;

$program4_resource7_date8_hrsreq =
  $program4_resource7_flow * $program4_resource7_date8_batchfactor;

$program5_resource7_date8_hrsreq =
  $program5_resource7_flow * $program5_resource7_date8_batchfactor;

$program6_resource7_date8_hrsreq =
  $program6_resource7_flow * $program6_resource7_date8_batchfactor;

$program7_resource7_date8_hrsreq =
  $program7_resource7_flow * $program7_resource7_date8_batchfactor;

$program8_resource7_date8_hrsreq =
  $program8_resource7_flow * $program8_resource7_date8_batchfactor;

$program9_resource7_date8_hrsreq =
  $program9_resource7_flow * $program9_resource7_date8_batchfactor;

$program10_resource7_date8_hrsreq =
  $program10_resource7_flow * $program10_resource7_date8_batchfactor;

$program11_resource7_date8_hrsreq =
  $program11_resource7_flow * $program11_resource7_date8_batchfactor;

$program12_resource7_date8_hrsreq =
  $program12_resource7_flow * $program12_resource7_date8_batchfactor;

$program13_resource7_date8_hrsreq =
  $program13_resource7_flow * $program13_resource7_date8_batchfactor;

$program14_resource7_date8_hrsreq =
  $program14_resource7_flow * $program14_resource7_date8_batchfactor;

$program15_resource7_date8_hrsreq =
  $program15_resource7_flow * $program15_resource7_date8_batchfactor;

$program16_resource7_date8_hrsreq =
  $program16_resource7_flow * $program16_resource7_date8_batchfactor;

$program17_resource7_date8_hrsreq =
  $program17_resource7_flow * $program17_resource7_date8_batchfactor;

$program18_resource7_date8_hrsreq =
  $program18_resource7_flow * $program18_resource7_date8_batchfactor;

$program19_resource7_date8_hrsreq =
  $program19_resource7_flow * $program19_resource7_date8_batchfactor;

$program20_resource7_date8_hrsreq =
  $program20_resource7_flow * $program20_resource7_date8_batchfactor;

$program21_resource7_date8_hrsreq =
  $program21_resource7_flow * $program21_resource7_date8_batchfactor;

$program22_resource7_date8_hrsreq =
  $program22_resource7_flow * $program22_resource7_date8_batchfactor;

$program23_resource7_date8_hrsreq =
  $program23_resource7_flow * $program23_resource7_date8_batchfactor;

$program24_resource7_date8_hrsreq =
  $program24_resource7_flow * $program24_resource7_date8_batchfactor;

$program25_resource7_date8_hrsreq =
  $program25_resource7_flow * $program25_resource7_date8_batchfactor;

$program26_resource7_date8_hrsreq =
  $program26_resource7_flow * $program26_resource7_date8_batchfactor;

$program27_resource7_date8_hrsreq =
  $program27_resource7_flow * $program27_resource7_date8_batchfactor;

$program28_resource7_date8_hrsreq =
  $program28_resource7_flow * $program28_resource7_date8_batchfactor;

$program29_resource7_date8_hrsreq =
  $program29_resource7_flow * $program29_resource7_date8_batchfactor;

$program30_resource7_date8_hrsreq =
  $program30_resource7_flow * $program30_resource7_date8_batchfactor;

$program31_resource7_date8_hrsreq =
  $program31_resource7_flow * $program31_resource7_date8_batchfactor;

$program32_resource7_date8_hrsreq =
  $program32_resource7_flow * $program32_resource7_date8_batchfactor;

$program33_resource7_date8_hrsreq =
  $program33_resource7_flow * $program33_resource7_date8_batchfactor;

$program34_resource7_date8_hrsreq =
  $program34_resource7_flow * $program34_resource7_date8_batchfactor;

$program35_resource7_date8_hrsreq =
  $program35_resource7_flow * $program35_resource7_date8_batchfactor;

$program36_resource7_date8_hrsreq =
  $program36_resource7_flow * $program36_resource7_date8_batchfactor;

  $program37_resource7_date8_hrsreq =
    $program37_resource7_flow * $program37_resource7_date8_batchfactor;

$program38_resource7_date8_hrsreq =
  $program38_resource7_flow * $program38_resource7_date8_batchfactor;

$program39_resource7_date8_hrsreq =
  $program39_resource7_flow * $program39_resource7_date8_batchfactor;

$program40_resource7_date8_hrsreq =
  $program40_resource7_flow * $program40_resource7_date8_batchfactor;

$program41_resource7_date8_hrsreq =
  $program41_resource7_flow * $program41_resource7_date8_batchfactor;

$program42_resource7_date8_hrsreq =
  $program42_resource7_flow * $program42_resource7_date8_batchfactor;

$program43_resource7_date8_hrsreq =
  $program43_resource7_flow * $program43_resource7_date8_batchfactor;

$program44_resource7_date8_hrsreq =
  $program44_resource7_flow * $program44_resource7_date8_batchfactor;

$program45_resource7_date8_hrsreq =
  $program45_resource7_flow * $program45_resource7_date8_batchfactor;

$program46_resource7_date8_hrsreq =
  $program46_resource7_flow * $program46_resource7_date8_batchfactor;

$program47_resource7_date8_hrsreq =
  $program47_resource7_flow * $program47_resource7_date8_batchfactor;

$program47_resource7_date8_hrsreq =
  $program47_resource7_flow * $program47_resource7_date8_batchfactor;

$program48_resource7_date8_hrsreq =
  $program48_resource7_flow * $program48_resource7_date8_batchfactor;

$program49_resource7_date8_hrsreq =
  $program49_resource7_flow * $program49_resource7_date8_batchfactor;

$program50_resource7_date8_hrsreq =
  $program50_resource7_flow * $program50_resource7_date8_batchfactor;

//Resource 7, Date 8 Total Hrs
$resource7_date8_totalhrs =
  round((
  $program1_resource7_date8_hrsreq +
  $program2_resource7_date8_hrsreq +
  $program3_resource7_date8_hrsreq +
  $program4_resource7_date8_hrsreq +
  $program5_resource7_date8_hrsreq +
  $program6_resource7_date8_hrsreq +
  $program7_resource7_date8_hrsreq +
  $program8_resource7_date8_hrsreq +
  $program9_resource7_date8_hrsreq +
  $program10_resource7_date8_hrsreq +
  $program11_resource7_date8_hrsreq +
  $program12_resource7_date8_hrsreq +
  $program13_resource7_date8_hrsreq +
  $program14_resource7_date8_hrsreq +
  $program15_resource7_date8_hrsreq +
  $program16_resource7_date8_hrsreq +
  $program17_resource7_date8_hrsreq +
  $program18_resource7_date8_hrsreq +
  $program19_resource7_date8_hrsreq +
  $program20_resource7_date8_hrsreq +
  $program21_resource7_date8_hrsreq +
  $program22_resource7_date8_hrsreq +
  $program23_resource7_date8_hrsreq +
  $program24_resource7_date8_hrsreq +
  $program25_resource7_date8_hrsreq +
  $program26_resource7_date8_hrsreq +
  $program27_resource7_date8_hrsreq +
  $program28_resource7_date8_hrsreq +
  $program29_resource7_date8_hrsreq +
  $program30_resource7_date8_hrsreq +
  $program31_resource7_date8_hrsreq +
  $program32_resource7_date8_hrsreq +
  $program33_resource7_date8_hrsreq +
  $program34_resource7_date8_hrsreq +
  $program35_resource7_date8_hrsreq +
  $program36_resource7_date8_hrsreq +
  $program37_resource7_date8_hrsreq +
  $program38_resource7_date8_hrsreq +
  $program39_resource7_date8_hrsreq +
  $program40_resource7_date8_hrsreq +
  $program41_resource7_date8_hrsreq +
  $program42_resource7_date8_hrsreq +
  $program43_resource7_date8_hrsreq +
  $program44_resource7_date8_hrsreq +
  $program45_resource7_date8_hrsreq +
  $program46_resource7_date8_hrsreq +
  $program47_resource7_date8_hrsreq +
  $program48_resource7_date8_hrsreq +
  $program49_resource7_date8_hrsreq +
  $program50_resource7_date8_hrsreq
  ),0);

//Date 8 Utilization
$resource7_date8_utilization =
$resource7_date8_totalhrs / $resource7_hrs_total;

//Date 8 Resources Required
$resource7_date8_resourcesreq =
ceil($resource7_date8_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 9
//Resource 7, Date 9 Batch Factors
$program1_resource7_date9_batchfactor =
  $program1_date9 / $program1_resource7_batch;

$program2_resource7_date9_batchfactor =
  $program2_date9 / $program2_resource7_batch;

$program3_resource7_date9_batchfactor =
  $program3_date9 / $program3_resource7_batch;

$program4_resource7_date9_batchfactor =
  $program4_date9 / $program4_resource7_batch;

$program5_resource7_date9_batchfactor =
  $program5_date9 / $program5_resource7_batch;

$program6_resource7_date9_batchfactor =
  $program6_date9 / $program6_resource7_batch;

$program7_resource7_date9_batchfactor =
  $program7_date9 / $program7_resource7_batch;

$program8_resource7_date9_batchfactor =
  $program8_date9 / $program8_resource7_batch;

$program9_resource7_date9_batchfactor =
  $program9_date9 / $program9_resource7_batch;

$program10_resource7_date9_batchfactor =
  $program10_date9 / $program10_resource7_batch;

$program11_resource7_date9_batchfactor =
  $program11_date9 / $program10_resource7_batch;

$program12_resource7_date9_batchfactor =
  $program12_date9 / $program10_resource7_batch;

$program13_resource7_date9_batchfactor =
  $program13_date9 / $program10_resource7_batch;

$program14_resource7_date9_batchfactor =
  $program14_date9 / $program10_resource7_batch;

$program15_resource7_date9_batchfactor =
  $program15_date9 / $program10_resource7_batch;

$program16_resource7_date9_batchfactor =
  $program16_date9 / $program10_resource7_batch;

$program17_resource7_date9_batchfactor =
  $program17_date9 / $program10_resource7_batch;

$program18_resource7_date9_batchfactor =
  $program18_date9 / $program10_resource7_batch;

$program19_resource7_date9_batchfactor =
  $program19_date9 / $program10_resource7_batch;

$program20_resource7_date9_batchfactor =
  $program20_date9 / $program10_resource7_batch;

$program21_resource7_date9_batchfactor =
  $program21_date9 / $program10_resource7_batch;

$program22_resource7_date9_batchfactor =
  $program22_date9 / $program10_resource7_batch;

$program23_resource7_date9_batchfactor =
  $program23_date9 / $program10_resource7_batch;

$program24_resource7_date9_batchfactor =
  $program24_date9 / $program10_resource7_batch;

$program25_resource7_date9_batchfactor =
  $program25_date9 / $program10_resource7_batch;

$program26_resource7_date9_batchfactor =
  $program26_date9 / $program10_resource7_batch;

$program27_resource7_date9_batchfactor =
  $program27_date9 / $program10_resource7_batch;

$program28_resource7_date9_batchfactor =
  $program28_date9 / $program10_resource7_batch;

$program29_resource7_date9_batchfactor =
  $program29_date9 / $program10_resource7_batch;

$program30_resource7_date9_batchfactor =
  $program30_date9 / $program10_resource7_batch;

$program31_resource7_date9_batchfactor =
  $program31_date9 / $program10_resource7_batch;

$program32_resource7_date9_batchfactor =
  $program32_date9 / $program10_resource7_batch;

$program33_resource7_date9_batchfactor =
  $program33_date9 / $program10_resource7_batch;

$program34_resource7_date9_batchfactor =
  $program34_date9 / $program10_resource7_batch;

$program35_resource7_date9_batchfactor =
  $program35_date9 / $program10_resource7_batch;

$program36_resource7_date9_batchfactor =
  $program36_date9 / $program10_resource7_batch;

$program37_resource7_date9_batchfactor =
  $program37_date9 / $program10_resource7_batch;

$program38_resource7_date9_batchfactor =
  $program38_date9 / $program10_resource7_batch;

$program39_resource7_date9_batchfactor =
  $program39_date9 / $program10_resource7_batch;

$program40_resource7_date9_batchfactor =
  $program40_date9 / $program10_resource7_batch;

$program41_resource7_date9_batchfactor =
  $program41_date9 / $program10_resource7_batch;

$program42_resource7_date9_batchfactor =
  $program42_date9 / $program10_resource7_batch;

$program43_resource7_date9_batchfactor =
  $program43_date9 / $program10_resource7_batch;

$program44_resource7_date9_batchfactor =
  $program44_date9 / $program10_resource7_batch;

$program45_resource7_date9_batchfactor =
  $program45_date9 / $program10_resource7_batch;

$program46_resource7_date9_batchfactor =
  $program46_date9 / $program10_resource7_batch;

$program47_resource7_date9_batchfactor =
  $program47_date9 / $program10_resource7_batch;

$program48_resource7_date9_batchfactor =
  $program48_date9 / $program10_resource7_batch;

$program49_resource7_date9_batchfactor =
  $program49_date9 / $program10_resource7_batch;

$program50_resource7_date9_batchfactor =
  $program50_date9 / $program10_resource7_batch;

//Resource 7, Date 9 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date9_hrsreq =
  $program1_resource7_flow * $program1_resource7_date9_batchfactor;

$program2_resource7_date9_hrsreq =
  $program2_resource7_flow * $program2_resource7_date9_batchfactor;

$program3_resource7_date9_hrsreq =
  $program3_resource7_flow * $program3_resource7_date9_batchfactor;

$program4_resource7_date9_hrsreq =
  $program4_resource7_flow * $program4_resource7_date9_batchfactor;

$program5_resource7_date9_hrsreq =
  $program5_resource7_flow * $program5_resource7_date9_batchfactor;

$program6_resource7_date9_hrsreq =
  $program6_resource7_flow * $program6_resource7_date9_batchfactor;

$program7_resource7_date9_hrsreq =
  $program7_resource7_flow * $program7_resource7_date9_batchfactor;

$program8_resource7_date9_hrsreq =
  $program8_resource7_flow * $program8_resource7_date9_batchfactor;

$program9_resource7_date9_hrsreq =
  $program9_resource7_flow * $program9_resource7_date9_batchfactor;

$program10_resource7_date9_hrsreq =
  $program10_resource7_flow * $program10_resource7_date9_batchfactor;

$program11_resource7_date9_hrsreq =
  $program11_resource7_flow * $program11_resource7_date9_batchfactor;

$program12_resource7_date9_hrsreq =
  $program12_resource7_flow * $program12_resource7_date9_batchfactor;

$program13_resource7_date9_hrsreq =
  $program13_resource7_flow * $program13_resource7_date9_batchfactor;

$program14_resource7_date9_hrsreq =
  $program14_resource7_flow * $program14_resource7_date9_batchfactor;

$program15_resource7_date9_hrsreq =
  $program15_resource7_flow * $program15_resource7_date9_batchfactor;

$program16_resource7_date9_hrsreq =
  $program16_resource7_flow * $program16_resource7_date9_batchfactor;

$program17_resource7_date9_hrsreq =
  $program17_resource7_flow * $program17_resource7_date9_batchfactor;

$program18_resource7_date9_hrsreq =
  $program18_resource7_flow * $program18_resource7_date9_batchfactor;

$program19_resource7_date9_hrsreq =
  $program19_resource7_flow * $program19_resource7_date9_batchfactor;

$program20_resource7_date9_hrsreq =
  $program20_resource7_flow * $program20_resource7_date9_batchfactor;

$program21_resource7_date9_hrsreq =
  $program21_resource7_flow * $program21_resource7_date9_batchfactor;

$program22_resource7_date9_hrsreq =
  $program22_resource7_flow * $program22_resource7_date9_batchfactor;

$program23_resource7_date9_hrsreq =
  $program23_resource7_flow * $program23_resource7_date9_batchfactor;

$program24_resource7_date9_hrsreq =
  $program24_resource7_flow * $program24_resource7_date9_batchfactor;

$program25_resource7_date9_hrsreq =
  $program25_resource7_flow * $program25_resource7_date9_batchfactor;

$program26_resource7_date9_hrsreq =
  $program26_resource7_flow * $program26_resource7_date9_batchfactor;

$program27_resource7_date9_hrsreq =
  $program27_resource7_flow * $program27_resource7_date9_batchfactor;

$program28_resource7_date9_hrsreq =
  $program28_resource7_flow * $program28_resource7_date9_batchfactor;

$program29_resource7_date9_hrsreq =
  $program29_resource7_flow * $program29_resource7_date9_batchfactor;

$program30_resource7_date9_hrsreq =
  $program30_resource7_flow * $program30_resource7_date9_batchfactor;

$program31_resource7_date9_hrsreq =
  $program31_resource7_flow * $program31_resource7_date9_batchfactor;

$program32_resource7_date9_hrsreq =
  $program32_resource7_flow * $program32_resource7_date9_batchfactor;

$program33_resource7_date9_hrsreq =
  $program33_resource7_flow * $program33_resource7_date9_batchfactor;

$program34_resource7_date9_hrsreq =
  $program34_resource7_flow * $program34_resource7_date9_batchfactor;

$program35_resource7_date9_hrsreq =
  $program35_resource7_flow * $program35_resource7_date9_batchfactor;

$program36_resource7_date9_hrsreq =
  $program36_resource7_flow * $program36_resource7_date9_batchfactor;

  $program37_resource7_date9_hrsreq =
    $program37_resource7_flow * $program37_resource7_date9_batchfactor;

$program38_resource7_date9_hrsreq =
  $program38_resource7_flow * $program38_resource7_date9_batchfactor;

$program39_resource7_date9_hrsreq =
  $program39_resource7_flow * $program39_resource7_date9_batchfactor;

$program40_resource7_date9_hrsreq =
  $program40_resource7_flow * $program40_resource7_date9_batchfactor;

$program41_resource7_date9_hrsreq =
  $program41_resource7_flow * $program41_resource7_date9_batchfactor;

$program42_resource7_date9_hrsreq =
  $program42_resource7_flow * $program42_resource7_date9_batchfactor;

$program43_resource7_date9_hrsreq =
  $program43_resource7_flow * $program43_resource7_date9_batchfactor;

$program44_resource7_date9_hrsreq =
  $program44_resource7_flow * $program44_resource7_date9_batchfactor;

$program45_resource7_date9_hrsreq =
  $program45_resource7_flow * $program45_resource7_date9_batchfactor;

$program46_resource7_date9_hrsreq =
  $program46_resource7_flow * $program46_resource7_date9_batchfactor;

$program47_resource7_date9_hrsreq =
  $program47_resource7_flow * $program47_resource7_date9_batchfactor;

$program47_resource7_date9_hrsreq =
  $program47_resource7_flow * $program47_resource7_date9_batchfactor;

$program48_resource7_date9_hrsreq =
  $program48_resource7_flow * $program48_resource7_date9_batchfactor;

$program49_resource7_date9_hrsreq =
  $program49_resource7_flow * $program49_resource7_date9_batchfactor;

$program50_resource7_date9_hrsreq =
  $program50_resource7_flow * $program50_resource7_date9_batchfactor;

//Resource 7, Date 9 Total Hrs
$resource7_date9_totalhrs =
  round((
  $program1_resource7_date9_hrsreq +
  $program2_resource7_date9_hrsreq +
  $program3_resource7_date9_hrsreq +
  $program4_resource7_date9_hrsreq +
  $program5_resource7_date9_hrsreq +
  $program6_resource7_date9_hrsreq +
  $program7_resource7_date9_hrsreq +
  $program8_resource7_date9_hrsreq +
  $program9_resource7_date9_hrsreq +
  $program10_resource7_date9_hrsreq +
  $program11_resource7_date9_hrsreq +
  $program12_resource7_date9_hrsreq +
  $program13_resource7_date9_hrsreq +
  $program14_resource7_date9_hrsreq +
  $program15_resource7_date9_hrsreq +
  $program16_resource7_date9_hrsreq +
  $program17_resource7_date9_hrsreq +
  $program18_resource7_date9_hrsreq +
  $program19_resource7_date9_hrsreq +
  $program20_resource7_date9_hrsreq +
  $program21_resource7_date9_hrsreq +
  $program22_resource7_date9_hrsreq +
  $program23_resource7_date9_hrsreq +
  $program24_resource7_date9_hrsreq +
  $program25_resource7_date9_hrsreq +
  $program26_resource7_date9_hrsreq +
  $program27_resource7_date9_hrsreq +
  $program28_resource7_date9_hrsreq +
  $program29_resource7_date9_hrsreq +
  $program30_resource7_date9_hrsreq +
  $program31_resource7_date9_hrsreq +
  $program32_resource7_date9_hrsreq +
  $program33_resource7_date9_hrsreq +
  $program34_resource7_date9_hrsreq +
  $program35_resource7_date9_hrsreq +
  $program36_resource7_date9_hrsreq +
  $program37_resource7_date9_hrsreq +
  $program38_resource7_date9_hrsreq +
  $program39_resource7_date9_hrsreq +
  $program40_resource7_date9_hrsreq +
  $program41_resource7_date9_hrsreq +
  $program42_resource7_date9_hrsreq +
  $program43_resource7_date9_hrsreq +
  $program44_resource7_date9_hrsreq +
  $program45_resource7_date9_hrsreq +
  $program46_resource7_date9_hrsreq +
  $program47_resource7_date9_hrsreq +
  $program48_resource7_date9_hrsreq +
  $program49_resource7_date9_hrsreq +
  $program50_resource7_date9_hrsreq
  ),0);

//Date 9 Utilization
$resource7_date9_utilization =
$resource7_date9_totalhrs / $resource7_hrs_total;

//Date 9 Resources Required
$resource7_date9_resourcesreq =
ceil($resource7_date9_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 10
//Resource 7, Date 10 Batch Factors
$program1_resource7_date10_batchfactor =
  $program1_date10 / $program1_resource7_batch;

$program2_resource7_date10_batchfactor =
  $program2_date10 / $program2_resource7_batch;

$program3_resource7_date10_batchfactor =
  $program3_date10 / $program3_resource7_batch;

$program4_resource7_date10_batchfactor =
  $program4_date10 / $program4_resource7_batch;

$program5_resource7_date10_batchfactor =
  $program5_date10 / $program5_resource7_batch;

$program6_resource7_date10_batchfactor =
  $program6_date10 / $program6_resource7_batch;

$program7_resource7_date10_batchfactor =
  $program7_date10 / $program7_resource7_batch;

$program8_resource7_date10_batchfactor =
  $program8_date10 / $program8_resource7_batch;

$program9_resource7_date10_batchfactor =
  $program9_date10 / $program9_resource7_batch;

$program10_resource7_date10_batchfactor =
  $program10_date10 / $program10_resource7_batch;

$program11_resource7_date10_batchfactor =
  $program11_date10 / $program10_resource7_batch;

$program12_resource7_date10_batchfactor =
  $program12_date10 / $program10_resource7_batch;

$program13_resource7_date10_batchfactor =
  $program13_date10 / $program10_resource7_batch;

$program14_resource7_date10_batchfactor =
  $program14_date10 / $program10_resource7_batch;

$program15_resource7_date10_batchfactor =
  $program15_date10 / $program10_resource7_batch;

$program16_resource7_date10_batchfactor =
  $program16_date10 / $program10_resource7_batch;

$program17_resource7_date10_batchfactor =
  $program17_date10 / $program10_resource7_batch;

$program18_resource7_date10_batchfactor =
  $program18_date10 / $program10_resource7_batch;

$program19_resource7_date10_batchfactor =
  $program19_date10 / $program10_resource7_batch;

$program20_resource7_date10_batchfactor =
  $program20_date10 / $program10_resource7_batch;

$program21_resource7_date10_batchfactor =
  $program21_date10 / $program10_resource7_batch;

$program22_resource7_date10_batchfactor =
  $program22_date10 / $program10_resource7_batch;

$program23_resource7_date10_batchfactor =
  $program23_date10 / $program10_resource7_batch;

$program24_resource7_date10_batchfactor =
  $program24_date10 / $program10_resource7_batch;

$program25_resource7_date10_batchfactor =
  $program25_date10 / $program10_resource7_batch;

$program26_resource7_date10_batchfactor =
  $program26_date10 / $program10_resource7_batch;

$program27_resource7_date10_batchfactor =
  $program27_date10 / $program10_resource7_batch;

$program28_resource7_date10_batchfactor =
  $program28_date10 / $program10_resource7_batch;

$program29_resource7_date10_batchfactor =
  $program29_date10 / $program10_resource7_batch;

$program30_resource7_date10_batchfactor =
  $program30_date10 / $program10_resource7_batch;

$program31_resource7_date10_batchfactor =
  $program31_date10 / $program10_resource7_batch;

$program32_resource7_date10_batchfactor =
  $program32_date10 / $program10_resource7_batch;

$program33_resource7_date10_batchfactor =
  $program33_date10 / $program10_resource7_batch;

$program34_resource7_date10_batchfactor =
  $program34_date10 / $program10_resource7_batch;

$program35_resource7_date10_batchfactor =
  $program35_date10 / $program10_resource7_batch;

$program36_resource7_date10_batchfactor =
  $program36_date10 / $program10_resource7_batch;

$program37_resource7_date10_batchfactor =
  $program37_date10 / $program10_resource7_batch;

$program38_resource7_date10_batchfactor =
  $program38_date10 / $program10_resource7_batch;

$program39_resource7_date10_batchfactor =
  $program39_date10 / $program10_resource7_batch;

$program40_resource7_date10_batchfactor =
  $program40_date10 / $program10_resource7_batch;

$program41_resource7_date10_batchfactor =
  $program41_date10 / $program10_resource7_batch;

$program42_resource7_date10_batchfactor =
  $program42_date10 / $program10_resource7_batch;

$program43_resource7_date10_batchfactor =
  $program43_date10 / $program10_resource7_batch;

$program44_resource7_date10_batchfactor =
  $program44_date10 / $program10_resource7_batch;

$program45_resource7_date10_batchfactor =
  $program45_date10 / $program10_resource7_batch;

$program46_resource7_date10_batchfactor =
  $program46_date10 / $program10_resource7_batch;

$program47_resource7_date10_batchfactor =
  $program47_date10 / $program10_resource7_batch;

$program48_resource7_date10_batchfactor =
  $program48_date10 / $program10_resource7_batch;

$program49_resource7_date10_batchfactor =
  $program49_date10 / $program10_resource7_batch;

$program50_resource7_date10_batchfactor =
  $program50_date10 / $program10_resource7_batch;

//Resource 7, Date 10 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date10_hrsreq =
  $program1_resource7_flow * $program1_resource7_date10_batchfactor;

$program2_resource7_date10_hrsreq =
  $program2_resource7_flow * $program2_resource7_date10_batchfactor;

$program3_resource7_date10_hrsreq =
  $program3_resource7_flow * $program3_resource7_date10_batchfactor;

$program4_resource7_date10_hrsreq =
  $program4_resource7_flow * $program4_resource7_date10_batchfactor;

$program5_resource7_date10_hrsreq =
  $program5_resource7_flow * $program5_resource7_date10_batchfactor;

$program6_resource7_date10_hrsreq =
  $program6_resource7_flow * $program6_resource7_date10_batchfactor;

$program7_resource7_date10_hrsreq =
  $program7_resource7_flow * $program7_resource7_date10_batchfactor;

$program8_resource7_date10_hrsreq =
  $program8_resource7_flow * $program8_resource7_date10_batchfactor;

$program9_resource7_date10_hrsreq =
  $program9_resource7_flow * $program9_resource7_date10_batchfactor;

$program10_resource7_date10_hrsreq =
  $program10_resource7_flow * $program10_resource7_date10_batchfactor;

$program11_resource7_date10_hrsreq =
  $program11_resource7_flow * $program11_resource7_date10_batchfactor;

$program12_resource7_date10_hrsreq =
  $program12_resource7_flow * $program12_resource7_date10_batchfactor;

$program13_resource7_date10_hrsreq =
  $program13_resource7_flow * $program13_resource7_date10_batchfactor;

$program14_resource7_date10_hrsreq =
  $program14_resource7_flow * $program14_resource7_date10_batchfactor;

$program15_resource7_date10_hrsreq =
  $program15_resource7_flow * $program15_resource7_date10_batchfactor;

$program16_resource7_date10_hrsreq =
  $program16_resource7_flow * $program16_resource7_date10_batchfactor;

$program17_resource7_date10_hrsreq =
  $program17_resource7_flow * $program17_resource7_date10_batchfactor;

$program18_resource7_date10_hrsreq =
  $program18_resource7_flow * $program18_resource7_date10_batchfactor;

$program19_resource7_date10_hrsreq =
  $program19_resource7_flow * $program19_resource7_date10_batchfactor;

$program20_resource7_date10_hrsreq =
  $program20_resource7_flow * $program20_resource7_date10_batchfactor;

$program21_resource7_date10_hrsreq =
  $program21_resource7_flow * $program21_resource7_date10_batchfactor;

$program22_resource7_date10_hrsreq =
  $program22_resource7_flow * $program22_resource7_date10_batchfactor;

$program23_resource7_date10_hrsreq =
  $program23_resource7_flow * $program23_resource7_date10_batchfactor;

$program24_resource7_date10_hrsreq =
  $program24_resource7_flow * $program24_resource7_date10_batchfactor;

$program25_resource7_date10_hrsreq =
  $program25_resource7_flow * $program25_resource7_date10_batchfactor;

$program26_resource7_date10_hrsreq =
  $program26_resource7_flow * $program26_resource7_date10_batchfactor;

$program27_resource7_date10_hrsreq =
  $program27_resource7_flow * $program27_resource7_date10_batchfactor;

$program28_resource7_date10_hrsreq =
  $program28_resource7_flow * $program28_resource7_date10_batchfactor;

$program29_resource7_date10_hrsreq =
  $program29_resource7_flow * $program29_resource7_date10_batchfactor;

$program30_resource7_date10_hrsreq =
  $program30_resource7_flow * $program30_resource7_date10_batchfactor;

$program31_resource7_date10_hrsreq =
  $program31_resource7_flow * $program31_resource7_date10_batchfactor;

$program32_resource7_date10_hrsreq =
  $program32_resource7_flow * $program32_resource7_date10_batchfactor;

$program33_resource7_date10_hrsreq =
  $program33_resource7_flow * $program33_resource7_date10_batchfactor;

$program34_resource7_date10_hrsreq =
  $program34_resource7_flow * $program34_resource7_date10_batchfactor;

$program35_resource7_date10_hrsreq =
  $program35_resource7_flow * $program35_resource7_date10_batchfactor;

$program36_resource7_date10_hrsreq =
  $program36_resource7_flow * $program36_resource7_date10_batchfactor;

  $program37_resource7_date10_hrsreq =
    $program37_resource7_flow * $program37_resource7_date10_batchfactor;

$program38_resource7_date10_hrsreq =
  $program38_resource7_flow * $program38_resource7_date10_batchfactor;

$program39_resource7_date10_hrsreq =
  $program39_resource7_flow * $program39_resource7_date10_batchfactor;

$program40_resource7_date10_hrsreq =
  $program40_resource7_flow * $program40_resource7_date10_batchfactor;

$program41_resource7_date10_hrsreq =
  $program41_resource7_flow * $program41_resource7_date10_batchfactor;

$program42_resource7_date10_hrsreq =
  $program42_resource7_flow * $program42_resource7_date10_batchfactor;

$program43_resource7_date10_hrsreq =
  $program43_resource7_flow * $program43_resource7_date10_batchfactor;

$program44_resource7_date10_hrsreq =
  $program44_resource7_flow * $program44_resource7_date10_batchfactor;

$program45_resource7_date10_hrsreq =
  $program45_resource7_flow * $program45_resource7_date10_batchfactor;

$program46_resource7_date10_hrsreq =
  $program46_resource7_flow * $program46_resource7_date10_batchfactor;

$program47_resource7_date10_hrsreq =
  $program47_resource7_flow * $program47_resource7_date10_batchfactor;

$program47_resource7_date10_hrsreq =
  $program47_resource7_flow * $program47_resource7_date10_batchfactor;

$program48_resource7_date10_hrsreq =
  $program48_resource7_flow * $program48_resource7_date10_batchfactor;

$program49_resource7_date10_hrsreq =
  $program49_resource7_flow * $program49_resource7_date10_batchfactor;

$program50_resource7_date10_hrsreq =
  $program50_resource7_flow * $program50_resource7_date10_batchfactor;

//Resource 7, Date 10 Total Hrs
$resource7_date10_totalhrs =
  round((
  $program1_resource7_date10_hrsreq +
  $program2_resource7_date10_hrsreq +
  $program3_resource7_date10_hrsreq +
  $program4_resource7_date10_hrsreq +
  $program5_resource7_date10_hrsreq +
  $program6_resource7_date10_hrsreq +
  $program7_resource7_date10_hrsreq +
  $program8_resource7_date10_hrsreq +
  $program9_resource7_date10_hrsreq +
  $program10_resource7_date10_hrsreq +
  $program11_resource7_date10_hrsreq +
  $program12_resource7_date10_hrsreq +
  $program13_resource7_date10_hrsreq +
  $program14_resource7_date10_hrsreq +
  $program15_resource7_date10_hrsreq +
  $program16_resource7_date10_hrsreq +
  $program17_resource7_date10_hrsreq +
  $program18_resource7_date10_hrsreq +
  $program19_resource7_date10_hrsreq +
  $program20_resource7_date10_hrsreq +
  $program21_resource7_date10_hrsreq +
  $program22_resource7_date10_hrsreq +
  $program23_resource7_date10_hrsreq +
  $program24_resource7_date10_hrsreq +
  $program25_resource7_date10_hrsreq +
  $program26_resource7_date10_hrsreq +
  $program27_resource7_date10_hrsreq +
  $program28_resource7_date10_hrsreq +
  $program29_resource7_date10_hrsreq +
  $program30_resource7_date10_hrsreq +
  $program31_resource7_date10_hrsreq +
  $program32_resource7_date10_hrsreq +
  $program33_resource7_date10_hrsreq +
  $program34_resource7_date10_hrsreq +
  $program35_resource7_date10_hrsreq +
  $program36_resource7_date10_hrsreq +
  $program37_resource7_date10_hrsreq +
  $program38_resource7_date10_hrsreq +
  $program39_resource7_date10_hrsreq +
  $program40_resource7_date10_hrsreq +
  $program41_resource7_date10_hrsreq +
  $program42_resource7_date10_hrsreq +
  $program43_resource7_date10_hrsreq +
  $program44_resource7_date10_hrsreq +
  $program45_resource7_date10_hrsreq +
  $program46_resource7_date10_hrsreq +
  $program47_resource7_date10_hrsreq +
  $program48_resource7_date10_hrsreq +
  $program49_resource7_date10_hrsreq +
  $program50_resource7_date10_hrsreq
  ),0);

//Date 10 Utilization
$resource7_date10_utilization =
$resource7_date10_totalhrs / $resource7_hrs_total;

//Date 10 Resources Required
$resource7_date10_resourcesreq =
ceil($resource7_date10_totalhrs / $resource7_hrs_available);


//-----------------------------------------------------------Resource 7, Date 11
//Resource 7, Date 11 Batch Factors
$program1_resource7_date11_batchfactor =
  $program1_date11 / $program1_resource7_batch;

$program2_resource7_date11_batchfactor =
  $program2_date11 / $program2_resource7_batch;

$program3_resource7_date11_batchfactor =
  $program3_date11 / $program3_resource7_batch;

$program4_resource7_date11_batchfactor =
  $program4_date11 / $program4_resource7_batch;

$program5_resource7_date11_batchfactor =
  $program5_date11 / $program5_resource7_batch;

$program6_resource7_date11_batchfactor =
  $program6_date11 / $program6_resource7_batch;

$program7_resource7_date11_batchfactor =
  $program7_date11 / $program7_resource7_batch;

$program8_resource7_date11_batchfactor =
  $program8_date11 / $program8_resource7_batch;

$program9_resource7_date11_batchfactor =
  $program9_date11 / $program9_resource7_batch;

$program10_resource7_date11_batchfactor =
  $program10_date11 / $program10_resource7_batch;

$program11_resource7_date11_batchfactor =
  $program11_date11 / $program10_resource7_batch;

$program12_resource7_date11_batchfactor =
  $program12_date11 / $program10_resource7_batch;

$program13_resource7_date11_batchfactor =
  $program13_date11 / $program10_resource7_batch;

$program14_resource7_date11_batchfactor =
  $program14_date11 / $program10_resource7_batch;

$program15_resource7_date11_batchfactor =
  $program15_date11 / $program10_resource7_batch;

$program16_resource7_date11_batchfactor =
  $program16_date11 / $program10_resource7_batch;

$program17_resource7_date11_batchfactor =
  $program17_date11 / $program10_resource7_batch;

$program18_resource7_date11_batchfactor =
  $program18_date11 / $program10_resource7_batch;

$program19_resource7_date11_batchfactor =
  $program19_date11 / $program10_resource7_batch;

$program20_resource7_date11_batchfactor =
  $program20_date11 / $program10_resource7_batch;

$program21_resource7_date11_batchfactor =
  $program21_date11 / $program10_resource7_batch;

$program22_resource7_date11_batchfactor =
  $program22_date11 / $program10_resource7_batch;

$program23_resource7_date11_batchfactor =
  $program23_date11 / $program10_resource7_batch;

$program24_resource7_date11_batchfactor =
  $program24_date11 / $program10_resource7_batch;

$program25_resource7_date11_batchfactor =
  $program25_date11 / $program10_resource7_batch;

$program26_resource7_date11_batchfactor =
  $program26_date11 / $program10_resource7_batch;

$program27_resource7_date11_batchfactor =
  $program27_date11 / $program10_resource7_batch;

$program28_resource7_date11_batchfactor =
  $program28_date11 / $program10_resource7_batch;

$program29_resource7_date11_batchfactor =
  $program29_date11 / $program10_resource7_batch;

$program30_resource7_date11_batchfactor =
  $program30_date11 / $program10_resource7_batch;

$program31_resource7_date11_batchfactor =
  $program31_date11 / $program10_resource7_batch;

$program32_resource7_date11_batchfactor =
  $program32_date11 / $program10_resource7_batch;

$program33_resource7_date11_batchfactor =
  $program33_date11 / $program10_resource7_batch;

$program34_resource7_date11_batchfactor =
  $program34_date11 / $program10_resource7_batch;

$program35_resource7_date11_batchfactor =
  $program35_date11 / $program10_resource7_batch;

$program36_resource7_date11_batchfactor =
  $program36_date11 / $program10_resource7_batch;

$program37_resource7_date11_batchfactor =
  $program37_date11 / $program10_resource7_batch;

$program38_resource7_date11_batchfactor =
  $program38_date11 / $program10_resource7_batch;

$program39_resource7_date11_batchfactor =
  $program39_date11 / $program10_resource7_batch;

$program40_resource7_date11_batchfactor =
  $program40_date11 / $program10_resource7_batch;

$program41_resource7_date11_batchfactor =
  $program41_date11 / $program10_resource7_batch;

$program42_resource7_date11_batchfactor =
  $program42_date11 / $program10_resource7_batch;

$program43_resource7_date11_batchfactor =
  $program43_date11 / $program10_resource7_batch;

$program44_resource7_date11_batchfactor =
  $program44_date11 / $program10_resource7_batch;

$program45_resource7_date11_batchfactor =
  $program45_date11 / $program10_resource7_batch;

$program46_resource7_date11_batchfactor =
  $program46_date11 / $program10_resource7_batch;

$program47_resource7_date11_batchfactor =
  $program47_date11 / $program10_resource7_batch;

$program48_resource7_date11_batchfactor =
  $program48_date11 / $program10_resource7_batch;

$program49_resource7_date11_batchfactor =
  $program49_date11 / $program10_resource7_batch;

$program50_resource7_date11_batchfactor =
  $program50_date11 / $program10_resource7_batch;

//Resource 7, Date 11 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date11_hrsreq =
  $program1_resource7_flow * $program1_resource7_date11_batchfactor;

$program2_resource7_date11_hrsreq =
  $program2_resource7_flow * $program2_resource7_date11_batchfactor;

$program3_resource7_date11_hrsreq =
  $program3_resource7_flow * $program3_resource7_date11_batchfactor;

$program4_resource7_date11_hrsreq =
  $program4_resource7_flow * $program4_resource7_date11_batchfactor;

$program5_resource7_date11_hrsreq =
  $program5_resource7_flow * $program5_resource7_date11_batchfactor;

$program6_resource7_date11_hrsreq =
  $program6_resource7_flow * $program6_resource7_date11_batchfactor;

$program7_resource7_date11_hrsreq =
  $program7_resource7_flow * $program7_resource7_date11_batchfactor;

$program8_resource7_date11_hrsreq =
  $program8_resource7_flow * $program8_resource7_date11_batchfactor;

$program9_resource7_date11_hrsreq =
  $program9_resource7_flow * $program9_resource7_date11_batchfactor;

$program10_resource7_date11_hrsreq =
  $program10_resource7_flow * $program10_resource7_date11_batchfactor;

$program11_resource7_date11_hrsreq =
  $program11_resource7_flow * $program11_resource7_date11_batchfactor;

$program12_resource7_date11_hrsreq =
  $program12_resource7_flow * $program12_resource7_date11_batchfactor;

$program13_resource7_date11_hrsreq =
  $program13_resource7_flow * $program13_resource7_date11_batchfactor;

$program14_resource7_date11_hrsreq =
  $program14_resource7_flow * $program14_resource7_date11_batchfactor;

$program15_resource7_date11_hrsreq =
  $program15_resource7_flow * $program15_resource7_date11_batchfactor;

$program16_resource7_date11_hrsreq =
  $program16_resource7_flow * $program16_resource7_date11_batchfactor;

$program17_resource7_date11_hrsreq =
  $program17_resource7_flow * $program17_resource7_date11_batchfactor;

$program18_resource7_date11_hrsreq =
  $program18_resource7_flow * $program18_resource7_date11_batchfactor;

$program19_resource7_date11_hrsreq =
  $program19_resource7_flow * $program19_resource7_date11_batchfactor;

$program20_resource7_date11_hrsreq =
  $program20_resource7_flow * $program20_resource7_date11_batchfactor;

$program21_resource7_date11_hrsreq =
  $program21_resource7_flow * $program21_resource7_date11_batchfactor;

$program22_resource7_date11_hrsreq =
  $program22_resource7_flow * $program22_resource7_date11_batchfactor;

$program23_resource7_date11_hrsreq =
  $program23_resource7_flow * $program23_resource7_date11_batchfactor;

$program24_resource7_date11_hrsreq =
  $program24_resource7_flow * $program24_resource7_date11_batchfactor;

$program25_resource7_date11_hrsreq =
  $program25_resource7_flow * $program25_resource7_date11_batchfactor;

$program26_resource7_date11_hrsreq =
  $program26_resource7_flow * $program26_resource7_date11_batchfactor;

$program27_resource7_date11_hrsreq =
  $program27_resource7_flow * $program27_resource7_date11_batchfactor;

$program28_resource7_date11_hrsreq =
  $program28_resource7_flow * $program28_resource7_date11_batchfactor;

$program29_resource7_date11_hrsreq =
  $program29_resource7_flow * $program29_resource7_date11_batchfactor;

$program30_resource7_date11_hrsreq =
  $program30_resource7_flow * $program30_resource7_date11_batchfactor;

$program31_resource7_date11_hrsreq =
  $program31_resource7_flow * $program31_resource7_date11_batchfactor;

$program32_resource7_date11_hrsreq =
  $program32_resource7_flow * $program32_resource7_date11_batchfactor;

$program33_resource7_date11_hrsreq =
  $program33_resource7_flow * $program33_resource7_date11_batchfactor;

$program34_resource7_date11_hrsreq =
  $program34_resource7_flow * $program34_resource7_date11_batchfactor;

$program35_resource7_date11_hrsreq =
  $program35_resource7_flow * $program35_resource7_date11_batchfactor;

$program36_resource7_date11_hrsreq =
  $program36_resource7_flow * $program36_resource7_date11_batchfactor;

  $program37_resource7_date11_hrsreq =
    $program37_resource7_flow * $program37_resource7_date11_batchfactor;

$program38_resource7_date11_hrsreq =
  $program38_resource7_flow * $program38_resource7_date11_batchfactor;

$program39_resource7_date11_hrsreq =
  $program39_resource7_flow * $program39_resource7_date11_batchfactor;

$program40_resource7_date11_hrsreq =
  $program40_resource7_flow * $program40_resource7_date11_batchfactor;

$program41_resource7_date11_hrsreq =
  $program41_resource7_flow * $program41_resource7_date11_batchfactor;

$program42_resource7_date11_hrsreq =
  $program42_resource7_flow * $program42_resource7_date11_batchfactor;

$program43_resource7_date11_hrsreq =
  $program43_resource7_flow * $program43_resource7_date11_batchfactor;

$program44_resource7_date11_hrsreq =
  $program44_resource7_flow * $program44_resource7_date11_batchfactor;

$program45_resource7_date11_hrsreq =
  $program45_resource7_flow * $program45_resource7_date11_batchfactor;

$program46_resource7_date11_hrsreq =
  $program46_resource7_flow * $program46_resource7_date11_batchfactor;

$program47_resource7_date11_hrsreq =
  $program47_resource7_flow * $program47_resource7_date11_batchfactor;

$program47_resource7_date11_hrsreq =
  $program47_resource7_flow * $program47_resource7_date11_batchfactor;

$program48_resource7_date11_hrsreq =
  $program48_resource7_flow * $program48_resource7_date11_batchfactor;

$program49_resource7_date11_hrsreq =
  $program49_resource7_flow * $program49_resource7_date11_batchfactor;

$program50_resource7_date11_hrsreq =
  $program50_resource7_flow * $program50_resource7_date11_batchfactor;

//Resource 7, Date 11 Total Hrs
$resource7_date11_totalhrs =
  round((
  $program1_resource7_date11_hrsreq +
  $program2_resource7_date11_hrsreq +
  $program3_resource7_date11_hrsreq +
  $program4_resource7_date11_hrsreq +
  $program5_resource7_date11_hrsreq +
  $program6_resource7_date11_hrsreq +
  $program7_resource7_date11_hrsreq +
  $program8_resource7_date11_hrsreq +
  $program9_resource7_date11_hrsreq +
  $program10_resource7_date11_hrsreq +
  $program11_resource7_date11_hrsreq +
  $program12_resource7_date11_hrsreq +
  $program13_resource7_date11_hrsreq +
  $program14_resource7_date11_hrsreq +
  $program15_resource7_date11_hrsreq +
  $program16_resource7_date11_hrsreq +
  $program17_resource7_date11_hrsreq +
  $program18_resource7_date11_hrsreq +
  $program19_resource7_date11_hrsreq +
  $program20_resource7_date11_hrsreq +
  $program21_resource7_date11_hrsreq +
  $program22_resource7_date11_hrsreq +
  $program23_resource7_date11_hrsreq +
  $program24_resource7_date11_hrsreq +
  $program25_resource7_date11_hrsreq +
  $program26_resource7_date11_hrsreq +
  $program27_resource7_date11_hrsreq +
  $program28_resource7_date11_hrsreq +
  $program29_resource7_date11_hrsreq +
  $program30_resource7_date11_hrsreq +
  $program31_resource7_date11_hrsreq +
  $program32_resource7_date11_hrsreq +
  $program33_resource7_date11_hrsreq +
  $program34_resource7_date11_hrsreq +
  $program35_resource7_date11_hrsreq +
  $program36_resource7_date11_hrsreq +
  $program37_resource7_date11_hrsreq +
  $program38_resource7_date11_hrsreq +
  $program39_resource7_date11_hrsreq +
  $program40_resource7_date11_hrsreq +
  $program41_resource7_date11_hrsreq +
  $program42_resource7_date11_hrsreq +
  $program43_resource7_date11_hrsreq +
  $program44_resource7_date11_hrsreq +
  $program45_resource7_date11_hrsreq +
  $program46_resource7_date11_hrsreq +
  $program47_resource7_date11_hrsreq +
  $program48_resource7_date11_hrsreq +
  $program49_resource7_date11_hrsreq +
  $program50_resource7_date11_hrsreq
  ),0);

//Date 11 Utilization
$resource7_date11_utilization =
$resource7_date11_totalhrs / $resource7_hrs_total;

//Date 11 Resources Required
$resource7_date11_resourcesreq =
ceil($resource7_date11_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 12
//Resource 7, Date 12 Batch Factors
$program1_resource7_date12_batchfactor =
  $program1_date12 / $program1_resource7_batch;

$program2_resource7_date12_batchfactor =
  $program2_date12 / $program2_resource7_batch;

$program3_resource7_date12_batchfactor =
  $program3_date12 / $program3_resource7_batch;

$program4_resource7_date12_batchfactor =
  $program4_date12 / $program4_resource7_batch;

$program5_resource7_date12_batchfactor =
  $program5_date12 / $program5_resource7_batch;

$program6_resource7_date12_batchfactor =
  $program6_date12 / $program6_resource7_batch;

$program7_resource7_date12_batchfactor =
  $program7_date12 / $program7_resource7_batch;

$program8_resource7_date12_batchfactor =
  $program8_date12 / $program8_resource7_batch;

$program9_resource7_date12_batchfactor =
  $program9_date12 / $program9_resource7_batch;

$program10_resource7_date12_batchfactor =
  $program10_date12 / $program10_resource7_batch;

$program11_resource7_date12_batchfactor =
  $program11_date12 / $program10_resource7_batch;

$program12_resource7_date12_batchfactor =
  $program12_date12 / $program10_resource7_batch;

$program13_resource7_date12_batchfactor =
  $program13_date12 / $program10_resource7_batch;

$program14_resource7_date12_batchfactor =
  $program14_date12 / $program10_resource7_batch;

$program15_resource7_date12_batchfactor =
  $program15_date12 / $program10_resource7_batch;

$program16_resource7_date12_batchfactor =
  $program16_date12 / $program10_resource7_batch;

$program17_resource7_date12_batchfactor =
  $program17_date12 / $program10_resource7_batch;

$program18_resource7_date12_batchfactor =
  $program18_date12 / $program10_resource7_batch;

$program19_resource7_date12_batchfactor =
  $program19_date12 / $program10_resource7_batch;

$program20_resource7_date12_batchfactor =
  $program20_date12 / $program10_resource7_batch;

$program21_resource7_date12_batchfactor =
  $program21_date12 / $program10_resource7_batch;

$program22_resource7_date12_batchfactor =
  $program22_date12 / $program10_resource7_batch;

$program23_resource7_date12_batchfactor =
  $program23_date12 / $program10_resource7_batch;

$program24_resource7_date12_batchfactor =
  $program24_date12 / $program10_resource7_batch;

$program25_resource7_date12_batchfactor =
  $program25_date12 / $program10_resource7_batch;

$program26_resource7_date12_batchfactor =
  $program26_date12 / $program10_resource7_batch;

$program27_resource7_date12_batchfactor =
  $program27_date12 / $program10_resource7_batch;

$program28_resource7_date12_batchfactor =
  $program28_date12 / $program10_resource7_batch;

$program29_resource7_date12_batchfactor =
  $program29_date12 / $program10_resource7_batch;

$program30_resource7_date12_batchfactor =
  $program30_date12 / $program10_resource7_batch;

$program31_resource7_date12_batchfactor =
  $program31_date12 / $program10_resource7_batch;

$program32_resource7_date12_batchfactor =
  $program32_date12 / $program10_resource7_batch;

$program33_resource7_date12_batchfactor =
  $program33_date12 / $program10_resource7_batch;

$program34_resource7_date12_batchfactor =
  $program34_date12 / $program10_resource7_batch;

$program35_resource7_date12_batchfactor =
  $program35_date12 / $program10_resource7_batch;

$program36_resource7_date12_batchfactor =
  $program36_date12 / $program10_resource7_batch;

$program37_resource7_date12_batchfactor =
  $program37_date12 / $program10_resource7_batch;

$program38_resource7_date12_batchfactor =
  $program38_date12 / $program10_resource7_batch;

$program39_resource7_date12_batchfactor =
  $program39_date12 / $program10_resource7_batch;

$program40_resource7_date12_batchfactor =
  $program40_date12 / $program10_resource7_batch;

$program41_resource7_date12_batchfactor =
  $program41_date12 / $program10_resource7_batch;

$program42_resource7_date12_batchfactor =
  $program42_date12 / $program10_resource7_batch;

$program43_resource7_date12_batchfactor =
  $program43_date12 / $program10_resource7_batch;

$program44_resource7_date12_batchfactor =
  $program44_date12 / $program10_resource7_batch;

$program45_resource7_date12_batchfactor =
  $program45_date12 / $program10_resource7_batch;

$program46_resource7_date12_batchfactor =
  $program46_date12 / $program10_resource7_batch;

$program47_resource7_date12_batchfactor =
  $program47_date12 / $program10_resource7_batch;

$program48_resource7_date12_batchfactor =
  $program48_date12 / $program10_resource7_batch;

$program49_resource7_date12_batchfactor =
  $program49_date12 / $program10_resource7_batch;

$program50_resource7_date12_batchfactor =
  $program50_date12 / $program10_resource7_batch;

//Resource 7, Date 12 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date12_hrsreq =
  $program1_resource7_flow * $program1_resource7_date12_batchfactor;

$program2_resource7_date12_hrsreq =
  $program2_resource7_flow * $program2_resource7_date12_batchfactor;

$program3_resource7_date12_hrsreq =
  $program3_resource7_flow * $program3_resource7_date12_batchfactor;

$program4_resource7_date12_hrsreq =
  $program4_resource7_flow * $program4_resource7_date12_batchfactor;

$program5_resource7_date12_hrsreq =
  $program5_resource7_flow * $program5_resource7_date12_batchfactor;

$program6_resource7_date12_hrsreq =
  $program6_resource7_flow * $program6_resource7_date12_batchfactor;

$program7_resource7_date12_hrsreq =
  $program7_resource7_flow * $program7_resource7_date12_batchfactor;

$program8_resource7_date12_hrsreq =
  $program8_resource7_flow * $program8_resource7_date12_batchfactor;

$program9_resource7_date12_hrsreq =
  $program9_resource7_flow * $program9_resource7_date12_batchfactor;

$program10_resource7_date12_hrsreq =
  $program10_resource7_flow * $program10_resource7_date12_batchfactor;

$program11_resource7_date12_hrsreq =
  $program11_resource7_flow * $program11_resource7_date12_batchfactor;

$program12_resource7_date12_hrsreq =
  $program12_resource7_flow * $program12_resource7_date12_batchfactor;

$program13_resource7_date12_hrsreq =
  $program13_resource7_flow * $program13_resource7_date12_batchfactor;

$program14_resource7_date12_hrsreq =
  $program14_resource7_flow * $program14_resource7_date12_batchfactor;

$program15_resource7_date12_hrsreq =
  $program15_resource7_flow * $program15_resource7_date12_batchfactor;

$program16_resource7_date12_hrsreq =
  $program16_resource7_flow * $program16_resource7_date12_batchfactor;

$program17_resource7_date12_hrsreq =
  $program17_resource7_flow * $program17_resource7_date12_batchfactor;

$program18_resource7_date12_hrsreq =
  $program18_resource7_flow * $program18_resource7_date12_batchfactor;

$program19_resource7_date12_hrsreq =
  $program19_resource7_flow * $program19_resource7_date12_batchfactor;

$program20_resource7_date12_hrsreq =
  $program20_resource7_flow * $program20_resource7_date12_batchfactor;

$program21_resource7_date12_hrsreq =
  $program21_resource7_flow * $program21_resource7_date12_batchfactor;

$program22_resource7_date12_hrsreq =
  $program22_resource7_flow * $program22_resource7_date12_batchfactor;

$program23_resource7_date12_hrsreq =
  $program23_resource7_flow * $program23_resource7_date12_batchfactor;

$program24_resource7_date12_hrsreq =
  $program24_resource7_flow * $program24_resource7_date12_batchfactor;

$program25_resource7_date12_hrsreq =
  $program25_resource7_flow * $program25_resource7_date12_batchfactor;

$program26_resource7_date12_hrsreq =
  $program26_resource7_flow * $program26_resource7_date12_batchfactor;

$program27_resource7_date12_hrsreq =
  $program27_resource7_flow * $program27_resource7_date12_batchfactor;

$program28_resource7_date12_hrsreq =
  $program28_resource7_flow * $program28_resource7_date12_batchfactor;

$program29_resource7_date12_hrsreq =
  $program29_resource7_flow * $program29_resource7_date12_batchfactor;

$program30_resource7_date12_hrsreq =
  $program30_resource7_flow * $program30_resource7_date12_batchfactor;

$program31_resource7_date12_hrsreq =
  $program31_resource7_flow * $program31_resource7_date12_batchfactor;

$program32_resource7_date12_hrsreq =
  $program32_resource7_flow * $program32_resource7_date12_batchfactor;

$program33_resource7_date12_hrsreq =
  $program33_resource7_flow * $program33_resource7_date12_batchfactor;

$program34_resource7_date12_hrsreq =
  $program34_resource7_flow * $program34_resource7_date12_batchfactor;

$program35_resource7_date12_hrsreq =
  $program35_resource7_flow * $program35_resource7_date12_batchfactor;

$program36_resource7_date12_hrsreq =
  $program36_resource7_flow * $program36_resource7_date12_batchfactor;

  $program37_resource7_date12_hrsreq =
    $program37_resource7_flow * $program37_resource7_date12_batchfactor;

$program38_resource7_date12_hrsreq =
  $program38_resource7_flow * $program38_resource7_date12_batchfactor;

$program39_resource7_date12_hrsreq =
  $program39_resource7_flow * $program39_resource7_date12_batchfactor;

$program40_resource7_date12_hrsreq =
  $program40_resource7_flow * $program40_resource7_date12_batchfactor;

$program41_resource7_date12_hrsreq =
  $program41_resource7_flow * $program41_resource7_date12_batchfactor;

$program42_resource7_date12_hrsreq =
  $program42_resource7_flow * $program42_resource7_date12_batchfactor;

$program43_resource7_date12_hrsreq =
  $program43_resource7_flow * $program43_resource7_date12_batchfactor;

$program44_resource7_date12_hrsreq =
  $program44_resource7_flow * $program44_resource7_date12_batchfactor;

$program45_resource7_date12_hrsreq =
  $program45_resource7_flow * $program45_resource7_date12_batchfactor;

$program46_resource7_date12_hrsreq =
  $program46_resource7_flow * $program46_resource7_date12_batchfactor;

$program47_resource7_date12_hrsreq =
  $program47_resource7_flow * $program47_resource7_date12_batchfactor;

$program47_resource7_date12_hrsreq =
  $program47_resource7_flow * $program47_resource7_date12_batchfactor;

$program48_resource7_date12_hrsreq =
  $program48_resource7_flow * $program48_resource7_date12_batchfactor;

$program49_resource7_date12_hrsreq =
  $program49_resource7_flow * $program49_resource7_date12_batchfactor;

$program50_resource7_date12_hrsreq =
  $program50_resource7_flow * $program50_resource7_date12_batchfactor;

//Resource 7, Date 12 Total Hrs
$resource7_date12_totalhrs =
  round((
  $program1_resource7_date12_hrsreq +
  $program2_resource7_date12_hrsreq +
  $program3_resource7_date12_hrsreq +
  $program4_resource7_date12_hrsreq +
  $program5_resource7_date12_hrsreq +
  $program6_resource7_date12_hrsreq +
  $program7_resource7_date12_hrsreq +
  $program8_resource7_date12_hrsreq +
  $program9_resource7_date12_hrsreq +
  $program10_resource7_date12_hrsreq +
  $program11_resource7_date12_hrsreq +
  $program12_resource7_date12_hrsreq +
  $program13_resource7_date12_hrsreq +
  $program14_resource7_date12_hrsreq +
  $program15_resource7_date12_hrsreq +
  $program16_resource7_date12_hrsreq +
  $program17_resource7_date12_hrsreq +
  $program18_resource7_date12_hrsreq +
  $program19_resource7_date12_hrsreq +
  $program20_resource7_date12_hrsreq +
  $program21_resource7_date12_hrsreq +
  $program22_resource7_date12_hrsreq +
  $program23_resource7_date12_hrsreq +
  $program24_resource7_date12_hrsreq +
  $program25_resource7_date12_hrsreq +
  $program26_resource7_date12_hrsreq +
  $program27_resource7_date12_hrsreq +
  $program28_resource7_date12_hrsreq +
  $program29_resource7_date12_hrsreq +
  $program30_resource7_date12_hrsreq +
  $program31_resource7_date12_hrsreq +
  $program32_resource7_date12_hrsreq +
  $program33_resource7_date12_hrsreq +
  $program34_resource7_date12_hrsreq +
  $program35_resource7_date12_hrsreq +
  $program36_resource7_date12_hrsreq +
  $program37_resource7_date12_hrsreq +
  $program38_resource7_date12_hrsreq +
  $program39_resource7_date12_hrsreq +
  $program40_resource7_date12_hrsreq +
  $program41_resource7_date12_hrsreq +
  $program42_resource7_date12_hrsreq +
  $program43_resource7_date12_hrsreq +
  $program44_resource7_date12_hrsreq +
  $program45_resource7_date12_hrsreq +
  $program46_resource7_date12_hrsreq +
  $program47_resource7_date12_hrsreq +
  $program48_resource7_date12_hrsreq +
  $program49_resource7_date12_hrsreq +
  $program50_resource7_date12_hrsreq
  ),0);

//Date 12 Utilization
$resource7_date12_utilization =
$resource7_date12_totalhrs / $resource7_hrs_total;

//Date 12 Resources Required
$resource7_date12_resourcesreq =
ceil($resource7_date12_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 13
//Resource 7, Date 13 Batch Factors
$program1_resource7_date13_batchfactor =
  $program1_date13 / $program1_resource7_batch;

$program2_resource7_date13_batchfactor =
  $program2_date13 / $program2_resource7_batch;

$program3_resource7_date13_batchfactor =
  $program3_date13 / $program3_resource7_batch;

$program4_resource7_date13_batchfactor =
  $program4_date13 / $program4_resource7_batch;

$program5_resource7_date13_batchfactor =
  $program5_date13 / $program5_resource7_batch;

$program6_resource7_date13_batchfactor =
  $program6_date13 / $program6_resource7_batch;

$program7_resource7_date13_batchfactor =
  $program7_date13 / $program7_resource7_batch;

$program8_resource7_date13_batchfactor =
  $program8_date13 / $program8_resource7_batch;

$program9_resource7_date13_batchfactor =
  $program9_date13 / $program9_resource7_batch;

$program10_resource7_date13_batchfactor =
  $program10_date13 / $program10_resource7_batch;

$program11_resource7_date13_batchfactor =
  $program11_date13 / $program10_resource7_batch;

$program12_resource7_date13_batchfactor =
  $program12_date13 / $program10_resource7_batch;

$program13_resource7_date13_batchfactor =
  $program13_date13 / $program10_resource7_batch;

$program14_resource7_date13_batchfactor =
  $program14_date13 / $program10_resource7_batch;

$program15_resource7_date13_batchfactor =
  $program15_date13 / $program10_resource7_batch;

$program16_resource7_date13_batchfactor =
  $program16_date13 / $program10_resource7_batch;

$program17_resource7_date13_batchfactor =
  $program17_date13 / $program10_resource7_batch;

$program18_resource7_date13_batchfactor =
  $program18_date13 / $program10_resource7_batch;

$program19_resource7_date13_batchfactor =
  $program19_date13 / $program10_resource7_batch;

$program20_resource7_date13_batchfactor =
  $program20_date13 / $program10_resource7_batch;

$program21_resource7_date13_batchfactor =
  $program21_date13 / $program10_resource7_batch;

$program22_resource7_date13_batchfactor =
  $program22_date13 / $program10_resource7_batch;

$program23_resource7_date13_batchfactor =
  $program23_date13 / $program10_resource7_batch;

$program24_resource7_date13_batchfactor =
  $program24_date13 / $program10_resource7_batch;

$program25_resource7_date13_batchfactor =
  $program25_date13 / $program10_resource7_batch;

$program26_resource7_date13_batchfactor =
  $program26_date13 / $program10_resource7_batch;

$program27_resource7_date13_batchfactor =
  $program27_date13 / $program10_resource7_batch;

$program28_resource7_date13_batchfactor =
  $program28_date13 / $program10_resource7_batch;

$program29_resource7_date13_batchfactor =
  $program29_date13 / $program10_resource7_batch;

$program30_resource7_date13_batchfactor =
  $program30_date13 / $program10_resource7_batch;

$program31_resource7_date13_batchfactor =
  $program31_date13 / $program10_resource7_batch;

$program32_resource7_date13_batchfactor =
  $program32_date13 / $program10_resource7_batch;

$program33_resource7_date13_batchfactor =
  $program33_date13 / $program10_resource7_batch;

$program34_resource7_date13_batchfactor =
  $program34_date13 / $program10_resource7_batch;

$program35_resource7_date13_batchfactor =
  $program35_date13 / $program10_resource7_batch;

$program36_resource7_date13_batchfactor =
  $program36_date13 / $program10_resource7_batch;

$program37_resource7_date13_batchfactor =
  $program37_date13 / $program10_resource7_batch;

$program38_resource7_date13_batchfactor =
  $program38_date13 / $program10_resource7_batch;

$program39_resource7_date13_batchfactor =
  $program39_date13 / $program10_resource7_batch;

$program40_resource7_date13_batchfactor =
  $program40_date13 / $program10_resource7_batch;

$program41_resource7_date13_batchfactor =
  $program41_date13 / $program10_resource7_batch;

$program42_resource7_date13_batchfactor =
  $program42_date13 / $program10_resource7_batch;

$program43_resource7_date13_batchfactor =
  $program43_date13 / $program10_resource7_batch;

$program44_resource7_date13_batchfactor =
  $program44_date13 / $program10_resource7_batch;

$program45_resource7_date13_batchfactor =
  $program45_date13 / $program10_resource7_batch;

$program46_resource7_date13_batchfactor =
  $program46_date13 / $program10_resource7_batch;

$program47_resource7_date13_batchfactor =
  $program47_date13 / $program10_resource7_batch;

$program48_resource7_date13_batchfactor =
  $program48_date13 / $program10_resource7_batch;

$program49_resource7_date13_batchfactor =
  $program49_date13 / $program10_resource7_batch;

$program50_resource7_date13_batchfactor =
  $program50_date13 / $program10_resource7_batch;

//Resource 7, Date 13 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date13_hrsreq =
  $program1_resource7_flow * $program1_resource7_date13_batchfactor;

$program2_resource7_date13_hrsreq =
  $program2_resource7_flow * $program2_resource7_date13_batchfactor;

$program3_resource7_date13_hrsreq =
  $program3_resource7_flow * $program3_resource7_date13_batchfactor;

$program4_resource7_date13_hrsreq =
  $program4_resource7_flow * $program4_resource7_date13_batchfactor;

$program5_resource7_date13_hrsreq =
  $program5_resource7_flow * $program5_resource7_date13_batchfactor;

$program6_resource7_date13_hrsreq =
  $program6_resource7_flow * $program6_resource7_date13_batchfactor;

$program7_resource7_date13_hrsreq =
  $program7_resource7_flow * $program7_resource7_date13_batchfactor;

$program8_resource7_date13_hrsreq =
  $program8_resource7_flow * $program8_resource7_date13_batchfactor;

$program9_resource7_date13_hrsreq =
  $program9_resource7_flow * $program9_resource7_date13_batchfactor;

$program10_resource7_date13_hrsreq =
  $program10_resource7_flow * $program10_resource7_date13_batchfactor;

$program11_resource7_date13_hrsreq =
  $program11_resource7_flow * $program11_resource7_date13_batchfactor;

$program12_resource7_date13_hrsreq =
  $program12_resource7_flow * $program12_resource7_date13_batchfactor;

$program13_resource7_date13_hrsreq =
  $program13_resource7_flow * $program13_resource7_date13_batchfactor;

$program14_resource7_date13_hrsreq =
  $program14_resource7_flow * $program14_resource7_date13_batchfactor;

$program15_resource7_date13_hrsreq =
  $program15_resource7_flow * $program15_resource7_date13_batchfactor;

$program16_resource7_date13_hrsreq =
  $program16_resource7_flow * $program16_resource7_date13_batchfactor;

$program17_resource7_date13_hrsreq =
  $program17_resource7_flow * $program17_resource7_date13_batchfactor;

$program18_resource7_date13_hrsreq =
  $program18_resource7_flow * $program18_resource7_date13_batchfactor;

$program19_resource7_date13_hrsreq =
  $program19_resource7_flow * $program19_resource7_date13_batchfactor;

$program20_resource7_date13_hrsreq =
  $program20_resource7_flow * $program20_resource7_date13_batchfactor;

$program21_resource7_date13_hrsreq =
  $program21_resource7_flow * $program21_resource7_date13_batchfactor;

$program22_resource7_date13_hrsreq =
  $program22_resource7_flow * $program22_resource7_date13_batchfactor;

$program23_resource7_date13_hrsreq =
  $program23_resource7_flow * $program23_resource7_date13_batchfactor;

$program24_resource7_date13_hrsreq =
  $program24_resource7_flow * $program24_resource7_date13_batchfactor;

$program25_resource7_date13_hrsreq =
  $program25_resource7_flow * $program25_resource7_date13_batchfactor;

$program26_resource7_date13_hrsreq =
  $program26_resource7_flow * $program26_resource7_date13_batchfactor;

$program27_resource7_date13_hrsreq =
  $program27_resource7_flow * $program27_resource7_date13_batchfactor;

$program28_resource7_date13_hrsreq =
  $program28_resource7_flow * $program28_resource7_date13_batchfactor;

$program29_resource7_date13_hrsreq =
  $program29_resource7_flow * $program29_resource7_date13_batchfactor;

$program30_resource7_date13_hrsreq =
  $program30_resource7_flow * $program30_resource7_date13_batchfactor;

$program31_resource7_date13_hrsreq =
  $program31_resource7_flow * $program31_resource7_date13_batchfactor;

$program32_resource7_date13_hrsreq =
  $program32_resource7_flow * $program32_resource7_date13_batchfactor;

$program33_resource7_date13_hrsreq =
  $program33_resource7_flow * $program33_resource7_date13_batchfactor;

$program34_resource7_date13_hrsreq =
  $program34_resource7_flow * $program34_resource7_date13_batchfactor;

$program35_resource7_date13_hrsreq =
  $program35_resource7_flow * $program35_resource7_date13_batchfactor;

$program36_resource7_date13_hrsreq =
  $program36_resource7_flow * $program36_resource7_date13_batchfactor;

  $program37_resource7_date13_hrsreq =
    $program37_resource7_flow * $program37_resource7_date13_batchfactor;

$program38_resource7_date13_hrsreq =
  $program38_resource7_flow * $program38_resource7_date13_batchfactor;

$program39_resource7_date13_hrsreq =
  $program39_resource7_flow * $program39_resource7_date13_batchfactor;

$program40_resource7_date13_hrsreq =
  $program40_resource7_flow * $program40_resource7_date13_batchfactor;

$program41_resource7_date13_hrsreq =
  $program41_resource7_flow * $program41_resource7_date13_batchfactor;

$program42_resource7_date13_hrsreq =
  $program42_resource7_flow * $program42_resource7_date13_batchfactor;

$program43_resource7_date13_hrsreq =
  $program43_resource7_flow * $program43_resource7_date13_batchfactor;

$program44_resource7_date13_hrsreq =
  $program44_resource7_flow * $program44_resource7_date13_batchfactor;

$program45_resource7_date13_hrsreq =
  $program45_resource7_flow * $program45_resource7_date13_batchfactor;

$program46_resource7_date13_hrsreq =
  $program46_resource7_flow * $program46_resource7_date13_batchfactor;

$program47_resource7_date13_hrsreq =
  $program47_resource7_flow * $program47_resource7_date13_batchfactor;

$program47_resource7_date13_hrsreq =
  $program47_resource7_flow * $program47_resource7_date13_batchfactor;

$program48_resource7_date13_hrsreq =
  $program48_resource7_flow * $program48_resource7_date13_batchfactor;

$program49_resource7_date13_hrsreq =
  $program49_resource7_flow * $program49_resource7_date13_batchfactor;

$program50_resource7_date13_hrsreq =
  $program50_resource7_flow * $program50_resource7_date13_batchfactor;

//Resource 7, Date 13 Total Hrs
$resource7_date13_totalhrs =
  round((
  $program1_resource7_date13_hrsreq +
  $program2_resource7_date13_hrsreq +
  $program3_resource7_date13_hrsreq +
  $program4_resource7_date13_hrsreq +
  $program5_resource7_date13_hrsreq +
  $program6_resource7_date13_hrsreq +
  $program7_resource7_date13_hrsreq +
  $program8_resource7_date13_hrsreq +
  $program9_resource7_date13_hrsreq +
  $program10_resource7_date13_hrsreq +
  $program11_resource7_date13_hrsreq +
  $program12_resource7_date13_hrsreq +
  $program13_resource7_date13_hrsreq +
  $program14_resource7_date13_hrsreq +
  $program15_resource7_date13_hrsreq +
  $program16_resource7_date13_hrsreq +
  $program17_resource7_date13_hrsreq +
  $program18_resource7_date13_hrsreq +
  $program19_resource7_date13_hrsreq +
  $program20_resource7_date13_hrsreq +
  $program21_resource7_date13_hrsreq +
  $program22_resource7_date13_hrsreq +
  $program23_resource7_date13_hrsreq +
  $program24_resource7_date13_hrsreq +
  $program25_resource7_date13_hrsreq +
  $program26_resource7_date13_hrsreq +
  $program27_resource7_date13_hrsreq +
  $program28_resource7_date13_hrsreq +
  $program29_resource7_date13_hrsreq +
  $program30_resource7_date13_hrsreq +
  $program31_resource7_date13_hrsreq +
  $program32_resource7_date13_hrsreq +
  $program33_resource7_date13_hrsreq +
  $program34_resource7_date13_hrsreq +
  $program35_resource7_date13_hrsreq +
  $program36_resource7_date13_hrsreq +
  $program37_resource7_date13_hrsreq +
  $program38_resource7_date13_hrsreq +
  $program39_resource7_date13_hrsreq +
  $program40_resource7_date13_hrsreq +
  $program41_resource7_date13_hrsreq +
  $program42_resource7_date13_hrsreq +
  $program43_resource7_date13_hrsreq +
  $program44_resource7_date13_hrsreq +
  $program45_resource7_date13_hrsreq +
  $program46_resource7_date13_hrsreq +
  $program47_resource7_date13_hrsreq +
  $program48_resource7_date13_hrsreq +
  $program49_resource7_date13_hrsreq +
  $program50_resource7_date13_hrsreq
  ),0);

//Date 13 Utilization
$resource7_date13_utilization =
$resource7_date13_totalhrs / $resource7_hrs_total;

//Date 13 Resources Required
$resource7_date13_resourcesreq =
ceil($resource7_date13_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 14
//Resource 7, Date 14 Batch Factors
$program1_resource7_date14_batchfactor =
  $program1_date14 / $program1_resource7_batch;

$program2_resource7_date14_batchfactor =
  $program2_date14 / $program2_resource7_batch;

$program3_resource7_date14_batchfactor =
  $program3_date14 / $program3_resource7_batch;

$program4_resource7_date14_batchfactor =
  $program4_date14 / $program4_resource7_batch;

$program5_resource7_date14_batchfactor =
  $program5_date14 / $program5_resource7_batch;

$program6_resource7_date14_batchfactor =
  $program6_date14 / $program6_resource7_batch;

$program7_resource7_date14_batchfactor =
  $program7_date14 / $program7_resource7_batch;

$program8_resource7_date14_batchfactor =
  $program8_date14 / $program8_resource7_batch;

$program9_resource7_date14_batchfactor =
  $program9_date14 / $program9_resource7_batch;

$program10_resource7_date14_batchfactor =
  $program10_date14 / $program10_resource7_batch;

$program11_resource7_date14_batchfactor =
  $program11_date14 / $program10_resource7_batch;

$program12_resource7_date14_batchfactor =
  $program12_date14 / $program10_resource7_batch;

$program13_resource7_date14_batchfactor =
  $program13_date14 / $program10_resource7_batch;

$program14_resource7_date14_batchfactor =
  $program14_date14 / $program10_resource7_batch;

$program15_resource7_date14_batchfactor =
  $program15_date14 / $program10_resource7_batch;

$program16_resource7_date14_batchfactor =
  $program16_date14 / $program10_resource7_batch;

$program17_resource7_date14_batchfactor =
  $program17_date14 / $program10_resource7_batch;

$program18_resource7_date14_batchfactor =
  $program18_date14 / $program10_resource7_batch;

$program19_resource7_date14_batchfactor =
  $program19_date14 / $program10_resource7_batch;

$program20_resource7_date14_batchfactor =
  $program20_date14 / $program10_resource7_batch;

$program21_resource7_date14_batchfactor =
  $program21_date14 / $program10_resource7_batch;

$program22_resource7_date14_batchfactor =
  $program22_date14 / $program10_resource7_batch;

$program23_resource7_date14_batchfactor =
  $program23_date14 / $program10_resource7_batch;

$program24_resource7_date14_batchfactor =
  $program24_date14 / $program10_resource7_batch;

$program25_resource7_date14_batchfactor =
  $program25_date14 / $program10_resource7_batch;

$program26_resource7_date14_batchfactor =
  $program26_date14 / $program10_resource7_batch;

$program27_resource7_date14_batchfactor =
  $program27_date14 / $program10_resource7_batch;

$program28_resource7_date14_batchfactor =
  $program28_date14 / $program10_resource7_batch;

$program29_resource7_date14_batchfactor =
  $program29_date14 / $program10_resource7_batch;

$program30_resource7_date14_batchfactor =
  $program30_date14 / $program10_resource7_batch;

$program31_resource7_date14_batchfactor =
  $program31_date14 / $program10_resource7_batch;

$program32_resource7_date14_batchfactor =
  $program32_date14 / $program10_resource7_batch;

$program33_resource7_date14_batchfactor =
  $program33_date14 / $program10_resource7_batch;

$program34_resource7_date14_batchfactor =
  $program34_date14 / $program10_resource7_batch;

$program35_resource7_date14_batchfactor =
  $program35_date14 / $program10_resource7_batch;

$program36_resource7_date14_batchfactor =
  $program36_date14 / $program10_resource7_batch;

$program37_resource7_date14_batchfactor =
  $program37_date14 / $program10_resource7_batch;

$program38_resource7_date14_batchfactor =
  $program38_date14 / $program10_resource7_batch;

$program39_resource7_date14_batchfactor =
  $program39_date14 / $program10_resource7_batch;

$program40_resource7_date14_batchfactor =
  $program40_date14 / $program10_resource7_batch;

$program41_resource7_date14_batchfactor =
  $program41_date14 / $program10_resource7_batch;

$program42_resource7_date14_batchfactor =
  $program42_date14 / $program10_resource7_batch;

$program43_resource7_date14_batchfactor =
  $program43_date14 / $program10_resource7_batch;

$program44_resource7_date14_batchfactor =
  $program44_date14 / $program10_resource7_batch;

$program45_resource7_date14_batchfactor =
  $program45_date14 / $program10_resource7_batch;

$program46_resource7_date14_batchfactor =
  $program46_date14 / $program10_resource7_batch;

$program47_resource7_date14_batchfactor =
  $program47_date14 / $program10_resource7_batch;

$program48_resource7_date14_batchfactor =
  $program48_date14 / $program10_resource7_batch;

$program49_resource7_date14_batchfactor =
  $program49_date14 / $program10_resource7_batch;

$program50_resource7_date14_batchfactor =
  $program50_date14 / $program10_resource7_batch;

//Resource 7, Date 14 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date14_hrsreq =
  $program1_resource7_flow * $program1_resource7_date14_batchfactor;

$program2_resource7_date14_hrsreq =
  $program2_resource7_flow * $program2_resource7_date14_batchfactor;

$program3_resource7_date14_hrsreq =
  $program3_resource7_flow * $program3_resource7_date14_batchfactor;

$program4_resource7_date14_hrsreq =
  $program4_resource7_flow * $program4_resource7_date14_batchfactor;

$program5_resource7_date14_hrsreq =
  $program5_resource7_flow * $program5_resource7_date14_batchfactor;

$program6_resource7_date14_hrsreq =
  $program6_resource7_flow * $program6_resource7_date14_batchfactor;

$program7_resource7_date14_hrsreq =
  $program7_resource7_flow * $program7_resource7_date14_batchfactor;

$program8_resource7_date14_hrsreq =
  $program8_resource7_flow * $program8_resource7_date14_batchfactor;

$program9_resource7_date14_hrsreq =
  $program9_resource7_flow * $program9_resource7_date14_batchfactor;

$program10_resource7_date14_hrsreq =
  $program10_resource7_flow * $program10_resource7_date14_batchfactor;

$program11_resource7_date14_hrsreq =
  $program11_resource7_flow * $program11_resource7_date14_batchfactor;

$program12_resource7_date14_hrsreq =
  $program12_resource7_flow * $program12_resource7_date14_batchfactor;

$program13_resource7_date14_hrsreq =
  $program13_resource7_flow * $program13_resource7_date14_batchfactor;

$program14_resource7_date14_hrsreq =
  $program14_resource7_flow * $program14_resource7_date14_batchfactor;

$program15_resource7_date14_hrsreq =
  $program15_resource7_flow * $program15_resource7_date14_batchfactor;

$program16_resource7_date14_hrsreq =
  $program16_resource7_flow * $program16_resource7_date14_batchfactor;

$program17_resource7_date14_hrsreq =
  $program17_resource7_flow * $program17_resource7_date14_batchfactor;

$program18_resource7_date14_hrsreq =
  $program18_resource7_flow * $program18_resource7_date14_batchfactor;

$program19_resource7_date14_hrsreq =
  $program19_resource7_flow * $program19_resource7_date14_batchfactor;

$program20_resource7_date14_hrsreq =
  $program20_resource7_flow * $program20_resource7_date14_batchfactor;

$program21_resource7_date14_hrsreq =
  $program21_resource7_flow * $program21_resource7_date14_batchfactor;

$program22_resource7_date14_hrsreq =
  $program22_resource7_flow * $program22_resource7_date14_batchfactor;

$program23_resource7_date14_hrsreq =
  $program23_resource7_flow * $program23_resource7_date14_batchfactor;

$program24_resource7_date14_hrsreq =
  $program24_resource7_flow * $program24_resource7_date14_batchfactor;

$program25_resource7_date14_hrsreq =
  $program25_resource7_flow * $program25_resource7_date14_batchfactor;

$program26_resource7_date14_hrsreq =
  $program26_resource7_flow * $program26_resource7_date14_batchfactor;

$program27_resource7_date14_hrsreq =
  $program27_resource7_flow * $program27_resource7_date14_batchfactor;

$program28_resource7_date14_hrsreq =
  $program28_resource7_flow * $program28_resource7_date14_batchfactor;

$program29_resource7_date14_hrsreq =
  $program29_resource7_flow * $program29_resource7_date14_batchfactor;

$program30_resource7_date14_hrsreq =
  $program30_resource7_flow * $program30_resource7_date14_batchfactor;

$program31_resource7_date14_hrsreq =
  $program31_resource7_flow * $program31_resource7_date14_batchfactor;

$program32_resource7_date14_hrsreq =
  $program32_resource7_flow * $program32_resource7_date14_batchfactor;

$program33_resource7_date14_hrsreq =
  $program33_resource7_flow * $program33_resource7_date14_batchfactor;

$program34_resource7_date14_hrsreq =
  $program34_resource7_flow * $program34_resource7_date14_batchfactor;

$program35_resource7_date14_hrsreq =
  $program35_resource7_flow * $program35_resource7_date14_batchfactor;

$program36_resource7_date14_hrsreq =
  $program36_resource7_flow * $program36_resource7_date14_batchfactor;

  $program37_resource7_date14_hrsreq =
    $program37_resource7_flow * $program37_resource7_date14_batchfactor;

$program38_resource7_date14_hrsreq =
  $program38_resource7_flow * $program38_resource7_date14_batchfactor;

$program39_resource7_date14_hrsreq =
  $program39_resource7_flow * $program39_resource7_date14_batchfactor;

$program40_resource7_date14_hrsreq =
  $program40_resource7_flow * $program40_resource7_date14_batchfactor;

$program41_resource7_date14_hrsreq =
  $program41_resource7_flow * $program41_resource7_date14_batchfactor;

$program42_resource7_date14_hrsreq =
  $program42_resource7_flow * $program42_resource7_date14_batchfactor;

$program43_resource7_date14_hrsreq =
  $program43_resource7_flow * $program43_resource7_date14_batchfactor;

$program44_resource7_date14_hrsreq =
  $program44_resource7_flow * $program44_resource7_date14_batchfactor;

$program45_resource7_date14_hrsreq =
  $program45_resource7_flow * $program45_resource7_date14_batchfactor;

$program46_resource7_date14_hrsreq =
  $program46_resource7_flow * $program46_resource7_date14_batchfactor;

$program47_resource7_date14_hrsreq =
  $program47_resource7_flow * $program47_resource7_date14_batchfactor;

$program47_resource7_date14_hrsreq =
  $program47_resource7_flow * $program47_resource7_date14_batchfactor;

$program48_resource7_date14_hrsreq =
  $program48_resource7_flow * $program48_resource7_date14_batchfactor;

$program49_resource7_date14_hrsreq =
  $program49_resource7_flow * $program49_resource7_date14_batchfactor;

$program50_resource7_date14_hrsreq =
  $program50_resource7_flow * $program50_resource7_date14_batchfactor;

//Resource 7, Date 14 Total Hrs
$resource7_date14_totalhrs =
  round((
  $program1_resource7_date14_hrsreq +
  $program2_resource7_date14_hrsreq +
  $program3_resource7_date14_hrsreq +
  $program4_resource7_date14_hrsreq +
  $program5_resource7_date14_hrsreq +
  $program6_resource7_date14_hrsreq +
  $program7_resource7_date14_hrsreq +
  $program8_resource7_date14_hrsreq +
  $program9_resource7_date14_hrsreq +
  $program10_resource7_date14_hrsreq +
  $program11_resource7_date14_hrsreq +
  $program12_resource7_date14_hrsreq +
  $program13_resource7_date14_hrsreq +
  $program14_resource7_date14_hrsreq +
  $program15_resource7_date14_hrsreq +
  $program16_resource7_date14_hrsreq +
  $program17_resource7_date14_hrsreq +
  $program18_resource7_date14_hrsreq +
  $program19_resource7_date14_hrsreq +
  $program20_resource7_date14_hrsreq +
  $program21_resource7_date14_hrsreq +
  $program22_resource7_date14_hrsreq +
  $program23_resource7_date14_hrsreq +
  $program24_resource7_date14_hrsreq +
  $program25_resource7_date14_hrsreq +
  $program26_resource7_date14_hrsreq +
  $program27_resource7_date14_hrsreq +
  $program28_resource7_date14_hrsreq +
  $program29_resource7_date14_hrsreq +
  $program30_resource7_date14_hrsreq +
  $program31_resource7_date14_hrsreq +
  $program32_resource7_date14_hrsreq +
  $program33_resource7_date14_hrsreq +
  $program34_resource7_date14_hrsreq +
  $program35_resource7_date14_hrsreq +
  $program36_resource7_date14_hrsreq +
  $program37_resource7_date14_hrsreq +
  $program38_resource7_date14_hrsreq +
  $program39_resource7_date14_hrsreq +
  $program40_resource7_date14_hrsreq +
  $program41_resource7_date14_hrsreq +
  $program42_resource7_date14_hrsreq +
  $program43_resource7_date14_hrsreq +
  $program44_resource7_date14_hrsreq +
  $program45_resource7_date14_hrsreq +
  $program46_resource7_date14_hrsreq +
  $program47_resource7_date14_hrsreq +
  $program48_resource7_date14_hrsreq +
  $program49_resource7_date14_hrsreq +
  $program50_resource7_date14_hrsreq
  ),0);

//Date 14 Utilization
$resource7_date14_utilization =
$resource7_date14_totalhrs / $resource7_hrs_total;

//Date 14 Resources Required
$resource7_date14_resourcesreq =
ceil($resource7_date14_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 15
//Resource 7, Date 15 Batch Factors
$program1_resource7_date15_batchfactor =
  $program1_date15 / $program1_resource7_batch;

$program2_resource7_date15_batchfactor =
  $program2_date15 / $program2_resource7_batch;

$program3_resource7_date15_batchfactor =
  $program3_date15 / $program3_resource7_batch;

$program4_resource7_date15_batchfactor =
  $program4_date15 / $program4_resource7_batch;

$program5_resource7_date15_batchfactor =
  $program5_date15 / $program5_resource7_batch;

$program6_resource7_date15_batchfactor =
  $program6_date15 / $program6_resource7_batch;

$program7_resource7_date15_batchfactor =
  $program7_date15 / $program7_resource7_batch;

$program8_resource7_date15_batchfactor =
  $program8_date15 / $program8_resource7_batch;

$program9_resource7_date15_batchfactor =
  $program9_date15 / $program9_resource7_batch;

$program10_resource7_date15_batchfactor =
  $program10_date15 / $program10_resource7_batch;

$program11_resource7_date15_batchfactor =
  $program11_date15 / $program10_resource7_batch;

$program12_resource7_date15_batchfactor =
  $program12_date15 / $program10_resource7_batch;

$program13_resource7_date15_batchfactor =
  $program13_date15 / $program10_resource7_batch;

$program14_resource7_date15_batchfactor =
  $program14_date15 / $program10_resource7_batch;

$program15_resource7_date15_batchfactor =
  $program15_date15 / $program10_resource7_batch;

$program16_resource7_date15_batchfactor =
  $program16_date15 / $program10_resource7_batch;

$program17_resource7_date15_batchfactor =
  $program17_date15 / $program10_resource7_batch;

$program18_resource7_date15_batchfactor =
  $program18_date15 / $program10_resource7_batch;

$program19_resource7_date15_batchfactor =
  $program19_date15 / $program10_resource7_batch;

$program20_resource7_date15_batchfactor =
  $program20_date15 / $program10_resource7_batch;

$program21_resource7_date15_batchfactor =
  $program21_date15 / $program10_resource7_batch;

$program22_resource7_date15_batchfactor =
  $program22_date15 / $program10_resource7_batch;

$program23_resource7_date15_batchfactor =
  $program23_date15 / $program10_resource7_batch;

$program24_resource7_date15_batchfactor =
  $program24_date15 / $program10_resource7_batch;

$program25_resource7_date15_batchfactor =
  $program25_date15 / $program10_resource7_batch;

$program26_resource7_date15_batchfactor =
  $program26_date15 / $program10_resource7_batch;

$program27_resource7_date15_batchfactor =
  $program27_date15 / $program10_resource7_batch;

$program28_resource7_date15_batchfactor =
  $program28_date15 / $program10_resource7_batch;

$program29_resource7_date15_batchfactor =
  $program29_date15 / $program10_resource7_batch;

$program30_resource7_date15_batchfactor =
  $program30_date15 / $program10_resource7_batch;

$program31_resource7_date15_batchfactor =
  $program31_date15 / $program10_resource7_batch;

$program32_resource7_date15_batchfactor =
  $program32_date15 / $program10_resource7_batch;

$program33_resource7_date15_batchfactor =
  $program33_date15 / $program10_resource7_batch;

$program34_resource7_date15_batchfactor =
  $program34_date15 / $program10_resource7_batch;

$program35_resource7_date15_batchfactor =
  $program35_date15 / $program10_resource7_batch;

$program36_resource7_date15_batchfactor =
  $program36_date15 / $program10_resource7_batch;

$program37_resource7_date15_batchfactor =
  $program37_date15 / $program10_resource7_batch;

$program38_resource7_date15_batchfactor =
  $program38_date15 / $program10_resource7_batch;

$program39_resource7_date15_batchfactor =
  $program39_date15 / $program10_resource7_batch;

$program40_resource7_date15_batchfactor =
  $program40_date15 / $program10_resource7_batch;

$program41_resource7_date15_batchfactor =
  $program41_date15 / $program10_resource7_batch;

$program42_resource7_date15_batchfactor =
  $program42_date15 / $program10_resource7_batch;

$program43_resource7_date15_batchfactor =
  $program43_date15 / $program10_resource7_batch;

$program44_resource7_date15_batchfactor =
  $program44_date15 / $program10_resource7_batch;

$program45_resource7_date15_batchfactor =
  $program45_date15 / $program10_resource7_batch;

$program46_resource7_date15_batchfactor =
  $program46_date15 / $program10_resource7_batch;

$program47_resource7_date15_batchfactor =
  $program47_date15 / $program10_resource7_batch;

$program48_resource7_date15_batchfactor =
  $program48_date15 / $program10_resource7_batch;

$program49_resource7_date15_batchfactor =
  $program49_date15 / $program10_resource7_batch;

$program50_resource7_date15_batchfactor =
  $program50_date15 / $program10_resource7_batch;

//Resource 7, Date 15 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date15_hrsreq =
  $program1_resource7_flow * $program1_resource7_date15_batchfactor;

$program2_resource7_date15_hrsreq =
  $program2_resource7_flow * $program2_resource7_date15_batchfactor;

$program3_resource7_date15_hrsreq =
  $program3_resource7_flow * $program3_resource7_date15_batchfactor;

$program4_resource7_date15_hrsreq =
  $program4_resource7_flow * $program4_resource7_date15_batchfactor;

$program5_resource7_date15_hrsreq =
  $program5_resource7_flow * $program5_resource7_date15_batchfactor;

$program6_resource7_date15_hrsreq =
  $program6_resource7_flow * $program6_resource7_date15_batchfactor;

$program7_resource7_date15_hrsreq =
  $program7_resource7_flow * $program7_resource7_date15_batchfactor;

$program8_resource7_date15_hrsreq =
  $program8_resource7_flow * $program8_resource7_date15_batchfactor;

$program9_resource7_date15_hrsreq =
  $program9_resource7_flow * $program9_resource7_date15_batchfactor;

$program10_resource7_date15_hrsreq =
  $program10_resource7_flow * $program10_resource7_date15_batchfactor;

$program11_resource7_date15_hrsreq =
  $program11_resource7_flow * $program11_resource7_date15_batchfactor;

$program12_resource7_date15_hrsreq =
  $program12_resource7_flow * $program12_resource7_date15_batchfactor;

$program13_resource7_date15_hrsreq =
  $program13_resource7_flow * $program13_resource7_date15_batchfactor;

$program14_resource7_date15_hrsreq =
  $program14_resource7_flow * $program14_resource7_date15_batchfactor;

$program15_resource7_date15_hrsreq =
  $program15_resource7_flow * $program15_resource7_date15_batchfactor;

$program16_resource7_date15_hrsreq =
  $program16_resource7_flow * $program16_resource7_date15_batchfactor;

$program17_resource7_date15_hrsreq =
  $program17_resource7_flow * $program17_resource7_date15_batchfactor;

$program18_resource7_date15_hrsreq =
  $program18_resource7_flow * $program18_resource7_date15_batchfactor;

$program19_resource7_date15_hrsreq =
  $program19_resource7_flow * $program19_resource7_date15_batchfactor;

$program20_resource7_date15_hrsreq =
  $program20_resource7_flow * $program20_resource7_date15_batchfactor;

$program21_resource7_date15_hrsreq =
  $program21_resource7_flow * $program21_resource7_date15_batchfactor;

$program22_resource7_date15_hrsreq =
  $program22_resource7_flow * $program22_resource7_date15_batchfactor;

$program23_resource7_date15_hrsreq =
  $program23_resource7_flow * $program23_resource7_date15_batchfactor;

$program24_resource7_date15_hrsreq =
  $program24_resource7_flow * $program24_resource7_date15_batchfactor;

$program25_resource7_date15_hrsreq =
  $program25_resource7_flow * $program25_resource7_date15_batchfactor;

$program26_resource7_date15_hrsreq =
  $program26_resource7_flow * $program26_resource7_date15_batchfactor;

$program27_resource7_date15_hrsreq =
  $program27_resource7_flow * $program27_resource7_date15_batchfactor;

$program28_resource7_date15_hrsreq =
  $program28_resource7_flow * $program28_resource7_date15_batchfactor;

$program29_resource7_date15_hrsreq =
  $program29_resource7_flow * $program29_resource7_date15_batchfactor;

$program30_resource7_date15_hrsreq =
  $program30_resource7_flow * $program30_resource7_date15_batchfactor;

$program31_resource7_date15_hrsreq =
  $program31_resource7_flow * $program31_resource7_date15_batchfactor;

$program32_resource7_date15_hrsreq =
  $program32_resource7_flow * $program32_resource7_date15_batchfactor;

$program33_resource7_date15_hrsreq =
  $program33_resource7_flow * $program33_resource7_date15_batchfactor;

$program34_resource7_date15_hrsreq =
  $program34_resource7_flow * $program34_resource7_date15_batchfactor;

$program35_resource7_date15_hrsreq =
  $program35_resource7_flow * $program35_resource7_date15_batchfactor;

$program36_resource7_date15_hrsreq =
  $program36_resource7_flow * $program36_resource7_date15_batchfactor;

  $program37_resource7_date15_hrsreq =
    $program37_resource7_flow * $program37_resource7_date15_batchfactor;

$program38_resource7_date15_hrsreq =
  $program38_resource7_flow * $program38_resource7_date15_batchfactor;

$program39_resource7_date15_hrsreq =
  $program39_resource7_flow * $program39_resource7_date15_batchfactor;

$program40_resource7_date15_hrsreq =
  $program40_resource7_flow * $program40_resource7_date15_batchfactor;

$program41_resource7_date15_hrsreq =
  $program41_resource7_flow * $program41_resource7_date15_batchfactor;

$program42_resource7_date15_hrsreq =
  $program42_resource7_flow * $program42_resource7_date15_batchfactor;

$program43_resource7_date15_hrsreq =
  $program43_resource7_flow * $program43_resource7_date15_batchfactor;

$program44_resource7_date15_hrsreq =
  $program44_resource7_flow * $program44_resource7_date15_batchfactor;

$program45_resource7_date15_hrsreq =
  $program45_resource7_flow * $program45_resource7_date15_batchfactor;

$program46_resource7_date15_hrsreq =
  $program46_resource7_flow * $program46_resource7_date15_batchfactor;

$program47_resource7_date15_hrsreq =
  $program47_resource7_flow * $program47_resource7_date15_batchfactor;

$program47_resource7_date15_hrsreq =
  $program47_resource7_flow * $program47_resource7_date15_batchfactor;

$program48_resource7_date15_hrsreq =
  $program48_resource7_flow * $program48_resource7_date15_batchfactor;

$program49_resource7_date15_hrsreq =
  $program49_resource7_flow * $program49_resource7_date15_batchfactor;

$program50_resource7_date15_hrsreq =
  $program50_resource7_flow * $program50_resource7_date15_batchfactor;

//Resource 7, Date 15 Total Hrs
$resource7_date15_totalhrs =
  round((
  $program1_resource7_date15_hrsreq +
  $program2_resource7_date15_hrsreq +
  $program3_resource7_date15_hrsreq +
  $program4_resource7_date15_hrsreq +
  $program5_resource7_date15_hrsreq +
  $program6_resource7_date15_hrsreq +
  $program7_resource7_date15_hrsreq +
  $program8_resource7_date15_hrsreq +
  $program9_resource7_date15_hrsreq +
  $program10_resource7_date15_hrsreq +
  $program11_resource7_date15_hrsreq +
  $program12_resource7_date15_hrsreq +
  $program13_resource7_date15_hrsreq +
  $program14_resource7_date15_hrsreq +
  $program15_resource7_date15_hrsreq +
  $program16_resource7_date15_hrsreq +
  $program17_resource7_date15_hrsreq +
  $program18_resource7_date15_hrsreq +
  $program19_resource7_date15_hrsreq +
  $program20_resource7_date15_hrsreq +
  $program21_resource7_date15_hrsreq +
  $program22_resource7_date15_hrsreq +
  $program23_resource7_date15_hrsreq +
  $program24_resource7_date15_hrsreq +
  $program25_resource7_date15_hrsreq +
  $program26_resource7_date15_hrsreq +
  $program27_resource7_date15_hrsreq +
  $program28_resource7_date15_hrsreq +
  $program29_resource7_date15_hrsreq +
  $program30_resource7_date15_hrsreq +
  $program31_resource7_date15_hrsreq +
  $program32_resource7_date15_hrsreq +
  $program33_resource7_date15_hrsreq +
  $program34_resource7_date15_hrsreq +
  $program35_resource7_date15_hrsreq +
  $program36_resource7_date15_hrsreq +
  $program37_resource7_date15_hrsreq +
  $program38_resource7_date15_hrsreq +
  $program39_resource7_date15_hrsreq +
  $program40_resource7_date15_hrsreq +
  $program41_resource7_date15_hrsreq +
  $program42_resource7_date15_hrsreq +
  $program43_resource7_date15_hrsreq +
  $program44_resource7_date15_hrsreq +
  $program45_resource7_date15_hrsreq +
  $program46_resource7_date15_hrsreq +
  $program47_resource7_date15_hrsreq +
  $program48_resource7_date15_hrsreq +
  $program49_resource7_date15_hrsreq +
  $program50_resource7_date15_hrsreq
  ),0);

//Date 15 Utilization
$resource7_date15_utilization =
$resource7_date15_totalhrs / $resource7_hrs_total;

//Date 15 Resources Required
$resource7_date15_resourcesreq =
ceil($resource7_date15_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 16
//Resource 7, Date 16 Batch Factors
$program1_resource7_date16_batchfactor =
  $program1_date16 / $program1_resource7_batch;

$program2_resource7_date16_batchfactor =
  $program2_date16 / $program2_resource7_batch;

$program3_resource7_date16_batchfactor =
  $program3_date16 / $program3_resource7_batch;

$program4_resource7_date16_batchfactor =
  $program4_date16 / $program4_resource7_batch;

$program5_resource7_date16_batchfactor =
  $program5_date16 / $program5_resource7_batch;

$program6_resource7_date16_batchfactor =
  $program6_date16 / $program6_resource7_batch;

$program7_resource7_date16_batchfactor =
  $program7_date16 / $program7_resource7_batch;

$program8_resource7_date16_batchfactor =
  $program8_date16 / $program8_resource7_batch;

$program9_resource7_date16_batchfactor =
  $program9_date16 / $program9_resource7_batch;

$program10_resource7_date16_batchfactor =
  $program10_date16 / $program10_resource7_batch;

$program11_resource7_date16_batchfactor =
  $program11_date16 / $program10_resource7_batch;

$program12_resource7_date16_batchfactor =
  $program12_date16 / $program10_resource7_batch;

$program13_resource7_date16_batchfactor =
  $program13_date16 / $program10_resource7_batch;

$program14_resource7_date16_batchfactor =
  $program14_date16 / $program10_resource7_batch;

$program15_resource7_date16_batchfactor =
  $program15_date16 / $program10_resource7_batch;

$program16_resource7_date16_batchfactor =
  $program16_date16 / $program10_resource7_batch;

$program17_resource7_date16_batchfactor =
  $program17_date16 / $program10_resource7_batch;

$program18_resource7_date16_batchfactor =
  $program18_date16 / $program10_resource7_batch;

$program19_resource7_date16_batchfactor =
  $program19_date16 / $program10_resource7_batch;

$program20_resource7_date16_batchfactor =
  $program20_date16 / $program10_resource7_batch;

$program21_resource7_date16_batchfactor =
  $program21_date16 / $program10_resource7_batch;

$program22_resource7_date16_batchfactor =
  $program22_date16 / $program10_resource7_batch;

$program23_resource7_date16_batchfactor =
  $program23_date16 / $program10_resource7_batch;

$program24_resource7_date16_batchfactor =
  $program24_date16 / $program10_resource7_batch;

$program25_resource7_date16_batchfactor =
  $program25_date16 / $program10_resource7_batch;

$program26_resource7_date16_batchfactor =
  $program26_date16 / $program10_resource7_batch;

$program27_resource7_date16_batchfactor =
  $program27_date16 / $program10_resource7_batch;

$program28_resource7_date16_batchfactor =
  $program28_date16 / $program10_resource7_batch;

$program29_resource7_date16_batchfactor =
  $program29_date16 / $program10_resource7_batch;

$program30_resource7_date16_batchfactor =
  $program30_date16 / $program10_resource7_batch;

$program31_resource7_date16_batchfactor =
  $program31_date16 / $program10_resource7_batch;

$program32_resource7_date16_batchfactor =
  $program32_date16 / $program10_resource7_batch;

$program33_resource7_date16_batchfactor =
  $program33_date16 / $program10_resource7_batch;

$program34_resource7_date16_batchfactor =
  $program34_date16 / $program10_resource7_batch;

$program35_resource7_date16_batchfactor =
  $program35_date16 / $program10_resource7_batch;

$program36_resource7_date16_batchfactor =
  $program36_date16 / $program10_resource7_batch;

$program37_resource7_date16_batchfactor =
  $program37_date16 / $program10_resource7_batch;

$program38_resource7_date16_batchfactor =
  $program38_date16 / $program10_resource7_batch;

$program39_resource7_date16_batchfactor =
  $program39_date16 / $program10_resource7_batch;

$program40_resource7_date16_batchfactor =
  $program40_date16 / $program10_resource7_batch;

$program41_resource7_date16_batchfactor =
  $program41_date16 / $program10_resource7_batch;

$program42_resource7_date16_batchfactor =
  $program42_date16 / $program10_resource7_batch;

$program43_resource7_date16_batchfactor =
  $program43_date16 / $program10_resource7_batch;

$program44_resource7_date16_batchfactor =
  $program44_date16 / $program10_resource7_batch;

$program45_resource7_date16_batchfactor =
  $program45_date16 / $program10_resource7_batch;

$program46_resource7_date16_batchfactor =
  $program46_date16 / $program10_resource7_batch;

$program47_resource7_date16_batchfactor =
  $program47_date16 / $program10_resource7_batch;

$program48_resource7_date16_batchfactor =
  $program48_date16 / $program10_resource7_batch;

$program49_resource7_date16_batchfactor =
  $program49_date16 / $program10_resource7_batch;

$program50_resource7_date16_batchfactor =
  $program50_date16 / $program10_resource7_batch;

//Resource 7, Date 16 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date16_hrsreq =
  $program1_resource7_flow * $program1_resource7_date16_batchfactor;

$program2_resource7_date16_hrsreq =
  $program2_resource7_flow * $program2_resource7_date16_batchfactor;

$program3_resource7_date16_hrsreq =
  $program3_resource7_flow * $program3_resource7_date16_batchfactor;

$program4_resource7_date16_hrsreq =
  $program4_resource7_flow * $program4_resource7_date16_batchfactor;

$program5_resource7_date16_hrsreq =
  $program5_resource7_flow * $program5_resource7_date16_batchfactor;

$program6_resource7_date16_hrsreq =
  $program6_resource7_flow * $program6_resource7_date16_batchfactor;

$program7_resource7_date16_hrsreq =
  $program7_resource7_flow * $program7_resource7_date16_batchfactor;

$program8_resource7_date16_hrsreq =
  $program8_resource7_flow * $program8_resource7_date16_batchfactor;

$program9_resource7_date16_hrsreq =
  $program9_resource7_flow * $program9_resource7_date16_batchfactor;

$program10_resource7_date16_hrsreq =
  $program10_resource7_flow * $program10_resource7_date16_batchfactor;

$program11_resource7_date16_hrsreq =
  $program11_resource7_flow * $program11_resource7_date16_batchfactor;

$program12_resource7_date16_hrsreq =
  $program12_resource7_flow * $program12_resource7_date16_batchfactor;

$program13_resource7_date16_hrsreq =
  $program13_resource7_flow * $program13_resource7_date16_batchfactor;

$program14_resource7_date16_hrsreq =
  $program14_resource7_flow * $program14_resource7_date16_batchfactor;

$program15_resource7_date16_hrsreq =
  $program15_resource7_flow * $program15_resource7_date16_batchfactor;

$program16_resource7_date16_hrsreq =
  $program16_resource7_flow * $program16_resource7_date16_batchfactor;

$program17_resource7_date16_hrsreq =
  $program17_resource7_flow * $program17_resource7_date16_batchfactor;

$program18_resource7_date16_hrsreq =
  $program18_resource7_flow * $program18_resource7_date16_batchfactor;

$program19_resource7_date16_hrsreq =
  $program19_resource7_flow * $program19_resource7_date16_batchfactor;

$program20_resource7_date16_hrsreq =
  $program20_resource7_flow * $program20_resource7_date16_batchfactor;

$program21_resource7_date16_hrsreq =
  $program21_resource7_flow * $program21_resource7_date16_batchfactor;

$program22_resource7_date16_hrsreq =
  $program22_resource7_flow * $program22_resource7_date16_batchfactor;

$program23_resource7_date16_hrsreq =
  $program23_resource7_flow * $program23_resource7_date16_batchfactor;

$program24_resource7_date16_hrsreq =
  $program24_resource7_flow * $program24_resource7_date16_batchfactor;

$program25_resource7_date16_hrsreq =
  $program25_resource7_flow * $program25_resource7_date16_batchfactor;

$program26_resource7_date16_hrsreq =
  $program26_resource7_flow * $program26_resource7_date16_batchfactor;

$program27_resource7_date16_hrsreq =
  $program27_resource7_flow * $program27_resource7_date16_batchfactor;

$program28_resource7_date16_hrsreq =
  $program28_resource7_flow * $program28_resource7_date16_batchfactor;

$program29_resource7_date16_hrsreq =
  $program29_resource7_flow * $program29_resource7_date16_batchfactor;

$program30_resource7_date16_hrsreq =
  $program30_resource7_flow * $program30_resource7_date16_batchfactor;

$program31_resource7_date16_hrsreq =
  $program31_resource7_flow * $program31_resource7_date16_batchfactor;

$program32_resource7_date16_hrsreq =
  $program32_resource7_flow * $program32_resource7_date16_batchfactor;

$program33_resource7_date16_hrsreq =
  $program33_resource7_flow * $program33_resource7_date16_batchfactor;

$program34_resource7_date16_hrsreq =
  $program34_resource7_flow * $program34_resource7_date16_batchfactor;

$program35_resource7_date16_hrsreq =
  $program35_resource7_flow * $program35_resource7_date16_batchfactor;

$program36_resource7_date16_hrsreq =
  $program36_resource7_flow * $program36_resource7_date16_batchfactor;

  $program37_resource7_date16_hrsreq =
    $program37_resource7_flow * $program37_resource7_date16_batchfactor;

$program38_resource7_date16_hrsreq =
  $program38_resource7_flow * $program38_resource7_date16_batchfactor;

$program39_resource7_date16_hrsreq =
  $program39_resource7_flow * $program39_resource7_date16_batchfactor;

$program40_resource7_date16_hrsreq =
  $program40_resource7_flow * $program40_resource7_date16_batchfactor;

$program41_resource7_date16_hrsreq =
  $program41_resource7_flow * $program41_resource7_date16_batchfactor;

$program42_resource7_date16_hrsreq =
  $program42_resource7_flow * $program42_resource7_date16_batchfactor;

$program43_resource7_date16_hrsreq =
  $program43_resource7_flow * $program43_resource7_date16_batchfactor;

$program44_resource7_date16_hrsreq =
  $program44_resource7_flow * $program44_resource7_date16_batchfactor;

$program45_resource7_date16_hrsreq =
  $program45_resource7_flow * $program45_resource7_date16_batchfactor;

$program46_resource7_date16_hrsreq =
  $program46_resource7_flow * $program46_resource7_date16_batchfactor;

$program47_resource7_date16_hrsreq =
  $program47_resource7_flow * $program47_resource7_date16_batchfactor;

$program47_resource7_date16_hrsreq =
  $program47_resource7_flow * $program47_resource7_date16_batchfactor;

$program48_resource7_date16_hrsreq =
  $program48_resource7_flow * $program48_resource7_date16_batchfactor;

$program49_resource7_date16_hrsreq =
  $program49_resource7_flow * $program49_resource7_date16_batchfactor;

$program50_resource7_date16_hrsreq =
  $program50_resource7_flow * $program50_resource7_date16_batchfactor;

//Resource 7, Date 16 Total Hrs
$resource7_date16_totalhrs =
  round((
  $program1_resource7_date16_hrsreq +
  $program2_resource7_date16_hrsreq +
  $program3_resource7_date16_hrsreq +
  $program4_resource7_date16_hrsreq +
  $program5_resource7_date16_hrsreq +
  $program6_resource7_date16_hrsreq +
  $program7_resource7_date16_hrsreq +
  $program8_resource7_date16_hrsreq +
  $program9_resource7_date16_hrsreq +
  $program10_resource7_date16_hrsreq +
  $program11_resource7_date16_hrsreq +
  $program12_resource7_date16_hrsreq +
  $program13_resource7_date16_hrsreq +
  $program14_resource7_date16_hrsreq +
  $program15_resource7_date16_hrsreq +
  $program16_resource7_date16_hrsreq +
  $program17_resource7_date16_hrsreq +
  $program18_resource7_date16_hrsreq +
  $program19_resource7_date16_hrsreq +
  $program20_resource7_date16_hrsreq +
  $program21_resource7_date16_hrsreq +
  $program22_resource7_date16_hrsreq +
  $program23_resource7_date16_hrsreq +
  $program24_resource7_date16_hrsreq +
  $program25_resource7_date16_hrsreq +
  $program26_resource7_date16_hrsreq +
  $program27_resource7_date16_hrsreq +
  $program28_resource7_date16_hrsreq +
  $program29_resource7_date16_hrsreq +
  $program30_resource7_date16_hrsreq +
  $program31_resource7_date16_hrsreq +
  $program32_resource7_date16_hrsreq +
  $program33_resource7_date16_hrsreq +
  $program34_resource7_date16_hrsreq +
  $program35_resource7_date16_hrsreq +
  $program36_resource7_date16_hrsreq +
  $program37_resource7_date16_hrsreq +
  $program38_resource7_date16_hrsreq +
  $program39_resource7_date16_hrsreq +
  $program40_resource7_date16_hrsreq +
  $program41_resource7_date16_hrsreq +
  $program42_resource7_date16_hrsreq +
  $program43_resource7_date16_hrsreq +
  $program44_resource7_date16_hrsreq +
  $program45_resource7_date16_hrsreq +
  $program46_resource7_date16_hrsreq +
  $program47_resource7_date16_hrsreq +
  $program48_resource7_date16_hrsreq +
  $program49_resource7_date16_hrsreq +
  $program50_resource7_date16_hrsreq
  ),0);

//Date 16 Utilization
$resource7_date16_utilization =
$resource7_date16_totalhrs / $resource7_hrs_total;

//Date 16 Resources Required
$resource7_date16_resourcesreq =
ceil($resource7_date16_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 17
//Resource 7, Date 17 Batch Factors
$program1_resource7_date17_batchfactor =
  $program1_date17 / $program1_resource7_batch;

$program2_resource7_date17_batchfactor =
  $program2_date17 / $program2_resource7_batch;

$program3_resource7_date17_batchfactor =
  $program3_date17 / $program3_resource7_batch;

$program4_resource7_date17_batchfactor =
  $program4_date17 / $program4_resource7_batch;

$program5_resource7_date17_batchfactor =
  $program5_date17 / $program5_resource7_batch;

$program6_resource7_date17_batchfactor =
  $program6_date17 / $program6_resource7_batch;

$program7_resource7_date17_batchfactor =
  $program7_date17 / $program7_resource7_batch;

$program8_resource7_date17_batchfactor =
  $program8_date17 / $program8_resource7_batch;

$program9_resource7_date17_batchfactor =
  $program9_date17 / $program9_resource7_batch;

$program10_resource7_date17_batchfactor =
  $program10_date17 / $program10_resource7_batch;

$program11_resource7_date17_batchfactor =
  $program11_date17 / $program10_resource7_batch;

$program12_resource7_date17_batchfactor =
  $program12_date17 / $program10_resource7_batch;

$program13_resource7_date17_batchfactor =
  $program13_date17 / $program10_resource7_batch;

$program14_resource7_date17_batchfactor =
  $program14_date17 / $program10_resource7_batch;

$program15_resource7_date17_batchfactor =
  $program15_date17 / $program10_resource7_batch;

$program16_resource7_date17_batchfactor =
  $program16_date17 / $program10_resource7_batch;

$program17_resource7_date17_batchfactor =
  $program17_date17 / $program10_resource7_batch;

$program18_resource7_date17_batchfactor =
  $program18_date17 / $program10_resource7_batch;

$program19_resource7_date17_batchfactor =
  $program19_date17 / $program10_resource7_batch;

$program20_resource7_date17_batchfactor =
  $program20_date17 / $program10_resource7_batch;

$program21_resource7_date17_batchfactor =
  $program21_date17 / $program10_resource7_batch;

$program22_resource7_date17_batchfactor =
  $program22_date17 / $program10_resource7_batch;

$program23_resource7_date17_batchfactor =
  $program23_date17 / $program10_resource7_batch;

$program24_resource7_date17_batchfactor =
  $program24_date17 / $program10_resource7_batch;

$program25_resource7_date17_batchfactor =
  $program25_date17 / $program10_resource7_batch;

$program26_resource7_date17_batchfactor =
  $program26_date17 / $program10_resource7_batch;

$program27_resource7_date17_batchfactor =
  $program27_date17 / $program10_resource7_batch;

$program28_resource7_date17_batchfactor =
  $program28_date17 / $program10_resource7_batch;

$program29_resource7_date17_batchfactor =
  $program29_date17 / $program10_resource7_batch;

$program30_resource7_date17_batchfactor =
  $program30_date17 / $program10_resource7_batch;

$program31_resource7_date17_batchfactor =
  $program31_date17 / $program10_resource7_batch;

$program32_resource7_date17_batchfactor =
  $program32_date17 / $program10_resource7_batch;

$program33_resource7_date17_batchfactor =
  $program33_date17 / $program10_resource7_batch;

$program34_resource7_date17_batchfactor =
  $program34_date17 / $program10_resource7_batch;

$program35_resource7_date17_batchfactor =
  $program35_date17 / $program10_resource7_batch;

$program36_resource7_date17_batchfactor =
  $program36_date17 / $program10_resource7_batch;

$program37_resource7_date17_batchfactor =
  $program37_date17 / $program10_resource7_batch;

$program38_resource7_date17_batchfactor =
  $program38_date17 / $program10_resource7_batch;

$program39_resource7_date17_batchfactor =
  $program39_date17 / $program10_resource7_batch;

$program40_resource7_date17_batchfactor =
  $program40_date17 / $program10_resource7_batch;

$program41_resource7_date17_batchfactor =
  $program41_date17 / $program10_resource7_batch;

$program42_resource7_date17_batchfactor =
  $program42_date17 / $program10_resource7_batch;

$program43_resource7_date17_batchfactor =
  $program43_date17 / $program10_resource7_batch;

$program44_resource7_date17_batchfactor =
  $program44_date17 / $program10_resource7_batch;

$program45_resource7_date17_batchfactor =
  $program45_date17 / $program10_resource7_batch;

$program46_resource7_date17_batchfactor =
  $program46_date17 / $program10_resource7_batch;

$program47_resource7_date17_batchfactor =
  $program47_date17 / $program10_resource7_batch;

$program48_resource7_date17_batchfactor =
  $program48_date17 / $program10_resource7_batch;

$program49_resource7_date17_batchfactor =
  $program49_date17 / $program10_resource7_batch;

$program50_resource7_date17_batchfactor =
  $program50_date17 / $program10_resource7_batch;

//Resource 7, Date 17 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date17_hrsreq =
  $program1_resource7_flow * $program1_resource7_date17_batchfactor;

$program2_resource7_date17_hrsreq =
  $program2_resource7_flow * $program2_resource7_date17_batchfactor;

$program3_resource7_date17_hrsreq =
  $program3_resource7_flow * $program3_resource7_date17_batchfactor;

$program4_resource7_date17_hrsreq =
  $program4_resource7_flow * $program4_resource7_date17_batchfactor;

$program5_resource7_date17_hrsreq =
  $program5_resource7_flow * $program5_resource7_date17_batchfactor;

$program6_resource7_date17_hrsreq =
  $program6_resource7_flow * $program6_resource7_date17_batchfactor;

$program7_resource7_date17_hrsreq =
  $program7_resource7_flow * $program7_resource7_date17_batchfactor;

$program8_resource7_date17_hrsreq =
  $program8_resource7_flow * $program8_resource7_date17_batchfactor;

$program9_resource7_date17_hrsreq =
  $program9_resource7_flow * $program9_resource7_date17_batchfactor;

$program10_resource7_date17_hrsreq =
  $program10_resource7_flow * $program10_resource7_date17_batchfactor;

$program11_resource7_date17_hrsreq =
  $program11_resource7_flow * $program11_resource7_date17_batchfactor;

$program12_resource7_date17_hrsreq =
  $program12_resource7_flow * $program12_resource7_date17_batchfactor;

$program13_resource7_date17_hrsreq =
  $program13_resource7_flow * $program13_resource7_date17_batchfactor;

$program14_resource7_date17_hrsreq =
  $program14_resource7_flow * $program14_resource7_date17_batchfactor;

$program15_resource7_date17_hrsreq =
  $program15_resource7_flow * $program15_resource7_date17_batchfactor;

$program16_resource7_date17_hrsreq =
  $program16_resource7_flow * $program16_resource7_date17_batchfactor;

$program17_resource7_date17_hrsreq =
  $program17_resource7_flow * $program17_resource7_date17_batchfactor;

$program18_resource7_date17_hrsreq =
  $program18_resource7_flow * $program18_resource7_date17_batchfactor;

$program19_resource7_date17_hrsreq =
  $program19_resource7_flow * $program19_resource7_date17_batchfactor;

$program20_resource7_date17_hrsreq =
  $program20_resource7_flow * $program20_resource7_date17_batchfactor;

$program21_resource7_date17_hrsreq =
  $program21_resource7_flow * $program21_resource7_date17_batchfactor;

$program22_resource7_date17_hrsreq =
  $program22_resource7_flow * $program22_resource7_date17_batchfactor;

$program23_resource7_date17_hrsreq =
  $program23_resource7_flow * $program23_resource7_date17_batchfactor;

$program24_resource7_date17_hrsreq =
  $program24_resource7_flow * $program24_resource7_date17_batchfactor;

$program25_resource7_date17_hrsreq =
  $program25_resource7_flow * $program25_resource7_date17_batchfactor;

$program26_resource7_date17_hrsreq =
  $program26_resource7_flow * $program26_resource7_date17_batchfactor;

$program27_resource7_date17_hrsreq =
  $program27_resource7_flow * $program27_resource7_date17_batchfactor;

$program28_resource7_date17_hrsreq =
  $program28_resource7_flow * $program28_resource7_date17_batchfactor;

$program29_resource7_date17_hrsreq =
  $program29_resource7_flow * $program29_resource7_date17_batchfactor;

$program30_resource7_date17_hrsreq =
  $program30_resource7_flow * $program30_resource7_date17_batchfactor;

$program31_resource7_date17_hrsreq =
  $program31_resource7_flow * $program31_resource7_date17_batchfactor;

$program32_resource7_date17_hrsreq =
  $program32_resource7_flow * $program32_resource7_date17_batchfactor;

$program33_resource7_date17_hrsreq =
  $program33_resource7_flow * $program33_resource7_date17_batchfactor;

$program34_resource7_date17_hrsreq =
  $program34_resource7_flow * $program34_resource7_date17_batchfactor;

$program35_resource7_date17_hrsreq =
  $program35_resource7_flow * $program35_resource7_date17_batchfactor;

$program36_resource7_date17_hrsreq =
  $program36_resource7_flow * $program36_resource7_date17_batchfactor;

  $program37_resource7_date17_hrsreq =
    $program37_resource7_flow * $program37_resource7_date17_batchfactor;

$program38_resource7_date17_hrsreq =
  $program38_resource7_flow * $program38_resource7_date17_batchfactor;

$program39_resource7_date17_hrsreq =
  $program39_resource7_flow * $program39_resource7_date17_batchfactor;

$program40_resource7_date17_hrsreq =
  $program40_resource7_flow * $program40_resource7_date17_batchfactor;

$program41_resource7_date17_hrsreq =
  $program41_resource7_flow * $program41_resource7_date17_batchfactor;

$program42_resource7_date17_hrsreq =
  $program42_resource7_flow * $program42_resource7_date17_batchfactor;

$program43_resource7_date17_hrsreq =
  $program43_resource7_flow * $program43_resource7_date17_batchfactor;

$program44_resource7_date17_hrsreq =
  $program44_resource7_flow * $program44_resource7_date17_batchfactor;

$program45_resource7_date17_hrsreq =
  $program45_resource7_flow * $program45_resource7_date17_batchfactor;

$program46_resource7_date17_hrsreq =
  $program46_resource7_flow * $program46_resource7_date17_batchfactor;

$program47_resource7_date17_hrsreq =
  $program47_resource7_flow * $program47_resource7_date17_batchfactor;

$program47_resource7_date17_hrsreq =
  $program47_resource7_flow * $program47_resource7_date17_batchfactor;

$program48_resource7_date17_hrsreq =
  $program48_resource7_flow * $program48_resource7_date17_batchfactor;

$program49_resource7_date17_hrsreq =
  $program49_resource7_flow * $program49_resource7_date17_batchfactor;

$program50_resource7_date17_hrsreq =
  $program50_resource7_flow * $program50_resource7_date17_batchfactor;

//Resource 7, Date 17 Total Hrs
$resource7_date17_totalhrs =
  round((
  $program1_resource7_date17_hrsreq +
  $program2_resource7_date17_hrsreq +
  $program3_resource7_date17_hrsreq +
  $program4_resource7_date17_hrsreq +
  $program5_resource7_date17_hrsreq +
  $program6_resource7_date17_hrsreq +
  $program7_resource7_date17_hrsreq +
  $program8_resource7_date17_hrsreq +
  $program9_resource7_date17_hrsreq +
  $program10_resource7_date17_hrsreq +
  $program11_resource7_date17_hrsreq +
  $program12_resource7_date17_hrsreq +
  $program13_resource7_date17_hrsreq +
  $program14_resource7_date17_hrsreq +
  $program15_resource7_date17_hrsreq +
  $program16_resource7_date17_hrsreq +
  $program17_resource7_date17_hrsreq +
  $program18_resource7_date17_hrsreq +
  $program19_resource7_date17_hrsreq +
  $program20_resource7_date17_hrsreq +
  $program21_resource7_date17_hrsreq +
  $program22_resource7_date17_hrsreq +
  $program23_resource7_date17_hrsreq +
  $program24_resource7_date17_hrsreq +
  $program25_resource7_date17_hrsreq +
  $program26_resource7_date17_hrsreq +
  $program27_resource7_date17_hrsreq +
  $program28_resource7_date17_hrsreq +
  $program29_resource7_date17_hrsreq +
  $program30_resource7_date17_hrsreq +
  $program31_resource7_date17_hrsreq +
  $program32_resource7_date17_hrsreq +
  $program33_resource7_date17_hrsreq +
  $program34_resource7_date17_hrsreq +
  $program35_resource7_date17_hrsreq +
  $program36_resource7_date17_hrsreq +
  $program37_resource7_date17_hrsreq +
  $program38_resource7_date17_hrsreq +
  $program39_resource7_date17_hrsreq +
  $program40_resource7_date17_hrsreq +
  $program41_resource7_date17_hrsreq +
  $program42_resource7_date17_hrsreq +
  $program43_resource7_date17_hrsreq +
  $program44_resource7_date17_hrsreq +
  $program45_resource7_date17_hrsreq +
  $program46_resource7_date17_hrsreq +
  $program47_resource7_date17_hrsreq +
  $program48_resource7_date17_hrsreq +
  $program49_resource7_date17_hrsreq +
  $program50_resource7_date17_hrsreq
  ),0);

//Date 17 Utilization
$resource7_date17_utilization =
$resource7_date17_totalhrs / $resource7_hrs_total;

//Date 17 Resources Required
$resource7_date17_resourcesreq =
ceil($resource7_date17_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 18
//Resource 7, Date 18 Batch Factors
$program1_resource7_date18_batchfactor =
  $program1_date18 / $program1_resource7_batch;

$program2_resource7_date18_batchfactor =
  $program2_date18 / $program2_resource7_batch;

$program3_resource7_date18_batchfactor =
  $program3_date18 / $program3_resource7_batch;

$program4_resource7_date18_batchfactor =
  $program4_date18 / $program4_resource7_batch;

$program5_resource7_date18_batchfactor =
  $program5_date18 / $program5_resource7_batch;

$program6_resource7_date18_batchfactor =
  $program6_date18 / $program6_resource7_batch;

$program7_resource7_date18_batchfactor =
  $program7_date18 / $program7_resource7_batch;

$program8_resource7_date18_batchfactor =
  $program8_date18 / $program8_resource7_batch;

$program9_resource7_date18_batchfactor =
  $program9_date18 / $program9_resource7_batch;

$program10_resource7_date18_batchfactor =
  $program10_date18 / $program10_resource7_batch;

$program11_resource7_date18_batchfactor =
  $program11_date18 / $program10_resource7_batch;

$program12_resource7_date18_batchfactor =
  $program12_date18 / $program10_resource7_batch;

$program13_resource7_date18_batchfactor =
  $program13_date18 / $program10_resource7_batch;

$program14_resource7_date18_batchfactor =
  $program14_date18 / $program10_resource7_batch;

$program15_resource7_date18_batchfactor =
  $program15_date18 / $program10_resource7_batch;

$program16_resource7_date18_batchfactor =
  $program16_date18 / $program10_resource7_batch;

$program17_resource7_date18_batchfactor =
  $program17_date18 / $program10_resource7_batch;

$program18_resource7_date18_batchfactor =
  $program18_date18 / $program10_resource7_batch;

$program19_resource7_date18_batchfactor =
  $program19_date18 / $program10_resource7_batch;

$program20_resource7_date18_batchfactor =
  $program20_date18 / $program10_resource7_batch;

$program21_resource7_date18_batchfactor =
  $program21_date18 / $program10_resource7_batch;

$program22_resource7_date18_batchfactor =
  $program22_date18 / $program10_resource7_batch;

$program23_resource7_date18_batchfactor =
  $program23_date18 / $program10_resource7_batch;

$program24_resource7_date18_batchfactor =
  $program24_date18 / $program10_resource7_batch;

$program25_resource7_date18_batchfactor =
  $program25_date18 / $program10_resource7_batch;

$program26_resource7_date18_batchfactor =
  $program26_date18 / $program10_resource7_batch;

$program27_resource7_date18_batchfactor =
  $program27_date18 / $program10_resource7_batch;

$program28_resource7_date18_batchfactor =
  $program28_date18 / $program10_resource7_batch;

$program29_resource7_date18_batchfactor =
  $program29_date18 / $program10_resource7_batch;

$program30_resource7_date18_batchfactor =
  $program30_date18 / $program10_resource7_batch;

$program31_resource7_date18_batchfactor =
  $program31_date18 / $program10_resource7_batch;

$program32_resource7_date18_batchfactor =
  $program32_date18 / $program10_resource7_batch;

$program33_resource7_date18_batchfactor =
  $program33_date18 / $program10_resource7_batch;

$program34_resource7_date18_batchfactor =
  $program34_date18 / $program10_resource7_batch;

$program35_resource7_date18_batchfactor =
  $program35_date18 / $program10_resource7_batch;

$program36_resource7_date18_batchfactor =
  $program36_date18 / $program10_resource7_batch;

$program37_resource7_date18_batchfactor =
  $program37_date18 / $program10_resource7_batch;

$program38_resource7_date18_batchfactor =
  $program38_date18 / $program10_resource7_batch;

$program39_resource7_date18_batchfactor =
  $program39_date18 / $program10_resource7_batch;

$program40_resource7_date18_batchfactor =
  $program40_date18 / $program10_resource7_batch;

$program41_resource7_date18_batchfactor =
  $program41_date18 / $program10_resource7_batch;

$program42_resource7_date18_batchfactor =
  $program42_date18 / $program10_resource7_batch;

$program43_resource7_date18_batchfactor =
  $program43_date18 / $program10_resource7_batch;

$program44_resource7_date18_batchfactor =
  $program44_date18 / $program10_resource7_batch;

$program45_resource7_date18_batchfactor =
  $program45_date18 / $program10_resource7_batch;

$program46_resource7_date18_batchfactor =
  $program46_date18 / $program10_resource7_batch;

$program47_resource7_date18_batchfactor =
  $program47_date18 / $program10_resource7_batch;

$program48_resource7_date18_batchfactor =
  $program48_date18 / $program10_resource7_batch;

$program49_resource7_date18_batchfactor =
  $program49_date18 / $program10_resource7_batch;

$program50_resource7_date18_batchfactor =
  $program50_date18 / $program10_resource7_batch;

//Resource 7, Date 18 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date18_hrsreq =
  $program1_resource7_flow * $program1_resource7_date18_batchfactor;

$program2_resource7_date18_hrsreq =
  $program2_resource7_flow * $program2_resource7_date18_batchfactor;

$program3_resource7_date18_hrsreq =
  $program3_resource7_flow * $program3_resource7_date18_batchfactor;

$program4_resource7_date18_hrsreq =
  $program4_resource7_flow * $program4_resource7_date18_batchfactor;

$program5_resource7_date18_hrsreq =
  $program5_resource7_flow * $program5_resource7_date18_batchfactor;

$program6_resource7_date18_hrsreq =
  $program6_resource7_flow * $program6_resource7_date18_batchfactor;

$program7_resource7_date18_hrsreq =
  $program7_resource7_flow * $program7_resource7_date18_batchfactor;

$program8_resource7_date18_hrsreq =
  $program8_resource7_flow * $program8_resource7_date18_batchfactor;

$program9_resource7_date18_hrsreq =
  $program9_resource7_flow * $program9_resource7_date18_batchfactor;

$program10_resource7_date18_hrsreq =
  $program10_resource7_flow * $program10_resource7_date18_batchfactor;

$program11_resource7_date18_hrsreq =
  $program11_resource7_flow * $program11_resource7_date18_batchfactor;

$program12_resource7_date18_hrsreq =
  $program12_resource7_flow * $program12_resource7_date18_batchfactor;

$program13_resource7_date18_hrsreq =
  $program13_resource7_flow * $program13_resource7_date18_batchfactor;

$program14_resource7_date18_hrsreq =
  $program14_resource7_flow * $program14_resource7_date18_batchfactor;

$program15_resource7_date18_hrsreq =
  $program15_resource7_flow * $program15_resource7_date18_batchfactor;

$program16_resource7_date18_hrsreq =
  $program16_resource7_flow * $program16_resource7_date18_batchfactor;

$program17_resource7_date18_hrsreq =
  $program17_resource7_flow * $program17_resource7_date18_batchfactor;

$program18_resource7_date18_hrsreq =
  $program18_resource7_flow * $program18_resource7_date18_batchfactor;

$program19_resource7_date18_hrsreq =
  $program19_resource7_flow * $program19_resource7_date18_batchfactor;

$program20_resource7_date18_hrsreq =
  $program20_resource7_flow * $program20_resource7_date18_batchfactor;

$program21_resource7_date18_hrsreq =
  $program21_resource7_flow * $program21_resource7_date18_batchfactor;

$program22_resource7_date18_hrsreq =
  $program22_resource7_flow * $program22_resource7_date18_batchfactor;

$program23_resource7_date18_hrsreq =
  $program23_resource7_flow * $program23_resource7_date18_batchfactor;

$program24_resource7_date18_hrsreq =
  $program24_resource7_flow * $program24_resource7_date18_batchfactor;

$program25_resource7_date18_hrsreq =
  $program25_resource7_flow * $program25_resource7_date18_batchfactor;

$program26_resource7_date18_hrsreq =
  $program26_resource7_flow * $program26_resource7_date18_batchfactor;

$program27_resource7_date18_hrsreq =
  $program27_resource7_flow * $program27_resource7_date18_batchfactor;

$program28_resource7_date18_hrsreq =
  $program28_resource7_flow * $program28_resource7_date18_batchfactor;

$program29_resource7_date18_hrsreq =
  $program29_resource7_flow * $program29_resource7_date18_batchfactor;

$program30_resource7_date18_hrsreq =
  $program30_resource7_flow * $program30_resource7_date18_batchfactor;

$program31_resource7_date18_hrsreq =
  $program31_resource7_flow * $program31_resource7_date18_batchfactor;

$program32_resource7_date18_hrsreq =
  $program32_resource7_flow * $program32_resource7_date18_batchfactor;

$program33_resource7_date18_hrsreq =
  $program33_resource7_flow * $program33_resource7_date18_batchfactor;

$program34_resource7_date18_hrsreq =
  $program34_resource7_flow * $program34_resource7_date18_batchfactor;

$program35_resource7_date18_hrsreq =
  $program35_resource7_flow * $program35_resource7_date18_batchfactor;

$program36_resource7_date18_hrsreq =
  $program36_resource7_flow * $program36_resource7_date18_batchfactor;

  $program37_resource7_date18_hrsreq =
    $program37_resource7_flow * $program37_resource7_date18_batchfactor;

$program38_resource7_date18_hrsreq =
  $program38_resource7_flow * $program38_resource7_date18_batchfactor;

$program39_resource7_date18_hrsreq =
  $program39_resource7_flow * $program39_resource7_date18_batchfactor;

$program40_resource7_date18_hrsreq =
  $program40_resource7_flow * $program40_resource7_date18_batchfactor;

$program41_resource7_date18_hrsreq =
  $program41_resource7_flow * $program41_resource7_date18_batchfactor;

$program42_resource7_date18_hrsreq =
  $program42_resource7_flow * $program42_resource7_date18_batchfactor;

$program43_resource7_date18_hrsreq =
  $program43_resource7_flow * $program43_resource7_date18_batchfactor;

$program44_resource7_date18_hrsreq =
  $program44_resource7_flow * $program44_resource7_date18_batchfactor;

$program45_resource7_date18_hrsreq =
  $program45_resource7_flow * $program45_resource7_date18_batchfactor;

$program46_resource7_date18_hrsreq =
  $program46_resource7_flow * $program46_resource7_date18_batchfactor;

$program47_resource7_date18_hrsreq =
  $program47_resource7_flow * $program47_resource7_date18_batchfactor;

$program47_resource7_date18_hrsreq =
  $program47_resource7_flow * $program47_resource7_date18_batchfactor;

$program48_resource7_date18_hrsreq =
  $program48_resource7_flow * $program48_resource7_date18_batchfactor;

$program49_resource7_date18_hrsreq =
  $program49_resource7_flow * $program49_resource7_date18_batchfactor;

$program50_resource7_date18_hrsreq =
  $program50_resource7_flow * $program50_resource7_date18_batchfactor;

//Resource 7, Date 18 Total Hrs
$resource7_date18_totalhrs =
  round((
  $program1_resource7_date18_hrsreq +
  $program2_resource7_date18_hrsreq +
  $program3_resource7_date18_hrsreq +
  $program4_resource7_date18_hrsreq +
  $program5_resource7_date18_hrsreq +
  $program6_resource7_date18_hrsreq +
  $program7_resource7_date18_hrsreq +
  $program8_resource7_date18_hrsreq +
  $program9_resource7_date18_hrsreq +
  $program10_resource7_date18_hrsreq +
  $program11_resource7_date18_hrsreq +
  $program12_resource7_date18_hrsreq +
  $program13_resource7_date18_hrsreq +
  $program14_resource7_date18_hrsreq +
  $program15_resource7_date18_hrsreq +
  $program16_resource7_date18_hrsreq +
  $program17_resource7_date18_hrsreq +
  $program18_resource7_date18_hrsreq +
  $program19_resource7_date18_hrsreq +
  $program20_resource7_date18_hrsreq +
  $program21_resource7_date18_hrsreq +
  $program22_resource7_date18_hrsreq +
  $program23_resource7_date18_hrsreq +
  $program24_resource7_date18_hrsreq +
  $program25_resource7_date18_hrsreq +
  $program26_resource7_date18_hrsreq +
  $program27_resource7_date18_hrsreq +
  $program28_resource7_date18_hrsreq +
  $program29_resource7_date18_hrsreq +
  $program30_resource7_date18_hrsreq +
  $program31_resource7_date18_hrsreq +
  $program32_resource7_date18_hrsreq +
  $program33_resource7_date18_hrsreq +
  $program34_resource7_date18_hrsreq +
  $program35_resource7_date18_hrsreq +
  $program36_resource7_date18_hrsreq +
  $program37_resource7_date18_hrsreq +
  $program38_resource7_date18_hrsreq +
  $program39_resource7_date18_hrsreq +
  $program40_resource7_date18_hrsreq +
  $program41_resource7_date18_hrsreq +
  $program42_resource7_date18_hrsreq +
  $program43_resource7_date18_hrsreq +
  $program44_resource7_date18_hrsreq +
  $program45_resource7_date18_hrsreq +
  $program46_resource7_date18_hrsreq +
  $program47_resource7_date18_hrsreq +
  $program48_resource7_date18_hrsreq +
  $program49_resource7_date18_hrsreq +
  $program50_resource7_date18_hrsreq
  ),0);

//Date 18 Utilization
$resource7_date18_utilization =
$resource7_date18_totalhrs / $resource7_hrs_total;

//Date 18 Resources Required
$resource7_date18_resourcesreq =
ceil($resource7_date18_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 19
//Resource 7, Date 19 Batch Factors
$program1_resource7_date19_batchfactor =
  $program1_date19 / $program1_resource7_batch;

$program2_resource7_date19_batchfactor =
  $program2_date19 / $program2_resource7_batch;

$program3_resource7_date19_batchfactor =
  $program3_date19 / $program3_resource7_batch;

$program4_resource7_date19_batchfactor =
  $program4_date19 / $program4_resource7_batch;

$program5_resource7_date19_batchfactor =
  $program5_date19 / $program5_resource7_batch;

$program6_resource7_date19_batchfactor =
  $program6_date19 / $program6_resource7_batch;

$program7_resource7_date19_batchfactor =
  $program7_date19 / $program7_resource7_batch;

$program8_resource7_date19_batchfactor =
  $program8_date19 / $program8_resource7_batch;

$program9_resource7_date19_batchfactor =
  $program9_date19 / $program9_resource7_batch;

$program10_resource7_date19_batchfactor =
  $program10_date19 / $program10_resource7_batch;

$program11_resource7_date19_batchfactor =
  $program11_date19 / $program10_resource7_batch;

$program12_resource7_date19_batchfactor =
  $program12_date19 / $program10_resource7_batch;

$program13_resource7_date19_batchfactor =
  $program13_date19 / $program10_resource7_batch;

$program14_resource7_date19_batchfactor =
  $program14_date19 / $program10_resource7_batch;

$program15_resource7_date19_batchfactor =
  $program15_date19 / $program10_resource7_batch;

$program16_resource7_date19_batchfactor =
  $program16_date19 / $program10_resource7_batch;

$program17_resource7_date19_batchfactor =
  $program17_date19 / $program10_resource7_batch;

$program18_resource7_date19_batchfactor =
  $program18_date19 / $program10_resource7_batch;

$program19_resource7_date19_batchfactor =
  $program19_date19 / $program10_resource7_batch;

$program20_resource7_date19_batchfactor =
  $program20_date19 / $program10_resource7_batch;

$program21_resource7_date19_batchfactor =
  $program21_date19 / $program10_resource7_batch;

$program22_resource7_date19_batchfactor =
  $program22_date19 / $program10_resource7_batch;

$program23_resource7_date19_batchfactor =
  $program23_date19 / $program10_resource7_batch;

$program24_resource7_date19_batchfactor =
  $program24_date19 / $program10_resource7_batch;

$program25_resource7_date19_batchfactor =
  $program25_date19 / $program10_resource7_batch;

$program26_resource7_date19_batchfactor =
  $program26_date19 / $program10_resource7_batch;

$program27_resource7_date19_batchfactor =
  $program27_date19 / $program10_resource7_batch;

$program28_resource7_date19_batchfactor =
  $program28_date19 / $program10_resource7_batch;

$program29_resource7_date19_batchfactor =
  $program29_date19 / $program10_resource7_batch;

$program30_resource7_date19_batchfactor =
  $program30_date19 / $program10_resource7_batch;

$program31_resource7_date19_batchfactor =
  $program31_date19 / $program10_resource7_batch;

$program32_resource7_date19_batchfactor =
  $program32_date19 / $program10_resource7_batch;

$program33_resource7_date19_batchfactor =
  $program33_date19 / $program10_resource7_batch;

$program34_resource7_date19_batchfactor =
  $program34_date19 / $program10_resource7_batch;

$program35_resource7_date19_batchfactor =
  $program35_date19 / $program10_resource7_batch;

$program36_resource7_date19_batchfactor =
  $program36_date19 / $program10_resource7_batch;

$program37_resource7_date19_batchfactor =
  $program37_date19 / $program10_resource7_batch;

$program38_resource7_date19_batchfactor =
  $program38_date19 / $program10_resource7_batch;

$program39_resource7_date19_batchfactor =
  $program39_date19 / $program10_resource7_batch;

$program40_resource7_date19_batchfactor =
  $program40_date19 / $program10_resource7_batch;

$program41_resource7_date19_batchfactor =
  $program41_date19 / $program10_resource7_batch;

$program42_resource7_date19_batchfactor =
  $program42_date19 / $program10_resource7_batch;

$program43_resource7_date19_batchfactor =
  $program43_date19 / $program10_resource7_batch;

$program44_resource7_date19_batchfactor =
  $program44_date19 / $program10_resource7_batch;

$program45_resource7_date19_batchfactor =
  $program45_date19 / $program10_resource7_batch;

$program46_resource7_date19_batchfactor =
  $program46_date19 / $program10_resource7_batch;

$program47_resource7_date19_batchfactor =
  $program47_date19 / $program10_resource7_batch;

$program48_resource7_date19_batchfactor =
  $program48_date19 / $program10_resource7_batch;

$program49_resource7_date19_batchfactor =
  $program49_date19 / $program10_resource7_batch;

$program50_resource7_date19_batchfactor =
  $program50_date19 / $program10_resource7_batch;

//Resource 7, Date 19 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date19_hrsreq =
  $program1_resource7_flow * $program1_resource7_date19_batchfactor;

$program2_resource7_date19_hrsreq =
  $program2_resource7_flow * $program2_resource7_date19_batchfactor;

$program3_resource7_date19_hrsreq =
  $program3_resource7_flow * $program3_resource7_date19_batchfactor;

$program4_resource7_date19_hrsreq =
  $program4_resource7_flow * $program4_resource7_date19_batchfactor;

$program5_resource7_date19_hrsreq =
  $program5_resource7_flow * $program5_resource7_date19_batchfactor;

$program6_resource7_date19_hrsreq =
  $program6_resource7_flow * $program6_resource7_date19_batchfactor;

$program7_resource7_date19_hrsreq =
  $program7_resource7_flow * $program7_resource7_date19_batchfactor;

$program8_resource7_date19_hrsreq =
  $program8_resource7_flow * $program8_resource7_date19_batchfactor;

$program9_resource7_date19_hrsreq =
  $program9_resource7_flow * $program9_resource7_date19_batchfactor;

$program10_resource7_date19_hrsreq =
  $program10_resource7_flow * $program10_resource7_date19_batchfactor;

$program11_resource7_date19_hrsreq =
  $program11_resource7_flow * $program11_resource7_date19_batchfactor;

$program12_resource7_date19_hrsreq =
  $program12_resource7_flow * $program12_resource7_date19_batchfactor;

$program13_resource7_date19_hrsreq =
  $program13_resource7_flow * $program13_resource7_date19_batchfactor;

$program14_resource7_date19_hrsreq =
  $program14_resource7_flow * $program14_resource7_date19_batchfactor;

$program15_resource7_date19_hrsreq =
  $program15_resource7_flow * $program15_resource7_date19_batchfactor;

$program16_resource7_date19_hrsreq =
  $program16_resource7_flow * $program16_resource7_date19_batchfactor;

$program17_resource7_date19_hrsreq =
  $program17_resource7_flow * $program17_resource7_date19_batchfactor;

$program18_resource7_date19_hrsreq =
  $program18_resource7_flow * $program18_resource7_date19_batchfactor;

$program19_resource7_date19_hrsreq =
  $program19_resource7_flow * $program19_resource7_date19_batchfactor;

$program20_resource7_date19_hrsreq =
  $program20_resource7_flow * $program20_resource7_date19_batchfactor;

$program21_resource7_date19_hrsreq =
  $program21_resource7_flow * $program21_resource7_date19_batchfactor;

$program22_resource7_date19_hrsreq =
  $program22_resource7_flow * $program22_resource7_date19_batchfactor;

$program23_resource7_date19_hrsreq =
  $program23_resource7_flow * $program23_resource7_date19_batchfactor;

$program24_resource7_date19_hrsreq =
  $program24_resource7_flow * $program24_resource7_date19_batchfactor;

$program25_resource7_date19_hrsreq =
  $program25_resource7_flow * $program25_resource7_date19_batchfactor;

$program26_resource7_date19_hrsreq =
  $program26_resource7_flow * $program26_resource7_date19_batchfactor;

$program27_resource7_date19_hrsreq =
  $program27_resource7_flow * $program27_resource7_date19_batchfactor;

$program28_resource7_date19_hrsreq =
  $program28_resource7_flow * $program28_resource7_date19_batchfactor;

$program29_resource7_date19_hrsreq =
  $program29_resource7_flow * $program29_resource7_date19_batchfactor;

$program30_resource7_date19_hrsreq =
  $program30_resource7_flow * $program30_resource7_date19_batchfactor;

$program31_resource7_date19_hrsreq =
  $program31_resource7_flow * $program31_resource7_date19_batchfactor;

$program32_resource7_date19_hrsreq =
  $program32_resource7_flow * $program32_resource7_date19_batchfactor;

$program33_resource7_date19_hrsreq =
  $program33_resource7_flow * $program33_resource7_date19_batchfactor;

$program34_resource7_date19_hrsreq =
  $program34_resource7_flow * $program34_resource7_date19_batchfactor;

$program35_resource7_date19_hrsreq =
  $program35_resource7_flow * $program35_resource7_date19_batchfactor;

$program36_resource7_date19_hrsreq =
  $program36_resource7_flow * $program36_resource7_date19_batchfactor;

  $program37_resource7_date19_hrsreq =
    $program37_resource7_flow * $program37_resource7_date19_batchfactor;

$program38_resource7_date19_hrsreq =
  $program38_resource7_flow * $program38_resource7_date19_batchfactor;

$program39_resource7_date19_hrsreq =
  $program39_resource7_flow * $program39_resource7_date19_batchfactor;

$program40_resource7_date19_hrsreq =
  $program40_resource7_flow * $program40_resource7_date19_batchfactor;

$program41_resource7_date19_hrsreq =
  $program41_resource7_flow * $program41_resource7_date19_batchfactor;

$program42_resource7_date19_hrsreq =
  $program42_resource7_flow * $program42_resource7_date19_batchfactor;

$program43_resource7_date19_hrsreq =
  $program43_resource7_flow * $program43_resource7_date19_batchfactor;

$program44_resource7_date19_hrsreq =
  $program44_resource7_flow * $program44_resource7_date19_batchfactor;

$program45_resource7_date19_hrsreq =
  $program45_resource7_flow * $program45_resource7_date19_batchfactor;

$program46_resource7_date19_hrsreq =
  $program46_resource7_flow * $program46_resource7_date19_batchfactor;

$program47_resource7_date19_hrsreq =
  $program47_resource7_flow * $program47_resource7_date19_batchfactor;

$program47_resource7_date19_hrsreq =
  $program47_resource7_flow * $program47_resource7_date19_batchfactor;

$program48_resource7_date19_hrsreq =
  $program48_resource7_flow * $program48_resource7_date19_batchfactor;

$program49_resource7_date19_hrsreq =
  $program49_resource7_flow * $program49_resource7_date19_batchfactor;

$program50_resource7_date19_hrsreq =
  $program50_resource7_flow * $program50_resource7_date19_batchfactor;

//Resource 7, Date 19 Total Hrs
$resource7_date19_totalhrs =
  round((
  $program1_resource7_date19_hrsreq +
  $program2_resource7_date19_hrsreq +
  $program3_resource7_date19_hrsreq +
  $program4_resource7_date19_hrsreq +
  $program5_resource7_date19_hrsreq +
  $program6_resource7_date19_hrsreq +
  $program7_resource7_date19_hrsreq +
  $program8_resource7_date19_hrsreq +
  $program9_resource7_date19_hrsreq +
  $program10_resource7_date19_hrsreq +
  $program11_resource7_date19_hrsreq +
  $program12_resource7_date19_hrsreq +
  $program13_resource7_date19_hrsreq +
  $program14_resource7_date19_hrsreq +
  $program15_resource7_date19_hrsreq +
  $program16_resource7_date19_hrsreq +
  $program17_resource7_date19_hrsreq +
  $program18_resource7_date19_hrsreq +
  $program19_resource7_date19_hrsreq +
  $program20_resource7_date19_hrsreq +
  $program21_resource7_date19_hrsreq +
  $program22_resource7_date19_hrsreq +
  $program23_resource7_date19_hrsreq +
  $program24_resource7_date19_hrsreq +
  $program25_resource7_date19_hrsreq +
  $program26_resource7_date19_hrsreq +
  $program27_resource7_date19_hrsreq +
  $program28_resource7_date19_hrsreq +
  $program29_resource7_date19_hrsreq +
  $program30_resource7_date19_hrsreq +
  $program31_resource7_date19_hrsreq +
  $program32_resource7_date19_hrsreq +
  $program33_resource7_date19_hrsreq +
  $program34_resource7_date19_hrsreq +
  $program35_resource7_date19_hrsreq +
  $program36_resource7_date19_hrsreq +
  $program37_resource7_date19_hrsreq +
  $program38_resource7_date19_hrsreq +
  $program39_resource7_date19_hrsreq +
  $program40_resource7_date19_hrsreq +
  $program41_resource7_date19_hrsreq +
  $program42_resource7_date19_hrsreq +
  $program43_resource7_date19_hrsreq +
  $program44_resource7_date19_hrsreq +
  $program45_resource7_date19_hrsreq +
  $program46_resource7_date19_hrsreq +
  $program47_resource7_date19_hrsreq +
  $program48_resource7_date19_hrsreq +
  $program49_resource7_date19_hrsreq +
  $program50_resource7_date19_hrsreq
  ),0);

//Date 19 Utilization
$resource7_date19_utilization =
$resource7_date19_totalhrs / $resource7_hrs_total;

//Date 19 Resources Required
$resource7_date19_resourcesreq =
ceil($resource7_date19_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 20
//Resource 7, Date 20 Batch Factors
$program1_resource7_date20_batchfactor =
  $program1_date20 / $program1_resource7_batch;

$program2_resource7_date20_batchfactor =
  $program2_date20 / $program2_resource7_batch;

$program3_resource7_date20_batchfactor =
  $program3_date20 / $program3_resource7_batch;

$program4_resource7_date20_batchfactor =
  $program4_date20 / $program4_resource7_batch;

$program5_resource7_date20_batchfactor =
  $program5_date20 / $program5_resource7_batch;

$program6_resource7_date20_batchfactor =
  $program6_date20 / $program6_resource7_batch;

$program7_resource7_date20_batchfactor =
  $program7_date20 / $program7_resource7_batch;

$program8_resource7_date20_batchfactor =
  $program8_date20 / $program8_resource7_batch;

$program9_resource7_date20_batchfactor =
  $program9_date20 / $program9_resource7_batch;

$program10_resource7_date20_batchfactor =
  $program10_date20 / $program10_resource7_batch;

$program11_resource7_date20_batchfactor =
  $program11_date20 / $program10_resource7_batch;

$program12_resource7_date20_batchfactor =
  $program12_date20 / $program10_resource7_batch;

$program13_resource7_date20_batchfactor =
  $program13_date20 / $program10_resource7_batch;

$program14_resource7_date20_batchfactor =
  $program14_date20 / $program10_resource7_batch;

$program15_resource7_date20_batchfactor =
  $program15_date20 / $program10_resource7_batch;

$program16_resource7_date20_batchfactor =
  $program16_date20 / $program10_resource7_batch;

$program17_resource7_date20_batchfactor =
  $program17_date20 / $program10_resource7_batch;

$program18_resource7_date20_batchfactor =
  $program18_date20 / $program10_resource7_batch;

$program19_resource7_date20_batchfactor =
  $program19_date20 / $program10_resource7_batch;

$program20_resource7_date20_batchfactor =
  $program20_date20 / $program10_resource7_batch;

$program21_resource7_date20_batchfactor =
  $program21_date20 / $program10_resource7_batch;

$program22_resource7_date20_batchfactor =
  $program22_date20 / $program10_resource7_batch;

$program23_resource7_date20_batchfactor =
  $program23_date20 / $program10_resource7_batch;

$program24_resource7_date20_batchfactor =
  $program24_date20 / $program10_resource7_batch;

$program25_resource7_date20_batchfactor =
  $program25_date20 / $program10_resource7_batch;

$program26_resource7_date20_batchfactor =
  $program26_date20 / $program10_resource7_batch;

$program27_resource7_date20_batchfactor =
  $program27_date20 / $program10_resource7_batch;

$program28_resource7_date20_batchfactor =
  $program28_date20 / $program10_resource7_batch;

$program29_resource7_date20_batchfactor =
  $program29_date20 / $program10_resource7_batch;

$program30_resource7_date20_batchfactor =
  $program30_date20 / $program10_resource7_batch;

$program31_resource7_date20_batchfactor =
  $program31_date20 / $program10_resource7_batch;

$program32_resource7_date20_batchfactor =
  $program32_date20 / $program10_resource7_batch;

$program33_resource7_date20_batchfactor =
  $program33_date20 / $program10_resource7_batch;

$program34_resource7_date20_batchfactor =
  $program34_date20 / $program10_resource7_batch;

$program35_resource7_date20_batchfactor =
  $program35_date20 / $program10_resource7_batch;

$program36_resource7_date20_batchfactor =
  $program36_date20 / $program10_resource7_batch;

$program37_resource7_date20_batchfactor =
  $program37_date20 / $program10_resource7_batch;

$program38_resource7_date20_batchfactor =
  $program38_date20 / $program10_resource7_batch;

$program39_resource7_date20_batchfactor =
  $program39_date20 / $program10_resource7_batch;

$program40_resource7_date20_batchfactor =
  $program40_date20 / $program10_resource7_batch;

$program41_resource7_date20_batchfactor =
  $program41_date20 / $program10_resource7_batch;

$program42_resource7_date20_batchfactor =
  $program42_date20 / $program10_resource7_batch;

$program43_resource7_date20_batchfactor =
  $program43_date20 / $program10_resource7_batch;

$program44_resource7_date20_batchfactor =
  $program44_date20 / $program10_resource7_batch;

$program45_resource7_date20_batchfactor =
  $program45_date20 / $program10_resource7_batch;

$program46_resource7_date20_batchfactor =
  $program46_date20 / $program10_resource7_batch;

$program47_resource7_date20_batchfactor =
  $program47_date20 / $program10_resource7_batch;

$program48_resource7_date20_batchfactor =
  $program48_date20 / $program10_resource7_batch;

$program49_resource7_date20_batchfactor =
  $program49_date20 / $program10_resource7_batch;

$program50_resource7_date20_batchfactor =
  $program50_date20 / $program10_resource7_batch;

//Resource 7, Date 20 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date20_hrsreq =
  $program1_resource7_flow * $program1_resource7_date20_batchfactor;

$program2_resource7_date20_hrsreq =
  $program2_resource7_flow * $program2_resource7_date20_batchfactor;

$program3_resource7_date20_hrsreq =
  $program3_resource7_flow * $program3_resource7_date20_batchfactor;

$program4_resource7_date20_hrsreq =
  $program4_resource7_flow * $program4_resource7_date20_batchfactor;

$program5_resource7_date20_hrsreq =
  $program5_resource7_flow * $program5_resource7_date20_batchfactor;

$program6_resource7_date20_hrsreq =
  $program6_resource7_flow * $program6_resource7_date20_batchfactor;

$program7_resource7_date20_hrsreq =
  $program7_resource7_flow * $program7_resource7_date20_batchfactor;

$program8_resource7_date20_hrsreq =
  $program8_resource7_flow * $program8_resource7_date20_batchfactor;

$program9_resource7_date20_hrsreq =
  $program9_resource7_flow * $program9_resource7_date20_batchfactor;

$program10_resource7_date20_hrsreq =
  $program10_resource7_flow * $program10_resource7_date20_batchfactor;

$program11_resource7_date20_hrsreq =
  $program11_resource7_flow * $program11_resource7_date20_batchfactor;

$program12_resource7_date20_hrsreq =
  $program12_resource7_flow * $program12_resource7_date20_batchfactor;

$program13_resource7_date20_hrsreq =
  $program13_resource7_flow * $program13_resource7_date20_batchfactor;

$program14_resource7_date20_hrsreq =
  $program14_resource7_flow * $program14_resource7_date20_batchfactor;

$program15_resource7_date20_hrsreq =
  $program15_resource7_flow * $program15_resource7_date20_batchfactor;

$program16_resource7_date20_hrsreq =
  $program16_resource7_flow * $program16_resource7_date20_batchfactor;

$program17_resource7_date20_hrsreq =
  $program17_resource7_flow * $program17_resource7_date20_batchfactor;

$program18_resource7_date20_hrsreq =
  $program18_resource7_flow * $program18_resource7_date20_batchfactor;

$program19_resource7_date20_hrsreq =
  $program19_resource7_flow * $program19_resource7_date20_batchfactor;

$program20_resource7_date20_hrsreq =
  $program20_resource7_flow * $program20_resource7_date20_batchfactor;

$program21_resource7_date20_hrsreq =
  $program21_resource7_flow * $program21_resource7_date20_batchfactor;

$program22_resource7_date20_hrsreq =
  $program22_resource7_flow * $program22_resource7_date20_batchfactor;

$program23_resource7_date20_hrsreq =
  $program23_resource7_flow * $program23_resource7_date20_batchfactor;

$program24_resource7_date20_hrsreq =
  $program24_resource7_flow * $program24_resource7_date20_batchfactor;

$program25_resource7_date20_hrsreq =
  $program25_resource7_flow * $program25_resource7_date20_batchfactor;

$program26_resource7_date20_hrsreq =
  $program26_resource7_flow * $program26_resource7_date20_batchfactor;

$program27_resource7_date20_hrsreq =
  $program27_resource7_flow * $program27_resource7_date20_batchfactor;

$program28_resource7_date20_hrsreq =
  $program28_resource7_flow * $program28_resource7_date20_batchfactor;

$program29_resource7_date20_hrsreq =
  $program29_resource7_flow * $program29_resource7_date20_batchfactor;

$program30_resource7_date20_hrsreq =
  $program30_resource7_flow * $program30_resource7_date20_batchfactor;

$program31_resource7_date20_hrsreq =
  $program31_resource7_flow * $program31_resource7_date20_batchfactor;

$program32_resource7_date20_hrsreq =
  $program32_resource7_flow * $program32_resource7_date20_batchfactor;

$program33_resource7_date20_hrsreq =
  $program33_resource7_flow * $program33_resource7_date20_batchfactor;

$program34_resource7_date20_hrsreq =
  $program34_resource7_flow * $program34_resource7_date20_batchfactor;

$program35_resource7_date20_hrsreq =
  $program35_resource7_flow * $program35_resource7_date20_batchfactor;

$program36_resource7_date20_hrsreq =
  $program36_resource7_flow * $program36_resource7_date20_batchfactor;

  $program37_resource7_date20_hrsreq =
    $program37_resource7_flow * $program37_resource7_date20_batchfactor;

$program38_resource7_date20_hrsreq =
  $program38_resource7_flow * $program38_resource7_date20_batchfactor;

$program39_resource7_date20_hrsreq =
  $program39_resource7_flow * $program39_resource7_date20_batchfactor;

$program40_resource7_date20_hrsreq =
  $program40_resource7_flow * $program40_resource7_date20_batchfactor;

$program41_resource7_date20_hrsreq =
  $program41_resource7_flow * $program41_resource7_date20_batchfactor;

$program42_resource7_date20_hrsreq =
  $program42_resource7_flow * $program42_resource7_date20_batchfactor;

$program43_resource7_date20_hrsreq =
  $program43_resource7_flow * $program43_resource7_date20_batchfactor;

$program44_resource7_date20_hrsreq =
  $program44_resource7_flow * $program44_resource7_date20_batchfactor;

$program45_resource7_date20_hrsreq =
  $program45_resource7_flow * $program45_resource7_date20_batchfactor;

$program46_resource7_date20_hrsreq =
  $program46_resource7_flow * $program46_resource7_date20_batchfactor;

$program47_resource7_date20_hrsreq =
  $program47_resource7_flow * $program47_resource7_date20_batchfactor;

$program47_resource7_date20_hrsreq =
  $program47_resource7_flow * $program47_resource7_date20_batchfactor;

$program48_resource7_date20_hrsreq =
  $program48_resource7_flow * $program48_resource7_date20_batchfactor;

$program49_resource7_date20_hrsreq =
  $program49_resource7_flow * $program49_resource7_date20_batchfactor;

$program50_resource7_date20_hrsreq =
  $program50_resource7_flow * $program50_resource7_date20_batchfactor;

//Resource 7, Date 20 Total Hrs
$resource7_date20_totalhrs =
  round((
  $program1_resource7_date20_hrsreq +
  $program2_resource7_date20_hrsreq +
  $program3_resource7_date20_hrsreq +
  $program4_resource7_date20_hrsreq +
  $program5_resource7_date20_hrsreq +
  $program6_resource7_date20_hrsreq +
  $program7_resource7_date20_hrsreq +
  $program8_resource7_date20_hrsreq +
  $program9_resource7_date20_hrsreq +
  $program10_resource7_date20_hrsreq +
  $program11_resource7_date20_hrsreq +
  $program12_resource7_date20_hrsreq +
  $program13_resource7_date20_hrsreq +
  $program14_resource7_date20_hrsreq +
  $program15_resource7_date20_hrsreq +
  $program16_resource7_date20_hrsreq +
  $program17_resource7_date20_hrsreq +
  $program18_resource7_date20_hrsreq +
  $program19_resource7_date20_hrsreq +
  $program20_resource7_date20_hrsreq +
  $program21_resource7_date20_hrsreq +
  $program22_resource7_date20_hrsreq +
  $program23_resource7_date20_hrsreq +
  $program24_resource7_date20_hrsreq +
  $program25_resource7_date20_hrsreq +
  $program26_resource7_date20_hrsreq +
  $program27_resource7_date20_hrsreq +
  $program28_resource7_date20_hrsreq +
  $program29_resource7_date20_hrsreq +
  $program30_resource7_date20_hrsreq +
  $program31_resource7_date20_hrsreq +
  $program32_resource7_date20_hrsreq +
  $program33_resource7_date20_hrsreq +
  $program34_resource7_date20_hrsreq +
  $program35_resource7_date20_hrsreq +
  $program36_resource7_date20_hrsreq +
  $program37_resource7_date20_hrsreq +
  $program38_resource7_date20_hrsreq +
  $program39_resource7_date20_hrsreq +
  $program40_resource7_date20_hrsreq +
  $program41_resource7_date20_hrsreq +
  $program42_resource7_date20_hrsreq +
  $program43_resource7_date20_hrsreq +
  $program44_resource7_date20_hrsreq +
  $program45_resource7_date20_hrsreq +
  $program46_resource7_date20_hrsreq +
  $program47_resource7_date20_hrsreq +
  $program48_resource7_date20_hrsreq +
  $program49_resource7_date20_hrsreq +
  $program50_resource7_date20_hrsreq
  ),0);

//Date 20 Utilization
$resource7_date20_utilization =
$resource7_date20_totalhrs / $resource7_hrs_total;

//Date 20 Resources Required
$resource7_date20_resourcesreq =
ceil($resource7_date20_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 21
//Resource 7, Date 21 Batch Factors
$program1_resource7_date21_batchfactor =
  $program1_date21 / $program1_resource7_batch;

$program2_resource7_date21_batchfactor =
  $program2_date21 / $program2_resource7_batch;

$program3_resource7_date21_batchfactor =
  $program3_date21 / $program3_resource7_batch;

$program4_resource7_date21_batchfactor =
  $program4_date21 / $program4_resource7_batch;

$program5_resource7_date21_batchfactor =
  $program5_date21 / $program5_resource7_batch;

$program6_resource7_date21_batchfactor =
  $program6_date21 / $program6_resource7_batch;

$program7_resource7_date21_batchfactor =
  $program7_date21 / $program7_resource7_batch;

$program8_resource7_date21_batchfactor =
  $program8_date21 / $program8_resource7_batch;

$program9_resource7_date21_batchfactor =
  $program9_date21 / $program9_resource7_batch;

$program10_resource7_date21_batchfactor =
  $program10_date21 / $program10_resource7_batch;

$program11_resource7_date21_batchfactor =
  $program11_date21 / $program10_resource7_batch;

$program12_resource7_date21_batchfactor =
  $program12_date21 / $program10_resource7_batch;

$program13_resource7_date21_batchfactor =
  $program13_date21 / $program10_resource7_batch;

$program14_resource7_date21_batchfactor =
  $program14_date21 / $program10_resource7_batch;

$program15_resource7_date21_batchfactor =
  $program15_date21 / $program10_resource7_batch;

$program16_resource7_date21_batchfactor =
  $program16_date21 / $program10_resource7_batch;

$program17_resource7_date21_batchfactor =
  $program17_date21 / $program10_resource7_batch;

$program18_resource7_date21_batchfactor =
  $program18_date21 / $program10_resource7_batch;

$program19_resource7_date21_batchfactor =
  $program19_date21 / $program10_resource7_batch;

$program20_resource7_date21_batchfactor =
  $program20_date21 / $program10_resource7_batch;

$program21_resource7_date21_batchfactor =
  $program21_date21 / $program10_resource7_batch;

$program22_resource7_date21_batchfactor =
  $program22_date21 / $program10_resource7_batch;

$program23_resource7_date21_batchfactor =
  $program23_date21 / $program10_resource7_batch;

$program24_resource7_date21_batchfactor =
  $program24_date21 / $program10_resource7_batch;

$program25_resource7_date21_batchfactor =
  $program25_date21 / $program10_resource7_batch;

$program26_resource7_date21_batchfactor =
  $program26_date21 / $program10_resource7_batch;

$program27_resource7_date21_batchfactor =
  $program27_date21 / $program10_resource7_batch;

$program28_resource7_date21_batchfactor =
  $program28_date21 / $program10_resource7_batch;

$program29_resource7_date21_batchfactor =
  $program29_date21 / $program10_resource7_batch;

$program30_resource7_date21_batchfactor =
  $program30_date21 / $program10_resource7_batch;

$program31_resource7_date21_batchfactor =
  $program31_date21 / $program10_resource7_batch;

$program32_resource7_date21_batchfactor =
  $program32_date21 / $program10_resource7_batch;

$program33_resource7_date21_batchfactor =
  $program33_date21 / $program10_resource7_batch;

$program34_resource7_date21_batchfactor =
  $program34_date21 / $program10_resource7_batch;

$program35_resource7_date21_batchfactor =
  $program35_date21 / $program10_resource7_batch;

$program36_resource7_date21_batchfactor =
  $program36_date21 / $program10_resource7_batch;

$program37_resource7_date21_batchfactor =
  $program37_date21 / $program10_resource7_batch;

$program38_resource7_date21_batchfactor =
  $program38_date21 / $program10_resource7_batch;

$program39_resource7_date21_batchfactor =
  $program39_date21 / $program10_resource7_batch;

$program40_resource7_date21_batchfactor =
  $program40_date21 / $program10_resource7_batch;

$program41_resource7_date21_batchfactor =
  $program41_date21 / $program10_resource7_batch;

$program42_resource7_date21_batchfactor =
  $program42_date21 / $program10_resource7_batch;

$program43_resource7_date21_batchfactor =
  $program43_date21 / $program10_resource7_batch;

$program44_resource7_date21_batchfactor =
  $program44_date21 / $program10_resource7_batch;

$program45_resource7_date21_batchfactor =
  $program45_date21 / $program10_resource7_batch;

$program46_resource7_date21_batchfactor =
  $program46_date21 / $program10_resource7_batch;

$program47_resource7_date21_batchfactor =
  $program47_date21 / $program10_resource7_batch;

$program48_resource7_date21_batchfactor =
  $program48_date21 / $program10_resource7_batch;

$program49_resource7_date21_batchfactor =
  $program49_date21 / $program10_resource7_batch;

$program50_resource7_date21_batchfactor =
  $program50_date21 / $program10_resource7_batch;

//Resource 7, Date 21 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date21_hrsreq =
  $program1_resource7_flow * $program1_resource7_date21_batchfactor;

$program2_resource7_date21_hrsreq =
  $program2_resource7_flow * $program2_resource7_date21_batchfactor;

$program3_resource7_date21_hrsreq =
  $program3_resource7_flow * $program3_resource7_date21_batchfactor;

$program4_resource7_date21_hrsreq =
  $program4_resource7_flow * $program4_resource7_date21_batchfactor;

$program5_resource7_date21_hrsreq =
  $program5_resource7_flow * $program5_resource7_date21_batchfactor;

$program6_resource7_date21_hrsreq =
  $program6_resource7_flow * $program6_resource7_date21_batchfactor;

$program7_resource7_date21_hrsreq =
  $program7_resource7_flow * $program7_resource7_date21_batchfactor;

$program8_resource7_date21_hrsreq =
  $program8_resource7_flow * $program8_resource7_date21_batchfactor;

$program9_resource7_date21_hrsreq =
  $program9_resource7_flow * $program9_resource7_date21_batchfactor;

$program10_resource7_date21_hrsreq =
  $program10_resource7_flow * $program10_resource7_date21_batchfactor;

$program11_resource7_date21_hrsreq =
  $program11_resource7_flow * $program11_resource7_date21_batchfactor;

$program12_resource7_date21_hrsreq =
  $program12_resource7_flow * $program12_resource7_date21_batchfactor;

$program13_resource7_date21_hrsreq =
  $program13_resource7_flow * $program13_resource7_date21_batchfactor;

$program14_resource7_date21_hrsreq =
  $program14_resource7_flow * $program14_resource7_date21_batchfactor;

$program15_resource7_date21_hrsreq =
  $program15_resource7_flow * $program15_resource7_date21_batchfactor;

$program16_resource7_date21_hrsreq =
  $program16_resource7_flow * $program16_resource7_date21_batchfactor;

$program17_resource7_date21_hrsreq =
  $program17_resource7_flow * $program17_resource7_date21_batchfactor;

$program18_resource7_date21_hrsreq =
  $program18_resource7_flow * $program18_resource7_date21_batchfactor;

$program19_resource7_date21_hrsreq =
  $program19_resource7_flow * $program19_resource7_date21_batchfactor;

$program20_resource7_date21_hrsreq =
  $program20_resource7_flow * $program20_resource7_date21_batchfactor;

$program21_resource7_date21_hrsreq =
  $program21_resource7_flow * $program21_resource7_date21_batchfactor;

$program22_resource7_date21_hrsreq =
  $program22_resource7_flow * $program22_resource7_date21_batchfactor;

$program23_resource7_date21_hrsreq =
  $program23_resource7_flow * $program23_resource7_date21_batchfactor;

$program24_resource7_date21_hrsreq =
  $program24_resource7_flow * $program24_resource7_date21_batchfactor;

$program25_resource7_date21_hrsreq =
  $program25_resource7_flow * $program25_resource7_date21_batchfactor;

$program26_resource7_date21_hrsreq =
  $program26_resource7_flow * $program26_resource7_date21_batchfactor;

$program27_resource7_date21_hrsreq =
  $program27_resource7_flow * $program27_resource7_date21_batchfactor;

$program28_resource7_date21_hrsreq =
  $program28_resource7_flow * $program28_resource7_date21_batchfactor;

$program29_resource7_date21_hrsreq =
  $program29_resource7_flow * $program29_resource7_date21_batchfactor;

$program30_resource7_date21_hrsreq =
  $program30_resource7_flow * $program30_resource7_date21_batchfactor;

$program31_resource7_date21_hrsreq =
  $program31_resource7_flow * $program31_resource7_date21_batchfactor;

$program32_resource7_date21_hrsreq =
  $program32_resource7_flow * $program32_resource7_date21_batchfactor;

$program33_resource7_date21_hrsreq =
  $program33_resource7_flow * $program33_resource7_date21_batchfactor;

$program34_resource7_date21_hrsreq =
  $program34_resource7_flow * $program34_resource7_date21_batchfactor;

$program35_resource7_date21_hrsreq =
  $program35_resource7_flow * $program35_resource7_date21_batchfactor;

$program36_resource7_date21_hrsreq =
  $program36_resource7_flow * $program36_resource7_date21_batchfactor;

  $program37_resource7_date21_hrsreq =
    $program37_resource7_flow * $program37_resource7_date21_batchfactor;

$program38_resource7_date21_hrsreq =
  $program38_resource7_flow * $program38_resource7_date21_batchfactor;

$program39_resource7_date21_hrsreq =
  $program39_resource7_flow * $program39_resource7_date21_batchfactor;

$program40_resource7_date21_hrsreq =
  $program40_resource7_flow * $program40_resource7_date21_batchfactor;

$program41_resource7_date21_hrsreq =
  $program41_resource7_flow * $program41_resource7_date21_batchfactor;

$program42_resource7_date21_hrsreq =
  $program42_resource7_flow * $program42_resource7_date21_batchfactor;

$program43_resource7_date21_hrsreq =
  $program43_resource7_flow * $program43_resource7_date21_batchfactor;

$program44_resource7_date21_hrsreq =
  $program44_resource7_flow * $program44_resource7_date21_batchfactor;

$program45_resource7_date21_hrsreq =
  $program45_resource7_flow * $program45_resource7_date21_batchfactor;

$program46_resource7_date21_hrsreq =
  $program46_resource7_flow * $program46_resource7_date21_batchfactor;

$program47_resource7_date21_hrsreq =
  $program47_resource7_flow * $program47_resource7_date21_batchfactor;

$program47_resource7_date21_hrsreq =
  $program47_resource7_flow * $program47_resource7_date21_batchfactor;

$program48_resource7_date21_hrsreq =
  $program48_resource7_flow * $program48_resource7_date21_batchfactor;

$program49_resource7_date21_hrsreq =
  $program49_resource7_flow * $program49_resource7_date21_batchfactor;

$program50_resource7_date21_hrsreq =
  $program50_resource7_flow * $program50_resource7_date21_batchfactor;

//Resource 7, Date 21 Total Hrs
$resource7_date21_totalhrs =
  round((
  $program1_resource7_date21_hrsreq +
  $program2_resource7_date21_hrsreq +
  $program3_resource7_date21_hrsreq +
  $program4_resource7_date21_hrsreq +
  $program5_resource7_date21_hrsreq +
  $program6_resource7_date21_hrsreq +
  $program7_resource7_date21_hrsreq +
  $program8_resource7_date21_hrsreq +
  $program9_resource7_date21_hrsreq +
  $program10_resource7_date21_hrsreq +
  $program11_resource7_date21_hrsreq +
  $program12_resource7_date21_hrsreq +
  $program13_resource7_date21_hrsreq +
  $program14_resource7_date21_hrsreq +
  $program15_resource7_date21_hrsreq +
  $program16_resource7_date21_hrsreq +
  $program17_resource7_date21_hrsreq +
  $program18_resource7_date21_hrsreq +
  $program19_resource7_date21_hrsreq +
  $program20_resource7_date21_hrsreq +
  $program21_resource7_date21_hrsreq +
  $program22_resource7_date21_hrsreq +
  $program23_resource7_date21_hrsreq +
  $program24_resource7_date21_hrsreq +
  $program25_resource7_date21_hrsreq +
  $program26_resource7_date21_hrsreq +
  $program27_resource7_date21_hrsreq +
  $program28_resource7_date21_hrsreq +
  $program29_resource7_date21_hrsreq +
  $program30_resource7_date21_hrsreq +
  $program31_resource7_date21_hrsreq +
  $program32_resource7_date21_hrsreq +
  $program33_resource7_date21_hrsreq +
  $program34_resource7_date21_hrsreq +
  $program35_resource7_date21_hrsreq +
  $program36_resource7_date21_hrsreq +
  $program37_resource7_date21_hrsreq +
  $program38_resource7_date21_hrsreq +
  $program39_resource7_date21_hrsreq +
  $program40_resource7_date21_hrsreq +
  $program41_resource7_date21_hrsreq +
  $program42_resource7_date21_hrsreq +
  $program43_resource7_date21_hrsreq +
  $program44_resource7_date21_hrsreq +
  $program45_resource7_date21_hrsreq +
  $program46_resource7_date21_hrsreq +
  $program47_resource7_date21_hrsreq +
  $program48_resource7_date21_hrsreq +
  $program49_resource7_date21_hrsreq +
  $program50_resource7_date21_hrsreq
  ),0);

//Date 21 Utilization
$resource7_date21_utilization =
$resource7_date21_totalhrs / $resource7_hrs_total;

//Date 21 Resources Required
$resource7_date21_resourcesreq =
ceil($resource7_date21_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 22
//Resource 7, Date 22 Batch Factors
$program1_resource7_date22_batchfactor =
  $program1_date22 / $program1_resource7_batch;

$program2_resource7_date22_batchfactor =
  $program2_date22 / $program2_resource7_batch;

$program3_resource7_date22_batchfactor =
  $program3_date22 / $program3_resource7_batch;

$program4_resource7_date22_batchfactor =
  $program4_date22 / $program4_resource7_batch;

$program5_resource7_date22_batchfactor =
  $program5_date22 / $program5_resource7_batch;

$program6_resource7_date22_batchfactor =
  $program6_date22 / $program6_resource7_batch;

$program7_resource7_date22_batchfactor =
  $program7_date22 / $program7_resource7_batch;

$program8_resource7_date22_batchfactor =
  $program8_date22 / $program8_resource7_batch;

$program9_resource7_date22_batchfactor =
  $program9_date22 / $program9_resource7_batch;

$program10_resource7_date22_batchfactor =
  $program10_date22 / $program10_resource7_batch;

$program11_resource7_date22_batchfactor =
  $program11_date22 / $program10_resource7_batch;

$program12_resource7_date22_batchfactor =
  $program12_date22 / $program10_resource7_batch;

$program13_resource7_date22_batchfactor =
  $program13_date22 / $program10_resource7_batch;

$program14_resource7_date22_batchfactor =
  $program14_date22 / $program10_resource7_batch;

$program15_resource7_date22_batchfactor =
  $program15_date22 / $program10_resource7_batch;

$program16_resource7_date22_batchfactor =
  $program16_date22 / $program10_resource7_batch;

$program17_resource7_date22_batchfactor =
  $program17_date22 / $program10_resource7_batch;

$program18_resource7_date22_batchfactor =
  $program18_date22 / $program10_resource7_batch;

$program19_resource7_date22_batchfactor =
  $program19_date22 / $program10_resource7_batch;

$program20_resource7_date22_batchfactor =
  $program20_date22 / $program10_resource7_batch;

$program21_resource7_date22_batchfactor =
  $program21_date22 / $program10_resource7_batch;

$program22_resource7_date22_batchfactor =
  $program22_date22 / $program10_resource7_batch;

$program23_resource7_date22_batchfactor =
  $program23_date22 / $program10_resource7_batch;

$program24_resource7_date22_batchfactor =
  $program24_date22 / $program10_resource7_batch;

$program25_resource7_date22_batchfactor =
  $program25_date22 / $program10_resource7_batch;

$program26_resource7_date22_batchfactor =
  $program26_date22 / $program10_resource7_batch;

$program27_resource7_date22_batchfactor =
  $program27_date22 / $program10_resource7_batch;

$program28_resource7_date22_batchfactor =
  $program28_date22 / $program10_resource7_batch;

$program29_resource7_date22_batchfactor =
  $program29_date22 / $program10_resource7_batch;

$program30_resource7_date22_batchfactor =
  $program30_date22 / $program10_resource7_batch;

$program31_resource7_date22_batchfactor =
  $program31_date22 / $program10_resource7_batch;

$program32_resource7_date22_batchfactor =
  $program32_date22 / $program10_resource7_batch;

$program33_resource7_date22_batchfactor =
  $program33_date22 / $program10_resource7_batch;

$program34_resource7_date22_batchfactor =
  $program34_date22 / $program10_resource7_batch;

$program35_resource7_date22_batchfactor =
  $program35_date22 / $program10_resource7_batch;

$program36_resource7_date22_batchfactor =
  $program36_date22 / $program10_resource7_batch;

$program37_resource7_date22_batchfactor =
  $program37_date22 / $program10_resource7_batch;

$program38_resource7_date22_batchfactor =
  $program38_date22 / $program10_resource7_batch;

$program39_resource7_date22_batchfactor =
  $program39_date22 / $program10_resource7_batch;

$program40_resource7_date22_batchfactor =
  $program40_date22 / $program10_resource7_batch;

$program41_resource7_date22_batchfactor =
  $program41_date22 / $program10_resource7_batch;

$program42_resource7_date22_batchfactor =
  $program42_date22 / $program10_resource7_batch;

$program43_resource7_date22_batchfactor =
  $program43_date22 / $program10_resource7_batch;

$program44_resource7_date22_batchfactor =
  $program44_date22 / $program10_resource7_batch;

$program45_resource7_date22_batchfactor =
  $program45_date22 / $program10_resource7_batch;

$program46_resource7_date22_batchfactor =
  $program46_date22 / $program10_resource7_batch;

$program47_resource7_date22_batchfactor =
  $program47_date22 / $program10_resource7_batch;

$program48_resource7_date22_batchfactor =
  $program48_date22 / $program10_resource7_batch;

$program49_resource7_date22_batchfactor =
  $program49_date22 / $program10_resource7_batch;

$program50_resource7_date22_batchfactor =
  $program50_date22 / $program10_resource7_batch;

//Resource 7, Date 22 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date22_hrsreq =
  $program1_resource7_flow * $program1_resource7_date22_batchfactor;

$program2_resource7_date22_hrsreq =
  $program2_resource7_flow * $program2_resource7_date22_batchfactor;

$program3_resource7_date22_hrsreq =
  $program3_resource7_flow * $program3_resource7_date22_batchfactor;

$program4_resource7_date22_hrsreq =
  $program4_resource7_flow * $program4_resource7_date22_batchfactor;

$program5_resource7_date22_hrsreq =
  $program5_resource7_flow * $program5_resource7_date22_batchfactor;

$program6_resource7_date22_hrsreq =
  $program6_resource7_flow * $program6_resource7_date22_batchfactor;

$program7_resource7_date22_hrsreq =
  $program7_resource7_flow * $program7_resource7_date22_batchfactor;

$program8_resource7_date22_hrsreq =
  $program8_resource7_flow * $program8_resource7_date22_batchfactor;

$program9_resource7_date22_hrsreq =
  $program9_resource7_flow * $program9_resource7_date22_batchfactor;

$program10_resource7_date22_hrsreq =
  $program10_resource7_flow * $program10_resource7_date22_batchfactor;

$program11_resource7_date22_hrsreq =
  $program11_resource7_flow * $program11_resource7_date22_batchfactor;

$program12_resource7_date22_hrsreq =
  $program12_resource7_flow * $program12_resource7_date22_batchfactor;

$program13_resource7_date22_hrsreq =
  $program13_resource7_flow * $program13_resource7_date22_batchfactor;

$program14_resource7_date22_hrsreq =
  $program14_resource7_flow * $program14_resource7_date22_batchfactor;

$program15_resource7_date22_hrsreq =
  $program15_resource7_flow * $program15_resource7_date22_batchfactor;

$program16_resource7_date22_hrsreq =
  $program16_resource7_flow * $program16_resource7_date22_batchfactor;

$program17_resource7_date22_hrsreq =
  $program17_resource7_flow * $program17_resource7_date22_batchfactor;

$program18_resource7_date22_hrsreq =
  $program18_resource7_flow * $program18_resource7_date22_batchfactor;

$program19_resource7_date22_hrsreq =
  $program19_resource7_flow * $program19_resource7_date22_batchfactor;

$program20_resource7_date22_hrsreq =
  $program20_resource7_flow * $program20_resource7_date22_batchfactor;

$program21_resource7_date22_hrsreq =
  $program21_resource7_flow * $program21_resource7_date22_batchfactor;

$program22_resource7_date22_hrsreq =
  $program22_resource7_flow * $program22_resource7_date22_batchfactor;

$program23_resource7_date22_hrsreq =
  $program23_resource7_flow * $program23_resource7_date22_batchfactor;

$program24_resource7_date22_hrsreq =
  $program24_resource7_flow * $program24_resource7_date22_batchfactor;

$program25_resource7_date22_hrsreq =
  $program25_resource7_flow * $program25_resource7_date22_batchfactor;

$program26_resource7_date22_hrsreq =
  $program26_resource7_flow * $program26_resource7_date22_batchfactor;

$program27_resource7_date22_hrsreq =
  $program27_resource7_flow * $program27_resource7_date22_batchfactor;

$program28_resource7_date22_hrsreq =
  $program28_resource7_flow * $program28_resource7_date22_batchfactor;

$program29_resource7_date22_hrsreq =
  $program29_resource7_flow * $program29_resource7_date22_batchfactor;

$program30_resource7_date22_hrsreq =
  $program30_resource7_flow * $program30_resource7_date22_batchfactor;

$program31_resource7_date22_hrsreq =
  $program31_resource7_flow * $program31_resource7_date22_batchfactor;

$program32_resource7_date22_hrsreq =
  $program32_resource7_flow * $program32_resource7_date22_batchfactor;

$program33_resource7_date22_hrsreq =
  $program33_resource7_flow * $program33_resource7_date22_batchfactor;

$program34_resource7_date22_hrsreq =
  $program34_resource7_flow * $program34_resource7_date22_batchfactor;

$program35_resource7_date22_hrsreq =
  $program35_resource7_flow * $program35_resource7_date22_batchfactor;

$program36_resource7_date22_hrsreq =
  $program36_resource7_flow * $program36_resource7_date22_batchfactor;

  $program37_resource7_date22_hrsreq =
    $program37_resource7_flow * $program37_resource7_date22_batchfactor;

$program38_resource7_date22_hrsreq =
  $program38_resource7_flow * $program38_resource7_date22_batchfactor;

$program39_resource7_date22_hrsreq =
  $program39_resource7_flow * $program39_resource7_date22_batchfactor;

$program40_resource7_date22_hrsreq =
  $program40_resource7_flow * $program40_resource7_date22_batchfactor;

$program41_resource7_date22_hrsreq =
  $program41_resource7_flow * $program41_resource7_date22_batchfactor;

$program42_resource7_date22_hrsreq =
  $program42_resource7_flow * $program42_resource7_date22_batchfactor;

$program43_resource7_date22_hrsreq =
  $program43_resource7_flow * $program43_resource7_date22_batchfactor;

$program44_resource7_date22_hrsreq =
  $program44_resource7_flow * $program44_resource7_date22_batchfactor;

$program45_resource7_date22_hrsreq =
  $program45_resource7_flow * $program45_resource7_date22_batchfactor;

$program46_resource7_date22_hrsreq =
  $program46_resource7_flow * $program46_resource7_date22_batchfactor;

$program47_resource7_date22_hrsreq =
  $program47_resource7_flow * $program47_resource7_date22_batchfactor;

$program47_resource7_date22_hrsreq =
  $program47_resource7_flow * $program47_resource7_date22_batchfactor;

$program48_resource7_date22_hrsreq =
  $program48_resource7_flow * $program48_resource7_date22_batchfactor;

$program49_resource7_date22_hrsreq =
  $program49_resource7_flow * $program49_resource7_date22_batchfactor;

$program50_resource7_date22_hrsreq =
  $program50_resource7_flow * $program50_resource7_date22_batchfactor;

//Resource 7, Date 22 Total Hrs
$resource7_date22_totalhrs =
  round((
  $program1_resource7_date22_hrsreq +
  $program2_resource7_date22_hrsreq +
  $program3_resource7_date22_hrsreq +
  $program4_resource7_date22_hrsreq +
  $program5_resource7_date22_hrsreq +
  $program6_resource7_date22_hrsreq +
  $program7_resource7_date22_hrsreq +
  $program8_resource7_date22_hrsreq +
  $program9_resource7_date22_hrsreq +
  $program10_resource7_date22_hrsreq +
  $program11_resource7_date22_hrsreq +
  $program12_resource7_date22_hrsreq +
  $program13_resource7_date22_hrsreq +
  $program14_resource7_date22_hrsreq +
  $program15_resource7_date22_hrsreq +
  $program16_resource7_date22_hrsreq +
  $program17_resource7_date22_hrsreq +
  $program18_resource7_date22_hrsreq +
  $program19_resource7_date22_hrsreq +
  $program20_resource7_date22_hrsreq +
  $program21_resource7_date22_hrsreq +
  $program22_resource7_date22_hrsreq +
  $program23_resource7_date22_hrsreq +
  $program24_resource7_date22_hrsreq +
  $program25_resource7_date22_hrsreq +
  $program26_resource7_date22_hrsreq +
  $program27_resource7_date22_hrsreq +
  $program28_resource7_date22_hrsreq +
  $program29_resource7_date22_hrsreq +
  $program30_resource7_date22_hrsreq +
  $program31_resource7_date22_hrsreq +
  $program32_resource7_date22_hrsreq +
  $program33_resource7_date22_hrsreq +
  $program34_resource7_date22_hrsreq +
  $program35_resource7_date22_hrsreq +
  $program36_resource7_date22_hrsreq +
  $program37_resource7_date22_hrsreq +
  $program38_resource7_date22_hrsreq +
  $program39_resource7_date22_hrsreq +
  $program40_resource7_date22_hrsreq +
  $program41_resource7_date22_hrsreq +
  $program42_resource7_date22_hrsreq +
  $program43_resource7_date22_hrsreq +
  $program44_resource7_date22_hrsreq +
  $program45_resource7_date22_hrsreq +
  $program46_resource7_date22_hrsreq +
  $program47_resource7_date22_hrsreq +
  $program48_resource7_date22_hrsreq +
  $program49_resource7_date22_hrsreq +
  $program50_resource7_date22_hrsreq
  ),0);

//Date 22 Utilization
$resource7_date22_utilization =
$resource7_date22_totalhrs / $resource7_hrs_total;

//Date 22 Resources Required
$resource7_date22_resourcesreq =
ceil($resource7_date22_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 23
//Resource 7, Date 23 Batch Factors
$program1_resource7_date23_batchfactor =
  $program1_date23 / $program1_resource7_batch;

$program2_resource7_date23_batchfactor =
  $program2_date23 / $program2_resource7_batch;

$program3_resource7_date23_batchfactor =
  $program3_date23 / $program3_resource7_batch;

$program4_resource7_date23_batchfactor =
  $program4_date23 / $program4_resource7_batch;

$program5_resource7_date23_batchfactor =
  $program5_date23 / $program5_resource7_batch;

$program6_resource7_date23_batchfactor =
  $program6_date23 / $program6_resource7_batch;

$program7_resource7_date23_batchfactor =
  $program7_date23 / $program7_resource7_batch;

$program8_resource7_date23_batchfactor =
  $program8_date23 / $program8_resource7_batch;

$program9_resource7_date23_batchfactor =
  $program9_date23 / $program9_resource7_batch;

$program10_resource7_date23_batchfactor =
  $program10_date23 / $program10_resource7_batch;

$program11_resource7_date23_batchfactor =
  $program11_date23 / $program10_resource7_batch;

$program12_resource7_date23_batchfactor =
  $program12_date23 / $program10_resource7_batch;

$program13_resource7_date23_batchfactor =
  $program13_date23 / $program10_resource7_batch;

$program14_resource7_date23_batchfactor =
  $program14_date23 / $program10_resource7_batch;

$program15_resource7_date23_batchfactor =
  $program15_date23 / $program10_resource7_batch;

$program16_resource7_date23_batchfactor =
  $program16_date23 / $program10_resource7_batch;

$program17_resource7_date23_batchfactor =
  $program17_date23 / $program10_resource7_batch;

$program18_resource7_date23_batchfactor =
  $program18_date23 / $program10_resource7_batch;

$program19_resource7_date23_batchfactor =
  $program19_date23 / $program10_resource7_batch;

$program20_resource7_date23_batchfactor =
  $program20_date23 / $program10_resource7_batch;

$program21_resource7_date23_batchfactor =
  $program21_date23 / $program10_resource7_batch;

$program22_resource7_date23_batchfactor =
  $program22_date23 / $program10_resource7_batch;

$program23_resource7_date23_batchfactor =
  $program23_date23 / $program10_resource7_batch;

$program24_resource7_date23_batchfactor =
  $program24_date23 / $program10_resource7_batch;

$program25_resource7_date23_batchfactor =
  $program25_date23 / $program10_resource7_batch;

$program26_resource7_date23_batchfactor =
  $program26_date23 / $program10_resource7_batch;

$program27_resource7_date23_batchfactor =
  $program27_date23 / $program10_resource7_batch;

$program28_resource7_date23_batchfactor =
  $program28_date23 / $program10_resource7_batch;

$program29_resource7_date23_batchfactor =
  $program29_date23 / $program10_resource7_batch;

$program30_resource7_date23_batchfactor =
  $program30_date23 / $program10_resource7_batch;

$program31_resource7_date23_batchfactor =
  $program31_date23 / $program10_resource7_batch;

$program32_resource7_date23_batchfactor =
  $program32_date23 / $program10_resource7_batch;

$program33_resource7_date23_batchfactor =
  $program33_date23 / $program10_resource7_batch;

$program34_resource7_date23_batchfactor =
  $program34_date23 / $program10_resource7_batch;

$program35_resource7_date23_batchfactor =
  $program35_date23 / $program10_resource7_batch;

$program36_resource7_date23_batchfactor =
  $program36_date23 / $program10_resource7_batch;

$program37_resource7_date23_batchfactor =
  $program37_date23 / $program10_resource7_batch;

$program38_resource7_date23_batchfactor =
  $program38_date23 / $program10_resource7_batch;

$program39_resource7_date23_batchfactor =
  $program39_date23 / $program10_resource7_batch;

$program40_resource7_date23_batchfactor =
  $program40_date23 / $program10_resource7_batch;

$program41_resource7_date23_batchfactor =
  $program41_date23 / $program10_resource7_batch;

$program42_resource7_date23_batchfactor =
  $program42_date23 / $program10_resource7_batch;

$program43_resource7_date23_batchfactor =
  $program43_date23 / $program10_resource7_batch;

$program44_resource7_date23_batchfactor =
  $program44_date23 / $program10_resource7_batch;

$program45_resource7_date23_batchfactor =
  $program45_date23 / $program10_resource7_batch;

$program46_resource7_date23_batchfactor =
  $program46_date23 / $program10_resource7_batch;

$program47_resource7_date23_batchfactor =
  $program47_date23 / $program10_resource7_batch;

$program48_resource7_date23_batchfactor =
  $program48_date23 / $program10_resource7_batch;

$program49_resource7_date23_batchfactor =
  $program49_date23 / $program10_resource7_batch;

$program50_resource7_date23_batchfactor =
  $program50_date23 / $program10_resource7_batch;

//Resource 7, Date 23 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date23_hrsreq =
  $program1_resource7_flow * $program1_resource7_date23_batchfactor;

$program2_resource7_date23_hrsreq =
  $program2_resource7_flow * $program2_resource7_date23_batchfactor;

$program3_resource7_date23_hrsreq =
  $program3_resource7_flow * $program3_resource7_date23_batchfactor;

$program4_resource7_date23_hrsreq =
  $program4_resource7_flow * $program4_resource7_date23_batchfactor;

$program5_resource7_date23_hrsreq =
  $program5_resource7_flow * $program5_resource7_date23_batchfactor;

$program6_resource7_date23_hrsreq =
  $program6_resource7_flow * $program6_resource7_date23_batchfactor;

$program7_resource7_date23_hrsreq =
  $program7_resource7_flow * $program7_resource7_date23_batchfactor;

$program8_resource7_date23_hrsreq =
  $program8_resource7_flow * $program8_resource7_date23_batchfactor;

$program9_resource7_date23_hrsreq =
  $program9_resource7_flow * $program9_resource7_date23_batchfactor;

$program10_resource7_date23_hrsreq =
  $program10_resource7_flow * $program10_resource7_date23_batchfactor;

$program11_resource7_date23_hrsreq =
  $program11_resource7_flow * $program11_resource7_date23_batchfactor;

$program12_resource7_date23_hrsreq =
  $program12_resource7_flow * $program12_resource7_date23_batchfactor;

$program13_resource7_date23_hrsreq =
  $program13_resource7_flow * $program13_resource7_date23_batchfactor;

$program14_resource7_date23_hrsreq =
  $program14_resource7_flow * $program14_resource7_date23_batchfactor;

$program15_resource7_date23_hrsreq =
  $program15_resource7_flow * $program15_resource7_date23_batchfactor;

$program16_resource7_date23_hrsreq =
  $program16_resource7_flow * $program16_resource7_date23_batchfactor;

$program17_resource7_date23_hrsreq =
  $program17_resource7_flow * $program17_resource7_date23_batchfactor;

$program18_resource7_date23_hrsreq =
  $program18_resource7_flow * $program18_resource7_date23_batchfactor;

$program19_resource7_date23_hrsreq =
  $program19_resource7_flow * $program19_resource7_date23_batchfactor;

$program20_resource7_date23_hrsreq =
  $program20_resource7_flow * $program20_resource7_date23_batchfactor;

$program21_resource7_date23_hrsreq =
  $program21_resource7_flow * $program21_resource7_date23_batchfactor;

$program22_resource7_date23_hrsreq =
  $program22_resource7_flow * $program22_resource7_date23_batchfactor;

$program23_resource7_date23_hrsreq =
  $program23_resource7_flow * $program23_resource7_date23_batchfactor;

$program24_resource7_date23_hrsreq =
  $program24_resource7_flow * $program24_resource7_date23_batchfactor;

$program25_resource7_date23_hrsreq =
  $program25_resource7_flow * $program25_resource7_date23_batchfactor;

$program26_resource7_date23_hrsreq =
  $program26_resource7_flow * $program26_resource7_date23_batchfactor;

$program27_resource7_date23_hrsreq =
  $program27_resource7_flow * $program27_resource7_date23_batchfactor;

$program28_resource7_date23_hrsreq =
  $program28_resource7_flow * $program28_resource7_date23_batchfactor;

$program29_resource7_date23_hrsreq =
  $program29_resource7_flow * $program29_resource7_date23_batchfactor;

$program30_resource7_date23_hrsreq =
  $program30_resource7_flow * $program30_resource7_date23_batchfactor;

$program31_resource7_date23_hrsreq =
  $program31_resource7_flow * $program31_resource7_date23_batchfactor;

$program32_resource7_date23_hrsreq =
  $program32_resource7_flow * $program32_resource7_date23_batchfactor;

$program33_resource7_date23_hrsreq =
  $program33_resource7_flow * $program33_resource7_date23_batchfactor;

$program34_resource7_date23_hrsreq =
  $program34_resource7_flow * $program34_resource7_date23_batchfactor;

$program35_resource7_date23_hrsreq =
  $program35_resource7_flow * $program35_resource7_date23_batchfactor;

$program36_resource7_date23_hrsreq =
  $program36_resource7_flow * $program36_resource7_date23_batchfactor;

  $program37_resource7_date23_hrsreq =
    $program37_resource7_flow * $program37_resource7_date23_batchfactor;

$program38_resource7_date23_hrsreq =
  $program38_resource7_flow * $program38_resource7_date23_batchfactor;

$program39_resource7_date23_hrsreq =
  $program39_resource7_flow * $program39_resource7_date23_batchfactor;

$program40_resource7_date23_hrsreq =
  $program40_resource7_flow * $program40_resource7_date23_batchfactor;

$program41_resource7_date23_hrsreq =
  $program41_resource7_flow * $program41_resource7_date23_batchfactor;

$program42_resource7_date23_hrsreq =
  $program42_resource7_flow * $program42_resource7_date23_batchfactor;

$program43_resource7_date23_hrsreq =
  $program43_resource7_flow * $program43_resource7_date23_batchfactor;

$program44_resource7_date23_hrsreq =
  $program44_resource7_flow * $program44_resource7_date23_batchfactor;

$program45_resource7_date23_hrsreq =
  $program45_resource7_flow * $program45_resource7_date23_batchfactor;

$program46_resource7_date23_hrsreq =
  $program46_resource7_flow * $program46_resource7_date23_batchfactor;

$program47_resource7_date23_hrsreq =
  $program47_resource7_flow * $program47_resource7_date23_batchfactor;

$program47_resource7_date23_hrsreq =
  $program47_resource7_flow * $program47_resource7_date23_batchfactor;

$program48_resource7_date23_hrsreq =
  $program48_resource7_flow * $program48_resource7_date23_batchfactor;

$program49_resource7_date23_hrsreq =
  $program49_resource7_flow * $program49_resource7_date23_batchfactor;

$program50_resource7_date23_hrsreq =
  $program50_resource7_flow * $program50_resource7_date23_batchfactor;

//Resource 7, Date 23 Total Hrs
$resource7_date23_totalhrs =
  round((
  $program1_resource7_date23_hrsreq +
  $program2_resource7_date23_hrsreq +
  $program3_resource7_date23_hrsreq +
  $program4_resource7_date23_hrsreq +
  $program5_resource7_date23_hrsreq +
  $program6_resource7_date23_hrsreq +
  $program7_resource7_date23_hrsreq +
  $program8_resource7_date23_hrsreq +
  $program9_resource7_date23_hrsreq +
  $program10_resource7_date23_hrsreq +
  $program11_resource7_date23_hrsreq +
  $program12_resource7_date23_hrsreq +
  $program13_resource7_date23_hrsreq +
  $program14_resource7_date23_hrsreq +
  $program15_resource7_date23_hrsreq +
  $program16_resource7_date23_hrsreq +
  $program17_resource7_date23_hrsreq +
  $program18_resource7_date23_hrsreq +
  $program19_resource7_date23_hrsreq +
  $program20_resource7_date23_hrsreq +
  $program21_resource7_date23_hrsreq +
  $program22_resource7_date23_hrsreq +
  $program23_resource7_date23_hrsreq +
  $program24_resource7_date23_hrsreq +
  $program25_resource7_date23_hrsreq +
  $program26_resource7_date23_hrsreq +
  $program27_resource7_date23_hrsreq +
  $program28_resource7_date23_hrsreq +
  $program29_resource7_date23_hrsreq +
  $program30_resource7_date23_hrsreq +
  $program31_resource7_date23_hrsreq +
  $program32_resource7_date23_hrsreq +
  $program33_resource7_date23_hrsreq +
  $program34_resource7_date23_hrsreq +
  $program35_resource7_date23_hrsreq +
  $program36_resource7_date23_hrsreq +
  $program37_resource7_date23_hrsreq +
  $program38_resource7_date23_hrsreq +
  $program39_resource7_date23_hrsreq +
  $program40_resource7_date23_hrsreq +
  $program41_resource7_date23_hrsreq +
  $program42_resource7_date23_hrsreq +
  $program43_resource7_date23_hrsreq +
  $program44_resource7_date23_hrsreq +
  $program45_resource7_date23_hrsreq +
  $program46_resource7_date23_hrsreq +
  $program47_resource7_date23_hrsreq +
  $program48_resource7_date23_hrsreq +
  $program49_resource7_date23_hrsreq +
  $program50_resource7_date23_hrsreq
  ),0);

//Date 23 Utilization
$resource7_date23_utilization =
$resource7_date23_totalhrs / $resource7_hrs_total;

//Date 23 Resources Required
$resource7_date23_resourcesreq =
ceil($resource7_date23_totalhrs / $resource7_hrs_available);

//-----------------------------------------------------------Resource 7, Date 24
//Resource 7, Date 24 Batch Factors
$program1_resource7_date24_batchfactor =
  $program1_date24 / $program1_resource7_batch;

$program2_resource7_date24_batchfactor =
  $program2_date24 / $program2_resource7_batch;

$program3_resource7_date24_batchfactor =
  $program3_date24 / $program3_resource7_batch;

$program4_resource7_date24_batchfactor =
  $program4_date24 / $program4_resource7_batch;

$program5_resource7_date24_batchfactor =
  $program5_date24 / $program5_resource7_batch;

$program6_resource7_date24_batchfactor =
  $program6_date24 / $program6_resource7_batch;

$program7_resource7_date24_batchfactor =
  $program7_date24 / $program7_resource7_batch;

$program8_resource7_date24_batchfactor =
  $program8_date24 / $program8_resource7_batch;

$program9_resource7_date24_batchfactor =
  $program9_date24 / $program9_resource7_batch;

$program10_resource7_date24_batchfactor =
  $program10_date24 / $program10_resource7_batch;

$program11_resource7_date24_batchfactor =
  $program11_date24 / $program10_resource7_batch;

$program12_resource7_date24_batchfactor =
  $program12_date24 / $program10_resource7_batch;

$program13_resource7_date24_batchfactor =
  $program13_date24 / $program10_resource7_batch;

$program14_resource7_date24_batchfactor =
  $program14_date24 / $program10_resource7_batch;

$program15_resource7_date24_batchfactor =
  $program15_date24 / $program10_resource7_batch;

$program16_resource7_date24_batchfactor =
  $program16_date24 / $program10_resource7_batch;

$program17_resource7_date24_batchfactor =
  $program17_date24 / $program10_resource7_batch;

$program18_resource7_date24_batchfactor =
  $program18_date24 / $program10_resource7_batch;

$program19_resource7_date24_batchfactor =
  $program19_date24 / $program10_resource7_batch;

$program20_resource7_date24_batchfactor =
  $program20_date24 / $program10_resource7_batch;

$program21_resource7_date24_batchfactor =
  $program21_date24 / $program10_resource7_batch;

$program22_resource7_date24_batchfactor =
  $program22_date24 / $program10_resource7_batch;

$program23_resource7_date24_batchfactor =
  $program23_date24 / $program10_resource7_batch;

$program24_resource7_date24_batchfactor =
  $program24_date24 / $program10_resource7_batch;

$program25_resource7_date24_batchfactor =
  $program25_date24 / $program10_resource7_batch;

$program26_resource7_date24_batchfactor =
  $program26_date24 / $program10_resource7_batch;

$program27_resource7_date24_batchfactor =
  $program27_date24 / $program10_resource7_batch;

$program28_resource7_date24_batchfactor =
  $program28_date24 / $program10_resource7_batch;

$program29_resource7_date24_batchfactor =
  $program29_date24 / $program10_resource7_batch;

$program30_resource7_date24_batchfactor =
  $program30_date24 / $program10_resource7_batch;

$program31_resource7_date24_batchfactor =
  $program31_date24 / $program10_resource7_batch;

$program32_resource7_date24_batchfactor =
  $program32_date24 / $program10_resource7_batch;

$program33_resource7_date24_batchfactor =
  $program33_date24 / $program10_resource7_batch;

$program34_resource7_date24_batchfactor =
  $program34_date24 / $program10_resource7_batch;

$program35_resource7_date24_batchfactor =
  $program35_date24 / $program10_resource7_batch;

$program36_resource7_date24_batchfactor =
  $program36_date24 / $program10_resource7_batch;

$program37_resource7_date24_batchfactor =
  $program37_date24 / $program10_resource7_batch;

$program38_resource7_date24_batchfactor =
  $program38_date24 / $program10_resource7_batch;

$program39_resource7_date24_batchfactor =
  $program39_date24 / $program10_resource7_batch;

$program40_resource7_date24_batchfactor =
  $program40_date24 / $program10_resource7_batch;

$program41_resource7_date24_batchfactor =
  $program41_date24 / $program10_resource7_batch;

$program42_resource7_date24_batchfactor =
  $program42_date24 / $program10_resource7_batch;

$program43_resource7_date24_batchfactor =
  $program43_date24 / $program10_resource7_batch;

$program44_resource7_date24_batchfactor =
  $program44_date24 / $program10_resource7_batch;

$program45_resource7_date24_batchfactor =
  $program45_date24 / $program10_resource7_batch;

$program46_resource7_date24_batchfactor =
  $program46_date24 / $program10_resource7_batch;

$program47_resource7_date24_batchfactor =
  $program47_date24 / $program10_resource7_batch;

$program48_resource7_date24_batchfactor =
  $program48_date24 / $program10_resource7_batch;

$program49_resource7_date24_batchfactor =
  $program49_date24 / $program10_resource7_batch;

$program50_resource7_date24_batchfactor =
  $program50_date24 / $program10_resource7_batch;

//Resource 7, Date 24 Hrs Required, Utilization, & Resources Required
//Progam Hrs Required
$program1_resource7_date24_hrsreq =
  $program1_resource7_flow * $program1_resource7_date24_batchfactor;

$program2_resource7_date24_hrsreq =
  $program2_resource7_flow * $program2_resource7_date24_batchfactor;

$program3_resource7_date24_hrsreq =
  $program3_resource7_flow * $program3_resource7_date24_batchfactor;

$program4_resource7_date24_hrsreq =
  $program4_resource7_flow * $program4_resource7_date24_batchfactor;

$program5_resource7_date24_hrsreq =
  $program5_resource7_flow * $program5_resource7_date24_batchfactor;

$program6_resource7_date24_hrsreq =
  $program6_resource7_flow * $program6_resource7_date24_batchfactor;

$program7_resource7_date24_hrsreq =
  $program7_resource7_flow * $program7_resource7_date24_batchfactor;

$program8_resource7_date24_hrsreq =
  $program8_resource7_flow * $program8_resource7_date24_batchfactor;

$program9_resource7_date24_hrsreq =
  $program9_resource7_flow * $program9_resource7_date24_batchfactor;

$program10_resource7_date24_hrsreq =
  $program10_resource7_flow * $program10_resource7_date24_batchfactor;

$program11_resource7_date24_hrsreq =
  $program11_resource7_flow * $program11_resource7_date24_batchfactor;

$program12_resource7_date24_hrsreq =
  $program12_resource7_flow * $program12_resource7_date24_batchfactor;

$program13_resource7_date24_hrsreq =
  $program13_resource7_flow * $program13_resource7_date24_batchfactor;

$program14_resource7_date24_hrsreq =
  $program14_resource7_flow * $program14_resource7_date24_batchfactor;

$program15_resource7_date24_hrsreq =
  $program15_resource7_flow * $program15_resource7_date24_batchfactor;

$program16_resource7_date24_hrsreq =
  $program16_resource7_flow * $program16_resource7_date24_batchfactor;

$program17_resource7_date24_hrsreq =
  $program17_resource7_flow * $program17_resource7_date24_batchfactor;

$program18_resource7_date24_hrsreq =
  $program18_resource7_flow * $program18_resource7_date24_batchfactor;

$program19_resource7_date24_hrsreq =
  $program19_resource7_flow * $program19_resource7_date24_batchfactor;

$program20_resource7_date24_hrsreq =
  $program20_resource7_flow * $program20_resource7_date24_batchfactor;

$program21_resource7_date24_hrsreq =
  $program21_resource7_flow * $program21_resource7_date24_batchfactor;

$program22_resource7_date24_hrsreq =
  $program22_resource7_flow * $program22_resource7_date24_batchfactor;

$program23_resource7_date24_hrsreq =
  $program23_resource7_flow * $program23_resource7_date24_batchfactor;

$program24_resource7_date24_hrsreq =
  $program24_resource7_flow * $program24_resource7_date24_batchfactor;

$program25_resource7_date24_hrsreq =
  $program25_resource7_flow * $program25_resource7_date24_batchfactor;

$program26_resource7_date24_hrsreq =
  $program26_resource7_flow * $program26_resource7_date24_batchfactor;

$program27_resource7_date24_hrsreq =
  $program27_resource7_flow * $program27_resource7_date24_batchfactor;

$program28_resource7_date24_hrsreq =
  $program28_resource7_flow * $program28_resource7_date24_batchfactor;

$program29_resource7_date24_hrsreq =
  $program29_resource7_flow * $program29_resource7_date24_batchfactor;

$program30_resource7_date24_hrsreq =
  $program30_resource7_flow * $program30_resource7_date24_batchfactor;

$program31_resource7_date24_hrsreq =
  $program31_resource7_flow * $program31_resource7_date24_batchfactor;

$program32_resource7_date24_hrsreq =
  $program32_resource7_flow * $program32_resource7_date24_batchfactor;

$program33_resource7_date24_hrsreq =
  $program33_resource7_flow * $program33_resource7_date24_batchfactor;

$program34_resource7_date24_hrsreq =
  $program34_resource7_flow * $program34_resource7_date24_batchfactor;

$program35_resource7_date24_hrsreq =
  $program35_resource7_flow * $program35_resource7_date24_batchfactor;

$program36_resource7_date24_hrsreq =
  $program36_resource7_flow * $program36_resource7_date24_batchfactor;

  $program37_resource7_date24_hrsreq =
    $program37_resource7_flow * $program37_resource7_date24_batchfactor;

$program38_resource7_date24_hrsreq =
  $program38_resource7_flow * $program38_resource7_date24_batchfactor;

$program39_resource7_date24_hrsreq =
  $program39_resource7_flow * $program39_resource7_date24_batchfactor;

$program40_resource7_date24_hrsreq =
  $program40_resource7_flow * $program40_resource7_date24_batchfactor;

$program41_resource7_date24_hrsreq =
  $program41_resource7_flow * $program41_resource7_date24_batchfactor;

$program42_resource7_date24_hrsreq =
  $program42_resource7_flow * $program42_resource7_date24_batchfactor;

$program43_resource7_date24_hrsreq =
  $program43_resource7_flow * $program43_resource7_date24_batchfactor;

$program44_resource7_date24_hrsreq =
  $program44_resource7_flow * $program44_resource7_date24_batchfactor;

$program45_resource7_date24_hrsreq =
  $program45_resource7_flow * $program45_resource7_date24_batchfactor;

$program46_resource7_date24_hrsreq =
  $program46_resource7_flow * $program46_resource7_date24_batchfactor;

$program47_resource7_date24_hrsreq =
  $program47_resource7_flow * $program47_resource7_date24_batchfactor;

$program47_resource7_date24_hrsreq =
  $program47_resource7_flow * $program47_resource7_date24_batchfactor;

$program48_resource7_date24_hrsreq =
  $program48_resource7_flow * $program48_resource7_date24_batchfactor;

$program49_resource7_date24_hrsreq =
  $program49_resource7_flow * $program49_resource7_date24_batchfactor;

$program50_resource7_date24_hrsreq =
  $program50_resource7_flow * $program50_resource7_date24_batchfactor;

//Resource 7, Date 24 Total Hrs
$resource7_date24_totalhrs =
  round((
  $program1_resource7_date24_hrsreq +
  $program2_resource7_date24_hrsreq +
  $program3_resource7_date24_hrsreq +
  $program4_resource7_date24_hrsreq +
  $program5_resource7_date24_hrsreq +
  $program6_resource7_date24_hrsreq +
  $program7_resource7_date24_hrsreq +
  $program8_resource7_date24_hrsreq +
  $program9_resource7_date24_hrsreq +
  $program10_resource7_date24_hrsreq +
  $program11_resource7_date24_hrsreq +
  $program12_resource7_date24_hrsreq +
  $program13_resource7_date24_hrsreq +
  $program14_resource7_date24_hrsreq +
  $program15_resource7_date24_hrsreq +
  $program16_resource7_date24_hrsreq +
  $program17_resource7_date24_hrsreq +
  $program18_resource7_date24_hrsreq +
  $program19_resource7_date24_hrsreq +
  $program20_resource7_date24_hrsreq +
  $program21_resource7_date24_hrsreq +
  $program22_resource7_date24_hrsreq +
  $program23_resource7_date24_hrsreq +
  $program24_resource7_date24_hrsreq +
  $program25_resource7_date24_hrsreq +
  $program26_resource7_date24_hrsreq +
  $program27_resource7_date24_hrsreq +
  $program28_resource7_date24_hrsreq +
  $program29_resource7_date24_hrsreq +
  $program30_resource7_date24_hrsreq +
  $program31_resource7_date24_hrsreq +
  $program32_resource7_date24_hrsreq +
  $program33_resource7_date24_hrsreq +
  $program34_resource7_date24_hrsreq +
  $program35_resource7_date24_hrsreq +
  $program36_resource7_date24_hrsreq +
  $program37_resource7_date24_hrsreq +
  $program38_resource7_date24_hrsreq +
  $program39_resource7_date24_hrsreq +
  $program40_resource7_date24_hrsreq +
  $program41_resource7_date24_hrsreq +
  $program42_resource7_date24_hrsreq +
  $program43_resource7_date24_hrsreq +
  $program44_resource7_date24_hrsreq +
  $program45_resource7_date24_hrsreq +
  $program46_resource7_date24_hrsreq +
  $program47_resource7_date24_hrsreq +
  $program48_resource7_date24_hrsreq +
  $program49_resource7_date24_hrsreq +
  $program50_resource7_date24_hrsreq
  ),0);

//Date 24 Utilization
$resource7_date24_utilization =
$resource7_date24_totalhrs / $resource7_hrs_total;

//Date 24 Resources Required
$resource7_date24_resourcesreq =
ceil($resource7_date24_totalhrs / $resource7_hrs_available);

//---------------------------------------------------------------------------------------------End Unique for other Resources
?>
</head>

<!-- - - - - - - - - - - - - - - - - - VIEW - - - - - - - - - - - - - - - - - - - - - -->

<body>

<div class="navbar">
  <a href="prod_volume.php"> Production Volumes </a>
  <a href="process_assumptions.php"> Process Assumptions </a>
  <div class="dropdown">
    <button class="dropbtn" style="background-color: gray"> Resources </button>
    <div class="dropdown-content" style="z-index:9999;">
      <a href="resource1.php"> <?php echo "$resource1" ?> </a>
      <a href="resource2.php"> <?php echo "$resource2" ?> </a>
      <a href="resource3.php"> <?php echo "$resource3" ?> </a>
      <a href="resource4.php"> <?php echo "$resource4" ?> </a>
      <a href="resource5.php"> <?php echo "$resource5" ?> </a>
      <a href="resource6.php"> <?php echo "$resource6" ?> </a>
      <a href="#"> <?php echo "$resource7" ?> </a>
      <a href="resource8.php"> <?php echo "$resource8" ?> </a>
      <a href="resource9.php"> <?php echo "$resource9" ?> </a>
      <a href="resource10.php"> <?php echo "$resource10" ?> </a>
      <a href="resource11.php"> <?php echo "$resource11" ?> </a>
      <a href="resource12.php"> <?php echo "$resource12" ?> </a>
      <a href="resource13.php"> <?php echo "$resource13" ?> </a>
      <a href="resource14.php"> <?php echo "$resource14" ?> </a>
      <a href="resource15.php"> <?php echo "$resource15" ?> </a>
      <a href="resource16.php"> <?php echo "$resource16" ?> </a>
      <a href="resource17.php"> <?php echo "$resource17" ?> </a>
      <a href="resource18.php"> <?php echo "$resource18" ?> </a>
      <a href="resource19.php"> <?php echo "$resource19" ?> </a>
      <a href="resource20.php"> <?php echo "$resource20" ?> </a>
    </div>
  </div>
  <a href="dashboard.php"> Dashboard </a>
</div>

<!-- Begin Unique - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4> <?php echo "$resource7" ?>&nbspUtilization Forecast </h4>

<div width="100%">
<canvas id="myChart" height="350"></canvas>
</div>
<form method="get" id="startdate">
<table id="tool_table">
  <tr><th>Start Date</th></tr>
  <tr>
    <td><input type="text" autocomplete="off" name="startdate"
          value="<?php print htmlentities("Mon-YY") ?>" onClick="this.select();"
          style="text-align:left;">
</table>
<input type="hidden" value="Update" class="submit">
</form>

<div style="overflow-x: auto;">
<table id="tool_table" width="100%" style="white-space: nowrap;">
  <tr>
    <th width="10%"> <?php echo "$resource7" ?></th>
    <th> <?php echo "$date1" ?></th>
    <th> <?php echo "$date2" ?></th>
    <th> <?php echo "$date3" ?></th>
    <th> <?php echo "$date4" ?></th>
    <th> <?php echo "$date5" ?></th>
    <th> <?php echo "$date6" ?></th>
    <th> <?php echo "$date7" ?></th>
    <th> <?php echo "$date8" ?></th>
    <th> <?php echo "$date9" ?></th>
    <th> <?php echo "$date10" ?></th>
    <th> <?php echo "$date11" ?></th>
    <th> <?php echo "$date12" ?></th>
    <th> <?php echo "$date13" ?></th>
    <th> <?php echo "$date14" ?></th>
    <th> <?php echo "$date15" ?></th>
    <th> <?php echo "$date16" ?></th>
    <th> <?php echo "$date17" ?></th>
    <th> <?php echo "$date18" ?></th>
    <th> <?php echo "$date19" ?></th>
    <th> <?php echo "$date20" ?></th>
    <th> <?php echo "$date21" ?></th>
    <th> <?php echo "$date22" ?></th>
    <th> <?php echo "$date23" ?></th>
    <th> <?php echo "$date24" ?></th>
  </tr>
  <tr>
    <td><b>Utilization</b></td>
    <td><?php echo round($resource7_date1_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date2_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date3_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date4_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date5_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date6_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date7_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date8_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date9_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date10_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date11_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date12_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date13_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date14_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date15_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date16_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date17_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date18_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date19_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date20_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date21_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date22_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date23_utilization*100),'%'; ?></td>
    <td><?php echo round($resource7_date24_utilization*100),'%'; ?></td>
  <tr>
    <td><b>Hrs Required</b></td>
    <td><?php echo "$resource7_date1_totalhrs"; ?></td>
    <td><?php echo "$resource7_date2_totalhrs"; ?></td>
    <td><?php echo "$resource7_date3_totalhrs"; ?></td>
    <td><?php echo "$resource7_date4_totalhrs"; ?></td>
    <td><?php echo "$resource7_date5_totalhrs"; ?></td>
    <td><?php echo "$resource7_date6_totalhrs"; ?></td>
    <td><?php echo "$resource7_date7_totalhrs"; ?></td>
    <td><?php echo "$resource7_date8_totalhrs"; ?></td>
    <td><?php echo "$resource7_date9_totalhrs"; ?></td>
    <td><?php echo "$resource7_date10_totalhrs"; ?></td>
    <td><?php echo "$resource7_date11_totalhrs"; ?></td>
    <td><?php echo "$resource7_date12_totalhrs"; ?></td>
    <td><?php echo "$resource7_date13_totalhrs"; ?></td>
    <td><?php echo "$resource7_date14_totalhrs"; ?></td>
    <td><?php echo "$resource7_date15_totalhrs"; ?></td>
    <td><?php echo "$resource7_date16_totalhrs"; ?></td>
    <td><?php echo "$resource7_date17_totalhrs"; ?></td>
    <td><?php echo "$resource7_date18_totalhrs"; ?></td>
    <td><?php echo "$resource7_date19_totalhrs"; ?></td>
    <td><?php echo "$resource7_date20_totalhrs"; ?></td>
    <td><?php echo "$resource7_date21_totalhrs"; ?></td>
    <td><?php echo "$resource7_date22_totalhrs"; ?></td>
    <td><?php echo "$resource7_date23_totalhrs"; ?></td>
    <td><?php echo "$resource7_date24_totalhrs"; ?></td>
  </tr>
  <tr>
    <td><b>Resources Required</b></td>
    <td><?php echo "$resource7_date1_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date2_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date3_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date4_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date5_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date6_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date7_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date8_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date9_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date10_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date11_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date12_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date13_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date14_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date15_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date16_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date17_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date18_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date19_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date20_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date21_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date22_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date23_resourcesreq"; ?></td>
    <td><?php echo "$resource7_date24_resourcesreq"; ?></td>
  </tr>
</table>
</div>

<h4> <?php echo "$resource7" ?>&nbspAvailability Assumptions </h4>
<form method="post" id="resource7">

<table id="tool_table">
<tr>
  <th colspan="2"><?php echo "$resource7" ?></th>
</tr>
<tr>
  <td> Shifts/Day: </td>
  <td><input type="number" name="resource7_shifts" min="1" max="3"
      value="<?php print htmlentities($resource7_shifts) ?>" onClick="this.select();"></td>
</tr>
<tr>
  <td>Hrs/Shift:</td>
  <td><input type="number" name="resource7_hrs_shift" min="1" max="24"
        value="<?php print htmlentities($resource7_hrs_shift) ?>" onClick="this.select();"></td>
</tr>
<tr>
  <td>Hrs/Day:</td>
  <td><?php echo "$resource7_hrs_day" ?></td>
</tr>
<tr>
  <td>Days/Week:</td>
  <td><input type="number" name="resource7_days" min="1" max="7"
        value="<?php print htmlentities($resource7_days) ?>" onClick="this.select();"></td>
</tr>
<tr>
  <td>Plannned DONSA/Year:</td>
  <td><input type="number" name="resource7_donsa" min="1" max="100"
        value="<?php print htmlentities($resource7_donsa) ?>" onClick="this.select();"></td>
</tr>
<tr>
  <tr>
  <td>Hrs Available:</td>
  <td><?php echo "$resource7_hrs_available" ?></td>
</tr>
<tr>
  <td>Weeks/Mo:</td>
  <td><?php echo "$weeks" ?></td>
</tr>
<tr>
  <td>Resources Available:</td>
  <td><input type="number" name="resource7_qty" min="1" max="99"
        value="<?php print htmlentities($resource7_qty) ?>" onClick="this.select();"></td>
</tr>
<tr>
  <td>Overall Equipment Effectiveness (OEE) %:</td>
  <td><input type="number" name="resource7_oee" min="1" max="100"
        value="<?php print htmlentities($resource7_oee_input) ?>" onClick="this.select();"></td>
</tr>
  <td><b>Total Resource Hrs Available:</b></td>
  <td><b><?php echo "$resource7_hrs_total" ?></b></td>
</tr>
</table>
<br>
<input type="submit" value="Update" class="submit">
<br>

<!-- End Unique - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4>Production Volumes</h4>

<div style="overflow-x auto; overflow-y: auto;">
<table id="tool_table" width="100%" style="white-space: nowrap;">
  <tr>
    <th> Product </th>
    <th> <?php echo "$date1" ?></th>
    <th> <?php echo "$date2" ?></th>
    <th> <?php echo "$date3" ?></th>
    <th> <?php echo "$date4" ?></th>
    <th> <?php echo "$date5" ?></th>
    <th> <?php echo "$date6" ?></th>
    <th> <?php echo "$date7" ?></th>
    <th> <?php echo "$date8" ?></th>
    <th> <?php echo "$date9" ?></th>
    <th> <?php echo "$date10" ?></th>
    <th> <?php echo "$date11" ?></th>
    <th> <?php echo "$date12" ?></th>
    <th> <?php echo "$date13" ?></th>
    <th> <?php echo "$date14" ?></th>
    <th> <?php echo "$date15" ?></th>
    <th> <?php echo "$date16" ?></th>
    <th> <?php echo "$date17" ?></th>
    <th> <?php echo "$date18" ?></th>
    <th> <?php echo "$date19" ?></th>
    <th> <?php echo "$date20" ?></th>
    <th> <?php echo "$date21" ?></th>
    <th> <?php echo "$date22" ?></th>
    <th> <?php echo "$date23" ?></th>
    <th> <?php echo "$date24" ?></th>
  </tr>
  <tr>
    <td><b><?php echo "$program1" ?></b></td>
    <td><?php echo "$program1_date1" ?></td>
    <td><?php echo "$program1_date2" ?></td>
    <td><?php echo "$program1_date3" ?></td>
    <td><?php echo "$program1_date4" ?></td>
    <td><?php echo "$program1_date5" ?></td>
    <td><?php echo "$program1_date6" ?></td>
    <td><?php echo "$program1_date7" ?></td>
    <td><?php echo "$program1_date8" ?></td>
    <td><?php echo "$program1_date9" ?></td>
    <td><?php echo "$program1_date10" ?></td>
    <td><?php echo "$program1_date11" ?></td>
    <td><?php echo "$program1_date12" ?></td>
    <td><?php echo "$program1_date13" ?></td>
    <td><?php echo "$program1_date14" ?></td>
    <td><?php echo "$program1_date15" ?></td>
    <td><?php echo "$program1_date16" ?></td>
    <td><?php echo "$program1_date17" ?></td>
    <td><?php echo "$program1_date18" ?></td>
    <td><?php echo "$program1_date19" ?></td>
    <td><?php echo "$program1_date20" ?></td>
    <td><?php echo "$program1_date21" ?></td>
    <td><?php echo "$program1_date22" ?></td>
    <td><?php echo "$program1_date23" ?></td>
    <td><?php echo "$program1_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program2" ?></b></td>
    <td><?php echo "$program2_date1" ?></td>
    <td><?php echo "$program2_date2" ?></td>
    <td><?php echo "$program2_date3" ?></td>
    <td><?php echo "$program2_date4" ?></td>
    <td><?php echo "$program2_date5" ?></td>
    <td><?php echo "$program2_date6" ?></td>
    <td><?php echo "$program2_date7" ?></td>
    <td><?php echo "$program2_date8" ?></td>
    <td><?php echo "$program2_date9" ?></td>
    <td><?php echo "$program2_date10" ?></td>
    <td><?php echo "$program2_date11" ?></td>
    <td><?php echo "$program2_date12" ?></td>
    <td><?php echo "$program2_date13" ?></td>
    <td><?php echo "$program2_date14" ?></td>
    <td><?php echo "$program2_date15" ?></td>
    <td><?php echo "$program2_date16" ?></td>
    <td><?php echo "$program2_date17" ?></td>
    <td><?php echo "$program2_date18" ?></td>
    <td><?php echo "$program2_date19" ?></td>
    <td><?php echo "$program2_date20" ?></td>
    <td><?php echo "$program2_date21" ?></td>
    <td><?php echo "$program2_date22" ?></td>
    <td><?php echo "$program2_date23" ?></td>
    <td><?php echo "$program2_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program3" ?></b></td>
    <td><?php echo "$program3_date1" ?></td>
    <td><?php echo "$program3_date2" ?></td>
    <td><?php echo "$program3_date3" ?></td>
    <td><?php echo "$program3_date4" ?></td>
    <td><?php echo "$program3_date5" ?></td>
    <td><?php echo "$program3_date6" ?></td>
    <td><?php echo "$program3_date7" ?></td>
    <td><?php echo "$program3_date8" ?></td>
    <td><?php echo "$program3_date9" ?></td>
    <td><?php echo "$program3_date10" ?></td>
    <td><?php echo "$program3_date11" ?></td>
    <td><?php echo "$program3_date12" ?></td>
    <td><?php echo "$program3_date13" ?></td>
    <td><?php echo "$program3_date14" ?></td>
    <td><?php echo "$program3_date15" ?></td>
    <td><?php echo "$program3_date16" ?></td>
    <td><?php echo "$program3_date17" ?></td>
    <td><?php echo "$program3_date18" ?></td>
    <td><?php echo "$program3_date19" ?></td>
    <td><?php echo "$program3_date20" ?></td>
    <td><?php echo "$program3_date21" ?></td>
    <td><?php echo "$program3_date22" ?></td>
    <td><?php echo "$program3_date23" ?></td>
    <td><?php echo "$program3_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program4" ?></b></td>
    <td><?php echo "$program4_date1" ?></td>
    <td><?php echo "$program4_date2" ?></td>
    <td><?php echo "$program4_date3" ?></td>
    <td><?php echo "$program4_date4" ?></td>
    <td><?php echo "$program4_date5" ?></td>
    <td><?php echo "$program4_date6" ?></td>
    <td><?php echo "$program4_date7" ?></td>
    <td><?php echo "$program4_date8" ?></td>
    <td><?php echo "$program4_date9" ?></td>
    <td><?php echo "$program4_date10" ?></td>
    <td><?php echo "$program4_date11" ?></td>
    <td><?php echo "$program4_date12" ?></td>
    <td><?php echo "$program4_date13" ?></td>
    <td><?php echo "$program4_date14" ?></td>
    <td><?php echo "$program4_date15" ?></td>
    <td><?php echo "$program4_date16" ?></td>
    <td><?php echo "$program4_date17" ?></td>
    <td><?php echo "$program4_date18" ?></td>
    <td><?php echo "$program4_date19" ?></td>
    <td><?php echo "$program4_date20" ?></td>
    <td><?php echo "$program4_date21" ?></td>
    <td><?php echo "$program4_date22" ?></td>
    <td><?php echo "$program4_date23" ?></td>
    <td><?php echo "$program4_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program5" ?></b></td>
    <td><?php echo "$program5_date1" ?></td>
    <td><?php echo "$program5_date2" ?></td>
    <td><?php echo "$program5_date3" ?></td>
    <td><?php echo "$program5_date4" ?></td>
    <td><?php echo "$program5_date5" ?></td>
    <td><?php echo "$program5_date6" ?></td>
    <td><?php echo "$program5_date7" ?></td>
    <td><?php echo "$program5_date8" ?></td>
    <td><?php echo "$program5_date9" ?></td>
    <td><?php echo "$program5_date10" ?></td>
    <td><?php echo "$program5_date11" ?></td>
    <td><?php echo "$program5_date12" ?></td>
    <td><?php echo "$program5_date13" ?></td>
    <td><?php echo "$program5_date14" ?></td>
    <td><?php echo "$program5_date15" ?></td>
    <td><?php echo "$program5_date16" ?></td>
    <td><?php echo "$program5_date17" ?></td>
    <td><?php echo "$program5_date18" ?></td>
    <td><?php echo "$program5_date19" ?></td>
    <td><?php echo "$program5_date20" ?></td>
    <td><?php echo "$program5_date21" ?></td>
    <td><?php echo "$program5_date22" ?></td>
    <td><?php echo "$program5_date23" ?></td>
    <td><?php echo "$program5_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program6" ?></b></td>
    <td><?php echo "$program6_date1" ?></td>
    <td><?php echo "$program6_date2" ?></td>
    <td><?php echo "$program6_date3" ?></td>
    <td><?php echo "$program6_date4" ?></td>
    <td><?php echo "$program6_date5" ?></td>
    <td><?php echo "$program6_date6" ?></td>
    <td><?php echo "$program6_date7" ?></td>
    <td><?php echo "$program6_date8" ?></td>
    <td><?php echo "$program6_date9" ?></td>
    <td><?php echo "$program6_date10" ?></td>
    <td><?php echo "$program6_date11" ?></td>
    <td><?php echo "$program6_date12" ?></td>
    <td><?php echo "$program6_date13" ?></td>
    <td><?php echo "$program6_date14" ?></td>
    <td><?php echo "$program6_date15" ?></td>
    <td><?php echo "$program6_date16" ?></td>
    <td><?php echo "$program6_date17" ?></td>
    <td><?php echo "$program6_date18" ?></td>
    <td><?php echo "$program6_date19" ?></td>
    <td><?php echo "$program6_date20" ?></td>
    <td><?php echo "$program6_date21" ?></td>
    <td><?php echo "$program6_date22" ?></td>
    <td><?php echo "$program6_date23" ?></td>
    <td><?php echo "$program6_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program7" ?></b></td>
    <td><?php echo "$program7_date1" ?></td>
    <td><?php echo "$program7_date2" ?></td>
    <td><?php echo "$program7_date3" ?></td>
    <td><?php echo "$program7_date4" ?></td>
    <td><?php echo "$program7_date5" ?></td>
    <td><?php echo "$program7_date6" ?></td>
    <td><?php echo "$program7_date7" ?></td>
    <td><?php echo "$program7_date8" ?></td>
    <td><?php echo "$program7_date9" ?></td>
    <td><?php echo "$program7_date10" ?></td>
    <td><?php echo "$program7_date11" ?></td>
    <td><?php echo "$program7_date12" ?></td>
    <td><?php echo "$program7_date13" ?></td>
    <td><?php echo "$program7_date14" ?></td>
    <td><?php echo "$program7_date15" ?></td>
    <td><?php echo "$program7_date16" ?></td>
    <td><?php echo "$program7_date17" ?></td>
    <td><?php echo "$program7_date18" ?></td>
    <td><?php echo "$program7_date19" ?></td>
    <td><?php echo "$program7_date20" ?></td>
    <td><?php echo "$program7_date21" ?></td>
    <td><?php echo "$program7_date22" ?></td>
    <td><?php echo "$program7_date23" ?></td>
    <td><?php echo "$program7_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program8" ?></b></td>
    <td><?php echo "$program8_date1" ?></td>
    <td><?php echo "$program8_date2" ?></td>
    <td><?php echo "$program8_date3" ?></td>
    <td><?php echo "$program8_date4" ?></td>
    <td><?php echo "$program8_date5" ?></td>
    <td><?php echo "$program8_date6" ?></td>
    <td><?php echo "$program8_date7" ?></td>
    <td><?php echo "$program8_date8" ?></td>
    <td><?php echo "$program8_date9" ?></td>
    <td><?php echo "$program8_date10" ?></td>
    <td><?php echo "$program8_date11" ?></td>
    <td><?php echo "$program8_date12" ?></td>
    <td><?php echo "$program8_date13" ?></td>
    <td><?php echo "$program8_date14" ?></td>
    <td><?php echo "$program8_date15" ?></td>
    <td><?php echo "$program8_date16" ?></td>
    <td><?php echo "$program8_date17" ?></td>
    <td><?php echo "$program8_date18" ?></td>
    <td><?php echo "$program8_date19" ?></td>
    <td><?php echo "$program8_date20" ?></td>
    <td><?php echo "$program8_date21" ?></td>
    <td><?php echo "$program8_date22" ?></td>
    <td><?php echo "$program8_date23" ?></td>
    <td><?php echo "$program8_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program9" ?></b></td>
    <td><?php echo "$program9_date1" ?></td>
    <td><?php echo "$program9_date2" ?></td>
    <td><?php echo "$program9_date3" ?></td>
    <td><?php echo "$program9_date4" ?></td>
    <td><?php echo "$program9_date5" ?></td>
    <td><?php echo "$program9_date6" ?></td>
    <td><?php echo "$program9_date7" ?></td>
    <td><?php echo "$program9_date8" ?></td>
    <td><?php echo "$program9_date9" ?></td>
    <td><?php echo "$program9_date10" ?></td>
    <td><?php echo "$program9_date11" ?></td>
    <td><?php echo "$program9_date12" ?></td>
    <td><?php echo "$program9_date13" ?></td>
    <td><?php echo "$program9_date14" ?></td>
    <td><?php echo "$program9_date15" ?></td>
    <td><?php echo "$program9_date16" ?></td>
    <td><?php echo "$program9_date17" ?></td>
    <td><?php echo "$program9_date18" ?></td>
    <td><?php echo "$program9_date19" ?></td>
    <td><?php echo "$program9_date20" ?></td>
    <td><?php echo "$program9_date21" ?></td>
    <td><?php echo "$program9_date22" ?></td>
    <td><?php echo "$program9_date23" ?></td>
    <td><?php echo "$program9_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program10" ?></b></td>
    <td><?php echo "$program10_date1" ?></td>
    <td><?php echo "$program10_date2" ?></td>
    <td><?php echo "$program10_date3" ?></td>
    <td><?php echo "$program10_date4" ?></td>
    <td><?php echo "$program10_date5" ?></td>
    <td><?php echo "$program10_date6" ?></td>
    <td><?php echo "$program10_date7" ?></td>
    <td><?php echo "$program10_date8" ?></td>
    <td><?php echo "$program10_date9" ?></td>
    <td><?php echo "$program10_date10" ?></td>
    <td><?php echo "$program10_date11" ?></td>
    <td><?php echo "$program10_date12" ?></td>
    <td><?php echo "$program10_date13" ?></td>
    <td><?php echo "$program10_date14" ?></td>
    <td><?php echo "$program10_date15" ?></td>
    <td><?php echo "$program10_date16" ?></td>
    <td><?php echo "$program10_date17" ?></td>
    <td><?php echo "$program10_date18" ?></td>
    <td><?php echo "$program10_date19" ?></td>
    <td><?php echo "$program10_date20" ?></td>
    <td><?php echo "$program10_date21" ?></td>
    <td><?php echo "$program10_date22" ?></td>
    <td><?php echo "$program10_date23" ?></td>
    <td><?php echo "$program10_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program11" ?></b></td>
    <td><?php echo "$program11_date1" ?></td>
    <td><?php echo "$program11_date2" ?></td>
    <td><?php echo "$program11_date3" ?></td>
    <td><?php echo "$program11_date4" ?></td>
    <td><?php echo "$program11_date5" ?></td>
    <td><?php echo "$program11_date6" ?></td>
    <td><?php echo "$program11_date7" ?></td>
    <td><?php echo "$program11_date8" ?></td>
    <td><?php echo "$program11_date9" ?></td>
    <td><?php echo "$program11_date10" ?></td>
    <td><?php echo "$program11_date11" ?></td>
    <td><?php echo "$program11_date12" ?></td>
    <td><?php echo "$program11_date13" ?></td>
    <td><?php echo "$program11_date14" ?></td>
    <td><?php echo "$program11_date15" ?></td>
    <td><?php echo "$program11_date16" ?></td>
    <td><?php echo "$program11_date17" ?></td>
    <td><?php echo "$program11_date18" ?></td>
    <td><?php echo "$program11_date19" ?></td>
    <td><?php echo "$program11_date20" ?></td>
    <td><?php echo "$program11_date21" ?></td>
    <td><?php echo "$program11_date22" ?></td>
    <td><?php echo "$program11_date23" ?></td>
    <td><?php echo "$program11_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program12" ?></b></td>
    <td><?php echo "$program12_date1" ?></td>
    <td><?php echo "$program12_date2" ?></td>
    <td><?php echo "$program12_date3" ?></td>
    <td><?php echo "$program12_date4" ?></td>
    <td><?php echo "$program12_date5" ?></td>
    <td><?php echo "$program12_date6" ?></td>
    <td><?php echo "$program12_date7" ?></td>
    <td><?php echo "$program12_date8" ?></td>
    <td><?php echo "$program12_date9" ?></td>
    <td><?php echo "$program12_date10" ?></td>
    <td><?php echo "$program12_date11" ?></td>
    <td><?php echo "$program12_date12" ?></td>
    <td><?php echo "$program12_date13" ?></td>
    <td><?php echo "$program12_date14" ?></td>
    <td><?php echo "$program12_date15" ?></td>
    <td><?php echo "$program12_date16" ?></td>
    <td><?php echo "$program12_date17" ?></td>
    <td><?php echo "$program12_date18" ?></td>
    <td><?php echo "$program12_date19" ?></td>
    <td><?php echo "$program12_date20" ?></td>
    <td><?php echo "$program12_date21" ?></td>
    <td><?php echo "$program12_date22" ?></td>
    <td><?php echo "$program12_date23" ?></td>
    <td><?php echo "$program12_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program13" ?></b></td>
    <td><?php echo "$program13_date1" ?></td>
    <td><?php echo "$program13_date2" ?></td>
    <td><?php echo "$program13_date3" ?></td>
    <td><?php echo "$program13_date4" ?></td>
    <td><?php echo "$program13_date5" ?></td>
    <td><?php echo "$program13_date6" ?></td>
    <td><?php echo "$program13_date7" ?></td>
    <td><?php echo "$program13_date8" ?></td>
    <td><?php echo "$program13_date9" ?></td>
    <td><?php echo "$program13_date10" ?></td>
    <td><?php echo "$program13_date11" ?></td>
    <td><?php echo "$program13_date12" ?></td>
    <td><?php echo "$program13_date13" ?></td>
    <td><?php echo "$program13_date14" ?></td>
    <td><?php echo "$program13_date15" ?></td>
    <td><?php echo "$program13_date16" ?></td>
    <td><?php echo "$program13_date17" ?></td>
    <td><?php echo "$program13_date18" ?></td>
    <td><?php echo "$program13_date19" ?></td>
    <td><?php echo "$program13_date20" ?></td>
    <td><?php echo "$program13_date21" ?></td>
    <td><?php echo "$program13_date22" ?></td>
    <td><?php echo "$program13_date23" ?></td>
    <td><?php echo "$program13_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program14" ?></b></td>
    <td><?php echo "$program14_date1" ?></td>
    <td><?php echo "$program14_date2" ?></td>
    <td><?php echo "$program14_date3" ?></td>
    <td><?php echo "$program14_date4" ?></td>
    <td><?php echo "$program14_date5" ?></td>
    <td><?php echo "$program14_date6" ?></td>
    <td><?php echo "$program14_date7" ?></td>
    <td><?php echo "$program14_date8" ?></td>
    <td><?php echo "$program14_date9" ?></td>
    <td><?php echo "$program14_date10" ?></td>
    <td><?php echo "$program14_date11" ?></td>
    <td><?php echo "$program14_date12" ?></td>
    <td><?php echo "$program14_date13" ?></td>
    <td><?php echo "$program14_date14" ?></td>
    <td><?php echo "$program14_date15" ?></td>
    <td><?php echo "$program14_date16" ?></td>
    <td><?php echo "$program14_date17" ?></td>
    <td><?php echo "$program14_date18" ?></td>
    <td><?php echo "$program14_date19" ?></td>
    <td><?php echo "$program14_date20" ?></td>
    <td><?php echo "$program14_date21" ?></td>
    <td><?php echo "$program14_date22" ?></td>
    <td><?php echo "$program14_date23" ?></td>
    <td><?php echo "$program14_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program15" ?></b></td>
    <td><?php echo "$program15_date1" ?></td>
    <td><?php echo "$program15_date2" ?></td>
    <td><?php echo "$program15_date3" ?></td>
    <td><?php echo "$program15_date4" ?></td>
    <td><?php echo "$program15_date5" ?></td>
    <td><?php echo "$program15_date6" ?></td>
    <td><?php echo "$program15_date7" ?></td>
    <td><?php echo "$program15_date8" ?></td>
    <td><?php echo "$program15_date9" ?></td>
    <td><?php echo "$program15_date10" ?></td>
    <td><?php echo "$program15_date11" ?></td>
    <td><?php echo "$program15_date12" ?></td>
    <td><?php echo "$program15_date13" ?></td>
    <td><?php echo "$program15_date14" ?></td>
    <td><?php echo "$program15_date15" ?></td>
    <td><?php echo "$program15_date16" ?></td>
    <td><?php echo "$program15_date17" ?></td>
    <td><?php echo "$program15_date18" ?></td>
    <td><?php echo "$program15_date19" ?></td>
    <td><?php echo "$program15_date20" ?></td>
    <td><?php echo "$program15_date21" ?></td>
    <td><?php echo "$program15_date22" ?></td>
    <td><?php echo "$program15_date23" ?></td>
    <td><?php echo "$program15_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program16" ?></b></td>
    <td><?php echo "$program16_date1" ?></td>
    <td><?php echo "$program16_date2" ?></td>
    <td><?php echo "$program16_date3" ?></td>
    <td><?php echo "$program16_date4" ?></td>
    <td><?php echo "$program16_date5" ?></td>
    <td><?php echo "$program16_date6" ?></td>
    <td><?php echo "$program16_date7" ?></td>
    <td><?php echo "$program16_date8" ?></td>
    <td><?php echo "$program16_date9" ?></td>
    <td><?php echo "$program16_date10" ?></td>
    <td><?php echo "$program16_date11" ?></td>
    <td><?php echo "$program16_date12" ?></td>
    <td><?php echo "$program16_date13" ?></td>
    <td><?php echo "$program16_date14" ?></td>
    <td><?php echo "$program16_date15" ?></td>
    <td><?php echo "$program16_date16" ?></td>
    <td><?php echo "$program16_date17" ?></td>
    <td><?php echo "$program16_date18" ?></td>
    <td><?php echo "$program16_date19" ?></td>
    <td><?php echo "$program16_date20" ?></td>
    <td><?php echo "$program16_date21" ?></td>
    <td><?php echo "$program16_date22" ?></td>
    <td><?php echo "$program16_date23" ?></td>
    <td><?php echo "$program16_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program17" ?></b></td>
    <td><?php echo "$program17_date1" ?></td>
    <td><?php echo "$program17_date2" ?></td>
    <td><?php echo "$program17_date3" ?></td>
    <td><?php echo "$program17_date4" ?></td>
    <td><?php echo "$program17_date5" ?></td>
    <td><?php echo "$program17_date6" ?></td>
    <td><?php echo "$program17_date7" ?></td>
    <td><?php echo "$program17_date8" ?></td>
    <td><?php echo "$program17_date9" ?></td>
    <td><?php echo "$program17_date10" ?></td>
    <td><?php echo "$program17_date11" ?></td>
    <td><?php echo "$program17_date12" ?></td>
    <td><?php echo "$program17_date13" ?></td>
    <td><?php echo "$program17_date14" ?></td>
    <td><?php echo "$program17_date15" ?></td>
    <td><?php echo "$program17_date16" ?></td>
    <td><?php echo "$program17_date17" ?></td>
    <td><?php echo "$program17_date18" ?></td>
    <td><?php echo "$program17_date19" ?></td>
    <td><?php echo "$program17_date20" ?></td>
    <td><?php echo "$program17_date21" ?></td>
    <td><?php echo "$program17_date22" ?></td>
    <td><?php echo "$program17_date23" ?></td>
    <td><?php echo "$program17_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program18" ?></b></td>
    <td><?php echo "$program18_date1" ?></td>
    <td><?php echo "$program18_date2" ?></td>
    <td><?php echo "$program18_date3" ?></td>
    <td><?php echo "$program18_date4" ?></td>
    <td><?php echo "$program18_date5" ?></td>
    <td><?php echo "$program18_date6" ?></td>
    <td><?php echo "$program18_date7" ?></td>
    <td><?php echo "$program18_date8" ?></td>
    <td><?php echo "$program18_date9" ?></td>
    <td><?php echo "$program18_date10" ?></td>
    <td><?php echo "$program18_date11" ?></td>
    <td><?php echo "$program18_date12" ?></td>
    <td><?php echo "$program18_date13" ?></td>
    <td><?php echo "$program18_date14" ?></td>
    <td><?php echo "$program18_date15" ?></td>
    <td><?php echo "$program18_date16" ?></td>
    <td><?php echo "$program18_date17" ?></td>
    <td><?php echo "$program18_date18" ?></td>
    <td><?php echo "$program18_date19" ?></td>
    <td><?php echo "$program18_date20" ?></td>
    <td><?php echo "$program18_date21" ?></td>
    <td><?php echo "$program18_date22" ?></td>
    <td><?php echo "$program18_date23" ?></td>
    <td><?php echo "$program18_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program19" ?></b></td>
    <td><?php echo "$program19_date1" ?></td>
    <td><?php echo "$program19_date2" ?></td>
    <td><?php echo "$program19_date3" ?></td>
    <td><?php echo "$program19_date4" ?></td>
    <td><?php echo "$program19_date5" ?></td>
    <td><?php echo "$program19_date6" ?></td>
    <td><?php echo "$program19_date7" ?></td>
    <td><?php echo "$program19_date8" ?></td>
    <td><?php echo "$program19_date9" ?></td>
    <td><?php echo "$program19_date10" ?></td>
    <td><?php echo "$program19_date11" ?></td>
    <td><?php echo "$program19_date12" ?></td>
    <td><?php echo "$program19_date13" ?></td>
    <td><?php echo "$program19_date14" ?></td>
    <td><?php echo "$program19_date15" ?></td>
    <td><?php echo "$program19_date16" ?></td>
    <td><?php echo "$program19_date17" ?></td>
    <td><?php echo "$program19_date18" ?></td>
    <td><?php echo "$program19_date19" ?></td>
    <td><?php echo "$program19_date20" ?></td>
    <td><?php echo "$program19_date21" ?></td>
    <td><?php echo "$program19_date22" ?></td>
    <td><?php echo "$program19_date23" ?></td>
    <td><?php echo "$program19_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program20" ?></b></td>
    <td><?php echo "$program20_date1" ?></td>
    <td><?php echo "$program20_date2" ?></td>
    <td><?php echo "$program20_date3" ?></td>
    <td><?php echo "$program20_date4" ?></td>
    <td><?php echo "$program20_date5" ?></td>
    <td><?php echo "$program20_date6" ?></td>
    <td><?php echo "$program20_date7" ?></td>
    <td><?php echo "$program20_date8" ?></td>
    <td><?php echo "$program20_date9" ?></td>
    <td><?php echo "$program20_date10" ?></td>
    <td><?php echo "$program20_date11" ?></td>
    <td><?php echo "$program20_date12" ?></td>
    <td><?php echo "$program20_date13" ?></td>
    <td><?php echo "$program20_date14" ?></td>
    <td><?php echo "$program20_date15" ?></td>
    <td><?php echo "$program20_date16" ?></td>
    <td><?php echo "$program20_date17" ?></td>
    <td><?php echo "$program20_date18" ?></td>
    <td><?php echo "$program20_date19" ?></td>
    <td><?php echo "$program20_date20" ?></td>
    <td><?php echo "$program20_date21" ?></td>
    <td><?php echo "$program20_date22" ?></td>
    <td><?php echo "$program20_date23" ?></td>
    <td><?php echo "$program20_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program21" ?></b></td>
    <td><?php echo "$program21_date1" ?></td>
    <td><?php echo "$program21_date2" ?></td>
    <td><?php echo "$program21_date3" ?></td>
    <td><?php echo "$program21_date4" ?></td>
    <td><?php echo "$program21_date5" ?></td>
    <td><?php echo "$program21_date6" ?></td>
    <td><?php echo "$program21_date7" ?></td>
    <td><?php echo "$program21_date8" ?></td>
    <td><?php echo "$program21_date9" ?></td>
    <td><?php echo "$program21_date10" ?></td>
    <td><?php echo "$program21_date11" ?></td>
    <td><?php echo "$program21_date12" ?></td>
    <td><?php echo "$program21_date13" ?></td>
    <td><?php echo "$program21_date14" ?></td>
    <td><?php echo "$program21_date15" ?></td>
    <td><?php echo "$program21_date16" ?></td>
    <td><?php echo "$program21_date17" ?></td>
    <td><?php echo "$program21_date18" ?></td>
    <td><?php echo "$program21_date19" ?></td>
    <td><?php echo "$program21_date20" ?></td>
    <td><?php echo "$program21_date21" ?></td>
    <td><?php echo "$program21_date22" ?></td>
    <td><?php echo "$program21_date23" ?></td>
    <td><?php echo "$program21_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program22" ?></b></td>
    <td><?php echo "$program22_date1" ?></td>
    <td><?php echo "$program22_date2" ?></td>
    <td><?php echo "$program22_date3" ?></td>
    <td><?php echo "$program22_date4" ?></td>
    <td><?php echo "$program22_date5" ?></td>
    <td><?php echo "$program22_date6" ?></td>
    <td><?php echo "$program22_date7" ?></td>
    <td><?php echo "$program22_date8" ?></td>
    <td><?php echo "$program22_date9" ?></td>
    <td><?php echo "$program22_date10" ?></td>
    <td><?php echo "$program22_date11" ?></td>
    <td><?php echo "$program22_date12" ?></td>
    <td><?php echo "$program22_date13" ?></td>
    <td><?php echo "$program22_date14" ?></td>
    <td><?php echo "$program22_date15" ?></td>
    <td><?php echo "$program22_date16" ?></td>
    <td><?php echo "$program22_date17" ?></td>
    <td><?php echo "$program22_date18" ?></td>
    <td><?php echo "$program22_date19" ?></td>
    <td><?php echo "$program22_date20" ?></td>
    <td><?php echo "$program22_date21" ?></td>
    <td><?php echo "$program22_date22" ?></td>
    <td><?php echo "$program22_date23" ?></td>
    <td><?php echo "$program22_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program23" ?></b></td>
    <td><?php echo "$program23_date1" ?></td>
    <td><?php echo "$program23_date2" ?></td>
    <td><?php echo "$program23_date3" ?></td>
    <td><?php echo "$program23_date4" ?></td>
    <td><?php echo "$program23_date5" ?></td>
    <td><?php echo "$program23_date6" ?></td>
    <td><?php echo "$program23_date7" ?></td>
    <td><?php echo "$program23_date8" ?></td>
    <td><?php echo "$program23_date9" ?></td>
    <td><?php echo "$program23_date10" ?></td>
    <td><?php echo "$program23_date11" ?></td>
    <td><?php echo "$program23_date12" ?></td>
    <td><?php echo "$program23_date13" ?></td>
    <td><?php echo "$program23_date14" ?></td>
    <td><?php echo "$program23_date15" ?></td>
    <td><?php echo "$program23_date16" ?></td>
    <td><?php echo "$program23_date17" ?></td>
    <td><?php echo "$program23_date18" ?></td>
    <td><?php echo "$program23_date19" ?></td>
    <td><?php echo "$program23_date20" ?></td>
    <td><?php echo "$program23_date21" ?></td>
    <td><?php echo "$program23_date22" ?></td>
    <td><?php echo "$program23_date23" ?></td>
    <td><?php echo "$program23_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program24" ?></b></td>
    <td><?php echo "$program24_date1" ?></td>
    <td><?php echo "$program24_date2" ?></td>
    <td><?php echo "$program24_date3" ?></td>
    <td><?php echo "$program24_date4" ?></td>
    <td><?php echo "$program24_date5" ?></td>
    <td><?php echo "$program24_date6" ?></td>
    <td><?php echo "$program24_date7" ?></td>
    <td><?php echo "$program24_date8" ?></td>
    <td><?php echo "$program24_date9" ?></td>
    <td><?php echo "$program24_date10" ?></td>
    <td><?php echo "$program24_date11" ?></td>
    <td><?php echo "$program24_date12" ?></td>
    <td><?php echo "$program24_date13" ?></td>
    <td><?php echo "$program24_date14" ?></td>
    <td><?php echo "$program24_date15" ?></td>
    <td><?php echo "$program24_date16" ?></td>
    <td><?php echo "$program24_date17" ?></td>
    <td><?php echo "$program24_date18" ?></td>
    <td><?php echo "$program24_date19" ?></td>
    <td><?php echo "$program24_date20" ?></td>
    <td><?php echo "$program24_date21" ?></td>
    <td><?php echo "$program24_date22" ?></td>
    <td><?php echo "$program24_date23" ?></td>
    <td><?php echo "$program24_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program25" ?></b></td>
    <td><?php echo "$program25_date1" ?></td>
    <td><?php echo "$program25_date2" ?></td>
    <td><?php echo "$program25_date3" ?></td>
    <td><?php echo "$program25_date4" ?></td>
    <td><?php echo "$program25_date5" ?></td>
    <td><?php echo "$program25_date6" ?></td>
    <td><?php echo "$program25_date7" ?></td>
    <td><?php echo "$program25_date8" ?></td>
    <td><?php echo "$program25_date9" ?></td>
    <td><?php echo "$program25_date10" ?></td>
    <td><?php echo "$program25_date11" ?></td>
    <td><?php echo "$program25_date12" ?></td>
    <td><?php echo "$program25_date13" ?></td>
    <td><?php echo "$program25_date14" ?></td>
    <td><?php echo "$program25_date15" ?></td>
    <td><?php echo "$program25_date16" ?></td>
    <td><?php echo "$program25_date17" ?></td>
    <td><?php echo "$program25_date18" ?></td>
    <td><?php echo "$program25_date19" ?></td>
    <td><?php echo "$program25_date20" ?></td>
    <td><?php echo "$program25_date21" ?></td>
    <td><?php echo "$program25_date22" ?></td>
    <td><?php echo "$program25_date23" ?></td>
    <td><?php echo "$program25_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program26" ?></b></td>
    <td><?php echo "$program26_date1" ?></td>
    <td><?php echo "$program26_date2" ?></td>
    <td><?php echo "$program26_date3" ?></td>
    <td><?php echo "$program26_date4" ?></td>
    <td><?php echo "$program26_date5" ?></td>
    <td><?php echo "$program26_date6" ?></td>
    <td><?php echo "$program26_date7" ?></td>
    <td><?php echo "$program26_date8" ?></td>
    <td><?php echo "$program26_date9" ?></td>
    <td><?php echo "$program26_date10" ?></td>
    <td><?php echo "$program26_date11" ?></td>
    <td><?php echo "$program26_date12" ?></td>
    <td><?php echo "$program26_date13" ?></td>
    <td><?php echo "$program26_date14" ?></td>
    <td><?php echo "$program26_date15" ?></td>
    <td><?php echo "$program26_date16" ?></td>
    <td><?php echo "$program26_date17" ?></td>
    <td><?php echo "$program26_date18" ?></td>
    <td><?php echo "$program26_date19" ?></td>
    <td><?php echo "$program26_date20" ?></td>
    <td><?php echo "$program26_date21" ?></td>
    <td><?php echo "$program26_date22" ?></td>
    <td><?php echo "$program26_date23" ?></td>
    <td><?php echo "$program26_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program27" ?></b></td>
    <td><?php echo "$program27_date1" ?></td>
    <td><?php echo "$program27_date2" ?></td>
    <td><?php echo "$program27_date3" ?></td>
    <td><?php echo "$program27_date4" ?></td>
    <td><?php echo "$program27_date5" ?></td>
    <td><?php echo "$program27_date6" ?></td>
    <td><?php echo "$program27_date7" ?></td>
    <td><?php echo "$program27_date8" ?></td>
    <td><?php echo "$program27_date9" ?></td>
    <td><?php echo "$program27_date10" ?></td>
    <td><?php echo "$program27_date11" ?></td>
    <td><?php echo "$program27_date12" ?></td>
    <td><?php echo "$program27_date13" ?></td>
    <td><?php echo "$program27_date14" ?></td>
    <td><?php echo "$program27_date15" ?></td>
    <td><?php echo "$program27_date16" ?></td>
    <td><?php echo "$program27_date17" ?></td>
    <td><?php echo "$program27_date18" ?></td>
    <td><?php echo "$program27_date19" ?></td>
    <td><?php echo "$program27_date20" ?></td>
    <td><?php echo "$program27_date21" ?></td>
    <td><?php echo "$program27_date22" ?></td>
    <td><?php echo "$program27_date23" ?></td>
    <td><?php echo "$program27_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program28" ?></b></td>
    <td><?php echo "$program28_date1" ?></td>
    <td><?php echo "$program28_date2" ?></td>
    <td><?php echo "$program28_date3" ?></td>
    <td><?php echo "$program28_date4" ?></td>
    <td><?php echo "$program28_date5" ?></td>
    <td><?php echo "$program28_date6" ?></td>
    <td><?php echo "$program28_date7" ?></td>
    <td><?php echo "$program28_date8" ?></td>
    <td><?php echo "$program28_date9" ?></td>
    <td><?php echo "$program28_date10" ?></td>
    <td><?php echo "$program28_date11" ?></td>
    <td><?php echo "$program28_date12" ?></td>
    <td><?php echo "$program28_date13" ?></td>
    <td><?php echo "$program28_date14" ?></td>
    <td><?php echo "$program28_date15" ?></td>
    <td><?php echo "$program28_date16" ?></td>
    <td><?php echo "$program28_date17" ?></td>
    <td><?php echo "$program28_date18" ?></td>
    <td><?php echo "$program28_date19" ?></td>
    <td><?php echo "$program28_date20" ?></td>
    <td><?php echo "$program28_date21" ?></td>
    <td><?php echo "$program28_date22" ?></td>
    <td><?php echo "$program28_date23" ?></td>
    <td><?php echo "$program28_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program29" ?></b></td>
    <td><?php echo "$program29_date1" ?></td>
    <td><?php echo "$program29_date2" ?></td>
    <td><?php echo "$program29_date3" ?></td>
    <td><?php echo "$program29_date4" ?></td>
    <td><?php echo "$program29_date5" ?></td>
    <td><?php echo "$program29_date6" ?></td>
    <td><?php echo "$program29_date7" ?></td>
    <td><?php echo "$program29_date8" ?></td>
    <td><?php echo "$program29_date9" ?></td>
    <td><?php echo "$program29_date10" ?></td>
    <td><?php echo "$program29_date11" ?></td>
    <td><?php echo "$program29_date12" ?></td>
    <td><?php echo "$program29_date13" ?></td>
    <td><?php echo "$program29_date14" ?></td>
    <td><?php echo "$program29_date15" ?></td>
    <td><?php echo "$program29_date16" ?></td>
    <td><?php echo "$program29_date17" ?></td>
    <td><?php echo "$program29_date18" ?></td>
    <td><?php echo "$program29_date19" ?></td>
    <td><?php echo "$program29_date20" ?></td>
    <td><?php echo "$program29_date21" ?></td>
    <td><?php echo "$program29_date22" ?></td>
    <td><?php echo "$program29_date23" ?></td>
    <td><?php echo "$program29_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program30" ?></b></td>
    <td><?php echo "$program30_date1" ?></td>
    <td><?php echo "$program30_date2" ?></td>
    <td><?php echo "$program30_date3" ?></td>
    <td><?php echo "$program30_date4" ?></td>
    <td><?php echo "$program30_date5" ?></td>
    <td><?php echo "$program30_date6" ?></td>
    <td><?php echo "$program30_date7" ?></td>
    <td><?php echo "$program30_date8" ?></td>
    <td><?php echo "$program30_date9" ?></td>
    <td><?php echo "$program30_date10" ?></td>
    <td><?php echo "$program30_date11" ?></td>
    <td><?php echo "$program30_date12" ?></td>
    <td><?php echo "$program30_date13" ?></td>
    <td><?php echo "$program30_date14" ?></td>
    <td><?php echo "$program30_date15" ?></td>
    <td><?php echo "$program30_date16" ?></td>
    <td><?php echo "$program30_date17" ?></td>
    <td><?php echo "$program30_date18" ?></td>
    <td><?php echo "$program30_date19" ?></td>
    <td><?php echo "$program30_date20" ?></td>
    <td><?php echo "$program30_date21" ?></td>
    <td><?php echo "$program30_date22" ?></td>
    <td><?php echo "$program30_date23" ?></td>
    <td><?php echo "$program30_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program31" ?></b></td>
    <td><?php echo "$program31_date1" ?></td>
    <td><?php echo "$program31_date2" ?></td>
    <td><?php echo "$program31_date3" ?></td>
    <td><?php echo "$program31_date4" ?></td>
    <td><?php echo "$program31_date5" ?></td>
    <td><?php echo "$program31_date6" ?></td>
    <td><?php echo "$program31_date7" ?></td>
    <td><?php echo "$program31_date8" ?></td>
    <td><?php echo "$program31_date9" ?></td>
    <td><?php echo "$program31_date10" ?></td>
    <td><?php echo "$program31_date11" ?></td>
    <td><?php echo "$program31_date12" ?></td>
    <td><?php echo "$program31_date13" ?></td>
    <td><?php echo "$program31_date14" ?></td>
    <td><?php echo "$program31_date15" ?></td>
    <td><?php echo "$program31_date16" ?></td>
    <td><?php echo "$program31_date17" ?></td>
    <td><?php echo "$program31_date18" ?></td>
    <td><?php echo "$program31_date19" ?></td>
    <td><?php echo "$program31_date20" ?></td>
    <td><?php echo "$program31_date21" ?></td>
    <td><?php echo "$program31_date22" ?></td>
    <td><?php echo "$program31_date23" ?></td>
    <td><?php echo "$program31_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program32" ?></b></td>
    <td><?php echo "$program32_date1" ?></td>
    <td><?php echo "$program32_date2" ?></td>
    <td><?php echo "$program32_date3" ?></td>
    <td><?php echo "$program32_date4" ?></td>
    <td><?php echo "$program32_date5" ?></td>
    <td><?php echo "$program32_date6" ?></td>
    <td><?php echo "$program32_date7" ?></td>
    <td><?php echo "$program32_date8" ?></td>
    <td><?php echo "$program32_date9" ?></td>
    <td><?php echo "$program32_date10" ?></td>
    <td><?php echo "$program32_date11" ?></td>
    <td><?php echo "$program32_date12" ?></td>
    <td><?php echo "$program32_date13" ?></td>
    <td><?php echo "$program32_date14" ?></td>
    <td><?php echo "$program32_date15" ?></td>
    <td><?php echo "$program32_date16" ?></td>
    <td><?php echo "$program32_date17" ?></td>
    <td><?php echo "$program32_date18" ?></td>
    <td><?php echo "$program32_date19" ?></td>
    <td><?php echo "$program32_date20" ?></td>
    <td><?php echo "$program32_date21" ?></td>
    <td><?php echo "$program32_date22" ?></td>
    <td><?php echo "$program32_date23" ?></td>
    <td><?php echo "$program32_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program33" ?></b></td>
    <td><?php echo "$program33_date1" ?></td>
    <td><?php echo "$program33_date2" ?></td>
    <td><?php echo "$program33_date3" ?></td>
    <td><?php echo "$program33_date4" ?></td>
    <td><?php echo "$program33_date5" ?></td>
    <td><?php echo "$program33_date6" ?></td>
    <td><?php echo "$program33_date7" ?></td>
    <td><?php echo "$program33_date8" ?></td>
    <td><?php echo "$program33_date9" ?></td>
    <td><?php echo "$program33_date10" ?></td>
    <td><?php echo "$program33_date11" ?></td>
    <td><?php echo "$program33_date12" ?></td>
    <td><?php echo "$program33_date13" ?></td>
    <td><?php echo "$program33_date14" ?></td>
    <td><?php echo "$program33_date15" ?></td>
    <td><?php echo "$program33_date16" ?></td>
    <td><?php echo "$program33_date17" ?></td>
    <td><?php echo "$program33_date18" ?></td>
    <td><?php echo "$program33_date19" ?></td>
    <td><?php echo "$program33_date20" ?></td>
    <td><?php echo "$program33_date21" ?></td>
    <td><?php echo "$program33_date22" ?></td>
    <td><?php echo "$program33_date23" ?></td>
    <td><?php echo "$program33_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program34" ?></b></td>
    <td><?php echo "$program34_date1" ?></td>
    <td><?php echo "$program34_date2" ?></td>
    <td><?php echo "$program34_date3" ?></td>
    <td><?php echo "$program34_date4" ?></td>
    <td><?php echo "$program34_date5" ?></td>
    <td><?php echo "$program34_date6" ?></td>
    <td><?php echo "$program34_date7" ?></td>
    <td><?php echo "$program34_date8" ?></td>
    <td><?php echo "$program34_date9" ?></td>
    <td><?php echo "$program34_date10" ?></td>
    <td><?php echo "$program34_date11" ?></td>
    <td><?php echo "$program34_date12" ?></td>
    <td><?php echo "$program34_date13" ?></td>
    <td><?php echo "$program34_date14" ?></td>
    <td><?php echo "$program34_date15" ?></td>
    <td><?php echo "$program34_date16" ?></td>
    <td><?php echo "$program34_date17" ?></td>
    <td><?php echo "$program34_date18" ?></td>
    <td><?php echo "$program34_date19" ?></td>
    <td><?php echo "$program34_date20" ?></td>
    <td><?php echo "$program34_date21" ?></td>
    <td><?php echo "$program34_date22" ?></td>
    <td><?php echo "$program34_date23" ?></td>
    <td><?php echo "$program34_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program35" ?></b></td>
    <td><?php echo "$program35_date1" ?></td>
    <td><?php echo "$program35_date2" ?></td>
    <td><?php echo "$program35_date3" ?></td>
    <td><?php echo "$program35_date4" ?></td>
    <td><?php echo "$program35_date5" ?></td>
    <td><?php echo "$program35_date6" ?></td>
    <td><?php echo "$program35_date7" ?></td>
    <td><?php echo "$program35_date8" ?></td>
    <td><?php echo "$program35_date9" ?></td>
    <td><?php echo "$program35_date10" ?></td>
    <td><?php echo "$program35_date11" ?></td>
    <td><?php echo "$program35_date12" ?></td>
    <td><?php echo "$program35_date13" ?></td>
    <td><?php echo "$program35_date14" ?></td>
    <td><?php echo "$program35_date15" ?></td>
    <td><?php echo "$program35_date16" ?></td>
    <td><?php echo "$program35_date17" ?></td>
    <td><?php echo "$program35_date18" ?></td>
    <td><?php echo "$program35_date19" ?></td>
    <td><?php echo "$program35_date20" ?></td>
    <td><?php echo "$program35_date21" ?></td>
    <td><?php echo "$program35_date22" ?></td>
    <td><?php echo "$program35_date23" ?></td>
    <td><?php echo "$program35_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program36" ?></b></td>
    <td><?php echo "$program36_date1" ?></td>
    <td><?php echo "$program36_date2" ?></td>
    <td><?php echo "$program36_date3" ?></td>
    <td><?php echo "$program36_date4" ?></td>
    <td><?php echo "$program36_date5" ?></td>
    <td><?php echo "$program36_date6" ?></td>
    <td><?php echo "$program36_date7" ?></td>
    <td><?php echo "$program36_date8" ?></td>
    <td><?php echo "$program36_date9" ?></td>
    <td><?php echo "$program36_date10" ?></td>
    <td><?php echo "$program36_date11" ?></td>
    <td><?php echo "$program36_date12" ?></td>
    <td><?php echo "$program36_date13" ?></td>
    <td><?php echo "$program36_date14" ?></td>
    <td><?php echo "$program36_date15" ?></td>
    <td><?php echo "$program36_date16" ?></td>
    <td><?php echo "$program36_date17" ?></td>
    <td><?php echo "$program36_date18" ?></td>
    <td><?php echo "$program36_date19" ?></td>
    <td><?php echo "$program36_date20" ?></td>
    <td><?php echo "$program36_date21" ?></td>
    <td><?php echo "$program36_date22" ?></td>
    <td><?php echo "$program36_date23" ?></td>
    <td><?php echo "$program36_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program37" ?></b></td>
    <td><?php echo "$program37_date1" ?></td>
    <td><?php echo "$program37_date2" ?></td>
    <td><?php echo "$program37_date3" ?></td>
    <td><?php echo "$program37_date4" ?></td>
    <td><?php echo "$program37_date5" ?></td>
    <td><?php echo "$program37_date6" ?></td>
    <td><?php echo "$program37_date7" ?></td>
    <td><?php echo "$program37_date8" ?></td>
    <td><?php echo "$program37_date9" ?></td>
    <td><?php echo "$program37_date10" ?></td>
    <td><?php echo "$program37_date11" ?></td>
    <td><?php echo "$program37_date12" ?></td>
    <td><?php echo "$program37_date13" ?></td>
    <td><?php echo "$program37_date14" ?></td>
    <td><?php echo "$program37_date15" ?></td>
    <td><?php echo "$program37_date16" ?></td>
    <td><?php echo "$program37_date17" ?></td>
    <td><?php echo "$program37_date18" ?></td>
    <td><?php echo "$program37_date19" ?></td>
    <td><?php echo "$program37_date20" ?></td>
    <td><?php echo "$program37_date21" ?></td>
    <td><?php echo "$program37_date22" ?></td>
    <td><?php echo "$program37_date23" ?></td>
    <td><?php echo "$program37_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program38" ?></b></td>
    <td><?php echo "$program38_date1" ?></td>
    <td><?php echo "$program38_date2" ?></td>
    <td><?php echo "$program38_date3" ?></td>
    <td><?php echo "$program38_date4" ?></td>
    <td><?php echo "$program38_date5" ?></td>
    <td><?php echo "$program38_date6" ?></td>
    <td><?php echo "$program38_date7" ?></td>
    <td><?php echo "$program38_date8" ?></td>
    <td><?php echo "$program38_date9" ?></td>
    <td><?php echo "$program38_date10" ?></td>
    <td><?php echo "$program38_date11" ?></td>
    <td><?php echo "$program38_date12" ?></td>
    <td><?php echo "$program38_date13" ?></td>
    <td><?php echo "$program38_date14" ?></td>
    <td><?php echo "$program38_date15" ?></td>
    <td><?php echo "$program38_date16" ?></td>
    <td><?php echo "$program38_date17" ?></td>
    <td><?php echo "$program38_date18" ?></td>
    <td><?php echo "$program38_date19" ?></td>
    <td><?php echo "$program38_date20" ?></td>
    <td><?php echo "$program38_date21" ?></td>
    <td><?php echo "$program38_date22" ?></td>
    <td><?php echo "$program38_date23" ?></td>
    <td><?php echo "$program38_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program39" ?></b></td>
    <td><?php echo "$program39_date1" ?></td>
    <td><?php echo "$program39_date2" ?></td>
    <td><?php echo "$program39_date3" ?></td>
    <td><?php echo "$program39_date4" ?></td>
    <td><?php echo "$program39_date5" ?></td>
    <td><?php echo "$program39_date6" ?></td>
    <td><?php echo "$program39_date7" ?></td>
    <td><?php echo "$program39_date8" ?></td>
    <td><?php echo "$program39_date9" ?></td>
    <td><?php echo "$program39_date10" ?></td>
    <td><?php echo "$program39_date11" ?></td>
    <td><?php echo "$program39_date12" ?></td>
    <td><?php echo "$program39_date13" ?></td>
    <td><?php echo "$program39_date14" ?></td>
    <td><?php echo "$program39_date15" ?></td>
    <td><?php echo "$program39_date16" ?></td>
    <td><?php echo "$program39_date17" ?></td>
    <td><?php echo "$program39_date18" ?></td>
    <td><?php echo "$program39_date19" ?></td>
    <td><?php echo "$program39_date20" ?></td>
    <td><?php echo "$program39_date21" ?></td>
    <td><?php echo "$program39_date22" ?></td>
    <td><?php echo "$program39_date23" ?></td>
    <td><?php echo "$program39_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program40" ?></b></td>
    <td><?php echo "$program40_date1" ?></td>
    <td><?php echo "$program40_date2" ?></td>
    <td><?php echo "$program40_date3" ?></td>
    <td><?php echo "$program40_date4" ?></td>
    <td><?php echo "$program40_date5" ?></td>
    <td><?php echo "$program40_date6" ?></td>
    <td><?php echo "$program40_date7" ?></td>
    <td><?php echo "$program40_date8" ?></td>
    <td><?php echo "$program40_date9" ?></td>
    <td><?php echo "$program40_date10" ?></td>
    <td><?php echo "$program40_date11" ?></td>
    <td><?php echo "$program40_date12" ?></td>
    <td><?php echo "$program40_date13" ?></td>
    <td><?php echo "$program40_date14" ?></td>
    <td><?php echo "$program40_date15" ?></td>
    <td><?php echo "$program40_date16" ?></td>
    <td><?php echo "$program40_date17" ?></td>
    <td><?php echo "$program40_date18" ?></td>
    <td><?php echo "$program40_date19" ?></td>
    <td><?php echo "$program40_date20" ?></td>
    <td><?php echo "$program40_date21" ?></td>
    <td><?php echo "$program40_date22" ?></td>
    <td><?php echo "$program40_date23" ?></td>
    <td><?php echo "$program40_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program41" ?></b></td>
    <td><?php echo "$program41_date1" ?></td>
    <td><?php echo "$program41_date2" ?></td>
    <td><?php echo "$program41_date3" ?></td>
    <td><?php echo "$program41_date4" ?></td>
    <td><?php echo "$program41_date5" ?></td>
    <td><?php echo "$program41_date6" ?></td>
    <td><?php echo "$program41_date7" ?></td>
    <td><?php echo "$program41_date8" ?></td>
    <td><?php echo "$program41_date9" ?></td>
    <td><?php echo "$program41_date10" ?></td>
    <td><?php echo "$program41_date11" ?></td>
    <td><?php echo "$program41_date12" ?></td>
    <td><?php echo "$program41_date13" ?></td>
    <td><?php echo "$program41_date14" ?></td>
    <td><?php echo "$program41_date15" ?></td>
    <td><?php echo "$program41_date16" ?></td>
    <td><?php echo "$program41_date17" ?></td>
    <td><?php echo "$program41_date18" ?></td>
    <td><?php echo "$program41_date19" ?></td>
    <td><?php echo "$program41_date20" ?></td>
    <td><?php echo "$program41_date21" ?></td>
    <td><?php echo "$program41_date22" ?></td>
    <td><?php echo "$program41_date23" ?></td>
    <td><?php echo "$program41_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program42" ?></b></td>
    <td><?php echo "$program42_date1" ?></td>
    <td><?php echo "$program42_date2" ?></td>
    <td><?php echo "$program42_date3" ?></td>
    <td><?php echo "$program42_date4" ?></td>
    <td><?php echo "$program42_date5" ?></td>
    <td><?php echo "$program42_date6" ?></td>
    <td><?php echo "$program42_date7" ?></td>
    <td><?php echo "$program42_date8" ?></td>
    <td><?php echo "$program42_date9" ?></td>
    <td><?php echo "$program42_date10" ?></td>
    <td><?php echo "$program42_date11" ?></td>
    <td><?php echo "$program42_date12" ?></td>
    <td><?php echo "$program42_date13" ?></td>
    <td><?php echo "$program42_date14" ?></td>
    <td><?php echo "$program42_date15" ?></td>
    <td><?php echo "$program42_date16" ?></td>
    <td><?php echo "$program42_date17" ?></td>
    <td><?php echo "$program42_date18" ?></td>
    <td><?php echo "$program42_date19" ?></td>
    <td><?php echo "$program42_date20" ?></td>
    <td><?php echo "$program42_date21" ?></td>
    <td><?php echo "$program42_date22" ?></td>
    <td><?php echo "$program42_date23" ?></td>
    <td><?php echo "$program42_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program43" ?></b></td>
    <td><?php echo "$program43_date1" ?></td>
    <td><?php echo "$program43_date2" ?></td>
    <td><?php echo "$program43_date3" ?></td>
    <td><?php echo "$program43_date4" ?></td>
    <td><?php echo "$program43_date5" ?></td>
    <td><?php echo "$program43_date6" ?></td>
    <td><?php echo "$program43_date7" ?></td>
    <td><?php echo "$program43_date8" ?></td>
    <td><?php echo "$program43_date9" ?></td>
    <td><?php echo "$program43_date10" ?></td>
    <td><?php echo "$program43_date11" ?></td>
    <td><?php echo "$program43_date12" ?></td>
    <td><?php echo "$program43_date13" ?></td>
    <td><?php echo "$program43_date14" ?></td>
    <td><?php echo "$program43_date15" ?></td>
    <td><?php echo "$program43_date16" ?></td>
    <td><?php echo "$program43_date17" ?></td>
    <td><?php echo "$program43_date18" ?></td>
    <td><?php echo "$program43_date19" ?></td>
    <td><?php echo "$program43_date20" ?></td>
    <td><?php echo "$program43_date21" ?></td>
    <td><?php echo "$program43_date22" ?></td>
    <td><?php echo "$program43_date23" ?></td>
    <td><?php echo "$program43_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program44" ?></b></td>
    <td><?php echo "$program44_date1" ?></td>
    <td><?php echo "$program44_date2" ?></td>
    <td><?php echo "$program44_date3" ?></td>
    <td><?php echo "$program44_date4" ?></td>
    <td><?php echo "$program44_date5" ?></td>
    <td><?php echo "$program44_date6" ?></td>
    <td><?php echo "$program44_date7" ?></td>
    <td><?php echo "$program44_date8" ?></td>
    <td><?php echo "$program44_date9" ?></td>
    <td><?php echo "$program44_date10" ?></td>
    <td><?php echo "$program44_date11" ?></td>
    <td><?php echo "$program44_date12" ?></td>
    <td><?php echo "$program44_date13" ?></td>
    <td><?php echo "$program44_date14" ?></td>
    <td><?php echo "$program44_date15" ?></td>
    <td><?php echo "$program44_date16" ?></td>
    <td><?php echo "$program44_date17" ?></td>
    <td><?php echo "$program44_date18" ?></td>
    <td><?php echo "$program44_date19" ?></td>
    <td><?php echo "$program44_date20" ?></td>
    <td><?php echo "$program44_date21" ?></td>
    <td><?php echo "$program44_date22" ?></td>
    <td><?php echo "$program44_date23" ?></td>
    <td><?php echo "$program44_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program45" ?></b></td>
    <td><?php echo "$program45_date1" ?></td>
    <td><?php echo "$program45_date2" ?></td>
    <td><?php echo "$program45_date3" ?></td>
    <td><?php echo "$program45_date4" ?></td>
    <td><?php echo "$program45_date5" ?></td>
    <td><?php echo "$program45_date6" ?></td>
    <td><?php echo "$program45_date7" ?></td>
    <td><?php echo "$program45_date8" ?></td>
    <td><?php echo "$program45_date9" ?></td>
    <td><?php echo "$program45_date10" ?></td>
    <td><?php echo "$program45_date11" ?></td>
    <td><?php echo "$program45_date12" ?></td>
    <td><?php echo "$program45_date13" ?></td>
    <td><?php echo "$program45_date14" ?></td>
    <td><?php echo "$program45_date15" ?></td>
    <td><?php echo "$program45_date16" ?></td>
    <td><?php echo "$program45_date17" ?></td>
    <td><?php echo "$program45_date18" ?></td>
    <td><?php echo "$program45_date19" ?></td>
    <td><?php echo "$program45_date20" ?></td>
    <td><?php echo "$program45_date21" ?></td>
    <td><?php echo "$program45_date22" ?></td>
    <td><?php echo "$program45_date23" ?></td>
    <td><?php echo "$program45_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program46" ?></b></td>
    <td><?php echo "$program46_date1" ?></td>
    <td><?php echo "$program46_date2" ?></td>
    <td><?php echo "$program46_date3" ?></td>
    <td><?php echo "$program46_date4" ?></td>
    <td><?php echo "$program46_date5" ?></td>
    <td><?php echo "$program46_date6" ?></td>
    <td><?php echo "$program46_date7" ?></td>
    <td><?php echo "$program46_date8" ?></td>
    <td><?php echo "$program46_date9" ?></td>
    <td><?php echo "$program46_date10" ?></td>
    <td><?php echo "$program46_date11" ?></td>
    <td><?php echo "$program46_date12" ?></td>
    <td><?php echo "$program46_date13" ?></td>
    <td><?php echo "$program46_date14" ?></td>
    <td><?php echo "$program46_date15" ?></td>
    <td><?php echo "$program46_date16" ?></td>
    <td><?php echo "$program46_date17" ?></td>
    <td><?php echo "$program46_date18" ?></td>
    <td><?php echo "$program46_date19" ?></td>
    <td><?php echo "$program46_date20" ?></td>
    <td><?php echo "$program46_date21" ?></td>
    <td><?php echo "$program46_date22" ?></td>
    <td><?php echo "$program46_date23" ?></td>
    <td><?php echo "$program46_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program47" ?></b></td>
    <td><?php echo "$program47_date1" ?></td>
    <td><?php echo "$program47_date2" ?></td>
    <td><?php echo "$program47_date3" ?></td>
    <td><?php echo "$program47_date4" ?></td>
    <td><?php echo "$program47_date5" ?></td>
    <td><?php echo "$program47_date6" ?></td>
    <td><?php echo "$program47_date7" ?></td>
    <td><?php echo "$program47_date8" ?></td>
    <td><?php echo "$program47_date9" ?></td>
    <td><?php echo "$program47_date10" ?></td>
    <td><?php echo "$program47_date11" ?></td>
    <td><?php echo "$program47_date12" ?></td>
    <td><?php echo "$program47_date13" ?></td>
    <td><?php echo "$program47_date14" ?></td>
    <td><?php echo "$program47_date15" ?></td>
    <td><?php echo "$program47_date16" ?></td>
    <td><?php echo "$program47_date17" ?></td>
    <td><?php echo "$program47_date18" ?></td>
    <td><?php echo "$program47_date19" ?></td>
    <td><?php echo "$program47_date20" ?></td>
    <td><?php echo "$program47_date21" ?></td>
    <td><?php echo "$program47_date22" ?></td>
    <td><?php echo "$program47_date23" ?></td>
    <td><?php echo "$program47_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program48" ?></b></td>
    <td><?php echo "$program48_date1" ?></td>
    <td><?php echo "$program48_date2" ?></td>
    <td><?php echo "$program48_date3" ?></td>
    <td><?php echo "$program48_date4" ?></td>
    <td><?php echo "$program48_date5" ?></td>
    <td><?php echo "$program48_date6" ?></td>
    <td><?php echo "$program48_date7" ?></td>
    <td><?php echo "$program48_date8" ?></td>
    <td><?php echo "$program48_date9" ?></td>
    <td><?php echo "$program48_date10" ?></td>
    <td><?php echo "$program48_date11" ?></td>
    <td><?php echo "$program48_date12" ?></td>
    <td><?php echo "$program48_date13" ?></td>
    <td><?php echo "$program48_date14" ?></td>
    <td><?php echo "$program48_date15" ?></td>
    <td><?php echo "$program48_date16" ?></td>
    <td><?php echo "$program48_date17" ?></td>
    <td><?php echo "$program48_date18" ?></td>
    <td><?php echo "$program48_date19" ?></td>
    <td><?php echo "$program48_date20" ?></td>
    <td><?php echo "$program48_date21" ?></td>
    <td><?php echo "$program48_date22" ?></td>
    <td><?php echo "$program48_date23" ?></td>
    <td><?php echo "$program48_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program49" ?></b></td>
    <td><?php echo "$program49_date1" ?></td>
    <td><?php echo "$program49_date2" ?></td>
    <td><?php echo "$program49_date3" ?></td>
    <td><?php echo "$program49_date4" ?></td>
    <td><?php echo "$program49_date5" ?></td>
    <td><?php echo "$program49_date6" ?></td>
    <td><?php echo "$program49_date7" ?></td>
    <td><?php echo "$program49_date8" ?></td>
    <td><?php echo "$program49_date9" ?></td>
    <td><?php echo "$program49_date10" ?></td>
    <td><?php echo "$program49_date11" ?></td>
    <td><?php echo "$program49_date12" ?></td>
    <td><?php echo "$program49_date13" ?></td>
    <td><?php echo "$program49_date14" ?></td>
    <td><?php echo "$program49_date15" ?></td>
    <td><?php echo "$program49_date16" ?></td>
    <td><?php echo "$program49_date17" ?></td>
    <td><?php echo "$program49_date18" ?></td>
    <td><?php echo "$program49_date19" ?></td>
    <td><?php echo "$program49_date20" ?></td>
    <td><?php echo "$program49_date21" ?></td>
    <td><?php echo "$program49_date22" ?></td>
    <td><?php echo "$program49_date23" ?></td>
    <td><?php echo "$program49_date24" ?></td>
  </tr>
  <tr>
    <td><b><?php echo "$program50" ?></b></td>
    <td><?php echo "$program50_date1" ?></td>
    <td><?php echo "$program50_date2" ?></td>
    <td><?php echo "$program50_date3" ?></td>
    <td><?php echo "$program50_date4" ?></td>
    <td><?php echo "$program50_date5" ?></td>
    <td><?php echo "$program50_date6" ?></td>
    <td><?php echo "$program50_date7" ?></td>
    <td><?php echo "$program50_date8" ?></td>
    <td><?php echo "$program50_date9" ?></td>
    <td><?php echo "$program50_date10" ?></td>
    <td><?php echo "$program50_date11" ?></td>
    <td><?php echo "$program50_date12" ?></td>
    <td><?php echo "$program50_date13" ?></td>
    <td><?php echo "$program50_date14" ?></td>
    <td><?php echo "$program50_date15" ?></td>
    <td><?php echo "$program50_date16" ?></td>
    <td><?php echo "$program50_date17" ?></td>
    <td><?php echo "$program50_date18" ?></td>
    <td><?php echo "$program50_date19" ?></td>
    <td><?php echo "$program50_date20" ?></td>
    <td><?php echo "$program50_date21" ?></td>
    <td><?php echo "$program50_date22" ?></td>
    <td><?php echo "$program50_date23" ?></td>
    <td><?php echo "$program50_date24" ?></td>
  </tr>
</table>
</div>

<br><br><br><br>

<p>
<span class="emphasis">M4</span><span style="color:gray">Applications</span>
</p>

<!-- Javascript for Chart.js Chart Inclusion -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script>

var ctx = document.getElementById("myChart").getContext('2d');

var gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
gradient1.addColorStop(0, 'rgba(0, 124, 172, .5)');
gradient1.addColorStop(1, 'rgba(0, 124, 172, 0)');

var gradient2 = ctx.createLinearGradient(0, 0, 0, 400); //#66CDAA, Medium Aqua Marine
gradient2.addColorStop(0, 'rgba(102,205,170, 0.5)');
gradient2.addColorStop(1, 'rgba(102,205,170, 0)');

var gradient3 = ctx.createLinearGradient(0, 0, 0, 400); //#20B2AA, Light Sea Green
gradient3.addColorStop(0, 'rgba(32,178,170, .5)');
gradient3.addColorStop(1, 'rgba(32,178,170, 0)');

var gradient4 = ctx.createLinearGradient(0, 0, 0, 400); //#3CB371, Medium Sea Green
gradient4.addColorStop(0, 'rgba(60,179,113, 0.5)');
gradient4.addColorStop(1, 'rgba(60,179,113, 0)');

var gradient5 = ctx.createLinearGradient(0, 0, 0, 400); //#008080, Teal
gradient5.addColorStop(0, 'rgba(0,128,128, 0.5)');
gradient5.addColorStop(1, 'rgba(0,128,128, 0)');

var gradient6 = ctx.createLinearGradient(0, 0, 0, 400); //#00CED1, Dark Turqouise
gradient6.addColorStop(0, 'rgba(0,206,209, 0.5)');
gradient6.addColorStop(1, 'rgba(0,206,209, 0)');

var gradient7 = ctx.createLinearGradient(0, 0, 0, 400); //#40E0D0, Turquoise
gradient7.addColorStop(0, 'rgba(64,224,208, 0.5)');
gradient7.addColorStop(1, 'rgba(64,224,208, 0)');

var gradient8 = ctx.createLinearGradient(0, 0, 0, 400); // 7FFFD4, Aqua Marine
gradient8.addColorStop(0, 'rgba(127,255,212, 0.5)');
gradient8.addColorStop(1, 'rgba(127,255,212, 0)');

var gradient9 = ctx.createLinearGradient(0, 0, 0, 400); // $B0E0E6, Powder Blue
gradient9.addColorStop(0, 'rgba(176,224,230, 0.5)');
gradient9.addColorStop(1, 'rgba(176,224,230, 0)');

var gradient10 = ctx.createLinearGradient(0, 0, 0, 400); // #5F9EA0, Cadet Blue
gradient10.addColorStop(0, 'rgba(95,158,160, 0.5)');
gradient10.addColorStop(1, 'rgba(95,158,160, 0)');

var gradient11 = ctx.createLinearGradient(0, 0, 0, 400); // #4682B4, Steel BLue
gradient11.addColorStop(0, 'rgba(70,130,180, 0.5)');
gradient11.addColorStop(1, 'rgba(70,130,180, 0)');

var gradient12 = ctx.createLinearGradient(0, 0, 0, 400); // #6495ED, Cornflower BLue
gradient12.addColorStop(0, 'rgba(100,149,237, 0.5)');
gradient12.addColorStop(1, 'rgba(100,149,237, 0)');

var gradient13 = ctx.createLinearGradient(0, 0, 0, 400); // #8A2BE2, BLue Violet
gradient13.addColorStop(0, 'rgba(138,43,226, 0.5)');
gradient13.addColorStop(1, 'rgba(138,43,226, 0)');

var gradient14 = ctx.createLinearGradient(0, 0, 0, 400); // #483D8B, Dark Slate Blue
gradient14.addColorStop(0, 'rgba(72,61,139, 0.5)');
gradient14.addColorStop(1, 'rgba(72,61,139, 0)');

var gradient15 = ctx.createLinearGradient(0, 0, 0, 400); // #6A5ACD, Slate BLue
gradient15.addColorStop(0, 'rgba(106,90,205, 0.5)');
gradient15.addColorStop(1, 'rgba(106,90,205, 0)');

var gradient16 = ctx.createLinearGradient(0, 0, 0, 400); // #9370DB, Medium Purple
gradient16.addColorStop(0, 'rgba(147,112,219, 0.5)');
gradient16.addColorStop(1, 'rgba(147,112,219, 0)');

var gradient17 = ctx.createLinearGradient(0, 0, 0, 400); // #9932CC, Dark Orchid
gradient17.addColorStop(0, 'rgba(153,50,204, 0.5)');
gradient17.addColorStop(1, 'rgba(153,50,204, 0)');

var gradient18 = ctx.createLinearGradient(0, 0, 0, 400); // #BA55D3, Medium Orchid
gradient18.addColorStop(0, 'rgba(186,85,211, 0.5)');
gradient18.addColorStop(1, 'rgba(186,85,211, 0)');

var gradient19 = ctx.createLinearGradient(0, 0, 0, 400); // #DDDA0DD, Plum
gradient19.addColorStop(0, 'rgba(221,160,221, 0.5)');
gradient19.addColorStop(1, 'rgba(221,160,221, 0)');

var gradient20 = ctx.createLinearGradient(0, 0, 0, 400); // #FF69B4, Hot Pink
gradient20.addColorStop(0, 'rgba(255,105,180, 0.5)');
gradient20.addColorStop(1, 'rgba(255,105,180, 0)');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: ["<?php echo $date1 ?>",
               "<?php echo $date2 ?>",
               "<?php echo $date3 ?>",
               "<?php echo $date4 ?>",
               "<?php echo $date5 ?>",
               "<?php echo $date6 ?>",
               "<?php echo $date7 ?>",
               "<?php echo $date8 ?>",
               "<?php echo $date9 ?>",
               "<?php echo $date10 ?>",
               "<?php echo $date11 ?>",
               "<?php echo $date12 ?>",
               "<?php echo $date13 ?>",
               "<?php echo $date14 ?>",
               "<?php echo $date15 ?>",
               "<?php echo $date16 ?>",
               "<?php echo $date17 ?>",
               "<?php echo $date18 ?>",
               "<?php echo $date19 ?>",
               "<?php echo $date20 ?>",
               "<?php echo $date21 ?>",
               "<?php echo $date22 ?>",
               "<?php echo $date23 ?>",
               "<?php echo $date24 ?>"],
	 datasets: [
	       {
        label: '<?php echo $resource7 ?>', // Label on legend
        data: [<?php echo ($resource7_date1_utilization*100) ?>,
               <?php echo ($resource7_date2_utilization*100) ?>,
               <?php echo ($resource7_date3_utilization*100) ?>,
               <?php echo ($resource7_date4_utilization*100) ?>,
               <?php echo ($resource7_date5_utilization*100) ?>,
               <?php echo ($resource7_date6_utilization*100) ?>,
               <?php echo ($resource7_date7_utilization*100) ?>,
               <?php echo ($resource7_date8_utilization*100) ?>,
               <?php echo ($resource7_date9_utilization*100) ?>,
               <?php echo ($resource7_date10_utilization*100) ?>,
               <?php echo ($resource7_date11_utilization*100) ?>,
               <?php echo ($resource7_date12_utilization*100) ?>,
               <?php echo ($resource7_date13_utilization*100) ?>,
               <?php echo ($resource7_date14_utilization*100) ?>,
               <?php echo ($resource7_date15_utilization*100) ?>,
               <?php echo ($resource7_date16_utilization*100) ?>,
               <?php echo ($resource7_date17_utilization*100) ?>,
               <?php echo ($resource7_date18_utilization*100) ?>,
               <?php echo ($resource7_date19_utilization*100) ?>,
               <?php echo ($resource7_date20_utilization*100) ?>,
               <?php echo ($resource7_date21_utilization*100) ?>,
               <?php echo ($resource7_date22_utilization*100) ?>,
               <?php echo ($resource7_date23_utilization*100) ?>,
               <?php echo ($resource7_date24_utilization*100) ?>
             ],
        pointRadius: 1.75, // Circle size
        fill: true,
        backgroundColor: gradient7, // Fill color underneath the line
        borderColor: '#00CED1', // Add custom color border (Line)
        borderWidth: 2 // Specify bar border width
        }, // End block for Resource
        { // Final Data Block -- Max Capaacity Line
        label: 'Max Capacity', // Name the series
        data: [100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100],
        pointRadius: 0,
        fill: false,
        borderColor: '#CC0000',
  	    fill: false,
        borderWidth: 2
        }
      ]
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          labels: {
            usePointStyle: true,
                  }
                },
        scales: {
          yAxes:
          [{
              ticks: {
                beginAtZero:true,
                min: 50,
                max: 110
              }
          }]
}
}
});
</script>

</body>
</html>
