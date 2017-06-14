<?php

/* subscribers/importExport/import.html */
class __TwigTemplate_4469a6353be0a3754c82f1dc36fa6c553ae21dda1c920934fa31cfa61a4dc633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("layout.html", "subscribers/importExport/import.html", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["csvDescription"] = $this->env->getExtension('MailPoet\Twig\I18n')->translate("This file needs to be formatted in a CSV style (comma-separated-values.) Look at some [link]examples on our support site[/link].");
        // line 2
        $context["csvKBLink"] = "<a target=\"_blank\" href=\"http://docs.mailpoet.com/article/126-importing-subscribers-with-csv-files\">";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"mailpoet_subscribers_import\" class=\"wrap\">
  <h1 class=\"title\">
    ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Import");
        echo "
    <a class=\"page-title-action\" href=\"?page=mailpoet-subscribers#/\">";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Back to Subscribers");
        echo "</a>
  </h1>
  <!-- STEP 1: method selection -->
  ";
        // line 11
        $this->loadTemplate("subscribers/importExport/import/step1.html", "subscribers/importExport/import.html", 11)->display($context);
        // line 12
        echo "  <!-- STEP 2: subscriber data manipulation -->
  ";
        // line 13
        $this->loadTemplate("subscribers/importExport/import/step2.html", "subscribers/importExport/import.html", 13)->display($context);
        // line 14
        echo "  <!-- STEP 3: results -->
  ";
        // line 15
        $this->loadTemplate("subscribers/importExport/import/step3.html", "subscribers/importExport/import.html", 15)->display($context);
        // line 16
        echo "</div>

";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("importExport.css");
        echo "

<script type=\"text/javascript\">
  var
    maxPostSize = '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["maxPostSize"]) ? $context["maxPostSize"] : null), "html", null, true);
        echo "',
    maxPostSizeBytes = '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["maxPostSizeBytes"]) ? $context["maxPostSizeBytes"] : null), "html", null, true);
        echo "',
    importData = {},
    mailpoetColumnsSelect2 = ";
        // line 25
        echo (isset($context["subscriberFieldsSelect2"]) ? $context["subscriberFieldsSelect2"] : null);
        echo ",
    mailpoetColumns = ";
        // line 26
        echo (isset($context["subscriberFields"]) ? $context["subscriberFields"] : null);
        echo ",
    mailpoetSegments = ";
        // line 27
        echo (isset($context["segments"]) ? $context["segments"] : null);
        echo ",
    // RFC 5322 standard; http://emailregex.com/
    emailRegex = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
</script>
";
    }

    // line 33
    public function block_translations($context, array $blocks = array())
    {
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("noMailChimpLists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No active lists found"), "serverError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Server error:"), "select" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select", "Form input type"), "csvKBLink" =>         // line 38
(isset($context["csvKBLink"]) ? $context["csvKBLink"] : null), "wrongFileFormat" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Only comma-separated (CSV) file formats are supported."), "maxPostSizeNotice" => twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("Your CSV is over %s and is too big to process. Please split the file into two or more sections."), array("%s" =>         // line 40
(isset($context["maxPostSize"]) ? $context["maxPostSize"] : null))), "dataProcessingError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your data could not be processed. Please make sure it is in the correct format."), "noValidRecords" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No valid records were found. This file needs to be formatted in a CSV style (comma-separated). Look at some [link]examples on our support site.[/link]"), "importNoticeSkipped" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s records had issues and were skipped."), "importNoticeInvalid" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s emails are not valid: %2\$s"), "importNoticeDuplicate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s emails appear more than once in your file: %2\$s"), "hideDetails" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Hide details"), "showDetails" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show more details"), "segmentSelectionRequired" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please select at least one list"), "addNewList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add new list"), "addNewField" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add new field"), "addNewColumuserColumnsn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add new list"), "userColumns" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("User fields"), "selectedValueAlreadyMatched" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The selected value is already matched to another field."), "confirmCorrespondingColumn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Confirm that this field corresponds to the selected field."), "columnContainInvalidElement" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("One of the fields contains an invalid email. Please fix it before continuing."), "january" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("January"), "february" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("February"), "march" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("March"), "april" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("April"), "may" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("May"), "june" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("June"), "july" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("July"), "august" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("August"), "september" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("September"), "october" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("October"), "november" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("November"), "december" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("December"), "noDateFieldMatch" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Do not match as a 'date field' if most of the rows for that field return the same error."), "emptyFirstRowDate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("First row date cannot be empty."), "verifyDateMatch" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Verify that the date in blue matches the original date."), "pm" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("PM"), "am" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("AM"), "dateMatchError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Error matching date"), "columnContainsInvalidDate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("One of the fields contains an invalid date. Please fix before continuing."), "listCreateError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Error adding a new list:"), "columnContainsInvalidElement" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("One of the fields contains an invalid email. Please fix before continuing."), "customFieldCreateError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom field could not be created"), "subscribersCreated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s subscribers added to %2\$s."), "subscribersUpdated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s existing subscribers were updated and added to %2\$s.")));
        // line 80
        echo "
";
    }

    public function getTemplateName()
    {
        return "subscribers/importExport/import.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 80,  105 => 40,  104 => 38,  103 => 34,  100 => 33,  91 => 27,  87 => 26,  83 => 25,  78 => 23,  74 => 22,  67 => 18,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  51 => 11,  45 => 8,  41 => 7,  37 => 5,  34 => 4,  30 => 3,  28 => 2,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subscribers/importExport/import.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\subscribers\\importExport\\import.html");
    }
}
