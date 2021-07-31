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

/* themes/custom/bartik/templates/node--customer--pdf.html.twig */
class __TwigTemplate_d60ca211e19c3c2d9b814d0dfa87e84a9beceebdb697f0d17cfc5a6196606f8a extends \Twig\Template
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
        // line 69
        echo "
";
        // line 70
        $context["current_date"] = twig_date_format_filter($this->env, "now", "d, F Y");
        // line 71
        $context["joining_date"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_internet_start_date", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71);
        // line 72
        $context["joining_day"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["joining_date"] ?? null), 72, $this->source), "+1 month"), "d");
        // line 73
        $context["current_month"] = twig_date_format_filter($this->env, "now", "m");
        // line 74
        $context["next_month"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 month"), "m");
        // line 75
        $context["current_year"] = twig_date_format_filter($this->env, "now", "Y");
        // line 76
        $context["from_date"] = (((($this->sandbox->ensureToStringAllowed(($context["joining_day"] ?? null), 76, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["current_month"] ?? null), 76, $this->source)) . "/") . $this->sandbox->ensureToStringAllowed(($context["current_year"] ?? null), 76, $this->source));
        // line 77
        $context["to_date"] = (((($this->sandbox->ensureToStringAllowed(($context["joining_day"] ?? null), 77, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["next_month"] ?? null), 77, $this->source)) . "/") . $this->sandbox->ensureToStringAllowed(($context["current_year"] ?? null), 77, $this->source));
        // line 78
        echo "

<!-- set the Plan Type as Limited or Un-Limited -->
";
        // line 81
        $context["plan_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_choose_data_plan", [], "any", false, false, true, 81), "entity", [], "any", false, false, true, 81), "field_data_limited_unlimited", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81);
        // line 82
        if ((($context["plan_type"] ?? null) == 2)) {
            // line 83
            echo "    ";
            $context["plan_type_label"] = "Un-Limited";
        } else {
            // line 85
            echo "    ";
            $context["plan_type_label"] = "Limited";
        }
        // line 87
        echo "

<!-- http://demo.harnishdesign.net/html/koice/index.html -->
<!-- Container -->
<div class=\"container-fluid invoice-container sachin-node\">
    <!-- Header -->
    <header>
        <div class=\"row align-items-center\">
            <div class=\"col-sm-6 text-sm-left mb-3 mb-sm-0\">
                <img id=\"logo\" src=\"/sites/default/files/logo.jpeg\" title=\"SuperNet\" alt=\"SuperNet\" />
            </div>
            <div class=\"col-sm-5 text-sm-right\">
                <h4 class=\"text-7 mb-0\">Invoice</h4>
            </div>
        </div>
        <hr>
    </header>
    <!-- Main Content -->
    <main>
        <div class=\"row\">
            <div class=\"col-sm-5\"><strong>Date:</strong> ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_date"] ?? null), 107, $this->source), "html", null, true);
        echo " </div>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col-sm-5 text-sm-left order-sm-0\"> <strong>Invoiced To:</strong>
                <address>
                    Mr/Mrs. ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo " <br/>
                    ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_address", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
                </address>
            </div>
            <div class=\"col-sm-6 text-sm-right order-sm-1\"> <strong>Pay To:</strong>
                <address>
                    1st Floor, Shop No-28. Vitthal Arpan Society<br />
                    Akoli Road, Sai Nagar. Amravati-444607<br />
                    Email - unc.solution@gmail.com<br />
                    Mobile - 8855001033 / 9405585875
                </address>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"card-header\">
                        <tr>
                            <td class=\"col-3 border-0\"><strong>Plan Description</strong></td>
                            <td class=\"col-4 border-0\"><strong>Billing Period </strong></td>
                            <td class=\"col-2 text-center border-0\"><strong>Mode of Payment</strong></td>
                            <td class=\"col-1 text-center border-0\"><strong>Amount</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class=\"col-3 border-0\">";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_choose_data_plan", [], "any", false, false, true, 140), "entity", [], "any", false, false, true, 140), "field_plan_data", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo " Mbps, ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plan_type_label"] ?? null), 140, $this->source), "html", null, true);
        echo "</td>
                            <td class=\"col-4 border-0\">
                                ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["from_date"] ?? null), 142, $this->source), "html", null, true);
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["to_date"] ?? null), 142, $this->source), "html", null, true);
        echo "
                            </td>
                            <td class=\"col-2 text-center border-0\">";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["payment_mode"] ?? null), 144, $this->source), "html", null, true);
        echo " </td>
                            <td class=\"col-1 text-center border-0\"> <img class=\"currency\" src=\"/sites/default/files/rupees.png\" /> ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_choose_data_plan", [], "any", false, false, true, 145), "entity", [], "any", false, false, true, 145), "field_plan_price", [], "any", false, false, true, 145), "value", [], "any", false, false, true, 145), 145, $this->source), 2), "html", null, true);
        echo " </td>
                        </tr>
                        </tbody>
                        <tfoot class=\"card-footer\">
                        <tr>
                            <td colspan=\"3\" class=\"text-right\"><strong>Sub Total:</strong></td>
                            <td class=\"text-center\"> <img class=\"currency\" src=\"/sites/default/files/rupees.png\" /> ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_choose_data_plan", [], "any", false, false, true, 151), "entity", [], "any", false, false, true, 151), "field_plan_price", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151), 151, $this->source), 2), "html", null, true);
        echo " </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class=\"text-center mt-4\">
        <p class=\"text-1\"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
    </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/bartik/templates/node--customer--pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 151,  157 => 145,  153 => 144,  146 => 142,  139 => 140,  110 => 114,  106 => 113,  97 => 107,  75 => 87,  71 => 85,  67 => 83,  65 => 82,  63 => 81,  58 => 78,  56 => 77,  54 => 76,  52 => 75,  50 => 74,  48 => 73,  46 => 72,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}

{% set current_date  =  'now'|date('d, F Y')  %}
{% set joining_date  =  node.field_internet_start_date.value %}
{% set joining_day   =  joining_date|date_modify(\"+1 month\")|date(\"d\") %}
{% set current_month =  'now'|date('m') %}
{% set next_month    =  'now'|date_modify(\"+1 month\")|date(\"m\") %}
{% set current_year  =  'now'|date('Y') %}
{% set from_date     =  joining_day ~ '/' ~ current_month ~ '/' ~ current_year %}
{% set to_date       =  joining_day ~ '/' ~ next_month ~ '/' ~ current_year %}


<!-- set the Plan Type as Limited or Un-Limited -->
{% set plan_type =  node.field_choose_data_plan.entity.field_data_limited_unlimited.value %}
{% if (plan_type == 2) %}
    {% set plan_type_label = 'Un-Limited' %}
{% else %}
    {% set plan_type_label = 'Limited' %}
{% endif %}


<!-- http://demo.harnishdesign.net/html/koice/index.html -->
<!-- Container -->
<div class=\"container-fluid invoice-container sachin-node\">
    <!-- Header -->
    <header>
        <div class=\"row align-items-center\">
            <div class=\"col-sm-6 text-sm-left mb-3 mb-sm-0\">
                <img id=\"logo\" src=\"/sites/default/files/logo.jpeg\" title=\"SuperNet\" alt=\"SuperNet\" />
            </div>
            <div class=\"col-sm-5 text-sm-right\">
                <h4 class=\"text-7 mb-0\">Invoice</h4>
            </div>
        </div>
        <hr>
    </header>
    <!-- Main Content -->
    <main>
        <div class=\"row\">
            <div class=\"col-sm-5\"><strong>Date:</strong> {{ current_date }} </div>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col-sm-5 text-sm-left order-sm-0\"> <strong>Invoiced To:</strong>
                <address>
                    Mr/Mrs. {{ node.label }} <br/>
                    {{ node.field_address.value }}
                </address>
            </div>
            <div class=\"col-sm-6 text-sm-right order-sm-1\"> <strong>Pay To:</strong>
                <address>
                    1st Floor, Shop No-28. Vitthal Arpan Society<br />
                    Akoli Road, Sai Nagar. Amravati-444607<br />
                    Email - unc.solution@gmail.com<br />
                    Mobile - 8855001033 / 9405585875
                </address>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"card-header\">
                        <tr>
                            <td class=\"col-3 border-0\"><strong>Plan Description</strong></td>
                            <td class=\"col-4 border-0\"><strong>Billing Period </strong></td>
                            <td class=\"col-2 text-center border-0\"><strong>Mode of Payment</strong></td>
                            <td class=\"col-1 text-center border-0\"><strong>Amount</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class=\"col-3 border-0\">{{ node.field_choose_data_plan.entity.field_plan_data.value }} Mbps, {{ plan_type_label }}</td>
                            <td class=\"col-4 border-0\">
                                {{ from_date }} - {{ to_date }}
                            </td>
                            <td class=\"col-2 text-center border-0\">{{ payment_mode }} </td>
                            <td class=\"col-1 text-center border-0\"> <img class=\"currency\" src=\"/sites/default/files/rupees.png\" /> {{ node.field_choose_data_plan.entity.field_plan_price.value|number_format(2) }} </td>
                        </tr>
                        </tbody>
                        <tfoot class=\"card-footer\">
                        <tr>
                            <td colspan=\"3\" class=\"text-right\"><strong>Sub Total:</strong></td>
                            <td class=\"text-center\"> <img class=\"currency\" src=\"/sites/default/files/rupees.png\" /> {{ node.field_choose_data_plan.entity.field_plan_price.value|number_format(2) }} </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class=\"text-center mt-4\">
        <p class=\"text-1\"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
    </footer>
</div>
", "themes/custom/bartik/templates/node--customer--pdf.html.twig", "/Applications/MAMP/htdocs/supernet.com/web/themes/custom/bartik/templates/node--customer--pdf.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 82);
        static $filters = array("date" => 70, "date_modify" => 72, "escape" => 107, "number_format" => 145);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['date', 'date_modify', 'escape', 'number_format'],
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
