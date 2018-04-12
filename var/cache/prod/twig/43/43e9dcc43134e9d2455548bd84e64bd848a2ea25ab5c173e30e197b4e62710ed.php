<?php

/* ::header.html.twig */
class __TwigTemplate_511d12d1f85cbd21d8268e6ce8b7296a8f5fb2f76db265d1375f4111fbbbe585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-light bg-faded personalHeader\">
  <a class=\"navbar-brand\" href=\"#\" style=\"height: 100%;width:100%;\">
    <div class=\"pull-right\" style=\"margin-right:40px;\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/upo.png"), "html", null, true);
        echo "\" class=\"d-inline-block align-top img-responsive\" alt=\"\" style=\"max-height: 52px;\">
    </div>
    <div class=\"pull-right\" style=\"margin-right:40px;\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/csic.png"), "html", null, true);
        echo "\" class=\"d-inline-block align-top img-responsive\" alt=\"\" style=\"max-height: 50px;\">
    </div>
    <div class=\"pull-left title\"><i>C3UPO</i></div>
  </a>
</nav>";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::header.html.twig", "/opt/lampp/htdocs/c3upo/app/Resources/views/header.html.twig");
    }
}
