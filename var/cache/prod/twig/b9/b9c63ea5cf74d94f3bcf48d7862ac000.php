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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_03589fc98b68ee41fc5a474f20fd1163 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<nav id=\"main-menu\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('main_menu_before', $context, $blocks);
        // line 4
        yield "
    <ul class=\"menu\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('main_menu', $context, $blocks);
        // line 27
        yield "    </ul>

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('main_menu_after', $context, $blocks);
        // line 30
        yield "</nav>

";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            yield "                ";
            yield from $this->unwrap()->yieldBlock('menu_item', $context, $blocks);
            // line 25
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "                    <li class=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 9)) ? ("menu-header") : ("menu-item"));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 9)) ? ("has-submenu") : (""));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 9), "isSelected", [($context["menuItem"] ?? null)], "method", false, false, false, 9)) ? ("active") : (""));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 9), "isExpanded", [($context["menuItem"] ?? null)], "method", false, false, false, 9)) ? ("expanded") : (""));
        yield "\">
                        ";
        // line 10
        yield $this->getTemplateForMacro("macro_render_menu_item", $context, 10, $this->getSourceContext())->macro_render_menu_item(...[($context["menuItem"] ?? null)]);
        yield "

                        ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 12)) {
            // line 13
            yield "                            <ul class=\"submenu\">
                                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 14));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 15
                yield "                                    ";
                yield from $this->unwrap()->yieldBlock('menu_subitem', $context, $blocks);
                // line 20
                yield "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "                            </ul>
                        ";
        }
        // line 23
        yield "                    </li>
                ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu_subitem(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "                                        <li class=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 16)) ? ("menu-header") : ("menu-item"));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 16), "isSelected", [($context["menuSubItem"] ?? null)], "method", false, false, false, 16)) ? ("active") : (""));
        yield "\">
                                            ";
        // line 17
        yield $this->getTemplateForMacro("macro_render_menu_item", $context, 17, $this->getSourceContext())->macro_render_menu_item(...[($context["menuSubItem"] ?? null)]);
        yield "
                                        </li>
                                    ";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 32
    public function macro_render_menu_item($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 33
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 33)) {
                // line 34
                yield "        <span class=\"menu-header-contents\">
            ";
                // line 35
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 35))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 35), "html", null, true);
                    yield "\"></i>";
                }
                // line 36
                yield "            <span class=\"menu-item-label position-relative ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 36), "html", null, true);
                yield "\">
                ";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 37);
                yield "
            </span>
            ";
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 39)) {
                    // line 40
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "cssClass", [], "any", false, false, false, 40), "html", null, true);
                    yield "\" style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "htmlStyle", [], "any", false, false, false, 40), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40), "content", [], "any", false, false, false, 40), "html", null, true);
                    yield "</span>
            ";
                }
                // line 42
                yield "        </span>
    ";
            } else {
                // line 44
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 44), "html", null, true);
                yield "\" class=\"menu-item-contents ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 44)) ? ("submenu-toggle") : (""));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 44), "html", null, true);
                yield "\" target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 44), "html", null, true);
                yield "\" rel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 44), "html", null, true);
                yield "\" referrerpolicy=\"origin-when-cross-origin\">
            ";
                // line 45
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 45))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 45), "html", null, true);
                    yield "\"></i>";
                }
                // line 46
                yield "            <span class=\"menu-item-label position-relative\">
                ";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 47);
                yield "
            </span>
            ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 49)) {
                    yield "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 50
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 50)) {
                    // line 51
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "cssClass", [], "any", false, false, false, 51), "html", null, true);
                    yield "\" style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "htmlStyle", [], "any", false, false, false, 51), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51), "content", [], "any", false, false, false, 51), "html", null, true);
                    yield "</span>
            ";
                }
                // line 53
                yield "        </a>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  326 => 53,  316 => 51,  313 => 50,  309 => 49,  304 => 47,  301 => 46,  295 => 45,  282 => 44,  278 => 42,  268 => 40,  266 => 39,  261 => 37,  256 => 36,  250 => 35,  247 => 34,  244 => 33,  232 => 32,  222 => 29,  214 => 17,  207 => 16,  200 => 15,  194 => 23,  190 => 21,  176 => 20,  173 => 15,  156 => 14,  153 => 13,  151 => 12,  146 => 10,  135 => 9,  128 => 8,  123 => 26,  109 => 25,  106 => 8,  88 => 7,  81 => 6,  71 => 3,  64 => 30,  62 => 29,  58 => 27,  56 => 6,  52 => 4,  50 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/vendor/easycorp/easyadmin-bundle/src/Resources/views/menu.html.twig");
    }
}
