<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_bc1e114841c047325b16320edb60f1ac9383041bcc4d1f19747f2f1fb75f0224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle::index.html.twig", 1);
        $this->blocks = array(
            'contentSection' => array($this, 'block_contentSection'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentSection($context, array $blocks = array())
    {
        echo " 
    <div class=\"row m-0\">
        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-5 col-xs-offset-1\">
            <ul class=\"nav nav-stacked\" id=\"clusterInfoTabs\">
                <li class=\"active\"><a data-toggle=\"tab\" href=\"#clusterInfo\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo"), "html", null, true);
        echo "</a></li>
                <li><a data-toggle=\"tab\" href=\"#clusterUse\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterUsage"), "html", null, true);
        echo "</a></li>
                <li><a data-toggle=\"tab\" href=\"#register\" id=\"loadRegistration\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterRegistration"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-5\" style=\"margin-left:-13px;\">
            <div class=\"tab-content\" id=\"clusterInfoSection\">
                <span class=\"activeArrow\"></span>
                <div id=\"clusterInfo\" class=\"tab-pane fade tabContent active in\">
                    ";
        // line 16
        echo twig_include($this->env, $context, "AppBundle:Info:clusterInfo.html.twig");
        echo "
                </div>
                <div id=\"clusterUse\" class=\"tab-pane fade tabContent\">
                    ";
        // line 19
        echo twig_include($this->env, $context, "AppBundle:HowTo:clusterHowTo.html.twig");
        echo "
                </div>
                <div id=\"register\" class=\"tab-pane fade tabContent\">
                    <div id=\"loadingSection\">
                        <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
                        <span class=\"sr-only\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading"), "html", null, true);
        echo "</span>
                    </div>
                    <div id=\"registerSection\"></div>
                </div>
            </div>
            
        </div>
        
    </div>
    
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#loadRegistration').click(function(){
                \$('#loadingSection').css('display', 'block');
                \$('#registerSection').html('');
                \$.post('";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrationRegister");
        echo "',null, function(theResponse){
                    \$('#loadingSection').css('display', 'none');
                    \$('#registerSection').html(theResponse);
                });
            });
            
            \$('#clusterInfoTabs li').on('click', function(event){
";
        // line 47
        echo "                var top = (\$(this).offset().top-100) + 'px';
                \$('.activeArrow').css('top', top);
                
            });
        });
        function openTab(element){
            \$('#'+element).trigger('click');
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  86 => 39,  68 => 24,  60 => 19,  54 => 16,  44 => 9,  40 => 8,  36 => 7,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::index.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/index.html.twig");
    }
}
