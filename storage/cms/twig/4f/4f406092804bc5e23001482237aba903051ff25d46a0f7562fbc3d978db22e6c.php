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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/meta.htm */
class __TwigTemplate_e2f8207f39c1b2d7e760d958d61cb9b7e3a4466bb160db98b0c170d8613172e9 extends \Twig\Template
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
        $filters = array("escape" => 4, "app" => 8, "page" => 14, "theme" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'app', 'page', 'theme'],
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
        echo "<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "site_name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " </title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" />
\t<meta name=\"keywords\" content=\"\" />
\t<link type=\"text/plain\" rel=\"author\" href=\"";
        // line 8
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "/humans.txt\" />

  
  <!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
\t<meta property=\"og:site_name\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "site_name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\"/>
\t<meta property=\"og:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "description", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\"/>
\t<meta name=\"twitter:title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\"  href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "?v=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cssrandom"] ?? null), 23, $this->source), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/animate.css", 1 => "assets/css/icomoon.css", 2 => "assets/css/myriadprocond.css", 3 => "assets/css/roboto.css", 4 => "assets/css/magnific-popup.css", 5 => "assets/css/salvattore.css", 6 => "assets/css/style.css"]);
        // line 33
        echo "\">
\t

\t<!-- Modernizr JS -->
\t<script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr-2.6.2.min.js");
        echo "\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
\t<![endif]-->

\t</head>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  130 => 37,  124 => 33,  122 => 25,  115 => 23,  108 => 19,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  79 => 8,  74 => 6,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>{{ this.page.title }} / {{ this.theme.site_name }} </title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"{{ this.page.description }}\" />
\t<meta name=\"keywords\" content=\"\" />
\t<link type=\"text/plain\" rel=\"author\" href=\"{{ '/'|app }}/humans.txt\" />

  
  <!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"{{ this.page.title }}\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"{{ ''|page }}\"/>
\t<meta property=\"og:site_name\" content=\"{{ this.theme.site_name }}\"/>
\t<meta property=\"og:description\" content=\"{{ this.page.description }}\"/>
\t<meta name=\"twitter:title\" content=\"{{ this.page.title }}\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"{{ ''|page }}\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\"  href=\"{{ 'assets/images/favicon.png'|theme }}?v={{ cssrandom }}\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ [
\t\t\t'assets/css/animate.css',
\t\t\t'assets/css/icomoon.css',
\t\t\t'assets/css/myriadprocond.css',
\t\t\t'assets/css/roboto.css',
\t\t\t'assets/css/magnific-popup.css',
\t\t\t'assets/css/salvattore.css',
\t\t\t'assets/css/style.css',
\t\t]|theme }}\">
\t

\t<!-- Modernizr JS -->
\t<script src=\"{{ 'assets/js/modernizr-2.6.2.min.js'|theme }}\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"{{ 'assets/js/respond.min.js'|theme }}\"></script>
\t<![endif]-->

\t</head>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/meta.htm", "");
    }
}
