<?php

/* newsletter/editor.html */
class __TwigTemplate_6524f9d33e522ef85b102f58e9c0c7b478d658847844df6ccee2b95a5bfee14d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "newsletter/editor.html", 1);
        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
            'after_css' => array($this, 'block_after_css'),
            'after_javascript' => array($this, 'block_after_javascript'),
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
    public function block_templates($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_tools_generic", "newsletter/templates/blocks/base/toolsGeneric.hbs");
        // line 7
        echo "
  ";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_block", "newsletter/templates/blocks/automatedLatestContent/block.hbs");
        // line 11
        echo "
  ";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_widget", "newsletter/templates/blocks/automatedLatestContent/widget.hbs");
        // line 15
        echo "
  ";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_settings", "newsletter/templates/blocks/automatedLatestContent/settings.hbs");
        // line 19
        echo "
  ";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_block", "newsletter/templates/blocks/button/block.hbs");
        // line 23
        echo "
  ";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_widget", "newsletter/templates/blocks/button/widget.hbs");
        // line 27
        echo "
  ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_settings", "newsletter/templates/blocks/button/settings.hbs");
        // line 31
        echo "
  ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block", "newsletter/templates/blocks/container/block.hbs");
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block_empty", "newsletter/templates/blocks/container/emptyBlock.hbs");
        // line 39
        echo "
  ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_one_column_widget", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
        // line 43
        echo "
  ";
        // line 44
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget.hbs");
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_three_column_widget", "newsletter/templates/blocks/container/threeColumnLayoutWidget.hbs");
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_settings", "newsletter/templates/blocks/container/settings.hbs");
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_column_settings", "newsletter/templates/blocks/container/columnSettings.hbs");
        // line 59
        echo "
  ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_block", "newsletter/templates/blocks/divider/block.hbs");
        // line 63
        echo "
  ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_widget", "newsletter/templates/blocks/divider/widget.hbs");
        // line 67
        echo "
  ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_settings", "newsletter/templates/blocks/divider/settings.hbs");
        // line 71
        echo "
  ";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_block", "newsletter/templates/blocks/footer/block.hbs");
        // line 75
        echo "
  ";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_widget", "newsletter/templates/blocks/footer/widget.hbs");
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_settings", "newsletter/templates/blocks/footer/settings.hbs");
        // line 83
        echo "
  ";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_block", "newsletter/templates/blocks/header/block.hbs");
        // line 87
        echo "
  ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_widget", "newsletter/templates/blocks/header/widget.hbs");
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_settings", "newsletter/templates/blocks/header/settings.hbs");
        // line 95
        echo "
  ";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_block", "newsletter/templates/blocks/image/block.hbs");
        // line 99
        echo "
  ";
        // line 100
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_widget", "newsletter/templates/blocks/image/widget.hbs");
        // line 103
        echo "
  ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_settings", "newsletter/templates/blocks/image/settings.hbs");
        // line 107
        echo "
  ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_block", "newsletter/templates/blocks/posts/block.hbs");
        // line 111
        echo "
  ";
        // line 112
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_widget", "newsletter/templates/blocks/posts/widget.hbs");
        // line 115
        echo "
  ";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings", "newsletter/templates/blocks/posts/settings.hbs");
        // line 119
        echo "
  ";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_display_options", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
        // line 123
        echo "
  ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection", "newsletter/templates/blocks/posts/settingsSelection.hbs");
        // line 127
        echo "
  ";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection_empty", "newsletter/templates/blocks/posts/settingsSelectionEmpty.hbs");
        // line 131
        echo "
  ";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_single_post", "newsletter/templates/blocks/posts/settingsSinglePost.hbs");
        // line 135
        echo "
  ";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block", "newsletter/templates/blocks/social/block.hbs");
        // line 139
        echo "
  ";
        // line 140
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block_icon", "newsletter/templates/blocks/social/blockIcon.hbs");
        // line 143
        echo "
  ";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_widget", "newsletter/templates/blocks/social/widget.hbs");
        // line 147
        echo "
  ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings", "newsletter/templates/blocks/social/settings.hbs");
        // line 151
        echo "
  ";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon", "newsletter/templates/blocks/social/settingsIcon.hbs");
        // line 155
        echo "
  ";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon_selector", "newsletter/templates/blocks/social/settingsIconSelector.hbs");
        // line 159
        echo "
  ";
        // line 160
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_styles", "newsletter/templates/blocks/social/settingsStyles.hbs");
        // line 163
        echo "
  ";
        // line 164
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_block", "newsletter/templates/blocks/spacer/block.hbs");
        // line 167
        echo "
  ";
        // line 168
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_widget", "newsletter/templates/blocks/spacer/widget.hbs");
        // line 171
        echo "
  ";
        // line 172
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_settings", "newsletter/templates/blocks/spacer/settings.hbs");
        // line 175
        echo "
  ";
        // line 176
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_block", "newsletter/templates/blocks/text/block.hbs");
        // line 179
        echo "
  ";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_widget", "newsletter/templates/blocks/text/widget.hbs");
        // line 183
        echo "
  ";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_settings", "newsletter/templates/blocks/text/settings.hbs");
        // line 187
        echo "
  ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_heading", "newsletter/templates/components/heading.hbs");
        // line 191
        echo "
  ";
        // line 192
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_save", "newsletter/templates/components/save.hbs");
        // line 195
        echo "
  ";
        // line 196
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_styles", "newsletter/templates/components/styles.hbs");
        // line 199
        echo "
  ";
        // line 200
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_newsletter_preview", "newsletter/templates/components/newsletterPreview.hbs");
        // line 203
        echo "
  ";
        // line 204
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar", "newsletter/templates/components/sidebar/sidebar.hbs");
        // line 207
        echo "
  ";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_content", "newsletter/templates/components/sidebar/content.hbs");
        // line 211
        echo "
  ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_layout", "newsletter/templates/components/sidebar/layout.hbs");
        // line 215
        echo "
  ";
        // line 216
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_preview", "newsletter/templates/components/sidebar/preview.hbs");
        // line 219
        echo "
  ";
        // line 220
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_styles", "newsletter/templates/components/sidebar/styles.hbs");
        // line 223
        echo "
";
    }

    // line 226
    public function block_content($context, array $blocks = array())
    {
        // line 227
        echo "<!-- Hidden heading for notices to appear under -->
<h1 style=\"display:none\">";
        // line 228
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Editor");
        echo "</h1>

<div id=\"mailpoet_editor\">
    <div id=\"mailpoet_editor_heading\"></div>
    <div class=\"mailpoet_breadcrumbs\">
      ";
        // line 233
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type");
        echo " &gt; ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template");
        echo " &gt; <strong>";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Designer");
        echo "</strong> &gt; ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send");
        echo "
    </div>
    <div class=\"clearfix\"></div>
    <div id=\"mailpoet_editor_main_wrapper\">
      <div id=\"mailpoet_editor_styles\">
      </div>
      <div id=\"mailpoet_editor_sidebar\"></div>
      <div id=\"mailpoet_editor_content_container\">
        <div class=\"mailpoet_newsletter_wrapper\">
          <div id=\"mailpoet_editor_content\"></div>
        </div>
      </div>
      <div class=\"clear\"></div>
    </div>
    <div id=\"mailpoet_editor_bottom\">
    </div>
  </div>

  <div class=\"mailpoet_layer_overlay\" style=\"display:none;\"></div>

  <div id=\"wp-link-backdrop\" style=\"display: none\"></div>
  <div
    id=\"wp-link-wrap\"
    class=\"wp-core-ui search-panel-visible\"
    style=\"display: none\"
  >
    <form id=\"wp-link\" tabindex=\"-1\">
      ";
        // line 260
        echo wp_nonce_field("internal-linking", "_ajax_linking_nonce", false);
        echo "
      <div id=\"link-modal-title\">
        ";
        // line 262
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert/edit link");
        echo "
        <div id=\"wp-link-close\" tabindex=\"0\"></div>
      </div>
      <div id=\"link-selector\">
        <div id=\"link-options\">
          <div>
            <label>
              <span>";
        // line 269
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Type");
        echo "</span>
              <select id=\"url-type-field\" name=\"urltype\">
                <option value=\"http://\">";
        // line 271
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link to a web page");
        echo "</option>
                <option value=\"[viewInBrowserUrl]\">";
        // line 272
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Browser version");
        echo "</option>
                <option value=\"[unsubscribeUrl]\">";
        // line 273
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubcribe page");
        echo "</option>
                <option value=\"[manageSubscriptionUrl]\">";
        // line 274
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage your subscription page");
        echo "</option>
              </select>
            </label>
          </div>
          <div id=\"link-href-field\">
            <label><span>";
        // line 279
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "</span><input id=\"url-field\" type=\"text\" name=\"href\" /></label>
          </div>
          <div class=\"mailpoet_hidden\">
            <label><span>";
        // line 282
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title");
        echo "</span><input id=\"link-title-field\" type=\"text\" name=\"linktitle\" /></label>
          </div>
          <div class=\"link-target mailpoet_hidden\">
            <label><span>&nbsp;</span><input type=\"checkbox\" id=\"link-target-checkbox\" /> ";
        // line 285
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open link in a new window/tab");
        echo "</label>
          </div>
        </div>
        <div id=\"search-panel\">
          <div class=\"link-search-wrapper\">
            <label>
              <span class=\"search-label\">";
        // line 291
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search your content");
        echo "</span>
              <input type=\"search\" id=\"search-field\" class=\"link-search-field\" autocomplete=\"off\" />
              <span class=\"spinner\"></span>
            </label>
          </div>
          <div id=\"search-results\" class=\"query-results\">
            <ul></ul>
            <div class=\"river-waiting\">
              <span class=\"spinner\"></span>
            </div>
          </div>
          <div id=\"most-recent-results\" class=\"query-results\">
            <div class=\"query-notice\"><em>";
        // line 303
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No search term specified. Showing recent items.");
        echo "</em></div>
            <ul></ul>
            <div class=\"river-waiting\">
              <span class=\"spinner\"></span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"submitbox\">
        <div id=\"wp-link-update\">
          <input type=\"submit\" value=\"";
        // line 313
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add Link");
        echo "\" class=\"button button-primary\" id=\"wp-link-submit\" name=\"wp-link-submit\">
        </div>
        <div id=\"wp-link-cancel\">
          <a class=\"submitdelete deletion\" href=\"#\">";
        // line 316
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "</a>
        </div>
      </div>
    </form>
  </div>
";
    }

    // line 323
    public function block_translations($context, array $blocks = array())
    {
        // line 324
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("failedToFetchAvailablePosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch available posts"), "failedToFetchRenderedPosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch rendered posts"), "shortcodesWindowTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a shortcode"), "unsubscribeLinkMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails must include an \"Unsubscribe\" link. Add a footer widget to your email to continue."), "newsletterPreviewEmailMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter an email address to send the preview newsletter to."), "newsletterPreviewSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your test email has been sent!"), "templateNameMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add a template name"), "templateDescriptionMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add a template description"), "templateSaved" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has been saved."), "templateSaveFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has not been saved, please try again"), "categoriesAndTags" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories & tags"), "noPostsToDisplay" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There is no content to display."), "previewShouldOpenInNewTab" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your preview should open in a new tab. Please ensure your browser is not blocking popups from this page."), "newsletterPreview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Preview"), "newsletterBodyIsCorrupted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Contents of this newsletter are corrupted and may be lost, you may need to add new content to this newsletter, or create a new one. If possible, please contact us and report this issue."), "saving" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saving..."), "unsavedChangesWillBeLost" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There are unsaved changes which will be lost if you leave this page."), "selectColor" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "select color"), "cancelColorSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Cancel", "cancel color selection")));
        // line 344
        echo "
";
    }

    // line 347
    public function block_after_css($context, array $blocks = array())
    {
        // line 348
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("newsletter_editor.css");
        // line 350
        echo "
";
    }

    // line 353
    public function block_after_javascript($context, array $blocks = array())
    {
        // line 354
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/tinymce/tinymce.jquery.min.js", "lib/tinymce/jquery.tinymce.min.js", "lib/mailpoet_shortcodes/plugin.js", "lib/wplink/plugin.js", "newsletter_editor.js");
        // line 360
        echo "

  <script type=\"text/javascript\">
    MailPoet.Modal.loading(true);

    var templates = {
      styles: Handlebars.compile(
        jQuery('#newsletter_editor_template_styles').html()
      ),
      save: Handlebars.compile(
        jQuery('#newsletter_editor_template_save').html()
      ),
      heading: Handlebars.compile(
        jQuery('#newsletter_editor_template_heading').html()
      ),

      sidebar: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar').html()
      ),
      sidebarContent: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_content').html()
      ),
      sidebarLayout: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_layout').html()
      ),
      sidebarStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_styles').html()
      ),
      sidebarPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_preview').html()
      ),
      newsletterPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_newsletter_preview').html()
      ),

      genericBlockTools: Handlebars.compile(
        jQuery('#newsletter_editor_template_tools_generic').html()
      ),

      containerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block').html()
      ),
      containerEmpty: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block_empty').html()
      ),
      oneColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_one_column_widget').html()
      ),
      twoColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_widget').html()
      ),
      threeColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_three_column_widget').html()
      ),
      containerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_settings').html()
      ),
      containerBlockColumnSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_column_settings').html()
      ),

      buttonBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_block').html()
      ),
      buttonInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_widget').html()
      ),
      buttonBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_settings').html()
      ),

      dividerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_block').html()
      ),
      dividerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_widget').html()
      ),
      dividerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_settings').html()
      ),

      footerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_block').html()
      ),
      footerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_widget').html()
      ),
      footerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_settings').html()
      ),

      headerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_block').html()
      ),
      headerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_widget').html()
      ),
      headerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_settings').html()
      ),

      imageBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_block').html()
      ),
      imageInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_widget').html()
      ),
      imageBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_settings').html()
      ),

      socialBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block').html()
      ),
      socialIconBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block_icon').html()
      ),
      socialInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_widget').html()
      ),
      socialBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings').html()
      ),
      socialSettingsIconSelector: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon_selector').html()
      ),
      socialSettingsIcon: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon').html()
      ),
      socialSettingsStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_styles').html()
      ),

      spacerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_block').html()
      ),
      spacerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_widget').html()
      ),
      spacerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_settings').html()
      ),

      automatedLatestContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_block').html()
      ),
      automatedLatestContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_widget').html()
      ),
      automatedLatestContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_settings').html()
      ),

      postsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_block').html()
      ),
      postsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_widget').html()
      ),
      postsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings').html()
      ),
      postSelectionPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection').html()
      ),
      emptyPostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection_empty').html()
      ),
      singlePostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_single_post').html()
      ),
      displayOptionsPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_display_options').html()
      ),

      textBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_block').html()
      ),
      textInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_widget').html()
      ),
      textBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_settings').html()
      )
    };
  </script>

  <script type=\"text/javascript\">
    var config = {
      availableStyles: {
        textSizes: [
          '9px', '10px', '11px', '12px', '13px', '14px', '15px', '16px',
          '17px', '18px', '19px', '20px', '21px', '22px', '23px', '24px'
        ],
        headingSizes: [
          '10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px',
          '26px', '30px', '36px', '40px'
        ],
        fonts: [
          'Arial',
          'Comic Sans MS',
          'Courier New',
          'Georgia',
          'Lucida',
          'Tahoma',
          'Times New Roman',
          'Trebuchet MS',
          'Verdana'
        ],
        socialIconSets: {
          'default': {
            'custom': '";
        // line 571
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 573
        echo "',
            'facebook': '";
        // line 574
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 576
        echo "',
            'twitter': '";
        // line 577
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 579
        echo "',
            'google-plus': '";
        // line 580
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Google-Plus.png");
        // line 582
        echo "',
            'youtube': '";
        // line 583
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Youtube.png");
        // line 585
        echo "',
            'website': '";
        // line 586
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Website.png");
        // line 588
        echo "',
            'email': '";
        // line 589
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Email.png");
        // line 591
        echo "',
            'instagram': '";
        // line 592
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Instagram.png");
        // line 594
        echo "',
            'pinterest': '";
        // line 595
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Pinterest.png");
        // line 597
        echo "',
            'linkedin': '";
        // line 598
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/LinkedIn.png");
        // line 600
        echo "'
          },
          'grey': {
            'custom': '";
        // line 603
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 605
        echo "',
            'facebook': '";
        // line 606
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Facebook.png");
        // line 608
        echo "',
            'twitter': '";
        // line 609
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Twitter.png");
        // line 611
        echo "',
            'google-plus': '";
        // line 612
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Google-Plus.png");
        // line 614
        echo "',
            'youtube': '";
        // line 615
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Youtube.png");
        // line 617
        echo "',
            'website': '";
        // line 618
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Website.png");
        // line 620
        echo "',
            'email': '";
        // line 621
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Email.png");
        // line 623
        echo "',
            'instagram': '";
        // line 624
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Instagram.png");
        // line 626
        echo "',
            'pinterest': '";
        // line 627
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Pinterest.png");
        // line 629
        echo "',
            'linkedin': '";
        // line 630
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/LinkedIn.png");
        // line 632
        echo "',
          },
          'circles': {
            'custom': '";
        // line 635
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 637
        echo "',
            'facebook': '";
        // line 638
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Facebook.png");
        // line 640
        echo "',
            'twitter': '";
        // line 641
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Twitter.png");
        // line 643
        echo "',
            'google-plus': '";
        // line 644
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Google-Plus.png");
        // line 646
        echo "',
            'youtube': '";
        // line 647
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Youtube.png");
        // line 649
        echo "',
            'website': '";
        // line 650
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Website.png");
        // line 652
        echo "',
            'email': '";
        // line 653
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Email.png");
        // line 655
        echo "',
            'instagram': '";
        // line 656
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Instagram.png");
        // line 658
        echo "',
            'pinterest': '";
        // line 659
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Pinterest.png");
        // line 661
        echo "',
            'linkedin': '";
        // line 662
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/LinkedIn.png");
        // line 664
        echo "',
          },
          'full-flat-roundrect': {
            'custom': '";
        // line 667
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 669
        echo "',
            'facebook': '";
        // line 670
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Facebook.png");
        // line 672
        echo "',
            'twitter': '";
        // line 673
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Twitter.png");
        // line 675
        echo "',
            'google-plus': '";
        // line 676
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Google-Plus.png");
        // line 678
        echo "',
            'youtube': '";
        // line 679
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Youtube.png");
        // line 681
        echo "',
            'website': '";
        // line 682
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Website.png");
        // line 684
        echo "',
            'email': '";
        // line 685
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Email.png");
        // line 687
        echo "',
            'instagram': '";
        // line 688
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Instagram.png");
        // line 690
        echo "',
            'pinterest': '";
        // line 691
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Pinterest.png");
        // line 693
        echo "',
            'linkedin': '";
        // line 694
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/LinkedIn.png");
        // line 696
        echo "',
          },
          'full-gradient-square': {
            'custom': '";
        // line 699
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 701
        echo "',
            'facebook': '";
        // line 702
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Facebook.png");
        // line 704
        echo "',
            'twitter': '";
        // line 705
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Twitter.png");
        // line 707
        echo "',
            'google-plus': '";
        // line 708
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Google-Plus.png");
        // line 710
        echo "',
            'youtube': '";
        // line 711
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Youtube.png");
        // line 713
        echo "',
            'website': '";
        // line 714
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Website.png");
        // line 716
        echo "',
            'email': '";
        // line 717
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Email.png");
        // line 719
        echo "',
            'instagram': '";
        // line 720
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Instagram.png");
        // line 722
        echo "',
            'pinterest': '";
        // line 723
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Pinterest.png");
        // line 725
        echo "',
            'linkedin': '";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/LinkedIn.png");
        // line 728
        echo "',
          },
          'full-symbol-color': {
            'custom': '";
        // line 731
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 733
        echo "',
            'facebook': '";
        // line 734
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Facebook.png");
        // line 736
        echo "',
            'twitter': '";
        // line 737
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Twitter.png");
        // line 739
        echo "',
            'google-plus': '";
        // line 740
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Google-Plus.png");
        // line 742
        echo "',
            'youtube': '";
        // line 743
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Youtube.png");
        // line 745
        echo "',
            'website': '";
        // line 746
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Website.png");
        // line 748
        echo "',
            'email': '";
        // line 749
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Email.png");
        // line 751
        echo "',
            'instagram': '";
        // line 752
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Instagram.png");
        // line 754
        echo "',
            'pinterest': '";
        // line 755
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Pinterest.png");
        // line 757
        echo "',
            'linkedin': '";
        // line 758
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/LinkedIn.png");
        // line 760
        echo "',
          },
          'full-symbol-black': {
            'custom': '";
        // line 763
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 765
        echo "',
            'facebook': '";
        // line 766
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Facebook.png");
        // line 768
        echo "',
            'twitter': '";
        // line 769
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Twitter.png");
        // line 771
        echo "',
            'google-plus': '";
        // line 772
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Google-Plus.png");
        // line 774
        echo "',
            'youtube': '";
        // line 775
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Youtube.png");
        // line 777
        echo "',
            'website': '";
        // line 778
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Website.png");
        // line 780
        echo "',
            'email': '";
        // line 781
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Email.png");
        // line 783
        echo "',
            'instagram': '";
        // line 784
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Instagram.png");
        // line 786
        echo "',
            'pinterest': '";
        // line 787
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Pinterest.png");
        // line 789
        echo "',
            'linkedin': '";
        // line 790
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/LinkedIn.png");
        // line 792
        echo "',
          },
          'full-symbol-grey': {
            'custom': '";
        // line 795
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 797
        echo "',
            'facebook': '";
        // line 798
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Facebook.png");
        // line 800
        echo "',
            'twitter': '";
        // line 801
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Twitter.png");
        // line 803
        echo "',
            'google-plus': '";
        // line 804
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Google-Plus.png");
        // line 806
        echo "',
            'youtube': '";
        // line 807
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Youtube.png");
        // line 809
        echo "',
            'website': '";
        // line 810
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Website.png");
        // line 812
        echo "',
            'email': '";
        // line 813
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Email.png");
        // line 815
        echo "',
            'instagram': '";
        // line 816
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Instagram.png");
        // line 818
        echo "',
            'pinterest': '";
        // line 819
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Pinterest.png");
        // line 821
        echo "',
            'linkedin': '";
        // line 822
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/LinkedIn.png");
        // line 824
        echo "',
          },
          'line-roundrect': {
            'custom': '";
        // line 827
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 829
        echo "',
            'facebook': '";
        // line 830
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Facebook.png");
        // line 832
        echo "',
            'twitter': '";
        // line 833
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Twitter.png");
        // line 835
        echo "',
            'google-plus': '";
        // line 836
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Google-Plus.png");
        // line 838
        echo "',
            'youtube': '";
        // line 839
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Youtube.png");
        // line 841
        echo "',
            'website': '";
        // line 842
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Website.png");
        // line 844
        echo "',
            'email': '";
        // line 845
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Email.png");
        // line 847
        echo "',
            'instagram': '";
        // line 848
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Instagram.png");
        // line 850
        echo "',
            'pinterest': '";
        // line 851
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Pinterest.png");
        // line 853
        echo "',
            'linkedin': '";
        // line 854
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/LinkedIn.png");
        // line 856
        echo "',
          },
          'line-square': {
            'custom': '";
        // line 859
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 861
        echo "',
            'facebook': '";
        // line 862
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Facebook.png");
        // line 864
        echo "',
            'twitter': '";
        // line 865
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Twitter.png");
        // line 867
        echo "',
            'google-plus': '";
        // line 868
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Google-Plus.png");
        // line 870
        echo "',
            'youtube': '";
        // line 871
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Youtube.png");
        // line 873
        echo "',
            'website': '";
        // line 874
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Website.png");
        // line 876
        echo "',
            'email': '";
        // line 877
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Email.png");
        // line 879
        echo "',
            'instagram': '";
        // line 880
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Instagram.png");
        // line 882
        echo "',
            'pinterest': '";
        // line 883
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Pinterest.png");
        // line 885
        echo "',
            'linkedin': '";
        // line 886
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/LinkedIn.png");
        // line 888
        echo "',
          },
        },
        dividers: [
          'hidden',
          'dotted',
          'dashed',
          'solid',
          'double',
          'groove',
          'ridge'
        ]
      },
      socialIcons: {
        'facebook': {
          title: 'Facebook',
          linkFieldName: '";
        // line 904
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.facebook.com',
        },
        'twitter': {
          title: 'Twitter',
          linkFieldName: '";
        // line 909
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.twitter.com',
        },
        'google-plus': {
          title: 'Google Plus',
          linkFieldName: '";
        // line 914
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://plus.google.com',
        },
        'youtube': {
          title: 'Youtube',
          linkFieldName: '";
        // line 919
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.youtube.com',
        },
        'website': {
          title: '";
        // line 923
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Website"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 924
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'email': {
          title: '";
        // line 928
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 929
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'instagram': {
          title: 'Instagram',
          linkFieldName: '";
        // line 934
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://instagram.com',
        },
        'pinterest': {
          title: 'Pinterest',
          linkFieldName: '";
        // line 939
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.pinterest.com',
        },
        'linkedin': {
          title: 'LinkedIn',
          linkFieldName: '";
        // line 944
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.linkedin.com',
        },
        'custom': {
          title: '";
        // line 948
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 949
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
      },
      blockDefaults: {
        automatedLatestContent: {
          amount: '5',
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 965
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 967
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: 'Read more', // 'link'|'button'
          readMoreButton: {
            text: '";
        // line 971
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            styles: {
              block: {
                backgroundColor: '#ffffff',
                borderColor: '#00ddff',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '120px',
                lineHeight: '30px',
                fontColor: '#00ddff',
                fontFamily: 'Arial',
                fontSize: '20px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        button: {
          text: '";
        // line 1007
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button"), "js"), "html", null, true);
        echo "',
          url: '',
          styles: {
            block: {
              backgroundColor: '#2ea1cd',
              borderColor: '#0074a2',
              borderWidth: '1px',
              borderRadius: '5px',
              borderStyle: 'solid',
              width: '180px',
              lineHeight: '40px',
              fontColor: '#ffffff',
              fontFamily: 'Verdana',
              fontSize: '18px',
              fontWeight: 'normal',
              textAlign: 'center',
            },
          },
        },
        container: {
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
          },
        },
        divider: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              padding: '13px',
              borderStyle: 'solid',
              borderWidth: '3px',
              borderColor: '#aaaaaa',
            },
          },
        },
        footer: {
          text: '<p><a href=\"[link:subscription_unsubscribe_url]\">";
        // line 1045
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe");
        echo "</a> | <a href=\"[link:subscription_manage_url]\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage subscription");
        echo "</a><br />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add your postal address here!");
        echo "</p>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'none',
            },
          },
        },
        image: {
          link: '',
          src: '',
          alt: '";
        // line 1065
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("An image of..."), "js"), "html", null, true);
        echo "',
          fullWidth: false,
          width: '281px',
          height: '190px',
          styles: {
            block: {
              textAlign: 'center',
            },
          },
        },
        posts: {
          amount: '8',
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          postStatus: 'publish', // 'draft'|'pending'|'private'|'publish'|'future'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1087
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1089
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'link', // 'link'|'button'
          readMoreText: 'Read more', // 'link'|'button'
          readMoreButton: {
            text: '";
        // line 1093
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            styles: {
              block: {
                backgroundColor: '#ffffff',
                borderColor: '#000000',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '120px',
                lineHeight: '30px',
                fontColor: '#000000',
                fontFamily: 'Arial',
                fontSize: '20px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        social: {
          iconSet: 'default',
          icons: [
          {
            type: 'socialIcon',
            iconType: 'facebook',
            link: 'http://www.facebook.com',
            image: '";
        // line 1135
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 1137
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1140
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Facebook"), "js"), "html", null, true);
        echo "',
          },
          {
            type: 'socialIcon',
            iconType: 'twitter',
            link: 'http://www.twitter.com',
            image: '";
        // line 1146
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 1148
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1151
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Twitter"), "js"), "html", null, true);
        echo "',
          },
          ],
        },
        spacer: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              height: '40px',
            },
          },
        },
        text: {
          text: '";
        // line 1164
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit this to insert text."), "js"), "html", null, true);
        echo "',
        },
        header: {
          text: '";
        // line 1167
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display problems?"), "js"), "html", null, true);
        echo "&nbsp;' +
            '<a href=\"[link:newsletter_view_in_browser_url]\">";
        // line 1168
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open this email in your web browser.");
        echo "</a>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'underline',
            },
          },
        },
      },
      shortcodes: ";
        // line 1186
        echo json_encode((isset($context["shortcodes"]) ? $context["shortcodes"] : null));
        echo ",
      sidepanelWidth: '331px',
      newsletterPreview: {
        width: '1024px',
        height: '768px'
      },
      validation: {
        validateUnsubscribeLinkPresent: true, // TODO: Add validation based on whether Mailpoet MTA is used or not
      },
      urls: {
        send: '";
        // line 1196
        echo admin_url(("admin.php?page=mailpoet-newsletters#/send/" . intval($this->env->getExtension('MailPoet\Twig\Functions')->params("id"))));
        echo "',
        imageMissing: '";
        // line 1197
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/image-missing.svg");
        // line 1199
        echo "',
      },
    };

    MailPoet.Ajax.post({
      api_version: window.mailpoet_api_version,
      endpoint: 'newsletters',
      action: 'get',
      data: {
        id: \"";
        // line 1208
        echo twig_escape_filter($this->env, intval($this->env->getExtension('MailPoet\Twig\Functions')->params("id")), "html", null, true);
        echo "\",
      }
    }).always(function() {
      MailPoet.Modal.loading(false);
    }).done(function(response) {
      EditorApplication.start({
        newsletter: response.data,
        config: config,
      });
    }).fail(function(response) {
      if (response.errors.length > 0) {
        MailPoet.Notice.error(
          response.errors.map(function(error) { return error.message; }),
          { scroll: true, static: true }
        );
      }
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "newsletter/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1643 => 1208,  1632 => 1199,  1630 => 1197,  1626 => 1196,  1613 => 1186,  1592 => 1168,  1588 => 1167,  1582 => 1164,  1566 => 1151,  1561 => 1148,  1559 => 1146,  1550 => 1140,  1545 => 1137,  1543 => 1135,  1498 => 1093,  1491 => 1089,  1486 => 1087,  1461 => 1065,  1434 => 1045,  1393 => 1007,  1354 => 971,  1347 => 967,  1342 => 965,  1323 => 949,  1319 => 948,  1312 => 944,  1304 => 939,  1296 => 934,  1288 => 929,  1284 => 928,  1277 => 924,  1273 => 923,  1266 => 919,  1258 => 914,  1250 => 909,  1242 => 904,  1224 => 888,  1222 => 886,  1219 => 885,  1217 => 883,  1214 => 882,  1212 => 880,  1209 => 879,  1207 => 877,  1204 => 876,  1202 => 874,  1199 => 873,  1197 => 871,  1194 => 870,  1192 => 868,  1189 => 867,  1187 => 865,  1184 => 864,  1182 => 862,  1179 => 861,  1177 => 859,  1172 => 856,  1170 => 854,  1167 => 853,  1165 => 851,  1162 => 850,  1160 => 848,  1157 => 847,  1155 => 845,  1152 => 844,  1150 => 842,  1147 => 841,  1145 => 839,  1142 => 838,  1140 => 836,  1137 => 835,  1135 => 833,  1132 => 832,  1130 => 830,  1127 => 829,  1125 => 827,  1120 => 824,  1118 => 822,  1115 => 821,  1113 => 819,  1110 => 818,  1108 => 816,  1105 => 815,  1103 => 813,  1100 => 812,  1098 => 810,  1095 => 809,  1093 => 807,  1090 => 806,  1088 => 804,  1085 => 803,  1083 => 801,  1080 => 800,  1078 => 798,  1075 => 797,  1073 => 795,  1068 => 792,  1066 => 790,  1063 => 789,  1061 => 787,  1058 => 786,  1056 => 784,  1053 => 783,  1051 => 781,  1048 => 780,  1046 => 778,  1043 => 777,  1041 => 775,  1038 => 774,  1036 => 772,  1033 => 771,  1031 => 769,  1028 => 768,  1026 => 766,  1023 => 765,  1021 => 763,  1016 => 760,  1014 => 758,  1011 => 757,  1009 => 755,  1006 => 754,  1004 => 752,  1001 => 751,  999 => 749,  996 => 748,  994 => 746,  991 => 745,  989 => 743,  986 => 742,  984 => 740,  981 => 739,  979 => 737,  976 => 736,  974 => 734,  971 => 733,  969 => 731,  964 => 728,  962 => 726,  959 => 725,  957 => 723,  954 => 722,  952 => 720,  949 => 719,  947 => 717,  944 => 716,  942 => 714,  939 => 713,  937 => 711,  934 => 710,  932 => 708,  929 => 707,  927 => 705,  924 => 704,  922 => 702,  919 => 701,  917 => 699,  912 => 696,  910 => 694,  907 => 693,  905 => 691,  902 => 690,  900 => 688,  897 => 687,  895 => 685,  892 => 684,  890 => 682,  887 => 681,  885 => 679,  882 => 678,  880 => 676,  877 => 675,  875 => 673,  872 => 672,  870 => 670,  867 => 669,  865 => 667,  860 => 664,  858 => 662,  855 => 661,  853 => 659,  850 => 658,  848 => 656,  845 => 655,  843 => 653,  840 => 652,  838 => 650,  835 => 649,  833 => 647,  830 => 646,  828 => 644,  825 => 643,  823 => 641,  820 => 640,  818 => 638,  815 => 637,  813 => 635,  808 => 632,  806 => 630,  803 => 629,  801 => 627,  798 => 626,  796 => 624,  793 => 623,  791 => 621,  788 => 620,  786 => 618,  783 => 617,  781 => 615,  778 => 614,  776 => 612,  773 => 611,  771 => 609,  768 => 608,  766 => 606,  763 => 605,  761 => 603,  756 => 600,  754 => 598,  751 => 597,  749 => 595,  746 => 594,  744 => 592,  741 => 591,  739 => 589,  736 => 588,  734 => 586,  731 => 585,  729 => 583,  726 => 582,  724 => 580,  721 => 579,  719 => 577,  716 => 576,  714 => 574,  711 => 573,  709 => 571,  496 => 360,  493 => 354,  490 => 353,  485 => 350,  482 => 348,  479 => 347,  474 => 344,  471 => 324,  468 => 323,  458 => 316,  452 => 313,  439 => 303,  424 => 291,  415 => 285,  409 => 282,  403 => 279,  395 => 274,  391 => 273,  387 => 272,  383 => 271,  378 => 269,  368 => 262,  363 => 260,  327 => 233,  319 => 228,  316 => 227,  313 => 226,  308 => 223,  306 => 220,  303 => 219,  301 => 216,  298 => 215,  296 => 212,  293 => 211,  291 => 208,  288 => 207,  286 => 204,  283 => 203,  281 => 200,  278 => 199,  276 => 196,  273 => 195,  271 => 192,  268 => 191,  266 => 188,  263 => 187,  261 => 184,  258 => 183,  256 => 180,  253 => 179,  251 => 176,  248 => 175,  246 => 172,  243 => 171,  241 => 168,  238 => 167,  236 => 164,  233 => 163,  231 => 160,  228 => 159,  226 => 156,  223 => 155,  221 => 152,  218 => 151,  216 => 148,  213 => 147,  211 => 144,  208 => 143,  206 => 140,  203 => 139,  201 => 136,  198 => 135,  196 => 132,  193 => 131,  191 => 128,  188 => 127,  186 => 124,  183 => 123,  181 => 120,  178 => 119,  176 => 116,  173 => 115,  171 => 112,  168 => 111,  166 => 108,  163 => 107,  161 => 104,  158 => 103,  156 => 100,  153 => 99,  151 => 96,  148 => 95,  146 => 92,  143 => 91,  141 => 88,  138 => 87,  136 => 84,  133 => 83,  131 => 80,  128 => 79,  126 => 76,  123 => 75,  121 => 72,  118 => 71,  116 => 68,  113 => 67,  111 => 64,  108 => 63,  106 => 60,  103 => 59,  101 => 56,  98 => 55,  96 => 52,  93 => 51,  91 => 48,  88 => 47,  86 => 44,  83 => 43,  81 => 40,  78 => 39,  76 => 36,  73 => 35,  71 => 32,  68 => 31,  66 => 28,  63 => 27,  61 => 24,  58 => 23,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  43 => 11,  41 => 8,  38 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/editor.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\editor.html");
    }
}
