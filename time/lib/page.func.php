    <head>
        <meta charset="utf-8">
    </head>


<?php
error_reporting(E_ALL||~E_NOTICE);
//require_once '../include.php';
//$sql="select * from users";
//$totalRows=getReultNum($sql);
//echo $totalRows;
//$pageSize=2;
//得到总页码数
//$totalPage=ceil($totalRows/$pageSize);
//echo $totalPage;
//$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
//if($page<1||$page==null||!is_numeric($page)){
  //  $page=1;
//}
//if($page>=$totalPage)$page=$totalPage;
//echo $page;
//$offset=($page-1)*$pageSize;
//$sql="select * from users limit ".$offset.",$pageSize";
//$rows=fetchAll($sql);
//print_r($rows);
//foreach($rows as $row){
    //echo "编号：".$row['id'],"<br/>";
    //echo "用户名称：".$row['username'],"<br/>";
    //echo "用户密码：".$row['passwd'],"<br/>";
   // echo "年龄：".$row['age'],"<hr/>";
//}
//echo showPage($page,$totalPage);
//echo "<hr/>";

function showPage($page,$totalPage,$where=null,$sep="&nbsp;"){
    $where=($where==null)?null:"&".$where;
    $url = $_SERVER ['PHP_SELF'];
    $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
    $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
    $prevPage=($page>=1)?$page-1:1;
    $nextPage=($Page>=$totalPage)?$totalPage:$page+1;
    $prev = ($page == 1) ? "上一页" : "<a href='{$url}?page={$prevPage}{$where}'>上一页</a>";
    $next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?page={$nextPage}{$where}'>下一页</a>";
    $str = "总共{$totalPage}页/当前是第{$page}页";
    for($i = 1; $i <= $totalPage; $i ++) {
        //当前页无连接
        if ($page == $i) {
            $p .= "[{$i}]";
        } else {
            $p .= "<a href='{$url}?page={$i}{$where}'>[{$i}]</a>";
        }
    }
    $pageStr=$str.$sep . $index .$sep. $prev.$sep . $p.$sep . $next.$sep . $last;
    return $pageStr;
}



