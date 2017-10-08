<?php

/* index.html */
class __TwigTemplate_51f36a8ba0d78b9735509ce1ee496b1da8b6d3e3617f79f043a7b60c7032aafc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en-GB\">

<head>
    <title>BlackCMS: Welcome</title>
</head>

<body>
    My name is ";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo ", whats yours?
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\Winginx\\home\\localhost\\public_html\\BlackCMS\\resources\\templates\\test\\index.html");
    }
}
