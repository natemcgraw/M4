<?php
//--------------------------------------------------Get connected to Database
require_once "pdo.php";
?>

<!DOCTYPE html>

<html>
<head>
  <link href="M4_tool_style.css" rel="stylesheet" type="text/css">
  <title>M4 Applications</title>

<style>

input{
  font-size: 12px;
}

</style>

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

//----------------------------------------------Update Database with New Values
//-------Program 1
//Program 1 Name
if ( isset($_REQUEST['program1'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=1";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program1']));
    header("Location: prod_volume.php");
}
//Program 1, Date 1 Rate
if (isset($_REQUEST['program1_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 1, Date 2 Rate
if (isset($_REQUEST['program1_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 1, Date 3 Rate
if (isset($_REQUEST['program1_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 1, Date 4 Rate
if (isset($_REQUEST['program1_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 1, Date 5 Rate
if (isset($_REQUEST['program1_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 1, Date 6 Rate
if (isset($_REQUEST['program1_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 1, Date 7 Rate
if (isset($_REQUEST['program1_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 1, Date 8 Rate
if (isset($_REQUEST['program1_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 1, Date 9 Rate
if (isset($_REQUEST['program1_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 1, Date 10 Rate
if (isset($_REQUEST['program1_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 1, Date 11 Rate
if (isset($_REQUEST['program1_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 1, Date 12 Rate
if (isset($_REQUEST['program1_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 1, Date 13 Rate
if (isset($_REQUEST['program1_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 1, Date 14 Rate
if (isset($_REQUEST['program1_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 1, Date 15 Rate
if (isset($_REQUEST['program1_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 1, Date 16 Rate
if (isset($_REQUEST['program1_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 1, Date 17 Rate
if (isset($_REQUEST['program1_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 1, Date 18 Rate
if (isset($_REQUEST['program1_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 1, Date 19 Rate
if (isset($_REQUEST['program1_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 1, Date 20 Rate
if (isset($_REQUEST['program1_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 1, Date 21 Rate
if (isset($_REQUEST['program1_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 1, Date 22 Rate
if (isset($_REQUEST['program1_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 1, Date 23 Rate
if (isset($_REQUEST['program1_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 1, Date 24 Rate
if (isset($_REQUEST['program1_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=1 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program1_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 2
//Name
if ( isset($_REQUEST['program2'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=2";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program2']));
    header("Location: prod_volume.php");
}

//Program 2, Date 1 Rate
if (isset($_REQUEST['program2_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 2, Date 2 Rate
if (isset($_REQUEST['program2_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 2, Date 3 Rate
if (isset($_REQUEST['program2_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 2, Date 4 Rate
if (isset($_REQUEST['program2_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 2, Date 5 Rate
if (isset($_REQUEST['program2_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 2, Date 6 Rate
if (isset($_REQUEST['program2_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 2, Date 7 Rate
if (isset($_REQUEST['program2_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 2, Date 8 Rate
if (isset($_REQUEST['program2_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 2, Date 9 Rate
if (isset($_REQUEST['program2_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 2, Date 10 Rate
if (isset($_REQUEST['program2_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 2, Date 11 Rate
if (isset($_REQUEST['program2_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 2, Date 12 Rate
if (isset($_REQUEST['program2_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 2, Date 13 Rate
if (isset($_REQUEST['program2_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 2, Date 14 Rate
if (isset($_REQUEST['program2_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 2, Date 15 Rate
if (isset($_REQUEST['program2_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 2, Date 16 Rate
if (isset($_REQUEST['program2_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 2, Date 17 Rate
if (isset($_REQUEST['program2_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 2, Date 18 Rate
if (isset($_REQUEST['program2_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 2, Date 19 Rate
if (isset($_REQUEST['program2_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 2, Date 20 Rate
if (isset($_REQUEST['program2_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 2, Date 21 Rate
if (isset($_REQUEST['program2_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 2, Date 22 Rate
if (isset($_REQUEST['program2_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 2, Date 23 Rate
if (isset($_REQUEST['program2_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 2, Date 24 Rate
if (isset($_REQUEST['program2_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=2 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program2_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 3
//Name
if ( isset($_REQUEST['program3'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=3";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program3']));
    header("Location: prod_volume.php");
}
//Program 3, Date 1 Rate
if (isset($_REQUEST['program3_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 3, Date 2 Rate
if (isset($_REQUEST['program3_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 3, Date 3 Rate
if (isset($_REQUEST['program3_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 3, Date 4 Rate
if (isset($_REQUEST['program3_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 3, Date 5 Rate
if (isset($_REQUEST['program3_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 3, Date 6 Rate
if (isset($_REQUEST['program3_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 3, Date 7 Rate
if (isset($_REQUEST['program3_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 3, Date 8 Rate
if (isset($_REQUEST['program3_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 3, Date 9 Rate
if (isset($_REQUEST['program3_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 3, Date 10 Rate
if (isset($_REQUEST['program3_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 3, Date 11 Rate
if (isset($_REQUEST['program3_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 3, Date 12 Rate
if (isset($_REQUEST['program3_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 3, Date 13 Rate
if (isset($_REQUEST['program3_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 3, Date 14 Rate
if (isset($_REQUEST['program3_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 3, Date 15 Rate
if (isset($_REQUEST['program3_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 3, Date 16 Rate
if (isset($_REQUEST['program3_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 3, Date 17 Rate
if (isset($_REQUEST['program3_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 3, Date 18 Rate
if (isset($_REQUEST['program3_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 3, Date 19 Rate
if (isset($_REQUEST['program3_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 3, Date 20 Rate
if (isset($_REQUEST['program3_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 3, Date 21 Rate
if (isset($_REQUEST['program3_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 3, Date 22 Rate
if (isset($_REQUEST['program3_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 3, Date 23 Rate
if (isset($_REQUEST['program3_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 3, Date 24 Rate
if (isset($_REQUEST['program3_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=3 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program3_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 4
//Name
if ( isset($_REQUEST['program4'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=4";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program4']));
    header("Location: prod_volume.php");
}
//Program 4, Date 1 Rate
if (isset($_REQUEST['program4_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 4, Date 2 Rate
if (isset($_REQUEST['program4_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 4, Date 3 Rate
if (isset($_REQUEST['program4_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 4, Date 4 Rate
if (isset($_REQUEST['program4_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 4, Date 5 Rate
if (isset($_REQUEST['program4_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 4, Date 6 Rate
if (isset($_REQUEST['program4_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 4, Date 7 Rate
if (isset($_REQUEST['program4_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 4, Date 8 Rate
if (isset($_REQUEST['program4_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 4, Date 9 Rate
if (isset($_REQUEST['program4_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 4, Date 10 Rate
if (isset($_REQUEST['program4_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 4, Date 11 Rate
if (isset($_REQUEST['program4_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 4, Date 12 Rate
if (isset($_REQUEST['program4_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 4, Date 13 Rate
if (isset($_REQUEST['program4_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 4, Date 14 Rate
if (isset($_REQUEST['program4_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 4, Date 15 Rate
if (isset($_REQUEST['program4_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 4, Date 16 Rate
if (isset($_REQUEST['program4_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 4, Date 17 Rate
if (isset($_REQUEST['program4_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 4, Date 18 Rate
if (isset($_REQUEST['program4_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 4, Date 19 Rate
if (isset($_REQUEST['program4_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 4, Date 20 Rate
if (isset($_REQUEST['program4_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 4, Date 21 Rate
if (isset($_REQUEST['program4_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 4, Date 22 Rate
if (isset($_REQUEST['program4_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 4, Date 23 Rate
if (isset($_REQUEST['program4_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 4, Date 24 Rate
if (isset($_REQUEST['program4_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=4 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program4_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 5
//Name
if ( isset($_REQUEST['program5'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=5";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program5']));
    header("Location: prod_volume.php");
}
//Program 5, Date 1 Rate
if (isset($_REQUEST['program5_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 5, Date 2 Rate
if (isset($_REQUEST['program5_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 5, Date 3 Rate
if (isset($_REQUEST['program5_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 5, Date 4 Rate
if (isset($_REQUEST['program5_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 5, Date 5 Rate
if (isset($_REQUEST['program5_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 5, Date 6 Rate
if (isset($_REQUEST['program5_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 5, Date 7 Rate
if (isset($_REQUEST['program5_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 5, Date 8 Rate
if (isset($_REQUEST['program5_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 5, Date 9 Rate
if (isset($_REQUEST['program5_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 5, Date 10 Rate
if (isset($_REQUEST['program5_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 5, Date 11 Rate
if (isset($_REQUEST['program5_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 5, Date 12 Rate
if (isset($_REQUEST['program5_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 5, Date 13 Rate
if (isset($_REQUEST['program5_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 5, Date 14 Rate
if (isset($_REQUEST['program5_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 5, Date 15 Rate
if (isset($_REQUEST['program5_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 5, Date 16 Rate
if (isset($_REQUEST['program5_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 5, Date 17 Rate
if (isset($_REQUEST['program5_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 5, Date 18 Rate
if (isset($_REQUEST['program5_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 5, Date 19 Rate
if (isset($_REQUEST['program5_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 5, Date 20 Rate
if (isset($_REQUEST['program5_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 5, Date 21 Rate
if (isset($_REQUEST['program5_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 5, Date 22 Rate
if (isset($_REQUEST['program5_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 5, Date 23 Rate
if (isset($_REQUEST['program5_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 5, Date 24 Rate
if (isset($_REQUEST['program5_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=5 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program5_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 6
//Name
if ( isset($_REQUEST['program6'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=6";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program6']));
    header("Location: prod_volume.php");
}
//Program 6, Date 1 Rate
if (isset($_REQUEST['program6_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 6, Date 2 Rate
if (isset($_REQUEST['program6_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 6, Date 3 Rate
if (isset($_REQUEST['program6_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 6, Date 4 Rate
if (isset($_REQUEST['program6_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 6, Date 5 Rate
if (isset($_REQUEST['program6_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 6, Date 6 Rate
if (isset($_REQUEST['program6_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 6, Date 7 Rate
if (isset($_REQUEST['program6_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 6, Date 8 Rate
if (isset($_REQUEST['program6_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 6, Date 9 Rate
if (isset($_REQUEST['program6_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 6, Date 10 Rate
if (isset($_REQUEST['program6_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 6, Date 11 Rate
if (isset($_REQUEST['program6_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 6, Date 12 Rate
if (isset($_REQUEST['program6_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 6, Date 13 Rate
if (isset($_REQUEST['program6_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 6, Date 14 Rate
if (isset($_REQUEST['program6_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 6, Date 15 Rate
if (isset($_REQUEST['program6_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 6, Date 16 Rate
if (isset($_REQUEST['program6_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 6, Date 17 Rate
if (isset($_REQUEST['program6_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 6, Date 18 Rate
if (isset($_REQUEST['program6_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 6, Date 19 Rate
if (isset($_REQUEST['program6_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 6, Date 20 Rate
if (isset($_REQUEST['program6_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 6, Date 21 Rate
if (isset($_REQUEST['program6_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 6, Date 22 Rate
if (isset($_REQUEST['program6_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 6, Date 23 Rate
if (isset($_REQUEST['program6_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 6, Date 24 Rate
if (isset($_REQUEST['program6_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=6 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program6_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 7
//Name
if ( isset($_REQUEST['program7'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=7";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program7']));
    header("Location: prod_volume.php");
}
//Program 7, Date 1 Rate
if (isset($_REQUEST['program7_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 7, Date 2 Rate
if (isset($_REQUEST['program7_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 7, Date 3 Rate
if (isset($_REQUEST['program7_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 7, Date 4 Rate
if (isset($_REQUEST['program7_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 7, Date 5 Rate
if (isset($_REQUEST['program7_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 7, Date 6 Rate
if (isset($_REQUEST['program7_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 7, Date 7 Rate
if (isset($_REQUEST['program7_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 7, Date 8 Rate
if (isset($_REQUEST['program7_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 7, Date 9 Rate
if (isset($_REQUEST['program7_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 7, Date 10 Rate
if (isset($_REQUEST['program7_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 7, Date 11 Rate
if (isset($_REQUEST['program7_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 7, Date 12 Rate
if (isset($_REQUEST['program7_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 7, Date 13 Rate
if (isset($_REQUEST['program7_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 7, Date 14 Rate
if (isset($_REQUEST['program7_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 7, Date 15 Rate
if (isset($_REQUEST['program7_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 7, Date 16 Rate
if (isset($_REQUEST['program7_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 7, Date 17 Rate
if (isset($_REQUEST['program7_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 7, Date 18 Rate
if (isset($_REQUEST['program7_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 7, Date 19 Rate
if (isset($_REQUEST['program7_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 7, Date 20 Rate
if (isset($_REQUEST['program7_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 7, Date 21 Rate
if (isset($_REQUEST['program7_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 7, Date 22 Rate
if (isset($_REQUEST['program7_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 7, Date 23 Rate
if (isset($_REQUEST['program7_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 7, Date 24 Rate
if (isset($_REQUEST['program7_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=7 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program7_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 8
//Name
if ( isset($_REQUEST['program8'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=8";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program8']));
    header("Location: prod_volume.php");
}
//Program 8, Date 1 Rate
if (isset($_REQUEST['program8_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 8, Date 2 Rate
if (isset($_REQUEST['program8_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 8, Date 3 Rate
if (isset($_REQUEST['program8_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 8, Date 4 Rate
if (isset($_REQUEST['program8_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 8, Date 5 Rate
if (isset($_REQUEST['program8_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 8, Date 6 Rate
if (isset($_REQUEST['program8_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 8, Date 7 Rate
if (isset($_REQUEST['program8_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 8, Date 8 Rate
if (isset($_REQUEST['program8_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 8, Date 9 Rate
if (isset($_REQUEST['program8_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 8, Date 10 Rate
if (isset($_REQUEST['program8_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 8, Date 11 Rate
if (isset($_REQUEST['program8_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 8, Date 12 Rate
if (isset($_REQUEST['program8_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 8, Date 13 Rate
if (isset($_REQUEST['program8_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 8, Date 14 Rate
if (isset($_REQUEST['program8_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 8, Date 15 Rate
if (isset($_REQUEST['program8_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 8, Date 16 Rate
if (isset($_REQUEST['program8_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 8, Date 17 Rate
if (isset($_REQUEST['program8_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 8, Date 18 Rate
if (isset($_REQUEST['program8_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 8, Date 19 Rate
if (isset($_REQUEST['program8_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 8, Date 20 Rate
if (isset($_REQUEST['program8_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 8, Date 21 Rate
if (isset($_REQUEST['program8_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 8, Date 22 Rate
if (isset($_REQUEST['program8_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 8, Date 23 Rate
if (isset($_REQUEST['program8_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 8, Date 24 Rate
if (isset($_REQUEST['program8_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=8 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program8_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 9
//Name
if ( isset($_REQUEST['program9'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=9";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program9']));
    header("Location: prod_volume.php");
}
//Program 9, Date 1 Rate
if (isset($_REQUEST['program9_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 9, Date 2 Rate
if (isset($_REQUEST['program9_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 9, Date 3 Rate
if (isset($_REQUEST['program9_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 9, Date 4 Rate
if (isset($_REQUEST['program9_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 9, Date 5 Rate
if (isset($_REQUEST['program9_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 9, Date 6 Rate
if (isset($_REQUEST['program9_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 9, Date 7 Rate
if (isset($_REQUEST['program9_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 9, Date 8 Rate
if (isset($_REQUEST['program9_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 9, Date 9 Rate
if (isset($_REQUEST['program9_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 9, Date 10 Rate
if (isset($_REQUEST['program9_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 9, Date 11 Rate
if (isset($_REQUEST['program9_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 9, Date 12 Rate
if (isset($_REQUEST['program9_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 9, Date 13 Rate
if (isset($_REQUEST['program9_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 9, Date 14 Rate
if (isset($_REQUEST['program9_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 9, Date 15 Rate
if (isset($_REQUEST['program9_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 9, Date 16 Rate
if (isset($_REQUEST['program9_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 9, Date 17 Rate
if (isset($_REQUEST['program9_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 9, Date 18 Rate
if (isset($_REQUEST['program9_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 9, Date 19 Rate
if (isset($_REQUEST['program9_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 9, Date 20 Rate
if (isset($_REQUEST['program9_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 9, Date 21 Rate
if (isset($_REQUEST['program9_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 9, Date 22 Rate
if (isset($_REQUEST['program9_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 9, Date 23 Rate
if (isset($_REQUEST['program9_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 9, Date 24 Rate
if (isset($_REQUEST['program9_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=9 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program9_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 10
//Name
if ( isset($_REQUEST['program10'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=10";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program10']));
    header("Location: prod_volume.php");
}
//Program 10, Date 1 Rate
if (isset($_REQUEST['program10_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 10, Date 2 Rate
if (isset($_REQUEST['program10_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 10, Date 3 Rate
if (isset($_REQUEST['program10_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 10, Date 4 Rate
if (isset($_REQUEST['program10_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 10, Date 5 Rate
if (isset($_REQUEST['program10_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 10, Date 6 Rate
if (isset($_REQUEST['program10_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 10, Date 7 Rate
if (isset($_REQUEST['program10_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 10, Date 8 Rate
if (isset($_REQUEST['program10_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 10, Date 9 Rate
if (isset($_REQUEST['program10_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 10, Date 10 Rate
if (isset($_REQUEST['program10_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 10, Date 11 Rate
if (isset($_REQUEST['program10_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 10, Date 12 Rate
if (isset($_REQUEST['program10_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 10, Date 13 Rate
if (isset($_REQUEST['program10_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 10, Date 14 Rate
if (isset($_REQUEST['program10_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 10, Date 15 Rate
if (isset($_REQUEST['program10_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 10, Date 16 Rate
if (isset($_REQUEST['program10_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 10, Date 17 Rate
if (isset($_REQUEST['program10_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 10, Date 18 Rate
if (isset($_REQUEST['program10_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 10, Date 19 Rate
if (isset($_REQUEST['program10_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 10, Date 20 Rate
if (isset($_REQUEST['program10_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 10, Date 21 Rate
if (isset($_REQUEST['program10_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 10, Date 22 Rate
if (isset($_REQUEST['program10_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 10, Date 23 Rate
if (isset($_REQUEST['program10_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 10, Date 24 Rate
if (isset($_REQUEST['program10_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=10 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program10_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 11
//Name
if ( isset($_REQUEST['program11'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=11";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program11']));
    header("Location: prod_volume.php");
}
//Program 11, Date 1 Rate
if (isset($_REQUEST['program11_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 11, Date 2 Rate
if (isset($_REQUEST['program11_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 11, Date 3 Rate
if (isset($_REQUEST['program11_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 11, Date 4 Rate
if (isset($_REQUEST['program11_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 11, Date 5 Rate
if (isset($_REQUEST['program11_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 11, Date 6 Rate
if (isset($_REQUEST['program11_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 11, Date 7 Rate
if (isset($_REQUEST['program11_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 11, Date 8 Rate
if (isset($_REQUEST['program11_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 11, Date 9 Rate
if (isset($_REQUEST['program11_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 11, Date 10 Rate
if (isset($_REQUEST['program11_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 11, Date 11 Rate
if (isset($_REQUEST['program11_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 11, Date 12 Rate
if (isset($_REQUEST['program11_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 11, Date 13 Rate
if (isset($_REQUEST['program11_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 11, Date 14 Rate
if (isset($_REQUEST['program11_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 11, Date 15 Rate
if (isset($_REQUEST['program11_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 11, Date 16 Rate
if (isset($_REQUEST['program11_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 11, Date 17 Rate
if (isset($_REQUEST['program11_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 11, Date 18 Rate
if (isset($_REQUEST['program11_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 11, Date 19 Rate
if (isset($_REQUEST['program11_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 11, Date 20 Rate
if (isset($_REQUEST['program11_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 11, Date 21 Rate
if (isset($_REQUEST['program11_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 11, Date 22 Rate
if (isset($_REQUEST['program11_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 11, Date 23 Rate
if (isset($_REQUEST['program11_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 11, Date 24 Rate
if (isset($_REQUEST['program11_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=11 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program11_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 12
//Name
if ( isset($_REQUEST['program12'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=12";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program12']));
    header("Location: prod_volume.php");
}
//Program 12, Date 1 Rate
if (isset($_REQUEST['program12_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 12, Date 2 Rate
if (isset($_REQUEST['program12_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 12, Date 3 Rate
if (isset($_REQUEST['program12_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 12, Date 4 Rate
if (isset($_REQUEST['program12_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 12, Date 5 Rate
if (isset($_REQUEST['program12_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 12, Date 6 Rate
if (isset($_REQUEST['program12_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 12, Date 7 Rate
if (isset($_REQUEST['program12_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 12, Date 8 Rate
if (isset($_REQUEST['program12_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 12, Date 9 Rate
if (isset($_REQUEST['program12_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 12, Date 10 Rate
if (isset($_REQUEST['program12_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 12, Date 11 Rate
if (isset($_REQUEST['program12_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 12, Date 12 Rate
if (isset($_REQUEST['program12_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 12, Date 13 Rate
if (isset($_REQUEST['program12_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 12, Date 14 Rate
if (isset($_REQUEST['program12_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 12, Date 15 Rate
if (isset($_REQUEST['program12_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 12, Date 16 Rate
if (isset($_REQUEST['program12_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 12, Date 17 Rate
if (isset($_REQUEST['program12_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 12, Date 18 Rate
if (isset($_REQUEST['program12_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 12, Date 19 Rate
if (isset($_REQUEST['program12_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 12, Date 20 Rate
if (isset($_REQUEST['program12_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 12, Date 21 Rate
if (isset($_REQUEST['program12_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 12, Date 22 Rate
if (isset($_REQUEST['program12_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 12, Date 23 Rate
if (isset($_REQUEST['program12_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 12, Date 24 Rate
if (isset($_REQUEST['program12_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=12 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program12_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 13
//Name
if ( isset($_REQUEST['program13'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=13";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program13']));
    header("Location: prod_volume.php");
}
//Program 13, Date 1 Rate
if (isset($_REQUEST['program13_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 13, Date 2 Rate
if (isset($_REQUEST['program13_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 13, Date 3 Rate
if (isset($_REQUEST['program13_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 13, Date 4 Rate
if (isset($_REQUEST['program13_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 13, Date 5 Rate
if (isset($_REQUEST['program13_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 13, Date 6 Rate
if (isset($_REQUEST['program13_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 13, Date 7 Rate
if (isset($_REQUEST['program13_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 13, Date 8 Rate
if (isset($_REQUEST['program13_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 13, Date 9 Rate
if (isset($_REQUEST['program13_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 13, Date 10 Rate
if (isset($_REQUEST['program13_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 13, Date 11 Rate
if (isset($_REQUEST['program13_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 13, Date 12 Rate
if (isset($_REQUEST['program13_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 13, Date 13 Rate
if (isset($_REQUEST['program13_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 13, Date 14 Rate
if (isset($_REQUEST['program13_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 13, Date 15 Rate
if (isset($_REQUEST['program13_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 13, Date 16 Rate
if (isset($_REQUEST['program13_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 13, Date 17 Rate
if (isset($_REQUEST['program13_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 13, Date 18 Rate
if (isset($_REQUEST['program13_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 13, Date 19 Rate
if (isset($_REQUEST['program13_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 13, Date 20 Rate
if (isset($_REQUEST['program13_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 13, Date 21 Rate
if (isset($_REQUEST['program13_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 13, Date 22 Rate
if (isset($_REQUEST['program13_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 13, Date 23 Rate
if (isset($_REQUEST['program13_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 13, Date 24 Rate
if (isset($_REQUEST['program13_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=13 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program13_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 14
//Name
if ( isset($_REQUEST['program14'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=14";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program14']));
    header("Location: prod_volume.php");
}
//Program 14, Date 1 Rate
if (isset($_REQUEST['program14_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 14, Date 2 Rate
if (isset($_REQUEST['program14_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 14, Date 3 Rate
if (isset($_REQUEST['program14_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 14, Date 4 Rate
if (isset($_REQUEST['program14_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 14, Date 5 Rate
if (isset($_REQUEST['program14_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 14, Date 6 Rate
if (isset($_REQUEST['program14_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 14, Date 7 Rate
if (isset($_REQUEST['program14_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 14, Date 8 Rate
if (isset($_REQUEST['program14_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 14, Date 9 Rate
if (isset($_REQUEST['program14_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 14, Date 10 Rate
if (isset($_REQUEST['program14_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 14, Date 11 Rate
if (isset($_REQUEST['program14_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 14, Date 12 Rate
if (isset($_REQUEST['program14_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 14, Date 13 Rate
if (isset($_REQUEST['program14_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 14, Date 14 Rate
if (isset($_REQUEST['program14_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 14, Date 15 Rate
if (isset($_REQUEST['program14_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 14, Date 16 Rate
if (isset($_REQUEST['program14_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 14, Date 17 Rate
if (isset($_REQUEST['program14_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 14, Date 18 Rate
if (isset($_REQUEST['program14_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 14, Date 19 Rate
if (isset($_REQUEST['program14_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 14, Date 20 Rate
if (isset($_REQUEST['program14_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 14, Date 21 Rate
if (isset($_REQUEST['program14_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 14, Date 22 Rate
if (isset($_REQUEST['program14_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 14, Date 23 Rate
if (isset($_REQUEST['program14_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 14, Date 24 Rate
if (isset($_REQUEST['program14_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=14 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program14_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 15
//Name
if ( isset($_REQUEST['program15'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=15";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program15']));
    header("Location: prod_volume.php");
}
//Program 15, Date 1 Rate
if (isset($_REQUEST['program15_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 15, Date 2 Rate
if (isset($_REQUEST['program15_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 15, Date 3 Rate
if (isset($_REQUEST['program15_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 15, Date 4 Rate
if (isset($_REQUEST['program15_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 15, Date 5 Rate
if (isset($_REQUEST['program15_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 15, Date 6 Rate
if (isset($_REQUEST['program15_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 15, Date 7 Rate
if (isset($_REQUEST['program15_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 15, Date 8 Rate
if (isset($_REQUEST['program15_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 15, Date 9 Rate
if (isset($_REQUEST['program15_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 15, Date 10 Rate
if (isset($_REQUEST['program15_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 15, Date 11 Rate
if (isset($_REQUEST['program15_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 15, Date 12 Rate
if (isset($_REQUEST['program15_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 15, Date 13 Rate
if (isset($_REQUEST['program15_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 15, Date 14 Rate
if (isset($_REQUEST['program15_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 15, Date 15 Rate
if (isset($_REQUEST['program15_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 15, Date 16 Rate
if (isset($_REQUEST['program15_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 15, Date 17 Rate
if (isset($_REQUEST['program15_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 15, Date 18 Rate
if (isset($_REQUEST['program15_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 15, Date 19 Rate
if (isset($_REQUEST['program15_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 15, Date 20 Rate
if (isset($_REQUEST['program15_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 15, Date 21 Rate
if (isset($_REQUEST['program15_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 15, Date 22 Rate
if (isset($_REQUEST['program15_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 15, Date 23 Rate
if (isset($_REQUEST['program15_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 15, Date 24 Rate
if (isset($_REQUEST['program15_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=15 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program15_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 16
//Name
if ( isset($_REQUEST['program16'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=16";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program16']));
    header("Location: prod_volume.php");
}
//Program 16, Date 1 Rate
if (isset($_REQUEST['program16_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 16, Date 2 Rate
if (isset($_REQUEST['program16_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 16, Date 3 Rate
if (isset($_REQUEST['program16_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 16, Date 4 Rate
if (isset($_REQUEST['program16_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 16, Date 5 Rate
if (isset($_REQUEST['program16_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 16, Date 6 Rate
if (isset($_REQUEST['program16_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 16, Date 7 Rate
if (isset($_REQUEST['program16_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 16, Date 8 Rate
if (isset($_REQUEST['program16_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 16, Date 9 Rate
if (isset($_REQUEST['program16_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 16, Date 10 Rate
if (isset($_REQUEST['program16_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 16, Date 11 Rate
if (isset($_REQUEST['program16_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 16, Date 12 Rate
if (isset($_REQUEST['program16_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 16, Date 13 Rate
if (isset($_REQUEST['program16_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 16, Date 14 Rate
if (isset($_REQUEST['program16_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 16, Date 15 Rate
if (isset($_REQUEST['program16_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 16, Date 16 Rate
if (isset($_REQUEST['program16_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 16, Date 17 Rate
if (isset($_REQUEST['program16_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 16, Date 18 Rate
if (isset($_REQUEST['program16_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 16, Date 19 Rate
if (isset($_REQUEST['program16_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 16, Date 20 Rate
if (isset($_REQUEST['program16_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 16, Date 21 Rate
if (isset($_REQUEST['program16_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 16, Date 22 Rate
if (isset($_REQUEST['program16_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 16, Date 23 Rate
if (isset($_REQUEST['program16_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 16, Date 24 Rate
if (isset($_REQUEST['program16_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=16 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program16_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 17
//Name
if ( isset($_REQUEST['program17'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=17";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program17']));
    header("Location: prod_volume.php");
}
//Program 17, Date 1 Rate
if (isset($_REQUEST['program17_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 17, Date 2 Rate
if (isset($_REQUEST['program17_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 17, Date 3 Rate
if (isset($_REQUEST['program17_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 17, Date 4 Rate
if (isset($_REQUEST['program17_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 17, Date 5 Rate
if (isset($_REQUEST['program17_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 17, Date 6 Rate
if (isset($_REQUEST['program17_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 17, Date 7 Rate
if (isset($_REQUEST['program17_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 17, Date 8 Rate
if (isset($_REQUEST['program17_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 17, Date 9 Rate
if (isset($_REQUEST['program17_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 17, Date 10 Rate
if (isset($_REQUEST['program17_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 17, Date 11 Rate
if (isset($_REQUEST['program17_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 17, Date 12 Rate
if (isset($_REQUEST['program17_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}

//Program 17, Date 13 Rate
if (isset($_REQUEST['program17_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 17, Date 14 Rate
if (isset($_REQUEST['program17_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 17, Date 15 Rate
if (isset($_REQUEST['program17_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 17, Date 16 Rate
if (isset($_REQUEST['program17_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 17, Date 17 Rate
if (isset($_REQUEST['program17_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 17, Date 18 Rate
if (isset($_REQUEST['program17_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 17, Date 19 Rate
if (isset($_REQUEST['program17_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 17, Date 20 Rate
if (isset($_REQUEST['program17_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 17, Date 21 Rate
if (isset($_REQUEST['program17_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 17, Date 22 Rate
if (isset($_REQUEST['program17_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 17, Date 23 Rate
if (isset($_REQUEST['program17_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 17, Date 24 Rate
if (isset($_REQUEST['program17_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=17 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program17_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 18
//Name
if ( isset($_REQUEST['program18'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=18";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program18']));
    header("Location: prod_volume.php");
}
//Program 18, Date 1 Rate
if (isset($_REQUEST['program18_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 18, Date 2 Rate
if (isset($_REQUEST['program18_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 18, Date 3 Rate
if (isset($_REQUEST['program18_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 18, Date 4 Rate
if (isset($_REQUEST['program18_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 18, Date 5 Rate
if (isset($_REQUEST['program18_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 18, Date 6 Rate
if (isset($_REQUEST['program18_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 18, Date 7 Rate
if (isset($_REQUEST['program18_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 18, Date 8 Rate
if (isset($_REQUEST['program18_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 18, Date 9 Rate
if (isset($_REQUEST['program18_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 18, Date 10 Rate
if (isset($_REQUEST['program18_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 18, Date 11 Rate
if (isset($_REQUEST['program18_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 18, Date 12 Rate
if (isset($_REQUEST['program18_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 18, Date 13 Rate
if (isset($_REQUEST['program18_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 18, Date 14 Rate
if (isset($_REQUEST['program18_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 18, Date 15 Rate
if (isset($_REQUEST['program18_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 18, Date 16 Rate
if (isset($_REQUEST['program18_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 18, Date 17 Rate
if (isset($_REQUEST['program18_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 18, Date 18 Rate
if (isset($_REQUEST['program18_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 18, Date 19 Rate
if (isset($_REQUEST['program18_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 18, Date 20 Rate
if (isset($_REQUEST['program18_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 18, Date 21 Rate
if (isset($_REQUEST['program18_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 18, Date 22 Rate
if (isset($_REQUEST['program18_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 18, Date 23 Rate
if (isset($_REQUEST['program18_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 18, Date 24 Rate
if (isset($_REQUEST['program18_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=18 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program18_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 19
//Name
if ( isset($_REQUEST['program19'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=19";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program19']));
    header("Location: prod_volume.php");
}
//Program 19, Date 1 Rate
if (isset($_REQUEST['program19_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 19, Date 2 Rate
if (isset($_REQUEST['program19_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 19, Date 3 Rate
if (isset($_REQUEST['program19_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 19, Date 4 Rate
if (isset($_REQUEST['program19_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 19, Date 5 Rate
if (isset($_REQUEST['program19_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 19, Date 6 Rate
if (isset($_REQUEST['program19_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 19, Date 7 Rate
if (isset($_REQUEST['program19_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 19, Date 8 Rate
if (isset($_REQUEST['program19_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 19, Date 9 Rate
if (isset($_REQUEST['program19_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 19, Date 10 Rate
if (isset($_REQUEST['program19_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 19, Date 11 Rate
if (isset($_REQUEST['program19_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 19, Date 12 Rate
if (isset($_REQUEST['program19_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 19, Date 13 Rate
if (isset($_REQUEST['program19_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 19, Date 14 Rate
if (isset($_REQUEST['program19_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 19, Date 15 Rate
if (isset($_REQUEST['program19_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 19, Date 16 Rate
if (isset($_REQUEST['program19_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 19, Date 17 Rate
if (isset($_REQUEST['program19_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 19, Date 18 Rate
if (isset($_REQUEST['program19_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 19, Date 19 Rate
if (isset($_REQUEST['program19_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 19, Date 20 Rate
if (isset($_REQUEST['program19_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 19, Date 21 Rate
if (isset($_REQUEST['program19_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 19, Date 22 Rate
if (isset($_REQUEST['program19_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 19, Date 23 Rate
if (isset($_REQUEST['program19_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 19, Date 24 Rate
if (isset($_REQUEST['program19_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=19 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program19_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 20
//Name
if ( isset($_REQUEST['program20'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=20";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program20']));
    header("Location: prod_volume.php");
}
//Program 20, Date 1 Rate
if (isset($_REQUEST['program20_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 20, Date 2 Rate
if (isset($_REQUEST['program20_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 20, Date 3 Rate
if (isset($_REQUEST['program20_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 20, Date 4 Rate
if (isset($_REQUEST['program20_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 20, Date 5 Rate
if (isset($_REQUEST['program20_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 20, Date 6 Rate
if (isset($_REQUEST['program20_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 20, Date 7 Rate
if (isset($_REQUEST['program20_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 20, Date 8 Rate
if (isset($_REQUEST['program20_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 20, Date 9 Rate
if (isset($_REQUEST['program20_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 20, Date 10 Rate
if (isset($_REQUEST['program20_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 20, Date 11 Rate
if (isset($_REQUEST['program20_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 20, Date 12 Rate
if (isset($_REQUEST['program20_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 20, Date 13 Rate
if (isset($_REQUEST['program20_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 20, Date 14 Rate
if (isset($_REQUEST['program20_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 20, Date 15 Rate
if (isset($_REQUEST['program20_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 20, Date 16 Rate
if (isset($_REQUEST['program20_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 20, Date 17 Rate
if (isset($_REQUEST['program20_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 20, Date 18 Rate
if (isset($_REQUEST['program20_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 20, Date 19 Rate
if (isset($_REQUEST['program20_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 20, Date 20 Rate
if (isset($_REQUEST['program20_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 20, Date 21 Rate
if (isset($_REQUEST['program20_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 20, Date 22 Rate
if (isset($_REQUEST['program20_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 20, Date 23 Rate
if (isset($_REQUEST['program20_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 20, Date 24 Rate
if (isset($_REQUEST['program20_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=20 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program20_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 21
//Name
if ( isset($_REQUEST['program21'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=21";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program21']));
    header("Location: prod_volume.php");
}
//Program 21, Date 1 Rate
if (isset($_REQUEST['program21_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 21, Date 2 Rate
if (isset($_REQUEST['program21_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 21, Date 3 Rate
if (isset($_REQUEST['program21_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 21, Date 4 Rate
if (isset($_REQUEST['program21_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 21, Date 5 Rate
if (isset($_REQUEST['program21_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 21, Date 6 Rate
if (isset($_REQUEST['program21_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 21, Date 7 Rate
if (isset($_REQUEST['program21_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 21, Date 8 Rate
if (isset($_REQUEST['program21_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 21, Date 9 Rate
if (isset($_REQUEST['program21_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 21, Date 10 Rate
if (isset($_REQUEST['program21_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 21, Date 11 Rate
if (isset($_REQUEST['program21_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 21, Date 12 Rate
if (isset($_REQUEST['program21_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 21, Date 13 Rate
if (isset($_REQUEST['program21_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 21, Date 14 Rate
if (isset($_REQUEST['program21_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 21, Date 15 Rate
if (isset($_REQUEST['program21_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 21, Date 16 Rate
if (isset($_REQUEST['program21_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 21, Date 17 Rate
if (isset($_REQUEST['program21_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 21, Date 18 Rate
if (isset($_REQUEST['program21_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 21, Date 19 Rate
if (isset($_REQUEST['program21_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 21, Date 20 Rate
if (isset($_REQUEST['program21_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 21, Date 21 Rate
if (isset($_REQUEST['program21_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 21, Date 22 Rate
if (isset($_REQUEST['program21_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 21, Date 23 Rate
if (isset($_REQUEST['program21_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 21, Date 24 Rate
if (isset($_REQUEST['program21_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=21 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program21_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 22
//Name
if ( isset($_REQUEST['program22'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=22";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program22']));
    header("Location: prod_volume.php");
}
//Program 22, Date 1 Rate
if (isset($_REQUEST['program22_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 22, Date 2 Rate
if (isset($_REQUEST['program22_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 22, Date 3 Rate
if (isset($_REQUEST['program22_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 22, Date 4 Rate
if (isset($_REQUEST['program22_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 22, Date 5 Rate
if (isset($_REQUEST['program22_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 22, Date 6 Rate
if (isset($_REQUEST['program22_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 22, Date 7 Rate
if (isset($_REQUEST['program22_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 22, Date 8 Rate
if (isset($_REQUEST['program22_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 22, Date 9 Rate
if (isset($_REQUEST['program22_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 22, Date 10 Rate
if (isset($_REQUEST['program22_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 22, Date 11 Rate
if (isset($_REQUEST['program22_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 22, Date 12 Rate
if (isset($_REQUEST['program22_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 22, Date 13 Rate
if (isset($_REQUEST['program22_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 22, Date 14 Rate
if (isset($_REQUEST['program22_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 22, Date 15 Rate
if (isset($_REQUEST['program22_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 22, Date 16 Rate
if (isset($_REQUEST['program22_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 22, Date 17 Rate
if (isset($_REQUEST['program22_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 22, Date 18 Rate
if (isset($_REQUEST['program22_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 22, Date 19 Rate
if (isset($_REQUEST['program22_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 22, Date 20 Rate
if (isset($_REQUEST['program22_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 22, Date 21 Rate
if (isset($_REQUEST['program22_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 22, Date 22 Rate
if (isset($_REQUEST['program22_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 22, Date 23 Rate
if (isset($_REQUEST['program22_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 22, Date 24 Rate
if (isset($_REQUEST['program22_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=22 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program22_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 23
//Name
if ( isset($_REQUEST['program23'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=23";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program23']));
    header("Location: prod_volume.php");
}
//Program 23, Date 1 Rate
if (isset($_REQUEST['program23_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 23, Date 2 Rate
if (isset($_REQUEST['program23_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 23, Date 3 Rate
if (isset($_REQUEST['program23_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 23, Date 4 Rate
if (isset($_REQUEST['program23_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 23, Date 5 Rate
if (isset($_REQUEST['program23_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 23, Date 6 Rate
if (isset($_REQUEST['program23_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 23, Date 7 Rate
if (isset($_REQUEST['program23_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 23, Date 8 Rate
if (isset($_REQUEST['program23_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 23, Date 9 Rate
if (isset($_REQUEST['program23_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 23, Date 10 Rate
if (isset($_REQUEST['program23_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 23, Date 11 Rate
if (isset($_REQUEST['program23_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 23, Date 12 Rate
if (isset($_REQUEST['program23_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 23, Date 13 Rate
if (isset($_REQUEST['program23_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 23, Date 14 Rate
if (isset($_REQUEST['program23_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 23, Date 15 Rate
if (isset($_REQUEST['program23_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 23, Date 16 Rate
if (isset($_REQUEST['program23_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 23, Date 17 Rate
if (isset($_REQUEST['program23_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 23, Date 18 Rate
if (isset($_REQUEST['program23_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 23, Date 19 Rate
if (isset($_REQUEST['program23_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 23, Date 20 Rate
if (isset($_REQUEST['program23_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 23, Date 21 Rate
if (isset($_REQUEST['program23_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 23, Date 22 Rate
if (isset($_REQUEST['program23_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 23, Date 23 Rate
if (isset($_REQUEST['program23_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 23, Date 24 Rate
if (isset($_REQUEST['program23_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=23 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program23_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 24
//Name
if ( isset($_REQUEST['program24'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=24";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program24']));
    header("Location: prod_volume.php");
}
//Program 24, Date 1 Rate
if (isset($_REQUEST['program24_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 24, Date 2 Rate
if (isset($_REQUEST['program24_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 24, Date 3 Rate
if (isset($_REQUEST['program24_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 24, Date 4 Rate
if (isset($_REQUEST['program24_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 24, Date 5 Rate
if (isset($_REQUEST['program24_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 24, Date 6 Rate
if (isset($_REQUEST['program24_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 24, Date 7 Rate
if (isset($_REQUEST['program24_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 24, Date 8 Rate
if (isset($_REQUEST['program24_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 24, Date 9 Rate
if (isset($_REQUEST['program24_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 24, Date 10 Rate
if (isset($_REQUEST['program24_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 24, Date 11 Rate
if (isset($_REQUEST['program24_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 24, Date 12 Rate
if (isset($_REQUEST['program24_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 24, Date 13 Rate
if (isset($_REQUEST['program24_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 24, Date 14 Rate
if (isset($_REQUEST['program24_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 24, Date 15 Rate
if (isset($_REQUEST['program24_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 24, Date 16 Rate
if (isset($_REQUEST['program24_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 24, Date 17 Rate
if (isset($_REQUEST['program24_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 24, Date 18 Rate
if (isset($_REQUEST['program24_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 24, Date 19 Rate
if (isset($_REQUEST['program24_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 24, Date 20 Rate
if (isset($_REQUEST['program24_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 24, Date 21 Rate
if (isset($_REQUEST['program24_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 24, Date 22 Rate
if (isset($_REQUEST['program24_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 24, Date 23 Rate
if (isset($_REQUEST['program24_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 24, Date 24 Rate
if (isset($_REQUEST['program24_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=24 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program24_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 25
//Name
if ( isset($_REQUEST['program25'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=25";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program25']));
    header("Location: prod_volume.php");
}
//Program 25, Date 1 Rate
if (isset($_REQUEST['program25_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 25, Date 2 Rate
if (isset($_REQUEST['program25_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 25, Date 3 Rate
if (isset($_REQUEST['program25_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 25, Date 4 Rate
if (isset($_REQUEST['program25_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 25, Date 5 Rate
if (isset($_REQUEST['program25_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 25, Date 6 Rate
if (isset($_REQUEST['program25_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 25, Date 7 Rate
if (isset($_REQUEST['program25_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 25, Date 8 Rate
if (isset($_REQUEST['program25_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 25, Date 9 Rate
if (isset($_REQUEST['program25_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 25, Date 10 Rate
if (isset($_REQUEST['program25_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 25, Date 11 Rate
if (isset($_REQUEST['program25_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 25, Date 12 Rate
if (isset($_REQUEST['program25_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 25, Date 13 Rate
if (isset($_REQUEST['program25_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 25, Date 14 Rate
if (isset($_REQUEST['program25_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 25, Date 15 Rate
if (isset($_REQUEST['program25_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 25, Date 16 Rate
if (isset($_REQUEST['program25_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 25, Date 17 Rate
if (isset($_REQUEST['program25_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 25, Date 18 Rate
if (isset($_REQUEST['program25_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 25, Date 19 Rate
if (isset($_REQUEST['program25_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 25, Date 20 Rate
if (isset($_REQUEST['program25_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 25, Date 21 Rate
if (isset($_REQUEST['program25_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 25, Date 22 Rate
if (isset($_REQUEST['program25_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 25, Date 23 Rate
if (isset($_REQUEST['program25_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 25, Date 24 Rate
if (isset($_REQUEST['program25_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=25 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program25_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 26
//Name
if ( isset($_REQUEST['program26'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=26";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program26']));
    header("Location: prod_volume.php");
}
//Program 26, Date 1 Rate
if (isset($_REQUEST['program26_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 26, Date 2 Rate
if (isset($_REQUEST['program26_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 26, Date 3 Rate
if (isset($_REQUEST['program26_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 26, Date 4 Rate
if (isset($_REQUEST['program26_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 26, Date 5 Rate
if (isset($_REQUEST['program26_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 26, Date 6 Rate
if (isset($_REQUEST['program26_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 26, Date 7 Rate
if (isset($_REQUEST['program26_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 26, Date 8 Rate
if (isset($_REQUEST['program26_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 26, Date 9 Rate
if (isset($_REQUEST['program26_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 26, Date 10 Rate
if (isset($_REQUEST['program26_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 26, Date 11 Rate
if (isset($_REQUEST['program26_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 26, Date 12 Rate
if (isset($_REQUEST['program26_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 26, Date 13 Rate
if (isset($_REQUEST['program26_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 26, Date 14 Rate
if (isset($_REQUEST['program26_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 26, Date 15 Rate
if (isset($_REQUEST['program26_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 26, Date 16 Rate
if (isset($_REQUEST['program26_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 26, Date 17 Rate
if (isset($_REQUEST['program26_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 26, Date 18 Rate
if (isset($_REQUEST['program26_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 26, Date 19 Rate
if (isset($_REQUEST['program26_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 26, Date 20 Rate
if (isset($_REQUEST['program26_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 26, Date 21 Rate
if (isset($_REQUEST['program26_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 26, Date 22 Rate
if (isset($_REQUEST['program26_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 26, Date 23 Rate
if (isset($_REQUEST['program26_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 26, Date 24 Rate
if (isset($_REQUEST['program26_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=26 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program26_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 27
//Name
if ( isset($_REQUEST['program27'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=27";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program27']));
    header("Location: prod_volume.php");
}
//Program 27, Date 1 Rate
if (isset($_REQUEST['program27_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 27, Date 2 Rate
if (isset($_REQUEST['program27_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 27, Date 3 Rate
if (isset($_REQUEST['program27_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 27, Date 4 Rate
if (isset($_REQUEST['program27_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 27, Date 5 Rate
if (isset($_REQUEST['program27_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 27, Date 6 Rate
if (isset($_REQUEST['program27_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 27, Date 7 Rate
if (isset($_REQUEST['program27_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 27, Date 8 Rate
if (isset($_REQUEST['program27_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 27, Date 9 Rate
if (isset($_REQUEST['program27_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 27, Date 10 Rate
if (isset($_REQUEST['program27_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 27, Date 11 Rate
if (isset($_REQUEST['program27_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 27, Date 12 Rate
if (isset($_REQUEST['program27_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 27, Date 13 Rate
if (isset($_REQUEST['program27_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 27, Date 14 Rate
if (isset($_REQUEST['program27_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 27, Date 15 Rate
if (isset($_REQUEST['program27_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 27, Date 16 Rate
if (isset($_REQUEST['program27_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 27, Date 17 Rate
if (isset($_REQUEST['program27_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 27, Date 18 Rate
if (isset($_REQUEST['program27_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 27, Date 19 Rate
if (isset($_REQUEST['program27_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 27, Date 20 Rate
if (isset($_REQUEST['program27_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 27, Date 21 Rate
if (isset($_REQUEST['program27_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 27, Date 22 Rate
if (isset($_REQUEST['program27_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 27, Date 23 Rate
if (isset($_REQUEST['program27_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 27, Date 24 Rate
if (isset($_REQUEST['program27_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=27 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program27_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 28
//Name
if ( isset($_REQUEST['program28'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=28";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program28']));
    header("Location: prod_volume.php");
}
//Program 28, Date 1 Rate
if (isset($_REQUEST['program28_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 28, Date 2 Rate
if (isset($_REQUEST['program28_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 28, Date 3 Rate
if (isset($_REQUEST['program28_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 28, Date 4 Rate
if (isset($_REQUEST['program28_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 28, Date 5 Rate
if (isset($_REQUEST['program28_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 28, Date 6 Rate
if (isset($_REQUEST['program28_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 28, Date 7 Rate
if (isset($_REQUEST['program28_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 28, Date 8 Rate
if (isset($_REQUEST['program28_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 28, Date 9 Rate
if (isset($_REQUEST['program28_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 28, Date 10 Rate
if (isset($_REQUEST['program28_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 28, Date 11 Rate
if (isset($_REQUEST['program28_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 28, Date 12 Rate
if (isset($_REQUEST['program28_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 28, Date 13 Rate
if (isset($_REQUEST['program28_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 28, Date 14 Rate
if (isset($_REQUEST['program28_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 28, Date 15 Rate
if (isset($_REQUEST['program28_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 28, Date 16 Rate
if (isset($_REQUEST['program28_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 28, Date 17 Rate
if (isset($_REQUEST['program28_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 28, Date 18 Rate
if (isset($_REQUEST['program28_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 28, Date 19 Rate
if (isset($_REQUEST['program28_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 28, Date 20 Rate
if (isset($_REQUEST['program28_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 28, Date 21 Rate
if (isset($_REQUEST['program28_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 28, Date 22 Rate
if (isset($_REQUEST['program28_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 28, Date 23 Rate
if (isset($_REQUEST['program28_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 28, Date 24 Rate
if (isset($_REQUEST['program28_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=28 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program28_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 29
//Name
if ( isset($_REQUEST['program29'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=29";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program29']));
    header("Location: prod_volume.php");
}
//Program 29, Date 1 Rate
if (isset($_REQUEST['program29_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 29, Date 2 Rate
if (isset($_REQUEST['program29_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 29, Date 3 Rate
if (isset($_REQUEST['program29_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 29, Date 4 Rate
if (isset($_REQUEST['program29_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 29, Date 5 Rate
if (isset($_REQUEST['program29_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 29, Date 6 Rate
if (isset($_REQUEST['program29_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 29, Date 7 Rate
if (isset($_REQUEST['program29_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 29, Date 8 Rate
if (isset($_REQUEST['program29_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 29, Date 9 Rate
if (isset($_REQUEST['program29_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 29, Date 10 Rate
if (isset($_REQUEST['program29_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 29, Date 11 Rate
if (isset($_REQUEST['program29_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 29, Date 12 Rate
if (isset($_REQUEST['program29_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 29, Date 13 Rate
if (isset($_REQUEST['program29_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 29, Date 14 Rate
if (isset($_REQUEST['program29_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 29, Date 15 Rate
if (isset($_REQUEST['program29_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 29, Date 16 Rate
if (isset($_REQUEST['program29_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 29, Date 17 Rate
if (isset($_REQUEST['program29_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 29, Date 18 Rate
if (isset($_REQUEST['program29_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 29, Date 19 Rate
if (isset($_REQUEST['program29_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 29, Date 20 Rate
if (isset($_REQUEST['program29_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 29, Date 21 Rate
if (isset($_REQUEST['program29_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 29, Date 22 Rate
if (isset($_REQUEST['program29_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 29, Date 23 Rate
if (isset($_REQUEST['program29_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 29, Date 24 Rate
if (isset($_REQUEST['program29_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=29 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program29_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 30
//Name
if ( isset($_REQUEST['program30'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=30";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program30']));
    header("Location: prod_volume.php");
}
//Program 30, Date 1 Rate
if (isset($_REQUEST['program30_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 30, Date 2 Rate
if (isset($_REQUEST['program30_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 30, Date 3 Rate
if (isset($_REQUEST['program30_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 30, Date 4 Rate
if (isset($_REQUEST['program30_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 30, Date 5 Rate
if (isset($_REQUEST['program30_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 30, Date 6 Rate
if (isset($_REQUEST['program30_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 30, Date 7 Rate
if (isset($_REQUEST['program30_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 30, Date 8 Rate
if (isset($_REQUEST['program30_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 30, Date 9 Rate
if (isset($_REQUEST['program30_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 30, Date 10 Rate
if (isset($_REQUEST['program30_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 30, Date 11 Rate
if (isset($_REQUEST['program30_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 30, Date 12 Rate
if (isset($_REQUEST['program30_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 30, Date 13 Rate
if (isset($_REQUEST['program30_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 30, Date 14 Rate
if (isset($_REQUEST['program30_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 30, Date 15 Rate
if (isset($_REQUEST['program30_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 30, Date 16 Rate
if (isset($_REQUEST['program30_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 30, Date 17 Rate
if (isset($_REQUEST['program30_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 30, Date 18 Rate
if (isset($_REQUEST['program30_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 30, Date 19 Rate
if (isset($_REQUEST['program30_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 30, Date 20 Rate
if (isset($_REQUEST['program30_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 30, Date 21 Rate
if (isset($_REQUEST['program30_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 30, Date 22 Rate
if (isset($_REQUEST['program30_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 30, Date 23 Rate
if (isset($_REQUEST['program30_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 30, Date 24 Rate
if (isset($_REQUEST['program30_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=30 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program30_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 31
//Name
if ( isset($_REQUEST['program31'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=31";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program31']));
    header("Location: prod_volume.php");
}
//Program 31, Date 1 Rate
if (isset($_REQUEST['program31_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 31, Date 2 Rate
if (isset($_REQUEST['program31_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 31, Date 3 Rate
if (isset($_REQUEST['program31_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 31, Date 4 Rate
if (isset($_REQUEST['program31_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 31, Date 5 Rate
if (isset($_REQUEST['program31_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 31, Date 6 Rate
if (isset($_REQUEST['program31_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 31, Date 7 Rate
if (isset($_REQUEST['program31_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 31, Date 8 Rate
if (isset($_REQUEST['program31_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 31, Date 9 Rate
if (isset($_REQUEST['program31_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 31, Date 10 Rate
if (isset($_REQUEST['program31_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 31, Date 11 Rate
if (isset($_REQUEST['program31_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 31, Date 12 Rate
if (isset($_REQUEST['program31_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 31, Date 13 Rate
if (isset($_REQUEST['program31_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 31, Date 14 Rate
if (isset($_REQUEST['program31_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 31, Date 15 Rate
if (isset($_REQUEST['program31_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 31, Date 16 Rate
if (isset($_REQUEST['program31_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 31, Date 17 Rate
if (isset($_REQUEST['program31_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 31, Date 18 Rate
if (isset($_REQUEST['program31_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 31, Date 19 Rate
if (isset($_REQUEST['program31_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 31, Date 20 Rate
if (isset($_REQUEST['program31_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 31, Date 21 Rate
if (isset($_REQUEST['program31_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 31, Date 22 Rate
if (isset($_REQUEST['program31_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 31, Date 23 Rate
if (isset($_REQUEST['program31_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 31, Date 24 Rate
if (isset($_REQUEST['program31_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=31 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program31_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 32
//Name
if ( isset($_REQUEST['program32'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=32";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program32']));
    header("Location: prod_volume.php");
}
//Program 32, Date 1 Rate
if (isset($_REQUEST['program32_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 32, Date 2 Rate
if (isset($_REQUEST['program32_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 32, Date 3 Rate
if (isset($_REQUEST['program32_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 32, Date 4 Rate
if (isset($_REQUEST['program32_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 32, Date 5 Rate
if (isset($_REQUEST['program32_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 32, Date 6 Rate
if (isset($_REQUEST['program32_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 32, Date 7 Rate
if (isset($_REQUEST['program32_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 32, Date 8 Rate
if (isset($_REQUEST['program32_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 32, Date 9 Rate
if (isset($_REQUEST['program32_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 32, Date 10 Rate
if (isset($_REQUEST['program32_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 32, Date 11 Rate
if (isset($_REQUEST['program32_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 32, Date 12 Rate
if (isset($_REQUEST['program32_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 32, Date 13 Rate
if (isset($_REQUEST['program32_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 32, Date 14 Rate
if (isset($_REQUEST['program32_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 32, Date 15 Rate
if (isset($_REQUEST['program32_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 32, Date 16 Rate
if (isset($_REQUEST['program32_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 32, Date 17 Rate
if (isset($_REQUEST['program32_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 32, Date 18 Rate
if (isset($_REQUEST['program32_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 32, Date 19 Rate
if (isset($_REQUEST['program32_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 32, Date 20 Rate
if (isset($_REQUEST['program32_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 32, Date 21 Rate
if (isset($_REQUEST['program32_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 32, Date 22 Rate
if (isset($_REQUEST['program32_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 32, Date 23 Rate
if (isset($_REQUEST['program32_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 32, Date 24 Rate
if (isset($_REQUEST['program32_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=32 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program32_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 33
//Name
if ( isset($_REQUEST['program33'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=33";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program33']));
    header("Location: prod_volume.php");
}
//Program 33, Date 1 Rate
if (isset($_REQUEST['program33_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 33, Date 2 Rate
if (isset($_REQUEST['program33_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 33, Date 3 Rate
if (isset($_REQUEST['program33_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 33, Date 4 Rate
if (isset($_REQUEST['program33_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 33, Date 5 Rate
if (isset($_REQUEST['program33_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 33, Date 6 Rate
if (isset($_REQUEST['program33_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 33, Date 7 Rate
if (isset($_REQUEST['program33_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 33, Date 8 Rate
if (isset($_REQUEST['program33_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 33, Date 9 Rate
if (isset($_REQUEST['program33_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 33, Date 10 Rate
if (isset($_REQUEST['program33_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 33, Date 11 Rate
if (isset($_REQUEST['program33_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 33, Date 12 Rate
if (isset($_REQUEST['program33_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 33, Date 13 Rate
if (isset($_REQUEST['program33_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 33, Date 14 Rate
if (isset($_REQUEST['program33_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 33, Date 15 Rate
if (isset($_REQUEST['program33_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 33, Date 16 Rate
if (isset($_REQUEST['program33_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 33, Date 17 Rate
if (isset($_REQUEST['program33_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 33, Date 18 Rate
if (isset($_REQUEST['program33_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 33, Date 19 Rate
if (isset($_REQUEST['program33_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 33, Date 20 Rate
if (isset($_REQUEST['program33_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 33, Date 21 Rate
if (isset($_REQUEST['program33_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 33, Date 22 Rate
if (isset($_REQUEST['program33_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 33, Date 23 Rate
if (isset($_REQUEST['program33_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 33, Date 24 Rate
if (isset($_REQUEST['program33_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=33 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program33_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 34
//Name
if ( isset($_REQUEST['program34'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=34";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program34']));
    header("Location: prod_volume.php");
}
//Program 34, Date 1 Rate
if (isset($_REQUEST['program34_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 34, Date 2 Rate
if (isset($_REQUEST['program34_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 34, Date 3 Rate
if (isset($_REQUEST['program34_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 34, Date 4 Rate
if (isset($_REQUEST['program34_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 34, Date 5 Rate
if (isset($_REQUEST['program34_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 34, Date 6 Rate
if (isset($_REQUEST['program34_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 34, Date 7 Rate
if (isset($_REQUEST['program34_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 34, Date 8 Rate
if (isset($_REQUEST['program34_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 34, Date 9 Rate
if (isset($_REQUEST['program34_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 34, Date 10 Rate
if (isset($_REQUEST['program34_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 34, Date 11 Rate
if (isset($_REQUEST['program34_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 34, Date 12 Rate
if (isset($_REQUEST['program34_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 34, Date 13 Rate
if (isset($_REQUEST['program34_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 34, Date 14 Rate
if (isset($_REQUEST['program34_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 34, Date 15 Rate
if (isset($_REQUEST['program34_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 34, Date 16 Rate
if (isset($_REQUEST['program34_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 34, Date 17 Rate
if (isset($_REQUEST['program34_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 34, Date 18 Rate
if (isset($_REQUEST['program34_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 34, Date 19 Rate
if (isset($_REQUEST['program34_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 34, Date 20 Rate
if (isset($_REQUEST['program34_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 34, Date 21 Rate
if (isset($_REQUEST['program34_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 34, Date 22 Rate
if (isset($_REQUEST['program34_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 34, Date 23 Rate
if (isset($_REQUEST['program34_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 34, Date 24 Rate
if (isset($_REQUEST['program34_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=34 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program34_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 35
//Name
if ( isset($_REQUEST['program35'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=35";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program35']));
    header("Location: prod_volume.php");
}
//Program 35, Date 1 Rate
if (isset($_REQUEST['program35_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 35, Date 2 Rate
if (isset($_REQUEST['program35_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 35, Date 3 Rate
if (isset($_REQUEST['program35_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 35, Date 4 Rate
if (isset($_REQUEST['program35_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 35, Date 5 Rate
if (isset($_REQUEST['program35_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 35, Date 6 Rate
if (isset($_REQUEST['program35_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 35, Date 7 Rate
if (isset($_REQUEST['program35_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 35, Date 8 Rate
if (isset($_REQUEST['program35_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 35, Date 9 Rate
if (isset($_REQUEST['program35_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 35, Date 10 Rate
if (isset($_REQUEST['program35_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 35, Date 11 Rate
if (isset($_REQUEST['program35_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 35, Date 12 Rate
if (isset($_REQUEST['program35_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 35, Date 13 Rate
if (isset($_REQUEST['program35_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 35, Date 14 Rate
if (isset($_REQUEST['program35_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 35, Date 15 Rate
if (isset($_REQUEST['program35_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 35, Date 16 Rate
if (isset($_REQUEST['program35_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 35, Date 17 Rate
if (isset($_REQUEST['program35_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 35, Date 18 Rate
if (isset($_REQUEST['program35_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 35, Date 19 Rate
if (isset($_REQUEST['program35_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 35, Date 20 Rate
if (isset($_REQUEST['program35_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 35, Date 21 Rate
if (isset($_REQUEST['program35_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 35, Date 22 Rate
if (isset($_REQUEST['program35_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 35, Date 23 Rate
if (isset($_REQUEST['program35_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 35, Date 24 Rate
if (isset($_REQUEST['program35_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=35 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program35_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 36
//Name
if ( isset($_REQUEST['program36'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=36";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program36']));
    header("Location: prod_volume.php");
}
//Program 36, Date 1 Rate
if (isset($_REQUEST['program36_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 36, Date 2 Rate
if (isset($_REQUEST['program36_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 36, Date 3 Rate
if (isset($_REQUEST['program36_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 36, Date 4 Rate
if (isset($_REQUEST['program36_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 36, Date 5 Rate
if (isset($_REQUEST['program36_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 36, Date 6 Rate
if (isset($_REQUEST['program36_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 36, Date 7 Rate
if (isset($_REQUEST['program36_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 36, Date 8 Rate
if (isset($_REQUEST['program36_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 36, Date 9 Rate
if (isset($_REQUEST['program36_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 36, Date 10 Rate
if (isset($_REQUEST['program36_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 36, Date 11 Rate
if (isset($_REQUEST['program36_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 36, Date 12 Rate
if (isset($_REQUEST['program36_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 36, Date 13 Rate
if (isset($_REQUEST['program36_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 36, Date 14 Rate
if (isset($_REQUEST['program36_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 36, Date 15 Rate
if (isset($_REQUEST['program36_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 36, Date 16 Rate
if (isset($_REQUEST['program36_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 36, Date 17 Rate
if (isset($_REQUEST['program36_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 36, Date 18 Rate
if (isset($_REQUEST['program36_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 36, Date 19 Rate
if (isset($_REQUEST['program36_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 36, Date 20 Rate
if (isset($_REQUEST['program36_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 36, Date 21 Rate
if (isset($_REQUEST['program36_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 36, Date 22 Rate
if (isset($_REQUEST['program36_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 36, Date 23 Rate
if (isset($_REQUEST['program36_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 36, Date 24 Rate
if (isset($_REQUEST['program36_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=36 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program36_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 37
//Name
if ( isset($_REQUEST['program37'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=37";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program37']));
    header("Location: prod_volume.php");
}
//Program 37, Date 1 Rate
if (isset($_REQUEST['program37_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 37, Date 2 Rate
if (isset($_REQUEST['program37_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 37, Date 3 Rate
if (isset($_REQUEST['program37_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 37, Date 4 Rate
if (isset($_REQUEST['program37_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 37, Date 5 Rate
if (isset($_REQUEST['program37_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 37, Date 6 Rate
if (isset($_REQUEST['program37_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 37, Date 7 Rate
if (isset($_REQUEST['program37_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 37, Date 8 Rate
if (isset($_REQUEST['program37_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 37, Date 9 Rate
if (isset($_REQUEST['program37_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 37, Date 10 Rate
if (isset($_REQUEST['program37_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 37, Date 11 Rate
if (isset($_REQUEST['program37_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 37, Date 12 Rate
if (isset($_REQUEST['program37_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 37, Date 13 Rate
if (isset($_REQUEST['program37_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 37, Date 14 Rate
if (isset($_REQUEST['program37_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 37, Date 15 Rate
if (isset($_REQUEST['program37_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 37, Date 16 Rate
if (isset($_REQUEST['program37_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 37, Date 17 Rate
if (isset($_REQUEST['program37_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 37, Date 18 Rate
if (isset($_REQUEST['program37_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 37, Date 19 Rate
if (isset($_REQUEST['program37_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 37, Date 20 Rate
if (isset($_REQUEST['program37_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 37, Date 21 Rate
if (isset($_REQUEST['program37_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 37, Date 22 Rate
if (isset($_REQUEST['program37_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 37, Date 23 Rate
if (isset($_REQUEST['program37_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 37, Date 24 Rate
if (isset($_REQUEST['program37_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=37 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program37_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 38
//Name
if ( isset($_REQUEST['program38'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=38";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program38']));
    header("Location: prod_volume.php");
}
//Program 38, Date 1 Rate
if (isset($_REQUEST['program38_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 38, Date 2 Rate
if (isset($_REQUEST['program38_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 38, Date 3 Rate
if (isset($_REQUEST['program38_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 38, Date 4 Rate
if (isset($_REQUEST['program38_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 38, Date 5 Rate
if (isset($_REQUEST['program38_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 38, Date 6 Rate
if (isset($_REQUEST['program38_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 38, Date 7 Rate
if (isset($_REQUEST['program38_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 38, Date 8 Rate
if (isset($_REQUEST['program38_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 38, Date 9 Rate
if (isset($_REQUEST['program38_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 38, Date 10 Rate
if (isset($_REQUEST['program38_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 38, Date 11 Rate
if (isset($_REQUEST['program38_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 38, Date 12 Rate
if (isset($_REQUEST['program38_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 38, Date 13 Rate
if (isset($_REQUEST['program38_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 38, Date 14 Rate
if (isset($_REQUEST['program38_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 38, Date 15 Rate
if (isset($_REQUEST['program38_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 38, Date 16 Rate
if (isset($_REQUEST['program38_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 38, Date 17 Rate
if (isset($_REQUEST['program38_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 38, Date 18 Rate
if (isset($_REQUEST['program38_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 38, Date 19 Rate
if (isset($_REQUEST['program38_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 38, Date 20 Rate
if (isset($_REQUEST['program38_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 38, Date 21 Rate
if (isset($_REQUEST['program38_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 38, Date 22 Rate
if (isset($_REQUEST['program38_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 38, Date 23 Rate
if (isset($_REQUEST['program38_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 38, Date 24 Rate
if (isset($_REQUEST['program38_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=38 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program38_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 39
//Name
if ( isset($_REQUEST['program39'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=39";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program39']));
    header("Location: prod_volume.php");
}
//Program 39, Date 1 Rate
if (isset($_REQUEST['program39_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 39, Date 2 Rate
if (isset($_REQUEST['program39_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 39, Date 3 Rate
if (isset($_REQUEST['program39_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 39, Date 4 Rate
if (isset($_REQUEST['program39_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 39, Date 5 Rate
if (isset($_REQUEST['program39_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 39, Date 6 Rate
if (isset($_REQUEST['program39_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 39, Date 7 Rate
if (isset($_REQUEST['program39_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 39, Date 8 Rate
if (isset($_REQUEST['program39_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 39, Date 9 Rate
if (isset($_REQUEST['program39_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 39, Date 10 Rate
if (isset($_REQUEST['program39_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 39, Date 11 Rate
if (isset($_REQUEST['program39_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 39, Date 12 Rate
if (isset($_REQUEST['program39_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 39, Date 13 Rate
if (isset($_REQUEST['program39_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 39, Date 14 Rate
if (isset($_REQUEST['program39_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 39, Date 15 Rate
if (isset($_REQUEST['program39_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 39, Date 16 Rate
if (isset($_REQUEST['program39_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 39, Date 17 Rate
if (isset($_REQUEST['program39_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 39, Date 18 Rate
if (isset($_REQUEST['program39_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 39, Date 19 Rate
if (isset($_REQUEST['program39_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 39, Date 20 Rate
if (isset($_REQUEST['program39_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 39, Date 21 Rate
if (isset($_REQUEST['program39_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 39, Date 22 Rate
if (isset($_REQUEST['program39_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 39, Date 23 Rate
if (isset($_REQUEST['program39_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 39, Date 24 Rate
if (isset($_REQUEST['program39_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=39 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program39_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 40
//Name
if ( isset($_REQUEST['program40'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=40";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program40']));
    header("Location: prod_volume.php");
}
//Program 40, Date 1 Rate
if (isset($_REQUEST['program40_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 40, Date 2 Rate
if (isset($_REQUEST['program40_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 40, Date 3 Rate
if (isset($_REQUEST['program40_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 40, Date 4 Rate
if (isset($_REQUEST['program40_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 40, Date 5 Rate
if (isset($_REQUEST['program40_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 40, Date 6 Rate
if (isset($_REQUEST['program40_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 40, Date 7 Rate
if (isset($_REQUEST['program40_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 40, Date 8 Rate
if (isset($_REQUEST['program40_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 40, Date 9 Rate
if (isset($_REQUEST['program40_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 40, Date 10 Rate
if (isset($_REQUEST['program40_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 40, Date 11 Rate
if (isset($_REQUEST['program40_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 40, Date 12 Rate
if (isset($_REQUEST['program40_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 40, Date 13 Rate
if (isset($_REQUEST['program40_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 40, Date 14 Rate
if (isset($_REQUEST['program40_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 40, Date 15 Rate
if (isset($_REQUEST['program40_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 40, Date 16 Rate
if (isset($_REQUEST['program40_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 40, Date 17 Rate
if (isset($_REQUEST['program40_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 40, Date 18 Rate
if (isset($_REQUEST['program40_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 40, Date 19 Rate
if (isset($_REQUEST['program40_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 40, Date 20 Rate
if (isset($_REQUEST['program40_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 40, Date 21 Rate
if (isset($_REQUEST['program40_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 40, Date 22 Rate
if (isset($_REQUEST['program40_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 40, Date 23 Rate
if (isset($_REQUEST['program40_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 40, Date 24 Rate
if (isset($_REQUEST['program40_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=40 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program40_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 41
//Name
if ( isset($_REQUEST['program41'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=41";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program41']));
    header("Location: prod_volume.php");
}
//Program 41, Date 1 Rate
if (isset($_REQUEST['program41_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 41, Date 2 Rate
if (isset($_REQUEST['program41_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 41, Date 3 Rate
if (isset($_REQUEST['program41_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 41, Date 4 Rate
if (isset($_REQUEST['program41_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 41, Date 5 Rate
if (isset($_REQUEST['program41_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 41, Date 6 Rate
if (isset($_REQUEST['program41_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 41, Date 7 Rate
if (isset($_REQUEST['program41_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 41, Date 8 Rate
if (isset($_REQUEST['program41_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 41, Date 9 Rate
if (isset($_REQUEST['program41_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 41, Date 10 Rate
if (isset($_REQUEST['program41_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 41, Date 11 Rate
if (isset($_REQUEST['program41_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 41, Date 12 Rate
if (isset($_REQUEST['program41_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 41, Date 13 Rate
if (isset($_REQUEST['program41_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 41, Date 14 Rate
if (isset($_REQUEST['program41_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 41, Date 15 Rate
if (isset($_REQUEST['program41_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 41, Date 16 Rate
if (isset($_REQUEST['program41_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 41, Date 17 Rate
if (isset($_REQUEST['program41_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 41, Date 18 Rate
if (isset($_REQUEST['program41_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 41, Date 19 Rate
if (isset($_REQUEST['program41_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 41, Date 20 Rate
if (isset($_REQUEST['program41_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 41, Date 21 Rate
if (isset($_REQUEST['program41_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 41, Date 22 Rate
if (isset($_REQUEST['program41_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 41, Date 23 Rate
if (isset($_REQUEST['program41_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 41, Date 24 Rate
if (isset($_REQUEST['program41_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=41 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program41_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 42
//Name
if ( isset($_REQUEST['program42'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=42";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program42']));
    header("Location: prod_volume.php");
}
//Program 42, Date 1 Rate
if (isset($_REQUEST['program42_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 42, Date 2 Rate
if (isset($_REQUEST['program42_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 42, Date 3 Rate
if (isset($_REQUEST['program42_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 42, Date 4 Rate
if (isset($_REQUEST['program42_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 42, Date 5 Rate
if (isset($_REQUEST['program42_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 42, Date 6 Rate
if (isset($_REQUEST['program42_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 42, Date 7 Rate
if (isset($_REQUEST['program42_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 42, Date 8 Rate
if (isset($_REQUEST['program42_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 42, Date 9 Rate
if (isset($_REQUEST['program42_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 42, Date 10 Rate
if (isset($_REQUEST['program42_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 42, Date 11 Rate
if (isset($_REQUEST['program42_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 42, Date 12 Rate
if (isset($_REQUEST['program42_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 42, Date 13 Rate
if (isset($_REQUEST['program42_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 42, Date 14 Rate
if (isset($_REQUEST['program42_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 42, Date 15 Rate
if (isset($_REQUEST['program42_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 42, Date 16 Rate
if (isset($_REQUEST['program42_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 42, Date 17 Rate
if (isset($_REQUEST['program42_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 42, Date 18 Rate
if (isset($_REQUEST['program42_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 42, Date 19 Rate
if (isset($_REQUEST['program42_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 42, Date 20 Rate
if (isset($_REQUEST['program42_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 42, Date 21 Rate
if (isset($_REQUEST['program42_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 42, Date 22 Rate
if (isset($_REQUEST['program42_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 42, Date 23 Rate
if (isset($_REQUEST['program42_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 42, Date 24 Rate
if (isset($_REQUEST['program42_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=42 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program42_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}
//-------Program 43
//Name
if ( isset($_REQUEST['program43'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=43";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program43']));
    header("Location: prod_volume.php");
}
//Program 43, Date 1 Rate
if (isset($_REQUEST['program43_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 43, Date 2 Rate
if (isset($_REQUEST['program43_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 43, Date 3 Rate
if (isset($_REQUEST['program43_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 43, Date 4 Rate
if (isset($_REQUEST['program43_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 43, Date 5 Rate
if (isset($_REQUEST['program43_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 43, Date 6 Rate
if (isset($_REQUEST['program43_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 43, Date 7 Rate
if (isset($_REQUEST['program43_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 43, Date 8 Rate
if (isset($_REQUEST['program43_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 43, Date 9 Rate
if (isset($_REQUEST['program43_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 43, Date 10 Rate
if (isset($_REQUEST['program43_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 43, Date 11 Rate
if (isset($_REQUEST['program43_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 43, Date 12 Rate
if (isset($_REQUEST['program43_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 43, Date 13 Rate
if (isset($_REQUEST['program43_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 43, Date 14 Rate
if (isset($_REQUEST['program43_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 43, Date 15 Rate
if (isset($_REQUEST['program43_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 43, Date 16 Rate
if (isset($_REQUEST['program43_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 43, Date 17 Rate
if (isset($_REQUEST['program43_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 43, Date 18 Rate
if (isset($_REQUEST['program43_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 43, Date 19 Rate
if (isset($_REQUEST['program43_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 43, Date 20 Rate
if (isset($_REQUEST['program43_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 43, Date 21 Rate
if (isset($_REQUEST['program43_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 43, Date 22 Rate
if (isset($_REQUEST['program43_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 43, Date 23 Rate
if (isset($_REQUEST['program43_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 43, Date 24 Rate
if (isset($_REQUEST['program43_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=43 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program43_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 44
//Name
if ( isset($_REQUEST['program44'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=44";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program44']));
    header("Location: prod_volume.php");
}
//Program 44, Date 1 Rate
if (isset($_REQUEST['program44_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 44, Date 2 Rate
if (isset($_REQUEST['program44_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 44, Date 3 Rate
if (isset($_REQUEST['program44_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 44, Date 4 Rate
if (isset($_REQUEST['program44_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 44, Date 5 Rate
if (isset($_REQUEST['program44_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 44, Date 6 Rate
if (isset($_REQUEST['program44_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 44, Date 7 Rate
if (isset($_REQUEST['program44_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 44, Date 8 Rate
if (isset($_REQUEST['program44_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 44, Date 9 Rate
if (isset($_REQUEST['program44_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 44, Date 10 Rate
if (isset($_REQUEST['program44_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 44, Date 11 Rate
if (isset($_REQUEST['program44_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 44, Date 12 Rate
if (isset($_REQUEST['program44_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 44, Date 13 Rate
if (isset($_REQUEST['program44_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 44, Date 14 Rate
if (isset($_REQUEST['program44_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 44, Date 15 Rate
if (isset($_REQUEST['program44_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 44, Date 16 Rate
if (isset($_REQUEST['program44_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 44, Date 17 Rate
if (isset($_REQUEST['program44_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 44, Date 18 Rate
if (isset($_REQUEST['program44_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 44, Date 19 Rate
if (isset($_REQUEST['program44_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 44, Date 20 Rate
if (isset($_REQUEST['program44_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 44, Date 21 Rate
if (isset($_REQUEST['program44_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 44, Date 22 Rate
if (isset($_REQUEST['program44_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 44, Date 23 Rate
if (isset($_REQUEST['program44_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 44, Date 24 Rate
if (isset($_REQUEST['program44_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=44 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program44_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 45
//Name
if ( isset($_REQUEST['program45'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=45";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program45']));
    header("Location: prod_volume.php");
}
//Program 45, Date 1 Rate
if (isset($_REQUEST['program45_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 45, Date 2 Rate
if (isset($_REQUEST['program45_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 45, Date 3 Rate
if (isset($_REQUEST['program45_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 45, Date 4 Rate
if (isset($_REQUEST['program45_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 45, Date 5 Rate
if (isset($_REQUEST['program45_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 45, Date 6 Rate
if (isset($_REQUEST['program45_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 45, Date 7 Rate
if (isset($_REQUEST['program45_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 45, Date 8 Rate
if (isset($_REQUEST['program45_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 45, Date 9 Rate
if (isset($_REQUEST['program45_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 45, Date 10 Rate
if (isset($_REQUEST['program45_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 45, Date 11 Rate
if (isset($_REQUEST['program45_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 45, Date 12 Rate
if (isset($_REQUEST['program45_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 45, Date 13 Rate
if (isset($_REQUEST['program45_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 45, Date 14 Rate
if (isset($_REQUEST['program45_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 45, Date 15 Rate
if (isset($_REQUEST['program45_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 45, Date 16 Rate
if (isset($_REQUEST['program45_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 45, Date 17 Rate
if (isset($_REQUEST['program45_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 45, Date 18 Rate
if (isset($_REQUEST['program45_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 45, Date 19 Rate
if (isset($_REQUEST['program45_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 45, Date 20 Rate
if (isset($_REQUEST['program45_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 45, Date 21 Rate
if (isset($_REQUEST['program45_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 45, Date 22 Rate
if (isset($_REQUEST['program45_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 45, Date 23 Rate
if (isset($_REQUEST['program45_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 45, Date 24 Rate
if (isset($_REQUEST['program45_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=45 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program45_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 46
//Name
if ( isset($_REQUEST['program46'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=46";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program46']));
    header("Location: prod_volume.php");
}
//Program 46, Date 1 Rate
if (isset($_REQUEST['program46_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 46, Date 2 Rate
if (isset($_REQUEST['program46_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 46, Date 3 Rate
if (isset($_REQUEST['program46_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 46, Date 4 Rate
if (isset($_REQUEST['program46_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 46, Date 5 Rate
if (isset($_REQUEST['program46_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 46, Date 6 Rate
if (isset($_REQUEST['program46_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 46, Date 7 Rate
if (isset($_REQUEST['program46_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 46, Date 8 Rate
if (isset($_REQUEST['program46_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 46, Date 9 Rate
if (isset($_REQUEST['program46_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 46, Date 10 Rate
if (isset($_REQUEST['program46_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 46, Date 11 Rate
if (isset($_REQUEST['program46_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 46, Date 12 Rate
if (isset($_REQUEST['program46_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 46, Date 13 Rate
if (isset($_REQUEST['program46_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 46, Date 14 Rate
if (isset($_REQUEST['program46_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 46, Date 15 Rate
if (isset($_REQUEST['program46_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 46, Date 16 Rate
if (isset($_REQUEST['program46_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 46, Date 17 Rate
if (isset($_REQUEST['program46_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 46, Date 18 Rate
if (isset($_REQUEST['program46_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 46, Date 19 Rate
if (isset($_REQUEST['program46_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 46, Date 20 Rate
if (isset($_REQUEST['program46_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 46, Date 21 Rate
if (isset($_REQUEST['program46_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 46, Date 22 Rate
if (isset($_REQUEST['program46_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 46, Date 23 Rate
if (isset($_REQUEST['program46_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 46, Date 24 Rate
if (isset($_REQUEST['program46_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=46 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program46_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 47
//Name
if ( isset($_REQUEST['program47'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=47";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program47']));
    header("Location: prod_volume.php");
}
//Program 47, Date 1 Rate
if (isset($_REQUEST['program47_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 47, Date 2 Rate
if (isset($_REQUEST['program47_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 47, Date 3 Rate
if (isset($_REQUEST['program47_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 47, Date 4 Rate
if (isset($_REQUEST['program47_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 47, Date 5 Rate
if (isset($_REQUEST['program47_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 47, Date 6 Rate
if (isset($_REQUEST['program47_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 47, Date 7 Rate
if (isset($_REQUEST['program47_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 47, Date 8 Rate
if (isset($_REQUEST['program47_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 47, Date 9 Rate
if (isset($_REQUEST['program47_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 47, Date 10 Rate
if (isset($_REQUEST['program47_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 47, Date 11 Rate
if (isset($_REQUEST['program47_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 47, Date 12 Rate
if (isset($_REQUEST['program47_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 47, Date 13 Rate
if (isset($_REQUEST['program47_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 47, Date 14 Rate
if (isset($_REQUEST['program47_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 47, Date 15 Rate
if (isset($_REQUEST['program47_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 47, Date 16 Rate
if (isset($_REQUEST['program47_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 47, Date 17 Rate
if (isset($_REQUEST['program47_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 47, Date 18 Rate
if (isset($_REQUEST['program47_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 47, Date 19 Rate
if (isset($_REQUEST['program47_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 47, Date 20 Rate
if (isset($_REQUEST['program47_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 47, Date 21 Rate
if (isset($_REQUEST['program47_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 47, Date 22 Rate
if (isset($_REQUEST['program47_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 47, Date 23 Rate
if (isset($_REQUEST['program47_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 47, Date 24 Rate
if (isset($_REQUEST['program47_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=47 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program47_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 48
//Name
if ( isset($_REQUEST['program48'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=48";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program48']));
    header("Location: prod_volume.php");
}
//Program 48, Date 1 Rate
if (isset($_REQUEST['program48_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 48, Date 2 Rate
if (isset($_REQUEST['program48_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 48, Date 3 Rate
if (isset($_REQUEST['program48_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 48, Date 4 Rate
if (isset($_REQUEST['program48_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 48, Date 5 Rate
if (isset($_REQUEST['program48_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 48, Date 6 Rate
if (isset($_REQUEST['program48_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 48, Date 7 Rate
if (isset($_REQUEST['program48_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 48, Date 8 Rate
if (isset($_REQUEST['program48_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 48, Date 9 Rate
if (isset($_REQUEST['program48_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 48, Date 10 Rate
if (isset($_REQUEST['program48_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 48, Date 11 Rate
if (isset($_REQUEST['program48_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 48, Date 12 Rate
if (isset($_REQUEST['program48_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 48, Date 13 Rate
if (isset($_REQUEST['program48_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 48, Date 14 Rate
if (isset($_REQUEST['program48_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 48, Date 15 Rate
if (isset($_REQUEST['program48_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 48, Date 16 Rate
if (isset($_REQUEST['program48_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 48, Date 17 Rate
if (isset($_REQUEST['program48_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 48, Date 18 Rate
if (isset($_REQUEST['program48_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 48, Date 19 Rate
if (isset($_REQUEST['program48_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 48, Date 20 Rate
if (isset($_REQUEST['program48_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 48, Date 21 Rate
if (isset($_REQUEST['program48_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 48, Date 22 Rate
if (isset($_REQUEST['program48_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 48, Date 23 Rate
if (isset($_REQUEST['program48_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 48, Date 24 Rate
if (isset($_REQUEST['program48_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=48 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program48_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 49
//Name
if ( isset($_REQUEST['program49'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=49";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program49']));
    header("Location: prod_volume.php");
}
//Program 49, Date 1 Rate
if (isset($_REQUEST['program49_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 49, Date 2 Rate
if (isset($_REQUEST['program49_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 49, Date 3 Rate
if (isset($_REQUEST['program49_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 49, Date 4 Rate
if (isset($_REQUEST['program49_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 49, Date 5 Rate
if (isset($_REQUEST['program49_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 49, Date 6 Rate
if (isset($_REQUEST['program49_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 49, Date 7 Rate
if (isset($_REQUEST['program49_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 49, Date 8 Rate
if (isset($_REQUEST['program49_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 49, Date 9 Rate
if (isset($_REQUEST['program49_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 49, Date 10 Rate
if (isset($_REQUEST['program49_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 49, Date 11 Rate
if (isset($_REQUEST['program49_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 49, Date 12 Rate
if (isset($_REQUEST['program49_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 49, Date 13 Rate
if (isset($_REQUEST['program49_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 49, Date 14 Rate
if (isset($_REQUEST['program49_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 49, Date 15 Rate
if (isset($_REQUEST['program49_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 49, Date 16 Rate
if (isset($_REQUEST['program49_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 49, Date 17 Rate
if (isset($_REQUEST['program49_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 49, Date 18 Rate
if (isset($_REQUEST['program49_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 49, Date 19 Rate
if (isset($_REQUEST['program49_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 49, Date 20 Rate
if (isset($_REQUEST['program49_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 49, Date 21 Rate
if (isset($_REQUEST['program49_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 49, Date 22 Rate
if (isset($_REQUEST['program49_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 49, Date 23 Rate
if (isset($_REQUEST['program49_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 49, Date 24 Rate
if (isset($_REQUEST['program49_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=49 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program49_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

//-------Program 50
//Name
if ( isset($_REQUEST['program50'])) {
    $sql = "UPDATE Programs SET program=:program WHERE program_id=50";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(':program' => $_REQUEST['program50']));
    header("Location: prod_volume.php");
}
//Program 50, Date 1 Rate
if (isset($_REQUEST['program50_date1'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date1'],
                       ':date_id' => ($startdate_id)));
  header("Location: prod_volume.php");
}
//Program 50, Date 2 Rate
if (isset($_REQUEST['program50_date2'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date2'],
                       ':date_id' => ($startdate_id + 1)));
  header("Location: prod_volume.php");
}
//Program 50, Date 3 Rate
if (isset($_REQUEST['program50_date3'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date3'],
                       ':date_id' => ($startdate_id + 2)));
  header("Location: prod_volume.php");
}
//Program 50, Date 4 Rate
if (isset($_REQUEST['program50_date4'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date4'],
                       ':date_id' => ($startdate_id + 3)));
  header("Location: prod_volume.php");
}
//Program 50, Date 5 Rate
if (isset($_REQUEST['program50_date5'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date5'],
                       ':date_id' => ($startdate_id + 4)));
  header("Location: prod_volume.php");
}
//Program 50, Date 6 Rate
if (isset($_REQUEST['program50_date6'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date6'],
                       ':date_id' => ($startdate_id + 5)));
  header("Location: prod_volume.php");
}
//Program 50, Date 7 Rate
if (isset($_REQUEST['program50_date7'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date7'],
                       ':date_id' => ($startdate_id + 6)));
  header("Location: prod_volume.php");
}
//Program 50, Date 8 Rate
if (isset($_REQUEST['program50_date8'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date8'],
                       ':date_id' => ($startdate_id + 7)));
  header("Location: prod_volume.php");
}
//Program 50, Date 9 Rate
if (isset($_REQUEST['program50_date9'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date9'],
                       ':date_id' => ($startdate_id + 8)));
  header("Location: prod_volume.php");
}
//Program 50, Date 10 Rate
if (isset($_REQUEST['program50_date10'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date10'],
                       ':date_id' => ($startdate_id + 9)));
  header("Location: prod_volume.php");
}
//Program 50, Date 11 Rate
if (isset($_REQUEST['program50_date11'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date11'],
                       ':date_id' => ($startdate_id + 10)));
  header("Location: prod_volume.php");
}
//Program 50, Date 12 Rate
if (isset($_REQUEST['program50_date12'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date12'],
                       ':date_id' => ($startdate_id + 11)));
  header("Location: prod_volume.php");
}
//Program 50, Date 13 Rate
if (isset($_REQUEST['program50_date13'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date13'],
                       ':date_id' => ($startdate_id + 12)));
  header("Location: prod_volume.php");
}
//Program 50, Date 14 Rate
if (isset($_REQUEST['program50_date14'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date14'],
                       ':date_id' => ($startdate_id + 13)));
  header("Location: prod_volume.php");
}
//Program 50, Date 15 Rate
if (isset($_REQUEST['program50_date15'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date15'],
                       ':date_id' => ($startdate_id + 14)));
  header("Location: prod_volume.php");
}
//Program 50, Date 16 Rate
if (isset($_REQUEST['program50_date16'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date16'],
                       ':date_id' => ($startdate_id + 15)));
  header("Location: prod_volume.php");
}
//Program 50, Date 17 Rate
if (isset($_REQUEST['program50_date17'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date17'],
                       ':date_id' => ($startdate_id + 16)));
  header("Location: prod_volume.php");
}
//Program 50, Date 18 Rate
if (isset($_REQUEST['program50_date18'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date18'],
                       ':date_id' => ($startdate_id + 17)));
  header("Location: prod_volume.php");
}
//Program 50, Date 19 Rate
if (isset($_REQUEST['program50_date19'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date19'],
                       ':date_id' => ($startdate_id + 18)));
  header("Location: prod_volume.php");
}
//Program 50, Date 20 Rate
if (isset($_REQUEST['program50_date20'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date20'],
                       ':date_id' => ($startdate_id + 19)));
  header("Location: prod_volume.php");
}
//Program 50, Date 21 Rate
if (isset($_REQUEST['program50_date21'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date21'],
                       ':date_id' => ($startdate_id + 20)));
  header("Location: prod_volume.php");
}
//Program 50, Date 22 Rate
if (isset($_REQUEST['program50_date22'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date22'],
                       ':date_id' => ($startdate_id + 21)));
  header("Location: prod_volume.php");
}
//Program 50, Date 23 Rate
if (isset($_REQUEST['program50_date23'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date23'],
                       ':date_id' => ($startdate_id + 22)));
  header("Location: prod_volume.php");
}
//Program 50, Date 24 Rate
if (isset($_REQUEST['program50_date24'])){
  $sql = "UPDATE Rates SET rate=:rate WHERE program_id=50 and date_id=:date_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':rate' => $_REQUEST['program50_date24'],
                       ':date_id' => ($startdate_id + 23)));
  header("Location: prod_volume.php");
}

?>

</head>

<!-- - - - - - - - - - - - - - - - - - VIEW - - - - - - - - - - - - - - - - - - - - - -->

<body>

  <div class="navbar">
    <a href="prod_volume.php" class="active"> Production Volumes </a>
    <a href="process_assumptions.php"> Process Assumptions </a>
    <div class="dropdown">
      <button class="dropbtn"> Resources </button>
      <div class="dropdown-content" style="z-index:9999;">
        <a href="resource1.php"> <?php echo "$resource1" ?> </a>
        <a href="resource2.php"> <?php echo "$resource2" ?> </a>
        <a href="resource3.php"> <?php echo "$resource3" ?> </a>
        <a href="resource4.php"> <?php echo "$resource4" ?> </a>
        <a href="resource5.php"> <?php echo "$resource5" ?> </a>
        <a href="resource6.php"> <?php echo "$resource6" ?> </a>
        <a href="resource7.php"> <?php echo "$resource7" ?> </a>
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

 <h4> Production Volumes </h4>

<form method="get" id="startdate">
<table id="tool_table">
  <tr>
    <th>Start Date</th>
  </tr>
  <tr>
    <td><input type="text" autocomplete="off" name="startdate"
          value="<?php print htmlentities("Mon-YY") ?>" onClick="this.select();"
          style="text-align:left;">
    </td>
  </tr>
</table>
<input type="hidden" value="Update" class="submit">
</form>

<form method="post" id="product_load">

<table id="tool_table" width="100%" class="fixed_headers">
  <thead>
  <tr>
    <th width="15%" style="left: 0; position: sticky; z-index: 9999"> Product </th>
    <th><?php print "$date1" ?></th>
    <th><?php print "$date2" ?></th>
    <th><?php print "$date3" ?></th>
    <th><?php print "$date4" ?></th>
    <th><?php print "$date5" ?></th>
    <th><?php print "$date6" ?></th>
    <th><?php print "$date7" ?></th>
    <th><?php print "$date8" ?></th>
    <th><?php print "$date9" ?></th>
    <th><?php print "$date10" ?></th>
    <th><?php print "$date11" ?></th>
    <th><?php print "$date12" ?></th>
    <th><?php print "$date13" ?></th>
    <th><?php print "$date14" ?></th>
    <th><?php print "$date15" ?></th>
    <th><?php print "$date16" ?></th>
    <th><?php print "$date17" ?></th>
    <th><?php print "$date18" ?></th>
    <th><?php print "$date19" ?></th>
    <th><?php print "$date20" ?></th>
    <th><?php print "$date21" ?></th>
    <th><?php print "$date22" ?></th>
    <th><?php print "$date23" ?></th>
    <th><?php print "$date24" ?></th>
  </tr>
  </thead>
<form>
  <tr> <!-- Program 1 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program1"
        value="<?php print htmlentities($program1) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program1_date1" min="0" max="999"
        value="<?php print htmlentities($program1_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date2" min="0" max="999"
        value="<?php print htmlentities($program1_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date3" min="0" max="999"
        value="<?php print htmlentities($program1_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date4" min="0" max="999"
        value="<?php print htmlentities($program1_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date5" min="0" max="999"
        value="<?php print htmlentities($program1_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date6" min="0" max="999"
        value="<?php print htmlentities($program1_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date7" min="0" max="999"
        value="<?php print htmlentities($program1_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date8" min="0" max="999"
        value="<?php print htmlentities($program1_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date9" min="0" max="999"
        value="<?php print htmlentities($program1_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date10" min="0" max="999"
        value="<?php print htmlentities($program1_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date11" min="0" max="999"
        value="<?php print htmlentities($program1_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date12" min="0" max="999"
        value="<?php print htmlentities($program1_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date13" min="0" max="999"
        value="<?php print htmlentities($program1_date13) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date14" min="0" max="999"
        value="<?php print htmlentities($program1_date14) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date15" min="0" max="999"
        value="<?php print htmlentities($program1_date15) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date16" min="0" max="999"
        value="<?php print htmlentities($program1_date16) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date17" min="0" max="999"
        value="<?php print htmlentities($program1_date17) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date18" min="0" max="999"
        value="<?php print htmlentities($program1_date18) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date19" min="0" max="999"
        value="<?php print htmlentities($program1_date19) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date20" min="0" max="999"
        value="<?php print htmlentities($program1_date20) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date21" min="0" max="999"
        value="<?php print htmlentities($program1_date21) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date22" min="0" max="999"
        value="<?php print htmlentities($program1_date22) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date23" min="0" max="999"
        value="<?php print htmlentities($program1_date23) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program1_date24" min="0" max="999"
        value="<?php print htmlentities($program1_date24) ?>" onClick="this.select();"
        style="text-align:right;"></td>
  </tr>
<input type="submit" style="display:none"> </form>
<form>
  <tr> <!-- Program 2 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program2"
        value="<?php print htmlentities($program2) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program2_date1" min="0" max="999"
        value="<?php print htmlentities($program2_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date2" min="0" max="999"
        value="<?php print htmlentities($program2_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date3" min="0" max="999"
        value="<?php print htmlentities($program2_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date4" min="0" max="999"
        value="<?php print htmlentities($program2_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date5" min="0" max="999"
        value="<?php print htmlentities($program2_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date6" min="0" max="999"
        value="<?php print htmlentities($program2_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date7" min="0" max="999"
        value="<?php print htmlentities($program2_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date8" min="0" max="999"
        value="<?php print htmlentities($program2_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date9" min="0" max="999"
        value="<?php print htmlentities($program2_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date10" min="0" max="999"
        value="<?php print htmlentities($program2_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date11" min="0" max="999"
        value="<?php print htmlentities($program2_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program2_date12" min="0" max="999"
        value="<?php print htmlentities($program2_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program2_date13" min="0" max="999"
                value="<?php print htmlentities($program2_date13) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date14" min="0" max="999"
                value="<?php print htmlentities($program2_date14) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date15" min="0" max="999"
                value="<?php print htmlentities($program2_date15) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date16" min="0" max="999"
                value="<?php print htmlentities($program2_date16) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date17" min="0" max="999"
                value="<?php print htmlentities($program2_date17) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date18" min="0" max="999"
                value="<?php print htmlentities($program2_date18) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date19" min="0" max="999"
                value="<?php print htmlentities($program2_date19) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date20" min="0" max="999"
                value="<?php print htmlentities($program2_date20) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date21" min="0" max="999"
                value="<?php print htmlentities($program2_date21) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date22" min="0" max="999"
                value="<?php print htmlentities($program2_date22) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date23" min="0" max="999"
                value="<?php print htmlentities($program2_date23) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program2_date24" min="0" max="999"
                value="<?php print htmlentities($program2_date24) ?>" onClick="this.select();"
                style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 3 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program3"
        value="<?php print htmlentities($program3) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program3_date1" min="0" max="999"
        value="<?php print htmlentities($program3_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date2" min="0" max="999"
        value="<?php print htmlentities($program3_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date3" min="0" max="999"
        value="<?php print htmlentities($program3_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date4" min="0" max="999"
        value="<?php print htmlentities($program3_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date5" min="0" max="999"
        value="<?php print htmlentities($program3_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date6" min="0" max="999"
        value="<?php print htmlentities($program3_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date7" min="0" max="999"
        value="<?php print htmlentities($program3_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date8" min="0" max="999"
        value="<?php print htmlentities($program3_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date9" min="0" max="999"
        value="<?php print htmlentities($program3_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date10" min="0" max="999"
        value="<?php print htmlentities($program3_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date11" min="0" max="999"
        value="<?php print htmlentities($program3_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program3_date12" min="0" max="999"
        value="<?php print htmlentities($program3_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program3_date13" min="0" max="999"
                value="<?php print htmlentities($program3_date13) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date14" min="0" max="999"
                value="<?php print htmlentities($program3_date14) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date15" min="0" max="999"
                value="<?php print htmlentities($program3_date15) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date16" min="0" max="999"
                value="<?php print htmlentities($program3_date16) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date17" min="0" max="999"
                value="<?php print htmlentities($program3_date17) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date18" min="0" max="999"
                value="<?php print htmlentities($program3_date18) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date19" min="0" max="999"
                value="<?php print htmlentities($program3_date19) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date20" min="0" max="999"
                value="<?php print htmlentities($program3_date20) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date21" min="0" max="999"
                value="<?php print htmlentities($program3_date21) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date22" min="0" max="999"
                value="<?php print htmlentities($program3_date22) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date23" min="0" max="999"
                value="<?php print htmlentities($program3_date23) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program3_date24" min="0" max="999"
                value="<?php print htmlentities($program3_date24) ?>" onClick="this.select();"
                style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 4 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program4"
        value="<?php print htmlentities($program4) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program4_date1" min="0" max="999"
        value="<?php print htmlentities($program4_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date2" min="0" max="999"
        value="<?php print htmlentities($program4_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date3" min="0" max="999"
        value="<?php print htmlentities($program4_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date4" min="0" max="999"
        value="<?php print htmlentities($program4_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date5" min="0" max="999"
        value="<?php print htmlentities($program4_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date6" min="0" max="999"
        value="<?php print htmlentities($program4_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date7" min="0" max="999"
        value="<?php print htmlentities($program4_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date8" min="0" max="999"
        value="<?php print htmlentities($program4_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date9" min="0" max="999"
        value="<?php print htmlentities($program4_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date10" min="0" max="999"
        value="<?php print htmlentities($program4_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date11" min="0" max="999"
        value="<?php print htmlentities($program4_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program4_date12" min="0" max="999"
        value="<?php print htmlentities($program4_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program4_date13" min="0" max="999"
                value="<?php print htmlentities($program4_date13) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date14" min="0" max="999"
                value="<?php print htmlentities($program4_date14) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date15" min="0" max="999"
                value="<?php print htmlentities($program4_date15) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date16" min="0" max="999"
                value="<?php print htmlentities($program4_date16) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date17" min="0" max="999"
                value="<?php print htmlentities($program4_date17) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date18" min="0" max="999"
                value="<?php print htmlentities($program4_date18) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date19" min="0" max="999"
                value="<?php print htmlentities($program4_date19) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date20" min="0" max="999"
                value="<?php print htmlentities($program4_date20) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date21" min="0" max="999"
                value="<?php print htmlentities($program4_date21) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date22" min="0" max="999"
                value="<?php print htmlentities($program4_date22) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date23" min="0" max="999"
                value="<?php print htmlentities($program4_date23) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program4_date24" min="0" max="999"
                value="<?php print htmlentities($program4_date24) ?>" onClick="this.select();"
                style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 5 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program5"
        value="<?php print htmlentities($program5) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program5_date1" min="0" max="999"
        value="<?php print htmlentities($program5_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date2" min="0" max="999"
        value="<?php print htmlentities($program5_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date3" min="0" max="999"
        value="<?php print htmlentities($program5_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date4" min="0" max="999"
        value="<?php print htmlentities($program5_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date5" min="0" max="999"
        value="<?php print htmlentities($program5_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date6" min="0" max="999"
        value="<?php print htmlentities($program5_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date7" min="0" max="999"
        value="<?php print htmlentities($program5_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date8" min="0" max="999"
        value="<?php print htmlentities($program5_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date9" min="0" max="999"
        value="<?php print htmlentities($program5_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date10" min="0" max="999"
        value="<?php print htmlentities($program5_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date11" min="0" max="999"
        value="<?php print htmlentities($program5_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program5_date12" min="0" max="999"
        value="<?php print htmlentities($program5_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program5_date13" min="0" max="999"
              value="<?php print htmlentities($program5_date13) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date14" min="0" max="999"
              value="<?php print htmlentities($program5_date14) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date15" min="0" max="999"
              value="<?php print htmlentities($program5_date15) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date16" min="0" max="999"
              value="<?php print htmlentities($program5_date16) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date17" min="0" max="999"
              value="<?php print htmlentities($program5_date17) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date18" min="0" max="999"
              value="<?php print htmlentities($program5_date18) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date19" min="0" max="999"
              value="<?php print htmlentities($program5_date19) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date20" min="0" max="999"
              value="<?php print htmlentities($program5_date20) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date21" min="0" max="999"
              value="<?php print htmlentities($program5_date21) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date22" min="0" max="999"
              value="<?php print htmlentities($program5_date22) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date23" min="0" max="999"
              value="<?php print htmlentities($program5_date23) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program5_date24" min="0" max="999"
              value="<?php print htmlentities($program5_date24) ?>" onClick="this.select();"
              style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 6 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program6"
        value="<?php print htmlentities($program6) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program6_date1" min="0" max="999"
        value="<?php print htmlentities($program6_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date2" min="0" max="999"
        value="<?php print htmlentities($program6_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date3" min="0" max="999"
        value="<?php print htmlentities($program6_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date4" min="0" max="999"
        value="<?php print htmlentities($program6_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date5" min="0" max="999"
        value="<?php print htmlentities($program6_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date6" min="0" max="999"
        value="<?php print htmlentities($program6_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date7" min="0" max="999"
        value="<?php print htmlentities($program6_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date8" min="0" max="999"
        value="<?php print htmlentities($program6_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date9" min="0" max="999"
        value="<?php print htmlentities($program6_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date10" min="0" max="999"
        value="<?php print htmlentities($program6_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date11" min="0" max="999"
        value="<?php print htmlentities($program6_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program6_date12" min="0" max="999"
        value="<?php print htmlentities($program6_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program6_date13" min="0" max="999"
                value="<?php print htmlentities($program6_date13) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date14" min="0" max="999"
                value="<?php print htmlentities($program6_date14) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date15" min="0" max="999"
                value="<?php print htmlentities($program6_date15) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date16" min="0" max="999"
                value="<?php print htmlentities($program6_date16) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date17" min="0" max="999"
                value="<?php print htmlentities($program6_date17) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date18" min="0" max="999"
                value="<?php print htmlentities($program6_date18) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date19" min="0" max="999"
                value="<?php print htmlentities($program6_date19) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date20" min="0" max="999"
                value="<?php print htmlentities($program6_date20) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date21" min="0" max="999"
                value="<?php print htmlentities($program6_date21) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date22" min="0" max="999"
                value="<?php print htmlentities($program6_date22) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date23" min="0" max="999"
                value="<?php print htmlentities($program6_date23) ?>" onClick="this.select();"
                style="text-align:right;"></td>
            <td><input type="number" name="program6_date24" min="0" max="999"
                value="<?php print htmlentities($program6_date24) ?>" onClick="this.select();"
                style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 7 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program7"
        value="<?php print htmlentities($program7) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program7_date1" min="0" max="999"
        value="<?php print htmlentities($program7_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date2" min="0" max="999"
        value="<?php print htmlentities($program7_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date3" min="0" max="999"
        value="<?php print htmlentities($program7_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date4" min="0" max="999"
        value="<?php print htmlentities($program7_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date5" min="0" max="999"
        value="<?php print htmlentities($program7_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date6" min="0" max="999"
        value="<?php print htmlentities($program7_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date7" min="0" max="999"
        value="<?php print htmlentities($program7_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date8" min="0" max="999"
        value="<?php print htmlentities($program7_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date9" min="0" max="999"
        value="<?php print htmlentities($program7_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date10" min="0" max="999"
        value="<?php print htmlentities($program7_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date11" min="0" max="999"
        value="<?php print htmlentities($program7_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program7_date12" min="0" max="999"
        value="<?php print htmlentities($program7_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program7_date13" min="0" max="999"
              value="<?php print htmlentities($program7_date13) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date14" min="0" max="999"
              value="<?php print htmlentities($program7_date14) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date15" min="0" max="999"
              value="<?php print htmlentities($program7_date15) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date16" min="0" max="999"
              value="<?php print htmlentities($program7_date16) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date17" min="0" max="999"
              value="<?php print htmlentities($program7_date17) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date18" min="0" max="999"
              value="<?php print htmlentities($program7_date18) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date19" min="0" max="999"
              value="<?php print htmlentities($program7_date19) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date20" min="0" max="999"
              value="<?php print htmlentities($program7_date20) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date21" min="0" max="999"
              value="<?php print htmlentities($program7_date21) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date22" min="0" max="999"
              value="<?php print htmlentities($program7_date22) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date23" min="0" max="999"
              value="<?php print htmlentities($program7_date23) ?>" onClick="this.select();"
              style="text-align:right;"></td>
          <td><input type="number" name="program7_date24" min="0" max="999"
              value="<?php print htmlentities($program7_date24) ?>" onClick="this.select();"
              style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 8 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program8"
        value="<?php print htmlentities($program8) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program8_date1" min="0" max="999"
        value="<?php print htmlentities($program8_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date2" min="0" max="999"
        value="<?php print htmlentities($program8_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date3" min="0" max="999"
        value="<?php print htmlentities($program8_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date4" min="0" max="999"
        value="<?php print htmlentities($program8_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date5" min="0" max="999"
        value="<?php print htmlentities($program8_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date6" min="0" max="999"
        value="<?php print htmlentities($program8_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date7" min="0" max="999"
        value="<?php print htmlentities($program8_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date8" min="0" max="999"
        value="<?php print htmlentities($program8_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date9" min="0" max="999"
        value="<?php print htmlentities($program8_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date10" min="0" max="999"
        value="<?php print htmlentities($program8_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date11" min="0" max="999"
        value="<?php print htmlentities($program8_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program8_date12" min="0" max="999"
        value="<?php print htmlentities($program8_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>

    <td><input type="number" name="program8_date13" min="0" max="999"
            value="<?php print htmlentities($program8_date13) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date14" min="0" max="999"
            value="<?php print htmlentities($program8_date14) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date15" min="0" max="999"
            value="<?php print htmlentities($program8_date15) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date16" min="0" max="999"
            value="<?php print htmlentities($program8_date16) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date17" min="0" max="999"
            value="<?php print htmlentities($program8_date17) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date18" min="0" max="999"
            value="<?php print htmlentities($program8_date18) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date19" min="0" max="999"
            value="<?php print htmlentities($program8_date19) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date20" min="0" max="999"
            value="<?php print htmlentities($program8_date20) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date21" min="0" max="999"
            value="<?php print htmlentities($program8_date21) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date22" min="0" max="999"
            value="<?php print htmlentities($program8_date22) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date23" min="0" max="999"
            value="<?php print htmlentities($program8_date23) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program8_date24" min="0" max="999"
            value="<?php print htmlentities($program8_date24) ?>" onClick="this.select();"
            style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 9 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program9"
        value="<?php print htmlentities($program9) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program9_date1" min="0" max="999"
        value="<?php print htmlentities($program9_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date2" min="0" max="999"
        value="<?php print htmlentities($program9_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date3" min="0" max="999"
        value="<?php print htmlentities($program9_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date4" min="0" max="999"
        value="<?php print htmlentities($program9_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date5" min="0" max="999"
        value="<?php print htmlentities($program9_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date6" min="0" max="999"
        value="<?php print htmlentities($program9_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date7" min="0" max="999"
        value="<?php print htmlentities($program9_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date8" min="0" max="999"
        value="<?php print htmlentities($program9_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date9" min="0" max="999"
        value="<?php print htmlentities($program9_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date10" min="0" max="999"
        value="<?php print htmlentities($program9_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date11" min="0" max="999"
        value="<?php print htmlentities($program9_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program9_date12" min="0" max="999"
        value="<?php print htmlentities($program9_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program9_date13" min="0" max="999"
            value="<?php print htmlentities($program9_date13) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date14" min="0" max="999"
            value="<?php print htmlentities($program9_date14) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date15" min="0" max="999"
            value="<?php print htmlentities($program9_date15) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date16" min="0" max="999"
            value="<?php print htmlentities($program9_date16) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date17" min="0" max="999"
            value="<?php print htmlentities($program9_date17) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date18" min="0" max="999"
            value="<?php print htmlentities($program9_date18) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date19" min="0" max="999"
            value="<?php print htmlentities($program9_date19) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date20" min="0" max="999"
            value="<?php print htmlentities($program9_date20) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date21" min="0" max="999"
            value="<?php print htmlentities($program9_date21) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date22" min="0" max="999"
            value="<?php print htmlentities($program9_date22) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date23" min="0" max="999"
            value="<?php print htmlentities($program9_date23) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program9_date24" min="0" max="999"
            value="<?php print htmlentities($program9_date24) ?>" onClick="this.select();"
            style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 10 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program10"
        value="<?php print htmlentities($program10) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program10_date1" min="0" max="999"
        value="<?php print htmlentities($program10_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date2" min="0" max="999"
        value="<?php print htmlentities($program10_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date3" min="0" max="999"
        value="<?php print htmlentities($program10_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date4" min="0" max="999"
        value="<?php print htmlentities($program10_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date5" min="0" max="999"
        value="<?php print htmlentities($program10_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date6" min="0" max="999"
        value="<?php print htmlentities($program10_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date7" min="0" max="999"
        value="<?php print htmlentities($program10_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date8" min="0" max="999"
        value="<?php print htmlentities($program10_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date9" min="0" max="999"
        value="<?php print htmlentities($program10_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date10" min="0" max="999"
        value="<?php print htmlentities($program10_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date11" min="0" max="999"
        value="<?php print htmlentities($program10_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program10_date12" min="0" max="999"
        value="<?php print htmlentities($program10_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program10_date13" min="0" max="999"
            value="<?php print htmlentities($program10_date13) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date14" min="0" max="999"
            value="<?php print htmlentities($program10_date14) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date15" min="0" max="999"
            value="<?php print htmlentities($program10_date15) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date16" min="0" max="999"
            value="<?php print htmlentities($program10_date16) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date17" min="0" max="999"
            value="<?php print htmlentities($program10_date17) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date18" min="0" max="999"
            value="<?php print htmlentities($program10_date18) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date19" min="0" max="999"
            value="<?php print htmlentities($program10_date19) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date20" min="0" max="999"
            value="<?php print htmlentities($program10_date20) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date21" min="0" max="999"
            value="<?php print htmlentities($program10_date21) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date22" min="0" max="999"
            value="<?php print htmlentities($program10_date22) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date23" min="0" max="999"
            value="<?php print htmlentities($program10_date23) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program10_date24" min="0" max="999"
            value="<?php print htmlentities($program10_date24) ?>" onClick="this.select();"
            style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 11 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program11"
        value="<?php print htmlentities($program11) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program11_date1" min="0" max="999"
        value="<?php print htmlentities($program11_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date2" min="0" max="999"
        value="<?php print htmlentities($program11_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date3" min="0" max="999"
        value="<?php print htmlentities($program11_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date4" min="0" max="999"
        value="<?php print htmlentities($program11_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date5" min="0" max="999"
        value="<?php print htmlentities($program11_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date6" min="0" max="999"
        value="<?php print htmlentities($program11_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date7" min="0" max="999"
        value="<?php print htmlentities($program11_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date8" min="0" max="999"
        value="<?php print htmlentities($program11_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date9" min="0" max="999"
        value="<?php print htmlentities($program11_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date10" min="0" max="999"
        value="<?php print htmlentities($program11_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date11" min="0" max="999"
        value="<?php print htmlentities($program11_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program11_date12" min="0" max="999"
        value="<?php print htmlentities($program11_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program11_date13" min="0" max="999"
            value="<?php print htmlentities($program11_date13) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date14" min="0" max="999"
            value="<?php print htmlentities($program11_date14) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date15" min="0" max="999"
            value="<?php print htmlentities($program11_date15) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date16" min="0" max="999"
            value="<?php print htmlentities($program11_date16) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date17" min="0" max="999"
            value="<?php print htmlentities($program11_date17) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date18" min="0" max="999"
            value="<?php print htmlentities($program11_date18) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date19" min="0" max="999"
            value="<?php print htmlentities($program11_date19) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date20" min="0" max="999"
            value="<?php print htmlentities($program11_date20) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date21" min="0" max="999"
            value="<?php print htmlentities($program11_date21) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date22" min="0" max="999"
            value="<?php print htmlentities($program11_date22) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date23" min="0" max="999"
            value="<?php print htmlentities($program11_date23) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program11_date24" min="0" max="999"
            value="<?php print htmlentities($program11_date24) ?>" onClick="this.select();"
            style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 12 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program12"
        value="<?php print htmlentities($program12) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program12_date1" min="0" max="999"
        value="<?php print htmlentities($program12_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date2" min="0" max="999"
        value="<?php print htmlentities($program12_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date3" min="0" max="999"
        value="<?php print htmlentities($program12_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date4" min="0" max="999"
        value="<?php print htmlentities($program12_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date5" min="0" max="999"
        value="<?php print htmlentities($program12_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date6" min="0" max="999"
        value="<?php print htmlentities($program12_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date7" min="0" max="999"
        value="<?php print htmlentities($program12_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date8" min="0" max="999"
        value="<?php print htmlentities($program12_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date9" min="0" max="999"
        value="<?php print htmlentities($program12_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date10" min="0" max="999"
        value="<?php print htmlentities($program12_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date11" min="0" max="999"
        value="<?php print htmlentities($program12_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program12_date12" min="0" max="999"
        value="<?php print htmlentities($program12_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program12_date13" min="0" max="999"
            value="<?php print htmlentities($program12_date13) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date14" min="0" max="999"
            value="<?php print htmlentities($program12_date14) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date15" min="0" max="999"
            value="<?php print htmlentities($program12_date15) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date16" min="0" max="999"
            value="<?php print htmlentities($program12_date16) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date17" min="0" max="999"
            value="<?php print htmlentities($program12_date17) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date18" min="0" max="999"
            value="<?php print htmlentities($program12_date18) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date19" min="0" max="999"
            value="<?php print htmlentities($program12_date19) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date20" min="0" max="999"
            value="<?php print htmlentities($program12_date20) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date21" min="0" max="999"
            value="<?php print htmlentities($program12_date21) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date22" min="0" max="999"
            value="<?php print htmlentities($program12_date22) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date23" min="0" max="999"
            value="<?php print htmlentities($program12_date23) ?>" onClick="this.select();"
            style="text-align:right;"></td>
        <td><input type="number" name="program12_date24" min="0" max="999"
            value="<?php print htmlentities($program12_date24) ?>" onClick="this.select();"
            style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 13 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program13"
        value="<?php print htmlentities($program13) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program13_date1" min="0" max="999"
        value="<?php print htmlentities($program13_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date2" min="0" max="999"
        value="<?php print htmlentities($program13_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date3" min="0" max="999"
        value="<?php print htmlentities($program13_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date4" min="0" max="999"
        value="<?php print htmlentities($program13_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date5" min="0" max="999"
        value="<?php print htmlentities($program13_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date6" min="0" max="999"
        value="<?php print htmlentities($program13_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date7" min="0" max="999"
        value="<?php print htmlentities($program13_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date8" min="0" max="999"
        value="<?php print htmlentities($program13_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date9" min="0" max="999"
        value="<?php print htmlentities($program13_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date10" min="0" max="999"
        value="<?php print htmlentities($program13_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date11" min="0" max="999"
        value="<?php print htmlentities($program13_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program13_date12" min="0" max="999"
        value="<?php print htmlentities($program13_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program13_date13" min="0" max="999"
          value="<?php print htmlentities($program13_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program13_date14" min="0" max="999"
         value="<?php print htmlentities($program13_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date15" min="0" max="999"
         value="<?php print htmlentities($program13_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date16" min="0" max="999"
         value="<?php print htmlentities($program13_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date17" min="0" max="999"
         value="<?php print htmlentities($program13_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date18" min="0" max="999"
         value="<?php print htmlentities($program13_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date19" min="0" max="999"
         value="<?php print htmlentities($program13_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date20" min="0" max="999"
         value="<?php print htmlentities($program13_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date21" min="0" max="999"
         value="<?php print htmlentities($program13_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date22" min="0" max="999"
         value="<?php print htmlentities($program13_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date23" min="0" max="999"
         value="<?php print htmlentities($program13_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program13_date24" min="0" max="999"
         value="<?php print htmlentities($program13_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 14 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program14"
        value="<?php print htmlentities($program14) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program14_date1" min="0" max="999"
        value="<?php print htmlentities($program14_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date2" min="0" max="999"
        value="<?php print htmlentities($program14_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date3" min="0" max="999"
        value="<?php print htmlentities($program14_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date4" min="0" max="999"
        value="<?php print htmlentities($program14_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date5" min="0" max="999"
        value="<?php print htmlentities($program14_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date6" min="0" max="999"
        value="<?php print htmlentities($program14_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date7" min="0" max="999"
        value="<?php print htmlentities($program14_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date8" min="0" max="999"
        value="<?php print htmlentities($program14_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date9" min="0" max="999"
        value="<?php print htmlentities($program14_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date10" min="0" max="999"
        value="<?php print htmlentities($program14_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date11" min="0" max="999"
        value="<?php print htmlentities($program14_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program14_date12" min="0" max="999"
        value="<?php print htmlentities($program14_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program14_date13" min="0" max="999"
          value="<?php print htmlentities($program14_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program14_date14" min="0" max="999"
         value="<?php print htmlentities($program14_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date15" min="0" max="999"
         value="<?php print htmlentities($program14_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date16" min="0" max="999"
         value="<?php print htmlentities($program14_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date17" min="0" max="999"
         value="<?php print htmlentities($program14_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date18" min="0" max="999"
         value="<?php print htmlentities($program14_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date19" min="0" max="999"
         value="<?php print htmlentities($program14_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date20" min="0" max="999"
         value="<?php print htmlentities($program14_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date21" min="0" max="999"
         value="<?php print htmlentities($program14_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date22" min="0" max="999"
         value="<?php print htmlentities($program14_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date23" min="0" max="999"
         value="<?php print htmlentities($program14_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program14_date24" min="0" max="999"
         value="<?php print htmlentities($program14_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 15 -->
    <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program15"
        value="<?php print htmlentities($program15) ?>"onClick="this.select();"></td>

    <td><input type="number" name="program15_date1" min="0" max="999"
        value="<?php print htmlentities($program15_date1) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date2" min="0" max="999"
        value="<?php print htmlentities($program15_date2) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date3" min="0" max="999"
        value="<?php print htmlentities($program15_date3) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date4" min="0" max="999"
        value="<?php print htmlentities($program15_date4) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date5" min="0" max="999"
        value="<?php print htmlentities($program15_date5) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date6" min="0" max="999"
        value="<?php print htmlentities($program15_date6) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date7" min="0" max="999"
        value="<?php print htmlentities($program15_date7) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date8" min="0" max="999"
        value="<?php print htmlentities($program15_date8) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date9" min="0" max="999"
        value="<?php print htmlentities($program15_date9) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date10" min="0" max="999"
        value="<?php print htmlentities($program15_date10) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date11" min="0" max="999"
        value="<?php print htmlentities($program15_date11) ?>" onClick="this.select();"
        style="text-align:right;"></td>
    <td><input type="number" name="program15_date12" min="0" max="999"
        value="<?php print htmlentities($program15_date12) ?>" onClick="this.select();"
        style="text-align:right;"></td>
        <td><input type="number" name="program15_date13" min="0" max="999"
          value="<?php print htmlentities($program15_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program15_date14" min="0" max="999"
         value="<?php print htmlentities($program15_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date15" min="0" max="999"
         value="<?php print htmlentities($program15_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date16" min="0" max="999"
         value="<?php print htmlentities($program15_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date17" min="0" max="999"
         value="<?php print htmlentities($program15_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date18" min="0" max="999"
         value="<?php print htmlentities($program15_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date19" min="0" max="999"
         value="<?php print htmlentities($program15_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date20" min="0" max="999"
         value="<?php print htmlentities($program15_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date21" min="0" max="999"
         value="<?php print htmlentities($program15_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date22" min="0" max="999"
         value="<?php print htmlentities($program15_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date23" min="0" max="999"
         value="<?php print htmlentities($program15_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program15_date24" min="0" max="999"
         value="<?php print htmlentities($program15_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
  </tr>
  <input type="submit" style="display:none"> </form>
  <form>
  <tr> <!-- Program 16 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program16"
      value="<?php print htmlentities($program16) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program16_date1" min="0" max="999"
      value="<?php print htmlentities($program16_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date2" min="0" max="999"
      value="<?php print htmlentities($program16_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date3" min="0" max="999"
      value="<?php print htmlentities($program16_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date4" min="0" max="999"
      value="<?php print htmlentities($program16_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date5" min="0" max="999"
      value="<?php print htmlentities($program16_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date6" min="0" max="999"
      value="<?php print htmlentities($program16_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date7" min="0" max="999"
      value="<?php print htmlentities($program16_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date8" min="0" max="999"
      value="<?php print htmlentities($program16_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date9" min="0" max="999"
      value="<?php print htmlentities($program16_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date10" min="0" max="999"
      value="<?php print htmlentities($program16_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date11" min="0" max="999"
      value="<?php print htmlentities($program16_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program16_date12" min="0" max="999"
      value="<?php print htmlentities($program16_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program16_date13" min="0" max="999"
          value="<?php print htmlentities($program16_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program16_date14" min="0" max="999"
         value="<?php print htmlentities($program16_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date15" min="0" max="999"
         value="<?php print htmlentities($program16_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date16" min="0" max="999"
         value="<?php print htmlentities($program16_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date17" min="0" max="999"
         value="<?php print htmlentities($program16_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date18" min="0" max="999"
         value="<?php print htmlentities($program16_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date19" min="0" max="999"
         value="<?php print htmlentities($program16_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date20" min="0" max="999"
         value="<?php print htmlentities($program16_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date21" min="0" max="999"
         value="<?php print htmlentities($program16_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date22" min="0" max="999"
         value="<?php print htmlentities($program16_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date23" min="0" max="999"
         value="<?php print htmlentities($program16_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program16_date24" min="0" max="999"
         value="<?php print htmlentities($program16_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 17 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program17"
      value="<?php print htmlentities($program17) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program17_date1" min="0" max="999"
      value="<?php print htmlentities($program17_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date2" min="0" max="999"
      value="<?php print htmlentities($program17_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date3" min="0" max="999"
      value="<?php print htmlentities($program17_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date4" min="0" max="999"
      value="<?php print htmlentities($program17_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date5" min="0" max="999"
      value="<?php print htmlentities($program17_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date6" min="0" max="999"
      value="<?php print htmlentities($program17_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date7" min="0" max="999"
      value="<?php print htmlentities($program17_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date8" min="0" max="999"
      value="<?php print htmlentities($program17_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date9" min="0" max="999"
      value="<?php print htmlentities($program17_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date10" min="0" max="999"
      value="<?php print htmlentities($program17_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date11" min="0" max="999"
      value="<?php print htmlentities($program17_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program17_date12" min="0" max="999"
      value="<?php print htmlentities($program17_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program17_date13" min="0" max="999"
          value="<?php print htmlentities($program17_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program17_date14" min="0" max="999"
         value="<?php print htmlentities($program17_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date15" min="0" max="999"
         value="<?php print htmlentities($program17_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date16" min="0" max="999"
         value="<?php print htmlentities($program17_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date17" min="0" max="999"
         value="<?php print htmlentities($program17_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date18" min="0" max="999"
         value="<?php print htmlentities($program17_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date19" min="0" max="999"
         value="<?php print htmlentities($program17_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date20" min="0" max="999"
         value="<?php print htmlentities($program17_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date21" min="0" max="999"
         value="<?php print htmlentities($program17_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date22" min="0" max="999"
         value="<?php print htmlentities($program17_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date23" min="0" max="999"
         value="<?php print htmlentities($program17_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program17_date24" min="0" max="999"
         value="<?php print htmlentities($program17_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 18 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program18"
      value="<?php print htmlentities($program18) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program18_date1" min="0" max="999"
      value="<?php print htmlentities($program18_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date2" min="0" max="999"
      value="<?php print htmlentities($program18_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date3" min="0" max="999"
      value="<?php print htmlentities($program18_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date4" min="0" max="999"
      value="<?php print htmlentities($program18_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date5" min="0" max="999"
      value="<?php print htmlentities($program18_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date6" min="0" max="999"
      value="<?php print htmlentities($program18_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date7" min="0" max="999"
      value="<?php print htmlentities($program18_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date8" min="0" max="999"
      value="<?php print htmlentities($program18_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date9" min="0" max="999"
      value="<?php print htmlentities($program18_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date10" min="0" max="999"
      value="<?php print htmlentities($program18_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date11" min="0" max="999"
      value="<?php print htmlentities($program18_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program18_date12" min="0" max="999"
      value="<?php print htmlentities($program18_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program18_date13" min="0" max="999"
          value="<?php print htmlentities($program18_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program18_date14" min="0" max="999"
         value="<?php print htmlentities($program18_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date15" min="0" max="999"
         value="<?php print htmlentities($program18_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date16" min="0" max="999"
         value="<?php print htmlentities($program18_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date17" min="0" max="999"
         value="<?php print htmlentities($program18_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date18" min="0" max="999"
         value="<?php print htmlentities($program18_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date19" min="0" max="999"
         value="<?php print htmlentities($program18_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date20" min="0" max="999"
         value="<?php print htmlentities($program18_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date21" min="0" max="999"
         value="<?php print htmlentities($program18_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date22" min="0" max="999"
         value="<?php print htmlentities($program18_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date23" min="0" max="999"
         value="<?php print htmlentities($program18_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program18_date24" min="0" max="999"
         value="<?php print htmlentities($program18_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 19 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program19"
      value="<?php print htmlentities($program19) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program19_date1" min="0" max="999"
      value="<?php print htmlentities($program19_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date2" min="0" max="999"
      value="<?php print htmlentities($program19_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date3" min="0" max="999"
      value="<?php print htmlentities($program19_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date4" min="0" max="999"
      value="<?php print htmlentities($program19_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date5" min="0" max="999"
      value="<?php print htmlentities($program19_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date6" min="0" max="999"
      value="<?php print htmlentities($program19_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date7" min="0" max="999"
      value="<?php print htmlentities($program19_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date8" min="0" max="999"
      value="<?php print htmlentities($program19_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date9" min="0" max="999"
      value="<?php print htmlentities($program19_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date10" min="0" max="999"
      value="<?php print htmlentities($program19_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date11" min="0" max="999"
      value="<?php print htmlentities($program19_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program19_date12" min="0" max="999"
      value="<?php print htmlentities($program19_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program19_date13" min="0" max="999"
          value="<?php print htmlentities($program19_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program19_date14" min="0" max="999"
         value="<?php print htmlentities($program19_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date15" min="0" max="999"
         value="<?php print htmlentities($program19_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date16" min="0" max="999"
         value="<?php print htmlentities($program19_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date17" min="0" max="999"
         value="<?php print htmlentities($program19_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date18" min="0" max="999"
         value="<?php print htmlentities($program19_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date19" min="0" max="999"
         value="<?php print htmlentities($program19_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date20" min="0" max="999"
         value="<?php print htmlentities($program19_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date21" min="0" max="999"
         value="<?php print htmlentities($program19_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date22" min="0" max="999"
         value="<?php print htmlentities($program19_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date23" min="0" max="999"
         value="<?php print htmlentities($program19_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program19_date24" min="0" max="999"
         value="<?php print htmlentities($program19_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 20 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program20"
      value="<?php print htmlentities($program20) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program20_date1" min="0" max="999"
      value="<?php print htmlentities($program20_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date2" min="0" max="999"
      value="<?php print htmlentities($program20_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date3" min="0" max="999"
      value="<?php print htmlentities($program20_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date4" min="0" max="999"
      value="<?php print htmlentities($program20_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date5" min="0" max="999"
      value="<?php print htmlentities($program20_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date6" min="0" max="999"
      value="<?php print htmlentities($program20_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date7" min="0" max="999"
      value="<?php print htmlentities($program20_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date8" min="0" max="999"
      value="<?php print htmlentities($program20_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date9" min="0" max="999"
      value="<?php print htmlentities($program20_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date10" min="0" max="999"
      value="<?php print htmlentities($program20_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date11" min="0" max="999"
      value="<?php print htmlentities($program20_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program20_date12" min="0" max="999"
      value="<?php print htmlentities($program20_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program20_date13" min="0" max="999"
          value="<?php print htmlentities($program20_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program20_date14" min="0" max="999"
         value="<?php print htmlentities($program20_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date15" min="0" max="999"
         value="<?php print htmlentities($program20_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date16" min="0" max="999"
         value="<?php print htmlentities($program20_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date17" min="0" max="999"
         value="<?php print htmlentities($program20_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date18" min="0" max="999"
         value="<?php print htmlentities($program20_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date19" min="0" max="999"
         value="<?php print htmlentities($program20_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date20" min="0" max="999"
         value="<?php print htmlentities($program20_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date21" min="0" max="999"
         value="<?php print htmlentities($program20_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date22" min="0" max="999"
         value="<?php print htmlentities($program20_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date23" min="0" max="999"
         value="<?php print htmlentities($program20_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program20_date24" min="0" max="999"
         value="<?php print htmlentities($program20_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 21 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program21"
      value="<?php print htmlentities($program21) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program21_date1" min="0" max="999"
      value="<?php print htmlentities($program21_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date2" min="0" max="999"
      value="<?php print htmlentities($program21_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date3" min="0" max="999"
      value="<?php print htmlentities($program21_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date4" min="0" max="999"
      value="<?php print htmlentities($program21_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date5" min="0" max="999"
      value="<?php print htmlentities($program21_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date6" min="0" max="999"
      value="<?php print htmlentities($program21_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date7" min="0" max="999"
      value="<?php print htmlentities($program21_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date8" min="0" max="999"
      value="<?php print htmlentities($program21_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date9" min="0" max="999"
      value="<?php print htmlentities($program21_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date10" min="0" max="999"
      value="<?php print htmlentities($program21_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date11" min="0" max="999"
      value="<?php print htmlentities($program21_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program21_date12" min="0" max="999"
      value="<?php print htmlentities($program21_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program21_date13" min="0" max="999"
          value="<?php print htmlentities($program21_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program21_date14" min="0" max="999"
         value="<?php print htmlentities($program21_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date15" min="0" max="999"
         value="<?php print htmlentities($program21_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date16" min="0" max="999"
         value="<?php print htmlentities($program21_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date17" min="0" max="999"
         value="<?php print htmlentities($program21_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date18" min="0" max="999"
         value="<?php print htmlentities($program21_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date19" min="0" max="999"
         value="<?php print htmlentities($program21_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date20" min="0" max="999"
         value="<?php print htmlentities($program21_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date21" min="0" max="999"
         value="<?php print htmlentities($program21_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date22" min="0" max="999"
         value="<?php print htmlentities($program21_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date23" min="0" max="999"
         value="<?php print htmlentities($program21_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program21_date24" min="0" max="999"
         value="<?php print htmlentities($program21_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 22 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program22"
      value="<?php print htmlentities($program22) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program22_date1" min="0" max="999"
      value="<?php print htmlentities($program22_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date2" min="0" max="999"
      value="<?php print htmlentities($program22_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date3" min="0" max="999"
      value="<?php print htmlentities($program22_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date4" min="0" max="999"
      value="<?php print htmlentities($program22_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date5" min="0" max="999"
      value="<?php print htmlentities($program22_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date6" min="0" max="999"
      value="<?php print htmlentities($program22_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date7" min="0" max="999"
      value="<?php print htmlentities($program22_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date8" min="0" max="999"
      value="<?php print htmlentities($program22_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date9" min="0" max="999"
      value="<?php print htmlentities($program22_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date10" min="0" max="999"
      value="<?php print htmlentities($program22_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date11" min="0" max="999"
      value="<?php print htmlentities($program22_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program22_date12" min="0" max="999"
      value="<?php print htmlentities($program22_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program22_date13" min="0" max="999"
          value="<?php print htmlentities($program22_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program22_date14" min="0" max="999"
         value="<?php print htmlentities($program22_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date15" min="0" max="999"
         value="<?php print htmlentities($program22_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date16" min="0" max="999"
         value="<?php print htmlentities($program22_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date17" min="0" max="999"
         value="<?php print htmlentities($program22_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date18" min="0" max="999"
         value="<?php print htmlentities($program22_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date19" min="0" max="999"
         value="<?php print htmlentities($program22_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date20" min="0" max="999"
         value="<?php print htmlentities($program22_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date21" min="0" max="999"
         value="<?php print htmlentities($program22_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date22" min="0" max="999"
         value="<?php print htmlentities($program22_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date23" min="0" max="999"
         value="<?php print htmlentities($program22_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program22_date24" min="0" max="999"
         value="<?php print htmlentities($program22_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 23 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program23"
      value="<?php print htmlentities($program23) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program23_date1" min="0" max="999"
      value="<?php print htmlentities($program23_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date2" min="0" max="999"
      value="<?php print htmlentities($program23_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date3" min="0" max="999"
      value="<?php print htmlentities($program23_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date4" min="0" max="999"
      value="<?php print htmlentities($program23_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date5" min="0" max="999"
      value="<?php print htmlentities($program23_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date6" min="0" max="999"
      value="<?php print htmlentities($program23_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date7" min="0" max="999"
      value="<?php print htmlentities($program23_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date8" min="0" max="999"
      value="<?php print htmlentities($program23_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date9" min="0" max="999"
      value="<?php print htmlentities($program23_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date10" min="0" max="999"
      value="<?php print htmlentities($program23_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date11" min="0" max="999"
      value="<?php print htmlentities($program23_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program23_date12" min="0" max="999"
      value="<?php print htmlentities($program23_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program23_date13" min="0" max="999"
          value="<?php print htmlentities($program23_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program23_date14" min="0" max="999"
         value="<?php print htmlentities($program23_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date15" min="0" max="999"
         value="<?php print htmlentities($program23_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date16" min="0" max="999"
         value="<?php print htmlentities($program23_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date17" min="0" max="999"
         value="<?php print htmlentities($program23_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date18" min="0" max="999"
         value="<?php print htmlentities($program23_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date19" min="0" max="999"
         value="<?php print htmlentities($program23_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date20" min="0" max="999"
         value="<?php print htmlentities($program23_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date21" min="0" max="999"
         value="<?php print htmlentities($program23_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date22" min="0" max="999"
         value="<?php print htmlentities($program23_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date23" min="0" max="999"
         value="<?php print htmlentities($program23_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program23_date24" min="0" max="999"
         value="<?php print htmlentities($program23_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 24 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program24"
      value="<?php print htmlentities($program24) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program24_date1" min="0" max="999"
      value="<?php print htmlentities($program24_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date2" min="0" max="999"
      value="<?php print htmlentities($program24_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date3" min="0" max="999"
      value="<?php print htmlentities($program24_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date4" min="0" max="999"
      value="<?php print htmlentities($program24_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date5" min="0" max="999"
      value="<?php print htmlentities($program24_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date6" min="0" max="999"
      value="<?php print htmlentities($program24_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date7" min="0" max="999"
      value="<?php print htmlentities($program24_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date8" min="0" max="999"
      value="<?php print htmlentities($program24_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date9" min="0" max="999"
      value="<?php print htmlentities($program24_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date10" min="0" max="999"
      value="<?php print htmlentities($program24_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date11" min="0" max="999"
      value="<?php print htmlentities($program24_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program24_date12" min="0" max="999"
      value="<?php print htmlentities($program24_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
      <td><input type="number" name="program24_date13" min="0" max="999"
          value="<?php print htmlentities($program24_date13) ?>" onClick="this.select();"
          style="text-align:right;"></td>
     <td><input type="number" name="program24_date14" min="0" max="999"
         value="<?php print htmlentities($program24_date14) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date15" min="0" max="999"
         value="<?php print htmlentities($program24_date15) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date16" min="0" max="999"
         value="<?php print htmlentities($program24_date16) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date17" min="0" max="999"
         value="<?php print htmlentities($program24_date17) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date18" min="0" max="999"
         value="<?php print htmlentities($program24_date18) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date19" min="0" max="999"
         value="<?php print htmlentities($program24_date19) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date20" min="0" max="999"
         value="<?php print htmlentities($program24_date20) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date21" min="0" max="999"
         value="<?php print htmlentities($program24_date21) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date22" min="0" max="999"
         value="<?php print htmlentities($program24_date22) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date23" min="0" max="999"
         value="<?php print htmlentities($program24_date23) ?>" onClick="this.select();"
         style="text-align:right;"></td>
     <td><input type="number" name="program24_date24" min="0" max="999"
         value="<?php print htmlentities($program24_date24) ?>" onClick="this.select();"
         style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 25 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program25"
      value="<?php print htmlentities($program25) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program25_date1" min="0" max="999"
      value="<?php print htmlentities($program25_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date2" min="0" max="999"
      value="<?php print htmlentities($program25_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date3" min="0" max="999"
      value="<?php print htmlentities($program25_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date4" min="0" max="999"
      value="<?php print htmlentities($program25_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date5" min="0" max="999"
      value="<?php print htmlentities($program25_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date6" min="0" max="999"
      value="<?php print htmlentities($program25_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date7" min="0" max="999"
      value="<?php print htmlentities($program25_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date8" min="0" max="999"
      value="<?php print htmlentities($program25_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date9" min="0" max="999"
      value="<?php print htmlentities($program25_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date10" min="0" max="999"
      value="<?php print htmlentities($program25_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date11" min="0" max="999"
      value="<?php print htmlentities($program25_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date12" min="0" max="999"
      value="<?php print htmlentities($program25_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program25_date13" min="0" max="999"
      value="<?php print htmlentities($program25_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program25_date14" min="0" max="999"
     value="<?php print htmlentities($program25_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date15" min="0" max="999"
     value="<?php print htmlentities($program25_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date16" min="0" max="999"
     value="<?php print htmlentities($program25_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date17" min="0" max="999"
     value="<?php print htmlentities($program25_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date18" min="0" max="999"
     value="<?php print htmlentities($program25_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date19" min="0" max="999"
     value="<?php print htmlentities($program25_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date20" min="0" max="999"
     value="<?php print htmlentities($program25_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date21" min="0" max="999"
     value="<?php print htmlentities($program25_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date22" min="0" max="999"
     value="<?php print htmlentities($program25_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date23" min="0" max="999"
     value="<?php print htmlentities($program25_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program25_date24" min="0" max="999"
     value="<?php print htmlentities($program25_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 26 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program26"
      value="<?php print htmlentities($program26) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program26_date1" min="0" max="999"
      value="<?php print htmlentities($program26_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date2" min="0" max="999"
      value="<?php print htmlentities($program26_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date3" min="0" max="999"
      value="<?php print htmlentities($program26_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date4" min="0" max="999"
      value="<?php print htmlentities($program26_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date5" min="0" max="999"
      value="<?php print htmlentities($program26_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date6" min="0" max="999"
      value="<?php print htmlentities($program26_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date7" min="0" max="999"
      value="<?php print htmlentities($program26_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date8" min="0" max="999"
      value="<?php print htmlentities($program26_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date9" min="0" max="999"
      value="<?php print htmlentities($program26_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date10" min="0" max="999"
      value="<?php print htmlentities($program26_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date11" min="0" max="999"
      value="<?php print htmlentities($program26_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date12" min="0" max="999"
      value="<?php print htmlentities($program26_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program26_date13" min="0" max="999"
      value="<?php print htmlentities($program26_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program26_date14" min="0" max="999"
     value="<?php print htmlentities($program26_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date15" min="0" max="999"
     value="<?php print htmlentities($program26_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date16" min="0" max="999"
     value="<?php print htmlentities($program26_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date17" min="0" max="999"
     value="<?php print htmlentities($program26_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date18" min="0" max="999"
     value="<?php print htmlentities($program26_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date19" min="0" max="999"
     value="<?php print htmlentities($program26_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date20" min="0" max="999"
     value="<?php print htmlentities($program26_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date21" min="0" max="999"
     value="<?php print htmlentities($program26_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date22" min="0" max="999"
     value="<?php print htmlentities($program26_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date23" min="0" max="999"
     value="<?php print htmlentities($program26_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program26_date24" min="0" max="999"
     value="<?php print htmlentities($program26_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 27 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program27"
      value="<?php print htmlentities($program27) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program27_date1" min="0" max="999"
      value="<?php print htmlentities($program27_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date2" min="0" max="999"
      value="<?php print htmlentities($program27_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date3" min="0" max="999"
      value="<?php print htmlentities($program27_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date4" min="0" max="999"
      value="<?php print htmlentities($program27_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date5" min="0" max="999"
      value="<?php print htmlentities($program27_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date6" min="0" max="999"
      value="<?php print htmlentities($program27_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date7" min="0" max="999"
      value="<?php print htmlentities($program27_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date8" min="0" max="999"
      value="<?php print htmlentities($program27_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date9" min="0" max="999"
      value="<?php print htmlentities($program27_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date10" min="0" max="999"
      value="<?php print htmlentities($program27_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date11" min="0" max="999"
      value="<?php print htmlentities($program27_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date12" min="0" max="999"
      value="<?php print htmlentities($program27_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program27_date13" min="0" max="999"
      value="<?php print htmlentities($program27_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program27_date14" min="0" max="999"
     value="<?php print htmlentities($program27_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date15" min="0" max="999"
     value="<?php print htmlentities($program27_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date16" min="0" max="999"
     value="<?php print htmlentities($program27_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date17" min="0" max="999"
     value="<?php print htmlentities($program27_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date18" min="0" max="999"
     value="<?php print htmlentities($program27_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date19" min="0" max="999"
     value="<?php print htmlentities($program27_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date20" min="0" max="999"
     value="<?php print htmlentities($program27_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date21" min="0" max="999"
     value="<?php print htmlentities($program27_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date22" min="0" max="999"
     value="<?php print htmlentities($program27_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date23" min="0" max="999"
     value="<?php print htmlentities($program27_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program27_date24" min="0" max="999"
     value="<?php print htmlentities($program27_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 28 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program28"
      value="<?php print htmlentities($program28) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program28_date1" min="0" max="999"
      value="<?php print htmlentities($program28_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date2" min="0" max="999"
      value="<?php print htmlentities($program28_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date3" min="0" max="999"
      value="<?php print htmlentities($program28_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date4" min="0" max="999"
      value="<?php print htmlentities($program28_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date5" min="0" max="999"
      value="<?php print htmlentities($program28_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date6" min="0" max="999"
      value="<?php print htmlentities($program28_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date7" min="0" max="999"
      value="<?php print htmlentities($program28_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date8" min="0" max="999"
      value="<?php print htmlentities($program28_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date9" min="0" max="999"
      value="<?php print htmlentities($program28_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date10" min="0" max="999"
      value="<?php print htmlentities($program28_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date11" min="0" max="999"
      value="<?php print htmlentities($program28_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date12" min="0" max="999"
      value="<?php print htmlentities($program28_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program28_date13" min="0" max="999"
      value="<?php print htmlentities($program28_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program28_date14" min="0" max="999"
     value="<?php print htmlentities($program28_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date15" min="0" max="999"
     value="<?php print htmlentities($program28_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date16" min="0" max="999"
     value="<?php print htmlentities($program28_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date17" min="0" max="999"
     value="<?php print htmlentities($program28_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date18" min="0" max="999"
     value="<?php print htmlentities($program28_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date19" min="0" max="999"
     value="<?php print htmlentities($program28_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date20" min="0" max="999"
     value="<?php print htmlentities($program28_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date21" min="0" max="999"
     value="<?php print htmlentities($program28_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date22" min="0" max="999"
     value="<?php print htmlentities($program28_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date23" min="0" max="999"
     value="<?php print htmlentities($program28_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program28_date24" min="0" max="999"
     value="<?php print htmlentities($program28_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 29 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program29"
      value="<?php print htmlentities($program29) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program29_date1" min="0" max="999"
      value="<?php print htmlentities($program29_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date2" min="0" max="999"
      value="<?php print htmlentities($program29_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date3" min="0" max="999"
      value="<?php print htmlentities($program29_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date4" min="0" max="999"
      value="<?php print htmlentities($program29_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date5" min="0" max="999"
      value="<?php print htmlentities($program29_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date6" min="0" max="999"
      value="<?php print htmlentities($program29_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date7" min="0" max="999"
      value="<?php print htmlentities($program29_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date8" min="0" max="999"
      value="<?php print htmlentities($program29_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date9" min="0" max="999"
      value="<?php print htmlentities($program29_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date10" min="0" max="999"
      value="<?php print htmlentities($program29_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date11" min="0" max="999"
      value="<?php print htmlentities($program29_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date12" min="0" max="999"
      value="<?php print htmlentities($program29_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program29_date13" min="0" max="999"
      value="<?php print htmlentities($program29_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program29_date14" min="0" max="999"
     value="<?php print htmlentities($program29_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date15" min="0" max="999"
     value="<?php print htmlentities($program29_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date16" min="0" max="999"
     value="<?php print htmlentities($program29_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date17" min="0" max="999"
     value="<?php print htmlentities($program29_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date18" min="0" max="999"
     value="<?php print htmlentities($program29_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date19" min="0" max="999"
     value="<?php print htmlentities($program29_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date20" min="0" max="999"
     value="<?php print htmlentities($program29_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date21" min="0" max="999"
     value="<?php print htmlentities($program29_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date22" min="0" max="999"
     value="<?php print htmlentities($program29_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date23" min="0" max="999"
     value="<?php print htmlentities($program29_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program29_date24" min="0" max="999"
     value="<?php print htmlentities($program29_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 30 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program30"
      value="<?php print htmlentities($program30) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program30_date1" min="0" max="999"
      value="<?php print htmlentities($program30_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date2" min="0" max="999"
      value="<?php print htmlentities($program30_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date3" min="0" max="999"
      value="<?php print htmlentities($program30_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date4" min="0" max="999"
      value="<?php print htmlentities($program30_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date5" min="0" max="999"
      value="<?php print htmlentities($program30_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date6" min="0" max="999"
      value="<?php print htmlentities($program30_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date7" min="0" max="999"
      value="<?php print htmlentities($program30_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date8" min="0" max="999"
      value="<?php print htmlentities($program30_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date9" min="0" max="999"
      value="<?php print htmlentities($program30_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date10" min="0" max="999"
      value="<?php print htmlentities($program30_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date11" min="0" max="999"
      value="<?php print htmlentities($program30_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date12" min="0" max="999"
      value="<?php print htmlentities($program30_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program30_date13" min="0" max="999"
      value="<?php print htmlentities($program30_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program30_date14" min="0" max="999"
     value="<?php print htmlentities($program30_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date15" min="0" max="999"
     value="<?php print htmlentities($program30_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date16" min="0" max="999"
     value="<?php print htmlentities($program30_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date17" min="0" max="999"
     value="<?php print htmlentities($program30_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date18" min="0" max="999"
     value="<?php print htmlentities($program30_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date19" min="0" max="999"
     value="<?php print htmlentities($program30_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date20" min="0" max="999"
     value="<?php print htmlentities($program30_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date21" min="0" max="999"
     value="<?php print htmlentities($program30_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date22" min="0" max="999"
     value="<?php print htmlentities($program30_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date23" min="0" max="999"
     value="<?php print htmlentities($program30_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program30_date24" min="0" max="999"
     value="<?php print htmlentities($program30_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 31 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program31"
      value="<?php print htmlentities($program31) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program31_date1" min="0" max="999"
      value="<?php print htmlentities($program31_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date2" min="0" max="999"
      value="<?php print htmlentities($program31_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date3" min="0" max="999"
      value="<?php print htmlentities($program31_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date4" min="0" max="999"
      value="<?php print htmlentities($program31_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date5" min="0" max="999"
      value="<?php print htmlentities($program31_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date6" min="0" max="999"
      value="<?php print htmlentities($program31_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date7" min="0" max="999"
      value="<?php print htmlentities($program31_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date8" min="0" max="999"
      value="<?php print htmlentities($program31_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date9" min="0" max="999"
      value="<?php print htmlentities($program31_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date10" min="0" max="999"
      value="<?php print htmlentities($program31_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date11" min="0" max="999"
      value="<?php print htmlentities($program31_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date12" min="0" max="999"
      value="<?php print htmlentities($program31_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program31_date13" min="0" max="999"
      value="<?php print htmlentities($program31_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program31_date14" min="0" max="999"
     value="<?php print htmlentities($program31_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date15" min="0" max="999"
     value="<?php print htmlentities($program31_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date16" min="0" max="999"
     value="<?php print htmlentities($program31_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date17" min="0" max="999"
     value="<?php print htmlentities($program31_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date18" min="0" max="999"
     value="<?php print htmlentities($program31_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date19" min="0" max="999"
     value="<?php print htmlentities($program31_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date20" min="0" max="999"
     value="<?php print htmlentities($program31_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date21" min="0" max="999"
     value="<?php print htmlentities($program31_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date22" min="0" max="999"
     value="<?php print htmlentities($program31_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date23" min="0" max="999"
     value="<?php print htmlentities($program31_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program31_date24" min="0" max="999"
     value="<?php print htmlentities($program31_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 32 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program32"
      value="<?php print htmlentities($program32) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program32_date1" min="0" max="999"
      value="<?php print htmlentities($program32_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date2" min="0" max="999"
      value="<?php print htmlentities($program32_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date3" min="0" max="999"
      value="<?php print htmlentities($program32_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date4" min="0" max="999"
      value="<?php print htmlentities($program32_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date5" min="0" max="999"
      value="<?php print htmlentities($program32_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date6" min="0" max="999"
      value="<?php print htmlentities($program32_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date7" min="0" max="999"
      value="<?php print htmlentities($program32_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date8" min="0" max="999"
      value="<?php print htmlentities($program32_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date9" min="0" max="999"
      value="<?php print htmlentities($program32_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date10" min="0" max="999"
      value="<?php print htmlentities($program32_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date11" min="0" max="999"
      value="<?php print htmlentities($program32_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date12" min="0" max="999"
      value="<?php print htmlentities($program32_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program32_date13" min="0" max="999"
      value="<?php print htmlentities($program32_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program32_date14" min="0" max="999"
     value="<?php print htmlentities($program32_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date15" min="0" max="999"
     value="<?php print htmlentities($program32_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date16" min="0" max="999"
     value="<?php print htmlentities($program32_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date17" min="0" max="999"
     value="<?php print htmlentities($program32_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date18" min="0" max="999"
     value="<?php print htmlentities($program32_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date19" min="0" max="999"
     value="<?php print htmlentities($program32_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date20" min="0" max="999"
     value="<?php print htmlentities($program32_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date21" min="0" max="999"
     value="<?php print htmlentities($program32_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date22" min="0" max="999"
     value="<?php print htmlentities($program32_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date23" min="0" max="999"
     value="<?php print htmlentities($program32_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program32_date24" min="0" max="999"
     value="<?php print htmlentities($program32_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 33 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program33"
      value="<?php print htmlentities($program33) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program33_date1" min="0" max="999"
      value="<?php print htmlentities($program33_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date2" min="0" max="999"
      value="<?php print htmlentities($program33_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date3" min="0" max="999"
      value="<?php print htmlentities($program33_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date4" min="0" max="999"
      value="<?php print htmlentities($program33_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date5" min="0" max="999"
      value="<?php print htmlentities($program33_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date6" min="0" max="999"
      value="<?php print htmlentities($program33_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date7" min="0" max="999"
      value="<?php print htmlentities($program33_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date8" min="0" max="999"
      value="<?php print htmlentities($program33_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date9" min="0" max="999"
      value="<?php print htmlentities($program33_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date10" min="0" max="999"
      value="<?php print htmlentities($program33_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date11" min="0" max="999"
      value="<?php print htmlentities($program33_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date12" min="0" max="999"
      value="<?php print htmlentities($program33_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program33_date13" min="0" max="999"
      value="<?php print htmlentities($program33_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program33_date14" min="0" max="999"
     value="<?php print htmlentities($program33_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date15" min="0" max="999"
     value="<?php print htmlentities($program33_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date16" min="0" max="999"
     value="<?php print htmlentities($program33_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date17" min="0" max="999"
     value="<?php print htmlentities($program33_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date18" min="0" max="999"
     value="<?php print htmlentities($program33_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date19" min="0" max="999"
     value="<?php print htmlentities($program33_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date20" min="0" max="999"
     value="<?php print htmlentities($program33_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date21" min="0" max="999"
     value="<?php print htmlentities($program33_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date22" min="0" max="999"
     value="<?php print htmlentities($program33_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date23" min="0" max="999"
     value="<?php print htmlentities($program33_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program33_date24" min="0" max="999"
     value="<?php print htmlentities($program33_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 34 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program34"
      value="<?php print htmlentities($program34) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program34_date1" min="0" max="999"
      value="<?php print htmlentities($program34_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date2" min="0" max="999"
      value="<?php print htmlentities($program34_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date3" min="0" max="999"
      value="<?php print htmlentities($program34_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date4" min="0" max="999"
      value="<?php print htmlentities($program34_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date5" min="0" max="999"
      value="<?php print htmlentities($program34_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date6" min="0" max="999"
      value="<?php print htmlentities($program34_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date7" min="0" max="999"
      value="<?php print htmlentities($program34_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date8" min="0" max="999"
      value="<?php print htmlentities($program34_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date9" min="0" max="999"
      value="<?php print htmlentities($program34_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date10" min="0" max="999"
      value="<?php print htmlentities($program34_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date11" min="0" max="999"
      value="<?php print htmlentities($program34_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date12" min="0" max="999"
      value="<?php print htmlentities($program34_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program34_date13" min="0" max="999"
      value="<?php print htmlentities($program34_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program34_date14" min="0" max="999"
     value="<?php print htmlentities($program34_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date15" min="0" max="999"
     value="<?php print htmlentities($program34_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date16" min="0" max="999"
     value="<?php print htmlentities($program34_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date17" min="0" max="999"
     value="<?php print htmlentities($program34_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date18" min="0" max="999"
     value="<?php print htmlentities($program34_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date19" min="0" max="999"
     value="<?php print htmlentities($program34_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date20" min="0" max="999"
     value="<?php print htmlentities($program34_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date21" min="0" max="999"
     value="<?php print htmlentities($program34_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date22" min="0" max="999"
     value="<?php print htmlentities($program34_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date23" min="0" max="999"
     value="<?php print htmlentities($program34_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program34_date24" min="0" max="999"
     value="<?php print htmlentities($program34_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 35 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program35"
      value="<?php print htmlentities($program35) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program35_date1" min="0" max="999"
      value="<?php print htmlentities($program35_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date2" min="0" max="999"
      value="<?php print htmlentities($program35_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date3" min="0" max="999"
      value="<?php print htmlentities($program35_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date4" min="0" max="999"
      value="<?php print htmlentities($program35_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date5" min="0" max="999"
      value="<?php print htmlentities($program35_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date6" min="0" max="999"
      value="<?php print htmlentities($program35_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date7" min="0" max="999"
      value="<?php print htmlentities($program35_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date8" min="0" max="999"
      value="<?php print htmlentities($program35_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date9" min="0" max="999"
      value="<?php print htmlentities($program35_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date10" min="0" max="999"
      value="<?php print htmlentities($program35_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date11" min="0" max="999"
      value="<?php print htmlentities($program35_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date12" min="0" max="999"
      value="<?php print htmlentities($program35_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program35_date13" min="0" max="999"
      value="<?php print htmlentities($program35_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program35_date14" min="0" max="999"
     value="<?php print htmlentities($program35_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date15" min="0" max="999"
     value="<?php print htmlentities($program35_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date16" min="0" max="999"
     value="<?php print htmlentities($program35_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date17" min="0" max="999"
     value="<?php print htmlentities($program35_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date18" min="0" max="999"
     value="<?php print htmlentities($program35_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date19" min="0" max="999"
     value="<?php print htmlentities($program35_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date20" min="0" max="999"
     value="<?php print htmlentities($program35_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date21" min="0" max="999"
     value="<?php print htmlentities($program35_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date22" min="0" max="999"
     value="<?php print htmlentities($program35_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date23" min="0" max="999"
     value="<?php print htmlentities($program35_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program35_date24" min="0" max="999"
     value="<?php print htmlentities($program35_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 36 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program36"
      value="<?php print htmlentities($program36) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program36_date1" min="0" max="999"
      value="<?php print htmlentities($program36_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date2" min="0" max="999"
      value="<?php print htmlentities($program36_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date3" min="0" max="999"
      value="<?php print htmlentities($program36_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date4" min="0" max="999"
      value="<?php print htmlentities($program36_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date5" min="0" max="999"
      value="<?php print htmlentities($program36_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date6" min="0" max="999"
      value="<?php print htmlentities($program36_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date7" min="0" max="999"
      value="<?php print htmlentities($program36_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date8" min="0" max="999"
      value="<?php print htmlentities($program36_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date9" min="0" max="999"
      value="<?php print htmlentities($program36_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date10" min="0" max="999"
      value="<?php print htmlentities($program36_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date11" min="0" max="999"
      value="<?php print htmlentities($program36_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date12" min="0" max="999"
      value="<?php print htmlentities($program36_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program36_date13" min="0" max="999"
      value="<?php print htmlentities($program36_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program36_date14" min="0" max="999"
     value="<?php print htmlentities($program36_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date15" min="0" max="999"
     value="<?php print htmlentities($program36_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date16" min="0" max="999"
     value="<?php print htmlentities($program36_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date17" min="0" max="999"
     value="<?php print htmlentities($program36_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date18" min="0" max="999"
     value="<?php print htmlentities($program36_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date19" min="0" max="999"
     value="<?php print htmlentities($program36_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date20" min="0" max="999"
     value="<?php print htmlentities($program36_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date21" min="0" max="999"
     value="<?php print htmlentities($program36_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date22" min="0" max="999"
     value="<?php print htmlentities($program36_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date23" min="0" max="999"
     value="<?php print htmlentities($program36_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program36_date24" min="0" max="999"
     value="<?php print htmlentities($program36_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 37 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program37"
      value="<?php print htmlentities($program37) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program37_date1" min="0" max="999"
      value="<?php print htmlentities($program37_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date2" min="0" max="999"
      value="<?php print htmlentities($program37_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date3" min="0" max="999"
      value="<?php print htmlentities($program37_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date4" min="0" max="999"
      value="<?php print htmlentities($program37_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date5" min="0" max="999"
      value="<?php print htmlentities($program37_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date6" min="0" max="999"
      value="<?php print htmlentities($program37_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date7" min="0" max="999"
      value="<?php print htmlentities($program37_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date8" min="0" max="999"
      value="<?php print htmlentities($program37_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date9" min="0" max="999"
      value="<?php print htmlentities($program37_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date10" min="0" max="999"
      value="<?php print htmlentities($program37_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date11" min="0" max="999"
      value="<?php print htmlentities($program37_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date12" min="0" max="999"
      value="<?php print htmlentities($program37_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program37_date13" min="0" max="999"
      value="<?php print htmlentities($program37_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program37_date14" min="0" max="999"
     value="<?php print htmlentities($program37_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date15" min="0" max="999"
     value="<?php print htmlentities($program37_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date16" min="0" max="999"
     value="<?php print htmlentities($program37_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date17" min="0" max="999"
     value="<?php print htmlentities($program37_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date18" min="0" max="999"
     value="<?php print htmlentities($program37_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date19" min="0" max="999"
     value="<?php print htmlentities($program37_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date20" min="0" max="999"
     value="<?php print htmlentities($program37_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date21" min="0" max="999"
     value="<?php print htmlentities($program37_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date22" min="0" max="999"
     value="<?php print htmlentities($program37_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date23" min="0" max="999"
     value="<?php print htmlentities($program37_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program37_date24" min="0" max="999"
     value="<?php print htmlentities($program37_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 38 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program38"
      value="<?php print htmlentities($program38) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program38_date1" min="0" max="999"
      value="<?php print htmlentities($program38_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date2" min="0" max="999"
      value="<?php print htmlentities($program38_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date3" min="0" max="999"
      value="<?php print htmlentities($program38_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date4" min="0" max="999"
      value="<?php print htmlentities($program38_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date5" min="0" max="999"
      value="<?php print htmlentities($program38_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date6" min="0" max="999"
      value="<?php print htmlentities($program38_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date7" min="0" max="999"
      value="<?php print htmlentities($program38_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date8" min="0" max="999"
      value="<?php print htmlentities($program38_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date9" min="0" max="999"
      value="<?php print htmlentities($program38_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date10" min="0" max="999"
      value="<?php print htmlentities($program38_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date11" min="0" max="999"
      value="<?php print htmlentities($program38_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date12" min="0" max="999"
      value="<?php print htmlentities($program38_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program38_date13" min="0" max="999"
      value="<?php print htmlentities($program38_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program38_date14" min="0" max="999"
     value="<?php print htmlentities($program38_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date15" min="0" max="999"
     value="<?php print htmlentities($program38_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date16" min="0" max="999"
     value="<?php print htmlentities($program38_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date17" min="0" max="999"
     value="<?php print htmlentities($program38_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date18" min="0" max="999"
     value="<?php print htmlentities($program38_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date19" min="0" max="999"
     value="<?php print htmlentities($program38_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date20" min="0" max="999"
     value="<?php print htmlentities($program38_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date21" min="0" max="999"
     value="<?php print htmlentities($program38_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date22" min="0" max="999"
     value="<?php print htmlentities($program38_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date23" min="0" max="999"
     value="<?php print htmlentities($program38_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program38_date24" min="0" max="999"
     value="<?php print htmlentities($program38_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 39 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program39"
      value="<?php print htmlentities($program39) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program39_date1" min="0" max="999"
      value="<?php print htmlentities($program39_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date2" min="0" max="999"
      value="<?php print htmlentities($program39_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date3" min="0" max="999"
      value="<?php print htmlentities($program39_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date4" min="0" max="999"
      value="<?php print htmlentities($program39_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date5" min="0" max="999"
      value="<?php print htmlentities($program39_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date6" min="0" max="999"
      value="<?php print htmlentities($program39_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date7" min="0" max="999"
      value="<?php print htmlentities($program39_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date8" min="0" max="999"
      value="<?php print htmlentities($program39_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date9" min="0" max="999"
      value="<?php print htmlentities($program39_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date10" min="0" max="999"
      value="<?php print htmlentities($program39_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date11" min="0" max="999"
      value="<?php print htmlentities($program39_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date12" min="0" max="999"
      value="<?php print htmlentities($program39_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program39_date13" min="0" max="999"
      value="<?php print htmlentities($program39_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program39_date14" min="0" max="999"
     value="<?php print htmlentities($program39_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date15" min="0" max="999"
     value="<?php print htmlentities($program39_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date16" min="0" max="999"
     value="<?php print htmlentities($program39_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date17" min="0" max="999"
     value="<?php print htmlentities($program39_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date18" min="0" max="999"
     value="<?php print htmlentities($program39_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date19" min="0" max="999"
     value="<?php print htmlentities($program39_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date20" min="0" max="999"
     value="<?php print htmlentities($program39_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date21" min="0" max="999"
     value="<?php print htmlentities($program39_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date22" min="0" max="999"
     value="<?php print htmlentities($program39_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date23" min="0" max="999"
     value="<?php print htmlentities($program39_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program39_date24" min="0" max="999"
     value="<?php print htmlentities($program39_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 40 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program40"
      value="<?php print htmlentities($program40) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program40_date1" min="0" max="999"
      value="<?php print htmlentities($program40_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date2" min="0" max="999"
      value="<?php print htmlentities($program40_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date3" min="0" max="999"
      value="<?php print htmlentities($program40_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date4" min="0" max="999"
      value="<?php print htmlentities($program40_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date5" min="0" max="999"
      value="<?php print htmlentities($program40_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date6" min="0" max="999"
      value="<?php print htmlentities($program40_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date7" min="0" max="999"
      value="<?php print htmlentities($program40_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date8" min="0" max="999"
      value="<?php print htmlentities($program40_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date9" min="0" max="999"
      value="<?php print htmlentities($program40_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date10" min="0" max="999"
      value="<?php print htmlentities($program40_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date11" min="0" max="999"
      value="<?php print htmlentities($program40_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date12" min="0" max="999"
      value="<?php print htmlentities($program40_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program40_date13" min="0" max="999"
      value="<?php print htmlentities($program40_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program40_date14" min="0" max="999"
     value="<?php print htmlentities($program40_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date15" min="0" max="999"
     value="<?php print htmlentities($program40_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date16" min="0" max="999"
     value="<?php print htmlentities($program40_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date17" min="0" max="999"
     value="<?php print htmlentities($program40_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date18" min="0" max="999"
     value="<?php print htmlentities($program40_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date19" min="0" max="999"
     value="<?php print htmlentities($program40_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date20" min="0" max="999"
     value="<?php print htmlentities($program40_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date21" min="0" max="999"
     value="<?php print htmlentities($program40_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date22" min="0" max="999"
     value="<?php print htmlentities($program40_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date23" min="0" max="999"
     value="<?php print htmlentities($program40_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program40_date24" min="0" max="999"
     value="<?php print htmlentities($program40_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 41 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program41"
      value="<?php print htmlentities($program41) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program41_date1" min="0" max="999"
      value="<?php print htmlentities($program41_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date2" min="0" max="999"
      value="<?php print htmlentities($program41_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date3" min="0" max="999"
      value="<?php print htmlentities($program41_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date4" min="0" max="999"
      value="<?php print htmlentities($program41_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date5" min="0" max="999"
      value="<?php print htmlentities($program41_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date6" min="0" max="999"
      value="<?php print htmlentities($program41_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date7" min="0" max="999"
      value="<?php print htmlentities($program41_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date8" min="0" max="999"
      value="<?php print htmlentities($program41_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date9" min="0" max="999"
      value="<?php print htmlentities($program41_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date10" min="0" max="999"
      value="<?php print htmlentities($program41_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date11" min="0" max="999"
      value="<?php print htmlentities($program41_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date12" min="0" max="999"
      value="<?php print htmlentities($program41_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program41_date13" min="0" max="999"
      value="<?php print htmlentities($program41_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program41_date14" min="0" max="999"
     value="<?php print htmlentities($program41_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date15" min="0" max="999"
     value="<?php print htmlentities($program41_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date16" min="0" max="999"
     value="<?php print htmlentities($program41_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date17" min="0" max="999"
     value="<?php print htmlentities($program41_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date18" min="0" max="999"
     value="<?php print htmlentities($program41_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date19" min="0" max="999"
     value="<?php print htmlentities($program41_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date20" min="0" max="999"
     value="<?php print htmlentities($program41_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date21" min="0" max="999"
     value="<?php print htmlentities($program41_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date22" min="0" max="999"
     value="<?php print htmlentities($program41_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date23" min="0" max="999"
     value="<?php print htmlentities($program41_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program41_date24" min="0" max="999"
     value="<?php print htmlentities($program41_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 42 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program42"
      value="<?php print htmlentities($program42) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program42_date1" min="0" max="999"
      value="<?php print htmlentities($program42_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date2" min="0" max="999"
      value="<?php print htmlentities($program42_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date3" min="0" max="999"
      value="<?php print htmlentities($program42_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date4" min="0" max="999"
      value="<?php print htmlentities($program42_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date5" min="0" max="999"
      value="<?php print htmlentities($program42_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date6" min="0" max="999"
      value="<?php print htmlentities($program42_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date7" min="0" max="999"
      value="<?php print htmlentities($program42_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date8" min="0" max="999"
      value="<?php print htmlentities($program42_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date9" min="0" max="999"
      value="<?php print htmlentities($program42_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date10" min="0" max="999"
      value="<?php print htmlentities($program42_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date11" min="0" max="999"
      value="<?php print htmlentities($program42_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date12" min="0" max="999"
      value="<?php print htmlentities($program42_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program42_date13" min="0" max="999"
      value="<?php print htmlentities($program42_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program42_date14" min="0" max="999"
     value="<?php print htmlentities($program42_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date15" min="0" max="999"
     value="<?php print htmlentities($program42_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date16" min="0" max="999"
     value="<?php print htmlentities($program42_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date17" min="0" max="999"
     value="<?php print htmlentities($program42_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date18" min="0" max="999"
     value="<?php print htmlentities($program42_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date19" min="0" max="999"
     value="<?php print htmlentities($program42_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date20" min="0" max="999"
     value="<?php print htmlentities($program42_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date21" min="0" max="999"
     value="<?php print htmlentities($program42_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date22" min="0" max="999"
     value="<?php print htmlentities($program42_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date23" min="0" max="999"
     value="<?php print htmlentities($program42_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program42_date24" min="0" max="999"
     value="<?php print htmlentities($program42_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 43 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program43"
      value="<?php print htmlentities($program43) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program43_date1" min="0" max="999"
      value="<?php print htmlentities($program43_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date2" min="0" max="999"
      value="<?php print htmlentities($program43_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date3" min="0" max="999"
      value="<?php print htmlentities($program43_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date4" min="0" max="999"
      value="<?php print htmlentities($program43_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date5" min="0" max="999"
      value="<?php print htmlentities($program43_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date6" min="0" max="999"
      value="<?php print htmlentities($program43_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date7" min="0" max="999"
      value="<?php print htmlentities($program43_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date8" min="0" max="999"
      value="<?php print htmlentities($program43_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date9" min="0" max="999"
      value="<?php print htmlentities($program43_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date10" min="0" max="999"
      value="<?php print htmlentities($program43_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date11" min="0" max="999"
      value="<?php print htmlentities($program43_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date12" min="0" max="999"
      value="<?php print htmlentities($program43_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program43_date13" min="0" max="999"
      value="<?php print htmlentities($program43_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program43_date14" min="0" max="999"
     value="<?php print htmlentities($program43_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date15" min="0" max="999"
     value="<?php print htmlentities($program43_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date16" min="0" max="999"
     value="<?php print htmlentities($program43_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date17" min="0" max="999"
     value="<?php print htmlentities($program43_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date18" min="0" max="999"
     value="<?php print htmlentities($program43_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date19" min="0" max="999"
     value="<?php print htmlentities($program43_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date20" min="0" max="999"
     value="<?php print htmlentities($program43_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date21" min="0" max="999"
     value="<?php print htmlentities($program43_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date22" min="0" max="999"
     value="<?php print htmlentities($program43_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date23" min="0" max="999"
     value="<?php print htmlentities($program43_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program43_date24" min="0" max="999"
     value="<?php print htmlentities($program43_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 44 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program44"
      value="<?php print htmlentities($program44) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program44_date1" min="0" max="999"
      value="<?php print htmlentities($program44_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date2" min="0" max="999"
      value="<?php print htmlentities($program44_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date3" min="0" max="999"
      value="<?php print htmlentities($program44_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date4" min="0" max="999"
      value="<?php print htmlentities($program44_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date5" min="0" max="999"
      value="<?php print htmlentities($program44_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date6" min="0" max="999"
      value="<?php print htmlentities($program44_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date7" min="0" max="999"
      value="<?php print htmlentities($program44_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date8" min="0" max="999"
      value="<?php print htmlentities($program44_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date9" min="0" max="999"
      value="<?php print htmlentities($program44_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date10" min="0" max="999"
      value="<?php print htmlentities($program44_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date11" min="0" max="999"
      value="<?php print htmlentities($program44_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date12" min="0" max="999"
      value="<?php print htmlentities($program44_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program44_date13" min="0" max="999"
      value="<?php print htmlentities($program44_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program44_date14" min="0" max="999"
     value="<?php print htmlentities($program44_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date15" min="0" max="999"
     value="<?php print htmlentities($program44_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date16" min="0" max="999"
     value="<?php print htmlentities($program44_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date17" min="0" max="999"
     value="<?php print htmlentities($program44_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date18" min="0" max="999"
     value="<?php print htmlentities($program44_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date19" min="0" max="999"
     value="<?php print htmlentities($program44_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date20" min="0" max="999"
     value="<?php print htmlentities($program44_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date21" min="0" max="999"
     value="<?php print htmlentities($program44_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date22" min="0" max="999"
     value="<?php print htmlentities($program44_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date23" min="0" max="999"
     value="<?php print htmlentities($program44_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program44_date24" min="0" max="999"
     value="<?php print htmlentities($program44_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 45 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program45"
      value="<?php print htmlentities($program45) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program45_date1" min="0" max="999"
      value="<?php print htmlentities($program45_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date2" min="0" max="999"
      value="<?php print htmlentities($program45_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date3" min="0" max="999"
      value="<?php print htmlentities($program45_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date4" min="0" max="999"
      value="<?php print htmlentities($program45_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date5" min="0" max="999"
      value="<?php print htmlentities($program45_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date6" min="0" max="999"
      value="<?php print htmlentities($program45_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date7" min="0" max="999"
      value="<?php print htmlentities($program45_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date8" min="0" max="999"
      value="<?php print htmlentities($program45_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date9" min="0" max="999"
      value="<?php print htmlentities($program45_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date10" min="0" max="999"
      value="<?php print htmlentities($program45_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date11" min="0" max="999"
      value="<?php print htmlentities($program45_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date12" min="0" max="999"
      value="<?php print htmlentities($program45_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program45_date13" min="0" max="999"
      value="<?php print htmlentities($program45_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program45_date14" min="0" max="999"
     value="<?php print htmlentities($program45_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date15" min="0" max="999"
     value="<?php print htmlentities($program45_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date16" min="0" max="999"
     value="<?php print htmlentities($program45_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date17" min="0" max="999"
     value="<?php print htmlentities($program45_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date18" min="0" max="999"
     value="<?php print htmlentities($program45_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date19" min="0" max="999"
     value="<?php print htmlentities($program45_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date20" min="0" max="999"
     value="<?php print htmlentities($program45_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date21" min="0" max="999"
     value="<?php print htmlentities($program45_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date22" min="0" max="999"
     value="<?php print htmlentities($program45_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date23" min="0" max="999"
     value="<?php print htmlentities($program45_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program45_date24" min="0" max="999"
     value="<?php print htmlentities($program45_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 46 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program46"
      value="<?php print htmlentities($program46) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program46_date1" min="0" max="999"
      value="<?php print htmlentities($program46_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date2" min="0" max="999"
      value="<?php print htmlentities($program46_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date3" min="0" max="999"
      value="<?php print htmlentities($program46_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date4" min="0" max="999"
      value="<?php print htmlentities($program46_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date5" min="0" max="999"
      value="<?php print htmlentities($program46_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date6" min="0" max="999"
      value="<?php print htmlentities($program46_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date7" min="0" max="999"
      value="<?php print htmlentities($program46_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date8" min="0" max="999"
      value="<?php print htmlentities($program46_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date9" min="0" max="999"
      value="<?php print htmlentities($program46_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date10" min="0" max="999"
      value="<?php print htmlentities($program46_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date11" min="0" max="999"
      value="<?php print htmlentities($program46_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date12" min="0" max="999"
      value="<?php print htmlentities($program46_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program46_date13" min="0" max="999"
      value="<?php print htmlentities($program46_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program46_date14" min="0" max="999"
     value="<?php print htmlentities($program46_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date15" min="0" max="999"
     value="<?php print htmlentities($program46_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date16" min="0" max="999"
     value="<?php print htmlentities($program46_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date17" min="0" max="999"
     value="<?php print htmlentities($program46_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date18" min="0" max="999"
     value="<?php print htmlentities($program46_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date19" min="0" max="999"
     value="<?php print htmlentities($program46_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date20" min="0" max="999"
     value="<?php print htmlentities($program46_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date21" min="0" max="999"
     value="<?php print htmlentities($program46_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date22" min="0" max="999"
     value="<?php print htmlentities($program46_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date23" min="0" max="999"
     value="<?php print htmlentities($program46_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program46_date24" min="0" max="999"
     value="<?php print htmlentities($program46_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 47 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program47"
      value="<?php print htmlentities($program47) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program47_date1" min="0" max="999"
      value="<?php print htmlentities($program47_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date2" min="0" max="999"
      value="<?php print htmlentities($program47_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date3" min="0" max="999"
      value="<?php print htmlentities($program47_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date4" min="0" max="999"
      value="<?php print htmlentities($program47_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date5" min="0" max="999"
      value="<?php print htmlentities($program47_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date6" min="0" max="999"
      value="<?php print htmlentities($program47_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date7" min="0" max="999"
      value="<?php print htmlentities($program47_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date8" min="0" max="999"
      value="<?php print htmlentities($program47_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date9" min="0" max="999"
      value="<?php print htmlentities($program47_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date10" min="0" max="999"
      value="<?php print htmlentities($program47_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date11" min="0" max="999"
      value="<?php print htmlentities($program47_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date12" min="0" max="999"
      value="<?php print htmlentities($program47_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program47_date13" min="0" max="999"
      value="<?php print htmlentities($program47_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program47_date14" min="0" max="999"
     value="<?php print htmlentities($program47_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date15" min="0" max="999"
     value="<?php print htmlentities($program47_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date16" min="0" max="999"
     value="<?php print htmlentities($program47_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date17" min="0" max="999"
     value="<?php print htmlentities($program47_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date18" min="0" max="999"
     value="<?php print htmlentities($program47_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date19" min="0" max="999"
     value="<?php print htmlentities($program47_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date20" min="0" max="999"
     value="<?php print htmlentities($program47_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date21" min="0" max="999"
     value="<?php print htmlentities($program47_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date22" min="0" max="999"
     value="<?php print htmlentities($program47_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date23" min="0" max="999"
     value="<?php print htmlentities($program47_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program47_date24" min="0" max="999"
     value="<?php print htmlentities($program47_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 48 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program48"
      value="<?php print htmlentities($program48) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program48_date1" min="0" max="999"
      value="<?php print htmlentities($program48_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date2" min="0" max="999"
      value="<?php print htmlentities($program48_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date3" min="0" max="999"
      value="<?php print htmlentities($program48_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date4" min="0" max="999"
      value="<?php print htmlentities($program48_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date5" min="0" max="999"
      value="<?php print htmlentities($program48_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date6" min="0" max="999"
      value="<?php print htmlentities($program48_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date7" min="0" max="999"
      value="<?php print htmlentities($program48_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date8" min="0" max="999"
      value="<?php print htmlentities($program48_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date9" min="0" max="999"
      value="<?php print htmlentities($program48_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date10" min="0" max="999"
      value="<?php print htmlentities($program48_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date11" min="0" max="999"
      value="<?php print htmlentities($program48_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date12" min="0" max="999"
      value="<?php print htmlentities($program48_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program48_date13" min="0" max="999"
      value="<?php print htmlentities($program48_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program48_date14" min="0" max="999"
     value="<?php print htmlentities($program48_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date15" min="0" max="999"
     value="<?php print htmlentities($program48_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date16" min="0" max="999"
     value="<?php print htmlentities($program48_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date17" min="0" max="999"
     value="<?php print htmlentities($program48_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date18" min="0" max="999"
     value="<?php print htmlentities($program48_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date19" min="0" max="999"
     value="<?php print htmlentities($program48_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date20" min="0" max="999"
     value="<?php print htmlentities($program48_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date21" min="0" max="999"
     value="<?php print htmlentities($program48_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date22" min="0" max="999"
     value="<?php print htmlentities($program48_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date23" min="0" max="999"
     value="<?php print htmlentities($program48_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program48_date24" min="0" max="999"
     value="<?php print htmlentities($program48_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 49 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program49"
      value="<?php print htmlentities($program49) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program49_date1" min="0" max="999"
      value="<?php print htmlentities($program49_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date2" min="0" max="999"
      value="<?php print htmlentities($program49_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date3" min="0" max="999"
      value="<?php print htmlentities($program49_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date4" min="0" max="999"
      value="<?php print htmlentities($program49_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date5" min="0" max="999"
      value="<?php print htmlentities($program49_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date6" min="0" max="999"
      value="<?php print htmlentities($program49_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date7" min="0" max="999"
      value="<?php print htmlentities($program49_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date8" min="0" max="999"
      value="<?php print htmlentities($program49_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date9" min="0" max="999"
      value="<?php print htmlentities($program49_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date10" min="0" max="999"
      value="<?php print htmlentities($program49_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date11" min="0" max="999"
      value="<?php print htmlentities($program49_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date12" min="0" max="999"
      value="<?php print htmlentities($program49_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program49_date13" min="0" max="999"
      value="<?php print htmlentities($program49_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program49_date14" min="0" max="999"
     value="<?php print htmlentities($program49_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date15" min="0" max="999"
     value="<?php print htmlentities($program49_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date16" min="0" max="999"
     value="<?php print htmlentities($program49_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date17" min="0" max="999"
     value="<?php print htmlentities($program49_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date18" min="0" max="999"
     value="<?php print htmlentities($program49_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date19" min="0" max="999"
     value="<?php print htmlentities($program49_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date20" min="0" max="999"
     value="<?php print htmlentities($program49_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date21" min="0" max="999"
     value="<?php print htmlentities($program49_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date22" min="0" max="999"
     value="<?php print htmlentities($program49_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date23" min="0" max="999"
     value="<?php print htmlentities($program49_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program49_date24" min="0" max="999"
     value="<?php print htmlentities($program49_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
<form>
<tr> <!-- Program 50 -->
  <td style="left: 0; position: sticky; z-index: 9998;"><input type="text" name="program50"
      value="<?php print htmlentities($program50) ?>"onClick="this.select();"></td>

  <td><input type="number" name="program50_date1" min="0" max="999"
      value="<?php print htmlentities($program50_date1) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date2" min="0" max="999"
      value="<?php print htmlentities($program50_date2) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date3" min="0" max="999"
      value="<?php print htmlentities($program50_date3) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date4" min="0" max="999"
      value="<?php print htmlentities($program50_date4) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date5" min="0" max="999"
      value="<?php print htmlentities($program50_date5) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date6" min="0" max="999"
      value="<?php print htmlentities($program50_date6) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date7" min="0" max="999"
      value="<?php print htmlentities($program50_date7) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date8" min="0" max="999"
      value="<?php print htmlentities($program50_date8) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date9" min="0" max="999"
      value="<?php print htmlentities($program50_date9) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date10" min="0" max="999"
      value="<?php print htmlentities($program50_date10) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date11" min="0" max="999"
      value="<?php print htmlentities($program50_date11) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date12" min="0" max="999"
      value="<?php print htmlentities($program50_date12) ?>" onClick="this.select();"
      style="text-align:right;"></td>
  <td><input type="number" name="program50_date13" min="0" max="999"
      value="<?php print htmlentities($program50_date13) ?>" onClick="this.select();"
      style="text-align:right;"></td>
 <td><input type="number" name="program50_date14" min="0" max="999"
     value="<?php print htmlentities($program50_date14) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date15" min="0" max="999"
     value="<?php print htmlentities($program50_date15) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date16" min="0" max="999"
     value="<?php print htmlentities($program50_date16) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date17" min="0" max="999"
     value="<?php print htmlentities($program50_date17) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date18" min="0" max="999"
     value="<?php print htmlentities($program50_date18) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date19" min="0" max="999"
     value="<?php print htmlentities($program50_date19) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date20" min="0" max="999"
     value="<?php print htmlentities($program50_date20) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date21" min="0" max="999"
     value="<?php print htmlentities($program50_date21) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date22" min="0" max="999"
     value="<?php print htmlentities($program50_date22) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date23" min="0" max="999"
     value="<?php print htmlentities($program50_date23) ?>" onClick="this.select();"
     style="text-align:right;"></td>
 <td><input type="number" name="program50_date24" min="0" max="999"
     value="<?php print htmlentities($program50_date24) ?>" onClick="this.select();"
     style="text-align:right;"></td>
</tr>
<input type="submit" style="display:none"> </form>
</table>

<br><br>

<h4> Clear Product </h4>

<form>

<table id="tool_table">
  <tr>
    <th> Product to Clear </th>
  </tr>
  <tr>
    <td><input type="text" name="delete_program" value="Type Product Name" onClick="this.select();"></td>
  </tr>
</table>
<p style="color: gray">
<i><span style="font-size:12px"><strong>Note:</strong> This will clear out Program Name,
  Volumes, & Process Assumptions. </i></span>
</p>
<input type="submit" value="Submit" class="submit">
</form>

<br><br><br><br>

<p align="left">
<span class="emphasis">M4</span><span style="color:gray">Applications</span>
</p>

</body>
</html>
