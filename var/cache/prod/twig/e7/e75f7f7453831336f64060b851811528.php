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

/* admin/Annonces/Annonces/edit.html.twig */
class __TwigTemplate_f18bef3019407a745456004eff4765e0 extends Template
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
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/Annonces/Annonces/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Editer l'annonce
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css\"
          integrity=\"sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    ";
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/switcher/css/switcher.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/more.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tagsinput/tagify.css")), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/css/intlTelInput.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- owl carousel css -->
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-profile.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <script type=\"text/javascript\" src='";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <style media=\"screen\">
        .navbar {
            background: none;
        }

        html, body, header, .view {
            height: 5%;
        }
    </style>
    <div class=\"content mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Editer l'annonce</h4>
                    </div>
                    <div class=\"card-body card-block\">
                        <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"success\"
                             style=\"display:none\">
                            Annonce modifié avec succès
                            <br>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\" id=\"error\"
                             style=\"display:none\">
                            <span class=\"badge badge-pill badge-danger\">Error</span>
                            Erreur survenue lors de la création du compte
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <form action=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\" method=\"post\" id=\"updateProfile\"
                              enctype=\"multipart/form-data\">
                            <div class=\"row\">

                                <input type=\"hidden\" name=\"state\" id=\"state\" value=\"edition_admin\">
                                <input type=\"hidden\" name=\"sender\" value=\"admin\">
                                <input type=\"hidden\" name=\"idPostEdited\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"status\" required>
                                            <option disabled selected>Statut</option>
                                            <option value=\"draft\" ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_status", [], "any", false, false, false, 73) == "draft")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.draft"), "html", null, true);
        yield "</option>
                                            <option value=\"moderation\" ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_status", [], "any", false, false, false, 74) == "moderation")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.moderation"), "html", null, true);
        yield "</option>
                                            <option value=\"trash\" ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_status", [], "any", false, false, false, 75) == "trash")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.trash"), "html", null, true);
        yield "</option>
                                            <option value=\"publish\" ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_status", [], "any", false, false, false, 76) == "publish")) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.publish"), "html", null, true);
        yield "</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" required id=\"nom\" required name=\"titre\"
                                               value=\"";
        // line 83
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 83), "locale", [], "any", false, false, false, 83) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "titre_en", [], "any", false, false, false, 83) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "titre_en", [], "any", false, false, false, 83), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_title", [], "any", false, false, false, 83), "html", null, true);
        }
        yield "\"
                                               placeholder=\"Titre de l'annonce\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"form-group \">
                                        <input type=\"text\" id=\"tarif\" name=\"prix\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "prix", [], "any", false, false, false, 89), "html", null, true);
        yield "\"
                                               placeholder=\"Tarif \" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"user_id\" required>
                                            <option disabled selected>Utilisateur</option>
                                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 98
            yield "                                                ";
            if ((CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 98)) || CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 98)))) {
                // line 99
                yield "                                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 99), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 99) == CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_author", [], "any", false, false, false, 99))) {
                    yield " selected ";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "getEmailCanonical", [], "any", false, false, false, 99), "html", null, true);
                yield "</option>
                                                ";
            }
            // line 101
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                                        </select>
                                    </div>
                                </div>


                                <div class=\"col-md-3\">
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"categorie1\" id=\"categorie\" required>
                                            <option disabled selected>Catégorie</option>
                                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 112
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 112), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "parent", [], "any", false, false, false, 112) == CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 112))) {
                yield " selected ";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 112), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"souscategorie\" id=\"sous_categorie\" required
                                                value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "IdSousCategorie", [], "any", false, false, false, 120), "html", null, true);
        yield "\">
                                            <option disabled selected>Sous Catégorie</option>
                                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 123
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 123), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "term_taxonomy_id", [], "any", false, false, false, 123) == CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 123))) {
                yield " selected ";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 123), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                                        </select>
                                    </div>
                                </div>

                                <div class=\"col-md-12\">
                                    <h5>";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.description"), "html", null, true);
        yield "</h5>
                                    <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control border-dark\" style=\"width:100%\" id=\"description\"
                                                  name=\"description\" rows=\"4\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 134), "locale", [], "any", false, false, false, 134) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "content_en", [], "any", false, false, false, 134) != ""))) {
            // line 135
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "content_en", [], "any", false, false, false, 135), "html", null, true);
            yield "
                                            ";
        } else {
            // line 137
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "post_content", [], "any", false, false, false, 137), "html", null, true);
            yield "
                                            ";
        }
        // line 139
        yield "\t\t\t\t\t\t\t\t\t\t</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mt-2\">
                                    <h5>Images du Portfolio</h5>
                                    <div class=\"form-group\">
                                        <div style=\"width:100%\">
                                            <div class=\"border border-dark p-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 d-flex justify-content-center\">
                                                        <ul class=\"portfolio-ul\">
                                                            ";
        // line 150
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "gallery", [], "any", false, false, false, 150))) {
            // line 151
            yield "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "gallery", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 152
                yield "                                                                    <li style=\"background-image: url(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 152), "html", null, true);
                yield ");\"
                                                                        class=\"aimg\"></li>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                                                            ";
        }
        // line 156
        yield "                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <h6 class=\"control-label col-md-3\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-portfolio"), "html", null, true);
        yield "</h6>
                                                    <div class=\"col-md-8\">
                                                        <div class=\"row\">
                                                            <div id=\"coba\" class=\"row\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 mt-2\">
                                    <h5>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.video"), "html", null, true);
        yield "</h5>
                                    <div class=\"p-2\">
                                        <div class=\"border border-dark p-2\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 d-flex justify-content-center\">
                                                    <ul class=\"videos-ul\">
                                                        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "videos", [], "any", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 180
            yield "                                                            ";
            if (($context["v"] != "")) {
                // line 181
                yield "                                                                <li style=\"background-image: url('http://img.youtube.com/vi/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "/0.jpg');\"
                                                                    class=\"aimg\"></li>
                                                            ";
            }
            // line 184
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "                                                    </ul>
                                                </div>
                                            </div>
                                            <div id=\"newVideos\" class=\"row mt-3\">
                                                <div class=\"col-md-3\">
                                                    <h6>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "</h6>
                                                </div>
                                                <div class=\"col-md-9\">
                                                    <div id=\"newVideosRow\" class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group\">
                                                                <input type=\"text\"
                                                                       pattern=\"^(http(s)?:\\/\\/)?((w){3}.)?youtu(be|.be)?(\\.com)?\\/.+\"
                                                                       class=\"form-control border p-2\" name=\"new_vid[]\"
                                                                       placeholder=\"Add new YouTube video link\">
                                                            </div>
                                                            <a id=\"addScnt\" href=\"#\"
                                                               class=\"btn btn-md btn-warning\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add"), "html", null, true);
        yield "</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-actions form-group\">
                                <button type=\"submit\" id=\"send\" class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                    Modifier l'annonce<i class=\"ld ld-ring ld-spin\"></i>
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

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        yield "    ";
        yield from $this->yieldParentBlock("body_javascript", $context, $blocks);
        yield "
    <!-- jQuery plugin for spartan image picker -->
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js")), "html", null, true);
        yield "\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- jQuery plugin for spartan image picker -->
    <script type=\"text/javascript\"
            src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js")), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for input tags -->
    <script src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js")), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/js/intlTelInput.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Tinymce editor -->
    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>

    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script>
        function getUnique(array) {
            var uniqueArray = [];
            // Loop through array values
            for (i = 0; i < array.length; i++) {
                if (uniqueArray.indexOf(array[i]) === -1) {
                    uniqueArray.push(array[i]);
                }
            }
            return uniqueArray;
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(email);
        }

        function validatePhoneNumber(phone) {
            var re = /^(\\+|00)[0-9]{1,3}[0-9 ]{4,20}(?:x.+)?\$/;
            return re.test(phone);
        }

        // pattern=\"^(6|2)[. ]{0,1}[0-9 .]{8,13}(?:x.+)?\$\"
        \$(document).ready(function () {
            let docWidth = document.documentElement.offsetWidth;

            tinymce.init({
                selector: 'textarea#description',
                height: 350,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,
                language: 'fr_FR'
            });
            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });


            \$(function () {
                \$('.lazy').lazy();
            });

// Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: true,
                margin: 10
            });
// Video owlcarousel
            \$('#mesVideos .owl-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                nav: true,
                video: true,
                lazyLoad: false,
                center: true,
            });


// add/remove new video in the update section
            var scntDiv = \$('#newVideosRow');
            var i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"form-group\"> <input type=\"url\" class=\"form-control border p-2\" name=\"new_vid[]\" placeholder=\" ";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.supprimer"), "html", null, true);
        yield "</a></div>').appendTo(scntDiv);
                i++;
                return false;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () { // console.log(\"Am here\");
                if (i > 2) {
                    \$(this).parents('.col-md-4').remove();
                    i--;
                }
                return false;
            });

// console.log(\$(\"#addPortfolioUrl\").val());
// add new portfolio images
            \$(\"#coba\").spartanMultiImagePicker({
                fieldName: 'file[]',
                directUpload: {
                    status: false,
                    loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
// 'portfolio/";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 350), "get", ["_locale"], "method", false, false, false, 350), "html", null, true);
        yield "'
                    url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
                    additionalParam: {
                        name: 'portfolios[]'
                    },
                    success: function (data, textStatus, jqXHR) {
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                }
            });

// add new portfolio images
            \$(\"#coba2\").spartanMultiImagePicker({
                fieldName: 'images_secondaires[]'
            });
// Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
            });
// first thing turn Hide Menu Search bar
            \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
            \$(\"#searchMenuShowHide\").click(function () {
                \$(\"#searchMenu\").toggle(\"slide\");
            });

// first thing turn Hide \"Update section\" input field
            \$(\"#modifInfo\").hide();
// toggle on/off using \"Mofier mon profile\"
            \$(\"#modifierProfile\").click(function () {
                \$(\"#lectureInfo\").toggle(\"slide\");
                \$(\"#modifInfo\").toggle(\"slide\");
            });
// toggle on/off using \"Annuler les modification\"
            \$(\"#annulerModif\").click(function () {
                \$(\"#modifInfo\").toggle(\"slide\");
                \$(\"#lectureInfo\").toggle(\"slide\");

            });

            \$('#date').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$(\"div[role='wrapper']\").append(\"<label for='date'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Validate fields
//Format price
            \$(\"#tarif\").on({
                keyup: function () {
                    var myFloat = \$(\"#tarif\").val().replace(/[^0-9\\.{1,2}]+/g, \"\");
                    console.log(myFloat);
                    \$(\"#tarif\").val(myFloat);

                },
                blur: function () {
                    if (\$(this).val() == '') {
                        \$(this).val(0);
                    }
                },
                focus: function () {
                    let s = \$(this).val();
                    while (s.charAt(0) === '0') {
                        s = s.substr(1);
                        \$(this).val(s);
                    }
                }
            });


// Preview selected profile photo

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) { // \$('#blah').attr('src', e.target.result);
                        \$('#blah').html('<img class=\"img-fluid m-auto\" style=\"max-height:400px\" width=\"100%\" src=\"' + e.target.result + '\" >');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            \$(\"#imageUpload\").change(function () {
                readURL(this);
            });

        });
        // input tags
        \$('#competencesModif').tagify();

        // Modification du profil de l'utilisateur
        // list images from portfolio and video

        \$('#updateProfile').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();

            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            if (\$('#first_name').val() != '') {

                \$('#send').addClass('running');
                toastr.info(\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                let temp = tinymce.activeEditor.getContent();
                \$('#description').val(temp);
                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize();

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        if (response > 0) {
                            /*toastr.clear();
                            toastr.success(\"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");*/
\t\t\t\t\t\t\twindow.location = document.referrer;
                        } else if (response == 0) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.error"), "html", null, true);
        yield "\");
                    }
                });
            }

            return false;

        });

        \$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'objet\",
                text: \"Attention l'objet sera Supprimer et n'apparaitra plus sur le site\",
                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Supprimer\",
                cancelButtonText: \"Annuler\",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            }, function (isConfirm) {

                if (isConfirm) {
                    \$.ajax({
                        url: urlPath,
                        type: 'GET',
                        success: function (reponse) {
                            if (reponse == 1) {
                                swal(\"suppression terminée\", \"\", \"success\");
                                t.parents('li').hide();
                            } else {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }

                        },
                        error: function (reponse) {
                            swal(\"erreur de suppression\", \"\", \"error\");
                        }
                    });
                } else {
                    swal.close();
                }
            });
            return false;
        });


        \$(document).on('click', '.delete_port1', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: t.text(),
                text: \"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sure"), "html", null, true);
        yield "\",
                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Oui\",
                cancelButtonText: \"Annuler\",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            }, function (isConfirm) {

                if (isConfirm) {

                    \$.ajax({
                        url: urlPath,
                        type: 'GET',
                        success: function (reponse) {
                            if (reponse > 0) {
                                swal(\"Action effectuée avec succès.\", \"\", \"success\");
                            } else {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }

                        },
                        error: function (reponse) {
                            swal(\"erreur de suppression\", \"\", \"error\");
                        }

                    });

                } else {
                    swal.close();
                }
            });


            return false;

        });

        \$(document).on('click', '.delete_port2', function (e) {
            var urlPath = '';
// On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            toastr.info('";
        // line 589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" systeme.compte.en - cours "), "html", null, true);
        yield "');
            if (\$('#horns:checkbox:checked').length > 0) {
                urlPath = \$(\"#hornsUrlDeleteAll\").val();
                console.log(urlPath);
            } else {
                urlPath = \$(\"#hornsUrlDelete\").val();
            }

            \$.ajax({
                url: urlPath,
                type: 'GET',
                success: function (reponse) {
                    if (reponse == 1) {
                        toastr.clear();
                        toastr.success(\"";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.succes"), "html", null, true);
        yield "\");
                        window.location = \"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index_url"] ?? null), "html", null, true);
        yield "\";
                    }
                },
                error: function (reponse) {
                    toastr.clear();
                    toastr.error(\"";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.error"), "html", null, true);
        yield "\");
                }

            });


        });


        \$(document).on('change', '#categorie', function (e) { // On empeche le navigateur de soumettre le formulaire

            e.preventDefault();
            var url1 = '/profil-utilisateur/";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 621), "get", ["_locale"], "method", false, false, false, 621), "html", null, true);
        yield "/sous_categorie/' + \$(this).val() + '?o=1';

            toastr.info('Recherche des sous catégories...');
            \$.ajax({
                url: url1,
                type: 'get',
                success: function (reponse) {
                    toastr.clear();
                    \$('#sous_categorie').html(reponse);
                },
                error: function (reponse) {
                    toastr.clear();
                }

            });

        });


        \$(document).on('click', '#brouillon', function (e) { // On empeche le navigateur de soumettre le formulaire

            e.preventDefault();
            \$('#state').val('brouillon');
            \$('#updateProfile').submit();


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

        var input = document.querySelector(\"#telephone,#tell\");
        var input1 = document.querySelector(\"#tell\");
        window.intlTelInput(input, {
            autoHideDialCode: true,
            initialCountry: \"fr\",
            nationalMode: false,
            formatOnDisplay: false,
// separateDialCode: true,
            utilsScript: \"/assets/phone/js/utils.js\"
        });

        window.intlTelInput(input1, {
            autoHideDialCode: true,
            initialCountry: \"fr\",
            nationalMode: false,
            formatOnDisplay: false,
// separateDialCode: true,
            utilsScript: \"/assets/phone/js/utils.js\"
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
        return "admin/Annonces/Annonces/edit.html.twig";
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
        return array (  948 => 621,  933 => 609,  925 => 604,  921 => 603,  904 => 589,  857 => 545,  797 => 488,  788 => 482,  780 => 477,  760 => 460,  647 => 350,  622 => 330,  531 => 242,  527 => 241,  523 => 240,  518 => 238,  514 => 237,  509 => 235,  499 => 228,  491 => 224,  484 => 223,  458 => 202,  443 => 190,  436 => 185,  430 => 184,  423 => 181,  420 => 180,  416 => 179,  407 => 173,  391 => 160,  385 => 156,  382 => 155,  372 => 152,  367 => 151,  365 => 150,  352 => 139,  346 => 137,  340 => 135,  338 => 134,  331 => 130,  324 => 125,  309 => 123,  305 => 122,  300 => 120,  292 => 114,  277 => 112,  273 => 111,  262 => 102,  256 => 101,  244 => 99,  241 => 98,  237 => 97,  226 => 89,  213 => 83,  199 => 76,  191 => 75,  183 => 74,  175 => 73,  167 => 68,  158 => 62,  121 => 28,  117 => 27,  108 => 21,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  78 => 13,  72 => 6,  65 => 5,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Annonces/Annonces/edit.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/Annonces/Annonces/edit.html.twig");
    }
}
