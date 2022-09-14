[![Github All Releases](https://img.shields.io/github/downloads/atom/atom/total.svg)]()
# php-calculate-time-ago
this random code i made calculates how many seconds, minutes, hours, days, months, and years ago a date was from the current time

how 2 use:
```php
require("timecalc.php");
$timecalc = new time_calc();
$ago = $timecalc->time_ago("2000-05-30"); // Y-m-d
echo($ago); // 22 years ago
```


i had originally made this for squared
