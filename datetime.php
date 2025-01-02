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
            if (is_string_empty($format)) $format = $this->yellow->language->getTextHtml("coreDateFormatLong");
            $output .= "<span class=\"".htmlspecialchars($name)."\">".htmlspecialchars(date($format))."</span>";
        }
        return $output;
    }
}
