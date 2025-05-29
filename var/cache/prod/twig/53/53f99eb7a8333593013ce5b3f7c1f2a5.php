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

/* admin/MenusPages/slider.html.twig */
class __TwigTemplate_a74614ac29b99fd0c3532c1ddfa57ef2 extends Template
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
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/MenusPages/slider.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.slider.titre"), "html", null, true);
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
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-blog.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/dropzone.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <style media=\"screen\">
        header {
            height: 3%;
        }

        .navbar {
            background: none;
        }

        .form-actions {
            align-content: center;
        }

        #main-menu {
            font-size: 14px;
        }
    </style>

    <div class=\"content\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.slider.titre"), "html", null, true);
        yield "
                        </h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"container\">
                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 54
        if (($context["bloc1"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 54), "|||")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\"
                                             alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 1</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images1\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_1\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 74
            yield "                                                                <option ";
            if (($context["bloc1"] ?? null)) {
                if (((($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 74), "|||")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 74))) {
                    yield "selected";
                }
            }
            // line 75
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 75), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "locale", [], "any", false, false, false, 75) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 75) != ""))) {
                // line 76
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 76), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 76), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_1\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 106
        if (($context["bloc2"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 106), "|||")) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-musicien.jpg"), "html", null, true);
        }
        yield "\"
                                             alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div
                                            class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 2</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images2\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_2\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 127
            yield "                                                                <option ";
            if (($context["bloc2"] ?? null)) {
                if (((($_v3 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 127), "|||")) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 127))) {
                    yield "selected";
                }
                // line 128
                yield "                                                                        ";
            }
            // line 129
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 129), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 129), "locale", [], "any", false, false, false, 129) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 129) != ""))) {
                // line 130
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 130), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 130), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_2\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div
                                    class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 161
        if (($context["bloc3"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 161), "|||")) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[1] ?? null) : null), "html", null, true);
        } else {
            // line 162
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-production-musicale.jpg"), "html", null, true);
        }
        yield "\" alt=\"\"
                                             height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div
                                            class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 3</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images3\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_3\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 183
            yield "                                                                <option ";
            if (($context["bloc3"] ?? null)) {
                if (((($_v5 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 183), "|||")) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 183))) {
                    yield "selected";
                }
                // line 184
                yield "                                                                        ";
            }
            // line 185
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 185), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 185), "locale", [], "any", false, false, false, 185) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 185) != ""))) {
                // line 186
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 186), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 186), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_3\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div
                                    class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 217
        if (($context["bloc4"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 217), "|||")) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[1] ?? null) : null), "html", null, true);
        } else {
            // line 218
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-group-music.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div
                                            class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 4</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images4\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_4\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 238
            yield "                                                                <option ";
            if (($context["bloc4"] ?? null)) {
                if (((($_v7 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 238), "|||")) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 238))) {
                    yield "selected";
                }
                // line 239
                yield "                                                                        ";
            }
            // line 240
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 240), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 240), "locale", [], "any", false, false, false, 240) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 240) != ""))) {
                // line 241
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 241), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 241), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_4\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 268
        if (($context["bloc5"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 268), "|||")) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[1] ?? null) : null), "html", null, true);
        } else {
            // line 269
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-chorale.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 5</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images5\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_5\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 288
            yield "                                                                <option ";
            if (($context["bloc5"] ?? null)) {
                if (((($_v9 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 288), "|||")) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 288))) {
                    yield "selected";
                }
                // line 289
                yield "                                                                        ";
            }
            // line 290
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 290), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 290), "locale", [], "any", false, false, false, 290) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 290) != ""))) {
                // line 291
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 291), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 291), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_5\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 319
        if (($context["bloc6"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 319), "|||")) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[1] ?? null) : null), "html", null, true);
        } else {
            // line 320
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-stud-photo.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 6</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 331
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images6\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_6\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 339
            yield "                                                                <option ";
            if (($context["bloc6"] ?? null)) {
                if (((($_v11 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 339), "|||")) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 339))) {
                    yield "selected";
                }
                // line 340
                yield "                                                                        ";
            }
            // line 341
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 341), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 341), "locale", [], "any", false, false, false, 341) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 341) != ""))) {
                // line 342
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 342), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 342), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"dropzone\" id=\"dropzone_element_6\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 371
        if (($context["bloc7"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 371), "|||")) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[1] ?? null) : null), "html", null, true);
        } else {
            // line 372
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-realisation-vid.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 7</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images7\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_7\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 391
            yield "                                                                <option ";
            if (($context["bloc7"] ?? null)) {
                if (((($_v13 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 391), "|||")) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 391))) {
                    yield "selected";
                }
                // line 392
                yield "                                                                        ";
            }
            // line 393
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 393), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 393), "locale", [], "any", false, false, false, 393) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 393) != ""))) {
                // line 394
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 394), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 394), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_7\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 424
        if (($context["bloc8"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 424), "|||")) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[1] ?? null) : null), "html", null, true);
        } else {
            // line 425
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-evenementiels.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div
                                            class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 8</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 437
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images8\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_8\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 445
            yield "                                                                <option ";
            if (($context["bloc8"] ?? null)) {
                if (((($_v15 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 445), "|||")) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 445))) {
                    yield "selected";
                }
                // line 446
                yield "                                                                        ";
            }
            // line 447
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 447), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 447), "locale", [], "any", false, false, false, 447) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 447) != ""))) {
                // line 448
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 448), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 448), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_8\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class=\"col-md-4 mb-4 clearfix\">
                                <!-- Card -->
                                <div
                                        class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 477
        if (($context["bloc9"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 477), "|||")) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[1] ?? null) : null), "html", null, true);
        } else {
            // line 478
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-studio-video.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div
                                            class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image 9</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images9\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_9\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 497
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 498
            yield "                                                                <option ";
            if (($context["bloc9"] ?? null)) {
                if (((($_v17 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 498), "|||")) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 498))) {
                    yield "selected";
                }
                // line 499
                yield "                                                                        ";
            }
            // line 500
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 500), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 500), "locale", [], "any", false, false, false, 500) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 500) != ""))) {
                // line 501
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 501), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 501), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_9\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class=\"col-md-6 mb-12 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 529
        if (($context["bloc10"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc10"] ?? null), "optionValue", [], "any", false, false, false, 529), "html", null, true);
        } else {
            // line 530
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image Accueil</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 541
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images10\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_10\"/>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_10\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div class=\"col-md-6 mb-12 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 569
        if (($context["bloc11"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc11"] ?? null), "optionValue", [], "any", false, false, false, 569), "html", null, true);
        } else {
            // line 570
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "\" alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image Produits et Offres</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 581
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images11\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_11\"/>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_11\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>


                            <div class=\"col-md-6 mb-12 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card image -->
                                    <div class=\"view overlay\">
                                        <img class=\"card-img-top lazy\"
                                             data-src=\"";
        // line 609
        if (($context["bloc12"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc12"] ?? null), "optionValue", [], "any", false, false, false, 609), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "\"
                                             alt=\"\" height=\"200\">
                                        <a href=\"#!\">
                                            <div class=\"mask rgba-white-slight\"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Image Musique et Services</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 621
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_image_home");
        yield "\" method=\"post\"
                                                      class=\"accueil_images\" id=\"accueil_images12\">
                                                    <input hidden name=\"option_name\" value=\"accueil_bloc_12\"/>
                                                    <div class=\"form-group\">
                                                        <select name=\"categories\" class=\"form-control\" required>
                                                            <option value=\"\">Selectionner la categorie a Afficher
                                                            </option>
                                                            ";
        // line 628
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 629
            yield "                                                                <option ";
            if (($context["bloc12"] ?? null)) {
                if (((($_v18 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc12"] ?? null), "optionValue", [], "any", false, false, false, 629), "|||")) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[0] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 629))) {
                    yield "selected";
                }
                // line 630
                yield "                                                                        ";
            }
            // line 631
            yield "                                                                        value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "termTaxonomyId", [], "any", false, false, false, 631), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 631), "locale", [], "any", false, false, false, 631) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 631) != ""))) {
                // line 632
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 632), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 632), "html", null, true);
            }
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        yield "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group \">
                                                        <div class=\"dropzone\" id=\"dropzone_element_12\"
                                                             style=\"width:100%\"></div>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class=\"col-md-6 mb-12 clearfix\">
                                <!-- Card -->
                                <div class=\"card\">
                                    <!-- Card content -->
                                    <div class=\"card-body\">
                                        <!-- Title -->
                                        <h4 class=\"card-title\">Slogan Accueil</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <form action=\"";
        // line 663
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("slogan_homepage");
        yield "\" method=\"post\"
                                                      class=\"slogan_homepage\" id=\"slogan_homepage\">
                                                    <div class=\"form-group\">
                                                        <input class=\"form-control\"
                                                               value=\"";
        // line 667
        if (($context["slogan_homepage"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["slogan_homepage"] ?? null), "getOptionValue", [], "any", false, false, false, 667), "html", null, true);
        }
        yield "\"
                                                               type=\"text\" name=\"slogan_homepage_text\"
                                                               id=\"slogan_homepage_text\"/>
                                                    </div>
                                                    <div class=\"form-actions form-group\">
                                                        <button type=\"submit\" id=\"send\"
                                                                class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                            Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <div class=\"row col-md-12\">
                                <div class=\"col-md-6 mb-12 clearfix\">
                                    <!-- Card -->
                                    <div class=\"card\">
                                        <!-- Card content -->
                                        <div class=\"card-body\">
                                            <!-- Title -->
                                            <h4 class=\"card-title\">Encart 1 Accueil</h4>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <form action=\"";
        // line 694
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encart_homepage");
        yield "\" method=\"post\"
                                                          class=\"encart_homepage_1\" id=\"encart_homepage_1\">
                                                        <input hidden value=\"encart_homepage_1\"
                                                               name=\"encart_option_name\"/>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 700
        if ((array_key_exists("encart_homepage_1", $context) && ($context["encart_homepage_1"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_1"] ?? null), "optionValue", [], "any", false, false, false, 700), "|||")) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[0] ?? null) : null), "html", null, true);
        } else {
            yield "DÉCOUVREZ NOTRE UNIVERS";
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_title\"
                                                                   id=\"encart_1_title\"/>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 706
        if ((array_key_exists("encart_homepage_1", $context) && ($context["encart_homepage_1"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_1"] ?? null), "optionValue", [], "any", false, false, false, 706), "|||")) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[1] ?? null) : null), "html", null, true);
        } else {
            yield "Notre savoir-faire, nos expertises, nos produits et services.";
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_description\"
                                                                   id=\"encart_1_description\"/>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 712
        if ((array_key_exists("encart_homepage_1", $context) && ($context["encart_homepage_1"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_1"] ?? null), "optionValue", [], "any", false, false, false, 712), "|||")) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[2] ?? null) : null), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("marketing_details_univers_trust", ["slug" => "decouvrez-notre-savoir-faire"]);
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_url\"
                                                                   id=\"encart_1_url\"/>
                                                        </div>
                                                        <div class=\"form-actions form-group\">
                                                            <button type=\"submit\" id=\"send\"
                                                                    class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                                Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>

                                <div class=\"col-md-6 mb-12 clearfix\">
                                    <!-- Card -->
                                    <div class=\"card\">
                                        <!-- Card content -->
                                        <div class=\"card-body\">
                                            <!-- Title -->
                                            <h4 class=\"card-title\">Encart 2 Accueil</h4>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <form action=\"";
        // line 739
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encart_homepage");
        yield "\" method=\"post\"
                                                          class=\"encart_homepage_2\" id=\"encart_homepage_2\">
                                                        <input hidden value=\"encart_homepage_2\"
                                                               name=\"encart_option_name\"/>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 745
        if ((array_key_exists("encart_homepage_2", $context) && ($context["encart_homepage_2"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_2"] ?? null), "optionValue", [], "any", false, false, false, 745), "|||")) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[0] ?? null) : null), "html", null, true);
        } else {
            yield "DÉCOUVREZ NOTRE UNIVERS";
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_title\"
                                                                   id=\"encart_2_title\"/>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 751
        if ((array_key_exists("encart_homepage_2", $context) && ($context["encart_homepage_2"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_2"] ?? null), "optionValue", [], "any", false, false, false, 751), "|||")) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[1] ?? null) : null), "html", null, true);
        } else {
            yield "Notre savoir-faire, nos expertises, nos produits et services.";
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_description\"
                                                                   id=\"encart_2_description\"/>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input class=\"form-control\" required
                                                                   value=\"";
        // line 757
        if ((array_key_exists("encart_homepage_2", $context) && ($context["encart_homepage_2"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["encart_homepage_2"] ?? null), "optionValue", [], "any", false, false, false, 757), "|||")) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[2] ?? null) : null), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("marketing_details_univers_trust", ["slug" => "decouvrez-notre-savoir-faire"]);
        }
        yield "\"
                                                                   type=\"text\" name=\"encart_url\"
                                                                   id=\"encart_2_url\"/>
                                                        </div>
                                                        <div class=\"form-actions form-group\">
                                                            <button type=\"submit\" id=\"send\"
                                                                    class=\"btn btn-success btn-sm btn-lg ld-over-inverse \">
                                                                Enregistrer<i class=\"ld ld-ring ld-spin\"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        yield from [];
    }

    // line 785
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 786
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"
            integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\"
            integrity=\"sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazyload.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/dropzone.js"), "html", null, true);
        yield "\"></script>
    <!-- Tinymce editor -->
    <script type=\"text/javascript\" src='";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <script src=\"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            tinymce.init({
                selector: 'input#slogan_homepage_text',
                height: 350,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 809
        if ((($context["lang"] ?? null) == "fr")) {
            // line 810
            yield "                language: 'fr_FR',";
        }
        // line 811
        yield "            });
            tinymce.init({
                selector: 'input#encart_1_description',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 820
        if ((($context["lang"] ?? null) == "fr")) {
            // line 821
            yield "                language: 'fr_FR',";
        }
        // line 822
        yield "            });
            tinymce.init({
                selector: 'input#encart_2_description',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 831
        if ((($context["lang"] ?? null) == "fr")) {
            // line 832
            yield "                language: 'fr_FR',";
        }
        // line 833
        yield "            });

            let ll = new LazyLoad({
                elements_selector: \".lazy\",
            });
        })
        let myDropzone1 = new Dropzone(\"#dropzone_element_1\",
            {
                url: \"";
        // line 841
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
                dictDefaultMessage: \"Image\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                dictRemoveFile: \"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone2 = new Dropzone(\"#dropzone_element_2\",
            {
                url: \"";
        // line 860
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone3 = new Dropzone(\"#dropzone_element_3\",
            {
                url: \"";
        // line 879
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone4 = new Dropzone(\"#dropzone_element_4\",
            {
                url: \"";
        // line 898
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone5 = new Dropzone(\"#dropzone_element_5\",
            {
                url: \"";
        // line 917
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone6 = new Dropzone(\"#dropzone_element_6\",
            {
                url: \"";
        // line 936
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone7 = new Dropzone(\"#dropzone_element_7\",
            {
                url: \"";
        // line 955
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 965
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone8 = new Dropzone(\"#dropzone_element_8\",
            {
                url: \"";
        // line 974
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone9 = new Dropzone(\"#dropzone_element_9\",
            {
                url: \"";
        // line 993
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 1003
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone10 = new Dropzone(\"#dropzone_element_10\",
            {
                url: \"";
        // line 1012
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 1022
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone11 = new Dropzone(\"#dropzone_element_11\",
            {
                url: \"";
        // line 1031
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 1041
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });

        let myDropzone12 = new Dropzone(\"#dropzone_element_12\",
            {
                url: \"";
        // line 1050
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
                dictDefaultMessage: \"Image\",
                dictRemoveFile: \"";
        // line 1060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.supprimer"), "html", null, true);
        yield "\",
                dictFileTooBig: \"Ce fichier est trop grand, La taille max est 1 Mb\",
                success: function (file, response) {
                    suc = 1;
                }
            });


        \$('.slogan_homepage').on('submit', function (e) {
            // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            toastr.info('Envoie des données en cours...');

            let temp = tinymce.activeEditor.getContent();
            \$('#slogan_homepage_text').val(temp);
            let \$form = \$(this);
            let formData = (window.FormData) ? new FormData(\$form[0]) : null;
            let data = (formData !== null) ? formData : \$form.serialize();

            \$.ajax({
                url: \$form.attr('action'),
                type: \$form.attr('method'),
                contentType: false,
                processData: false,
                data: data,
                success: function (response) {
                    if (response != 0) {
                        toastr.clear();
                        toastr.success(\"";
        // line 1088
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                        window.location = '';
                    } else if (response == 0) {
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1093
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                    }
                },
                error: function (response) {
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.error(\"";
        // line 1099
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                }
            });
        });

        \$('.encart_homepage_1').on('submit', function (e) {
            // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            toastr.info('Envoie des données en cours...');

            let temp = tinymce.get(\"encart_1_description\").getContent();
            \$('#encart_1_description').val(temp);
            console.log(temp)
            let \$form = \$(this);
            let formData = (window.FormData) ? new FormData(\$form[0]) : null;
            let data = (formData !== null) ? formData : \$form.serialize();

            \$.ajax({
                url: \$form.attr('action'),
                type: \$form.attr('method'),
                contentType: false,
                processData: false,
                data: data,
                success: function (response) {
                    if (response != 0) {
                        toastr.clear();
                        toastr.success(\"";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                        window.location = '';
                    } else if (response == 0) {
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                    }
                },
                error: function (response) {
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.error(\"";
        // line 1136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                }
            });
        });

        \$('.encart_homepage_2').on('submit', function (e) {
            // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            toastr.info('Envoie des données en cours...');

            let temp = tinymce.get(\"encart_2_description\").getContent();
            \$('#encart_2_description').val(temp);
            console.log(temp)
            let \$form = \$(this);
            let formData = (window.FormData) ? new FormData(\$form[0]) : null;
            let data = (formData !== null) ? formData : \$form.serialize();

            \$.ajax({
                url: \$form.attr('action'),
                type: \$form.attr('method'),
                contentType: false,
                processData: false,
                data: data,
                success: function (response) {
                    if (response != 0) {
                        toastr.clear();
                        toastr.success(\"";
        // line 1162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                        window.location = '';
                    } else if (response == 0) {
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                    }
                },
                error: function (response) {
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.error(\"";
        // line 1173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("erreur"), "html", null, true);
        yield "\");
                }
            });
        });

        \$('.accueil_images').on('submit', function (e) {
            // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            toastr.info('Envoie des données en cours...');

            let \$form = \$(this);
            let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            let data = (formdata !== null) ? formdata : \$form.serialize();
            let myDropzone = '';
            if (\$form.attr('id') === 'accueil_images1') {
                myDropzone = myDropzone1;
            } else if (\$form.attr('id') === 'accueil_images2') {
                myDropzone = myDropzone2;
            } else if (\$form.attr('id') === 'accueil_images3') {
                myDropzone = myDropzone3;
            } else if (\$form.attr('id') === 'accueil_images4') {
                myDropzone = myDropzone4;
            } else if (\$form.attr('id') === 'accueil_images5') {
                myDropzone = myDropzone5;
            } else if (\$form.attr('id') === 'accueil_images6') {
                myDropzone = myDropzone6;
            } else if (\$form.attr('id') === 'accueil_images7') {
                myDropzone = myDropzone7;
            } else if (\$form.attr('id') === 'accueil_images8') {
                myDropzone = myDropzone8;
            } else if (\$form.attr('id') === 'accueil_images9') {
                myDropzone = myDropzone9;
            } else if (\$form.attr('id') === 'accueil_images10') {
                myDropzone = myDropzone10;
            } else if (\$form.attr('id') === 'accueil_images11') {
                myDropzone = myDropzone11;
            } else if (\$form.attr('id') === 'accueil_images12') {
                myDropzone = myDropzone12;
            }

            if (myDropzone.files != \"\") {
                myDropzone.processQueue();
                myDropzone.on(\"queuecomplete\", function (file, response) {
                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function (reponse) {
                            if (reponse != 0) {
                                toastr.clear();
                                toastr.success(\"";
        // line 1225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                                window.location = '';
                            } else if (reponse == 0) {
                                \$('#send').removeClass('running');
                                toastr.clear();
                                toastr.error(\"";
        // line 1230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.error"), "html", null, true);
        yield "\");
                            }
                        },
                        error: function (reponse) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 1236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.error"), "html", null, true);
        yield "\");
                        }
                    });
                });
            } else {
                toastr.clear();
                toastr.info('Choisissez l\\'image du bloc 1');
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
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/MenusPages/slider.html.twig";
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
        return array (  1912 => 1236,  1903 => 1230,  1895 => 1225,  1840 => 1173,  1831 => 1167,  1823 => 1162,  1794 => 1136,  1785 => 1130,  1777 => 1125,  1748 => 1099,  1739 => 1093,  1731 => 1088,  1700 => 1060,  1687 => 1050,  1675 => 1041,  1662 => 1031,  1650 => 1022,  1637 => 1012,  1625 => 1003,  1612 => 993,  1600 => 984,  1587 => 974,  1575 => 965,  1562 => 955,  1550 => 946,  1537 => 936,  1525 => 927,  1512 => 917,  1500 => 908,  1487 => 898,  1475 => 889,  1462 => 879,  1450 => 870,  1437 => 860,  1426 => 852,  1412 => 841,  1402 => 833,  1399 => 832,  1397 => 831,  1386 => 822,  1383 => 821,  1381 => 820,  1370 => 811,  1367 => 810,  1365 => 809,  1350 => 797,  1346 => 796,  1342 => 795,  1337 => 793,  1333 => 792,  1325 => 786,  1318 => 785,  1281 => 757,  1268 => 751,  1255 => 745,  1246 => 739,  1212 => 712,  1199 => 706,  1186 => 700,  1177 => 694,  1145 => 667,  1138 => 663,  1107 => 634,  1095 => 632,  1090 => 631,  1087 => 630,  1081 => 629,  1077 => 628,  1067 => 621,  1048 => 609,  1017 => 581,  1001 => 570,  997 => 569,  966 => 541,  950 => 530,  946 => 529,  918 => 503,  906 => 501,  901 => 500,  898 => 499,  892 => 498,  888 => 497,  878 => 490,  861 => 478,  857 => 477,  828 => 450,  816 => 448,  811 => 447,  808 => 446,  802 => 445,  798 => 444,  788 => 437,  771 => 425,  767 => 424,  737 => 396,  725 => 394,  720 => 393,  717 => 392,  711 => 391,  707 => 390,  697 => 383,  681 => 372,  677 => 371,  648 => 344,  636 => 342,  631 => 341,  628 => 340,  622 => 339,  618 => 338,  608 => 331,  592 => 320,  588 => 319,  560 => 293,  548 => 291,  543 => 290,  540 => 289,  534 => 288,  530 => 287,  520 => 280,  504 => 269,  500 => 268,  473 => 243,  461 => 241,  456 => 240,  453 => 239,  447 => 238,  443 => 237,  433 => 230,  416 => 218,  412 => 217,  381 => 188,  369 => 186,  364 => 185,  361 => 184,  355 => 183,  351 => 182,  341 => 175,  323 => 162,  319 => 161,  288 => 132,  276 => 130,  271 => 129,  268 => 128,  262 => 127,  258 => 126,  248 => 119,  228 => 106,  198 => 78,  186 => 76,  181 => 75,  174 => 74,  170 => 73,  160 => 66,  141 => 54,  127 => 43,  99 => 18,  95 => 17,  90 => 15,  86 => 14,  82 => 13,  77 => 12,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/MenusPages/slider.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/MenusPages/slider.html.twig");
    }
}
