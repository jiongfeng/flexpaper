<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$file_name="sample.pdf";
$dir = dirname(__FILE__);
$source =$dir ."\\pdf\\" .$file_name;
$convert = $dir . "\\docs\\{$file_name}.swf";
$command = $dir . "\\pdf2swf.exe -t \"{$source}\" -s flashversion=9 -o  \"{$convert}\"";
$re;
exec($command,$re,$re);
