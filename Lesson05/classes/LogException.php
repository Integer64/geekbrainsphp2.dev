<?php

namespace Application\Lesson05\classes;

class LogException{
    public function writeLog(\Exception $e ){
        $fp = fopen(__DIR__.'/../../Log/PDOErrorsLog.txt', 'a');
        date_default_timezone_set('UTC');
        fwrite($fp, date('H:i') ." ". $e->getMessage() ."\n".$e->getTraceAsString() . "\n");
        fclose($fp);
    }

} 