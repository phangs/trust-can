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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/footer.htm */
class __TwigTemplate_ec7ee297d845e758b70cf22c13299ca3230aeb462400d9fd3fcd84b53baf9953 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<footer id=\"fh5co-footer\">
\t
\t<div class=\"container\">
\t\t<div class=\"row row-padded\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-dribbble\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t\t\t\t</p>
\t\t\t\t<p><small>© Trust Can. All Rights Reserved. <br>
\t\t\t\t\tDesigned by: <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> | 
\t\t\t\t\tImages by: <a href=\"http://pexels.com\" target=\"_blank\">Pexels</a> | 
\t\t\t\t\tOctobered by: <a href=\"http://sliderweb.ru\" target=\"_blank\">SLIDER.WEB studio</a>
\t\t\t\t</small></p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"fh5co-footer\">
\t
\t<div class=\"container\">
\t\t<div class=\"row row-padded\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-dribbble\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t\t\t\t</p>
\t\t\t\t<p><small>© Trust Can. All Rights Reserved. <br>
\t\t\t\t\tDesigned by: <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> | 
\t\t\t\t\tImages by: <a href=\"http://pexels.com\" target=\"_blank\">Pexels</a> | 
\t\t\t\t\tOctobered by: <a href=\"http://sliderweb.ru\" target=\"_blank\">SLIDER.WEB studio</a>
\t\t\t\t</small></p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/footer.htm", "");
    }
}
