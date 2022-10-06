<?php
/*
$date = new DateTime('2020-01-01 15:35:00');
$date->add( DateInterval::createFromDateString('2 days 5 minutes'));

//$date->setTimezone(new DateTimeZone("America/Sao_Paulo"));

echo $date->format('d-m-Y H:i:s');
*/

/*
$date1 = new DateTime('2020-01-01 15:35:00');
$date2 = new DateTime('2020-01-13 15:35:00');
$diff = $date1->diff($date2);

if($date1 > $date2) {
    echo "Date 1 é maior <br/>";
} else {
    echo "Date 2 é maior <br/>";
}

echo $diff->format('%a');
*/

$today = new DateTime();
$end = new DateTime('2022-12-31');

$diff = $today->diff($end);

echo $diff->format('Faltam %m meses e %a dias');
