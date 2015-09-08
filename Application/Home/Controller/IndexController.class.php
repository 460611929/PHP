<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;

class IndexController extends Controller
{
    public function index($p=1)
    {
        echo $p;
        if (IS_POST) {
            $key = I('post.search_key');
                $kugou = new \Components\kugou();
                $result = $kugou->getList($key="三天三夜",$p);
                $count=$result['data']['total'];
                $page=new Page($count,10);
                $show=$page->show();
                $songs = $result['data']['songs'];
                foreach ($songs as $k => $v) {
                    $second = $v['timelength'] / 1000;
                    $songs[$k]['timelength'] = $this->changeTimeType($second);
                }
                $this->assign("songs", $songs);
                $this->assign("show",$show);
                $this->assign("count",$count);
                $this->assign("key",$key);
        }
        $this->display();
    }


    public function getMusicList()
    {

    }

    /**
     *      把秒数转换为时分秒的格式
     * @param Int $times 时间，单位 秒
     * @return String
     */
    function secToTime($times)
    {
        $result = '00:00:00';
        if ($times > 0) {
            $hour = floor($times / 3600);
            $minute = floor(($times - 3600 * $hour) / 60);
            $second = floor((($times - 3600 * $hour) - 60 * $minute) % 60);
            $result = $hour . ':' . $minute . ':' . $second;
        }
        return $result;
    }

    function changeTimeType($seconds)
    {
        if ($seconds > 3600) {
            $hours = intval($seconds / 3600);
            $minutes = $seconds600;
            $time = $hours . ":" . gmstrftime('%M:%S', $minutes);
        } else {
            $time = gmstrftime('%M:%S', $seconds);
        }
        return $time;
    }


}