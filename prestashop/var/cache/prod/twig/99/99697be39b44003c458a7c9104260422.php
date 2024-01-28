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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig */
class __TwigTemplate_b4188f9a3eed9c134e813ed828d609d2 extends Template
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
        // line 25
        echo "
<div id=\"combinations-empty-filters-state\" class=\"text-center grid-table-empty\">
  <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
  <p class=\"mb-2\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records found", [], "Admin.Global"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\empty_filters_state.html.twig");
    }
}
