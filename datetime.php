<?php
// Datetime extension, https://github.com/schulle4u/yellow-datetime

class YellowDatetime {
    const VERSION = "0.9.0";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="datetime" && ($type=="inline")) {
            list($format) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($format)) $format = "datelong";
            switch ($format) {
                case "timeshort": $format = $this->yellow->language->getTextHtml("coreTimeFormatShort"); break;
                case "timemedium": $format = $this->yellow->language->getTextHtml("coreTimeFormatMedium"); break;
                case "timelong": $format = $this->yellow->language->getTextHtml("coreTimeFormatLong"); break;
                case "dateshort": $format = $this->yellow->language->getTextHtml("coreDateFormatShort"); break;
                case "datemedium": $format = $this->yellow->language->getTextHtml("coreDateFormatMedium"); break;
                case "datelong": $format = $this->yellow->language->getTextHtml("coreDateFormatLong"); break;
            }
            $output = "<span class=\"".htmlspecialchars($name)."\">".htmlspecialchars($this->yellow->language->getDateFormatted(time(), $format))."</span>";
        }
        return $output;
    }
}
