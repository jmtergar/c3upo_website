<?php

/* AppBundle:HowTo:clusterHowTo.html.twig */
class __TwigTemplate_b00e522947922eb45ebfc5bfea0777b8b92747f18c75ebd0ce7abaa4a1fbeb2f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.intro"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"col-xs-12\" style=\"padding:0px 50px 50px 50px;\">
        <p><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text1"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text2");
        echo "</p>
        <br>
        <p><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text3"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text4");
        echo "</p>
        <div class=\"commandElement\">
            <div class=\"well\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.access"), "html", null, true);
        echo "</div>
        </div>
        <p>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text5");
        echo "</p>
        <br>
        <p><b>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text6"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text7");
        echo "</p>
        <br>
        <p>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text7b");
        echo "</p>
        <div class=\"commandElement\">
            <div class=\"well\">";
        // line 21
        echo nl2br($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.copyFiles"));
        echo "</div>
        </div>
        <p>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text7c");
        echo "</p>
        <br>
        <p><b>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text8"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.slurm");
        echo " <a href=\"https://slurm.schedmd.com/man_index.html\" target=\"_blank\"><b>SLURM</b></a>.</p>
        <ul>
            <li>
                <p>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text9");
        echo "</p>
                <div style=\"margin-left:20px;\">
                    <p>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text10");
        echo "</p>
                    <p>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text11");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.run");
        echo "</div>
                    </div>
                    <p>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text12");
        echo "</p>
                    <p>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text13");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 39
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.salloc"), "html", null, true));
        echo "</div>
                    </div>
                    <p>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text14");
        echo "</p>
                    <p>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text15");
        echo "</p>
                    <p>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text15Example1");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.sbatch");
        echo "</div>
                    </div>
                    <p>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text15Example2");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.sbatch2");
        echo "</div>
                    </div>
                    <p>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text15b");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.sbatch3");
        echo "</div>
                    </div>
                    <p>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text16");
        echo "</p>
                    <div class=\"commandElement\">
                        <div class=\"well\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.sbatch4");
        echo "</div>
                    </div>
                </div>
            </li>
            <li>
                <p>";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text17");
        echo "</p>
                <div class=\"commandElement\">
                    <div class=\"well\">";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.scancel");
        echo "</div>
                </div>
            </li>
            <li>
                <p>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text18");
        echo "</p>
                <div class=\"commandElement\">
                    <div class=\"well\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.squeue");
        echo "</div>
                </div>
            </li>
        </ul>
        <p><b>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text19"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text20");
        echo "</p>
        <ul>
            <li>
                <p>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text21");
        echo "</p>
                <div class=\"commandElement\">
                    <div class=\"well\">";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text22");
        echo "</div>
                </div>
                <p>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text23");
        echo "</p>
            </li>
            <li>
                <p>";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text24");
        echo "</p>
                <p>";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text25");
        echo "</p>
            </li>
            <li>
                <p>";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text26");
        echo "</p>
                <p>";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.text27");
        echo "</p>
            </li>
        </ul>
        
        <p>";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterHowTo.extraInfo");
        echo "  <img style=\"width:150px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" /></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:HowTo:clusterHowTo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  240 => 90,  236 => 89,  230 => 86,  226 => 85,  220 => 82,  215 => 80,  210 => 78,  204 => 75,  200 => 74,  193 => 70,  188 => 68,  181 => 64,  176 => 62,  168 => 57,  163 => 55,  158 => 53,  153 => 51,  148 => 49,  143 => 47,  138 => 45,  133 => 43,  129 => 42,  125 => 41,  120 => 39,  115 => 37,  111 => 36,  106 => 34,  101 => 32,  97 => 31,  92 => 29,  86 => 26,  82 => 25,  77 => 23,  72 => 21,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  48 => 12,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:HowTo:clusterHowTo.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/HowTo/clusterHowTo.html.twig");
    }
}
