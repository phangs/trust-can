<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/layouts/General_template.htm */
class __TwigTemplate_0add7ac211db64810f094739ee1638a00e6d307a2c7d86f85f55babc3d3c6aaa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 7, "page" => 20, "framework" => 43, "scripts" => 44);
        $filters = array("theme" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'framework', 'scripts'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\"> <!--<![endif]-->
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "<body>
    
   ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t<!-- END .header -->
\t
\t
\t<div id=\"fh5co-main\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "

\t<!-- jQuery -->
\t<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.easing.1.3.js");
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.waypoints.min.js");
        echo "\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
\t<!-- Salvattore -->
\t<script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/salvattore.min.js");
        echo "\"></script>
\t<!-- Main JS -->
\t<script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

\t";
        // line 43
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 44
        echo "\t";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 45
        echo "\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/layouts/General_template.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 45,  161 => 44,  150 => 43,  145 => 41,  140 => 39,  135 => 37,  130 => 35,  125 => 33,  120 => 31,  115 => 29,  110 => 26,  106 => 25,  100 => 21,  98 => 20,  89 => 13,  85 => 12,  82 => 11,  78 => 10,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\"> <!--<![endif]-->
{% partial \"meta\" %}
<body>
    
   {% partial 'menu' %}
    
\t{% partial \"header\" %}
\t<!-- END .header -->
\t
\t
\t<div id=\"fh5co-main\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">
\t\t\t\t{% page %}
\t\t\t</div>
\t\t</div>
\t</div>

\t{% partial \"footer\" %}


\t<!-- jQuery -->
\t<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"{{ 'assets/js/jquery.easing.1.3.js'|theme }}\"></script>
\t<!-- Bootstrap -->
\t<script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
\t<!-- Waypoints -->
\t<script src=\"{{ 'assets/js/jquery.waypoints.min.js'|theme }}\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"{{ 'assets/js/jquery.magnific-popup.min.js'|theme }}\"></script>
\t<!-- Salvattore -->
\t<script src=\"{{ 'assets/js/salvattore.min.js'|theme }}\"></script>
\t<!-- Main JS -->
\t<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

\t{% framework extras %}
\t{% scripts %}
\t
</body>
</html>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/layouts/General_template.htm", "");
    }
}
