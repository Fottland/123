<?php
/*Реализуйте функцию getHexletBirthday(), которая возвращает дату
 основания Хекслета в виде timestamp. Хекслет был основан 01.01.2012.*/
 function getHexletBirthday()
 {
     return mktime(0, 0, 0, 1, 1, 2012);
 }