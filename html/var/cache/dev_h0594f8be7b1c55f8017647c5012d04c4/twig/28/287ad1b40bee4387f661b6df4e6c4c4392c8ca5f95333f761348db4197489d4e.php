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

/* @Storefront/storefront/component/product/card/box.html.twig */
class __TwigTemplate_88f6407a1c0bdc2e5d0f5bb4af8bebaf4ce98cca5ba5f961aa5421eba3151a32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_include' => [$this, 'block_component_product_box_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_include', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_include"));

        // line 2
        echo "    ";
        // line 4
        echo "
    ";
        // line 5
        if (twig_test_empty(($context["layout"] ?? null))) {
            // line 6
            echo "        ";
            $context["layout"] = "standard";
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context["sizes"] = ["xs" => "500px", "sm" => "315px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
        // line 16
        echo "
    ";
        // line 17
        if ((0 === twig_compare(($context["layout"] ?? null), "image"))) {
            // line 18
            echo "        ";
            $context["sizes"] = ["xs" => "500px", "sm" => "500px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((0 === twig_compare(($context["layout"] ?? null), "standard"))) {
            // line 28
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-standard.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 28)->display($context);
            // line 29
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "image"))) {
            // line 30
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-image.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 30)->display($context);
            // line 31
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "minimal"))) {
            // line 32
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-minimal.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "wishlist"))) {
            // line 34
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-wishlist.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 34)->display($context);
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $context["template"] = (("@Storefront/storefront/component/product/card/box-" . ($context["layout"] ?? null)) . ".html.twig");
            // line 37
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName(($context["template"] ?? null)));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box.html.twig", 37);
                })());
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 38
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 18,  84 => 17,  81 => 16,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  68 => 5,  65 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_include %}
    {# Includes a custom product-box template defined by the layout variable.
       The standard template is used if no custom layout is set. #}

    {% if layout is empty %}
        {% set layout = 'standard' %}
    {% endif %}

    {% set sizes = {
        'xs': '500px',
        'sm': '315px',
        'md': '390px',
        'lg': '350px',
        'xl': '280px'
    } %}

    {% if layout == 'image' %}
        {% set sizes = {
            'xs': '500px',
            'sm': '500px',
            'md': '390px',
            'lg': '350px',
            'xl': '280px'
        } %}
    {% endif %}

    {% if layout == 'standard' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-standard.html.twig\" %}
    {% elseif layout == 'image' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-image.html.twig\" %}
    {% elseif layout == 'minimal' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-minimal.html.twig\" %}
    {% elseif layout == 'wishlist' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-wishlist.html.twig\" %}
    {% else %}
        {% set template = \"@Storefront/storefront/component/product/card/box-\" ~ layout ~ \".html.twig\" %}
        {% sw_include template ignore missing %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box.html.twig");
    }
}
