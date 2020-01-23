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

/* error.html.twig */
class __TwigTemplate_f3d685f14c286f379a6e97634e15c1f41d8669be6b0da547f78a17929b0fb597 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Erreur:(</title>
    <style>
        ::-moz-selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        ::selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        html {
            padding: 30px 10px;
            font-size: 20px;
            line-height: 1.4;
            color: #737373;
            background: #f0f0f0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        html,
        input {
            font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
        }
        body {
            max-width: 500px;
            _width: 500px;
            padding: 30px 20px 50px;
            border: 1px solid #b3b3b3;
            border-radius: 4px;
            margin: 0 auto;
            box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
            background: #fcfcfc;
        }
        h1 {
            margin: 0 10px;
            font-size: 31px;
            text-align: center;
        }
        h1 span {
            color: #bbb;
        }
        h3 {
            margin: 1.5em 0 0.5em;
        }
        p {
            margin: 1em 0;
        }
        ul {
            padding: 0 0 0 40px;
            margin: 1em 0;
        }
        .container {
            max-width: 380px;
            _width: 380px;
            margin: 0 auto;
        }
        /* google search */
        #goog-fixurl ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #goog-fixurl form {
            margin: 0;
        }
        #goog-wm-qt,
        #goog-wm-sb {
            border: 1px solid #bbb;
            font-size: 16px;
            line-height: normal;
            vertical-align: top;
            color: #444;
            border-radius: 2px;
        }
        #goog-wm-qt {
            width: 220px;
            height: 20px;
            padding: 5px;
            margin: 5px 10px 0 0;
            box-shadow: inset 0 1px 1px #ccc;
        }
        #goog-wm-sb {
            display: inline-block;
            height: 32px;
            padding: 0 10px;
            margin: 5px 0 0;
            white-space: nowrap;
            cursor: pointer;
            background-color: #f5f5f5;
            background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            *overflow: visible;
            *display: inline;
            *zoom: 1;
        }
        #goog-wm-sb:hover,
        #goog-wm-sb:focus {
            border-color: #aaa;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            background-color: #f8f8f8;
        }
        #goog-wm-qt:hover,
        #goog-wm-qt:focus {
            border-color: #105cb6;
            outline: 0;
            color: #222;
        }
        input::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Erreur d'authentification <span>:(</span></h1>
    <p>Pardon vous ne pouvez pas accéder à la plateforme!!</p>
    <p>Les problèmes possibles sont:</p>
    <ul>
        <li>Mot de passe incorrect</li>
        <li>Login incorrect</li>
        <li>Ou bien les deux à la fois!!</li>
    </ul>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Erreur:(</title>
    <style>
        ::-moz-selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        ::selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        html {
            padding: 30px 10px;
            font-size: 20px;
            line-height: 1.4;
            color: #737373;
            background: #f0f0f0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        html,
        input {
            font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
        }
        body {
            max-width: 500px;
            _width: 500px;
            padding: 30px 20px 50px;
            border: 1px solid #b3b3b3;
            border-radius: 4px;
            margin: 0 auto;
            box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
            background: #fcfcfc;
        }
        h1 {
            margin: 0 10px;
            font-size: 31px;
            text-align: center;
        }
        h1 span {
            color: #bbb;
        }
        h3 {
            margin: 1.5em 0 0.5em;
        }
        p {
            margin: 1em 0;
        }
        ul {
            padding: 0 0 0 40px;
            margin: 1em 0;
        }
        .container {
            max-width: 380px;
            _width: 380px;
            margin: 0 auto;
        }
        /* google search */
        #goog-fixurl ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #goog-fixurl form {
            margin: 0;
        }
        #goog-wm-qt,
        #goog-wm-sb {
            border: 1px solid #bbb;
            font-size: 16px;
            line-height: normal;
            vertical-align: top;
            color: #444;
            border-radius: 2px;
        }
        #goog-wm-qt {
            width: 220px;
            height: 20px;
            padding: 5px;
            margin: 5px 10px 0 0;
            box-shadow: inset 0 1px 1px #ccc;
        }
        #goog-wm-sb {
            display: inline-block;
            height: 32px;
            padding: 0 10px;
            margin: 5px 0 0;
            white-space: nowrap;
            cursor: pointer;
            background-color: #f5f5f5;
            background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            *overflow: visible;
            *display: inline;
            *zoom: 1;
        }
        #goog-wm-sb:hover,
        #goog-wm-sb:focus {
            border-color: #aaa;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            background-color: #f8f8f8;
        }
        #goog-wm-qt:hover,
        #goog-wm-qt:focus {
            border-color: #105cb6;
            outline: 0;
            color: #222;
        }
        input::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Erreur d'authentification <span>:(</span></h1>
    <p>Pardon vous ne pouvez pas accéder à la plateforme!!</p>
    <p>Les problèmes possibles sont:</p>
    <ul>
        <li>Mot de passe incorrect</li>
        <li>Login incorrect</li>
        <li>Ou bien les deux à la fois!!</li>
    </ul>
</div>
</body>
</html>", "error.html.twig", "D:\\ProjAWA_git\\ProjAWA-master\\templates\\error.html.twig");
    }
}
