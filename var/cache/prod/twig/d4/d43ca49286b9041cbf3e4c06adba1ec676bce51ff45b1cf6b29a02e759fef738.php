<?php

/* AppBundle:Registration:index.html.twig */
class __TwigTemplate_8e2427dca8b46ede9edb4e66dcb5f10c8ded04cbc52d7c28fa1dfd3f73b5e31d extends Twig_Template
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
        echo "<div class=\"";
        echo " row m-0\">
    <div class=\"col-xs-12\" style=\"padding:50px;\">
        <h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registerInfo"), "html", null, true);
        echo "</h3>
    </div>
    <div ";
        // line 5
        echo " class=\"col-xs-12\" style=\"padding:0px 50px 50px 50px;\">
        ";
        // line 6
        echo twig_include($this->env, $context, "AppBundle:Registration:registrationForm.html.twig");
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Registration:index.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/Registration/index.html.twig");
    }
}
