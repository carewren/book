<?php

/* partials/footer.html.twig */
class __TwigTemplate_ecdc71629dd92bf2dd19a1bc2f5cbbaf835b128347bc57fefef7d638ab54be9d extends Twig_Template
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
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><i class=\"fas fa-code\"></i> with <i class=\"fas fa-band-aid\"></i> + <i class=\"far fa-grin-beam-sweat\"></i> + <i class=\"far fa-sad-cry\"></i> by KM, <i class=\"far fa-copyright\"></i> 2018</p>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><i class=\"fas fa-code\"></i> with <i class=\"fas fa-band-aid\"></i> + <i class=\"far fa-grin-beam-sweat\"></i> + <i class=\"far fa-sad-cry\"></i> by KM, <i class=\"far fa-copyright\"></i> 2018</p>
    </section>
</section>
", "partials/footer.html.twig", "/Applications/MAMP/htdocs/karenmcclellan/grav-admin/user/themes/Quark/templates/partials/footer.html.twig");
    }
}
