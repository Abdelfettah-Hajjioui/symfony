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

/* welcome.html.twig */
class __TwigTemplate_97991ed134bde30cfae129f9835c06e449e802ca8db666454cdf51bc138b83d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome.html.twig"));

        // line 1
        echo "<?php
session_start();

?>
\t\t<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login V11</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--===============================================================================================-->
\t<link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/fsont-awesome-4.7.0/css/font-awesome.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/Linearicons-Free-v1.0.0/icon-font.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animate/animate.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/css-hamburgers/hamburgers.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/select2/select2.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"util.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">
\t<!--===============================================================================================-->
</head>
<body>

<div class=\"limiter\">
\t<div class=\"container-login100\">
\t\t<div class=\"wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30\">
\t\t\t<form class=\"login100-form validate-form\" method=\"POST\" action=\"/login\">
\t\t\t\t
                    <span>
                    <img src=\"service.png\" height=\"110\" width=\"110\" class=\"center\"><br>
                    </span>
\t\t\t\t<span class=\"login100-form-title p-b-55\">
\t\t\t\t\t\tLogin
\t\t\t\t\t</span>

\t\t\t\t<div class=\"wrap-input100 validate-input m-b-16\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"login\" placeholder=\"Email\">
\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-envelope\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-input100 validate-input m-b-16\" data-validate = \"Password is required\">
\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-lock\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"contact100-form-checkbox m-l-4\">
                    <input class=\"input-checkbox100\" id=\"ckb1\" type=\"checkbox\" name=\"remember-me\">
                    <label class=\"label-checkbox100\" for=\"ckb1\">
                        Remember me
                    </label>
                </div> -->

\t\t\t\t<div class=\"container-login100-form-btn p-t-25\">
\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\tLogin
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"text-center w-full p-t-42 p-b-22\">
                    <span class=\"txt1\">
                        Or login with
                    </span>
                </div>
                <a href=\"#\" class=\"btn-face m-b-10\">
                    <i class=\"fa fa-facebook-official\"></i>
                    Facebook
                </a>
                <a href=\"#\" class=\"btn-google m-b-10\">
                    <img src=\"images/icons/icon-google.png\" alt=\"GOOGLE\">
                    Google
                </a>
                <div class=\"text-center w-full p-t-115\">
                    <span class=\"txt1\">
                        Not a member?
                    </span>
                    <a class=\"txt1 bo1 hov1\" href=\"#\">
                        Sign up now
                    </a>
                </div> -->
\t\t\t</form>
\t\t</div>
\t</div>
</div>




<!--===============================================================================================-->
<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
<script src=\"vendor/bootstrap/js/popper.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
<script src=\"vendor/select2/select2.min.js\"></script>
<!--===============================================================================================-->
<script src=\"js/main.js\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "welcome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
session_start();

?>
\t\t<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login V11</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--===============================================================================================-->
\t<link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/fsont-awesome-4.7.0/css/font-awesome.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/Linearicons-Free-v1.0.0/icon-font.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animate/animate.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/css-hamburgers/hamburgers.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/select2/select2.min.css\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"util.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">
\t<!--===============================================================================================-->
</head>
<body>

<div class=\"limiter\">
\t<div class=\"container-login100\">
\t\t<div class=\"wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30\">
\t\t\t<form class=\"login100-form validate-form\" method=\"POST\" action=\"/login\">
\t\t\t\t
                    <span>
                    <img src=\"service.png\" height=\"110\" width=\"110\" class=\"center\"><br>
                    </span>
\t\t\t\t<span class=\"login100-form-title p-b-55\">
\t\t\t\t\t\tLogin
\t\t\t\t\t</span>

\t\t\t\t<div class=\"wrap-input100 validate-input m-b-16\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"login\" placeholder=\"Email\">
\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-envelope\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-input100 validate-input m-b-16\" data-validate = \"Password is required\">
\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-lock\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"contact100-form-checkbox m-l-4\">
                    <input class=\"input-checkbox100\" id=\"ckb1\" type=\"checkbox\" name=\"remember-me\">
                    <label class=\"label-checkbox100\" for=\"ckb1\">
                        Remember me
                    </label>
                </div> -->

\t\t\t\t<div class=\"container-login100-form-btn p-t-25\">
\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\tLogin
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"text-center w-full p-t-42 p-b-22\">
                    <span class=\"txt1\">
                        Or login with
                    </span>
                </div>
                <a href=\"#\" class=\"btn-face m-b-10\">
                    <i class=\"fa fa-facebook-official\"></i>
                    Facebook
                </a>
                <a href=\"#\" class=\"btn-google m-b-10\">
                    <img src=\"images/icons/icon-google.png\" alt=\"GOOGLE\">
                    Google
                </a>
                <div class=\"text-center w-full p-t-115\">
                    <span class=\"txt1\">
                        Not a member?
                    </span>
                    <a class=\"txt1 bo1 hov1\" href=\"#\">
                        Sign up now
                    </a>
                </div> -->
\t\t\t</form>
\t\t</div>
\t</div>
</div>




<!--===============================================================================================-->
<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
<script src=\"vendor/bootstrap/js/popper.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
<script src=\"vendor/select2/select2.min.js\"></script>
<!--===============================================================================================-->
<script src=\"js/main.js\"></script>

</body>
</html>
", "welcome.html.twig", "D:\\ProjAWA_git\\ProjAWA-master\\templates\\welcome.html.twig");
    }
}
