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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_5131ec34c5855115597e077fb8e9744c3fb8488132b8ca95ee546a22af3a875b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        // line 2
        echo "    ";
        $context["metaInformation"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 4
        echo "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 5
        echo "    ";
        $context["metaDescription"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 5)))), "truncate", [0 => (($context["maxLength"]) ?? (160)), 1 => "…"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 6)));
        // line 7
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 7)));
        // line 8
        echo "
    <head>
        ";
        // line 10
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('layout_head_javascript_feature', $context, $blocks);
        // line 123
        echo "
        ";
        // line 125
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 128
        echo "
        ";
        // line 129
        $this->displayBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 132
        echo "    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        // line 11
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 73
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        // line 21
        echo "                <meta name=\"author\"
                      content=\"";
        // line 22
        $this->displayBlock('layout_head_meta_tags_general_author', $context, $blocks);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 24
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 26
        $this->displayBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 28
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 30
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        echo twig_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        // line 34
        echo "                <meta property=\"og:type\"
                      content=\"";
        // line 35
        $this->displayBlock('layout_head_meta_tags_type_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 37
        $this->displayBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 39
        $this->displayBlock('layout_head_meta_tags_title_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 41
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 43
        $this->displayBlock('layout_head_meta_tags_image_og', $context, $blocks);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"";
        // line 46
        $this->displayBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 48
        $this->displayBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 50
        $this->displayBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 52
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 54
        $this->displayBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        echo "website";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 37), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        echo "summary";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 48), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        // line 58
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 59
        $this->displayBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 61
        $this->displayBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 63
        $this->displayBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 65
        $this->displayBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 59), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 61)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        if (twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 63)) {
            echo "true";
        } else {
            echo "false";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        // line 69
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 70
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 70), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 70), "html", null, true);
            echo "\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        // line 76
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        // line 81
        echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_android"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_android"));

        // line 87
        echo "            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
        echo "\">
            <meta name=\"theme-color\"
                  content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-color-brand-primary"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        // line 95
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 95), "canonical", [], "any", false, false, false, 95)) {
            // line 96
            echo "                <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 96), "canonical", [], "any", false, false, false, 96), "html", null, true);
            echo "\" />
            ";
        }
        // line 98
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        // line 101
        echo "            <title itemprop=\"name\">
                ";
        // line 102
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 105
        echo "            </title>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        ob_start();
        // line 103
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
        $___internal_986f3d903873f4ea407bd93ec604457ce60c9dc8a37784ec0fd49f92a5359e9c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo twig_spaceless($___internal_986f3d903873f4ea407bd93ec604457ce60c9dc8a37784ec0fd49f92a5359e9c_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        // line 109
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 110
            echo "                ";
            // line 111
            echo "            ";
        } else {
            // line 112
            echo "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 113
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 114
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            ";
        }
        // line 118
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        // line 121
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 121)->display($context);
        // line 122
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        // line 130
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 130)->display($context);
        // line 131
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1101 => 131,  1098 => 130,  1088 => 129,  1078 => 127,  1075 => 126,  1065 => 125,  1055 => 122,  1052 => 121,  1042 => 120,  1032 => 118,  1029 => 117,  1021 => 115,  1018 => 114,  1013 => 113,  1010 => 112,  1007 => 111,  1005 => 110,  1002 => 109,  992 => 108,  982 => 102,  976 => 103,  965 => 102,  954 => 105,  952 => 102,  949 => 101,  939 => 100,  929 => 98,  923 => 96,  920 => 95,  910 => 94,  898 => 91,  893 => 89,  889 => 87,  879 => 86,  867 => 83,  863 => 81,  853 => 80,  841 => 77,  838 => 76,  828 => 75,  818 => 72,  807 => 70,  802 => 69,  792 => 68,  773 => 65,  750 => 63,  731 => 61,  712 => 59,  700 => 65,  695 => 63,  690 => 61,  685 => 59,  682 => 58,  672 => 57,  653 => 54,  634 => 52,  615 => 50,  596 => 48,  577 => 46,  558 => 43,  539 => 41,  520 => 39,  501 => 37,  482 => 35,  470 => 54,  465 => 52,  460 => 50,  455 => 48,  450 => 46,  444 => 43,  439 => 41,  434 => 39,  429 => 37,  424 => 35,  421 => 34,  411 => 33,  392 => 30,  373 => 28,  354 => 26,  335 => 24,  316 => 22,  304 => 30,  299 => 28,  294 => 26,  289 => 24,  284 => 22,  281 => 21,  271 => 20,  259 => 16,  249 => 15,  238 => 12,  228 => 11,  218 => 73,  216 => 68,  213 => 67,  211 => 57,  208 => 56,  206 => 33,  203 => 32,  201 => 20,  198 => 19,  196 => 15,  193 => 14,  190 => 11,  180 => 10,  169 => 132,  167 => 129,  164 => 128,  161 => 125,  158 => 123,  156 => 120,  153 => 119,  151 => 108,  148 => 107,  146 => 100,  143 => 99,  141 => 94,  138 => 93,  136 => 86,  133 => 85,  131 => 80,  128 => 79,  126 => 75,  123 => 74,  121 => 10,  117 => 8,  114 => 7,  111 => 6,  108 => 5,  105 => 4,  102 => 3,  99 => 2,  80 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_head_inner %}
    {% set metaInformation = page.metaInformation %}
    {% set basicConfig = config('core.basicInformation') %}
    {% set maxLength = config('seo.descriptionMaxLength') %}
    {% set metaDescription = metaInformation.metaDescription|striptags|trim|u.truncate(maxLength ?? 160, '…') %}
    {% set metaTitle = metaInformation.metaTitle|striptags|trim %}
    {% set metaKeywords = metaInformation.metaKeywords|striptags|trim %}

    <head>
        {% block layout_head_meta_tags %}
            {% block layout_head_meta_tags_charset %}
                <meta charset=\"utf-8\">
            {% endblock %}

            {% block layout_head_meta_tags_viewport %}
                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            {% endblock %}

            {% block layout_head_meta_tags_general %}
                <meta name=\"author\"
                      content=\"{% block layout_head_meta_tags_general_author %}{{ metaInformation.author|striptags }}{% endblock %}\"/>
                <meta name=\"robots\"
                      content=\"{% block layout_head_meta_tags_robots %}{{ metaInformation.robots }}{% endblock %}\"/>
                <meta name=\"revisit-after\"
                      content=\"{% block layout_head_meta_tags_general_revisit %}{{ metaInformation.revisit|striptags }}{% endblock %}\"/>
                <meta name=\"keywords\"
                      content=\"{% block layout_head_meta_tags_keywords %}{{ metaKeywords }}{% endblock %}\"/>
                <meta name=\"description\"
                      content=\"{% block layout_head_meta_tags_description %}{{ metaDescription }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_opengraph %}
                <meta property=\"og:type\"
                      content=\"{% block layout_head_meta_tags_type_og %}website{% endblock %}\"/>
                <meta property=\"og:site_name\"
                      content=\"{% block layout_head_meta_tags_sitename_og %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta property=\"og:title\"
                      content=\"{% block layout_head_meta_tags_title_og %}{{ metaTitle }}{% endblock %}\"/>
                <meta property=\"og:description\"
                      content=\"{% block layout_head_meta_tags_description_og %}{{ metaDescription }}{% endblock %}\"/>
                <meta property=\"og:image\"
                      content=\"{% block layout_head_meta_tags_image_og %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>

                <meta name=\"twitter:card\"
                      content=\"{% block layout_head_meta_tags_card_twitter %}summary{% endblock %}\"/>
                <meta name=\"twitter:site\"
                      content=\"{% block layout_head_meta_tags_sitename_twitter %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta name=\"twitter:title\"
                      content=\"{% block layout_head_meta_tags_title_twitter %}{{ metaTitle }}{% endblock %}\"/>
                <meta name=\"twitter:description\"
                      content=\"{% block layout_head_meta_tags_description_twitter %}{{ metaDescription }}{% endblock %}\"/>
                <meta name=\"twitter:image\"
                      content=\"{% block layout_head_meta_tags_image_twitter %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_schema_webpage %}
                <meta itemprop=\"copyrightHolder\"
                      content=\"{% block layout_head_meta_tags_copyright_holder %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"{% block layout_head_meta_tags_copyright_year %}{{ metaInformation.copyrightYear|striptags }}{% endblock %}\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"{% block layout_head_meta_tags_family_friendly %}{% if basicConfig.familyFriendly %}true{% else %}false{% endif %}{% endblock %}\"/>
                <meta itemprop=\"image\"
                      content=\"{% block layout_head_meta_tags_image_meta %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_hreflangs %}
                {% for link in hrefLang %}
                    <link rel=\"alternate\" hreflang=\"{{ link.locale }}\" href=\"{{ link.url }}\" />
                {% endfor %}
            {% endblock %}
        {% endblock %}

        {% block layout_head_favicon %}
            <link rel=\"shortcut icon\"
                  href=\"{{ theme_config('sw-logo-favicon') }}\">
        {% endblock %}

        {% block layout_head_apple %}
            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
        {% endblock %}

        {% block layout_head_android %}
            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
            <meta name=\"theme-color\"
                  content=\"{{ theme_config('sw-color-brand-primary') }}\"/>
        {% endblock %}

        {% block layout_head_canonical %}
            {% if page.metaInformation.canonical %}
                <link rel=\"canonical\" href=\"{{ page.metaInformation.canonical }}\" />
            {% endif %}
        {% endblock %}

        {% block layout_head_title %}
            <title itemprop=\"name\">
                {% block layout_head_title_inner %}{% apply spaceless %}
                    {{ metaTitle }}
                {% endapply %}{% endblock %}
            </title>
        {% endblock %}

        {% block layout_head_stylesheet %}
            {% if isHMRMode %}
                {# CSS will be loaded from the JS automatically #}
            {% else %}
                {% set assets = theme_config('assets.css') %}
                {% for file in assets %}
                    <link rel=\"stylesheet\"
                      href=\"{{ asset(file, 'theme') }}\">
                {% endfor %}
            {% endif %}
        {% endblock %}

        {% block layout_head_javascript_feature %}
            {% sw_include \"@Storefront/storefront/component/feature.html.twig\" %}
        {% endblock %}

        {# Block for tracking scripts which are required to include in the `head` section of the document #}
        {% block layout_head_javascript_tracking %}
            {% sw_include \"@Storefront/storefront/component/analytics.html.twig\" %}
        {% endblock %}

        {% block layout_head_javascript_recaptcha %}
            {% sw_include \"@Storefront/storefront/component/recaptcha.html.twig\" %}
        {% endblock %}
    </head>
{% endblock %}
", "@Storefront/storefront/layout/meta.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
