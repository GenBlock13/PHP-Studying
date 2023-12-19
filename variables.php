
<?

use function PHPSTORM_META\type;

$ticket_price = 3000;
$vip_ticket = $ticket_price + 500;
$a = $b = $c = 711;
$phrase = 'Hello, Alabama!';

$days = [];
$days += [85];


echo "Price of tiket is: $ticket_price \r\n<br />";
echo "Price for VIP is: $vip_ticket \n<br />";
echo "$ticket_price\n";
$a = 999;
echo "$a\r\n$b\n$c";
// unset($phrase);
echo $phrase."\n<br />";
echo "$ticket_price\r\n<br />";
echo $days[0];
echo PHP_FLOAT_MAX."<br />";
echo is_int($a);

$str_1 = '';
if (isset($str_1)){
    echo "It's Alive!";
}
