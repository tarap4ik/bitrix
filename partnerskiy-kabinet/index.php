<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерский кабинет");
?><?$APPLICATION->IncludeComponent(
	"components:partner", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CNT" => "4",
		"CNT_ALL" => "2",
		"CNT_ROW" => "2"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>