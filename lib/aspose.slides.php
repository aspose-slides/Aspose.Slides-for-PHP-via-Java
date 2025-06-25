<?php 
namespace aspose\slides;
use Java;
class Point2DFloat extends Java {
	static private $_className = "com.aspose.slides.Point2DFloat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static $instance;
    static function Float(...$argv){
        if(!isset(self::$instance)){
            self::$instance = new Point2DFloat(...$argv);
        }
        return self::$instance;
    }
}
class Point2DDouble extends Java {
	static private $_className = "com.aspose.slides.Point2DDouble";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static $instance;
    static function Double(...$argv){
        if(!isset(self::$instance)){
            self::$instance = new Point2DDouble(...$argv);
        }
        return self::$instance;
    }
}

class PptReadException extends Java {
	static private $_className = "com.aspose.slides.PptReadException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesCommentsLayoutingOptions extends Java {
	static private $_className = "com.aspose.slides.NotesCommentsLayoutingOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SaveOptionsFactory extends Java {
	static private $_className = "com.aspose.slides.SaveOptionsFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideShowTransition extends Java {
	static private $_className = "com.aspose.slides.SlideShowTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class StyleType extends Java {
	const Style1 = 0;
	const Style2 = 1;
	const Style3 = 2;
	const Style4 = 3;
	const Style5 = 4;
	const Style6 = 5;
	const Style7 = 6;
	const Style8 = 7;
	const Style9 = 8;
	const Style10 = 9;
	const Style11 = 10;
	const Style12 = 11;
	const Style13 = 12;
	const Style14 = 13;
	const Style15 = 14;
	const Style16 = 15;
	const Style17 = 16;
	const Style18 = 17;
	const Style19 = 18;
	const Style20 = 19;
	const Style21 = 20;
	const Style22 = 21;
	const Style23 = 22;
	const Style24 = 23;
	const Style25 = 24;
	const Style26 = 25;
	const Style27 = 26;
	const Style28 = 27;
	const Style29 = 28;
	const Style30 = 29;
	const Style31 = 30;
	const Style32 = 31;
	const Style33 = 32;
	const Style34 = 33;
	const Style35 = 34;
	const Style36 = 35;
	const Style37 = 36;
	const Style38 = 37;
	const Style39 = 38;
	const Style40 = 39;
	const Style41 = 40;
	const Style42 = 41;
	const Style43 = 42;
	const Style44 = 43;
	const Style45 = 44;
	const Style46 = 45;
	const Style47 = 46;
	const Style48 = 47;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.StyleType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VideoPlayerHtmlControllerFactory extends Java {
	static private $_className = "com.aspose.slides.VideoPlayerHtmlControllerFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtShape extends Java {
	static private $_className = "com.aspose.slides.SmartArtShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextFrameFormat extends Java {
	static private $_className = "com.aspose.slides.TextFrameFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Legend extends Java {
	static private $_className = "com.aspose.slides.Legend";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresetColor extends Java {
	const NotDefined = -1;
	const AliceBlue = 0;
	const AntiqueWhite = 1;
	const Aqua = 2;
	const Aquamarine = 3;
	const Azure = 4;
	const Beige = 5;
	const Bisque = 6;
	const Black = 7;
	const BlanchedAlmond = 8;
	const Blue = 9;
	const BlueViolet = 10;
	const Brown = 11;
	const BurlyWood = 12;
	const CadetBlue = 13;
	const Chartreuse = 14;
	const Chocolate = 15;
	const Coral = 16;
	const CornflowerBlue = 17;
	const Cornsilk = 18;
	const Crimson = 19;
	const Cyan = 20;
	const DarkBlue = 21;
	const DarkCyan = 22;
	const DarkGoldenrod = 23;
	const DarkGray = 24;
	const DarkGreen = 25;
	const DarkKhaki = 26;
	const DarkMagenta = 27;
	const DarkOliveGreen = 28;
	const DarkOrange = 29;
	const DarkOrchid = 30;
	const DarkRed = 31;
	const DarkSalmon = 32;
	const DarkSeaGreen = 33;
	const DarkSlateBlue = 34;
	const DarkSlateGray = 35;
	const DarkTurquoise = 36;
	const DarkViolet = 37;
	const DeepPink = 38;
	const DeepSkyBlue = 39;
	const DimGray = 40;
	const DodgerBlue = 41;
	const Firebrick = 42;
	const FloralWhite = 43;
	const ForestGreen = 44;
	const Fuchsia = 45;
	const Gainsboro = 46;
	const GhostWhite = 47;
	const Gold = 48;
	const Goldenrod = 49;
	const Gray = 50;
	const Green = 51;
	const GreenYellow = 52;
	const Honeydew = 53;
	const HotPink = 54;
	const IndianRed = 55;
	const Indigo = 56;
	const Ivory = 57;
	const Khaki = 58;
	const Lavender = 59;
	const LavenderBlush = 60;
	const LawnGreen = 61;
	const LemonChiffon = 62;
	const LightBlue = 63;
	const LightCoral = 64;
	const LightCyan = 65;
	const LightGoldenrodYellow = 66;
	const LightGray = 67;
	const LightGreen = 68;
	const LightPink = 69;
	const LightSalmon = 70;
	const LightSeaGreen = 71;
	const LightSkyBlue = 72;
	const LightSlateGray = 73;
	const LightSteelBlue = 74;
	const LightYellow = 75;
	const Lime = 76;
	const LimeGreen = 77;
	const Linen = 78;
	const Magenta = 79;
	const Maroon = 80;
	const MediumAquamarine = 81;
	const MediumBlue = 82;
	const MediumOrchid = 83;
	const MediumPurple = 84;
	const MediumSeaGreen = 85;
	const MediumSlateBlue = 86;
	const MediumSpringGreen = 87;
	const MediumTurquoise = 88;
	const MediumVioletRed = 89;
	const MidnightBlue = 90;
	const MintCream = 91;
	const MistyRose = 92;
	const Moccasin = 93;
	const NavajoWhite = 94;
	const Navy = 95;
	const OldLace = 96;
	const Olive = 97;
	const OliveDrab = 98;
	const Orange = 99;
	const OrangeRed = 100;
	const Orchid = 101;
	const PaleGoldenrod = 102;
	const PaleGreen = 103;
	const PaleTurquoise = 104;
	const PaleVioletRed = 105;
	const PapayaWhip = 106;
	const PeachPuff = 107;
	const Peru = 108;
	const Pink = 109;
	const Plum = 110;
	const PowderBlue = 111;
	const Purple = 112;
	const Red = 113;
	const RosyBrown = 114;
	const RoyalBlue = 115;
	const SaddleBrown = 116;
	const Salmon = 117;
	const SandyBrown = 118;
	const SeaGreen = 119;
	const SeaShell = 120;
	const Sienna = 121;
	const Silver = 122;
	const SkyBlue = 123;
	const SlateBlue = 124;
	const SlateGray = 125;
	const Snow = 126;
	const SpringGreen = 127;
	const SteelBlue = 128;
	const Tan = 129;
	const Teal = 130;
	const Thistle = 131;
	const Tomato = 132;
	const Turquoise = 133;
	const Violet = 134;
	const Wheat = 135;
	const White = 136;
	const WhiteSmoke = 137;
	const Yellow = 138;
	const YellowGreen = 139;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PresetColor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InOutTransition extends Java {
	static private $_className = "com.aspose.slides.InOutTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ResponsiveHtmlController extends Java {
	static private $_className = "com.aspose.slides.ResponsiveHtmlController";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OptionalBlackTransition extends Java {
	static private $_className = "com.aspose.slides.OptionalBlackTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientStyle extends Java {
	const Default = 0;
	const PowerPointUI = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.GradientStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TemplateContext extends Java {
	static private $_className = "com.aspose.slides.TemplateContext";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorAdditiveType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Base = 1;
	const Sum = 2;
	const Replace = 3;
	const Multiply = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BehaviorAdditiveType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtQuickStyleType extends Java {
	const SimpleFill = 0;
	const WhiteOutline = 1;
	const SubtleEffect = 2;
	const ModerateEffect = 3;
	const IntenceEffect = 4;
	const Polished = 5;
	const Inset = 6;
	const Cartoon = 7;
	const Powder = 8;
	const BrickScene = 9;
	const FlatScene = 10;
	const MetallicScene = 11;
	const SunsetScene = 12;
	const BirdsEyeScene = 13;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SmartArtQuickStyleType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaReferenceCollection extends Java {
	static private $_className = "com.aspose.slides.VbaReferenceCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class StringOrDoubleChartValue extends Java {
	static private $_className = "com.aspose.slides.StringOrDoubleChartValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathSpacingRules extends Java {
	const SingleSpacingGap = 0;
	const OneAndHalfSpacingGap = 1;
	const DoubleSpacingGap = 2;
	const Exactly = 3;
	const Multiple = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathSpacingRules";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PieSplitCustomPointCollection extends Java {
	static private $_className = "com.aspose.slides.PieSplitCustomPointCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartData extends Java {
	static private $_className = "com.aspose.slides.ChartData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NullableBool extends Java {
	const NotDefined = -1;
	const False = 0;
	const True = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.NullableBool";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EightDirectionTransition extends Java {
	static private $_className = "com.aspose.slides.EightDirectionTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FilterEffectRevealType extends Java {
	const NotDefined = -1;
	const None = 0;
	const In = 1;
	const Out = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FilterEffectRevealType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TickLabelPositionType extends Java {
	const High = 0;
	const Low = 1;
	const NextTo = 2;
	const None = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TickLabelPositionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Fonts extends Java {
	static private $_className = "com.aspose.slides.Fonts";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CurrentThreadSettings extends Java {
	static private $_className = "com.aspose.slides.CurrentThreadSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getLocale(...$argv) {
		return Java(self::$_className)->getLocale(...$argv);
	}
	static function setLocale(...$argv) {
		return Java(self::$_className)->setLocale(...$argv);
	}
}
class TransitionType extends Java {
	const None = 0;
	const Blinds = 1;
	const Checker = 2;
	const Circle = 3;
	const Comb = 4;
	const Cover = 5;
	const Cut = 6;
	const Diamond = 7;
	const Dissolve = 8;
	const Fade = 9;
	const Newsflash = 10;
	const Plus = 11;
	const Pull = 12;
	const Push = 13;
	const Random = 14;
	const RandomBar = 15;
	const Split = 16;
	const Strips = 17;
	const Wedge = 18;
	const Wheel = 19;
	const Wipe = 20;
	const Zoom = 21;
	const Vortex = 22;
	const Switch = 23;
	const Flip = 24;
	const Ripple = 25;
	const Honeycomb = 26;
	const Cube = 27;
	const Box = 28;
	const Rotate = 29;
	const Orbit = 30;
	const Doors = 31;
	const Window = 32;
	const Ferris = 33;
	const Gallery = 34;
	const Conveyor = 35;
	const Pan = 36;
	const Glitter = 37;
	const Warp = 38;
	const Flythrough = 39;
	const Flash = 40;
	const Shred = 41;
	const Reveal = 42;
	const WheelReverse = 43;
	const FallOver = 44;
	const Drape = 45;
	const Curtains = 46;
	const Wind = 47;
	const Prestige = 48;
	const Fracture = 49;
	const Crush = 50;
	const PeelOff = 51;
	const PageCurlDouble = 52;
	const PageCurlSingle = 53;
	const Airplane = 54;
	const Origami = 55;
	const Morph = 56;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InterruptionTokenSource extends Java {
	static private $_className = "com.aspose.slides.InterruptionTokenSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathRadical extends Java {
	static private $_className = "com.aspose.slides.MathRadical";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InkTrace extends Java {
	static private $_className = "com.aspose.slides.InkTrace";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class WebDocumentOptions extends Java {
	static private $_className = "com.aspose.slides.WebDocumentOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TableFormat extends Java {
	static private $_className = "com.aspose.slides.TableFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Input extends Java {
	static private $_className = "com.aspose.slides.Input";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorTransformOperation extends Java {
	const Tint = 0;
	const Shade = 1;
	const Complement = 2;
	const Inverse = 3;
	const Grayscale = 4;
	const SetAlpha = 5;
	const AddAlpha = 6;
	const MultiplyAlpha = 7;
	const SetHue = 8;
	const AddHue = 9;
	const MultiplyHue = 10;
	const SetSaturation = 11;
	const AddSaturation = 12;
	const MultiplySaturation = 13;
	const SetLuminance = 14;
	const AddLuminance = 15;
	const MultiplyLuminance = 16;
	const SetRed = 17;
	const AddRed = 18;
	const MultiplyRed = 19;
	const SetGreen = 20;
	const AddGreen = 21;
	const MultiplyGreen = 22;
	const SetBlue = 23;
	const AddBlue = 24;
	const MultiplyBlue = 25;
	const Gamma = 26;
	const InverseGamma = 27;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorTransformOperation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ProtectionManager extends Java {
	static private $_className = "com.aspose.slides.ProtectionManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GraphicalObjectLock extends Java {
	static private $_className = "com.aspose.slides.GraphicalObjectLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathJustification extends Java {
	const LeftJustified = 1;
	const RightJustified = 2;
	const Centered = 3;
	const CenteredAsGroup = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathJustification";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptEditException extends Java {
	static private $_className = "com.aspose.slides.PptEditException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ControlPropertiesCollection extends Java {
	static private $_className = "com.aspose.slides.ControlPropertiesCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageTransformOperationFactory extends Java {
	static private $_className = "com.aspose.slides.ImageTransformOperationFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaModule extends Java {
	static private $_className = "com.aspose.slides.VbaModule";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Flavor extends Java {
	const Github = 0;
	const Gruber = 1;
	const MultiMarkdown = 2;
	const CommonMark = 3;
	const MarkdownExtra = 4;
	const Pandoc = 5;
	const Kramdown = 6;
	const Markua = 7;
	const Maruku = 8;
	const Markdown2 = 9;
	const Remarkable = 10;
	const Showdown = 11;
	const Ghost = 12;
	const GitLab = 13;
	const Haroopad = 14;
	const IaWriter = 15;
	const Redcarpet = 16;
	const ScholarlyMarkdown = 17;
	const Taiga = 18;
	const Trello = 19;
	const S9ETextFormatter = 20;
	const XWiki = 21;
	const StackOverflow = 22;
	const Default = 23;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.Flavor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Hyperlink extends Java {
	static private $_className = "com.aspose.slides.Hyperlink";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getLastVievedSlide(...$argv) {
		return Java(self::$_className)->getLastVievedSlide(...$argv);
	}
	static function op_Equality(...$argv) {
		return Java(self::$_className)->op_Equality(...$argv);
	}
	static function op_Inequality(...$argv) {
		return Java(self::$_className)->op_Inequality(...$argv);
	}
	static function getNoAction(...$argv) {
		return Java(self::$_className)->getNoAction(...$argv);
	}
	static function getNextSlide(...$argv) {
		return Java(self::$_className)->getNextSlide(...$argv);
	}
	static function getMedia(...$argv) {
		return Java(self::$_className)->getMedia(...$argv);
	}
	static function getLastSlide(...$argv) {
		return Java(self::$_className)->getLastSlide(...$argv);
	}
	static function getFirstSlide(...$argv) {
		return Java(self::$_className)->getFirstSlide(...$argv);
	}
	static function getEndShow(...$argv) {
		return Java(self::$_className)->getEndShow(...$argv);
	}
	static function getPreviousSlide(...$argv) {
		return Java(self::$_className)->getPreviousSlide(...$argv);
	}
}
class PresentationLockingBehavior extends Java {
	const LoadAndRelease = 0;
	const KeepLocked = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PresentationLockingBehavior";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OleObjectFrame extends Java {
	static private $_className = "com.aspose.slides.OleObjectFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlidesRange extends Java {
	static private $_className = "com.aspose.slides.SlidesRange";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SectionCollection extends Java {
	static private $_className = "com.aspose.slides.SectionCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MaterialPresetType extends Java {
	const NotDefined = -1;
	const Clear = 0;
	const DkEdge = 1;
	const Flat = 2;
	const LegacyMatte = 3;
	const LegacyMetal = 4;
	const LegacyPlastic = 5;
	const LegacyWireframe = 6;
	const Matte = 7;
	const Metal = 8;
	const Plastic = 9;
	const Powder = 10;
	const SoftEdge = 11;
	const Softmetal = 12;
	const TranslucentPowder = 13;
	const WarmMatte = 14;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MaterialPresetType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PictureFrame extends Java {
	static private $_className = "com.aspose.slides.PictureFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgCoordinateUnit extends Java {
	const Inch = 0;
	const Centimeter = 1;
	const Millimeter = 2;
	const Point = 3;
	const Pica = 4;
	const Em = 5;
	const Ex = 6;
	const Pixel = 7;
	const Percent = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SvgCoordinateUnit";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorPropertyCollection extends Java {
	static private $_className = "com.aspose.slides.BehaviorPropertyCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AutoShape extends Java {
	static private $_className = "com.aspose.slides.AutoShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathRowSpacingRule extends Java {
	const SingleLineGap = 0;
	const OneAndAHalfLineGap = 1;
	const TwoLineGap = 2;
	const Exactly = 3;
	const Multiple = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathRowSpacingRule";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorReplace extends Java {
	static private $_className = "com.aspose.slides.ColorReplace";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionSoundMode extends Java {
	const NotDefined = -1;
	const StartSound = 0;
	const StopPrevoiusSound = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionSoundMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFunctionsOfTwoArguments extends Java {
	const Log = 0;
	const Lim = 1;
	const Min = 2;
	const Max = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathFunctionsOfTwoArguments";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SoftEdge extends Java {
	static private $_className = "com.aspose.slides.SoftEdge";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectChartMajorGroupingType extends Java {
	const BySeries = 0;
	const ByCategory = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectChartMajorGroupingType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BlackWhiteConversionMode extends Java {
	const Default = 0;
	const Dithering = 1;
	const DitheringFloydSteinberg = 2;
	const Auto = 3;
	const AutoOtsu = 4;
	const Threshold25 = 5;
	const Threshold50 = 6;
	const Threshold75 = 7;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BlackWhiteConversionMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseHandoutNotesSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.BaseHandoutNotesSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataLabelCollection extends Java {
	static private $_className = "com.aspose.slides.DataLabelCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OdpReadException extends Java {
	static private $_className = "com.aspose.slides.OdpReadException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBlockFactory extends Java {
	static private $_className = "com.aspose.slides.MathBlockFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TimeUnitType extends Java {
	const None = 0;
	const Days = 1;
	const Months = 2;
	const Years = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TimeUnitType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ZoomObject extends Java {
	static private $_className = "com.aspose.slides.ZoomObject";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LoadingStreamBehavior extends Java {
	const ReadStreamAndRelease = 0;
	const KeepLocked = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LoadingStreamBehavior";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmbeddingLevel extends Java {
	const Installable = 0;
	const Restricted = 2;
	const PreviewPrint = 4;
	const Editable = 8;
	const NoSubsetting = 256;
	const BitmapOnly = 512;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EmbeddingLevel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class QuartileMethodType extends Java {
	const Exclusive = 0;
	const Inclusive = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.QuartileMethodType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaModuleCollection extends Java {
	static private $_className = "com.aspose.slides.VbaModuleCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PatternStyle extends Java {
	const NotDefined = -1;
	const Unknown = 0;
	const Percent05 = 1;
	const Percent10 = 2;
	const Percent20 = 3;
	const Percent25 = 4;
	const Percent30 = 5;
	const Percent40 = 6;
	const Percent50 = 7;
	const Percent60 = 8;
	const Percent70 = 9;
	const Percent75 = 10;
	const Percent80 = 11;
	const Percent90 = 12;
	const DarkHorizontal = 13;
	const DarkVertical = 14;
	const DarkDownwardDiagonal = 15;
	const DarkUpwardDiagonal = 16;
	const SmallCheckerBoard = 17;
	const Trellis = 18;
	const LightHorizontal = 19;
	const LightVertical = 20;
	const LightDownwardDiagonal = 21;
	const LightUpwardDiagonal = 22;
	const SmallGrid = 23;
	const DottedDiamond = 24;
	const WideDownwardDiagonal = 25;
	const WideUpwardDiagonal = 26;
	const DashedDownwardDiagonal = 27;
	const DashedUpwardDiagonal = 28;
	const NarrowVertical = 29;
	const NarrowHorizontal = 30;
	const DashedVertical = 31;
	const DashedHorizontal = 32;
	const LargeConfetti = 33;
	const LargeGrid = 34;
	const HorizontalBrick = 35;
	const LargeCheckerBoard = 36;
	const SmallConfetti = 37;
	const Zigzag = 38;
	const SolidDiamond = 39;
	const DiagonalBrick = 40;
	const OutlinedDiamond = 41;
	const Plaid = 42;
	const Sphere = 43;
	const Weave = 44;
	const DottedGrid = 45;
	const Divot = 46;
	const Shingle = 47;
	const Wave = 48;
	const Horizontal = 49;
	const Vertical = 50;
	const Cross = 51;
	const DownwardDiagonal = 52;
	const UpwardDiagonal = 53;
	const DiagonalCross = 54;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PatternStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptCorruptFileException extends Java {
	static private $_className = "com.aspose.slides.PptCorruptFileException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FilterEffectSubtype extends Java {
	const None = 0;
	const Across = 1;
	const Down = 2;
	const DownLeft = 3;
	const DownRight = 4;
	const FromBottom = 5;
	const FromLeft = 6;
	const FromRight = 7;
	const FromTop = 8;
	const Horizontal = 9;
	const In = 10;
	const InHorizontal = 11;
	const InVertical = 12;
	const Left = 13;
	const Out = 14;
	const OutHorizontal = 15;
	const OutVertical = 16;
	const Right = 17;
	const Spokes1 = 18;
	const Spokes2 = 19;
	const Spokes3 = 20;
	const Spokes4 = 21;
	const Spokes8 = 22;
	const Up = 23;
	const UpLeft = 24;
	const UpRight = 25;
	const Vertical = 26;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FilterEffectSubtype";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SideDirectionTransition extends Java {
	static private $_className = "com.aspose.slides.SideDirectionTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ControlCollection extends Java {
	static private $_className = "com.aspose.slides.ControlCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Captions extends Java {
	static private $_className = "com.aspose.slides.Captions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextStrikethroughType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Single = 1;
	const Double = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextStrikethroughType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathSubscriptElement extends Java {
	static private $_className = "com.aspose.slides.MathSubscriptElement";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TagCollection extends Java {
	static private $_className = "com.aspose.slides.TagCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionSideDirectionType extends Java {
	const Left = 0;
	const Up = 1;
	const Down = 2;
	const Right = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionSideDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutSlideCollection extends Java {
	static private $_className = "com.aspose.slides.LayoutSlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontAlignment extends Java {
	const Default = -1;
	const Automatic = 0;
	const Top = 1;
	const Center = 2;
	const Bottom = 3;
	const Baseline = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FontAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class WarningType extends Java {
	const SourceFileCorruption = 0;
	const DataLoss = 1;
	const MajorFormattingLoss = 2;
	const MinorFormattingLoss = 3;
	const CompatibilityIssue = 4;
	const UnexpectedContent = 99;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.WarningType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectStyle extends Java {
	static private $_className = "com.aspose.slides.EffectStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AsposeLicenseException extends Java {
	static private $_className = "com.aspose.slides.AsposeLicenseException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideSizeScaleType extends Java {
	const DoNotScale = 0;
	const EnsureFit = 1;
	const Maximize = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SlideSizeScaleType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterNotesSlide extends Java {
	static private $_className = "com.aspose.slides.MasterNotesSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientStopCollection extends Java {
	static private $_className = "com.aspose.slides.GradientStopCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeFrame extends Java {
	static private $_className = "com.aspose.slides.ShapeFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class UpDownBarsManager extends Java {
	static private $_className = "com.aspose.slides.UpDownBarsManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientShape extends Java {
	const NotDefined = -1;
	const Linear = 0;
	const Rectangle = 1;
	const Radial = 2;
	const Path = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.GradientShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HandoutType extends Java {
	const Handouts1 = 0;
	const Handouts2 = 1;
	const Handouts3 = 2;
	const Handouts4Horizontal = 3;
	const Handouts4Vertical = 4;
	const Handouts6Horizontal = 5;
	const Handouts6Vertical = 6;
	const Handouts9Horizontal = 7;
	const Handouts9Vertical = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.HandoutType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartSeriesGroup extends Java {
	static private $_className = "com.aspose.slides.ChartSeriesGroup";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SVGOptions extends Java {
	static private $_className = "com.aspose.slides.SVGOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getDefault(...$argv) {
		return Java(self::$_className)->getDefault(...$argv);
	}
	static function getSimple(...$argv) {
		return Java(self::$_className)->getSimple(...$argv);
	}
	static function getWYSIWYG(...$argv) {
		return Java(self::$_className)->getWYSIWYG(...$argv);
	}
}
class RippleTransition extends Java {
	static private $_className = "com.aspose.slides.RippleTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InterruptionToken extends Java {
	static private $_className = "com.aspose.slides.InterruptionToken";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getNone(...$argv) {
		return Java(self::$_className)->getNone(...$argv);
	}
}
class MathAccentFactory extends Java {
	static private $_className = "com.aspose.slides.MathAccentFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathDelimiterShape extends Java {
	const Centered = 0;
	const Match = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathDelimiterShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlidesAIAgent extends Java {
	static private $_className = "com.aspose.slides.SlidesAIAgent";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeAdjustmentType extends Java {
	const Custom = 0;
	const CornerSize = 1;
	const LeftUpCorner = 2;
	const RightUpCorner = 3;
	const UpCorners = 4;
	const DownCorners = 5;
	const Thickness = 6;
	const ArrowTailThickness = 7;
	const ArrowheadLength = 8;
	const ArrowheadWidth = 9;
	const Radius = 10;
	const Depth = 11;
	const ShapePartOffset = 12;
	const Angle = 13;
	const StartAngle = 14;
	const EndAngle = 15;
	const StartPointX = 16;
	const StartPointY = 17;
	const ConnectorPoint1X = 18;
	const ConnectorPoint1Y = 19;
	const ConnectorPoint2X = 20;
	const ConnectorPoint2Y = 21;
	const ConnectorBendPositionX = 22;
	const ConnectorBendPositionY = 23;
	const AttachY = 24;
	const AttachX = 25;
	const CalloutHeight = 26;
	const CalloutWidth = 27;
	const CalloutSize = 28;
	const Curvature = 29;
	const HorizontalThickness = 30;
	const VerticalThickness = 31;
	const VerticalSize = 32;
	const HorizontalSize = 33;
	const Top = 34;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapeAdjustmentType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SectionSlideCollection extends Java {
	static private $_className = "com.aspose.slides.SectionSlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaProjectFactory extends Java {
	static private $_className = "com.aspose.slides.VbaProjectFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getInstance(...$argv) {
		return Java(self::$_className)->getInstance(...$argv);
	}
}
class PresetShadow extends Java {
	static private $_className = "com.aspose.slides.PresetShadow";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Field extends Java {
	static private $_className = "com.aspose.slides.Field";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CustomXmlPart extends Java {
	static private $_className = "com.aspose.slides.CustomXmlPart";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Marker extends Java {
	static private $_className = "com.aspose.slides.Marker";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PdfOptions extends Java {
	static private $_className = "com.aspose.slides.PdfOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutPlaceholderManager extends Java {
	static private $_className = "com.aspose.slides.LayoutPlaceholderManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FillOverlay extends Java {
	static private $_className = "com.aspose.slides.FillOverlay";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextExtractionArrangingMode extends Java {
	const Unarranged = 0;
	const Arranged = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextExtractionArrangingMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PlaceholderType extends Java {
	const Title = 0;
	const Body = 1;
	const CenteredTitle = 2;
	const Subtitle = 3;
	const DateAndTime = 4;
	const SlideNumber = 5;
	const Footer = 6;
	const Header = 7;
	const Object = 8;
	const Chart = 9;
	const Table = 10;
	const ClipArt = 11;
	const Diagram = 12;
	const Media = 13;
	const SlideImage = 14;
	const Picture = 15;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PlaceholderType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class RectangleAlignment extends Java {
	const NotDefined = -1;
	const TopLeft = 0;
	const Top = 1;
	const TopRight = 2;
	const Left = 3;
	const Center = 4;
	const Right = 5;
	const BottomLeft = 6;
	const Bottom = 7;
	const BottomRight = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.RectangleAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutSlide extends Java {
	static private $_className = "com.aspose.slides.LayoutSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class RowFormat extends Java {
	static private $_className = "com.aspose.slides.RowFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Control extends Java {
	static private $_className = "com.aspose.slides.Control";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorEffect extends Java {
	static private $_className = "com.aspose.slides.ColorEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FlyThroughTransition extends Java {
	static private $_className = "com.aspose.slides.FlyThroughTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HyperlinkQueries extends Java {
	static private $_className = "com.aspose.slides.HyperlinkQueries";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TickMarkType extends Java {
	const Cross = 0;
	const Inside = 1;
	const None = 2;
	const Outside = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TickMarkType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorAccumulateType extends Java {
	const NotDefined = -1;
	const Always = 0;
	const None = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BehaviorAccumulateType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Chart extends Java {
	static private $_className = "com.aspose.slides.Chart";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentationAnimationsGenerator extends Java {
	static private $_className = "com.aspose.slides.PresentationAnimationsGenerator";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartPortionFormat extends Java {
	static private $_className = "com.aspose.slides.ChartPortionFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionSpeed extends Java {
	const Fast = 0;
	const Medium = 1;
	const Slow = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionSpeed";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AdjustValueCollection extends Java {
	static private $_className = "com.aspose.slides.AdjustValueCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.BaseHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapesAlignmentType extends Java {
	const AlignLeft = 0;
	const AlignRight = 1;
	const AlignCenter = 2;
	const AlignTop = 3;
	const AlignMiddle = 4;
	const AlignBottom = 5;
	const DistributeHorizontally = 6;
	const DistributeVertically = 7;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapesAlignmentType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathMatrix extends Java {
	static private $_className = "com.aspose.slides.MathMatrix";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBarFactory extends Java {
	static private $_className = "com.aspose.slides.MathBarFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SchemeColor extends Java {
	const NotDefined = -1;
	const Background1 = 0;
	const Text1 = 1;
	const Background2 = 2;
	const Text2 = 3;
	const Accent1 = 4;
	const Accent2 = 5;
	const Accent3 = 6;
	const Accent4 = 7;
	const Accent5 = 8;
	const Accent6 = 9;
	const Hyperlink = 10;
	const FollowedHyperlink = 11;
	const StyleColor = 12;
	const Dark1 = 13;
	const Light1 = 14;
	const Dark2 = 15;
	const Light2 = 16;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SchemeColor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SectionZoomFrame extends Java {
	static private $_className = "com.aspose.slides.SectionZoomFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageFormat extends Java {
	const MemoryBmp = 0;
	const Bmp = 1;
	const Emf = 2;
	const Wmf = 3;
	const Gif = 4;
	const Jpeg = 5;
	const Png = 6;
	const Tiff = 7;
	const Exif = 8;
	const Icon = 9;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ImageFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ExternalResourceResolver extends Java {
	static private $_className = "com.aspose.slides.ExternalResourceResolver";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PathFillModeType extends Java {
	const None = 0;
	const Normal = 1;
	const Lighten = 2;
	const LightenLess = 3;
	const Darken = 4;
	const DarkenLess = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PathFillModeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFractionFactory extends Java {
	static private $_className = "com.aspose.slides.MathFractionFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorOperationCollection extends Java {
	static private $_className = "com.aspose.slides.ColorOperationCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathSubscriptElementFactory extends Java {
	static private $_className = "com.aspose.slides.MathSubscriptElementFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BlackWhiteMode extends Java {
	const NotDefined = -1;
	const Color = 0;
	const Automatic = 1;
	const Gray = 2;
	const LightGray = 3;
	const InverseGray = 4;
	const GrayWhite = 5;
	const BlackGray = 6;
	const BlackWhite = 7;
	const Black = 8;
	const White = 9;
	const Hidden = 10;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BlackWhiteMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextAutofitType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Normal = 1;
	const Shape = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextAutofitType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionShredPattern extends Java {
	const Strip = 0;
	const Rectangle = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionShredPattern";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.MasterSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CornerDirectionTransition extends Java {
	static private $_className = "com.aspose.slides.CornerDirectionTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PathSegment extends Java {
	static private $_className = "com.aspose.slides.PathSegment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NumberedBulletStyle extends Java {
	const NotDefined = -1;
	const BulletAlphaLCPeriod = 0;
	const BulletAlphaUCPeriod = 1;
	const BulletArabicParenRight = 2;
	const BulletArabicPeriod = 3;
	const BulletRomanLCParenBoth = 4;
	const BulletRomanLCParenRight = 5;
	const BulletRomanLCPeriod = 6;
	const BulletRomanUCPeriod = 7;
	const BulletAlphaLCParenBoth = 8;
	const BulletAlphaLCParenRight = 9;
	const BulletAlphaUCParenBoth = 10;
	const BulletAlphaUCParenRight = 11;
	const BulletArabicParenBoth = 12;
	const BulletArabicPlain = 13;
	const BulletRomanUCParenBoth = 14;
	const BulletRomanUCParenRight = 15;
	const BulletSimpChinPlain = 16;
	const BulletSimpChinPeriod = 17;
	const BulletCircleNumDBPlain = 18;
	const BulletCircleNumWDWhitePlain = 19;
	const BulletCircleNumWDBlackPlain = 20;
	const BulletTradChinPlain = 21;
	const BulletTradChinPeriod = 22;
	const BulletArabicAlphaDash = 23;
	const BulletArabicAbjadDash = 24;
	const BulletHebrewAlphaDash = 25;
	const BulletKanjiKoreanPlain = 26;
	const BulletKanjiKoreanPeriod = 27;
	const BulletArabicDBPlain = 28;
	const BulletArabicDBPeriod = 29;
	const BulletThaiAlphaPeriod = 30;
	const BulletThaiAlphaParenRight = 31;
	const BulletThaiAlphaParenBoth = 32;
	const BulletThaiNumPeriod = 33;
	const BulletThaiNumParenRight = 34;
	const BulletThaiNumParenBoth = 35;
	const BulletHindiAlphaPeriod = 36;
	const BulletHindiNumPeriod = 37;
	const BulletKanjiSimpChinDBPeriod = 38;
	const BulletHindiNumParenRight = 39;
	const BulletHindiAlpha1Period = 40;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.NumberedBulletStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HtmlOptions extends Java {
	static private $_className = "com.aspose.slides.HtmlOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LegendEntryProperties extends Java {
	static private $_className = "com.aspose.slides.LegendEntryProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineAlignment extends Java {
	const NotDefined = -1;
	const Center = 0;
	const Inset = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CellInvalidFormulaException extends Java {
	static private $_className = "com.aspose.slides.CellInvalidFormulaException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OpenAIWebClient extends Java {
	static private $_className = "com.aspose.slides.OpenAIWebClient";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BackgroundType extends Java {
	const NotDefined = -1;
	const Themed = 0;
	const OwnBackground = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BackgroundType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionCommandPathType extends Java {
	const MoveTo = 0;
	const LineTo = 1;
	const CurveTo = 2;
	const CloseLoop = 3;
	const End = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MotionCommandPathType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgEvent extends Java {
	const OnFocusIn = 0;
	const OnFocusOut = 1;
	const OnActivate = 2;
	const OnClick = 3;
	const OnMouseDown = 4;
	const OnMouseUp = 5;
	const OnMouseOver = 6;
	const OnMouseMove = 7;
	const OnMouseOut = 8;
	const OnLoad = 9;
	const OnUnload = 10;
	const OnAbort = 11;
	const OnError = 12;
	const OnResize = 13;
	const OnScroll = 14;
	const OnZoom = 15;
	const OnBegin = 16;
	const OnEnd = 17;
	const OnRepeat = 18;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SvgEvent";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientDirection extends Java {
	const NotDefined = -1;
	const FromCorner1 = 0;
	const FromCorner2 = 1;
	const FromCorner3 = 2;
	const FromCorner4 = 3;
	const FromCenter = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.GradientDirection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextAnimation extends Java {
	static private $_className = "com.aspose.slides.TextAnimation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SourceFormat extends Java {
	const Ppt = 0;
	const Pptx = 1;
	const Odp = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SourceFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Orientation extends Java {
	const Horizontal = 0;
	const Vertical = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.Orientation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideCollection extends Java {
	static private $_className = "com.aspose.slides.SlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SplitTransition extends Java {
	static private $_className = "com.aspose.slides.SplitTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CustomXmlPartCollection extends Java {
	static private $_className = "com.aspose.slides.CustomXmlPartCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageTransformOperationCollection extends Java {
	static private $_className = "com.aspose.slides.ImageTransformOperationCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PdfTextCompression extends Java {
	const None = 0;
	const Flate = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PdfTextCompression";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SpreadsheetOptions extends Java {
	static private $_className = "com.aspose.slides.SpreadsheetOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideImageFormat extends Java {
	static private $_className = "com.aspose.slides.SlideImageFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function bitmap(...$argv) {
		return Java(self::$_className)->bitmap(...$argv);
	}
	static function svg(...$argv) {
		return Java(self::$_className)->svg(...$argv);
	}
}
class ChartWall extends Java {
	static private $_className = "com.aspose.slides.ChartWall";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextCapType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Small = 1;
	const All = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextCapType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ExtraColorScheme extends Java {
	static private $_className = "com.aspose.slides.ExtraColorScheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineFormat extends Java {
	static private $_className = "com.aspose.slides.LineFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InnerShadow extends Java {
	static private $_className = "com.aspose.slides.InnerShadow";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectRestartType extends Java {
	const NotDefined = -1;
	const Always = 0;
	const WhenNotActive = 1;
	const Never = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectRestartType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineStyle extends Java {
	const NotDefined = -1;
	const Single = 0;
	const ThinThin = 1;
	const ThickThin = 2;
	const ThinThick = 3;
	const ThickBetweenThin = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataCell extends Java {
	static private $_className = "com.aspose.slides.ChartDataCell";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class RevealTransition extends Java {
	static private $_className = "com.aspose.slides.RevealTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TabAlignment extends Java {
	const Left = 0;
	const Center = 1;
	const Right = 2;
	const Decimal = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TabAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommandEffect extends Java {
	static private $_className = "com.aspose.slides.CommandEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Output extends Java {
	static private $_className = "com.aspose.slides.Output";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBox extends Java {
	static private $_className = "com.aspose.slides.MathBox";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ForEach_ extends Java {
	static private $_className = "com.aspose.slides.ForEach_";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function portion(...$argv) {
		return Java(self::$_className)->portion(...$argv);
	}
	static function paragraph(...$argv) {
		return Java(self::$_className)->paragraph(...$argv);
	}
	static function slide(...$argv) {
		return Java(self::$_className)->slide(...$argv);
	}
	static function layoutSlide(...$argv) {
		return Java(self::$_className)->layoutSlide(...$argv);
	}
	static function shape(...$argv) {
		return Java(self::$_className)->shape(...$argv);
	}
	static function masterSlide(...$argv) {
		return Java(self::$_className)->masterSlide(...$argv);
	}
}
class LightRig extends Java {
	static private $_className = "com.aspose.slides.LightRig";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FilterEffect extends Java {
	static private $_className = "com.aspose.slides.FilterEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeUtil extends Java {
	static private $_className = "com.aspose.slides.ShapeUtil";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function geometryPathToGraphicsPath(...$argv) {
		return Java(self::$_className)->geometryPathToGraphicsPath(...$argv);
	}
	static function graphicsPathToGeometryPath(...$argv) {
		return Java(self::$_className)->graphicsPathToGeometryPath(...$argv);
	}
}
class CellCircularReferenceException extends Java {
	static private $_className = "com.aspose.slides.CellCircularReferenceException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TileFlip extends Java {
	const NotDefined = -1;
	const NoFlip = 0;
	const FlipX = 1;
	const FlipY = 2;
	const FlipBoth = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TileFlip";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FillFormat extends Java {
	static private $_className = "com.aspose.slides.FillFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathArray extends Java {
	static private $_className = "com.aspose.slides.MathArray";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PicturesCompression extends Java {
	const Dpi330 = 0;
	const Dpi220 = 1;
	const Dpi150 = 2;
	const Dpi96 = 3;
	const Dpi72 = 4;
	const DocumentResolution = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PicturesCompression";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionMorphType extends Java {
	const ByObject = 0;
	const ByWord = 1;
	const ByChar = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionMorphType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataLabelFormat extends Java {
	static private $_className = "com.aspose.slides.DataLabelFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesSlideThemeManager extends Java {
	static private $_className = "com.aspose.slides.NotesSlideThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImagePixelFormat extends Java {
	const Format1bppIndexed = 1;
	const Format4bppIndexed = 4;
	const Format8bppIndexed = 8;
	const Format24bppRgb = 24;
	const Format32bppArgb = 32;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ImagePixelFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AnimationTimeLine extends Java {
	static private $_className = "com.aspose.slides.AnimationTimeLine";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PPImage extends Java {
	static private $_className = "com.aspose.slides.PPImage";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DigitalSignature extends Java {
	static private $_className = "com.aspose.slides.DigitalSignature";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectPresetClassType extends Java {
	const Entrance = 0;
	const Exit = 1;
	const Emphasis = 2;
	const Path = 3;
	const MediaCall = 4;
	const OLEActionVerbs = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectPresetClassType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorSchemeIndex extends Java {
	const Dark1 = 0;
	const Light1 = 1;
	const Dark2 = 2;
	const Light2 = 3;
	const Accent1 = 4;
	const Accent2 = 5;
	const Accent3 = 6;
	const Accent4 = 7;
	const Accent5 = 8;
	const Accent6 = 9;
	const Hyperlink = 10;
	const FollowedHyperlink = 11;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorSchemeIndex";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtLayoutType extends Java {
	const AccentProcess = 0;
	const AccentedPicture = 1;
	const AlternatingFlow = 2;
	const AlternatingHexagons = 3;
	const AlternatingPictureBlocks = 4;
	const AlternatingPictureCircles = 5;
	const ArrowRibbon = 6;
	const AscendingPictureAccentProcess = 7;
	const Balance = 8;
	const BasicBendingProcess = 9;
	const BasicBlockList = 10;
	const BasicChevronProcess = 11;
	const BasicCycle = 12;
	const BasicMatrix = 13;
	const BasicPie = 14;
	const BasicProcess = 15;
	const BasicPyramid = 16;
	const BasicRadial = 17;
	const BasicTarget = 18;
	const BasicTimeline = 19;
	const BasicVenn = 20;
	const BendingPictureAccentList = 21;
	const BendingPictureBlocks = 22;
	const BendingPictureCaption = 23;
	const BendingPictureCaptionList = 24;
	const BendingPictureSemiTransparentText = 25;
	const BlockCycle = 26;
	const BubblePictureList = 27;
	const CaptionedPictures = 28;
	const ChevronList = 29;
	const CircleAccentTimeline = 30;
	const CircleArrowProcess = 31;
	const CirclePictureHierarchy = 32;
	const CircleRelationship = 33;
	const CircularBendingProcess = 34;
	const CircularPictureCallout = 35;
	const ClosedChevronProcess = 36;
	const ContinuousArrowProcess = 37;
	const ContinuousBlockProcess = 38;
	const ContinuousCycle = 39;
	const ContinuousPictureList = 40;
	const ConvergingArrows = 41;
	const ConvergingRadial = 42;
	const CounterbalanceArrows = 43;
	const CycleMatrix = 44;
	const DescendingBlockList = 45;
	const DescendingProcess = 46;
	const DetailedProcess = 47;
	const DivergingArrows = 48;
	const DivergingRadial = 49;
	const Equation = 50;
	const FramedTextPicture = 51;
	const Funnel = 52;
	const Gear = 53;
	const GridMatrix = 54;
	const GroupedList = 55;
	const HalfCircleOrganizationChart = 56;
	const HexagonCluster = 57;
	const Hierarchy = 58;
	const HierarchyList = 59;
	const HorizontalBulletList = 60;
	const HorizontalHierarchy = 61;
	const HorizontalLabeledHierarchy = 62;
	const HorizontalMultiLevelHierarchy = 63;
	const HorizontalOrganizationChart = 64;
	const HorizontalPictureList = 65;
	const IncreasingArrowsProcess = 66;
	const IncreasingCircleProcess = 67;
	const InvertedPyramid = 68;
	const LabeledHierarchy = 69;
	const LinearVenn = 70;
	const LinedList = 71;
	const MultidirectionalCycle = 72;
	const NameandTitleOrganizationChart = 73;
	const NestedTarget = 74;
	const NondirectionalCycle = 75;
	const OpposingArrows = 76;
	const OpposingIdeas = 77;
	const OrganizationChart = 78;
	const PhasedProcess = 79;
	const PictureAccentBlocks = 80;
	const PictureAccentList = 81;
	const PictureAccentProcess = 82;
	const PictureCaptionList = 83;
	const PictureGrid = 84;
	const PictureLineup = 85;
	const PictureStrips = 86;
	const PieProcess = 87;
	const PlusandMinus = 88;
	const ProcessArrows = 89;
	const ProcessList = 90;
	const PyramidList = 91;
	const RadialCluster = 92;
	const RadialCycle = 93;
	const RadialList = 94;
	const RadialVenn = 95;
	const RandomToResultProcess = 96;
	const RepeatingBendingProcess = 97;
	const ReverseList = 98;
	const SegmentedCycle = 99;
	const SegmentedProcess = 100;
	const SegmentedPyramid = 101;
	const SnapshotPictureList = 102;
	const SpiralPicture = 103;
	const SquareAccentList = 104;
	const StackedList = 105;
	const StackedVenn = 106;
	const StaggeredProcess = 107;
	const StepDownProcess = 108;
	const StepUpProcess = 109;
	const SubStepProcess = 110;
	const TableHierarchy = 111;
	const TableList = 112;
	const TargetList = 113;
	const TextCycle = 114;
	const TitlePictureLineup = 115;
	const TitledMatrix = 116;
	const TitledPictureAccentList = 117;
	const TitledPictureBlocks = 118;
	const TrapezoidList = 119;
	const UpwardArrow = 120;
	const VerticalAccentList = 121;
	const VerticalArrowList = 122;
	const VerticalBendingProcess = 123;
	const VerticalBlockList = 124;
	const VerticalBoxList = 125;
	const VerticalBulletList = 126;
	const VerticalChevronList = 127;
	const VerticalCircleList = 128;
	const VerticalCurvedList = 129;
	const VerticalEquation = 130;
	const VerticalPictureAccentList = 131;
	const VerticalPictureList = 132;
	const VerticalProcess = 133;
	const Custom = 134;
	const PictureOrganizationChart = 135;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SmartArtLayoutType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataPoint extends Java {
	static private $_className = "com.aspose.slides.ChartDataPoint";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresetShadowType extends Java {
	const TopLeftDropShadow = 0;
	const TopLeftLargeDropShadow = 1;
	const BackLeftLongPerspectiveShadow = 2;
	const BackRightLongPerspectiveShadow = 3;
	const TopLeftDoubleDropShadow = 4;
	const BottomRightSmallDropShadow = 5;
	const FrontLeftLongPerspectiveShadow = 6;
	const FrontRightLongPerspectiveShadow = 7;
	const OuterBoxShadow3D = 8;
	const InnerBoxShadow3D = 9;
	const BackCenterPerspectiveShadow = 10;
	const TopRightDropShadow = 11;
	const FrontBottomShadow = 12;
	const BackLeftPerspectiveShadow = 13;
	const BackRightPerspectiveShadow = 14;
	const BottomLeftDropShadow = 15;
	const BottomRightDropShadow = 16;
	const FrontLeftPerspectiveShadow = 17;
	const FrontRightPerspectiveShadow = 18;
	const TopLeftSmallDropShadow = 19;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PresetShadowType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBoxFactory extends Java {
	static private $_className = "com.aspose.slides.MathBoxFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartLinesFormat extends Java {
	static private $_className = "com.aspose.slides.ChartLinesFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GrayScale extends Java {
	static private $_className = "com.aspose.slides.GrayScale";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartTypeCharacterizer extends Java {
	static private $_className = "com.aspose.slides.ChartTypeCharacterizer";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function isErrorBarsYAllowed(...$argv) {
		return Java(self::$_className)->isErrorBarsYAllowed(...$argv);
	}
	static function hasSeriesTrendLines(...$argv) {
		return Java(self::$_className)->hasSeriesTrendLines(...$argv);
	}
	static function isErrorBarsXAllowed(...$argv) {
		return Java(self::$_className)->isErrorBarsXAllowed(...$argv);
	}
	static function isChartTypePie(...$argv) {
		return Java(self::$_className)->isChartTypePie(...$argv);
	}
	static function isChartTypeDoughnut(...$argv) {
		return Java(self::$_className)->isChartTypeDoughnut(...$argv);
	}
	static function isChartTypeBar(...$argv) {
		return Java(self::$_className)->isChartTypeBar(...$argv);
	}
	static function isChartTypeStock(...$argv) {
		return Java(self::$_className)->isChartTypeStock(...$argv);
	}
	static function isChartTypeLine(...$argv) {
		return Java(self::$_className)->isChartTypeLine(...$argv);
	}
	static function isChartTypeArea(...$argv) {
		return Java(self::$_className)->isChartTypeArea(...$argv);
	}
	static function isChartTypeRadar(...$argv) {
		return Java(self::$_className)->isChartTypeRadar(...$argv);
	}
	static function is3DChart(...$argv) {
		return Java(self::$_className)->is3DChart(...$argv);
	}
	static function is2DChart(...$argv) {
		return Java(self::$_className)->is2DChart(...$argv);
	}
	static function isChartTypeColumn(...$argv) {
		return Java(self::$_className)->isChartTypeColumn(...$argv);
	}
	static function isChartTypeSurface(...$argv) {
		return Java(self::$_className)->isChartTypeSurface(...$argv);
	}
	static function isSeriesUsesXValueCoordinate(...$argv) {
		return Java(self::$_className)->isSeriesUsesXValueCoordinate(...$argv);
	}
	static function isSeriesUsesValueCoordinate(...$argv) {
		return Java(self::$_className)->isSeriesUsesValueCoordinate(...$argv);
	}
	static function isSeriesUsesBubbleSizeCoordinate(...$argv) {
		return Java(self::$_className)->isSeriesUsesBubbleSizeCoordinate(...$argv);
	}
	static function isSeriesUsesYValueCoordinate(...$argv) {
		return Java(self::$_className)->isSeriesUsesYValueCoordinate(...$argv);
	}
	static function isChartTypeBubble(...$argv) {
		return Java(self::$_className)->isChartTypeBubble(...$argv);
	}
	static function isChartTypeScatter(...$argv) {
		return Java(self::$_className)->isChartTypeScatter(...$argv);
	}
	static function isBar3DChart(...$argv) {
		return Java(self::$_className)->isBar3DChart(...$argv);
	}
}
class AxisPositionType extends Java {
	const Bottom = 0;
	const Left = 1;
	const Right = 2;
	const Top = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AxisPositionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentationFactory extends Java {
	static private $_className = "com.aspose.slides.PresentationFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getInstance(...$argv) {
		return Java(self::$_className)->getInstance(...$argv);
	}
}
class EffectFillType extends Java {
	const NotDefined = -1;
	const Remove = 0;
	const Freeze = 1;
	const Hold = 2;
	const Transition = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectFillType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextAlignment extends Java {
	const NotDefined = -1;
	const Left = 0;
	const Center = 1;
	const Right = 2;
	const Justify = 3;
	const JustifyLow = 4;
	const Distributed = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Sequence extends Java {
	static private $_className = "com.aspose.slides.Sequence";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ErrorBarsFormat extends Java {
	static private $_className = "com.aspose.slides.ErrorBarsFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBorderBox extends Java {
	static private $_className = "com.aspose.slides.MathBorderBox";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VideoCollection extends Java {
	static private $_className = "com.aspose.slides.VideoCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GifOptions extends Java {
	static private $_className = "com.aspose.slides.GifOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PropertyCalcModeType extends Java {
	const NotDefined = -1;
	const Discrete = 0;
	const Linear = 1;
	const Formula = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PropertyCalcModeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathIntegralTypes extends Java {
	const Simple = 0;
	const Double = 1;
	const Triple = 2;
	const Contour = 3;
	const Surface = 4;
	const Volume = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathIntegralTypes";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OOXMLCorruptFileException extends Java {
	static private $_className = "com.aspose.slides.OOXMLCorruptFileException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectFormat extends Java {
	static private $_className = "com.aspose.slides.EffectFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextUnderlineType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Words = 1;
	const Single = 2;
	const Double = 3;
	const Heavy = 4;
	const Dotted = 5;
	const HeavyDotted = 6;
	const Dashed = 7;
	const HeavyDashed = 8;
	const LongDashed = 9;
	const HeavyLongDashed = 10;
	const DotDash = 11;
	const HeavyDotDash = 12;
	const DotDotDash = 13;
	const HeavyDotDotDash = 14;
	const Wavy = 15;
	const HeavyWavy = 16;
	const DoubleWavy = 17;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextUnderlineType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBar extends Java {
	static private $_className = "com.aspose.slides.MathBar";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaFloor extends Java {
	static private $_className = "com.aspose.slides.AlphaFloor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HtmlGenerator extends Java {
	static private $_className = "com.aspose.slides.HtmlGenerator";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SummaryZoomSection extends Java {
	static private $_className = "com.aspose.slides.SummaryZoomSection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideOrientation extends Java {
	const Landscape = 0;
	const Portrait = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SlideOrientation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseSlide extends Java {
	static private $_className = "com.aspose.slides.BaseSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OrganizationChartLayoutType extends Java {
	const Initial = 0;
	const Standart = 1;
	const BothHanging = 2;
	const LeftHanging = 3;
	const RightHanging = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.OrganizationChartLayoutType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataWorkbook extends Java {
	static private $_className = "com.aspose.slides.ChartDataWorkbook";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartTitle extends Java {
	static private $_className = "com.aspose.slides.ChartTitle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ZoomImageType extends Java {
	const Preview = 1;
	const Cover = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ZoomImageType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BuildType extends Java {
	const AsOneObject = 0;
	const AllParagraphsAtOnce = 1;
	const ByLevelParagraphs1 = 2;
	const ByLevelParagraphs2 = 3;
	const ByLevelParagraphs3 = 4;
	const ByLevelParagraphs4 = 5;
	const ByLevelParagraphs5 = 6;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BuildType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CellInvalidReferenceException extends Java {
	static private $_className = "com.aspose.slides.CellInvalidReferenceException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathNaryOperatorTypes extends Java {
	const Summation = 0;
	const Product = 1;
	const CoProduct = 2;
	const Intersection = 3;
	const Union = 4;
	const LogicalAnd = 5;
	const LogicalOr = 6;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathNaryOperatorTypes";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TrendlineCollection extends Java {
	static private $_className = "com.aspose.slides.TrendlineCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SwfOptions extends Java {
	static private $_className = "com.aspose.slides.SwfOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextAnchorType extends Java {
	const NotDefined = -1;
	const Top = 0;
	const Center = 1;
	const Bottom = 2;
	const Justified = 3;
	const Distributed = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextAnchorType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientFormat extends Java {
	static private $_className = "com.aspose.slides.GradientFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Comment extends Java {
	static private $_className = "com.aspose.slides.Comment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBorderBoxFactory extends Java {
	static private $_className = "com.aspose.slides.MathBorderBoxFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineDashStyle extends Java {
	const NotDefined = -1;
	const Solid = 0;
	const Dot = 1;
	const Dash = 2;
	const LargeDash = 3;
	const DashDot = 4;
	const LargeDashDot = 5;
	const LargeDashDotDot = 6;
	const SystemDash = 7;
	const SystemDot = 8;
	const SystemDashDot = 9;
	const SystemDashDotDot = 10;
	const Custom = 11;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineDashStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BlobManagementOptions extends Java {
	static private $_className = "com.aspose.slides.BlobManagementOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Reflection extends Java {
	static private $_className = "com.aspose.slides.Reflection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Point extends Java {
	static private $_className = "com.aspose.slides.Point";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LegendDataLabelPosition extends Java {
	const NotDefined = -1;
	const Bottom = 0;
	const BestFit = 1;
	const Center = 2;
	const InsideBase = 3;
	const InsideEnd = 4;
	const Left = 5;
	const OutsideEnd = 6;
	const Right = 7;
	const Top = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LegendDataLabelPosition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathNaryOperatorFactory extends Java {
	static private $_className = "com.aspose.slides.MathNaryOperatorFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Video extends Java {
	static private $_className = "com.aspose.slides.Video";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.BaseSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SetEffect extends Java {
	static private $_className = "com.aspose.slides.SetEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionPattern extends Java {
	const Diamond = 0;
	const Hexagon = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionPattern";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CellUnsupportedDataException extends Java {
	static private $_className = "com.aspose.slides.CellUnsupportedDataException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Tint extends Java {
	static private $_className = "com.aspose.slides.Tint";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontData extends Java {
	static private $_className = "com.aspose.slides.FontData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArt extends Java {
	static private $_className = "com.aspose.slides.SmartArt";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class RowCollection extends Java {
	static private $_className = "com.aspose.slides.RowCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartSeriesCollection extends Java {
	static private $_className = "com.aspose.slides.ChartSeriesCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PathCommandType extends Java {
	const Close = 0;
	const MoveTo = 1;
	const LineTo = 2;
	const ArcTo = 3;
	const QuadBezierTo = 4;
	const CubicBezierTo = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PathCommandType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaBiLevel extends Java {
	static private $_className = "com.aspose.slides.AlphaBiLevel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Column extends Java {
	static private $_className = "com.aspose.slides.Column";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmbedAllFontsHtmlController extends Java {
	static private $_className = "com.aspose.slides.EmbedAllFontsHtmlController";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaReferenceFactory extends Java {
	static private $_className = "com.aspose.slides.VbaReferenceFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getInstance(...$argv) {
		return Java(self::$_className)->getInstance(...$argv);
	}
}
class OleEmbeddedDataInfo extends Java {
	static private $_className = "com.aspose.slides.OleEmbeddedDataInfo";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFunctionFactory extends Java {
	static private $_className = "com.aspose.slides.MathFunctionFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartCellCollection extends Java {
	static private $_className = "com.aspose.slides.ChartCellCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeCollection extends Java {
	static private $_className = "com.aspose.slides.ShapeCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TabFactory extends Java {
	static private $_className = "com.aspose.slides.TabFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HtmlFormatter extends Java {
	static private $_className = "com.aspose.slides.HtmlFormatter";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function createDocumentFormatter(...$argv) {
		return Java(self::$_className)->createDocumentFormatter(...$argv);
	}
	static function createCustomFormatter(...$argv) {
		return Java(self::$_className)->createCustomFormatter(...$argv);
	}
	static function createSlideShowFormatter(...$argv) {
		return Java(self::$_className)->createSlideShowFormatter(...$argv);
	}
}
class CategoryAxisType extends Java {
	const Text = 0;
	const Date = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CategoryAxisType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgShape extends Java {
	static private $_className = "com.aspose.slides.SvgShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutTargetType extends Java {
	const Inner = 0;
	const Outer = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LayoutTargetType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FieldType extends Java {
	static private $_className = "com.aspose.slides.FieldType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function op_Equality(...$argv) {
		return Java(self::$_className)->op_Equality(...$argv);
	}
	static function op_Inequality(...$argv) {
		return Java(self::$_className)->op_Inequality(...$argv);
	}
	static function getDateTime1(...$argv) {
		return Java(self::$_className)->getDateTime1(...$argv);
	}
	static function getDateTime10(...$argv) {
		return Java(self::$_className)->getDateTime10(...$argv);
	}
	static function getDateTime(...$argv) {
		return Java(self::$_className)->getDateTime(...$argv);
	}
	static function getDateTime11(...$argv) {
		return Java(self::$_className)->getDateTime11(...$argv);
	}
	static function getDateTime5(...$argv) {
		return Java(self::$_className)->getDateTime5(...$argv);
	}
	static function getDateTime9(...$argv) {
		return Java(self::$_className)->getDateTime9(...$argv);
	}
	static function getHeader(...$argv) {
		return Java(self::$_className)->getHeader(...$argv);
	}
	static function getDateTime8(...$argv) {
		return Java(self::$_className)->getDateTime8(...$argv);
	}
	static function getDateTime6(...$argv) {
		return Java(self::$_className)->getDateTime6(...$argv);
	}
	static function getDateTime13(...$argv) {
		return Java(self::$_className)->getDateTime13(...$argv);
	}
	static function getDateTime3(...$argv) {
		return Java(self::$_className)->getDateTime3(...$argv);
	}
	static function getDateTime2(...$argv) {
		return Java(self::$_className)->getDateTime2(...$argv);
	}
	static function getDateTime7(...$argv) {
		return Java(self::$_className)->getDateTime7(...$argv);
	}
	static function getDateTime12(...$argv) {
		return Java(self::$_className)->getDateTime12(...$argv);
	}
	static function getDateTime4(...$argv) {
		return Java(self::$_className)->getDateTime4(...$argv);
	}
	static function getFooter(...$argv) {
		return Java(self::$_className)->getFooter(...$argv);
	}
	static function getSlideNumber(...$argv) {
		return Java(self::$_className)->getSlideNumber(...$argv);
	}
}
class HSL extends Java {
	static private $_className = "com.aspose.slides.HSL";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgImage extends Java {
	static private $_className = "com.aspose.slides.SvgImage";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GlitterTransition extends Java {
	static private $_className = "com.aspose.slides.GlitterTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LinkEmbedDecision extends Java {
	const Link = 0;
	const Embed = 1;
	const Ignore = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LinkEmbedDecision";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentationPlayer extends Java {
	static private $_className = "com.aspose.slides.PresentationPlayer";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SaveOptions extends Java {
	static private $_className = "com.aspose.slides.SaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PictureFillMode extends Java {
	const Tile = 0;
	const Stretch = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PictureFillMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InkOptions extends Java {
	static private $_className = "com.aspose.slides.InkOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterHandoutSlide extends Java {
	static private $_className = "com.aspose.slides.MasterHandoutSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineFormatCollection extends Java {
	static private $_className = "com.aspose.slides.LineFormatCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathParagraphFactory extends Java {
	static private $_className = "com.aspose.slides.MathParagraphFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class RenderingOptions extends Java {
	static private $_className = "com.aspose.slides.RenderingOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NormalViewProperties extends Java {
	static private $_className = "com.aspose.slides.NormalViewProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DoubleChartValue extends Java {
	static private $_className = "com.aspose.slides.DoubleChartValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathVerticalAlignment extends Java {
	const NotDefined = 0;
	const Top = 1;
	const Center = 2;
	const Bottom = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathVerticalAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeStyle extends Java {
	static private $_className = "com.aspose.slides.ShapeStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorChange extends Java {
	static private $_className = "com.aspose.slides.ColorChange";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Axis extends Java {
	static private $_className = "com.aspose.slides.Axis";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseOverrideThemeManager extends Java {
	static private $_className = "com.aspose.slides.BaseOverrideThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OuterShadow extends Java {
	static private $_className = "com.aspose.slides.OuterShadow";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextFrame extends Java {
	static private $_className = "com.aspose.slides.TextFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ParagraphFactory extends Java {
	static private $_className = "com.aspose.slides.ParagraphFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataWorksheet extends Java {
	static private $_className = "com.aspose.slides.ChartDataWorksheet";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptUnsupportedFormatException extends Java {
	static private $_className = "com.aspose.slides.PptUnsupportedFormatException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ErrorBarValueType extends Java {
	const Custom = 0;
	const Fixed = 1;
	const Percentage = 2;
	const StandardDeviation = 3;
	const StandardError = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ErrorBarValueType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NormalViewRestoredProperties extends Java {
	static private $_className = "com.aspose.slides.NormalViewRestoredProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LightRigPresetType extends Java {
	const NotDefined = -1;
	const Balanced = 0;
	const BrightRoom = 1;
	const Chilly = 2;
	const Contrasting = 3;
	const Flat = 4;
	const Flood = 5;
	const Freezing = 6;
	const Glow = 7;
	const Harsh = 8;
	const LegacyFlat1 = 9;
	const LegacyFlat2 = 10;
	const LegacyFlat3 = 11;
	const LegacyFlat4 = 12;
	const LegacyHarsh1 = 13;
	const LegacyHarsh2 = 14;
	const LegacyHarsh3 = 15;
	const LegacyHarsh4 = 16;
	const LegacyNormal1 = 17;
	const LegacyNormal2 = 18;
	const LegacyNormal3 = 19;
	const LegacyNormal4 = 20;
	const Morning = 21;
	const Soft = 22;
	const Sunrise = 23;
	const Sunset = 24;
	const ThreePt = 25;
	const TwoPt = 26;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LightRigPresetType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtNode extends Java {
	static private $_className = "com.aspose.slides.SmartArtNode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AfterAnimationType extends Java {
	const DoNotDim = 0;
	const Color = 1;
	const HideAfterAnimation = 2;
	const HideOnNextMouseClick = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AfterAnimationType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CellCollection extends Java {
	static private $_className = "com.aspose.slides.CellCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionValueBase extends Java {
	static private $_className = "com.aspose.slides.TransitionValueBase";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CustomData extends Java {
	static private $_className = "com.aspose.slides.CustomData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BulletType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Symbol = 1;
	const Numbered = 2;
	const Picture = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BulletType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterSlideCollection extends Java {
	static private $_className = "com.aspose.slides.MasterSlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CaptionsCollection extends Java {
	static private $_className = "com.aspose.slides.CaptionsCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgTSpan extends Java {
	static private $_className = "com.aspose.slides.SvgTSpan";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathRightSubSuperscriptElement extends Java {
	static private $_className = "com.aspose.slides.MathRightSubSuperscriptElement";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ErrorBarType extends Java {
	const Both = 0;
	const Minus = 1;
	const Plus = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ErrorBarType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeElementStrokeSource extends Java {
	const NoStroke = 0;
	const Shape = 1;
	const OwnStroke = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapeElementStrokeSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineArrowheadWidth extends Java {
	const NotDefined = -1;
	const Narrow = 0;
	const Medium = 1;
	const Wide = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineArrowheadWidth";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HeadingPair extends Java {
	static private $_className = "com.aspose.slides.HeadingPair";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideShowSettings extends Java {
	static private $_className = "com.aspose.slides.SlideShowSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontDataFactory extends Java {
	static private $_className = "com.aspose.slides.FontDataFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GlobalLayoutSlideCollection extends Java {
	static private $_className = "com.aspose.slides.GlobalLayoutSlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SummaryZoomSectionCollection extends Java {
	static private $_className = "com.aspose.slides.SummaryZoomSectionCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HyperlinkColorSource extends Java {
	const Styles = 0;
	const PortionFormat = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.HyperlinkColorSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AdjustValue extends Java {
	static private $_className = "com.aspose.slides.AdjustValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ScaleEffect extends Java {
	static private $_className = "com.aspose.slides.ScaleEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorSpace extends Java {
	const NotDefined = -1;
	const RGB = 0;
	const HSL = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorSpace";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FillBlendMode extends Java {
	const Darken = 0;
	const Lighten = 1;
	const Multiply = 2;
	const Overlay = 3;
	const Screen = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FillBlendMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HtmlExternalResolver extends Java {
	static private $_className = "com.aspose.slides.HtmlExternalResolver";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectFactory extends Java {
	static private $_className = "com.aspose.slides.EffectFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommentAuthorCollection extends Java {
	static private $_className = "com.aspose.slides.CommentAuthorCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GraphicalObject extends Java {
	static private $_className = "com.aspose.slides.GraphicalObject";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MarkerStyleType extends Java {
	const NotDefined = -1;
	const Circle = 0;
	const Dash = 1;
	const Diamond = 2;
	const Dot = 3;
	const None = 4;
	const Picture = 5;
	const Plus = 6;
	const Square = 7;
	const Star = 8;
	const Triangle = 9;
	const X = 10;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MarkerStyleType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorProperty extends Java {
	static private $_className = "com.aspose.slides.BehaviorProperty";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getShadowColor(...$argv) {
		return Java(self::$_className)->getShadowColor(...$argv);
	}
	static function getStyleColor(...$argv) {
		return Java(self::$_className)->getStyleColor(...$argv);
	}
	static function getR(...$argv) {
		return Java(self::$_className)->getR(...$argv);
	}
	static function getPptR(...$argv) {
		return Java(self::$_className)->getPptR(...$argv);
	}
	static function getScaleX(...$argv) {
		return Java(self::$_className)->getScaleX(...$argv);
	}
	static function getFillColor(...$argv) {
		return Java(self::$_className)->getFillColor(...$argv);
	}
	static function getFillMethod(...$argv) {
		return Java(self::$_className)->getFillMethod(...$argv);
	}
	static function getFillOpacity(...$argv) {
		return Java(self::$_className)->getFillOpacity(...$argv);
	}
	static function getFillOpacity2(...$argv) {
		return Java(self::$_className)->getFillOpacity2(...$argv);
	}
	static function getFillColor2(...$argv) {
		return Java(self::$_className)->getFillColor2(...$argv);
	}
	static function getExtrusionType(...$argv) {
		return Java(self::$_className)->getExtrusionType(...$argv);
	}
	static function getFill_Color(...$argv) {
		return Java(self::$_className)->getFill_Color(...$argv);
	}
	static function getFillFocus(...$argv) {
		return Java(self::$_className)->getFillFocus(...$argv);
	}
	static function getPptC(...$argv) {
		return Java(self::$_className)->getPptC(...$argv);
	}
	static function getPptY(...$argv) {
		return Java(self::$_className)->getPptY(...$argv);
	}
	static function getPptH(...$argv) {
		return Java(self::$_className)->getPptH(...$argv);
	}
	static function getExtrusionOn(...$argv) {
		return Java(self::$_className)->getExtrusionOn(...$argv);
	}
	static function getFillAngle(...$argv) {
		return Java(self::$_className)->getFillAngle(...$argv);
	}
	static function getPptX(...$argv) {
		return Java(self::$_className)->getPptX(...$argv);
	}
	static function getFillOn(...$argv) {
		return Java(self::$_className)->getFillOn(...$argv);
	}
	static function getPptW(...$argv) {
		return Java(self::$_className)->getPptW(...$argv);
	}
	static function getImageDataGain(...$argv) {
		return Java(self::$_className)->getImageDataGain(...$argv);
	}
	static function getStrokeSrc(...$argv) {
		return Java(self::$_className)->getStrokeSrc(...$argv);
	}
	static function getShadowOpacity(...$argv) {
		return Java(self::$_className)->getShadowOpacity(...$argv);
	}
	static function getXShear(...$argv) {
		return Java(self::$_className)->getXShear(...$argv);
	}
	static function getShadowOffsetY(...$argv) {
		return Java(self::$_className)->getShadowOffsetY(...$argv);
	}
	static function getSkewOriginX(...$argv) {
		return Java(self::$_className)->getSkewOriginX(...$argv);
	}
	static function getStyleFontSize(...$argv) {
		return Java(self::$_className)->getStyleFontSize(...$argv);
	}
	static function getStrokeOn(...$argv) {
		return Java(self::$_className)->getStrokeOn(...$argv);
	}
	static function getStyleOpacity(...$argv) {
		return Java(self::$_className)->getStyleOpacity(...$argv);
	}
	static function getShadowColor2(...$argv) {
		return Java(self::$_className)->getShadowColor2(...$argv);
	}
	static function getShadowType(...$argv) {
		return Java(self::$_className)->getShadowType(...$argv);
	}
	static function getSkewOn(...$argv) {
		return Java(self::$_className)->getSkewOn(...$argv);
	}
	static function getStrokeColor2(...$argv) {
		return Java(self::$_className)->getStrokeColor2(...$argv);
	}
	static function getStrokeWeight(...$argv) {
		return Java(self::$_className)->getStrokeWeight(...$argv);
	}
	static function getShadowOn(...$argv) {
		return Java(self::$_className)->getShadowOn(...$argv);
	}
	static function getYShear(...$argv) {
		return Java(self::$_className)->getYShear(...$argv);
	}
	static function getSkewOffsetX(...$argv) {
		return Java(self::$_className)->getSkewOffsetX(...$argv);
	}
	static function getStrokeColor(...$argv) {
		return Java(self::$_className)->getStrokeColor(...$argv);
	}
	static function getShadowOffsetX(...$argv) {
		return Java(self::$_className)->getShadowOffsetX(...$argv);
	}
	static function getSkewOffsetY(...$argv) {
		return Java(self::$_className)->getSkewOffsetY(...$argv);
	}
	static function getSkewOriginY(...$argv) {
		return Java(self::$_className)->getSkewOriginY(...$argv);
	}
	static function getStyleRotation(...$argv) {
		return Java(self::$_className)->getStyleRotation(...$argv);
	}
	static function getStrokeOpacity(...$argv) {
		return Java(self::$_className)->getStrokeOpacity(...$argv);
	}
	static function getScaleY(...$argv) {
		return Java(self::$_className)->getScaleY(...$argv);
	}
	static function getShadowOriginY(...$argv) {
		return Java(self::$_className)->getShadowOriginY(...$argv);
	}
	static function getShadowOriginX(...$argv) {
		return Java(self::$_className)->getShadowOriginX(...$argv);
	}
	static function getStyleTextDecorationLineThrough(...$argv) {
		return Java(self::$_className)->getStyleTextDecorationLineThrough(...$argv);
	}
	static function getStyleTextDecorationUnderline(...$argv) {
		return Java(self::$_className)->getStyleTextDecorationUnderline(...$argv);
	}
	static function getStyleFontFamily(...$argv) {
		return Java(self::$_className)->getStyleFontFamily(...$argv);
	}
	static function getStrokeStartArrowWidth(...$argv) {
		return Java(self::$_className)->getStrokeStartArrowWidth(...$argv);
	}
	static function getStyleTextEffectOutline(...$argv) {
		return Java(self::$_className)->getStyleTextEffectOutline(...$argv);
	}
	static function getStyleFontStyle(...$argv) {
		return Java(self::$_className)->getStyleFontStyle(...$argv);
	}
	static function getStrokeStartArrow(...$argv) {
		return Java(self::$_className)->getStrokeStartArrow(...$argv);
	}
	static function getStyleSRotation(...$argv) {
		return Java(self::$_className)->getStyleSRotation(...$argv);
	}
	static function getStrokeImageSizeX(...$argv) {
		return Java(self::$_className)->getStrokeImageSizeX(...$argv);
	}
	static function getStyleTextEffectEmboss(...$argv) {
		return Java(self::$_className)->getStyleTextEffectEmboss(...$argv);
	}
	static function getStrokeImageSizeY(...$argv) {
		return Java(self::$_className)->getStrokeImageSizeY(...$argv);
	}
	static function getStrokeStartArrowLength(...$argv) {
		return Java(self::$_className)->getStrokeStartArrowLength(...$argv);
	}
	static function getStyleTextTransform(...$argv) {
		return Java(self::$_className)->getStyleTextTransform(...$argv);
	}
	static function getStyleVisibility(...$argv) {
		return Java(self::$_className)->getStyleVisibility(...$argv);
	}
	static function getStyleFontWeight(...$argv) {
		return Java(self::$_className)->getStyleFontWeight(...$argv);
	}
	static function getStrokeLineStyle(...$argv) {
		return Java(self::$_className)->getStrokeLineStyle(...$argv);
	}
	static function getStyleTextShadow(...$argv) {
		return Java(self::$_className)->getStyleTextShadow(...$argv);
	}
	static function getImage(...$argv) {
		return Java(self::$_className)->getImage(...$argv);
	}
	static function getExtrusionOrientationAngle(...$argv) {
		return Java(self::$_className)->getExtrusionOrientationAngle(...$argv);
	}
	static function getExtrusionOrientationX(...$argv) {
		return Java(self::$_className)->getExtrusionOrientationX(...$argv);
	}
	static function getExtrusionRender(...$argv) {
		return Java(self::$_className)->getExtrusionRender(...$argv);
	}
	static function getExtrusionOrientationZ(...$argv) {
		return Java(self::$_className)->getExtrusionOrientationZ(...$argv);
	}
	static function getExtrusionColor(...$argv) {
		return Java(self::$_className)->getExtrusionColor(...$argv);
	}
	static function getExtrusionOrientationY(...$argv) {
		return Java(self::$_className)->getExtrusionOrientationY(...$argv);
	}
	static function getExtrusionForeDepth(...$argv) {
		return Java(self::$_className)->getExtrusionForeDepth(...$argv);
	}
	static function getExtrusionPlane(...$argv) {
		return Java(self::$_className)->getExtrusionPlane(...$argv);
	}
	static function getExtrusionRotationAngleX(...$argv) {
		return Java(self::$_className)->getExtrusionRotationAngleX(...$argv);
	}
	static function getExtrusionLockRotationCenter(...$argv) {
		return Java(self::$_className)->getExtrusionLockRotationCenter(...$argv);
	}
	static function getExtrusionRotationAngleY(...$argv) {
		return Java(self::$_className)->getExtrusionRotationAngleY(...$argv);
	}
	static function getExtrusionColorMode(...$argv) {
		return Java(self::$_className)->getExtrusionColorMode(...$argv);
	}
	static function getExtrusionRotationCenterX(...$argv) {
		return Java(self::$_className)->getExtrusionRotationCenterX(...$argv);
	}
	static function getExtrusionAutoRotationCenter(...$argv) {
		return Java(self::$_className)->getExtrusionAutoRotationCenter(...$argv);
	}
	static function getExtrusionBackDepth(...$argv) {
		return Java(self::$_className)->getExtrusionBackDepth(...$argv);
	}
	static function getShadowMatrixPerspectiveX(...$argv) {
		return Java(self::$_className)->getShadowMatrixPerspectiveX(...$argv);
	}
	static function getSkewMatrixXtoX(...$argv) {
		return Java(self::$_className)->getSkewMatrixXtoX(...$argv);
	}
	static function getStrokeEndArrowWidth(...$argv) {
		return Java(self::$_className)->getStrokeEndArrowWidth(...$argv);
	}
	static function getExtrusionRotationCenterZ(...$argv) {
		return Java(self::$_className)->getExtrusionRotationCenterZ(...$argv);
	}
	static function getFillFocusSizeY(...$argv) {
		return Java(self::$_className)->getFillFocusSizeY(...$argv);
	}
	static function getFillFocusPositionY(...$argv) {
		return Java(self::$_className)->getFillFocusPositionY(...$argv);
	}
	static function getImageDataCropTop(...$argv) {
		return Java(self::$_className)->getImageDataCropTop(...$argv);
	}
	static function getExtrusionViewPointZ(...$argv) {
		return Java(self::$_className)->getExtrusionViewPointZ(...$argv);
	}
	static function getImageDataGamma(...$argv) {
		return Java(self::$_className)->getImageDataGamma(...$argv);
	}
	static function getFillFocusPositionX(...$argv) {
		return Java(self::$_className)->getFillFocusPositionX(...$argv);
	}
	static function getOrCreateByValue(...$argv) {
		return Java(self::$_className)->getOrCreateByValue(...$argv);
	}
	static function getShadowMatrixXtoY(...$argv) {
		return Java(self::$_className)->getShadowMatrixXtoY(...$argv);
	}
	static function getShadowMatrixYtoX(...$argv) {
		return Java(self::$_className)->getShadowMatrixYtoX(...$argv);
	}
	static function getShadowOffset2X(...$argv) {
		return Java(self::$_className)->getShadowOffset2X(...$argv);
	}
	static function getShadowOffset2Y(...$argv) {
		return Java(self::$_className)->getShadowOffset2Y(...$argv);
	}
	static function getShadowMatrixXtoX(...$argv) {
		return Java(self::$_className)->getShadowMatrixXtoX(...$argv);
	}
	static function getSkewMatrixPerspectiveX(...$argv) {
		return Java(self::$_className)->getSkewMatrixPerspectiveX(...$argv);
	}
	static function getExtrusionSkewAngle(...$argv) {
		return Java(self::$_className)->getExtrusionSkewAngle(...$argv);
	}
	static function getSkewMatrixXtoY(...$argv) {
		return Java(self::$_className)->getSkewMatrixXtoY(...$argv);
	}
	static function getImageDataChromakey(...$argv) {
		return Java(self::$_className)->getImageDataChromakey(...$argv);
	}
	static function getExtrusionSkewAmt(...$argv) {
		return Java(self::$_className)->getExtrusionSkewAmt(...$argv);
	}
	static function getImageDataBlacklevel(...$argv) {
		return Java(self::$_className)->getImageDataBlacklevel(...$argv);
	}
	static function getExtrusionViewPointX(...$argv) {
		return Java(self::$_className)->getExtrusionViewPointX(...$argv);
	}
	static function getExtrusionRotationCenterY(...$argv) {
		return Java(self::$_className)->getExtrusionRotationCenterY(...$argv);
	}
	static function getExtrusionViewPointOriginY(...$argv) {
		return Java(self::$_className)->getExtrusionViewPointOriginY(...$argv);
	}
	static function getFillFocusSizeX(...$argv) {
		return Java(self::$_className)->getFillFocusSizeX(...$argv);
	}
	static function getImageDataCropRight(...$argv) {
		return Java(self::$_className)->getImageDataCropRight(...$argv);
	}
	static function getImageDataCropBottom(...$argv) {
		return Java(self::$_className)->getImageDataCropBottom(...$argv);
	}
	static function getShadowMatrixPerspectiveY(...$argv) {
		return Java(self::$_className)->getShadowMatrixPerspectiveY(...$argv);
	}
	static function getShadowMatrixYtoY(...$argv) {
		return Java(self::$_className)->getShadowMatrixYtoY(...$argv);
	}
	static function getSkewMatrixPerspectiveY(...$argv) {
		return Java(self::$_className)->getSkewMatrixPerspectiveY(...$argv);
	}
	static function getExtrusionViewPointY(...$argv) {
		return Java(self::$_className)->getExtrusionViewPointY(...$argv);
	}
	static function getSkewMatrixYtoX(...$argv) {
		return Java(self::$_className)->getSkewMatrixYtoX(...$argv);
	}
	static function getSkewMatrixYtoY(...$argv) {
		return Java(self::$_className)->getSkewMatrixYtoY(...$argv);
	}
	static function getStrokeDashStyle(...$argv) {
		return Java(self::$_className)->getStrokeDashStyle(...$argv);
	}
	static function getStrokeEndArrow(...$argv) {
		return Java(self::$_className)->getStrokeEndArrow(...$argv);
	}
	static function getStrokeEndArrowLength(...$argv) {
		return Java(self::$_className)->getStrokeEndArrowLength(...$argv);
	}
	static function getImageDataGrayscale(...$argv) {
		return Java(self::$_className)->getImageDataGrayscale(...$argv);
	}
	static function getExtrusionViewPointOriginX(...$argv) {
		return Java(self::$_className)->getExtrusionViewPointOriginX(...$argv);
	}
	static function getImageDataCropLeft(...$argv) {
		return Java(self::$_className)->getImageDataCropLeft(...$argv);
	}
	static function getStrokeFillType(...$argv) {
		return Java(self::$_className)->getStrokeFillType(...$argv);
	}
	static function getFillType(...$argv) {
		return Java(self::$_className)->getFillType(...$argv);
	}
}
class MathHorizontalAlignment extends Java {
	const NotDefined = 0;
	const Left = 1;
	const Center = 2;
	const Right = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathHorizontalAlignment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontFallBackRulesCollection extends Java {
	static private $_className = "com.aspose.slides.FontFallBackRulesCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesSize extends Java {
	static private $_className = "com.aspose.slides.NotesSize";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class XamlOptions extends Java {
	static private $_className = "com.aspose.slides.XamlOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontsManager extends Java {
	static private $_className = "com.aspose.slides.FontsManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathPortion extends Java {
	static private $_className = "com.aspose.slides.MathPortion";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterNotesSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.MasterNotesSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathSuperscriptElement extends Java {
	static private $_className = "com.aspose.slides.MathSuperscriptElement";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataPointCollection extends Java {
	static private $_className = "com.aspose.slides.ChartDataPointCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NewLineType extends Java {
	const Windows = 0;
	const Unix = 1;
	const Mac = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.NewLineType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BiLevel extends Java {
	static private $_className = "com.aspose.slides.BiLevel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BrowsedByIndividual extends Java {
	static private $_className = "com.aspose.slides.BrowsedByIndividual";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextInheritanceLimit extends Java {
	const All = 0;
	const TextBox = 1;
	const ParagraphOnly = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextInheritanceLimit";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AudioVolumeMode extends Java {
	const Mixed = -1;
	const Mute = 0;
	const Low = 1;
	const Medium = 2;
	const Loud = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AudioVolumeMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionPathPointsType extends Java {
	const None = 0;
	const Auto = 1;
	const Corner = 2;
	const Straight = 3;
	const Smooth = 4;
	const CurveAuto = 5;
	const CurveCorner = 6;
	const CurveStraight = 7;
	const CurveSmooth = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MotionPathPointsType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlidesAIAgentException extends Java {
	static private $_className = "com.aspose.slides.SlidesAIAgentException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextVerticalOverflowType extends Java {
	const NotDefined = -1;
	const Overflow = 0;
	const Ellipsis = 1;
	const Clip = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextVerticalOverflowType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SystemColor extends Java {
	const NotDefined = -1;
	const ScrollBar = 0;
	const Background = 1;
	const ActiveCaption = 2;
	const InactiveCaption = 3;
	const Menu = 4;
	const Window = 5;
	const WindowFrame = 6;
	const MenuText = 7;
	const WindowText = 8;
	const CaptionText = 9;
	const ActiveBorder = 10;
	const InactiveBorder = 11;
	const AppWorkspace = 12;
	const Highlight = 13;
	const HighlightText = 14;
	const BtnFace = 15;
	const BtnShadow = 16;
	const GrayText = 17;
	const BtnText = 18;
	const InactiveCaptionText = 19;
	const BtnHighlight = 20;
	const ThreeDDkShadow = 21;
	const ThreeDLight = 22;
	const InfoText = 23;
	const InfoBk = 24;
	const HotLight = 26;
	const GradientActiveCaption = 27;
	const GradientInactiveCaption = 28;
	const MenuHighlight = 29;
	const MenuBar = 30;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SystemColor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionOriginType extends Java {
	const NotDefined = -1;
	const Parent = 0;
	const Layout = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MotionOriginType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontScheme extends Java {
	static private $_className = "com.aspose.slides.FontScheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FormatScheme extends Java {
	static private $_className = "com.aspose.slides.FormatScheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PlaceholderSize extends Java {
	const Full = 0;
	const Half = 1;
	const Quarter = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PlaceholderSize";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LoadFormat extends Java {
	const Auto = 0;
	const Ppt = 1;
	const Pps = 2;
	const Pptx = 3;
	const Ppsx = 4;
	const Odp = 5;
	const Potx = 6;
	const Pptm = 7;
	const Ppsm = 8;
	const Potm = 9;
	const Otp = 10;
	const Ppt95 = 11;
	const Pot = 12;
	const Fodp = 13;
	const Unknown = 255;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LoadFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Connector extends Java {
	static private $_className = "com.aspose.slides.Connector";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Ink extends Java {
	static private $_className = "com.aspose.slides.Ink";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SummaryZoomFrame extends Java {
	static private $_className = "com.aspose.slides.SummaryZoomFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SvgExternalFontsHandling extends Java {
	const AddLinksToFontFiles = 0;
	const Embed = 1;
	const Vectorize = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SvgExternalFontsHandling";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxException extends Java {
	static private $_className = "com.aspose.slides.PptxException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Zip64Mode extends Java {
	const Never = 0;
	const IfNecessary = 1;
	const Always = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.Zip64Mode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartThemeManager extends Java {
	static private $_className = "com.aspose.slides.ChartThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideThemeManager extends Java {
	static private $_className = "com.aspose.slides.SlideThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AudioCollection extends Java {
	static private $_className = "com.aspose.slides.AudioCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideSizeType extends Java {
	const OnScreen = 0;
	const LetterPaper = 1;
	const A4Paper = 2;
	const Slide35mm = 3;
	const Overhead = 4;
	const Banner = 5;
	const Custom = 6;
	const Ledger = 7;
	const A3Paper = 8;
	const B4IsoPaper = 9;
	const B5IsoPaper = 10;
	const B4JisPaper = 11;
	const B5JisPaper = 12;
	const HagakiCard = 13;
	const OnScreen16x9 = 14;
	const OnScreen16x10 = 15;
	const Widescreen = 16;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SlideSizeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InkActions extends Java {
	static private $_className = "com.aspose.slides.InkActions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GroupShape extends Java {
	static private $_className = "com.aspose.slides.GroupShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesPositions extends Java {
	const None = 0;
	const BottomFull = 1;
	const BottomTruncated = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.NotesPositions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HandoutLayoutingOptions extends Java {
	static private $_className = "com.aspose.slides.HandoutLayoutingOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MarkdownExportType extends Java {
	const Sequential = 0;
	const TextOnly = 1;
	const Visual = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MarkdownExportType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontSubstRule extends Java {
	static private $_className = "com.aspose.slides.FontSubstRule";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaProject extends Java {
	static private $_className = "com.aspose.slides.VbaProject";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionInOutDirectionType extends Java {
	const In = 0;
	const Out = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionInOutDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextShapeType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Plain = 1;
	const Stop = 2;
	const Triangle = 3;
	const TriangleInverted = 4;
	const Chevron = 5;
	const ChevronInverted = 6;
	const RingInside = 7;
	const RingOutside = 8;
	const ArchUp = 9;
	const ArchDown = 10;
	const Circle = 11;
	const Button = 12;
	const ArchUpPour = 13;
	const ArchDownPour = 14;
	const CirclePour = 15;
	const ButtonPour = 16;
	const CurveUp = 17;
	const CurveDown = 18;
	const CanUp = 19;
	const CanDown = 20;
	const Wave1 = 21;
	const Wave2 = 22;
	const DoubleWave1 = 23;
	const Wave4 = 24;
	const Inflate = 25;
	const Deflate = 26;
	const InflateBottom = 27;
	const DeflateBottom = 28;
	const InflateTop = 29;
	const DeflateTop = 30;
	const DeflateInflate = 31;
	const DeflateInflateDeflate = 32;
	const FadeRight = 33;
	const FadeLeft = 34;
	const FadeUp = 35;
	const FadeDown = 36;
	const SlantUp = 37;
	const SlantDown = 38;
	const CascadeUp = 39;
	const CascadeDown = 40;
	const Custom = 41;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextShapeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterThemeManager extends Java {
	static private $_className = "com.aspose.slides.MasterThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutSlideThemeManager extends Java {
	static private $_className = "com.aspose.slides.LayoutSlideThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Behavior extends Java {
	static private $_className = "com.aspose.slides.Behavior";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommonSlideViewProperties extends Java {
	static private $_className = "com.aspose.slides.CommonSlideViewProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Tab extends Java {
	static private $_className = "com.aspose.slides.Tab";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathGroupingCharacter extends Java {
	static private $_className = "com.aspose.slides.MathGroupingCharacter";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ParentLabelLayoutType extends Java {
	const Banner = 0;
	const None = 1;
	const Overlapping = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ParentLabelLayoutType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TrendlineType extends Java {
	const Exponential = 0;
	const Linear = 1;
	const Logarithmic = 2;
	const MovingAverage = 3;
	const Polynomial = 4;
	const Power = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TrendlineType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineArrowheadLength extends Java {
	const NotDefined = -1;
	const Short = 0;
	const Medium = 1;
	const Long = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineArrowheadLength";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionCmdPath extends Java {
	static private $_className = "com.aspose.slides.MotionCmdPath";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ModernComment extends Java {
	static private $_className = "com.aspose.slides.ModernComment";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FrameTickEventArgs extends Java {
	static private $_className = "com.aspose.slides.FrameTickEventArgs";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectStyleCollection extends Java {
	static private $_className = "com.aspose.slides.EffectStyleCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TiffOptions extends Java {
	static private $_className = "com.aspose.slides.TiffOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontSubstCondition extends Java {
	const WhenInaccessible = 0;
	const Always = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FontSubstCondition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxUnsupportedFormatException extends Java {
	static private $_className = "com.aspose.slides.PptxUnsupportedFormatException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientStopCollectionEffectiveData extends Java {
	static private $_className = "com.aspose.slides.GradientStopCollectionEffectiveData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Picture extends Java {
	static private $_className = "com.aspose.slides.Picture";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PictureFillFormat extends Java {
	static private $_className = "com.aspose.slides.PictureFillFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ErrorBarsCustomValues extends Java {
	static private $_className = "com.aspose.slides.ErrorBarsCustomValues";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BulletFormat extends Java {
	static private $_className = "com.aspose.slides.BulletFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterSlide extends Java {
	static private $_className = "com.aspose.slides.MasterSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontsLoader extends Java {
	static private $_className = "com.aspose.slides.FontsLoader";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function clearCache(...$argv) {
		return Java(self::$_className)->clearCache(...$argv);
	}
	static function loadExternalFont(...$argv) {
		return Java(self::$_className)->loadExternalFont(...$argv);
	}
	static function getFontFolders(...$argv) {
		return Java(self::$_className)->getFontFolders(...$argv);
	}
	static function loadExternalFonts(...$argv) {
		return Java(self::$_className)->loadExternalFonts(...$argv);
	}
}
class TiffCompressionTypes extends Java {
	const Default = 0;
	const None = 1;
	const CCITT3 = 2;
	const CCITT4 = 3;
	const LZW = 4;
	const RLE = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TiffCompressionTypes";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectSubtype extends Java {
	const None = 0;
	const Across = 1;
	const Bottom = 2;
	const BottomLeft = 3;
	const BottomRight = 4;
	const Center = 5;
	const ObjectCenter = 6;
	const SlideCenter = 7;
	const Clockwise = 8;
	const CounterClockwise = 9;
	const GradualAndCycleClockwise = 10;
	const GradualAndCycleCounterClockwise = 11;
	const Down = 12;
	const DownLeft = 13;
	const DownRight = 14;
	const FontAllCaps = 15;
	const FontBold = 16;
	const FontItalic = 17;
	const FontShadow = 18;
	const FontStrikethrough = 19;
	const FontUnderline = 20;
	const Gradual = 21;
	const Horizontal = 22;
	const HorizontalIn = 23;
	const HorizontalOut = 24;
	const In = 25;
	const InBottom = 26;
	const InCenter = 27;
	const InSlightly = 28;
	const Instant = 29;
	const Left = 30;
	const OrdinalMask = 31;
	const Out = 32;
	const OutBottom = 33;
	const OutCenter = 34;
	const OutSlightly = 35;
	const Right = 36;
	const Slightly = 37;
	const Top = 38;
	const TopLeft = 39;
	const TopRight = 40;
	const Up = 41;
	const UpLeft = 42;
	const UpRight = 43;
	const Vertical = 44;
	const VerticalIn = 45;
	const VerticalOut = 46;
	const Wheel1 = 47;
	const Wheel2 = 48;
	const Wheel3 = 49;
	const Wheel4 = 50;
	const Wheel8 = 51;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectSubtype";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartCategory extends Java {
	static private $_className = "com.aspose.slides.ChartCategory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ViewType extends Java {
	const NotDefined = 0;
	const SlideView = 1;
	const SlideMasterView = 2;
	const NotesView = 3;
	const HandoutView = 4;
	const NotesMasterView = 5;
	const OutlineView = 6;
	const SlideSorterView = 7;
	const SlideThumbnailView = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ViewType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextHighlightingOptions extends Java {
	static private $_className = "com.aspose.slides.TextHighlightingOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AxisFormat extends Java {
	static private $_className = "com.aspose.slides.AxisFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextSearchOptions extends Java {
	static private $_className = "com.aspose.slides.TextSearchOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SplitterBarStateType extends Java {
	const Minimized = 0;
	const Restored = 1;
	const Maximized = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SplitterBarStateType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CannotCombine2DAnd3DChartsException extends Java {
	static private $_className = "com.aspose.slides.CannotCombine2DAnd3DChartsException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AxesManager extends Java {
	static private $_className = "com.aspose.slides.AxesManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShredTransition extends Java {
	static private $_className = "com.aspose.slides.ShredTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorCollection extends Java {
	static private $_className = "com.aspose.slides.BehaviorCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BubbleSizeRepresentationType extends Java {
	const Area = 0;
	const Width = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BubbleSizeRepresentationType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorDirection extends Java {
	const NotDefined = -1;
	const Clockwise = 0;
	const CounterClockwise = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorDirection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartCategoryCollection extends Java {
	static private $_className = "com.aspose.slides.ChartCategoryCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PersistenceType extends Java {
	const NotDefined = -1;
	const PersistPropertyBag = 0;
	const PersistStream = 1;
	const PersistStreamInit = 2;
	const PersistStorage = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PersistenceType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontSubstRuleCollection extends Java {
	static private $_className = "com.aspose.slides.FontSubstRuleCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentationInfo extends Java {
	static private $_className = "com.aspose.slides.PresentationInfo";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColumnFormat extends Java {
	static private $_className = "com.aspose.slides.ColumnFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LayoutSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.LayoutSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorFormat extends Java {
	static private $_className = "com.aspose.slides.ColorFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PictureType extends Java {
	const NotDefined = -1;
	const Stack = 0;
	const StackScale = 1;
	const Stretch = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PictureType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineCapStyle extends Java {
	const NotDefined = -1;
	const Round = 0;
	const Square = 1;
	const Flat = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineCapStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PortionCollection extends Java {
	static private $_className = "com.aspose.slides.PortionCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathNaryOperator extends Java {
	static private $_className = "com.aspose.slides.MathNaryOperator";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CrossesType extends Java {
	const AxisCrossesAtZero = 0;
	const Maximum = 1;
	const Custom = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CrossesType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataTable extends Java {
	static private $_className = "com.aspose.slides.DataTable";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontSources extends Java {
	static private $_className = "com.aspose.slides.FontSources";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommentCollection extends Java {
	static private $_className = "com.aspose.slides.CommentCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FilterEffectType extends Java {
	const None = 0;
	const Barn = 1;
	const Blinds = 2;
	const Box = 3;
	const Checkerboard = 4;
	const Circle = 5;
	const Diamond = 6;
	const Dissolve = 7;
	const Fade = 8;
	const Image = 9;
	const Pixelate = 10;
	const Plus = 11;
	const RandomBar = 12;
	const Slide = 13;
	const Stretch = 14;
	const Strips = 15;
	const Wedge = 16;
	const Wheel = 17;
	const Wipe = 18;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FilterEffectType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextAnimationCollection extends Java {
	static private $_className = "com.aspose.slides.TextAnimationCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataLabel extends Java {
	static private $_className = "com.aspose.slides.DataLabel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Presentation extends Java {
	static private $_className = "com.aspose.slides.Presentation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CellFormat extends Java {
	static private $_className = "com.aspose.slides.CellFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientStopEffectiveData extends Java {
	static private $_className = "com.aspose.slides.GradientStopEffectiveData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartShapeType extends Java {
	const NotDefined = -1;
	const Box = 0;
	const Cone = 1;
	const ConeToMax = 2;
	const Cylinder = 3;
	const Pyramid = 4;
	const PyramidToMaximum = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ChartShapeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BevelPresetType extends Java {
	const NotDefined = -1;
	const Angle = 0;
	const ArtDeco = 1;
	const Circle = 2;
	const Convex = 3;
	const CoolSlant = 4;
	const Cross = 5;
	const Divot = 6;
	const HardEdge = 7;
	const RelaxedInset = 8;
	const Riblet = 9;
	const Slope = 10;
	const SoftRound = 11;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.BevelPresetType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OOXMLException extends Java {
	static private $_className = "com.aspose.slides.OOXMLException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathAccent extends Java {
	static private $_className = "com.aspose.slides.MathAccent";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartTextFormat extends Java {
	static private $_className = "com.aspose.slides.ChartTextFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineJoinStyle extends Java {
	const NotDefined = -1;
	const Round = 0;
	const Bevel = 1;
	const Miter = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineJoinStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentationText extends Java {
	static private $_className = "com.aspose.slides.PresentationText";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Cell extends Java {
	static private $_className = "com.aspose.slides.Cell";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorOperation extends Java {
	static private $_className = "com.aspose.slides.ColorOperation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionEightDirectionType extends Java {
	const LeftDown = 0;
	const LeftUp = 1;
	const RightDown = 2;
	const RightUp = 3;
	const Left = 4;
	const Up = 5;
	const Down = 6;
	const Right = 7;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionEightDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BasePortionFormat extends Java {
	static private $_className = "com.aspose.slides.BasePortionFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterHandoutSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.MasterHandoutSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathematicalText extends Java {
	static private $_className = "com.aspose.slides.MathematicalText";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LegendEntryCollection extends Java {
	static private $_className = "com.aspose.slides.LegendEntryCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartSeries extends Java {
	static private $_className = "com.aspose.slides.ChartSeries";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Format extends Java {
	static private $_className = "com.aspose.slides.Format";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeType extends Java {
	const NotDefined = -1;
	const Custom = 0;
	const Line = 1;
	const LineInverse = 2;
	const Triangle = 3;
	const RightTriangle = 4;
	const Rectangle = 5;
	const Diamond = 6;
	const Parallelogram = 7;
	const Trapezoid = 8;
	const NonIsoscelesTrapezoid = 9;
	const Pentagon = 10;
	const Hexagon = 11;
	const Heptagon = 12;
	const Octagon = 13;
	const Decagon = 14;
	const Dodecagon = 15;
	const FourPointedStar = 16;
	const FivePointedStar = 17;
	const SixPointedStar = 18;
	const SevenPointedStar = 19;
	const EightPointedStar = 20;
	const TenPointedStar = 21;
	const TwelvePointedStar = 22;
	const SixteenPointedStar = 23;
	const TwentyFourPointedStar = 24;
	const ThirtyTwoPointedStar = 25;
	const RoundCornerRectangle = 26;
	const OneRoundCornerRectangle = 27;
	const TwoSamesideRoundCornerRectangle = 28;
	const TwoDiagonalRoundCornerRectangle = 29;
	const OneSnipOneRoundCornerRectangle = 30;
	const OneSnipCornerRectangle = 31;
	const TwoSamesideSnipCornerRectangle = 32;
	const TwoDiagonalSnipCornerRectangle = 33;
	const Plaque = 34;
	const Ellipse = 35;
	const Teardrop = 36;
	const HomePlate = 37;
	const Chevron = 38;
	const PieWedge = 39;
	const Pie = 40;
	const BlockArc = 41;
	const Donut = 42;
	const NoSmoking = 43;
	const RightArrow = 44;
	const LeftArrow = 45;
	const UpArrow = 46;
	const DownArrow = 47;
	const StripedRightArrow = 48;
	const NotchedRightArrow = 49;
	const BentUpArrow = 50;
	const LeftRightArrow = 51;
	const UpDownArrow = 52;
	const LeftUpArrow = 53;
	const LeftRightUpArrow = 54;
	const QuadArrow = 55;
	const CalloutLeftArrow = 56;
	const CalloutRightArrow = 57;
	const CalloutUpArrow = 58;
	const CalloutDownArrow = 59;
	const CalloutLeftRightArrow = 60;
	const CalloutUpDownArrow = 61;
	const CalloutQuadArrow = 62;
	const BentArrow = 63;
	const UTurnArrow = 64;
	const CircularArrow = 65;
	const LeftCircularArrow = 66;
	const LeftRightCircularArrow = 67;
	const CurvedRightArrow = 68;
	const CurvedLeftArrow = 69;
	const CurvedUpArrow = 70;
	const CurvedDownArrow = 71;
	const SwooshArrow = 72;
	const Cube = 73;
	const Can = 74;
	const LightningBolt = 75;
	const Heart = 76;
	const Sun = 77;
	const Moon = 78;
	const SmileyFace = 79;
	const IrregularSeal1 = 80;
	const IrregularSeal2 = 81;
	const FoldedCorner = 82;
	const Bevel = 83;
	const Frame = 84;
	const HalfFrame = 85;
	const Corner = 86;
	const DiagonalStripe = 87;
	const Chord = 88;
	const CurvedArc = 89;
	const LeftBracket = 90;
	const RightBracket = 91;
	const LeftBrace = 92;
	const RightBrace = 93;
	const BracketPair = 94;
	const BracePair = 95;
	const StraightConnector1 = 96;
	const BentConnector2 = 97;
	const BentConnector3 = 98;
	const BentConnector4 = 99;
	const BentConnector5 = 100;
	const CurvedConnector2 = 101;
	const CurvedConnector3 = 102;
	const CurvedConnector4 = 103;
	const CurvedConnector5 = 104;
	const Callout1 = 105;
	const Callout2 = 106;
	const Callout3 = 107;
	const Callout1WithAccent = 108;
	const Callout2WithAccent = 109;
	const Callout3WithAccent = 110;
	const Callout1WithBorder = 111;
	const Callout2WithBorder = 112;
	const Callout3WithBorder = 113;
	const Callout1WithBorderAndAccent = 114;
	const Callout2WithBorderAndAccent = 115;
	const Callout3WithBorderAndAccent = 116;
	const CalloutWedgeRectangle = 117;
	const CalloutWedgeRoundRectangle = 118;
	const CalloutWedgeEllipse = 119;
	const CalloutCloud = 120;
	const Cloud = 121;
	const Ribbon = 122;
	const Ribbon2 = 123;
	const EllipseRibbon = 124;
	const EllipseRibbon2 = 125;
	const LeftRightRibbon = 126;
	const VerticalScroll = 127;
	const HorizontalScroll = 128;
	const Wave = 129;
	const DoubleWave = 130;
	const Plus = 131;
	const ProcessFlow = 132;
	const DecisionFlow = 133;
	const InputOutputFlow = 134;
	const PredefinedProcessFlow = 135;
	const InternalStorageFlow = 136;
	const DocumentFlow = 137;
	const MultiDocumentFlow = 138;
	const TerminatorFlow = 139;
	const PreparationFlow = 140;
	const ManualInputFlow = 141;
	const ManualOperationFlow = 142;
	const ConnectorFlow = 143;
	const PunchedCardFlow = 144;
	const PunchedTapeFlow = 145;
	const SummingJunctionFlow = 146;
	const OrFlow = 147;
	const CollateFlow = 148;
	const SortFlow = 149;
	const ExtractFlow = 150;
	const MergeFlow = 151;
	const OfflineStorageFlow = 152;
	const OnlineStorageFlow = 153;
	const MagneticTapeFlow = 154;
	const MagneticDiskFlow = 155;
	const MagneticDrumFlow = 156;
	const DisplayFlow = 157;
	const DelayFlow = 158;
	const AlternateProcessFlow = 159;
	const OffPageConnectorFlow = 160;
	const BlankButton = 161;
	const HomeButton = 162;
	const HelpButton = 163;
	const InformationButton = 164;
	const ForwardOrNextButton = 165;
	const BackOrPreviousButton = 166;
	const EndButton = 167;
	const BeginningButton = 168;
	const ReturnButton = 169;
	const DocumentButton = 170;
	const SoundButton = 171;
	const MovieButton = 172;
	const Gear6 = 173;
	const Gear9 = 174;
	const Funnel = 175;
	const PlusMath = 176;
	const MinusMath = 177;
	const MultiplyMath = 178;
	const DivideMath = 179;
	const EqualMath = 180;
	const NotEqualMath = 181;
	const CornerTabs = 182;
	const SquareTabs = 183;
	const PlaqueTabs = 184;
	const ChartX = 185;
	const ChartStar = 186;
	const ChartPlus = 187;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapeType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathRightSubSuperscriptElementFactory extends Java {
	static private $_className = "com.aspose.slides.MathRightSubSuperscriptElementFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartType extends Java {
	const ClusteredColumn = 0;
	const StackedColumn = 1;
	const PercentsStackedColumn = 2;
	const ClusteredColumn3D = 3;
	const StackedColumn3D = 4;
	const PercentsStackedColumn3D = 5;
	const Column3D = 6;
	const ClusteredCylinder = 7;
	const StackedCylinder = 8;
	const PercentsStackedCylinder = 9;
	const Cylinder3D = 10;
	const ClusteredCone = 11;
	const StackedCone = 12;
	const PercentsStackedCone = 13;
	const Cone3D = 14;
	const ClusteredPyramid = 15;
	const StackedPyramid = 16;
	const PercentsStackedPyramid = 17;
	const Pyramid3D = 18;
	const Line = 19;
	const StackedLine = 20;
	const PercentsStackedLine = 21;
	const LineWithMarkers = 22;
	const StackedLineWithMarkers = 23;
	const PercentsStackedLineWithMarkers = 24;
	const Line3D = 25;
	const Pie = 26;
	const Pie3D = 27;
	const PieOfPie = 28;
	const ExplodedPie = 29;
	const ExplodedPie3D = 30;
	const BarOfPie = 31;
	const PercentsStackedBar = 32;
	const ClusteredBar3D = 33;
	const ClusteredBar = 34;
	const StackedBar = 35;
	const StackedBar3D = 36;
	const PercentsStackedBar3D = 37;
	const ClusteredHorizontalCylinder = 38;
	const StackedHorizontalCylinder = 39;
	const PercentsStackedHorizontalCylinder = 40;
	const ClusteredHorizontalCone = 41;
	const StackedHorizontalCone = 42;
	const PercentsStackedHorizontalCone = 43;
	const ClusteredHorizontalPyramid = 44;
	const StackedHorizontalPyramid = 45;
	const PercentsStackedHorizontalPyramid = 46;
	const Area = 47;
	const StackedArea = 48;
	const PercentsStackedArea = 49;
	const Area3D = 50;
	const StackedArea3D = 51;
	const PercentsStackedArea3D = 52;
	const ScatterWithMarkers = 53;
	const ScatterWithSmoothLinesAndMarkers = 54;
	const ScatterWithSmoothLines = 55;
	const ScatterWithStraightLinesAndMarkers = 56;
	const ScatterWithStraightLines = 57;
	const HighLowClose = 58;
	const OpenHighLowClose = 59;
	const VolumeHighLowClose = 60;
	const VolumeOpenHighLowClose = 61;
	const Surface3D = 62;
	const WireframeSurface3D = 63;
	const Contour = 64;
	const WireframeContour = 65;
	const Doughnut = 66;
	const ExplodedDoughnut = 67;
	const Bubble = 68;
	const BubbleWith3D = 69;
	const Radar = 70;
	const RadarWithMarkers = 71;
	const FilledRadar = 72;
	const SeriesOfMixedTypes = 73;
	const Treemap = 74;
	const Sunburst = 75;
	const Histogram = 76;
	const ParetoLine = 77;
	const BoxAndWhisker = 78;
	const Waterfall = 79;
	const Funnel = 80;
	const Map = 81;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ChartType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ReturnAction extends Java {
	const Continue = 0;
	const Abort = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ReturnAction";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextStyle extends Java {
	static private $_className = "com.aspose.slides.TextStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommentsPositions extends Java {
	const None = 0;
	const Bottom = 1;
	const Right = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CommentsPositions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PortionFormat extends Java {
	static private $_className = "com.aspose.slides.PortionFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Audio extends Java {
	static private $_className = "com.aspose.slides.Audio";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PictureFrameLock extends Java {
	static private $_className = "com.aspose.slides.PictureFrameLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectType extends Java {
	const Appear = 0;
	const CurveUpDown = 1;
	const Ascend = 2;
	const FloatUp = 2;
	const Blast = 3;
	const Blinds = 4;
	const Blink = 5;
	const BoldFlash = 6;
	const BoldReveal = 7;
	const Boomerang = 8;
	const Bounce = 9;
	const Box = 10;
	const BrushOnColor = 11;
	const BrushOnUnderline = 12;
	const CenterRevolve = 13;
	const ChangeFillColor = 14;
	const ChangeFont = 15;
	const ChangeFontColor = 16;
	const ChangeFontSize = 17;
	const ChangeFontStyle = 18;
	const ChangeLineColor = 19;
	const Checkerboard = 20;
	const Circle = 21;
	const ColorBlend = 22;
	const ColorTypewriter = 23;
	const ColorWave = 24;
	const ComplementaryColor = 25;
	const ComplementaryColor2 = 26;
	const Compress = 27;
	const ContrastingColor = 28;
	const Crawl = 29;
	const Credits = 30;
	const Custom = 31;
	const Darken = 32;
	const Desaturate = 33;
	const Descend = 34;
	const FloatDown = 34;
	const Diamond = 35;
	const Dissolve = 36;
	const EaseInOut = 37;
	const Expand = 38;
	const Fade = 39;
	const FadedSwivel = 40;
	const FadedZoom = 41;
	const FlashBulb = 42;
	const FlashOnce = 43;
	const Flicker = 44;
	const Flip = 45;
	const Float = 46;
	const Fly = 47;
	const Fold = 48;
	const Glide = 49;
	const GrowAndTurn = 50;
	const GrowShrink = 51;
	const GrowWithColor = 52;
	const Lighten = 53;
	const LightSpeed = 54;
	const MediaPause = 55;
	const MediaPlay = 56;
	const MediaStop = 57;
	const Path4PointStar = 58;
	const Path5PointStar = 59;
	const Path6PointStar = 60;
	const Path8PointStar = 61;
	const PathArcDown = 62;
	const PathArcLeft = 63;
	const PathArcRight = 64;
	const PathArcUp = 65;
	const PathBean = 66;
	const PathBounceLeft = 67;
	const PathBounceRight = 68;
	const PathBuzzsaw = 69;
	const PathCircle = 70;
	const PathCrescentMoon = 71;
	const PathCurvedSquare = 72;
	const PathCurvedX = 73;
	const PathCurvyLeft = 74;
	const PathCurvyRight = 75;
	const PathCurvyStar = 76;
	const PathDecayingWave = 77;
	const PathDiagonalDownRight = 78;
	const PathDiagonalUpRight = 79;
	const PathDiamond = 80;
	const PathDown = 81;
	const PathEqualTriangle = 82;
	const PathFigure8Four = 83;
	const PathFootball = 84;
	const PathFunnel = 85;
	const PathHeart = 86;
	const PathHeartbeat = 87;
	const PathHexagon = 88;
	const PathHorizontalFigure8 = 89;
	const PathInvertedSquare = 90;
	const PathInvertedTriangle = 91;
	const PathLeft = 92;
	const PathLoopdeLoop = 93;
	const PathNeutron = 94;
	const PathOctagon = 95;
	const PathParallelogram = 96;
	const PathPeanut = 97;
	const PathPentagon = 98;
	const PathPlus = 99;
	const PathPointyStar = 100;
	const PathRight = 101;
	const PathRightTriangle = 102;
	const PathSCurve1 = 103;
	const PathSCurve2 = 104;
	const PathSineWave = 105;
	const PathSpiralLeft = 106;
	const PathSpiralRight = 107;
	const PathSpring = 108;
	const PathSquare = 109;
	const PathStairsDown = 110;
	const PathSwoosh = 111;
	const PathTeardrop = 112;
	const PathTrapezoid = 113;
	const PathTurnDown = 114;
	const PathTurnRight = 115;
	const PathTurnUp = 116;
	const PathTurnUpRight = 117;
	const PathUp = 118;
	const PathUser = 119;
	const PathVerticalFigure8 = 120;
	const PathWave = 121;
	const PathZigzag = 122;
	const Peek = 123;
	const Pinwheel = 124;
	const Plus = 125;
	const RandomBars = 126;
	const RandomEffects = 127;
	const RiseUp = 128;
	const Shimmer = 129;
	const Sling = 130;
	const Spin = 131;
	const Spinner = 132;
	const Spiral = 133;
	const Split = 134;
	const Stretch = 135;
	const Strips = 136;
	const StyleEmphasis = 137;
	const Swish = 138;
	const Swivel = 139;
	const Teeter = 140;
	const Thread = 141;
	const Transparency = 142;
	const Unfold = 143;
	const VerticalGrow = 144;
	const Wave = 145;
	const Wedge = 146;
	const Wheel = 147;
	const Whip = 148;
	const Wipe = 149;
	const Magnify = 150;
	const Zoom = 151;
	const OLEObjectShow = 152;
	const OLEObjectEdit = 153;
	const OLEObjectOpen = 154;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataWorksheetCollection extends Java {
	static private $_className = "com.aspose.slides.ChartDataWorksheetCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommentAuthor extends Java {
	static private $_className = "com.aspose.slides.CommentAuthor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OutputFile extends Java {
	static private $_className = "com.aspose.slides.OutputFile";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageTransformOCollectionEffectiveData extends Java {
	static private $_className = "com.aspose.slides.ImageTransformOCollectionEffectiveData";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColumnCollection extends Java {
	static private $_className = "com.aspose.slides.ColumnCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Collect extends Java {
	static private $_className = "com.aspose.slides.Collect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function shapes(...$argv) {
		return Java(self::$_className)->shapes(...$argv);
	}
}
class NotesSlideManager extends Java {
	static private $_className = "com.aspose.slides.NotesSlideManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HyperlinkManager extends Java {
	static private $_className = "com.aspose.slides.HyperlinkManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ZoomLayout extends Java {
	const GridLayout = 0;
	const FixedLayout = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ZoomLayout";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataSourceTypeForErrorBarsCustomValues extends Java {
	static private $_className = "com.aspose.slides.DataSourceTypeForErrorBarsCustomValues";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DrawingGuidesCollection extends Java {
	static private $_className = "com.aspose.slides.DrawingGuidesCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PatternFormat extends Java {
	static private $_className = "com.aspose.slides.PatternFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ResourceLoadingAction extends Java {
	const Default = 0;
	const Skip = 1;
	const UserProvided = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ResourceLoadingAction";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TableStylePreset extends Java {
	const Custom = -1;
	const None = 0;
	const MediumStyle2Accent1 = 1;
	const MediumStyle2 = 2;
	const NoStyleNoGrid = 3;
	const ThemedStyle1Accent1 = 4;
	const ThemedStyle1Accent2 = 5;
	const ThemedStyle1Accent3 = 6;
	const ThemedStyle1Accent4 = 7;
	const ThemedStyle1Accent5 = 8;
	const ThemedStyle1Accent6 = 9;
	const NoStyleTableGrid = 10;
	const ThemedStyle2Accent1 = 11;
	const ThemedStyle2Accent2 = 12;
	const ThemedStyle2Accent3 = 13;
	const ThemedStyle2Accent4 = 14;
	const ThemedStyle2Accent5 = 15;
	const ThemedStyle2Accent6 = 16;
	const LightStyle1 = 17;
	const LightStyle1Accent1 = 18;
	const LightStyle1Accent2 = 19;
	const LightStyle1Accent3 = 20;
	const LightStyle1Accent4 = 21;
	const LightStyle2Accent5 = 22;
	const LightStyle1Accent6 = 23;
	const LightStyle2 = 24;
	const LightStyle2Accent1 = 25;
	const LightStyle2Accent2 = 26;
	const LightStyle2Accent3 = 27;
	const MediumStyle2Accent3 = 28;
	const MediumStyle2Accent4 = 29;
	const MediumStyle2Accent5 = 30;
	const LightStyle2Accent6 = 31;
	const LightStyle2Accent4 = 32;
	const LightStyle3 = 33;
	const LightStyle3Accent1 = 34;
	const MediumStyle2Accent2 = 35;
	const LightStyle3Accent2 = 36;
	const LightStyle3Accent3 = 37;
	const LightStyle3Accent4 = 38;
	const LightStyle3Accent5 = 39;
	const LightStyle3Accent6 = 40;
	const MediumStyle1 = 41;
	const MediumStyle1Accent1 = 42;
	const MediumStyle1Accent2 = 43;
	const MediumStyle1Accent3 = 44;
	const MediumStyle1Accent4 = 45;
	const MediumStyle1Accent5 = 46;
	const MediumStyle1Accent6 = 47;
	const MediumStyle2Accent6 = 48;
	const MediumStyle3 = 49;
	const MediumStyle3Accent1 = 50;
	const MediumStyle3Accent2 = 51;
	const MediumStyle3Accent3 = 52;
	const MediumStyle3Accent4 = 53;
	const MediumStyle3Accent5 = 54;
	const MediumStyle3Accent6 = 55;
	const MediumStyle4 = 56;
	const MediumStyle4Accent1 = 57;
	const MediumStyle4Accent2 = 58;
	const MediumStyle4Accent3 = 59;
	const MediumStyle4Accent4 = 60;
	const MediumStyle4Accent5 = 61;
	const MediumStyle4Accent6 = 62;
	const DarkStyle1 = 63;
	const DarkStyle1Accent1 = 64;
	const DarkStyle1Accent2 = 65;
	const DarkStyle1Accent3 = 66;
	const DarkStyle1Accent4 = 67;
	const DarkStyle1Accent5 = 68;
	const DarkStyle1Accent6 = 69;
	const DarkStyle2 = 70;
	const DarkStyle2Accent1Accent2 = 71;
	const DarkStyle2Accent3Accent4 = 72;
	const DarkStyle2Accent5Accent6 = 73;
	const LightStyle1Accent5 = 74;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TableStylePreset";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Blur extends Java {
	static private $_className = "com.aspose.slides.Blur";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FillFormatCollection extends Java {
	static private $_className = "com.aspose.slides.FillFormatCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Image_ extends Java {
	static private $_className = "com.aspose.slides.Image_";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathLeftSubSuperscriptElement extends Java {
	static private $_className = "com.aspose.slides.MathLeftSubSuperscriptElement";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InkBrush extends Java {
	static private $_className = "com.aspose.slides.InkBrush";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AxesCompositionNotCombinableException extends Java {
	static private $_className = "com.aspose.slides.AxesCompositionNotCombinableException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataPointLevelsManager extends Java {
	static private $_className = "com.aspose.slides.ChartDataPointLevelsManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionLeftRightDirectionType extends Java {
	const Left = 0;
	const Right = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionLeftRightDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BrowsedAtKiosk extends Java {
	static private $_className = "com.aspose.slides.BrowsedAtKiosk";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathematicalTextFactory extends Java {
	static private $_className = "com.aspose.slides.MathematicalTextFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Trendline extends Java {
	static private $_className = "com.aspose.slides.Trendline";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class XpsOptions extends Java {
	static private $_className = "com.aspose.slides.XpsOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineArrowheadStyle extends Java {
	const NotDefined = -1;
	const None = 0;
	const Triangle = 1;
	const Stealth = 2;
	const Diamond = 3;
	const Oval = 4;
	const Open = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineArrowheadStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Camera extends Java {
	static private $_className = "com.aspose.slides.Camera";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AutoShapeLock extends Java {
	static private $_className = "com.aspose.slides.AutoShapeLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Backdrop3DScene extends Java {
	static private $_className = "com.aspose.slides.Backdrop3DScene";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Duotone extends Java {
	static private $_className = "com.aspose.slides.Duotone";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionCornerDirectionType extends Java {
	const LeftDown = 0;
	const LeftUp = 1;
	const RightDown = 2;
	const RightUp = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionCornerDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SaveFormat extends Java {
	const Ppt = 0;
	const Pdf = 1;
	const Xps = 2;
	const Pptx = 3;
	const Ppsx = 4;
	const Tiff = 5;
	const Odp = 6;
	const Pptm = 7;
	const Ppsm = 9;
	const Potx = 10;
	const Potm = 11;
	const Html = 13;
	const Swf = 15;
	const Otp = 17;
	const Pps = 19;
	const Pot = 20;
	const Fodp = 21;
	const Gif = 22;
	const Html5 = 23;
	const Md = 24;
	const Xml = 25;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SaveFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataSourceType extends Java {
	const InternalWorkbook = 0;
	const ExternalWorkbook = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ChartDataSourceType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ConnectorLock extends Java {
	static private $_className = "com.aspose.slides.ConnectorLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PdfAccessPermissions extends Java {
	const None = 0;
	const PrintDocument = 4;
	const ModifyContent = 8;
	const CopyTextAndGraphics = 16;
	const AddOrModifyFields = 32;
	const FillExistingFields = 256;
	const ExtractTextAndGraphics = 512;
	const AssembleDocument = 1024;
	const HighQualityPrint = 2048;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PdfAccessPermissions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideSize extends Java {
	static private $_className = "com.aspose.slides.SlideSize";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesSlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.NotesSlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathMatrixFactory extends Java {
	static private $_className = "com.aspose.slides.MathMatrixFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmbedFontCharacters extends Java {
	const OnlyUsed = 0;
	const All = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EmbedFontCharacters";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmptyTransition extends Java {
	static private $_className = "com.aspose.slides.EmptyTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseThemeManager extends Java {
	static private $_className = "com.aspose.slides.BaseThemeManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Timing extends Java {
	static private $_className = "com.aspose.slides.Timing";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineSketchType extends Java {
	const NotDefined = -1;
	const None = 0;
	const Curved = 1;
	const Freehand = 2;
	const Scribble = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LineSketchType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Convert extends Java {
	static private $_className = "com.aspose.slides.Convert";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function toPdf(...$argv) {
		return Java(self::$_className)->toPdf(...$argv);
	}
	static function autoByExtension(...$argv) {
		return Java(self::$_className)->autoByExtension(...$argv);
	}
	static function toSvg(...$argv) {
		return Java(self::$_className)->toSvg(...$argv);
	}
}
class RotationEffect extends Java {
	static private $_className = "com.aspose.slides.RotationEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LegacyDiagram extends Java {
	static private $_className = "com.aspose.slides.LegacyDiagram";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GradientStop extends Java {
	static private $_className = "com.aspose.slides.GradientStop";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Shape extends Java {
	static private $_className = "com.aspose.slides.Shape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OrientationTransition extends Java {
	static private $_className = "com.aspose.slides.OrientationTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PdfCompliance extends Java {
	const Pdf15 = 0;
	const Pdf16 = 1;
	const Pdf17 = 2;
	const PdfA1b = 3;
	const PdfA1a = 4;
	const PdfA2b = 5;
	const PdfA2a = 6;
	const PdfA3b = 7;
	const PdfA3a = 8;
	const PdfUa = 9;
	const PdfA2u = 10;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PdfCompliance";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AnimateTextType extends Java {
	const AllAtOnce = 0;
	const ByWord = 1;
	const ByLetter = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AnimateTextType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideShowType extends Java {
	static private $_className = "com.aspose.slides.SlideShowType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Paragraph extends Java {
	static private $_className = "com.aspose.slides.Paragraph";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PieSplitType extends Java {
	const Default = 0;
	const Custom = 1;
	const ByPercentage = 2;
	const ByPos = 3;
	const ByValue = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PieSplitType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorScheme extends Java {
	static private $_className = "com.aspose.slides.ColorScheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathRadicalFactory extends Java {
	static private $_className = "com.aspose.slides.MathRadicalFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathSuperscriptElementFactory extends Java {
	static private $_className = "com.aspose.slides.MathSuperscriptElementFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartDataPointLevel extends Java {
	static private $_className = "com.aspose.slides.ChartDataPointLevel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class NotesSlide extends Java {
	static private $_className = "com.aspose.slides.NotesSlide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VideoPlayerHtmlController extends Java {
	static private $_className = "com.aspose.slides.VideoPlayerHtmlController";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptOptions extends Java {
	static private $_className = "com.aspose.slides.PptOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Slide extends Java {
	static private $_className = "com.aspose.slides.Slide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Images extends Java {
	static private $_className = "com.aspose.slides.Images";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function fromStream(...$argv) {
		return Java(self::$_className)->fromStream(...$argv);
	}
	static function fromData(...$argv) {
		return Java(self::$_className)->fromData(...$argv);
	}
	static function fromFile(...$argv) {
		return Java(self::$_className)->fromFile(...$argv);
	}
}
class BaseScript extends Java {
	static private $_className = "com.aspose.slides.BaseScript";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideLayoutType extends Java {
	const Custom = -1;
	const Title = 0;
	const Text = 1;
	const TwoColumnText = 2;
	const Table = 3;
	const TextAndChart = 4;
	const ChartAndText = 5;
	const Diagram = 6;
	const Chart = 7;
	const TextAndClipArt = 8;
	const ClipArtAndText = 9;
	const TitleOnly = 10;
	const Blank = 11;
	const TextAndObject = 12;
	const ObjectAndText = 13;
	const Object = 14;
	const TitleAndObject = 15;
	const TextAndMedia = 16;
	const MediaAndText = 17;
	const ObjectOverText = 18;
	const TextOverObject = 19;
	const TextAndTwoObjects = 20;
	const TwoObjectsAndText = 21;
	const TwoObjectsOverText = 22;
	const FourObjects = 23;
	const VerticalText = 24;
	const ClipArtAndVerticalText = 25;
	const VerticalTitleAndText = 26;
	const VerticalTitleAndTextOverChart = 27;
	const TwoObjects = 28;
	const ObjectAndTwoObject = 29;
	const TwoObjectsAndObject = 30;
	const SectionHeader = 31;
	const TwoTextAndTwoObjects = 32;
	const TitleObjectAndCaption = 33;
	const PictureAndCaption = 34;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SlideLayoutType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CombinableSeriesTypesGroup extends Java {
	const AreaChart_Area = 4;
	const AreaChart_PercentsStackedArea = 5;
	const AreaChart_StackedArea = 6;
	const AreaChart_Area3D = 24;
	const AreaChart_StackedArea3D = 25;
	const AreaChart_PercentsStackedArea3D = 26;
	const LineChart_Line = 13;
	const LineChart_StackedLine = 14;
	const LineChart_PercentsStackedLine = 15;
	const Line3DChart = 27;
	const StockHighLowClose = 18;
	const StockOpenHighLowClose = 19;
	const StockVolumeHighLowClose = 20;
	const StockVolumeOpenHighLowClose = 21;
	const RadarChart = 16;
	const FilledRadarChart = 17;
	const ScatterStraightMarker = 22;
	const ScatterSmoothMarker = 23;
	const PieChart = 3;
	const Pie3DChart = 28;
	const DoughnutChart = 2;
	const BarChart_VertClustered = 10;
	const BarChart_VertStacked = 11;
	const BarChart_VertPercentsStacked = 12;
	const BarChart_HorizClustered = 7;
	const BarChart_HorizStacked = 8;
	const BarChart_HorizPercentsStacked = 9;
	const Bar3DChart_Vert = 29;
	const Bar3DChart_VertClustered = 30;
	const Bar3DChart_VertPercentsStackedColumn3D = 31;
	const Bar3DChart_VertPercentsStackedCone = 32;
	const Bar3DChart_VertPercentsStackedCylinder = 33;
	const Bar3DChart_VertPercentsStackedPyramid = 34;
	const Bar3DChart_VertStackedColumn3D = 35;
	const Bar3DChart_VertStackedCone = 36;
	const Bar3DChart_VertStackedCylinder = 37;
	const Bar3DChart_VertStackedPyramid = 38;
	const Bar3DChart_HorizClustered = 39;
	const Bar3DChart_HorizStackedBar3D = 40;
	const Bar3DChart_HorizStackedCone = 41;
	const Bar3DChart_HorizStackedCylinder = 42;
	const Bar3DChart_HorizStackedPyramid = 43;
	const Bar3DChart_HorizPercentsStackedBar3D = 44;
	const Bar3DChart_HorizPercentsStackedCone = 45;
	const Bar3DChart_HorizPercentsStackedCylinder = 46;
	const Bar3DChart_HorizPercentsStackedPyramid = 47;
	const BarOfPieChart = 0;
	const PieOfPieChart = 1;
	const SurfaceChart_Contour = 48;
	const SurfaceChart_WireframeContour = 49;
	const SurfaceChart_Surface3D = 50;
	const SurfaceChart_WireframeSurface3D = 51;
	const BubbleChart = 52;
	const HistogramChart = 53;
	const ParetoLineChart = 54;
	const BoxAndWhiskerChart = 55;
	const WaterfallChart = 56;
	const FunnelChart = 57;
	const TreemapChart = 58;
	const MapChart = 59;
	const SunburstChart = 60;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CombinableSeriesTypesGroup";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseChartValue extends Java {
	static private $_className = "com.aspose.slides.BaseChartValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Theme extends Java {
	static private $_className = "com.aspose.slides.Theme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontFallBackRule extends Java {
	static private $_className = "com.aspose.slides.FontFallBackRule";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GeometryPath extends Java {
	static private $_className = "com.aspose.slides.GeometryPath";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LoadOptions extends Java {
	static private $_className = "com.aspose.slides.LoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Html5Options extends Java {
	static private $_className = "com.aspose.slides.Html5Options";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathLimit extends Java {
	static private $_className = "com.aspose.slides.MathLimit";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ThreeDFormat extends Java {
	static private $_className = "com.aspose.slides.ThreeDFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFunctionsOfOneArgument extends Java {
	const Sin = 0;
	const Cos = 1;
	const Tan = 2;
	const Csc = 3;
	const Sec = 4;
	const Cot = 5;
	const HyperbolicSin = 6;
	const HyperbolicCos = 7;
	const HyperbolicTan = 8;
	const HyperbolicCsc = 9;
	const HyperbolicSec = 10;
	const HyperbolicCot = 11;
	const Lg = 12;
	const Ln = 13;
	const ArcSin = 14;
	const ArcCos = 15;
	const ArcTan = 16;
	const ArcCsc = 17;
	const ArcSec = 18;
	const ArcCot = 19;
	const HyperbolicArcSin = 20;
	const HyperbolicArcCos = 21;
	const HyperbolicArcTan = 22;
	const HyperbolicArcCsc = 23;
	const HyperbolicArcSec = 24;
	const HyperbolicArcCot = 25;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathFunctionsOfOneArgument";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorStringFormat extends Java {
	const Vml = 0;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorStringFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathBlock extends Java {
	static private $_className = "com.aspose.slides.MathBlock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptException extends Java {
	static private $_className = "com.aspose.slides.PptException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaModulate extends Java {
	static private $_className = "com.aspose.slides.AlphaModulate";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DisplayUnitType extends Java {
	const None = 0;
	const Hundreds = 1;
	const Thousands = 2;
	const TenThousands = 3;
	const HundredThousands = 4;
	const Millions = 5;
	const TenMillions = 6;
	const HundredMillions = 7;
	const Billions = 8;
	const Trillions = 9;
	const CustomValue = 10;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.DisplayUnitType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontSubstitutionInfo extends Java {
	static private $_className = "com.aspose.slides.FontSubstitutionInfo";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ParagraphFormat extends Java {
	static private $_className = "com.aspose.slides.ParagraphFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorType extends Java {
	const NotDefined = -1;
	const RGB = 0;
	const RGBPercentage = 1;
	const HSL = 2;
	const Scheme = 3;
	const System = 4;
	const Preset = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ColorType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectChartMinorGroupingType extends Java {
	const ByElementInSeries = 0;
	const ByElementInCategory = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectChartMinorGroupingType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxReadException extends Java {
	static private $_className = "com.aspose.slides.PptxReadException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Row extends Java {
	static private $_className = "com.aspose.slides.Row";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaCeiling extends Java {
	static private $_className = "com.aspose.slides.AlphaCeiling";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionEffect extends Java {
	static private $_className = "com.aspose.slides.MotionEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FillType extends Java {
	const NotDefined = -1;
	const NoFill = 0;
	const Solid = 1;
	const Gradient = 2;
	const Pattern = 3;
	const Picture = 4;
	const Group = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FillType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PortionFactory extends Java {
	static private $_className = "com.aspose.slides.PortionFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PresentedBySpeaker extends Java {
	static private $_className = "com.aspose.slides.PresentedBySpeaker";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Table extends Java {
	static private $_className = "com.aspose.slides.Table";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DataSourceType extends Java {
	const Worksheet = 0;
	const StringLiterals = 1;
	const DoubleLiterals = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.DataSourceType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Rotation3D extends Java {
	static private $_className = "com.aspose.slides.Rotation3D";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextToHtmlConversionOptions extends Java {
	static private $_className = "com.aspose.slides.TextToHtmlConversionOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LeftRightDirectionTransition extends Java {
	static private $_className = "com.aspose.slides.LeftRightDirectionTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxOptions extends Java {
	static private $_className = "com.aspose.slides.PptxOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtNodeCollection extends Java {
	static private $_className = "com.aspose.slides.SmartArtNodeCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Section extends Java {
	static private $_className = "com.aspose.slides.Section";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtColorType extends Java {
	const Dark1Outline = 0;
	const Dark2Outline = 1;
	const DarkFill = 2;
	const ColorfulAccentColors = 3;
	const ColorfulAccentColors2to3 = 4;
	const ColorfulAccentColors3to4 = 5;
	const ColorfulAccentColors4to5 = 6;
	const ColorfulAccentColors5to6 = 7;
	const ColoredOutlineAccent1 = 8;
	const ColoredFillAccent1 = 9;
	const GradientRangeAccent1 = 10;
	const GradientLoopAccent1 = 11;
	const TransparentGradientRangeAccent1 = 12;
	const ColoredOutlineAccent2 = 13;
	const ColoredFillAccent2 = 14;
	const GradientRangeAccent2 = 15;
	const GradientLoopAccent2 = 16;
	const TransparentGradientRangeAccent2 = 17;
	const ColoredOutlineAccent3 = 18;
	const ColoredFillAccent3 = 19;
	const GradientRangeAccent3 = 20;
	const GradientLoopAccent3 = 21;
	const TransparentGradientRangeAccent3 = 22;
	const ColoredOutlineAccent4 = 23;
	const ColoredFillAccent4 = 24;
	const GradientRangeAccent4 = 25;
	const GradientLoopAccent4 = 26;
	const TransparentGradientRangeAccent4 = 27;
	const ColoredOutlineAccent5 = 28;
	const ColoredFillAccent5 = 29;
	const GradientRangeAccent5 = 30;
	const GradientLoopAccent5 = 31;
	const TransparentGradientRangeAccent5 = 32;
	const ColoredOutlineAccent6 = 33;
	const ColoredFillAccent6 = 34;
	const GradientRangeAccent6 = 35;
	const GradientLoopAccent6 = 36;
	const TransparentGradientRangeAccent6 = 37;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.SmartArtColorType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BehaviorFactory extends Java {
	static private $_className = "com.aspose.slides.BehaviorFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFractionTypes extends Java {
	const Bar = 1;
	const Skewed = 2;
	const Linear = 3;
	const NoBar = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathFractionTypes";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Compress extends Java {
	static private $_className = "com.aspose.slides.Compress";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function removeUnusedLayoutSlides(...$argv) {
		return Java(self::$_className)->removeUnusedLayoutSlides(...$argv);
	}
	static function removeUnusedMasterSlides(...$argv) {
		return Java(self::$_className)->removeUnusedMasterSlides(...$argv);
	}
	static function compressEmbeddedFonts(...$argv) {
		return Java(self::$_className)->compressEmbeddedFonts(...$argv);
	}
}
class PresentationHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.PresentationHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ZoomFrame extends Java {
	static private $_className = "com.aspose.slides.ZoomFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class StringChartValue extends Java {
	static private $_className = "com.aspose.slides.StringChartValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ViewProperties extends Java {
	static private $_className = "com.aspose.slides.ViewProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathLimitLocations extends Java {
	const NotDefined = 0;
	const UnderOver = 1;
	const SubscriptSuperscript = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathLimitLocations";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterTheme extends Java {
	static private $_className = "com.aspose.slides.MasterTheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Luminance extends Java {
	static private $_className = "com.aspose.slides.Luminance";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathGroupingCharacterFactory extends Java {
	static private $_className = "com.aspose.slides.MathGroupingCharacterFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GroupShapeLock extends Java {
	static private $_className = "com.aspose.slides.GroupShapeLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class BaseShapeLock extends Java {
	static private $_className = "com.aspose.slides.BaseShapeLock";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Conformance extends Java {
	const Ecma376_2006 = 0;
	const Iso29500_2008_Transitional = 1;
	const Iso29500_2008_Strict = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.Conformance";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeBevel extends Java {
	static private $_className = "com.aspose.slides.ShapeBevel";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AudioPlayModePreset extends Java {
	const Mixed = -1;
	const Auto = 0;
	const OnClick = 1;
	const AllSlides = 2;
	const InClickSequence = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AudioPlayModePreset";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MorphTransition extends Java {
	static private $_className = "com.aspose.slides.MorphTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class InvalidPasswordException extends Java {
	static private $_className = "com.aspose.slides.InvalidPasswordException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MarkdownSaveOptions extends Java {
	static private $_className = "com.aspose.slides.MarkdownSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DrawingGuide extends Java {
	static private $_className = "com.aspose.slides.DrawingGuide";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Placeholder extends Java {
	static private $_className = "com.aspose.slides.Placeholder";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ColorOffset extends Java {
	static private $_className = "com.aspose.slides.ColorOffset";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathArrayFactory extends Java {
	static private $_className = "com.aspose.slides.MathArrayFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideHeaderFooterManager extends Java {
	static private $_className = "com.aspose.slides.SlideHeaderFooterManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DomObject extends Java {
	static private $_className = "com.aspose.slides.DomObject";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MasterLayoutSlideCollection extends Java {
	static private $_className = "com.aspose.slides.MasterLayoutSlideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaModulateFixed extends Java {
	static private $_className = "com.aspose.slides.AlphaModulateFixed";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathLimitFactory extends Java {
	static private $_className = "com.aspose.slides.MathLimitFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SmartArtShapeCollection extends Java {
	static private $_className = "com.aspose.slides.SmartArtShapeCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionPath extends Java {
	static private $_className = "com.aspose.slides.MotionPath";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaReplace extends Java {
	static private $_className = "com.aspose.slides.AlphaReplace";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmbeddedWoffFontsHtmlController extends Java {
	static private $_className = "com.aspose.slides.EmbeddedWoffFontsHtmlController";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LineFillFormat extends Java {
	static private $_className = "com.aspose.slides.LineFillFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxCorruptFileException extends Java {
	static private $_className = "com.aspose.slides.PptxCorruptFileException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VideoPlayModePreset extends Java {
	const Mixed = -1;
	const Auto = 0;
	const OnClick = 1;
	const AllSlides = 2;
	const InClickSequence = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.VideoPlayModePreset";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ParagraphCollection extends Java {
	static private $_className = "com.aspose.slides.ParagraphCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ExtraColorSchemeCollection extends Java {
	static private $_className = "com.aspose.slides.ExtraColorSchemeCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class WebDocument extends Java {
	static private $_className = "com.aspose.slides.WebDocument";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class License extends Java {
	static private $_className = "com.aspose.slides.License";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getVersion(...$argv) {
		return Java(self::$_className)->getVersion(...$argv);
	}
}
class Metered extends Java {
	static private $_className = "com.aspose.slides.Metered";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getConsumptionQuantity(...$argv) {
		return Java(self::$_className)->getConsumptionQuantity(...$argv);
	}
	static function getConsumptionCredit(...$argv) {
		return Java(self::$_className)->getConsumptionCredit(...$argv);
	}
	static function isMeteredLicensed(...$argv) {
		return Java(self::$_className)->isMeteredLicensed(...$argv);
	}
}
class VideoFrame extends Java {
	static private $_className = "com.aspose.slides.VideoFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Storage extends Java {
	static private $_className = "com.aspose.slides.Storage";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EmbeddedEotFontsHtmlController extends Java {
	static private $_className = "com.aspose.slides.EmbeddedEotFontsHtmlController";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DisplayBlanksAsType extends Java {
	const Gap = 0;
	const Span = 1;
	const Zero = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.DisplayBlanksAsType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TransitionCornerAndCenterDirectionType extends Java {
	const LeftDown = 0;
	const LeftUp = 1;
	const RightDown = 2;
	const RightUp = 3;
	const Center = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TransitionCornerAndCenterDirectionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DigitalSignatureCollection extends Java {
	static private $_className = "com.aspose.slides.DigitalSignatureCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeElementFillSource extends Java {
	const NoFill = 0;
	const Shape = 1;
	const Lighten = 2;
	const LightenLess = 3;
	const Darken = 4;
	const DarkenLess = 5;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapeElementFillSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AlphaInverse extends Java {
	static private $_className = "com.aspose.slides.AlphaInverse";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CameraPresetType extends Java {
	const NotDefined = -1;
	const IsometricBottomDown = 0;
	const IsometricBottomUp = 1;
	const IsometricLeftDown = 2;
	const IsometricLeftUp = 3;
	const IsometricOffAxis1Left = 4;
	const IsometricOffAxis1Right = 5;
	const IsometricOffAxis1Top = 6;
	const IsometricOffAxis2Left = 7;
	const IsometricOffAxis2Right = 8;
	const IsometricOffAxis2Top = 9;
	const IsometricOffAxis3Bottom = 10;
	const IsometricOffAxis3Left = 11;
	const IsometricOffAxis3Right = 12;
	const IsometricOffAxis4Bottom = 13;
	const IsometricOffAxis4Left = 14;
	const IsometricOffAxis4Right = 15;
	const IsometricRightDown = 16;
	const IsometricRightUp = 17;
	const IsometricTopDown = 18;
	const IsometricTopUp = 19;
	const LegacyObliqueBottom = 20;
	const LegacyObliqueBottomLeft = 21;
	const LegacyObliqueBottomRight = 22;
	const LegacyObliqueFront = 23;
	const LegacyObliqueLeft = 24;
	const LegacyObliqueRight = 25;
	const LegacyObliqueTop = 26;
	const LegacyObliqueTopLeft = 27;
	const LegacyObliqueTopRight = 28;
	const LegacyPerspectiveBottom = 29;
	const LegacyPerspectiveBottomLeft = 30;
	const LegacyPerspectiveBottomRight = 31;
	const LegacyPerspectiveFront = 32;
	const LegacyPerspectiveLeft = 33;
	const LegacyPerspectiveRight = 34;
	const LegacyPerspectiveTop = 35;
	const LegacyPerspectiveTopLeft = 36;
	const LegacyPerspectiveTopRight = 37;
	const ObliqueBottom = 38;
	const ObliqueBottomLeft = 39;
	const ObliqueBottomRight = 40;
	const ObliqueLeft = 41;
	const ObliqueRight = 42;
	const ObliqueTop = 43;
	const ObliqueTopLeft = 44;
	const ObliqueTopRight = 45;
	const OrthographicFront = 46;
	const PerspectiveAbove = 47;
	const PerspectiveAboveLeftFacing = 48;
	const PerspectiveAboveRightFacing = 49;
	const PerspectiveBelow = 50;
	const PerspectiveContrastingLeftFacing = 51;
	const PerspectiveContrastingRightFacing = 52;
	const PerspectiveFront = 53;
	const PerspectiveHeroicExtremeLeftFacing = 54;
	const PerspectiveHeroicExtremeRightFacing = 55;
	const PerspectiveHeroicLeftFacing = 56;
	const PerspectiveHeroicRightFacing = 57;
	const PerspectiveLeft = 58;
	const PerspectiveRelaxed = 59;
	const PerspectiveRelaxedModerately = 60;
	const PerspectiveRight = 61;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CameraPresetType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathTopBotPositions extends Java {
	const NotDefined = 0;
	const Top = 1;
	const Bottom = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MathTopBotPositions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Background extends Java {
	static private $_className = "com.aspose.slides.Background";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TextVerticalType extends Java {
	const NotDefined = -1;
	const Horizontal = 0;
	const Vertical = 1;
	const Vertical270 = 2;
	const WordArtVertical = 3;
	const EastAsianVertical = 4;
	const MongolianVertical = 5;
	const WordArtVerticalRightToLeft = 6;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.TextVerticalType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PropertyValueType extends Java {
	const NotDefined = -1;
	const String = 0;
	const Number = 1;
	const Color = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.PropertyValueType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class TabCollection extends Java {
	static private $_className = "com.aspose.slides.TabCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFunction extends Java {
	static private $_className = "com.aspose.slides.MathFunction";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AxisAggregationType extends Java {
	const ByCategory = 0;
	const Automatic = 1;
	const ByBinWidth = 2;
	const ByNumberOfBins = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.AxisAggregationType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontStyle extends Java {
	const Regular = 0;
	const Bold = 1;
	const Italic = 2;
	const Underline = 4;
	const Strikeout = 8;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FontStyle";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HyperlinkActionType extends Java {
	const Unknown = -1;
	const NoAction = 0;
	const Hyperlink = 1;
	const JumpFirstSlide = 2;
	const JumpPreviousSlide = 3;
	const JumpNextSlide = 4;
	const JumpLastSlide = 5;
	const JumpEndShow = 6;
	const JumpLastViewedSlide = 7;
	const JumpSpecificSlide = 8;
	const StartCustomSlideShow = 9;
	const OpenFile = 10;
	const OpenPresentation = 11;
	const StartStopMedia = 12;
	const StartMacro = 13;
	const StartProgram = 14;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.HyperlinkActionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathElementBase extends Java {
	static private $_className = "com.aspose.slides.MathElementBase";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ControlType extends Java {
	const WindowsMediaPlayer = 0;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ControlType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ModernCommentStatus extends Java {
	const NotDefined = 0;
	const Active = 1;
	const Resolved = 2;
	const Closed = 3;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ModernCommentStatus";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeThumbnailBounds extends Java {
	const Slide = 0;
	const Shape = 1;
	const Appearance = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.ShapeThumbnailBounds";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LightingDirection extends Java {
	const NotDefined = -1;
	const TopLeft = 0;
	const Top = 1;
	const TopRight = 2;
	const Right = 3;
	const BottomRight = 4;
	const Bottom = 5;
	const BottomLeft = 6;
	const Left = 7;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LightingDirection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MotionPathEditMode extends Java {
	const NotDefined = -1;
	const Relative = 0;
	const Fixed = 1;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.MotionPathEditMode";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SlideUtil extends Java {
	static private $_className = "com.aspose.slides.SlideUtil";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getAllTextFrames(...$argv) {
		return Java(self::$_className)->getAllTextFrames(...$argv);
	}
	static function findShape(...$argv) {
		return Java(self::$_className)->findShape(...$argv);
	}
	static function getAllTextBoxes(...$argv) {
		return Java(self::$_className)->getAllTextBoxes(...$argv);
	}
	static function alignShapes(...$argv) {
		return Java(self::$_className)->alignShapes(...$argv);
	}
	static function findAndReplaceText(...$argv) {
		return Java(self::$_className)->findAndReplaceText(...$argv);
	}
}
class SketchFormat extends Java {
	static private $_className = "com.aspose.slides.SketchFormat";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageTransformOperation extends Java {
	static private $_className = "com.aspose.slides.ImageTransformOperation";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FontCollectionIndex extends Java {
	const None = 0;
	const Minor = 1;
	const Major = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.FontCollectionIndex";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartCategoryLevelsManager extends Java {
	static private $_className = "com.aspose.slides.ChartCategoryLevelsManager";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ChartPlotArea extends Java {
	static private $_className = "com.aspose.slides.ChartPlotArea";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathDelimiter extends Java {
	static private $_className = "com.aspose.slides.MathDelimiter";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class DocumentProperties extends Java {
	static private $_className = "com.aspose.slides.DocumentProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class EffectTriggerType extends Java {
	const AfterPrevious = 0;
	const OnClick = 1;
	const WithPrevious = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.EffectTriggerType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class AudioFrame extends Java {
	static private $_className = "com.aspose.slides.AudioFrame";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Portion extends Java {
	static private $_className = "com.aspose.slides.Portion";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PointCollection extends Java {
	static private $_className = "com.aspose.slides.PointCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PropertyEffect extends Java {
	static private $_className = "com.aspose.slides.PropertyEffect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathDelimiterFactory extends Java {
	static private $_className = "com.aspose.slides.MathDelimiterFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class VbaReferenceOleTypeLib extends Java {
	static private $_className = "com.aspose.slides.VbaReferenceOleTypeLib";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PVIObject extends Java {
	static private $_className = "com.aspose.slides.PVIObject";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ImageCollection extends Java {
	static private $_className = "com.aspose.slides.ImageCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class HandleRepeatedSpaces extends Java {
	const None = 0;
	const AlternateSpacesToNbsp = 1;
	const MultipleSpacesToNbsp = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.HandleRepeatedSpaces";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathParagraph extends Java {
	static private $_className = "com.aspose.slides.MathParagraph";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Glow extends Java {
	static private $_className = "com.aspose.slides.Glow";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class ShapeElement extends Java {
	static private $_className = "com.aspose.slides.ShapeElement";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PdfImportOptions extends Java {
	static private $_className = "com.aspose.slides.PdfImportOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OdpException extends Java {
	static private $_className = "com.aspose.slides.OdpException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class SequenceCollection extends Java {
	static private $_className = "com.aspose.slides.SequenceCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class MathFraction extends Java {
	static private $_className = "com.aspose.slides.MathFraction";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class LegendPositionType extends Java {
	const Bottom = 0;
	const Left = 1;
	const Right = 2;
	const Top = 3;
	const TopRight = 4;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.LegendPositionType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class PptxEditException extends Java {
	static private $_className = "com.aspose.slides.PptxEditException";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class Effect extends Java {
	static private $_className = "com.aspose.slides.Effect";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class CommandEffectType extends Java {
	const NotDefined = -1;
	const Event = 0;
	const Call = 1;
	const Verb = 2;
	const EnumSeparatorCharArray = ",";
	static private $_className = "com.aspose.slides.CommandEffectType";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class WheelTransition extends Java {
	static private $_className = "com.aspose.slides.WheelTransition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class OverrideTheme extends Java {
	static private $_className = "com.aspose.slides.OverrideTheme";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class GeometryShape extends Java {
	static private $_className = "com.aspose.slides.GeometryShape";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}
class FormatFactory extends Java {
	static private $_className = "com.aspose.slides.FormatFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
	static function getInstance(...$argv) {
		return Java(self::$_className)->getInstance(...$argv);
	}
}
?>