<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appName = htmlspecialchars($_POST['appName']);
    $appDescription = htmlspecialchars($_POST['appDescription']);
    $appFeatures = htmlspecialchars($_POST['appFeatures']);
    
    // প্রেজেন্টেশন তৈরি
    $presentationContent = "অ্যাপের নাম: $appName\n\nবর্ণনা: $appDescription\n\nফিচার:\n$appFeatures";

    // ফাইল তৈরি করুন
    $filename = "$appName.pptx";
    createPresentation($filename, $presentationContent);
    
    // ফলাফল দেখান
    echo "<h1>প্রেজেন্টেশন তৈরি হয়েছে!</h1>";
    echo "<a href='$filename' download>এখনই ডাউনলোড করুন</a>";
}

function createPresentation($filename, $content) {
    // `PHPPresentation` লাইব্রেরি ব্যবহার করুন
    require_once 'vendor/autoload.php';

    $objPHPPresentation = new \PhpOffice\PhpPresentation\PhpPresentation();
    $currentSlide = $objPHPPresentation->getActiveSlide();

    // স্লাইডের জন্য বিষয়বস্তু যুক্ত করুন
    $shape = $currentSlide->createRichTextShape();
    $shape->setHeight(300);
    $shape->setWidth(600);
    $shape->setOffsetX(180);
    $shape->setOffsetY(180);
    $shape->getActiveParagraph()->createTextRun($content);

    // ফাইল সংরক্ষণ করুন
    $writer = \PhpOffice\PhpPresentation\IOFactory::createWriter($objPHPPresentation, 'PowerPoint2007');
    $writer->save($filename);
}
?>
