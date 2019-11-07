# Php

<https://stackoverflow.com/questions/50853265/understanding-fatal-error-cannot-use-temporary-expression-in-write-context>

  이 문제가지고 엄청 고생했음. 아주 바보같아, 결론은 변수 앞에 $ 안 붙여서 발생한 문제였음.
  

  
<https://www.php.net/manual/en/timezones.php>

  : Time zone setting
  
<https://www.w3schools.com/php/func_date_date.asp>

  : Date format
  
<https://www.php.net/manual/en/function.strtotime.php>

<https://stackoverflow.com/questions/15391942/php-time-minus-time-to-minutes>

  : Str to Time (use it for time calculation)
  
<https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_strtotime>

  : Str to Time time format reference -> not only D-M-Y, T-M-D also available.
  
 
<https://www.geeksforgeeks.org/php-intdiv-function/>

  : integer division
  
  
<https://stackoverflow.com/questions/8285557/use-query-twice-mysql-fetch-array>
  
  : use fetch_array() more than twice.


"SELECT s.NAME FROM Subject as s, Participant as p Where p.STUDENTID=".$Sid." AND s.ID=p.SUBJECTID"
