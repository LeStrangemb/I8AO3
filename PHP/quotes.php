<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 19-3-2019
 * Time: 14:18
 */

/**
 * de herodoc syntax wordt gebruikt om lange tekst mee te maken. dit doe je zo:
 *
 */
echo <<<TEKST

So in this chapter i am going to explain the difference between single and double quotes.
<br>Single quoted strings are the easiest way to specify a string.
<br>This method is used when we want the output to be exactly as how it is written.
<br>With double quotes you are able to put your declared variables in it which will be replaced with the
value you gave them. 
TEKST;
