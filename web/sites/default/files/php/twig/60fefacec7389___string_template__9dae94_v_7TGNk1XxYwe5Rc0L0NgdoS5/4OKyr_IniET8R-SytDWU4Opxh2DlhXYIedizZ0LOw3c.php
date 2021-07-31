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

/* __string_template__9dae943288d5f69e1377ce27f429006596670f254e3bea235d68702d0fcfa1ab */
class __TwigTemplate_36b6e6b2c6fc3e870bb88ce0b03b0e74c067268d8d2377791401b6bfacd251b0 extends \Twig\Template
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
        echo "<a href=\"/node/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null), 1, $this->source), "html", null, true);
        echo "/edit#edit-group-payment-details\" class=\"button\"> Update Payment Status </a> 
<a href=\"/print/pdf/node/";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null), 2, $this->source), "html", null, true);
        echo "\" class=\"button\"> Download Receipt </a>
<a href=\"/payment-details/";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null), 3, $this->source), "html", null, true);
        echo "\" class=\"button\">Payment Remarks </a>";
    }

    public function getTemplateName()
    {
        return "__string_template__9dae943288d5f69e1377ce27f429006596670f254e3bea235d68702d0fcfa1ab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<a href=\"/node/{{ nid }}/edit#edit-group-payment-details\" class=\"button\"> Update Payment Status </a> 
<a href=\"/print/pdf/node/{{ nid }}\" class=\"button\"> Download Receipt </a>
<a href=\"/payment-details/{{ nid }}\" class=\"button\">Payment Remarks </a>", "__string_template__9dae943288d5f69e1377ce27f429006596670f254e3bea235d68702d0fcfa1ab", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
