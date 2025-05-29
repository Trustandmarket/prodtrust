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

/* admin/dashboard.html.twig */
class __TwigTemplate_cb80cfe43d3e8c23a2d54bb08aff00f1 extends Template
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
            'content_footer' => [$this, 'block_content_footer'],
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
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.dashboard"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/normalize.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/themify-icons.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/bootstrap.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/pe-icon-7-filled.css"), "html", null, true);
        yield "\" />
<link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/weather/css/weather-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
";
        // line 15
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/charts/chartist.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/more.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/style_admin.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
<style>
.menu {font-size: 14px;}
</style>
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-4\">
                            <i class=\"pe-7f-users\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["users"] ?? null), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.users"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-1\">
                            <i class=\"pe-7f-speaker\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["post"] ?? null)), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.annonce"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-2\">
                            <i class=\"pe-7f-cart\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["order"] ?? null)), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.orders"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"stat-widget-five\">
                        <div class=\"stat-icon dib flat-color-3\">
                            <i class=\"pe-7f-pen\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"text-left dib\">
                                <div class=\"stat-text\"><span class=\"count\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["article"] ?? null)), "html", null, true);
        yield "</span></div>
                                <div class=\"stat-heading\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.article"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"box-title\">Evolution des annonces / commandes au cours de l'année ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card-body\">
                            <div id=\"traffic-chart\" class=\"traffic-chart\"></div>
                            <b style=\"color: #f48684;\"> Annonces</b> |
                            <b style=\"color: #93cf96;\">Commandes</b>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\"></div>
            </div>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "    Made with 🤍 by Kbr-Global Tech Team
";
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "<script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
";
        // line 125
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/popper.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/plugins.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/main.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chartist/chartist.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/chartist/chartist-plugin-legend.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.pie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/flot-chart/jquery.flot.spline.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/lib/moment/moment.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/calendar/fullcalendar-init.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
var year=";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ";

let traffic = document.getElementById('traffic-chart')
            // Traffic Chart using chartist
            console.log(traffic.length)
              var j=f=m=a=ma=ju=jul=au=sep=oc=no=de=0;
              var j1=f1=m1=a1=ma1=ju1=jul1=au1=sep1=oc1=no1=de1=0;

              ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 148
            yield "              if (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 148), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 148), "m"), "html", null, true);
            yield "==1) {j+=1;}
              if (";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 149), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 149), "m"), "html", null, true);
            yield "==2) {f+=1;}
              if (";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 150), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 150), "m"), "html", null, true);
            yield "==3) {m+=1;}
              if (";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 151), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 151), "m"), "html", null, true);
            yield "==4) {a+=1;}
              if (";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 152), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 152), "m"), "html", null, true);
            yield "==5) {ma+=1;}
              if (";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 153), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 153), "m"), "html", null, true);
            yield "==6) {ju+=1;}
              if (";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 154), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 154), "m"), "html", null, true);
            yield "==7) {jul+=1;}
              if (";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 155), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 155), "m"), "html", null, true);
            yield "==8) {au+=1;}
              if (";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 156), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 156), "m"), "html", null, true);
            yield "==9) {sep+=1;}
              if (";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 157), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 157), "m"), "html", null, true);
            yield "==10) {oc+=1;}
              if (";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 158), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 158), "m"), "html", null, true);
            yield "==11) {no+=1;}
              if (";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 159), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 159), "m"), "html", null, true);
            yield "==12) {de+=1;}
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "
              ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["post"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 163
            yield "              if (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 163), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 163), "m"), "html", null, true);
            yield "==1) {j1+=1;}
              if (";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 164), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 164), "m"), "html", null, true);
            yield "==2) {f1+=1;}
              if (";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 165), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 165), "m"), "html", null, true);
            yield "==3) {m1+=1;}
              if (";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 166), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 166), "m"), "html", null, true);
            yield "==4) {a1+=1;}
              if (";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 167), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 167), "m"), "html", null, true);
            yield "==5) {ma1+=1;}
              if (";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 168), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 168), "m"), "html", null, true);
            yield "==6) {ju1+=1;}
              if (";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 169), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 169), "m"), "html", null, true);
            yield "==7) {jul1+=1;}
              if (";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 170), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 170), "m"), "html", null, true);
            yield "==8) {au1+=1;}
              if (";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 171), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 171), "m"), "html", null, true);
            yield "==9) {sep1+=1;}
              if (";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 172), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 172), "m"), "html", null, true);
            yield "==10) {oc1+=1;}
              if (";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 173), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 173), "m"), "html", null, true);
            yield "==11) {no1+=1;}
              if (";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 174), "Y"), "html", null, true);
            yield "==year && ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "postDate", [], "any", false, false, false, 174), "m"), "html", null, true);
            yield "==12) {de1+=1;}
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                  series: [
                    [j, f, m, a, ma, ju, jul, au, sep, oc, no, de],
                    [j1, f1, m1, a1, ma1, ju1, jul1, au1, sep1, oc1, no1, de1]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            // Traffic Chart using chartist End




    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.html.twig";
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
        return array (  495 => 176,  485 => 174,  479 => 173,  473 => 172,  467 => 171,  461 => 170,  455 => 169,  449 => 168,  443 => 167,  437 => 166,  431 => 165,  425 => 164,  418 => 163,  414 => 162,  411 => 161,  401 => 159,  395 => 158,  389 => 157,  383 => 156,  377 => 155,  371 => 154,  365 => 153,  359 => 152,  353 => 151,  347 => 150,  341 => 149,  334 => 148,  330 => 147,  319 => 139,  314 => 137,  310 => 136,  306 => 135,  302 => 134,  298 => 133,  294 => 132,  290 => 131,  286 => 130,  281 => 128,  277 => 127,  273 => 126,  268 => 125,  265 => 123,  258 => 122,  252 => 119,  245 => 118,  222 => 99,  206 => 86,  202 => 85,  183 => 69,  179 => 68,  159 => 51,  155 => 50,  136 => 34,  132 => 33,  114 => 18,  110 => 17,  106 => 16,  101 => 15,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/dashboard.html.twig");
    }
}
