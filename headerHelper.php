<?php
/**
 * @author Jeremic Nemanja nemanja@joker.rs
 * @license GNU
 * @version 0.0.6
 */


/**
 * @param string|NULL $title
 * @param string|NULL $description
 * @param string|NULL $keywords
 * @param string|NULL $type
 * @param string|NULL $image
 * @param string|NULL $url
 * @param string|NULL $robots
 * @param array|NULL $css
 * @return string
 */
function headerHelper(
    ? $title = null,
    ?string $description = null,
    ?string $keywords = null,
    ?string $type = null,
    ?string $image = null,
    ?string $url =  null,
    ?string $robots = null,
    ?array $css = null
    ): ?string {

    $return = null;

    if ( isset( $title ) ) {
        $return .= "<meta name=\"title\" content=\"$title\">\n";
        $return .= "<meta property=\"og:title\" content=\"$title\">\n";
        $return .= "<meta itemprop=\"name\" content=\"$title\">\n";
        $return .= "<meta name=\"twitter:title\" content=\"$title\">\n";
    }

    if ( isset( $description ) ) {
        $return .= "<meta name=\"description\" content=\"$description\">\n";
        $return .= "<meta itemprop=\"description\" content=\"$description\">\n";
        $return .= "<meta property=\"og:description\" content=\"$description\">\n";
        $return .= "<meta name=\"twitter:description\" content=\"$description\">\n";
    }

    if ( isset( $keywords ) ) {
        $return .= "<meta name=\"keywords\" content=\"$keywords\">\n";
        $return .= "<meta property=\"og:keywords\" content=\"$keywords\">\n";
    }

    if ( isset( $type ) ) {
        $return .= "<meta property=\"og:type\" content=\"$type\">\n";
    }

    if ( isset( $image ) ) {
        $return .= "<meta property=\"og:image\" content=\"$image\">\n";
        $return .= "<meta property=\"image\" content=\"$image\">\n";
        $return .= "<meta property=\"twitter:image\" content=\"$image\">\n";
    }

    if ( $url === null ) {
        $url .= $_SERVER[ 'REQUEST_SCHEME' ] . '://' . $_SERVER[ 'SERVER_NAME' ];
    }

    if( $_SERVER[ 'REQUEST_URI' ] !== '/'){
        $url .= $_SERVER[ 'REQUEST_URI' ];
    }else{
        $url .= DIRECTORY_SEPARATOR;
    }

    $return .= "<meta property=\"og:url\" content=\"$url\">\n";
    $return .= "<meta name=\"twitter:url\" content=\"$url\">\n";
    $return .= "<meta name=\"twitter:card\" content=\"summary\">\n";

    if ( isset( $robots ) ) {
        $return .= "<meta name=\"robots\" content=\"$robots\">\n";
    }

    if ( !isset( $title ) ) {
        $title = $url;
    }

    $return .= "<title>$title</title>\n";

    if( isset( $css ) && is_array( $css ) ){
        foreach ($css as $css_url ){
            $return .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"$css_url\">\n";
        }
    }

    return $return;
}

