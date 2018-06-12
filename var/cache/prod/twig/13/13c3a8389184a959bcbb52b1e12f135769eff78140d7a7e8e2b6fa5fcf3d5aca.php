<?php

/* AppBundle:Info:clusterInfo.html.twig */
class __TwigTemplate_02fb80af72b49fd03ea18ec1424cec428ab8fb33c941dfec5824f38449b8c0a5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("welcomeClusterInfo"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"col-xs-12\" style=\"padding:0px 50px 50px 50px;\">
        <p><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.intro"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.text1"), "html", null, true);
        echo "</p>
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.text2"), "html", null, true);
        echo "</p>
        <br>
        <p><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.hardware"), "html", null, true);
        echo "</b></p>
        <ul>
            <li>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.nodes"), "html", null, true);
        echo "</li>
            <li>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.cores"), "html", null, true);
        echo "</li>
            <ul>
                <li>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.cores1"), "html", null, true);
        echo "</li>
                <li>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.cores2"), "html", null, true);
        echo "</li>
            </ul>
";
        // line 19
        echo "            <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.memory"), "html", null, true);
        echo "</li>
            <ul>
                <li>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.memory1"), "html", null, true);
        echo "</li>
                <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.memory2"), "html", null, true);
        echo "</li>
                <li>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.memory3"), "html", null, true);
        echo "</li>
            </ul>
            <li>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacity"), "html", null, true);
        echo "</li>
            <ul>
                <li>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacity1"), "html", null, true);
        echo "</li>
                <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacity2"), "html", null, true);
        echo "</li>
                <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacity3"), "html", null, true);
        echo "</li>
            </ul>
";
        // line 32
        echo "            <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacityExtra"), "html", null, true);
        echo "</li>
            <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.capacityShared"), "html", null, true);
        echo "</li>
            <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.queue"), "html", null, true);
        echo "</li>
            <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.os"), "html", null, true);
        echo "</li>
        </ul>
        <br>
        <p><b>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm1"), "html", null, true);
        echo "</p>
        <ul>
            <li>
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.day");
        echo "
                <div class=\"commandElement\">
                    <div class=\"well\">&gt;";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.day.example"), "html", null, true);
        echo "</div>
                </div>
            </li>
            <li>
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.week");
        echo "
                <div class=\"commandElement\">
                    <div class=\"well\">&gt;";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.week.example"), "html", null, true);
        echo "</div>
                </div>
            </li>
            <li>
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.week2");
        echo "
                <div class=\"commandElement\">
                    <div class=\"well\">&gt;";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.week2.example"), "html", null, true);
        echo "</div>
                </div>
            </li>
            <li>
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.month");
        echo "
                <div class=\"commandElement\">
                    <div class=\"well\">&gt;";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.slurm.month.example"), "html", null, true);
        echo "</div>
                </div>
            </li>
        </ul>
        <br>
        <p><b>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint"), "html", null, true);
        echo "</b></p>
        <p>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint1"), "html", null, true);
        echo "</p>
        <ul>
            <li>
                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.set1");
        echo "
            </li>
            <li>
                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.web");
        echo "
            </li>
            <li>
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.gaussian");
        echo "
            </li>
            <li>
                ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.gpu");
        echo "
            </li>
            <li>
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.set2");
        echo "
            </li>
        </ul>
        <div class=\"commandElement\">
            <div class=\"well\">&gt;";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.constraint.example"), "html", null, true);
        echo "</div>
        </div>
        <br>
        <p><b>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.software"), "html", null, true);
        echo "</b></p>
        <ul>
            <li>
                <b>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.bioinformatics"), "html", null, true);
        echo "</b>
                <ul>
                    <li>​bedtools - v2.18</li>
                    <li>Blast - v2.2.10</li>
                    <li>Blast+ - v2.6</li>
                    <li>​Bowtie - v1.0.0</li>
                    <li>​TransDecoder - v3.0</li>
                    <li>Trinity - v2.4</li>
                    <li>Trinotate - v3.0</li>
                </ul>
            </li>
            
        </ul>
        <br>
        <p><b>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.programmingLanguagues"), "html", null, true);
        echo "</b></p>
        <ul>
            <li>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.java"), "html", null, true);
        echo "</li>
            <li>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.perl"), "html", null, true);
        echo "</li>
            <li>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.php"), "html", null, true);
        echo "</li>
            <li>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.python"), "html", null, true);
        echo "</li>
";
        // line 114
        echo "        </ul>
        <br>
        <p><b>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.parallel"), "html", null, true);
        echo "</b></p>
        <ul>
            <li>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.OPENMPI"), "html", null, true);
        echo "</li>
        </ul>
        <br>
        <p>";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.extraInfo");
        echo " <img style=\"width:150px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" /></p>
        <p>";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clusterInfo.extraInfoTemp");
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Info:clusterInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 122,  287 => 121,  281 => 118,  276 => 116,  272 => 114,  268 => 112,  264 => 111,  260 => 110,  256 => 109,  251 => 107,  234 => 93,  228 => 90,  222 => 87,  215 => 83,  209 => 80,  203 => 77,  197 => 74,  191 => 71,  185 => 68,  181 => 67,  173 => 62,  168 => 60,  161 => 56,  156 => 54,  149 => 50,  144 => 48,  137 => 44,  132 => 42,  126 => 39,  122 => 38,  116 => 35,  112 => 34,  108 => 33,  103 => 32,  98 => 29,  94 => 28,  90 => 27,  85 => 25,  80 => 23,  76 => 22,  72 => 21,  66 => 19,  61 => 16,  57 => 15,  52 => 13,  48 => 12,  43 => 10,  38 => 8,  34 => 7,  30 => 6,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Info:clusterInfo.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/Info/clusterInfo.html.twig");
    }
}
