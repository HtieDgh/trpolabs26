<?php namespace timohin;
class MyLog extends \core\LogAbstract implements \core\LogInterface{
    public static function log($str){
        self::Instance()->log[]=['msg'=>$str];
    }
    public static function write(){
        self::Instance()->_write();
    }
    public function _write(){
        $log_str='';
        foreach($this->log as $v){
            $log_str.= "{$v['msg']}\r\n";
        }
        if(!file_exists("log")){
            mkdir("log");
        }
        file_put_contents("log\\".date('d-m-Y\TH.i.s.u').'.log',rtrim($log_str));
        echo $log_str;
    }
}

?>