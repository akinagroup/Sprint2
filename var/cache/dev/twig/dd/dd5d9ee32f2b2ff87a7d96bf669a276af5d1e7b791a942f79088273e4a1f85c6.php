<?php

/* Layout/index.html */
class __TwigTemplate_0bec48824916809962890b734cb89269465d855e06ca3a9d3aaee0704f2eef4c extends Twig_Template
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
        $__internal_21a71098066af68ab297e08b4dcf91575355c55b1c2bd0365197a67ec4ac15fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a71098066af68ab297e08b4dcf91575355c55b1c2bd0365197a67ec4ac15fa->enter($__internal_21a71098066af68ab297e08b4dcf91575355c55b1c2bd0365197a67ec4ac15fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Layout/index.html"));

        $__internal_8adab1b9571714a949243b822a946eb168f225b28f5c8052952244ca8eed7f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adab1b9571714a949243b822a946eb168f225b28f5c8052952244ca8eed7f60->enter($__internal_8adab1b9571714a949243b822a946eb168f225b28f5c8052952244ca8eed7f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Layout/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-lg-3\">

          <h1 class=\"my-4\">Shop Name</h1>
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">Category 1</a>
            <a href=\"#\" class=\"list-group-item\">Category 2</a>
            <a href=\"#\" class=\"list-group-item\">Category 3</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>

          <div class=\"row\">

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item One</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Two</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Three</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Four</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Five</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Six</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

</html>
";
        
        $__internal_21a71098066af68ab297e08b4dcf91575355c55b1c2bd0365197a67ec4ac15fa->leave($__internal_21a71098066af68ab297e08b4dcf91575355c55b1c2bd0365197a67ec4ac15fa_prof);

        
        $__internal_8adab1b9571714a949243b822a946eb168f225b28f5c8052952244ca8eed7f60->leave($__internal_8adab1b9571714a949243b822a946eb168f225b28f5c8052952244ca8eed7f60_prof);

    }

    public function getTemplateName()
    {
        return "Layout/index.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-lg-3\">

          <h1 class=\"my-4\">Shop Name</h1>
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">Category 1</a>
            <a href=\"#\" class=\"list-group-item\">Category 2</a>
            <a href=\"#\" class=\"list-group-item\">Category 3</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>

          <div class=\"row\">

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item One</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Two</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Three</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Four</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Five</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Six</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

</html>
", "Layout/index.html", "/var/www/html/GroupJoob/app/Resources/views/Layout/index.html");
    }
}
