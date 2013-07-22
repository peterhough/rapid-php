<?php

namespace app\lib;

class LayoutView extends \Slim\View
{
    /**
     * The name of the layout file
     * 
     * @var string 
     */
    protected $layoutFile = 'layout.php';
        
    /**
     * Renders the template. If a layout file exists template is rendered inside $content
     * 
     * @param string $template
     * @return string
     */
    public function render($template) {
        extract($this->data->all());
        
        $content = parent::render($template);
        
        $layoutPath = $this->getTemplatesDirectory() . DIRECTORY_SEPARATOR . $this->layoutFile;
        
        if (file_exists($layoutPath)) {
            ob_start();
            require $layoutPath;
            return ob_get_clean();
        } else {
            return $content;
        }
    }
    
    /**
     * Helper method to escape view content
     * 
     * @param type $string
     */
    public function escape($string) {
        return htmlspecialchars($string, ENT_XHTML, 'UTF-8');
    }
}
