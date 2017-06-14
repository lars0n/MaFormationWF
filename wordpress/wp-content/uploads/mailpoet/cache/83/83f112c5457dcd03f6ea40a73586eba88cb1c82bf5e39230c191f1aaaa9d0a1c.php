<?php

/* subscribers/importExport/import/step2.html */
class __TwigTemplate_b56cbb63b1cabd9bef19d03ff2dc22d595f8cba80061539a9cc472de5a2d6ca7 extends Twig_Template
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
        echo "<div id=\"step2\" class=\"mailpoet_hidden\">
  <div id=\"subscribers_data_parse_results\">
    <!-- Template data -->
  </div>

  <script id=\"subscribers_data_parse_results_template\" type=\"text/x-handlebars-template\">
    <div class=\"error\">
      <p>{{{notice}}} <a class=\"mailpoet_subscribers_data_parse_results_details_show\" href=\"javascript:;\">";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show more details");
        echo "</a><p>
      <div class=\"mailpoet_subscribers_data_parse_results_details mailpoet_hidden\">
        <hr>
        {{#if duplicate}}
        <p>{{{duplicate}}}</p>
        {{/if}}
        {{#if invalid}}
        <p>{{{invalid}}}</p>
        {{/if}}
      </div>
    </div>
  </script>

  <div class=\"inside\">
    <br>
    <!-- Subscribers Data -->
    <div id=\"subscribers_data\">
      <table class=\"mailpoet_subscribers widefat fixed\">
        <!-- Template data -->
      </table>
    </div>

    <table class=\"mailpoet_subscribers form-table\">
      <tbody>
      <!-- MP3 Segments -->
      <tr class=\"mailpoet_segments mailpoet_hidden\">
        <th scope=\"row\">
          <label>
            ";
        // line 36
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Pick one or more list(s)");
        echo "
            <p class=\"description\">";
        // line 37
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Pick the list that you want to import these subscribers to.");
        echo "
          </label>
        </th>
        <td>
          <select id=\"mailpoet_segments_select\" data-placeholder=\"";
        // line 41
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "Verb");
        echo "\" multiple=\"multiple\"></select>
          <a href=\"javascript:;\" class=\"mailpoet_create_segment\">";
        // line 42
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Create a new list");
        echo "</a>
        </td>
      </tr>
      <tr class=\"mailpoet_no_segments mailpoet_hidden\">
        <th scope=\"row\">
          ";
        // line 47
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("To add subscribers to a mailing segment, [link]create a list[/link]."), array("[link]" => "<a href=\"javascript:;\" class=\"mailpoet_create_segment\">", "[/link]" => "</a>"));
        // line 54
        echo "
        </th>
      </tr>
      <tr>
        <th scope=\"row\">
          <label>
            ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Update existing subscribers' information");
        echo "
          </label>
        </th>
        <td>
          <label>
            <input type=\"radio\" name=\"subscriber_update_option\" value=\"yes\"
             checked><span>";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "</span>
          </label>
          <label>
            <input type=\"radio\" name=\"subscriber_update_option\"
             value=\"no\"><span>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</span>
          </label>
        </td>
      </tr>
      <tr>
        <th>
          <a href=\"javascript:;\" id=\"return_to_step1\"
             class=\"button-primary wysija button\">";
        // line 77
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Previous step");
        echo " </a>
          &nbsp;&nbsp;
          <a href=\"javascript:;\" id=\"step2_process\"
           class=\"button-primary wysija button-disabled\">";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next step");
        echo " </a>
        </th>
      </tr>
      </tbody>
    </table>

    <!-- subscribers data template -->
    <script id=\"subscribers_data_template\" type=\"text/x-handlebars-template\">
      <thead>
      <th>
        ";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Match data");
        echo "
      </th>
      {{#show_and_match_columns .}}
      {{#.}}
      <th>
        <select class=\"mailpoet_subscribers_column_data_match\" data-column-id=\"{{column_id}}\" data-validation-rule=\"false\" id=\"column_{{@index}}\">
      </th>
      {{/.}}
      {{/show_and_match_columns}}
      </thead>
      <tbody>
      {{> subscribers_data_template_partial}}
      </tbody>
    </script>

    <script id=\"subscribers_data_template_partial\" type=\"text/x-handlebars-template\">
      {{#if header}}
      <tr class=\"mailpoet_header\">
        <td></td>
        {{#header}}
        <td>
          {{this}}
        </td>
        {{/header}}
      </tr>
      {{/if}}
      {{#subscribers}}
      <tr>
        <td>
          {{calculate_index @index}}
        </td>
        {{#.}}
        <td>
          {{sanitize_data this}}
        </td>
        {{/.}}
      </tr>
      {{/subscribers}}
    </script>

    <!-- New segment template -->
    <script id=\"new_segment_template\" type=\"text/x-handlebars-template\">
      <p>
        <label>";
        // line 133
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Name");
        echo ":</label>
        <input id=\"new_segment_name\" type=\"text\" name=\"name\"/>
      </p>
      <p class=\"mailpoet_validation_error\" data-error=\"segment_name_required\">
        ";
        // line 137
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please specify a name.");
        echo "
      </p>
      <p class=\"mailpoet_validation_error\" data-error=\"segment_name_not_unique\">
        ";
        // line 140
        echo twig_escape_filter($this->env, sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("Another record already exists. Please specify a different \"%1\$s\"."), "name"), "html", null, true);
        echo "
      </p>
      <p>
        <label>";
        // line 143
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Description");
        echo ":</label>
        <br/>
        <textarea id=\"new_segment_description\" cols=\"40\" rows=\"3\" name=\"description\"/>
      </p>

      <hr/>

      <p class=\"mailpoet_align_right\">
        <input type=\"submit\" value=\"";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Done");
        echo "\" id=\"new_segment_process\"
         class=\"button-primary \"/>
        <input type=\"submit\" value=\"";
        // line 153
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "\" id=\"new_segment_cancel\"
         class=\"button-primary\"/>
      </p>

      </form>
    </script>

    <!-- New custom field logic -->
    ";
        // line 161
        $this->loadTemplate("form/custom_fields.html", "subscribers/importExport/import/step2.html", 161)->display($context);
        // line 162
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "subscribers/importExport/import/step2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 162,  229 => 161,  218 => 153,  213 => 151,  202 => 143,  196 => 140,  190 => 137,  183 => 133,  137 => 90,  124 => 80,  118 => 77,  108 => 70,  101 => 66,  92 => 60,  84 => 54,  82 => 47,  74 => 42,  70 => 41,  63 => 37,  59 => 36,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subscribers/importExport/import/step2.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\subscribers\\importExport\\import\\step2.html");
    }
}
