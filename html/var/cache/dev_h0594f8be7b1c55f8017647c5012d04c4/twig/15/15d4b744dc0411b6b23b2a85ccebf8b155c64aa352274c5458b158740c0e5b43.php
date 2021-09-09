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

/* @Storefront/storefront/component/recaptcha.html.twig */
class __TwigTemplate_86723e8d6b60272feb4309318902714fbf85691350c16108924213bcf56a36f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_javascript_recaptcha' => [$this, 'block_component_head_javascript_recaptcha'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/recaptcha.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/recaptcha.html.twig"));

        // line 1
        $this->displayBlock('component_head_javascript_recaptcha', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_javascript_recaptcha"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_javascript_recaptcha"));

        // line 2
        echo "    ";
        $context["recaptchaV2Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV2.isActive");
        // line 3
        echo "    ";
        $context["recaptchaV3Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.isActive");
        // line 4
        echo "
    ";
        // line 5
        if ((($context["recaptchaV2Active"] ?? null) || ($context["recaptchaV3Active"] ?? null))) {
            // line 6
            echo "        <script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js";
            if (($context["recaptchaV3Active"] ?? null)) {
                echo "?render=";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.config.siteKey"), "html", null, true);
            }
            echo "' async defer></script>
        <script>
            ";
            // line 8
            if (($context["recaptchaV2Active"] ?? null)) {
                // line 9
                echo "                window.googleReCaptchaV2Active = true;
            ";
            }
            // line 11
            echo "            ";
            if (($context["recaptchaV3Active"] ?? null)) {
                // line 12
                echo "                window.googleReCaptchaV3Active = true;
            ";
            }
            // line 14
            echo "        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/recaptcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  92 => 12,  89 => 11,  85 => 9,  83 => 8,  74 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_head_javascript_recaptcha %}
    {% set recaptchaV2Active = config('core.basicInformation.activeCaptchasV2.googleReCaptchaV2.isActive') %}
    {% set recaptchaV3Active = config('core.basicInformation.activeCaptchasV2.googleReCaptchaV3.isActive') %}

    {% if recaptchaV2Active or recaptchaV3Active %}
        <script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js{% if recaptchaV3Active %}?render={{ config('core.basicInformation.activeCaptchasV2.googleReCaptchaV3.config.siteKey') }}{% endif %}' async defer></script>
        <script>
            {% if recaptchaV2Active %}
                window.googleReCaptchaV2Active = true;
            {% endif %}
            {% if recaptchaV3Active %}
                window.googleReCaptchaV3Active = true;
            {% endif %}
        </script>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/recaptcha.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/recaptcha.html.twig");
    }
}
