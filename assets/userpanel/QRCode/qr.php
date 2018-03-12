<?php
	require_once("src\qrcode.php");
	use Endroid\QrCode\QrCode;
    if(isset($_GET['text']))
    {
        $text=$_GET['text'];
        $qr=new QrCode();
    	$qr->setText($text)
    		->setSize(150)
    		->setPadding(10)
    		->setForegroundColor(["r"=>1,'g'=>100,'b'=>201])
            ->setBackgroundColor(["r"=>245,'g'=>245,'b'=>245])
    		->render();
    }
?>