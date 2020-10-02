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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/menu.htm */
class __TwigTemplate_e8c0c0bebc3abfb14cc013c119324c9c21a9a68151436ff8566374aa94e38268 extends \Twig\Template
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
        $tags = array("component" => 19);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape'],
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
        echo "<div id=\"fh5co-offcanvass\">
\t<a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">Menu <i class=\"icon-cross\"></i> </a>
\t<h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"/\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "site_name", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</a></h1>
\t<ul>
\t\t<li class=\"active\"><a href=\"/\">Home</a></li>
\t\t";
        // line 7
        echo "\t\t";
        // line 8
        echo "\t\t<li><a href=\"/contact/\">Author</a></li>
\t</ul>
\t<h3 class=\"fh5co-lead\">Connect</h3>
\t<p class=\"fh5co-social-icons\">
\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-dribbble\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t</p>

";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  87 => 19,  74 => 8,  72 => 7,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"fh5co-offcanvass\">
\t<a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">Menu <i class=\"icon-cross\"></i> </a>
\t<h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"/\">{{ this.theme.site_name }}</a></h1>
\t<ul>
\t\t<li class=\"active\"><a href=\"/\">Home</a></li>
\t\t{#<li><a href=\"/about/\">Blog</a></li>#}
\t\t{#<li><a href=\"/pricing/\">Pricing</a></li>#}
\t\t<li><a href=\"/contact/\">Author</a></li>
\t</ul>
\t<h3 class=\"fh5co-lead\">Connect</h3>
\t<p class=\"fh5co-social-icons\">
\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-dribbble\"></i></a>
\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t</p>

{% component 'blogCategories' %}
</div>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/menu.htm", "");
    }
}
