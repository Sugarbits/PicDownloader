<?php  
if(!isset($_GET['url'])){
	$url="http://i2.kknews.cc/large/b0a0000fe74786ad3a5";//圖片所在網址
}else{
	$url = "".$_GET['url']."";
}
//$url = "http://icons.wxug.com/i/c/h/rain.gif";
$pic=file_get_contents($url);//讀取圖片
$type=getimagesize($url);//取得圖片資訊
$file_content=base64_encode($pic);//base64編碼
/*switch($type[2]){//判斷圖片的類型
    case 1:$img_type="gif";break;  
    case 2:$img_type="jpg";break;  
    case 3:$img_type="png";break;  
}
$img='data:image/'.$img_type.';base64,'.$file_content;
echo '<img src="'.$img.'" />';//顯示在網頁上
//data url 格式
*/
switch($type[2]){//判斷圖片的類型
    case 1:$img_type=1;break;  
    case 2:$img_type=2;break;  
    case 3:$img_type=3;break;  
}  
$img='data:image/'.$img_type.';base64,'.$file_content;
echo $img_type."@".$file_content;//輸出
//26 aplebt (both small and captal letter)& 「+/=」

?>  