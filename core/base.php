<?php
function con(){
    return mysqli_connect("Localhost","root","","blog");
}

$info = array(
    "name" => "Zaw Min Htwe",
    "short" => "ZMH",
    "description" => "အမြဲတမ်းသုံးနေမည့် အချက်အလက်များ ကို ထည့်သွင်း ဖော်ပြထားရန် ရေးသားခြင်းဖြစ်ပါသည်။ "
);

$role = ["Admin","Editor","User"];


$url = "http://{$_SERVER['HTTP_HOST']}/PhpCRUD/_1SampleBlog_43/";


