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

/* @PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig */
class __TwigTemplate_af8e73090ed34cf4fddb1fa9882d5db6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'category_tree_form' => [$this, 'block_category_tree_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div class=\"product-page-v2\">
  ";
        // line 38
        $context["productType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 38), "product_type", [], "any", false, false, false, 38);
        // line 39
        echo "  ";
        $context["productId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 39), "product_id", [], "any", false, false, false, 39);
        // line 40
        echo "  ";
        $context["shopId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 40), "shop_id", [], "any", false, false, false, 40);
        // line 41
        echo "  ";
        // line 42
        echo "  ";
        $context["forceDefaultActive"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 42), "force_default_active", [], "any", false, false, false, 42);
        // line 43
        echo "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 45
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreProductHeader(($context["productId"] ?? null));
        echo "
  </div>

  ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal product-page justify-content-md-center product-form", "novalidate" => "novalidate", "data-product-id" =>         // line 51
($context["productId"] ?? null), "data-shop-id" =>         // line 52
($context["shopId"] ?? null), "data-product-type" =>         // line 53
($context["productType"] ?? null), "data-force-default-active" =>         // line 54
($context["forceDefaultActive"] ?? null)]]);
        // line 55
        echo "

  ";
        // line 58
        echo "  ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 61
        echo "
  ";
        // line 63
        echo "  ";
        $this->displayBlock('product_footer', $context, $blocks);
        // line 70
        echo "
  ";
        // line 71
        $this->displayBlock("session_alert", $context, $blocks);
        echo "

  <div id=\"contextual-notification-box\"></div>

  ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["productForm"] ?? null), 'widget');
        echo "

  ";
        // line 77
        $this->displayBlock('product_rest', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        $this->displayBlock('category_tree_form', $context, $blocks);
        // line 84
        echo "</div>
";
    }

    // line 58
    public function block_product_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" => ($context["productForm"] ?? null)]);
        echo "
  ";
    }

    // line 63
    public function block_product_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 65
($context["productForm"] ?? null), "editable" =>         // line 66
($context["editable"] ?? null), "productId" =>         // line 67
($context["productId"] ?? null)]);
        // line 68
        echo "
  ";
    }

    // line 77
    public function block_product_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 81
    public function block_category_tree_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryTreeSelectorForm"] ?? null), 'row');
        echo "
  ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 90,  202 => 88,  198 => 87,  191 => 82,  187 => 81,  180 => 78,  176 => 77,  171 => 68,  169 => 67,  168 => 66,  167 => 65,  165 => 64,  161 => 63,  154 => 59,  150 => 58,  145 => 84,  143 => 81,  140 => 80,  138 => 77,  133 => 75,  126 => 71,  123 => 70,  120 => 63,  117 => 61,  114 => 58,  110 => 55,  108 => 54,  107 => 53,  106 => 52,  105 => 51,  104 => 48,  98 => 45,  94 => 43,  91 => 42,  89 => 41,  86 => 40,  83 => 39,  81 => 38,  78 => 37,  74 => 36,  68 => 33,  62 => 29,  57 => 28,  53 => 27,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\edit.html.twig");
    }
}
