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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig */
class __TwigTemplate_4c40d0d40a25d0f2b6d649d4f9cd6738 extends Template
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
<div id=\"combinations-preloader\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" class=\"img-responsive mt-3 img-rtl\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/combinations.svg"), "html", null, true);
        echo "\">

    <p class=\"mt-4 showcase-list-card__header\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

    <div class=\"m-4 m-b4\">
      <div class=\"spinner spinner-primary\"></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 30,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\loading_state.html.twig");
    }
}
