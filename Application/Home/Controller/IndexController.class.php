<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $form = D( 'Form' )->find();    // 推荐不要使用封装好的数据库查询方法,细节日后更新
        dump( $form ); 
        exit;
        $this->show("<p>我爱北京天安门</p>");
    }
}
