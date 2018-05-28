<?php

/* CaptchaBundle::captcha.html.twig */
class __TwigTemplate_05b6460cbcdcf9aab0969c52dd68c5eb9db7b12eeb85b985f66a05cfbb27dc8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["addLayoutStylesheetInclude"]) ? $context["addLayoutStylesheetInclude"] : null)) {
            // line 4
            echo "            <link href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
            echo "\" rel=\"stylesheet\" />
        ";
        }
        // line 6
        echo "
        ";
        // line 7
        echo (isset($context["captcha_html"]) ? $context["captcha_html"] : null);
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("id" => (isset($context["user_input_id"]) ? $context["user_input_id"] : null), "value" => ""));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CaptchaBundle::captcha.html.twig", "/opt/lampp/htdocs/c3upo/vendor/captcha-com/symfony-captcha-bundle/Resources/views/captcha.html.twig");
    }
}
