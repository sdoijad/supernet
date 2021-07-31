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

/* __string_template__13aea58a686a1cc7344a19952d323e8a715389735acd67153950141f6341a57b */
class __TwigTemplate_3a42b534ff46659e6cb66972727c551e78d7605c1b9dca8a5dd89594ef3a0733 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["due_date"] = ($context["field_due_date"] ?? null);
        // line 2
        $context["reminder_date"] = ($context["field_reminder_date"] ?? null);
        // line 3
        $context["current_date"] = twig_date_format_filter($this->env, "now", "U");
        // line 4
        echo "
";
        // line 5
        if ((($context["field_payment_status"] ?? null) == "Paid")) {
            // line 6
            echo "  <span class=\"paid\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["due_date"] ?? null), 6, $this->source), "d, F Y"), "html", null, true);
            echo " </span> 

";
        } elseif ((        // line 8
($context["current_date"] ?? null) > ($context["due_date"] ?? null))) {
            // line 9
            echo " <span class=\"expired\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["due_date"] ?? null), 9, $this->source), "d, F Y"), "html", null, true);
            echo " </span> 

";
        } elseif ((        // line 11
($context["reminder_date"] ?? null) < ($context["current_date"] ?? null))) {
            // line 12
            echo "  <span class=\"about-expired\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["due_date"] ?? null), 12, $this->source), "d, F Y"), "html", null, true);
            echo " </span> 

";
        } else {
            // line 15
            echo "   <span class=\"not-expired\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["due_date"] ?? null), 15, $this->source), "d, F Y"), "html", null, true);
            echo " </span>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__13aea58a686a1cc7344a19952d323e8a715389735acd67153950141f6341a57b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 12,  64 => 11,  58 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}{% set due_date = field_due_date %}
{% set reminder_date = field_reminder_date %}
{% set current_date =  'now'|date('U')  %}

{% if (field_payment_status == 'Paid')  %}
  <span class=\"paid\"> {{ due_date|date(\"d, F Y\") }} </span> 

{% elseif (current_date > due_date)  %}
 <span class=\"expired\"> {{ due_date|date(\"d, F Y\") }} </span> 

{% elseif (reminder_date < current_date) %}
  <span class=\"about-expired\"> {{ due_date|date(\"d, F Y\") }} </span> 

{% else %}
   <span class=\"not-expired\"> {{ due_date|date(\"d, F Y\") }} </span>

{% endif %}
", "__string_template__13aea58a686a1cc7344a19952d323e8a715389735acd67153950141f6341a57b", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("date" => 3, "escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['date', 'escape'],
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
}
