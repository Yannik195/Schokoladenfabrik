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

/* @Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig */
class __TwigTemplate_b1b366feae30430289c955daf246d7c1f62b216672a0880b571bc7c16bc5d5f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig"));

        // line 1
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1);
        // line 2
        echo "<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 3
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_link', $context, $blocks);
        // line 16
        echo "</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_link"));

        // line 4
        echo "        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"";
        // line 5
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["item"] ?? null));
        echo "\"
           itemprop=\"url\"
           ";
        // line 7
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["item"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 8
        echo "           title=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_text', $context, $blocks);
        // line 14
        echo "        </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_text"));

        // line 10
        echo "                <span itemprop=\"name\">
                    ";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.showCategory", ["%category%" => ($context["name"] ?? null)]));
        echo "
                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  113 => 10,  103 => 9,  92 => 14,  90 => 9,  85 => 8,  81 => 7,  76 => 5,  73 => 4,  63 => 3,  52 => 16,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set name = item.translated.name %}
<li class=\"navigation-offcanvas-list-item\">
    {% block layout_navigation_offcanvas_navigation_categories_list_current_category_item_link %}
        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"{{ category_url(item) }}\"
           itemprop=\"url\"
           {% if category_linknewtab(item) %}target=\"_blank\"{% endif %}
           title=\"{{ name }}\">
            {% block layout_navigation_offcanvas_navigation_categories_list_current_category_item_text %}
                <span itemprop=\"name\">
                    {{ \"general.showCategory\"|trans({\"%category%\": name})|sw_sanitize }}
                </span>
            {% endblock %}
        </a>
    {% endblock %}
</li>
", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-active-link.html.twig");
    }
}
