<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

/**
 * Simple function to pretty up our field partial includes.
 *
 * @param  mixed $partial
 * @return mixed
 */
function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);
    return include(config('theme.dir')."/app/fields/{$partial}.php");
}


            /* Pull apart OEmbed video link to get thumbnails out*/
            function get_video_thumbnail_uri( $video_uri ) {
            
                $thumbnail_uri = '';
                
                // determine the type of video and the video id
                $video = parse_video_uri( $video_uri );		
                
                // get youtube thumbnail
                if ( $video['type'] == 'youtube' )
                    $thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
                
                // get vimeo thumbnail
                if( $video['type'] == 'vimeo' )
                    $thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
                // get wistia thumbnail
                if( $video['type'] == 'wistia' )
                    $thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
                // get default/placeholder thumbnail
                if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
                    $thumbnail_uri = ''; 
                
                //return thumbnail uri
                return $thumbnail_uri;
                
            }
            
            
            /* Parse the video uri/url to determine the video type/source and the video id */
            function parse_video_uri( $url ) {
                
                // Parse the url 
                $parse = parse_url( $url );
                
                // Set blank variables
                $video_type = '';
                $video_id = '';
                
                // Url is http://youtu.be/xxxx
                if ( $parse['host'] == 'youtu.be' ) {
                
                    $video_type = 'youtube';
                    
                    $video_id = ltrim( $parse['path'],'/' );	
                    
                }
                
                // Url is http://www.youtube.com/watch?v=xxxx 
                // or http://www.youtube.com/watch?feature=player_embedded&v=xxx
                // or http://www.youtube.com/embed/xxxx
                if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
                
                    $video_type = 'youtube';
                    
                    parse_str( $parse['query'] );
                    
                    $video_id = $v;	
                    
                    if ( !empty( $feature ) )
                        $video_id = end( explode( 'v=', $parse['query'] ) );
                        
                    if ( strpos( $parse['path'], 'embed' ) == 1 )
                        $video_id = end( explode( '/', $parse['path'] ) );
                    
                }
                
                // Url is http://www.vimeo.com
                if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
                
                    $video_type = 'vimeo';
                    
                    $video_id = ltrim( $parse['path'],'/' );	
                                
                }
                $host_names = explode(".", $parse['host'] );
                $rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
                // Url is an oembed url wistia.com
                if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
                
                    $video_type = 'wistia';
                        
                    if ( strpos( $parse['path'], 'medias' ) == 1 )
                            $video_id = end( explode( '/', $parse['path'] ) );
                
                }
                
                // If recognised type return video array
                if ( !empty( $video_type ) ) {
                
                    $video_array = array(
                        'type' => $video_type,
                        'id' => $video_id
                    );
                
                    return $video_array;
                    
                } else {
                
                    return false;
                    
                }
                
            }
            
            
            /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.*/
            function get_vimeo_thumbnail_uri( $clip_id ) {
                $vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
                $vimeo_response = wp_remote_get( $vimeo_api_uri );
                if( is_wp_error( $vimeo_response ) ) {
                    return $vimeo_response;
                } else {
                    $vimeo_response = unserialize( $vimeo_response['body'] );
                    return $vimeo_response[0]['thumbnail_large'];
                }
                
            }
            
            /* Takes a wistia oembed url and gets the video thumbnail url. */
            function get_wistia_thumbnail_uri( $video_uri ) {
                if ( empty($video_uri) )
                    return false;
                $wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
                $wistia_response = wp_remote_get( $wistia_api_uri );
                if( is_wp_error( $wistia_response ) ) {
                    return $wistia_response;
                } else {
                    $wistia_response = json_decode( $wistia_response['body'], true );
                    return $wistia_response['thumbnail_url'];
                }
            }