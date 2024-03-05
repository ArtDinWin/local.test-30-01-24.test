<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
?>
<!-- <sidebar> -->



<?
// более понятная запись пример другой
ob_start();
$val_left_2 = $APPLICATION->GetPageProperty("LEFT_S");
    echo 'SomeText ' . $val_left_2;
    echo ' SomeText ';


?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
                    "ROOT_MENU_TYPE" => "left",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "ALLOW_MULTI_SELECT" => "N"
                    ),
                    false,
                    array(
                        "ACTIVE_COMPONENT" => "Y"
                    )
                );?>

<div class="content-block">
    <div class="content-block-inner">
        <h3><?=GetMessage('CFT_NEWS')?></h3>
        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR."include/news.php",
                            Array(),
                            Array("MODE"=>"html")
                        );
                        ?>
    </div>
</div>

<div class="content-block">
    <div class="content-block-inner">

        <?
                        $APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
                            "PAGE" => "#SITE_DIR#search/",
                        ),
                            false
                        );
                        ?>
    </div>
</div>

<div class="information-block">
    <div class="top"></div>
    <div class="information-block-inner">
        <h3><?=GetMessage('CFT_FEATURED')?></h3>
        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR."include/random.php",
                            Array(),
                            Array("MODE"=>"html")
                        );
                        ?>
    </div>
    <div class="bottom"></div>
</div>
<?

    
    $out1 = ob_get_contents();

    ob_end_clean();
$APPLICATION->AddViewContent('header',$out1);
?>