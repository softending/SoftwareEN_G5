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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/edit.html.twig */
class __TwigTemplate_f7bac03f84e836dd3b962769eda50339 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["legacyBaseLayout"] = ((((array_key_exists("lightDisplay", $context)) ? (_twig_default_filter(($context["lightDisplay"] ?? null), false)) : (false))) ? ("light_display_layout.tpl") : ("layout.tpl"));
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combinationForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal combination-page", "novalidate" => "novalidate"]]);
        echo "
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationForm"] ?? null), 'row');
        echo "
  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combinationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/combination_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  89 => 40,  85 => 39,  79 => 36,  75 => 35,  70 => 34,  66 => 33,  60 => 30,  55 => 29,  51 => 28,  46 => 26,  44 => 25,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/edit.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\edit.html.twig");
    }
}
