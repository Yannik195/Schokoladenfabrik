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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_7be25f59ce3ed4d5c03ed4e83dabcf7049cdecdd09121ed33e0336637326c009 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        // line 2
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 3
            echo "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            $context["categoryId"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            $context["breadcrumbTypes"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildCategoryTypes(($context["breadcrumbCategories"] ?? null));
            // line 12
            echo "
        ";
            // line 13
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["breadcrumbCategories"] ?? null)), 0))) {
                // line 14
                echo "            <nav aria-label=\"breadcrumb\">
                ";
                // line 15
                $this->displayBlock('layout_breadcrumb_list', $context, $blocks);
                // line 56
                echo "            </nav>
        ";
            }
            // line 58
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        // line 16
        echo "                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 20
            echo "                            ";
            $context["key"] = twig_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 20);
            // line 21
            echo "                            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21);
            // line 22
            echo "
                            ";
            // line 23
            $this->displayBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 45
            echo "
                            ";
            // line 46
            $this->displayBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 53
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </ol>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        // line 24
        echo "                                <li class=\"breadcrumb-item\"
                                    ";
        // line 25
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            echo "aria-current=\"page\"";
        }
        // line 26
        echo "                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 29), "folder"))) {
            // line 30
            echo "                                        <div>";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                    ";
        } else {
            // line 32
            echo "                                        <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"
                                           class=\"breadcrumb-link ";
            // line 33
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                echo " is-active";
            }
            echo "\"
                                           title=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                                           ";
            // line 35
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 36
            echo "                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"";
            // line 38
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"/>
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 39
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                        </a>
                                        <meta itemprop=\"position\" content=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
                                    ";
        }
        // line 43
        echo "                                </li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        // line 47
        echo "                                ";
        if ((0 !== twig_compare(($context["key"] ?? null), twig_last($this->env, ($context["breadcrumbKeys"] ?? null))))) {
            // line 48
            echo "                                    <div class=\"breadcrumb-placeholder\">
                                        ";
            // line 49
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 49);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 50
            echo "                                    </div>
                                ";
        }
        // line 52
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 52,  291 => 50,  283 => 49,  280 => 48,  277 => 47,  267 => 46,  256 => 43,  251 => 41,  246 => 39,  242 => 38,  238 => 36,  234 => 35,  230 => 34,  224 => 33,  219 => 32,  213 => 30,  211 => 29,  206 => 26,  202 => 25,  199 => 24,  189 => 23,  178 => 54,  164 => 53,  162 => 46,  159 => 45,  157 => 23,  154 => 22,  151 => 21,  148 => 20,  131 => 19,  126 => 16,  116 => 15,  105 => 58,  101 => 56,  99 => 15,  96 => 14,  94 => 13,  91 => 12,  88 => 11,  86 => 10,  83 => 9,  81 => 8,  78 => 7,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_breadcrumb_inner %}
    {% if category %}
        {% set breadcrumbCategories = sw_breadcrumb_full(category, context.context) %}
        {% set categoryId = category.id %}

        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumb = sw_breadcrumb(category) %}
        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumbKeys = breadcrumb|keys %}
        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumbTypes = sw_breadcrumb_build_types(breadcrumbCategories) %}

        {% if breadcrumbCategories|length > 0 %}
            <nav aria-label=\"breadcrumb\">
                {% block layout_breadcrumb_list %}
                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        {% for breadcrumbCategory in breadcrumbCategories %}
                            {% set key = breadcrumbCategory.id %}
                            {% set name = breadcrumbCategory.translated.name %}

                            {% block layout_breadcrumb_list_item %}
                                <li class=\"breadcrumb-item\"
                                    {% if key is same as(categoryId) %}aria-current=\"page\"{% endif %}
                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    {% if breadcrumbCategory.type == 'folder' %}
                                        <div>{{ name }}</div>
                                    {% else %}
                                        <a href=\"{{ category_url(breadcrumbCategory) }}\"
                                           class=\"breadcrumb-link {% if key is same as(categoryId) %} is-active{% endif %}\"
                                           title=\"{{ name }}\"
                                           {% if category_linknewtab(breadcrumbCategory) %}target=\"_blank\"{% endif %}
                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"{{ category_url(breadcrumbCategory) }}\"/>
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">{{ name }}</span>
                                        </a>
                                        <meta itemprop=\"position\" content=\"{{ breadcrumbCategory.id }}\"/>
                                    {% endif %}
                                </li>
                            {% endblock %}

                            {% block layout_breadcrumb_placeholder %}
                                {% if key != breadcrumbKeys|last %}
                                    <div class=\"breadcrumb-placeholder\">
                                        {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                                    </div>
                                {% endif %}
                            {% endblock %}
                        {% endfor %}
                    </ol>
                {% endblock %}
            </nav>
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/breadcrumb.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
