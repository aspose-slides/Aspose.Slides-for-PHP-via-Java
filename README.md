# PHP Library for PowerPoint File Formats

Aspose.Slides for PHP via Java is a PowerPoint PHP API for creating, manipulating, and managing presentations. It allows applications and developers to read, write, convert, and manipulate PowerPoint presentations in PHP. Using this API, you get to manipulate all elements in a presentation: slides, tables, text, charts, shapes, images, SmartArt diagrams, etc. 

Aspose.Slides for PHP via Java supports export operations to PDF, PDF/A, HTML, XPS, JPG, PNG, and other image formats. This PowerPoint PHP API provides extensive PPT and PPTX features in PHP: merge, clone, split, compare, print PPT and PPTX presentations in PHP. 

Aspose.Slides for PHP API works without dependencies.

## PHP PowerPoint Library Features

- Create or clone existing slides from templates.
- Save & open files to & from streams.
- Generate presentations from databases.
- Create shapes and add text to shapes on slides.
- Work with PowerPoint tables.
- Handle text & shape formatting.
- Remove or apply protection on shapes.
- Embed Excel charts as OLE objects in slides.
- Work with ActiveX components.

## Read & Write PowerPoint Files
**Microsoft PowerPoint:** PPT, PPTX, PPS, POT, PPSX, PPTM, PPSM, POTX, POTM
**OpenOffice:** ODP

## Save PowerPoint Files As 
**Fixed Layout:** PDF, PDF/A, XPS
**Images:** JPEG, PNG, BMP, TIFF, GIFS, SVG
**Web:** HTML

## Getting Started with Aspose.Slides for PHP via Java

Aspose.Slides for PHP via Java consists of 3 individual parts: the script wrapper (aspose.slides-xx.x.php), the java wrapper (aspose.slides.php-xx.x.jar), and Aspose.Slides for PHP via Java. These components communicate via a PHP/Java Bridge whereas both require separate environments & processes for execution.

### Prerequisites
1. JDK
2. PHP/Java Bridge
3. Web Server like Tomcat
4. PHP

### Installation

1. Install Tomcat on any location such as `\java\apache-tomcat-9.0.24`.
2. Copy JavaBridge.war to Tomcat's `webapps` folder such as `\java\apache-tomcat-9.0.24\webapps`.
3. Run `\bin\startup.bat`. JavaBridge.war will be deployed to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.
4. Copy aspose-slides-xx.x.jar and aspose.slides.php-xx.x.jar to a `lib` folder such as `\java\apache-tomcat-9.0.24\webapps\JavaBridge\WEB-INF\lib`.
5. Test http://localhost:8080/JavaBridge/test.php to confirm that PHP works fine.
6. Copy aspose.slides.php and example.php to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.
7. Open http://localhost:8080/JavaBridge/example.php or create your own PHP file (see the examples below)

You will find the Jar and PHP library in the `vendor/aspose/slides` folder.

### Convert Presentation to Multiple Formats in PHP

```php
<?php
require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("aspose.slides.php");
 
use aspose\slides;
 
$prest = new slides\Presentation("template.pptx");
$prest->save("output.pdf", slides\SaveFormat::Pdf);
$prest->save("output.xps", slides\SaveFormat::Xps);
$prest->save("output.tiff", slides\SaveFormat::Tiff);
?>
```

### Create Slides Thumbnails in PHP

```php
<?php
require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("aspose.slides.php");
 
use aspose\slides\Presentation;
use javax\imageio\ImageIO;
use java\io\File;
 
$prest = new Presentation("template.pptx");
$sld = $prest->getSlides()->get_Item(0);
$image = $sld->getThumbnail(1, 1);
ImageIO::write($image, "jpeg", new File("output.jpg"));
?>
```

[Product Page](https://products.aspose.com/slides/php-java) | [Documentation](https://docs.aspose.com/slides/phpjava/) | [API Reference](https://apireference.aspose.com/slides/php) | [Code Examples](https://github.com/aspose-slides/Aspose.Slides-for-Java) | [Blog](https://blog.aspose.com/category/slides/) | [Free Support](https://forum.aspose.com/c/slides) | [Temporary License](https://purchase.aspose.com/temporary-license)
