<?php
# Import Aspose.Slides for PHP via Java
require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("lib/aspose.slides.php");

use aspose\slides\Presentation;
use aspose\slides\ShapeType;
use aspose\slides\SaveFormat;

# Instantiate a Presentation object that represents a presentation file
$presentation = new Presentation();
$slide = $presentation->getSlides()->get_Item(0);
$slide->getShapes()->addAutoShape(ShapeType::Line, 50, 150, 300, 0);
$presentation->save("NewPresentation.pptx", SaveFormat::Pptx);
?>