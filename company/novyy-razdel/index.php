<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("LEFT_S", "Y");
$APPLICATION->SetTitle("Новый раздел");
?><?$APPLICATION->IncludeComponent(
	"my_components:block.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"BG_COLOR" => "N",
		"DESCRIPTION" => "Описание блока",
		"EDIT_TEMPLATE" => "",
		"HEADER" => "",
		"PATH" => "include/sec_include.php",
		"SECTION_CLASS" => "",
		"SEC_PADDING_X" => "Y",
		"SEC_PADDING_Y" => "Y",
		"TITLE" => "Заголовок блока"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>