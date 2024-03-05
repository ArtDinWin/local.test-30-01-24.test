<?


function testWrite() {
    echo "123";
}


// чтобы свойство страницы вывести классом
function getShowSidebar(){
    global $APPLICATION;
    if($APPLICATION->GetPageProperty("LEFT_S") == "Y"){
        return "Y";
    } else {
        return "N";
    }

 }


//своя отложенная функция
 $my_title = "12345";

 function myShowTitle($t="title"){
     global $APPLICATION;
     echo $APPLICATION->AddBufferContent("myGetTitle");
 }
 function mySetTitle($t){
     global $my_title;
     $my_title = $t;
 }
 function myGetTitle(){
     global $my_title;
     return $my_title;
 }


?>