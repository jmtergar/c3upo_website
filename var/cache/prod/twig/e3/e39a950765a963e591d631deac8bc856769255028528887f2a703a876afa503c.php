<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_4ec8526cec43d4fda890bdf13b2d352210a511233af3a4396aefca7d44d0874d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'contentSection' => array($this, 'block_contentSection'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        echo "    
    ";
        // line 4
        $this->displayParentBlock("css", $context, $blocks);
        echo "    
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <!-- Success section -->
    <div id='alertSectionContent' class=\"m-0\" style=\"margin-top:-17px;\">
        <div class=\"\" id=\"alertSection\">
            <div id=\"successSection\" class=\"alert alert-info alert-dismissible\" style=\"display:none;\"></div>
            <div id=\"errorSection\" class=\"alert alert-danges alert-dismissible\" style=\"display:none;\"></div>
        </div>
    </div>
    
    <div id=\"wrapper\">
        ";
        // line 21
        $this->displayBlock('contentSection', $context, $blocks);
        // line 24
        echo "    </div>
";
    }

    // line 21
    public function block_contentSection($context, array $blocks = array())
    {
        // line 22
        echo "
        ";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "    
";
    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  82 => 27,  77 => 22,  74 => 21,  69 => 24,  67 => 21,  56 => 12,  53 => 11,  46 => 8,  43 => 7,  37 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::base.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/base.html.twig");
    }
}
