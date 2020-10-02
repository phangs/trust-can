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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post-list.htm */
class __TwigTemplate_f748a991770c02c8c3d373bf9df2d9d099cdf120e86aa30fb72ab84d8bc16009 extends \Twig\Template
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
        $tags = array("for" => 3);
        $filters = array("slice" => 5, "escape" => 6);
        $functions = array("str_limit" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['slice', 'escape'],
                ['str_limit']
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
        echo "<div id=\"fh5co-board\" data-columns>

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"item\">
    \t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 5), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" class=\"image-popup fh5co-board-img\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" /></a>
                <div class=\"post-list-summary\">
                <a href=\"post/";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\"><h2>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "</h2></a>
                <p>";
                // line 9
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 9), 9, $this->source), 100, " ... Read More"]);
                echo "</p>
                </div>
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    \t</div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 14,  102 => 12,  93 => 9,  87 => 8,  77 => 6,  73 => 5,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"fh5co-board\" data-columns>

    {% for post in posts %}
    <div class=\"item\">
    \t\t{% for image in post.featured_images|slice(0,1) %}
                <a href=\"{{ image.path }}\" class=\"image-popup fh5co-board-img\"><img src=\"{{ image.path }}\" alt=\"{{ post.summary }}\" /></a>
                <div class=\"post-list-summary\">
                <a href=\"post/{{ post.slug }}\"><h2>{{ post.title }}</h2></a>
                <p>{{ str_limit(post.summary, 100, ' ... Read More') }}</p>
                </div>
    \t\t{% endfor %}
    \t</div> 
    {% endfor %}

</div>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post-list.htm", "");
    }
}
