<?php 

namespace Core;

/**
 * View 
 * 
 * PHP version 5.4+ 
 */
class View{
    /** 
     * Render a view file 
     * 
     * @param string $view The view file
     * 
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/App/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }


    public static function renderTemplate($template, $args = []){
        echo static::getTemplate($template, $args);
    }

    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function getTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/App/Views');
            $twig = new \Twig\Environment($loader);
        }

        return $twig->render($template, $args);
    }
    
}