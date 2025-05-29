<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/Articles/Articles/edit.html.twig */
class __TwigTemplate_17071c58d7d7d4bc6f62d5e26776d0af extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'main' => [$this, 'block_main'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Articles/Articles/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modification de l'article";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    ";
        // line 12
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/dropzone.css"), "html", null, true);
        yield "\">
    <script type=\"text/javascript\" src='";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/date/dist/datepicker.min.css"), "html", null, true);
        yield "\">

    <script>
        tinymce.init({
            selector: 'textarea#description',
            height: 350,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
            ],

            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            browser_spellcheck: true,
            contextmenu: false,";
        // line 29
        if ((($context["lang"] ?? null) == "fr")) {
            // line 30
            yield "            language: 'fr_FR',";
        }
        // line 31
        yield "        });
    </script>
    <style>
        .tox-statusbar__branding {
            display: none;
        }
        label[for=\"meta_desc\"] {
            flex: none;
            padding-bottom: 1em;
            font-size: initial;
        }
    </style>

    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Modification de l'article</h4>
                    </div>
                    <div class=\"card-body card-block\">
                        <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"success\"
                             style=\"display:none\">
                            <i class=\"fa fa-check\"></i>
                            <i class=\"fa fa-check\"></i>
                            Article modifié avec succès<br>
                            <a href=\"?entity=Article&action=list&menuIndex=4&submenuIndex=0\" style=\"margin-left:50px\">
                                <span class=\"badge badge-pill badge-info\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.all-post"), "html", null, true);
        yield "</span>
                            </a>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>

                        <form action=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_post");
        yield "\" method=\"post\" class=\"\" id=\"article\">
                            <div class=\"form-group\">
                                <input type=\"text\" id=\"titre\" required name=\"titre\"
                                       value=\"";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69) == "fr")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "postTitle", [], "any", false, false, false, 69), "html", null, true);
        } else {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["contenu_en"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 69) == "postExcerpt")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 69), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "\"
                                       placeholder=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.titre"), "html", null, true);
        yield "\" class=\"form-control\">
                                <input type=\"hidden\" name=\"id\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\" id=\"id\">
                            </div>
                            <div class=\"form-group\">
                                <select name=\"categorie\" required class=\"form-control\">
                                    <option disabled>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.categorie"), "html", null, true);
        yield "</option>
                                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 77
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 77), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["relation"] ?? null), "termTaxonomyId", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 77))) {
                yield " selected ";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                </select>
                            </div>
                            <input type=\"hidden\" name=\"idImage\" value=\"";
        // line 81
        if (($context["img"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "id", [], "any", false, false, false, 81), "html", null, true);
        }
        yield "\"
                                   id=\"idImage\">

                            <div class=\"form-group\">
                                <select name=\"status\" required class=\"form-control\">
                                    <option disabled>Status</option>
                                    <option value=\"draft\" ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "postStatus", [], "any", false, false, false, 87) == "draft")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.draft"), "html", null, true);
        yield "</option>
                                    <option value=\"publish\" ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "postStatus", [], "any", false, false, false, 88) == "publish")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.publish"), "html", null, true);
        yield "</option>
                                    <option value=\"trash\" ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "postStatus", [], "any", false, false, false, 89) == "trash")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.trash"), "html", null, true);
        yield "</option>

                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"meta_desc\">Méta description</label>
                                <textarea name=\"meta_desc\" class=\"form-control border-form-control\" rows=\"3\" cols=\"70\"
                                          id=\"meta_desc\">";
        // line 96
        if ( !(null === ($context["meta_desc"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_desc"] ?? null), "getMetaValue", [], "any", false, false, false, 96)), "html", null, true);
        }
        yield "</textarea>
                            </div>

                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t<textarea name=\"description1\" placeholder=\"\" class=\"form-control\" rows=\"8\" cols=\"80\"
                                          id=\"description\">
\t\t\t\t\t\t\t\t\t";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 102), "locale", [], "any", false, false, false, 102) == "fr")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "postContent", [], "any", false, false, false, 102), "html", null, true);
        } else {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["contenu_en"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 102) == "postContentFiltered")) {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 102);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 103
        yield "\t\t\t\t\t\t\t\t</textarea>
                            </div>
                            <textarea name=\"description\" style=\"display:none\" class=\"form-control border-form-control\"
                                      rows=\"3\" cols=\"70\" id=\"article1\"></textarea>

                            <div class=\"form-group \">
                                ";
        // line 109
        if (($context["img"] ?? null)) {
            // line 110
            yield "                                    <p>Image de couverture actuel
                                        <br>
                                        <img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "guid", [], "any", false, false, false, 112), "html", null, true);
            yield "\" alt=\"\"
                                             style=\"width:100px; height:100px; border-radius:10px\">
                                    </p><br>
                                ";
        }
        // line 116
        yield "                                <div class=\"dropzone mt-2\" style=\"width:100%\"></div>
                            </div>

                            <div class=\"form-actions form-group\">
                                <button type=\"submit\" id=\"send\"
                                        class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.post"), "html", null, true);
        yield "
                                    <i class=\"ld ld-ring ld-spin\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/dropzone.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/date/dist/datepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\">
        let idImage = \$(\"#idImage\").val();
        let id = \$(\"#id\").val();
        let myDropzone = new Dropzone(\"div.dropzone\", {
            url: \"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload");
        yield "\",
            paramName: \"file\", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            uploadMultiple: true,
            parallelUploads: 1, // use it with uploadMultiple
            maxFiles: 1,
            autoProcessQueue: false,
            addRemoveLinks: true,
            acceptedFiles: \"image/*\",
            dictDefaultMessage: \"Modifié l'image de couverture\",
            dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
            dictRemoveFile: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.article.remove"), "html", null, true);
        yield "\",
            success: function (file, response) {
                suc = 1;
            }
        });


        \$('#article').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            let temp = tinymce.activeEditor.getContent();
            \$('#article1').val(temp);
            if (\$('#domaine').val() != '' && \$('#libelle').val() != '' && \$('#description').val() != '') {
                \$('#send').addClass('running');
                toastr.info('Envoie des données en cours...');

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&description=' + temp;

                if (myDropzone.files != \"\") {
                    myDropzone.processQueue();
                    myDropzone.on(\"successmultiple\", function (file, response) {
                        \$.ajax({
                            url: \$form.attr('action'),
                            type: \$form.attr('method'),
                            contentType: false,
                            processData: false,
                            data: data,
                            success: function (response) {
                                if (response > 0) {
                                    toastr.clear();
                                    toastr.success('Article modifié avec succès');
                                    \$('#success').show();
                                    \$('html,body').scrollTop(0);
                                    window.location = document.referrer;
                                } else if (response == 0) {
                                    \$('#send').removeClass('running');
                                    toastr.clear();
                                    toastr.error('Une erreur survenue');
                                }
                            },
                            error: function (response) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('Une erreur survenue');
                            }
                        });

                    });
                } else {
                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (response) {

                            if (response > 0) {
                                toastr.clear();
                                toastr.success('Article modifié avec succès');
// \$('#article').hide();
                                \$('#success').show();
                                \$('html,body').scrollTop(0);
                                //window.location = document.referrer;
                            } else if (response == 0) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error('";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" erreur "), "html", null, true);
        yield "');
                            }
                        },
                        error: function (response) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" erreur "), "html", null, true);
        yield "');
                        }
                    });
                }
            }
            return false;
        });

        toastr.options = {
            \"closeButton\": true,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-center\",
            \"preventDuplicates\": false,
            \"onclick\": null,
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"12000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        \$('[data-toggle=\"datepicker\"]').datepicker({
            language: '";
        // line 258
        if ((($context["lang"] ?? null) == "fr")) {
            yield "fr-Fr";
        } else {
            yield "en-GB";
        }
        yield "',
            format: 'dd/mm/yyyy',
            startDate: '";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["d"] ?? null), "d/m/Y", false), "html", null, true);
        yield "',
            autoHide: true
        });
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/Articles/Articles/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  494 => 260,  485 => 258,  456 => 232,  447 => 226,  376 => 158,  362 => 147,  354 => 142,  350 => 141,  346 => 140,  338 => 134,  331 => 133,  314 => 121,  307 => 116,  300 => 112,  296 => 110,  294 => 109,  286 => 103,  271 => 102,  260 => 96,  246 => 89,  238 => 88,  230 => 87,  219 => 81,  215 => 79,  200 => 77,  196 => 76,  192 => 75,  185 => 71,  181 => 70,  164 => 69,  158 => 66,  148 => 59,  118 => 31,  115 => 30,  113 => 29,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  77 => 12,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Articles/Articles/edit.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/Articles/Articles/edit.html.twig");
    }
}
