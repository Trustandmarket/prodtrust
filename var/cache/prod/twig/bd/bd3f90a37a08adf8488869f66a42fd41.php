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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_2ed80a0055029381fec72453dcef9307 extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_75de2bda6dc995bf0881f90389ddb051ffd4a747bf79ad4c7c36898e6152b8ab"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 19
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true)) : (yield ""));
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", ["index"], "method", false, false, false, 12);
            // line 13
            yield "        ";
            yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", ["index"], "method", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 15
($context["custom_page_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),             // line 5
($context["__internal_75de2bda6dc995bf0881f90389ddb051ffd4a747bf79ad4c7c36898e6152b8ab"] ?? null))));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
            // line 22
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 23
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 36
            yield "        </div>
    ";
        }
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 46
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24), "filters", [], "array", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["filters"] ?? null) : null), [])) : ([])));
        // line 25
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 26), "includeReferrer", [], "method", false, false, false, 26), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 27), "translationParameters", [], "any", false, false, false, 27), "EasyAdminBundle"), "html", null, true);
        if (($context["applied_filters"] ?? null)) {
            yield " <span class=\"text-primary\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["applied_filters"] ?? null)), "html", null, true);
            yield ")</span>";
        }
        // line 28
        yield "                    </a>
                    ";
        // line 29
        if (($context["applied_filters"] ?? null)) {
            // line 30
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 30), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 34
        yield "                </div>
            ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "        <div class=\"global-actions\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 42
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 42), ["action" => $context["action"]], false);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </div>
    ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 48
            yield "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 50
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 50), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "            </div>
        ";
        }
        // line 54
        yield "    ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        // line 59
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "get", ["sort"], "method", false, false, false, 59)));
        // line 60
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "get", ["sort"], "method", false, false, false, 60));
        // line 61
        yield "    ";
        $context["some_results_are_hidden"] = false;
        // line 62
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) != 0);
        // line 63
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 63), "isSearchEnabled", [], "any", false, false, false, 63);
        // line 64
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0);
        // line 65
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null));
        // line 66
        yield "
    <table class=\"table datagrid ";
        // line 67
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 68
        if ((($context["num_results"] ?? null) > 0)) {
            // line 69
            yield "            <thead>
            ";
            // line 70
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 103
            yield "            </thead>
        ";
        }
        // line 105
        yield "
        <tbody>
        ";
        // line 107
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 188
        yield "        </tbody>

        <tfoot>
        ";
        // line 191
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 193
        yield "        </tfoot>
    </table>

    ";
        // line 196
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) {
            // line 197
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 198
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 201
            yield "        </div>
    ";
        }
        // line 203
        yield "
    ";
        // line 204
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 207
        yield "
    ";
        // line 208
        if (($context["has_filters"] ?? null)) {
            // line 209
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 211
        yield "
    ";
        // line 212
        if (($context["has_batch_actions"] ?? null)) {
            // line 213
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "                <tr>
                    ";
        // line 72
        if (($context["has_batch_actions"] ?? null)) {
            // line 73
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 79
        yield "
                    ";
        // line 80
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 81
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 82
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 82)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 82)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 83
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 83), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 83)], "method", false, false, false, 83);
            // line 84
            yield "                        ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 84), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 84)], "method", false, false, false, 84) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 85
            yield "                        ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 86
            yield "
                        <th class=\"";
            // line 87
            yield ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 87)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 87), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v2 = ($context["class"] ?? null)) && is_string($_v3 = "field-") && str_starts_with($_v2, $_v3)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 87), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 87), "textDirection", [], "any", false, false, false, 87), "html", null, true);
            yield "\">
                            ";
            // line 88
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 88)) {
                // line 89
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 89) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 89), "html", null, true);
                yield "\">
                                    ";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 90);
                yield " <i class=\"fa fa-fw ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_icon"] ?? null), "html", null, true);
                yield "\"></i>
                                </a>
                            ";
            } else {
                // line 93
                yield "                                <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 93);
                yield "</span>
                            ";
            }
            // line 95
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
                    <th ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 98), "showEntityActionsAsDropdown", [], "any", false, false, false, 98)) {
            yield "width=\"10px\"";
        }
        yield " dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 98), "textDirection", [], "any", false, false, false, 98), "html", null, true);
        yield "\">
                        <span class=\"sr-only\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 99), "translationParameters", [], "any", false, false, false, 99), "EasyAdminBundle"), "html", null, true);
        yield "</span>
                    </th>
                </tr>
            ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 109
            yield "                ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 109)) {
                // line 110
                yield "                    ";
                $context["some_results_are_hidden"] = true;
                // line 111
                yield "                ";
            } else {
                // line 112
                yield "                    <tr data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 112), "html", null, true);
                yield "\">
                        ";
                // line 113
                if (($context["has_batch_actions"] ?? null)) {
                    // line 114
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 116), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 120
                yield "
                        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 122
                    yield "                            <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 122), "html_attr");
                    yield "\" class=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 122), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 122), "html", null, true);
                    yield "\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 122), "textDirection", [], "any", false, false, false, 122), "html", null, true);
                    yield "\">
                                ";
                    // line 123
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 123), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                yield "
                        ";
                // line 127
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 154
                yield "                    </tr>

                ";
            }
            // line 157
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 158
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 178
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "
            ";
        // line 180
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 181
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 182)) + 1), "html", null, true);
            yield "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 187
        yield "        ";
        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 128
        yield "                            <td class=\"actions ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 128), "showEntityActionsAsDropdown", [], "any", false, false, false, 128)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 129), "count", [], "any", false, false, false, 129) > 0)) {
            // line 130
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 130), "showEntityActionsAsDropdown", [], "any", false, false, false, 130)) {
                // line 131
                yield "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 134
                yield "                                                ";
                // line 135
                yield "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 142
                    yield "                                                    ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 142), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 142), "showEntityActionsAsDropdown", [], "any", false, false, false, 142)], false);
                    yield "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 147
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 148
                    yield "                                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 148), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 148), "showEntityActionsAsDropdown", [], "any", false, false, false, 148)], false);
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                                    ";
            }
            // line 151
            yield "                                ";
        }
        // line 152
        yield "                            </td>
                        ";
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 159
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 160
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 169
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169))) {
                // line 170
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 172), "translationParameters", [], "any", false, false, false, 172), "EasyAdminBundle"), "html", null, true);
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 176
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                ";
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        yield "        ";
        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 199
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 199), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        yield from [];
    }

    // line 204
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 205
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  781 => 205,  774 => 204,  766 => 199,  759 => 198,  754 => 192,  747 => 191,  742 => 177,  728 => 176,  721 => 172,  717 => 170,  715 => 169,  704 => 160,  686 => 159,  679 => 158,  673 => 152,  670 => 151,  667 => 150,  658 => 148,  653 => 147,  648 => 144,  639 => 142,  635 => 141,  627 => 135,  625 => 134,  621 => 131,  618 => 130,  616 => 129,  611 => 128,  604 => 127,  599 => 187,  592 => 183,  588 => 182,  585 => 181,  583 => 180,  580 => 179,  574 => 178,  571 => 158,  558 => 157,  553 => 154,  551 => 127,  548 => 126,  539 => 123,  526 => 122,  522 => 121,  519 => 120,  512 => 116,  508 => 114,  506 => 113,  501 => 112,  498 => 111,  495 => 110,  492 => 109,  473 => 108,  466 => 107,  457 => 99,  449 => 98,  446 => 97,  439 => 95,  433 => 93,  425 => 90,  420 => 89,  418 => 88,  406 => 87,  403 => 86,  400 => 85,  397 => 84,  394 => 83,  389 => 82,  386 => 81,  384 => 80,  381 => 79,  373 => 73,  371 => 72,  368 => 71,  361 => 70,  352 => 213,  350 => 212,  347 => 211,  341 => 209,  339 => 208,  336 => 207,  334 => 204,  331 => 203,  327 => 201,  325 => 198,  322 => 197,  320 => 196,  315 => 193,  313 => 191,  308 => 188,  306 => 107,  302 => 105,  298 => 103,  296 => 70,  293 => 69,  291 => 68,  287 => 67,  284 => 66,  281 => 65,  278 => 64,  275 => 63,  272 => 62,  269 => 61,  266 => 60,  263 => 59,  261 => 58,  254 => 57,  249 => 54,  245 => 52,  236 => 50,  232 => 49,  229 => 48,  226 => 47,  219 => 46,  213 => 44,  204 => 42,  200 => 41,  197 => 40,  190 => 39,  184 => 34,  176 => 30,  174 => 29,  171 => 28,  164 => 27,  158 => 26,  155 => 25,  152 => 24,  145 => 23,  139 => 46,  137 => 39,  134 => 38,  130 => 36,  128 => 23,  125 => 22,  122 => 21,  115 => 20,  110 => 11,  106 => 5,  105 => 15,  104 => 14,  102 => 13,  100 => 12,  98 => 11,  91 => 10,  80 => 8,  69 => 7,  65 => 4,  63 => 19,  61 => 5,  54 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
