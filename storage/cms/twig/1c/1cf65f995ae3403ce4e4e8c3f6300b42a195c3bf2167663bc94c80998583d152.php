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

/* /Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post.htm */
class __TwigTemplate_79bd46fcb77033f4c4c87ce80a7f2823ef4ff75fe65b0d5fdfafca5fe9c8e89e extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5, "for" => 7, "component" => 42);
        $filters = array("escape" => 10, "raw" => 19, "join" => 27, "map" => 27, "trans" => 29, "date" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'component'],
                ['escape', 'raw', 'join', 'map', 'trans', 'date'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"container post-body\">
<div class=\"row\">
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5), "count", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <p>
                <img
                    data-src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\"
                    src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"
                    alt=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
        }
        // line 18
        echo "
<h1>";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 19), 19, $this->source);
        echo "</h1>
<div class=\"content\">";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 20), 20, $this->source);
        echo "</div>
</div>
</div>

<div class=\"container text-center\">
<p class=\"info\">
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 26), "count", [], "any", false, false, true, 26)) {
            // line 27
            echo "        ";
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 27), 27, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 27), 27, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 27), 27, $this->source)) . "</a>"); }), ", ");
            // line 28
            echo "
        ";
            // line 29
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 30
($context["post"] ?? null), "published_at", [], "any", false, false, true, 30), 30, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>             // line 31
($context["categoryLinks"] ?? null)]]);
            // line 32
            echo "
    ";
        } else {
            // line 34
            echo "        ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 35
($context["post"] ?? null), "published_at", [], "any", false, false, true, 35), 35, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 36
            echo "
    ";
        }
        // line 38
        echo "</p>
</div>

<div class=\"container\">
";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  150 => 42,  144 => 38,  140 => 36,  138 => 35,  136 => 34,  132 => 32,  130 => 31,  129 => 30,  128 => 29,  125 => 28,  122 => 27,  120 => 26,  111 => 20,  107 => 19,  104 => 18,  100 => 16,  90 => 12,  86 => 11,  82 => 10,  78 => 8,  74 => 7,  71 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}

<div class=\"container post-body\">
<div class=\"row\">
{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

<h1>{{ post.title | raw }}</h1>
<div class=\"content\">{{ post.content_html | raw }}</div>
</div>
</div>

<div class=\"container text-center\">
<p class=\"info\">
    {% if post.categories.count %}
        {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

        {{ 'rainlab.blog::lang.post.posted_byline' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
            categories: categoryLinks
        }) }}
    {% else %}
        {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format'|trans)
        }) }}
    {% endif %}
</p>
</div>

<div class=\"container\">
{% component 'blogCategories' %}
</div>", "/Users/wpineda/Documents/Development/Sites/trust-can.ml/themes/sliderweb-sliderweb_0002_hydrogen-theme/partials/post.htm", "");
    }
}
