<?php

/*
 * *************************************************************************************************************************************************************
 * LINK HELPERS
 * *************************************************************************************************************************************************************
 */

/**
 * Returns the HTML code for an internal link.
 * @param string $route The route to let the link lead to, as defined in routes/web.php, without the trailing slash.
 * @param string $text  The text to display and make clickable.
 * @param array $attr   Additional attributes for the tag, as name => value, or just name.
 * @return string
 */
function linkInt(string $route, string $text, array $attr = []): string {
    $attr['href'] = url($route);
    return htmlTag('a', $attr, $text);
}

/**
 * Returns the HTML code for an external link that opens in a new window.
 * @param string $link  The absolute URL to let the link lead to.
 * @param string $text  The text to display and make clickable.
 * @param array $attr   Additional attributes for the tag, as name => value, or just name.
 * @return string
 */
function linkExt(string $link, string $text, array $attr = []): string {
    $attr['href'] = $link;
    $attr['target'] = '_blank';
    return htmlTag('a', $attr, $text);
}

/**
 * Returns the HTML code for a link that triggers a javascript function.
 * @param string $function  Name and parameters of the function to run when the link is clicked.
 * @param string $text      The text to display and make clickable.
 * @param array $attr       Additional attributes for the tag, as name => value, or just name.
 * @return string
 */
 function linkJs(string $function, string $text, array $attr = []): string {
    $attr['href'] = 'javascript:'.$function;
    return htmlTag('a', $attr, $text);
}

/*
 * *************************************************************************************************************************************************************
 * IMAGE HELPERS
 * *************************************************************************************************************************************************************
 */

/**
 * Returns the HTML code for a local image.
 * @param string $path  Path to and name of the image to include, relative to public/img.
 * @param array $attr   Additional attributes for the tag, as name => value, or just name.
 * @return string
 */
function img(string $path, array $attr = []): string {
    $attr['src'] = asset('img/'.$path);
    return htmlTag('img', $attr);
}

/**
 * Returns the HTML code for a Fontello icon.
 * @param string $type  The type of icon as specified by the css value in resources/fontello.json.
 * @param array $attr   Additional attributes for the tag, as name => value, or just name.
 * @return string
 */
function icon(string $type, array $attr = []): string {
    if (empty($attr['class'])) $attr['class'] = "icon-$type";
    else $attr['class'] = "icon-$type ".$attr['class'];
    return htmlTag('span', $attr, '');
}

/*
 * *************************************************************************************************************************************************************
 * MISCELLANEOUS HELPERS
 * *************************************************************************************************************************************************************
 */

/**
 * Returns the HTML code to include jQuery.
 * @return string
 */
function jQuery(): string {
    return '<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>';
}

/*
 * *************************************************************************************************************************************************************
 * SUPPORTING HELPERS
 * *************************************************************************************************************************************************************
 */

/**
 * Returns an HTML attribute.
 * @param string $type          The type of attribute, e.g. h1 or img.
 * @param array $attr           An array of attributes for the tag, as name => value, or just name.
 * @param string|null $content  The content of the tag, or null for an empty tag.
 * @return string
 */
function htmlTag(string $type, array $attr = [], ?string $content = null): string {
    return $content === null ?
            '<'.$type.attrString($attr).' />' :
            '<'.$type.attrString($attr).'>'.$content.'</'.$type.'>';
}

/**
 * Converts an array of attributes to a string.
 * @param array $attr   An array of attributes for the tag, as name => value, or just name.
 * @return string
 */
function attrString(array $attr = []): string {
    $output = '';
    foreach ($attr as $key => $value) {
        if (is_numeric($key)) $output .= " $value";
        else $output .= ' '.$key.'="'.$value.'"';
    }
    return $output;
}
