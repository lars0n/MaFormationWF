<?php

/* subscribers/importExport/import/step3.html */
class __TwigTemplate_18ae5130d7a549d27a1f2bab4889e0c65811da044baa6a62d476cb24dcc1e67c extends Twig_Template
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
        echo "<div id=\"step3\" class=\"mailpoet_hidden\">
  <div id=\"subscribers_data_import_results\" class=\"updated mailpoet_hidden\">
    <!-- Template data -->
  </div>

  <table class=\"mailpoet_subscribers form-table\">
    <tbody>
    <tr>
      <th scope=\"row\">
        <a href=\"javascript:;\"
         class=\"button-primary wysija mailpoet_import_again\">";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Import again");
        echo "</a>
        &nbsp;&nbsp;
        <a href=\"javascript:;\"
         class=\"button-primary wysija mailpoet_view_subscribers\">";
        // line 14
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View subscribers");
        echo "</a>
      </th>
    </tr>
    </tbody>
  </table>

  <script id=\"subscribers_data_import_results_template\" type=\"text/x-handlebars-template\">
      {{#if created}}
      <p>{{{created}}}</p>
      {{/if}}
      {{#if updated}}
      <p>{{{updated}}}</p>
      {{/if}}
      {{#if no_action}}
      <p>";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No subscribers were added or updated.");
        echo "</p>
      {{/if}}
      {{#if added_to_segment_with_welcome_notification}}
      <p>";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Note: Imported subscribers will not receive any Welcome Emails");
        echo "</p>
      {{/if}}
  </script>
</div>";
    }

    public function getTemplateName()
    {
        return "subscribers/importExport/import/step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  54 => 28,  37 => 14,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subscribers/importExport/import/step3.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\subscribers\\importExport\\import\\step3.html");
    }
}
