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

/* @PrestaShop/Admin/Sell/Catalog/Stock/overview.html.twig */
class __TwigTemplate_74269e55279f070a5ae0be6b175ddccf extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Stock/overview.html.twig", 25);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/stock_page" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        if (($context["is_shop_context"] ?? null)) {
            // line 34
            echo "        <div id=\"stock-app\"></div>
    ";
        } else {
            // line 36
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that this page is available in a single shop context only. Switch context to work on it.", [], "Admin.Notifications.Info"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
    ";
        // line 44
        if (($context["is_shop_context"] ?? null)) {
            // line 45
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "

        ";
            // line 47
            $context["productId"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", [0 => "productId"], "method", false, false, false, 47)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", [0 => "productId"], "method", false, false, false, 47)) : (false));
            // line 48
            echo "        <script>
            var data = {
                baseUrl: '";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "getBasePath", [], "method", false, false, false, 50), "html", null, true);
            echo "',
                catalogUrl: '";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_catalog");
            echo "',
                stockUrl: '";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_stock_overview");
            echo "',
                stockExportUrl: '";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_products_export");
            echo "',
                stockImportUrl: '";
            // line 54
            echo $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminImport");
            echo "',
                apiStockUrl: '";
            // line 55
            ((($context["productId"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_product_combinations", ["productId" => ($context["productId"] ?? null)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_products"))));
            echo "',
                apiMovementsUrl: '";
            // line 56
            ((($context["productId"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_product_list_movements", ["productId" => ($context["productId"] ?? null)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_movements"))));
            echo "',
                employeesUrl: '";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_movements_employees");
            echo "',
                suppliersUrl: '";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_suppliers");
            echo "',
                categoriesUrl: '";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_categories");
            echo "',
                movementsTypesUrl: '";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_stock_list_movements_types", ["grouped" => true]);
            echo "',
                translationUrl: '";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_i18n_translations_list", ["page" => "stock"]);
            echo "',
                locale: '";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "locale", [], "any", false, false, false, 62), "html", null, true);
            echo "'
            }
        </script>

        ";
            // line 66
            if (($context["webpack_server"] ?? null)) {
                // line 67
                echo "            <script src=\"http://localhost:8080/stock.bundle.js\"></script>
        ";
            } else {
                // line 69
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/stock.bundle.js"), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 71
            echo "    ";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Stock/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 72,  173 => 71,  167 => 69,  163 => 67,  161 => 66,  154 => 62,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  122 => 54,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  102 => 48,  100 => 47,  94 => 45,  92 => 44,  89 => 43,  85 => 42,  77 => 37,  74 => 36,  70 => 34,  67 => 33,  63 => 32,  57 => 29,  52 => 28,  48 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Stock/overview.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Stock\\overview.html.twig");
    }
}
