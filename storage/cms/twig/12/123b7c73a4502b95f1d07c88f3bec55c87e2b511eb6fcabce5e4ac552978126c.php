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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/header.htm */
class __TwigTemplate_d88f1994f849401d571b5ed49ebc9103478cd37460867daca9fc91f9fb7de2f8 extends \Twig\Template
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
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<header id=\"fh5co-header\" role=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">Menu <i class=\"icon-menu\"></i></a>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "site_name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</a>\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- END .header -->";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"fh5co-header\" role=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">Menu <i class=\"icon-menu\"></i></a>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">{{ this.theme.site_name }}</a>\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- END .header -->", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/header.htm", "");
    }
}
