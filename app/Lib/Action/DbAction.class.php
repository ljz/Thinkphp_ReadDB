<?
class DbAction extends Action {
    public function db(){
        $Data = M('Data'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();
        }
}


?>
