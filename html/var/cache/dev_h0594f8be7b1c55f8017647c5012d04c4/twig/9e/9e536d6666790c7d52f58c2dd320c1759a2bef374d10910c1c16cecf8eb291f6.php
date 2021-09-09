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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_78323eb24abe39191e3ceee292c5a2f0a72e151b10ff8360a8018512b5d72883 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 2
        if ( !array_key_exists("load", $context)) {
            // line 3
            echo "    ";
            $context["load"] = true;
        }
        // line 5
        echo "
";
        // line 8
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 9
            echo "    ";
            $context["loadOriginalImage"] = false;
        }
        // line 11
        echo "
";
        // line 14
        if (($context["autoColumnSizes"] ?? null)) {
            // line 15
            echo "    ";
            $context["autoColumnSizes"] = true;
        }
        // line 17
        echo "
";
        // line 19
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 19)), 0))) {
            // line 20
            echo "    ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 21
                echo "        ";
                // line 22
                echo "        ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 25
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 26
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 28
                echo "
        ";
                // line 30
                echo "        ";
                if ((0 === twig_compare(($context["layout"] ?? null), "full-width"))) {
                    // line 31
                    echo "            ";
                    $context["container"] = 100;
                    // line 32
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 33
                    echo "        ";
                } else {
                    // line 34
                    echo "            ";
                    $context["container"] = 1360;
                    // line 35
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 39)));
            // line 40
            echo "
    ";
            // line 42
            echo "    ";
            ob_start();
            ob_start();
            // line 43
            echo "        ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 43) + 1), "html", null, true);
                echo "w, ";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(twig_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 43)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 43), "html", null, true);
                echo "w";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43)) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
            $___internal_141a9e85463faadf0d8b444438ec01f8c3d5daaf69504ba2e334c1b23a6dd4cd_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo twig_spaceless($___internal_141a9e85463faadf0d8b444438ec01f8c3d5daaf69504ba2e334c1b23a6dd4cd_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "
    ";
            // line 47
            echo "    ";
            ob_start();
            ob_start();
            // line 48
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 49
            echo "
        ";
            // line 51
            echo "        ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 52
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 53
                echo "        ";
            }
            // line 54
            echo "
        ";
            // line 55
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 62
            echo "
        ";
            // line 63
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 63), twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)))))) {
                // line 64
                echo "            ";
                // line 65
                echo "            ";
                $context["maxWidth"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 65);
                // line 66
                echo "        ";
            }
            // line 67
            echo "
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "(min-width: ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sizes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 68)) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo twig_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_ff040d9cdbcaae6996838b0ca0205d9016d7230f6d24c62f1239841318a5dc30_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo twig_spaceless($___internal_ff040d9cdbcaae6996838b0ca0205d9016d7230f6d24c62f1239841318a5dc30_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 71
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 72
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 72)), 0))) {
            // line 73
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 74
            echo "        ";
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sizes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["default"] ?? null) : null)) {
                // line 75
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sizes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((1 === twig_compare(twig_length_filter($this->env,             // line 76
($context["sizes"] ?? null)), 0))) {
                // line 77
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 79
            echo "    ";
        }
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ((0 !== twig_compare($context["value"], ""))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 81,  302 => 80,  299 => 79,  293 => 77,  291 => 76,  286 => 75,  283 => 74,  272 => 73,  269 => 72,  258 => 71,  254 => 47,  213 => 68,  210 => 67,  207 => 66,  204 => 65,  202 => 64,  200 => 63,  197 => 62,  195 => 55,  192 => 54,  189 => 53,  186 => 52,  183 => 51,  180 => 49,  177 => 48,  173 => 47,  170 => 45,  167 => 42,  164 => 44,  121 => 43,  117 => 42,  114 => 40,  112 => 39,  109 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 28,  80 => 26,  79 => 25,  77 => 22,  75 => 21,  72 => 20,  70 => 19,  67 => 17,  63 => 15,  61 => 14,  58 => 11,  54 => 9,  52 => 8,  49 => 5,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
{% if load is not defined %}
    {% set load = true %}
{% endif %}

{# By default no original image will be loaded as soon as thumbnails are available. #}
{# When set to true the orginal image will be loaded when the viewport is greater than the largest available thumbnail. #}
{% if loadOriginalImage is not defined %}
    {% set loadOriginalImage = false %}
{% endif %}

{# By default the srcset sizes will be calculated automatically if `columns` are present and no `sizes` are configured. #}
{# When set to false the sizes attribute will not be generated automatically. #}
{% if autoColumnSizes %}
    {% set autoColumnSizes = true %}
{% endif %}

{# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
{% if media.thumbnails|length > 0 %}
    {% if autoColumnSizes and columns and sizes is not defined %}
        {# set image size for every viewport #}
        {% set sizes = {
            'xs': (theme_config('breakpoint.sm') - 1) ~'px',
            'sm': (theme_config('breakpoint.md') - 1) ~'px',
            'md': ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
            'lg': ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
        } %}

        {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
        {% if layout == 'full-width' %}
            {% set container = 100 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
        {% else %}
            {% set container = 1360 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
        {% endif %}
    {% endif %}

    {% set thumbnails = media.thumbnails|sort|reverse %}

    {# generate srcset with all available thumbnails #}
    {% set srcsetValue %}{% apply spaceless %}
        {% if loadOriginalImage %}{{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% endif %}{% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
    {% endapply %}{% endset %}

    {# generate sizes #}
    {% set sizesValue %}{% apply spaceless %}
        {% set sizeFallback = 100 %}

        {# set largest size depending on column count of cms block #}
        {% if autoColumnSizes and columns %}
            {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
        {% endif %}

        {% set breakpoint = {
            'xs': theme_config('breakpoint.xs'),
            'sm': theme_config('breakpoint.sm'),
            'md': theme_config('breakpoint.md'),
            'lg': theme_config('breakpoint.lg'),
            'xl': theme_config('breakpoint.xl')
        } %}

        {% if thumbnails|first.width > breakpoint|reverse|first %}
            {# @deprecated tag:v6.5.0 - Variable `maxWidth` and parent condition will be removed #}
            {% set maxWidth = thumbnails|first.width %}
        {% endif %}

        {% for key, value in breakpoint|reverse %}(min-width: {{ value }}px) {{ sizes[key] }}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
    {% endapply %}{% endset %}
{% endif %}
<img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
    {% if media.thumbnails|length > 0 %}
        {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
        {% if sizes['default'] %}
        sizes=\"{{ sizes['default'] }}\"
        {% elseif sizes|length > 0 %}
        sizes=\"{{ sizesValue }}\"
        {% endif %}
    {% endif %}
    {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
/>
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
