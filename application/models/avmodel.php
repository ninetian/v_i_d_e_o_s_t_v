<?php
require_once 'avbasemodel.php';
class avModel extends avbaseModel{
  protected $_dataStruct = '*';
  protected $_datatopicStruct = '*';
  protected $_dramListStruct = '*';

  public function __construct(){
     parent::__construct();
  }
  public function onlinevideo($limit = 10){
    $atime = date('Ymd');
    $sql = sprintf("UPDATE `av_video_head` SET `atime`=%d WHERE `flag`=1 AND `atime`=20880409 LIMIT %d",$atime,$limit);
    $this->db->query($sql);
  }
  public function getUserWatchLog($uid,$life = 12){
    $endtime = time() - $life*3600;
    $sql = sprintf("SELECT * FROM `av_freelog` WHERE `uid`=%d AND `endtime`>=%d",$uid,$endtime);
    $return = array();
    $list = $this->db->query($sql)->result_array();
    foreach($list as $v){
      $return[] = $v['vid'];
    }
    return $return;
  }
  public function addUserWatchLog($uid,$vid,$life = 12){
    if(!$uid || !$vid){
      return false;
    }
    $endtime = time() - $life*3600;
    $sql = sprintf("SELECT * FROM `av_freelog` WHERE `uid`=%d AND `vid`=%d AND `endtime`>=%d LIMIT 1",$uid,$vid,$endtime);
    $row = $this->db->query($sql)->row_array();
    if($row){
      return $row['vid'];
    }
    $data = array('uid'=>$uid,'vid'=>$vid,'endtime'=>time());
    $this->db->insert('`av_freelog`',$data);
    return $this->db->insert_id();
  }
  public function getVideoPlayInfoByid($vid,$playnum = 1){
    $table = sprintf("`av_video_drama%d`",$vid%6);
    $sql = sprintf("SELECT vh.`title`,vb.`playmode` FROM `av_video_head` as vh LEFT JOIN `av_video_body` as vb ON(vh.vid=vb.vid) WHERE vh.vid=%d LIMIT 1",$vid);
    $row = $this->db->query($sql)->row_array();
    $row['vlist'] = $this->getVideoDramaList($vid);
    $play = $row['vlist'][$playnum];
    $play = $play ? $play : array();
    $info = array_merge($row,$play);
    return $info;
  } 
}
?>
