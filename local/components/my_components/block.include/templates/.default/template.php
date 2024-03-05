<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


$showContent = function() use ($arResult){
    if ($arResult["FILE"] <> '')
		include($arResult["FILE"]);
};
// Собрал комплексный класс $sectionClass, значения берутся из параметров компонента
$sectionClass = array('sec-inner');
if ($arParams['SEC_PADDING_X'] !== 'N') $sectionClass[] = '_p-x';
if ($arParams['SEC_PADDING_Y'] !== 'N') $sectionClass[] = '_p-y';
if ($arParams['BG_COLOR']) $sectionClass[] = 'section-color';
// if ($arParams['SECTION_CLASS']) $sectionClass[] = $arParams['SECTION_CLASS'];






?>
      <section class="section <?= $arParams['SECTION_CLASS'] ?>">
        <div class="wrap">
		<hr class="line">
		<div class="<?=implode(' ',$sectionClass)?>">


			<?
			// Условие на заголовок 1) или тег <h1...2> или 2) div c классом например div.h2
if(trim($arParams['TITLE'])) {
	if (mb_strpos($arParams['HEADER'], ".")) {
		echo "<h2 class='{$arParams['HEADER']}'>" . $arParams['TITLE'] . "</h2>";
	} else {
		echo "<{$arParams['HEADER']}>" . $arParams['TITLE'] . "</{$arParams['HEADER']}>";
	}
}

if(trim($arParams['DESCRIPTION'])) {
	echo "<p>" . $arParams['DESCRIPTION'] . "</p>";

}


			?>
				<?=$showContent();?>
			</div>
		</div>
		</section>
<?














var_dump($arParams);

// if($arResult["FILE"] <> '')
// 	include($arResult["FILE"]);

// 	var_dump($arParams['BG_COLOR']);

	// $arr = array ( 'AREA_FILE_SHOW' => 'file', 'AREA_FILE_SUFFIX' => 'inc', 'BG_COLOR' => 'GRAY', 'CLASS' => 'new-class', 'EDIT_TEMPLATE' => 'file_inc.php', 'PATH' => '/company/include/sec_include.php', 'COMPONENT_TEMPLATE' => '.default', 'CACHE_TYPE' => 'A', '~AREA_FILE_SHOW' => 'file', '~AREA_FILE_SUFFIX' => 'inc', '~BG_COLOR' => 'GRAY', '~CLASS' => 'new-class', '~EDIT_TEMPLATE' => '', '~PATH' => 'include/sec_include.php', '~COMPONENT_TEMPLATE' => '.default', '~CACHE_TYPE' => 'A', );

