<?php

/* AppBundle:Registration:registrationForm.html.twig */
class __TwigTemplate_b5513133461d2a800ce69985dc93358a5bbcd164bc875e92e0ff2d3d9d5cd9df extends Twig_Template
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
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formUser"]) ? $context["formUser"] : null), 'form_start');
        echo "

    <div>";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formUser"]) ? $context["formUser"] : null), 'errors');
        echo "</div>
    <div id='formNewUserErrorSection' style=\"margin-top:-20px; margin-bottom: 40px;\">
    ";
        // line 6
        if ( !$this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "vars", array()), "valid", array())) {
            // line 7
            echo "        <div class=\"alert alert-danger errorSection\" role=\"alert\">
            <div>";
            // line 8
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "name", array()), 'errors');
            echo "</div>
            <div>";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "lastname", array()), 'errors');
            echo "</div>
            <div>";
            // line 10
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "position", array()), 'errors');
            echo "</div>
            <div>";
            // line 11
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "phone", array()), 'errors');
            echo "</div>
            <div>";
            // line 12
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "email", array()), 'errors');
            echo "</div>
            <div>";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "usingTime", array()), 'errors');
            echo "</div>
";
            // line 15
            echo "            <div>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "centre", array()), 'errors');
            echo "</div>
            <div>";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "centre_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "department", array()), 'errors');
            echo "</div>
            <div>";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "department_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "group", array()), 'errors');
            echo "</div>
            <div>";
            // line 20
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupName_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "leader", array()), 'errors');
            echo "</div>
            <div>";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupLeader_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupCode_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupWebsite_tmp", array()), 'errors');
            echo "</div>
            <div>";
            // line 25
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "softwareSpecifications", array()), 'errors');
            echo "</div>
            <div>";
            // line 26
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "description", array()), 'errors');
            echo "</div>
            <div>";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "captchaCode", array()), 'errors');
            echo "</div>
        </div>
    ";
        }
        // line 30
        echo "    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "name", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "name", array()), 'widget');
        echo "
        </div>    
    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "lastname", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "lastname", array()), 'widget');
        echo "
        </div>    
    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "position", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "position", array()), 'widget');
        echo "
        </div>    
    </div>
        
    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "phone", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "phone", array()), 'widget');
        echo "
        </div>    
    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "email", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "email", array()), 'widget');
        echo "
        </div>    
    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "usingTime", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "usingTime", array()), 'widget');
        echo "
        </div>    
    </div>

    ";
        // line 94
        echo "
    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "centre", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-10  col-sm-10 col-md-5 col-lg-6\">
            <div class=\"centreSelector\">
                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "centre", array()), 'widget');
        echo "
            </div>
            <div class=\"centreInput\" style=\"display: none;\">
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "centre_tmp", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
            <div class=\"centreSelector\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('center', 1);\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("other"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"centreInput\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('center', 0);\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("existing"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
            
    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "department", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-10  col-sm-10 col-md-5 col-lg-6\">
            <div class=\"departmentSelector\">
                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "department", array()), 'widget');
        echo "
            </div>
            <div class=\"departmentInput\" style=\"display: none;\">
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "department_tmp", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
            <div class=\"departmentSelector\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('department', 1);\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("other"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"departmentInput\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('department', 0);\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("existing"), "html", null, true);
        echo "</button>
            </div>
        </div>   
    </div>
    
    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            <div class=\"groupSelector\">
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "group", array()), 'label');
        echo "
            </div>
            <div class=\"groupInput\" style=\"display: none;\">
                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupName_tmp", array()), 'label');
        echo "
                <div style='font-weight: lighter;'>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("groupName.info"), "html", null, true);
        echo "</div>
            </div>
        </label>
        <div class=\"col-xs-10  col-sm-10 col-md-5 col-lg-6\">
            <div class=\"groupSelector\">
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "group", array()), 'widget');
        echo "
            </div>
            <div class=\"groupInput\" style=\"display: none;\">
                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupName_tmp", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
            <div class=\"groupSelector\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('group', 1);\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("other"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"groupInput\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('group', 0);\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("existing"), "html", null, true);
        echo "</button>
            </div>
        </div>   
    </div>
            
    <div class=\"groupInput\" style=\"display: none;\">

        <div class=\"form-group row\">
            <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "leader", array()), 'label');
        echo "
            </label>
            <div class=\"col-xs-10  col-sm-10 col-md-5 col-lg-6\">
                <div class=\"leaderSelector\">
                    ";
        // line 175
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "leader", array()), 'widget');
        echo "
                </div>
                <div class=\"leaderInput\" style=\"display: none;\">
                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupLeader_tmp", array()), 'widget');
        echo "
                </div>
            </div> 
            <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                <div class=\"leaderSelector\">
                    <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('leader', 1);\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("other"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"leaderInput\" style=\"display: none;\">
                    <button type=\"button\" class=\"btn btn-primary\" style=\"width:100%;\" onclick=\"changeOption('leader', 0);\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("existing"), "html", null, true);
        echo "</button>
                </div>
            </div>   
        </div>

        <div class=\"form-group row\">
            <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupCode_tmp", array()), 'label');
        echo "
            </label>
            <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupCode_tmp", array()), 'widget');
        echo "
            </div>    
        </div>

        <div class=\"form-group row\">
            <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
                ";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupWebsite_tmp", array()), 'label');
        echo "
            </label>
            <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "groupWebsite_tmp", array()), 'widget');
        echo "
            </div>    
        </div>
    </div>
            
    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "softwareSpecifications", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "softwareSpecifications", array()), 'widget');
        echo "
        </div>    
    </div>

    <div class=\"form-group row\">
        <label class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 control-label\">
            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "description", array()), 'label');
        echo "
        </label>
        <div class=\"col-xs-12  col-sm-12 col-md-7 col-lg-8\">
            ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "description", array()), 'widget');
        echo "
        </div>    
    </div>
        
    <div class=\"form-group row\">
        <div id=\"captchaCode\" class=\"col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\" style=\"text-align:center;\">
            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "captchaCode", array()), 'widget');
        echo "
        </div>    
    </div>
        
    <div class=\"form-group row\">
        <div class=\"col-xs-12 controls\">
            ";
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "save", array()), 'widget');
        echo "
        </div>    
    </div>
          
    <div class='m-b-10'><span class='requiredField'>*</span> ";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("requiredField"), "html", null, true);
        echo "</div>
    ";
        // line 245
        echo "    
";
        // line 246
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formUser"]) ? $context["formUser"] : null), 'form_end');
        echo "

<script type=\"text/javascript\">
    \$(document).ready(function(){
        
        
        \$(";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "vars", array()), "name", array()), "html", null, true);
        echo ").submit(function(e){
            e.preventDefault();
            var formSerialize = \$(this).serialize();
            var url = \$(";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : null), "vars", array()), "name", array()), "html", null, true);
        echo ").prop('action');
            \$.post(url, formSerialize, function(theResponse){
                \$('#registerSection').html(theResponse);
                \$('html,body').animate({
                    scrollTop: \$(\"#formNewUserErrorSection\").offset().top - 220},
                'slow');
            });
        });

        ";
        // line 264
        if (((isset($context["error"]) ? $context["error"] : null) == false)) {
            // line 265
            echo "                \$('#successSection').html('";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "');
                \$('#successSection').css('display', 'block');
                setTimeout(function(){
                    \$('#successSection').html('');
                    \$('#successSection').css('display', 'none');
                }, 12000);
        ";
        }
        // line 272
        echo "            
        //when the page is loaded we have to restore the new centre / department / group view
        changeOption('center', \$('#user_newCentre').val());
        changeOption('department', \$('#user_newDepartment').val());
        changeOption('group', \$('#user_newGroup').val());
        changeOption('leader', \$('#user_newLeader').val());
    });
    
    function changeOption(element, command){
        command = parseInt(command);
        switch(element){
            case 'center':
                \$('#user_newCentre').val(command);
                if(command){
                    \$('.centreSelector').css('display', 'none');
                    \$('.centreSelector select').val('');
                    \$('.centreInput').css('display', 'block');
                    return true;
                }
                \$('.centreSelector').css('display', 'block');
                \$('.centreInput').css('display', 'none');
                \$('.centreInput input').val('');
                break;
            case 'department':
                \$('#user_newDepartment').val(command);
                if(command){
                    \$('.departmentSelector').css('display', 'none');
                    \$('.departmentSelector select').val('');
                    \$('.departmentInput').css('display', 'block');
                    return true;
                }
                \$('.departmentSelector').css('display', 'block');
                \$('.departmentInput').css('display', 'none');
                \$('.departmentInput input').val('');
                break;
            case 'group':
                \$('#user_newGroup').val(command);
                if(command){
                    \$('.groupSelector').css('display', 'none');
                    \$('.groupSelector select').val('');
                    \$('.groupInput').css('display', 'block');
                    return true;
                }
                \$('.groupSelector').css('display', 'block');
                \$('.groupInput').css('display', 'none');
                \$('.groupInput input').val('');
                break;
            case 'leader':
                \$('#user_newLeader').val(command);
                if(command){
                    \$('.leaderSelector').css('display', 'none');
                    \$('.leaderSelector select').val('');
                    \$('.leaderInput').css('display', 'block');
                    return true;
                }
                \$('.leaderSelector').css('display', 'block');
                \$('.leaderInput').css('display', 'none');
                \$('.leaderInput input').val('');
                break;
        }
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:registrationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 272,  490 => 265,  488 => 264,  476 => 255,  470 => 252,  461 => 246,  458 => 245,  454 => 240,  447 => 236,  438 => 230,  429 => 224,  423 => 221,  414 => 215,  408 => 212,  398 => 205,  392 => 202,  383 => 196,  377 => 193,  367 => 186,  361 => 183,  353 => 178,  347 => 175,  340 => 171,  328 => 162,  322 => 159,  314 => 154,  308 => 151,  300 => 146,  296 => 145,  290 => 142,  279 => 134,  273 => 131,  265 => 126,  259 => 123,  252 => 119,  242 => 112,  236 => 109,  228 => 104,  222 => 101,  215 => 97,  210 => 94,  203 => 82,  197 => 79,  188 => 73,  182 => 70,  173 => 64,  167 => 61,  158 => 55,  152 => 52,  143 => 46,  137 => 43,  128 => 37,  122 => 34,  116 => 30,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  61 => 15,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Registration:registrationForm.html.twig", "/opt/lampp/htdocs/c3upo/src/AppBundle/Resources/views/Registration/registrationForm.html.twig");
    }
}
