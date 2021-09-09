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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_5d70861a20cc855f11cf91054697d33055e2853b7d60a9570507bc9193095f0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["purchaseUnit"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context["listingPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $context["fromPrice"] = twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        $context["cheapest"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 9);
        // line 10
        echo "
    ";
        // line 11
        $context["real"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 11);
        // line 12
        echo "    ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12), 0))) {
            // line 13
            echo "        ";
            $context["real"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 13), "last", [], "any", false, false, false, 13);
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        $context["referencePrice"] = twig_get_attribute($this->env, $this->source, ($context["real"] ?? null), "referencePrice", [], "any", false, false, false, 16);
        // line 17
        echo "
    ";
        // line 18
        $context["displayFrom"] = (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18), 1));
        // line 19
        echo "
    <div class=\"product-price-info\">
        ";
        // line 21
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 83
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        // line 22
        echo "            <p class=\"product-price-unit\">
                ";
        // line 24
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 34
        echo "
                ";
        // line 36
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 43
        echo "            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        // line 25
        echo "                    ";
        if ((($context["referencePrice"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 25))) {
            // line 26
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 27
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 33
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        // line 37
        echo "                    ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 38
            echo "                        <span class=\"price-unit-reference\">
                            (";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 39)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 39), "html", null, true);
            echo ")
                        </span>
                    ";
        }
        // line 42
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 47
        echo "            <div class=\"product-price-wrapper\">
                ";
        // line 48
        $context["price"] = ($context["real"] ?? null);
        // line 49
        echo "
                <div class=\"product-cheapest-price\">
                    ";
        // line 51
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, ($context["real"] ?? null), "unitPrice", [], "any", false, false, false, 51)))) {
            // line 52
            echo "                        <div>";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.cheapestPriceLabel"));
            echo "<span class=\"product-cheapest-price-price\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 52)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span></div>
                    ";
        }
        // line 54
        echo "                </div>

                ";
        // line 56
        if (($context["displayFrom"] ?? null)) {
            // line 57
            echo "                    ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
            echo "
                ";
        }
        // line 59
        echo "
                ";
        // line 60
        $context["isListPrice"] = (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 60), "percentage", [], "any", false, false, false, 60), 0));
        // line 61
        echo "
                <span class=\"product-price";
        // line 62
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            echo " with-list-price";
        }
        echo "\">
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 63)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "

                    ";
        // line 65
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            // line 66
            echo "                        ";
            $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
            // line 67
            echo "                        ";
            $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
            // line 68
            echo "                        ";
            $context["hideStrikeTrough"] = (($context["beforeListPriceSnippetExists"] ?? null) || ($context["afterListPriceSnippetExists"] ?? null));
            // line 69
            echo "
                        <span class=\"list-price";
            // line 70
            if (($context["hideStrikeTrough"] ?? null)) {
                echo " list-price-no-line-through";
            }
            echo "\">
                            ";
            // line 71
            if (($context["beforeListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")));
            }
            // line 72
            echo "
                            <span class=\"list-price-price\">";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 73), "price", [], "any", false, false, false, 73)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>

                            ";
            // line 75
            if (($context["afterListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")));
            }
            // line 76
            echo "
                            <span class=\"list-price-percentage\">";
            // line 77
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 77), "percentage", [], "any", false, false, false, 77)]));
            echo "</span>
                        </span>
                    ";
        }
        // line 80
        echo "                </span>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  351 => 80,  345 => 77,  342 => 76,  338 => 75,  332 => 73,  329 => 72,  325 => 71,  319 => 70,  316 => 69,  313 => 68,  310 => 67,  307 => 66,  305 => 65,  299 => 63,  293 => 62,  290 => 61,  288 => 60,  285 => 59,  279 => 57,  277 => 56,  273 => 54,  264 => 52,  262 => 51,  258 => 49,  256 => 48,  253 => 47,  243 => 46,  233 => 42,  222 => 39,  219 => 38,  216 => 37,  206 => 36,  196 => 33,  188 => 30,  182 => 27,  179 => 26,  176 => 25,  166 => 24,  155 => 43,  152 => 36,  149 => 34,  146 => 24,  143 => 22,  133 => 21,  122 => 83,  120 => 46,  117 => 45,  115 => 21,  111 => 19,  109 => 18,  106 => 17,  104 => 16,  101 => 15,  98 => 14,  95 => 13,  92 => 12,  90 => 11,  87 => 10,  85 => 9,  82 => 8,  79 => 7,  77 => 6,  74 => 5,  72 => 4,  69 => 3,  67 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_price_info %}
    {# @deprecated tag:v6.5.0 - purchaseUnit will be removed, use product.purchaseUnit if needed #}
    {% set purchaseUnit = product.purchaseUnit %}
    {# @deprecated tag:v6.5.0 - listingPrice will be removed without replacement, since it was removed from the product struct #}
    {% set listingPrice = product.calculatedListingPrice %}
    {# @deprecated tag:v6.5.0 - fromPrice will be removed without replacement #}
    {% set fromPrice = listingPrice.from %}

    {% set cheapest = product.calculatedCheapestPrice %}

    {% set real = product.calculatedPrice %}
    {% if product.calculatedPrices.count > 0 %}
        {% set real = product.calculatedPrices.last %}
    {% endif %}

    {% set referencePrice = real.referencePrice %}

    {% set displayFrom = product.calculatedPrices.count > 1 %}

    <div class=\"product-price-info\">
        {% block component_product_box_price_unit %}
            <p class=\"product-price-unit\">
                {# Price is based on the purchase unit #}
                {% block component_product_box_price_purchase_unit %}
                    {% if referencePrice and referencePrice.unitName %}
                        <span class=\"product-unit-label\">
                            {{ \"listing.boxUnitLabel\"|trans|sw_sanitize }}
                        </span>
                        <span class=\"price-unit-content\">
                            {{ referencePrice.purchaseUnit }} {{ referencePrice.unitName }}
                        </span>
                    {% endif %}
                {% endblock %}

                {# Item price is based on a reference unit #}
                {% block component_product_box_price_reference_unit %}
                    {% if referencePrice is not null %}
                        <span class=\"price-unit-reference\">
                            ({{ referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referencePrice.referenceUnit }} {{ referencePrice.unitName }})
                        </span>
                    {% endif %}
                {% endblock %}
            </p>
        {% endblock %}

        {% block component_product_box_price %}
            <div class=\"product-price-wrapper\">
                {% set price = real %}

                <div class=\"product-cheapest-price\">
                    {% if cheapest.unitPrice != real.unitPrice %}
                        <div>{{ \"listing.cheapestPriceLabel\"|trans|sw_sanitize }}<span class=\"product-cheapest-price-price\"> {{ cheapest.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span></div>
                    {% endif %}
                </div>

                {% if displayFrom %}
                    {{ \"listing.listingTextFrom\"|trans|sw_sanitize }}
                {% endif %}

                {% set isListPrice = price.listPrice.percentage > 0 %}

                <span class=\"product-price{% if isListPrice and not displayFrom %} with-list-price{% endif %}\">
                    {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}

                    {% if isListPrice and not displayFrom %}
                        {% set afterListPriceSnippetExists = \"listing.afterListPrice\"|trans|length > 0 %}
                        {% set beforeListPriceSnippetExists = \"listing.beforeListPrice\"|trans|length > 0 %}
                        {% set hideStrikeTrough = beforeListPriceSnippetExists or afterListPriceSnippetExists %}

                        <span class=\"list-price{% if hideStrikeTrough %} list-price-no-line-through{% endif %}\">
                            {% if beforeListPriceSnippetExists %}{{ \"listing.beforeListPrice\"|trans|trim|sw_sanitize }}{% endif %}

                            <span class=\"list-price-price\">{{ price.listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span>

                            {% if afterListPriceSnippetExists %}{{ \"listing.afterListPrice\"|trans|trim|sw_sanitize }}{% endif %}

                            <span class=\"list-price-percentage\">{{ \"detail.listPricePercentage\"|trans({'%price%': price.listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endif %}
                </span>
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
