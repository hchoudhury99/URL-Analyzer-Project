<?php

$files = glob("/home/fa18/355/chha6538/public_html/cs355/uploads/*.txt");

foreach($files as $file) {

$content = file_get_contents($file);
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $content, $match);

echo "<pre>";
print_r($match[0]); 
echo "</pre>";

echo "INCASE OF FAILURE, IP ADDRESS RETURNS THE URL.<br>";

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#1"; 
var_dump($match[0][0]);
echo "IP ADDRESS";
$a = parse_url($match[0][0], PHP_URL_HOST);
$aa = gethostbyname($a);
var_dump($aa);
echo "SCHEME";
var_dump(parse_url($match[0][0], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][0], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][0], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][0], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][0], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][0], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][0], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][0], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#2"; 
var_dump($match[0][1]);
echo "IP ADDRESS";
$b = parse_url($match[0][1], PHP_URL_HOST);
$bb = gethostbyname($b);
var_dump($bb);
echo "SCHEME";
var_dump(parse_url($match[0][1], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][1], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][1], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][1], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][1], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][1], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][1], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][1], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#3"; 
var_dump($match[0][2]);
echo "IP ADDRESS";
$c = parse_url($match[0][2], PHP_URL_HOST);
$cc = gethostbyname($c);
var_dump($cc);
echo "SCHEME";
var_dump(parse_url($match[0][2], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][2], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][2], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][2], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][2], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][2], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][2], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][2], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#4"; 
var_dump($match[0][3]);
echo "IP ADDRESS";
$d = parse_url($match[0][3], PHP_URL_HOST);
$dd = gethostbyname($d);
var_dump($dd);
echo "SCHEME";
var_dump(parse_url($match[0][3], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][3], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][3], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][3], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][3], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][3], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][3], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][3], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#5"; 
var_dump($match[0][4]);
echo "IP ADDRESS";
$e = parse_url($match[0][4], PHP_URL_HOST);
$ee = gethostbyname($e);
var_dump($ee);
echo "SCHEME";
var_dump(parse_url($match[0][4], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][4], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][4], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][4], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][4], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][4], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][4], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][4], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#6"; 
var_dump($match[0][5]);
echo "IP ADDRESS";
$f = parse_url($match[0][5], PHP_URL_HOST);
$ff = gethostbyname($f);
var_dump($ff);
echo "SCHEME";
var_dump(parse_url($match[0][5], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][5], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][5], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][5], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][5], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][5], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][5], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][5], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#7"; 
var_dump($match[0][6]);
echo "IP ADDRESS";
$g = parse_url($match[0][6], PHP_URL_HOST);
$gg = gethostbyname($g);
var_dump($gg);
echo "SCHEME";
var_dump(parse_url($match[0][6], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][6], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][6], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][6], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][6], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][6], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][6], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][6], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#8"; 
var_dump($match[0][7]);
echo "IP ADDRESS";
$h = parse_url($match[0][7], PHP_URL_HOST);
$hh = gethostbyname($h);
var_dump($hh);
echo "SCHEME";
var_dump(parse_url($match[0][7], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][7], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][7], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][7], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][7], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][7], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][7], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][7], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#9"; 
var_dump($match[0][8]);
echo "IP ADDRESS";
$i = parse_url($match[0][8], PHP_URL_HOST);
$ii = gethostbyname($i);
var_dump($ii);
echo "SCHEME";
var_dump(parse_url($match[0][8], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][8], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][8], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][8], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][8], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][8], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][8], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][8], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#10"; 
var_dump($match[0][9]);
echo "IP ADDRESS";
$j = parse_url($match[0][9], PHP_URL_HOST);
$jj = gethostbyname($j);
var_dump($jj);
echo "SCHEME";
var_dump(parse_url($match[0][9], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][9], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][9], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][9], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][9], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][9], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][9], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][9], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#11"; 
var_dump($match[0][10]);
echo "IP ADDRESS";
$k = parse_url($match[0][10], PHP_URL_HOST);
$kk = gethostbyname($k);
var_dump($kk);
echo "SCHEME";
var_dump(parse_url($match[0][10], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][10], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][10], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][10], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][10], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][10], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][10], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][10], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#12"; 
var_dump($match[0][11]);
echo "IP ADDRESS";
$l = parse_url($match[0][11], PHP_URL_HOST);
$ll = gethostbyname($l);
var_dump($ll);
echo "SCHEME";
var_dump(parse_url($match[0][11], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][11], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][11], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][11], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][11], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][11], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][11], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][11], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#13"; 
var_dump($match[0][12]);
echo "IP ADDRESS";
$m = parse_url($match[0][12], PHP_URL_HOST);
$mm = gethostbyname($m);
var_dump($mm);
echo "SCHEME";
var_dump(parse_url($match[0][12], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][12], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][12], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][12], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][12], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][12], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][12], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][12], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#14"; 
var_dump($match[0][13]);
echo "IP ADDRESS";
$n = parse_url($match[0][13], PHP_URL_HOST);
$nn = gethostbyname($n);
var_dump($nn);
echo "SCHEME";
var_dump(parse_url($match[0][13], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][13], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][13], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][13], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][13], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][13], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][13], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][13], PHP_URL_FRAGMENT));

echo "----------------------------------------------------------------------------------------------------------------<br>";

echo "URL#15"; 
var_dump($match[0][14]);
echo "IP ADDRESS";
$o = parse_url($match[0][14], PHP_URL_HOST);
$oo = gethostbyname($o);
var_dump($oo);
echo "SCHEME";
var_dump(parse_url($match[0][14], PHP_URL_SCHEME));
echo "USER";
var_dump(parse_url($match[0][14], PHP_URL_USER));
echo "PASS";
var_dump(parse_url($match[0][14], PHP_URL_PASS));
echo "HOST";
var_dump(parse_url($match[0][14], PHP_URL_HOST));
echo "PORT";
var_dump(parse_url($match[0][14], PHP_URL_PORT));
echo "PATH";
var_dump(parse_url($match[0][14], PHP_URL_PATH));
echo "QUERY";
var_dump(parse_url($match[0][14], PHP_URL_QUERY));
echo "FRAGMENT";
var_dump(parse_url($match[0][14], PHP_URL_FRAGMENT));

}

?>