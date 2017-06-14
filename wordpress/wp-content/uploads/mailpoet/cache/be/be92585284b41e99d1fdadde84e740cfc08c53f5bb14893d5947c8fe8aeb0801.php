<?php

/* update.html */
class __TwigTemplate_3c6af0aa2ecb86916814943164aa13df4d934e46cedc9a22cf994c4e798ea646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "update.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<style type=\"text/css\">
#mailpoet-changelog ul {
  list-style: disc;
  padding-left: 20px;
}
</style>

<div class=\"wrap about-wrap\">
  <h1>";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome to MailPoet");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "version", array()), "html", null, true);
        echo "</h1>

  <p class=\"about-text\">";
        // line 15
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thank you for helping us test and improve this new version of MailPoet. You're one of our extra-special beta testers. We really appreciate your help!");
        echo "
  </p>
  <div style=\"position: absolute; top: .2em; right: 0;\"><img style=\"border: 0 !important;\" src=\"";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("welcome_template/mailpoet-logo.png");
        echo "\" alt=\"MailPoet Logo\" /></div>

  <h2 class=\"nav-tab-wrapper wp-clearfix\">
    <a href=\"admin.php?page=mailpoet-welcome\" class=\"nav-tab\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome");
        echo "</a>
    <a href=\"admin.php?page=mailpoet-update\" class=\"nav-tab nav-tab-active\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("What's New");
        echo "</a>
  </h2>

  <div id=\"mailpoet-changelog\" clas=\"feature-section one-col\">
    <h2>";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("List of Changes");
        echo "</h2>
    ";
        // line 26
        if ((isset($context["changelog"]) ? $context["changelog"] : null)) {
            // line 27
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changelog"]) ? $context["changelog"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "        <h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "version", array()), "html", null, true);
                echo "</h3>
        <ul>
          ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "changes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["change"]) {
                    // line 31
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["change"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['change'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
        <br>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "      <p style=\"text-align: center\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("See readme.txt for a changelog.");
            echo "</p>
    ";
        }
        // line 39
        echo "  </div>

  <hr>

  <div clas=\"feature-section one-col\">
    <br>
    <p style=\"text-align: center\"><a class=\"button button-primary\" href=\"admin.php?page=mailpoet-newsletters\">";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Awesome! Now, take me to MailPoet");
        echo " &rarr;</a> <a class=\"button button-secondary\" href=\"https://wordpress.org/plugins/mailpoet/changelog/\" target=\"_blank\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all changes");
        echo " &rarr;</a></p>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  118 => 39,  112 => 37,  109 => 36,  101 => 33,  92 => 31,  88 => 30,  82 => 28,  77 => 27,  75 => 26,  71 => 25,  64 => 21,  60 => 20,  54 => 17,  49 => 15,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "update.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\update.html");
    }
}
