<?php namespace timohin;
class MyLog extends \core\LogAbstract implements \core\LogInterface{
    public static function log($str){
        self::Instance()->log[]=['msg'=>$str, 'date'=>date("d-m-Y H:i:s")];
    }
    public static function write(){
        self::Instance()->_write();
    }
    public function _write(){
        foreach($this->log as $v){
            echo "({$v['date']}) {$v['msg']}\r\n";
        }
    }
}

?>